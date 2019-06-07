<img src="../../images/randombanner.php"/>

<main class="admin">

<?php 
	if (isset($_GET['msg'])) {
		echo "Login Failed!!!";
	}
?>

<h2>Log in</h2>

<form action="index.php" method="post" style="padding: 40px">

	<label>Username</label>
	<input type="text" name="username" />

	<label>Enter Password</label>
	<input type="password" name="password" />

	<input type="submit" name="submit" value="Log In" />
</form>

</main>
