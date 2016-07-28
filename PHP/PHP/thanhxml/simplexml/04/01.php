<?php
    $xml = simplexml_load_file('../file/01.xml');// tá»« thÆ° má»¥c cha Ä‘i vÃ o thÆ° má»¥c file
    $book = $xml->book[1];
    echo '<pre>';
    print_r($book);
    echo '</pre>';
    /* echo '<pre>';
    print_r($xml->book);// vì book là một đối tượng nên ta truyền theo cách này
    echo '</pre>'; */
    
    // in ra thông tin quyển sách thứ 2
   /*  echo '<pre>';
    print_r($xml->book[1]);// vì book là một đối tượng nên ta truyền theo cách này
    echo '</pre>'; */
    
    // in ra tên của quyển sách
    //$book = $xml->book[1];
    echo 'Title :'. $book->title.'<br/>';
    echo 'Saleoff :'. $book->price->saleoff.'<br/>';
    echo 'Phí vận chuyển US :'. $book->shipping->US.'<br/>';
    echo 'Phí vận chuyển EU :'. $book->shipping->EU.'<br/>';
    echo 'Phí vận chuyển VN :'. $book->shipping->VN.'<br/>';