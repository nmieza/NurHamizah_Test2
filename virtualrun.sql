-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2022 at 02:38 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtualrun`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Name` varchar(200) NOT NULL,
  `Age` int(10) NOT NULL,
  `NRIC` varchar(20) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Name`, `Age`, `NRIC`, `Address`, `contact`, `Email`) VALUES
('Nur Hamizah binti Baharudin', 22, '000814-10-1856', 'No 10 parit 16 Sungai panjang 45300 Sungai Besar Selangor', '0182899935', 'nurmieza14@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
