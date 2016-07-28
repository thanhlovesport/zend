<?php
class ErrorController extends Controller{
    
    public function __construct(){
        parent::__construct();
    }
    public function indexAction(){
       $this->_view->data = ' This is an Error';
       $this->_view->render('default', 'error/index.php');
    }
    
    
}