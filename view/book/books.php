	<header>
		<h1>Books</h1>
		<h3>Ernest Cline</h3>
	</header>
	<nav>
		<ul>
			<li><a href="author"><h4>Home</h4></a></li>
			<li><a href="book/create"><h4>Add book</h4></a></li>
		</ul>
	</nav>
	<table>
		<tr>
			<th>Title</th>
			<th>Publisher</th>
			<th>Summary</th>
			<th colspan="2">Action</th>
		</tr>
		<tr>
		<?php foreach($books as $book){ ?>
			<td nowrap="true">Ready Player One</td>
			<td nowrap="true">Crown Publishing Group</td>
			<td><?php echo $book["book_summary"] ?></td>
			<td><a href="book/edit/<?php echo $book["book_id"]; ?>">Edit</a></td>
			<td><a href="book/delete/<?php echo $book["book_id"]; ?>">Delete</a></td>
		<?php } ?>
		</tr>
	</table>
