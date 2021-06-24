/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `aphb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `aphb`;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `adherents` DISABLE KEYS */;
INSERT INTO `adherents` (`idAdherent`, `nomAdherent`, `prenomAdherent`, `telephoneAdherent`, `mailAdherent`, `mdpAdherent`, `paiementAdherent`, `isAdmin`) VALUES
	(1, 'Djemmaa', 'Walid', NULL, NULL, 'dfdfd', 0, 0),
	(2, 'Chaufournais', 'Loïc', NULL, NULL, 'dsfsfs', 0, 0);
/*!40000 ALTER TABLE `adherents` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `championnats` (
  `idChampionnat` int(11) NOT NULL AUTO_INCREMENT,
  `typeChampionnat` int(11) NOT NULL,
  `resultatChampionnat` varchar(50) DEFAULT NULL,
  `clubDomicile` varchar(50) DEFAULT NULL,
  `clubExterieur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idChampionnat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `championnats` DISABLE KEYS */;
INSERT INTO `championnats` (`idChampionnat`, `typeChampionnat`, `resultatChampionnat`, `clubDomicile`, `clubExterieur`) VALUES
	(1, 1, NULL, NULL, NULL),
	(2, 1, NULL, NULL, NULL);
/*!40000 ALTER TABLE `championnats` ENABLE KEYS */;

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

/*!40000 ALTER TABLE `participer` DISABLE KEYS */;
INSERT INTO `participer` (`idAdherent`, `idTournoi`, `partieJoue`, `partieGagne`, `pointGlobal`, `point1`, `point2`, `point3`, `point4`, `pris1`, `pris2`, `pris3`, `pris4`) VALUES
	(1, 1, 3, 3, 30, 10, 10, 10, NULL, 0, 0, 0, NULL),
	(1, 2, 1, 0, 0, 0, NULL, NULL, NULL, 10, NULL, NULL, NULL),
	(1, 3, 2, 1, 10, 10, 0, NULL, NULL, 0, 10, NULL, NULL),
	(2, 1, 3, 0, 0, 0, 0, 0, NULL, 10, 10, 10, NULL),
	(2, 2, 1, 1, 10, 10, NULL, NULL, NULL, 0, NULL, NULL, NULL),
	(2, 3, 2, 1, 10, 0, 10, NULL, 2, 10, 0, NULL, NULL);
/*!40000 ALTER TABLE `participer` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `tournois` (
  `idTournoi` int(11) NOT NULL AUTO_INCREMENT,
  `typeTournoi` varchar(50) DEFAULT NULL,
  `dateTournoi` date DEFAULT NULL,
  `idChampionnat` int(11) NOT NULL,
  PRIMARY KEY (`idTournoi`),
  KEY `idChampionnat` (`idChampionnat`),
  CONSTRAINT `tournois_ibfk_1` FOREIGN KEY (`idChampionnat`) REFERENCES `championnats` (`idChampionnat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `tournois` DISABLE KEYS */;
INSERT INTO `tournois` (`idTournoi`, `typeTournoi`, `dateTournoi`, `idChampionnat`) VALUES
	(1, 'doublette', '2021-06-23', 1),
	(2, 'triplette', '2021-06-12', 2),
	(3, 'doublette', '2021-06-28', 1);
/*!40000 ALTER TABLE `tournois` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
