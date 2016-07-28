<?php
    $source = array(
                        'name'=> 'Phạm Ngọc Thành', // Kiểu string min là 5 max là 20
                        'age' => 21,                // kiểu integer 20<tuoi<100
                        'url' => 'www.24h.com.vn',  // Theo kiểu url
                        'email'=>'thanhlovenatural@gmail.com' // Theo kiểu email
                );  
    require_once 'validate.class.php';
    $validate = new Validate($source);
    // Rule
    $validate->addrule('name','string',10,100)
             ->addrule('age','numeric',1,100);
    
    // Rules
    $rules = array(
        'url'=>array('type'=>'url'),
        'email'=>array('type'=>'email')
    );
    $validate->addrules($rules);
    
    echo '<pre>';
    print_r($validate);
    echo '</pre>'; 
?>
<!-- <form action = "" method = "">
    <input name = "name">
    <input name = "age">
    <input name = "url">
</form> -->