-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 29 Avril 2019 à 13:01
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pac`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `banstat` enum('banni','actif') NOT NULL DEFAULT 'actif',
  `dateserv` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(20) NOT NULL DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`id`, `login`, `mdp`, `email`, `banstat`, `dateserv`, `role`) VALUES
(12, 'nour', '0000', 'nour.kheder@esprit.tn', 'banni', '2019-04-05 21:21:50', 'staff'),
(17, 'sys', '0000', 'sys@gmail.com', 'actif', '2019-04-14 09:22:14', 'admin'),
(20, 'nourKhedhergr', 'grerg7', 'gonklovox@gmail.com', 'actif', '2019-04-21 01:59:00', 'staff');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `nom` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`nom`, `descr`) VALUES
('Exterieur', 'Prod Ext'),
('Interieur', 'Prod Int'),
('louer', 'a louer');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_commande` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `totalPrix_commande` float NOT NULL DEFAULT '0',
  `nbProduit_commande` int(11) NOT NULL,
  `etat_commande` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_client`, `date_commande`, `totalPrix_commande`, `nbProduit_commande`, `etat_commande`) VALUES
(1, 12345678, '2019-04-21 18:52:48', 925, 2, 0),
(2, 12345678, '2019-04-21 18:59:42', 3655, 4, 1),
(5, 12345678, '2019-04-21 19:16:05', 3655, 4, 0),
(6, 12345678, '2019-02-21 20:18:01', 65225, 4, 1),
(7, 12345678, '2019-04-22 15:00:49', 355, 2, 1),
(12, 12345678, '2019-04-23 14:13:42', 375, 1, 1),
(13, 12345678, '2019-03-23 15:18:04', 1425, 3, 1),
(16, 23548975, '2018-10-16 22:00:00', 5000, 52, 1),
(18, 12345678, '2018-04-26 22:00:00', 418, 5, 1),
(19, 66666666, '2019-02-22 23:32:36', 8125, 2, 0),
(33, 12345678, '2019-04-27 18:32:34', 4230, 2, 1),
(51, 123546, '2019-04-29 01:33:03', 1000, 1, 0),
(52, 123546, '2019-04-29 02:52:57', 1375, 2, 1),
(53, 123546, '2019-04-29 10:58:07', 125, 1, 0),
(54, 123546, '2019-04-29 10:58:17', 125, 1, 0),
(55, 123546, '2019-04-29 10:58:25', 125, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `commande_details`
--

CREATE TABLE `commande_details` (
  `id_CommandeDetails` int(11) NOT NULL,
  `id_Commande` int(11) NOT NULL,
  `Nom_Produit` varchar(20) DEFAULT NULL,
  `id_produit` int(11) NOT NULL,
  `Qte_Produit` int(11) NOT NULL DEFAULT '0',
  `PRIX_Produit` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande_details`
--

INSERT INTO `commande_details` (`id_CommandeDetails`, `id_Commande`, `Nom_Produit`, `id_produit`, `Qte_Produit`, `PRIX_Produit`) VALUES
(1, 1, 'chaise1236', 1231564658, 1, 800),
(2, 1, 'chaise3', 1231564661, 1, 125),
(3, 2, 'chaise3', 1231564661, 1, 125),
(4, 2, 'chaise1236', 1231564658, 1, 800),
(5, 2, 'Fauteuil 2 Places', 1231564664, 1, 2500),
(6, 2, 'Table', 1231564667, 1, 230),
(11, 5, 'chaise3', 1231564661, 1, 125),
(12, 5, 'chaise1236', 1231564658, 1, 800),
(13, 5, 'Table', 1231564667, 1, 230),
(14, 5, 'Fauteuil 2 Places', 1231564664, 1, 2500),
(15, 6, 'chaise1236', 1231564658, 1, 800),
(16, 6, 'chaise3', 1231564661, 5, 125),
(17, 6, 'Fauteuil 2 Places', 1231564664, 20, 2500),
(18, 6, 'Table', 1231564667, 60, 230),
(19, 7, 'chaise3', 1231564661, 1, 125),
(20, 7, 'Table', 1231564667, 1, 230),
(26, 12, 'chaise3', 1231564661, 3, 125),
(27, 13, 'chaise1236', 1231564658, 1, 800),
(28, 13, 'TableTs', 1231564669, 1, 500),
(29, 13, 'chaise3', 1231564661, 1, 125),
(49, 33, 'Table', 1231564667, 1, 230),
(50, 33, 'chaise1236', 1231564658, 5, 800),
(76, 51, 'chaise125', 1231564660, 2, 500),
(77, 52, 'chaise125', 1231564660, 2, 500),
(78, 52, 'chaise3', 1231564661, 3, 125),
(79, 53, 'chaise3', 1231564661, 1, 125),
(80, 54, 'chaise3', 1231564661, 1, 125),
(81, 55, 'chaise3', 1231564661, 1, 125);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `numC` int(11) NOT NULL,
  `solde` int(11) NOT NULL,
  `taux` int(11) DEFAULT NULL,
  `tva` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`numC`, `solde`, `taux`, `tva`, `type`) VALUES
