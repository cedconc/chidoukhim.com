<?php

namespace App\Http\Controllers;

use App\Models\Chidour;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $q =  User::where('chatrane', false)->whereNotNull('email_verified_at')->where('completed', true);

        $genre = $request->genre;
        $niveau_religieux = $request->niveau_religieux;
        $etude = $request->etude;
        $ville = $request->ville;
        $pay = $request->pay;
        $profession = $request->profession;
        $nb_enfants = $request->nb_enfants;
        $statut_marital = $request->statut_marital;
        $delocaliser = $request->delocaliser;
        $a_propos = $request->a_propos;
        $my_profil = $request->my_profil;
        $langue = $request->langue;

        $professions = User::whereNotNull('profession')->select('profession')->orderBy('profession', 'ASC')->groupBy('profession')->get();
        $villes = User::whereNotNull('ville')->select('ville')->orderBy('ville', 'ASC')->groupBy('ville')->get();
        $pays = User::whereNotNull('pays')->select('pays')->orderBy('pays', 'ASC')->groupBy('pays')->get();


        if( Auth::user()->chatrane == 1 ){
            if( !is_null($genre)){
                $q->where('genre', $genre);
            }
        }else{
            if( Auth::user()->genre == 'Homme'){
                $q->where('genre', 'Femme');
            }else{
                $q->where('genre', 'Homme');
            }
        }



        if( !is_null($niveau_religieux)){

            $q->where('appartenance_religieuse', 'LIKE', '%' .  $niveau_religieux . '%');
        }


        if( !is_null($etude)){

            if( $etude == 'Niveau BAC' || $etude == 'Niveau collège' ){
                $q->where('etude', $etude);
            }else{
                $q->where('etude', '!=', 'Niveau BAC')->where('etude', '!=', 'Niveau collège');
            }
        }


        if( !is_null($ville)){

            $q->where('ville', $ville);
        }



        if( !is_null($pay)){

            $q->where('pays', $pay);
        }



        if( !is_null($profession)){

            $q->where('profession', 'LIKE', '%' .   $profession . '%');
        }


        if( !is_null($nb_enfants)){
            $q->where('nb_enfants', $nb_enfants);
        }


        if( !is_null($statut_marital)){
            $q->where('statut_marital', $statut_marital);
        }

        if( !is_null($delocaliser)){
            $q->where('suivre_conjoint', $delocaliser);
        }

        if( !is_null($a_propos)){
            $q->where('a_propos', 'LIKE', '%' . $a_propos . '%');
        }



        $age_min = $request->age_min;
        $age_max = $request->age_max;

        if( !is_null($request->age_min) ){
            $to = Carbon::now()->subYears($age_min);
            $q->where('date_de_naissance', '<=', $to);
        }else{
            $age_min = 18;
        }


        if( !is_null($request->age_max) ){
            $from = Carbon::now()->subYears($age_max);
            $q->where('date_de_naissance', '>=', $from);
        }else{
            $age_max = 90;
        }


        if( !is_null($request->my_profil) && $request->my_profil == 'Oui' ){
            $q->where('code_chatrane', Auth::user()->slug);
        }

        if( !is_null($request->langue) ){
            $q->where('langues', 'LIKE', '%'. $langue . '%');
            //dd($request->langue);
        }



        $users = $q->orderBy('name', 'ASC')->paginate(15);

        $user_controller = new UserProfilController();

        foreach ($users as $user){
            $user->langues = $user_controller->utf8_ansi($user->langues);
            $langues = explode(',', str_replace(']', '', str_replace('[', '', str_replace('"', '', $user->langues))));

            asort($langues);

            $langues_ids = [];

            foreach($langues as $l){
                $langues_ids[] = $user_controller->get_flag_id($l);
            }
            $user->langues_ids = $langues_ids;
            $user->age = Carbon::parse($user->date_de_naissance)->age;
            $user->brief = Str::words($user->a_propos,9);

            //nb chicours

            $user->nb_chidours = Chidour::where(function($q) use ($user){
                $q->where('origine', $user->id)->orWhere('origine', $user->id);
            })->count();




        }

        $users->appends($request->except('page'));


        return view('home', compact('users', 'langue', 'genre', 'niveau_religieux', 'etude', 'ville', 'villes',  'pay', 'pays', 'profession', 'professions', 'statut_marital', 'delocaliser', 'a_propos', 'age_max', 'age_min', 'nb_enfants', 'my_profil'));
    }


    public function fake_chatrane(){

        $faker = Factory::create('fr_FR');
        $chatrane_slugs = [];

        $chatranes = User::where('chatrane', 1)->get();



        foreach ($chatranes as $ch){
            $slug = uniqid();
            $ch->code_chatrane =
            $chatrane_slugs[] =  ['code' => $ch->slug, 'nom' => $ch->name . ' ' . $ch->prenom];
        }


        $users = User::where('chatrane', 0)->get();

        foreach($users as $user){
            $ch = $chatrane_slugs[rand(0, count($chatrane_slugs) - 1 )];
            $user->code_chatrane = $ch['code'];
            $user->nom_chatrane = $ch['nom'];
            $user->save();
        }
    }
}
