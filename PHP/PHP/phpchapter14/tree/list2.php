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
    $infoNode = $tree->getNodeinfo(5);
    echo '<pre>';
    print_r($infoNode);
    echo '</pre>';
    
    // Duyệt các node của một nhánh nào đó
    $sql =  'SELECT *
            FROM'.$tree->gettable().'
            WHERE left BEETWEEN '.$infoNode['left'].'AND'.$infoNode['right'].'
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