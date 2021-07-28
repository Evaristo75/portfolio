-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 28 juil. 2021 à 13:55
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
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `mdp`, `email`) VALUES
(1, 'admin', '$2y$10$N3CDNXYLDiDuqYohmBo6yOyf2roCealrrolVL5D76nnc0P3t/MLze', '');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `mail`, `message`) VALUES
(9, 'Gaeta', 'evaristo_gaeta@yahoo.fr', 'Bonjour, \r\n\r\nJe souhaiterais recevoir des informations....');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `title`, `logo`) VALUES
(4, 'Photo', '775119545photo.png'),
(3, 'Illustrator', '1408017418adobe-illustrator-cc-seeklogo.com.png'),
(5, 'photoshop', '1714840641adobe-photoshop-cc-seeklogo.com.png'),
(6, 'lightroom', '809410119lightroom-rouge.png');

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

DROP TABLE IF EXISTS `works`;
CREATE TABLE IF NOT EXISTS `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `year` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `works`
--

INSERT INTO `works` (`id`, `title`, `category`, `image`, `pdf`, `description`, `year`) VALUES
(50, 'Lightpainting', 'photographies', '748622947Image00007.jpg', NULL, 'Atelier photo : lightpainting', 2017),
(49, 'Atelier photo', 'photographies', '1924278970Image00006.jpg', NULL, 'Atelier photo au centre culturel de Soignies', 2017),
(48, 'Stopmotion', 'animation', '1624495200StopMotion-Evaristo-2020.mp4-snapshot-00.18-2021.07.28-14.38.41-.jpg', NULL, 'Animation stopmotion : interaction d\'un personnage avec un objet du quotidien.\r\nTechniques utilisées : photo image par image/Adobe Premiere', 2020),
(47, 'Projet bière &quot;Kanbi&quot;', 'illustrator', '2089822689mockupkanbi5.png', NULL, 'Mockup capsule &quot;Kanbi&quot;', 2020),
(35, 'Affiche pour le DVD &quot;Libres&quot;', 'pao', '285414786affiche-DVD-Libres.jpg', NULL, 'Réalisation d\'une affiche pour le film-documentaire &quot;Libres&quot;', 2021),
(36, 'Affiche d\'un artiste contemporain', 'pao', '552507104artiste.JPG', NULL, 'Réalisation d\'une affiche d\'un artiste contemporain, Ryuichi Sakamoto.\r\nLa technique utilisée est photoshop.', 2019),
(37, 'Site artiste pour un artiste de la région', 'webdesign', '2015560007mockupweb1.jpg', NULL, 'Réalisation d\'un site pour une artiste peintre.\r\nSite statique. Technologies utilisées : HTML5/CSS3 ', 2019),
(38, 'Publicité sur une fabrique de couleurs organiques/végétales', 'pao', '957059264Image00001.jpg', NULL, 'Réalisation d\'une publicité dans le cadre d\'un magazine sur l\'ART.\r\nPhotographie réalisée par moi même.\r\nTechniques utilisées : indesign/lightroom', 2021),
(39, 'Pochette vinyle', 'pao', '771723580Image00002.jpg', NULL, 'Réalisation d\'une pochette vinyle autour d\'une pochette CD. Création d\'un univers en racontant une histoire autour de la pochette CD du film &quot;Lalaland&quot;', 2019),
(40, 'Photographie d\'un patrimoine de notre région', 'photographies', '1176627601Image00003.jpg', NULL, 'Photographie d\'un patrimoine de notre région : vieux cimetière de Soignies.\r\nLégère retouche via lightroom', 2019),
(41, 'Site pour promouvoir un objet &quot;Le Walkman&quot;', 'webdesign', '1732199562walkman.png', NULL, 'Réalisation d\'une maquette pour un site en ressuscitant l\'age d\'or du walkman.\r\nTechnique utilisée : figma', 2019),
(42, 'Affiche pour la création d\'une bière &quot;Kanbi&quot;', 'pao', '681640781Image00004.jpg', NULL, 'Utilisation d\'un mockup enrouler publicitaire pour abris de bus.', 2020),
(43, 'Maquette pour site internet de jeux video : Assassin\'s Creed Valhalla', 'webdesign', '346430362Image00005.jpg', NULL, 'Maquette figma du jeux Assassin\'s Creed Valhalla\r\n\r\n&lt;a href=&quot;https://www.figma.com/file/MqfITaSEXtfrA9pItsfxkg/Assassin-s-Creed?node-id=0%3A1&quot; target=\'_blank\'&gt;Lien de la maquette&lt;/a&gt;', 2021),
(44, 'Carte de visite dans le projet de la bière &quot;Kanbi&quot;', 'illustrator', '838687709cartevisite-kanbi.JPG', NULL, 'Création de cartes de visites pour &quot;Kanbi&quot;.\r\nTechnique utilisée : illustrator', 2020),
(45, 'Jacquette DVD', 'pao', '1530983447jaquetteDVD.JPG', NULL, 'Création d\'une pochette DVD d\'un film de Steven Spielberg.\r\nTechniques utilisées : photoshop/illustrator', 2019),
(46, 'Logo &quot;Enghien ville propre&quot;', 'illustrator', '934300631logo-ville-Enghien.png', NULL, 'Création d\'un logo pour la ville d\'Enghien sur le thème de &quot;ville propre&quot;.\r\nTechnique utilisée : illustrator', 2021);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
