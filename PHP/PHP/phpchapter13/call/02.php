<?php
class Student{
    
    private $name;
    
    public function __construct(){
        $this->name = 'Trương Hồng Anh';
    }
    // biến $name với $param gợi nhớ ra tên và phương thức khi ta gọi mà nó hk có tồn tại 
    public static  function __callstatic($name,$params){
        echo '<pre style="color:red;font-weight:bold">';
        print_r($name);
        echo '</pre>';
        
        echo '<pre style="color:red;font-weight:bold">';
        print_r($params);
        echo '</pre>';
    }
}
Student::showinfo('học sinh','2/06/1994',array(5,6,7));