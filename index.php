<?php
require_once __DIR__ . '/vendor/autoload.php';
use Slim\App;

$app = new App(array_merge(require_once __DIR__ . '/backend/config/container.php',
    ['settings' => ['displayErrorDetails' => true]]));

require_once __DIR__ . '/backend/config/routing.php';
$app->run();