<?php 
	function resize_image_force($image,$width,$height) {
	    $w = @imagesx($image); //current width
	    $h = @imagesy($image); //current height
	    if ((!$w) || (!$h)) { $GLOBALS['errors'][] = 'Image couldn\'t be resized because it wasn\'t a valid image.'; return false; }
	    if (($w == $width) && ($h == $height)) { return $image; } //no resizing needed
	 
	    $image2 = imagecreatetruecolor ($width, $height);
	    imagecopyresampled($image2,$image, 0, 0, 0, 0, $width, $height, $w, $h);
	 
	    return $image2;
	}
	var_dump($_POST);
	var_dump($_FILES);
	if(isset($_FILES['image'])){
		include('SimpleImage.php');
		$image = $_FILES['image']['tmp_name'];
		$image_name = $_FILES['image']['name'];
		move_uploaded_file($image , '../image/'.$image_name);
   		$imagek = new SimpleImage();
   		$imagek->load('../image/'.$image_name);
   		$imagek->resize(250,400);
   		$imagek->save('../image/12'.$image_name);
		
		echo "<img src='../image/12$image_name'></img>";
	}
 ?>