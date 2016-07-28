<?php
    require_once 'Cat.class.php';
    $catA = new Cat();
    $catA->age = 10;
    $catA->name = 'Miumiu';
    $catA->color = 'White';
    echo $catA->age.'<br/>';
    echo $catA->name.'<br/>';
    echo $catA->color.'<br/>';
    $catA->showinfo();