<?php

	$variable = 4;
	
	function checkNumber($number){
		$flag = false;
		if($number % 2 ==0) $flag = true;
		return $flag;
	}
	
	if(!filter_var($variable, FILTER_CALLBACK, array('options'=>'checkNumber'))){
		echo 'So le';
	}else{
		echo 'So chan';
	}
	
	echo"<br/>";
	
	$variables = 7;
	function checkoddeven($number){
	    $flag = false;
	    if($number %2 == 0) $flag = true;
	    return $flag;
	}
	if(filter_var($variables,FILTER_CALLBACK,array('options'=>'checkoddeven'))){
	    echo 'Số chắn';
	}else{
	    echo 'Số lẻ';
	}