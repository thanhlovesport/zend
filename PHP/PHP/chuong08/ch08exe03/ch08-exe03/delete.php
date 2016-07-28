<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP FILE</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/my-js.js"></script>
</head>
<body>
<?php
// Kết nối trước, lấy id người dùng chọn
// Nếu item không rỗng thì sao ?
// Kiểm tra phương thức Post của người dùng
	require_once 'connect.php';
	$id	= $_GET['id']; 
	$query = "SELECT * FROM `group` WHERE `id` = '$id'";// giá trị id mà người dùng delete
	$item = $database->singleRecord($query); // Trả về 1 record
	echo '<pre>';
	print_r($item);
	echo '</pre>';
	
	if(!empty($item)){
		$status = ($item['status']==0) ? 'Inactive' : 'Active';
		$xhtml = '<div class="row">
						<p>ID:</p>'.$item['id'].'
					</div>
					<div class="row">
						<p>Group name:</p>'.$item['name'].'
					</div>
					<div class="row">
						<p>Status:</p>'.$status.'
					</div>
					<div class="row">
						<p>Ordering:</p>'.$item['ordering'].'
					</div>
					<div class="row">
						<input type="hidden" name="id" value="'.$item['id'].'">
						<input type="submit" value="Delete" name="submit">
						<input type="button" value="Cancel" name="cancel" id="cancel-button">
					</div>';
	}else{
		header('location: error.php');
		exit();
	}
	
	if(isset($_POST['submit'])){ // Nếu điều này tồn tại chứng tỏ người dùng đã nhấn delete ->
		$id = $_POST['id']; // Ta thực hiện thao tác delete đi dòng dữ liệu đó
		$query = "DELETE FROM `group` WHERE `id` = '$id'";
		$database->query($query); // Thực hiện delete
		$xhtml = '<div class="success">Success! Click vÃ o <a href="index.php"> Ä‘Ã¢y</a> Ä‘á»ƒ quay vá»� trang quáº£n lÃ½.</div>';
	}
?>
	<div id="wrapper">
    	<div class="title">PHP FILE</div>
        <div id="form">   
	        <form action="" method="post" name="main-form">
	        <?php
	        	echo $xhtml;
			?>
			</form>    
        </div>
    </div>
</body>
</html>
