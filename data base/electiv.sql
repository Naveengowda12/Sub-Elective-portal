-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 09:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electiv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'naveen@gmail.com', '1234', '2019-04-30 20:31:45', '2019-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `stdfill`
--

CREATE TABLE `stdfill` (
  `id` int(11) NOT NULL,
  `ele1` varchar(100) NOT NULL,
  `ele2` varchar(100) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `sem` varchar(250) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdfill`
--

INSERT INTO `stdfill` (`id`, `ele1`, `ele2`, `usn`, `name`, `sem`, `contact`, `email`, `postingDate`, `updationDate`) VALUES
(28, 'Data Warehousing & Mining', 'E-commerce and MIS', '1DA17MCA53', 'Anusha.T.S', 'Fourth', 9874563210, 'anushats@gmail.com', '2019-06-04 17:36:29', ''),
(31, 'Software Architecture', 'Enterprises Resource Planning', '1DA17MCA05', 'Preethi.G.L', 'Fourth', 9638527410, 'pree@gmail.com', '2019-06-07 12:17:51', ''),
(32, 'Software Architecture', 'Software Project Management', '1DA17MCA04', 'Naveen.A.P', 'Fourth', 9164722741, 'naveengowda607@gmail.com', '2019-06-08 12:04:03', ''),
(33, 'Software Architecture', 'Enterprises Resource Planning', '1da18mca96', 'sushmitha', 'fourth', 7458932160, 'sushmitha12@gmail.com', '2019-06-10 04:53:20', ''),
(34, 'Software Architecture', 'Enterprises Resource Planning', '1da18mca55', 'sanjana', 'fourth', 9652381470, 'sanju143@gmail.com', '2019-06-10 04:54:24', ''),
(35, 'Software Architecture', 'Enterprises Resource Planning', '1da18mca53', 'nithin', 'fourth', 8975462103, 'nithin56@gmail.com', '2019-06-10 04:55:33', ''),
(37, 'Artificial Intelligence', 'Enterprises Resource Planning', '1DA18MCA79', 'Raghotham M H', 'Fourth', 8105597623, 'mulbagulkar.ragotham@gmail.com', '2019-06-10 08:53:49', ''),
(38, 'Artificial Intelligence', 'Software Project Management', '1DA18MCA04', 'Naveen', 'Fourth', 9164722741, 'Naveengowda@gmail.com', '2019-06-13 05:08:54', ''),
(39, 'Artificial Intelligence', 'Software Project Management', '1da18mca54', 'Anusha', 'Fourth', 9538919405, 'anusha@gmail.com', '2019-06-13 07:23:06', ''),
(40, 'Artificial Intelligence', 'Software Project Management', '1da18mca99', 'Vinay', 'Fourth', 9035569758, 'vinaytili100@gmail.com', '2019-06-20 16:14:24', ''),
(41, 'Artificial Intelligence', 'E-commerce and MIS', '1da17mca97', 'ramesh', 'Fourth', 9164722741, 'ramesh@gmail.com', '2019-06-21 03:57:53', ''),
(42, 'Data Warehousing & Mining', 'Software Project Management', '1da18mca55', 'sanjana', 'Fourth', 9856741230, 'sanju12@gmail.com', '2019-06-24 06:51:38', '');

-- --------------------------------------------------------

--
-- Table structure for table `stdlog`
--

CREATE TABLE `stdlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdlog`
--

INSERT INTO `stdlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(31, 16, 'naveengowda607@gmail.com', 0x3a3a31, '', '', '2019-06-04 17:31:55'),
(32, 17, 'sushma@gmail.com', 0x3a3a31, '', '', '2019-06-04 17:34:08'),
(33, 18, 'anushats@gmail.com', 0x3a3a31, '', '', '2019-06-04 17:36:16'),
(34, 19, 'shamanth@gmail.com', 0x3a3a31, '', '', '2019-06-06 14:23:23'),
(35, 19, 'shamanth@gmail.com', 0x3a3a31, '', '', '2019-06-07 12:03:19'),
(36, 16, 'naveengowda607@gmail.com', 0x3a3a31, '', '', '2019-06-07 12:07:57'),
(37, 20, 'pree@gmail.com', 0x3a3a31, '', '', '2019-06-07 12:11:14'),
(38, 20, 'pree@gmail.com', 0x3a3a31, '', '', '2019-06-07 12:14:13'),
(39, 20, 'pree@gmail.com', 0x3a3a31, '', '', '2019-06-07 12:14:47'),
(40, 20, 'pree@gmail.com', 0x3a3a31, '', '', '2019-06-07 12:17:31'),
(41, 21, 'sanju@gmail.com', 0x3a3a31, '', '', '2019-06-07 12:19:55'),
(42, 16, 'naveengowda607@gmail.com', 0x3a3a31, '', '', '2019-06-07 15:48:39'),
(43, 16, 'naveengowda607@gmail.com', 0x3a3a31, '', '', '2019-06-08 12:03:23'),
(44, 22, 'abc@gmail.com', 0x3a3a31, '', '', '2019-06-10 08:23:01'),
(45, 23, 'mulbagulkar.ragotham@gmail.com', 0x3a3a31, '', '', '2019-06-10 08:42:52'),
(46, 16, 'naveengowda607@gmail.com', 0x3a3a31, '', '', '2019-06-10 08:49:04'),
(47, 23, 'mulbagulkar.ragotham@gmail.com', 0x3a3a31, '', '', '2019-06-10 08:51:48'),
(48, 23, 'mulbagulkar.ragotham@gmail.com', 0x3a3a31, '', '', '2019-06-10 08:51:49'),
(49, 23, 'mulbagulkar.ragotham@gmail.com', 0x3a3a31, '', '', '2019-06-10 08:53:27'),
(50, 24, 'Naveengowda@gmail.com', 0x3139322e3136382e3232332e313232, '', '', '2019-06-13 05:08:17'),
(51, 24, 'Naveengowda@gmail.com', 0x3139322e3136382e3232332e313232, '', '', '2019-06-13 05:08:39'),
(52, 24, 'Naveengowda@gmail.com', 0x3139322e3136382e3232332e313232, '', '', '2019-06-13 05:14:32'),
(53, 25, 'anusha@gmail.com', 0x3139322e3136382e3232322e313936, '', '', '2019-06-13 07:22:42'),
(54, 26, 'vinaytili100@gmail.com', 0x3139322e3136382e34332e323038, '', '', '2019-06-20 16:14:08'),
(55, 27, 'ramesh@gmail.com', 0x3a3a31, '', '', '2019-06-21 03:57:37'),
(56, 28, 'sanju12@gmail.com', 0x3a3a31, '', '', '2019-06-24 06:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `stdr`
--

CREATE TABLE `stdr` (
  `id` int(11) NOT NULL,
  `usn` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stdreg`
--

CREATE TABLE `stdreg` (
  `id` int(11) NOT NULL,
  `usn` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdreg`
--

INSERT INTO `stdreg` (`id`, `usn`, `name`, `sem`, `contact`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(16, '1DA17MCA04', 'Naveen.A.P', 'Fourth', 9164722741, 'naveengowda607@gmail.com', '12345', '2019-06-04 17:31:37', '', '10-06-2019 02:20:00'),
(17, '1DA18MCA95', 'Sushma.R', 'Fourth', 9538919405, 'sushma@gmail.com', '1234', '2019-06-04 17:33:45', '', ''),
(18, '1DA17MCA53', 'Anusha.T.S', 'Fourth', 9874563210, 'anushats@gmail.com', '123', '2019-06-04 17:36:00', '', ''),
(19, '1DA17MCA06', 'Shamanth', 'Fourth', 9164722700, 'shamanth@gmail.com', '123', '2019-06-06 14:23:04', '', ''),
(20, '1DA17MCA05', 'Preethi.G.L', 'Fourth', 9638527410, 'pree@gmail.com', '123', '2019-06-07 12:10:45', '', ''),
(21, '1DA17MCA08', 'sanjay', 'Fourth', 9632587410, 'sanju@gmail.com', '123', '2019-06-07 12:19:36', '', ''),
(22, '1da18mca67', 'abc', 'Fourth', 741085263, 'abc@gmail.com', '123', '2019-06-10 08:22:45', '', ''),
(23, '1DA18MCA79', 'Raghotham M H', 'Fourth', 8105597623, 'mulbagulkar.ragotham@gmail.com', '8105', '2019-06-10 08:42:23', '', ''),
(24, '1DA18MCA04', 'Naveen', 'Fourth', 9164722741, 'Naveengowda@gmail.com', '123', '2019-06-13 05:07:52', '', ''),
(25, '1da18mca54', 'Anusha', 'Fourth', 9538919405, 'anusha@gmail.com', 'anusha', '2019-06-13 07:22:21', '', ''),
(26, '1da18mca99', 'Vinay', 'Fourth', 9035569758, 'vinaytili100@gmail.com', '123', '2019-06-20 16:13:34', '', ''),
(27, '1da17mca97', 'ramesh', 'Fourth', 9164722741, 'ramesh@gmail.com', '123', '2019-06-21 03:57:23', '', ''),
(28, '1da18mca55', 'sanjana', 'Fourth', 9856741230, 'sanju12@gmail.com', '1234', '2019-06-24 06:50:48', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub1`
--

CREATE TABLE `sub1` (
  `subcode` varchar(10) NOT NULL,
  `subname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub1`
--

INSERT INTO `sub1` (`subcode`, `subname`) VALUES
('MCA441', 'Data Warehousing & Mining');

-- --------------------------------------------------------

--
-- Table structure for table `sub2`
--

CREATE TABLE `sub2` (
  `subcode` varchar(10) NOT NULL,
  `subname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub2`
--

INSERT INTO `sub2` (`subcode`, `subname`) VALUES
('MCA455', 'E-commerce and MIS'),
('MCA456', 'Software Project Management');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdfill`
--
ALTER TABLE `stdfill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdlog`
--
ALTER TABLE `stdlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdr`
--
ALTER TABLE `stdr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdreg`
--
ALTER TABLE `stdreg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usn` (`usn`),
  ADD KEY `email` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stdfill`
--
ALTER TABLE `stdfill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `stdlog`
--
ALTER TABLE `stdlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `stdr`
--
ALTER TABLE `stdr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stdreg`
--
ALTER TABLE `stdreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
