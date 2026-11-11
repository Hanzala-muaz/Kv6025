# KV6025 Week 5 – API Documentation

## Personal Study Planner REST API

Base URL: http://localhost:8000/api/tasks.php

The API uses PHP, PDO and MySQL. Requests and responses use JSON.

## Endpoints

| Method | Endpoint | Description | Success |
|---|---|---|---|
| GET | /api/tasks.php | Retrieve all tasks | 200 |
| GET | /api/tasks.php?id=1 | Retrieve one task | 200 |
| GET | /api/tasks.php?status=Doing | Filter tasks | 200 |
| POST | /api/tasks.php | Create a task | 201 |
| PUT | /api/tasks.php?id=1 | Update a task | 200 |
| DELETE | /api/tasks.php?id=1 | Delete a task | 204 |

## POST and PUT request example

{
  "title": "Complete PHP workshop",
  "status": "Doing",
  "priority": "High",
  "area_id": 1
}

Required fields:
- title: nonempty string, maximum 100 characters
- status: To do, Doing or Done
- priority: Low, Medium or High
- area_id: positive integer referencing an existing study area

## Error responses

- 400: Invalid input
- 404: Task not found
- 405: Unsupported HTTP method

## Database

Run database/schema.sql first, then database/seed.sql.

Database credentials are read from DB_USER and DB_PASSWORD
environment variables.

## Testing

GET, POST, PUT and DELETE were tested locally using PowerShell.
Invalid title and study area returned 400.
Nonexistent task returned 404.
Successful DELETE returned 204.
