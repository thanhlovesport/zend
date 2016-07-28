<?php
    $source = array(
                        'name'=> 'Phạm Ngọc Thành', // Kiểu string min là 5 max là 20
                        'age' => 21,                // kiểu integer 20<tuoi<100
                        'url' => 'www.24h.com.vn',  // Theo kiểu url
                        'email'=>'thanhlovenatural@gmail.com' // Theo kiểu email
                );  
    require_once 'validate.class.php';
    $validate = new Validate($source);
    // Rules
    $rules = array(
                    'name'=>array('type'=>'string','min'=>10,'max'=>50),
                    'age'=>array('type'=>'numeric','min'=>1,'max'=>95)
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