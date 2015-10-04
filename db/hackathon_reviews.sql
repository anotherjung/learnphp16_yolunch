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
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review` text NOT NULL,
  `created_at` datetime NOT NULL,
  `users_id` int(11) NOT NULL,
  `restaurants_id` int(11) NOT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reviews_users_idx` (`users_id`),
  KEY `fk_reviews_restaurants1_idx` (`restaurants_id`),
  CONSTRAINT `fk_reviews_restaurants1` FOREIGN KEY (`restaurants_id`) REFERENCES `restaurants` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_reviews_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,'`hi! `i love this place!','2015-07-03 16:17:42',9,19,'Alex abc'),(2,'I love this place','2015-07-03 16:23:06',4,25,'Steve abc'),(3,'i love tacos','2015-07-03 16:51:32',12,26,'Jo abc'),(4,'dd','2015-07-04 15:49:37',12,27,'Jo abc'),(5,'this place is great','2015-07-16 13:40:43',12,29,'Jo abc'),(6,'i love this place. great spot','2015-07-18 14:07:29',12,30,'Jo abc'),(7,'i love this place','2015-07-18 17:43:14',10,31,'Nirupa abc'),(8,'I love this place! wifi password is 1223','2015-10-02 17:08:25',12,34,'Jo abc'),(9,'I love this place.  Best chicken  Katsu for $9','2015-10-02 18:57:08',8,35,'Superman abc'),(10,'this place was great!  chicken katsu in the house!  they have free water, and the no line.  ','2015-10-02 20:05:07',8,35,'Superman abc');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-04 10:24:32
