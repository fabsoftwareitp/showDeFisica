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
	PRIMARY KEY(id_news)
);

CREATE TABLE gallery(
	id_image BIGINT NOT NULL AUTO_INCREMENT,
	title VARCHAR(40) NOT NULL,
	subtitle VARCHAR(60) NOT NULL,
	path_image VARCHAR(100),
	PRIMARY KEY(id_image)
);

CREATE TABLE overview(
	id_overview BIGINT NOT NULL AUTO_INCREMENT,
	title VARCHAR(40) NOT NULL,
	subtitle VARCHAR(60) NOT NULL,
	country VARCHAR(20) NOT NULL,
	uf VARCHAR(20) NOT NULL,
	city VARCHAR(30) NOT NULL,
	PRIMARY KEY(id_overview)
);

CREATE TABLE overview_date(
	id_date BIGINT NOT NULL AUTO_INCREMENT,
	id_overview BIGINT NOT NULL,
	banner VARCHAR(60) NOT NULL,
	local_show VARCHAR(30) NOT NULL,
	PRIMARY KEY(id_date),
	FOREIGN KEY(id_overview) REFERENCES overview(id_overview) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO user(name_user, email_user, password_user) 
VALUES
("FabSoftware","fabsoftware@ifsp.com", "FabsoftwareIFSP"),
("ShowdeFisica","showdefisica@ifsp.com", "123456");