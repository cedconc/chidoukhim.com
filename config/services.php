<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '581055253094745',
        'client_secret' => '7d52aabaffaa1b2812ccc3ccb813a045',
        'redirect' => 'https://chidoukhim.com/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '1023383541257-7sca0lssaa93pun0g03405387jimjdmt.apps.googleusercontent.com',
        'client_secret' => 'nKniLrNxqjrbLrfBNMz9zMk-',
        'redirect' => 'https://chidoukhim.com/auth/google/callback',
    ],

];
