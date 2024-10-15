CREATE DATABASE IF NOT EXISTS register;  -- Create database if it doesn't exist
USE register;  -- Select the database

CREATE TABLE bookings (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    destination VARCHAR(100) NOT NULL,
    check_in DATE NOT NULL,
    check_out DATE NOT NULL,
    children INT NOT NULL,
    adults INT NOT NULL,
    rooms INT NOT NULL
);