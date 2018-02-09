-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 09 fév. 2018 à 16:44
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exo3`
--

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `ID_MOVIE` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `actors` varchar(45) NOT NULL,
  `director` varchar(45) NOT NULL,
  `producer` varchar(45) NOT NULL,
  `year_of_prod` year(4) NOT NULL,
  `langue` varchar(45) NOT NULL,
  `category` enum('Action','Comedie','Drame','Thriller','SF') NOT NULL,
  `storyline` text NOT NULL,
  `video` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`ID_MOVIE`, `title`, `actors`, `director`, `producer`, `year_of_prod`, `langue`, `category`, `storyline`, `video`) VALUES
(1, 'retour vers le futur', 'marty mc fly', 'doctor', 'dolorean', 0000, 'francais', 'Comedie', 'cei est un', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE'),
(2, 'retour vers le futur', 'marty mc fly', 'doctor', 'dolorean', 0000, 'francais', 'Comedie', 'cei est un', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE'),
(3, 'retour vers le futur', 'marty mc fly', 'doctor', 'dolorean', 0000, 'default', '', 'cei est un', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE'),
(4, 'retour vers le futur', 'marty mc fly', 'doctor', 'dolorean', 0000, 'mandarin', 'Comedie', 'ceci', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE'),
(5, 'pas retour ', 'marty mc fly', 'doctor', 'dolorean', 0000, 'espagnol', 'Drame', 'qsdqsdqsdqsd', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE'),
(6, 'pas pas retour ', 'marty mc fly', 'doctor', 'dolorean', 0000, 'espagnol', 'Drame', 'qsdqsdqsdqsd', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE'),
(7, 'dfwdsfqsdf', 'marty mc fly', 'doctor', 'dolorean', 0000, 'espagnol', 'SF', 'dsffffffffffffffffffffffffffffffff', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE'),
(8, 'james bon', 'james', 'bonds', '007007', 0000, 'mandarin', 'Comedie', 'l\'agent 007 encore au travail', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE'),
(9, 'jumanji', 'jumaniji', 'jumaniji', 'jumaniji', 0000, 'espagnol', 'Action', 'jumaniji', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE'),
(10, 'kkkkkkkk', 'kkkkkk', 'kkkkkk', 'kkkkkkk', 2018, 'anglais', 'Comedie', 'srfdsffsdfsdfdsfsdf', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE'),
(11, 'retour vers le futur', 'marty mc fly', 'doctor', 'dolorean', 0000, 'mandarin', 'Comedie', 'cececec', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE'),
(12, 'retour vers le futur', 'marty mc fly', 'doctor', 'dolorean', 0000, 'mandarin', 'Comedie', 'cececec', 'https://www.youtube.com/watch?v=Lsi1KUfIkBE');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID_MOVIE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID_MOVIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
