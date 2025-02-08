<?php
header('Content-Type: application/json');

// Allow from any origin
header("Access-Control-Allow-Origin: *");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
    echo json_encode(['success' => true]);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = json_decode(file_get_contents('data.json'), true);
    echo json_encode($data);
}
?> 