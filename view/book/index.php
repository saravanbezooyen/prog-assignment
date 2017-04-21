	<header>
		<h1>Authors</h1>
	</header>
	<table>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Zipcode</th>
			<th>City</th>
			<th>Books</th>
		</tr>
		<tr>
		<?php foreach($authors as $author){ ?>
			<td><?php echo $author["author_name"]; ?></td>
			<td><?php echo $author["author_address"]; ?></td>
			<td><?php echo $author["author_zipcode"]; ?></td>
			<td><?php echo $author["author_city"]; ?></td>
			<td><a href="<?= URL ?>book/">Show</a></td>
		<?php } ?>
		</tr>
	</table>
