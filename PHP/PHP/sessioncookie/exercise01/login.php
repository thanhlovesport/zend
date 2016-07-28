<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Login</title>

</head>
<body>

	<div id="wrapper">
    	<div class="title">Login</div>
        <div id="form">   
        <?php 
            session_start(); // tạo session
            if ($_SESSION['flagPermission']==true){
                echo '<h3>Xin chÃ o: '.$_SESSION['fullName'].'</h3>';
            }else {
                
            }
         ?>
        <!-- đưa qua trang process.php để xử lí  -->
			<form action="process.php" method="post" name="add-form">
				<div class="row">
					<p>Username</p>
					<input type="text" name="username" >
				</div>
				
				<div class="row">
					<p>Password</p>
					<input type = "password" name = "password"/>
				</div>
				
				<div class="row">
					<input type="submit" value="Đăng Nhập" name="submit">
				</div>
						
			</form>    
        </div>
        
    </div>
</body>
</html>
