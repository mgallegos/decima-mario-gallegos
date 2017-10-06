CREATE DATABASE tutorial2 CHARACTER SET UTF8;
CREATE USER 'tutorial2'@'localhost' IDENTIFIED BY 'tutorial2';
GRANT ALL PRIVILEGES ON tutorial2 . * TO 'tutorial2'@'localhost';
