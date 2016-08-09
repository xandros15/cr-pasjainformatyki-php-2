<?php

/**
 * Created by PhpStorm.
 * User: xandros15
 * Date: 2016-04-25
 * Time: 20:21
 */
abstract class Database
{
    /**
     * @param $options
     * @throws \PDOException
     * @return PDO
     */
    public static function DBConnect(array $options) : PDO
    {
        $dns = sprintf('mysql:host=%s;dbname=%s', $options['host'], $options['db_name']);

        $connection = new PDO($dns, $options['user'],
            $options['password'], [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
        $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connection;
    }
}