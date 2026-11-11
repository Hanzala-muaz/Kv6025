
-- KV6025 Week 5
-- Personal Study Planner Database Setup

-- 1. Create database
CREATE DATABASE IF NOT EXISTS personal_study_planner;

USE personal_study_planner;

-- 2. Create study areas table
CREATE TABLE IF NOT EXISTS study_areas (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    focus VARCHAR(200) NOT NULL,
    PRIMARY KEY (id)
);

-- 3. Create tasks table
CREATE TABLE IF NOT EXISTS tasks (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    status ENUM('To do', 'Doing', 'Done') NOT NULL,
    priority ENUM('Low', 'Medium', 'High') NOT NULL,
    area_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (area_id) REFERENCES study_areas(id)
);

