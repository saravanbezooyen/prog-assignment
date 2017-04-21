<?php

require(ROOT . "model/AuthorModel.php");

function index()
{
	render("book/index", array(
	'authors' => getAllAuthors()));
}
