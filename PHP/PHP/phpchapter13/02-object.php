<?php
    require_once 'class/Teacher.class.php';
    $teacher1 = new Teacher();
    $teacher2 = new Teacher();
    $teacher2->setmagv('abcd');
    $teacher2->setname('Tran Huynh Anh');
    $teacher2->setngaysinh('16/02/1991');
    
    echo '<pre>';
    print_r($teacher1);
    echo '</pre>';
    
    echo '<pre>';
    print_r($teacher2);
    echo '</pre>';