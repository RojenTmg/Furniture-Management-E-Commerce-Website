<?php echo $nav; ?>

<img src="../../images/randombanner.php"/>

<main class="admin">

<?php echo $left; ?>

<section class="right">
<h2>Add Furniture</h2>
	
	<?php if (isset($msg)) {
		if ($msg == 'saved') {
			echo "Furniture Saved Successfully!";
		}
	}	
	?>
		<form action="index.php?page=manage_furniture.php" method="POST" enctype="multipart/form-data">
			
			<input type="hidden" name="furniture[id]" value="<?php extract($data); if(isset($id)) echo $id; ?>">
			
			<label>Name</label>
			<input type="text" name="furniture[name]" value="<?php if(isset($name)) echo $name; ?>">

			<label>Description</label>
			<textarea name="furniture[description]"><?php if(isset($description)) echo $description; ?></textarea>

			<label>Price</label>
			<input type="text" name="furniture[price]" value="<?php if(isset($price)) echo $price; ?>" />

			<label>Category</label>

			<select name="furniture[categoryId]">
			<?php
				foreach ($category as $row) {
					echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
				}

			?>
			</select>

			<label>Image 1</label>
			<input type="file" name="img1"  value="<?php if(isset($img1)) echo $img1; ?>"/> 
			<label>Image 2</label>
					<input type="file" name="img2"  value="<?php if(isset($img2)) echo $img2; ?>"/>
			<label>Image 3</label>
					<input type="file" name="img3"  value="<?php if(isset($img3)) echo $img3; ?>"/>
			<label>Image 4</label>
					<input type="file" name="img4"  value="<?php if(isset($img4)) echo $img4; ?>"/>

			<label>Condition</label>			
			<select name="furniture[state]">
				<option value="new">New</option>
				<option value="old">Old</option>
			</select>			

			<input type="submit" name="save" value="Save" />
		</form>
</section>
			
</main>
