-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 16 juin 2020 à 12:48
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `commande-produit`
--
CREATE DATABASE `commande_produit`;

USE `commande_produit`;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `adresse`, `ville`) VALUES
(1, 'dupontel', 'bernard', 'rue du bas', 'flichcourt'),
(2, 'gates', 'bill', 'rue du haut', 'amiens'),
(3, 'apple', 'alfred', 'rue du milieu', 'abbeville'),
(4, 'bb', 'raoul', 'rue du bas', 'dreuil'),
(5, 'dupontel', 'jacques', 'rue du bas', 'paris');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) DEFAULT NULL,
  `date_commande` datetime DEFAULT CURRENT_TIMESTAMP,
  `remise` int(11) NOT NULL,
  `total` decimal(9,2) DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `id_client`, `date_commande`, `remise`, `total`) VALUES
(1, 2, '2018-09-01 00:00:00', 50, '100.00'),
(2, 1, '2018-09-01 00:00:00', 10, '0.00'),
(3, 2, '2018-09-01 00:00:00', 10, '50.00');

-- --------------------------------------------------------

--
-- Structure de la table `lignedecommande`
--

DROP TABLE IF EXISTS `lignedecommande`;
CREATE TABLE IF NOT EXISTS `lignedecommande` (
  `id_commande` int(11) DEFAULT NULL,
  `id_produit` int(11) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `prix` decimal(9,2) DEFAULT NULL,
  KEY `id_commande` (`id_commande`),
  KEY `id_produit` (`id_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lignedecommande`
--

INSERT INTO `lignedecommande` (`id_commande`, `id_produit`, `quantite`, `prix`) VALUES
(2, 3, 2, '10.00'),
(2, 2, 2, '10.00'),
(2, 1, 2, '10.00'),
(2, 5, 2, '10.00'),
(2, 4, 2, '10.00'),
(1, 3, 2, '10.00'),
(1, 2, 2, '10.00'),
(1, 1, 2, '10.00'),
(3, 3, 2, '10.00'),
(3, 2, 2, '10.00'),
(3, 2, 2, '10.00');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(30) DEFAULT NULL,
  `prix_achat` decimal(9,2) NOT NULL,
  `prix_vente` decimal(9,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `designation`, `prix_achat`, `prix_vente`) VALUES
(1, 'Lot de 10', '34.00', '340.00'),
(2, 'Lot de 40', '34.00', '68.00'),
(3, 'Gazon', '364.00', '700.00'),
(4, 'Lot de 1', '200.00', '600.00'),
(5, 'Lot de 0', '1.00', '2.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
