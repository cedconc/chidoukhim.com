<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompleteUserProfileRequest;
use App\Http\Requests\ImportUserRequest;
use App\Http\Requests\RatingRequest;
use App\Http\Requests\UpdateProfilRequest;
use App\Imports\UsersImport;
use App\Mail\AlerteMaxProfil;
use App\Models\Chidour;
use App\Models\Pays;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

class UserProfilController extends Controller
{
    public function index($slug){

        return 'ok';

        $user = User::where('slug', $slug)->first();

        if($user){
            return view('profil', compact('user'));
        }

        abort(404);

    }

    public function hiboutik_test(Request $request){

        Log::info( $request->all() );
       $data = array('name'=>"Virat Gandhi");

       Mail::send(['text'=> var_dump($request->all())], $data, function($message) {
          $message->to('j90769907@gmail.com', 'Hiboutiuk')->subject
             ('Hiboutiuk Fucking test');
          $message->from('no-reply@chidoukhim.com','Hessed Chidouhkim');
       });

       return $request->all();
    }

    public function post_import(ImportUserRequest $request){

        $import = Excel::import(new UsersImport, $request->fichier);


        if($import){
            return back()->withSuccess(__('Importation réussie !'));
        }
        return back()->withDanger(__("L'importation s'est terminée avec certaines erreurs !"));





    }

    public function post_rating(RatingRequest $request){

        $user = Auth::user();
        $post = User::find($request->chatrane_id);

        $rating = $post->rating([
            'title' => 'This is a test title',
            'body' => 'And we will add some shit here',
            'rating' => $request->ratings,
        ], $user);

        return back()->withSuccess(__('Votre évaluation a bien été enrégistrée!'));

    }

    public function get_villes(Request $request){

        $html = '<option selected value="">-- Ville --</option>';

        if(!is_null($request->pays)){
            $villes = User::where('pays', $request->pays)->select('ville')->orderBy('ville', 'ASC')->groupBy('ville')->get();

            foreach($villes as $ville){
                $html .= '<option value="' . $ville->ville . '">' . $ville->ville . '</option>';
            }
        }

        return $html;
    }

    public function get_chatranes(Request $request){



        $requette =  User::where('chatrane', true)->where(function($q) use ($request){
            $q->where('ville', $request->ville)->orWhere('pays', $request->pays);
        });

        if( isset($request->handicap) && $request->handicap == '1' ){
            $chatranes = $requette->where('handicap_chatrane', 'Oui')->get();
        }else{
            $chatranes = $requette->get();
        }



        if(count($chatranes) == 0){
            $chatranes =  User::where('chatrane', true)->get();
        }

        $html = '<option disabled selected>-- Choisir --</option>';

        foreach($chatranes as $chat){
            $benevole = '';
            $nb_profils = User::where('code_chatrane', $chat->slug)->where('marie', false)->count();

            if( $nb_profils <= $chat->nb_max_profils ){

                if($chat->tarif_prise_en_charge == 0 && $chat->tarif_chidour == 0){
                    $benevole = " - " . __("Bénévole");
                }
                $html .= '<option value="' . $chat->slug . '">' . $chat->prenom . ' ' . $chat->name . ' ' . $benevole . '</option>';

            }

        }

        return $html;
    }

    public function complete_profil(){

        $lang = App::getLocale();

        $pays = Pays::select('nom_fr_fr as nom')->orderBy('nom_fr_fr', 'ASC')->get();

        $user = Auth::user();

        if( isset($_GET['user_id']) && Auth::user()->admin ){
            $user = User::find($_GET['user_id']);

            if(!$user){
                abort(404);
            }
        }

        $data['user'] = $user;

        return view('complete_profil', compact('user', 'pays'));
    }

