-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 12:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `ID_Bicicleta` int(11) DEFAULT NULL,
  `CNP` int(11) NOT NULL,
  `Data_Inchiriere` date NOT NULL,
  `Numar_Ore` int(11) NOT NULL,
  `Numar_Contract` int(11) NOT NULL,
  `Model` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`ID_Bicicleta`, `CNP`, `Data_Inchiriere`, `Numar_Ore`, `Numar_Contract`, `Model`) VALUES
(1, 1, '2021-02-01', 14, 32, 2),
(1, 1, '2222-02-22', 13, 34, 2),
(1, 2, '2222-02-22', 121, 35, 231),
(1, 2, '1211-11-22', 231, 36, 1),
(1, 1234, '2020-01-02', 3, 37, 1001),
(1, 1, '2021-11-09', 4, 38, 1011),
(1, 1234, '2020-11-11', 3, 39, 1001),
(1, 1234, '2019-01-02', 5, 40, 1001),
(1, 2131321, '2020-02-04', 21, 41, 1004),
(1, 2131321, '2021-02-22', 212, 42, 1001),
(1, 2131321, '2021-01-02', 4, 43, 1001),
(1, 12313121, '2020-04-05', 3, 44, 1001),
(1, 2131321, '2021-11-11', 2, 45, 1001);

-- --------------------------------------------------------

--
-- Table structure for table `informatii_bicicleta`
--

