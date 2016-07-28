<?php

	$path	=	'abc/def';
	
	if(file_exists($path)==true){
		rmdir($path); // xóa folder trong thư mục path
	}