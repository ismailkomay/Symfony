-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Mars 2015 à 17:59
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `fdr_manager`
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
-- Structure de la table `chauffeur`
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `chauffeur`
--

INSERT INTO `chauffeur` (`id`, `nom`, `prenom`, `tel`, `cin`, `adresse`, `dateembauche`, `disponibilite`, `typeconvention`, `champssupp1`, `etatContrat`) VALUES
(1, 'Ismail', 'komaay', '0661225548', 'Q285214', 'N 12 Adresse T', '2011-01-01', 1, 'cdi', NULL, 'ouvert'),
(2, 'ibrahim', 'Lhafidi', '-----', 'HE15487', 'Adressee telle', '2010-03-01', 1, 'cdi', NULL, 'ouvert'),
(3, 'Souhai', 'Akrami', '066215458', 'AH15487', 'machin', '2020-01-01', 1, 'cdd', NULL, 'ouvert');

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

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomresponsable` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenomresponsable` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nomresponsable`, `prenomresponsable`, `tel`, `adresse`, `cin`, `email`, `fax`, `nomentreprise`, `encompte`, `clientaffret`, `clientramass`, `numcompte`, `champssupp1`, `champssupp2`) VALUES
(1, 'Client1_1', 'Client1_1', NULL, NULL, NULL, NULL, NULL, 'EntrepriseClient1_1', 1, 0, 1, '124578', NULL, NULL),
(2, 'Client1_2', 'Client1_2', NULL, NULL, NULL, NULL, NULL, 'EntrepriseClient1_2', 1, 0, 1, '457891', NULL, NULL),
(3, 'Client2_1', 'Client2_1', NULL, NULL, NULL, NULL, NULL, 'EntrepriseClient2_1', 1, 0, 1, NULL, NULL, NULL),
(4, 'Client1et2', 'Client1et2', NULL, NULL, NULL, NULL, NULL, 'EntrepriseClient1e2', 1, 0, 1, NULL, NULL, NULL);

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
(1, 3),
(2, 3),
(3, 4),
(4, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

CREATE TABLE IF NOT EXISTS `depot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filiale_id` int(11) NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champ1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champ2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_47948BBC77153098` (`code`),
  UNIQUE KEY `UNIQ_47948BBCA4D60759` (`libelle`),
  KEY `IDX_47948BBC5C4BCADC` (`filiale_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `depot`
--

INSERT INTO `depot` (`id`, `filiale_id`, `code`, `libelle`, `adresse`, `champ1`, `champ2`) VALUES
(1, 1, 'DEP01', 'Depot1_1', 'Adresse ....', NULL, NULL),
(2, 1, 'DEP01Bis', 'Depot1_2', 'Adresse ....', NULL, NULL),
(3, 2, 'dep3', 'DEP03', NULL, NULL, NULL),
(4, 1, 'Dep4', 'Dep4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `feuillederoute`
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
  `compteurFinal` bigint(20) NOT NULL,
  `etat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
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
  `typePrestation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2BA993A64A4A3511` (`vehicule_id`),
  KEY `IDX_2BA993A6F023560D` (`typePrestation_id`),
  KEY `IDX_2BA993A69F7E4405` (`secteur_id`),
  KEY `IDX_2BA993A65C4BCADC` (`filiale_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `filiale`
--

CREATE TABLE IF NOT EXISTS `filiale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FD98CA9D77153098` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `filiale`
--

INSERT INTO `filiale` (`id`, `code`, `libelle`, `adresse`, `champSup1`, `champSup2`) VALUES
(1, 'fil01', 'Filiale ME', 'Machin Casa', NULL, NULL),
(2, 'fil02', 'Filiale ME2', 'Machin Khouribga', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `indisponibilite`
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
-- Structure de la table `manutentionnaire`
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `manutentionnaire`
--

INSERT INTO `manutentionnaire` (`id`, `nom`, `prenom`, `matricule`, `type`, `cin`, `tel`, `adresse`, `champssupp1`, `champssupp2`) VALUES
(1, 'Youssef', 'Raji', 'm2014', 'interim', 'a54879', NULL, NULL, NULL, NULL),
(2, 'Achraf', 'LKorchi', 'm2010', 'ctm', 'qe1587', NULL, NULL, NULL, NULL),
(3, 'Salah', 'Boumehdi', 'm1998', 'ctm', 'ze1587', NULL, NULL, NULL, NULL);

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
  `client_id` int(11) NOT NULL,
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
  `feuilleDeRoute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F5CA3EB2F8F947DA` (`feuilleDeRoute_id`),
  KEY `IDX_F5CA3EB219EB6921` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `modification`
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
-- Structure de la table `peage`
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
-- Structure de la table `prestation`
--

CREATE TABLE IF NOT EXISTS `prestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `secteur_id` int(11) DEFAULT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `typePrestation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_51C88FAD77153098` (`code`),
  KEY `IDX_51C88FADF023560D` (`typePrestation_id`),
  KEY `IDX_51C88FAD9F7E4405` (`secteur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `prestation`
--

INSERT INTO `prestation` (`id`, `secteur_id`, `code`, `description`, `champssupp1`, `champssupp2`, `typePrestation_id`) VALUES
(1, 3, 'LAD01', NULL, NULL, NULL, 1),
(2, 4, 'LAD02', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
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
-- Structure de la table `secteur`
--

CREATE TABLE IF NOT EXISTS `secteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `depart` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arrivee` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remarques` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8045251F77153098` (`code`),
  UNIQUE KEY `UNIQ_8045251FA4D60759` (`libelle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `secteur`
--

INSERT INTO `secteur` (`id`, `code`, `type`, `libelle`, `depart`, `arrivee`, `remarques`, `champssupp1`, `champssupp2`) VALUES
(3, 'AS1', 'secteur', 'Ain Sbaà 1', NULL, NULL, NULL, NULL, NULL),
(4, 'AS2', 'secteur', 'Ain Sbaà 2', NULL, NULL, NULL, NULL, NULL),
(5, 'LignCR', 'ligne', 'Casa-Rabat', 'Casa', 'Rabat', NULL, NULL, NULL),
(6, 'LignKhC', 'secteur', 'Khouribga-Casa', 'Khouribga', 'Casa', NULL, NULL, NULL),
(7, 'itCT', 'itineraire', 'Casa-TitMelil', 'Casa', 'TitMelil', NULL, NULL, NULL),
(8, 'itCO', 'secteur', 'Casa-Oujda', 'Casa', 'Oujda', NULL, NULL, NULL);

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
  `champSup1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `typeprestation`
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
-- Contenu de la table `typeprestation`
--

INSERT INTO `typeprestation` (`id`, `libelle`, `champssupp1`, `champssupp2`) VALUES
(1, 'LAD', NULL, NULL),
(2, 'Ramassage', NULL, NULL),
(3, 'Ligne', NULL, NULL),
(4, 'Transfert', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `motDePasse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champSup2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `depot_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D1C63B3AA08CB10` (`login`),
  UNIQUE KEY `UNIQ_1D1C63B3F037AB0F` (`tel`),
  KEY `IDX_1D1C63B3D60322AC` (`role_id`),
  KEY `IDX_1D1C63B38510D4DE` (`depot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE IF NOT EXISTS `vehicule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tonnage` double NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remorque` tinyint(1) DEFAULT NULL,
  `disponibilite` tinyint(1) DEFAULT NULL,
  `vidange` bigint(20) NOT NULL,
  `compteur` bigint(20) NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_292FFF1D12B2DC9C` (`matricule`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `tonnage`, `type`, `remorque`, `disponibilite`, `vidange`, `compteur`, `matricule`, `champssupp1`, `champssupp2`) VALUES
(1, 10, 'ctm', 1, 1, 10000, 125487, 'mat12548', NULL, NULL),
(2, 20, 'ctm', 1, 1, 20000, 154879, 'mat12549', NULL, NULL),
(3, 10, 'buget', 0, 1, 150000, 30000, 'mat12551', NULL, NULL);

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
  ADD CONSTRAINT `FK_77C1CD5E19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_77C1CD5EF8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`);

--
-- Contraintes pour la table `clientfdrv`
--
ALTER TABLE `clientfdrv`
  ADD CONSTRAINT `FK_6A76DD3A19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_6A76DD3AF8F947DA` FOREIGN KEY (`feuilleDeRoute_id`) REFERENCES `feuillederoute` (`id`);

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
  ADD CONSTRAINT `FK_2BA993A65C4BCADC` FOREIGN KEY (`filiale_id`) REFERENCES `filiale` (`id`),
  ADD CONSTRAINT `FK_2BA993A69F7E4405` FOREIGN KEY (`secteur_id`) REFERENCES `secteur` (`id`),
  ADD CONSTRAINT `FK_2BA993A6F023560D` FOREIGN KEY (`typePrestation_id`) REFERENCES `typeprestation` (`id`);

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
  ADD CONSTRAINT `FK_1D1C63B38510D4DE` FOREIGN KEY (`depot_id`) REFERENCES `depot` (`id`),
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
