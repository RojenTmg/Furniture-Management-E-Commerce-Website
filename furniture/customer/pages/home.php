<?php
	$title = "Fran's Furniture - Our Furniture";

	$updateQuery = new OperationTable('updates');
	$update = $updateQuery->findAll();

	$content = loadTemp('../templates/home_template.php',['update'=>$update]);
?>