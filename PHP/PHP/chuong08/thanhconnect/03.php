<?php
    // Kết nối
    $connection = @mysql_connect('localhost','root','');
    // Kiểm tra kết nối
    if(!$connection){
        die('Kết Nối Không Thành Công');
    } else 
        echo 'Kết Nối Thành Công';
   // Chọn database muốn thao tác
   mysql_select_db('manager_user',$connection);
        
    // Đóng kết nối
    mysql_close($connection);