<?php
// Student, staff, teacher, Director => Person
abstract  class Person{
    private $name;
    private $birthday;
    
    public function showinfo(array $param){
           
    }
    public function showname(){ // abstract có thể khai báo ở lớp cha mà không yêu cầu ở lớp con cài đặt
        
    }
}

class Student extends Person{
    public function showinfo(array $abc){
         echo '<h3>'. __METHOD__ .'</h3>';
    }
}
$student = new Student();
echo '<pre style="color:red;font-weight:bold">';
print_r($student);
echo '</pre>';
$student->showinfo(array('abcd'));