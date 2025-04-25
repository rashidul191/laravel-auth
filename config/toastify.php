<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Toastify CDN links
    |--------------------------------------------------------------------------
    |
    | Here you may specify the CDN links for the toastify library.
    |
    */

    'cdn' => [
        'js' => 'https://unpkg.com/toastify-js@1.12.0/src/toastify.js',
        'css' => 'https://unpkg.com/toastify-js@1.12.0/src/toastify.css',
    ],

    /*
    |--------------------------------------------------------------------------
    | Toastify Toastifiers Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the toastifiers options for the toastify library.
    | Each toastifier will be available as a method in the Toastify facade.
    |
    */

    'toastifiers' => [

        'toast' => [
            'duration' => 2000,
            'style' => [
                'color' => '#fff',
                'background' => '#182433',
            ],
        ],
        'error' => [
            'duration' => 2000,
            'style' => [
                'color' => '#fff',
                'background' => '#d63939',
            ],
        ],
        'success' => [
            'duration' => 2000,
            'style' => [
                'color' => '#fff',
                'background' => '#2fb344',
            ],
        ],
        'info' => [
            'duration' => 2000,
            'style' => [
                'color' => '#fff',
                'background' => '#4299e1',
            ],
        ],
        'warning' => [
            'duration' => 2000,
            'style' => [
                'color' => '#fff',
                'background' => '#f76707',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Toastify Default Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default options for the toastify library.
    |
    */

    'defaults' => [
        // 'gravity' => 'toastify-top',
        'gravity' => 'toastify-bottom',
        'position' => 'right',
        // 'position' => 'left',
    ],
];
