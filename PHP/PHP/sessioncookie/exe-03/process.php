<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Process</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">PROCESS</div>
        <div id="form">   
			<?php
				require_once 'functions.php';
				if($_COOKIE['fullName']!= NULL){
					if($_SESSION['timeout'] + 20 > time()){
						echo '<h3>Xin chÃ o: '.$_COOKIE['fullName'].'</h3>';
						echo '<a href="logout.php">Ä�Äƒng xuáº¥t</a>';
					}
					
				}else{
				    // nếu username và password hợp lệ lấy thông tin được lưu trong CSDL
					if(!checkEmpty($_POST['username']) && !checkEmpty($_POST['password'])){
						$username 	= $_POST['username'];
						$password 	= md5($_POST['password']);
						$data 		= parse_ini_file('users.ini');
						$userInfo 	= explode('|', $data[$username]) ;
						
						if($userInfo[0] == $username && $userInfo[1] == $password){
							setcookie('fullName',$userInfo[2],time()+20);
							echo '<h3>Xin chÃ o: '.$_COOKIE['fullName'].'</h3>';
							echo '<a href="logout.php">Ä�Äƒng xuáº¥t</a>';
						}else{
							header('location: login.php');
						}
					}else{
						header('location: login.php');
					}
				}
			?>
        </div>
        
    </div>
</body>
</html>
