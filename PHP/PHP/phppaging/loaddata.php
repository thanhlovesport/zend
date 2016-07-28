<?php
    // Nhận yêu cầu, xử lí và trả dữ liệu về
    require_once 'data.php';
    
    $type       =   $_POST['type'];
    if ($type == 'count'){
        $totalItems = count(createData());
        // print_r($_GET);
        $items = $_POST['items']; // in cái biến $_GET ở trên là thấy liền
        $totalPage  = ceil($totalItems/$items); // làm tròn cộng lên 1
        $result['pages'] = $totalPage;
        $result['totalItems'] = $totalItems;
        
        echo json_encode($result); // để file javascrip có thể nhận được, cần chuyễn về chuỗi json (object)
    }else if($type == 'list'){
         $currentPage       =   $_POST['page'];
         $items             =   $_POST['items'];
         $position          =   ($currentPage - 1) * $items;
         
         $arrData           =   createData();
         $result            =   getElement($arrData, $position, $items);
         
         echo json_encode($result);
         // In $result ra kết quả
    }
    
    // a1 a2 a3 a4 a5 a6 a7
    //Page 1: a1 a2 a3    Chỉ số là : 0 1 2 (Page - 1)*3
    //Page 2: a4 a5 a6                3 4 5
    //Page 3: a7                      6
    