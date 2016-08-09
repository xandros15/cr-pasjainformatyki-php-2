<?php
/**
 * Created by PhpStorm.
 * User: xandros15
 * Date: 2016-08-09
 * Time: 19:21
 */
use Backend\Database;
use Slim\Container;

return [
    'db' => function (Container $container) {
        return Database::DBConnect(require __DIR__ . '/connect-dev.php');
    }
];
