<?php
require_once 'Person/Lib/People.php';
require_once 'Zend/obj/People.php';

$peoble = new Zend\obj\People();
echo '<pre>';
print_r($peoble);
echo '</pre>';