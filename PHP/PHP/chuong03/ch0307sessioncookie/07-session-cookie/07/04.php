<?php
	setcookie('name', 'This is a test', time() + 3600);
	
	echo '<pre>';
	print_r($_COOKIE);
	echo '</pre>';
	
	setcookie('name', 'This is a test',  time() - 3600); // xóa cookie , thay bằng một time đã hết hạn
	
	echo '<pre>';
	print_r($_COOKIE);
	echo '</pre>';