CREATE DATABASE ticketing;

USE ticketing;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255),
    role ENUM('admin','user') DEFAULT 'user'
);

INSERT INTO users (username, password, role) VALUES
('admin', MD5('admin123'), 'admin'),
('user', MD5('user123'), 'user');

CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    status VARCHAR(50) DEFAULT 'Open',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
