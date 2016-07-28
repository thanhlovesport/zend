<?php
    // Lambda chỉ tác động được đến những biến nằm trong phương thức lambda
   /*  $messi = function ($fullname = 'Lionel Messi'){
        echo '<h3 style = "color:red;font-weight:bold">'.$fullname.' là một cầu thủ xuất sắc</h3>';
    
    };
    
    $messi('Cristiano Ronaldo'); */
    
    $name = 'Lionel Messi';
    $skill = 'shoot accuracy';
    
    // Case 01
    /* $showinfo = function() use ($name,$skill){
      echo ''.$name.' have a wonderful skill, that is '.$skill.'';  
    }; */
    
    // Case 02
    $showinfo = function() use (&$name,$skill){ // Truyền tham chiếu, thay đổi giá trị của name mọi nơi
        $name = strtoupper($name);
        echo ''.$name.' have a wonderful skill, that is '.$skill.'';
    };
    $showinfo();
    echo '<br/>'.$name;