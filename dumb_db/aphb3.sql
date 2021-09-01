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

-- Listage de la structure de la table aphb. tournois
CREATE TABLE IF NOT EXISTS `tournois` (
  `idTournoi` int(11) NOT NULL AUTO_INCREMENT,
  `typeTournoi` varchar(50) DEFAULT NULL,
  `dateTournoi` date DEFAULT NULL,
  `srcTournoi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTournoi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Listage des données de la table aphb.tournois : ~5 rows (environ)
/*!40000 ALTER TABLE `tournois` DISABLE KEYS */;
INSERT INTO `tournois` (`idTournoi`, `typeTournoi`, `dateTournoi`, `srcTournoi`) VALUES
	(1, 'doublette', '2021-06-23', 'tournoi1.png'),
	(2, 'triplette', '2021-06-12', 'tournoi2.png'),
	(3, 'doublette', '2021-06-28', 'tournoi3.png'),
	(4, 'tÃªte Ã  tÃªte', '2021-06-06', 'tournoi1.png'),
	(5, 'doublette', '2021-06-30', 'tournoi2.png'),
	(6, 'tete a tete', '2021-08-13', 'tournoi3.png'),
	(7, 'doublette', '2021-08-06', 'tournoi1.png');
/*!40000 ALTER TABLE `tournois` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
