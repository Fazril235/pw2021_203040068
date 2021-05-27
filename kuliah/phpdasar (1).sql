-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 08:36 AM
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `Nrp` varchar(20) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Jurusan` varchar(20) NOT NULL,
  `Gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nrp`, `Nama`, `Email`, `Jurusan`, `Gambar`) VALUES
(1, '203040068', 'Muhammad Fazril', 'Teknik Informatika', 'Teknik Informatika', 'picc.png'),
(2, '0102030405', 'Tony Stark', 'Tony@gmail.com', 'Teknik Informatika', 'pic1.jpg'),
(3, '01030204', 'Harry Potter', 'harry_potter_gmail.c', 'Teknik Mesin', 'pic2.jpg'),
(4, '120203122', 'Superman', 'Teknik Lingkungan', 'Teknik Lingkungan', 'pic3.png'),
(5, '098123742', 'Thor', 'Thor@gmail.com', 'Teknik Metalurgi', 'pic5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(6, 'admin', '$2y$10$Q9wufaouQzMq6QU2r6fFOOWkSiEWZkU8s.1pOod3v6vab0sXI8MpC'),
(7, 'ariel', '$2y$10$rsEyritBTCE7z4rxa3LjCuJmL0hZUmVc9JPuFfRDgm2kcaHRdbzG.'),
(8, 'pw', '$2y$10$5N8vHyjdvlj/eG0axqu/bOHWhu1JeqaMaZjYoZlZss6LX4KMvSV6q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
