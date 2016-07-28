<?php
    require_once 'Lion.class.php';
    $Lion = new Lion();
    $Lion->age = 10;
    $Lion->name = 'Miumiu';
    $Lion->color = 'White';
   
    echo '<pre>';
    print_r($Lion);
    echo '</pre>';
    
    echo $Lion->name;