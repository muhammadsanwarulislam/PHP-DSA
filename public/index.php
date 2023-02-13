<?php

use App\LinkedList\SingleLinkedList;

require __DIR__. '/../vendor/autoload.php';

$singleLinkedList = new SingleLinkedList();
// $singleLinkedList->insertAtFirst("Data Structures");
// $singleLinkedList->insertAtFirst("PHP OPP");
// $singleLinkedList->insertAtFirst("Computer fundamental");

// $singleLinkedList->insertBefore('Pythond','PHP OPP');

$singleLinkedList->insertAtLast('1');
$singleLinkedList->insertAtLast('2');
$singleLinkedList->insertAtLast('3');
$singleLinkedList->insertAtLast('4');

// $singleLinkedList->deleteFirst();
// $singleLinkedList->deleteLast();

// var_dump($singleLinkedList->search('PHP OPP'));
// var_dump($singleLinkedList->getNthNode(2)->data);

$singleLinkedList->showSingleLinkedListData();





