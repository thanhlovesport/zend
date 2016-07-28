<?php
	$subject	= 'PHP /PHP/ is easy';
	// kiem tra gia tri dac biet
	$pattern	= '#/PHP/#';
	
	if(preg_match($pattern, $subject, $match)==true){
		echo 'Tim thay';
	}else {
		echo 'Khong Tim thay';
	}
	
	echo "<pre>";
	print_r($match);
	echo "</pre>";