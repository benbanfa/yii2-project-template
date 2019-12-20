<?php

require __DIR__.'/../../vendor/autoload.php';
require __DIR__.'/../../before-yii.php';

// NOTE: Make sure this file is not accessible when deployed to production
if (YII_ENV === 'prod') {
    die('You are not allowed to access this file.');
}

require __DIR__.'/../../config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__.'/../../config/main.php',
    require __DIR__.'/../../config/test.php',
    require __DIR__.'/../config/main.php',
    require __DIR__.'/../config/test.php'
);

(new yii\web\Application($config))->run();
