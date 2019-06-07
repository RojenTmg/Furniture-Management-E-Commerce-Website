<?php echo $nav; ?>

<img src="../../images/randombanner.php"/>

<main class="admin">
<?php echo $left; ?>

<section class="right">
<h2>Staff</h2>
	<div class="fur-links">
			<a class="new" href="index.php?page=staff.php">Staff</a>
			<a class="new" href="index.php?page=manage_staff.php">Add new Staff</a>
	<div class="fur-links">

			<?php echo $table->generateTable(); ?>

	</section>

</main>

		