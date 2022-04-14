-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 08:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_suremseger`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `deskripsi_about` varchar(355) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `deskripsi_about`, `gambar`) VALUES
(1, 'Desa Kemuning Lor Kecamatan Arjasa Kabupaten Jember merupakan salah satu Desa Wisata Andalan, yang berada di lereng Gunung Argopuro. di desa ini terdapat komoditas Andalan yaitu perkebunan kopi, buah naga, bunga krisan dan peternakan sapi perah. Salah satu UKM produsen susu sapi perah adalah UKM Susu Rembangan milik Ibu Erin', 'sapi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jambuka` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `lokasi`, `jambuka`, `nohp`) VALUES
(1, 'Jl. Rembangan No.13, Darungan, Kemuning Lor, Arjasa, Jember jawa timur', '08.00 - 16.00', '085100236147');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi`
--

CREATE TABLE `deskripsi` (
  `id` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deskripsi`
--

INSERT INTO `deskripsi` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Susu Rembangan Jember', ' Produk yang ditawarkan yaitu 100% susu segar rembangan dari perahan sapi yang berkualitas dengan berbagai rasa kurma, Melon, Vanila, Hazelnut, Strawbery, Coklat, dll', '6257a787af0d0.png');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `volume` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `detail`, `volume`, `gambar`) VALUES
(1, 'Kurma', '10000', 'Susu segar ini terbuat dari sapi perah berkualitas yang berasal dari peternakan puncak rembangan jember', '500', 'displaysusu.png'),
(2, 'Melon', '10000', 'Susu segar ini terbuat dari sapi perah berkualitas yang berasal dari peternakan puncak rembangan jember', '500', 'displaysusu.png'),
(3, 'Vanilla', '10000', 'Susu segar ini terbuat dari sapi perah berkualitas yang berasal dari peternakan puncak rembangan jember', '500', 'displaysusu.png'),
(4, 'Hazelnut', '10000', 'Susu segar ini terbuat dari sapi perah berkualitas yang berasal dari peternakan puncak rembangan jember', '500', 'displaysusu.png'),
(5, 'Strawberry', '10000', 'Susu segar ini terbuat dari sapi perah berkualitas yang berasal dari peternakan puncak rembangan jember', '500', 'displaysusu.png'),
(6, 'Coklat', '10000', 'Susu segar ini terbuat dari sapi perah berkualitas yang berasal dari peternakan puncak rembangan jember', '500', 'displaysusu.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `namalengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(2) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namalengkap`, `email`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `nohp`, `password`, `role`, `gambar`) VALUES
(9, 'admin2', 'admin2@gmail.com', 'jalan jalan', 'jawa timur', 'jember', 'balung', '68161', '0855555', '$2y$10$lSCgGUbJaKeY0/EVP1Q2VuwxUtot2288AYvhqkcLedGIKtK0dj4Mq', '1', 'profile.jpg'),
(11, 'admin3', 'admin3@gmail.com', 'jalan jalan', 'jawa timur', 'jember', 'balung', '68161', '0812345678', '$2y$10$fRht4xVYEWpatYMXAmkU2.f9Bpng/BJ2s7BjkR500xvm5lgDdBhnO', '1', '62571034d3b10.png'),
(12, 'user', 'user@gmail.com', 'jalan puger', 'jawa timur', 'jember', 'balung', '68161', '111111111111', '$2y$10$SIXakponWxvWvttK4xmev.RUwuH1SSkq0yKzvmN9IAF1KQw0z9Hi6', '2', 'defaultprofile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deskripsi`
--
ALTER TABLE `deskripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
