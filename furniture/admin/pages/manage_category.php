<?php
	$title = 'Add Category Page';
	$category = new OperationTable('category');

	if (isset($_POST['save'])) {
			$category->save($_POST['category'], 'id');
			$msg = 'saved';
	}
		if (isset($_GET['id'])) {
			$row = $category->find('id', $_GET['id']);
			$catg = $row->fetch();
			$msg='';
		}
		else {
			$catg = [];
			$msg = '';
		} 
	$nav = loadTemp('../templates/nav_template.php',[]);
	$left = loadTemp('../templates/aside_template.php',[]);


	$content = loadTemp('../templates/manage_category_template.php',['nav'=>$nav, 'left'=>$left, 'data'=>$catg, 'msg'=>$msg]);
?>