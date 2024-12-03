-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 06:57 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminmkuu`
--

CREATE TABLE `adminmkuu` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminmkuu`
--

INSERT INTO `adminmkuu` (`id`, `first_name`, `last_name`, `username`, `email`, `passwd`) VALUES
(1, 'neema', 'kisanga', 'neema', 'kisn88@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first` varchar(30) NOT NULL,
  `last` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first`, `last`, `username`, `email`, `passwd`) VALUES
(12, 'rosemary', 'issa', 'neemas', 'halima@mwanga.com', '12'),
(13, 'othman', 'issa', 'ochu', 'ochu@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `atachments`
--

CREATE TABLE `atachments` (
  `attachid` int(255) NOT NULL,
  `mtotoid` int(255) NOT NULL,
  `typeofattach` varchar(50) NOT NULL,
  `hospital_note` varchar(255) NOT NULL,
  `baruamtendaji` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atachments`
--

INSERT INTO `atachments` (`attachid`, `mtotoid`, `typeofattach`, `hospital_note`, `baruamtendaji`, `passport`, `other`) VALUES
(1, 3, '-', '-', '-', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `babatable`
--

CREATE TABLE `babatable` (
  `babaid` int(255) NOT NULL,
  `mtotoid` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `region` varchar(50) NOT NULL,
  `district` varchar(100) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `job` varchar(100) NOT NULL,
  `idno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `babatable`
--

INSERT INTO `babatable` (`babaid`, `mtotoid`, `fname`, `sname`, `lname`, `othername`, `nation`, `dateofbirth`, `region`, `district`, `ward`, `street`, `phone`, `job`, `idno`) VALUES
(1, 1, 'elisha', 'osati', 'haji', 'rama', 'tanzania', '1987-02-01', 'dar es salam', 'kinondoni', 'upanga', 'dit', '0778664333', 'daktari', 2012),
(2, 2, 'benson', 'henry', 'kisanga', 'matena', 'tanzania', '1987-02-04', 'kilimanjaro', 'moshi', 'mbokomu', 'mwika', '0778664333', 'mkulima', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `mamatable`
--

CREATE TABLE `mamatable` (
  `mamaid` int(255) NOT NULL,
  `mtotoid` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `region` varchar(50) NOT NULL,
  `district` varchar(100) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `job` varchar(100) NOT NULL,
  `idno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mamatable`
--

INSERT INTO `mamatable` (`mamaid`, `mtotoid`, `fname`, `sname`, `lname`, `othername`, `nation`, `dateofbirth`, `region`, `district`, `ward`, `street`, `phone`, `job`, `idno`) VALUES
(1, 1, 'happy', 'lernard', 'henry', 'mosha', 'tanzania', '1990-02-05', 'tabora', 'moshi', 'tarime', 'kisutu', '0677565656', 'mkulima', 2012),
(2, 2, 'dorine', 'peter', 'kimambo', 'makesi', 'tanzania', '1988-04-03', 'kilimanjaro', 'moshi', 'tarime', 'kisutu', '0677565656', 'mfugaji', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `mtototable`
--

CREATE TABLE `mtototable` (
  `mtotoid` int(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `date_birth` date NOT NULL,
  `placeofbirth` varchar(30) NOT NULL,
  `nameofplace` varchar(255) NOT NULL,
  `regionofbirth` varchar(50) NOT NULL,
  `districtofbirth` varchar(50) NOT NULL,
  `wardofbirth` varchar(100) NOT NULL,
  `streetofbirth` varchar(100) NOT NULL,
  `region` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `userid` int(255) NOT NULL,
  `age` varchar(30) NOT NULL,
  `status` int(100) NOT NULL,
  `statusmama` int(100) NOT NULL,
  `statusbaba` int(100) NOT NULL,
  `statustaarifa` int(100) NOT NULL,
  `statushati` int(100) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtototable`
--

INSERT INTO `mtototable` (`mtotoid`, `fname`, `sname`, `lname`, `othername`, `gender`, `date_birth`, `placeofbirth`, `nameofplace`, `regionofbirth`, `districtofbirth`, `wardofbirth`, `streetofbirth`, `region`, `district`, `ward`, `street`, `phone`, `userid`, `age`, `status`, `statusmama`, `statusbaba`, `statustaarifa`, `statushati`, `comment`) VALUES
(1, 'Rose Mary', 'Habib', 'Othman', 'juma', 'KIKE', '2000-02-01', 'KITUO CHA TIBA', 'mawenzi', 'mara', 'simiyu', 'kisutu', 'pwani', 'tabora', 'moshi', 'bariadi', 'mtoni', 'NULL', 12, '90day', 1, 3, 5, 7, 9, '-'),
(2, 'neema', 'benson', 'kisanga', 'henry', 'KIKE', '2000-02-04', 'NYUMBANI', 'mwika', 'kilimanjaro', 'moshi', 'mbokomu', 'tema', 'mwanza', 'kibo', 'kisangu', 'mahina', 'NULL', 12, '90day', 0, 0, 0, 0, 0, 'taarifa za mama hazipo sahihi badili mkoa aliozaliwa na namba ya utambulisho\r\nahsante.'),
(3, 'amin', 'haji', 'john', 'frank', 'KIKE', '2018-02-01', 'NYUMBANI', 'kisarawe', 'dar es salam', 'kisarawe', 'dit', 'upanga', 'dar es salam', 'kisarawe', 'upanga', 'dit', 'NULL', 12, '90day', 0, 0, 0, 0, 0, 'mama');

-- --------------------------------------------------------

--
-- Table structure for table `taarifatable`
--

CREATE TABLE `taarifatable` (
  `taarifaid` int(255) NOT NULL,
  `mtotoid` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taarifatable`
--

INSERT INTO `taarifatable` (`taarifaid`, `mtotoid`, `fname`, `sname`, `relationship`, `address`, `phone`, `email`, `idno`) VALUES
(1, 1, 'neema', 'kisanga', '', 'moshi slp 12', '0788998877', 'kisangan88@gmail.com', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwd` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `first`, `last`, `email`, `passwd`) VALUES
(1, 'neema', 'kisanga', 'kisangan88@gmail.com', '123'),
(12, 'othman', 'issa', 'ochu@gmail.com', '12345'),
(13, 'neema', 'kisa', 'halima@mwanga.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminmkuu`
--
ALTER TABLE `adminmkuu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atachments`
--
ALTER TABLE `atachments`
  ADD PRIMARY KEY (`attachid`);

--
-- Indexes for table `babatable`
--
ALTER TABLE `babatable`
  ADD PRIMARY KEY (`babaid`);

--
-- Indexes for table `mamatable`
--
ALTER TABLE `mamatable`
  ADD PRIMARY KEY (`mamaid`);

--
-- Indexes for table `mtototable`
--
ALTER TABLE `mtototable`
  ADD PRIMARY KEY (`mtotoid`);

--
-- Indexes for table `taarifatable`
--
ALTER TABLE `taarifatable`
  ADD PRIMARY KEY (`taarifaid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminmkuu`
--
ALTER TABLE `adminmkuu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `atachments`
--
ALTER TABLE `atachments`
  MODIFY `attachid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `babatable`
--
ALTER TABLE `babatable`
  MODIFY `babaid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mamatable`
--
ALTER TABLE `mamatable`
  MODIFY `mamaid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mtototable`
--
ALTER TABLE `mtototable`
  MODIFY `mtotoid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `taarifatable`
--
ALTER TABLE `taarifatable`
  MODIFY `taarifaid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
