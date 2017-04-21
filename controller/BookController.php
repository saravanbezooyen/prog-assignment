<?php

require(ROOT . "model/BookModel.php");

function index()
{
	render("book/books", array(
	'books' => getAllBooks()));
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

	header("Location:" . URL . "book/index");
}

function edit($book_id)
{
	render("book/edit", array(
		'book' => getBook($book_id)
	));
}

function editSave()
{
	if (!editBook()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "book/index");
} 

function delete($book_id)
{
	if (!deleteBook($book_id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "book/index");
}
