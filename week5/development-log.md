# KV6025 - Development Log

## Week 5

Developed the MySQL-backed Personal Study Planner API.

- Connected PHP to MySQL using PDO.
- Implemented task creation, retrieval, updating and deletion.
- Updated PUT to handle all four task fields.
- Corrected DELETE to return HTTP 204.
- Fixed inconsistent database status values.
- Tested successful requests and error handling.
- Separated database schema and sample data.
- Created API documentation.

## Issues and solutions

1. HTTP 500: Missing database environment variables.
   Solution: Configured DB_USER and DB_PASSWORD.

2. Incorrect task status capitalization.
   Solution: Updated the live MySQL ENUM definition.

3. PowerShell quoting errors.
   Solution: Used temporary PHP scripts and removed them afterward.

## Deployment and live testing

Deployed the Week 5 Personal Study Planner to nuwebspace and connected it to the hosted MySQL database.

- Uploaded the PHP application using WinSCP.
- Created the database tables and added sample data through phpMyAdmin.
- Fixed the database connection settings.
- Fixed an undefined `$weeklySummary` variable on the homepage.
- Used Postman to test the live API.

## API test results

| Test | Result |
|---|---|
| GET — Retrieve tasks | Passed |
| POST — Create task | Passed |
| PUT — Update task | Passed |
| DELETE — Remove task | Passed (204) |
| GET deleted task | Passed (404) |
| Invalid task data | Passed (400) |
| Invalid study area | Passed (400) |


## Reflection

Moving from PHP arrays to MySQL allowed the application to store tasks permanently. The live API tests confirmed that tasks could be created, updated, retrieved and deleted.

The main deployment problem was configuring the database connection correctly. I resolved this by checking the nuwebspace database settings and testing the application again.

## Next steps

- Check the remaining workshop requirements.
- Review API security and error handling.
- Update the development plan.
- Commit the final changes to GitHub without database passwords.
- Prepare for the React frontend in Weeks 7 and 8.
