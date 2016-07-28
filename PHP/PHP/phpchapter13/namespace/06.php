<?php
namespace Test;
use Zend\obj\People;
require_once 'Zend/obj/People.php';
class Teacher{
    public $teacher;
    public function __construct(){
     $this->teacher = new People();
    }
}
$teacher = new People();
echo '<pre>';
print_r($teacher);
echo '</pre>';