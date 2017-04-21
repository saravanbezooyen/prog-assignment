	<header class="books">
		<h1>Add Book</h1>
	</header>
	<nav>
		<ul>
			<li><a href="index.php"><h4>Home</h4></a></li>
		</ul>
	</nav>
		<h2>Verjaardag toevoegen</h2>
	<div class="form">
	<form action="<?= URL ?>book/createSave" method="post">
	<label>
		<p><input type="text" name="book_title" placeholder="Title"></p>
		<p><input type="text" name="book_publisher" placeholder="Pubisher"></p>
		<p><input type="text" name="book_summary" placeholder="Summary"></p>
		<p><input type="text" name="author_id" placeholder="Author"></p>

		<input type="submit" value="Verzenden">
	</label>
	</form> 
	</div>


	