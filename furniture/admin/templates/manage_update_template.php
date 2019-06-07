<?php echo $nav; ?>

<img src="../../images/randombanner.php"/>

<main class="admin">

<?php echo $left; ?>

<section class="right">
<h2>Manage updates</h2>
	
	<?php if (isset($msg)) {
		if ($msg == 'saved') {
			echo "Update Saved Successfully!";
		}
	}	
	?>
		<form action="index.php?page=manage_update.php" method="POST" enctype="multipart/form-data">
			
			<input type="hidden" name="updates[update_id]" value="<?php extract($data); if(isset($update_id)) echo $update_id; ?>">
			
			<label>Title</label>
			<input type="text" name="updates[title]" value="<?php if(isset($title)) echo $title; ?>">

			<label>Description</label>
			<textarea name="updates[description]"><?php if(isset($description)) echo $description; ?></textarea>

			<label>Image</label>
			<input type="file" name="photo"  value="<?php if(isset($photo)) echo $photo; ?>"/>

			<input type="submit" name="save" value="Save" />
		</form>
</section>
			
</main>
