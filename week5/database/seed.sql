USE personal_study_planner;

-- 4. Insert sample study areas
INSERT INTO study_areas (name, focus)
SELECT 'Web Development', 'PHP and MySQL'
WHERE NOT EXISTS (
    SELECT 1
    FROM study_areas
    WHERE name = 'Web Development'
);

INSERT INTO study_areas (name, focus)
SELECT 'Software Design', 'Architecture and planning'
WHERE NOT EXISTS (
    SELECT 1
    FROM study_areas
    WHERE name = 'Software Design'
);

-- 5. Insert sample tasks
INSERT INTO tasks (title, status, priority, area_id)
SELECT
    'Review PHP and MySQL',
    'To do',
    'High',
    id
FROM study_areas
WHERE name = 'Web Development'
AND NOT EXISTS (
    SELECT 1
    FROM tasks
    WHERE title = 'Review PHP and MySQL'
);

INSERT INTO tasks (title, status, priority, area_id)
SELECT
    'Complete architecture notes',
    'Doing',
    'Medium',
    id
FROM study_areas
WHERE name = 'Software Design'
AND NOT EXISTS (
    SELECT 1
    FROM tasks
    WHERE title = 'Complete architecture notes'
);

INSERT INTO tasks (title, status, priority, area_id)
SELECT
    'Update development log',
    'To do',
    'Medium',
    id
FROM study_areas
WHERE name = 'Web Development'
AND NOT EXISTS (
    SELECT 1
    FROM tasks
    WHERE title = 'Update development log'
);

-- 6. Verify study areas
SELECT * FROM study_areas;

-- 7. Verify tasks and their study areas
SELECT
    tasks.id,
    tasks.title,
    tasks.status,
    tasks.priority,
    study_areas.name AS study_area
FROM tasks
INNER JOIN study_areas
    ON tasks.area_id = study_areas.id
ORDER BY tasks.id;
