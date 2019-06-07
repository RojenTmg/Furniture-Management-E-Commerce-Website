<main class="admin">

	<section class="left">
		<ul>
			<li><a href="index.php?page=furniture.php&cId=-1">Our Furniture</a></li>
			<?php
				foreach ($category as $value) {
					echo '<li><a href="index.php?page=furniture.php&cId=' . $value['id'] . '">' . $value['name'] . '</a></li>';
				}
			?>
		</ul>
	</section>

	<section class="right">
		<h1>Furniture</h1>
		<label>Condition : </label>
		<input type="hidden" name="" id="catId" value="<?php if (isset($_GET['cId'])) echo $_GET['cId']; ?> ">
		<select id="condition" onclick="myLoad()">
			<option value="none">None</option>
			<option value="new">Brand New</option>
			<option value="old">Second Hand</option>
		</select>
		<div id="furnt">
			<ul class="furniture">
				<?php
				global $pdo;

				foreach ($furniture as $furniture) {
					echo '<li>';

					echo '<div class="det-img">';
					if (!empty($furniture['img1'])) { echo '<a href="' . $furniture['img1'] . '"><img src="' . $furniture['img1'] . '" /></a>'; }
					if (!empty($furniture['img2'])) { echo '<a href="' . $furniture['img2'] . '"><img src="' . $furniture['img2'] . '" /></a>'; }
					if (!empty($furniture['img3'])) { echo '<a href="' . $furniture['img3'] . '"><img src="' . $furniture['img3'] . '" /></a>'; }
					if (!empty($furniture['img4'])) { echo '<a href="' . $furniture['img4'] . '"><img src="' . $furniture['img4'] . '" /></a>'; }
					echo '</div>';

					echo '<div class="details">';
					echo '<h2>' . $furniture['name'] . '</h2>';
					echo '<h3>' . $furniture['cname'] . '</h3>';
					echo '<h4>£' . $furniture['price'] . '</h4>';
					echo '<p>' . $furniture['description'] . '</p>';

					echo '</div>';
					echo '</li>';
					
				}
				?>
			</ul>
		</div>
	</section>
</main>