<?php
require_once 'lips/Controller.php';
class Index extends Controller{
    
    public function __construct(){
        parent::__construct(); // gọi phương thức constructor của lớp cha
        //echo '<h3>'.__METHOD__.'h3';
    }
    public function index(){        // Hiển thị danh sách các menu
       // echo '<h3>'.__METHOD__.'h3';
        $this->view->render('index/index');
    }
    public function add(){          // Thêm một menu chẳng hạn
        //echo '<h3>'.__METHOD__.'h3';
    }
}