    public function update_profil( UpdateProfilRequest $request ){

        $user = User::find($request->user_id);

        if(!$user){
            abort(404);
        }

        $data = $request->all();

        $langues = $data['langues'];

        $langue_str = '[';


        foreach($langues as $lang){
            $langue_str .= '"' . $lang . '",';
        }
        $langue_str .= ']';

        $data['langues'] = $langue_str;

        //dd($data['langues']);




        if( $request->file('photo_1') ) {
            $nom_fichier = time().'_'.$request->photo_1->getClientOriginalName();
            $chemin = '/storage/' . $request->file('photo_1')->storeAs('uploads', $nom_fichier, 'public');
            $data['photo_1'] = $chemin;
        }


        if( $request->file('photo_2') ) {
            $nom_fichier = time().'_'.$request->photo_2->getClientOriginalName();
            $chemin = '/storage/' . $request->file('photo_2')->storeAs('uploads', $nom_fichier, 'public');
            $data['photo_2'] = $chemin;
        }


        if( $request->file('photo_3') ) {
            $nom_fichier = time().'_'.$request->photo_3->getClientOriginalName();
            $chemin = '/storage/' . $request->file('photo_3')->storeAs('uploads', $nom_fichier, 'public');
            $data['photo_3'] = $chemin;
        }


        if( $request->file('photo_4') ) {
            $nom_fichier = time().'_'.$request->photo_4->getClientOriginalName();
            $chemin = '/storage/' . $request->file('photo_4')->storeAs('uploads', $nom_fichier, 'public');
            $data['photo_4'] = $chemin;
        }


        if( $request->file('photo_5') ) {
            $nom_fichier = time().'_'.$request->photo_5->getClientOriginalName();
            $chemin = '/storage/' . $request->file('photo_5')->storeAs('uploads', $nom_fichier, 'public');
            $data['photo_5'] = $chemin;
        }


        if( $request->file('photo_6') ) {
            $nom_fichier = time().'_'.$request->photo_6->getClientOriginalName();
            $chemin = '/storage/' . $request->file('photo_6')->storeAs('uploads', $nom_fichier, 'public');
            $data['photo_6'] = $chemin;
        }


        $data['completed'] = true;
        $data['name'] = ucwords($data['name']);

        $slug = $user->slug;

        if(is_null($user->slug)){
            $slug = uniqid();
            $data['slug'] = $slug;
        }



        if( isset($request->code_chatrane) ){

            $chatrane = User::where('slug', strtolower($request->code_chatrane))->first();
            if($chatrane){

                if( $user->code_chatrane != $request->code_chatrane ){

                    $data['nom_chatrane'] = $chatrane->name . ' ' . $chatrane->prenom;
                    $nb_profils = User::where('code_chatrane', $chatrane->slug)->where('marie', false)->count();

                    if($nb_profils >= $chatrane->nb_max_profils ){
                        $data['completed'] = false;
                        $data['code_chatrane'] = null;
                        $user->update($data);
                        return back()->withDanger("Ce Shadhanite/Shadhan a atteint son nombre maximum de prise en charge!");
                    }

                    if( $nb_profils + 1 ==  $chatrane->nb_max_profils){
                        //envoi mail d alerte a la chatranite

                        Mail::to($chatrane->email)->send(new AlerteMaxProfil());

                    }

                }


            }else{
                return back()->withDanger("Ce Shadhanite/Shadhan n'existe pas!");
            }
        }
        $user->update($data);



        return redirect('/user/' . $slug);

    }

    public function user(Request $request, $slug){

        $user = User::where('slug', $slug)->first();

        if($user){
            $age = Carbon::parse($user->date_de_naissance)->age;
            $user->age = $age;
            $user->nb_chidours = Chidour::where(function($q) use ($user){
                $q->where('origine', $user->id)->orWhere('origine', $user->id);
            })->count();

            $user->langues = $this->utf8_ansi($user->langues);
            $langues = explode(',', str_replace(']', '', str_replace('[', '', str_replace('"', '', $user->langues))));

            asort($langues);

            $langues_ids = [];

            foreach($langues as $langue){
                $langues_ids[] = $this->get_flag_id($langue);
            }

            $chatrane_users = null;

            if($user->chatrane == 1){
                //query des membres de ce chatrane
                $chatrane_users = User::where('code_chatrane', $slug)->orderBy('name', 'ASC')->paginate(15);;

                foreach ($chatrane_users as $u){
                    $u->langues = $this->utf8_ansi($u->langues);
                    $langues = explode(',', str_replace(']', '', str_replace('[', '', str_replace('"', '', $u->langues))));

                    asort($langues);

                    $langues_ids = [];

                    foreach($langues as $langue){
                        $langues_ids[] = $this->get_flag_id($langue);
                    }
                    $u->langues_ids = $langues_ids;
                    $u->age = Carbon::parse($u->date_de_naissance)->age;
                    $u->brief = Str::words($u->a_propos,9);


                }

                $chatrane_users->appends($request->except('page'));

            }


            return view('profil', compact('user', 'langues', 'langues_ids', 'chatrane_users'));
        }

        abort(404);
    }

