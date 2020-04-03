-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2020 at 03:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gitar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`) VALUES
('1111', '011c945f30ce2cbafc452f39840f025693339c42'),
('1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
('132', '91dfde1d6e005e422f64a59776234f1f4c80b5e4'),
('admin123', 'f865b53623b121fd34ee5426c792e5c33af8c227'),
('akuadmin', 'ce7a16e34c2b49ab8b65e1f5087402951afe693b');

-- --------------------------------------------------------

--
-- Table structure for table `gitar`
--

CREATE TABLE `gitar` (
  `id_gitar` int(11) NOT NULL,
  `nama_gitar` varchar(30) NOT NULL,
  `pick_up` varchar(30) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `buatan` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gitar`
--

INSERT INTO `gitar` (`id_gitar`, `nama_gitar`, `pick_up`, `gambar`, `buatan`, `harga`) VALUES
(22, 'Fender Stratocaster USA', 'Singlecoil', 'stratocaster1.jpeg', 'Amerika', 17000000),
(24, 'Gibson Les Paul', 'Humbucker', 'lespaul.jpg', 'Amerika', 12000000),
(25, 'Fender Stratocaster', 'Singlecoil', 'stratocaster.jpeg', 'Jepang', 14000000),
(26, 'Fender Stratocaster USA', 'Singlecoil', 'stratocaster1.jpeg', 'Amerika', 15000000),
(27, 'Gibson Les Paul', 'Humbucker', 'lespaul.jpg', 'Amerika', 17000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `gitar`
--
ALTER TABLE `gitar`
  ADD PRIMARY KEY (`id_gitar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gitar`
--
ALTER TABLE `gitar`
  MODIFY `id_gitar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
