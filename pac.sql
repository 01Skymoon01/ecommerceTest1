-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 21 Avril 2019 à 23:42
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
(11, 'Hatem', '0000', 'hatem.temimi@esprit.tn', 'banni', '2019-04-05 21:16:49', 'staff'),
(12, 'nour', '0000', 'nour.kheder@esprit.tn', 'actif', '2019-04-05 21:21:50', 'staff'),
(13, 'mehdi', '5555', 'mehdihmaidi@gmail.com', 'actif', '2019-04-05 21:22:13', 'staff'),
(14, 'euuriiijj', '4568', 'panda@gmail.com', 'banni', '2019-04-05 21:22:26', 'staff'),
(15, 'zeineb', '4569AK74LOL', 'zeineb@gmail.com', 'actif', '2019-04-05 21:22:52', 'staff'),
(16, 'hibeuuu', '0000', 'hiba.zrig@esprit.tn', 'actif', '2019-04-09 11:05:58', 'staff'),
(17, 'sys', '0000', 'sys@gmail.com', 'actif', '2019-04-14 09:22:14', 'admin'),
(18, 'Youss', '5050', 'Youss@gmail.com', 'actif', '2019-04-17 14:49:09', 'staff'),
(19, 'nourKhedher', 'nour123', 'nour.khedher@esprit.tn', 'actif', '2019-04-21 01:47:11', 'staff'),
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
('Interieur', 'Prod Int');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_commande` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `totalPrix_commande` float NOT NULL,
  `nbProduit_commande` int(11) NOT NULL,
  `etat_commande` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_client`, `date_commande`, `totalPrix_commande`, `nbProduit_commande`, `etat_commande`) VALUES
(1, 12345678, '2019-04-21 18:52:48', 925, 2, 0),
(2, 12345678, '2019-04-21 18:59:42', 3655, 4, 0),
(3, 12345678, '2019-04-21 19:03:32', 925, 2, 0),
(4, 12345678, '2019-04-21 19:13:46', 925, 2, 0),
(5, 12345678, '2019-04-21 19:16:05', 3655, 4, 0),
(6, 12345678, '2019-04-21 19:18:01', 65225, 4, 1),
(7, 12345678, '2019-04-21 20:58:15', 1655, 3, 0),
(8, 12345678, '2019-04-21 21:35:10', 4355, 3, 0);

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
(7, 3, 'chaise3', 1231564661, 1, 125),
(8, 3, 'chaise1236', 1231564658, 1, 800),
(9, 4, 'chaise3', 1231564661, 1, 125),
(10, 4, 'chaise1236', 1231564658, 1, 800),
(11, 5, 'chaise3', 1231564661, 1, 125),
(12, 5, 'chaise1236', 1231564658, 1, 800),
(13, 5, 'Table', 1231564667, 1, 230),
(14, 5, 'Fauteuil 2 Places', 1231564664, 1, 2500),
(15, 6, 'chaise1236', 1231564658, 1, 800),
(16, 6, 'chaise3', 1231564661, 5, 125),
(17, 6, 'Fauteuil 2 Places', 1231564664, 20, 2500),
(18, 6, 'Table', 1231564667, 60, 230),
(19, 7, 'chaise1236', 1231564658, 1, 800),
(20, 7, 'chaise3', 1231564661, 5, 125),
(21, 7, 'Table', 1231564667, 1, 230),
(22, 8, 'chaise3', 1231564661, 1, 125),
(23, 8, 'chaise1236', 1231564658, 5, 800),
(24, 8, 'Table', 1231564667, 1, 230);

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
(16, 12345678, 'chaise3', 1231564661),
(18, 12345678, 'TableTs', 1231564669),
(20, 12345678, 'chaise125', 1231564660),
(21, 12345678, 'chaise5', 1231564662);

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
(12345678, 'Erij', 'mxmbb2018@gmail.com', '6b4dccfb69c362b172bafdfc60c343e1', '2019-04-04', 'Femme', 25928777, 'tarhouni', '12345678.jpg');

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
('chaise1236', 1231564658, 800, 37, 'description', 'Interieur'),
('chaise125', 1231564660, 500, 125, 'descrchaise125', 'Exterieur'),
('chaise3', 1231564661, 125, 10, 'descr3', 'Interieur'),
('chaise5', 1231564662, 1256, 500, 'descr55', 'Exterieur'),
('Fauteuil', 1231564663, 550, 0, 'Fauteuil Comfort', 'Interieur'),
('Fauteuil 2 Places', 1231564664, 2500, 2, 'faut Comfortable', 'Interieur'),
('Tableau Artistique', 1231564665, 5000, 0, 'tableau', 'Interieur'),
('Table', 1231564667, 230, 130, 'Tbmx', 'Interieur'),
('AspirateurAS', 1231564668, 125, 500, 'Aspirateur Samsung', 'Interieur'),
('TableTs', 1231564669, 500, 245, 'Descr', 'Interieur'),
('lilyouss', 1231564672, 5000, 500, 'youss', 'Exterieur');

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
(1, 'mxmbb2018@gmail.com', 135319166, 1);

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
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_produit` (`id_produit`),
  ADD KEY `id_client` (`id_client`);

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
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `commande_details`
--
ALTER TABLE `commande_details`
  MODIFY `id_CommandeDetails` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1231564673;
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
