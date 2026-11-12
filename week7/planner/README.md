# Personal Study Planner

## Project Overview
A React frontend developed for the KV6025 Week 7 workshop.
It helps users view study tasks, their priorities, and progress.

## Technologies
- React
- Vite
- React Router
- CSS

## Features
- Home page with task status summary
- Tasks page displaying five sample tasks
- Individual task details
- Study Areas page
- Navigation between pages
- Responsive layout
- 404 page for invalid URLs

## Running the Project
1. Open a terminal in the planner folder.
2. Run `npm install`.
3. Run `npm run dev`.
4. Open the local URL displayed in the terminal.

## Production Build
Run `npm run build` to generate the production files.

Run `npm run preview` to test the production build locally.

## Current Limitations
The application currently uses local sample data.
It does not yet connect to the PHP/MySQL API.

## Next Steps
Connect the frontend to the Week 5 API and add
task management forms during Week 8.

## Week 7 — Building a React Frontend
- Work completed: Created the Vite React project, five pages, reusable components, React Router navigation, and responsive CSS.
- Testing: Checked navigation, task details, invalid URLs, keyboard accessibility, and mobile/tablet/desktop layouts.
- Build results: npm run build successfully completed and the production version can be viewed at localhost:4173.
- Problems encountered: PowerShell initially blocked the use of npm scripts, and a typo in the file name of the StatusBadge.jsx component resulted in a blank page.
- Solutions: Used a temporary PowerShell execution policy bypass and corrected the component filename.
- AI assistance: AI was used in form of ChatGPT to help understand React concepts, write code for examples and find a solution for the PowerShell restriction and the wrong component name. The application was tested locally.declaration requirements.
- Next steps: Connect React to the Week 5 PHP/MySQL API and implement task-management forms in Week 8.