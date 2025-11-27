CREATE DATABASE login_db;

USE login_db;

CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL, 
    nama_lengkap VARCHAR(100)
);

INSERT INTO users (username, password, nama_lengkap) 
VALUES ('admin', '0192023a7bbd73250516f069df18b500', 'Wizzy Admin Nonchalant');