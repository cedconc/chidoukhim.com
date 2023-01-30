<?php

use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\ChidourController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserProfilController;
use App\Http\Controllers\vendor\Chatify\MessagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Route::post('/hiboutik_test', [UserProfilController::class, 'hiboutik_test'])->name('hiboutik_test');


Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect'])->group(function () {

    Route::get('/', [IndexController::class, 'index']);
    Route::post('/set_locale', [IndexController::class, 'set_locale'])->name('set_locale');

    Auth::routes(['verify' => true]);

    Route::get('email/resend', [VerificationController::class, 'resend'])->name('auth.verify');


    Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
    Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

    Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
    Route::get('auth/google/callback',  [GoogleController::class, 'handleGoogleCallback']);


    Route::get('/charte_chatrane', function(){
        return view('charte_chatrane');
    })->name('charte_chatrane');


    Route::get('/cgu', function(){
        return view('cgu');
    })->name('cgu');



    Route::middleware('auth')->group(function (){


        Route::get('/logout', [LoginController::class, 'logout']);

        Route::get('/complete_profil', [UserProfilController::class, 'complete_profil']);
        Route::post('/update_profil', [UserProfilController::class, 'update_profil'])->name('update_profil');
        Route::get('/get_chatranes', [UserProfilController::class, 'get_chatranes'])->name('get_chatranes');
        Route::get('/get_villes', [UserProfilController::class, 'get_villes'])->name('get_villes');
        Route::post('/post_notes', [UserProfilController::class, 'post_notes'])->name('post_notes');






        Route::middleware(['checkProfileStatus', 'verified'])->group(function (){

            Route::get('/home', [HomeController::class, 'index'])->name('home');
            Route::get('/fake_chatrane', [HomeController::class, 'fake_chatrane'])->name('fake_chatrane');
            Route::get('/user/{slug}', [UserProfilController::class, 'user']);
            Route::post('/demander_chidour', [ChidourController::class, 'demander_chidour'])->name('demander_chidour');
            Route::get('/chidour/{id}', [ChidourController::class, 'chidour'])->name('chidour');
            Route::get('/chidours', [ChidourController::class, 'chidours'])->name('chidours');
            Route::get('/accept_chidour/{source}/{id_chidour}', [ChidourController::class, 'accept_chidour'])->name('accept_chidour');
            Route::get('/refuse_chidour/{source}/{id_chidour}', [ChidourController::class, 'refuse_chidour'])->name('refuse_chidour');
            Route::post('/accept_chidour', [MessagesController::class, 'accept_chidour'])->name('post_accept_chidour');
            Route::post('/contacter', [MessagesController::class, 'contacter'])->name('contacter');
            Route::get('/cron_relance_messages_non_lus', [MessagesController::class, 'cron_relance_messages_non_lus'])->name('cron_relance_messages_non_lus');
            Route::post('/actions_chidour', [ChidourController::class, 'actions_chidour'])->name('actions_chidour');


            Route::post('/post_import', [UserProfilController::class, 'post_import'])->name('post_import');
            Route::post('/post_rating', [UserProfilController::class, 'post_rating'])->name('post_rating');



        });




        Route::middleware('role:chadkhanite')->group(function (){
            Route::get('/ok', function () {
                return 'ok';
            });
        });
    });








});
