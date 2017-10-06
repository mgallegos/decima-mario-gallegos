CREATE DATABASE tutorial3 CHARACTER SET UTF8;
CREATE USER 'tutorial3'@'localhost' IDENTIFIED BY 'tutorial3';
GRANT ALL PRIVILEGES ON tutorial3 . * TO 'tutorial3'@'localhost';
