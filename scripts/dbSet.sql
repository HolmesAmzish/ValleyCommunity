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
    author_id INT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_modified_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    category VARCHAR(50),
    tags VARCHAR(255),
    likes INT DEFAULT 0,
    comments INT DEFAULT 0,
    province VARCHAR(50),
    city VARCHAR(50)
);

-- Insert five rows
INSERT INTO posts (title, content, author, author_id, category, tags, province, city)
VALUES ('Introduction to SQL', 'SQL (Structured Query Language) is a standard language for accessing and manipulating databases. It is widely used in various applications, from simple web development to complex data analysis tasks. Learning SQL is essential for anyone interested in working with databases.', 'John Doe', 1, 'Technology', 'SQL, Database', 'California', 'Los Angeles');

INSERT INTO posts (title, content, author, author_id, category, tags, province, city)
VALUES ('The Art of Cooking', 'Are you passionate about cooking? Do you want to learn new recipes and techniques to impress your friends and family? Then you have come to the right place! In this post, we will explore the art of cooking and share some amazing recipes that you can try at home.', 'Jane Smith', 2, 'Food', 'Cooking, Recipes', 'New York', 'New York');

INSERT INTO posts (title, content, author, author_id, category, tags, province, city)
VALUES ('Travel Guide: Paris', 'Paris, the city of love and lights, is a dream destination for many travelers. Whether you are planning a romantic getaway or a solo adventure, our comprehensive travel guide will help you make the most of your trip to this enchanting city. From iconic landmarks to hidden gems, we have got you covered!', 'Emily Johnson', 3, 'Travel', 'Paris, Travel Guide', 'Paris', 'Paris');

INSERT INTO posts (title, content, author, author_id, category, tags, province, city)
VALUES ('Fitness Tips for Beginners', 'Starting a fitness journey can be intimidating, but with the right guidance and motivation, anyone can achieve their health and wellness goals. In this post, we will share some practical tips and advice for beginners who are looking to improve their fitness levels and lead a healthier lifestyle. From setting realistic goals to finding enjoyable workout routines, we have got you covered every step of the way!', 'Michael Brown', 4, 'Fitness', 'Fitness, Exercise', 'Texas', 'Houston');

INSERT INTO posts (title, content, author, author_id, category, tags, province, city)
VALUES ('The Benefits of Meditation', 'In today''s fast-paced world, finding moments of peace and tranquility can be challenging. However, meditation offers a simple yet powerful solution to quiet the mind and find inner calm. In this post, we will explore the numerous benefits of meditation for your mental and physical well-being. From reducing stress and anxiety to improving focus and clarity, incorporating meditation into your daily routine can have profound effects on your overall health and happiness.', 'Sarah Wilson', 5, 'Health', 'Meditation, Wellness', 'California', 'San Francisco');