(44444, 4444, 4444, 44444, 44444);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `ID_D` int(255) NOT NULL,
  `DATE_DEMANDE` date DEFAULT NULL,
  `NOM_D` varchar(100) NOT NULL,
  `NUM_D` int(100) NOT NULL,
  `OBJET_D` varchar(100) NOT NULL,
  `DETAILS_D` text NOT NULL,
  `ETAT_D` varchar(25) NOT NULL DEFAULT 'non traitee',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `demande`
--

INSERT INTO `demande` (`ID_D`, `DATE_DEMANDE`, `NOM_D`, `NUM_D`, `OBJET_D`, `DETAILS_D`, `ETAT_D`, `user_id`) VALUES
(2, '2019-03-04', 'djnhozdn', 5555, 'partenariat', 'sdkjnhdskn', 'Traitee', 123546),
(3, '2019-04-09', '2000/02/02', 52541114, 'Sponsoring', 'c,dcp,dks', 'Traitee', 123546),
(88909, '2019-04-22', 'pac', 20202020, 'sponsoring', 'helllo', 'Traitee', 12345678);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `cin` int(7) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nbHeures` int(10) NOT NULL,
  `tarifHoraire` int(10) NOT NULL,
  `id_compt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `nom_prod` varchar(20) DEFAULT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `favoris`
--

INSERT INTO `favoris` (`id`, `id_client`, `nom_prod`, `id_produit`) VALUES
(20, 12345678, 'chaise125', 1231564660),
(21, 12345678, 'chaise5', 1231564662),
(26, 23548975, 'Fauteuil', 1231564663),
(28, 23548975, 'Fauteuil 2 Places', 1231564664),
(30, 12345678, 'chaise3', 1231564661);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id` int(11) NOT NULL,
  `destination` varchar(64) NOT NULL,
  `client` int(11) NOT NULL,
  `livreur` int(11) NOT NULL,
  `localisation` varchar(64) NOT NULL,
  `id_livr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `livraison`
--

