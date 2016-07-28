<?php
    function createQuestion($fileQuestion = 'data/question.txt',$fileOption = 'data/options.txt' ){
        // Get Question
        
        $data     = file($fileQuestion)  or die('Can not read file'); // Trong trường hợp đọc file không được ta dừng file lại
        array_shift($data); // Bỏ phần tử đầu tiên trong $data vì nó lưu thông số hk lưu thông tin
        // In ra mảng $data xem thử
        $arrQuestion = array();
        foreach ($data as $key=>$value){
            $tmp = explode('|', $value); // tách chuỗi thành mảng dựa vào kí tự thẳng đứng
            $idquestion = $tmp[0];
            $questioncontent = $tmp[1];
            $answer = 'option-'.trim($tmp[2]);        // Phương thức trim để loại bỏ các khoảng trắng dư thừa
            $arrQuestion[$idquestion] = array("id" => $idquestion,"question" => $questioncontent,'answer' => $answer); // arrQuestion phần tử id là một mảng
        
        }
        
        // Get Answer for each Question
        $data     = file($fileOption)  or die('Can not read file');
        array_shift($data);
        foreach ($data as $key => $value){
            $tmp = explode('|', $value);
            $arrQuestion[$tmp[0]]['option-'.$tmp[1]]  = trim($tmp[2]);
        }
        
        // Lấy ngẫu nhiên một số phần tử từ Array
        shuffle($arrQuestion);  // Hàm lấy ngẫu nhiên
        $arrQuestion = array_slice($arrQuestion, 5); // Truy cập số phần tử ngẫu nhiên từ mảng Array
       
        return  $arrQuestion;
         
    }
    function showAnswer($idQuestion,$valueRadio,$contentAnswer){
        $xhtml = '<div class="radio">
						<label><input type="radio" name="question-'.$idQuestion.'" value="'.$valueRadio.'" >'.$contentAnswer.'</label>
				  </div>';
        return $xhtml;
    }
    function redirect($filename){
        if (file_exists($filename)){
            header("Location: $filename");
            exit();
        }
    }
    /*
     * 01: User True
     * 02: User False
     * 03: System False // Đưa ra bởi hệ thống
     * 04: System True
     */
        function showAnswerCheck($option, $optionUser, $optionCorrect, $contentAnswer){
		
    		$classLabel 	= '';
    		$spanContent	= '';
    		
    		if($option == $optionUser){
    			$classLabel		= 'label label-default';
    			if($optionUser == $optionCorrect){
    				$spanContent	= '&nbsp;<span class="glyphicon glyphicon-ok"></span>';
    			}else{
    				$spanContent	= '&nbsp;<span class="glyphicon glyphicon-remove"></span>';
    			}	
    		}else{
    			if($option == $optionCorrect){
    				$classLabel		= 'label label-success';
    			}else{
    				$classLabel		= '';
    			}
    		}
    		
    		$xhtml = '<div class="radio">
    						<label class="'.$classLabel.'"><input type="radio" name="radio" value="option" disabled="disabled">'.$contentAnswer.'</label>
    						'.$spanContent.'
    					</div>';
    		
    		return $xhtml;
	}
	
  