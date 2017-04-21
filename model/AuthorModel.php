<?php

function getAuthor($author_id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM authors WHERE author_id = :author_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":author_id" => $author_id));

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