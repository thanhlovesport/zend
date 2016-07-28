<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$data	= parse_ini_file('test.ini', TRUE); // đọc file ini, true để đưa sesion vào mảng
	
	echo '<pre>';
	print_r($data);
	echo '</pre>';