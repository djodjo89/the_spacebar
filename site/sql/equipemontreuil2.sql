-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 24 mai 2019 à 19:50
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `equipemontreuil2`
--

-- --------------------------------------------------------

--
-- Structure de la table `cafe`
--

DROP TABLE IF EXISTS `cafe`;
CREATE TABLE IF NOT EXISTS `cafe` (
  `typeCafe` tinyint(1) NOT NULL,
  `provenance` varchar(32) NOT NULL,
  `quantiteStock` int(11) NOT NULL,
  PRIMARY KEY (`provenance`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `noCommande` int(11) NOT NULL,
  `typeCafe` tinyint(1) NOT NULL,
  `pays` varchar(32) NOT NULL,
  `quantiteCafe` int(11) NOT NULL,
  `idUtilisateur` varchar(32) NOT NULL,
  `dateCommande` date NOT NULL,
  PRIMARY KEY (`noCommande`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `nomPays` varchar(32) NOT NULL,
  `capitale` varchar(32) NOT NULL,
  `nbHabitant` int(4) NOT NULL,
  `surfacePays` int(4) NOT NULL,
  `quantiteCafeRobusta` int(4) NOT NULL,
  `quantiteCafeArabica` int(4) NOT NULL,
  `lienImage` varchar(500) NOT NULL,
  PRIMARY KEY (`nomPays`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`nomPays`, `capitale`, `nbHabitant`, `surfacePays`, `quantiteCafeRobusta`, `quantiteCafeArabica`, `lienImage`) VALUES
('Brésil', 'Brasilia', 2964, 500, 38, 14, 'bresil.png'),
('Vietnam', 'Hanoi', 1461, 500, 1, 22, 'vietnam.png'),
('chine', 'pekin', 500, 500, 10, 10, 'chine.png'),
('colombie', 'bogota', 500, 500, 10, 10, 'colombie.png'),
('costarica', 'san jose', 500, 500, 10, 10, 'costarica.png'),
('ethiopie', 'addis abeba', 500, 500, 10, 10, 'ethiopie.png'),
('guatemala', 'guatemala', 500, 500, 10, 10, 'guatemala.png'),
('honduras', 'Tegucigalpa', 500, 500, 10, 10, 'honduras.png'),
('inde', 'new dehli', 500, 500, 10, 10, 'inde.png'),
('indonesie', 'jakarta', 500, 500, 10, 10, 'indonesie.png'),
('laos', 'Vientiane', 500, 500, 10, 10, 'laos.png'),
('madagascar', 'Tananarive', 500, 500, 10, 10, 'madagascar.png'),
('mexique', 'mexico', 500, 500, 10, 10, 'mexique.png'),
('nicaragua', 'managua', 500, 500, 10, 10, 'nicaragua.png'),
('ouganda', 'kampala', 500, 500, 10, 10, 'ouganda.png'),
('perou', 'lima', 500, 500, 10, 10, 'perou.png'),
('philipines', 'manille', 500, 500, 10, 10, 'philipines.png'),
('tanzanie', 'dodoma', 500, 500, 10, 10, 'tanzanie.png'),
('venezuela', 'caracas', 500, 500, 10, 10, 'venezuela.png');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `login` varchar(32) NOT NULL,
  `etreExportateur` tinyint(1) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nomEntreprise` varchar(32) NOT NULL,
  `adresse` varchar(32) NOT NULL,
  `numero` varchar(32) NOT NULL,
  `pays` varchar(32) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
