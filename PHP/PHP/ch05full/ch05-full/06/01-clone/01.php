<?php

	require_once 'Cat.class.php';
	
	$catA = new Cat('Mimi', 3, 'yellow', '2kg');
	$catC = new Cat('Mummim',8,'green','6kg');
	
	
	$catB = clone $catA;
	$catD = clone $catC;
	
	$catD->setName('Mummimi');
	
	$catB->setName('Kitty');
	$catB->setAge(5);
	$catB->setColor('blue');
	
	$catA->showInfo();
	echo '<hr /><br />';
	$catB->showInfo();
	
	echo '<hr /><br />';
	
	$catD->showInfo();
	
	echo '<pre>';
	print_r($catD);
	echo '</pre>';