<html lang="en"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap 101 Template</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php 
        // In ra biến $_Post xem thử
          
        require_once 'functions.php';
        if(empty($_POST)) redirect('index.php');  // Khi người dùng tự nhập vào trang result
        
        $arrQuestions = unserialize($_POST['array_data']); // chuyển chuỗi thành mảng
        
       
        $xhtml = '';
       
        if(!empty($arrQuestions)){
            $i = 1;
            foreach ($arrQuestions as $key => $value){
               $questionID = $_POST['question-'.$value['id']];
                
               $option0 = showAnswerCheck('option-0', $questionID , $value['answer'],$value['option-0']);
               $option1 = showAnswerCheck('option-1', $questionID , $value['answer'],$value['option-1']);
               $option2 = showAnswerCheck('option-2', $questionID , $value['answer'],$value['option-2']);
               $option3 = showAnswerCheck('option-3', $questionID , $value['answer'],$value['option-3']);
                
                
               $xhtml .= '<div class="form-group">
            				<p>'.$i.'-'.$value['question'].'</p>
            				<div class="row">
            					<div class="col-md-6">'.$option0.$option1.'</div>
            					<div class="col-md-6">'.$option2.$option3.'</div>
            				</div>
            			</div>'; 
               $i++;
                
            }
            
        }
    ?>
	<div class="container list-quiz">
		<h1 class="page-header">Kết Quả Trắc nghiệm trực tuyến</h1>
		<form action="#" method="post" name="test-form" id="test-form">
			<?php echo $xhtml;?>
			
			<div class="form-group">
				<a href="index.php"  class="btn btn-primary" >Làm lại</a>
			</div>
			
		</form>
		
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	

</body></html>