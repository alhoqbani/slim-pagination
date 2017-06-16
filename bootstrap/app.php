<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/init.php';

$settings = require_once __DIR__ . '/settings.php';
$app = new \Slim\App([
    'settings' => $settings,
]);

$settings = require_once __DIR__ . '/container.php';

$settings = require_once ROOT . 'routes/routes.php';
