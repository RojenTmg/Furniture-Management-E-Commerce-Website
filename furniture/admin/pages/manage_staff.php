<?php
	$title = 'Staff Page';
	$stf = new OperationTable('staff');

	if (isset($_POST['save'])) {
			$_POST['staff']['password'] = password_hash($_POST['staff']['password'], PASSWORD_DEFAULT);
			$stf->save($_POST['staff'], 'staff_id');
			$msg = 'saved';
	}
		if (isset($_GET['id'])) {
			$row = $stf->find('staff_id', $_GET['id']);
			$staff = $row->fetch();
			$msg='';
		}
		else {
			$staff = [];
			$msg = '';
		} 
	$nav = loadTemp('../templates/nav_template.php',[]);
	$left = loadTemp('../templates/aside_template.php',[]);

	$content = loadTemp('../templates/manage_staff_template.php',['nav'=>$nav, 'left'=>$left, 'data'=>$staff, 'msg'=>$msg]);
?>