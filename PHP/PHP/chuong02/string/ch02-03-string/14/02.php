<?php
	$str	= "yellow|pink|blue"; 
	
	$arr	= explode("|", $str);
	
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	$str1 = "Messi,Ronaldo,Silva";
	$arr1 = explode(",", $str1);
	echo '<pre>';
	print_r($arr1);
	echo '</pre>';
	
?>
