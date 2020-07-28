-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: eu-cdbr-west-03.cleardb.net    Database: heroku_7817a64d5d6b2f6
-- ------------------------------------------------------
-- Server version	5.6.47-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `magasins`
--

DROP TABLE IF EXISTS `magasins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `magasins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `id_image` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idshop_image_idx` (`id_image`),
  KEY `idshop_admin_idx` (`id_admin`),
  CONSTRAINT `idshop_admin` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `idshop_image` FOREIGN KEY (`id_image`) REFERENCES `images` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `magasins`
--

LOCK TABLES `magasins` WRITE;
/*!40000 ALTER TABLE `magasins` DISABLE KEYS */;
INSERT INTO `magasins` VALUES (1,'Bleuets Rose','2 Rue de buléon','Saint-Jean-Brévelay','56660','02.97.60.41.65',NULL,1),(2,'Bleuets Rose','1 route de vannes','Grand-Champ','56390','09.52.46.16.14',NULL,2);
/*!40000 ALTER TABLE `magasins` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-28 14:01:28
