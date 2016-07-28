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


$id = '11';
$data = array('name'=> 'Group O.1.1','url'=>'group_o.1.1.vn');
$newParentID = 4;
$tree->updateNode($data,$id,$newParentID);

