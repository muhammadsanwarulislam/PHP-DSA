<?php
namespace App;

class Db {
    private static ?Db $instance = NULL;

    private function __construct(public array $config)
    {
        echo "instance created";
        
    }

    public static function getInstance(array $config): Db
    {
        if(self::$instance === NULL) {
            self::$instance = new Db($config);
        }

        return self::$instance;
    }
}