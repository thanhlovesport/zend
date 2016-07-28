<?php
    $dom = new DOMDocument();
    $dom->load('../files/mybooks-01.xml');
    $bookNode = $dom->getElementsByTagName('book')->item(0);
    //$pageNode = $dom->getElementsByTagName('page')->item(0);
    $authorNode = $dom->getElementsByTagName('author')->item(0);
    $weightNode = $dom->createElement('weight',100);
    
    $unit = $dom->createAttribute('unit');
    $unit->value = 'gram'; // giá trị muốn gán cho thuộc tính
    $weightNode->appendChild($unit); // unit là con của node weightNode
    
    $bookNode->insertBefore($weightNode,$authorNode);
    $dom->formatOutput = true;
    $dom->save('02.xml') or die('ERROR');