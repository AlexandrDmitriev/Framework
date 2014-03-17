<?php

namespace Framework;

abstract class BaseApplication
{
    protected static $instance = null;

    protected $configs;

    protected function __construct(array $configs)
    {
        $this->configs = $configs;
    }

    public static function getInstance($config = null)
    {
        if (static::$instance === null) {
            static::$instance = new static($config);
            static::$instance->run();
        }

        return static::$instance;
    }

    protected function run()
    {

    }
}
