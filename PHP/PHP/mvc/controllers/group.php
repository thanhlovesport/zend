<?php
require_once 'lips/Controller.php';
class Group extends Controller{
      /*  public function __construct(){
            parent::__construct();              // Cần gọi đến phương thức controller cha vì nó gọi đến
            echo '<h3>'.__METHOD__.'h3';            //view
        }  */
   public function __construct(){
       parent::__construct();
       Auth::checklogin();
   }
    public function index(){
       // echo '<h3>'.__METHOD__.'h3';
      
        $this->view->items =  $this->db->listItems(); // đưa ra view luôn
        $this->view->render('group/index');
        //require_once 'models/group_model.php';
        //$model = new Group_Model();
        
        /* Session::init();
        Session::get('loggedIn');
        Session::destroy(); */
    }
    
}