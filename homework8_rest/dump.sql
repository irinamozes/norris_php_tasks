-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: loft_shop
-- ------------------------------------------------------
-- Server version	5.6.28-0ubuntu0.15.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'laboriosam','2017-04-14 14:14:12','2017-04-14 14:14:12'),(2,'voluptatem','2017-04-14 14:14:12','2017-04-14 14:14:12'),(3,'vitae','2017-04-14 14:14:12','2017-04-14 14:14:12'),(4,'repudiandae','2017-04-14 14:14:12','2017-04-14 14:14:12'),(5,'accusamus','2017-04-14 14:14:12','2017-04-14 14:14:12'),(6,'impedit','2017-04-16 09:20:19','2017-04-16 09:20:19'),(7,'saepe','2017-04-16 09:20:19','2017-04-16 09:20:19'),(8,'rerum','2017-04-16 09:20:19','2017-04-16 09:20:19'),(9,'vitae','2017-04-16 09:20:19','2017-04-16 09:20:19'),(10,'quisquam','2017-04-16 09:20:19','2017-04-16 09:20:19'),(11,'non','2017-04-17 03:19:08','2017-04-17 03:19:08'),(12,'velit','2017-04-17 03:19:08','2017-04-17 03:19:08'),(13,'officia','2017-04-17 03:19:08','2017-04-17 03:19:08'),(14,'doloribus','2017-04-17 03:19:08','2017-04-17 03:19:08'),(15,'commodi','2017-04-17 03:19:08','2017-04-17 03:19:08'),(16,'perspiciatis','2017-04-17 09:44:41','2017-04-17 09:44:41'),(17,'est','2017-04-17 09:44:41','2017-04-17 09:44:41'),(18,'ullam','2017-04-17 09:44:41','2017-04-17 09:44:41'),(19,'id','2017-04-17 09:44:41','2017-04-17 09:44:41'),(20,'modi','2017-04-17 09:44:41','2017-04-17 09:44:41');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goodname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categories_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (1,'voluptatum','2017-04-14 14:14:12','2017-04-14 14:14:12',1),(2,'et','2017-04-14 14:14:12','2017-04-14 14:14:12',1),(3,'et','2017-04-14 14:14:12','2017-04-14 14:14:12',1),(4,'itaque','2017-04-14 14:14:12','2017-04-14 14:14:12',2),(5,'velit','2017-04-14 14:14:12','2017-04-14 14:14:12',2),(6,'et','2017-04-14 14:14:12','2017-04-14 14:14:12',2),(7,'sed','2017-04-14 14:14:12','2017-04-14 14:14:12',3),(8,'quo','2017-04-14 14:14:12','2017-04-14 14:14:12',3),(9,'repudiandae','2017-04-14 14:14:12','2017-04-14 14:14:12',3),(10,'fugiat','2017-04-14 14:14:12','2017-04-14 14:14:12',4),(11,'et','2017-04-14 14:14:12','2017-04-14 14:14:12',4),(12,'est','2017-04-14 14:14:12','2017-04-14 14:14:12',4),(13,'dolorem','2017-04-14 14:14:12','2017-04-14 14:14:12',5),(14,'repellendus','2017-04-14 14:14:12','2017-04-14 14:14:12',5),(15,'quas','2017-04-14 14:14:12','2017-04-14 14:14:12',5),(16,'ex','2017-04-16 09:20:19','2017-04-16 09:20:19',6),(17,'labore','2017-04-16 09:20:19','2017-04-16 09:20:19',6),(18,'dicta','2017-04-16 09:20:19','2017-04-16 09:20:19',6),(19,'perferendis','2017-04-16 09:20:19','2017-04-16 09:20:19',7),(20,'incidunt','2017-04-16 09:20:19','2017-04-16 09:20:19',7),(21,'labore','2017-04-16 09:20:19','2017-04-16 09:20:19',7),(22,'similique','2017-04-16 09:20:19','2017-04-16 09:20:19',8),(23,'qui','2017-04-16 09:20:19','2017-04-16 09:20:19',8),(24,'velit','2017-04-16 09:20:19','2017-04-16 09:20:19',8),(25,'est','2017-04-16 09:20:19','2017-04-16 09:20:19',9),(26,'omnis','2017-04-16 09:20:19','2017-04-16 09:20:19',9),(27,'consequatur','2017-04-16 09:20:19','2017-04-16 09:20:19',9),(28,'eos','2017-04-16 09:20:19','2017-04-16 09:20:19',10),(29,'et','2017-04-16 09:20:19','2017-04-16 09:20:19',10),(30,'quasi','2017-04-16 09:20:19','2017-04-16 09:20:19',10),(31,'repudiandae','2017-04-17 03:19:08','2017-04-17 03:19:08',11),(32,'quia','2017-04-17 03:19:08','2017-04-17 03:19:08',11),(33,'eum','2017-04-17 03:19:08','2017-04-17 03:19:08',11),(34,'ut','2017-04-17 03:19:08','2017-04-17 03:19:08',12),(35,'quisquam','2017-04-17 03:19:08','2017-04-17 03:19:08',12),(36,'quia','2017-04-17 03:19:08','2017-04-17 03:19:08',12),(37,'ipsum','2017-04-17 03:19:08','2017-04-17 03:19:08',13),(38,'ut','2017-04-17 03:19:08','2017-04-17 03:19:08',13),(39,'autem','2017-04-17 03:19:08','2017-04-17 03:19:08',13),(40,'quo','2017-04-17 03:19:08','2017-04-17 03:19:08',14),(41,'inventore','2017-04-17 03:19:08','2017-04-17 03:19:08',14),(42,'cumque','2017-04-17 03:19:08','2017-04-17 03:19:08',14),(43,'autem','2017-04-17 03:19:08','2017-04-17 03:19:08',15),(44,'et','2017-04-17 03:19:08','2017-04-17 03:19:08',15),(45,'pariatur','2017-04-17 03:19:08','2017-04-17 03:19:08',15),(46,'quo','2017-04-17 09:44:41','2017-04-17 09:44:41',16),(47,'cumque','2017-04-17 09:44:41','2017-04-17 09:44:41',16),(48,'sed','2017-04-17 09:44:41','2017-04-17 09:44:41',16),(49,'enim','2017-04-17 09:44:41','2017-04-17 09:44:41',17),(50,'ut','2017-04-17 09:44:41','2017-04-17 09:44:41',17),(51,'aut','2017-04-17 09:44:41','2017-04-17 09:44:41',17),(52,'omnis','2017-04-17 09:44:41','2017-04-17 09:44:41',18),(53,'asperiores','2017-04-17 09:44:41','2017-04-17 09:44:41',18),(54,'et','2017-04-17 09:44:41','2017-04-17 09:44:41',18),(55,'provident','2017-04-17 09:44:41','2017-04-17 09:44:41',19),(56,'velit','2017-04-17 09:44:41','2017-04-17 09:44:41',19),(57,'quasi','2017-04-17 09:44:41','2017-04-17 09:44:41',19),(58,'dolores','2017-04-17 09:44:41','2017-04-17 09:44:41',20),(59,'sunt','2017-04-17 09:44:41','2017-04-17 09:44:41',20),(60,'nesciunt','2017-04-17 09:44:41','2017-04-17 09:44:41',20),(61,'сапоги',NULL,NULL,5),(62,'hat',NULL,NULL,5),(63,'шляпа',NULL,NULL,6),(64,'hat',NULL,NULL,6),(65,'кофеварка',NULL,NULL,7),(66,'газонокосилка',NULL,NULL,7),(67,'грабли',NULL,NULL,7),(68,'туфли',NULL,NULL,8),(69,'колбаса',NULL,NULL,1);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-18 13:58:50
