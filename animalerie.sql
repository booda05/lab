-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 02 Août 2021 à 23:09
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `animalerie`
--
CREATE DATABASE IF NOT EXISTS `animalerie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `animalerie`;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCli` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idCli` (`idCli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id`, `idCli`, `nom`, `qte`) VALUES
(1, 3, 'Arbre a chat Josefa', 1),
(3, 3, 'Croquette Whiskas 1.4 Kg Poule', 1),
(4, 3, 'Croquette Whiskas 1.4 Kg Poule', 6),
(5, 3, 'Cage de transport italienne po', 4),
(6, 3, 'Tunnel Carotte', 5),
(7, 4, 'Maisonette pour rongeur', 2),
(8, 4, 'Tunnel Carotte', 1),
(9, 4, 'Croquette Whiskas 1.4 Kg Poulet', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `mdp`) VALUES
(3, 'amine', 'a@gmail.com', 'a'),
(4, 'chemsou', 'c@gmail.com', 'a');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`idCli`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
