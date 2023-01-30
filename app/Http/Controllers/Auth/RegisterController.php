<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Chidour;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $chatrane = null;
        $nb_profils = 0;

        if(isset($data['code_chatrane'])){
           $chatrane = User::where('slug', $data['code_chatrane'])->first();
        }



        $user = [
            'name' => ucwords($data['name']),
            'prenom' => ucwords($data['prenom']),
            'telephone' => trim($data['telephone']),
            'email' => strtolower($data['email']),
            'password' => Hash::make($data['password']),
        ];

        if( isset($data['chatrane']) ){
            $user['chatrane'] = $data['chatrane'];
        }

        if($chatrane){
            $nb_profils = User::where('code_chatrane', $chatrane->slug)->where('marie', false)->count();

            if($nb_profils < $chatrane->nb_max_profils ){
                $user['code_chatrane'] = $data['code_chatrane'];
            }

        }

        //dd($data['code_chatrane']);


        return User::create($user);
    }



    public function showRegistrationForm()
    {
        //$product = Product::all();
        $chatrane = null;
        $max = 0;

        if(isset($_GET['code_chatrane'])){
           $chatrane = User::where('slug', $_GET['code_chatrane'])->first();

           if($chatrane){

                $nb_profils = User::where('code_chatrane', $chatrane->slug)->where('marie', false)->count();

                if($nb_profils == $chatrane->nb_max_profils ){
                    $max = 1;
                }


           }
        }






        return view("auth.register", compact('chatrane', 'max'));
    }
}
