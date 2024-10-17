<?php
// Disable direct access to the file
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(403);
    echo json_encode(['error' => 'Forbidden']);
    exit;
}

// Path to your JSON file
$jsonFile = 'channel-data.json';

// Check if the file exists
if (file_exists($jsonFile)) {
    // Load the contents of the JSON file
    $jsonData = file_get_contents($jsonFile);

    // Send the JSON response
    header('Content-Type: application/json');
    echo $jsonData;
} else {
    // Return an error if the file is not found
    http_response_code(404);
    echo json_encode(['error' => 'File not found']);
}
?>
