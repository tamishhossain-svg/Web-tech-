<?php
header("Content-Type: application/json");

$students = [
    [
        "name" => "Tamish",
        "id" => "25-60896-1",
        "department" => "CNCS",
        "cgpa" => 3.23
    ],
   

];

echo json_encode($students);
?>