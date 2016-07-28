<?php
class Student{
    
    private $name;
    
    public function __construct(){
        $this->name = 'Trương Hồng Anh';
    }
    // biến $name với $param gợi nhớ ra tên và phương thức khi ta gọi mà nó hk có tồn tại 
    public function __call($name,$param){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__;
        echo '<pre>';
        print_r($name);
        echo '</pre>';
        
        echo '<pre>';
        print_r($param);
        echo '</pre>';
    }
}
$student = new Student();

$student->abc('Học Sinh');