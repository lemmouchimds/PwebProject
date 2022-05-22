-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 22 mai 2022 à 17:29
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eventpage`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`ID`, `name`, `date`, `type`, `description`, `img`) VALUES
(1, 'Algerian Game Challenge', '2020-02-15', 'Formation', 'A nation-wide game development contest held annually.', 'https://microclub.net/static/media/AGCX.57ffb36d.svg'),
(2, 'Micro Catch The Flag', '2019-04-25', 'Conference', 'A conference about cybersecurity alongside a national CTF competition organised by Micro Club.', 'https://microclub.net/static/media/MCTF3.0.8158779b.svg'),
(4, 'Local Hack Day', '2021-01-06', 'Conference', 'A nation-wide game development contest held annually.', 'https://microclub.net/static/media/Hacktober%20Fest.59c7a339.svg'),
(5, 'MC RedHat Training Camp', '2021-06-04', 'Scientifique', 'Two days bootcamp about visiualization and cloud-computing presented by Dr Djelloul BOUIDA.', 'https://microclub.net/static/media/RedHat%20fancy%20logo.bd6a0d59.svg'),
(6, 'AFRICA By Incub', '2021-06-04', 'Scientifique', 'A nation-wide celebration wich includes more than 15 african countryes in order to develop our software ingeneering capacities', '../Pics/Logo-africa-MEA.png'),
(7, 'MC Hacktober FEST', '2022-02-10', 'Conference', 'A month long celebration of open source presented by digital ocean, sponsored by Github and hosted by Micro Club.', '../Pics/DJANV.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telephone` varchar(100) NOT NULL,
  `AnnUniv` varchar(100) NOT NULL,
  `Specialite` varchar(100) NOT NULL,
  `Faculte` varchar(100) NOT NULL,
  `Motif` varchar(1000) NOT NULL,
  `ID` int(100) NOT NULL,
  `Matricule` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Nom`, `Prenom`, `Email`, `Telephone`, `AnnUniv`, `Specialite`, `Faculte`, `Motif`, `ID`, `Matricule`) VALUES
('Habili', 'Anis', 'habilianis9@gmail.com', '777888', 'L2', 'ISIL', 'Informatique', 'un etudiant', 51, '202031036703'),
('Lemmouchi', 'Abderrahmane', 'lemmouchimds@gmail.com', '33334444', 'L2', 'ISIL', 'Génie électrique', 'etudiant', 52, '202031034567'),
('anis', 'poj', 'kp@kn', 'npn', 'L1', 'okn', 'Mathématiques', 'knon', 53, '230938');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
