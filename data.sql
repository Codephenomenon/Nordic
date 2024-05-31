/*
// Author: Daniel Clayton
// Start: Execute this script in PhpMyAdmin or another SQL server to install the database for this website.
// Description: This file creates the database and user utilized by Nordic.
// Info: root user, no password,
*/

DROP DATABASE IF EXISTS Nordic_Site_DB;
CREATE DATABASE Nordic_Site_DB;
USE Nordic_Site_DB;

CREATE TABLE user (
    `user_id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `date_created` TIMESTAMP,
    PRIMARY KEY (user_id)
);

CREATE TABLE beverage (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `image` VARCHAR(100) NOT NULL,
    `description` TEXT(1000) NOT NULL,
    `price` FLOAT NOT NULL
    PRIMARY KEY (id)
)