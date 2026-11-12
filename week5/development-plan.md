# KV6025 - Development Plan

## Project
Personal Study Planner

## Completed

- Set up PHP and MySQL.
- Created study areas and tasks tables.
- Connected PHP to MySQL using PDO.
- Implemented GET, POST, PUT and DELETE operations.
- Added task validation and error responses.
- Created `schema.sql`, `seed.sql` and API documentation.
- Tested API operations locally.
- Deployed the PHP application to nuwebspace using WinSCP.
- Connected the hosted application to MySQL.
- Added sample data and verified two study areas and five tasks.
- Tested live API operations using Postman.
- Verified HTTP 200, 201, 204, 400 and 404 responses.
- Fixed the undefined `$weeklySummary` variable.
- Added PHP runtime error-display settings to the deployed homepage and API.
- Updated the development log.
- Committed and pushed Week 5 changes to GitHub.

## Functional Requirements Progress

- **FR2 — Task management:** Implemented task creation, retrieval, updating and deletion through the PHP API.
- **FR3 — Study area organization:** Created related study area and task tables using MySQL.
- **FR4 — Task progress tracking:** Implemented task status values and tested status updates.

## Testing Completed

- GET: Retrieve tasks successfully.
- POST: Create a valid task and reject invalid input.
- PUT: Update an existing task.
- DELETE: Remove a task successfully.
- GET deleted task: Confirm HTTP 404.
- Invalid study area: Confirm HTTP 400.
- Live homepage: Verify database content displays correctly.

## Remaining

- Review the final Week 5 workshop requirements.
- Check that local and deployed PHP code remain consistent.
- Complete the remaining security checks.
- Review API documentation for accuracy.

## Next Development Stage — React Frontend

- Set up the React frontend for the Personal Study Planner.
- Connect React to the PHP API using `fetch()`.
- Display tasks retrieved from MySQL.
- Add forms for creating and updating tasks.
- Add controls for deleting tasks and changing task status.
- Test frontend and backend integration.

## Version Control

Week 5 changes were committed and pushed to GitHub.

- Branch: `main`
- Latest completed commit: `aee874c`
- Database credentials were excluded from the committed files.


## Week 7 — React Frontend

### Completed
- Created the React project using Vite.
- Developed five pages with React Router.
- Created reusable components for tasks and study areas.
- Added responsive CSS for different screen sizes.
- Tested navigation, accessibility, and invalid routes.
- Successfully tested the production build.

### Week 8 — Planned Work
- Connect the React frontend to the Week 5 PHP/MySQL API.
- Retrieve task data from the API.
- Add forms for creating and editing tasks.
- Implement task deletion.
- Test the frontend and backend integration.
- Update the documentation and development log.
