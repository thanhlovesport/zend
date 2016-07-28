<?php
    $value = 'quynhai.png';
    //file ảnh hợp lệ
    // png | jpg | gif
    $options = array(
                    'options'=>array('regexp'=>'#\.(png|jpg|gif)$#')
                    );
    if (!filter_var($value,FILTER_VALIDATE_REGEXP,$options)){
        echo 'Định dạng hình ảnh không hợp lệ';
    }
    else {
        echo 'Định dạnh hình ảnh hợp lệ';
    }