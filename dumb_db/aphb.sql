-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour aphb
CREATE DATABASE IF NOT EXISTS `aphb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `aphb`;

-- Listage de la structure de la table aphb. adherents
CREATE TABLE IF NOT EXISTS `adherents` (
  `idAdherent` int(11) NOT NULL AUTO_INCREMENT,
  `nomAdherent` varchar(50) NOT NULL,
  `prenomAdherent` varchar(50) NOT NULL,
  `telephoneAdherent` varchar(50) DEFAULT NULL,
  `mailAdherent` varchar(50) DEFAULT NULL,
  `mdpAdherent` varchar(1000) NOT NULL,
  `paiementAdherent` int(11) NOT NULL,
  `isAdmin` int(11) NOT NULL,
  PRIMARY KEY (`idAdherent`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table aphb. tournois
CREATE TABLE IF NOT EXISTS `tournois` (
  `idTournoi` int(11) NOT NULL AUTO_INCREMENT,
  `typeTournoi` varchar(50) DEFAULT NULL,
  `dateTournoi` date DEFAULT NULL,
  `srcTournoi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTournoi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
