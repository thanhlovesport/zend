<?php
	setcookie('name', 'This is a test', time() + 3600);
	
	echo '<pre>';
	print_r($_COOKIE);
	echo '</pre>';
	
	// setcookie('name'); // xóa đi một cookie
	
	echo '<pre>';
	print_r($_COOKIE);
	echo '</pre>';