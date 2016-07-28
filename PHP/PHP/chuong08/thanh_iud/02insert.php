<?php
    // Káº¿t ná»‘i
    $connection = @mysql_connect('localhost','root','');
    // Kiá»ƒm tra káº¿t ná»‘i
    if(!$connection){
        die('Káº¿t Ná»‘i KhÃ´ng ThÃ nh CÃ´ng');
    } 
    
    // Insert dữ liệu vào database
    mysql_select_db('manager_user',$connection);
    
    // Dữ liệu nhận được từ phía người dùng
    $arrData = array('name'=> 'R', 'status'=>4,'ordering'=>15);
 
    function createInsertSQL($data){
        /* echo '<pre>';
        print_r($data);
        echo '</pre>'; */
        $newquery = array();
        if (!empty($data)){
            foreach ($data as $key=>$value){
                $cols.= ", ' $key ' " ; // name, status, ordering
                $vals.= ", '$value'";   // Messi, 4,15
            }
        }
        $newquery['cols']= substr($cols, 2);
        $newquery['vals']= substr($vals, 2);
        return $newquery;
    }
    
    $newquery = createInsertSQL($arrData);
    echo $query = "INSERT INTO `group`(".$newquery['cols'].") VALUES (".$newquery['vals'].")";
    /* echo '<pre>';
    print_r($newquery);
    echo '</pre>'; */
    
    
    
    
    
    // Câu lệnh insert được dữ liệu
    $result = mysql_query($query,$connection);
    if ($result == true)
        echo $total = mysql_affected_rows();
    else{
        echo 'False';
        echo mysql_error();
    } 
    // Ä�Ã³ng káº¿t ná»‘i
    mysql_close($connection);