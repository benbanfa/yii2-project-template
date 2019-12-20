<?php

return [
    'id' => 'app-tests',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host='.$_ENV['DB_TEST_HOST'].';dbname='.$_ENV['DB_TEST_DATABASE'],
            'username' => $_ENV['DB_TEST_USERNAME'],
            'password' => $_ENV['DB_TEST_PASSWORD'],
            'charset' => 'utf8mb4',
        ],
    ],
];
