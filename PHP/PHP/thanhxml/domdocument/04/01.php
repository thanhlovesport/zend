<?php
    $dom = new DOMDocument();
    $dom->load('../files/01.xml');
    // dùng xpath để thao tác tài liệu file 01.xml
    // => dùng dom
    $xpath = new DOMXPath($dom);
    
    // Lây những quyển sách có thuộc tính id
    
    $query ='//book[@id]'; // id là một thuộc tính => bắt đầu bằng @
    
    // Lây những quyển sách có thuộc tính id
    $query ='//book[@id=8]';
    
    $result = $xpath->query($query);
    /* echo '<pre>';
    print_r($result);
    echo '</pre>'; */
    
    echo '<pre>';
    print_r($result->item(0));
    echo '</pre>';