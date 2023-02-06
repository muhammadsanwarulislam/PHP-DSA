<?php
declare(strict_types = 1);

namespace App\Node;

class Node {
    public $data = NULL;
    public $next = NULL;

    public function __construct($data)
    {
        $this->data = $data;
    }
}