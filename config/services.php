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
    'sendgrid' => [
        'api_key' => env('SENDGRID_API_KEY'),
        'templates' => [
            'sample' => '0f35ca1c-db1f-4953-98ab-7aeeb73d1818',
            'dynamic_sample' => 'd-b0a8e8e17ec44224a7d2da8c23fc7d23',
            'laravel_test' => 'd-da2763b574b34be8ad64d4bc1516c9ca',
            'empty' => 'd-72c3479b4ffe47a4a0dd369adbbc3406',
            'legacy' => 'bdff13cc-cf2d-4b1f-a7fa-f6dbb8156273'
        ],
    ],
];
