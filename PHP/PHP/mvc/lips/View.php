<?php
class View{
    /* public function __construct(){
         '<h3>'. __METHOD__ .'</h3>';
    } */
    public function render($name,$full = true){
        //require_once 'views/index/index.php';
        if ($full == true){
            include_once VIEW_PATH.'header.php';
            require_once VIEW_PATH.$name.'.php';
            include_once VIEW_PATH.'footer.php';
        }else {
            require_once VIEW_PATH.$name.'.php';
            
        }
    }
}