<?php

	$variable = 'Nguyen Van A';
	
	function convertString($string){
		$string = str_replace(' ', '-', $string);
		return $string;
	}
	
	$newstring = convertString($variable);
	echo $newstring."<br/>";
	
	echo filter_var($variable, FILTER_CALLBACK, array('options'=>'convertString'));