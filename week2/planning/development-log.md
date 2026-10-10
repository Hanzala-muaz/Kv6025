# KV6025 Development Log

## Tools and versions

| Tool | Version | Used dor |
| ------| --------- | ---------- |
| Vs Code | 1.140.0 | Editing code |
| PHP | 8.4.26 | Backend (later weeks) |
| Node.js / npm | 24.21.0 | Frontend tooling |
| Git | 2.56.0.windows.1 | Version control |
| Github Copilot | 1.388.0 | AI assistant |

## Log

### Week 2 - 9 October 2026

**What I did:**
I built and styled the Personal Study Planner page using HTML and CSS, tested it at different screen widths, checked the HTML with the W3C validator and checked accessibility with Lighthouse.
**Decisions and reasons:**
I kept the workshop HTML structure because it passed validation and accessibility checks and matched the task requirements.
**Problems and how I solved them:**
Lighthouse would not run on the local file, so I used a local PHP server and opened the page through localhost.
**AI use:** I asked GitHub Copilot to review my HTML for accessibility and semantic problems without rewriting the file. It suggeted using lists for the study-area cards and definition lists for some information. I did not make changes because the current HTML follows the workshop structure. I checked the page with the W3C validator and Lighthouse. Thw validator shower no errors or warnings and Lighthouse gave us an accessibility score of 100.
**Next steps:**
Complete the Week 2 review, upload the page to nowebspace and commit the Week 2 work to Git.
**Git commit**
6024bd9 - Week 2: static Personal Study Planner page

| Date | Task | Tool(s) used | Decision / change | AI use / prompt | Check | Next step |
| ---- | ---- | ------------ | ----------------- | --------------- | ------ | -------- |
Most serious risk:
R1 - Scope grows faster than the available time, because it could stop me from completing the core requirements.

First action:
I will keep the tasks small and complete the core requirements before working on Could tasks.

### Task 7.3 notes

1- Which CSS rule centers the page content and limits its width?
Ans- The .container rule. It uses width: min(92%, 960px) and margin 0 auto.

2- What does the .card selector match?
Ans- It matches any HTML element with the class "card".

3- Why do .card and .task-list share one rule, and why does .task-list also have its own rule?
Ans- They share the same background, border and padding. the .task-list has its own rule to add extra left padding for the list.

4- Why is the viewport <meta> element needed?
Ans- It makes the page use the real screen width on phones, so the layout fits properly.

### Week 2 review

1- What went well?
Ans- The HTML and CSS page worked correctly, passed the W3C validator and got a Lighthouse accessibility score of 100.

2- What did not go well?
Ans- Lighthouse did not work when the page was opened as a local file.

3- What will I change when I plan the next tasks?
Ans- I will keep the tasks small and check each task before moving to the next one.

4- Did any requirement, assumption or design decision change?
Ans- No major requirement changed. I kept the workshop HTML structure.

5- Which quality issue or project risk became clearer?
Ans- Testing tools may need the page to run through a local server instead of opening it directly as a file.

6- What is the next planned task?
Ans- Release the Week 2 prototype to nuwebspace and save the work with Git.
