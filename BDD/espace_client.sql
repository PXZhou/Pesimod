-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 24 Juin 2017 à 14:28
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18


 SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
 SET time_zone = "+00:00";


 CREATE TABLE utilisateur (
   id INTEGER PRIMARY KEY,
   Email varchar(50) NOT NULL,
   Mdp varchar(255) NOT NULL,
   Nom varchar(25) NOT NULL,
   Prenom varchar(25) NOT NULL,
   Accré BOOLEAN NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 INSERT INTO utilisateur (id, Email, Mdp, Nom, Prenom, Accré)
 VALUES(1,'marie.poppins@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Poppins', 'Marie', FALSE );
 INSERT INTO utilisateur (id, Email, Mdp, Nom, Prenom)
 VALUES(2,'jacque.cartier@gmail.com', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', 'Cartier', 'Jacques', FALSE );
 INSERT INTO utilisateur (id, Email, Mdp, Nom, Prenom)
 VALUES(3,'bruce.wayne@gmail.com', '9cd656169600157ec17231dcf0613c94932efcdc', 'Wayne', 'Bruce', TRUE);


 CREATE TABLE maison (
   id             INTEGER PRIMARY KEY,
   nom            VARCHAR(100) COLLATE utf8_bin NOT NULL,
   adresse        VARCHAR(255) COLLATE utf8_bin NOT NULL,
   code_postal    VARCHAR(255) COLLATE utf8_bin NOT NULL,
   ville          VARCHAR(255) COLLATE utf8_bin NOT NULL,
   etage          INT(11) NOT NULL,
   id_utilisateur INT(11) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 INSERT INTO maison (id, nom, adresse, code_postal, ville, etage, id_utilisateur) VALUES
   (1,'Wayne','Paris','128 Avenue du Maine ', '75014',1,1),
   (2,'Poppins','Paris', '48 Rue du Montparnasse', '75014',2,2),
   (3,'Cartier','Paris', '29 Rue Victor Hugo', '75015',0,3);


 CREATE TABLE corresp_admin_maison (
   id_maison int(11) NOT NULL,
   id_admin int(11) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;


 CREATE TABLE piece (
   id INTEGER PRIMARY KEY,
   nom varchar(255) COLLATE utf8_bin NOT NULL,
   etage int(5) NOT NULL,
   id_maison int(11) NOT NULL,
   id_utilisateur int(11) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 INSERT INTO piece (id, nom, etage ,id_maison,id_utilisateur) VALUES
   (1,'Chambre',1,1,1),
   (2,'Chambre2',1,1,1),
   (3,'Chambre3',1,1,1),
   (4,'Chambre',1,2,2),
   (5,'Chambre',1,3,3),
   (6,'Cuisine',0,1,1),
   (7,'Cuisine',0,2,2),
   (8,'Cuisine',0,3,3),
   (9,'Salle de bain',2,1,1),
   (10,'Salle de bain',2,2,2),
   (11,'Salle de bain2',2,2,2),
   (12,'Salle de bain',2,2,3),
   (13,'Toilette',2,1,1),
   (14,'Toilette',1,3,2),
   (15,'Toilette',1,3,3);

 CREATE TABLE calendrier (
   Date date NOT NULL,
   Début time NOT NULL,
   Fin time NOT NULL,
   Statut tinyint(1) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 CREATE TABLE capteur (
   id INTEGER PRIMARY KEY,
   num_serie varchar(255) COLLATE utf8_bin NOT NULL,
   nom varchar(255) COLLATE utf8_bin NOT NULL,
   id_piece int(11) NOT NULL,
   id_categorie int(11) NOT NULL,
   id_utilisateur int(11) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 INSERT INTO capteur (id,num_serie, nom,id_piece,id_categorie,id_utilisateur) VALUES
   (1,'DS18B20', 'Temperature',1,'',1),
   (2,'YG - A1', 'Fumee', 1,'',1),
   (3,'DHT-11', 'Humidite', 2,'',1),
   (4,'Photoresistor Relay Module', 'Luminosite', 2,'',1),
   (5,'DS18B20', 'Temperature', 2,'',2),
   (6,'DS18B20', 'Temperature', 3,'',3),
   (7,'YG - A1', 'Fumee', 3,'',2),
   (8,'YG - A1', 'Fumee', 2,'',3),
   (9,'DHT-11', 'Humidite', 1,'',2),
   (10,'DHT-11', 'Humidite', 1,'',3),
   (11,'Photoresistor Relay Module', 'Luminosite', 2,'',2),
   (12,'Photoresistor Relay Module', 'Luminosite', 3,'',3);


 CREATE TABLE categorie_capteurs (
   id INTEGER PRIMARY KEY ,
   nom_categorie varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
   unite varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 INSERT INTO `categorie_capteurs`(`id`,`nom_categorie`,`unite`) VALUES
   (1,'Temperature','°C'),
   (2,'Luminosite','Lux'),
   (3,'Humidite','%'),
   (4,'Fumee','absent'),
   (5,'Camera','absent'),
   (6,'Presence','absent');

 CREATE TABLE donnees (
   Unité varchar(125) NOT NULL,
   Historique date NOT NULL,
   valeur VARCHAR(125) NOT NULL,
   id_capteur INT(11) NOT NULL,
   id_user INT(11) Not NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 INSERT INTO donnees (Unité, Historique,valeur,id_capteur,id_user) VALUES
   ('Celsius', '2017-05-10',25,1,1),
   ('%', '2017-02-15',45,3,1),
   ('%', '2017-04-25',45,7,2),
   ('Celsius', '2017-03-27',15,6,3);


 CREATE TABLE effecteur (
   id INTEGER PRIMARY KEY,
   Référence varchar(100) NOT NULL,
   fooction varchar(25) NOT NULL,
   Statut tinyint(1) NOT NULL,
   id_piece INT(11) NOT NULL,
   id_utilisateur INT(11) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 INSERT INTO effecteur (id,Référence, fonction, Statut,id_piece, id_utilisateur) VALUES
   (1,'DS020', 'Lumiere', 1,'',1),
   (2,'DS020', 'Lumiere', 1,'',2),
   (3,'DS020', 'Lumiere', 1,'',3),
   (4,'DS020', 'Lumiere', 1,'',1),
   (5,'DS020', 'Lumiere', 1,'',2),
   (6,'DS020', 'Lumiere', 1,'',3),
   (7,'DS020', 'Lumiere', 1,'',2),
   (8,'DS450', 'Volet', 1,'',3),
   (9,'DS450', 'Volet', 1,'',1),
   (10,'DS450', 'Volet', 1,'',1),
   (11,'DS450', 'Volet', 1,'',2),
   (12,'DS450', 'Volet', 1,'',3);


 ALTER TABLE categorie_capteurs
   MODIFY id int(11) NOT NULL AUTO_INCREMENT;

 ALTER TABLE utilisateur
   MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

 ALTER TABLE piece
   MODIFY id int(11) NOT NULL AUTO_INCREMENT;

 ALTER TABLE maison
   MODIFY id int(11) NOT NULL AUTO_INCREMENT;

  ALTER TABLE effecteur
    MODIFY id int(11) NOT NULL AUTO_INCREMENT;

  ALTER TABLE categorie_capteurs
    MODIFY id int(11) NOT NULL AUTO_INCREMENT;




 /* ALTER TABLE capteur
   ADD CONSTRAINT capteur_ibfk_1 FOREIGN KEY (id_piece) REFERENCES piece (id),
   ADD CONSTRAINT capteur_ibfk_2 FOREIGN KEY (id_categorie) REFERENCES categorie_capteurs (id);
 ALTER TABLE corresp_admin_maison
   ADD CONSTRAINT corresp_admin_maison_ibfk_1 FOREIGN KEY (id_maison) REFERENCES maison (id),
   ADD CONSTRAINT corresp_admin_maison_ibfk_2 FOREIGN KEY (id_admin) REFERENCES administrateur (id);
 ALTER TABLE maison
   ADD CONSTRAINT maison_ibfk_1 FOREIGN KEY (id_utilisateur) REFERENCES utilisateur (id);
 ALTER TABLE piece
   ADD CONSTRAINT piece_ibfk_1 FOREIGN KEY (id_maison) REFERENCES maison (id);*/


