<?php
  //echo '<h1>MVC</h1>';
  /*  
     $controllerURL =(isset($_GET['controller'])) ? $_GET['controller']: 'index'; // get controller nay la lay tren trinh duyet
     $actionURL = (isset($_GET['action'])) ? $_GET['action']: 'index'; // noi dung nay voi o tren la 2 phan cua trinh duyet
     // ở trên là kiểm tra controller với action có tồn tại không, nếu không đưa về mặc định index vẫn chạy
     $controllername = ucfirst($controllerURL);

// require_once 'controllers/index.php';
require_once ('controllers/'.$controllerURL.'.php'); // co duoc controler

$controller = new  $controllername(); // tao một đối tượng controler, ten class la index
$controller->index(); // gọi đến phương thức index
$controller->$actionURL(); // tên phương thức gọi đến */



/* require_once 'lips/Bootstrap.php';
require_once 'lips/Controller.php';
require_once 'lips/View.php';
require_once 'lips/Model.php'; */
//require_once 'config/paths.php';
require_once 'define.php';
function __autoload($clasName){ // Hàm này tự động load các file trong thư viện lips
    require_once LIBRARY_PATH . "{$clasName}.php";
}

$bootstrap = new Bootstrap();