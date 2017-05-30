<?php

function getAuthor($author_id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM authors WHERE author_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $author_id));

	$db = null;

	return $query->fetch();
}

function getAllAuthors() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM authors";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editAuthor() 
{
	$author_name = isset($_POST['author_name']) ? $_POST['author_name'] : null;
	$author_address = isset($_POST['author_address']) ? $_POST['author_address'] : null;
	$author_zipcode = isset($_POST['author_zipcode']) ? $_POST['author_zipcode'] : null;
	$author_city = isset($_POST['author_city']) ? $_POST['author_city'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($author_name) == 0 || strlen($author_address) == 0 || strlen($author_zipcode) == 0 || strlen ($author_city) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE authors SET author_name = :author_name, author_address = :author_address, author_zipcode = :author_zipcode WHERE author_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':author_name' => $author_name,
		':author_address' => $author_address,
		':author_zipcode' => $author_zipcode,
		':author_city' => $author_city,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteAuthor($author_id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM authors WHERE author_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createAuthor() 
{
	$author_name = isset($_POST['author_name']) ? $_POST['author_name'] : null;
	$author_address = isset($_POST['author_address']) ? $_POST['author_address'] : null;
	$author_zipcode = isset($_POST['author_zipcode']) ? $_POST['author_zipcode'] : null;
	$author_city = isset($_POST['author_city']) ? $_POST['author_city'] : null;

	if (strlen($author_name) == 0 || strlen($author_address) == 0 || strlen($author_zipcode) == 0 || strlen($author_city) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO authors(author_name, author_address, author_zipcode, author_city) VALUES (:author_name, :author_address, :author_zipcode, :author_city)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':author_name' => $author_name,
		':author_address' => $author_address,
		':author_zipcode' => $author_zipcode,
		':author_city' => $author_city));

	$db = null;
	
	return true;
}
