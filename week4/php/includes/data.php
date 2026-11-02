<?php
// Data layer: in-memory data storage for this week.
// Presistent storage will replace it later.

$studyAreas = [
    ["name" => "Web Development", "focus" => "PHP basics"],
    ["name" => "Software Design", "focus" => "Architecture design"],
];


$tasks = [
    ["id" => 1, "title" => "Review PHP variables and arrays", "status" => "To do", "priority" => "High"],
    ["id" => 2, "title" => "Complete the architecture trade-off notes", "status" => "Doing", "priority" => "Medium"],
    ["id" => 3, "title" => "Update the development log", "status" => "To do", "priority" => "Medium"]
];

$weeklySummary = [
    "focus" => "PHP basics",
    "target" => "Improve my study planner page",
    "nextTask" => "Complete the Week 3 workshop",
];