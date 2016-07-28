<?php
class Bootstrap{
	
	public function __construct(){
	    $params            = array_merge($_GET,$_POST) ; // m
	    $module            = isset($params['module']) ? $params['module'] : DEFAULT_MODULE ;
	    $controller        = isset($params['controller']) ? $params['controller'] : DEFAULT_CONTROLLER ;
	    $action            = isset($params['action']) ? $params['action'] : DEFAULT_ACTION ;
	    
	    // IndexController.php = ucfirst($controller).'Controller'
	    $controllerName = ucfirst($controller).'Controller';
	    $filePath = APPLICATION_PATH.$module.DS.'controllers'.$controllerName.'php';
	    if (file_exists($filePath)){
	        require_once '$filePath';
	    }
	    $controllerobject = new $controllerName();
	    $controllerobject->loadModel($module,$controller);
	    $controllerobject->setView($module); // do module này nếu không tồn tại sẽ lấy giá trị mặc định
	    $controllerobject->setParams($params);
	    $actionName = $action.'Action';
	    
	    if (method_exists($controllerobject, $actionName)==true) {
	           $controller->$actionName();
	    }else {
	        $this->_error();
	    }
	}
	
	public function loadDefaultController(){
	    $path = 'application/default/controllers/IndexController.php';
	    require_once $filePath;
	    $controllerobject = new $controllerName();
	}
	// ErrorController
	public function _error(){
	    require_once APPLICATION_PATH.'default'.DS.'controllers'.'ErrorController'.'php';
	    $errorController = new ErrorController();
	    $errorController->indexAction();
	}
}