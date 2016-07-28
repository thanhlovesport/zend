<?php
	// 1 + 2 + 3 + ... + namespace 
	// sum(1) = 1
	// sum(2) = 1 + 2 = sum(1) + 2
	// sum(3) = 1 + 2 + 3 = sum(2) + 3
	// sum(n) = sum(n-1) + n
	
	function sum($number){
		$result = 0;
		if($number >= 1) {
			$result = sum($number - 1) + $number;
		}
		
		return $result;
	}
	
	echo sum(4);
	
	echo '<br/>';
	function tongmotso($number){
	    $sum  = 0;
	    if($number >= 1){
	        $sum = $number + sum($number - 1);
	    }
	    return $sum;
	    
	}
	
	echo tongmotso(5);
	
	$menu = array(5=>9, 'messi'=>'hay');
	echo '<pre>';
	print_r($menu);
	echo '</pre>';
	// Hàm đệ qui tính tổng
	
	function sumanumber($number){
	    $result = 0;
	    if ($number > 1){
	        $result = $number + sum($number - 1) ;
	    }
	    return $result;
	}
	
	function tongso($number){
	    $tong = 0;
	    while($number >= 1){
	        for($i = 1; $i <= $number; $i++)
	            $tong += $i;
	    }
	    return $tong;
	}
	function tinhtongso($number){
	    $tong = 0;
	    while($number >= 1){
	        $tong = $number + tinhtongso($number - 1);
	    }
	    return $tong;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	