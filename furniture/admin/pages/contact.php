<?php
	$title = 'Contact Page';

	$nav = loadTemp('../templates/nav_template.php',[]);
	
	$content = loadTemp('../templates/contact_template.php',['nav'=>$nav]);
?>