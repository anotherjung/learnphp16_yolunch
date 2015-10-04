CREATE DATABASE  IF NOT EXISTS `hackathon` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hackathon`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: hackathon
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leavetime` datetime NOT NULL,
  `restaurant_name` varchar(45) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `non_driver_count` int(11) DEFAULT NULL,
  `driver_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_groups_restaurants1_idx` (`restaurant_id`),
  CONSTRAINT `fk_groups_restaurants1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'0000-00-00 00:00:00','0',1,2,NULL),(8,'2015-07-03 11:11:00','0',1,1,0),(9,'2015-07-03 00:00:00','Five Guys Burgers ',21,6,0),(10,'0000-00-00 00:00:00','Chipotle',23,1,0),(11,'2015-07-03 00:00:00','La Victoria or LaVics',13,2,0),(12,'2015-07-03 00:00:00','Jung',24,3,0),(13,'2015-07-03 00:00:00','Five Guys Burgers ',21,2,0),(14,'2015-07-03 00:00:00','Jung',24,2,0),(15,'2015-07-03 00:00:00','Sizzling Stone',25,2,0),(16,'2015-07-03 00:00:00','Tacos El Rancherito',26,1,0),(17,'2015-07-16 00:00:00','store',27,2,0),(18,'2015-10-02 05:30:00','Ono Hawaiian BBQ',33,1,0),(19,'2015-10-03 05:30:00','Fish\'s Wild',35,1,0),(20,'2015-10-03 00:00:00','Fish\'s Wild',35,1,0);
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-04 10:24:33
