<?php
    $source = array(
                        'name'=> 'Phạm Ngọc Thành', // Kiểu string min là 5 max là 20
                        'age' => 210,                // kiểu integer 20<tuoi<100
                        'url' => 'www.24h.com.vn',  // Theo kiểu url
                        'email'=>'thanhlovenatural@gmail.com' // Theo kiểu email
                );  
    require_once 'validate.class.php';
    $validate = new Validate($source);
    // Rule
    $validate->addrule('name','string',10,100)
             ->addrule('age','int',1,100)
             ->addrule('url','url')
             ->addrule('email','email');
             
    $validate->run();   
    
    // GetError and Result
    $error = $validate->getErrors();
    $result = $validate->getResult();
    echo '<pre>';
    print_r($error);
    echo '</pre>'; 
    
    echo '<pre>';
    print_r($result);
    echo '</pre>';
?>
<!-- <form action = "" method = "">
    <input name = "name">
    <input name = "age">
    <input name = "url">
</form> -->