<?php
/**
 * Created by PhpStorm.
 * User: xandros15
 * Date: 2016-08-09
 * Time: 18:43
 */

namespace Backend;


class Session
{
    public function start()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function get($name)
    {
        return $this->has($name) ? $_SESSION[$name] : null;
    }

    public function has($name)
    {
        return isset($_SESSION[$name]);
    }

    public function set($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public function kill()
    {
        unset($_SESSION);
        return session_destroy();
    }
}