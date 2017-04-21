<div class="container">
	<h1>Boek bewerken</h1>
	<form action="<?= URL ?>book/editSave" method="post">
	
		<p><input type="text" name="book_title" value="<?= $book['book_title']; ?>"></p>
		<p><input type="text" name="book_publisher" value="<?= $book['book_publisher']; ?>"></p>
		<p><input type="text" name="book_summary" value="<?= $book['book_summary']; ?>"></p>
		<p><input type="text" name="author_id" value="<?= $book['author_id']; ?>"></p>

		<input type="hidden" name="book_id" value="<?= $book['book_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
