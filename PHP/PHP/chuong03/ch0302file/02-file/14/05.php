<?php
	$dir	= opendir('..'); // mở thư mục lên và thao tác
	
	while(($file = readdir($dir)) != false) {
		echo 'filename: ' . $file . '<br />';
	}
	
	closedir($dir);