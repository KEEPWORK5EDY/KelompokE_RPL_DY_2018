-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2018 at 02:03 PM
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
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_shift` int(11) NOT NULL,
  `id_pegawai` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_shift`, `id_pegawai`, `tanggal`, `jam`) VALUES
(7, 'muammar', '2018-05-26', '09:00:00'),
(16, 'muammar', '2018-05-27', '08:17:00'),
(8, 'muammar', '2018-05-29', '08:24:00'),
(8, 'keepw-3', '2018-05-29', '15:16:00');

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
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_shift` int(11) NOT NULL,
  `id_pegawai` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_shift`, `id_pegawai`) VALUES
(8, 'keepw-3'),
(10, 'keepw-2'),
(11, 'keepw-3'),
(11, 'keepw-4'),
(12, 'keepw-4'),
(12, 'muammar'),
(7, 'muammar'),
(7, 'keepw-2'),
(7, 'keepw-3'),
(7, 'keepw-4'),
(7, 'nanda'),
(15, 'nanda'),
(15, 'keepw-3'),
(15, 'muammar'),
(16, 'gigifff'),
(16, 'keepw-2'),
(16, 'keepw-3'),
(16, 'muammar'),
(17, 'zikri'),
(17, 'keepw-2'),
(17, 'keepw-4'),
(18, 'nanda'),
(18, 'keepw-4'),
(18, 'gigifff'),
(18, 'fahmi'),
(18, 'jiji'),
(18, 'neko'),
(1, 'fahmi'),
(1, 'gigifff'),
(1, 'jiji'),
(1, 'keepw-3'),
(1, 'keepw-4'),
(1, 'lala'),
(1, 'muammar'),
(1, 'nanda'),
(1, 'reza'),
(5, 'kw-03'),
(5, 'kw-04'),
(5, 'kw-05'),
(5, 'zikri'),
(2, 'fahmi'),
(2, 'gigifff'),
(2, 'jiji'),
(2, 'keepw-2'),
(2, 'keepw-3'),
(2, 'keepw-4'),
(2, 'kw-03'),
(2, 'kw-04'),
(2, 'kw-05'),
(2, 'lala'),
(8, 'zikri'),
(8, 'reza'),
(8, 'neko'),
(8, 'nanda'),
(8, 'muammar'),
(10, 'fahmi'),
(10, 'gigifff'),
(10, 'keepw-3'),
(10, 'keepw-4'),
(10, 'kw-03'),
(10, 'kw-04'),
(10, 'kw-05'),
(10, 'lala'),
(10, 'muammar'),
(10, 'nanda'),
(11, 'zikri'),
(11, 'reza'),
(4, 'fahmi'),
(4, 'gigifff'),
(4, 'jiji'),
(4, 'keepw-2'),
(4, 'keepw-4'),
(12, 'nanda'),
(12, 'zikri'),
(12, 'fahmi'),
(12, 'gigifff'),
(12, 'kw-05'),
(12, 'kw-04'),
(12, 'kw-03'),
(2, 'muammar');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_usaha` int(11) NOT NULL,
  `id_pegawai` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_usaha`, `id_pegawai`, `nama`, `password`) VALUES
