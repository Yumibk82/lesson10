<?php


$list = new SplDoublyLinkedList();

$list->push("a");
$list->push("b");
$list->push("c");
$list->push("d");

$list->unshift(1);
$list->unshift(2);
$list->unshift(3);
$list->pop();
$list->shift();
$list->add(3,2.24);

$list->setIteratorMode(splDoublyLinkedList::IT_MODE_DELETE);
for($list->rewind();$list->valid();$list->next()){
    echo $list->current()."<br>";
}
//echo "<pre>";
//var_dump($list);

