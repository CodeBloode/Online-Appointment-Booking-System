-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 11:20 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `appointments`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userName` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
`adminID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `counsellor`
--

CREATE TABLE IF NOT EXISTS `counsellor` (
  `counsName` varchar(30) NOT NULL,
  `counsNo` varchar(12) NOT NULL,
  `phoneNo` decimal(10,0) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
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

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `regNo` varchar(15) NOT NULL,
  `studentNm` varchar(20) DEFAULT NULL,
  `counsNo` varchar(12) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `startTime` time DEFAULT NULL,
  `endTime` time DEFAULT NULL,
`ssnID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`regNo`, `studentNm`, `counsNo`, `date`, `startTime`, `endTime`, `ssnID`) VALUES
('SP13/00820/15', 'Elvis Mutende', 'counsellor 2', '2018-07-20', '08:00:00', '08:45:00', 7),
('SP13/00820/15', 'Elvis Mutende', 'counsellor 2', '2018-07-26', '14:22:00', '15:07:00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`userID` int(11) NOT NULL,
  `regNo` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `phoneNo` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tokenCode` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`userID`, `regNo`, `name`, `password`, `phoneNo`, `email`, `tokenCode`) VALUES
(4, 'S13/09721/15', 'Alex Nyabuto', '$2y$10$GeSbNHC0eprc315FMh2FA.JYrWdlqb5w/OnKXtjP/uBUApYyw4OUi', '0711295523', 'alexnyabuto8@gmail.com', 'de4a6f4fbaa6971f4131895a98aafc70');

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
 ADD PRIMARY KEY (`ssnID`), ADD KEY `regNo` (`regNo`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`userID`), ADD UNIQUE KEY `regNo` (`regNo`), ADD UNIQUE KEY `phoneNo` (`phoneNo`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `adminID` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
MODIFY `ssnID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
