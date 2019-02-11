<?php

return [

    'enabled' => env('RESPONSE_CACHE_ENABLED', true),
    'cache_profile' => Spatie\ResponseCache\CacheProfiles\CacheAllSuccessfulGetRequests::class,
    'cache_lifetime_in_minutes' => env('RESPONSE_CACHE_LIFETIME', 60 * 24 * 7),
    'add_cache_time_header' => env('APP_DEBUG', true),
    'cache_store' => env('RESPONSE_CACHE_DRIVER', 'file'),
    'cache_tag' => '',
];
