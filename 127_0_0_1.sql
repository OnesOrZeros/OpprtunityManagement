-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 03:28 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opportunitymanagement`
--
CREATE DATABASE IF NOT EXISTS `opportunitymanagement` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `opportunitymanagement`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `AccountID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`AccountID`, `UserID`, `Name`, `Address`, `Mobile`, `Email`) VALUES
(4, 7, 'Airtel', '234 Mlolongoo', '075511111', 'airtel@celtel.comm'),
(5, 8, 'Doe Enterprise', '2108 Nairobi', '0707060214', 'doe@gmail.com'),
(7, 0, 'Fred', '3188', '0707971053', 'unix@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `opportunities`
--

CREATE TABLE `opportunities` (
  `AccountID` int(11) NOT NULL,
  `UserID` varchar(250) NOT NULL,
  `OpportunityID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Stage` varchar(250) NOT NULL,
  `Amount` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opportunities`
--

INSERT INTO `opportunities` (`AccountID`, `UserID`, `OpportunityID`, `Name`, `Stage`, `Amount`) VALUES
(2, '7', 2, 'Saf Opportunity2', 'Discoverytg', '1000023'),
(5, '8', 4, 'Software Engineer', 'entry', '$2000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Password` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`) VALUES
(5, 'min', '$2y$10$XcGs9ttWnNf2ojeR0p4GguGdCw..Rw7AZZcbN3L.lORXsHhPq48pe'),
(6, 'Bill', '$2y$10$iE/enhCEvjNvHRAlFKU4du5BKuepOzvJkJSlb37d1RV2PSr5Vi6dC'),
(7, 'Kip', '$2y$10$fny9XiSVURDkaaBWwaJNSu/UvXxBhFu6rvUKnqLmNxbAxTvPPeNHi'),
(8, 'doe', '$2y$10$APsVp14q9cQgqKOxiQEy/.0f0ctSBOPHZs7EdJ0yOFIQcDIeQKMkm'),
(9, 'John', '$2y$10$25Y3s1k5SAYrO7zK7/TaX.V4RFBRyKRfod1em8eYehK.ph8hgTyLq'),
(11, 'Dyfrey', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'bot', 'a384b6463fc216a5f8ecb6670f86456a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`AccountID`);

--
-- Indexes for table `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`OpportunityID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `AccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `OpportunityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
