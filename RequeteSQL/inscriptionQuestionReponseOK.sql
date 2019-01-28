-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 25 jan. 2019 à 11:56
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `inscription`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse_ip`
--

DROP TABLE IF EXISTS `adresse_ip`;
CREATE TABLE IF NOT EXISTS `adresse_ip` (
  `id_adresse_ip` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_ip` varchar(50) NOT NULL,
  PRIMARY KEY (`id_adresse_ip`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adresse_ip`
--

INSERT INTO `adresse_ip` (`id_adresse_ip`, `adresse_ip`) VALUES
(1, '111222333');

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `id_candidat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(15) CHARACTER SET latin1 NOT NULL,
  `mail` varchar(70) CHARACTER SET latin1 NOT NULL,
  `tel` varchar(10) CHARACTER SET latin1 NOT NULL,
  `tel_portable` varchar(10) CHARACTER SET latin1 NOT NULL,
  `adresse` varchar(163) CHARACTER SET latin1 NOT NULL,
  `ville` varchar(45) CHARACTER SET latin1 NOT NULL,
  `code_postal` varchar(5) CHARACTER SET latin1 NOT NULL,
  `date_naissance` varchar(10) CHARACTER SET latin1 NOT NULL,
  `niveau_etude` varchar(10) CHARACTER SET latin1 NOT NULL,
  `id_adresse_ip` int(11) NOT NULL,
  `resultat` json DEFAULT NULL,
  PRIMARY KEY (`id_candidat`),
  KEY `id_adresse_ip` (`id_adresse_ip`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id_candidat`, `nom`, `prenom`, `mail`, `tel`, `tel_portable`, `adresse`, `ville`, `code_postal`, `date_naissance`, `niveau_etude`, `id_adresse_ip`, `resultat`) VALUES
(2, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

DROP TABLE IF EXISTS `formateur`;
CREATE TABLE IF NOT EXISTS `formateur` (
  `id_formateur` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(50) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id_formateur`),
  UNIQUE KEY `identifiant` (`identifiant`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id_question` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  PRIMARY KEY (`id_question`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_question`, `question`) VALUES
(1, 'Combien y a t-il de pokemon dans la 1ère génération ?'),
(2, 'Le nombre binaire 1011 vaut en décimal :'),
(3, 'Quelle(s) est (sont) la ou les langue(s) officielle(s) aux Etats-Unis ?'),
(4, 'En quelle année a été construite la tour Eiffel ?'),
(5, 'Quelle est la hauteur de la tour Eiffel ?'),
(6, 'Quelle(s) est (sont) la ou les langues officielle(s) au Canada'),
(7, 'Quelle est la monnaie du Cambodge ?'),
(8, 'Combien l ONU reconnait il d Etats dans le monde ?'),
(9, 'Combien l ONU reconnait il d Etats indépendants dans le monde ?'),
(10, 'Combien d Etats sont reconnaus à travers le monde par le Canada ?');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

DROP TABLE IF EXISTS `reponses`;
CREATE TABLE IF NOT EXISTS `reponses` (
  `id_reponse` int(11) NOT NULL AUTO_INCREMENT,
  `id_question` int(11) NOT NULL,
  `juste` tinyint(1) NOT NULL,
  `texte` varchar(200) NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id_reponse`),
  KEY `id_question` (`id_question`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id_reponse`, `id_question`, `juste`, `texte`, `type`) VALUES
(41, 1, 0, '152', 'radio'),
(42, 1, 0, '100', 'radio'),
(43, 1, 0, '150', 'radio'),
(44, 1, 1, '151', 'radio'),
(45, 2, 0, '7', 'radio'),
(46, 2, 0, '6', 'radio'),
(47, 2, 0, '3', 'radio'),
(48, 2, 1, '11', 'radio'),
(49, 3, 0, 'Espagnole', 'checkbox'),
(50, 3, 0, 'Francais', 'checkbox'),
(51, 3, 0, 'Anglais', 'checkbox'),
(52, 3, 1, 'Il n y en a pas', 'checkbox'),
(53, 4, 1, '1887', 'radio'),
(54, 4, 0, '1888', 'radio'),
(55, 4, 0, '1889', 'radio'),
(56, 4, 0, '1890', 'radio'),
(57, 5, 0, '400 mètres', 'radio'),
(58, 5, 0, '350 mètres', 'radio'),
(59, 5, 1, '300 mètres', 'radio'),
(60, 5, 0, '200 mètres', 'radio'),
(61, 6, 0, 'Inuit', 'checkbox'),
(62, 6, 1, 'Francais', 'checkbox'),
(63, 6, 0, 'Langue autochtone', 'checkbox'),
(64, 6, 1, 'Anglais', 'checkbox'),
(65, 7, 0, 'Dong', 'radio'),
(66, 7, 1, 'Riel', 'radio'),
(67, 7, 0, 'Yen', 'radio'),
(68, 7, 0, 'Ringgit', 'radio'),
(69, 8, 1, '194', 'radio'),
(70, 8, 0, '193', 'radio'),
(71, 8, 0, '195', 'radio'),
(72, 8, 0, '192', 'radio'),
(73, 9, 0, '194', 'radio'),
(74, 9, 1, '193', 'radio'),
(75, 9, 0, '195', 'radio'),
(76, 9, 0, '192', 'radio'),
(77, 10, 0, '194', 'radio'),
(78, 10, 0, '193', 'radio'),
(79, 10, 1, '195', 'radio'),
(80, 10, 0, '192', 'radio');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD CONSTRAINT `candidat_ibfk_1` FOREIGN KEY (`id_adresse_ip`) REFERENCES `adresse_ip` (`id_adresse_ip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `reponses_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id_question`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
