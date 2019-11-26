-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 06:07 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `nama_dokter`
--

CREATE TABLE `nama_dokter` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `keahlian` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nama_dokter`
--

INSERT INTO `nama_dokter` (`id`, `foto`, `nama`, `keahlian`, `alamat`, `email`) VALUES
(2, 'alinda.png', 'Alinda Ayu', 'Ahli Mata', 'Jl. Kopo Sayati No.182A, Sayati, Margahayu, Bandung, Jawa Barat ', 'Alindaayu@dokter.com'),
(3, 'fayola.png', 'Fayola Hayra', 'Ahli Kulit', 'Jl. Kav Industri 1 Taman Holis Indah ', 'Keysha@dokter.com'),
(4, 'ilyas.png', 'Ilyas Yasin', 'Ahli Kuku', 'Sukamukti Blok B-1 No.12 , Sukamukti - Katapang , West Java, Indonesia 40921 ', 'Ilyasyasin@dokter.com'),
(5, 'lala.png', 'Lala Nurul Fadzilah', 'Ahli Rambut', 'Jl. Merkuri Utara XV No. 11 Bandung ', 'Nrlfadzilah@dokter.com'),
(6, 'keysha.png', 'Keysha Safaraz', 'Ahli Gigi', 'Jl Suplir 2 No 8 Rancaekek Kencana ', 'Keysha@dokter.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nama_dokter`
--
ALTER TABLE `nama_dokter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nama_dokter`
--
ALTER TABLE `nama_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
