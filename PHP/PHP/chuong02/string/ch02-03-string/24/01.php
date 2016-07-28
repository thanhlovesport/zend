<?php
	$str	= "This is a test";
	
	//$index	= substr_count($str, "is");
	$index	= substr_count($str, "is", 1);	// s is a test

	
	echo $index;

