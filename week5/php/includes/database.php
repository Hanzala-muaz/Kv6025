<?php

function getDatabaseConnection()
{
    $host = getenv("DB_HOST") ?: "127.0.0.1";
    $database = getenv("DB_NAME") ?: "personal_study_planner";
    $username = getenv("DB_USER");
    $password = getenv("DB_PASSWORD");
    $port = getenv("DB_PORT") ?: "3306";

    $dsn = "mysql:host=$host;port=$port;dbname=$database;charset=utf8mb4";

    return new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
}