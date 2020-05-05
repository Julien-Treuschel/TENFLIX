drop database if exists tenflix_sql;

Create database tenflix_sql default character set UTF8 collate UTF8_general_ci;

Use tenflix_sql;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tenflix_sql`
--
-- --------------------------------------------------------

--
-- Structure de la table `type_abonnement`
--

DROP TABLE IF EXISTS `type_abonnement`;
CREATE TABLE IF NOT EXISTS `type_abonnement` (
  `IdTypeAbonnement` int(5) NOT NULL AUTO_INCREMENT,
  `typeAbonnement` varchar(50) DEFAULT NULL,
  `dureeAbonnement` int(5) DEFAULT NULL,
  `nbJourEssai` int(5) DEFAULT NULL,
  PRIMARY KEY (`IdTypeAbonnement`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_abonnement`
--

INSERT INTO `type_abonnement` (`IdTypeAbonnement`, `typeAbonnement`, `dureeAbonnement`, `nbJourEssai`) VALUES
(0, 'Type 1', 1, 0),
(1, 'Type 2', 7, 0),
(2, 'Type 3', 30, 7);

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Structure de la table `categrorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int(5) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nomCategorie`) VALUES
(0, 'Cusine'),
(1, 'Action'),
(2, 'Jeux-video'),
(3, 'Musique');

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Structure de la table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `idVideo` int(5) NOT NULL AUTO_INCREMENT,
  `themeVideo` varchar(50) DEFAULT NULL,
	`auteurVideo` varchar(50) DEFAULT NULL,
	`titreVideo` varchar(50) DEFAULT NULL,
	`descriptionVideo` varchar(100) DEFAULT NULL,
	`prixVideo` float DEFAULT NULL,
	`urlVideo` varchar(100) DEFAULT NULL,
	`boolEstGratuite` boolean DEFAULT FALSE,
  PRIMARY KEY (`idVideo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`idVideo`, `themeVideo`,`titreVideo`,`auteurVideo`,`descriptionVideo`,`prixVideo`, `urlVideo`, `boolEstGratuite`) VALUES
(0, 'Musique', 'Samurai Champloo', 'Music TV', 'Japanese Type Beat', 1,'https://www.youtube.com/watch?v=YQWA0kkT3lY',FALSE),
(1, 'Musique', 'Shinobi', 'Music TV', 'Japanese Lofi HipHop Mix', 0,'https://www.youtube.com/watch?v=mMw6UFZuL9o',TRUE);

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Structure de la table `categorie_video`
--

DROP TABLE IF EXISTS `categorie_video`;
CREATE TABLE IF NOT EXISTS `categorie_video` (
	`idCategorieVideo` int(5) NOT NULL AUTO_INCREMENT,
	`idVideo` int(5) DEFAULT NULL,
  `idCategorie` int(5) DEFAULT NULL,
  PRIMARY KEY (`idCategorieVideo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie_video`
--

INSERT INTO `categorie_video` (`idCategorieVideo`, `idVideo`,`idCategorie`) VALUES
(0, 0, 3),
(1, 1, 3);

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
	`idAchat` int(5) NOT NULL AUTO_INCREMENT,
	`datAchat` datetime DEFAULT NULL,
  `boolEstPossede` boolean DEFAULT FALSE,
	`idUtilisateur` int(5) DEFAULT NULL,
	`idVideo` int(5) DEFAULT NULL,
  PRIMARY KEY (`idAchat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`idAchat`, `datAchat`, `boolEstPossede`, `idUtilisateur`, `idVideo`) VALUES
(0, '2020-05-05', FALSE, 0, 0);

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
	`idCommentaire` int(5) NOT NULL AUTO_INCREMENT,
	`commentaire` varchar(100) DEFAULT NULL,
	`idVideo` int(5) DEFAULT NULL,
	`idUtilisateur` int(5) DEFAULT NULL,
  PRIMARY KEY (`idCommentaire`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idCommentaire`, `commentaire`,`idVideo`,`idUtilisateur`) VALUES
(0, 'test commentaire',0, 0);

-- --------------------------------------------------------
--
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `IdAbonnement` int(5) NOT NULL AUTO_INCREMENT,
  `dateDebutAbonnement` datetime DEFAULT NULL,
  `dateFinAbonnement` datetime DEFAULT NULL,
  `boolEstAbo` boolean DEFAULT FALSE,
	`idTypeAbonnement` int(5) DEFAULT NULL,
	`idUtilisateur` int(5) DEFAULT NULL,
  PRIMARY KEY (`IdAbonnement`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`IdAbonnement`, `dateDebutAbonnement`, `dateFinAbonnement`, `boolEstAbo`, `idTypeAbonnement`, `idUtilisateur`) VALUES
(0, '2020-05-05', '2020-06-05', true, 0, 0);


-- --------------------------------------------------------
--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
	`IdUtilisateur` int(5) NOT NULL AUTO_INCREMENT,
	`emailUtilisateur` varchar(50) DEFAULT NULL,
	`mdpUtilisateur` varchar(50) DEFAULT NULL,
	`nomUtilisateur` varchar(50) DEFAULT NULL,
	`prenomUtilisateur` varchar(50) DEFAULT NULL,
	`dateNaissance` date DEFAULT NULL,
	`villeUtilisateur` varchar(50) DEFAULT NULL,
	`codePostalUtilisateur` int(5) DEFAULT NULL,
	`numRueUtilisateur` int(5) DEFAULT NULL,
	`rueUtilisateur` varchar(50) DEFAULT NULL,
	`idAbonnement` int(5) DEFAULT NULL,
  PRIMARY KEY (`IdUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `dateNaissance`, `villeUtilisateur`, `codePostalUtilisateur`, `numRueUtilisateur`, `rueUtilisateur`, `idAbonnement`) VALUES
(0, 'test@gmail.com', 'azerty123', 'Alice', 'Bob', '2000-12-19', 'Strasbourg', 67, 2, 'rue de la gare', NULL);
-- --------------------------------------------------------

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `FK_abonnement_TypeAbonnement` FOREIGN KEY (`idTypeAbonnement`) REFERENCES `type_abonnement` (`idTypeAbonnement`),
	ADD CONSTRAINT `FK_abonnement_utilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `categorie_video`
--
ALTER TABLE `categorie_video`
  ADD CONSTRAINT `FK_categorie_video_video` FOREIGN KEY (`idVideo`) REFERENCES `video` (`idVideo`),
	ADD CONSTRAINT `FK_categorie_video_categorie` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`);

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `FK_achat_video` FOREIGN KEY (`idVideo`) REFERENCES `video` (`idVideo`),
	ADD CONSTRAINT `FK_achat_utilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_commentaire_video` FOREIGN KEY (`idVideo`) REFERENCES `video` (`idVideo`),
	ADD CONSTRAINT `FK_commentaire_utilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);

COMMIT;
