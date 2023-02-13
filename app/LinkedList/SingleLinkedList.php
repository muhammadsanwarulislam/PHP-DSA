<?php

declare(strict_types = 1);

namespace App\LinkedList;

use App\Node\Node;
use Iterator;

class SingleLinkedList implements Iterator{
    private $_firstNode         = NULL;
    private $_totalNodes        = 0;
    private $_currentNode       = NULL;
    private $_currentPosition   = 0;

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

    public function insertAtLast(string $data): SingleLinkedList
    {
        $newNode = new Node($data);

        if($this->_firstNode === NULL) {
            $this->_firstNode = &$newNode;
        }else {
            $currentNode = $this->_firstNode;
            while($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
            $this->_totalNodes++;
        }
        return $this;
    }

    public function insertBefore(string $data = NULL, string $query = NULL): SingleLinkedList
    {
        $newNode = new Node($data);
        if($this->_firstNode) {
            $previous = NULL;
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL) {
                if($currentNode->data === $query) {
                    $newNode->next = $currentNode;
                   $previous->next = $newNode;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
        return $this;
    }

    public function getNthNode(int $position)
    {
        $count = 0;
        $currentNode = $this->_firstNode;
        if($this->_firstNode !== NULL) {
            while($currentNode !== NULL) {
                if($count === $position) return $currentNode;
                $count++;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function search(string $query)
    {
        if($this->_totalNodes) {
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL) {
                if($currentNode->data === $query) return $currentNode;
                $currentNode = $currentNode->next;
            }
        }
        return false;
    }

    public function deleteFirst()
    {
        if($this->_firstNode !== NULL) {
            if($this->_firstNode->next !== NULL) $this->_firstNode = $this->_firstNode->next;
            else $this->_firstNode = NULL;
            $this->_totalNodes--;
            return TRUE;
        }
        return FALSE;
    }

    public function deleteLast()
    {
        if($this->_firstNode !== NULL) {
            $currentNode = $this->_firstNode;
            if($currentNode->next === NULL) {
                $this->_firstNode = NULL;
            }else {
                $previousNode = NULL;
                while($currentNode->next !== NULL){
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }
                $previousNode->next = NULL;
                $this->_totalNodes--;
                return TRUE;
            }
        }
        return FALSE;
    }

    public function rewind():void 
    {
        $this->_currentPosition = 0;
        $this->_currentNode = $this->_firstNode;
    }

    public function valid(): bool
    {
        return $this->_currentNode !== NULL;
    }

    public function key(): mixed
    {
        return $this->_currentPosition;
    }

    public function next(): void
    {
        $this->_currentPosition++;
        $this->_currentNode = $this->_currentNode->next;
    }

    public function current(): mixed
    {
        return $this->_currentNode->data;
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