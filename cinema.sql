-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 29 Octobre 2015 à 18:33
-- Version du serveur: 5.5.46-0ubuntu0.14.04.2
-- Version de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `movies`
--

-- --------------------------------------------------------

--
-- Structure de la table `cinema`
--

CREATE TABLE IF NOT EXISTS `cinema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` longtext COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `cinema`
--

INSERT INTO `cinema` (`id`, `nom`, `adresse`, `lat`, `lng`, `lien`, `name`) VALUES
(1, 'Cinéma Le Rex', '26 pl 11 Août, 28400 NOGENT LE ROTROU', '48.322639', '0.818083', 'cine/1', 'cine_lerex'),
(2, 'Cinéma Les Enfants du Paradis', '11 pl Porte St Michel, 28000 CHARTRES', '48.442194', '1.489047', 'cine/2', '0'),
(3, 'Cinéma Normandie', '6 r Desire Roussel, 28260 ANET', '48.857349', '1.439172', 'cine/3', '0'),
(5, 'CINECENTRE SNCD (SARL)', '5 pl Champ de Foire, 28100 DREUX', '48.731456', '1.360632', 'cine/5', '0'),
(6, 'Cinéma L''Ambiance', '10 r Flandres Dunkerque, 28250 SENONCHES', '48.561630', '1.032991', 'cine/6', '0'),
(7, 'Cinéma Le Dunois', '24 r Lambert Licors, 28200 CHATEAUDUN', '48.071218', '1.331588', 'cine/7', '0'),
(8, 'Les Prairiales', 'Avenue de la Prairie 28230 EPERNON', '48.604807', '1.675288', 'cine/8', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;