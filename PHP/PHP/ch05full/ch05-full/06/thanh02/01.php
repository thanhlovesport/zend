<?php
 
    function __autoload($className){
        $path = '/class/';
        require_once  $path."{$className}.class.php";
    }
    
    $cat = new Cat('Mimi',2,'Blue');
    $cat->showInfo();
    
    $Lion = new Lion('Huraha',5);
    $Lion->showInfo();
    