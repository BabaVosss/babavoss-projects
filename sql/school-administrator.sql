-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 fév. 2022 à 16:56
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school-administrator`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id_classe` int(11) NOT NULL,
  `nom_classe` varchar(50) NOT NULL,
  `effectif` int(11) DEFAULT NULL,
  `numero_ress` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `nom_classe`, `effectif`, `numero_ress`) VALUES
(2, 'ING 2 INFO', 0, 0),
(3, 'ING 2 GeC', 0, 0),
(4, 'ING 2 MECA', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

CREATE TABLE `cour` (
  `id_cour` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  `intitule` varchar(50) NOT NULL,
  `debut_cour` datetime NOT NULL,
  `fin_cour` datetime NOT NULL,
  `commentaire` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`id_cour`, `id_classe`, `id_prof`, `id_salle`, `intitule`, `debut_cour`, `fin_cour`, `commentaire`) VALUES
(1, 1, 1, 5, 'top', '2021-12-16 11:00:00', '2021-12-16 15:00:00', ''),
(2, 1, 1, 5, 'cour editable', '2021-12-14 06:00:00', '2021-12-14 09:00:00', ''),
(3, 1, 1, 6, 'PREMIER COUR', '2021-12-15 03:00:00', '2021-12-15 05:00:00', ''),
(4, 1, 1, 6, 'MATH', '2021-12-13 03:30:00', '2021-12-13 05:30:00', ''),
(5, 0, 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(6, 0, 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(7, 0, 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `id_prof` int(11) NOT NULL,
  `nom_prof` varchar(50) NOT NULL,
  `matiere` varchar(50) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `addresse` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id_prof`, `nom_prof`, `matiere`, `numero`, `mail`, `addresse`) VALUES
(1, 'jul', '', 0, '', ''),
(9, 'fatimata diallo', 'indus', 0, '', ''),
(34, 'AHMADOU BANBA', '', 0, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `nom_salle` varchar(50) NOT NULL,
  `localisation` text DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `nom_salle`, `localisation`, `capacite`) VALUES
(6, 'BCI 2', 'BCI', 0),
(7, 'BCI 1', 'BCI', 0),
(8, 'BCI 3', 'BCI', 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nom`, `prenom`, `mail`, `pwd`, `id`) VALUES
('souley', 'diallo', 'souley3333@gmail.com', 'babavoss', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`);

--
-- Index pour la table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`id_cour`),
  ADD KEY `id_classe` (`id_classe`),
  ADD KEY `id_prof` (`id_prof`),
  ADD KEY `id_salle` (`id_salle`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id_prof`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `cour`
--
ALTER TABLE `cour`
  MODIFY `id_cour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
