CREATE DATABASE IF NOT EXISTS `online shop management`;
USE `online shop management`;

CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(90) NOT NULL,
    password VARCHAR(90) NOT NULL
);

CREATE TABLE IF NOT EXISTS employee (
    ID       INT AUTO_INCREMENT PRIMARY KEY,
    Employee VARCHAR(90) NOT NULL,
    Contact  VARCHAR(90) NOT NULL,
    Username VARCHAR(90) NOT NULL,
    Password VARCHAR(90) NOT NULL
);

INSERT INTO admin (username, password) VALUES ('admin', 'admin123');