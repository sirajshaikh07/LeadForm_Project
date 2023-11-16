-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 01:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `googleform`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE `formdata` (
  `ID` int(10) NOT NULL,
  `RN Name` varchar(30) NOT NULL,
  `First Name` varchar(30) NOT NULL,
  `Last Name` varchar(30) NOT NULL,
  `Job Title` varchar(50) NOT NULL,
  `Domain` varchar(50) NOT NULL,
  `Email ID` varchar(60) NOT NULL,
  `Phone No` varchar(50) NOT NULL,
  `Company Name` varchar(50) NOT NULL,
  `Company Website` varchar(60) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `City` varchar(60) NOT NULL,
  `State` varchar(60) NOT NULL,
  `Postal Code` varchar(60) NOT NULL,
  `Country` varchar(60) NOT NULL,
  `Employe Size` int(20) NOT NULL,
  `Industry Type` varchar(40) NOT NULL,
  `Sub Industry` varchar(40) NOT NULL,
  `Prospect Link` varchar(60) NOT NULL,
  `Employee Size Line` varchar(60) NOT NULL,
  `Industry Type Line` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
