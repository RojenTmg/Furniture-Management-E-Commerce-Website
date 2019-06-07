<?php 
	$title = 'Login Page';

	session_unset();
	session_destroy();

	$content = loadTemp('../templates/login_template.php',[]);

?>
