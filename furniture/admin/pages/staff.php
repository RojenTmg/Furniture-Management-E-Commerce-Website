<?php
	$title = 'Staff Page';
	$category = new OperationTable('staff');


	if (isset($_GET['did'])) {
			$category->delete('staff_id', $_GET['did']);
	}

	$table = new tableGenerator();
	$headings = array('Name','','');
	$table->setHeadings($headings);

	$categoryStmt = new OperationTable('staff');
	$category = $categoryStmt->findAll();

	foreach ($category as $row) {
		$table->addRow(['name'=>$row['username'],
						'edit'=>'<a style="float: right" href="index.php?page=manage_staff.php&id=' . $row['staff_id'] . '">Edit</a>',
						'delete'=>'<a style="float: right" href="index.php?page=staff.php&did=' . $row['staff_id'] . '">Delete</a>'
						]);
	}

	$nav = loadTemp('../templates/nav_template.php',[]);
	$left = loadTemp('../templates/aside_template.php',[]);
	
	$content = loadTemp('../templates/staff_template.php',['nav'=>$nav, 'left'=>$left, 'table'=>$table]);
?>