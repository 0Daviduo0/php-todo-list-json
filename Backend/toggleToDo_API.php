<?php
// Permissions
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
HEADER('Content-Type: application/json');

$index = $_GET["index"];

$jsonTodoList = file_get_contents("todo.json");
$todoList = json_decode($jsonTodoList);

$note = $todoList[$index];

$note -> completed = !$note -> completed;

$jsonTodoList = json_encode($todoList);
file_put_contents("todo.json", $jsonTodoList);

echo true;

