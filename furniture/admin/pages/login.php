<?php
	$title = 'Login Page';

	if (isset($_POST['submit'])) {
		$adminQuery = new OperationTable('staff');
		$ad = $adminQuery->find('username', $_POST['username']);
		
		if ($ad->rowCount() > 0) {
			$admin = $ad->fetch();
			if (password_verify($_POST['password'], $admin['password'])) {
				$_SESSION['loggedin'] = true;
				header('Location: index.php');
			}
			else {
				header('Location: index.php?page=login.php&msg=error');
			}
		}
		else {
			header('Location: index.php?page=login.php&msg=error');
		}
	}

	$content = loadTemp('../templates/login_template.php',[]);
?>


