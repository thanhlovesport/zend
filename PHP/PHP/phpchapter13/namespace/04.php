<?php
require_once 'Person/Lib/People.php';
require_once 'Zend/obj/People.php';

use Zend\obj as Ze;
use Person\lib as Pe;
$peoplezend = new Ze\People;
$peopleperson = new Pe\People;
echo '<pre>';
print_r($peoplezend);
echo '</pre>';
echo '<pre>';
print_r($peopleperson);
echo '</pre>';

