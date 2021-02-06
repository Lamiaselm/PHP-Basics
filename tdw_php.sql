-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 06 fév. 2021 à 21:31
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.2.26

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

CREATE TABLE `formation` (
  `Id_formation` int(11) NOT NULL,
  `Id_type_formation` int(11) NOT NULL,
  `Nom_formation` varchar(30) COLLATE ascii_bin NOT NULL,
  `volume` int(11) NOT NULL,
  `tarif` int(11) NOT NULL,
  `taxe` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`Id_formation`, `Id_type_formation`, `Nom_formation`, `volume`, `tarif`, `taxe`) VALUES
(1, 1, 'MS Word', 20, 30, 400),
(3, 1, 'Latex', 30, 544, 30),
(4, 2, 'Power', 20, 21, 90),
(5, 2, 'Photoshop', 97, 30, 100),
(6, 2, 'Illustrator', 20, 33, 666),
(49, 3, 'Turque', 60, 221, 20),
(10, 4, 'Management', 55, 22, 30),
(12, 5, 'Finance', 80, 30, 333),
(50, 4, 'JavaFX', 60, 660, 20);

-- --------------------------------------------------------

--
-- Structure de la table `type_formation`
--

CREATE TABLE `type_formation` (
  `Id_type_formation` int(11) NOT NULL,
  `Nom_type_formation` varchar(30) COLLATE ascii_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Déchargement des données de la table `type_formation`
--

INSERT INTO `type_formation` (`Id_type_formation`, `Nom_type_formation`) VALUES
(1, 'Bureautique'),
(2, 'Infographie'),
(3, 'Langue'),
(4, 'Management'),
(5, 'Comptabilite'),
(17, 'java'),
(18, 'Devloppement'),
(19, 'java');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(20) COLLATE ascii_bin NOT NULL,
  `hash_pwd` varchar(1024) COLLATE ascii_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `name_user`, `hash_pwd`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`Id_formation`);

--
-- Index pour la table `type_formation`
--
ALTER TABLE `type_formation`
  ADD PRIMARY KEY (`Id_type_formation`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `name_user` (`name_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `Id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `type_formation`
--
ALTER TABLE `type_formation`
  MODIFY `Id_type_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
