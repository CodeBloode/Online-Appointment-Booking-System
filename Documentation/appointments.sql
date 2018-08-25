-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2018 at 09:54 AM
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
`adminID` int(3) NOT NULL,
  `mail` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userName`, `password`, `adminID`, `mail`) VALUES
('DEAN', '$2y$10$y4DAJ0BUQ.bsOcz.dH6zROKOhzKWf1XhamWkuzE0HWa7X9C0/jQ/m', 1, ''),
('Alex', '$2y$10$jh3C0w6OF4Dxat2BHi07pOHG7H1AdG3Q9ZpZqjMTNDQE2qPSVDd1W', 2, 'alexnyabuto8@gmail.com');

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
(4, 'Alex Nyabuto', 'counsellor 7', '711295523', 'alexnyabuto8@gmail.com', '$2y$10$CmWUowk78dJSbVoTgrOx8.UqVXU0yAknF.6ULlgF42VypxX/NULDK', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
`Id` int(10) unsigned NOT NULL,
  `awayDate` date DEFAULT NULL,
  `awayTime` time DEFAULT NULL,
  `awayPeriod` int(3) DEFAULT NULL,
  `nextTimeAvailable` time DEFAULT NULL,
  `nextAvailableDate` date DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `approval` varchar(3) DEFAULT NULL,
  `counsNo` varchar(12) DEFAULT NULL,
  `counsName` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Id`, `awayDate`, `awayTime`, `awayPeriod`, `nextTimeAvailable`, `nextAvailableDate`, `reason`, `approval`, `counsNo`, `counsName`) VALUES
(1, '2018-08-16', '15:00:00', 146, '16:00:00', '2018-08-22', ' Sick', 'No', 'counsellor 2', 'Counsellor Cetric'),
(2, '2018-08-30', '09:00:00', 291, '11:00:00', '2018-09-11', ' Conference', 'No', 'counsellor 2', 'Counsellor Cetric'),
(3, '2018-08-31', '09:00:00', 147, '11:00:00', '2018-09-06', 'conference', 'No', 'counsellor 2', 'Counsellor Cetric'),
(4, '2018-09-07', '03:00:00', 74, '04:00:00', '2018-09-10', ' meeting', 'No', 'counsellor 2', 'Counsellor Cetric'),
(5, '2018-09-07', '09:00:00', 5, '13:00:00', '2018-09-07', ' Meeting', 'No', 'counsellor 2', 'Counsellor Cetric'),
(6, '2018-08-17', '11:00:00', 2, '12:00:00', '2018-08-17', ' hello', 'No', 'counsellor 2', 'Counsellor Cetric'),
(8, '2018-08-16', '08:00:00', 27, '10:00:00', '2018-08-17', ' Meeting', 'No', 'counsellor 7', 'Alex Nyabuto'),
(9, '2018-08-16', '08:00:00', 27, '10:00:00', '2018-08-17', ' Meeting', 'No', 'counsellor 7', 'Alex Nyabuto'),
(10, '2018-08-16', '08:00:00', 27, '10:00:00', '2018-08-17', ' Meeting', 'No', 'counsellor 7', 'Alex Nyabuto'),
(11, '2018-08-16', '08:00:00', 27, '10:00:00', '2018-08-17', ' Meeting', 'No', 'counsellor 7', 'Alex Nyabuto'),
(12, '2018-08-16', '09:00:00', 27, '11:00:00', '2018-08-17', ' Meeting', 'No', 'counsellor 7', 'Alex Nyabuto'),
(13, '2018-08-16', '09:00:00', 27, '11:00:00', '2018-08-17', ' Meeting', 'No', 'counsellor 7', 'Alex Nyabuto'),
(14, '2018-08-16', '08:00:00', 2, '09:00:00', '2018-08-16', ' mfsdgfhyuio', 'No', 'counsellor 7', 'Alex Nyabuto'),
(22, '2018-08-23', '14:00:00', 2, '15:00:00', '2018-08-23', ' esrdtfyuhioiuhg', 'No', 'counsellor 7', 'Alex Nyabuto'),
(23, '2018-08-23', '14:00:00', 2, '15:00:00', '2018-08-23', ' esrdtfyuhioiuhg', 'No', 'counsellor 7', 'Alex Nyabuto'),
(24, '2018-08-23', '09:00:00', 3, '11:00:00', '2018-08-23', ' meeting', 'No', 'counsellor 7', 'Alex Nyabuto'),
(25, '2018-08-27', '08:00:00', 4, '11:00:00', '2018-08-27', ' sdfghjkljhg', 'Yes', 'counsellor 7', 'Alex Nyabuto'),
(26, '2018-08-28', '08:00:00', 2, '09:00:00', '2018-08-28', ' meeting', 'No', '', ''),
(27, '2018-08-28', '08:00:00', 2, '09:00:00', '2018-08-28', ' meeting', 'No', '', ''),
(28, '2018-08-29', '14:00:00', 3, '16:00:00', '2018-08-29', ' meeet', 'No', 'counsellor 7', 'Alex Nyabuto'),
(29, '2018-08-29', '14:00:00', 3, '16:00:00', '2018-08-29', ' meeet', 'No', 'counsellor 7', 'Alex Nyabuto'),
(30, '2018-08-27', '15:00:00', 4, '18:00:00', '2018-08-27', ' setdfghjkjhgfcdxfvh', 'No', 'counsellor 7', 'Alex Nyabuto'),
(31, '2018-08-27', '15:00:00', 4, '18:00:00', '2018-08-27', ' setdfghjkjhgfcdxfvh', 'No', 'counsellor 7', 'Alex Nyabuto'),
(32, '2018-08-27', '15:00:00', 4, '18:00:00', '2018-08-27', ' setdfghjkjhgfcdxfvh', 'No', 'counsellor 7', 'Alex Nyabuto'),
(33, '2018-08-27', '15:00:00', 4, '18:00:00', '2018-08-27', ' setdfghjkjhgfcdxfvh', 'No', 'counsellor 7', 'Alex Nyabuto'),
(34, '2018-08-27', '15:00:00', 4, '18:00:00', '2018-08-27', ' setdfghjkjhgfcdxfvh', 'No', 'counsellor 7', 'Alex Nyabuto'),
(35, '2018-08-27', '15:00:00', 4, '18:00:00', '2018-08-27', ' setdfghjkjhgfcdxfvh', 'No', 'counsellor 7', 'Alex Nyabuto'),
(36, '2018-08-27', '15:00:00', 4, '18:00:00', '2018-08-27', ' setdfghjkjhgfcdxfvh', 'No', 'counsellor 7', 'Alex Nyabuto'),
(37, '2018-08-27', '15:00:00', 4, '18:00:00', '2018-08-27', ' setdfghjkjhgfcdxfvh', 'No', 'counsellor 7', 'Alex Nyabuto'),
(38, '2018-08-27', '15:00:00', 4, '18:00:00', '2018-08-27', ' setdfghjkjhgfcdxfvh', 'No', 'counsellor 7', 'Alex Nyabuto'),
(39, '2018-08-27', '15:00:00', 4, '18:00:00', '2018-08-27', ' setdfghjkjhgfcdxfvh', 'No', 'counsellor 7', 'Alex Nyabuto');

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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

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
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-15', '11:00:00', '11:45:00', 10),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-15', '15:00:00', '15:45:00', 12),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-30', '10:00:00', '10:45:00', 13),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-29', '09:00:00', '09:45:00', 14),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-15', '14:00:00', '14:45:00', 15),
('', '', 'counsellor 2', '2018-08-22', '13:00:00', '13:45:00', 16),
('', '', 'counsellor 7', '2018-08-17', '11:00:00', '11:45:00', 17),
('', 'Alex Nyabuto', 'counsellor 2', '2018-08-17', '11:00:00', '11:45:00', 18),
('', 'Alex Nyabuto', 'counsellor 2', '2018-08-20', '09:00:00', '09:45:00', 19),
('', 'Alex Nyabuto', 'counsellor 2', '2018-08-22', '10:00:00', '10:45:00', 20),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-21', '08:00:00', '08:45:00', 21),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 7', '2018-08-23', '10:00:00', '10:45:00', 22),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-23', '15:00:00', '15:45:00', 23),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-24', '09:00:00', '09:45:00', 24),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-24', '13:00:00', '13:45:00', 25),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-27', '08:00:00', '08:45:00', 26),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-27', '10:00:00', '10:45:00', 27),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-27', '13:00:00', '13:45:00', 28),
('S13/09721/15', 'Alex Nyabuto', 'counsellor 2', '2018-08-27', '15:00:00', '15:45:00', 29);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`userID` int(11) unsigned NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('N','Y') NOT NULL DEFAULT 'N',
  `tokencode` varchar(100) NOT NULL,
  `regNo` varchar(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `phoneNo` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`userID`, `userName`, `userEmail`, `userPass`, `userStatus`, `tokencode`, `regNo`, `name`, `phoneNo`) VALUES
