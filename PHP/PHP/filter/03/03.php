<?php
    $value = 'quynhaipng';
    //file ảnh hợp lệ
    // png | jpg | gif
    $options = array(
                    'options'=>array('regexp'=>'#^[a-zA-Z0-9]+$#')
                    );
    if (!filter_var($value,FILTER_VALIDATE_REGEXP,$options)){
        echo $value. ' Không phải là chữ và số';
    }
    else {
        echo $value. ' Là chữ và số';
    }