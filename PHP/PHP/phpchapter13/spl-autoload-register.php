<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    function loadFolderClass($className){    // Tự động load các class khi có yêu cầu sử dụng từ phía chúng ta
    
        $fileName	= "class/$className.class.php";
        if(file_exists($fileName) == true) require_once $fileName;
    }
    
    function loadFolderMyClass($className){    // Tự động load các class khi có yêu cầu sử dụng từ phía chúng ta
    
        $fileName	= "myclass/$className.php";
        if(file_exists($fileName) == true) require_once $fileName;
    }
    
    spl_autoload_register(loadFolderClass); // Truyền vào một function, tự động load các class khi có yêu cầu
    spl_autoload_register(loadFolderMyClass); // Truyền vào một function, tự động load các class khi có yêu cầu
    
    $teacher = new Teacher();
    $sport   = new Sport();
