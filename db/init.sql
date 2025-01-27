CREATE DATABASE IF NOT EXISTS usersdb;

USE usersdb;

CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

INSERT IGNORE INTO user (nombre, email) VALUES
('Juan Perez', 'juan.perez@gmail.com'),
('Ana Lopez', 'ana.lopez@gmail.com'),
('Carlos Sanchez', 'carlos.sanchez@gmail.com');
