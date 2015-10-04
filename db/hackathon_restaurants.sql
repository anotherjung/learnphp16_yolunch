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
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `distance` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `latitude` varchar(45) DEFAULT NULL,
  `longitude` varchar(45) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `place_id` varchar(45) DEFAULT NULL,
  `cuisine` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurants`
--

LOCK TABLES `restaurants` WRITE;
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;
INSERT INTO `restaurants` VALUES (25,'Sizzling Stone','','4.665','510 Barber Ln Milpitas, CA 95035','37.4205977','-121.917243','512','Eig1MTAgQmFyYmVyIExhbmUsIE1pbHBpdGFzLCBDQSA5N','0'),(26,'Tacos El Rancherito','','5.28','1729 McKee Rd San Jose, CA','37.3588609','-121.8601871','634','ChIJ34ugwfzMj4ARWdfcUvyMrbM','mexican'),(27,'Kim\'s Food','','2561.454375','1 main st','36.6244448','-82.5590166','131653','ChIJxzY8nFKTWogRjwsM0b0cx_4','viet'),(28,'burger king','sdf','1959.7725','1 street','46.1649803','-94.6003344','102066','ChIJk9qenSB-tlIRUklWvEn4Xew','italian'),(29,'Sandwich Store','hee','4.646875','511 Barber Ln Milpitas, CA 95035','37.4203505','-121.9171366','509','Eig1MTEgQmFyYmVyIExhbmUsIE1pbHBpdGFzLCBDQSA5N','italian'),(30,'Pizza Store','','5.754375','401 S King Rd (Alum Rock), San Jose, CA 95116','37.3452882','-121.8486979','741','ChIJIyl1RCTNj4AR1CeCXi1U8nk','italian'),(31,'Rice Bowl','some info','7.735',' La Villa Delicatessen & Gourmet Shop Deli / ','37.3038671','-121.9008783','885','ChIJIVl9kVgzjoAR94QXJGXYyQg','italian'),(32,'Ono Hawaiian BBQ','','2850.761875','1706 Oakland Rd Ste 10','38.0688375','-78.055557','146368','EioxNzA2IE9ha2xhbmQgUmQgIzEwLCBMb3Vpc2EsIFZBI','0'),(33,'Ono Hawaiian BBQ','','1.48125','1706 Oakland Rd Ste 10, san jose, ca','37.3835091','-121.8930748','355','EiwxNzA2IE9ha2xhbmQgUmQgIzEwLCBTYW4gSm9zZSwgQ','0'),(34,'Starbucks','','1.141875','1704 Oakland Rd, San Jose, CA 95131','37.3831465','-121.8944962','239','ChIJTaD95g7Mj4ARyPa4pWTxD-4','american'),(35,'Fish\'s Wild','','1.368125','1085 E Brokaw Rd Ste 30 (Oakland Rd), San Jos','37.3886076','-121.8999079','317','ChIJg_uGOwnMj4AR8hIk-W01qf8','american'),(36,'California Sourdough','$7 sandwiches','1.175','1150 Murphy Ave Ste A (at Oakland Rd), San Jo','37.3823091','-121.895058','247','EigxMTUwIE11cnBoeSBBdmUsIFNhbiBKb3NlLCBDQSA5N','american');
/*!40000 ALTER TABLE `restaurants` ENABLE KEYS */;
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
