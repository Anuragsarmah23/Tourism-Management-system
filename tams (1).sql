-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 04:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` varchar(60) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `packageID` tinyint(4) NOT NULL,
  `bookingDate` date NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `totalPerson` tinyint(4) NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `userID`, `packageID`, `bookingDate`, `startDate`, `endDate`, `totalPerson`, `totalAmount`, `status`) VALUES
('saurav284380', 'saurav2843', 5, '2019-05-30', '2019-06-18', '2019-06-25', 4, 145996, 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` tinyint(4) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` mediumint(9) NOT NULL,
  `availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `type`, `name`, `cost`, `availability`) VALUES
(1, 'adventure', 'living root bridges of meghalaya', 7499, 'yes'),
(2, 'adventure', 'dzukou valley trek\r\n', 15499, 'yes'),
(3, 'adventure', 'meghalaya adventure\r\n', 17999, 'yes'),
(4, 'adventure', 'subansiri rafting\r\n', 74999, 'yes'),
(5, 'luxury', 'heritage assam\r\n', 36499, 'yes'),
(6, 'luxury', 'assam wildlife classic\r\n', 47499, 'yes'),
(7, 'budget', 'eastern arunachal\r\n', 13999, 'no'),
(8, 'budget', 'tawang\r\n\r\n', 13999, 'yes'),
(9, 'budget', 'incredible sikkim\r\n', 13999, 'yes'),
(10, 'budget', 'mizoram\r\n', 13999, 'yes'),
(11, 'scheduled', 'hornbill festival tour\r\n', 19999, 'yes'),
(12, 'scheduled', 'ziro music festival tour\r\n', 17500, 'yes'),
(13, 'scheduled', 'nh7 weekender tour\r\n', 14300, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `mname`, `lname`, `dob`, `address`, `contact`, `email`, `password`) VALUES
('saurav2843', 'saurav', '', 'choudhury', '1996-01-01', 'Paltan Bazar', 9085324601, 'saurav@gmail.com', 'saurav123'),
('saurav5087', 'saurav', '', 'saurav', '1996-01-01', 'psjsaaa', 8901234654, 'saa65@gmail.com', 'saurav123'),
('saurav6941', 'saurav', '', 'choudhury', '1996-08-03', 'Paltan', 9085140414, 'saurav1@gmail.com', 'saurav123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `packageID` (`packageID`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
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
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`packageID`) REFERENCES `packages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
