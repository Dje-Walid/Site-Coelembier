SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE Adherents(
   idAdherent VARCHAR(50),
   nomAdherent VARCHAR(50) NOT NULL,
   prenomAdherent VARCHAR(50) NOT NULL,
   telephoneAdherent VARCHAR(50),
   mailAdherent VARCHAR(50),
   paiementAdherent LOGICAL NOT NULL,
   isAdmin LOGICAL,
   PRIMARY KEY(idAdherent)
);

CREATE TABLE Championnats(
   idChampionnat VARCHAR(50),
   typeChampionnat INT NOT NULL,
   resultatChampionnat VARCHAR(50),
   clubDomicile VARCHAR(50),
   clubExterieur VARCHAR(50),
   PRIMARY KEY(idChampionnat)
);

CREATE TABLE Tournois(
   idTournoi VARCHAR(50),
   typeTournoi VARCHAR(50),
   nombrePartieTournoi INT,
   idChampionnat VARCHAR(50) NOT NULL,
   PRIMARY KEY(idTournoi),
   FOREIGN KEY(idChampionnat) REFERENCES Championnats(idChampionnat)
);

CREATE TABLE Participer(
   idAdherent VARCHAR(50),
   idTournoi VARCHAR(50),
   partieJoue INT,
   partieGagne INT,
   point INT,
   PRIMARY KEY(idAdherent, idTournoi),
   FOREIGN KEY(idAdherent) REFERENCES Adherents(idAdherent),
   FOREIGN KEY(idTournoi) REFERENCES Tournois(idTournoi)
);
