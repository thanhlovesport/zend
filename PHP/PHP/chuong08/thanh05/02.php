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

$arrData = array('name'=>'Member 1234', 'status' => 0, 'ordering' => 9);
echo $lastid = $database->insert($arrData);


/* echo '<pre>';
print_r($database);
echo '</pre>'; */
