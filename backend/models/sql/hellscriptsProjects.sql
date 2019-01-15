-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: hellscripts
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `website` varchar(2000) DEFAULT NULL,
  `license` varchar(50) DEFAULT NULL,
  `privacy` varchar(50) NOT NULL,
  `languages` varchar(1000) DEFAULT NULL,
  `startDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `endDate` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (14,'bahsshellrepg','aquest projecte esÃ  molt bÃ© perqwedo aosdhbfjh dsjfnd asdfasdf ','https://soundcloud.com/neilcic','MIT','protected','bash, shell, scripts','2019-01-15 19:53:23','15/01/2019'),(15,'scrobbleeerr','aquest projecte esÃ  molt bÃ© perqwedo aosdhbfjh dsjfnd asdfasdf sdfadsfds\nfdsafadsfadsfdas sdaf dsf d fds\nasdffadsfasdfasdfdskfhdsfhbfdsdjhf fdsa fdsfsd\ndsfdsfasdfadskfjhdsd','https://soundcloud.com/neilcic','CDDL','private','java, pearl','2019-01-15 19:54:31','30/01/2019'),(16,'myspotify','aquest projecte esÃ  molt bÃ© perqwedo aosdhbfjh dsjfnd asdfasdf sdfadsfds\nfdsafadsfadsfdas sdaf dsf d fds\nasdffadsfasdfasdfdskfhdsfhbfdsdjhf fdsa fdsfsd\ndsfdsfasdfadskfjhdsd','myspotify.protegerse.com','MIT','private','php, javascript, html, css','2019-01-15 19:55:39','22/05/2019');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-15 20:58:38
