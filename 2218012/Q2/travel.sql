CREATE DATABASE travels_db;
USE travels_db;

CREATE TABLE bookings(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
destination VARCHAR(100),
date DATE,
persons INT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);