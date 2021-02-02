-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 27 sep. 2018 à 13:52
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
-- Base de données :  `sites`
--

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

DROP TABLE IF EXISTS `liens`;
CREATE TABLE IF NOT EXISTS `liens` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(128) NOT NULL,
  `webmaster` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(128) NOT NULL,
  `theme` enum('actualité','musique','sport','sciences','cinéma','divers') NOT NULL,
  `date` date NOT NULL,
  `affichage` enum('oui','non') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liens`
--

INSERT INTO `liens` (`id`, `titre`, `webmaster`, `description`, `url`, `theme`, `date`, `affichage`) VALUES
(1, 'Développeur Logiciel', 'damien.bin@afpa.fr', 'Site développé par les stagiaires DL du centre de Caen/Ifs dans le cadre de leur formation.', 'http://dl.afpa.unicaen.fr/dl05', 'actualité', '2011-05-03', 'oui'),
(2, 'ugc', 'inconnu', 'site sur le cinéma en salles UGC', 'www.ugc.fr', 'cinéma', '2011-05-03', 'oui'),
(10, 'Tout JavaScript', 'Olivier Hondermarck', 'Le javascript.', 'http://www.toutjavascript.com', 'actualité', '2009-04-21', 'oui'),
(11, 'php.net', 'php group', 'Site en français dédié à php', 'http://fr.php.net', 'divers', '2009-02-12', 'oui'),
(12, 'TV online', 'youWebTV', 'Télévision et radio sur le web', 'http://www.youweb.tv/fr/tvonline/web-tv.html', 'actualité', '2009-03-27', 'oui'),
(13, 'France 24', 'webdesk@france24.com', 'Actualité Internationale 24h/24', 'http://www.france24.com', 'actualité', '2009-04-01', 'oui'),
(14, 'L\'équipe', 'webmaster@lequipe.fr', 'Tout le sport...', 'http://www.lequipe.fr/', '', '2009-04-09', 'oui'),
(15, 'Météofrance', 'webmaster@meteofrance.fr', 'Le site de la météo nationale.', 'http://france.meteofrance.com/', 'actualité', '2009-04-19', 'oui'),
(16, 'Concepteurs Développeurs de sites internet', 'tsig.cdmia@afpa.unicaen.fr', 'Site développé par les stagiaires CDSI 5 du centre de Caen / Ifs dans le cadre de leur formation.', 'http://cdsi@afpa.unicaen.fr', 'actualité', '2009-04-20', 'oui'),
(17, 'L\'artiste', 'webmaster@ultime.fr', 'musique', 'www.ultime.fr', 'actualité', '2009-04-24', 'oui'),
(18, 'L\'art de la table', 'webmaster@artTable.fr', 'miam', 'www.artTable.fr', 'actualité', '2009-04-24', 'oui'),
(19, 'L\'écho \"noir\"', 'webmaster@echoNoir.fr', 'test', 'www.echoNoir.fr', 'actualité', '2009-04-24', 'oui'),
(20, 'PHP Sources', '@@phpsources', 'Sources et tutoriels PHP', 'www.phpsources.org', 'actualité', '2009-04-24', 'oui'),
(21, 'xhtml.le-developpeur-web', 'webmaster@xhtml', 'Site sur xhtml', 'http://xhtml.le-developpeur-web.com', 'actualité', '2009-04-24', 'oui'),
(22, 'PHP.Net france', 'php-webmaster@lists.php.net', 'Site référence PHP.', 'http://fr.php.net', 'actualité', '2009-04-24', 'oui'),
(23, 'expreg.com', 'ADAM Benjamin', 'Site sur l\'utilisation des expressions régulières en PHP.', 'http://www.expreg.com/ereg.php', 'sciences', '2009-04-24', 'oui'),
(24, 'Le modèle MVC pour PHP par serge TAHE', 'serge TAHE', 'Explication et exemple d\'architecture MVC pour PHP.', 'http://tahe.developpez.com/web/php/mvc/', 'sciences', '2009-04-24', 'oui'),
(25, 'Site de MySQL', 'Sun microsystem', 'Site de SUN sur MySQL.', 'http://dev.mysql.com', 'actualité', '2009-04-24', 'oui'),
(26, 'test1807', 'zzertzetr', 'trty', 'trryeyr', 'actualité', '2018-07-18', 'oui'),
(27, 'test2 1807', 'zzertzetr', 'ghghtgfyu', 'www.toto.com', 'musique', '2018-07-18', 'non');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
