<?php
	$str = "PHP is easy";	// 3
	
	$worldCount	= str_word_count($str);
	
	echo $worldCount;
	settype($str, "int");
	echo '<br/>    '.$str;
	