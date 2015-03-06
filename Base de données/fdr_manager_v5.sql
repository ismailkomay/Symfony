-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Ven 06 Mars 2015 à 11:24
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `fdr_manager`
--

-- --------------------------------------------------------

--
-- Structure de la table `boncarburanthuile`
--

CREATE TABLE IF NOT EXISTS `boncarburanthuile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `quantite` double NOT NULL,
  `montant` double NOT NULL,
  `compteur` bigint(20) NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `typeConsommation_id` int(11) NOT NULL,
  `feuilleDeRoute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4ABB48D0C3782501` (`typeConsommation_id`),
  KEY `IDX_4ABB48D0F8F947DA` (`feuilleDeRoute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

CREATE TABLE IF NOT EXISTS `chauffeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateembauche` date NOT NULL,
  `disponibilite` tinyint(1) NOT NULL,
  `typeconvention` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `etatContrat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `chauffeur`
--

INSERT INTO `chauffeur` (`id`, `nom`, `prenom`, `tel`, `cin`, `adresse`, `dateembauche`, `disponibilite`, `typeconvention`, `champssupp1`, `etatContrat`) VALUES
(1, 'Messoudi', 'Achraf', '028392723', 'h729320', '', '1974-03-14', 0, 'conventionne', '', ''),
(2, 'Bouazzaoui', 'Walid', '02392032', 'R362830', '', '1980-03-03', 1, 'conventionne', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur_feuillederoute`
--

