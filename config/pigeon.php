<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pigeon Host
    |--------------------------------------------------------------------------
    |
    | This option use for determining which Pigeon's host you want to connect.
    |
    */

    'host' => env('PIGEON_HOST', 'https://pigeon.mycard.in.th'),

    /*
    |--------------------------------------------------------------------------
    | Pigeon key
    |--------------------------------------------------------------------------
    |
    | This is a secret token for user authentication.
    | You can issue a new one from our service.
    |
    */

    'token' => env('PIGEON_TOKEN'),

];
