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
$data = array('name'=> 'messi','url'=>'http://marketing.vn');
$options['position'] = 'right';
$options['brother_id'] = 4;
$parent = 1;
$tree->insertNode($data,$parent,$options);


