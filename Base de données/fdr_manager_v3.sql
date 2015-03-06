-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Ven 06 Mars 2015 à 09:48
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
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `indisponibilite`
--

CREATE TABLE IF NOT EXISTS `indisponibilite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datedebut` datetime NOT NULL,
  `datefin` datetime NOT NULL,
  `etatContrat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chauffeur_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8717036F85C0B3BE` (`chauffeur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  `remorque` tinyint(1) NOT NULL,
  `actif` tinyint(1) NOT NULL,
  `vidange` bigint(20) NOT NULL,
  `compteur` bigint(20) NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `champssupp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
