<?php
class Student{
    private $name;
    private $birthday;
    
    public function __construct(){
        $this->name = 'Đào Ngọc Anh';
        $this->birthday = '20/08/1996';
    }
    public function showinfo($greeting){
        $result = function() use($greeting){
            echo "{$greeting}, my name is {$this->name}, I was born in {$this->birthday} ";
        };
        return $result();
        
    }
    // phương thức showHello có sử dụng hàm annonymous(hàm ẩn danh) không có sử dụng các thuộc tính nào của
    // class, do đó để truy cập nhanh hơn và tiết kiệm bộ nhớ ta cho hàm annonymous là hàm static
    public  function showHello($greeting){
        $result = static function() use($greeting){
            echo "{$greeting}";
        };
        return $result();
    }
    
    // Muốn đối tượng gọi như một phương thức => trong class ta phải có hàm invoke
    public function __invoke(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';

    }
}
$student = new Student();

$student->showinfo('Hello');
echo '<br/>';
$student->showHello('HI');

$student();