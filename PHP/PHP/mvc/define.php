<?php
//echo dirname(__FILE__); // đường dẫn đến thư mục chứa file này, ở đây là htdocs->mvc
//=========================== Định Nghĩa Cho Phần Đường Dẫn ======================
    define('DS',            DIRECTORY_SEPARATOR);       // định nghĩa dấu xuyệt dùng chung giúp tránh sai sót khi úp lên host
    define('ROOT_PATH',     dirname(__FILE__)); // Định nghĩa đường dẫn đến thư mục gốc
    define('LIBRARY_PATH',  ROOT_PATH.DS.'lips'.DS); // Định nghĩa đường dẫn đến thư thư viện
    define('CONTROLLER_PATH',  ROOT_PATH.DS.'controllers'.DS); // Định nghĩa đường dẫn đến thư mục controller
                                                     // nếu thư mục controllers đổi tên thì vẫn dùng bình thường
    define('MODEL_PATH',  ROOT_PATH.DS.'models'.DS); // Định nghĩa đường dẫn đến thư mục models
    define('VIEW_PATH',  ROOT_PATH.DS.'views'.DS); // Định nghĩa đường dẫn đến thư mục views
    define('PUBLIC_PATH',  ROOT_PATH.DS.'public'.DS); // Định nghĩa đường dẫn đến thư mục public
    
    //echo ROOT_PATH;
    //echo LIBRARY_PATH;
    //echo DS;
    /*
     *  - Đường dẫn tương đối (URL) thường được sử dụng để load các tập tin javascript,css và hình ảnh lên và hiển thị
     *  - Đường dẫn tuyệt đối (PATH) thường được sử dụng để nhúng các tập tin .php vào một tập tin .php nào đó
     *    đường dẫn path thường được dùng với các hàm include, require
     */
    define('ROOT_URL', DS.'mvc');
    define('PUBLIC_URL', ROOT_URL.DS.'public'.DS);
    
 
    //=========================== Định Nghĩa Cho Database ======================
    define('DB_HOST',            'localhost');       //định nghĩa cho host
    define('DB_USER',            'root'); // USER
    define('DB_PASS',            ''); // Password
    define('DB_NAME',            'manage_user' );
    define('DB_TABLE',            'user' );
    