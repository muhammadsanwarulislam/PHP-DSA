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
$singleLinkedList->showSingleLinkedListData();


//To get access static property of the class we don't need to create object.
//use of static variables may be use to cache



