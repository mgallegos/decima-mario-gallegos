CREATE DATABASE tutorial1 CHARACTER SET UTF8;
CREATE USER 'tutorial1'@'localhost' IDENTIFIED BY 'tutorial1';
GRANT ALL PRIVILEGES ON tutorial1 . * TO 'tutorial1'@'localhost';
