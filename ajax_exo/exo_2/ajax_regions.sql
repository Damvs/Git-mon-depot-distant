-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 27 sep. 2018 à 12:48
-- Version du serveur :  5.7.21-log
-- Version de PHP :  7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ajax_regions`
--

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

DROP TABLE IF EXISTS `departements`;
CREATE TABLE IF NOT EXISTS `departements` (
  `dep_id` char(3) NOT NULL,
  `dep_nom` varchar(100) NOT NULL,
  `dep_reg_id` tinyint(2) UNSIGNED NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table des départements français';

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`dep_id`, `dep_nom`, `dep_reg_id`) VALUES
('01', 'Ain', 1),
('02', 'Aisne', 7),
('03', 'Allier', 1),
('04', 'Alpes-de-Haute-Provence', 13),
('05', 'Hautes-Alpes', 13),
('06', 'Alpes-Maritimes', 13),
('07', 'Ardèche', 1),
('08', 'Ardennes', 6),
('09', 'Ariège', 11),
('10', 'Aube', 6),
('11', 'Aude', 11),
('12', 'Aveyron', 11),
('13', 'Bouches-du-Rhône', 13),
('14', 'Calvados', 9),
('15', 'Cantal', 1),
('16', 'Charente', 10),
('17', 'Charente-Maritime', 10),
('18', 'Cher', 4),
('19', 'Corrèze', 10),
('21', 'Côte-d\'Or', 2),
('22', 'Côtes-d\'Armor', 3),
('23', 'Creuse', 10),
('24', 'Dordogne', 10),
('25', 'Doubs', 2),
('26', 'Drôme', 1),
('27', 'Eure', 9),
('28', 'Eure-et-Loir', 4),
('29', 'Finistère', 3),
('2A', 'Corse-du-Sud', 5),
('2B', 'Haute-Corse ', 5),
('30', 'Gard', 11),
('31', 'Haute-Garonne', 11),
('32', 'Gers', 11),
('33', 'Gironde', 10),
('34', 'Hérault', 11),
('35', 'Ille-et-Vilaine', 3),
('36', 'Indre', 4),
('37', 'Indre-et-Loire', 4),
('38', 'Isère', 1),
('39', 'Jura', 2),
('40', 'Landes', 10),
('41', 'Loir-et-Cher', 4),
('42', 'Loire', 1),
('43', 'Haute-Loire', 1),
('44', 'Loire-Atlantique', 12),
('45', 'Loiret', 4),
('46', 'Lot', 11),
('47', 'Lot-et-Garonne', 10),
('48', 'Lozère', 11),
('49', 'Maine-et-Loire', 12),
('50', 'Manche', 9),
('51', 'Marne', 6),
('52', 'Haute-Marne', 6),
('53', 'Mayenne', 12),
('54', 'Meurthe-et-Moselle', 6),
('55', 'Meuse', 6),
('56', 'Morbihan', 3),
('57', 'Moselle', 6),
('58', 'Nièvre', 2),
('59', 'Nord', 7),
('60', 'Oise', 7),
('61', 'Orne', 9),
('62', 'Pas-de-Calais', 7),
('63', 'Puy-de-Dôme', 1),
('64', 'Pyrénées-Atlantiques', 10),
('65', 'Hautes-Pyrénées', 11),
('66', 'Pyrénées-Orientales', 11),
('67', 'Bas-Rhin', 6),
('68', 'Haut-Rhin', 6),
('69', 'Rhône', 1),
('70', 'Haute-Saône', 2),
('71', 'Saône-et-Loire', 2),
('72', 'Sarthe', 12),
('73', 'Savoie', 1),
('74', 'Haute-Savoie', 1),
('75', 'Paris', 8),
('76', 'Seine-Maritime', 9),
('77', 'Seine-et-Marne', 8),
('78', 'Yvelines', 8),
('79', 'Deux-Sèvres', 10),
('80', 'Somme', 7),
('81', 'Tarn', 11),
('82', 'Tarn-et-Garonne', 11),
('83', 'Var', 13),
('84', 'Vaucluse', 13),
('85', 'Vendée', 12),
('86', 'Vienne', 10),
('87', 'Haute-Vienne', 10),
('88', 'Vosges', 6),
('89', 'Yonne', 2),
('90', 'Territoire de Belfort', 2),
('91', 'Essonne', 8),
('92', 'Hauts-de-Seine', 8),
('93', 'Seine-Saint-Denis', 8),
('94', 'Val-de-Marne', 8),
('95', 'Val-d\'Oise', 8),
('971', 'Guadeloupe', 14),
('972', 'Martinique', 14),
('973', 'Guyane', 14),
('974', 'La Réunion', 14),
('975', 'Saint-Pierre-et-Miquelon', 14),
('976', 'Mayotte', 23),
('977', 'Saint-Barthélemy	', 14),
('978', 'Saint-Martin	', 14),
('984', 'Terres australes et antarctiques françaises', 14),
('986', 'Wallis-et-Futuna', 14),
('987', 'Polynésie française', 14),
('988', 'Nouvelle-Calédonie', 14),
('989', 'Clipperton', 14);

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

DROP TABLE IF EXISTS `regions`;
CREATE TABLE IF NOT EXISTS `regions` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_v_nom` varchar(50) NOT NULL,
  `reg_nb_dep` tinyint(2) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`reg_id`, `reg_v_nom`, `reg_nb_dep`) VALUES
(1, 'Auvergne-Rhône-Alpes', 12),
(2, 'Bourgogne-Franche-Comté', 8),
(3, 'Bretagne', 4),
(4, 'Centre-Val de Loire', 6),
(5, 'Corse', 2),
(6, 'Grand-Est', 10),
(7, 'Hauts-de-France', 5),
(8, 'Ile-de-France', 8),
(9, 'Normandie', 5),
(10, 'Nouvelle-Aquitaine', 12),
(11, 'Occitanie', 13),
(12, 'Pays de la Loire', 5),
(13, 'Provence-Alpes-Côte d\'Azur', 6),
(14, 'DOM-TOM', 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
