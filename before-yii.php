<?php

defined('XII_ROOT') or define('XII_ROOT', __DIR__);
defined('XII_START_TIME') or define('XII_START_TIME', microtime(true));

if (!isset($_ENV['YII_ENV'])) {
    $dotenv = Dotenv\Dotenv::create(__DIR__, 'app.env');
    $dotenv->load();
}

defined('YII_ENV') or define('YII_ENV', $_ENV['YII_ENV'] ?? 'dev');
defined('YII_DEBUG') or define('YII_DEBUG', $_ENV['YII_DEBUG'] ?? true);
