CREATE DATABASE employee_portal;

USE employee_portal

CREATE TABLE employees (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    hours INT(3) NOT NULL,
    position VARCHAR(30) NOT NULL
);
