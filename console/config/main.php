<?php

$config = [
    'id' => 'app-console',
    'basePath' => XII_ROOT.'/console',
    'runtimePath' => XII_ROOT.'/runtime/console',
    'components' => [
    ],
    'controllerNamespace' => 'console\controllers',
    'controllerMap' => [
        'migrate' => [
            'class' => 'yii\console\controllers\MigrateController',
            'migrationPath' => null,
            'migrationNamespaces' => [
                'console\migrations',
            ],
        ],
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'common\fixtures',
        ],
    ],
];

return $config;
