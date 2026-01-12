CREATE DATABASE IF NOT EXISTS MaBagnole;
USE MaBagnole;

CREATE TABLE IF NOT EXISTS users (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(60) NOT NULL,
	email VARCHAR(255) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	role ENUM("admin", "client") NOT NULL,
	is_active BOOL DEFAULT TRUE,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS categories(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) UNIQUE NOT NULL,
	description TEXT NOT NULL
);
CREATE TABLE IF NOT EXISTS cars(
	id INT PRIMARY KEY AUTO_INCREMENT,
	model VARCHAR(100) NOT NULL,
	brand VARCHAR(100) NOT NULL,
    pricePerDay INT NOT NULL,
	availability BOOL DEFAULT TRUE,
	image VARCHAR(255) NOT NULL,
	descripition TEXT NOT NULL,
    id_category INT,
    FOREIGN KEY (id_category) REFERENCES categories (id)
);



CREATE TABLE IF NOT EXISTS reservations(
	id INT PRIMARY KEY AUTO_INCREMENT,
    departureLocation VARCHAR(255) NOT NULL ,
    returnLocation varchar(255) NOT NULL ,
	reservationDateStart datetime NOT NULL ,
	reservationDateEnd datetime NOT NULL ,
	STATUS ENUM("pending","rejected","cancelled","confirmed","completed") NOT NULL DEFAULT "pending" ,
    id_car INT,
    FOREIGN KEY (id_car) REFERENCES cars (id),
	id_client INT,
    FOREIGN KEY (id_client) REFERENCES users (id)
);

CREATE TABLE IF NOT EXISTS comments(
	id INT PRIMARY KEY AUTO_INCREMENT,
	rating INT CHECK (rating BETWEEN 1 AND 5),
	visibility BOOL DEFAULT TRUE,
	comment_text TEXT NOT NULL,
    commented_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    deleted_at DATETIME,
    id_car INT,
    FOREIGN KEY (id_car) REFERENCES cars (id),
	id_client INT,
    FOREIGN KEY (id_client) REFERENCES users (id)
);