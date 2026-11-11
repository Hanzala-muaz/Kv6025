# KV6025 – Development Log

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

## Next steps
Complete deployment and final testing.
