<?php

    require_once 'Cat.class.php';
    $CatA = new Cat('Mimi');
    $CatA->showInfo();
    
    $strCatA = serialize($CatA);
    echo '<br/>'.$strCatA;
    
    $objectcatA = unserialize($strCatA);
    echo '<pre>';
    print_r($objectcatA);
    echo '</pre>';