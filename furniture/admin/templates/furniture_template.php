<?php echo $nav; ?>

<img src="../../images/randombanner.php"/>

<main class="admin">

<?php echo $left; ?>

<section class="right">
<h2>Furniture</h2>
	<div class="fur-links">
		<a class="new" href="index.php?page=furniture.php">Furnitures</a>
		<a class="new" href="index.php?page=furniture_archive.php">Archives</a>
		<a class="new" href="index.php?page=manage_furniture.php">Add new furniture</a>
	</div>
			<?php echo $table->generateTable(); ?>
	
	</section>

</main>
	