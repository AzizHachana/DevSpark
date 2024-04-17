-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 avr. 2024 à 14:14
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `infos`
--

-- --------------------------------------------------------

--
-- Structure de la table `descript`
--

CREATE TABLE `descript` (
  `id` int(20) NOT NULL,
  `Capitale` varchar(20) NOT NULL,
  `Climat` varchar(50) NOT NULL,
  `Langue` varchar(20) NOT NULL,
  `Monnaie` varchar(50) NOT NULL,
  `Attractions_touristiques` varchar(1000) NOT NULL,
  `Activites` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` int(20) NOT NULL,
  `NomP` varchar(20) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `NomP`, `image`) VALUES
(21, 'Tazerty', 0x36363064626631313333353465313731323137363931332e706e67),
(22, 'fghjk', 0x36363162666234373438613665313731333130393833312e706e67),
(23, 'ghjkghjk', 0x36363162666263366465343164313731333130393935382e706e67),
(24, '78894565', 0x36363164386136623962383065313731333231323031312e706e67),
(25, '78894565', 0x36363164386162346534666461313731333231323038342e706e67),
(26, 'dfghjk', 0x36363164616434313138643861313731333232303932392e706e67),
(27, 'dfghjk', 0x36363164616632313930336234313731333232313430392e706e67),
(28, 'vbn,;', 0x36363164623734383361333962313731333232333439362e706e67),
(29, 'vbn,;', 0x36363164623737626562333634313731333232333534372e706e67),
(30, 'oumi', 0x36363164636532613134333862313731333232393335342e706e67);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `descript`
--
ALTER TABLE `descript`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `descript`
--
ALTER TABLE `descript`
  ADD CONSTRAINT `descript_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pays` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
