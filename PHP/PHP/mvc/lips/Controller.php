<?php
class Controller{
    public function __construct(){
         //'<h3>'. __METHOD__ .'</h3>';
        $this->view = new View();
        //$this->loadModel('login');
       
    }
    
    public function loadModel($name){
        $path = MODEL_PATH.$name.'._model.php';// load model dựa vào kí tên controller
        $modelName = ucfirst($name).'_Model';
        if (file_exists($path)){
        require_once '$path';
        $this->db = new $modelName();
        }
    }
    
    public function redirect($controller = index,$action = index){
        header("location: index.php?controller=$controller&action=$action");
        exit();
    }
}

