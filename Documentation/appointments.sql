-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2018 at 05:39 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

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
  `adminID` int(3) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userName`, `password`, `adminID`, `email`) VALUES
('elvismutende', '$2y$10$xRBYuteEazyAT.RofI1w7ewztZR0evheErkk1OT35ndk2In6R1.ke', 2, 'elvismutende@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `counsellor`
--

CREATE TABLE IF NOT EXISTS `counsellor` (
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
('cetric', 'counsellor 2', '0', 'cetokola@gmail.com', '$2y$10$0cEGo35ovJUBLD.ZtrKtv.U3/tk1PEJJs9eY.C97J4dr7HutPxR1i', '', '0000-00-00 00:00:00'),
('Peter Marks', 'counsellor 3', '123456789', 'petermakss42@gmail.com', '$2y$10$Lv0GBvSLptBgtQ/KFUnVkeG3RXbWVPLfQZf.ZrvBbbiwjxPiqJwL6', '', '0000-00-00 00:00:00');

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
('2018-08-29', '08:20:00', 246, '13:20:00', '2018-09-08', ' Music Festivals', 'Yes', 'counsellor 1', 'Justus Litunda'),
('2018-08-29', '08:20:00', 246, '13:20:00', '2018-09-08', ' Music Festivals', 'Yes', 'counsellor 1', 'Justus Litunda');

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
  `ssnID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ssnID`),
  KEY `regNo` (`regNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`regNo`, `studentNm`, `counsNo`, `date`, `startTime`, `endTime`, `ssnID`) VALUES
('S13/09717/15', 'cetric okola', 'counsellor 1', '2018-08-27', '08:00:00', '08:45:00', 7),
('S13/09717/15', 'cetric okola', 'counsellor 1', '2018-08-27', '15:00:00', '15:45:00', 8),
('S13/09717/15', 'cetric okola', 'counsellor 2', '2018-08-28', '10:00:00', '10:45:00', 9),
('S13/09717/15', 'cetric okola', 'counsellor 1', '2018-08-30', '14:01:00', '14:46:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `userID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('N','Y') NOT NULL DEFAULT 'N',
  `tokencode` varchar(100) NOT NULL,
  `regNo` varchar(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `phoneNo` varchar(12) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`userID`, `userName`, `userEmail`, `userPass`, `userStatus`, `tokencode`, `regNo`, `name`, `phoneNo`) VALUES
(53, 'CETRIC', 'cetokola2015@gmail.com', '$2y$10$1TCCJdXzRUFIo.am8dLNJeDMxiqKVh47lkLBEpvsh6nvlxUKr.Bhu', 'Y', '0d8a3214a0e3b17881e067c796c655bd', 'S13/09717/15', 'cetric okola', '0704145832'),
(54, 'Peter', 'petermakss42@gmail.com', '$2y$10$STyOBQYbnFfwWiUiHVqi0OA5lZ7.jb7/VjHfbZEbEuH/SxCcBdkQ2', 'N', '592a5cbd9619c66f3cf53c311fbe031f', 'S13/09722/15', 'Peter Makss', '0792313490');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