CREATE TABLE `informatii_bicicleta` (
  `Culoare` text NOT NULL,
  `Model` int(11) NOT NULL,
  `Material` text NOT NULL,
  `Categorie` text NOT NULL,
  `Poza` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informatii_bicicleta`
--

INSERT INTO `informatii_bicicleta` (`Culoare`, `Model`, `Material`, `Categorie`, `Poza`) VALUES
('Rosu', 1001, 'Aluminiu', 'Mountain-Bike', '6006927cc5f421118080.jpg'),
('Roz', 1004, 'Aluminiu', 'Copii', '600693e70f05c3c218ea5ac862cf736049a89a61e6896.jpg'),
('Rosu', 1006, 'Aluminiu', 'Copii', '60069447a55ef'),
('Negru', 1011, 'Aluminiu', 'MountainBike', '600694fdc73fd600_HERO_WEB_FIRST.jpg'),
('Argintiu', 1299, 'Aluminiu', 'Street-Bike', '600696ba18d6eSiem Reap Bicycle Rental.jpg'),
('Verde', 2011, 'Aluminiu', 'BMX', '600696cf50f2fSunday-Bikes-Soundwave-Special-LHD-Gary-Young-2021-BMX-Rad-Gloss-Billiard-Green-Freecoaster--20200702125420-1.jpg'),
('Alb', 4332, 'Aluminiu', 'Street-Bike', '6006974d7c1ce');

-- --------------------------------------------------------

--
-- Table structure for table `locatie_bicicleta`
--

CREATE TABLE `locatie_bicicleta` (
  `Locatie` text NOT NULL,
  `Sector` int(11) NOT NULL,
  `Model` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locatie_bicicleta`
--

INSERT INTO `locatie_bicicleta` (`Locatie`, `Sector`, `Model`) VALUES
('Bucuresti', 4, 1001),
('Bucuresti', 5, 1004),
('Bucuresti', 5, 1006),
('Bucuresti', 5, 1011),
('Bucuresti', 3, 1299),
('Bucuresti', 4, 2011),
('Timisoara', 1, 2011),
('Bucuresti', 5, 4332);

-- --------------------------------------------------------

--
-- Table structure for table `mesaje`
--

CREATE TABLE `mesaje` (
  `Mesaj` text NOT NULL,
  `Nume` text NOT NULL,
  `IDMesaj` int(11) NOT NULL,
  `Model` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesaje`
--

INSERT INTO `mesaje` (`Mesaj`, `Nume`, `IDMesaj`, `Model`) VALUES
('Calin', 'Test mesaj', 24, 0),
('Calin', 'Mesaj doi test', 25, 0),
('kjnk', '1004', 27, 0),
('Calin', 'Nu merge frana', 28, 1001);

-- --------------------------------------------------------

--
-- Table structure for table `probleme_utilizatori`
--

CREATE TABLE `probleme_utilizatori` (
  `CNP` int(11) NOT NULL,
  `Problema` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tarif_bicicleta`
--

CREATE TABLE `tarif_bicicleta` (
  `ID_Bicicleta` int(11) NOT NULL,
  `Tarif` int(11) NOT NULL,
  `Model` int(11) NOT NULL,
  `Locatie` text NOT NULL,
  `Stoc` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarif_bicicleta`
--

INSERT INTO `tarif_bicicleta` (`ID_Bicicleta`, `Tarif`, `Model`, `Locatie`, `Stoc`) VALUES
(1, 20, 1001, 'Bucuresti', 2),
(2, 8, 1004, 'Bucuresti', 3),
(4, 12, 1011, 'Bucuresti', 1),
(5, 16, 1299, 'Bucuresti', 2),
(6, 16, 2011, 'Bucuresti', 1),
(7, 15, 2011, 'Timisoara', 2);

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `ID` varchar(255) NOT NULL,
  `Parola` varchar(255) NOT NULL,
  `CNP` text NOT NULL,
  `Data_inregistrare` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`ID`, `Parola`, `CNP`, `Data_inregistrare`) VALUES
('', '', '', '2021-01-18'),
('Mihael', '21321321342', '2131321', '2021-01-18'),
('Adrian', '2341432', '12312654654', '2021-01-18'),
('Ionica Andrei', '1231321321432', '324321231321', '2021-01-18'),
('Alexandru Toma', 'gfjdogfedjgldf', '213214321231', '2021-01-18'),
('Mihnea Ion', 'sdjifjsdlkfjlds', '21342312313', '2021-01-18'),
('Tomatescu Alexandru', 'dwsjfkdsfdsfnksd', '21321342432432', '2021-01-18'),
('calim', '213', '32132131', '2021-01-19'),
('Calin Mihai', 'sdfjsdifdslfjsdl', '123112', '2021-01-20'),
('Vasile', 'Alexandru', '12313121', '2021-01-20'),
('Mihnea Constantin', 'fdsfsdfsdkl', '2132131251213', '2021-01-20'),
('George Mihai', 'fdsjlkfsd', '32131412431', '2021-01-20'),
('admin', 'admin', '1111', '2021-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `x`
--

CREATE TABLE `x` (
  `Numar_Contract` int(11) NOT NULL,
  `ID_Bicicleta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`Numar_Contract`),
  ADD UNIQUE KEY `Numar_Contract` (`Numar_Contract`),
  ADD KEY `Numar_Contract_2` (`Numar_Contract`),
  ADD KEY `CNP` (`CNP`);

--
-- Indexes for table `informatii_bicicleta`
--
ALTER TABLE `informatii_bicicleta`
  ADD PRIMARY KEY (`Model`),
  ADD KEY `Model` (`Model`),
  ADD KEY `Model_2` (`Model`);

--
-- Indexes for table `mesaje`
--
ALTER TABLE `mesaje`
  ADD PRIMARY KEY (`IDMesaj`);

--
-- Indexes for table `probleme_utilizatori`
--
ALTER TABLE `probleme_utilizatori`
  ADD PRIMARY KEY (`CNP`);

--
-- Indexes for table `tarif_bicicleta`
--
ALTER TABLE `tarif_bicicleta`
  ADD PRIMARY KEY (`ID_Bicicleta`),
  ADD KEY `Tarif` (`Tarif`),
  ADD KEY `Model` (`Model`),
  ADD KEY `Locatie` (`Locatie`(768));

--
-- Indexes for table `x`
--
ALTER TABLE `x`
  ADD KEY `Numar_Contract` (`Numar_Contract`),
  ADD KEY `ID_Bicicleta` (`ID_Bicicleta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `Numar_Contract` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `mesaje`
--
ALTER TABLE `mesaje`
  MODIFY `IDMesaj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tarif_bicicleta`
--
ALTER TABLE `tarif_bicicleta`
  MODIFY `ID_Bicicleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
