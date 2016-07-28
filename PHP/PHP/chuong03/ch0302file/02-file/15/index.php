<ul>
	<li>D: abc</li> <!-- D viết tắc của directory F viết tắc của file  -->
	<li>D: files
		<ul>
			<li>D: child</li>
			<li>F: abc.ini</li>
			<li>F: abc.txt</li>
			<li>F: def.txt</li>
		</ul>
	</li>
	<li>D: images
		<ul>
			<li>F: def.txt</li>
		</ul>
	</li>
	<li>F: abc.ies</li>
	<li>F: abc.ini</li>
	<li>F: abc.txt</li>
	<li>F: def.txt</li>
	<li>F: index.php</li>
</ul>

<hr />

<?php

	$data	= scandir('.');
	
	echo '<pre>';
	print_r($data);
	echo '</pre>';
	
	$result = '<ul>'; /*  đặt biến result để trả về các thẻ ul li */
	foreach($data as $key => $value){
		if($value != '.' && $value != '..'){
			if(is_dir("./$value")){
				$result .= '<li>D: ' . $value . '<ul>';/* result nối chuỗi li tiếp theo là value */
				
				$dataChild	= scandir("./$value");
				foreach($dataChild as $keyC => $valueC){
					if($valueC != '.' && $valueC != '..'){
						if(is_dir("./$value/$valueC")){/* is dir=> có phải là thư mục hk ?, dấu "." cho biết thư mục hiện tại */
							$result .= '<li>D: ' . $valueC . '</li>';
						}else{
							$result .= '<li>F: ' . $valueC . '</li>';
						}
					}
				}
				$result .= '</ul></li>';
			}else{
				$result .= '<li>F: ' . $value . '</li>';
			}
		}
	}
	$result .= '</ul>';
	
	echo $result;
	
	
	
	
	
	
	
	

	
