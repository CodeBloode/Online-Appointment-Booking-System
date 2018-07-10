-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 08:12 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `appointmentsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `session_status`
--

CREATE TABLE IF NOT EXISTS `session_status` (
`status_id` tinyint(2) unsigned NOT NULL,
  `description` varchar(18) NOT NULL DEFAULT 'UNKNOWN'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_status`
--

INSERT INTO `session_status` (`status_id`, `description`) VALUES
(1, 'APPROVED'),
(3, 'CANCELLED'),
(2, 'PENDING'),
(4, 'REJECTED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `session_status`
--
ALTER TABLE `session_status`
 ADD PRIMARY KEY (`status_id`), ADD UNIQUE KEY `state` (`description`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `session_status`
--
ALTER TABLE `session_status`
MODIFY `status_id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
