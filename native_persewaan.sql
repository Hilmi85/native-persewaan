-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2025 at 06:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

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
  `id_product` varchar(255) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `sub_tipe` varchar(100) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `foto_product` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `tipe`, `sub_tipe`, `judul`, `foto_product`, `deskripsi`) VALUES
('1', 'Baju Adat Wanita', 'SD, SMP, SMA', 'Baju Adat Bali', 'Bali.jpg', 'Baju adat Bali. Pakaian tradisional Indonesia. Indonesia traditional clothes.'),
('10', 'Aksesoris', '-', 'Cincin', 'cincin.jpg', 'Aksesoris Cincin. Indonesia modern Aksesoris'),
('6', 'Baju Adat Pria', 'SD, SMP, SMA', 'Baju Adat Jawa', 'p-jawa.jpg', 'Baju adat  Pria Jawa. Pakaian tradisional Indonesia. Indonesia traditional clothes.'),
('67fee7a058799', 'Baju Adat Pria ', 'SMP, SMA', 'Baju Adat Nusantara', 'img1.png', 'Baju adat nusantara 1'),
('8', 'Baju Pernikahan', 'Dewasa', 'Baju Pernikahan Adat Bali', 'nikah-bali.jpg', 'Baju Adat Pernikahan Bali. Pakaian tradisional Indonesia. Indonesia traditional clothes.'),
('9', 'Baju Adat Wanita', 'SMA', 'Baju Adat Dayak', 'Dayak.jpg', 'Baju adat Dayak. Pakaian tradisional Indonesia. Indonesia traditional clothes.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 9223372036854775807, 'admin', 'admin', '2023-12-07 10:16:06'),
(2, 9223372036854775807, 'user', 'user', '2023-12-07 10:16:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
