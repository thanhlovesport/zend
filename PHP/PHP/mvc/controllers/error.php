<?php

require_once 'lips/Controller.php';
class Error extends Controller{
   /*  public function __construct(){
        echo '<h3>Bạn lỗi rồi kiểm tra lại đi.</h3>';
    } */
    public function index(){
        $this->view->message = 'Bạn gì ơi, lỗi rồi kiểm tra lại đi';
        $this->view->render('error/index');
        //$message = 'Bạn gì đó ơi lỗi rồi, kiểm tra lại đi';
    }
}