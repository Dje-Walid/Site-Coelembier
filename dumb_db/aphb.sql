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
);

CREATE TABLE IF NOT EXISTS `championnats` (
  `idChampionnat` int(11) NOT NULL AUTO_INCREMENT,
  `typeChampionnat` int(11) NOT NULL,
  `nomChampionnat` varchar(100) NOT NULL,
  `resultatChampionnat` varchar(50) DEFAULT NULL,
  `clubDomicile` varchar(50) DEFAULT NULL,
  `clubExterieur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idChampionnat`)
);

CREATE TABLE IF NOT EXISTS `tournois` (
  `idTournoi` int(11) NOT NULL AUTO_INCREMENT,
  `typeTournoi` varchar(50) DEFAULT NULL,
  `dateTournoi` DATE DEFAULT NULL,
  `idChampionnat` int(11) NOT NULL,
  PRIMARY KEY (`idTournoi`),
  KEY `idChampionnat` (`idChampionnat`),
  CONSTRAINT `tournois_ibfk_1` FOREIGN KEY (`idChampionnat`) REFERENCES `championnats` (`idChampionnat`)
);

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
);