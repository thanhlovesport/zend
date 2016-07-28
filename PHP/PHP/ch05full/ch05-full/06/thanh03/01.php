<?php

    require_once 'Cat.class.php';
    $CatA = new Cat('Mimi');
    $CatA->showInfo();
    
    echo '<br/>'.$strCatA = serialize($CatA);