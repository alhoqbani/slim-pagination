<?php
return [
    'displayErrorDetails' => true,
    
    'app' => [
      'name' => getenv('APP_NAME'),
      'url' => getenv('APP_URL'),
      'env' => getenv('APP_ENV'),
    ],
    
    'twig' => [
        'viewsPath'      => ROOT . 'resources/views',
        'viewsCachePath' => ROOT . 'storage/cache/views',
        'enableCache'    => false,
    ],
    
    'database' => [
        'driver'   => getenv('DB_CONNECTION'),
        'host'     => getenv('DB_HOST'),
        'port'     => getenv('DB_PORT'),
        'username' => getenv('DB_USERNAME'),
        'password' => getenv('DB_PASSWORD'),
        'dbname' => getenv('DB_DATABASE'),
    ],
];