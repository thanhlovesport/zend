<?php

	$district = array(
						array('id' => 1, 'name' => 'Thá»§ Ä�á»©c', 'city_id' => 1),
						array('id' => 2, 'name' => 'BÃ¬nh Tháº¡nh', 'city_id' => 1),
						array('id' => 3, 'name' => 'Quáº­n 9', 'city_id' => 1),
						array('id' => 4, 'name' => 'Má»¹ Tho', 'city_id' => 2),
						array('id' => 5, 'name' => 'GÃ² CÃ´ng TÃ¢y', 'city_id' => 2),
						array('id' => 6, 'name' => 'Ninh Kiá»�u', 'city_id' => 3),
						array('id' => 7, 'name' => 'CÃ¡i RÄƒng', 'city_id' => 3),
					);
	
	$idCity = $_GET['idCity'];
	
	$xhtml = '<option value="0">Chá»�n quáº­n huyá»‡n</option>'; 
	foreach($district as $key => $value){
		if($idCity == $value['city_id']){
			$xhtml .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
		}
	}
	echo $xhtml;
	