-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 09:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shm`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasaham`
--

CREATE TABLE `datasaham` (
  `data_saham` int(4) NOT NULL,
  `kode` char(5) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `nilai_saham` int(3) NOT NULL,
  `selisih` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emitem`
--

CREATE TABLE `emitem` (
  `kode` char(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `sektor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `neraca`
--

CREATE TABLE `neraca` (
  `neraca` int(4) NOT NULL,
  `kode` char(5) NOT NULL,
  `aset` bigint(50) NOT NULL,
  `liabilitas` bigint(50) NOT NULL,
  `modal` bigint(50) NOT NULL,
  `satuan` enum('Penuh','Jutaan','Ribuan','Ribuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `pasar` int(4) NOT NULL,
  `kode` char(5) NOT NULL,
  `tanggal` date NOT NULL,
  `kapitalisasi_pasar` int(50) NOT NULL,
  `Harga_pasar` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `q1`
--

CREATE TABLE `q1` (
  `kode` char(5) NOT NULL,
  `tahun` date NOT NULL,
  `profit` bigint(50) NOT NULL,
  `revenue` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `q2`
--

CREATE TABLE `q2` (
  `kode` char(5) NOT NULL,
  `tahun` date NOT NULL,
  `profit` bigint(50) NOT NULL,
  `revenue` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `q3`
--

CREATE TABLE `q3` (
  `kode` char(5) NOT NULL,
  `tahun` date NOT NULL,
  `profit` bigint(50) NOT NULL,
  `revenue` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saham`
--

CREATE TABLE `saham` (
  `saham` int(4) NOT NULL,
  `kode` char(5) NOT NULL,
  `jmlhShmberedar` int(50) NOT NULL,
  `tglPencatatan` date NOT NULL,
  `satuan` enum('Penuh','Jutaan','Ribuan','Ribuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahunan`
--

CREATE TABLE `tahunan` (
  `kode` char(5) NOT NULL,
  `tahun` date NOT NULL,
  `profit` bigint(50) NOT NULL,
  `revenue` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasaham`
--
ALTER TABLE `datasaham`
  ADD PRIMARY KEY (`data_saham`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `emitem`
--
ALTER TABLE `emitem`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `neraca`
--
ALTER TABLE `neraca`
  ADD PRIMARY KEY (`neraca`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`pasar`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `q1`
--
ALTER TABLE `q1`
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `q2`
--
ALTER TABLE `q2`
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `q3`
--
ALTER TABLE `q3`
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `saham`
--
ALTER TABLE `saham`
  ADD PRIMARY KEY (`saham`),
  ADD KEY `kode` (`kode`),
  ADD KEY `satuan` (`satuan`);

--
-- Indexes for table `tahunan`
--
ALTER TABLE `tahunan`
  ADD KEY `kode` (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datasaham`
--
ALTER TABLE `datasaham`
  MODIFY `data_saham` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `neraca`
--
ALTER TABLE `neraca`
  MODIFY `neraca` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasar`
--
ALTER TABLE `pasar`
  MODIFY `pasar` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saham`
--
ALTER TABLE `saham`
  MODIFY `saham` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
