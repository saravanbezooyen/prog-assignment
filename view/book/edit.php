<div class="container">
	<h1>Boek bewerken</h1>
	<form action="<?= URL ?>book/editSave" method="post">
	
		<p><input type="text" name="book_title" value="<?= $book['book_title']; ?>"></p>
		<p><input type="text" name="book_publisher" value="<?= $book['book_publisher']; ?>"></p>
		<p><input type="text" name="book_summary" value="<?= $book['book_summary']; ?>"></p>
		<select name="author_id">
			<?php foreach ($authors as $author) { ?>
			<option <?php if($author['author_id'] == $book['author_id']){ echo "selected";} ?> value="<?= $author['author_id'] ?>"><?= $author['author_name'] ?></option>
			<?php } ?>
		</select>

		<input type="hidden" name="book_id" value="<?= $book['book_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
