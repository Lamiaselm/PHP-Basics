-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 27 jan. 2021 à 18:18
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
-- Base de données :  `tdw_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `Id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `Id_type_formation` int(11) NOT NULL,
  `Nom_formation` varchar(30) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`Id_formation`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`Id_formation`, `Id_type_formation`, `Nom_formation`) VALUES
(1, 1, 'MS Word'),
(2, 1, 'Excel'),
(3, 1, 'Latex'),
(4, 2, 'Power point'),
(5, 2, 'Photoshop'),
(6, 2, 'Illustrator'),
(7, 3, 'Anglais'),
(8, 3, 'Turque'),
(9, 3, 'Chinois'),
(10, 4, 'Management'),
(11, 4, 'Management qualite'),
(12, 5, 'Finance'),
(13, 5, 'gestion et droit');

-- --------------------------------------------------------

--
-- Structure de la table `type_formation`
--

DROP TABLE IF EXISTS `type_formation`;
CREATE TABLE IF NOT EXISTS `type_formation` (
  `Id_type_formation` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_type_formation` varchar(30) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`Id_type_formation`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Déchargement des données de la table `type_formation`
--

INSERT INTO `type_formation` (`Id_type_formation`, `Nom_type_formation`) VALUES
(1, 'Bureautique'),
(2, 'Infographie'),
(3, 'Langue'),
(4, 'Management'),
(5, 'Comptabilite');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(20) COLLATE ascii_bin NOT NULL,
  `hash_pwd` varchar(1024) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `name_user` (`name_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `name_user`, `hash_pwd`) VALUES
(1, 'Admin', 'Password');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
