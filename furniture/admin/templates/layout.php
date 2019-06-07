<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../../css/styles.css?<?php echo time(); ?>">
		<title><?php echo $title; ?></title>
		<script>
			function getMark($id){
				var xmlHttp = new XMLHttpRequest();
				xmlHttp.open('POST', '../templates/ajax/get_mark.php', true);

				var data = new FormData();
				data.append('id', $id);
				xmlHttp.send(data);

				xmlHttp.onreadystatechange = function(){
					if(xmlHttp.readyState == 4){
						var element = document.getElementById($id);
						element.innerHTML = xmlHttp.responseText;
					}
				}
			}
		</script>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
			<h1>Fran's Furniture</h1>

		</section>
	</header>
		<?php echo $content; ?>
	</main>
	<footer>
		&copy; Fran's Furniture <?php echo date("Y"); ?>
	</footer>
</body>
</html>

