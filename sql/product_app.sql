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

-- Optional contoh data
INSERT INTO products (name, category, price, stock)
VALUES
('Pulpen Snowman', 'Alat Tulis', 3500, 100),
('Kertas A4', 'Kertas', 50000, 25);
