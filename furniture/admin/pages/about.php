<?php
	$title = 'About Page';

	$nav = loadTemp('../templates/nav_template.php',[]);
	
	$content = loadTemp('../templates/about_template.php',['nav'=>$nav]);
?>