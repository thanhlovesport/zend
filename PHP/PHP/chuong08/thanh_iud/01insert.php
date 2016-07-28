<?php
    // Káº¿t ná»‘i
    $connection = @mysql_connect('localhost','root','');
    // Kiá»ƒm tra káº¿t ná»‘i
    if(!$connection){
        die('Káº¿t Ná»‘i KhÃ´ng ThÃ nh CÃ´ng');
    } 
    
    // Insert dữ liệu vào database
    mysql_select_db('manager_user',$connection);
    
    echo $sql = "INSERT INTO `group`(`name`,`status`,`ordering`) VALUES
        ('Member1','1','10'),('Member2','2','11')";
    // Câu lệnh insert được dữ liệu
    $result = mysql_query($sql,$connection);
    if ($result == true)
        echo $total = mysql_affected_rows();
    else{
        echo 'False';
        echo mysql_error();
    } 
        
    // Ä�Ã³ng káº¿t ná»‘i
    mysql_close($connection);