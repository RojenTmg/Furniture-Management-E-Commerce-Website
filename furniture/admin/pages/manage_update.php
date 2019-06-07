<?php
	$title = 'Add Furniture Page';

	$furniture = new OperationTable('updates');

	if (isset($_POST['save'])) {
			$_POST['updates']['date_posted'] = date('d-m-y');
			$picName = $_FILES['photo']['name'];
			$tempPath = $_FILES['photo']['tmp_name'];
			$finalPath = '../../images/updates/' . $picName;
			move_uploaded_file($tempPath, $finalPath);
			$_POST['updates']['photo'] = $finalPath;

			$furniture->save($_POST['updates'], 'update_id');
			$msg = 'saved';
	}
		if (isset($_GET['id'])) {
			$row = $furniture->find('update_id', $_GET['id']);
			$frt = $row->fetch();
			$msg='';
		}
		else {
			$frt = [];
			$msg = '';
		} 


	$nav = loadTemp('../templates/nav_template.php',[]);
	$left = loadTemp('../templates/aside_template.php',[]);

	$content = loadTemp('../templates/manage_update_template.php',['nav'=>$nav, 'left'=>$left, 'data'=>$frt, 'msg'=>$msg]);
?>