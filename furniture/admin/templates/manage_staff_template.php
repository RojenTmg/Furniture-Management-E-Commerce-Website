<?php echo $nav; ?>

<img src="../../images/randombanner.php"/>

<main class="admin">
<?php echo $left; ?>

<section class="right">
<h2>Add Staff</h2>
	<div class="fur-links">
			<a class="new" href="index.php?page=staff.php">Staff</a>
			<a class="new" href="index.php?page=add_staff.php">Add new Staff</a>
	<div class="fur-links">
	<form action="index.php?page=manage_staff.php" method="POST">
		<input type="hidden" name="staff[staff_id]" value="<?php extract($data); if(isset($staff_id)) echo $staff_id; ?>">

		<label>Username</label>
		<input type="text" name="staff[username]" required="required" value="<?php if(isset($username)) echo $username; ?>" />
		
		<label>Password</label>
		<input type="password" name="staff[password]" required="required" value="<?php if(isset($password)) echo $password; ?>" />

		<input type="submit" name="save" value="Save" />

	</form>
	</section>
	
</main>
