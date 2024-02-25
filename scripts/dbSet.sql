CREATE USER 'valley'@'localhost' IDENTIFIED BY '9*Z[Z]?z9zZo=+eQ';

-- Set up database
CREATE DATABASE IF NOT EXISTS valley;
GRANT ALL PRIVILEGES ON valley.* TO 'valley'@'localhost';
FLUSH PRIVILEGES;

USE valley

-- Admins
CREATE TABLE admins (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    admin_name VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    lastLogin TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create admin account
INSERT INTO admins (admin_name, password)
VALUES ('Nulla', 'admin');

-- Users
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number VARCHAR(20),
    gender ENUM('male', 'female'),
    province VARCHAR(50),
    city VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create an account
INSERT INTO users (username, password, email, phone_number, gender, province, city)
VALUES ('Nulla', '123', 'HolmesAmzish86@outlook.com', '', 'male', 'Jiangsu', 'Changzhou');

-- Posts
CREATE TABLE posts (
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content TEXT,
    author VARCHAR(100),
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_modified_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    category VARCHAR(50),
    tags VARCHAR(255),
    likes INT DEFAULT 0,
    comments INT DEFAULT 0,
    province VARCHAR(50),
    city VARCHAR(50)
);
