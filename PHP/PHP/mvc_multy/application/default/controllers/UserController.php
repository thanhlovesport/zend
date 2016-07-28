<?php
class UserController extends Controller{
    
    public function __construct(){
         parent::__construct();
    }
    public function indexAction(){
         echo '<h3>'. __METHOD__ .'</h3>';
         // gọi qua models index của thằng admin
         $this->loadModel('admin', 'index');
         $this->db->listItem(); // db là cái thằng đối tượng bên file controller, đại diện cho cái
                                // method, mình gọi được nó rầu => sẽ gọi được các pt của nó
         $this->view->render('default','user/index');
    }
    
    
}