--MYSQL

DROP DATABASE IF EXISTS showdafisica;
CREATE DATABASE IF NOT EXISTS showdafisica;
USE showdafisica;

CREATE TABLE user(
	id_user BIGINT NOT NULL AUTO_INCREMENT,
	name_user VARCHAR(60) NOT NULL,
	email_user VARCHAR(60) NOT NULL UNIQUE,
	password_user VARCHAR(60) NOT NULL,
	PRIMARY KEY(id_user)
);

CREATE TABLE news(
	id_news BIGINT NOT NULL AUTO_INCREMENT,
	title VARCHAR(40) NOT NULL,
	subtitle VARCHAR(60) NOT NULL,
	images VARCHAR(300) NOT NULL,
	text_notice VARCHAR(2000) NOT NULL,
	PRIMARY KEY(id_news)
);

CREATE TABLE gallery(
	id_image BIGINT NOT NULL AUTO_INCREMENT,
	path_image VARCHAR(200) NOT NULL,
	PRIMARY KEY(id_image)
);

CREATE TABLE diary(
	id_overview BIGINT NOT NULL AUTO_INCREMENT,
	title VARCHAR(60) NOT NULL,
	subtitle VARCHAR(400) NOT NULL,
	city VARCHAR(30) NOT NULL,
	date_show DATE NOT NULL,
	local_show VARCHAR(30) NOT NULL,
	banner VARCHAR(100) NOT NULL,
	PRIMARY KEY(id_overview)
);

INSERT INTO user(name_user, email_user, password_user) 
VALUES
("FabSoftware","fabsoftware@ifsp.com", "FabsoftwareIFSP"),
("ShowdeFisica","showdefisica@ifsp.com", "123456");


--SQLITE

CREATE TABLE user(
	id_user INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	name_user VARCHAR(60) NOT NULL,
	email_user VARCHAR(60) NOT NULL UNIQUE,
	password_user VARCHAR(60) NOT NULL
)

CREATE TABLE news(
	id_news INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	title VARCHAR(40) NOT NULL,
	subtitle VARCHAR(60) NOT NULL,
	images VARCHAR(300) NOT NULL,
	text_notice VARCHAR(2000) NOT NULL
)

CREATE TABLE gallery(
	id_image INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	path_image VARCHAR(300) NOT NULL
)

CREATE TABLE diary(
	id_overview INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	title VARCHAR(60) NOT NULL,
	subtitle VARCHAR(400) NOT NULL,
	city VARCHAR(30) NOT NULL,
	date_show DATE NOT NULL,
	local_show VARCHAR(30) NOT NULL,
	banner VARCHAR(100) NOT NULL
)

INSERT INTO user(name_user, email_user, password_user) 
VALUES("FabSoftware","fabsoftware@ifsp.com", "FabsoftwareIFSP"),
("ShowdeFisica","showdefisica@ifsp.com", "123456")