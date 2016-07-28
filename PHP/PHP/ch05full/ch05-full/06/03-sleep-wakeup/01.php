<?php
	require_once 'Cat.class.php';
	$catA = new Cat('Mimi');
	
	$catA->showInfo();
	
	$strCatA = serialize($catA);
	$unstrCatA = unserialize($strCatA);
	
	echo '<br />' . $strCatA;
	echo '<br/>';
    echo '<pre>';
    print_r($unstrCatA);
    echo '</pre>';