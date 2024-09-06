<?php

namespace Bitbyteplay\Wdp\Abstract;

class Container
{
    protected static $instance;
    protected $bindings = [];

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    public function bind($key, $value)
    {
        $this->bindings[$key] = $value;
    }

    public function get($key, $default = null)
    {
        $keys = explode('.', $key);
        $value = $this->bindings['config'];

        foreach ($keys as $part) {
            if (isset($value[$part])) {
                $value = $value[$part];
            } else {
                return $default;
            }
        }

        return $value;
    }

    public static function setInstance($container = null)
    {
        return static::$instance = $container;
    }

}