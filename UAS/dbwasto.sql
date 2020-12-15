-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 07:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwasto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(20001225, 'irfan', 'thalib1234'),
(20001226, 'faris', 'faris261200');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `noid` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `umur` int(2) NOT NULL,
  `ttl` date NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pengambilansampah` varchar(20) NOT NULL,
  `agenkebersihan` varchar(30) NOT NULL,
  `provinsi` varchar(15) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(40) NOT NULL,
  `kodepos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`noid`, `nama`, `umur`, `ttl`, `notelp`, `email`, `pengambilansampah`, `agenkebersihan`, `provinsi`, `alamat`, `kota`, `kodepos`) VALUES
('', '', 0, '0000-00-00', '', '', '', '', '', '', '', 0),
('', '', 0, '0000-00-00', '', '', '', '', '', '', '', 0),
('', '', 0, '0000-00-00', '', '', '', '', '', '', '', 0),
('', '', 0, '0000-00-00', '', '', '', '', '', '', '', 0),
('', '', 0, '0000-00-00', '', '', '', '', '', '', '', 0),
('1941720062', 'Faris Ikhlasul Haq', 20, '2000-12-26', '082257744131', 'farisikhlasulhaq@yahoo.co.id', '01', '04', '1', 'Perumahan Griya Permata Alam C-16', '01', 65152),
('1941720062', 'Faris Ikhlasul Haq', 20, '2000-12-26', '082257744131', 'farisikhlasulhaq@yahoo.co.id', '01', '04', 'Jawa Timur', 'Perumahan Griya Permata Alam C-16', '01', 65152),
('1941720062', 'Faris Ikhlasul Haq', 20, '2000-12-26', '082257744131', 'farisikhlasulhaq@yahoo.co.id', '1x', '2 in 1', 'Jawa Timur', 'Perumahan Griya Permata Alam C-16', 'Malang', 65152),
('1941720062', 'Faris Ikhlasul Haq', 20, '2000-12-26', '082257744131', 'farisikhlasulhaq@yahoo.co.id', '1x', '2 in 1', 'Jawa Timur', 'Perumahan Griya Permata Alam C-16', 'Malang', 65152),
('1941720064', 'Faris Ikhlasul Haq', 20, '2000-12-26', '082257744131', 'farisikhlasulhaq@yahoo.co.id', '1x', '2 in 1', 'Jawa Timur', 'Perumahan Griya Permata Alam C-16', 'Malang', 65152);

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `nama` varchar(40) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `nomerpos` int(5) NOT NULL,
  `tanggapananda` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`nama`, `kota`, `kecamatan`, `nomerpos`, `tanggapananda`) VALUES
('Faris Ikhlasul Haq', 'Malang', 'Karangploso', 65152, 'kjhgrfeddwWdDDDDddd'),
('Faris Ikhlasul Haq', 'Malang', 'Singosari', 0, 'Faris Ikhlasul Haq Mantap'),
('Faris Ikhlasul Haq', 'Malang', 'Karangploso', 651152, 'adsadasdasdasdasdasdasda'),
('Faris Ikhlasul Haq', 'Malang', 'Karangploso', 651152, 'adsadasdasdasdasdasdasda'),
('Faris Ikhlasul Haq', 'Malang', 'Karangploso', 651152, 'adsadasdasdasdasdasdasda'),
('Faris Ikhlasul Haq', 'Malang', 'Karangploso', 651152, 'adsadasdasdasdasdasdasda'),
('Faris Ikhlasul Haq', 'Malang', 'Karangploso', 651152, 'adsadasdasdasdasdasdasda'),
('Faris Ikhlasul Haq', 'Malang', 'Singosari', 0, 'Faris Ikhlasul Haq Mantap'),
('Faris Ikhlasul Haq', 'Malang', 'Karangploso', 0, 'FFFAFAFFAFFFAFF'),
('Faris Ikhlasul Haq', 'Malang', 'Karangploso', 0, 'FFFAFAFFAFFFAFF'),
('', '', '', 0, ''),
('', '', '', 0, ''),
('Faris Ikhlasul Haq', 'Malang', 'Karangploso', 65152, 'Faafafaf'),
('Ghani Al Ghifari', 'Jakarta', 'Singosari', 65152, 'Yeah Mean'),
('Irfan Thalib', 'Sumedang', 'Karangploso', 65152, 'asdsadddddddddaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `ttl`, `alamat`) VALUES
(0, 'xalvetra', 'faris', 'Ghani al Ghifari', '0000-00-00', 'Perumahan Griya Permata Alam C-16'),
(1, 'farisikh', 'faris261200', 'Faris Ikhlasul Haq', '2000-12-26', 'Perum GPA C-16'),
(191919191, 'xalvetra', 'faris261200', 'Faris Ikhlasul Haq', '2006-12-20', 'Perumahan Griya Jingga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
