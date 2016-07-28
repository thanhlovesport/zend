<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$filename 	= 'files/test.txt';
	
	if(file_exists($filename)){ // kiểm tra file có tồn tại hay không
		$data = file($filename); // đọc file trong thư mục filename thành một mảng 
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		unset($data[2]); // Xóa phần tử thứ 2 trong mảng
		
		file_put_contents($filename, $data);
	}else{
		echo 'Tap tin khong ton tai';
	}
	