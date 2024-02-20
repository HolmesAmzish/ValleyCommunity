CREATE USER 'valley'@'localhost' IDENTIFIED BY '9*Z[Z]?z9zZo=+eQ';
CREATE DATABASE IF NOT EXISTS Valley;
GRANT ALL PRIVILEGES ON Valley.* TO 'valley'@'localhost';
FLUSH PRIVILEGES;

-- AdminUsers
CREATE TABLE Admins (
    AdminID INT AUTO_INCREMENT PRIMARY KEY,
    AdminName VARCHAR(50) NOT NULL,
    Password VARCHAR(100) NOT NULL,
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    LastLogin TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create admin account
INSERT INTO Admins (AdminName, Password)
VALUES ('Nulla', 'admin');

-- Users
CREATE TABLE Users (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50) NOT NULL,
    Password VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    PhoneNumber VARCHAR(20),
    Gender ENUM('male', 'female'),
    Province VARCHAR(50),
    City VARCHAR(50),
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create an account
INSERT INTO Users (Username, Password, Email, PhoneNumber, Gender, Province, City)
VALUES ('Nulla', 'password', 'HolmesAmzish86@outlook.com', '', 'male', 'Jiangsu', 'Changzhou');
