<h2>Boek toevoegen</h2>
	<div class="form">
	<form action="<?= URL ?>/createSave" method="post">
	<label>
		<p><input type="text" name="book_title" placeholder="Title"></p>
		<p><input type="text" name="book_publisher" placeholder="Pubisher"></p>
		<p><input type="text" name="book_summary" placeholder="Summary"></p>
		<p><input type="text" name="author_id" placeholder="Author"></p>

		<input type="submit" value="Verzenden">
	</label>
	</form> 
	</div>


	