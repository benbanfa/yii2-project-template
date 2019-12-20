<?php

require XII_ROOT.'/vendor/yiisoft/yii2/BaseYii.php';

class Yii extends yii\BaseYii
{
}

function config($name)
{
    return Yii::$app->params[$name];
}

spl_autoload_register(['Yii', 'autoload'], true, true);
Yii::$classMap = require XII_ROOT.'/vendor/yiisoft/yii2/classes.php';

Yii::$container = new yii\di\Container();

Yii::setAlias('@backend', XII_ROOT.'/backend');
Yii::setAlias('@config', XII_ROOT.'/config');
Yii::setAlias('@console', XII_ROOT.'/console');
Yii::setAlias('@frontend', XII_ROOT.'/frontend');
Yii::setAlias('@common', XII_ROOT.'/common');
Yii::setAlias('@var', XII_ROOT.'/var');
