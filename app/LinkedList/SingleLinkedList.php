<?php

declare(strict_types = 1);

namespace App\LinkedList;

use App\Node\Node;

class SingleLinkedList {
    public $_firstNode  = NULL;
    public $_totalNodes = 0;

    public function insertAtFirst(string $data): SingleLinkedList
    {
        $newNode = new Node($data);

        if($this->_firstNode === NULL) {
            $this->_firstNode = &$newNode;
        }else {
            $currentNode = $this->_firstNode;
            $this->_firstNode = $newNode;
            $newNode->next = $currentNode; 
        }
        $this->_totalNodes++;
        return $this;
    }

    public function showSingleLinkedListData()
    {
        echo "Total Nodes:" . $this->_totalNodes."</br>";
        $currentNode = $this->_firstNode;

        while($currentNode !== NULL) {
            echo $currentNode->data ."</br>";
            $currentNode = $currentNode->next;
        }
    }
}