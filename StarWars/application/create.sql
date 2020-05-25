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

CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(250) NOT NULL,
    last_name VARCHAR(250) NOT NULL,
    username VARCHAR(250) NOT NULL,
    email VARCHAR(250) NOT NULL,
    password VARCHAR(250) NOT NULL,

    CONSTRAINT PK_users PRIMARY KEY(id)
);

INSERT INTO users(first_name,last_name,username,email,password) VALUES('Elek','Test','test','test@test.hu',sha1('test'));

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

INSERT INTO jedi(name,homeworld,species,gender,rank,image) VALUES('Yoda','Dagobah','Unknown','Male','Jedi Mester','yoda.png');
INSERT INTO jedi(name,homeworld,species,gender,rank,image) VALUES('Anakin Skywalker','Tatooine','Human','Male','Jedi Knight','anakin_skywalker.jpg');
INSERT INTO jedi(name,homeworld,species,gender,rank,image) VALUES('Ashoka Tano','Shili','Togruta','Female','Jedi Padawan','ahsoka_tano.png');
INSERT INTO jedi(name,homeworld,species,gender,rank,image) VALUES('Obi-Wan Kenobi','Stewjon','Human','Male','Jedi Mester','obi_wan_kenobi.jpg');
INSERT INTO jedi(name,homeworld,species,gender,rank,image) VALUES('Mace Windu','Haruun Kal','Human','Male','Jedi Mester','mace_windu.jpg');

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

INSERT INTO sith(name,homeworld,species,gender,rank,image) VALUES('Darth Vader','Tatooine','Mechanic/Human','Male','Sith Lord','darth_vader.jpg');
INSERT INTO sith(name,homeworld,species,gender,rank,image) VALUES('Darth Sidious','Naboo','Human','Male','Sith Lord','darth_sidious.png');
INSERT INTO sith(name,homeworld,species,gender,rank,image) VALUES('Darth Maul','Dathomir','Zabrak','Male','Sith Appretince','darth_maul.png');

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

INSERT INTO droid(name,homeworld,creator,model,class,image) VALUES('R2-D2','Naboo','Unknown','R2 series astromech droid','Astromech droid','r2-d2.png');
INSERT INTO droid(name,homeworld,creator,model,class,image) VALUES('C-3PO','Tatooine','Anakin Skywalker','3PO unit','Protocol droid','c-3po.jpg');

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
INSERT INTO planets(name,regio,sector,system,image) VALUES('Naboo','Mid Rim','Chommel sector, Corusca sector', 'Naboo system','naboo.png');

CREATE TABLE IF NOT EXISTS weapons(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    type VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_weapons PRIMARY KEY(id)
);

INSERT INTO weapons(name,type,image) VALUES('Lightsaber','Melee weapon','lightsaber.jpg');
INSERT INTO weapons(name,type,image) VALUES('DL-44 Heavy Blaster Pistol','Heavy Blaster Pistol','dl-44-heavy-blaster-pistol.png');

CREATE TABLE IF NOT EXISTS species(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    homeworld VARCHAR(250) NOT NULL,
    species VARCHAR(250) NOT NULL,
    gender VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_species PRIMARY KEY(id)
);

INSERT INTO species(name,homeworld,species,gender,image) VALUES('Chewbacca','Kashyyyk','Wookiee','Male','chewbacca.jpg');
INSERT INTO species(name,homeworld,species,gender,image) VALUES('Jar Jar Binks','Naboo','Gungan','Male','jar_jar_binks.jpg');
INSERT INTO species(name,homeworld,species,gender,image) VALUES('Jabba','Nal Hutta','Hutt','Male','jabba.png');

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
INSERT INTO senators(name,homeworld,species,gender,image) VALUES('Bail Organa','Alderaan','Human','Male','bail_organa.jpg');

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
INSERT INTO games(name,developers,publishers,release_date,models,platforms,image) VALUES('Star Wars Arcade','Namco','Namco','Dec 4, 1987','Single-Player','Family computer/NES','star_wars_namco.jpg');

CREATE TABLE IF NOT EXISTS films(
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(250) NOT NULL,
    release_date VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_films PRIMARY KEY(id)
);

INSERT INTO films(title,release_date,image) VALUES('Star Wars: A New Hope','May 25, 1977','a_new_hope.jpg');
INSERT INTO films(title,release_date,image) VALUES('Star Wars: Empire Strikes Back','May 17, 1980','empire_strikes_back.jpg');
INSERT INTO films(title,release_date,image) VALUES('Star Wars: Return of The Jedi','May 25, 1983','return_of_the_jedi.jpg');
INSERT INTO films(title,release_date,image) VALUES('Star Wars: Phantom Menace','May 16, 1999','phantom_menace.jpg');
INSERT INTO films(title,release_date,image) VALUES('Star Wars: Attack of The Clones','May 12, 2002','attack_of_the_clones.jpg');
INSERT INTO films(title,release_date,image) VALUES('Star Wars: Revenge of The Sith','May 15, 2005','revenge_of_the_sith.jpg');

CREATE TABLE IF NOT EXISTS series(
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(250) NOT NULL,
    release_date VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_series PRIMARY KEY(id)
);

INSERT INTO series(title,release_date,image) VALUES('Star Wars: Droids','Sep 7,1985','star_wars_droids');
INSERT INTO series(title,release_date,image) VALUES('Star Wars: Ewoks','Sep 7,1985','ewoks.jpg');

CREATE TABLE IF NOT EXISTS clone(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    homeworld VARCHAR(250) NOT NULL,
    species VARCHAR(250) NOT NULL,
    gender VARCHAR(250) NOT NULL,
    rank VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_clone PRIMARY KEY(id)
);

INSERT INTO clone(name, homeworld,species,gender,rank,image) VALUES('Rex','Kamino','Human','Male','Captain Commander','rex.png');
INSERT INTO clone(name, homeworld,species,gender,rank,image) VALUES('Cody','Kamino','Human','Male','Commander','cody.jpeg');

CREATE TABLE IF NOT EXISTS mandalorians(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    homeworld VARCHAR(250) NOT NULL,
    species VARCHAR(250) NOT NULL,
    gender VARCHAR(250) NOT NULL,
    image VARCHAR(250) NOT NULL,

    CONSTRAINT PK_mandalorians PRIMARY KEY(id)
);

INSERT INTO mandalorians(name,homeworld,species,gender,image) VALUES('Ursa Wren','Krownest','Human','Female','ursa_wren.png');
INSERT INTO mandalorians(name,homeworld,species,gender,image) VALUES('Sabine Wren','Krownest','Human','Female','Sabine.png');