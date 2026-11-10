
# KV6025 – Week 5: Database-Driven APIs

## Personal Study Planner

This project is a simple web-based Personal Study Planner developed as part of the KV6025 Contemporary Methods of Software Development module at Northumbria University.

The application helps students organise their study areas and manage academic tasks.

## Technologies Used

- PHP – Backend development and API endpoints
- MySQL – Database storage
- PDO – Secure database queries using prepared statements
- HTML and CSS – Website structure and styling
- Git and GitHub – Version control

## Features

- Display study areas and their current focus
- View tasks stored in MySQL
- Create new tasks using POST
- Retrieve tasks using GET
- Update task status using PUT
- Delete tasks using DELETE
- Validate user input and return appropriate HTTP status codes


## Database Structure

The application uses a MySQL database named `personal_study_planner`.

It contains two tables:

### 1. study_areas

This table stores information about each study area.

| Column | Type | Description |
|---|---|---|
| id | INT | Primary key, auto-increment |
| name | VARCHAR(100) | Study area name |
| focus | VARCHAR(200) | Current learning focus |

### 2. tasks

This table stores academic tasks and connects each task to a study area.

| Column | Type | Description |
|---|---|---|
| id | INT | Primary key, auto-increment |
| title | VARCHAR(100) | Task title |
| status | ENUM | To do, Doing, Done |
| priority | ENUM | Low, Medium, High |
| area_id | INT | Foreign key referencing study_areas.id |

### Relationship

Each study area can have multiple tasks.

The `area_id` column in the `tasks` table links each task to its corresponding study area.


## API Endpoints

The application provides a REST-style API for managing study tasks.

Base URL (local development):

`http://localhost:8000/api/tasks.php`

| Method | Endpoint | Description |
|---|---|---|
| GET | `/api/tasks.php` | Retrieve all tasks |
| GET | `/api/tasks.php?id=1` | Retrieve a task by ID |
| GET | `/api/tasks.php?status=To%20do` | Retrieve tasks by status |
| POST | `/api/tasks.php` | Create a new task |
| PUT | `/api/tasks.php?id=1` | Update a task's status |
| DELETE | `/api/tasks.php?id=1` | Delete a task |

### POST Request Example

Send JSON data to create a task:

```json
{
  "title": "Revise PHP",
  "status": "To do",
  "priority": "High",
  "area_id": 1
}
```

A successful POST request returns HTTP 201 and the new task ID.

### PUT Request Example

Send JSON data to update an existing task's status:

```json
{
  "status": "Done"
}
```

A successful PUT request returns HTTP 200.

### DELETE Request

Send a DELETE request with a valid task ID.

A successful DELETE request returns HTTP 200.

### Error Handling

The API returns appropriate HTTP status codes:

- 400 Bad Request — Invalid input or task ID
- 404 Not Found — Task does not exist
- 405 Method Not Allowed — Unsupported HTTP method


## Running the Project Locally

### Requirements

- PHP 8.4 or compatible version
- MySQL 8.0 or compatible version
- PHP PDO MySQL extension enabled
- Visual Studio Code or another code editor

### Database Setup

1. Start the MySQL server.
2. Open MySQL Workbench.
3. Create a database named `personal_study_planner`.
4. Create the `study_areas` and `tasks` tables using the structure described above.
5. Add study areas and sample tasks.

### Configure Database Credentials

The application reads database credentials from environment variables rather than storing passwords in the source code.

In PowerShell, set:

```powershell
$env:DB_USER = "root"
$env:DB_PASSWORD = Read-Host "Enter your MySQL password"
```

### Start the PHP Server

Open PowerShell in the `week5` directory and run:

```powershell
php -S localhost:8000 -t .\php
```

Make sure the environment variables are set in the same terminal session used to start PHP.

### Open the Application

Visit:

`http://localhost:8000`

### Test the API

To retrieve all tasks, visit:

`http://localhost:8000/api/tasks.php`

The API should return task information in JSON format.
