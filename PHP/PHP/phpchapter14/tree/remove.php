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


// $id = 5;

// Remove Branch
// $tree->removeNode(5);

// Remove One
$id = 5;
$option = 'one';
$tree->removeNode($id,$option);

