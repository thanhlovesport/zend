
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
$content	= file_get_contents('http://vnexpress.net/tin-tuc/xa-hoi');

$pattern	= '#<div class="folder-news">(.*)</div>\s*</div>#imsU';
preg_match_all($pattern, $content, $matches);

$strXML ='<?xml version="1.0" encoding="UTF-8"?>';
$strXML .='<new>';
foreach($matches[0] as $key => $value){

    // LINK
    $pattern	= '#href="(.*)">.*src="(.*)" .*link-title14" .*>(.*)</a>.*class="h3Lead">(.*)<#imsU';
    preg_match($pattern, $value, $data);

    $result[$key]['link']			=	$data[1];
    $result[$key]['image']			=	$data[2];
    $result[$key]['title']			=	trim($data[3]);
    $result[$key]['description']	=	trim($data[4]);
}
$strXML.='</new>';
// admin: get_content ->xml (create-xml.php) tạo tập tin xml
// public read_xml (show-xml.php) : hiển thị các nội dung được lưu ở file create ra cho nd
?>