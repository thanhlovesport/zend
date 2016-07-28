<?php
require_once 'lips/Controller.php';
class User extends Controller{
    
    public function login(){        // Hiển thị danh sách các menu
       // echo '<h3>'.__METHOD__.'h3';
        //$this->loadModel('group');
        /* echo '<pre>';
        print_r($_POST);    Phần này là kiểm tra mấy kí thông tin người dùng nhập vào
        echo '</pre>'; */
        Auth::checklogin();
        if(isset($_POST['submit'])){
            $source  = array('username'=>$_POST['username']);
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $validate = new Validate($source);
            
           // $query = "SELECT `id` FROM `user` WHERE `username` => '$username' AND `password` => '$password'";
            $validate->addRule('username', 'existRecord',array('database'=>$this->db,'query'=> "SELECT `id` FROM `user` WHERE `username` = '$username' AND `password` = '$password'"));
            $validate->run();
            $error =  $validate->getError(); // trả về một array
            if ($validate->isValid()==true){ // nếu validate dữ liệu nhập vào hợp lệ
                Session::init();
                Session::set('loggedIn', true);
                header('location: index.php?controller=group&action=index');
                exit(); // không thực hiện các câu lệnh bên dưới
                // Thực hiện session kiểm tra người dùng đăng nhập vô hay chưa ?
                // session_start();
                // $_SESSION[key] = value gán session một giá trị
                // $temp = $_SESSION[key]
                // session_destroy or unset
            }else {
               $this->view->errors = $validate->showErrors();
            }
            
        }
        $this->view->render('user/login');
    }
    public function logout(){
        $this->view->render('user/logout');
        // Khi logout sẽ tiến hành hủy session
        Session::init();
        session_destroy();
    }
    
}