-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 03:13 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointments`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userName` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `adminID` int(3) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userName`, `password`, `adminID`, `email`) VALUES
('elvis', '$2y$10$1dXu3Ow43Zw8UwOp26y/o.ssBYUumk063/qikupBVUZWcFkUWZsi2', 3, 'elvismutende@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `counsellor`
--

CREATE TABLE `counsellor` (
  `counsName` varchar(30) NOT NULL,
  `counsNo` varchar(12) NOT NULL,
  `phoneNo` decimal(10,0) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `token` varchar(60) NOT NULL,
  `tokenexpire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellor`
--

INSERT INTO `counsellor` (`counsName`, `counsNo`, `phoneNo`, `email`, `password`, `token`, `tokenexpire`) VALUES
('Justus Litunda', 'counsellor 1', '713583304', 'litundaz@gmail.com', '$2y$10$hr79d2xTCy8XnAiJ67QINuJNcMlWLTTpm5ni1mailz9F4VFAx.CVK', '', '0000-00-00 00:00:00'),
('Peter Marks', 'counsellor 3', '123456789', 'petermakss42@gmail.com', '$2y$10$Lv0GBvSLptBgtQ/KFUnVkeG3RXbWVPLfQZf.ZrvBbbiwjxPiqJwL6', '', '0000-00-00 00:00:00'),
('Elvis Mutende', 'counsellor 2', '717796059', 'elvismutende@gmail.com', '$2y$10$ya.WMUm.wf020dKCwc5nq.uwmR84U4Ay1Z41tj1mEnpke1pcRIm02', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `awayDate` date DEFAULT NULL,
  `awayTime` time DEFAULT NULL,
  `awayPeriod` int(3) DEFAULT NULL,
  `nextTimeAvailable` time DEFAULT NULL,
  `nextAvailableDate` date DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `approval` varchar(3) DEFAULT NULL,
  `counsNo` varchar(12) DEFAULT NULL,
  `counsName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`awayDate`, `awayTime`, `awayPeriod`, `nextTimeAvailable`, `nextAvailableDate`, `reason`, `approval`, `counsNo`, `counsName`) VALUES
('2018-09-03', '09:00:00', 171, '11:00:00', '2018-09-10', ' Sick', 'Yes', 'counsellor 2', 'Elvis Mutende');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `regNo` varchar(15) NOT NULL,
  `studentNm` varchar(20) DEFAULT NULL,
  `counsNo` varchar(12) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `startTime` time DEFAULT NULL,
  `endTime` time DEFAULT NULL,
  `ssnID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`regNo`, `studentNm`, `counsNo`, `date`, `startTime`, `endTime`, `ssnID`) VALUES
('SP13/00820/15', 'Elvis Mutende', 'counsellor 1', '2018-09-07', '08:00:00', '08:45:00', 14),
('SP13/00820/15', 'Elvis Mutende', 'counsellor 2', '2018-09-10', '13:00:00', '13:45:00', 15),
('SP13/00820/15', 'Elvis Mutende', 'counsellor 2', '2018-09-10', '15:00:00', '15:45:00', 16);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `userID` int(11) UNSIGNED NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `tokencode` varchar(100) NOT NULL,
  `regNo` varchar(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `phoneNo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`userID`, `userEmail`, `userPass`, `tokencode`, `regNo`, `name`, `phoneNo`) VALUES
(56, 'elvismutende@gmail.com', '$2y$10$GOjGq50dh9mtmLtg.VO3kOFmKKTQwksZ2SpMlGBNKjx7rASnY6Zyy', '730212d3023fc0d932db4277ac239e9e', 'SP13/00820/15', 'Elvis Mutende', '0717796059');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`ssnID`),
  ADD KEY `regNo` (`regNo`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `ssnID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `userID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
