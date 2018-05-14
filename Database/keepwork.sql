-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2018 at 04:15 AM
-- Server version: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keepwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_usaha` int(11) NOT NULL,
  `id_pegawai` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `day1` int(11) DEFAULT NULL,
  `day2` int(11) DEFAULT NULL,
  `day3` int(11) DEFAULT NULL,
  `day4` int(11) DEFAULT NULL,
  `day5` int(11) DEFAULT NULL,
  `day6` int(11) DEFAULT NULL,
  `day7` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_usaha`, `id_pegawai`, `nama`, `password`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`) VALUES
(4, 'keepwork-01', 'yuda', 'kode-48MZA', 1, 2, NULL, NULL, NULL, 7, NULL),
(4, 'keepwork-2', 'gigi', 'kode-48MZA', 1, 8, NULL, NULL, NULL, NULL, NULL),
(4, 'keepwork-3', 'amel', 'kode-48MZA', 5, 2, NULL, NULL, NULL, NULL, NULL),
(6, 'yuda-1', 'reza', 'kode-48MZA', 9, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`Email`, `Password`, `Nama`, `Tanggal_Lahir`) VALUES
('muammar', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'muammar', '1998-08-04'),
('yuda', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'yuda', '2018-05-26'),
('zikri', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'zikri', '1998-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id_shift` int(11) NOT NULL,
  `nama_shift` varchar(100) NOT NULL,
  `id_usaha` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `hari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `nama_shift`, `id_usaha`, `jam_mulai`, `jam_akhir`, `hari`) VALUES
(1, 'shift 1', 4, '08:00:00', '12:00:00', 'Mon'),
(2, 'shift 1', 4, '08:00:00', '14:00:00', 'Tue'),
(4, 'shift 1', 4, '08:00:00', '12:26:00', 'Thu'),
(5, 'shift 2', 4, '12:00:00', '18:00:00', 'Mon'),
(7, 'shift 1', 4, '08:00:00', '17:21:00', 'Sat'),
(8, 'tes8', 4, '15:00:00', '17:00:00', 'Tue'),
(9, 'shift 1', 6, '07:15:00', '05:20:00', 'Mon');

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `Email` varchar(100) NOT NULL,
  `Nama_Usaha` varchar(100) NOT NULL,
  `Id_Usaha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`Email`, `Nama_Usaha`, `Id_Usaha`) VALUES
('zikri', 'keepwork', 4),
('yuda', 'yuda', 6),
('muammar', 'begadang', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `f_id_usaha_shitD1` (`day1`),
  ADD KEY `f_id_usaha_shitD2` (`day2`),
  ADD KEY `f_id_usaha_shitD3` (`day3`),
  ADD KEY `f_id_usaha_shitD4` (`day4`),
  ADD KEY `f_id_usaha_shitD5` (`day5`),
  ADD KEY `f_id_usaha_shitD6` (`day6`),
  ADD KEY `f_id_usaha_shitD7` (`day7`),
  ADD KEY `f_id_usaha` (`id_usaha`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`),
  ADD KEY `f_id_usaha_shift` (`id_usaha`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`Id_Usaha`),
  ADD KEY `email_pemilik` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `Id_Usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `f_id_shift_D1` FOREIGN KEY (`day1`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_shift_D2` FOREIGN KEY (`day2`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_shift_D3` FOREIGN KEY (`day3`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_shift_D4` FOREIGN KEY (`day4`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_shift_D5` FOREIGN KEY (`day5`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_shift_D6` FOREIGN KEY (`day6`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_shift_D7` FOREIGN KEY (`day7`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_usaha` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`Id_Usaha`);

--
-- Constraints for table `shift`
--
ALTER TABLE `shift`
  ADD CONSTRAINT `f_id_usaha_shift` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`Id_Usaha`);

--
-- Constraints for table `usaha`
--
ALTER TABLE `usaha`
  ADD CONSTRAINT `email_pemilik` FOREIGN KEY (`Email`) REFERENCES `pemilik` (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
