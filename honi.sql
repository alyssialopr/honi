-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 26 mai 2023 à 20:36
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
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `user` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `user`, `contenu`, `image`, `tag`, `date`) VALUES
(200, 'yo', 'yoooooooooooooo', '', 'arts-tag', '2023-05-26 17:55:31'),
(201, 'yo', 'video', '', 'videogames-tag', '2023-05-26 17:55:41'),
(202, 'HELLO', 'HOHIHIH', 'gary.png', 'videogames-tag', '2023-05-26 18:06:00');

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
(12, 'Alyssia', 'alyhuit', 'alyssia.pradon@gmail.com', 'bot'),
(13, 'Alyssia', 'aaa', 'alyssia.pradon@gmail.com', 'abcdef'),
(16, 'Alice', 'alipea', 'alice@gmail.com', '$2y$10$4CBaI3YHc/pIz4GLkjZrMuFOKwRyUKkEmuHNAHn7uRQXeoiiGjz42'),
(17, 'Lana', 'lanadelrey', 'lanadelrey@gmail.com', '$2y$10$yab5zJBqmo8c.4yE4elgNueZe6yrrrSUUh.ptP8brgoH.gschUDbG');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
