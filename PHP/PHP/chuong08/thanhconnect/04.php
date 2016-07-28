<?php
    // Kết nối
    $connection = @mysql_connect('localhost','root','');
    // Kiểm tra kết nối
    if(!$connection){
        die('Kết Nối Không Thành Công');
    } else 
        echo 'Kết Nối Thành Công';
   // Danh sách tables
   $tables = mysql_list_tables('manager_user',$connection);
   /* while($row = mysql_fetch_object($tables)){
       // trả kết quả truy vấn mysql thành một đối tượng và gán vào biến row
        echo '<pre>';
        print_r($row);
        echo '</pre>'; 
       // Đối tượng row trỏ đến database
       echo '<h3>'.$row->Tables_in_manager_user.'</h3>';
   } */
   
   while($row = mysql_fetch_array($tables)){
       // trả kết quả truy vấn table thành một mảng và gán vào biến row
       echo '<pre>';
       print_r($row);
       echo '</pre>';
       // Đối tượng row trỏ đến database
       echo '<h3>'.$row[0].'</h3>';
   }
        
    // Đóng kết nối
    mysql_close($connection);