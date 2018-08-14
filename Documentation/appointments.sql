-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 04:52 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userName`, `password`, `adminID`) VALUES
('DEAN', '$2y$10$y4DAJ0BUQ.bsOcz.dH6zROKOhzKWf1XhamWkuzE0HWa7X9C0/jQ/m', 1),
('Alex', '$2y$10$jh3C0w6OF4Dxat2BHi07pOHG7H1AdG3Q9ZpZqjMTNDQE2qPSVDd1W', 2);

-- --------------------------------------------------------

--
-- Table structure for table `counsellor`
--

CREATE TABLE IF NOT EXISTS `counsellor` (
`ID` tinyint(10) NOT NULL,
  `counsName` varchar(30) NOT NULL,
  `counsNo` varchar(12) NOT NULL,
  `phoneNo` decimal(10,0) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `token` varchar(60) NOT NULL,
  `tokenexpire` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellor`
--

INSERT INTO `counsellor` (`ID`, `counsName`, `counsNo`, `phoneNo`, `email`, `password`, `token`, `tokenexpire`) VALUES
(1, 'Counsellor Elvis', 'counsellor 1', '717796059', 'elvismutende@gmail.com', '$2y$10$EzUhBhbMbVKo1C2iRqI5xOKgLPdan.vRKVW7vHSt5L9trwfp9WGG6', 'nfet93sgi05y', '2018-08-12 00:22:35'),
(2, 'counsellor 4', 'counsellor 2', '704145832', 'alexnyabuto8@gmail.com', '$2y$10$DQ/AQiaw8LByCQ3dlaJFCuGpJqYpS3aC.QIN24XVVdCjCaVuzxpoC', 'eb197ghiafsw', '2018-08-14 07:18:26'),
(3, 'josephine machage', 'counsellor 8', '702646220', 'josie@gmail.com', '$2y$10$De0Uo/BMU54/YqpIe0uDQ.qcc.wwmPa2jCyjPhVORaanfS1aFOwFK', '', '0000-00-00 00:00:00'),
(4, 'Alex Nyabuto', 'counsellor 7', '711295523', 'alexnyabuto82gmail.com', '$2y$10$CmWUowk78dJSbVoTgrOx8.UqVXU0yAknF.6ULlgF42VypxX/NULDK', '', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`awayDate`, `awayTime`, `awayPeriod`, `nextTimeAvailable`, `nextAvailableDate`, `reason`, `approval`, `counsNo`, `counsName`) VALUES
('2018-08-16', '15:00:00', 146, '16:00:00', '2018-08-22', ' Sick', 'No', 'counsellor 2', 'Counsellor Cetric'),
('2018-08-30', '09:00:00', 291, '11:00:00', '2018-09-11', ' Conference', 'No', 'counsellor 2', 'Counsellor Cetric'),
('2018-08-31', '09:00:00', 147, '11:00:00', '2018-09-06', 'conference', 'No', 'counsellor 2', 'Counsellor Cetric'),
('2018-09-07', '03:00:00', 74, '04:00:00', '2018-09-10', ' meeting', 'No', 'counsellor 2', 'Counsellor Cetric'),
('2018-09-07', '09:00:00', 5, '13:00:00', '2018-09-07', ' Meeting', 'No', 'counsellor 2', 'Counsellor Cetric'),
('2018-08-17', '11:00:00', 2, '12:00:00', '2018-08-17', ' hello', 'No', 'counsellor 2', 'Counsellor Cetric'),
('2018-08-15', '10:00:00', 30, '15:00:00', '2018-08-16', ' meeting.', 'Yes', 'counsellor 7', 'Alex Nyabuto');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`regNo`, `studentNm`, `counsNo`, `date`, `startTime`, `endTime`, `ssnID`) VALUES
('SP13/00820/15', 'Elvis Mutende', 'counsellor 1', '2018-08-08', '16:00:00', '16:45:00', 2),
('SP13/00820/15', 'Elvis Mutende', 'counsellor 1', '2018-08-10', '11:20:00', '12:05:00', 3),
('S13/09722/15', 'peter makori', 'counsellor 1', '2018-08-16', '09:00:00', '09:45:00', 4),
('SP13/00820/15', 'Elvis Mutende', 'counsellor 2', '2018-08-22', '11:40:00', '12:25:00', 5),
('s13/10824/15', 'jose', 'counsellor 2', '2018-08-10', '10:06:00', '10:51:00', 6),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-16', '14:00:00', '14:45:00', 7),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-22', '08:00:00', '08:45:00', 8),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-29', '09:00:00', '09:45:00', 9),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-15', '11:00:00', '11:45:00', 10),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-15', '14:00:00', '14:45:00', 11),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-15', '15:00:00', '15:45:00', 12);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`userID`, `regNo`, `name`, `password`, `phoneNo`, `email`, `tokenCode`) VALUES
(3, 's13/10824/15', 'jose', '$2y$10$XtaiztG0qMJL.TnbfeFReuZb8zHl1Yvk1SyitQh1B3cgug5SLv7d2', '0702646220', 'josie@gmail.com', 'd85c1f787f8db34f129cc6030760c240'),
(4, 'S13/09721/15', 'Alex Nyabuto', '$2y$10$eHPiTBCByZdp9Nz9lf14GelD0vz.Q3SbT2ugr/V1JcXW4eeN/CKTS', '0711295523', 'alexnyabuto8@gmail.com', 'afe76246e4691d6b5148373d1f514a63'),
(5, 'S13/09717/15', 'CETRIC OKOLA', '$2y$10$z8rao/n0aPxqm0y88kA.SuTwvX42EOGbwISDM5EhwIngEPpjQb6Lm', '0704145832', 'CETOKOLA2015@GMAIL.COM', '4de54d2fe7e35ce93a8e22fadc01c88f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `counsellor`
--
ALTER TABLE `counsellor`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `counsNo` (`counsNo`);

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
MODIFY `adminID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `counsellor`
--
ALTER TABLE `counsellor`
MODIFY `ID` tinyint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
MODIFY `ssnID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
