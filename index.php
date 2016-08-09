<?php
require_once __DIR__ . '/vendor/autoload.php';
use Slim\App;

$app = new App();

require_once __DIR__ . '/backend/config/container.php';
require_once __DIR__ . '/backend/config/routing.php';
$app->run();