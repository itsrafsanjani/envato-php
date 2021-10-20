<?php

return [
    'client_id' => env('ENVATO_APP_CLIENT_ID'),

    'client_secret' => env('ENVATO_APP_CLIENT_SECRET'),

    'redirect_uri' => env('ENAVTO_REDIRECT_URI'),

    'use_personal_token' => false,

    'personal_token' => env('ENVATO_PERSONAL_TOKEN'),

    /*
     * you can set any name for this purpose.
     * */
    'app_name' => env('ENVATO_APP_NAME', Str::slug(env('APP_NAME', 'laravel')) . '-app'),
];
