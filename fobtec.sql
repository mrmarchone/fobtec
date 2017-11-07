-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 03:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fobtec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `groupID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `img`, `username`, `email`, `password`, `confirm`, `groupID`) VALUES
(1, '5252075_shutterstock_17618437.jpg', 'atef', 'atef@gmail.com', '9195a4163a7f2313c7c8b49268648d4b264f83d8', '9195a4163a7f2313c7c8b49268648d4b264f83d8', 1),
(27, '5786133_Screenshot (8).png', 'muhammed', 'muhammed@gmail.com', 'c4b5c86bd577da3d93fea7c89cba61c78b48e589', 'c4b5c86bd577da3d93fea7c89cba61c78b48e589', 2);

-- --------------------------------------------------------

--
-- Table structure for table `blogpage`
--

CREATE TABLE `blogpage` (
  `ID` int(255) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `details` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogpage`
--

INSERT INTO `blogpage` (`ID`, `img`, `title`, `details`) VALUES
(10, '8953__and wooden flooring  3D house Free 3D house pictures and wallpaper.jpg', 'Ahmed', 'Heee'),
(11, '5486__and wooden flooring  3D house Free 3D house pictures and wallpaper.jpg', 'Muhammed', 'Sh7atta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `blogpage`
--
ALTER TABLE `blogpage`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `blogpage`
--
ALTER TABLE `blogpage`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
