-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 06:01 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getcommutebookings` ()  SELECT * FROM commutebooking$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getpaymentdetails` ()  SELECT * FROM payment$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getstaybookings` ()  SELECT * FROM staybooking$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getusers` ()  SELECT * FROM users$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `commutebooking`
--

CREATE TABLE `Commutebooking` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `pickup` varchar(50) NOT NULL,
  `dropl` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `hour` int(5) NOT NULL,
  `min` int(5) NOT NULL,
  `am` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `Contactus` (
  `id` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `Payment` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adr` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `ccnum` int(16) NOT NULL,
  `expmonth` int(2) NOT NULL,
  `expyear` int(4) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `fname`, `email`, `adr`, `city`, `state`, `zip`, `cname`, `ccnum`, `expmonth`, `expyear`, `cvv`) VALUES
(1, 'Sandeep Murmu', 'aaryapooh@gmail.com', 'Jai Cable - 61, Mathru Nilaya, 5th Cross, Sainagar Phase 1, Vidhyaranyapur, Bangalore', 'BANGALORE', 'KARNATAKA', 560097, '', 0, 0, 0, 0),
(2, 'Sandeep Murmu', 'aaryapooh@gmail.com', 'Jai Cable - 61, Mathru Nilaya, 5th Cross, Sainagar Phase 1, Vidhyaranyapur, Bangalore', 'BANGALORE', 'KARNATAKA', 560097, '', 0, 0, 0, 0);

--
-- Triggers `payment`
--
DELIMITER $$
CREATE TRIGGER `insertpaymentlog` AFTER INSERT ON `payment` FOR EACH ROW INSERT INTO paymentlog VALUES(null,new.fname,new.email,'INSERTED',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `paymentlog`
--

CREATE TABLE `paymentlog` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `action` varchar(10) NOT NULL,
  `pdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentlog`
--

INSERT INTO `paymentlog` (`id`, `fname`, `email`, `action`, `pdate`) VALUES
(1, 'PRINCE', 'aaryapooh@gmail.com', 'INSERTED', '2019-11-06 20:37:42'),
(2, 'hfhefhjbfh', 'aaryapooh@gmail.com', 'INSERTED', '2019-11-06 20:46:43'),
(3, 'Sandeep Murmu', 'aaryapooh@gmail.com', 'INSERTED', '2019-11-07 10:26:28'),
(4, 'Sandeep Murmu', 'aaryapooh@gmail.com', 'INSERTED', '2019-11-16 00:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `staybooking`
--

CREATE TABLE `Staybooking` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `rooms` int(50) NOT NULL,
  `guest` int(50) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staybooking`
--

INSERT INTO `staybooking` (`id`, `name`, `email`, `phone`, `rooms`, `guest`, `checkin`, `checkout`) VALUES
(1, 'Sandeep Murmu', 'aaryapooh@gmail.com', 2147483647, 1, 2, '1999-12-12', '1999-12-15'),
(2, 'Sandeep Murmu', 'aaryapooh@gmail.com', 2147483647, 1, 2, '2019-11-06', '2019-11-07'),
(3, 'Sandeep Murmu', 'aaryapooh@gmail.com', 2147483647, 1, 2, '2019-09-11', '2019-08-07'),
(4, 'Sandeep Murmu', 'aaryapooh@gmail.com', 2147483647, 1, 2, '0005-02-15', '0054-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `action` varchar(20) NOT NULL,
  `udate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `name`, `action`, `udate`) VALUES
(1, 'dsds', 'INSERTED', '2019-11-06 19:05:02'),
(2, 'cbhgchdc', 'INSERTED', '2019-11-06 19:07:52'),
(3, 'sandhya', 'INSERTED', '2019-11-06 20:29:29'),
(4, 'Sandeep Murmu', 'INSERTED', '2019-11-07 10:27:47'),
(5, 'Sandeep Murmu', 'INSERTED', '2019-11-07 15:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phonenumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `phonenumber`) VALUES
(1, 'Sandeep Murmu', 'aaryapooh@gmail.com', 'NewUser', ' ', 123456),
(2, 'Sandeep Murmu', 'aaryapooh@gmail.com', 'sandy', '1234', 123456);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `insertuserlog` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO userlog VALUES(null,NEW.name,'INSERTED',NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commutebooking`
--
ALTER TABLE `commutebooking`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `paymentlog`
--
ALTER TABLE `paymentlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staybooking`
--
ALTER TABLE `staybooking`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commutebooking`
--
ALTER TABLE `commutebooking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paymentlog`
--
ALTER TABLE `paymentlog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staybooking`
--
ALTER TABLE `staybooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
