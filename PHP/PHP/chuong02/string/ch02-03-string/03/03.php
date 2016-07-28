<?php
	function joinString($str1, $str2, $joinCharacter = " "){
		$result = $str1 . $joinCharacter . $str2;
		return $result;
	}
	
	$result = joinString("PHP", "is easy", "-----------");
	echo $result.'<br/>';
	
	function JoinString1($string1,$string2,$character){
	    $result = $string1.$character.$string2;
	    return $result;
	}
	
	$result2 = JoinString1('Messi', 'is the best football player', " ");
	// 	$result2 = JoinString1('Messi', 'is the best football player', ' ');
	
	echo $result2.'<br/>';
	
	$str1 = 'Ronaldo is';
	$str2 = 'Handsome';
	
	echo $str1." ".$str2;
	//echo $str1.' '.$str2;
	
	