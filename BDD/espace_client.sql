-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 16 Mai 2017 à 07:56
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pesimod`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

CREATE TABLE `calendrier` (
  `Date` date NOT NULL,
  `Début` time NOT NULL,
  `Fin` time NOT NULL,
  `Statut désiré` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `num_serie` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_piece` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `capteur`
--

INSERT INTO `capteur` (`num_serie`, `nom`,`id_piece`,`id_categorie`) VALUES
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

--
-- Structure de la table `categorie_capteurs`
--

CREATE TABLE `categorie_capteurs` (
  `id_categorie_capteur` int(11) NOT NULL,
  `nom_categorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `unite` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Structure de la table `donnees`
--

CREATE TABLE `donnees` (
  `Type` varchar(125) NOT NULL,
  `Historique` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `donnees`
INSERT INTO `donnees` (`Type`, `Historique`) VALUES
('Celsius', '2017-05-10'),
('%', '2017-02-15'),
('%', '2017-04-25'),
('Celsius', '2017-03-27');


-- --------------------------------------------------------

--
-- Structure de la table `effecteur`
--

CREATE TABLE `effecteur` (
  `Référence` varchar(100) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Statut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `effecteur`
--

INSERT INTO `effecteur` (`Référence`, `Type`, `Statut`) VALUES
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

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `id_maison`      INT(11) NOT NULL,
  `nom`            VARCHAR(100)
                   COLLATE utf8_bin NOT NULL,
  `adresse`        VARCHAR(255)
                   COLLATE utf8_bin NOT NULL,
  `code_postal`    VARCHAR(255)
                   COLLATE utf8_bin NOT NULL,
  `ville`          VARCHAR(255)
                   COLLATE utf8_bin NOT NULL,
  `id_utilisateur` INT(11)          NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `maison` (id_maison, nom, adresse, code_postal, ville, id_utilisateur) VALUES
(1,'Wayne','Paris','128 Avenue du Maine ', '75014',''),
(2,'Poppins','Paris', '48 Rue du Montparnasse', '75014',''),
(3,'Cartier','Paris', '29 Rue Victor Hugo', '75015','');


--
-- création dela connexion entre maison et administrateur
--

CREATE TABLE `corresp_admin_maison` (
  `id_maison` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;


--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `id_piece` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `etage` int(5) NOT NULL,
  `id_maison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `piece` (id_piece, nom, etage ,id_maison) VALUES
(1,'Chambre1',1,''),
(2,'Chambre2',1,''),
(3,'Chambre3',1,''),
(4,'Cuisine',0,''),
(5,'Salle de bain',2,''),
(6,'Toilette',2,''),
(7,'Toilette2',1,'');
-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mdp` varchar(25) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `id_utilisateur` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_administrateur` TINYINT(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Liste des differents utilisateurs
--

INSERT INTO `utilisateur` (id,Email, Mdp, Nom, Prenom,id_utilisateur,id_administrateur) VALUES
(1,'marie.poppins@gmail.com', 123456789, 'Poppins', 'Marie', '',''),
(2,'jacque.cartier@gmail.com', 987654321, 'Cartier', 'Jacques', '',''),
(3,'bruce.wayne@gmail.com', 9876543210, 'Wayne', 'Bruce', '','');


--
-- Connexion entre les différentes tables
--

-- Index Capteur
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`num_serie`),
  ADD KEY `id_piece` (`id_piece`),
  ADD KEY `id_categorie` (`id_categorie`);

-- Index categorie capteur
ALTER TABLE `categorie_capteurs`
    ADD PRIMARY KEY (`id_categorie_capteur`);

-- Index correspondance damin maison
ALTER TABLE `corresp_admin_maison`
  ADD KEY `id_maison` (`id_maison`),
  ADD KEY `id_admin` (`id_admin`);

-- Index maison
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id_maison`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

-- Index pieces
ALTER TABLE `piece`
  ADD PRIMARY KEY (`id_piece`),
  ADD KEY `id_maison` (`id_maison`);

-- Index Utilisateur
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Auto - incrémentation par l'ordinateur pour choisir des numéros au hasard
--

-- AUTO_INCREMENT pour categorie
ALTER TABLE `categorie_capteurs`
  MODIFY `id_categorie_capteur` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT pour la table `utilisateur`
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


-- Contraintes pour la table `capteur`
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_1` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id_piece`),
  ADD CONSTRAINT `capteur_2` FOREIGN KEY (`id_categorie`) REFERENCES `categorie_capteurs` (`id_categorie_capteur`);

-- Contraintes pour la table `corresp_admin_maison`
ALTER TABLE `corresp_admin_maison`
  ADD CONSTRAINT `corresp_admin_maison_1` FOREIGN KEY (`id_maison`) REFERENCES `maison` (`id_maison`),
  ADD CONSTRAINT `corresp_admin_maison_2` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_maison`);

-- Contraintes pour la table `maison`
ALTER TABLE `maison`
  ADD CONSTRAINT `maison_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

-- Contraintes pour la table `piece`
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_1` FOREIGN KEY (`id_maison`) REFERENCES `maison` (`id_maison`);




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
