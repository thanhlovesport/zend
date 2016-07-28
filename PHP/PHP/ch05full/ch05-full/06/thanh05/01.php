<?php
    require_once 'Cat.class.php';
    $catA = new Cat();
    $catA->age = 10;
    $catA->name = 'Miumiu';
    echo $catA->age;
    $catA->showinfo();