    public function post_notes(Request $request){
        User::where('id', $request->user_id)->update([
            'notes' => $request->notes,
        ]);

        return back()->withSuccess(__('La note a bien été ajoutée'));


    }


    public function get_flag_id($idioma){
        $id = '';
        switch ($idioma) {
                case 'Anglais':
                    $id = 'United_Kingdom';
                break;

                case 'Espagnol':
                    $id = 'Spain';
                break;

                case 'Ladino':
                    $id = 'Spain';
                break;

                case 'Russe':
                    $id = 'Russian_Federation';
                break;

                case 'Français':
                    $id = 'France';
                break;

                case 'Portuguais':
                    $id = 'Portugal';
                break;

                case 'Italien':
                    $id = 'Italy';
                break;

                case 'Français':
                    $id = 'France';
                break;

                default:
                    $id = 'Israel';
                break;
        }

        return $id;
    }

    public function utf8_ansi($valor='') {

        $utf8_ansi2 = array(
        "\u00c0" =>"À",
        "\u00c1" =>"Á",
        "\u00c2" =>"Â",
        "\u00c3" =>"Ã",
        "\u00c4" =>"Ä",
        "\u00c5" =>"Å",
        "\u00c6" =>"Æ",
        "\u00c7" =>"Ç",
        "\u00c8" =>"È",
        "\u00c9" =>"É",
        "\u00ca" =>"Ê",
        "\u00cb" =>"Ë",
        "\u00cc" =>"Ì",
        "\u00cd" =>"Í",
        "\u00ce" =>"Î",
        "\u00cf" =>"Ï",
        "\u00d1" =>"Ñ",
        "\u00d2" =>"Ò",
        "\u00d3" =>"Ó",
        "\u00d4" =>"Ô",
        "\u00d5" =>"Õ",
        "\u00d6" =>"Ö",
        "\u00d8" =>"Ø",
        "\u00d9" =>"Ù",
        "\u00da" =>"Ú",
        "\u00db" =>"Û",
        "\u00dc" =>"Ü",
        "\u00dd" =>"Ý",
        "\u00df" =>"ß",
        "\u00e0" =>"à",
        "\u00e1" =>"á",
        "\u00e2" =>"â",
        "\u00e3" =>"ã",
        "\u00e4" =>"ä",
        "\u00e5" =>"å",
        "\u00e6" =>"æ",
        "\u00e7" =>"ç",
        "\u00e8" =>"è",
        "\u00e9" =>"é",
        "\u00ea" =>"ê",
        "\u00eb" =>"ë",
        "\u00ec" =>"ì",
        "\u00ed" =>"í",
        "\u00ee" =>"î",
        "\u00ef" =>"ï",
        "\u00f0" =>"ð",
        "\u00f1" =>"ñ",
        "\u00f2" =>"ò",
        "\u00f3" =>"ó",
        "\u00f4" =>"ô",
        "\u00f5" =>"õ",
        "\u00f6" =>"ö",
        "\u00f8" =>"ø",
        "\u00f9" =>"ù",
        "\u00fa" =>"ú",
        "\u00fb" =>"û",
        "\u00fc" =>"ü",
        "\u00fd" =>"ý",
        "\u00ff" =>"ÿ");

        return strtr($valor, $utf8_ansi2);

    }

}
