<?php 
    $str = "     tran    Ngoc     anh ";
    function formatString($str,$type = NULL){
        $str = strtolower($str);
        $str = trim($str);
        $array = explode(" ", $str);
        foreach ($array as $key=>$value){
            if (trim($value)==null) { unset($array[$key]);
            continue;
            }
            if ($type == "danhtu"){
                $array[$key] = ucfirst($value);
            }
        }
        $result = implode(" ",$array);
        $result = ucfirst($result);
        return $result;
    }
 
    
  
    // loai bo khoang trang du thua giua cac tu
    // tách các kí tự trong chuỗi thành khoảng trắng trong mảng
    
  
    // loại bỏ các phần từ khoảng trắng
    
    $result =formatString($str,"danhtu");
    echo $result. "<br/>";
    echo strlen($result);
?>