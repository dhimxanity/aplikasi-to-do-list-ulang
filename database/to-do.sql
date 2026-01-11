CREATE DATABASE `todo2_db`;
USE `todo2_db`;

CREATE TABLE todos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    description TEXT,
    status ENUM('pending','in_progress','done') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    title VARCHAR(255) NOT NULL,       
    status TINYINT(1) DEFAULT 0,         
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);
