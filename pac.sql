-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 21 Avril 2019 à 03:06
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
(18, 'Youss', '5050', 'Youss@gmail.com', 'actif', '2019-04-17 14:49:09', 'staff');

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
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `clientno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`clientno`) VALUES
(1),
(2),
(3);

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
(203, 2, '2019-03-25 03:09:44', 800.8, 5, 0),
(204, 2, '2019-03-25 03:13:08', 800.8, 5, 1),
(600, 1, '2019-04-18 03:12:03', 70, 2, 0),
(613, 1, '2019-04-18 09:59:03', 105, 2, 0),
(615, 1, '2019-04-18 18:18:36', 798, 2, 0),
(616, 1, '2019-04-18 19:20:07', 12, 1, 1),
(618, 1, '2019-04-20 19:54:21', 800, 1, 1),
(619, 1, '2019-04-20 20:00:08', 800, 1, 1),
(663, 1, '2019-04-20 22:46:20', 925, 2, 0),
(664, 1, '2019-04-20 22:49:25', 1475, 3, 0),
(665, 1, '2019-04-20 23:33:25', 1475, 3, 0),
(666, 1, '2019-04-20 23:49:25', 1475, 3, 0),
(667, 1, '2019-04-20 23:50:17', 925, 2, 0),
(668, 1, '2019-04-20 23:51:47', 675, 2, 0),
(669, 1, '2019-04-20 23:54:09', 5000, 1, 0),
(670, 1, '2019-04-20 23:54:53', 2500, 1, 0),
(671, 1, '2019-04-20 23:56:28', 125, 1, 0),
(672, 1, '2019-04-20 23:56:57', 125, 1, 0),
(673, 1, '2019-04-20 23:57:15', 550, 1, 0),
(674, 1, '2019-04-20 23:58:13', 125, 1, 0),
(675, 1, '2019-04-21 00:00:12', 800, 1, 0),
(676, 1, '2019-04-21 00:00:50', 800, 1, 0),
(677, 1, '2019-04-21 00:20:34', 2056, 2, 0),
(678, 1, '2019-04-21 00:21:47', 2056, 2, 0),
(679, 1, '2019-04-21 00:23:07', 1256, 1, 0),
(680, 1, '2019-04-21 00:24:51', 500, 1, 0),
(681, 1, '2019-04-21 00:39:41', 1256, 1, 0);

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
(5, 203, 'chaise1', 1, 2, 150.5),
(6, 203, 'chaise 2', 2, 3, 166.6),
(7, 204, 'chaise1', 1, 2, 150.5),
(8, 204, 'chaise 2', 2, 3, 166.6),
(307, 600, 'chaise1', 1, 1, 20),
(308, 600, 'chaise2', 2, 1, 50),
(334, 613, 'chaise2', 2, 1, 50),
(335, 613, 'chaise3', 3, 1, 55),
(338, 615, 'chaise', 1, 4, 12),
(339, 615, 'chaise3', 3, 5, 150),
(340, 616, 'chaise', 1, 1, 12),
(343, 618, 'chaise1236', 1231564658, 1, 800),
(344, 619, 'chaise1236', 1231564658, 1, 800),
(449, 663, 'chaise1236', 1231564658, 1, 800),
(450, 663, 'chaise3', 1231564661, 1, 125),
(451, 664, 'chaise1236', 1231564658, 1, 800),
(452, 664, 'chaise3', 1231564661, 1, 125),
(453, 664, 'Fauteuil', 1231564663, 1, 550),
(454, 665, 'chaise1236', 1231564658, 1, 800),
(455, 665, 'chaise3', 1231564661, 1, 125),
(456, 665, 'Fauteuil', 1231564663, 1, 550),
(457, 666, 'chaise1236', 1231564658, 1, 800),
(458, 666, 'chaise3', 1231564661, 1, 125),
(459, 666, 'Fauteuil', 1231564663, 1, 550),
(460, 667, 'chaise1236', 1231564658, 1, 800),
(461, 667, 'chaise3', 1231564661, 1, 125),
(462, 668, 'chaise3', 1231564661, 1, 125),
(463, 668, 'Fauteuil', 1231564663, 1, 550),
(464, 669, 'Tableau Artistique', 1231564665, 1, 5000),
(465, 670, 'TableTs', 1231564669, 5, 500),
(466, 671, 'chaise3', 1231564661, 1, 125),
(467, 672, 'chaise3', 1231564661, 1, 125),
(468, 673, 'Fauteuil', 1231564663, 1, 550),
(469, 674, 'chaise3', 1231564661, 1, 125),
(470, 675, 'chaise1236', 1231564658, 1, 800),
(471, 676, 'chaise1236', 1231564658, 1, 800),
(472, 677, 'chaise1236', 1231564658, 1, 800),
(473, 677, 'chaise5', 1231564662, 1, 1256),
(474, 678, 'chaise1236', 1231564658, 1, 800),
(475, 678, 'chaise5', 1231564662, 1, 1256),
(476, 679, 'chaise5', 1231564662, 1, 1256),
(477, 680, 'chaise125', 1231564660, 1, 500),
(478, 681, 'chaise5', 1231564662, 1, 1256);

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
  `prenom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('chaise1236', 1231564658, 800, 80, 'description', 'Interieur'),
('chaise125', 1231564660, 500, 125, 'descrchaise125', 'Exterieur'),
('chaise3', 1231564661, 125, 500, 'descr3', 'Interieur'),
('chaise5', 1231564662, 1256, 500, 'descr55', 'Exterieur'),
('Fauteuil', 1231564663, 550, 0, 'Fauteuil Comfort', 'Interieur'),
('Fauteuil 2 Places', 1231564664, 2500, 32, 'faut Comfortable', 'Interieur'),
('Tableau Artistique', 1231564665, 5000, 0, 'tableau', 'Interieur'),
('Table', 1231564667, 230, 200, 'Tbmx', 'Interieur'),
('AspirateurAS', 1231564668, 125, 500, 'Aspirateur Samsung', 'Interieur'),
('TableTs', 1231564669, 500, 250, 'Descr', 'Interieur'),
('Prodtest', 1231564671, 500, 500, 'description test', 'Interieur'),
('lilyouss', 1231564672, 5000, 500, 'youss', 'Exterieur'),
('wiou', 1231564673, 500, 580, 'description', 'Interieur'),
('chaise55', 1231564674, 5000, 5000, 'descr', 'Interieur'),
('hatem', 1231564675, 500, 52466, 'kjalkja', 'Interieur');

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
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clientno`);

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
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`num`),
  ADD KEY `cat` (`cat`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=682;
--
-- AUTO_INCREMENT pour la table `commande_details`
--
ALTER TABLE `commande_details`
  MODIFY `id_CommandeDetails` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=479;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1231564676;
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
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`clientno`);

--
-- Contraintes pour la table `commande_details`
--
ALTER TABLE `commande_details`
  ADD CONSTRAINT `commande_details_ibfk_1` FOREIGN KEY (`id_Commande`) REFERENCES `commande` (`id_commande`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`cat`) REFERENCES `categorie` (`nom`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
