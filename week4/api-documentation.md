# Week 4 – API Documentation

## Personal Study Planner

For Week 4, I worked on creating APIs for my Personal Study Planner using PHP. The main aim was to make it possible to get task information in JSON format instead of displaying everything directly on a webpage.

I also created a separate API to get weather information from an external service.

## 1. Getting All Tasks

**Endpoint:** `GET /api/tasks.php`

This API returns all the tasks saved in my project. Each task has an ID, title, status and priority.

When I tested it in the browser, it returned all three tasks in JSON format.

**Expected response:** 200 OK

## 2. Getting a Task by ID

**Endpoint:** `GET /api/tasks.php?id=1`

I added an ID to each task so that I could request a specific task instead of getting the full list.

For example, when I entered `?id=1`, the API returned only the first task.

I also tested two different errors:

- `?id=99` returned "Task not found" because that task doesn't exist.
- `?id=abc` returned "Invalid task ID" because the ID wasn't a valid number.

**Expected responses:**
- 200 OK – Task found
- 400 Bad Request – Invalid ID
- 404 Not Found – Task not found

## 3. Filtering Tasks by Status

**Endpoint:** `GET /api/tasks.php?status=Doing`

I added another feature to filter tasks based on their status.

The API accepts three statuses: `To do`, `Doing` and `Done`.

When I tested `status=Doing`, it returned only the task that was in progress.

I also tried `status=Pending`, which returned an error because it isn't one of the accepted statuses.

When I tested `status=Done`, the API returned an empty list (`[]`) because none of my tasks were completed.

**Expected responses:**
- 200 OK – Valid request
- 400 Bad Request – Invalid status

## 4. Getting Weather Information

**Endpoint:** `GET /api/weather.php`

For this part, I connected my PHP application to Open-Meteo, which provides weather information.

I used the API to request the current temperature for Newcastle upon Tyne.

When I tested it in my browser, it returned the following result:

```json
{
  "city": "Newcastle upon Tyne",
  "temperature": 9.4,
  "unit": "°C"
}
```

This showed that my PHP application was able to receive information from an external API and return it in JSON format.

**Expected responses:**
- 200 OK – Weather data received
- 502 Bad Gateway – Weather service unavailable or invalid response

## 5. Testing

I tested my APIs locally using Google Chrome while running the PHP development server.

I checked whether I could retrieve all tasks, request individual tasks, filter tasks by status and handle incorrect inputs.

I also tested the weather API to make sure it could retrieve information from Open-Meteo.

The JSON responses matched what I expected. I still need to check the actual HTTP status codes using the browser's developer tools or an API testing tool.

I also used Chrome Developer Tools to check the HTTP status codes. When I requested a task that didn't exist (`id=99`), the API returned 404 Not Found. When I entered an invalid ID (`id=abc`), it returned 400 Bad Request. Both results matched what I expected.

## 6. Summary

During Week 4, I learned how PHP can be used to create simple web APIs and return information in JSON format.

I also learned how to handle invalid requests and how to connect my application to an external API.

The tasks are still stored in PHP arrays, so any changes to them would need to be made in the code. A database could be added later if I want users to create and save their own tasks.