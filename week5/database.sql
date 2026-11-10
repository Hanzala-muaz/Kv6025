
CREATE DATABASE IF NOT EXISTS personal_study_planner;

USE personal_study_planner;

CREATE TABLE IF NOT EXISTS study_areas (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    focus VARCHAR(200) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS tasks (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    status ENUM('To do', 'Doing', 'Done') NOT NULL,
    priority ENUM('Low', 'Medium', 'High') NOT NULL,
    area_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (area_id) REFERENCES study_areas(id)
);

-- Add sample study areas
INSERT INTO study_areas (name, focus)
SELECT 'Web Development', 'PHP and MySQL'
WHERE NOT EXISTS (
    SELECT 1 FROM study_areas WHERE id = 1
);

INSERT INTO study_areas (name, focus)
SELECT 'Software Design', 'Architecture and planning'
WHERE NOT EXISTS (
    SELECT 1 FROM study_areas WHERE id = 2
);

-- Add sample tasks
INSERT INTO tasks (title, status, priority, area_id)
SELECT 'Review PHP and MySQL', 'To do', 'High', 1
WHERE NOT EXISTS (
    SELECT 1 FROM tasks WHERE id = 1
);

INSERT INTO tasks (title, status, priority, area_id)
SELECT 'Complete architecture notes', 'Doing', 'Medium', 2
WHERE NOT EXISTS (
    SELECT 1 FROM tasks WHERE id = 2
);

INSERT INTO tasks (title, status, priority, area_id)
SELECT 'Update development log', 'To do', 'Medium', 1
WHERE NOT EXISTS (
    SELECT 1 FROM tasks WHERE id = 3
);