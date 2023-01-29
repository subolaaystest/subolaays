<?php

return [


    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],


    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'seller' => [
            'driver' => 'session',
            'provider' => 'sellers',
        ],

        'buyer' => [
            'driver' => 'session',
            'provider' => 'buyers',
        ],

    ],


    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => \App\Models\Admin::class,
        ],

        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'sellers' => [
            'driver' => 'eloquent',
            'model' => \App\Models\Seller::class,
        ],


        'buyers' => [
            'driver' => 'eloquent',
            'model' => \App\Models\Buyer::class,
        ],


    ],



    'passwords' => [
        'admins' => [
            'provider' => 'admins',
            'table' => 'admin_password_resets',
            'expire' => 60,
        ],

        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],



    'password_timeout' => 10800,

];
