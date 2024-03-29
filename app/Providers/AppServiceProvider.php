<?php

namespace App\Providers;

use App\Mail\EmailVerification;
use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       // LaravelLocalization::setLocale();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Override the email notification for verifying email
        // VerifyEmail::toMailUsing(function ($notifiable) {
        //     $verifyUrl = URL::temporarySignedRoute(
        //         'verification.verify',
        //         Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
        //         [
        //             'id' => $notifiable->getKey(),
        //             'hash' => sha1($notifiable->getEmailForVerification()),
        //         ],

        //     );
        //     return new EmailVerification($verifyUrl, $notifiable);
        // });

        Schema::defaultStringLength(191);

        $env = Config::get('app.env');

        if ($env == 'production') {
            URL::forceScheme('https');
        }


    }
}
