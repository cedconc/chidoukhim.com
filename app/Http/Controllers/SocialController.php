<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook(Request $request)
    {

        try {

            $user = Socialite::driver('facebook')->user();
            $isUserID = User::where('fb_id', $user->id)->first();
            $isUserEmail = User::where('email', $user->id)->first();

            if($isUserID && $isUserEmail){
                Auth::login($isUserID);
                return redirect('/home');
            }else{

                $check_user = User::where('email', $user->email)->first();

                if( !is_null($check_user) ){
                    $createUser = $check_user;
                }else{
                    $createUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'fb_id' => $user->id,
                        'password' => encrypt('123456dummy')
                    ]);
                }


                Auth::login($createUser);
                return redirect('/home');
            }

        } catch (Exception $exception) {
            dd($exception);
        }
    }
}
