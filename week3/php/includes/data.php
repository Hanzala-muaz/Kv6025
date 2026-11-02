<?php
// Data layer: in-memory data storage for this week.
// Presistent storage will replace it later.

$studyAreas = [
    ["name" => "Web Development", "focus" => "PHP basics"],
    ["name" => "Software Design", "focus" => "Architecture design"],
];

$tasks = [
        ["title" => "Review PHP variables and arrays", "status" => "To do", "priority" => "High"],
    ["title"=> "Complete the architecture trade-off notes", "status" => "Doing", "priority" => "Medium"],
    ["title"=> "Update the development log", "status" => "To do", "priority" => "Medium"],
];

$weeklySummary = [
    "focus" => "PHP basics",
    "target" => "Improve my study planner page",
    "nextTask" => "Complete the Week 3 workshop",
];