INSERT INTO `livraison` (`id`, `destination`, `client`, `livreur`, `localisation`, `id_livr`) VALUES
(14, 'ariana', 521144, 25310024, 'ariana', NULL),
(123, 'ariana', 5211, 25310024, 'ariana', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE `livreur` (
  `cin` int(11) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  `telephonne` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `zone` varchar(64) NOT NULL,
  `status` int(11) DEFAULT '0',
  `note` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `livreur`
--

INSERT INTO `livreur` (`cin`, `nom`, `prenom`, `telephonne`, `email`, `zone`, `status`, `note`) VALUES
(11653236, 'mehdi', 'mehhd', '23584248', 'mehdi@gmail.com', 'tunis', 1, '0,5'),
(25310024, 'nour', 'nour', '23456789', 'gonklovox@gmail.com', 'ariana', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `loc`
--

CREATE TABLE `loc` (
  `idloc` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `dateLoc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `datedeb` date NOT NULL,
  `datefin` date NOT NULL,
  `id_client` int(11) NOT NULL,
  `idLocc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `loc`
--

INSERT INTO `loc` (`idloc`, `nom`, `prix`, `qte`, `dateLoc`, `datedeb`, `datefin`, `id_client`, `idLocc`) VALUES
(28, 'grand table2', 500, 5, '2019-04-28 03:01:19', '2019-04-14', '2019-04-19', 123546, 4),
(29, 'cai chaise', 123, 5, '2019-04-28 03:01:19', '2019-04-20', '2019-04-11', 123546, 4),
(30, 'grand table2', 500, 5, '2019-04-28 03:04:14', '2019-04-14', '2019-04-19', 123546, 5),
(31, 'cai chaise', 123, 5, '2019-04-28 03:04:14', '2019-04-20', '2019-04-11', 123546, 5),
(32, 'grand table2', 500, 5, '2019-04-28 03:42:24', '2019-04-20', '2019-04-18', 123546, 6),
(33, 'cai chaise', 123, 8, '2019-04-28 03:42:24', '2019-04-13', '2019-04-16', 123546, 6),
(34, 'cai chaise', 123, 1, '2019-04-28 03:44:26', '2019-04-12', '2019-04-10', 123546, 7),
(35, 'grand table2', 500, 1, '2019-04-28 04:15:26', '2019-04-20', '2019-04-10', 123546, 8),
(36, 'cai chaise', 123, 1, '2019-04-28 04:15:26', '2019-04-06', '2019-04-11', 123546, 8),
(37, 'cai chaise', 123, 1, '2019-04-28 04:15:58', '0000-00-00', '0000-00-00', 123546, 9),
(38, 'grand table2', 500, 1, '2019-04-28 04:15:58', '0000-00-00', '0000-00-00', 123546, 9),
(39, 'grand table2', 500, 1, '2019-04-28 04:16:13', '0000-00-00', '0000-00-00', 123546, 10),
(40, 'grand table2', 500, 1, '2019-04-28 04:16:36', '0000-00-00', '0000-00-00', 123546, 11),
(41, 'grand table2', 500, 1, '2019-04-28 04:16:52', '0000-00-00', '0000-00-00', 123546, 12),
(42, 'grand table2', 500, 1, '2019-04-28 04:19:26', '0000-00-00', '0000-00-00', 123546, 13),
(43, 'cai chaise', 123, 1, '2019-04-28 04:19:26', '0000-00-00', '0000-00-00', 123546, 13),
(44, 'grand table2', 500, 1, '2019-04-28 10:28:53', '2019-04-20', '2019-04-19', 123546, 10),
(45, 'cai chaise', 123, 2, '2019-04-28 10:28:53', '2019-04-21', '2019-04-20', 123546, 10);

-- --------------------------------------------------------

--
-- Structure de la table `locc`
--

CREATE TABLE `locc` (
  `id_commande` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_commande` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `totalPrix_commande` float NOT NULL DEFAULT '0',
  `nbProduit_commande` int(11) NOT NULL,
  `etat_commande` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `locc`
--

INSERT INTO `locc` (`id_commande`, `id_client`, `date_commande`, `totalPrix_commande`, `nbProduit_commande`, `etat_commande`) VALUES
(5, 123546, '2019-04-28 03:04:14', 3115, 10, 1),
(6, 123546, '2019-04-28 03:42:24', 3484, 13, 0),
(7, 123546, '2019-04-28 03:44:25', 123, 1, 0),
(8, 123546, '2019-04-28 04:15:26', 623, 2, 0),
(9, 123546, '2019-04-28 04:15:58', 623, 2, 0),
(10, 123546, '2019-04-28 10:28:53', 746, 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `cin` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `num_tel` int(20) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`cin`, `nom`, `email`, `mdp`, `date_naissance`, `sexe`, `num_tel`, `prenom`, `avatar`) VALUES
(0, 'yhedr', 'zrty', '698d51a19d8a121ce581499d7b701668', '2019-04-21', 'Homme', 0, 'rthy', ''),
(123546, 'erij', 'nour.khedher@esprit.tn', '827ccb0eea8a706c4c34a16891f84e7b', '2019-04-21', 'Homme', 123456789, 'erij', ''),
(12345678, 'Erij', 'mxmbb2018@gmail.com', '94b8cea57c49a3007225a0c70c475450', '2019-04-04', 'Femme', 0, 'tarhouni', '12345678.jpg'),
(23548975, 'nour', 'nour@gmail.com', 'ebb4ae5e8b495e8fa997f80bce3df801', '2019-04-23', 'Femme', 95164507, 'nour', ''),
(55621814, 'yassine', 'brofrescoYEAH@gmail.com', '2b2531cb39ce2f11233f03645349663c', '2019-04-22', 'Autre', 55621814, 'khedher', '55621814.jpg'),
(66666666, 'sfaxi', 'zeineb.sfaxi@esprit.tn', '67efe3fc78d9ebd16c1de25ffe37627b', '2019-04-22', 'Autre', 92300008, 'zeineb', '66666666.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `nom` varchar(20) NOT NULL,
  `num` int(11) NOT NULL,
  `prix` int(4) NOT NULL,
  `qte` int(4) NOT NULL,
  `descr` text NOT NULL,
  `cat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`nom`, `num`, `prix`, `qte`, `descr`, `cat`) VALUES
('chaise1236', 1231564658, 800, 15, 'description', 'Interieur'),
('chaise125', 1231564660, 500, 121, 'descrchaise125', 'Exterieur'),
('chaise3', 1231564661, 125, 296, 'descr3', 'Interieur'),
('chaise5', 1231564662, 1256, 409, 'descr55', 'Exterieur'),
('Fauteuil', 1231564663, 550, 0, 'Fauteuil Comfort', 'Interieur'),
('Fauteuil 2 Places', 1231564664, 2500, 0, 'faut Comfortable', 'Interieur'),
('Tableau Artistique', 1231564665, 5000, 0, 'tableau', 'Interieur'),
('Table', 1231564667, 230, 0, 'Tbmx', 'Interieur'),
('AspirateurAS', 1231564668, 125, 500, 'Aspirateur Samsung', 'Interieur'),
('TableTs', 1231564669, 500, 1, 'Descr', 'Interieur'),
('lilyouss', 1231564672, 5000, 500, 'youss', 'Exterieur'),
('cai chaise', 1231564674, 123, 200, 'chiase', 'louer'),
('grand table2', 1231564675, 500, 13, 'grand table', 'louer');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `ID_RDV` int(255) NOT NULL,
  `NOW_RDV` date DEFAULT NULL,
  `DATE_RDV` date NOT NULL,
  `OBJET_RDV` varchar(50) NOT NULL,
  `ETAT_RDV` varchar(25) NOT NULL DEFAULT 'non traitee',
  `USER_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rdv`
--

INSERT INTO `rdv` (`ID_RDV`, `NOW_RDV`, `DATE_RDV`, `OBJET_RDV`, `ETAT_RDV`, `USER_ID`) VALUES
(20, '2019-04-22', '2019-04-24', 'RÃ©paration et maintenance sous garantie', 'Acceptee', 12345678),
(21, '2019-04-22', '2019-04-25', 'Livraison non coforme', 'Acceptee', 66666666),
(22, '2019-04-22', '2019-04-28', 'Livraison non reÃ§u', 'en attente', 66666666);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `ID_R` int(255) NOT NULL,
  `NOW_R` date DEFAULT NULL,
  `OBJET_R` varchar(255) NOT NULL,
  `DETAILS_R` text NOT NULL,
  `ETAT` varchar(25) NOT NULL DEFAULT 'non traitee',
  `USER_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reclamation`
--

INSERT INTO `reclamation` (`ID_R`, `NOW_R`, `OBJET_R`, `DETAILS_R`, `ETAT`, `USER_ID`) VALUES
(7, '2019-04-14', 'Livraison non reÃ§u', 'REEEEEEE', 'Traitee', 55621814),
(34, '2019-04-22', 'RÃ©paration et maintenance sous garantie', 'here baby', 'en attente', 12345678),
(35, '2019-04-22', 'RÃ©paration et maintenance sous garantie', 'here baby', 'Traitee', 12345678),
(36, '2019-04-22', 'RÃ©paration et maintenance sous garantie', 'here baby', 'en attente', 12345678),
(38, '2019-04-22', 'RÃ©paration et maintenance sous garantie', 'hhhh123', 'en attente', 66666666),
(39, '2019-04-23', 'Livraison non coforme', 'livraison non', 'Traitee', 12345678),
(40, '2019-04-23', 'Livraison non reÃ§u', 'details', 'en attente', 12345678),
(41, '2019-04-23', 'RÃ©paration et maintenance sous garantie', 'detailss', 'en attente', 12345678),
(42, '2019-04-23', 'Livraison non coforme', 'detailssss', 'en attente', 12345678),
(43, '2019-04-23', 'RÃ©paration et maintenance sous garantie', 'detaileuu', 'en attente', 12345678),
(44, '2019-04-23', 'Livraison non reÃ§u', 'emaile5dem', 'en attente', 66666666),
(45, '2019-04-23', 'Livraison non reÃ§u', 'e5demm', 'en attente', 66666666),
(46, '2019-04-23', 'Livraison non reÃ§u', 'gamkgamlka', 'en attente', 66666666),
(47, '2019-04-23', 'Livraison non reÃ§u', 'mlkamalka', 'en attente', 66666666),
(48, '2019-04-23', 'Livraison non reÃ§u', 'mlkamalka', 'en attente', 66666666),
(49, '2019-04-23', 'Livraison non reÃ§u', 'mlkamalka', 'en attente', 66666666);

-- --------------------------------------------------------

--
-- Structure de la table `recuperation`
--

CREATE TABLE `recuperation` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `confirme` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `recuperation`
--

INSERT INTO `recuperation` (`id`, `mail`, `code`, `confirme`) VALUES
(1, 'mxmbb2018@gmail.com', 888810166, 1);

-- --------------------------------------------------------

--
-- Structure de la table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `superadmin`
--

INSERT INTO `superadmin` (`id`, `username`, `password`) VALUES
(1, 'sys', '0000');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`nom`),
  ADD KEY `nom` (`nom`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `commande_details`
--
ALTER TABLE `commande_details`
  ADD PRIMARY KEY (`id_CommandeDetails`),
  ADD KEY `id_Commande` (`id_Commande`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`numC`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`ID_D`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`cin`),
  ADD KEY `id_compt` (`id_compt`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_produit` (`id_produit`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_livr` (`id_livr`);

--
-- Index pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `loc`
--
ALTER TABLE `loc`
  ADD PRIMARY KEY (`idloc`);

--
-- Index pour la table `locc`
--
ALTER TABLE `locc`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`cin`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `cin` (`cin`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`num`),
  ADD KEY `cat` (`cat`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`ID_RDV`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`ID_R`);

--
-- Index pour la table `recuperation`
--
ALTER TABLE `recuperation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mail` (`mail`);

--
-- Index pour la table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT pour la table `commande_details`
--
ALTER TABLE `commande_details`
  MODIFY `id_CommandeDetails` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `ID_D` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88910;
--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `loc`
--
ALTER TABLE `loc`
  MODIFY `idloc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `locc`
--
ALTER TABLE `locc`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1231564676;
--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `ID_RDV` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `ID_R` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT pour la table `recuperation`
--
ALTER TABLE `recuperation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `membres` (`cin`);

--
-- Contraintes pour la table `commande_details`
--
ALTER TABLE `commande_details`
  ADD CONSTRAINT `commande_details_ibfk_1` FOREIGN KEY (`id_Commande`) REFERENCES `commande` (`id_commande`);

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`id_compt`) REFERENCES `compte` (`numC`);

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `favoris_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `membres` (`cin`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`cat`) REFERENCES `categorie` (`nom`);

--
-- Contraintes pour la table `recuperation`
--
ALTER TABLE `recuperation`
  ADD CONSTRAINT `recuperation_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `membres` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
