CREATE DATABASE IF NOT exists Shop;
USE Shop;

CREATE TABLE Produit (
    code VARCHAR(5) NOT NULL PRIMARY KEY,
    designation VARCHAR(50) NOT NULL,
    prix_unit VARCHAR(6),
    unite CHAR(1)
)ENGINE = INNODB;