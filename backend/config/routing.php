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
    $response->getBody()->write('hello world');
    return $response;
});