<?php
declare(strict_types = 1);

namespace App;

class App {
    private static int $count = 0;

    public function __construct(public float $amount, public string $description)
    {
        self::$count++;
    }

    public static function getCount():int
    {
        return self::$count;
    }
}