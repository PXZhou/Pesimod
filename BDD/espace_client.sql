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
  `Référence` varchar(50) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Données` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `capteur`
--

INSERT INTO `capteur` (`Référence`, `Type`, `Données`) VALUES
('DS18B20', 'Temperature', 22),
('YG - A1', 'Fumee', 30),
('DHT-11', 'Humidite', 25),
('Photoresistor Relay Module', 'Luminosite', 80),
('DS18B20', 'Temperature', 17),
('DS18B20', 'Temperature', 23),
('YG - A1', 'Fumee', 40),
('YG - A1', 'Fumee', 33),
('DHT-11', 'Humidite', 60),
('DHT-11', 'Humidite', 90),
('Photoresistor Relay Module', 'Luminosite', 22),
('Photoresistor Relay Module', 'Luminosite', 50);

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
  `Numéro` int(11) NOT NULL,
  `Rue` varchar(100) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `Etage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `maison` (Numéro, Rue, Ville, Etage) VALUES
(128, 'Avenue du Maine', 'PARIS-75014', 6),
(48, 'Rue du Montparnasse', 'PARIS-75014', 1),
(29, 'Rue Victor Hugo', 'Paris-75015', 3);

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `Nom` varchar(20) NOT NULL,
  `Taille` int(11) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Nombre_temp` int(11) NOT NULL,
  `Nombre_ca` int(11) NOT NULL,
  `Nombre_ch` int(11) NOT NULL,
  `Nombre_presence` int(11) NOT NULL,
  `Nombre_fumée` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `piece` (Nom, Taille, Type, Nombre_temp, Nombre_ca, Nombre_ch, Nombre_presence, Nombre_fumée) VALUES
('Chambre1', 12, 'Chambre', 1, 1, 0, 1, 1),
('Chambre2', 13, 'Chambre', 1, 0, 0, 2, 0),
('Chambre3', 15, 'Chambre', 1, 2, 0, 1, 1),
('Cuisine', 6, 'Cuisine', 0, 0, 1, 1, 0),
('Salle de bain', 7, 'Salle de bain', 0, 0, 1, 0, 1),
('Toilette', 15, 'Toilette', 0, 0, 1, 1, 1),
('Toilette2', 4, 'Toilette', 0, 0, 1, 0, 0);
-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Email` varchar(50) NOT NULL,
  `Mdp` varchar(25) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `utilisateur` (Email, Mdp, Nom, Prenom, Admin) VALUES
('marie.poppins@gmail.com', 123456789, 'Poppins', 'Marie', 1),
('Jacque.cartier@gmail.com', 987654321, 'Cartier', 'Jacques', 1),
('bruce.wayne@gmail.com', 9876543210, 'Wayne', 'Bruce', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
