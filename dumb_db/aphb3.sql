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

-- Listage des données de la table aphb.adherents : ~2 rows (environ)
/*!40000 ALTER TABLE `adherents` DISABLE KEYS */;
INSERT INTO `adherents` (`idAdherent`, `nomAdherent`, `prenomAdherent`, `telephoneAdherent`, `mailAdherent`, `mdpAdherent`, `paiementAdherent`, `isAdmin`) VALUES
	(1, 'Djemmaa', 'Walid', NULL, NULL, 'dfdfd', 0, 1),
	(2, 'Chaufournais', 'Loïc', NULL, NULL, 'dsfsfs', 0, 0),
	(3, 'Admin', 'Admin', '0782647706', 'admin@admin.fr', '$2y$10$Z7Ktrbg5pUVM7JywScNzAejD285MO9U1LVV/DpK6j4vDRT6m8yJRG', 1, 1);
/*!40000 ALTER TABLE `adherents` ENABLE KEYS */;

-- Listage de la structure de la table aphb. championnats
CREATE TABLE IF NOT EXISTS `championnats` (
  `idChampionnat` int(11) NOT NULL AUTO_INCREMENT,
  `nomChampionnat` varchar(100) NOT NULL,
  `typeChampionnat` int(11) NOT NULL,
  `resultatChampionnat` varchar(50) DEFAULT NULL,
  `clubDomicile` varchar(50) DEFAULT NULL,
  `clubExterieur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idChampionnat`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Listage des données de la table aphb.championnats : ~4 rows (environ)
/*!40000 ALTER TABLE `championnats` DISABLE KEYS */;
INSERT INTO `championnats` (`idChampionnat`, `nomChampionnat`, `typeChampionnat`, `resultatChampionnat`, `clubDomicile`, `clubExterieur`) VALUES
	(1, 'APHB interne', 1, NULL, NULL, NULL),
	(2, 'Championnat de France', 1, NULL, NULL, NULL),
	(3, 'Test', 1, NULL, NULL, NULL),
	(4, 'Tets', 1, NULL, NULL, NULL),
	(5, 'rgfgf', 1, NULL, NULL, NULL),
	(6, '', 1, NULL, NULL, NULL);
/*!40000 ALTER TABLE `championnats` ENABLE KEYS */;

-- Listage de la structure de la table aphb. participer
CREATE TABLE IF NOT EXISTS `participer` (
  `idAdherent` int(11) NOT NULL,
  `idTournoi` int(11) NOT NULL,
  `partieJoue` int(11) DEFAULT NULL,
  `partieGagne` int(11) DEFAULT NULL,
  `pointGlobal` int(11) DEFAULT NULL,
  `point1` int(11) DEFAULT NULL,
  `point2` int(11) DEFAULT NULL,
  `point3` int(11) DEFAULT NULL,
  `point4` int(11) DEFAULT NULL,
  `pris1` int(11) DEFAULT NULL,
  `pris2` int(11) DEFAULT NULL,
  `pris3` int(11) DEFAULT NULL,
  `pris4` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAdherent`,`idTournoi`),
  KEY `idTournoi` (`idTournoi`),
  CONSTRAINT `participer_ibfk_1` FOREIGN KEY (`idAdherent`) REFERENCES `adherents` (`idAdherent`),
  CONSTRAINT `participer_ibfk_2` FOREIGN KEY (`idTournoi`) REFERENCES `tournois` (`idTournoi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table aphb.participer : ~6 rows (environ)
/*!40000 ALTER TABLE `participer` DISABLE KEYS */;
INSERT INTO `participer` (`idAdherent`, `idTournoi`, `partieJoue`, `partieGagne`, `pointGlobal`, `point1`, `point2`, `point3`, `point4`, `pris1`, `pris2`, `pris3`, `pris4`) VALUES
	(1, 1, 3, 3, 30, 10, 10, 10, NULL, 0, 0, 0, NULL),
	(1, 2, 1, 0, 0, 0, NULL, NULL, NULL, 10, NULL, NULL, NULL),
	(1, 3, 2, 1, 10, 10, 0, NULL, NULL, 0, 10, NULL, NULL),
	(2, 1, 3, 0, 0, 0, 0, 0, NULL, 10, 10, 10, NULL),
	(2, 2, 1, 1, 10, 10, NULL, NULL, NULL, 0, NULL, NULL, NULL),
	(2, 3, 2, 1, 10, 0, 10, NULL, 2, 10, 0, NULL, NULL);
/*!40000 ALTER TABLE `participer` ENABLE KEYS */;

-- Listage de la structure de la table aphb. tournois
CREATE TABLE IF NOT EXISTS `tournois` (
  `idTournoi` int(11) NOT NULL AUTO_INCREMENT,
  `typeTournoi` varchar(50) DEFAULT NULL,
  `dateTournoi` date DEFAULT NULL,
  `idChampionnat` int(11) NOT NULL,
  PRIMARY KEY (`idTournoi`),
  KEY `idChampionnat` (`idChampionnat`),
  CONSTRAINT `tournois_ibfk_1` FOREIGN KEY (`idChampionnat`) REFERENCES `championnats` (`idChampionnat`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Listage des données de la table aphb.tournois : ~5 rows (environ)
/*!40000 ALTER TABLE `tournois` DISABLE KEYS */;
INSERT INTO `tournois` (`idTournoi`, `typeTournoi`, `dateTournoi`, `idChampionnat`) VALUES
	(1, 'doublette', '2021-06-23', 1),
	(2, 'triplette', '2021-06-12', 2),
	(3, 'doublette', '2021-06-28', 1),
	(4, 'tÃªte Ã  tÃªte', '2021-06-06', 4),
	(5, 'doublette', '2021-06-30', 3),
	(6, 'tete a tete', '2021-08-13', 5),
	(7, 'doublette', '2021-08-06', 6);
/*!40000 ALTER TABLE `tournois` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
