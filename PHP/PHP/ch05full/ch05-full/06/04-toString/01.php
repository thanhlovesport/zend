<?php
	require_once 'Cat.class.php';
	$catA = new Cat('Mimi');
	echo $stringcatA = serialize($catA);
	
	echo $catA;
	
