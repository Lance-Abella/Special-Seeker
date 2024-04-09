CREATE DATABASE specialseekers;

USE specialseekers;

-- CREATE TABLE business 
-- (
-- 	seller_id varchar(6) primary key,
--     seller_name varchar(50) not null,
--     seller_location varchar(50) not null,
--     seller_contact varchar(11) not null
-- );

-- CREATE TABLE agency
-- (
-- 	category_id varchar(6) primary key,
--     category_name varchar(50) not null,
--     category_desc varchar(50) not null
-- );

CREATE TABLE users
(
	id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL, 
    password VARCHAR(100) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    birthdate DATE,
    sex VARCHAR(6) NOT NULL,
    email VARCHAR(50) NOT NULL
);


-- INSERT INTO seller (seller_id, seller_name, seller_location, seller_contact)
-- VALUES 
--     ('S101', 'Tuba Electronics', 'Manila', '09171234567'),
--     ('S102', 'Evryl Clothing Store', 'Cebu', '09283456789'),
--     ('S103', 'Ceniza Decoration Shop', 'Tagaytay', '09394567812'),
--     ('S104', 'Aaron Cosmetics', 'Davao', '09565678934'),
--     ('S105', 'Abella Sports Shop', 'Quezon', '09786789056');

-- INSERT INTO category (category_id, category_name, category_desc)
-- VALUES 
--     ('C101', 'Electronics', 'Electronic devices and accessories'),
--     ('C102', 'Clothing', 'Apparel and accessories'),
--     ('C103', 'Home Decor', 'Furniture, lighting, and decor'),
--     ('C104', 'Beauty', 'Cosmetics and skincare'),
--     ('C105', 'Sports', 'Sporting goods and apparel');

-- INSERT INTO product (product_id, category_id, seller_id, product_name, product_price, number_stocks)
-- VALUES 
--     ('P101', 'C101', 'S101', 'Smartphone', 11000.00, 50),
--     ('P102', 'C101', 'S101', 'Laptop', 45000.00, 30),
--     ('P103', 'C102', 'S102', 'T-Shirt', 250.00, 100),
--     ('P104', 'C103', 'S103', 'Table Lamp', 100.00, 20),
--     ('P105', 'C104', 'S104', 'Lipstick', 120.00, 200),
--     ('P106', 'C101', 'S101', 'Smartphone Accessories', 50.00, 100),
--     ('P107', 'C102', 'S102', 'Sleeveless', 90.00, 30),
--     ('P108', 'C103', 'S103', 'Figurines', 40.00, 50),
--     ('P109', 'C105', 'S105', 'Sports Shoes', 3300.00, 20);

-- INSERT INTO customer (customer_id, cust_fname, cust_lname, contact_number, customer_address)
-- VALUES 
--     ('C001', 'Czar', 'Basanal', '09171234567', '123 Main Street, Makati City, Metro Manila, Philippines'),
--     ('C002', 'Felix', 'Cena', '09283456789', '456 Oak Avenue, Quezon City, Metro Manila, Philippines'),
--     ('C003', 'Harley', 'Mamalias', '09397777777', '789 Elm Drive, Cebu City, Cebu, Philippines'),
--     ('C004', 'Anthony', 'Paccamara', '09455558888', '567 Pine Lane, Davao City, Davao del Sur, Philippines'),
--     ('C005', 'Alix', 'Gonzaga', '09566221133', '101 Oak Street, Baguio City, Benguet, Philippines'),
--     ('C006', 'Mariane', 'Historia', '09678901234', '888 Beachfront Road, Boracay Island, Malay, Aklan, Philippines');
--     
-- INSERT INTO voucher (voucher_code, v_value)
-- VALUES 
-- 	('V001', 800.00),
-- 	('V002', 500.00),
--     ('V003', 250.00);
--     
-- INSERT INTO payment (payment_id, amount, method, payment_date, voucher_code)
-- VALUES 
--     ('PAY001', 10200.00, 'Cash on Delivery', '2023-10-19', 'V001'),
--     ('PAY002', 44500.00, 'Cash on Delivery', '2023-10-18', 'V002'),
--     ('PAY003', 500.00, 'Gcash', '2023-10-17', 'V003'),
--     ('PAY004', 200.00, 'Gcash', '2023-10-16', NULL),
--     ('PAY005', 600.00, 'Cash on Delivery', '2023-10-15', NULL),
--     ('PAY006', 11000.00, 'Visa', '2023-10-15', NULL),
--     ('PAY007', 3300.00, 'Cash on Delivery', '2023-10-15', NULL),
--     ('PAY008', 11000.00, 'Cash on Delivery', '2023-10-15', NULL),
--     ('PAY009', 45000.00, 'Cash on Delivery', '2023-10-16', NULL);
--     
-- INSERT INTO transaction (order_id, customer_id, total_amount, delivery_date, payment_id)
-- VALUES 
--     ('ORD001', 'C001', 11000.00, '2023-10-30', 'PAY001'),
--     ('ORD002', 'C002', 45000.00, '2023-10-29', 'PAY002'),
--     ('ORD003', 'C003', 750.00, '2023-10-28', 'PAY003'),
--     ('ORD004', 'C004', 200.00, '2023-10-27', 'PAY004'),
--     ('ORD005', 'C005', 600.00, '2023-10-29', 'PAY005'),
--     ('ORD006', 'C002', 11000.00, '2023-11-6', 'PAY006'),
--     ('ORD007', 'C003', 3300.00, '2023-11-9', 'PAY007'),
--     ('ORD008', 'C002', 11000.00, '2023-11-9', 'PAY008'),
--     ('ORD009', 'C002', 45000.00, '2023-11-10', 'PAY009');
--     
-- INSERT INTO checkoutDetail (order_id, product_id, order_qty, order_price, order_date)
-- VALUES 
-- 	('ORD001', 'P101', 1, 11000.00, '2023-10-19'),
--     ('ORD002', 'P102', 1, 45000.00, '2023-10-18'),
--     ('ORD003', 'P103', 3, 250.00, '2023-10-17'),
--     ('ORD004', 'P104', 2, 100.00, '2023-10-16'),
--     ('ORD005', 'P105', 5, 120.00, '2023-10-15'),
--     ('ORD006', 'P101', 1, 11000.00, '2023-10-22'),
--     ('ORD007', 'P109', 1, 3300.00, '2023-10-23'),
--     ('ORD008', 'P101', 1, 11000.00, '2023-10-24'),
--     ('ORD009', 'P102', 1, 45000.00, '2023-10-25');