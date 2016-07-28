<?php
	$date = date_parse_from_format('d/m/Y H:i:s', '15/06/2013 13:20:35') ;
	// Xác định khoảng thời gian giữa 2 mốc 
	$timeStampe	= mktime($date['hour'], $date['minute'], $date['second'], $date['month'], $date['day'], $date['year']);
	// mktime xác định số giây của thời gian truyền vào so với năm 1970
	echo date('H:i:s d/m/Y', $timeStampe); // qui đổi số giây đó ra thời gian tương ứng cách ngày 1/1/1970 bao nhiêu
?>