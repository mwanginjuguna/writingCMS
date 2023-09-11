<?php

/**
 * @url 'http://localhost:8888/api/test'
 */

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');


if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
    $value = $_POST['key'];
    $assets = new \Core\Assets();
    $prices = $assets->getDataFromJsonFilesAssets('pricing');

    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode($prices);
} else {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['message' => 'An error occurred while processing your request.']);
}
