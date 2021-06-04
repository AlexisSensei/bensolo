-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 04 juin 2021 à 21:01
-- Version du serveur :  10.5.9-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ben_solo`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `txt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `img`, `txt`) VALUES
(1, 'Reylo', 'img/upload/kylo_saber.png', 'test'),
(2, 'Reylo', '../img/upload/kylo_saber.png', 'text');

-- --------------------------------------------------------

--
-- Structure de la table `commentaries`
--

CREATE TABLE `commentaries` (
  `id` int(11) UNSIGNED NOT NULL,
  `pseudo` varchar(18) DEFAULT NULL,
  `commentary` longtext DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaries`
--

INSERT INTO `commentaries` (`id`, `pseudo`, `commentary`, `date`) VALUES
(35, 'dusha', 'mé nan', '2021-05-30 19:42:36'),
(38, 'Dusa', 'wow mais c\'est génial ici', '2021-05-30 19:58:51'),
(39, 'ben', 'très jolie galerie !!', '2021-05-30 20:02:54'),
(40, 'Rey', 'mé nan je veux tester si je peux écrire un très long message juste pour voir ', '2021-05-30 21:56:03'),
(41, 'Guzz', 'AAAAAAAAAAAAh l\'espace, SI GRAND, SI VASTE........', '2021-05-30 22:07:36'),
(42, 'Fantasio974', 'OUIIIIII MAIS C\'EST PAS TOI QUI DECIIIIIIIIIIIDE !!! (lel)', '2021-05-30 22:48:29'),
(43, 'Ponce', 'VOUS ETES DE TRES JOLIES FLEURS (emoji fleur) abonnez-vous à ponpon twitch.tv/ponce', '2021-05-30 22:53:22'),
(45, 'Bob lennon', 'je souhaitais seulement déposer un beau message sur cette délicieuse galerie mais en profitant aussi de l\'occasion pour voir si il n\'y a pas de problème de texte lorsque j\'aurai posté mon commentaire. allez zou !', '2021-05-31 07:13:05'),
(46, 'kléklé', 'ptit test oklm quoi', '2021-06-02 16:22:42');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) UNSIGNED NOT NULL,
  `fa_name` varchar(20) DEFAULT NULL,
  `fi_name` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `msg` longtext DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `fa_name`, `fi_name`, `email`, `msg`, `date`) VALUES
(1, 'Duvivier', 'Clément ', 'duvivier.clem@gmail.com', 'ton site est super cool gg !', '2021-06-04 16:04:16'),
(2, 'Duvivier', 'Clément ', 'reylo@test', 'hello c\'etait pour savoir combien de temps tu avais travaillé sur ce projet !', '2021-06-04 16:06:03'),
(5, 'Castor', 'Papa', 'test@test.com', 'castor.', '2021-06-04 16:08:55'),
(6, 'OBERT', 'yannis', 'ponce@fleurs.com', 'tu es une tres jolie fleur !', '2021-06-04 16:12:59');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `pseudo` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `role` char(11) DEFAULT 'editeur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `pass`, `role`) VALUES
(3, 'kléklé', 'duvivier.clem@gmail.com', '$2y$10$X5BiYMhVIwCnV1l4Heb9tu8Bxvbay0CTi1Hwdyl/5E8EVv1MHrWYK', 'editeur'),
(5, 'Dusa', 'clement.duvivier@mihy.eu', '$2y$10$wt6CEiCbTSjt5KbLmEmdXeRrwWffaRrLrJAxC0UpUYqGSEkvPQWmO', 'editeur'),
(7, 'dusha', 'test@test.com', '$2y$10$RMGVIf/OCygPQUFkX1rKiO.8p5NREXMdae4FGu6HJIZjBQBAeshjq', 'editeur'),
(8, 'ben', 'reylo@test', '$2y$10$M2N.7v6gSYm3gYisHUAklebd/43cOo9cqUT6d/UnxSEHrQKQmyK7.', 'editeur'),
(9, 'DictateurAbattu', 'abattu@klekle', '$2y$10$AlQKDOIbsqqXD/5lWEST3uwy.Jcd.HEhi/dIEp/ylVcrszCtsjFAe', 'admin'),
(12, 'soren', 'soren@test.com', '$2y$10$UQS5H1H1Si8RWuQwH5LVKeRKF/Hf7YXPhc8hACPjNMxJonefHMSh2', 'editeur'),
(13, 'kapla', 'kapla@abattu.com', '$2y$10$d0QzBSiF8d/9sa0gTAp1M.T5uOcsLKeoKw2EwSJu9ukQzxTqSTkiS', 'editeur'),
(15, 'Papa Castor', 'abattu@test', '$2y$10$WYTRCGDkqsJllBBsdmAxNu93j3qVyXTD6iJZjH8kkVAZWnoDdUfGm', 'editeur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaries`
--
ALTER TABLE `commentaries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `commentaries`
--
ALTER TABLE `commentaries`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
