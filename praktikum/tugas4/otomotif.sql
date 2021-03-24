-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 09:53 AM
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
(1, 'vespa946.jpg', 'Piagio', 'Vespa946', 'Automatic', 'Putih'),
(2, 'motor1.1.jpg', 'Kawasaki', 'H2R', 'Kopling', 'Hitam'),
(3, 'motor2.1.jpg', 'Ducati', 'Panigale', 'Kopling', 'Merah'),
(4, 'motor3.1.jpg', 'BMW', 'HP4 Race', 'Kopling', 'Hitam'),
(5, 'motor4.jpg', 'Harley-Davidson', 'CVO Limited', 'Kopling', 'Hitam'),
(6, '6.1.jpg', 'Triumph', 'Rocket 3 GT', 'Kopling', 'Hitam'),
(7, '7.1.jpg', 'BMW', 'R18 Classic Tou', 'Kopling', 'Hitam'),
(8, '8.1.jpg', 'Honda', 'CBR1000RR-R Fir', 'Kopling', 'Merah'),
(9, '9.1.jpg', 'Benelli', 'TNT 1130 Cafe R', 'Kopling', 'Kuning'),
(10, '10.1.jpg', 'Moto Guzzi', 'Audace ', 'Kopling', 'Hitam');

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
