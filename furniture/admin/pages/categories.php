<?php
	$title = 'Category Page';
	$category = new OperationTable('category');


	if (isset($_GET['did'])) {
			$category->delete('id', $_GET['did']);
			// echo "<script>Furniture Deleted!</script>";
	}

	$table = new tableGenerator();
	$headings = array('Name','','');
	$table->setHeadings($headings);

	$categoryStmt = new OperationTable('category');
	$category = $categoryStmt->findAll();

	foreach ($category as $row) {
		$table->addRow(['name'=>$row['name'],
						'edit'=>'<a style="float: right" href="index.php?page=manage_category.php&id=' . $row['id'] . '">Edit</a>',
						'delete'=>'<a style="float: right" href="index.php?page=categories.php&did=' . $row['id'] . '">Delete</a>'
						]);
	}

	$nav = loadTemp('../templates/nav_template.php',[]);
	$left = loadTemp('../templates/aside_template.php',[]);
	
	$content = loadTemp('../templates/categories_template.php',['nav'=>$nav, 'left'=>$left, 'table'=>$table]);
?>