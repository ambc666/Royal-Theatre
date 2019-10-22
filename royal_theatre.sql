-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 11:00 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royal_theatre`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_Reference` int(5) NOT NULL,
  `Title` varchar(4) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Street` varchar(40) NOT NULL,
  `Town` varchar(20) NOT NULL,
  `Postcode` varchar(10) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `Price_Band` varchar(4) NOT NULL,
  `Adult` decimal(4,2) NOT NULL,
  `Child` decimal(4,2) NOT NULL,
  `Concession` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`Price_Band`, `Adult`, `Child`, `Concession`) VALUES
('A', '38.00', '12.00', '40.00'),
('B', '16.00', '8.00', '12.00'),
('C', '10.00', '5.00', '5.00'),
('D', '45.00', '0.00', '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `productions`
--

CREATE TABLE `productions` (
  `Production_Reference` int(4) NOT NULL,
  `Production_Name` varchar(50) NOT NULL,
  `Genre` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `Price_Band` varchar(1) NOT NULL,
  `Product_Image_Path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productions`
--

INSERT INTO `productions` (`Production_Reference`, `Production_Name`, `Genre`, `Date`, `Start_Time`, `Price_Band`, `Product_Image_Path`) VALUES
(1, 'Little Stars: Dance', 'Family', '2018-06-15', '14:00:00', 'C', ''),
(2, 'RSNO Community Orchestra', 'Music', '2018-08-18', '19:30:00', 'A', ''),
(3, 'Nicki Minaj', 'Concert', '2018-06-07', '20:00:00', 'D', ''),
(4, 'Harlem Globetrotters', 'Sport', '2018-08-10', '14:30:00', 'B', ''),
(5, 'Alan Davies', 'Comedy', '2018-09-08', '19:30:00', 'D', ''),
(6, 'Aladdin', 'Family', '2018-07-14', '19:00:00', 'C', ''),
(7, 'Phantom of the Opera', 'Music', '2018-08-18', '19:30:00', 'A', ''),
(8, 'Lion King', 'Family', '2018-10-19', '20:30:00', 'C', ''),
(9, 'Ed Byrne: Spoiler Alert', 'Comedy', '2018-07-28', '20:15:00', 'D', ''),
(10, 'Michael McIntyres Big World Tour', 'Comedy', '2018-11-06', '20:00:00', 'D', ''),
(11, 'Taylor Swift', 'Concert', '2018-10-14', '20:30:00', 'D', ''),
(12, 'Mamma Mia', 'Music', '2018-06-30', '18:30:00', 'A', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productions`
--
ALTER TABLE `productions`
  ADD PRIMARY KEY (`Production_Reference`),
  ADD KEY `Price Band` (`Price_Band`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productions`
--
ALTER TABLE `productions`
  MODIFY `Production_Reference` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
