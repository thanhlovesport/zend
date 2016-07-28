<?php 
    require_once 'functions.php';
    $filmData = createDatas();
    
    $postition = $_POST['position'];
    $newArrays = getElements($filmData, $postition, 4);
    // print_r($_POST); : In ra postition 0, Items 4    
   
    $xhtml = '';
    if(!empty($newArrays)){
        $xhtml = '<div class="row film-info">';                                             
        foreach ($newArrays as $key=>$value){
            $xhtml .= '<div class="col-md-3">
        				<div class="thumbnail">
        					<img src="data/'.$value['image'].'" alt="'.$value['name'].'">
        					<div class="caption">
        						<h3>'.$value['name'].'</h3>
        						<p>'.$value['year'].'</p>
        					</div>
        				</div>
        			</div>';
        }
        $xhtml .= '</div>';
    }
    echo $xhtml;
?>

		