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
  `mdpAdherent` varchar(50) NOT NULL,
  `paiementAdherent` int(11) NOT NULL,
  `isAdmin` int(11) NOT NULL,
  PRIMARY KEY (`idAdherent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table aphb. championnats
CREATE TABLE IF NOT EXISTS `championnats` (
  `idChampionnat` int(11) NOT NULL AUTO_INCREMENT,
  `typeChampionnat` int(11) NOT NULL,
  `resultatChampionnat` varchar(50) DEFAULT NULL,
  `clubDomicile` varchar(50) DEFAULT NULL,
  `clubExterieur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idChampionnat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table aphb. participer
CREATE TABLE IF NOT EXISTS `participer` (
  `idAdherent` int(11) NOT NULL,
  `idTournoi` int(11) NOT NULL,
  `partieJoue` int(11) DEFAULT NULL,
  `partieGagne` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAdherent`,`idTournoi`),
  KEY `idTournoi` (`idTournoi`),
  CONSTRAINT `participer_ibfk_1` FOREIGN KEY (`idAdherent`) REFERENCES `adherents` (`idAdherent`),
  CONSTRAINT `participer_ibfk_2` FOREIGN KEY (`idTournoi`) REFERENCES `tournois` (`idTournoi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table aphb. tournois
CREATE TABLE IF NOT EXISTS `tournois` (
  `idTournoi` int(11) NOT NULL AUTO_INCREMENT,
  `typeTournoi` varchar(50) DEFAULT NULL,
  `nombrePartieTournoi` int(11) DEFAULT NULL,
  `idChampionnat` int(11) NOT NULL,
  PRIMARY KEY (`idTournoi`),
  KEY `idChampionnat` (`idChampionnat`),
  CONSTRAINT `tournois_ibfk_1` FOREIGN KEY (`idChampionnat`) REFERENCES `championnats` (`idChampionnat`)

-- Les données exportées n'étaient pas sélectionnées.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
