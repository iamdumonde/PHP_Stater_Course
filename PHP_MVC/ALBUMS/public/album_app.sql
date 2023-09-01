-- Creation de la base de donnée
CREATE DATABASE album_app_mvc2
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

use album_app_mvc2;
-- Création de la Table albums
CREATE TABLE albums (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    artiste VARCHAR(50) NOT NULL,
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)