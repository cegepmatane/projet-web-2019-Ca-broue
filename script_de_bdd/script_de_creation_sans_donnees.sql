-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 11 fév. 2019 à 03:53
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cabroue`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `id_goodie` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `prix_achat` double NOT NULL,
  `date_achat` datetime NOT NULL,
  PRIMARY KEY (`id_goodie`,`id_utilisateur`,`date_achat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_goodie`
--

DROP TABLE IF EXISTS `categorie_goodie`;
CREATE TABLE IF NOT EXISTS `categorie_goodie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_fr` text NOT NULL,
  `libelle_en` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `goodie`
--

DROP TABLE IF EXISTS `goodie`;
CREATE TABLE IF NOT EXISTS `goodie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fr` text NOT NULL,
  `nom_en` text NOT NULL,
  `description_fr` text NOT NULL,
  `description_en` text NOT NULL,
  `prix` double NOT NULL,
  `description_longue_fr` text NOT NULL,
  `description_longue_en` text NOT NULL,
  `id_categorie_goodie` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categorie_goodie` (`id_categorie_goodie`,`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` text,
  `nom` text,
  `telephone` text,
  `mail` text,
  `mot_passe` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
