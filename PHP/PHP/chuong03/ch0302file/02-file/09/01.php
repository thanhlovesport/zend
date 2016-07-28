<?php
	
    // tạo ra thư mục ở đường dẫn path
	$path	=	'abc';
	
	$path	=	'abc/def';
	if(file_exists($path)==false){
		mkdir($path);
	}