-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2026 at 04:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `jurusan`) VALUES
(1, 'ozik', 'teknik informatika'),
(2, 'lolita', 'teknik informatika'),
(3, 'zizi', 'sistem informasi'),
(4, 'umar joko', 'teknik informatika'),
(5, 'andi', 'teknik informatika'),
(6, 'budi', 'sistem informasi'),
(7, 'citra', 'teknik informatika'),
(8, 'dewi', 'manajemen informatika'),
(9, 'eko', 'sistem informasi'),
(10, 'fajar', 'teknik informatika'),
(11, 'gina', 'akuntansi'),
(12, 'hadi', 'sistem informasi'),
(13, 'indah', 'teknik informatika'),
(14, 'joko', 'manajemen informatika'),
(15, 'kiki', 'sistem informasi'),
(16, 'lina', 'teknik informatika'),
(17, 'mira', 'akuntansi'),
(18, 'nanda', 'sistem informasi'),
(19, 'oki', 'teknik informatika'),
(20, 'putri', 'manajemen informatika'),
(21, 'rudi', 'sistem informasi'),
(22, 'eka', 'sistem informasi'),
(23, 'eca', 'akuntansi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
