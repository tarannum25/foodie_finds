SET FOREIGN_KEY_CHECKS=0;

 --  Users Table
DROP TABLE IF EXISTS `users`;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(32) NOT NULL,
    last_name VARCHAR(32),
    phone VARCHAR(12) NOT NULL UNIQUE,
    email VARCHAR(64) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    image_url VARCHAR(256),
    role TINYINT(1) DEFAULT 2,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


--  Categories Table
DROP TABLE IF EXISTS categories;
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    description VARCHAR(256),
    image_url VARCHAR(512),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--  Products Table
-- starter: 1 = Pending, 2 = Processing, 3 = Completed 
DROP TABLE IF EXISTS products;
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(150) NOT NULL,
    description TEXT,
    price_mp DECIMAL(10, 2) NOT NULL,
    price_sp DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(512),
    category_id INT NOT NULL,

    INDEX(category_id),

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY(category_id) REFERENCES categories(id)
);

 --  Orders Table
 -- index: 1 = Starter, 2 = Main Course, 3 = Dessert, 4 = Drinks 
 DROP TABLE IF EXISTS orders;
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    gross_total DECIMAL(10, 2) NOT NULL,
    sub_total DECIMAL(10, 2) NOT NULL,
    discount DECIMAL(10, 2) NOT NULL,
    status TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

 --  Order Items Table
DROP TABLE IF EXISTS order_items;
CREATE TABLE order_items (
    id INT AUTO_INCREMENT NOT NULL,
    product_id INT NOT NULL,
    order_id INT NOT NULL,
    price_mp DECIMAL(10, 2) NOT NULL,
    price_sp DECIMAL(10, 2) NOT NULL,
    discount DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL,
    order_price DECIMAL(10, 2) NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

 --  Carts Table
 DROP TABLE IF EXISTS carts;
CREATE TABLE carts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    Created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

 --  Cart Items Table
 DROP TABLE IF EXISTS cart_items;
CREATE TABLE cart_items (
    id INT AUTO_INCREMENT NOT NULL,
    cart_id INT NOT NULL,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (cart_id) REFERENCES carts(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

INSERT INTO users(first_name, last_name, phone, email, password, image_url, role) VALUES
('Admin', 'Account', '9112322222', 'admin@gmail.com', '$2y$10$Ss3ofcicj0/ozDlBOGdsCeT.zSp6xlsoNzlCuyW26iJ9/WNhFfqJ2', 'http://foodie_finds/assets/img/default-image.jpg', 1);

SET FOREIGN_KEY_CHECKS=1;