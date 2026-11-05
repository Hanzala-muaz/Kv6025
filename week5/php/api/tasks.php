
<?php

header("Content-Type: application/json");

$method = $_SERVER["REQUEST_METHOD"];

// Reject unsupported HTTP methods
if (!in_array($method, ["GET", "POST", "PUT", "DELETE"], true)) {
    header("Allow: GET, POST, PUT, DELETE");
    http_response_code(405);

    echo json_encode([
        "error" => "Method not allowed"
    ]);

    exit;
}

require_once __DIR__ . "/../includes/data.php";

if ($method === "POST") {

$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Validate JSON
if (!is_array($data) || array_is_list($data)) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid JSON data"]);
    exit;
}

// Validate task title
if (
    !isset($data["title"]) ||
    !is_string($data["title"]) ||
    trim($data["title"]) === "" ||
    strlen($data["title"]) > 100
) {
    http_response_code(400);

    echo json_encode([
        "error" => "Task title is required and must be 100 characters or fewer"
    ]);


    exit;
}

// Validate task status
if (
    !isset($data["status"]) ||
    !in_array($data["status"], ["To do", "Doing", "Done"], true)
) {
    http_response_code(400);

    echo json_encode([
        "error" => "Invalid task status"
    ]);

    exit;
}

// Validate task priority
if (
    !isset($data["priority"]) ||
    !in_array($data["priority"], ["Low", "Medium", "High"], true)
) {
    http_response_code(400);

    echo json_encode([
        "error" => "Invalid task priority"
    ]);

    exit;
}

// Validate study area ID
$areaId = filter_var(
    $data["area_id"] ?? null,
    FILTER_VALIDATE_INT
);

if ($areaId === false || $areaId === null || $areaId < 1) {
    http_response_code(400);

    echo json_encode([
        "error" => "Invalid study area ID"
    ]);

    exit;
}

// Check whether the study area exists in MySQL
$statement = $pdo->prepare(
    "SELECT id FROM study_areas WHERE id = ?"
);

$statement->execute([$areaId]);

if (!$statement->fetch()) {
    http_response_code(400);

    echo json_encode([
        "error" => "Study area does not exist"
    ]);

    exit;
}

// Insert the new task into MySQL
$statement = $pdo->prepare(
    "INSERT INTO tasks (title, status, priority, area_id)
     VALUES (?, ?, ?, ?)"
);

$statement->execute([
    trim($data["title"]),
    $data["status"],
    $data["priority"],
    $areaId
]);

// Return the new task ID
$newTaskId = (int) $pdo->lastInsertId();

http_response_code(201);

echo json_encode([
    "message" => "Task created successfully",
    "id" => $newTaskId
]);

exit;
}

// Handle PUT requests
if ($method === "PUT") {

    // Validate the task ID
    $id = filter_var(
        $_GET["id"] ?? null,
        FILTER_VALIDATE_INT
    );

    if ($id === false || $id === null || $id < 1) {
        http_response_code(400);

        echo json_encode([
            "error" => "Invalid task ID"
        ]);

        exit;
    }

    // Check whether the task exists in MySQL
$statement = $pdo->prepare(
    "SELECT id FROM tasks WHERE id = ?"
);

$statement->execute([$id]);

if (!$statement->fetch()) {
    http_response_code(404);

    echo json_encode([
        "error" => "Task not found"
    ]);

    exit;
}

// Read the updated task data
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Validate JSON
if (!is_array($data) || array_is_list($data)) {
    http_response_code(400);

    echo json_encode([
        "error" => "Invalid JSON data"
    ]);

    exit;
}

// Validate the updated task status
if (
    !isset($data["status"]) ||
    !in_array($data["status"], ["To do", "Doing", "Done"], true)
) {
    http_response_code(400);

    echo json_encode([
        "error" => "Invalid task status"
    ]);

    exit;
}

// Update the task status in MySQL
$statement = $pdo->prepare(
    "UPDATE tasks SET status = ? WHERE id = ?"
);

$statement->execute([
    $data["status"],
    $id
]);

// Return a success response
http_response_code(200);

echo json_encode([
    "message" => "Task updated successfully",
    "id" => $id,
    "status" => $data["status"]
]);

exit;
}

// Handle DELETE requests
if ($method === "DELETE") {

    // Validate the task ID
    $id = filter_var(
        $_GET["id"] ?? null,
        FILTER_VALIDATE_INT
    );

    if ($id === false || $id === null || $id < 1) {
        http_response_code(400);

        echo json_encode([
            "error" => "Invalid task ID"
        ]);

        exit;
    }

    // Check whether the task exists in MySQL
$statement = $pdo->prepare(
    "SELECT id FROM tasks WHERE id = ?"
);

$statement->execute([$id]);

if (!$statement->fetch()) {
    http_response_code(404);

    echo json_encode([
        "error" => "Task not found"
    ]);

    exit;
}

// Delete the task from MySQL
$statement = $pdo->prepare(
    "DELETE FROM tasks WHERE id = ?"
);

$statement->execute([$id]);

http_response_code(200);

echo json_encode([
    "message" => "Task deleted successfully",
    "id" => $id
]);

exit;
}

// Check whether an ID was provided
if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_VALIDATE_INT);

    if ($id === false || $id < 1) {
        http_response_code(400);
        echo json_encode(["error" => "Invalid task ID"]);
        exit;
    }

    // Find the task with the matching ID
    foreach ($tasks as $task) {
        if ((int) $task["id"] === $id) {
            echo json_encode($task);
            exit;
        }
    }

    http_response_code(404);
    echo json_encode(["error" => "Task not found"]);
    exit;
}


if (isset($_GET["status"])) {
    $status = $_GET["status"];

    if (!in_array($status, ["To do", "Doing", "Done"], true)) {
        http_response_code(400);
        echo json_encode(["error" => "Invalid task status"]);
        exit;
    }

    $filteredTasks = [];

    foreach ($tasks as $task) {
        if ($task["status"] === $status) {
            $filteredTasks[] = $task;
        }
    }

    echo json_encode($filteredTasks);
    exit;
}

// No ID provided: return all tasks
echo json_encode($tasks);
