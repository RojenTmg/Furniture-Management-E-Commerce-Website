<?php
	require '../../connect.php';
	require '../../functions/load_template.php';
	require '../../classes/OperationTable.php';
	
		if(isset($_GET['page'])){
			require '../pages/' . $_GET['page'];
		}
		else{
			require '../pages/home.php';
		}

		$tempVars = [
			'title' => $title,
			'content' => $content
		];
		echo loadTemp('../templates/layout.php', $tempVars);
?>