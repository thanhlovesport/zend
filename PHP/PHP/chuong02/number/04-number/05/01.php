<?php
	$arrNumber = array(1,-3, 8.5, 8.51, 4, 9);
	
	sort($arrNumber);
	
	$sum = 0;
	foreach($arrNumber as $value){
		$sum += $value;
	}
	
	$min	=	$arrNumber[0];
	$max	= 	$arrNumber[count($arrNumber)-1];
	
	echo "Min: " . $min . "<br />";
	echo "Max: " . $max . "<br />";
	echo "Sum: " . $sum . "<br />";
	
	$arrnumber2 = array(-8,-2.5,-4,2,5,7,9);
	sort($arrnumber2);
	$tong = 0;
	foreach ($arrnumber2 as $value){
	    $tong+= $value;
	}
	$min = $arrnumber2[0];
	$max = $arrnumber2[count($arrnumber2) - 1];
	
	echo 'Min: '.$min.'<br/>';
	echo 'Max: '.$max.'<br/>';
	echo 'Tong: '.$tong.'<br/>';