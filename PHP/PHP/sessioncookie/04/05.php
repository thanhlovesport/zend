
<?php 
	session_start();
	$image = 'khanhtran.jpg'; // do hình ảnh cùng cấp với file 05;
	if (file_exists($image)){
	    echo 'File tồn tại';
	   /*  $test = getimagesize($image);
	    echo '<pre>';
	    print_r($test);
	    echo '</pre>'; */
	    $_SESSION['image']['info'] = getimagesize($image);
	    $_SESSION['image']['data'] = file_get_contents($image);
	}else {
	    echo 'File không tồn tại';
	}
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';