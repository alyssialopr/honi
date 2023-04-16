-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 16 avr. 2023 à 21:56
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `honi`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int NOT NULL,
  `name` varchar(140) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(140) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(140) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(140) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `name`, `username`, `mail`, `password`) VALUES
(1, 'aloup', 'alype', 'alyssia@neuf.fr', 'abcdef'),
(8, 'Alyssia', 'alouha', 'alyssia.pradon@gmail.com', '$2y$10$G9lqlGkDnmR.CyWJt3ILp..PA1Bwbis8eAxRxhd1xT0V/NJ/sX6Ju'),
(9, 'Alyssia', 'alouha', 'alyssia.pradon@gmail.com', '$2y$10$oODEUWPWfq.Dainc2P9xbevXG10tid/Bd6gFA.jhXmGCpmE9uacXi'),
(10, 'alyssia', 'alypipi', 'alyssia.pradon@gmail.com', '$2y$10$Vz25NA5W8VqwXQMynhT7bO1Jplyv7q4SoVIIJFAy8Tqu.75FT5/w6'),
(11, 'Alyssia', 'alyhuit', 'alyssia.pradon@gmail.com', 'bot'),
(12, 'Alyssia', 'alyhuit', 'alyssia.pradon@gmail.com', 'bot');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
