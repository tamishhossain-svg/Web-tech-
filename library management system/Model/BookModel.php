<?php

require_once("db.php");

function insertBook($title, $author, $category, $status)
{
    global $conn;

    $sql = "INSERT INTO books(title, author, category, status)
            VALUES('$title','$author','$category','$status')";

    return mysqli_query($conn, $sql);
}

function getBooks()
{
    global $conn;

    $sql = "SELECT * FROM books";

    return mysqli_query($conn, $sql);
}

?>
