<?php

return [
    'name' => 'LaravelPWA',
    'manifest' => [
        'name' => env('APP_NAME', 'My PWA App'),
        'short_name' => 'PWA',
        'start_url' => '/',
        'background_color' => '#c5d8e9',
        'theme_color' => '#487aa9',
        'display' => 'standalone',
        'orientation'=> 'any',
        'icons' => [
            '72x72' => '/theme/images/icons/icon-72x72.png',
            '96x96' => '/theme/images/icons/icon-96x96.png',
            '128x128' => '/theme/images/icons/icon-128x128.png',
            '144x144' => '/theme/images/icons/icon-144x144.png',
            '152x152' => '/theme/images/icons/icon-152x152.png',
            '192x192' => '/theme/images/icons/icon-192x192.png',
            '384x384' => '/theme/images/icons/icon-384x384.png',
            '512x512' => '/theme/images/icons/icon-512x512.png'
        ],
        'splash' => [
            '640x1136' => '/theme/images/icons/splash-640x1136.png',
            '750x1334' => '/theme/images/icons/splash-750x1334.png',
            '828x1792' => '/theme/images/icons/splash-828x1792.png',
            '1125x2436' => '/theme/images/icons/splash-1125x2436.png',
            '1242x2208' => '/theme/images/icons/splash-1242x2208.png',
            '1242x2688' => '/theme/images/icons/splash-1242x2688.png',
            '1536x2048' => '/theme/images/icons/splash-1536x2048.png',
            '1668x2224' => '/theme/images/icons/splash-1668x2224.png',
            '1668x2388' => '/theme/images/icons/splash-1668x2388.png',
            '2048x2732' => '/theme/images/icons/splash-2048x2732.png',
        ],
        'custom' => []
    ]
];
