<?php

require_once("BookModel.php");

function addBookController($title, $author, $category, $status)
{
    return insertBook($title, $author, $category, $status);
}

function showBooksController()
{
    return getBooks();
}

?>
