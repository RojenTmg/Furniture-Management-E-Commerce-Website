<?php
	$title = 'Updates Page';
	$furniture = new OperationTable('updates');


	if (isset($_GET['did'])) {
			$furniture->delete('update_id', $_GET['did']);
	}
	
	$table = new tableGenerator();
	$headings = array('Title', 'Description','Posted On','');
	$table->setHeadings($headings);

	$furnitureQuery = new OperationTable('updates');
	$furniture = $furnitureQuery->findAll();

	foreach ($furniture as $row) {
		$table->addRow(['title'=>$row['title'],
						'description'=>$row['description'],
						'date_posted'=>$row['date_posted'],
						'operation'=>'<a style="float: right" href="index.php?page=update.php&did=' . $row['update_id'] . '">Delete</a>
						<a style="float: right" href="index.php?page=manage_update.php&id=' . $row['update_id'] . '">Edit</a>'
						]);
	}

	$nav = loadTemp('../templates/nav_template.php',[]);
	$left = loadTemp('../templates/aside_template.php',[]);

	$content = loadTemp('../templates/update_template.php',['nav'=>$nav, 'left'=>$left, 'table'=>$table]);
?>