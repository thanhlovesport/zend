<?php
    $dom = new DOMDocument();
    $dom->load('../files/01.xml');
    $book = $dom->getElementsByTagName('book');
    $bookPHP = $book->item(0);
    $bookJoomla = $book->item(1);
    $bookZend = $book->item(2);
    echo '<pre>';
    print_r($bookZend);
    echo '</pre>';