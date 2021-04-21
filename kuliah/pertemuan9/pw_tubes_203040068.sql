-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 10:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040068`
--

-- --------------------------------------------------------

--
-- Table structure for table `otomotif`
--

CREATE TABLE `otomotif` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `merk` varchar(15) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `warna` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otomotif`
--

INSERT INTO `otomotif` (`id`, `img`, `merk`, `tipe`, `harga`, `warna`) VALUES
(1, 'moto1.1.png', 'BMW', 'r nine t', 'Rp. 644.000.000,00', 'Black'),
(2, 'moto2.1.png', 'Kawasaki', 'H2R', 'Rp. 820.000.000,00', 'Black'),
(3, 'moto3.1.png', 'Ducati', 'Panigale', 'Rp. 799.000.000,00', 'Red'),
(4, 'moto4.1.png', 'BMW', 'HP4 Race', 'Rp. 1.500.000.000,00', 'Black'),
(5, 'moto5.1.png', 'Harley-Davidson', 'CVO Limited', 'Rp. 2.117.000.000,00', 'Black'),
(6, 'moto6.1.png', 'Triumph', 'Rocket 3 GT', 'Rp. 750.000.000,00', 'Black'),
(7, 'moto7.1.png', 'BMW', 'R18 Classic Tou', 'Rp. 1.069.000.000,00', 'Black'),
(8, 'moto8.1.png', 'Honda', 'CBR1000RR-R', 'Rp. 990.000.000,00', 'Red'),
(9, 'moto9.1.png', 'Benelli', 'TNT 1130 Cafe R', 'Rp. 310.000.000,00', 'Yellow'),
(10, 'moto10.1.png', 'Moto Guzzi', 'Audace ', 'Rp. 765.000.000,00', 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, '', '$2y$10$XoVuc1rvurAvcRtFugGFUu22Wg67QkuMM/lAhyzIAZLCRyz2EIFB6'),
(3, 'admin', '$2y$10$f0IH0eYS9fmuoPf9N.620OHcjNOWc4bkpsUPjIzArTOmfrpGPnkZa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `otomotif`
--
ALTER TABLE `otomotif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `otomotif`
--
ALTER TABLE `otomotif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
