-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2021 at 08:26 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `boitier`
--

CREATE TABLE `boitier` (
  `idBoitier` int(11) NOT NULL,
  `capteurs` varchar(45) DEFAULT NULL,
  `composants` varchar(45) DEFAULT NULL,
  `Utilisateur_idUtilisateur` int(11) NOT NULL,
  `Utilisateur_mail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parcourir`
--

CREATE TABLE `parcourir` (
  `Utilisateur_idUtilisateur` int(11) NOT NULL,
  `point_trajet_idpoint_trajet` int(11) NOT NULL,
  `idParcourir` int(11) NOT NULL,
  `départ` varchar(45) NOT NULL,
  `arrivée` varchar(45) NOT NULL,
  `Utilisateur_mail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `point_trajet`
--

CREATE TABLE `point_trajet` (
  `idpoint_trajet` int(11) NOT NULL,
  `points_cumulés` varchar(45) NOT NULL,
  `appréciation` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `récompense`
--

CREATE TABLE `récompense` (
  `idRécompense` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `Trajet_idTrajet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trajet`
--

CREATE TABLE `trajet` (
  `idTrajet` int(11) NOT NULL,
  `Données_capteur1` varchar(45) NOT NULL,
  `Données_capteur2` varchar(45) NOT NULL,
  `Données_capteur3` varchar(45) DEFAULT NULL,
  `point_trajet_idpoint_trajet` int(11) NOT NULL,
  `DateMesureTrajet` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `mail` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `n°telephone` varchar(45) NOT NULL,
  `tipe` varchar(45) NOT NULL,
  `active` int(11) NOT NULL,
  `code_postal` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `mdp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`mail`, `nom`, `prenom`, `adresse`, `n°telephone`, `tipe`, `active`, `code_postal`, `ville`, `mdp`) VALUES
('admin@gmail.com', 'gabriel', 'kouta', '17 place de la villette', '0644332211', 'admin', 1, '72000', 'paris', '1234'),
('neptune@gmail.com', 'teste', 'teste', 'teste', 'teste', 'utilisateur', 1, 'teste', 'teste', 'teste'),
('utilisateur@gmail.com', 'dupont', 'antoine', '11 boulevards des italien', '0611223344', 'utilisateur', 1, '72000', 'paris', 'toulouse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boitier`
--
ALTER TABLE `boitier`
  ADD PRIMARY KEY (`idBoitier`),
  ADD KEY `fk_Boitier_Utilisateur1_idx` (`Utilisateur_mail`);

--
-- Indexes for table `parcourir`
--
ALTER TABLE `parcourir`
  ADD PRIMARY KEY (`Utilisateur_idUtilisateur`,`point_trajet_idpoint_trajet`,`idParcourir`,`Utilisateur_mail`),
  ADD KEY `fk_Utilisateur_has_point_trajet_point_trajet1_idx` (`point_trajet_idpoint_trajet`),
  ADD KEY `fk_Parcourir_Utilisateur1_idx` (`Utilisateur_mail`);

--
-- Indexes for table `point_trajet`
--
ALTER TABLE `point_trajet`
  ADD PRIMARY KEY (`idpoint_trajet`);

--
-- Indexes for table `récompense`
--
ALTER TABLE `récompense`
  ADD PRIMARY KEY (`idRécompense`),
  ADD KEY `fk_Récompense_Trajet1_idx` (`Trajet_idTrajet`);

--
-- Indexes for table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`idTrajet`),
  ADD KEY `fk_Trajet_point_trajet1_idx` (`point_trajet_idpoint_trajet`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`mail`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boitier`
--
ALTER TABLE `boitier`
  ADD CONSTRAINT `fk_Boitier_Utilisateur1` FOREIGN KEY (`Utilisateur_mail`) REFERENCES `utilisateur` (`mail`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parcourir`
--
ALTER TABLE `parcourir`
  ADD CONSTRAINT `fk_Parcourir_Utilisateur1` FOREIGN KEY (`Utilisateur_mail`) REFERENCES `utilisateur` (`mail`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Utilisateur_has_point_trajet_point_trajet1` FOREIGN KEY (`point_trajet_idpoint_trajet`) REFERENCES `point_trajet` (`idpoint_trajet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `récompense`
--
ALTER TABLE `récompense`
  ADD CONSTRAINT `fk_Récompense_Trajet1` FOREIGN KEY (`Trajet_idTrajet`) REFERENCES `trajet` (`idTrajet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `fk_Trajet_point_trajet1` FOREIGN KEY (`point_trajet_idpoint_trajet`) REFERENCES `point_trajet` (`idpoint_trajet`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
