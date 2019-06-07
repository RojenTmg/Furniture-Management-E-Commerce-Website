<?php echo $nav; ?>

<img src="../../images/randombanner.php"/>

<main class="admin">

<?php echo $left; ?>

<section class="right">
<h2>Add Category</h2>

	<form action="index.php?page=manage_category.php" method="POST">
		<label>Name</label>
		<input type="hidden" name="category[id]" value="<?php extract($data); if(isset($id)) echo $id; ?>">

		<input type="text" name="category[name]" required="required" value="<?php if(isset($name)) echo $name; ?>" />


		<input type="submit" name="save" value="Save Category" />

	</form>
	</section>
	
</main>
