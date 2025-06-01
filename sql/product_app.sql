CREATE DATABASE IF NOT EXISTS product_app;
USE product_app;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    category VARCHAR(50),
    price DECIMAL(10, 2),
    stock INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL DEFAULT 'user'
);


-- Optional contoh data
INSERT INTO products (name, category, price, stock)
VALUES
('Pulpen Snowman', 'Alat Tulis', 3500, 100),
('Kertas A4', 'Kertas', 50000, 25);


INSERT INTO users (username, password, role)
VALUES ('admin', MD5('admin123'), 'admin');

ALTER TABLE users CHANGE username email VARCHAR(100) NOT NULL UNIQUE;
