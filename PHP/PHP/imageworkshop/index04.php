<?php
    use PHPImageWorkshop\ImageWorkshop;
    require_once(__DIR__ . '/autoload.php');
    
    $pathImage	= __DIR__ . '/images/butterfly.png';
    
    $layer = ImageWorkshop::initFromPath($pathImage);
    
    // Xoay
    // $layer->flip('horizontal');
    
    // Độ bóng
    // $newOpacity = 50;
    
    // $layer->opacity($newOpacity);
    
    // Resize
    /* $thumbWidth = 125; // px
    $thumbHeight = null;
    $conserveProportion = true;
    $positionX = 0; // px
    $positionY = 0; // px
    $position = 'MM';
    
    $layer->resizeInPixel($thumbWidth, $thumbHeight, $conserveProportion, $positionX, $positionY, $position); */
    
    // Thiết lập avatar
    $width = $layer->getWidth();
    $height = $layer->getHeight();
    if($width > $height){
        $layer->cropInPixel($height,$height,0,0,'MM');
    }else {
        $layer->cropInPixel($width,$width,0,0,'MM');
        
    }
    
    $layer->resizeInPixel(100,100,true);
    
    // Lấy tâm tấm hình
    //$layer->cropMaximumInPixel(0, 0, "MM");
    // Thiết lập lại kích thước
    //mên$layer->resizeInPixel(100,100,true);
    
    // Save Image
    $dirPath 			= __DIR__."/outputs";
	$filename 			= "card.jpg";
	$createFolders 		= true;
	$backgroundColor 	= null; // transparent, only for PNG (otherwise it will be white if set null)
	$imageQuality 		= 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
	 
	$layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
    