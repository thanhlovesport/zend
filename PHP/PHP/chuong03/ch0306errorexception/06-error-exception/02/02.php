<?php

	if(file_exists('data.txt')){
		$data	= file_get_contents('data.txt');
		
		foreach($data as $key => $value){
			echo $value['name'] . '<br />';
		}
	}else{
		die('File not found');
	}
	
	// Xu ly $data
	echo '<br />Here!<br/>';
	
	if(file_exists('messi.txt')){
	    $data = file_get_contents('messi.txt');
	    foreach($data as $key=>$value){
	        echo $value['name'];
	    }
	}else{
	    die('Không tìm thấy file');
	}
	

	
	