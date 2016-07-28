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


/* echo '<pre>';
print_r($database);
echo '</pre>'; */