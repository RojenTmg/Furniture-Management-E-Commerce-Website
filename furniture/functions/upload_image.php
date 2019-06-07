<?php 
function upload_image($imgName)
{
	$picName = $_FILES["$imgName"]['name'];
	$tempPath = $_FILES["$imgName"]['tmp_name'];
	$finalPath = '../../images/furniture/' . $picName;
	move_uploaded_file($tempPath, $finalPath);

	return $finalPath;
}
?>