-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: sls_bd
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

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
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idcurso`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES (1,'Reforma Tributaria',1),(2,'Membresía Virtual',1);
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `app` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `apm` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `dni` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `fecha_nac` date NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `estado` tinyint(1) NOT NULL,
  `idcurso` int(11) NOT NULL,
  PRIMARY KEY (`idpersona`),
  KEY `fk_idcurso_idx` (`idcurso`),
  CONSTRAINT `fk_idcurso` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,'Geo','Rios','Abarca','47859612',1,'2017-01-16','044211454','Av. America #145','geovanny.j.rios@gmasil.com','2017-01-25 00:00:00','2017-07-17 00:00:00',1,1),(2,'Juan','Perez','Rojas','47859612',1,'0000-00-00','04421454','AV. América Sur #145','juan.p@gmail.com','2017-01-20 00:00:00','2017-01-20 00:00:00',1,2),(3,'Pett','Ríos','Abarca','48751230',1,'2017-01-16','044211454','Av. America #145','pett.j.rios@gmasil.com','2017-01-23 00:00:00','2017-01-23 00:00:00',1,2),(4,'Jesus','Avila','Ruiz','47859612',1,'1992-09-15','044256378','Av. America #784','jesus.a.ruiz@gmail.com','2017-01-25 00:00:00','2017-01-25 00:00:00',1,2),(5,'Kevin','Avila','Lopez','49781241',1,'1995-10-15','044256378','Av. America #50','kevin.a.lopez@gmail.com','2017-01-25 00:00:00','2017-01-25 00:00:00',1,2),(6,'Arnold','Mantilla','Leiva','4785902',1,'1993-07-15','044210387','Av. America #75','arnold.m.leiva@gmail.com','2017-01-25 00:00:00','2017-01-25 00:00:00',1,1),(7,'Daniel','Vereau','Flores','47859508',1,'1991-04-11','044218562','Av. America #301','daniel.v.flores@gmail.com','2017-01-25 00:00:00','2017-01-25 00:00:00',1,1),(8,'Jorge','Vereau','ABC','47859508',1,'1991-04-11','044218562','Av. America #74','jorge.v.flores@gmail.com','2017-01-25 00:00:00','2017-01-25 00:00:00',1,1),(9,'Luis','Cordova','Rios','45781296',1,'1995-10-15','044214578','Av. américa Sur #124','jezukaz@gmail.com','2017-01-25 00:00:00','2017-01-25 00:00:00',1,1),(10,'Marco','Cordova','Rios','46851232',1,'1995-10-15','044217845','Av. américa Sur #124','jezukaz@gmail.com','2017-01-25 00:00:00','2017-01-25 00:00:00',1,2),(11,'Angelo','Uriol','Rios','47859639',1,'1992-10-12','044859632','Av. américa Sur #120','geovanny.j.rios@gmail.com','2017-01-25 00:00:00','2017-01-25 00:00:00',1,1),(12,'Jesus','Trres','Rojas','54875421',1,'1992-05-15','542154878','Trujillo','jezukaz@gmawil.com','2017-01-31 00:00:00','2017-01-31 20:05:42',0,2);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-31 14:17:24
