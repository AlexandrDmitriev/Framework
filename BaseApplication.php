<?php

namespace Framework;

abstract class BaseApplication
{
    private static $instance = null;

    protected $configs;

    protected function __construct(array $configs)
    {
        $this->configs = $configs;
    }

    final public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    abstract public function run();
}
