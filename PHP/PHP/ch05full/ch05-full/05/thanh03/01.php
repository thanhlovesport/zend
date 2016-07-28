<?php
    require_once 'Cat.class.php';
    $cat = new Cat('Meo',1,'Yellow','1kg');
    $cat->showInfo();
    echo '<pre>';
    print_r($cat);
    echo '</pre>';