-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 03:11 PM
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
('elvis', '$2y$10$pB50BwEKGe/f8HTsQx20hOwsXcLWWN3drt.kS7h/1FdEK4nqhmeWq', 3, 'elvismutende@gmail.com');

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
('Elvis Mutende', 'counsellor 2', '717796059', 'elvismutende@gmail.com', '$2y$10$r12LA4E1WCM8qWW0cRn4..5OBf56qCsKkoWxiaEnYlMyIcOZbIRIy', '', '0000-00-00 00:00:00');

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
('S13/09717/15', 'cetric okola', 'counsellor 1', '2018-08-30', '14:01:00', '14:46:00', 10),
('', '', 'counsellor 2', '2018-09-07', '09:00:00', '09:45:00', 11);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `userID` int(11) UNSIGNED NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('N','Y') NOT NULL DEFAULT 'N',
  `tokencode` varchar(100) NOT NULL,
  `regNo` varchar(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `phoneNo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`userID`, `userName`, `userEmail`, `userPass`, `userStatus`, `tokencode`, `regNo`, `name`, `phoneNo`) VALUES
(53, 'CETRIC', 'cetokola2015@gmail.com', '$2y$10$1TCCJdXzRUFIo.am8dLNJeDMxiqKVh47lkLBEpvsh6nvlxUKr.Bhu', 'Y', '0d8a3214a0e3b17881e067c796c655bd', 'S13/09717/15', 'cetric okola', '0704145832'),
(54, 'Peter', 'petermakss42@gmail.com', '$2y$10$STyOBQYbnFfwWiUiHVqi0OA5lZ7.jb7/VjHfbZEbEuH/SxCcBdkQ2', 'N', '592a5cbd9619c66f3cf53c311fbe031f', 'S13/09722/15', 'Peter Makss', '0792313490'),
(55, 'elvis', 'elvismutende@gmail.com', '$2y$10$04na7Za1fP5FMtSxgMaZae7fbv658eU9faBxxUv30k9/NRDmCtT0S', 'Y', 'a9c21f2ab0944d0a265dd142e518bcd9', 'SP13/00820/15', 'Elvis Mutende', '0717796059');

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
  MODIFY `ssnID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `userID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
