<?php

class Session
{
    public function __construct()
    {
        $this->open();
    }

    function get($key)
    {
        $value = $_SESSION[$key];
        return getUnserializedValue($value);
    }

    function set($key, $value)
    {
        $_SESSION[$key] = isObject($value) ? serialize($value) : $value;
    }

    function exists($key)
    {
        return isset($_SESSION[$key]);
    }

    function clear($key)
    {
        unset($_SESSION[$key]);
    }

    function clearAll()
    {
        session_unset();
    }

    function open()
    {
        session_start();
    }

    function destroy()
    {
        $this->clearAll();
        session_destroy();
    }
}