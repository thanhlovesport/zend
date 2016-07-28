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
            FROM'.$tree->gettable().'
            WHERE left != 0
            ORDER BY left ASC';
            
    echo '<br/>'.$sql;
    
    
    $result = mysql_query($sql,$tree->getconnect());
?>

<table width = "500px" border="1">
<?php 
    while ($row = mysql_fetch_assoc($result)){
       /*  echo '<pre>';
        print_r($row);
        echo '</pre>'; */
        $orderKey = array_search($val['id'], $ordering[$val['parent']]) + 1;
        
        $strMenu = '';
        if ($row['level'] == 0){
            $strMenu = '+ '.$row['name'];
        }else{
            $strMenu = str_repeat('|$mdash', $row['level']).$row['name'];
        }
?>
<tr>
    <td width="30" style="text-align: center;"><?php echo $id;?></td>
	<td><?php echo $strMenu;?></td>
	<td width="100" style="text-align: center;"><?php echo $orderKey;?></td>
</tr>
<?php
    }
?>
</table>
    