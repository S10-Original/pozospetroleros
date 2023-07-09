-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: basedatos_pozos
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pepito`
--

DROP TABLE IF EXISTS `pepito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pepito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(8,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pepito`
--

LOCK TABLES `pepito` WRITE;
/*!40000 ALTER TABLE `pepito` DISABLE KEYS */;
INSERT INTO `pepito` VALUES (1,35.00,'2023-07-03');
/*!40000 ALTER TABLE `pepito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pozos`
--

DROP TABLE IF EXISTS `pozos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pozos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `valor` decimal(8,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pozos`
--

LOCK TABLES `pozos` WRITE;
/*!40000 ALTER TABLE `pozos` DISABLE KEYS */;
INSERT INTO `pozos` VALUES (25,'sten',32.00,'2023-07-04'),(27,'sten',24.00,'2023-07-14'),(30,'pepito',35.00,'2023-07-03'),(36,'sten',68.00,'2023-07-29'),(37,'sten',37.00,'2023-07-31');
/*!40000 ALTER TABLE `pozos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sten`
--

DROP TABLE IF EXISTS `sten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(8,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sten`
--

LOCK TABLES `sten` WRITE;
/*!40000 ALTER TABLE `sten` DISABLE KEYS */;
INSERT INTO `sten` VALUES (1,32.00,'2023-07-04'),(2,24.00,'2023-07-14'),(3,68.00,'2023-07-29'),(4,37.00,'2023-07-31');
/*!40000 ALTER TABLE `sten` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taza`
--

DROP TABLE IF EXISTS `taza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(8,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taza`
--

LOCK TABLES `taza` WRITE;
/*!40000 ALTER TABLE `taza` DISABLE KEYS */;
/*!40000 ALTER TABLE `taza` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-08 18:41:09
