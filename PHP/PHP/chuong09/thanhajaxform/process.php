<?php
require_once 'class/Validate.class.php';

//$source = $_POST;
// bien post khong chua file nen phai them bien file vao
$flagType	= 'error';
$source = array(
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'message' => $_POST['message'],
                    'file' => $_FILES['attach']
    
                );
$validate = new Validate($source);

$validate->addRule('name', 'string',array('min'=>2, 'max'=>50)) // kiem tra string co array
         ->addRule('emai', 'email')
         ->addRule('message', 'string',array('min'=>5, 'max'=>1000))
         ->addRule('name', 'string',array('entension' => array('png','jpg'),'min'=>50, 'max'=> 900000),false);
$validate->run();

if ($validate->isValid()==false){
    $error = $validate->getError();
} else {
    $flagType = 'Success';
}

$reponses = array(
    'type'=> $flagType,
    'message'=>$error
);
echo '<pre>';
print_r($error);
echo '</pre>';