
<!-- Tiến Hành Kết Nối có liên quan đến hàm construct trong đây-->
<?php
require_once 'class/Database.class.php';
$params		= array(
    'server' 	=> 'localhost',
    'username'	=> 'root',
    'password'	=> '',
    'database'	=> 'manage_user',
    'table'		=> 'user',
);
$database = new Database($params);
// Tìm kiếm thông tin người dùng trong bảng online
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
// ip người dùng và trang người dùng truy cập
$ip = $_SERVER['REMOTE_ADDR'];
$url = $_SERVER['PHP_SELF'];

// Tìm kiếm userinfo trong online
$query[] = "SELECT `id`";
$query[] = "FROM `online`";
$query[] = "WHERE `ip` = '".$ip."' ";
$query[] = "AND `url` = '".$url."'";
echo $query = implode(" ", $query);

// Thực hiện câu query này
//$database->query($query);
// gọi hàm exist trả về số dòng mà dữ liệu trùng khớp
//echo $total =  $database->exist($query);
$flagexist = $database->exist($query);
// Trả về danh sách các địa chỉ IP thỏa điều kiện này
$list = $database->listRecord(); // nếu > 0 có tồn tại ngược lại không có dòng dữ liệu nào thõa dk
$arrdata = array('ip'=>$ip ,'url'=>$url,'time' => time());
if ($flagexist){
    // update
    $where = array(
        array('ip',$ip,'and'),
        array('url',$url)
    );
    $database->update($arrdata, $where);
}else {
    // insert
    $database->insert($arrdata);
}

// DELETE : time + 15*60 < time() => xóa record
$time = time();
$query = "DELETE from `online` WHERE `time` + 15*60 <$time()";
$database->query($query);
 
?>



















<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>User Online</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">useronline</div>
            <div id = "form">
            <?php echo __FILE__;?>
            </div>
        </div>
</body>
</html>
