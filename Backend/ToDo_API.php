<?php
// Permissions
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
HEADER('Content-Type: application/json');


// Get Value from frontend
$data = $_GET['test2'];

// API Object/Objects
$testObj = [
    [

        "test" => "Questo è un test",
        "test2" => $data

    ]
];

header('Content-Type: application/json');

// need to be printed and encoded
echo json_encode($testObj);