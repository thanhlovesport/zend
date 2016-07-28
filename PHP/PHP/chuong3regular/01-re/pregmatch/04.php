<?php
	/* $subject	= 'phamngocthanh3009@gmail.com';
	$pattern	= '#^[a-z][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#';
	
	if(preg_match($pattern, $subject, $match)==true){
		echo 'Email hop le';
	}else {
		echo 'Email khong hop le';
	} */
	/* function checkemail($value){
	    $pattern = '#^[a-z][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#';
	    $flag = false;
	    if(preg_match($pattern, $value)==true){
	       $flag = true;
	    }
	    return $flag;
	}
	function checkusername($value){
	    $pattern = '#^[a-z_][a-z0-9_\.\s]{4,31}$#';
	    $flag = false;
	    if(preg_match($pattern, $value)==true){
	        $flag = true;
	    }
	    return $flag;
	}
	function checkpassword($value){
	    $pattern = '#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
	    $flag = false;
	    if (preg_match($pattern, $value)){
	        $flag = true;
	    }
	    return $flag;
	}
	function checkwebsite($value){
	    $pattern = '#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
	    $flag = false;
	    if (preg_match($pattern, $value)){
	        $flag = true;
	    }
	    return  $flag;
	}
	$result = checkwebsite('http://www.blogtamtay.vn');
	echo $result; */
	function checkinput($value,$type){
	    switch ($type){
	        case 'email';
	        $pattern = '#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
	        break;
	        case 'username';
	        $pattern = '#^[a-z_][a-z0-9_\.\s]{4,31}$#';
	        break;
	        case 'password';
	        $pattern = '#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,8}$#';
	        break;
	        case 'website';
	        $pattern = '#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
	    }
	    $flag = preg_match($pattern, $type);
	    return $flag;
	    
	}