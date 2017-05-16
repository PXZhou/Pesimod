-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 16 Mai 2017 à 09:25
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `espace client`
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
--

INSERT INTO `donnees` (`Type`, `Historique`) VALUES
('Celsius', '2017-05-02'),
('%', '0000-00-00'),
('%', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `effecteur`
--

CREATE TABLE `effecteur` (
  `Référence` varchar(100) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Statut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `Nom` varchar(20) NOT NULL,
  `Taille` int(11) NOT NULL,
  `Type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Email` varchar(50) NOT NULL,
  `Mot de passe` varchar(25) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
