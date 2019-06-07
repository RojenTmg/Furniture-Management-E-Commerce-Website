<?php
	$title = 'Furniture Page';
	$furniture = new OperationTable('furniture');

	if (isset($_GET['did'])) {
			$furniture->delete('id', $_GET['did']);
	}
	if (isset($_GET['uaid'])) {
			$furniture->archive($_GET['uaid'], 'no');
	}

	$table = new tableGenerator();
	$headings = array('Name', 'Price','Condition','');
	$table->setHeadings($headings);

	$furnitureQuery = new OperationTable('furniture');
	$furniture = $furnitureQuery->find('archive', 'yes');

	foreach ($furniture as $row) {
		$table->addRow(['name'=>$row['name'],
						'price'=>$row['price'],
						'operation'=>'<a style="float: right" href="index.php?page=furniture_archive.php&uaid=' . $row['id'] . '">Un-Archive</a>
						<a style="float: right" href="index.php?page=furniture.php&did=' . $row['id'] . '">Delete</a>
						<a style="float: right" href="index.php?page=add_furniture.php&id=' . $row['id'] . '">Edit</a>'
						]);
	}

	$nav = loadTemp('../templates/nav_template.php',[]);
	$left = loadTemp('../templates/aside_template.php',[]);

	$content = loadTemp('../templates/furniture_template.php',['nav'=>$nav, 'left'=>$left, 'table'=>$table]);
?>