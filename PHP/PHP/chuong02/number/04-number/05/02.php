<?php
	$arrNumber = array(1,-3, 8.5, 8.51, 4, 9);
	

	$min	=	min($arrNumber);
	$max	=	max($arrNumber);
	$sum	= 	array_sum($arrNumber);
	
	echo "Min: " . $min . "<br />";
	echo "Max: " . $max . "<br />";
	echo "Sum: " . $sum . "<br />";
	
	$arrnumber2 = array(-8,-2.5,-4,2,5,7,9);
	$min1 = min($arrnumber2);
	$max2 = max($arrnumber2);
	$sum2  = array_sum($arrnumber2);
	
	echo "Min: " . $min1 . "<br />";
	echo "Max: " . $max2 . "<br />";
	echo "Sum: " . $sum2 . "<br />";
	
