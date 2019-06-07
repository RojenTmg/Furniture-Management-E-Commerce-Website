<?php 
include '../../../connect.php';
include '../../../classes/OperationTable.php';
	
	if (isset($_POST['cId'])) {
		$cId = $_POST['cId'];
	}

	if ($_POST['state'] == 'new' && $_POST['cId'] < 0) {
		$furniture = $pdo->prepare('SELECT f.id, f.name, f.description, f.price, c.name AS cname FROM furniture AS f JOIN category AS c ON f.categoryID = c.id WHERE  archive = "no" AND state = "new"'); 
	}
	elseif ($_POST['state'] == 'old' && $_POST['cId'] < 0) {
		$furniture = $pdo->prepare('SELECT f.id, f.name, f.description, f.price, c.name AS cname FROM furniture AS f JOIN category AS c ON f.categoryID = c.id WHERE  archive = "no" AND state = "old"'); 
	}
	else {
		$furniture = $pdo->prepare('SELECT f.id, f.name, f.description, f.price, c.name AS cname FROM furniture AS f JOIN category AS c ON f.categoryID = c.id WHERE  archive = "no"'); 
	}
	if ($_POST['state'] == 'new' && $_POST['cId'] >= 0) {
		$furniture = $pdo->prepare('SELECT f.id, f.name, f.description, f.price, c.name AS cname FROM furniture AS f JOIN category AS c ON f.categoryID = c.id WHERE  archive = "no" AND state = "new" AND c.id = ' . $cId . ' '); 
	}
	elseif ($_POST['state'] == 'old' && $_POST['cId'] >= 0) {
		$furniture = $pdo->prepare('SELECT f.id, f.name, f.description, f.price, c.name AS cname FROM furniture AS f JOIN category AS c ON f.categoryID = c.id WHERE  archive = "no" AND state = "old" AND c.id = ' . $cId . ' '); 
	}
	elseif ($_POST['state'] == 'none' && $_POST['cId'] >= 0) {
		$furniture = $pdo->prepare('SELECT f.id, f.name, f.description, f.price, c.name AS cname FROM furniture AS f JOIN category AS c ON f.categoryID = c.id WHERE  archive = "no" AND c.id = ' . $cId . ' '); 
	}

	$furniture->execute();

	echo '<ul class="furniture">';

	foreach ($furniture as $furniture) {
		echo '<li>';

		echo '<div class="det-img">';
			if (!empty($furniture['img1'])) { echo '<a href="' . $furniture['img1'] . '"><img src="' . $furniture['img1'] . '" /></a>'; }
			if (!empty($furniture['img2'])) { echo '<a href="' . $furniture['img2'] . '"><img src="' . $furniture['img2'] . '" /></a>'; }
			if (!empty($furniture['img3'])) { echo '<a href="' . $furniture['img3'] . '"><img src="' . $furniture['img3'] . '" /></a>'; }
			if (!empty($furniture['img4'])) { echo '<a href="' . $furniture['img4'] . '"><img src="' . $furniture['img4'] . '" /></a>'; }
		echo '</div>';

		echo '<div class="details">';
		echo '<h2>' . $furniture['name'] . '</h2>';
		echo '<h3>' . $furniture['cname'] . '</h3>';
		echo '<h4>£' . $furniture['price'] . '</h4>';
		echo '<h4>'.$_POST['state'].'</h4>';
		echo '<p>' . $furniture['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	}
	echo '</ul>';
	
?>