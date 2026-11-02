
<?php

header("Content-Type: application/json");

require_once __DIR__ . "/../includes/data.php";

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
        if ($task["id"] === $id) {
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