(4, 'keepw-2', 'gigi', 'kode-48MZA'),
(4, 'keepw-3', 'amel', 'kode-48MZA'),
(4, 'keepw-4', 'konan', 'kode-48MZA'),
(4, 'muammar', 'muammar', 'kode-48MZA'),
(4, 'nanda', 'ddds', 'ddds'),
(6, 'yuda-1', 'reza', 'kode-48MZA'),
(4, 'zikri', 'zikri', 'zikri'),
(4, 'gigifff', 'gigi', 'gigi'),
(4, 'reza', 'kw-reza', 'reza'),
(4, 'fahmi', 'kw-fahmi', 'fahmi'),
(4, 'neko', 'kw-neko', 'neko'),
(4, 'jiji', 'kw-jiji', 'jiji'),
(4, 'lala', 'kw-lala', 'lala'),
(4, 'kw-03', 'andika', 'kode-48MZA'),
(4, 'kw-04', 'pratama', 'kode-48MZA'),
(4, 'kw-05', 'aksana', 'kode-48MZA'),
(4, 'tes46', 'tes46', 'tes46');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `aktivasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`Email`, `Password`, `Nama`, `Tanggal_Lahir`, `tanggal_daftar`, `aktivasi`) VALUES
('keepwork', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'keepwork', '1998-05-13', '0000-00-00', 0),
('muammar', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'muammar', '1998-08-04', '0000-00-00', 0),
('muammar.clasic@gmail.com', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'muammar zikri aksana', '1998-08-04', '0000-00-00', 0),
('yuda', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'yuda', '2018-05-26', '0000-00-00', 0),
('zikri', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'zikri', '1998-08-04', '2018-05-01', 0),
('zikri1', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'zikri1', '1998-08-04', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Riwayat`
--

CREATE TABLE `Riwayat` (
  `id_usaha` int(11) NOT NULL,
  `id_shift` int(11) NOT NULL,
  `id_pegawai` varchar(100) CHARACTER SET latin1 NOT NULL,
  `status` varchar(100) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'shift 1', 4, '08:00:00', '12:00:00', 'Monday'),
(2, 'shift 1', 4, '08:00:00', '14:00:00', 'Tuesday'),
(4, 'shift 1', 4, '08:00:00', '12:26:00', 'Thursday'),
(5, 'shift 2', 4, '12:00:00', '18:00:00', 'Monday'),
(7, 'shift 1', 4, '08:00:00', '10:21:00', 'Saturday'),
(8, 'tes8', 4, '15:00:00', '17:00:00', 'Tuesday'),
(10, 'rabu kerja', 4, '08:00:00', '13:00:00', 'Wednesday'),
(11, 'rabu kerja lagi', 4, '14:00:00', '18:00:00', 'Wednesday'),
(12, 'kerja', 4, '07:15:00', '11:00:00', 'Friday'),
(15, 'shift 2', 4, '12:40:32', '14:39:37', 'Saturday'),
(16, 'shift 1', 4, '08:00:00', '09:00:00', 'Sunday'),
(17, 'shift 2', 4, '10:00:00', '14:00:00', 'Sunday'),
(18, 'shift 3', 4, '15:00:00', '18:00:00', 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `nama` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tes`
--

INSERT INTO `tes` (`nama`, `hari`) VALUES
('zik', 'tes'),
('zik', 'tes'),
('keepwork-01', 'tes');

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
('muammar', 'begadang', 7),
('muammar.clasic@gmail.com', 'cofe', 8),
('keepwork', 'keepwork', 9),
('zikri1', 'kaka', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD KEY `f_id_shiftA` (`id_shift`),
  ADD KEY `f_id_pegawaiA` (`id_pegawai`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD KEY `f_id_shiftJ` (`id_shift`),
  ADD KEY `f_id_pegawaiJ` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD KEY `f_id_usaha` (`id_usaha`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `Riwayat`
--
ALTER TABLE `Riwayat`
  ADD KEY `fk_id_usaha` (`id_usaha`),
  ADD KEY `fk_id_shift` (`id_shift`),
  ADD KEY `fk_id_pegawai` (`id_pegawai`);

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
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `Id_Usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `f_id_pegawaiA` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_id_shiftA` FOREIGN KEY (`id_shift`) REFERENCES `shift` (`id_shift`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `f_id_pegawaiJ` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_id_shiftJ` FOREIGN KEY (`id_shift`) REFERENCES `shift` (`id_shift`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `f_id_usaha` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`Id_Usaha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Riwayat`
--
ALTER TABLE `Riwayat`
  ADD CONSTRAINT `fk_id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `fk_id_shift` FOREIGN KEY (`id_shift`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `fk_id_usaha` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`Id_Usaha`);

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
