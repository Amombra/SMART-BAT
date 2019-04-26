-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 26 avr. 2019 à 03:43
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `constructions`
--

-- --------------------------------------------------------

--
-- Structure de la table `prix`
--

CREATE TABLE `prix` (
  `id` int(11) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `tarif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prix`
--

INSERT INTO `prix` (`id`, `dimension`, `tarif`) VALUES
(5, '100', '50000'),
(9, '500', '300000');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `taux_pourcentage` varchar(50) NOT NULL,
  `superficie` varchar(100) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `images` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `taux_pourcentage`, `superficie`, `periode`, `images`) VALUES
(1, '-20%', '500m', '15/08/2019 au 15/09/2019', 'imgs1.jpg'),
(2, '-30%', '700m', '15/08/2019 au 15/09/2019', 'imgs2.jpg'),
(3, '-25%', '350m', '15/08/2019 au 15/09/2019', 'imgs3.jpg'),
(4, '-10%', '100m', '15/08/2019 au 15/09/2019', 'imgs4.jpg'),
(5, '-10%', '50m', '15/08/2019 au 15/09/2019', 'imgs5.jpg'),
(6, '-35%', '800m', '15/08/2019 au 15/09/2019', 'imgs6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `souscrire`
--

CREATE TABLE `souscrire` (
  `id` int(11) NOT NULL,
  `situation` varchar(100) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `datees` varchar(50) NOT NULL,
  `parcelle` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `souscrire`
--

INSERT INTO `souscrire` (`id`, `situation`, `numero`, `datees`, `parcelle`, `id_user`) VALUES
(23, 'MOUYASSUE', '07263550', '2019-10-12', '400m', 17),
(28, 'MAFERE', '01223345', '2020-04-14', '200m', 17),
(29, '', '', '', '', 17);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `localite` varchar(50) NOT NULL,
  `dates` varchar(50) NOT NULL,
  `fonction` varchar(50) DEFAULT NULL,
  `is_expert` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `password`, `localite`, `dates`, `fonction`, `is_expert`) VALUES
(17, 'KATCHE', 'katcheopportune@gmail.com', '123456', 'COCODY', '1999-09-03', 'Architecte', 1),
(20, 'Ehui', 'ehui@gmail.com', '123456', 'KOUMASSI', '1996-01-02', 'Geotechnicien', 1),
(25, 'Okara', 'oka@gmail.com', '456789', 'PORT-BOUET', '2008-05-02', NULL, 0),
(26, 'Kassi', 'kassiandoche@gmail.com', '456789', 'PLATEAU', '2001-05-02', NULL, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `prix`
--
ALTER TABLE `prix`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `souscrire`
--
ALTER TABLE `souscrire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `prix`
--
ALTER TABLE `prix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `souscrire`
--
ALTER TABLE `souscrire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `souscrire`
--
ALTER TABLE `souscrire`
  ADD CONSTRAINT `souscrire_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
