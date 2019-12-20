<?php

$params = array_merge(
    require __DIR__.'/params.php',
    require __DIR__.'/params-local.php'
);

$config = [
    // 时区设置为 +8
    'timeZone' => 'Asia/Shanghai',
    // 语言设置为中文
    'language' => 'zh-CN',
    // 前端资源文件路径别名
    'aliases' => [
        '@bower' => '@vendor/node_modules',
        '@npm' => '@vendor/node_modules',
    ],
    'vendorPath' => XII_ROOT.'/vendor',
    'bootstrap' => [
        'log',
    ],
    'components' => [
        // https://www.yiiframework.com/doc/guide/2.0/en/caching-overview
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // https://www.yiiframework.com/doc/guide/2.0/en/db-dao
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_DATABASE'],
            'username' => $_ENV['DB_USERNAME'],
            'password' => $_ENV['DB_PASSWORD'],
            'charset' => 'utf8mb4',
            'on afterOpen' => function ($event) {
                $event->sender->createCommand("SET time_zone='+08:00';")->execute();
            },
        ],
        // https://www.yiiframework.com/doc/guide/2.0/en/runtime-logging
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'enableRotation' => false,
                    'levels' => ['error', 'warning'],
                    'maskVars' => [
                        '_SERVER.HTTP_AUTHORIZATION',
                        '_SERVER.PHP_AUTH_USER',
                        '_SERVER.PHP_AUTH_PW',
                        '_SERVER.DB_PASSWORD',
                        '_SERVER.DB_TEST_PASSWORD',
                        '_SERVER.REDIS_PASSWORD',
                    ],
                ],
            ],
        ],
        /*
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => $_ENV['REDIS_HOST'],
            'port' => $_ENV['REDIS_PORT'],
            'password' => $_ENV['REDIS_PASSWORD'],
            'database' => $_ENV['REDIS_DATABASE'],
        ],
        'queue' => [
            'class' => 'yii\queue\redis\Queue',
        ],
        'queue2' => [
            'class' => 'yii\queue\redis\Queue',
            'channel' => 'queue2',
        ],
        */
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['*'],
        'generators' => [
        ],
    ];
}

return $config;
