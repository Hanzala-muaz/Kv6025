# KV6025 Week 5 - API Documentation

## Personal Study Planner REST API

The API uses PHP, PDO and MySQL to manage study tasks. Requests containing task data and successful task responses use JSON.

**Local Base URL:**
`http://localhost:8000/api/tasks.php`

**Live Base URL:**
`https://w25073583.nuwebspace.co.uk/week5/php/api/tasks.php`

## API Endpoints

| Method | Endpoint | Description | Success Code |
|---|---|---|---|
| GET | `/api/tasks.php` | Retrieve all tasks | 200 |
| GET | `/api/tasks.php?id=1` | Retrieve a specific task | 200 |
| GET | `/api/tasks.php?status=Doing` | Filter tasks by status | 200 |
| POST | `/api/tasks.php` | Create a new task | 201 |
| PUT | `/api/tasks.php?id=1` | Update an existing task | 200 |
| DELETE | `/api/tasks.php?id=1` | Delete a task | 204 |

## POST and PUT Request Example

```json
{
  "title": "Complete PHP workshop",
  "status": "Doing",
  "priority": "High",
  "area_id": 1
}
```

## Input Validation

- **title:** Nonempty string, maximum 100 characters.
- **status:** Must be `To do`, `Doing` or `Done`.
- **priority:** Must be `Low`, `Medium` or `High`.
- **area_id:** Positive integer referencing an existing study area.

## Example GET Response

```json
[
  {
    "id": 1,
    "title": "Review PHP and MySQL",
    "status": "To do",
    "priority": "High",
    "area_id": 1
  }
]
```

This is an abbreviated example. The live API currently contains five tasks.

## HTTP Status Codes

| Code | Meaning |
|---|---|
| 200 | Successful GET or PUT |
| 201 | Task created successfully |
| 204 | Task deleted successfully, without a response body |
| 400 | Invalid request data |
| 404 | Task not found |
| 405 | HTTP method not supported |

## Database Setup

The database schema is stored in `database/schema.sql`, and sample data is stored in `database/seed.sql`.

For local setup, run `schema.sql` first, followed by `seed.sql`.

The PHP connection uses PDO. The local configuration reads credentials from environment variables such as `DB_USER` and `DB_PASSWORD`.

The hosted database is configured separately on nuwebspace.

## Testing

### Local Testing

Tested GET, POST, PUT and DELETE using PowerShell.

- Invalid task data returned HTTP 400.
- Invalid study area returned HTTP 400.
- Nonexistent task returned HTTP 404.
- Successful DELETE returned HTTP 204.

### Live Testing

Deployed the API to nuwebspace and tested it using Postman.

| Test | Expected Code | Result |
|---|---|---|
| GET all tasks | 200 | Passed |
| POST valid task | 201 | Passed |
| PUT existing task | 200 | Passed |
| DELETE existing task | 204 | Passed |
| GET deleted task | 404 | Passed |
| POST invalid task data | 400 | Passed |
| POST invalid study area | 400 | Passed |

The live API successfully retrieves task records from the hosted MySQL database.

## Security Notes

- Database credentials must not be committed to GitHub.
- PDO prepared statements should be used for database queries.
- Public PHP error display should be disabled in production.
- Request data should be validated before database operations.

## Next Steps

Connect the React frontend to the PHP API in Weeks 7 and 8 and test task management