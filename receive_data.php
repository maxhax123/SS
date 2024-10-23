<?php
// Get the incoming data
$data = file_get_contents("php://input");

// Decode the JSON data into an associative array
$playerData = json_decode($data, true);

// Example: Save the data to a file (or store it in a database)
file_put_contents("player_data.txt", print_r($playerData, true), FILE_APPEND);

// Send a response back to Roblox
header('Content-Type: application/json');
echo json_encode(["status" => "success", "message" => "Data received"]);
?>
