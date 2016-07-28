<?php
	session_start();
	header('Content-type: image/jpeg');
	// Tạo phần nền có kích thước dài và rộng tương ứng
	$captcha	= imagecreate(100, 50);
	// Tạo màu sắc cho phần nền
	imagecolorallocate($captcha, 42, 194, 42);
	// Hàm md5 để mã hóa chuỗi, time ở đây thay đổi theo thời gian
	// substring dùng để lấy một vài kí tự ở đây bắt đầu từ vị trí 0 lây 5 kí tự
	$content	= substr(md5(time()*20-1345),0,5);
	// Tạo nội dung cho phần nền, biến $content tạo giá trị ngẫu nhiên
	$text		= imagettftext($captcha, 18, 5, 20, 30, imagecolorallocate($captcha, 15, 24, 15), 'vnavan.ttf', $content);
	// Lưu vào mảng session
	$_SESSION['code'] = $content;
	// Tạo phần hình ảnh cho nền
	imagejpeg($captcha);
	// Sau khi sử dụng xong tấm hình sẽ bị xóa để thay thế cho tấm mới
	imagedestroy($captcha);