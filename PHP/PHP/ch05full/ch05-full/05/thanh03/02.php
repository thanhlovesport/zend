<?php
    require_once 'Lion.class.php';
    $Lion = new Lion('Lion A',2,'Yello','30kg');
    $Lion->showInfo();
    echo '<pre>';
    print_r($Lion);
    echo '</pre>';