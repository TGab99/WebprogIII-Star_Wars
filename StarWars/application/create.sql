set old_passwords=0;
DROP USER IF EXISTS 'starwars'@'localhost';
CREATE USER 'starwars'@'localhost' 
    IDENTIFIED BY 'May251977';
GRANT USAGE ON *.* TO 'starwars'@'localhost'
REQUIRE NONE WITH 
MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

DROP DATABASE IF EXISTS `starwars`;
CREATE DATABASE IF NOT EXISTS `starwars`;
GRANT SELECT, INSERT, UPDATE, DELETE 
ON `starwars`.* TO 'starwars'@'localhost';
 
USE `starwars`;

CREATE TABLE IF NOT EXISTS ci_sessions(
    `id` varchar(128) NOT NULL,
    `ip_address` varchar(45) NOT NULL,
    `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
    `data` blob NOT NULL,
     CONSTRAINT PK_ci_sessions PRIMARY KEY(id),
     KEY `ci_sessions_timestamp` (`timestamp`)
);

CREATE TABLE IF NOT EXISTS jedi(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    homeworld VARCHAR(250) NOT NULL,
    species VARCHAR(250) NOT NULL,
    gender VARCHAR(250) NOT NULL,
    rank VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_jedi PRIMARY KEY(id)
);

INSERT INTO jedi(name,homeworld,species,gender,rank,image) VALUES('Yoda','Dagobah','Ismeretlen','Férfi','Jedi mester','yoda.png');

CREATE TABLE IF NOT EXISTS sith(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    homeworld VARCHAR(250) NOT NULL,
    species VARCHAR(250) NOT NULL,
    gender VARCHAR(250) NOT NULL,
    rank VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_sith PRIMARY KEY(id)
);

INSERT INTO sith(name,homeworld,species,gender,rank,image) VALUES('Darth Vader','Tatooine','Gép/Ember','Férfi','Sötét Nagyúr','darth_vader.jpg');

CREATE TABLE IF NOT EXISTS droid(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    homeworld VARCHAR(250) NOT NULL,
    creator VARCHAR(250) NOT NULL,
    model VARCHAR(250) NOT NULL,
    class VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_droid PRIMARY KEY(id)
);

INSERT INTO droid(name,homeworld,creator,model,class,image) VALUES('R2-D2','Naboo','Ismeretlen','R2 sorozatú astromech droid','Astromech droid','r2-d2.png');

CREATE TABLE IF NOT EXISTS planets(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    regio VARCHAR(250) NOT NULL,
    sector VARCHAR(250) NOT NULL,
    system VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_planets PRIMARY KEY(id)
);

INSERT INTO planets(name,regio,sector,system,image) VALUES('Coruscant','Core Worlds','Coruscant subsector, Corusca sector', 'Coruscant system','coruscant.png');

CREATE TABLE IF NOT EXISTS weapons(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    type VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_weapons PRIMARY KEY(id)
);

INSERT INTO weapons(name,type,image) VALUES('Lézerkard','Melee weapon','lightsaber.jpg');

CREATE TABLE IF NOT EXISTS vehicles(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    model VARCHAR(250) NOT NULL,
    class VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_vehicles PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS species(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    homeworld VARCHAR(250) NOT NULL,
    species VARCHAR(250) NOT NULL,
    gender VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_species PRIMARY KEY(id)
);

INSERT INTO species(name,homeworld,species,gender,image) VALUES('Chewbacca','Kashyyyk','Wookiee','Hím','chewbacca.jpg');

CREATE TABLE IF NOT EXISTS senators(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    homeworld VARCHAR(250) NOT NULL,
    species VARCHAR(250) NOT NULL,
    gender VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_senators PRIMARY KEY(id)
);

INSERT INTO senators(name,homeworld,species,gender,image) VALUES('Padmé Amidala','Naboo','Human','Female','padme_amidala.png');

CREATE TABLE IF NOT EXISTS games(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    developers VARCHAR(250) NOT NULL,
    publishers VARCHAR(250) NOT NULL,
    release_date VARCHAR(250) NOT NULL,
    models VARCHAR(250) NOT NULL,
    platforms VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_games PRIMARY KEY(id)
);

INSERT INTO games(name,developers,publishers,release_date,models,platforms,image) VALUES('Star Wars Arcade','Atari Inc.','Atari Inc., Parker Brothers, Domark, Broderbund','May 1983','Single-Player','Arcade','star_wars_arcade_game.png');

CREATE TABLE IF NOT EXISTS films(
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(250) NOT NULL,
    release_date VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_films PRIMARY KEY(id)
);

INSERT INTO films(title,release_date,image) VALUES('Star Wars: A New Hope','May 25, 1977','a_new_hope.jpg');

CREATE TABLE IF NOT EXISTS series(
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(250) NOT NULL,
    release_date VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_series PRIMARY KEY(id)
);

INSERT INTO series(title,release_date,image) VALUES('Star Wars: Droids','Sep 7,1985','star_wars_droids');

CREATE TABLE IF NOT EXISTS clone(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    homeworld VARCHAR(250) NOT NULL,
    species VARCHAR(250) NOT NULL,
    gender VARCHAR(250) NOT NULL,
    rank VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,
    file VARCHAR(250) NOT NULL,

    CONSTRAINT PK_clone PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS mandalorians(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    homeworld VARCHAR(250) NOT NULL,
    species VARCHAR(250) NOT NULL,
    gender VARCHAR(250) NOT NULL,
    rank VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,
    file VARCHAR(250) NOT NULL,

    CONSTRAINT PK_mandalorians PRIMARY KEY(id)
);