(29, 'ElvisIan2', 'elvismutende@gmail.com', '$2y$10$MdIYBi9E2/BvRovV2ZQufeQttR9uKau4oQK9XS8BK9UMhxhvuWACm', 'Y', '8948ade970229ecf45e98de91b7b6352', 'SP13/00820/15', 'Elvis Mutende', '0717796059'),
(32, 'Fredrick', 'fraaponyo94@gmail.com', '$2y$10$DPXePWi08gm4RWtWd8ZquOYDR4o4AyEgx/YwwvC3MnjUofxe7C.Tm', 'Y', '6bc7e324cdb495255dc9ffeda76e6388', 'S13/09917/15', 'Fredrick Aponyo Okutoyi', '0712212210'),
(38, 'James', 'smartshinealex@gmail.com', '$2y$10$BeBSjGmdZVt9vp0Ww/ylOOulYvC6yY9Zx8V2.M3IDe91ChDxG0ERS', 'N', 'b5a02b7687b5a6c7cb077e4ef234e8f4', 'S11/09720/11', 'James Mutua', '0715444221'),
(52, 'Alex', 'alexnyabuto8@gmail.com', '$2y$10$4qJC9Wb0L7DdKx9akammNOcPEH5eRRsGMFPNwwdB.aFjv0NjGyZd2', 'Y', 'dce71b980ae4574fda17cbcd191c7639', 'S13/09721/15', 'Alex Nyabuto', '0711295523');

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
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
 ADD PRIMARY KEY (`ssnID`), ADD KEY `regNo` (`regNo`);

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
MODIFY `adminID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `counsellor`
--
ALTER TABLE `counsellor`
MODIFY `ID` tinyint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
MODIFY `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
MODIFY `ssnID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `userID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
