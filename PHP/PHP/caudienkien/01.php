<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$number = 20;
	if($number % 2 == 0){
		echo 'Số chẵn';
	}
	
	$result = ($number % 2 != 0) ? "Số lẻ" : "Số chẵn";
	echo $result;
	
	echo '<br/>';
	$string = 'thanhmatmoc';
	$ketqua = ($string == 'thanhmatmoc') ? "dungroi": "sai roi";
	echo $ketqua;