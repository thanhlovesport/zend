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
    
    // In ra node gốc
   /*  $sql = 'SELECT *
            FROM'.$tree->gettable().
            'ORDER BY left ASC'; */
    
    // Không in Node gốc
   /*  $sql =  'SELECT *
            FROM'.$tree->gettable().'
            WHERE left !=0   
            ORDER BY left ASC'; */
    
    // Phân theo level
    // Không in Node gốc
    $sql =  'SELECT *
            FROM'.$tree->gettable().'
            WHERE left !=0
            AND level <= 2
            ORDER BY left ASC';
    echo '<br/>'.$sql;
    
    
    $result = mysql_query($sql,$tree->getconnect());
    
    while ($row = mysql_fetch_assoc($result)){
       /*  echo '<pre>';
        print_r($row);
        echo '</pre>'; */
        $strMenu = '';
        if ($row['level'] == 1){
            $strMenu = '+ '.$row['name'];
        }else{
            $strMenu = str_repeat('|$mdash', $row['level'] - 1).$row['name'];
        }
        echo $strMenu;
    }