<?php
// Application logic: rules and calculations.
// No HTML or stored data.

function tasksummary($task) {
    return $task["title"] . " - "
    . $task["status"] . " ("
    . $task["priority"] . " priority)";
}

function activeTaskCount($tasks, $areaId) {
    $count = 0;

    foreach ($tasks as $task) {
        if (
            $task["area_id"] == $areaId &&
            strcasecmp($task["status"], "Done") !== 0
        ) {
            $count++;
        }
    }

    return $count;
}