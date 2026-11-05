<?php

require_once __DIR__ . "/database.php";

$pdo = getDatabaseConnection();

$studyAreas = $pdo->query("SELECT * FROM study_areas")->fetchAll();

$tasks = $pdo->query("SELECT * FROM tasks")->fetchAll();