<?php

namespace App\Models;

use App\Http\Controllers\UserProfilController;
use App\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\VerifyEmail;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

use Laravelista\Comments\Commenter;
use Laravelista\Comments\Commentable;


use Codebyray\ReviewRateable\Contracts\ReviewRateable;
use Codebyray\ReviewRateable\Traits\ReviewRateable as ReviewRateableTrait;

class User extends Authenticatable implements MustVerifyEmail, ReviewRateable
{
    use HasFactory, Notifiable, HasRoles, Commentable;
    use ReviewRateableTrait;
   // use Commenter;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fb_id',
        'google_id',
        'completed',
        'genre',
        'statut_marital',
        'adresse',
        'date_de_naissance',
        'silouhette',
        'taille',
        'poids',
        'profession',
        'etude',
        'langues',
        'cohen',
        'types',
        'background_religieux',
        'ethnicite',
        'references',
        'a_propos',
        'attentes',
        'age-min',
        'age-max',
        'photo_1',
        'photo_2',
        'photo_3',
        'photo_4',
        'photo_5',
        'photo_6',
        'slug',
        'silhouette',
        'handicap',
        'telephone',
        'pays',
        'appartenance_religieuse',
        'pratique_religieuse',
        'niveau_religieux',
        'nom_rabbin',
        'suivre_conjoint',
        'partage_photo',
        'chatrane',
        'type_celibataire',
        'age-min-supporte',
        'age-max-supporte',
        'orientations_religieuses_profils',
        'pays_profils',
        'langues_profils',
        'nb_max_profils',
        'motif_chatrane',


        'services',
        'prenom',
        'tarif_prise_en_charge',
        'tarif_chidour',
        'modalites_paiement',
        'contact_celibataires',
        'contacts',
        'a_propos',
        'handicap_chatrane',
        'disponibilite',

        'ville',
        'code_chatrane',
        'nom_chatrane',
        'suivre_conjoint_pays',
        'devise',
        'nb_enfants',

        'email_verified_at',


        'nom_reference_1',
        'phone_reference_1',
        'lien_de_parente_reference_1',

        'nom_reference_2',
        'phone_reference_2',
        'lien_de_parente_reference_2',

        'garde_alternee',
        'nb_enfants_maison',
        'phone_rabbin',

        'admin',
        'notes',

        'benevole_plan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setContactsAttribute($array){

        $str = '';
        foreach($array as $value){
            $str .= $value . ', ';
        }
        $this->attributes['contacts'] = ($str);
    }




    public function setServicesAttribute($array){

        $str = '';
        foreach($array as $value){
            $str .= $value . ', ';
        }
        $this->attributes['services'] = ($str);
    }



    public function setOrientationsReligieusesProfilsAttribute($array){

        $str = '';
        foreach($array as $value){
            $str .= $value . ', ';
        }
        $this->attributes['orientations_religieuses_profils'] = ($str);
    }




    public function setPaysProfilsAttribute($array){

        $str = '';
        foreach($array as $value){
            $str .= $value . ', ';
        }
        $this->attributes['pays_profils'] = ($str);

    }



    public function setLanguesProfilsAttribute($array){

        $str = '';
        foreach($array as $value){
            $str .= $value . ', ';
        }
        $this->attributes['langues_profils'] = ($str);
    }



    public function setTypeCelibataireAttribute($array){

        $str = '';
        foreach($array as $value){
            $str .= $value . ', ';
        }
        $this->attributes['type_celibataire'] = ($str);
    }



    public function setContactCelibatairesAttribute($array){

        $str = '';
        foreach($array as $value){
            $str .= $value . ', ';
        }
        $this->attributes['contact_celibataires'] = ($str);
    }




    public function setTypesAttribute($array){

        $str = '';
        foreach($array as $value){
            $str .= $value . ', ';
        }
        $this->attributes['types'] = ($str);

    }





    public function setPratiqueReligieuseAttribute ($array){
        $str = '';
        foreach($array as $value){
            $str .= $value . ', ';
        }
        $this->attributes['pratique_religieuse'] = ($str);
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail); // my notification
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function get_age_min(){
        return $this->attributes['age-min'];
    }

    public function age_min_supporte(){
        return $this->attributes['age-min-supporte'];
    }

    public function age(){
        $date = Carbon::parse( $this->attributes['date_de_naissance'] );
        return $date->age;
    }

    public function langues_ids(){

        $user_controller  = new UserProfilController();

        $langues = $user_controller->utf8_ansi( $this->attributes['langues'] );
        $langues = explode(',', str_replace(']', '', str_replace('[', '', str_replace('"', '', $langues))));

        asort($langues);

        $langues_ids = [];

        foreach($langues as $langue){
            $langues_ids[] = $user_controller->get_flag_id($langue);
        }

        return $langues_ids;

    }

    public function age_max_supporte(){
        return $this->attributes['age-max-supporte'];
    }


    public function get_age_max(){
        return $this->attributes['age-max'];
    }

    public function date_naissance_formatted(){

        setlocale(LC_TIME, App::getLocale());
        $date = Carbon::parse( $this->attributes['date_de_naissance'] );
        return $date->formatLocalized('%d %B %Y');
    }

    public function get_orientation_religieuse(){
        $types = $this->attributes['types'];
        $user_controller  = new UserProfilController();
        $types = $user_controller->utf8_ansi($types);
        $types = explode(',', str_replace(']', '', str_replace('[', '', str_replace('"', '', $types))));
        asort($types);

        return $types;

    }

    public function check_chidour(){

        return Chidour::where('fini', false)->where(function($q){
            $q->where('cible', $this->attributes['id'])->orWhere('origine', $this->attributes['id']);
        })->count();


    }

    public function get_chatrane(){

        $code_chatrane = $this->attributes['code_chatrane'];

        $chatrane = User::where('slug', $code_chatrane)->first();

        return $chatrane;

    }

}
