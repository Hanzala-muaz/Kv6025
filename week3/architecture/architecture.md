# Personal Study Planner - Architecture

## Architecture style

The Personal Study Planner will use a layered web application architecture. This seprates the webpage,  application logic and data so that each part hasits own responsibility.

## Components

| Component | Resonsibilites | Intraction with other components |
| --------- | -------------- | -------------------------------- |
| Presentation layer | Display study areas, tasks and messages to the user using index.php and styles.css It does not store data or handle application rules. | Receives information from the application logic layer and display it on webpage. |
| Application logic | Handles application rules, calculations and task processing using functions.php. It does not control webpage styling or store data. | Receives request from the presentation layer and uses information from data layer. |
| Data layer / storage | Provides study areas and tasks using data.php. For now, the information is stored in PHP arrays rather than a database. It does not handle a website design. | Supplies data to the application logic layer when needed. |

## Architectue diagram

+----------------------------+
|    Presentation Layer      |
|   index.php, styles.css    |
+----------------------------+
            |
            | Requests information
            |
           \ /
+----------------------------+
|  Application Logic Layer   |
|        function.php        |
+----------------------------+
            |
            | Accesses study data
            |
           \ /
+----------------------------+
|        Data Layer          |
|         data.php           |
+----------------------------+



## Architecture decisions and trade-offs

### Decision 1: Seprate data from the webpage

**Decision:** Keep study areas and tasks in data.php instead of writing them directly in index.php.
**Quality requirement:** QR6 - Maintainability.
**Benifit:** I can update the study data without changing the webpage code.
**Cost:** The project needs an extra file, which makes the structure slightly more complicated.
**Conclusion:** I chose this approach because it makes the code easier to organise and maintain as the project grows.

### Decision 2: Use PHP arrays instead of database

**Decision:** Store study areas and tasks in PHP arrays for now instead of using a database.
**Quality requirement:** QR6 - Maintainability.
**Benefits:** PHP arrays are simple to create and make it easier to test the webpage during development.
**Cost:** The data is not saved permanently when user makes changes. A database will be needed later.
**Conclusion:** I chose PHP arrays because the project is still at an early stage. This keeps the development simple while I learn how the application works.
**AI review:** I asked GitHub Copilot to challenge my decision to use PHP arrays instead of a database. Copilot recommended keeping arrays for the current prototype but moving to a database when task creation, editing or permanent storage is needed.
**My response** I agree whith this feedback. PHP arrays are enough for Week 3, but I will consider a database when the project needs to save user changes.