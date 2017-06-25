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


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pesimod`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `id_utilisateur` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

CREATE TABLE `calendrier` (
  `Date` date NOT NULL,
  `Début` time NOT NULL,
  `Fin` time NOT NULL,
  `Statut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `num_serie` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_piece` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `capteur`
--

INSERT INTO `capteur` (`num_serie`, `nom`, `id_piece`, `id_categorie`, `id_utilisateur`) VALUES
('DS18B20', 'Temperature', 1, 0, 1),
('YG - A1', 'Fumee', 1, 0, 1),
('DHT-11', 'Humidite', 2, 0, 1),
('Photoresistor Relay Module', 'Luminosite', 2, 0, 1),
('DS18B20', 'Temperature', 2, 0, 2),
('DS18B20', 'Temperature', 3, 0, 3),
('YG - A1', 'Fumee', 3, 0, 2),
('YG - A1', 'Fumee', 2, 0, 3),
('DHT-11', 'Humidite', 1, 0, 2),
('DHT-11', 'Humidite', 1, 0, 3),
('Photoresistor Relay Module', 'Luminosite', 2, 0, 2),
('Photoresistor Relay Module', 'Luminosite', 3, 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `categorie_capteurs`
--

CREATE TABLE `categorie_capteurs` (
  `id` int(11) NOT NULL,
  `nom_categorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `unite` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `corresp_admin_maison`
--

CREATE TABLE `corresp_admin_maison` (
  `id_maison` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

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
  `Statut` tinyint(1) NOT NULL,
  `id_piece` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `effecteur`
--

INSERT INTO `effecteur` (`Référence`, `Type`, `Statut`, `id_piece`, `id_utilisateur`) VALUES
('DS020', 'Lumiere', 1, 0, 1),
('DS020', 'Lumiere', 1, 0, 2),
('DS020', 'Lumiere', 1, 0, 3),
('DS020', 'Lumiere', 1, 0, 1),
('DS020', 'Lumiere', 1, 0, 2),
('DS020', 'Lumiere', 1, 0, 3),
('DS020', 'Lumiere', 1, 0, 2),
('DS450', 'Volet', 1, 0, 3),
('DS450', 'Volet', 1, 0, 1),
('DS450', 'Volet', 1, 0, 1),
('DS450', 'Volet', 1, 0, 2),
('DS450', 'Volet', 1, 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `code_postal` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ville` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `etage` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `maison`
--

INSERT INTO `maison` (`id`, `nom`, `adresse`, `code_postal`, `ville`, `etage`, `id_utilisateur`) VALUES
(1, 'Wayne', 'Paris', '128 Avenue du Maine ', '75014', 1, 1),
(2, 'Poppins', 'Paris', '48 Rue du Montparnasse', '75014', 2, 2),
(3, 'Cartier', 'Paris', '29 Rue Victor Hugo', '75015', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `etage` int(5) NOT NULL,
  `id_maison` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `piece`
--

INSERT INTO `piece` (`id`, `nom`, `etage`, `id_maison`, `id_utilisateur`) VALUES
(1, 'Chambre', 1, 1, 1),
(2, 'Chambre2', 1, 1, 1),
(3, 'Chambre3', 1, 1, 1),
(4, 'Chambre', 1, 2, 2),
(5, 'Chambre', 1, 3, 3),
(6, 'Cuisine', 0, 1, 1),
(7, 'Cuisine', 0, 2, 2),
(8, 'Cuisine', 0, 3, 3),
(9, 'Salle de bain', 2, 1, 1),
(10, 'Salle de bain', 2, 2, 2),
(11, 'Salle de bain2', 2, 2, 2),
(12, 'Salle de bain', 2, 2, 3),
(13, 'Toilette', 2, 1, 1),
(14, 'Toilette', 1, 3, 2),
(15, 'Toilette', 1, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Email`, `Mdp`, `Nom`, `Prenom`) VALUES
(1, 'marie.poppins@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Poppins', 'Marie'),
(2, 'jacque.cartier@gmail.com', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', 'Cartier', 'Jacques'),
(3, 'bruce.wayne@gmail.com', '9cd656169600157ec17231dcf0613c94932efcdc', 'Wayne', 'Bruce');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie_capteurs`
--
ALTER TABLE `categorie_capteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie_capteurs`
--
ALTER TABLE `categorie_capteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
