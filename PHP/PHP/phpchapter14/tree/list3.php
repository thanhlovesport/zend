<?php
    require_once 'nested.set.php';
    
    $arrconnect = array(
        'server' => 'localhost',
        'username'=> 'root',
        'password' => '',
        'db'       =>  'nested_set',
        'table'    =>   'menu',
    );
    $tree = new Nested_set($arrconnect);
    echo '<br/>'.$tree->gettable(); // Sẽ in ra bảng menu
    
    
    // Tìm đường di của một node đến một node
    $sql =  'SELECT *
            FROM'.$tree->gettable().' AS node, '.$tree->gettable(). 'AS parent
            WHERE node.left BEETWEEN parent.left and parent .right
            AND node.id = 16
            ORDER BY node.left ASC';
            
    echo '<br/>'.$sql;
    
    
    $result = mysql_query($sql,$tree->getconnect());
    
    while ($row = mysql_fetch_assoc($result)){
       /*  echo '<pre>';
        print_r($row);
        echo '</pre>'; */
        $strMenu = '';
        if ($row['level'] == 0){
            $strMenu = '+ '.$row['name'];
        }else{
            $strMenu = str_repeat('|$mdash', $row['level']).$row['name'];
        }
        echo $strMenu;
    }