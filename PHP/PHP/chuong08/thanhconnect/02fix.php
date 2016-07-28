<?php
    // Kết nối
    $connection = @mysql_connect('localhost','root','');
    // Kiểm tra kết nối
    if(!$connection){
        die('Kết Nối Không Thành Công');
    } else 
        echo 'Kết Nối Thành Công';
    
    // Lấy danh sách database
    //$database = mysql_list_dbs($connection);
   $database = mysql_query('SHOW DATABASES');
    while($row = mysql_fetch_object($database)){
        // trả kết quả truy vấn mysql thành một đối tượng và gán vào biến row
       /*  echo '<pre>';
        print_r($row);
        echo '</pre>'; */
        // Đối tượng row trỏ đến database
        echo '<h3>'.$row->Database.'</h3>';
    }
        
    // Đóng kết nối
    mysql_close($connection);