-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2015 at 11:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudpdo`
--

CREATE TABLE IF NOT EXISTS `crudpdo` (
  `id_pdo` int(11) NOT NULL COMMENT 'Identitas',
  `nm_pdo` varchar(45) NOT NULL COMMENT 'Nama',
  `gd_pdo` varchar(20) NOT NULL COMMENT 'Jenis Kelamin',
  `tl_pdo` varchar(25) NOT NULL COMMENT 'Phone',
  `ar_pdo` text NOT NULL COMMENT 'Alamat'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crudpdo`
--

INSERT INTO `crudpdo` (`id_pdo`, `nm_pdo`, `gd_pdo`, `tl_pdo`, `ar_pdo`) VALUES
(2, 'Uzumaki Naruto', 'Male', '12345', 'Konohagakure'),
(4, 'Yujiro Hanma', 'Male', '12345', 'Tokyo, Japan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudpdo`
--
ALTER TABLE `crudpdo`
  ADD PRIMARY KEY (`id_pdo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudpdo`
--
ALTER TABLE `crudpdo`
  MODIFY `id_pdo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identitas',AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
