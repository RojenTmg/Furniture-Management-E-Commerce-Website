<?php echo $nav; ?>

<img src="../../images/randombanner.php"/>

<main class="admin">

<?php echo $left; ?>

<section class="right">
<h2>Furniture</h2>
	<div class="fur-links">
		<a class="new" href="index.php?page=update.php">Updates</a>
		<a class="new" href="index.php?page=manage_update.php">Add new Updates</a>
	</div>
			<?php echo $table->generateTable(); ?>
	
	</section>

</main>
	