
<?php

header("Content-Type: application/json");

$url = "https://api.open-meteo.com/v1/forecast?latitude=54.98&longitude=-1.61&current=temperature_2m";

$context = stream_context_create([
    "http" => ["timeout" => 5]
]);

$response = @file_get_contents($url, false, $context);

if ($response === false) {
    http_response_code(502);
    echo json_encode(["error" => "Weather service unavailable"]);
    exit;
}

$data = json_decode($response, true);

if (!is_array($data) || !isset($data["current"]["temperature_2m"])) {
    http_response_code(502);
    echo json_encode(["error" => "Invalid weather response"]);
    exit;
}

echo json_encode([
    "city" => "Newcastle upon Tyne",
    "temperature" => $data["current"]["temperature_2m"],
    "unit" => "°C"
]);
