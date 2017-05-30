<?php

require(ROOT . "model/AuthorModel.php");

function index()
{
	render("author/index", array(
	'authors' => getAllAuthors()));
}

function create()
{
	render("author/create");
}

function createSave()
{
	if (!createAuthor()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "author/index");
}

function edit($author_id)
{
	render("author/edit", array(
		'author' => getAuthor($author_id)
	));
}

function editSave()
{
	if (!editAuthor()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "author/index");
} 

function delete($author_id)
{
	if (!deleteAuthor($author_id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "author/index");
}
