SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE administrateur(
  id INTEGER PRIMARY KEY,
  Nom varchar(15) NOT NULL,
  id_utilisateur TINYINT(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE utilisateur (
  id INTEGER PRIMARY KEY,
  Email varchar(50) NOT NULL,
  Mdp varchar(25) NOT NULL,
  Nom varchar(25) NOT NULL,
  Prenom varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO utilisateur (id, Email, Mdp, Nom, Prenom)
VALUES(1,'marie.poppins@gmail.com', 123456789, 'Poppins', 'Marie');
INSERT INTO utilisateur (id, Email, Mdp, Nom, Prenom)
VALUES(2,'jacque.cartier@gmail.com', 987654321, 'Cartier', 'Jacques');
INSERT INTO utilisateur (id, Email, Mdp, Nom, Prenom)
VALUES(3,'bruce.wayne@gmail.com', 9876543210, 'Wayne', 'Bruce');

CREATE TABLE maison (
  id             INTEGER PRIMARY KEY,
  nom            VARCHAR(100) COLLATE utf8_bin NOT NULL,
  adresse        VARCHAR(255) COLLATE utf8_bin NOT NULL,
  code_postal    VARCHAR(255) COLLATE utf8_bin NOT NULL,
  ville          VARCHAR(255) COLLATE utf8_bin NOT NULL,
  id_utilisateur INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO maison (id, nom, adresse, code_postal, ville, id_utilisateur) VALUES
  (1,'Wayne','Paris','128 Avenue du Maine ', '75014',''),
  (2,'Poppins','Paris', '48 Rue du Montparnasse', '75014',''),
  (3,'Cartier','Paris', '29 Rue Victor Hugo', '75015','');


CREATE TABLE corresp_admin_maison (
  id_maison int(11) NOT NULL,
  id_admin int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;


CREATE TABLE piece (
  id  int(11) NOT NULL,
  nom varchar(255) COLLATE utf8_bin NOT NULL,
  etage int(5) NOT NULL,
  id_maison int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO piece (id, nom, etage ,id_maison) VALUES
(1,'Chambre1',1,''),
(2,'Chambre2',1,''),
(3,'Chambre3',1,''),
(4,'Cuisine',0,''),
(5,'Salle de bain',2,''),
(6,'Toilette',2,''),
(7,'Toilette2',1,'');


CREATE TABLE calendrier (
  Date date NOT NULL,
  Début time NOT NULL,
  Fin time NOT NULL,
  Statut tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE capteur (
  num_serie varchar(255) COLLATE utf8_bin NOT NULL,
  nom varchar(255) COLLATE utf8_bin NOT NULL,
  id_piece int(11) NOT NULL,
  id_categorie int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO capteur (num_serie, nom,id_piece,id_categorie) VALUES
('DS18B20', 'Temperature','',''),
('YG - A1', 'Fumee', '',''),
('DHT-11', 'Humidite', '',''),
('Photoresistor Relay Module', 'Luminosite', '',''),
('DS18B20', 'Temperature', '',''),
('DS18B20', 'Temperature', '',''),
('YG - A1', 'Fumee', '',''),
('YG - A1', 'Fumee', '',''),
('DHT-11', 'Humidite', '',''),
('DHT-11', 'Humidite', '',''),
('Photoresistor Relay Module', 'Luminosite', '',''),
('Photoresistor Relay Module', 'Luminosite', '','');


CREATE TABLE categorie_capteurs (
  id INTEGER PRIMARY KEY ,
  nom_categorie varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  unite varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE donnees (
  Type varchar(125) NOT NULL,
  Historique date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO donnees (Type, Historique) VALUES
('Celsius', '2017-05-10'),
('%', '2017-02-15'),
('%', '2017-04-25'),
('Celsius', '2017-03-27');


CREATE TABLE effecteur (
  Référence varchar(100) NOT NULL,
  Type varchar(25) NOT NULL,
  Statut tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO effecteur (Référence, Type, Statut) VALUES
('DS020', 'Lumiere', 1),
('DS020', 'Lumiere', 1),
('DS020', 'Lumiere', 1),
('DS020', 'Lumiere', 1),
('DS020', 'Lumiere', 1),
('DS020', 'Lumiere', 1),
('DS020', 'Lumiere', 1),
('DS450', 'Volet', 1),
('DS450', 'Volet', 1),
('DS450', 'Volet', 1),
('DS450', 'Volet', 1),
('DS450', 'Volet', 1);


ALTER TABLE categorie_capteurs
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE utilisateur
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


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

