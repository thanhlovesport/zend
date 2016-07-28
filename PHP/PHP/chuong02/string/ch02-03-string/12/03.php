
<?php
	$str	= "        Php        is      easy             ";     // The wonderful example
	
	// Khoang trang thua o ben trai va ben phai
	$str 	= trim($str);
	
	// Khoang trang du thua giua cac tu
	// Php is easy
	
	$array 	= explode(" ", $str);
	
	
	foreach($array as $key => $value){
		if(trim($value) == null) unset($array[$key]); // Nếu mà loại bỏ đi các khoảng trắng mà phần tử đó vẫn hk có giá trị gì ta bỏ nó luôn
	}
	
	$str = implode(" ", $array);
	
	echo $str . ' length: ' . strlen($str);
	
?>
