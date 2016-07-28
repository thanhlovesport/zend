<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$number = 88;
	$n		= $number % 2;
	
	$resultFirst 	= ($number >= 0) ? "NguyÃªn dÆ°Æ¡ng" : "NguyÃªn Ã¢m";
	$resultLast 	= ($n == 0) ? "cháº¯n" : "láº»";
	
    $result = $resultFirst . " " . $resultLast;
	echo $result;
	
	$example = 99;
	$i = $example % 2;
	$result1 = ($example >= 0) ? "Nguyên dương" : "Nguyên âm";
	$result2 = ($i == 0) ? "Chẵn" : " lẽ";
	echo $result1.$result2;