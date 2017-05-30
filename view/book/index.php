	<header>
		<h1>Authors</h1>
	</header>
	<table>
		<tr>
			<th>Title</th>
			<th>Publisher</th>
			<th>Summary</th>
			<th>Author</th>
		</tr>
		<tr>
		<?php foreach($books as $book){ ?>
			<td><?php echo $book["book_title"]; ?></td>
			<td><?php echo $book["book_publisher"]; ?></td>
			<td><?php echo $book["book_summary"]; ?></td>
			<td><?php echo $book["author_id"]; ?></td>
		<?php } ?>
		</tr>
	</table>
