<main class="home">
		<p>Welcome to Fran's Furniture. We're a family run furniture shop based in Northampton. We stock a wide variety of modern and antique furniture including laps, bookcases, beds and sofas.</p>

	<section class="right">
		<h1>On Sale Furniture's</h1>
		
		<div id="furnt">
			<ul class="furniture">
				<?php
				global $pdo;

				foreach ($update as $update) {
					echo '<li>';

					echo '<a href="' . $update['photo'] . '"><img src="' . $update['photo'] . '" /></a>';
					echo '<div class="details">';
					echo '<h2>' . $update['title'] . '</h2>';
					echo '<h3>' . $update['date_posted'] . '</h3>';
					echo '<p>' . $update['description'] . '</p>';
					echo '</div>';
					echo '</li>';
				}
				?>
			</ul>
		</div>
	</section>
</main>