<?php echo $nav; ?>

<img src="../../images/randombanner.php"/>

<main class="admin">

<?php echo $left; ?>

<section class="right">
<h2>Categories</h2>

			<a class="new" href="index.php?page=manage_category.php">Add new category</a>

			<?php echo $table->generateTable(); ?>

	</section>

</main>

		