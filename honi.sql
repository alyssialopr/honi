-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 16 avr. 2023 à 21:57
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
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `user`, `contenu`, `date`) VALUES
(6, 'Valentine', 'C\'est si bien Honi', '2023-04-10 21:38:55'),
(7, 'Vanessa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend augue vitae ante scelerisque, vel bibendum lectus molestie. Sed in turpis dolor. Cras in bibendum turpis. Aliquam ante libero, bibendum at iaculis sit amet, auctor nec est. Vestibulum blandit, massa ut facilisis scelerisque, libero purus varius ex, nec sollicitudin felis augue nec dui. Aenean non pretium enim, ut hendrerit purus. Sed eu pellentesque turpis. Pellentesque mauris enim, vehicula vel lacinia non, auctor non neque.', '2023-04-10 19:46:59'),
(8, 'Katie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend augue vitae ante scelerisque, vel bibendum lectus molestie. Sed in turpis dolor. Cras in bibendum turpis. Aliquam ante libero, bibendum at iaculis sit amet, auctor nec est. Vestibulum blandit, massa ut facilisis scelerisque, libero purus varius ex, nec sollicitudin felis augue nec dui. Aenean non pretium enim, ut hendrerit purus. Sed eu pellentesque turpis. Pellentesque mauris enim, vehicula vel lacinia non, auctor non neque.', '2023-04-10 19:47:26'),
(9, 'Donnatienn', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend augue vitae ante scelerisque, vel bibendum lectus molestie. Sed in turpis dolor. Cras in bibendum turpis. Aliquam ante libero, bibendum at iaculis sit amet, auctor nec est. Vestibulum blandit, massa ut facilisis scelerisque, libero purus varius ex, nec sollicitudin felis augue nec dui. Aenean non pretium enim, ut hendrerit purus. Sed eu pellentesque turpis. Pellentesque mauris enim, vehicula vel lacinia non, auctor non neque.', '2023-04-10 21:48:15'),
(10, 'Maeva', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend augue vitae ante scelerisque, vel bibendum lectus molestie. Sed in turpis dolor. Cras in bibendum turpis. Aliquam ante libero, bibendum at iaculis sit amet, auctor nec est. Vestibulum blandit, massa ut facilisis scelerisque, libero purus varius ex, nec sollicitudin felis augue nec dui. Aenean non pretium enim, ut hendrerit purus. Sed eu pellentesque turpis. Pellentesque mauris enim, vehicula vel lacinia non, auctor non neque', '2023-04-10 20:11:23'),
(11, 'Louis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend augue vitae ante scelerisque, vel bibendum lectus molestie. Sed in turpis dolor. Cras in bibendum turpis. Aliquam ante libero, bibendum at iaculis sit amet, auctor nec est. Vestibulum blandit, massa ut facilisis scelerisque, libero purus varius ex, nec sollicitudin felis augue nec dui. Aenean non pretium enim, ut hendrerit purus. Sed eu pellentesque turpis. Pellentesque mauris enim, vehicula vel lacinia non, auctor non neque', '2023-04-10 20:11:58'),
(23, 'Maya', 'Les abeilles sont des insectes très importants pour notre écosystème. Elles jouent un rôle crucial dans la pollinisation des plantes, ce qui contribue à la production de fruits, de légumes et d\'autres cultures. En plus de cela, les abeilles produisent également du miel, une substance sucrée et savoureuse qui est utilisée depuis des siècles dans la cuisine et la médecine.\r\n\r\nLe miel est produit par les abeilles à partir du nectar des fleurs. Les abeilles recueillent le nectar avec leur langue et le stockent dans leur estomac. Ensuite, elles le régurgitent dans les cellules de la ruche où il est transformé en miel par un processus de déshydratation. Le miel est ensuite stocké dans des alvéoles jusqu\'à ce qu\'il soit prêt à être consommé', '2023-04-13 08:15:54'),
(24, 'Maya', 'Le miel est non seulement délicieux, mais il a également de nombreux bienfaits pour la santé. Il est riche en antioxydants, qui aident à combattre les radicaux libres dans le corps. Le miel est également un remède naturel pour la toux et le rhume, car il peut aider à soulager les symptômes de l\'inflammation des voies respiratoires.\r\n\r\nMalheureusement, les abeilles sont menacées par de nombreux facteurs, notamment la pollution, les pesticides et la destruction de leur habitat naturel. Il est donc important de protéger les abeilles et leur environnement pour assurer leur survie et leur rôle vital dans notre écosystème. En plus de cela, il est important de soutenir les apiculteurs locaux en achetant du miel local et en soutenant leur travail acharné pour maintenir les colonies d\'abeilles en bonne santé.', '2023-04-13 10:16:19'),
(25, 'Julie', 'Les jeux vidéo sont une forme de divertissement populaire qui a gagné en popularité au cours des dernières décennies. Les jeux vidéo peuvent être joués sur une variété de plates-formes, notamment les consoles de jeux, les ordinateurs et les appareils mobiles.\r\n\r\nLes jeux vidéo offrent une expérience immersive pour les joueurs, leur permettant d\'explorer des mondes virtuels, de résoudre des énigmes et de vivre des aventures épiques. De nombreux jeux vidéo sont dotés d\'une histoire complexe, d\'un gameplay stimulant et de graphismes époustouflants, ce qui rend les jeux vidéo de plus en plus captivants', '2023-04-13 10:18:28'),
(26, 'julie', 'Les jeux vidéo ont également évolué pour devenir une forme de sport électronique (ou e-sport), avec des compétitions professionnelles où les joueurs peuvent gagner des prix en argent et des titres de champion. Les jeux vidéo ont également été utilisés comme outil d\'éducation, avec des jeux éducatifs qui enseignent des compétences de base telles que la lecture, l\'écriture et les mathématiques.\r\n\r\nCependant, il y a aussi des critiques à l\'encontre des jeux vidéo, qui soulignent leur potentiel de dépendance et de violence. Certains jeux vidéo ont été critiqués pour leur contenu sexuellement explicite ou leur glorification de la violence.\r\n\r\nMalgré ces critiques, les jeux vidéo continuent d\'être une forme de divertissement extrêmement populaire dans le monde entier. Les joueurs du monde entier peuvent se connecter et jouer ensemble en ligne, créant ainsi une communauté internationale de joueurs passionnés.', '2023-04-13 10:18:40'),
(27, 'alyssia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum arcu nec nisl accumsan commodo placerat eu enim. Sed posuere orci nec metus fermentum accumsan. Donec nec congue urna. Mauris nulla erat, viverra egestas dictum non, dignissim et nunc. Ut finibus turpis luctus, egestas metus sit amet, condimentum metus. Aliquam tristique, magna in semper congue, elit nisl ultricies ante, eget posuere quam turpis vel lorem. Duis sodales, turpis in tempus scelerisque, ante quam congue nibh, a scelerisque mi nulla id nisi. Etiam id nisl aliquet, malesuada magna sed, iaculis purus. Sed quis pharetra lacus, id iaculis felis. Fusce congue, metus non blandit sodales, metus nulla lobortis erat, ut vestibulum massa turpis tristique mauris. Proin tincidunt tortor ac vulputate venenatis. Ut tellus velit, dignissim nec tortor id, sodales sagittis purus. Sed', '2023-04-13 19:58:33');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
