CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    description TEXT,
    quantity INT,
    price DECIMAL(10, 2)
);

CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT,
    quantity INT,
    total_price DECIMAL(10, 2),
    order_date DATETIME,
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE sales (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT,
    quantity INT,
    sale_date DATETIME,
    FOREIGN KEY (product_id) REFERENCES products(id)
);
