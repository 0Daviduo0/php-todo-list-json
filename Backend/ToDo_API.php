<?php
// Permissions
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
HEADER('Content-Type: application/json');

// API Object/Objects
$testObj = [
    [

        "test" => "Questo è un test"

    ]
];

header('Content-Type: application/json');

echo json_encode($testObj);