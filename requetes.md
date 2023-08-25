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



### CREATION DE BASE DE DONNEES
# SHOW DATABASES => affiche la base de données
# CREATE DATABASE nom_de_la_bd => 
## Example 1
USE
  app_music;
CREATE TABLE albums(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
	ref CHAR(10) NOT NULL,
    name VARCHAR(50) NOT NULL,
    title VARCHAR(50) NOT NULL,
    description TEXT,
    duration INT(10),
    likes ENUM('Cool', 'Much', 'Great')
);

CREATE TABLE test(
    id INT(11) NOT NULL AUTO_INCREMENT,
    a INT(11) NOT NULL, 
    b INT(11) UNSIGNED ZEROFILL NOT NULL,
    c INT(5) DEFAULT NULL,
    d INT(5) UNSIGNED ZEROFILL NOT NULL,
    e INT(15) DEFAULT NULL,
	PRIMARY KEY (id)
);

# TABLE WITH FOREIGN KEYS
CREATE TABLE albumsLIST (
	id INT AUTO_INCREMENT,
    album_id INT,
    list varchar(100),
    PRIMARY KEY (id),
    CONSTRAINT idx_album_albumLIST
    FOREIGN key (`album_id`) REFERENCES albums(`id`)
);

## INSERTION DE DONNEES
INSERT INTO `albums`(`ref`, `name`, `title`, `description`, `duration`, `likes`) VALUES ('XY-123','ELTON John','Sacrifice',"L'album chaud du moment",'450','Cool');
INSERT INTO `albums` VALUES (NULL,'XZ-124','Petit Miguelito','Petit à Petit',"L'album du descendant direct de Miguelito",'710','Great');
