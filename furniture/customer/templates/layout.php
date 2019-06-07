<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../../css/styles.css?<?php echo time(); ?>"/>
		<title><?php echo $title; ?></title>
		<script>
			function getCondition(){
				var xmlHttp = new XMLHttpRequest();
				xmlHttp.open('POST', '../templates/ajax/get_condition.php', true);
				var catId = document.getElementById('catId');
				
				var data = new FormData();
				data.append('state', this.value);
				data.append('cId', catId.value);
				xmlHttp.send(data);
				xmlHttp.onreadystatechange = function(){
					if(xmlHttp.readyState == 4){
						var element = document.getElementById('furnt');
						element.innerHTML = xmlHttp.responseText;
					}
				}
			}

			function myLoad() {
				var element = document.getElementById('condition');
				element.addEventListener('change', getCondition);
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
	<nav>
		<ul>
			<li><a href="index.php?page=home.php">Home</a></li>
			<li><a href="index.php?page=furniture.php&cId=-1">Our Furniture</a></li>
			<li><a href="index.php?page=about.php">About Us</a></li>
			<li><a href="index.php?page=contact.php">Contact us</a></li>
			<li><a href="index.php?page=faq.php">FAQ's</a></li>
		</ul>
	</nav>
<img src="../../images/randombanner.php"/>
	
	<?php echo $content; ?>

	<footer>
		&copy; Fran's Furniture <?php echo date("Y"); ?>
		
	</footer>
</body>
</html>
