<main class="home">

		<p>Please call us on  01604 90345 or email <a href="mailto:enquiries@fransfurniture.co.uk">enquiries@fransfurniture.co.uk</a>

		<form action="index.php?page=contact.php" method="POST">
			
			<label>Name</label>
			<input type="text" name="enquiry[name]">

			<label>Email</label>
			<input type="text" name="enquiry[email]">

			<label>Telephone</label>
			<input type="text" name="enquiry[phone]">


			<label>Enquiry?</label>
			<textarea name="enquiry[description]"></textarea>

			<input type="submit" name="save" value="Send" />
		</form>
	</main>