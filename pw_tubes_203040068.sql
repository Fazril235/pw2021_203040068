-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 10:48 AM
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
  `transmisi` varchar(10) NOT NULL,
  `warna` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otomotif`
--

INSERT INTO `otomotif` (`id`, `img`, `merk`, `tipe`, `transmisi`, `warna`) VALUES
(1, '11.1.jpg', 'BMW', 'r nine t', 'Clutch', 'Black'),
(2, 'motor1.1.jpg', 'Kawasaki', 'H2R', 'Clutch', 'Black'),
(3, 'motor2.1.jpg', 'Ducati', 'Panigale', 'Clutch', 'Red'),
(4, 'motor3.1.jpg', 'BMW', 'HP4 Race', 'Clutch', 'Black'),
(5, 'motor4.jpg', 'Harley-Davidson', 'CVO Limited', 'Clutch', 'Black'),
(6, '6.1.jpg', 'Triumph', 'Rocket 3 GT', 'Clutch', 'Black'),
(7, '7.1.jpg', 'BMW', 'R18 Classic Tou', 'Clutch', 'Black'),
(8, '8.1.jpg', 'Honda', 'CBR1000RR-R Fir', 'Clutch', 'Red'),
(9, '9.1.jpg', 'Benelli', 'TNT 1130 Cafe R', 'Clutch', 'Yellow'),
(10, '10.1.jpg', 'Moto Guzzi', 'Audace ', 'Clutch', 'Black');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `otomotif`
--
ALTER TABLE `otomotif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `otomotif`
--
ALTER TABLE `otomotif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
