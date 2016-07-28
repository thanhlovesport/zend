<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>LÃ m viá»‡c vá»›i thá»�i gian</title>
	<link rel="stylesheet" href="../css/style.css" />


</head>
<body>
	<div class="content">
		<h1>LÃ m viá»‡c vá»›i thá»�i gian</h1>
		<?php
			// Leap year: n chia het cho 4 vÃ  (n chia het 400 hoáº·c n khong chia het cho 100) 
			// n % 400 == 0 || (n % 4 == 0 && n % 100 != 0)		
			function kiemtranamnhuan($year){
			    $flag = false;
			    if(($year % 400==0)||($year % 4 == 0 && $year %100 !=0)) $flag = true;
			    return $flag;
			}
			$year = 2013;
			if(kiemtranamnhuan($year)){
			    echo "Năm Nhuận";
			}else {
			    echo "Năm ".$year." Không phải năm nhuận";
			}
		?>
	</div>
</body>
</html>