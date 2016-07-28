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

$ids = array(4,8);

echo $database->delete($ids);


/* echo '<pre>';
print_r($database);
echo '</pre>'; */