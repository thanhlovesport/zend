<?php
require_once 'database.class.php';

$params = array(
                    'server'=>'localhost',
                    'name'=>'root',
                    'password'=>'',
                    'database'=> 'manager_user',
                    'table'=>   'group'
                );
$database = new Database($params);

$arrData = array(
						array('name'=>'Admin 1', 'status' => 0, 'ordering' => 9),
						array('name'=>'Admin 2'),
						array('name'=>'Admin 3', 'ordering' => 9),
						array('id' => 200, 'name'=>'Admin 4', 'ordering' => 99, 'status' => 0)
					);
echo $lastid = $database->insert($arrData,'multy');


/* echo '<pre>';
print_r($database);
echo '</pre>'; */