<?php

return [
    'paths' => [
        realpath(app_path('Views'))
    ],
    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];
