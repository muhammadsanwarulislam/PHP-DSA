<?php

use App\LinkedList\SingleLinkedList;

require __DIR__. '/../vendor/autoload.php';

$singleLinkedList = new SingleLinkedList();
$singleLinkedList->insertAtFirst("Data Structures");
$singleLinkedList->insertAtFirst("PHP OPP");
$singleLinkedList->insertAtFirst("Computer fundamental");

$singleLinkedList->insertAtLast('1');
$singleLinkedList->insertAtLast('2');
$singleLinkedList->insertAtLast('3');
$singleLinkedList->insertAtLast('4');

// var_dump($singleLinkedList->getNthNode(5));
$singleLinkedList->showSingleLinkedListData();





