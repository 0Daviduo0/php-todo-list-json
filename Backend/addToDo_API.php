<?php
// Permissions
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
HEADER('Content-Type: application/json');

$newNote = $_GET['newNote'];

// echo json_encode($todoList);

$jsonTodoList = file_get_contents("todo.json");
$todoList = json_decode($jsonTodoList);

$todoList[] = [
    "text" => $newNote,
    "completed" => false
];

$jsonTodoList = json_encode($todoList);
file_put_contents("todo.json", $jsonTodoList);