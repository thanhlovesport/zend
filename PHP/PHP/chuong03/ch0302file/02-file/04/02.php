<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$fileName	= 'files/abc.txt';
	
	$record		= file($fileName);
	
	$data		= file_get_contents($fileName);
	
	// Tập hợp các kí tự không phải là khoảng trắng
	preg_match_all('#\S#imsU', $data, $matches);
	// bỏ các kí tự xuống dòng
	preg_match_all('#\S\s\S#imsU', $data, $spaces);
	
	// Đếm số kí tự không có khoảng trắng ở mảng match
	$chaNoSpace	=	count($matches[0]);

    // đếm sô khoảng trắng trong chuỗi
    //echo  $space = substr_count($data,'');
	echo '<ul>';
		echo '<li>Tá»•ng sá»‘ dÃ²ng: <b>' . count($record) . '</b></li>';
		// đếm số từ trong chuối
		echo '<li>Tá»•ng sá»‘ tá»«: <b>' . str_word_count($data) . '</b></li>';
		// đếm số khoảng trắng trong chuỗi
		echo '<li>Tá»•ng sá»‘ khoáº£ng tráº¯ng: <b>' . count($spaces[0]) . '</b></li>';
		echo '<li>Tá»•ng sá»‘ kÃ½ tá»± (no space): <b>' . $chaNoSpace . '</b></li>';
	echo '</ul>';