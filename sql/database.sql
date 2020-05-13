DROP DATABASE IF EXISTS showdafisica;
CREATE DATABASE IF NOT EXISTS showdafisica;
USE showdafisica;

CREATE TABLE user(
    id_user BIGINT NOT NULL AUTO_INCREMENT,
    name_user VARCHAR(60) NOT NULL,
    type_user CHAR(4) NOT NULL,
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

INSERT INTO user VALUES
(NULL, 'Maicon', 'adm'),
(NULL, 'Danilo', 'user');