-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 11 jan. 2024 à 13:14
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `basemuse`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users`
(
    `Id`         int(11) NOT NULL,
    `Username`   varchar(200) NOT NULL,
    `Email`      varchar(200) DEFAULT NULL,
    `Age`        int(11) DEFAULT NULL,
    `PASSWORD`   varchar(200) NOT NULL,
    `Profession` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `PASSWORD`, `Profession`)
VALUES (1, 'samy', 'samy@dziri.com', 18, 'samy', ''),
       (2, 'dziriD', 's@d.com', 16, 's', 'S'),
       (6, 'dzirisamy', 'd', 1, 'd', 'samy');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
    MODIFY `Id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
