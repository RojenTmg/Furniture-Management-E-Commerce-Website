<?php
	$title = 'Add Furniture Page';

	$furniture = new OperationTable('furniture');

	if (isset($_POST['save'])) {
			if (isset($_POST['furniture']['img1'])) { $_POST['furniture']['img1'] = upload_image('img1'); } else { }
			if (isset($_POST['furniture']['img2'])) { $_POST['furniture']['img2'] = upload_image('img2'); } else { }
			if (isset($_POST['furniture']['img3'])) { $_POST['furniture']['img3'] = upload_image('img3'); } else { }
			if (isset($_POST['furniture']['img4'])) { $_POST['furniture']['img4'] = upload_image('img4'); } else { }

			$furniture->save($_POST['furniture'], 'id');
			$msg = 'saved';
	}
		if (isset($_GET['id'])) {
			$row = $furniture->find('id', $_GET['id']);
			$frt = $row->fetch();
			$msg='';
		}
		else {
			$frt = [];
			$msg = '';
		} 

		$categoryQuery = new OperationTable('category');
		$category = $categoryQuery->findAll();

	$nav = loadTemp('../templates/nav_template.php',[]);
	$left = loadTemp('../templates/aside_template.php',[]);

	$content = loadTemp('../templates/manage_furniture_template.php',['nav'=>$nav, 'left'=>$left, 'data'=>$frt, 'msg'=>$msg, 'category'=>$category]);
?>