-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 08:11 AM
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
-- Table structure for table `counsellors`
--

CREATE TABLE IF NOT EXISTS `counsellors` (
`co_id` int(3) NOT NULL,
  `usrnm` varchar(30) NOT NULL,
  `pwd` varchar(256) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(70) NOT NULL,
  `initials` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellors`
--

INSERT INTO `counsellors` (`co_id`, `usrnm`, `pwd`, `phone`, `email`, `initials`) VALUES
(1, 'counsellor1', '$2y$10$b3Xhm5xEXLMnVa/5jw3X6u/rWwo1C.FMg8uBym.LRb0wzb4vZh2jC', '11', 'c1@gmail.com', NULL),
(2, 'counsellor2', '$2y$10$b3Xhm5xEXLMnVa/5jw3X6u/rWwo1C.FMg8uBym.LRb0wzb4vZh2jC$2y$10$b3Xhm5xEXLMnVa/5jw3X6u/rWwo1C.FMg8uBym.LRb0wzb4vZh2jC', '61', 'c2@gmail.com', NULL),
(3, 'counsellor3', '$2y$10$b3Xhm5xEXLMnVa/5jw3X6u/rWwo1C.FMg8uBym.LRb0wzb4vZh2jC', '22', 'c3@gmail.com', NULL),
(4, 'counsellor4', '$2y$10$b3Xhm5xEXLMnVa/5jw3X6u/rWwo1C.FMg8uBym.LRb0wzb4vZh2jC', '33', 'c4@gmail.com', NULL),
(5, 'counsellor5', '$2y$10$b3Xhm5xEXLMnVa/5jw3X6u/rWwo1C.FMg8uBym.LRb0wzb4vZh2jC', '44', 'c5@gmail.com', NULL),
(6, 'counsellor6', '$2y$10$b3Xhm5xEXLMnVa/5jw3X6u/rWwo1C.FMg8uBym.LRb0wzb4vZh2jC', '49', 'c6@gmail.com', NULL),
(7, 'counsellor7', '$2y$10$b3Xhm5xEXLMnVa/5jw3X6u/rWwo1C.FMg8uBym.LRb0wzb4vZh2jC', '55', 'c7@gmail.com', NULL),
(8, 'counsellor8', '$2y$10$b3Xhm5xEXLMnVa/5jw3X6u/rWwo1C.FMg8uBym.LRb0wzb4vZh2jC', '88', 'c8@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counsellors`
--
ALTER TABLE `counsellors`
 ADD PRIMARY KEY (`co_id`), ADD UNIQUE KEY `phone` (`phone`), ADD UNIQUE KEY `usrnm` (`usrnm`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counsellors`
--
ALTER TABLE `counsellors`
MODIFY `co_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
