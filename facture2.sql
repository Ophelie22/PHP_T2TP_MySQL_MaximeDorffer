-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 16 Mars 2017 à 15:29
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `facture2`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `NumClient` int(11) NOT NULL,
  `NomClient` varchar(255) NOT NULL,
  `PrenomClient` varchar(255) NOT NULL,
  `AdresseClient` varchar(255) NOT NULL,
  `Cp` varchar(255) NOT NULL,
  `VilleClient` varchar(255) NOT NULL,
  `PaysClient` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`NumClient`, `NomClient`, `PrenomClient`, `AdresseClient`, `Cp`, `VilleClient`, `PaysClient`) VALUES
(1, 'Lehmann', 'Nicolas', '12 a rue du sylvaner', '68980', 'Beblenheim', 'France'),
(2, 'toto', 'titi', 'rue de tata', '67000', 'Strasbourg', 'France'),
(3, 'ff', 'tt', '12 rue du toto', '67000', 'Strasbourg', 'France'),
(4, 'gg', 'yy', 'ee', '67000', 'Strasbourg', 'France'),
(5, 'dfsfs', 'fds', 'fds', '55000', 'fds', 'fds'),
(6, 'gdf', 'dsf', 'fdsfsd', '89000', 'dsf', 'fds');

-- --------------------------------------------------------

--
-- Structure de la table `d_facture`
--

CREATE TABLE `d_facture` (
  `Qte` int(11) NOT NULL,
  `NumFacture` int(11) NOT NULL,
  `NumProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `d_facture`
--

INSERT INTO `d_facture` (`Qte`, `NumFacture`, `NumProduit`) VALUES
(15, 3, 6),
(30, 3, 7),
(50, 3, 8),
(50, 4, 8);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `NumFacture` int(11) NOT NULL,
  `DateFacture` date NOT NULL,
  `NumClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`NumFacture`, `DateFacture`, `NumClient`) VALUES
(3, '2017-01-05', 5),
(4, '2017-01-05', 3);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `NumProduit` int(11) NOT NULL,
  `Des` varchar(255) NOT NULL,
  `PUHT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`NumProduit`, `Des`, `PUHT`) VALUES
(5, 'Ecran 4k', 499.99),
(6, 'Ram', 100),
(7, 'Gpu', 200),
(8, 'clavier', 40);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`ID`, `User`, `Password`) VALUES
(1, 'Maxime', '12345');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`NumClient`);

--
-- Index pour la table `d_facture`
--
ALTER TABLE `d_facture`
  ADD PRIMARY KEY (`NumFacture`,`NumProduit`),
  ADD KEY `NumFacture` (`NumFacture`),
  ADD KEY `NumProduit` (`NumProduit`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`NumFacture`),
  ADD KEY `NumClient` (`NumClient`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`NumProduit`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `NumClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `NumFacture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `NumProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `d_facture`
--
ALTER TABLE `d_facture`
  ADD CONSTRAINT `d_facture_ibfk_1` FOREIGN KEY (`NumFacture`) REFERENCES `facture` (`NumFacture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `d_facture_ibfk_2` FOREIGN KEY (`NumProduit`) REFERENCES `produits` (`NumProduit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`NumClient`) REFERENCES `client` (`NumClient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
