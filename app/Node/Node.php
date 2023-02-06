<?php
declare(strict_types = 1);

namespace App\Node;

class Node {
    public $next = NULL;

    public function __construct(public $data = NULL)
    {
        
    }
}