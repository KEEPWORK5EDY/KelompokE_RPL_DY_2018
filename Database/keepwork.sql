-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2018 at 03:45 AM
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
(7, 'z1', '2018-06-06', '01:03:45'),
(8, 'z1', '2018-06-06', '01:03:45'),
(7, 'z1', '2018-06-06', '01:21:43'),
(8, 'z1', '2018-06-06', '01:21:43'),
(7, 'z1', '2018-06-06', '02:14:50'),
(8, 'z1', '2018-06-06', '02:14:50'),
(10, 'z2', '2018-06-06', '02:18:13'),
(7, 'z1', '2018-06-06', '03:09:37'),
(8, 'z1', '2018-06-06', '03:09:37');

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
-- Table structure for table `aktivasi`
--

CREATE TABLE `aktivasi` (
  `id_aktivasi` varchar(100) CHARACTER SET latin1 NOT NULL,
  `kode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aktivasi`
--

INSERT INTO `aktivasi` (`id_aktivasi`, `kode`) VALUES
('zikri', '55e8c0217faaf06e841de5a15b7c461da1261e0ccdb938693f8ba45e0872b6bb'),
('muammar.zikri.aksana@gmail.com', '0f007f93204ee78bcbe2ba1c4941ef5636657ea20a3c1c1d2c789c4efe6fc0b6'),
('yudaaditya98@gmail.com', '534cce3e34e734091331e2080d08fa2175b2087c0150d291da941bab212e1c8d');

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
(7, 'z1'),
(7, 'z3'),
(8, 'z1'),
(10, 'z2'),
(8, 'z3'),
(11, 'z2'),
(11, 'z3');

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
(4, 'z1', 'z1', 'z1'),
(4, 'z2', 'z2', 'z2'),
(4, 'z3', 'z3', 'z3');

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
('muammar', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'muammar', '1998-08-04', '0000-00-00', 1),
('muammar.clasic@gmail.com', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'muammar zikri aksana', '1998-08-04', '0000-00-00', 1),
('muammar.zikri.aksana@gmail.com', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'muammar', '2018-06-05', '2016-06-08', 1),
('yuda', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'yuda', '2018-05-26', '0000-00-00', 1),
('yudaaditya98@gmail.com', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'yuda', '2018-06-05', '2018-06-05', 0),
('zikri', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'zikri', '1998-08-04', '2018-05-01', 1),
('zikri1', 'f31936d319335c5825c81c1cf5fc55426808981334ea145ffbf9324244251615', 'zikri1', '1998-08-04', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_usaha` int(11) NOT NULL,
  `id_pegawai` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pesan` text NOT NULL,
  `tgl_kirim` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_usaha`, `id_pegawai`, `pesan`, `tgl_kirim`) VALUES
(1, 4, 'z1', 'pesan pertama keepwork', '2018-06-06 03:09:15'),
(2, 4, 'z1', 'psan ke dua', '2018-06-06 03:38:10'),
(3, 4, 'z1', 'pesan ke 3', '2018-06-06 03:38:35');

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
(1, 'shift 1', 35, '08:00:00', '10:00:00', 'Monday'),
(2, 'shift 2', 35, '10:15:00', '12:00:00', 'Monday'),
(7, 's', 4, '00:40:00', '08:00:00', 'Monday'),
(8, 'shift1', 4, '00:53:00', '08:00:00', 'Wednesday'),
(10, 'SS', 4, '01:02:00', '18:00:00', 'Tuesday'),
(11, 'shift 1', 4, '08:00:00', '10:00:00', 'Thursday');

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
('muammar.zikri.aksana@gmail.com', 'kode', 35),
('yudaaditya98@gmail.com', 'yuda', 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD KEY `f_id_pegawaiA` (`id_pegawai`),
  ADD KEY `f_id_shiftA` (`id_shift`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `aktivasi`
--
ALTER TABLE `aktivasi`
  ADD KEY `fk_email` (`id_aktivasi`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD KEY `f_id_pegawaiJ` (`id_pegawai`),
  ADD KEY `f_id_shiftJ` (`id_shift`);

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
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `fk_id_pegawai_pesan` (`id_pegawai`),
  ADD KEY `fk_id_usaha_pesan` (`id_usaha`);

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
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `Id_Usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `f_id_pegawaiA` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_id_shiftA` FOREIGN KEY (`id_shift`) REFERENCES `shift` (`id_shift`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `aktivasi`
--
ALTER TABLE `aktivasi`
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`id_aktivasi`) REFERENCES `pemilik` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `f_id_pegawaiJ` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_id_shiftJ` FOREIGN KEY (`id_shift`) REFERENCES `shift` (`id_shift`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `f_id_usaha` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`Id_Usaha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `fk_id_pegawai_pesan` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_usaha_pesan` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`Id_Usaha`) ON DELETE CASCADE ON UPDATE CASCADE;

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
