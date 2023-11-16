-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 12:44 PM
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
-- Database: `lead`
--

-- --------------------------------------------------------

--
-- Table structure for table `leadform`
--

CREATE TABLE `leadform` (
  `agent_id` int(11) NOT NULL,
  `agent_name` varchar(255) DEFAULT NULL,
  `leader_name` varchar(255) DEFAULT NULL,
  `CAMP_NAME` varchar(255) DEFAULT NULL,
  `RA_NAME` varchar(255) DEFAULT NULL,
  `FIRST_NAME` varchar(255) DEFAULT NULL,
  `LAST_NAME` varchar(255) DEFAULT NULL,
  `JOB_TITLE` varchar(255) DEFAULT NULL,
  `JOB_LEVEL` int(11) DEFAULT NULL,
  `TAL_MAPPED` varchar(255) DEFAULT NULL,
  `EMAIL_ID` varchar(255) DEFAULT NULL,
  `PHONE_NO` varchar(20) DEFAULT NULL,
  `COMPANY_NAME` varchar(255) DEFAULT NULL,
  `COMPANY_WEBSITE` varchar(255) DEFAULT NULL,
  `ADDRESS_LINE_1` varchar(255) DEFAULT NULL,
  `ADDRESS_LINE_2` varchar(255) DEFAULT NULL,
  `CITY` varchar(255) DEFAULT NULL,
  `STATE` varchar(255) DEFAULT NULL,
  `POSTAL_CODE` varchar(20) DEFAULT NULL,
  `COUNTRY` varchar(255) DEFAULT NULL,
  `EMPLOYEE_SIZE` int(11) DEFAULT NULL,
  `INDUSTRY_TYPE` varchar(255) DEFAULT NULL,
  `SUB_INDUSTRY` varchar(255) DEFAULT NULL,
  `Prospect_Link` varchar(255) DEFAULT NULL,
  `Employee_Size_Link` varchar(255) DEFAULT NULL,
  `Industry_Type_Link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leadform`
--

INSERT INTO `leadform` (`agent_id`, `agent_name`, `leader_name`, `CAMP_NAME`, `RA_NAME`, `FIRST_NAME`, `LAST_NAME`, `JOB_TITLE`, `JOB_LEVEL`, `TAL_MAPPED`, `EMAIL_ID`, `PHONE_NO`, `COMPANY_NAME`, `COMPANY_WEBSITE`, `ADDRESS_LINE_1`, `ADDRESS_LINE_2`, `CITY`, `STATE`, `POSTAL_CODE`, `COUNTRY`, `EMPLOYEE_SIZE`, `INDUSTRY_TYPE`, `SUB_INDUSTRY`, `Prospect_Link`, `Employee_Size_Link`, `Industry_Type_Link`) VALUES
(1, 'Agent John', 'Leader David', 'Dell', 'rita makaser', 'SHAIKH', 'JANI', 'web developer', 0, 'djsjs', 'Sirajthecena@gmail.com', '09284147219', 'dassault sysyetem', 'https://stackoverflow.com/questions/6054033/pretty-printing-json-with-php', 'Wadgaon bk,Charwad washti,pune-41', 'Wadgaon bk,Charwad washti,pune-41', 'AAAA', 'MAHARASHTRA', '411041', 'India', 123, 'engineering softwarew', 'engineering software ', 'https://stackoverflow.com/questions/6054033/pretty-printing-json-with-php', 'https://stackoverflow.com/questions/6054033/pretty-printing-json-with-php', 'https://stackoverflow.com/questions/6054033/pretty-printing-json-with-php'),
(2, 'Agent John', 'Leader David', 'Dell', 'rita makaser', 'SHAIKH', 'JANI', 'web developer', 0, 'djsjs', 'Sirajthecena@gmail.com', '09284147219', 'dassault sysyetem', 'https://stackoverflow.com/questions/6054033/pretty-printing-json-with-php', 'Wadgaon bk,Charwad washti,pune-41', 'Wadgaon bk,Charwad washti,pune-41', 'AAAA', 'MAHARASHTRA', '411041', 'India', 123, 'engineering softwarew', 'engineering software ', 'https://stackoverflow.com/questions/6054033/pretty-printing-json-with-php', 'https://stackoverflow.com/questions/6054033/pretty-printing-json-with-php', 'https://stackoverflow.com/questions/6054033/pretty-printing-json-with-php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `userfirst` varchar(255) DEFAULT NULL,
  `Password` int(30) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `userrole` enum('agent','manager','leader') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `userfirst`, `Password`, `lastname`, `userrole`) VALUES
(1, 'Agent John', 6261, 'Smith', 'agent'),
(2, 'Agent Sarah', 882, 'Johnson', 'agent'),
(3, 'Agent Michael', 9, 'Brown', 'agent'),
(4, 'Agent Emily', 2882, 'Davis', 'agent'),
(5, 'Agent Robert', 272, 'Miller', 'agent'),
(6, 'Leader David', 261, 'Wilson', 'leader'),
(7, 'Leader Jessica', 261, 'Martinez', 'leader'),
(8, 'Leader Samuel', 61, 'Anderson', 'leader'),
(9, 'Manager William', 26, 'Garcia', 'manager'),
(10, 'Manager Olivia', 71, 'Lopez', 'manager'),
(197, 'Shadh', 1234, 'Malik', 'leader');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leadform`
--
ALTER TABLE `leadform`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leadform`
--
ALTER TABLE `leadform`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
