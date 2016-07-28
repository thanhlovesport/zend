<?php
    // Kết nối
    $connection = @mysql_connect('localhost','root','');
    // Kiểm tra kết nối
    if(!$connection){
        die('Kết Nối Không Thành Công');
    } else 
        echo 'Kết Nối Thành Công';
   // Danh sách tables
   $tables = mysql_query('SHOW TABLES FROM manager_user');
   while($row = mysql_fetch_array($tables)){
       // Đối tượng row trỏ đến tables
       echo '<h3>'.$row[0].'</h3>';
   } 
        
    // Đóng kết nối
    mysql_close($connection);