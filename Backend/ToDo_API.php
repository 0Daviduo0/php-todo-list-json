<?php

$testObj = [
    [

        "test" => "Questo è un test"

    ]
];

header('Content-Type: application/json');

echo json_encode($testObj);