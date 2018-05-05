-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2018 pada 10.10
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
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
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_usaha`, `id_pegawai`, `nama`, `password`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`) VALUES
(1, '111', 'yuda', 'yuda', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`Email`, `Password`, `Nama`, `Tanggal_Lahir`) VALUES
('muammar.clasic@gmail.com', 'kode-48MZA', 'muammar', '1998-08-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shift`
--

CREATE TABLE `shift` (
  `id_shift` int(11) NOT NULL,
  `id_usaha` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `hari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `shift`
--

INSERT INTO `shift` (`id_shift`, `id_usaha`, `jam_mulai`, `jam_akhir`, `hari`) VALUES
(1, 1, '06:00:00', '11:00:00', 'senin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usaha`
--

CREATE TABLE `usaha` (
  `Email` varchar(100) NOT NULL,
  `Nama_Usaha` varchar(100) NOT NULL,
  `Id_Usaha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `usaha`
--

INSERT INTO `usaha` (`Email`, `Nama_Usaha`, `Id_Usaha`) VALUES
('muammar.clasic@gmail.com', 'keepwork', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pegawai`
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
-- Indeks untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`Email`);

--
-- Indeks untuk tabel `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`),
  ADD KEY `f_id_usaha_shift` (`id_usaha`);

--
-- Indeks untuk tabel `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`Id_Usaha`),
  ADD KEY `email_pemilik` (`Email`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `f_id_usaha` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`Id_Usaha`),
  ADD CONSTRAINT `f_id_usaha_shitD1` FOREIGN KEY (`day1`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_usaha_shitD2` FOREIGN KEY (`day2`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_usaha_shitD3` FOREIGN KEY (`day3`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_usaha_shitD4` FOREIGN KEY (`day4`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_usaha_shitD5` FOREIGN KEY (`day5`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_usaha_shitD6` FOREIGN KEY (`day6`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `f_id_usaha_shitD7` FOREIGN KEY (`day7`) REFERENCES `shift` (`id_shift`);

--
-- Ketidakleluasaan untuk tabel `shift`
--
ALTER TABLE `shift`
  ADD CONSTRAINT `f_id_usaha_shift` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`Id_Usaha`);

--
-- Ketidakleluasaan untuk tabel `usaha`
--
ALTER TABLE `usaha`
  ADD CONSTRAINT `email_pemilik` FOREIGN KEY (`Email`) REFERENCES `pemilik` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
