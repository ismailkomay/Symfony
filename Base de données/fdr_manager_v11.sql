-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2015 at 09:18 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fdr_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `boncarburanthuile`
--

CREATE TABLE IF NOT EXISTS `boncarburanthuile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `quantite` double NOT NULL,
  `montant` double NOT NULL,
  `compteur` bigint(20) NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feuilleDeRoute_id` int(11) NOT NULL,
  `typeConsommation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4ABB48D0F8F947DA` (`feuilleDeRoute_id`),
  KEY `IDX_4ABB48D0C3782501` (`typeConsommation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chauffeur`
--

CREATE TABLE IF NOT EXISTS `chauffeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateembauche` date NOT NULL,
  `disponibilite` tinyint(1) DEFAULT NULL,
  `typeconvention` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etatContrat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5CA777B8ABE530DA` (`cin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chauffeur`
--

INSERT INTO `chauffeur` (`id`, `nom`, `prenom`, `tel`, `cin`, `adresse`, `dateembauche`, `disponibilite`, `typeconvention`, `champssupp1`, `etatContrat`) VALUES
(1, 'chSaid', 'chSaid', NULL, 'Q285285', NULL, '2010-01-01', 1, 'cdd', NULL, 'ouvert'),
(2, 'chMouad', 'chMouad', NULL, 'Q285293', NULL, '2010-01-01', 1, 'cdd', NULL, 'ouvert');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cin` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomentreprise` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `encompte` tinyint(1) DEFAULT NULL,
  `clientaffret` tinyint(1) DEFAULT NULL,
  `clientramass` tinyint(1) DEFAULT NULL,
  `numcompte` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C7440455ABE530DA` (`cin`),
  UNIQUE KEY `UNIQ_C7440455E7927C74` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `prenom`, `nom`, `tel`, `adresse`, `cin`, `email`, `fax`, `nomentreprise`, `encompte`, `clientaffret`, `clientramass`, `numcompte`, `champssupp1`, `champssupp2`) VALUES
