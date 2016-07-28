<?php
    $x = 'abc';
    $$x = 'xyz';    //$abc = xyz;
    
    echo $x . '<br/>';
    echo $$x . '<br/>';
    echo $abc  . '<br/>';
    
    function showinfo(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';

    }
    $function = 'showinfo';
    $function();    // Gọi đến phương thức showinfo
    
    class Student{
        private $eat;
        private $sleep;
        public function showinfo(){
            echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';

        }
    }
   
    $class = 'Student';
    $method = 'showinfo';
    $student = new $class();
    echo '<pre style="color:red;font-weight:bold">';
    print_r($student);
    echo '</pre>';
    $student->$method();