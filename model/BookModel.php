<?php

function getBook($book_id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM books WHERE book_id = :book_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":book_id" => $book_id));

	$db = null;

	return $query->fetch();
}

function getAllBooks($author_id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT `books`.*, `authors`.author_name
			FROM `books`
			INNER JOIN `authors`
			ON `books`.author_id = `authors`.author_id
			WHERE `authors`.author_id = :author_id";

	$query = $db->prepare($sql);
	$query->bindParam(':author_id', $author_id);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editBook() 
{
	$book_title = isset($_POST['book_title']) ? $_POST['book_title'] : null;
	$book_publisher	 = isset($_POST['book_publisher']) ? $_POST['book_publisher'] : null;
	$book_summary = isset($_POST['book_summary']) ? $_POST['book_summary'] : null;
	$author_id = isset($_POST['author_id']) ? $_POST['author_id'] : null;
	$book_id = isset($_POST['book_id']) ? $_POST['book_id'] : null;
	
	if (strlen($book_title) == 0 || strlen($book_publisher) == 0 || strlen($book_summary) == 0 || strlen($author_id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE books SET book_title = :book_title, book_publisher = :book_publisher, book_summary = :book_summary, author_id = :author_id WHERE book_id = :book_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':book_title' => $book_title,
		':book_publisher' => $book_publisher,
		':book_summary' => $book_summary,
		':author_id' => $author_id,
		':book_id' => $book_id));

	$db = null;
	
	return true;
}

function deleteBook($book_id = null) 
{
	if (!$book_id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM books WHERE book_id=:book_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':book_id' => $book_id));

	$db = null;
	
	return true;
}

function createBook() 
{
	$book_title = isset($_POST['book_title']) ? $_POST['book_title'] : null;
	$book_publisher = isset($_POST['book_publisher']) ? $_POST['book_publisher'] : null;
	$book_summary = isset($_POST['book_summary']) ? $_POST['book_summary'] : null;
	$author_id = isset($_POST['author_id']) ? $_POST['author_id'] : null;
	
	if (strlen($book_title) == 0 || strlen($book_publisher) == 0 || strlen($book_summary) == 0 || strlen($author_id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO books (book_title, book_publisher, book_summary, author_id) VALUES (:book_title, :book_publisher, :book_summary, :author_id)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':book_title' => $book_title,
		':book_publisher' => $book_publisher,
		':book_summary' => $book_summary,
		':author_id' => $author_id));

	$db = null;
	return true;
}
