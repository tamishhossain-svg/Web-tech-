<?php

require_once("BookController.php");

$action = $_POST['action'];

# ADD BOOK
if($action == "add")
{
    addBookController(
        $_POST['title'],
        $_POST['author'],
        $_POST['category'],
        $_POST['status']
    );

    echo "Book Added Successfully";
}

# FETCH BOOKS
if($action == "fetch")
{
    $result = showBooksController();

    while($row = mysqli_fetch_assoc($result))
    {
        echo "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['title']}</td>
            <td>{$row['author']}</td>
            <td>{$row['category']}</td>
            <td>{$row['status']}</td>
        </tr>
        ";
    }
}

?>
