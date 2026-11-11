
<?php

function getDatabaseConnection()
{
    $host = "127.0.0.1";
    $database = "personal_study_planner";
    $username = getenv("DB_USER");
    $password = getenv("DB_PASSWORD");

    $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";

    return new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
}
