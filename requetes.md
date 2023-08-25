## 
SELECT * FROM `users` ORDER BY registration_date;
## 
SELECT * FROM users ORDER BY registration_date DESC LIMIT 1;
## 
SELECT * FROM users WHERE birthdate LIKE '%-08-%';
## 
SELECT * FROM users WHERE (MONTH(birthdate) = MONTH('NOW'));
## 
SELECT COUNT('id') FROM users;
## 
SELECT users.id, users.first_name, users.last_name, addresses.number 
FROM users, addresses 
WHERE users.id = addresses.user_id 
AND addresses.number is NULL;

## SELECT name, price FROM `products` WHERE price > 1000;
## SELECT products.name, products.price FROM `products` WHERE products.price > 1000;
## SELECT products.name, pictures.url FROM products, pictures WHERE pictures.product_id = products.id; 

## 
SELECT products.id, products.name, categories.title FROM products, categories 
WHERE products.id = categories.id AND categories.title = 'Voyages';

## Agregation using with GRAUP BY
SELECT
    COUNT('customersid'),
    Country
FROM
    customers
WHERE
    country LIKE '%y%'
GROUP BY
    country;


##
SELECT
    COUNT('customersid'),
    Country
FROM
    customers
WHERE
    country LIKE '%y%'
GROUP BY
    country
HAVING
    COUNT('customersid') < 5;


##
SELECT
    users.id,
    users.first_name,
    users.last_name,
    COUNT(orders.user_id) AS nombres_dachats
FROM
    users,
    orders
WHERE
    users.id = orders.user_id
GROUP BY
    users.id,
    users.first_name,
    users.last_name
HAVING
    nombres_dachats > 10
ORDER BY
    nombres_dachats ASC;


##
SELECT
    customers.CustomerName,
    COUNT(orders.CustomerID) AS total
FROM
    customers
JOIN orders ON customers.CustomerID = orders.CustomerID
GROUP BY
    customers.CustomerName
HAVING
    COUNT(orders.CustomerID) > 10
ORDER BY
    total ASC;