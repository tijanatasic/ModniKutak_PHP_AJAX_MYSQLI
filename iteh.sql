-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 01:33 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iteh`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesoari`
--

CREATE TABLE `aksesoari` (
  `ID` int(11) NOT NULL,
  `korisnicko_ime` varchar(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aksesoari`
--

INSERT INTO `aksesoari` (`ID`, `korisnicko_ime`, `komentar`, `ocena`) VALUES
(2, 'NevenaP.', 'Svidjaju mi se proizvodi. Zadovoljna sam.', 4),
(7, 'Tijana', 'Super je sve', 5),
(11, 'Tijana', 'Obozavam kape i stalno ih kupujem. Ovde uvek nadjem nesto sto je po mom ukusu', 5),
(12, 'Marina', 'Rancevi super ali nakit mi se ne svidja', 3),
(13, 'Zorica', 'Jako lepe mindjuse sam kupila pre tri godine i jos mi traju. Sve preporuke', 5),
(14, 'Mirjana', 'Sve od aksesoara sam kupila ovde, od naocara do mindjusi i samo imam reci hvale', 5),
(15, 'Petra00', 'Kupila sam ogrlicu pre neki dan i nakon par sati nosenja mi se raspala. Uzas', 1),
(16, 'NevenaP.', 'Kupila sam mindjuse i odlicne su', 5),
(17, 'Marija', 'Nisam ljubitelj nakita', 2);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `ID` int(11) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`ID`, `ime`, `email`) VALUES
(1, 'Tijana', 'tijanatasic3@gmail.com'),
(2, 'Marija', 'marija.maricic@gmail.com'),
(5, 'Nikolina', 'nikolina.nikolic@gmail.com'),
(6, 'Ivana', 'ivana.ivanic@gmail.com'),
(7, 'Zorana', 'zorana@gmail.com'),
(10, 'Zorica', 'zorica@yahoo.com'),
(24, 'Marijana', 'maja@hotmail.com'),
(25, 'Katarina', 'katarina@yahoo.com'),
(26, 'Dusica', 'dusica@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `obuca`
--

CREATE TABLE `obuca` (
  `ID` int(11) NOT NULL,
  `korisnicko_ime` varchar(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obuca`
--

INSERT INTO `obuca` (`ID`, `korisnicko_ime`, `komentar`, `ocena`) VALUES
(20, 'Tamara', 'Ne svidja mi se asortiman', 1),
(23, 'Milica98', 'Super je sve', 5),
(25, 'Una', 'Kupila sam cizme prosle godine i dobro su me posluzile. Preporuke', 5),
(26, 'Zorana', 'Obozavam da kupujem cipele, a modni kutak je moje omiljeno mesto za kupovinu', 5),
(27, 'Petra00', 'Kupa sam patike i jako su neudobne', 2),
(28, 'Olga', 'Lepe cipele za specijalne situacije uvek mozete naci ovde. Mozda nisu najudobnije ali prelepo izgled', 4),
(29, 'Milica98', 'Ne svidja mi se asortiman nista posebno, ali moze da prodje. In je', 3),
(31, 'Zorica', 'Ne volim cipele na stiklu ali ovde ima veliki asortiman tako da uvek nadjem nesto', 4);

-- --------------------------------------------------------

--
-- Table structure for table `odeca`
--

CREATE TABLE `odeca` (
  `ID` int(11) NOT NULL,
  `korisnicko_ime` varchar(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odeca`
--

INSERT INTO `odeca` (`ID`, `korisnicko_ime`, `komentar`, `ocena`) VALUES
(48, 'jelena1234', 'Jako mi se svidja ceo asortiman koji nudite!', 5),
(51, 'Marija', 'Super je sve. Sve pohvale!', 5),
(65, 'Marija', 'Jako mi se svidja ceo asortiman koji nudite.', 5),
(67, 'Dusica', 'Korektno', 4),
(68, 'Petra', 'Duksevi su najbolji!', 5),
(69, 'Marina', 'Nista mi se ne svidja', 1),
(70, 'jelena1234', 'Majice su nekvalitetne', 3),
(71, 'Tijana', 'Super', 4),
(73, 'Marina', 'Drugi put kupujem i ovog puta je kvalitet bolji', 3),
(74, 'jelena1234', 'Korektno', 2),
(75, 'Una', 'Dzemperi su mi omiljeni', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesoari`
--
ALTER TABLE `aksesoari`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `obuca`
--
ALTER TABLE `obuca`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `odeca`
--
ALTER TABLE `odeca`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksesoari`
--
ALTER TABLE `aksesoari`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `obuca`
--
ALTER TABLE `obuca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `odeca`
--
ALTER TABLE `odeca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
