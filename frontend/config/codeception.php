<?php

return yii\helpers\ArrayHelper::merge(
    require dirname(dirname(__DIR__)).'/config/codeception.php',
    require __DIR__.'/main.php',
    require __DIR__.'/test.php',
    [
    ]
);
