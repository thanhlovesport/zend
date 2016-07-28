<?php
require_once 'Teacher.class.php';

$arrinfo = array(
                    'name'=> 'Ms Hai',
                    'age'=> 30,
                    'old'=> 28
    
                );

$teacher = new Teacher($arrinfo);
$teacher->showinfo();

