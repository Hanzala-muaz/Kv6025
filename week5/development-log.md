# KV6025 - Development Log

## Week 5

Developed and deployed the MySQL-backed Personal Study Planner API.

- Connected PHP to MySQL using PDO.
- Implemented task creation, retrieval, updating and deletion.
- Updated PUT to handle all four task fields.
- Corrected DELETE to return HTTP 204.
- Fixed inconsistent database status values.
- Tested successful requests and error handling.
- Separated database schema and sample data.
- Created API documentation.

## Database Design

The database uses two related tables: study areas and tasks.

- A foreign key connects each task to a valid study area and helps maintain data integrity.
- ENUM fields restrict task status and priority to predefined values.
- PDO prepared statements are used to handle database queries safely.

## Issues and Solutions

1. **HTTP 500 error:** The database environment variables were missing. I resolved this by configuring the database connection settings.

2. **Incorrect task status capitalization:** The status values did not match the database definition. I corrected the MySQL ENUM values.

3. **PowerShell quoting errors:** Some commands failed because of quotation marks. I used temporary PHP scripts to resolve the problem and removed them afterward.

4. **Undefined variable:** The deployed homepage displayed an error because `$weeklySummary` was not defined. I added the missing variable and tested the page again.

## Deployment and Live Testing

Deployed the Personal Study Planner to nuwebspace and connected it to the hosted MySQL database.

- Uploaded the PHP application using WinSCP.
- Created database tables and inserted sample data using phpMyAdmin.
- Configured the hosted database connection.
- Verified that the homepage displayed two study areas and five tasks.
- Tested the live API using Postman.

## API Test Results

| Test | HTTP Status | Result |
|---|---|---|
| GET - Retrieve tasks | 200 | Passed |
| POST - Create task | 201 | Passed |
| PUT - Update task | 200 | Passed |
| DELETE - Remove task | 204 | Passed |
| GET - Deleted task | 404 | Passed |
| POST - Invalid task data | 400 | Passed |
| POST - Invalid study area | 400 | Passed |

## AI Assistance and Verification

AI assistance was used during debugging and API development.

One suggestion was to return HTTP 204 after successfully deleting a task. I checked the API response using Postman and confirmed that the DELETE request returned 204 without a response body.

I also tested the deleted task using GET and received HTTP 404, confirming that it was no longer available.

## Reflection

Moving from PHP arrays to MySQL allowed the application to store tasks permanently.

The main challenge was configuring the database connection on nuwebspace. I resolved this by checking the database settings and testing the live application.

Postman testing helped me understand how HTTP methods and status codes work in a REST API.

## Next Steps

- Complete the final security and documentation checks.
- Review the API error handling.
- Prepare to connect the React frontend to the PHP API in Weeks 7 and 8.

## Version Control

Committed and pushed the Week 5 changes to GitHub.

- Branch: `main`
- Commit: `aee874c`
- Database credentials were not included in the committed changes.


## Week 7 — Building a React Frontend

### Work Completed
- Created a React frontend using Vite.
- Developed five pages using React Router.
- Added reusable components and responsive CSS.
- Used five sample tasks and two study areas.

### Testing
- Tested navigation, task details, and invalid URLs.
- Checked keyboard navigation and responsive layouts.
- Successfully tested the production build and preview.

### Problems and Solutions
- PowerShell blocked npm scripts. Used a temporary execution policy bypass.
- A component filename typo caused a blank page. Corrected the filename.

### AI Assistance
ChatGPT was used to help understand React concepts, provide example code, and troubleshoot issues such as the PowerShell execution policy restriction and an incorrectly named component file. The application was tested locally.

### Next Steps
Connect the React frontend to the Week 5 PHP/MySQL API and implement task management forms during Week 8.
