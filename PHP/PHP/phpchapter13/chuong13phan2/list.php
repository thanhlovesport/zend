<?php 
    $images = glob('data/125-*'); // glob để lấy các hình ảnh nằm trong folder dât, dấu * ngoài sau là lấy tất cả
    //print_r($images);
    usort($images, function($a,$b){
        return filemtime($a) - filemtime($b);
    });
    $xhtml = '';
    if (!empty($images)){
        foreach ($images as $imageSrc){
            $xhtml.= '<div class="col-md-2">
                    	<div class="thumbnail">
                    		<img src="'.$imageSrc.'" />
                    		<div class="caption">                                                                          
                    			<a href="#" class="label label-success" data-toggle="modal" data-target="#myModal" onclick="javascript:showImagebig(\''.$imageSrc.'\')">View</a> 
                    		    <a href="#" class="label label-success" role="button" onclick="javascript:deleteImage(\''.$imageSrc.'\')">Delete</a>
                    		</div>
                    	</div>
                    </div>';
        }
    }
    echo $xhtml;
    // $imagesrc là một chuỗi gắn vô hàm showImage nó phải có dấu /'
?>
<!-- IMAGE INFO -->
