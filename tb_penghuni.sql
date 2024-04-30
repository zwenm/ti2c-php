-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2024 at 04:14 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penghuni_kos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_penghuni`
--

CREATE TABLE `tb_penghuni` (
  `id` int NOT NULL,
  `nama` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `usia` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jk` varchar(20) NOT NULL,
  `kontak_telepon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_penghuni`
--

INSERT INTO `tb_penghuni` (`id`, `nama`, `alamat`, `usia`, `jk`, `kontak_telepon`) VALUES
(1, 'Nagato Yuki', '???', '17', 'Perempuan', '085781192748'),
(2, 'Jingliu', 'Xianzhou Loufu', '23', 'Perempuan', '1896441412'),
(3, 'Sakagami Tomoyo', '???', '18', 'Perempuan', '08325198531'),
(4, 'Sakurako Mikage', '???', '18', 'Perempuan', '085833221265');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_penghuni`
--
ALTER TABLE `tb_penghuni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_penghuni`
--
ALTER TABLE `tb_penghuni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
