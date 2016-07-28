<?php
	$path	= 'images';
	
	$data	= scandir($path); // trả về danh sách các folder, thư mục dưới dạng mảng
	
	echo '<pre>';
	print_r($data);
	echo '</pre>';