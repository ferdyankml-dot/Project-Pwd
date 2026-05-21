-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2026 at 04:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_pwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ferdyan@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idm` int(2) NOT NULL,
  `catalog` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `keterangan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idm`, `catalog`, `harga`, `keterangan`) VALUES
(3, 'Latte Coffee', '20000', 'Kopi latte creamy dengan rasa lembut dan hangatt'),
(4, 'Cappuccino', '19000', 'Cappuccino dengan foam susu tebal dan aroma kopi kuat'),
(5, 'Espresso', '15000', 'Espresso hitam pekat dengan cita rasa kopi asli'),
(6, 'Kopi Tubruk', '10000', 'Cita rasa nusanta dengan biji kopi robusta dari petani lokal'),
(7, 'Jamu Bantul', '50000', 'Peninggalan nenak moyang'),
(8, 'Amerikano', '25000', 'espresso + air');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idpe` int(2) NOT NULL,
  `total` int(20) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idpe`, `total`, `bukti`, `id`) VALUES
(2, 10000, '6a0de804ee7f3.jpg', 7),
(3, 15000, '6a0defa4a47b6.jpg', 8),
(4, 50000, '6a0df46a0a49a.png', 9),
(5, 45000, '6a0e65d787d46.jpg', 10),
(6, 150000, '6a0e692358249.jpg', 11),
(7, 15000, '6a0e69ecb76a0.jpg', 12),
(8, 20000, '6a0e6c9377267.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(5) NOT NULL,
  `namap` varchar(30) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `catatan` varchar(100) DEFAULT NULL,
  `idm` int(11) NOT NULL,
  `status` enum('Pending','Selesai') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `namap`, `jumlah`, `catatan`, `idm`, `status`) VALUES
(7, 'ferdyan', 1, 'hot', 6, 'Selesai'),
(8, 'yer', 1, 'qq', 5, 'Selesai'),
(9, 'kkk', 1, 'ww', 7, 'Selesai'),
(10, 'arya', 3, 'hot', 5, 'Selesai'),
(11, 'arya', 3, 'GC', 7, 'Selesai'),
(12, 'ferdyan', 1, '4 shot', 5, 'Selesai'),
(13, 'haidar', 1, 'ice', 3, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idm`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idpe`),
  ADD KEY `fk_pembayaran_pemesanan` (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pemesanan_menu` (`idm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idm` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idpe` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pembayaran_pemesanan` FOREIGN KEY (`id`) REFERENCES `pemesanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_pemesanan_menu` FOREIGN KEY (`idm`) REFERENCES `menu` (`idm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
