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

$data = array('status' => 1, 'ordering' => 100, 'name' => 'Reus');

echo $database->update($data,$where);


/* echo '<pre>';
print_r($database);
echo '</pre>'; */