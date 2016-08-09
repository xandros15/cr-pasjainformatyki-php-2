<?php
/**
 * Created by PhpStorm.
 * User: xandros15
 * Date: 2016-08-09
 * Time: 18:55
 */
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

/** @var $app App */
$app->get('[/]', function (Request $request, Response $response) {
    $path = $this->session->get('zalogowany') ? $this->router->pathFor('gra') : $this->router->pathFor('login.panel');

    return $response->withRedirect($path);
})->setName('home');

$app->get('/gra', function (Request $request, Response $response) {

})->setName('gra');

$app->get('/login', function (Request $request, Response $response) {

})->setName('login.panel');

$app->post('/login', function (Request $request, Response $response) {

})->setName('login');
$app->get('/logout', function (Request $request, Response $response) {

})->setName('logout');