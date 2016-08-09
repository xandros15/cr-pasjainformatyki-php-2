<?php
/**
 * Created by PhpStorm.
 * User: xandros15
 * Date: 2016-08-09
 * Time: 19:21
 */
use Backend\Database;
use Backend\Session;
use Slim\Container;

return [
    'db' => function (Container $container) {
        return Database::DBConnect(require __DIR__ . '/connect-dev.php');
    },
    'session' => function (Container $container) {
        $session = new Session();
        $session->start();
        return $session;
    },
];
