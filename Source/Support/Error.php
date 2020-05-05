<?php

namespace Source\Support;

class Error
{
    /** Get all message in session */
    public function getMessage(string $name)
    {
        if (isset($_SESSION[$name])) {
            $msg = $_SESSION[$name];
            Error::clearMessage($_SESSION[$name]);
            return $msg;
        }
    }

    /** Set message in session */
    public function setMessage(string $msg, string $name): void
    {

        if (!isset($_SESSION[$name]) || !$_SESSION[$name]) {
            $_SESSION[$name] = $msg;
        }
    }

    /** Clear all Message in session */
    public static function clearMessage(string $name): void
    {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = NULL;
        }
    }

    /** Used to create a new Session if have error */
    public static function setSession(string $name, array $data)
    {
        if (!isset($_SESSION[$name])) {
            $_SESSION[$name] = $data;

        } else{
            $_SESSION[$name] = $data;
        }
    }
}
