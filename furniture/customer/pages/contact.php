<?php
	$title = 'Contact Page';

	$furniture = new OperationTable('enquiry');

	if (isset($_POST['save'])) {
		// $valid = testStudent($_POST['student']);

		// if ($valid) {
			$furniture->save($_POST['enquiry'], 'enquiry_id');
			$msg = 'saved';
			// header('Location: liststudents');
		// }
		// else {
			// echo "Please enter all fields!";
		// }
	}

	$content = loadTemp('../templates/contact_template.php',[]);
?>