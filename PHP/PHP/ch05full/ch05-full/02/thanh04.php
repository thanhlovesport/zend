<?php

require_once 'thanh.cat.class.php';
$catA = new Cat();
/* echo '<br/> Name: '.$catA->name;
echo '<br/> Color:'.$catA->getcolor(); */
// cho con mèo một cái tên
$catA->setname('Meo');
$catA->setcolor('yellow');
$catA->setage(1);
$catA->showinfo();

$catB = new Cat();

$catB->setname('Moon');
$catB->setcolor('White');
$catB->setage(1);
$catB->showinfo();













