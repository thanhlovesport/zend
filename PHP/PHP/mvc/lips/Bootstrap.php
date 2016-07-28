<?php
class Bootstrap{
    public function __construct(){
        
        $controllerURL =(isset($_GET['controller'])) ? $_GET['controller']: 'index'; // get controller nay la lay tren trinh duyet
        $actionURL = (isset($_GET['action'])) ? $_GET['action']: 'index'; // noi dung nay voi o tren la 2 phan cua trinh duyet
        // ở trên là kiểm tra controller với action có tồn tại không, nếu không đưa về mặc định index vẫn chạy
        $controllername = ucfirst($controllerURL);
        
        $file = CONTROLLER_PATH.$controllerURL.'.php';
        if (file_exists($file)){
            require_once $file;
            $controller = new  $controllername(); // tao một đối tượng controler, ten class la index
            
            if (method_exists($controller, $actionURL)==true) {
                $controller->loadModel($controllerURL); // load Model tự động là đây
                $controller->$actionURL();
             
            }else {
               $this->error();
                //require_once 'controllers/error.php';
                //$error = new Error();
            }
           // $controller->index(); // gọi đến phương thức index
        }else {
          $this->error();
            //require_once 'controllers/error.php';
            //$error = new Error();
        }
        // require_once 'controllers/index.php';
        //require_once ('controllers/'.$controllerURL.'.php'); // co duoc controler
        //$controller->$actionURL(); // tên phương thức gọi đến
    }
    public function error(){
        require_once CONTROLLER_PATH.'error.php';
        $error = new Error();
        $error->index();
    }
}