<?php
    $xml = simplexml_load_file('../file/01.xml');// từ thư mục cha đi vào thư mục file
    echo gettype($xml);
    echo $strXML = $xml->asXML();
    echo '<br/>';
    echo gettype($strXML);
   