<?php
	$array	= glob('*', GLOB_ONLYDIR); // Chỉ hiển thị các thư mục
	
	echo '<pre>';
	print_r($array);
	echo '</pre>';