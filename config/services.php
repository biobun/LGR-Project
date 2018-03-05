<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '119155125519587',
        'client_secret' => 'cc74fd4babf556074cfb0e4a0130482a',
        'redirect' => 'http://localhost/lgr-project/public/facebook/callback',
    ],

    'google' =>[
        'client_id' => '793721868955-9hs6embpchv5kp35a59vpgbs5ok4uond.apps.googleusercontent.com',
        'client_secret' => '-zEM9G2Cq5Pq_qEHIGJp2K8x',
        'redirect' => 'http://localhost/lgr-project/public/google/callback',
    ]
];
