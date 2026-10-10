## Approach

Approach chosen: Structured incremental approach.

Reasons:
- I am working alone, so this approach suits the project.
- I can build the work in small stages and check each stage before moving on.

What must be decided before implementation starts:
- The requirements, the order of the tasks, and how each task will be checked.

How I will check that each task is completed:
- I will use the acceptance check for each task and test the result before making it complete.

## Requirements

### Functional requirements

| ID | Requirement |
| --- | ---------- |
| FR1 | View a list of study modules or study areas with basic information. |
| FR2 | Create and save a study task linked to a selected module or study area. |
| FR3 | View, update and delete saved study tasks. |
| FR4 | Record a priority, target date and completion status for each task. |
| FR5 | View study tasks grouped or filtered by module, study area or completion status. |
| FR6 | View a selected module or study area together with its own details and associated study task. |

### Quality requirements

| ID | Requirement |
| --- | ---------- |
| QR1 | Usability: the interface is consistent and easy to navigate, forms are clearly labelled, and the user gets clear feedback for loading, success and errors. |
| QR2 | Responsiveness: the application is usable on both mobile and desktop screens. |
| QR3 | Reliability: the application copes with invalid input, database errors, and slow, empty or unavailable data without failing, and stays usable when current data cannot be retrieved. |
| QR4 | Data integrity: the server validates all input before it is stored, database queries use prepared statements, and error messages do not reveal internal details. |
| QR5| Performance: the application avoids unnecessary requests and is deployed as an optimised production build. |
| QR6 | Maintainability: the code has a clear structure with separated concerns, so another developer could understand and extend it. |
| QR7| Accessibility: pages use meaningful HTML elements, can be used with a keyboard, and have enough colour contrast to be readable. |

## Development plan

| ID | Req | Task | Priority | After | Status |
| --- | ---- | ----- | ---------- | ------- | --------- |
| T1 | FR1 | Show a list of study modules or study areas with basic information. | Must | - | Complete. |
| T2| FR2 | Create and save a study task linked to a selected module or study area. | Must | T1 | Not started. |
| T3 | FR3 | View, update and delete saved tasks. | Must | T2 | Not started. |
| T4 | FR4 | Record a priority, target date and completion status for each study task. | Must | T3 | Not started. |
| T5 | FR5 | View study tasks grouped or filtered by module, study area or completion status. | Must | T4 | Not started. |
| T6 | FR6 | View a selected module or study area together with its own details and associated study tasks. | Must | T5 | Not started.|
| T7 | QR2 | Make sure the page is usable on mobile and desktop screens. | Must | T6 | Complete. |
| T8 | QR7 | Use meaningful HTML elements and make sure the page is readable and usable with a keyboard. | Must | T7 | Complete. |
| T9 | Extra | Sort study tasks by target date. | Could | T8 | Not started. |
| T10 | Extra | Add a dark colour scheme. | Could | T8 | Not started. |
| T11 | Extra | Add user accounts and login. | Won't | - | Not started. |

## Acceptance checks
T1: At least two study modules or study areas are shown with basic information.
T2: A study task can be created, linked to a selected module or study area, and saved.
T3: A saved study task can be viewed, updated and deleted.
T4: Each study task shows a priority, target date and completion status.
T5: Study tasks can be viewed by module, study area or completion status.
T6: A selected module or study area shows its details and associated study tasks.
T7: There is no horizontal scrolling at 360 px, 768 px and 1280 px wide.
T8: The page uses meaningful HTML elements, can be used with a keyboard and has readable colour contrast.
T9: Study tasks can be sorted by target date.
T10: A dark colour scheme can be applied to the page.
T11: User accounts and login will not be built in this project.

## Week 2 goal

Development goal: Create a static first version of a Personal Study Planner page that clearly presents the application purpose, one study-area summary and a small study-task list. No data storage or interactive behaviour is required at this stage.

## Definition of done

- [ ] The HTML is saved and opens correctly in the browser.
- [ ] There are no obvious broken links, missing files or malformed page sections.
- [ ] The HTML passes the W3C Nu HTML Checker with no errors.
- [ ] Any AI-generated suggestion I used has been reviewed and tested.
- [ ] The development plan and development log reflect what actually happened.
- [ ] The work is committed to Git and the development log is updated.
- [ ] All styles are in a separate styles.css file.

## Quality checks

| QR ID | Check | When (week or task) |
| ----- | ----- | ------------------- |
| QR1 | Check that the interface is clear and consistent and easy to understand. | Week 2, Task 8 |
| QR2 | Check the page at 360 px, 768 px and 1280 px and make sure there is no horizontal scrolling. | Week 2, Task 7 and 8 |
| QR3 | Check that the application handles invalid input  and unavailable data without failing. | Later week when backend/data is added |
| QR4 | Check that input is validated on the server and database queries use prepared statements. | Later week when server/database is added |
| QR5 | Check that unnecessary requests are avoided and the application is deployed as an optimised production build. | Later week when full application is built |
| QR6 | Check that the code is clearly structured and easy to understand and extend. | Week 2, Task 8 |
| QR7 | Check that the page uses meaningful HTML, can be used with a keyboard and has readable colour contrast. | Week 2, Task 8 |

## Risks

| ID | Risk | Likelihood | Impact | Response / mitigation |
| -- | ---- | ---------- | ------ | --------------------- |
| R1 | Scope grows faster than the available time. Z Medium | High | Keep tasks small; build the core requirements first and cut Could tasks first; compare plan and progress every week. |
| R2 | Work is lost due to a laptop faliure or a lab PC reset. | Low | High | Keep the project in OneDrive; commit to Git after each complete task. |
| R3 | Unverified AI-generated code introduces errors or complexity. | Medium | High | Review, understand and test each suggestion before using it; record it in the log. |
| R4 | CSS becomes difficult to extend as more interface elements are added. | Medium | Medium | Use clear names, keep the HTML structure simple and group related CSS rules. |
| R5 | A new tool takes longer to learn than expected. | Medium | Medium | Start learning it early and practise with small task before using it for bigger work. |
| R6 | A requirement takes more work than expected. | Medium | High | Break the requirement into smaller tasks and complete the core part first. |
