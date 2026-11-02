<?php
// Application logic: rules and calculations.
// No HTML or stored data.

function tasksummary($task) {
    return $task["title"] . " - "
    . $task["status"] . " ("
    . $task["priority"] . " priority)";
}

function activeTaskCount($tasks) {
    $count = 0;
    foreach ($tasks as $task) {
        if ($task["status"] !== "Done") {
            $count++;
        }
    }
    return $count;
}