<?php

return [
    'default' => env('DB_CONNECTION', 'pgsql'),
    'connections' => [
        'pgsql' => [
            'host' => env('DB_HOST', 'db'),
            'database' => env('DB_DATABASE', 'erp'),
            'username' => env('DB_USERNAME', 'postgres'),
            'password' => env('DB_PASSWORD', 'secret'),
        ],
    ],
];
