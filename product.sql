-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2023 at 11:03 AM
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
-- Database: `native_persewaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int NOT NULL,
  `tipe` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sub_tipe` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `tipe`, `sub_tipe`, `judul`, `foto_product`, `deskripsi`) VALUES
(1, 'Baju Adat Wanita', 'SD, SMP, SMA', 'Baju Adat Bali', 'Bali.jpg', 'Baju adat Bali. Pakaian tradisional Indonesia. Indonesia traditional clothes.'),
(6, 'Baju Adat Pria', 'SD, SMP, SMA', 'Baju Adat Jawa', 'p-jawa.jpg', 'Baju adat  Pria Jawa. Pakaian tradisional Indonesia. Indonesia traditional clothes.'),
(8, 'Baju Pernikahan', 'Dewasa', 'Baju Pernikahan Adat Bali', 'nikah-bali.jpg', 'Baju Adat Pernikahan Bali. Pakaian tradisional Indonesia. Indonesia traditional clothes.'),
(9, 'Baju Adat Wanita', 'SMA', 'Baju Adat Dayak', 'Dayak.jpg', 'Baju adat Dayak. Pakaian tradisional Indonesia. Indonesia traditional clothes.'),
(10, 'Aksesoris', '-', 'Cincin', 'cincin.jpg', 'Aksesoris Cincin. Indonesia modern Aksesoris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
