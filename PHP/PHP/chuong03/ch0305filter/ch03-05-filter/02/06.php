<?php
	$value = 'http://www.zend.vn';	
	
	
	if(filter_var($value, FILTER_VALIDATE_URL)){ // Cái này đúng
		echo "<br /> $value -  la url";
	}else{
		echo "<br /> $value - không la url";
	}