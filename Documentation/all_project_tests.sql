-- MySQL dump 10.13  Distrib 5.7.18, for Win64 (x86_64)
--
-- Host: localhost    Database: all_project_tests
-- ------------------------------------------------------
-- Server version	5.7.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nm` varchar(10) DEFAULT NULL,
  `user_pass` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'Elvis','elvisIsMyPassword');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `ssnid` int(10) NOT NULL AUTO_INCREMENT,
  `studentReg` varchar(15) NOT NULL,
  `names` varchar(60) NOT NULL,
  `counsellor` varchar(13) NOT NULL,
  `date` date NOT NULL,
  `st_time` time NOT NULL,
  `en_time` time NOT NULL,
  PRIMARY KEY (`ssnid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (1,'SP13/00820/15','Elvis Mutende','counselLor 1','2018-07-03','16:45:00','17:30:00'),(2,'SP13/00820/15','Elvis Mutende','counsellor 2','2018-07-04','16:45:00','17:30:00'),(3,'SP13/00820/15','Elvis Mutende','counselLor 1','2018-07-04','16:40:00','17:25:00');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `regno` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phoneNo` varchar(12) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  PRIMARY KEY (`regno`),
  UNIQUE KEY `phoneNo` (`phoneNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES ('SP13/00820/15','Elvis Mutende','elvismutende@gmail.com','0717796059','$2y$10$NUdbxqib1FdHtcppc.jwn.QaLcGsFobgPBNDYBkN2BSOVpZgXE1BS');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nm` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (12,'elvis','elvismutende@gmail.com','1234567'),(13,'james','james@yahoo.com','james1234'),(14,'joh','jo@gmail.com',''),(15,'elvo','elvo@php.com','$2y$10$DsK/uJ8AgUJVsgKezJL8Yu5qJpx50QO3wMEhNrOBI9S9P9GREowSq'),(16,'elvis','mutende@gmail.com','$2y$10$Xb1nShqg93ofRqDjqQmsYeWANf74YF4p.67USZVMdXfJ3s0z19L/i'),(17,'testing','testing@testing','$2y$10$LNtJZ2tmyk80U9/FXwJrfuIVyMFm8CzaVkiypxFGR09ceTUSQCaVS'),(18,'123','1234567@45','$2y$10$IYChv.Yq5v.1Jf5G8hrteOHS3lCD7jikXKdhTwUvDCAyPXmTv.fcC'),(19,'jano','jano@gmail.com','$2y$10$rekRoaiaTD5y49ko6Co5/OtaNBqnM2j25VlHIJOHI.hDjHrGsThFi'),(20,'elvis1','elvis1@gmail.com','$2y$10$YogU8eTH3pZi2Rw/eN7mtOiQ15K1flBPSBypgiEjOWP7mcMGIFfAi');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-05 13:59:43
