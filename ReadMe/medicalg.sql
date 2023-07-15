-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 01:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ida` int(10) NOT NULL,
  `noma` varchar(16) NOT NULL,
  `prenoma` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `mdp` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ida`, `noma`, `prenoma`, `email`, `mdp`) VALUES
(1, 'houcine', 'chakra', 'hussien.chakra@gmail.com', 'azerty'),
(2, 'mohamed', 'ouchenni', 'mohamed.oucheni@gmail.com', 'azerty'),
(3, 'hassim', 'ouakrim', 'hassim.ouakrim@gmail.com', 'azerty');

-- --------------------------------------------------------

--
-- Table structure for table `centre`
--

CREATE TABLE `centre` (
  `idc` int(11) NOT NULL,
  `ids` int(11) NOT NULL,
  `nomc` varchar(20) NOT NULL,
  `ville` varchar(32) NOT NULL,
  `Adresse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centre`
--

INSERT INTO `centre` (`idc`, `ids`, `nomc`, `ville`, `Adresse`) VALUES
(1, 1, 'moulay ali chref', 'errachidia', 'rue elhassan 2'),
(2, 6, 'tafilalet', 'errachidia', 'ain laati 2 errachidia'),
(3, 7, 'Alfath', 'Errachidia', 'Rue meknes Ain laati 2');

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

CREATE TABLE `medecin` (
  `idm` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `nomM` varchar(20) NOT NULL,
  `prenomM` varchar(20) NOT NULL,
  `daten` date NOT NULL,
  `numordre` int(11) NOT NULL,
  `specialite` varchar(50) NOT NULL,
  `numtel` varchar(15) NOT NULL,
  `horaire` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medecin`
--

INSERT INTO `medecin` (`idm`, `idc`, `nomM`, `prenomM`, `daten`, `numordre`, `specialite`, `numtel`, `horaire`, `mail`) VALUES
(11, 1, ' Chakra', 'Lahoucine', '2022-05-23', 282001234, 'generaliste', '+212619816342', '08-18', 'chakra@gmail.com'),
(25, 1, 'Ouchenni', 'Mohamed', '2022-05-10', 2820017, 'generaliste', '+212619816342', '08-18', 'ouchenni@gmail.com'),
(26, 1, 'Ouakrim', 'Hassim', '2022-05-17', 20010874, 'generaliste', '+212619816342', '08-18', 'ouakrim@gmail.com'),
(27, 1, 'Elbahmadi', 'Abdelkbir', '2022-05-01', 282001547, 'Pédiatre', '+212619816342', '08-18', 'elbahmadi@gmail.com'),
(28, 1, 'Elazzaoui', 'Mohamed', '2022-05-01', 2147483647, 'Pédiatre', '+212619816342', '08-18', 'elazzaoui@gmail.com'),
(29, 1, 'Garda', 'Ali', '2022-05-17', 282001213, 'Gynécologue', '+212619816342', '08-18', 'ouria@gmail.com'),
(32, 1, 'Batou', 'Samir', '2022-05-15', 13254327, 'Gynécologue', '+212619816342', '08-18', 'batou@gmail.com'),
(33, 1, 'Amozg', 'Khalid', '2022-05-01', 282231, 'stomatologue', '+212619816342', '08-18', 'amozg@gmail.com'),
(34, 1, 'Choukri', 'Salma', '2022-05-02', 23298, 'stomatologue', '+212619816342', '08-18', 'choukri@gmail.com'),
(35, 1, 'Badaoui', 'Rihan', '2022-05-25', 279346, 'stomatologue', '+212619816342', '08-18', 'Badaoui@gmail.com'),
(36, 2, 'Boghalb', 'Abderrahim', '2022-05-02', 1133225, 'Rontegenologist', '+212619816342', '08-18', 'Boghalb@gmail.com'),
(37, 2, 'Tahiri', 'Brahim', '2022-05-01', 283745, 'Rontegenologist', '+212619816342', '08-18', 'Tahiri@gmail.com'),
(38, 2, 'Sarbi', 'Khadija', '2022-05-02', 2983274, 'Rheumatologist', '+212619816342', '08-18', 'Sarbi@gmail.com'),
(39, 2, 'Foughal', 'Afaf', '2022-05-01', 28247, 'Pédiatre', '+212619816342', '08-18', 'Foughal@gmail.com'),
(40, 2, 'Aatif', 'Ayoub', '2022-05-02', 289338, 'generaliste', '+212619816342', '08-18', 'Aatif@gmail.com'),
(41, 2, 'El Abasi', 'Oussama', '2022-05-03', 748280023, 'generaliste', '+212619816342', '08-18', 'ElAbasi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `idp` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adrss` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `numtelep` int(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`idp`, `nom`, `prenom`, `adrss`, `mail`, `username`, `mdp`, `numtelep`) VALUES
(1, 'chakra', 'houcine', 'Ouled jerrar', 'kosa@gmail.com', 'kosanostra', 'azerty', NULL),
(2, 'ouchenni', 'mohamed', 'missour', 'benjy@gmail.com', 'benjytesta', 'azerty', NULL),
(3, 'ouakrim', 'hassim', 'ein aawda', 'luigi@gmail.com', 'luigiberetta', 'azerty', NULL),
(4, 'CHAKRA', 'Lahoucine', 'DR ID ELHAJ REGGADA TIZNIT', 'houcine.chakra10@gmail.com', 'hossin', 'Azerreza', 2147483647),
(5, 'chakra', 'mohamed', 'DR ID ELHAJ REGGADA TIZNIT', 'mohamed@gmail.com', 'lmatite', 'a', 2147483647),
(6, 'exd', 'exp', 'DR ID ELHAJ REGGADA TIZNIT', 'tx@gmail.com', 'tx', 't', 2147483647),
(7, 'fertas', 'aimad', 'DR ID ELHAJ REGGADA TIZNIT', 'aimade@gmail.com', 'skra', 'a', 2147483647),
(8, 'CHAKRA', 'Lahoucine', 'DR ID ELHAJ REGGADA TIZNIT', 'a@gmail.com', 'LAHOUCINE CHAKRA', 'a', 2147483647),
(13, 'CHAKRA', 'Lahoucine', 'DR ID ELHAJ REGGADA TIZNIT', 'b@gmail.com', 'kosano', 'a', 2147483647),
(15, 'CHAKRA', 'Lahoucine', 'DR ID ELHAJ REGGADA TIZNIT', 'c@gmail.com', 'kosanosto', 'a', 2147483647),
(16, 'ae', 'jt', 'DR ID ELHAJ REGGADA TIZNIT', 'd@gmail.com', 'cerot', 'a', 2147483647),
(17, 'elbahmadi', 'abdelkbir', 'DR ID ELHAJ REGGADA TIZNIT', 'hbon@gmail.com', 'habon', 'a', 2147483647),
(18, 'batou', 'samir', 'DR ID ELHAJ REGGADA TIZNIT', 'samir@gmail.com', 'samir', 'a', 2147483647),
(19, 'CHAKRA', 'Lahoucine', 'DR ID ELHAJ REGGADA TIZNIT', 'e@gmail.com', 'ea', 'a', 2147483647),
(20, 'garda', 'said', 'DR ID ELHAJ REGGADA TIZNIT', 's@gmail.com', 'said', 'a', 2147483647),
(21, 'elazzaoui', 'mohamed', 'DR ID ELHAJ REGGADA TIZNIT', 'm@gmail.com', 'mohamed', 'a', 2147483647),
(22, 'ouria', 'ayoub', 'DR ID ELHAJ REGGADA TIZNIT', 'o@gmail.com', 'ayoub', 'a', 2147483647),
(23, 'elbahmadi', 'abdelkbir', 'DR ID ELHAJ REGGADA TIZNIT', 'ha@gmail.com', 'ha', 'a', 2147483647),
(24, 'ouakrim', 'hassim', 'DR ID ELHAJ REGGADA TIZNIT', 'oua@gmail.com', 'ouakrim', 'a', 2147483647),
(25, 'ouchenni', 'mohamed', 'DR ID ELHAJ REGGADA TIZNIT', 'ouc@gmail.com', 'taf9irt', 'a', 2147483647),
(26, 'exd', 'mohamed', 'DR ID ELHAJ REGGADA TIZNIT', 'te@gmail.com', 'zer', 'a', 2147483647),
(27, 'chakra', 'medecin', 'DR ID ELHAJ REGGADA TIZNIT', 'ad@gmail.com', 'def', 'a', 2147483647),
(28, 'CHAKRA', 'Lahoucine', 'DR ID ELHAJ REGGADA TIZNIT', 'lc@gmail.com', 'kosi', 'a', 2147483647),
(29, 'CHAKRA', 'medcin', 'DR ID ELHAJ REGGADA TIZNIT', 'huszsien.chakra@gmail.com', 'txa', 'a', 2147483647),
(30, 'CHAKRA', 'Lahoucine', 'DR ID ELHAJ REGGADA TIZNIT', 'aa@gmail.com', 'aar', 'a', 2147483647),
(31, 'CHAKRA', 'Lahoucine', 'DR ID ELHAJ REGGADA TIZNIT', 'cc@gmail.com', 'ccr', 'a', 2147483647),
(32, 'azert', 'poret', 'DR ID ELHAJ REGGADA TIZNIT', 'dd@gmail.com', 'ddr', 'a', 2147483647),
(33, 'exs', 'sfr', 'DR ID ELHAJ REGGADA TIZNIT', 'ss@gmail.com', 'ssr', 'a', 2147483647),
(34, 'ez', 'ze', 'DR ID ELHAJ REGGADA TIZNIT', 'ez@gmail.com', 'ez', 'a', 2147483647),
(35, 'ux', 'ua', 'DR ID ELHAJ REGGADA TIZNIT', 'uu@gmail.com', 'ax', 'a', 2147483647),
(36, 'tr', 'rt', 'DR ID ELHAJ REGGADA TIZNIT', 'rr@gmail.com', 'rrt', 'a', 2147483647),
(37, 'per', 'pawl', 'DR ID ELHAJ REGGADA TIZNIT', 'pp@gmail.com', 'ppr', 'a', 2147483647),
(38, 'CHAKRA', 'mohamed', 'DR ID ELHAJ REGGADA TIZNIT', 'mati@gmail.com', 'matit', 'a', 2147483647),
(39, 'qfqs', 'qsfqsf', 'aze', 'azea@azra.com', 'azeae', 'aaaa', 0),
(40, 'hahahahahha', 'hahahahahha', 'hahahahahha', 'hahahahahha@hahahahahha.com', 'hahahahahha', 'hahahahahha', 0),
(41, 'Benachim', 'amal', 'DR ID ELHAJ REGGADA TIZNIT', 'amal@gmail.com', 'mila', 'a', 2147483647),
(42, 'testc', 'testc', 'DR ID ELHAJ REGGADA TIZNIT', 'testc@gmail.com', 'testc', 'a', 2147483647),
(43, 'test1', 'test1', 'DR ID ELHAJ REGGADA TIZNIT', 'test1@gmail.com', 'test1', 'a', 2147483647),
(44, 'CHAKRA', 'Lahoucine', 'DR ID ELHAJ REGGADA TIZNIT', 'ex1@gmail.com', 'ex', '', 2147483647),
(45, 'CHAKRA', 'Lahoucine', 'DR ID ELHAJ REGGADA TIZNIT', 'teee@gmail.com', 'teeest', 'a', 2147483647),
(46, 'jsk', 'yu', 'ohhjbh', 'fadi@gmail.com', 'fg', 'a', 2147483647),
(47, 'ouakrim', 'hassim', 'DR ID ELHAJ REGGADA TIZNIT', 'hass@gmail.com', 'hassim', 'a', 2147483647),
(48, 'CHAKRA', 'Lahoucine', 'DR ID ELHAJ REGGADA TIZNIT', 'prr@gmail.com', 'prr@gmail.com', 'a', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `rdv`
--

CREATE TABLE `rdv` (
  `idr` int(11) NOT NULL,
  `idm` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `jour` int(10) NOT NULL,
  `heure` int(8) NOT NULL,
  `mois` int(10) NOT NULL,
  `typeder` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rdv`
--

INSERT INTO `rdv` (`idr`, `idm`, `idp`, `jour`, `heure`, `mois`, `typeder`) VALUES
(36, 11, 0, 28, 17, 5, 'Domicile'),
(37, 11, 41, 29, 17, 5, 'Domicile'),
(38, 11, 43, 30, 9, 5, 'Domicile'),
(40, 11, 43, 2, 11, 6, 'Domicile'),
(41, 11, 43, 31, 14, 5, 'Domicile'),
(42, 11, 43, 1, 8, 6, 'Appel'),
(43, 11, 44, 6, 8, 6, 'Domicile'),
(44, 11, 44, 31, 17, 5, 'Domicile'),
(45, 11, 44, 5, 14, 6, 'Appel'),
(46, 26, 2, 7, 11, 6, 'Domicile'),
(47, 11, 45, 8, 9, 6, 'Domicile'),
(48, 38, 46, 12, 10, 6, 'Domicile'),
(49, 39, 46, 12, 14, 6, 'Domicile'),
(50, 27, 47, 6, 8, 6, 'Domicile'),
(51, 11, 48, 9, 11, 6, 'Domicile');

-- --------------------------------------------------------

--
-- Table structure for table `secretaire`
--

CREATE TABLE `secretaire` (
  `ids` int(11) NOT NULL,
  `noms` varchar(20) NOT NULL,
  `prenoms` varchar(20) NOT NULL,
  `numtel` varchar(15) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `adresses` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secretaire`
--

INSERT INTO `secretaire` (`ids`, `noms`, `prenoms`, `numtel`, `mail`, `mdp`, `adresses`) VALUES
(1, 'exemple', 'ex', '0611111111', 'exemple1@gmail.com', '', ''),
(2, 'CHAKRA', 'Lahoucine', '+212619816342', 'admin@admin', 'a', 'DR ID ELHAJ REGGADA TIZNIT'),
(4, 'nom', 'prenom', '00000000', 'email@email', 'a', ''),
(6, 'El Aabasi', 'Samia', '+212619816342', 'exemple2@gmail.com', 'a', 'DR ID ELHAJ REGGADA TIZNIT'),
(7, 'Landa', 'Oumaima', '+212619816342', 'landa@gmail.com', 'a', 'DR ID ELHAJ REGGADA TIZNIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ida`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `centre`
--
ALTER TABLE `centre`
  ADD PRIMARY KEY (`idc`),
  ADD KEY `ids` (`ids`);

--
-- Indexes for table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`idm`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `mail_2` (`mail`),
  ADD UNIQUE KEY `numordre` (`numordre`),
  ADD KEY `idc` (`idc`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idp`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`idr`),
  ADD KEY `idm` (`idm`),
  ADD KEY `idp` (`idp`);

--
-- Indexes for table `secretaire`
--
ALTER TABLE `secretaire`
  ADD PRIMARY KEY (`ids`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `mail_2` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `centre`
--
ALTER TABLE `centre`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `secretaire`
--
ALTER TABLE `secretaire`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
