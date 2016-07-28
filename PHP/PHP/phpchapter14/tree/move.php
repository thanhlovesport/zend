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

// Move Right
/* $options['position'] = 'right';
$id = 9;
$parent = 5;
$tree->moveNode($id,$parent,$options); */

// Move Left

/* $options['position'] = 'left';
$id = 9;
$parent = 5;
$tree->moveNode($id,$parent,$options); */


// Move Before
/* $options['position'] = 'before';
$options['brother']  = 6;
$id = 9;
$parent = 1;
$tree->moveNode($id,$parent,$options); */

// Move After
/* $options['position'] = 'after';
$options['brother']  = 4;
$id = 9;
$parent = 1;
$tree->moveNode($id,$parent,$options);
 */
 
// Moveup
/*  $id = 9;
 $tree->moveup($id); */
 
//Move Down
$id = 9;
$tree->moveDown($id);