CREATE TABLE IF NOT EXISTS `chauffeur_feuillederoute` (
  `chauffeur_id` int(11) NOT NULL,
  `feuillederoute_id` int(11) NOT NULL,
  PRIMARY KEY (`chauffeur_id`,`feuillederoute_id`),
  KEY `IDX_62CD357685C0B3BE` (`chauffeur_id`),
  KEY `IDX_62CD35764ED2265C` (`feuillederoute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `chauffeur_feuillederoute`
--

INSERT INTO `chauffeur_feuillederoute` (`chauffeur_id`, `feuillederoute_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomresponsable` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenomresponsable` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nomentreprise` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `encompte` tinyint(1) NOT NULL,
  `clientaffret` tinyint(1) NOT NULL,
  `clientramass` tinyint(1) NOT NULL,
  `numcompte` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nomresponsable`, `prenomresponsable`, `tel`, `adresse`, `cin`, `email`, `fax`, `nomentreprise`, `encompte`, `clientaffret`, `clientramass`, `numcompte`, `champssupp1`, `champssupp2`) VALUES
(1, 'Mustapha', 'Ismaili', '02930293', '', 'E2938203', '', '', 'Renault', 1, 1, 1, '239203', '', ''),
(2, 'WAZI', 'Wafa', '02930283', '', 'U928302', '', '', 'Cooper', 1, 1, 0, '382382', '', ''),
(3, 'Majdi', 'Keltoum', '02128323', '', 'H261301', '', '', '', 0, 1, 0, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `clientfdrf`
--

CREATE TABLE IF NOT EXISTS `clientfdrf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `secteur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `feuilleDeRoute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_77C1CD5E19EB6921` (`client_id`),
  KEY `IDX_77C1CD5EF8F947DA` (`feuilleDeRoute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `clientfdrv`
--

CREATE TABLE IF NOT EXISTS `clientfdrv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `secteur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `feuilleDeRoute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6A76DD3A19EB6921` (`client_id`),
  KEY `IDX_6A76DD3AF8F947DA` (`feuilleDeRoute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `client_secteur`
--

CREATE TABLE IF NOT EXISTS `client_secteur` (
  `client_id` int(11) NOT NULL,
  `secteur_id` int(11) NOT NULL,
  PRIMARY KEY (`client_id`,`secteur_id`),
  KEY `IDX_D278616219EB6921` (`client_id`),
  KEY `IDX_D27861629F7E4405` (`secteur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `client_secteur`
--

INSERT INTO `client_secteur` (`client_id`, `secteur_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

CREATE TABLE IF NOT EXISTS `depot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `champ1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champ2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `filiale_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_47948BBC5C4BCADC` (`filiale_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `depot`
--

INSERT INTO `depot` (`id`, `code`, `libelle`, `adresse`, `champ1`, `champ2`, `filiale_id`) VALUES
(1, 'DeptCtmMesCasa', 'Depot messagerie Casa', 'siège Cas', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `feuillederoute`
--

CREATE TABLE IF NOT EXISTS `feuillederoute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateGeneree` datetime NOT NULL,
  `dateDebutMission` datetime NOT NULL,
  `dateFinMission` datetime NOT NULL,
  `nombreManutention` int(11) NOT NULL,
  `nombreManutentionChauf1` int(11) NOT NULL,
  `nombreManutentionChauf2` int(11) NOT NULL,
  `nomManExterne1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nomManExterne2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `compteurReel` bigint(20) NOT NULL,
  `compteurFinal` bigint(20) NOT NULL,
  `etat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `calcDiffKm` int(11) NOT NULL,
  `calcKmParcourus` int(11) NOT NULL,
  `calcNbRepas` int(11) NOT NULL,
  `calcNbPetitDej` int(11) NOT NULL,
  `calcNbDecoucher` int(11) NOT NULL,
  `calcQuantite` double NOT NULL,
  `calcMontantCarburant` double NOT NULL,
  `calcMontantPeage` double NOT NULL,
  `calcNbJours` double NOT NULL,
  `primeRemorque` tinyint(1) NOT NULL,
  `remarques` longtext COLLATE utf8_unicode_ci NOT NULL,
  `agentSaisie` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `operationnel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surveillant` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `prestation_id` int(11) NOT NULL,
  `depot_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2BA993A64A4A3511` (`vehicule_id`),
  KEY `IDX_2BA993A69E45C554` (`prestation_id`),
  KEY `IDX_2BA993A68510D4DE` (`depot_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `feuillederoute`
--

INSERT INTO `feuillederoute` (`id`, `dateGeneree`, `dateDebutMission`, `dateFinMission`, `nombreManutention`, `nombreManutentionChauf1`, `nombreManutentionChauf2`, `nomManExterne1`, `nomManExterne2`, `compteurReel`, `compteurFinal`, `etat`, `calcDiffKm`, `calcKmParcourus`, `calcNbRepas`, `calcNbPetitDej`, `calcNbDecoucher`, `calcQuantite`, `calcMontantCarburant`, `calcMontantPeage`, `calcNbJours`, `primeRemorque`, `remarques`, `agentSaisie`, `operationnel`, `surveillant`, `champSup1`, `champSup2`, `champSup3`, `champSup4`, `vehicule_id`, `prestation_id`, `depot_id`) VALUES
(1, '2015-03-06 08:00:00', '2015-03-06 09:00:00', '2015-03-06 16:00:00', 4, 2, 2, '', '', 93904, 94012, 'clos', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Sab Mariam', 'Sab Mariam', 'Sab Mariam', '', '', '', '', 1, 8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `filiale`
--

CREATE TABLE IF NOT EXISTS `filiale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `filiale`
--

INSERT INTO `filiale` (`id`, `code`, `libelle`, `adresse`, `champSup1`, `champSup2`) VALUES
(1, 'CtmMes', 'Ctm Messagerie', 'Siège casablanca ', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `indisponibilite`
--

CREATE TABLE IF NOT EXISTS `indisponibilite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datedebut` datetime NOT NULL,
  `datefin` datetime NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chauffeur_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8717036F85C0B3BE` (`chauffeur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `indisponibilite`
--

INSERT INTO `indisponibilite` (`id`, `motif`, `datedebut`, `datefin`, `champssupp1`, `champssupp2`, `chauffeur_id`) VALUES
(1, 'Malade', '2014-03-17 14:25:00', '2014-03-20 00:00:00', '', '', 1),
(2, 'Malade', '2014-08-17 14:25:00', '2014-03-20 14:25:00', '', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `itineraire`
--

CREATE TABLE IF NOT EXISTS `itineraire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depart` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `arrivee` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remarques` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `itineraire`
--

INSERT INTO `itineraire` (`id`, `depart`, `arrivee`, `remarques`, `disponible`, `champssupp1`, `champssupp2`) VALUES
(1, 'Tit Mellil', 'Tit Mellil', '', 1, '', ''),
(2, 'Casa', 'Rabat', '', 1, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `manutentionnaire`
--

CREATE TABLE IF NOT EXISTS `manutentionnaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `manutentionnaire`
--

INSERT INTO `manutentionnaire` (`id`, `nom`, `prenom`, `matricule`, `type`, `cin`, `tel`, `adresse`, `champssupp1`, `champssupp2`) VALUES
(1, 'Alaoui', 'Ahmed', '79820', 'ctm', 'EE562820', '027392730', 'Sidi Maarouf Casa', '', ''),
(2, 'Salah', 'Mohamad', '793829', 'interim', 'G52739', '02839273', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `manutentionnaire_feuillederoute`
--

CREATE TABLE IF NOT EXISTS `manutentionnaire_feuillederoute` (
  `manutentionnaire_id` int(11) NOT NULL,
  `feuillederoute_id` int(11) NOT NULL,
  PRIMARY KEY (`manutentionnaire_id`,`feuillederoute_id`),
  KEY `IDX_EF7E3597AAE024` (`manutentionnaire_id`),
  KEY `IDX_EF7E35974ED2265C` (`feuillederoute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `missionaffretement`
--

CREATE TABLE IF NOT EXISTS `missionaffretement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ecc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ect` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ebl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `espece` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `autredoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `valdeclassurance` double NOT NULL,
  `bonlivraison` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numexpedition` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dateramassage` datetime NOT NULL,
  `lieuramassage` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nbrecolis` int(11) NOT NULL,
  `naturemarchandise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datelivraison` datetime NOT NULL,
  `lieulivraison` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `montantfacture` double NOT NULL,
  `remise` int(11) NOT NULL,
  `motifremise` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `montantregle` tinyint(1) NOT NULL,
  `nombnq` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numcheque` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `itineraire_id` int(11) NOT NULL,
  `feuilleDeRoute_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F5CA3EB2F8F947DA` (`feuilleDeRoute_id`),
  KEY `IDX_F5CA3EB2A9B853B8` (`itineraire_id`),
  KEY `IDX_F5CA3EB219EB6921` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `missionaffretement`
--

INSERT INTO `missionaffretement` (`id`, `ecc`, `ect`, `ebl`, `espece`, `autredoc`, `valdeclassurance`, `bonlivraison`, `numexpedition`, `dateramassage`, `lieuramassage`, `nbrecolis`, `naturemarchandise`, `datelivraison`, `lieulivraison`, `montantfacture`, `remise`, `motifremise`, `montantregle`, `nombnq`, `numcheque`, `champssupp1`, `champssupp2`, `champssupp3`, `champssupp4`, `itineraire_id`, `feuilleDeRoute_id`, `client_id`) VALUES
(2, '00', '00', '00', '00', '00', 0, '', '', '2015-03-06 10:00:00', 'Tit Mellil', 100, '', '2015-03-06 16:00:00', 'Tit Mellil', 1800, 10, '', 0, '', '', '', '', '', '', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `modification`
--

CREATE TABLE IF NOT EXISTS `modification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motif` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dateMaj` datetime NOT NULL,
  `remarque` longtext COLLATE utf8_unicode_ci NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `feuilleDeRoute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EF6425D2FB88E14F` (`utilisateur_id`),
  KEY `IDX_EF6425D2F8F947DA` (`feuilleDeRoute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `peage`
--

CREATE TABLE IF NOT EXISTS `peage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numCarte` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DatePassage` datetime NOT NULL,
  `montant` double NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `feuilleDeRoute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6D79D943F8F947DA` (`feuilleDeRoute_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `peage`
--

INSERT INTO `peage` (`id`, `numCarte`, `DatePassage`, `montant`, `champSup1`, `champSup2`, `feuilleDeRoute_id`) VALUES
(1, '2417219', '2015-03-06 11:15:00', 200, '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE IF NOT EXISTS `prestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `secteur_id` int(11) DEFAULT NULL,
  `typePrestation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_51C88FADF023560D` (`typePrestation_id`),
  KEY `IDX_51C88FAD9F7E4405` (`secteur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `prestation`
--

INSERT INTO `prestation` (`id`, `code`, `description`, `champssupp1`, `champssupp2`, `secteur_id`, `typePrestation_id`) VALUES
(8, 'Ram01', '', '', '', 2, 2),
(9, 'Ram02', '', '', '', 2, 2),
(10, 'Tr1', '', '', '', NULL, 4),
(11, 'LAD01', '', '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomRole` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDFDR` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDFDRPanne` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDFDRAgence` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDClientCompeFDL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDClientNonCompteFDL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `affectationVehiculeAffr` tinyint(1) NOT NULL,
  `cloturerFDR` tinyint(1) NOT NULL,
  `cloturerFDRAffr` tinyint(1) NOT NULL,
  `confRecDocCtm` tinyint(1) NOT NULL,
  `confRecDocClient` tinyint(1) NOT NULL,
  `editCompteur` tinyint(1) NOT NULL,
  `pourcentageAssurance` tinyint(1) NOT NULL,
  `CRUDClient` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDVehicule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDChauffeur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDUtilisateur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDDepot` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDFiliale` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDManutentionnaire` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDIndisponibilite` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDItineraire` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDPrestation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDTypePrestation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDSecteur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CRUDTypeConsommation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `nomRole`, `description`, `CRUDFDR`, `CRUDFDRPanne`, `CRUDFDRAgence`, `CRUDClientCompeFDL`, `CRUDClientNonCompteFDL`, `affectationVehiculeAffr`, `cloturerFDR`, `cloturerFDRAffr`, `confRecDocCtm`, `confRecDocClient`, `editCompteur`, `pourcentageAssurance`, `CRUDClient`, `CRUDVehicule`, `CRUDChauffeur`, `CRUDUtilisateur`, `CRUDDepot`, `CRUDFiliale`, `CRUDManutentionnaire`, `CRUDIndisponibilite`, `CRUDItineraire`, `CRUDPrestation`, `CRUDTypePrestation`, `CRUDSecteur`, `CRUDTypeConsommation`, `champSup1`, `champSup2`, `champSup3`, `champSup4`) VALUES
(1, 'Admin', 'Administrateur', '1111', '1111', '1111', '1111', '1111', 1, 1, 1, 1, 1, 1, 1, '1111', '1111', '1111', '1111', '1111', '1111', '1111', '1111', '1111', '1111', '1111', '1111', '1111', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

CREATE TABLE IF NOT EXISTS `secteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `secteur`
--

INSERT INTO `secteur` (`id`, `code`, `type`, `libelle`, `champssupp1`, `champssupp2`) VALUES
(1, 'Sect1', 'secteur', 'Maarif', '', ''),
(2, 'Sect2', 'secteur', 'Sidi Maarouf 1', '', ''),
(3, 'L01', 'ligne', 'Casa-Tanger', '', ''),
(4, 'L02', 'ligne', 'Marrakech-Dakhla', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `typeconsommation`
--

CREATE TABLE IF NOT EXISTS `typeconsommation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `agence` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `produit` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prixUnitaire` double NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `typeconsommation`
--

INSERT INTO `typeconsommation` (`id`, `type`, `agence`, `produit`, `prixUnitaire`, `champSup1`, `champSup2`) VALUES
(1, 'interne', 'casa', 'essence', 10, '', ''),
(2, 'externe', 'total', 'gazoil', 0, '', ''),
(3, 'interne', 'casa', 'gazoil', 9, '', ''),
(4, 'externe', 'total', 'essence', 0, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `typeprestation`
--

CREATE TABLE IF NOT EXISTS `typeprestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `typeprestation`
--

INSERT INTO `typeprestation` (`id`, `libelle`, `champssupp1`, `champssupp2`) VALUES
(1, 'Livraison a domicile', '', ''),
(2, 'Ramassage', '', ''),
(3, 'Affretement', '', ''),
(4, 'Transfert', '', ''),
(5, 'Ligne', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `motDePasse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1D1C63B3D60322AC` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `login`, `motDePasse`, `matricule`, `cin`, `tel`, `adresse`, `champSup1`, `champSup2`, `role_id`) VALUES
(1, 'Limouni', 'Asmaa', 'asmaa', 'asmaa', '291029', 'EE28320', '02930293', '', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_feuillederoute`
--

CREATE TABLE IF NOT EXISTS `utilisateur_feuillederoute` (
  `utilisateur_id` int(11) NOT NULL,
  `feuillederoute_id` int(11) NOT NULL,
  PRIMARY KEY (`utilisateur_id`,`feuillederoute_id`),
  KEY `IDX_283BACFBFB88E14F` (`utilisateur_id`),
  KEY `IDX_283BACFB4ED2265C` (`feuillederoute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateur_feuillederoute`
--

INSERT INTO `utilisateur_feuillederoute` (`utilisateur_id`, `feuillederoute_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE IF NOT EXISTS `vehicule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tonnage` double NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remorque` tinyint(1) NOT NULL,
  `actif` tinyint(1) NOT NULL,
  `vidange` bigint(20) NOT NULL,
  `compteur` bigint(20) NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `tonnage`, `type`, `remorque`, `actif`, `vidange`, `compteur`, `matricule`, `champssupp1`, `champssupp2`) VALUES
(1, 10, 'ctm', 0, 0, 1000, 93902, 'S18291', '', ''),
(2, 3, 'ctm', 1, 0, 10000, 192102, 'S27130', '', '');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `boncarburanthuile`
--
ALTER TABLE `boncarburanthuile`
  ADD CONSTRAINT `FK_4ABB48D0C3782501` FOREIGN KEY (`typeConsommation_id`) REFERENCES `typeconsommation` (`id`),
  ADD CONSTRAINT `FK_4ABB48D0F8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`);

--
-- Contraintes pour la table `chauffeur_feuillederoute`
--
ALTER TABLE `chauffeur_feuillederoute`
  ADD CONSTRAINT `FK_62CD35764ED2265C` FOREIGN KEY (`feuillederoute_id`) REFERENCES `feuillederoute` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_62CD357685C0B3BE` FOREIGN KEY (`chauffeur_id`) REFERENCES `chauffeur` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `clientfdrf`
--
ALTER TABLE `clientfdrf`
  ADD CONSTRAINT `FK_77C1CD5EF8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`),
  ADD CONSTRAINT `FK_77C1CD5E19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `clientfdrv`
--
ALTER TABLE `clientfdrv`
  ADD CONSTRAINT `FK_6A76DD3AF8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`),
  ADD CONSTRAINT `FK_6A76DD3A19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `client_secteur`
--
ALTER TABLE `client_secteur`
  ADD CONSTRAINT `FK_D278616219EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D27861629F7E4405` FOREIGN KEY (`secteur_id`) REFERENCES `secteur` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `depot`
--
ALTER TABLE `depot`
  ADD CONSTRAINT `FK_47948BBC5C4BCADC` FOREIGN KEY (`filiale_id`) REFERENCES `filiale` (`id`);

--
-- Contraintes pour la table `feuillederoute`
--
ALTER TABLE `feuillederoute`
  ADD CONSTRAINT `FK_2BA993A64A4A3511` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`id`),
  ADD CONSTRAINT `FK_2BA993A68510D4DE` FOREIGN KEY (`depot_id`) REFERENCES `depot` (`id`),
  ADD CONSTRAINT `FK_2BA993A69E45C554` FOREIGN KEY (`prestation_id`) REFERENCES `prestation` (`id`);

--
-- Contraintes pour la table `indisponibilite`
--
ALTER TABLE `indisponibilite`
  ADD CONSTRAINT `FK_8717036F85C0B3BE` FOREIGN KEY (`chauffeur_id`) REFERENCES `chauffeur` (`id`);

--
-- Contraintes pour la table `manutentionnaire_feuillederoute`
--
ALTER TABLE `manutentionnaire_feuillederoute`
  ADD CONSTRAINT `FK_EF7E35974ED2265C` FOREIGN KEY (`feuillederoute_id`) REFERENCES `feuillederoute` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_EF7E3597AAE024` FOREIGN KEY (`manutentionnaire_id`) REFERENCES `manutentionnaire` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `missionaffretement`
--
ALTER TABLE `missionaffretement`
  ADD CONSTRAINT `FK_F5CA3EB219EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_F5CA3EB2A9B853B8` FOREIGN KEY (`itineraire_id`) REFERENCES `itineraire` (`id`),
  ADD CONSTRAINT `FK_F5CA3EB2F8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`);

--
-- Contraintes pour la table `modification`
--
ALTER TABLE `modification`
  ADD CONSTRAINT `FK_EF6425D2F8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`),
  ADD CONSTRAINT `FK_EF6425D2FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `peage`
--
ALTER TABLE `peage`
  ADD CONSTRAINT `FK_6D79D943F8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`);

--
-- Contraintes pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD CONSTRAINT `FK_51C88FAD9F7E4405` FOREIGN KEY (`secteur_id`) REFERENCES `secteur` (`id`),
  ADD CONSTRAINT `FK_51C88FADF023560D` FOREIGN KEY (`typePrestation_id`) REFERENCES `typeprestation` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_1D1C63B3D60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Contraintes pour la table `utilisateur_feuillederoute`
--
ALTER TABLE `utilisateur_feuillederoute`
  ADD CONSTRAINT `FK_283BACFB4ED2265C` FOREIGN KEY (`feuillederoute_id`) REFERENCES `feuillederoute` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_283BACFBFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
