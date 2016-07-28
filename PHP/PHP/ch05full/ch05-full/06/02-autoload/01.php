<?php

	/* function __autoload($clasName){
		$path = '/class/';
		require_once $path . "{$clasName}.class.php";
	} */
	
	function __autoload($classname){
	    $filename = "class/$classname.class.php";
	    if(file_exists($filename)) require_once $filename;
	}
	
	$cat = new Cat('Mimi');
	$cat->showInfo();
	
	$lion = new Lion('Lion A');
	$lion->showInfo();