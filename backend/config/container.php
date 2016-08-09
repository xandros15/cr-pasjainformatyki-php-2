<?php
/**
 * Created by PhpStorm.
 * User: xandros15
 * Date: 2016-08-09
 * Time: 19:21
 */
use Backend\Database;
use Slim\Container;
use Slim\Flash\Messages;
use Slim\Views\PhpRenderer;

include_once __DIR__ . '/session-start.php';

return [
    'db' => function (Container $container) {
        return Database::DBConnect(require __DIR__ . '/connect-dev.php');
    },
    'session' => function (Container $container) use ($session) {
        return $session;
    },
    'view' => function (Container $container) {
        return new PhpRenderer(__DIR__ . '/../../view');
    },
    'alert' => function () {
        return new Messages();
    },
    'user' => function (Container $container) {
        $user = null;
        if ($container->session->has('id')) {
            $statement = $container->db->prepare('SELECT * FROM `uzytkownicy` WHERE `id` = ? limit 1');
            $statement->execute([(int) $container->session->get('id')]);
            $user = $statement->fetch(PDO::FETCH_OBJ);
        }
        return $user;
    }
];
