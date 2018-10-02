-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2018 at 05:36 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 123);

-- --------------------------------------------------------

--
-- Table structure for table `maklumatpesakit`
--

CREATE TABLE `maklumatpesakit` (
  `idpesakit` int(10) NOT NULL,
  `namapesakit` varchar(50) NOT NULL,
  `noic` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rekodpesakit`
--

CREATE TABLE `rekodpesakit` (
  `idpesakit` int(10) NOT NULL,
  `jenispenyakit` varchar(100) NOT NULL,
  `tarikh` varchar(20) NOT NULL,
  `nama_ubat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rekodpesakit`
--

INSERT INTO `rekodpesakit` (`idpesakit`, `jenispenyakit`, `tarikh`, `nama_ubat`) VALUES
(4, 'Jantung Berlubang', '2018-09-24', 'Metafetarmin'),
(12, 'sakit hati', '2018-05-24', 'tahan hawa nafsu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maklumatpesakit`
--
ALTER TABLE `maklumatpesakit`
  ADD PRIMARY KEY (`idpesakit`);

--
-- Indexes for table `rekodpesakit`
--
ALTER TABLE `rekodpesakit`
  ADD PRIMARY KEY (`idpesakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maklumatpesakit`
--
ALTER TABLE `maklumatpesakit`
  MODIFY `idpesakit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
