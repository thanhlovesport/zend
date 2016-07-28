<?php
    if (file_exists('data.txt')){
        $data = file_get_contents('data.txt');
        
        foreach ($data as $key => $value){
            echo $value['name'].'<br/>';
        }
    }else {
        echo die('Không tìm thấy file'); // dừng tại đây, không thực thi các mã nguồn
                                         // ở dưới nếu có
    }

   