(1, 'peige', 'Peugeot', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, NULL, NULL, NULL),
(2, 'peige', 'Sigma', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, NULL, NULL, NULL),
(3, 'peige', 'TeleComi', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clientfdrf`
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
-- Table structure for table `clientfdrv`
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
-- Table structure for table `client_secteur`
--

CREATE TABLE IF NOT EXISTS `client_secteur` (
  `client_id` int(11) NOT NULL,
  `secteur_id` int(11) NOT NULL,
  PRIMARY KEY (`client_id`,`secteur_id`),
  KEY `IDX_D278616219EB6921` (`client_id`),
  KEY `IDX_D27861629F7E4405` (`secteur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client_secteur`
--

INSERT INTO `client_secteur` (`client_id`, `secteur_id`) VALUES
(1, 3),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `depot`
--

CREATE TABLE IF NOT EXISTS `depot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filiale_id` int(11) NOT NULL,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champ1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champ2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_47948BBCA4D60759` (`libelle`),
  KEY `IDX_47948BBC5C4BCADC` (`filiale_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feuillederoute`
--

CREATE TABLE IF NOT EXISTS `feuillederoute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicule_id` int(11) NOT NULL,
  `secteur_id` int(11) DEFAULT NULL,
  `filiale_id` int(11) NOT NULL,
  `dateGeneree` datetime NOT NULL,
  `dateDebutMission` datetime NOT NULL,
  `dateFinMission` datetime NOT NULL,
  `nombreManutention` int(11) DEFAULT NULL,
  `nombreManutentionChauf1` int(11) DEFAULT NULL,
  `nombreManutentionChauf2` int(11) DEFAULT NULL,
  `nomManExterne1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomManExterne2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `compteurReel` bigint(20) NOT NULL,
  `compteurFinal` bigint(20) DEFAULT NULL,
  `cloture` tinyint(1) DEFAULT NULL,
  `calcDiffKm` int(11) DEFAULT NULL,
  `calcKmParcourus` int(11) DEFAULT NULL,
  `calcNbRepas` int(11) DEFAULT NULL,
  `calcNbPetitDej` int(11) DEFAULT NULL,
  `calcNbDecoucher` int(11) DEFAULT NULL,
  `calcQuantite` double DEFAULT NULL,
  `calcMontantCarburant` double DEFAULT NULL,
  `calcMontantPeage` double DEFAULT NULL,
  `calcNbJours` double DEFAULT NULL,
  `primeRemorque` tinyint(1) DEFAULT NULL,
  `remarques` longtext COLLATE utf8_unicode_ci,
  `agentSaisie` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `operationnel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surveillant` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup3` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup4` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `missionAffretement_id` int(11) DEFAULT NULL,
  `typePrestation_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2BA993A6578BA7B0` (`missionAffretement_id`),
  KEY `IDX_2BA993A64A4A3511` (`vehicule_id`),
  KEY `IDX_2BA993A6F023560D` (`typePrestation_id`),
  KEY `IDX_2BA993A69F7E4405` (`secteur_id`),
  KEY `IDX_2BA993A65C4BCADC` (`filiale_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feuillederoute`
--

INSERT INTO `feuillederoute` (`id`, `vehicule_id`, `secteur_id`, `filiale_id`, `dateGeneree`, `dateDebutMission`, `dateFinMission`, `nombreManutention`, `nombreManutentionChauf1`, `nombreManutentionChauf2`, `nomManExterne1`, `nomManExterne2`, `compteurReel`, `compteurFinal`, `cloture`, `calcDiffKm`, `calcKmParcourus`, `calcNbRepas`, `calcNbPetitDej`, `calcNbDecoucher`, `calcQuantite`, `calcMontantCarburant`, `calcMontantPeage`, `calcNbJours`, `primeRemorque`, `remarques`, `agentSaisie`, `operationnel`, `surveillant`, `champSup1`, `champSup2`, `champSup3`, `champSup4`, `missionAffretement_id`, `typePrestation_id`) VALUES
(1, 1, 4, 1, '2015-03-17 17:13:24', '2015-03-17 17:12:00', '2015-03-17 17:13:24', 4, 2, 2, NULL, NULL, 10000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feuillederoute_chauffeur`
--

CREATE TABLE IF NOT EXISTS `feuillederoute_chauffeur` (
  `feuillederoute_id` int(11) NOT NULL,
  `chauffeur_id` int(11) NOT NULL,
  PRIMARY KEY (`feuillederoute_id`,`chauffeur_id`),
  KEY `IDX_3EDD43094ED2265C` (`feuillederoute_id`),
  KEY `IDX_3EDD430985C0B3BE` (`chauffeur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feuillederoute_chauffeur`
--

INSERT INTO `feuillederoute_chauffeur` (`feuillederoute_id`, `chauffeur_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feuillederoute_manutentionnaire`
--

CREATE TABLE IF NOT EXISTS `feuillederoute_manutentionnaire` (
  `feuillederoute_id` int(11) NOT NULL,
  `manutentionnaire_id` int(11) NOT NULL,
  PRIMARY KEY (`feuillederoute_id`,`manutentionnaire_id`),
  KEY `IDX_DA0921EC4ED2265C` (`feuillederoute_id`),
  KEY `IDX_DA0921ECAAE024` (`manutentionnaire_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feuillederoute_manutentionnaire`
--

INSERT INTO `feuillederoute_manutentionnaire` (`feuillederoute_id`, `manutentionnaire_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feuillederoute_utilisateur`
--

CREATE TABLE IF NOT EXISTS `feuillederoute_utilisateur` (
  `feuillederoute_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY (`feuillederoute_id`,`utilisateur_id`),
  KEY `IDX_C1766A854ED2265C` (`feuillederoute_id`),
  KEY `IDX_C1766A85FB88E14F` (`utilisateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filiale`
--

CREATE TABLE IF NOT EXISTS `filiale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FD98CA9DA4D60759` (`libelle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `filiale`
--

INSERT INTO `filiale` (`id`, `libelle`, `adresse`, `champSup1`, `champSup2`) VALUES
(1, 'CTM.ME', NULL, NULL, NULL),
(2, 'CTM.ME2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `indisponibilite`
--

CREATE TABLE IF NOT EXISTS `indisponibilite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chauffeur_id` int(11) NOT NULL,
  `motif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datedebut` datetime NOT NULL,
  `datefin` datetime NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8717036F85C0B3BE` (`chauffeur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `manutentionnaire`
--

CREATE TABLE IF NOT EXISTS `manutentionnaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E1ADE7A5ABE530DA` (`cin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `manutentionnaire`
--

INSERT INTO `manutentionnaire` (`id`, `nom`, `prenom`, `matricule`, `type`, `cin`, `tel`, `adresse`, `champssupp1`, `champssupp2`) VALUES
(1, 'manHamid', 'manHamid', NULL, 'ctm', 'q78q88', NULL, NULL, NULL, NULL),
(2, 'manHRachid', 'manHamid', NULL, 'ctm', 'q78q00', NULL, NULL, NULL, NULL),
(3, 'manSaid', 'manHamid', NULL, 'ctm', 'q78q99', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `missionaffretement`
--

CREATE TABLE IF NOT EXISTS `missionaffretement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `ecc` tinyint(1) DEFAULT NULL,
  `ect` tinyint(1) DEFAULT NULL,
  `ebl` tinyint(1) DEFAULT NULL,
  `espece` tinyint(1) DEFAULT NULL,
  `autredoc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valdeclassurance` double DEFAULT NULL,
  `bonlivraison` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numexpedition` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateramassage` datetime NOT NULL,
  `lieuramassage` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nomresponsable` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telresponsable` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nbrecolis` int(11) DEFAULT NULL,
  `naturemarchandise` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datelivraison` datetime NOT NULL,
  `lieulivraison` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `montantfacture` double NOT NULL,
  `remise` int(11) DEFAULT NULL,
  `motifremise` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `montantregle` tinyint(1) DEFAULT NULL,
  `nombnq` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numcheque` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remarques` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confRecDocClient` tinyint(1) DEFAULT NULL,
  `confRecDocCtm` tinyint(1) DEFAULT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp3` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp4` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F5CA3EB219EB6921` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `modification`
--

CREATE TABLE IF NOT EXISTS `modification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int(11) NOT NULL,
  `motif` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dateMaj` datetime NOT NULL,
  `remarque` longtext COLLATE utf8_unicode_ci NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feuilleDeRoute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EF6425D2FB88E14F` (`utilisateur_id`),
  KEY `IDX_EF6425D2F8F947DA` (`feuilleDeRoute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `peage`
--

CREATE TABLE IF NOT EXISTS `peage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numCarte` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DatePassage` datetime NOT NULL,
  `montant` double NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feuilleDeRoute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6D79D943F8F947DA` (`feuilleDeRoute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomRole` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDFDR` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDFDRPanne` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDFDRAgence` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDClientCompeFDL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDClientNonCompteFDL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `affectationVehiculeAffr` tinyint(1) DEFAULT NULL,
  `cloturerFDR` tinyint(1) DEFAULT NULL,
  `cloturerFDRAffr` tinyint(1) DEFAULT NULL,
  `confRecDocCtm` tinyint(1) DEFAULT NULL,
  `confRecDocClient` tinyint(1) DEFAULT NULL,
  `editCompteur` tinyint(1) DEFAULT NULL,
  `pourcentageAssurance` tinyint(1) DEFAULT NULL,
  `CRUDClient` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDVehicule` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDChauffeur` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDUtilisateur` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDDepot` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDFiliale` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDManutentionnaire` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDIndisponibilite` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDItineraire` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDPrestation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDTypePrestation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDSecteur` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CRUDTypeConsommation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `administrer` tinyint(1) DEFAULT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup3` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup4` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `secteur`
--

CREATE TABLE IF NOT EXISTS `secteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `depart` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arrivee` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remarques` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `villeappartenance` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8045251FA4D60759` (`libelle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `secteur`
--

INSERT INTO `secteur` (`id`, `libelle`, `depart`, `arrivee`, `remarques`, `villeappartenance`, `champssupp1`, `champssupp2`) VALUES
(1, 'Casa-Tit mellil', NULL, NULL, NULL, 'casablanca', NULL, NULL),
(2, 'Rabat-Casa', NULL, NULL, NULL, 'rabat', NULL, NULL),
(3, 'Maarif', NULL, NULL, NULL, 'casablanca', NULL, NULL),
(4, 'L9amra', NULL, NULL, NULL, 'rabat', NULL, NULL),
(5, 'Marrif1-2', NULL, NULL, NULL, 'casablanca', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `secteur_typeprestation`
--

CREATE TABLE IF NOT EXISTS `secteur_typeprestation` (
  `secteur_id` int(11) NOT NULL,
  `typeprestation_id` int(11) NOT NULL,
  PRIMARY KEY (`secteur_id`,`typeprestation_id`),
  KEY `IDX_EDA335109F7E4405` (`secteur_id`),
  KEY `IDX_EDA33510435D1DF8` (`typeprestation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `secteur_typeprestation`
--

INSERT INTO `secteur_typeprestation` (`secteur_id`, `typeprestation_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(5, 1),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `typeconsommation`
--

CREATE TABLE IF NOT EXISTS `typeconsommation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `agence` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `produit` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prixUnitaire` double NOT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `typeprestation`
--

CREATE TABLE IF NOT EXISTS `typeprestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A8926FA0A4D60759` (`libelle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `typeprestation`
--

INSERT INTO `typeprestation` (`id`, `libelle`, `champssupp1`, `champssupp2`) VALUES
(1, 'LAD', NULL, NULL),
(2, 'RAM', NULL, NULL),
(3, 'Ligne', NULL, NULL),
(4, 'Transfert', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `depot_id` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `motDePasse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D1C63B3AA08CB10` (`login`),
  UNIQUE KEY `UNIQ_1D1C63B3ABE530DA` (`cin`),
  UNIQUE KEY `UNIQ_1D1C63B3F037AB0F` (`tel`),
  KEY `IDX_1D1C63B3D60322AC` (`role_id`),
  KEY `IDX_1D1C63B38510D4DE` (`depot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicule`
--

CREATE TABLE IF NOT EXISTS `vehicule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tonnage` double NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remorque` tinyint(1) DEFAULT NULL,
  `disponibilite` tinyint(1) DEFAULT NULL,
  `vidange` bigint(20) DEFAULT NULL,
  `compteur` bigint(20) NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_292FFF1D12B2DC9C` (`matricule`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vehicule`
--

INSERT INTO `vehicule` (`id`, `tonnage`, `type`, `remorque`, `disponibilite`, `vidange`, `compteur`, `matricule`, `champssupp1`, `champssupp2`) VALUES
(1, 10, 'ctm', 0, 1, NULL, 245154, 'mat2014', NULL, NULL),
(2, 20, 'ctm', 0, 1, NULL, 245154, 'mat2015', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boncarburanthuile`
--
ALTER TABLE `boncarburanthuile`
  ADD CONSTRAINT `FK_4ABB48D0C3782501` FOREIGN KEY (`typeConsommation_id`) REFERENCES `typeconsommation` (`id`),
  ADD CONSTRAINT `FK_4ABB48D0F8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`);

--
-- Constraints for table `clientfdrf`
--
ALTER TABLE `clientfdrf`
  ADD CONSTRAINT `FK_77C1CD5E19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_77C1CD5EF8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`);

--
-- Constraints for table `clientfdrv`
--
ALTER TABLE `clientfdrv`
  ADD CONSTRAINT `FK_6A76DD3A19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_6A76DD3AF8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`);

--
-- Constraints for table `client_secteur`
--
ALTER TABLE `client_secteur`
  ADD CONSTRAINT `FK_D278616219EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D27861629F7E4405` FOREIGN KEY (`secteur_id`) REFERENCES `secteur` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `depot`
--
ALTER TABLE `depot`
  ADD CONSTRAINT `FK_47948BBC5C4BCADC` FOREIGN KEY (`filiale_id`) REFERENCES `filiale` (`id`);

--
-- Constraints for table `feuillederoute`
--
ALTER TABLE `feuillederoute`
  ADD CONSTRAINT `FK_2BA993A64A4A3511` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`id`),
  ADD CONSTRAINT `FK_2BA993A6578BA7B0` FOREIGN KEY (`missionAffretement_id`) REFERENCES `missionaffretement` (`id`),
  ADD CONSTRAINT `FK_2BA993A65C4BCADC` FOREIGN KEY (`filiale_id`) REFERENCES `filiale` (`id`),
  ADD CONSTRAINT `FK_2BA993A69F7E4405` FOREIGN KEY (`secteur_id`) REFERENCES `secteur` (`id`),
  ADD CONSTRAINT `FK_2BA993A6F023560D` FOREIGN KEY (`typePrestation_id`) REFERENCES `typeprestation` (`id`);

--
-- Constraints for table `feuillederoute_chauffeur`
--
ALTER TABLE `feuillederoute_chauffeur`
  ADD CONSTRAINT `FK_3EDD43094ED2265C` FOREIGN KEY (`feuillederoute_id`) REFERENCES `feuillederoute` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_3EDD430985C0B3BE` FOREIGN KEY (`chauffeur_id`) REFERENCES `chauffeur` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feuillederoute_manutentionnaire`
--
ALTER TABLE `feuillederoute_manutentionnaire`
  ADD CONSTRAINT `FK_DA0921EC4ED2265C` FOREIGN KEY (`feuillederoute_id`) REFERENCES `feuillederoute` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DA0921ECAAE024` FOREIGN KEY (`manutentionnaire_id`) REFERENCES `manutentionnaire` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feuillederoute_utilisateur`
--
ALTER TABLE `feuillederoute_utilisateur`
  ADD CONSTRAINT `FK_C1766A854ED2265C` FOREIGN KEY (`feuillederoute_id`) REFERENCES `feuillederoute` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C1766A85FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `indisponibilite`
--
ALTER TABLE `indisponibilite`
  ADD CONSTRAINT `FK_8717036F85C0B3BE` FOREIGN KEY (`chauffeur_id`) REFERENCES `chauffeur` (`id`);

--
-- Constraints for table `missionaffretement`
--
ALTER TABLE `missionaffretement`
  ADD CONSTRAINT `FK_F5CA3EB219EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);

--
-- Constraints for table `modification`
--
ALTER TABLE `modification`
  ADD CONSTRAINT `FK_EF6425D2F8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`),
  ADD CONSTRAINT `FK_EF6425D2FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `peage`
--
ALTER TABLE `peage`
  ADD CONSTRAINT `FK_6D79D943F8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`);

--
-- Constraints for table `secteur_typeprestation`
--
ALTER TABLE `secteur_typeprestation`
  ADD CONSTRAINT `FK_EDA33510435D1DF8` FOREIGN KEY (`typeprestation_id`) REFERENCES `typeprestation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_EDA335109F7E4405` FOREIGN KEY (`secteur_id`) REFERENCES `secteur` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_1D1C63B38510D4DE` FOREIGN KEY (`depot_id`) REFERENCES `depot` (`id`),
  ADD CONSTRAINT `FK_1D1C63B3D60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
