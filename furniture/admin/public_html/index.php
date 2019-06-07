<?php
	require '../../connect.php';
	require '../../functions/load_template.php';
	require '../../functions/upload_image.php';
	require '../../classes/OperationTable.php';
	require '../../classes/TableGenerator.php'; 

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

		if(isset($_GET['page'])){
			require '../pages/' . $_GET['page'];
		}
		else{
			require '../pages/home.php';
		}
	}
	else {
			require '../pages/login.php';			
	}		

		$tempVars = [
			'title' => $title,
			'content' => $content
		];
		echo loadTemp('../templates/layout.php', $tempVars);
?>