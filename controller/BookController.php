<?php

require(ROOT . "model/BookModel.php");
require(ROOT . "model/AuthorModel.php");

function index($author_id)
{
	render("book/books", array(
		'books' => getAllBooks($author_id),
		'author' => getAuthor($author_id)
	)
);

}

function create()
{
	render("book/create");
}

function createSave()
{
	if (!createBook()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "book/index/".$_POST['author_id']);
}

function edit($book_id)
{
	render("book/edit", array(
		'book' => getBook($book_id),
		'authors' => getAllAuthors()
	));
}

function editSave()
{
	if (!editBook()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "book/index/".$_POST['author_id']);
} 

function delete($book_id)
{ 	
	$book = getBook($book_id);
	if (!deleteBook($book_id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "book/index/".$book['author_id']);
}
