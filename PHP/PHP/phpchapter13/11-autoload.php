<?php
   /*  require_once 'class/Englishteacher.class.php';
    require_once 'class/Teacher.class.php';
    
    $englishteacher = new EnglishTeacher();
    $teacher        = new Teacher();
    
    echo '<pre>';
    print_r($englishteacher);
    echo '</pre>';
    
    echo '<pre>';
    print_r($teacher);
    echo '</pre>'; */
    
// Khi một đối tượng được tạo tên lớp của đối tượng sẽ được tự động load trong hàm autoload, y như classname
   /*  function __autoload($classname){    // Lớp này sẽ tự động đưa vào phương thức autoload
        //echo $classname .'<br/>';   // $classname lúc này sẽ là EnglishTeacher
        $fileName = "/class/$classname.class.php";
        if(file_exists($fileName) == true){
            require_once $fileName;
        }
        
    }
    $englishteacher = new EnglishTeacher();
    $teacher        = new Teacher(); */
    
    function __autoload($className){    // Tự động load các class khi có yêu cầu sử dụng từ phía chúng ta
    
        $fileName	= "class/$className.class.php";
        if(file_exists($fileName) == true) require_once $fileName;
    }
    $teacher = new Teacher();
    $englishteacher = new EnglishTeacher();
    echo '<pre>';
    print_r($teacher);
    echo '</pre>';
    echo '<pre>';
    print_r($englishteacher);
    echo '</pre>';
    