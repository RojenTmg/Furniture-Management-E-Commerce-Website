<?php
	$title = 'Furniture Page';

	$furniture = $pdo->prepare('SELECT f.id, f.name, f.description, f.price, c.name AS cname, f.img1, f.img2, f.img3, f.img4 FROM furniture AS f JOIN category AS c ON f.categoryID = c.id WHERE  archive = "no"'); 
	$furniture->execute();

	$categoryQuery = new OperationTable('category');
	$category = $categoryQuery->findAll();

	if ($_GET['cId'] >= 0) {
		$furniture = $pdo->prepare('SELECT f.id, f.name, f.description, f.price, c.name AS cname, f.img1, f.img2, f.img3, f.img4 FROM furniture AS f JOIN category AS c ON f.categoryID = c.id WHERE c.id = ' . $_GET['cId']. ' AND archive = "no"'); 
		$furniture->execute();
	}
	else {
		$furniture = $pdo->prepare('SELECT f.id, f.name, f.description, f.price, c.name AS cname, f.img1, f.img2, f.img3, f.img4 FROM furniture AS f JOIN category AS c ON f.categoryID = c.id WHERE archive = "no"'); 
		$furniture->execute();		
	}
	$content = loadTemp('../templates/furniture_template.php',['furniture'=>$furniture, 'category'=>$category]);
?>