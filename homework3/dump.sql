-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: lschool_db
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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `img_name` varchar(100) NOT NULL,
  `img_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  PRIMARY KEY (`img_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `images_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES ('1_xzx1VYTl5tE.jpg',1,1),('2_UpivlC6KOwI.jpg',2,2),('3_21YNB2Nfg5k.jpg',3,3),('3_bCZIz0SCrMQ.jpg',4,3),('1_EtOdEm98EGM.jpg',5,1),('1_lavLfq881LI.jpg',6,1),('4_IngqYCHJX6U.jpg',7,4),('4_SL7vBqnAMnE.jpg',8,4),('4_reeGQIhuJOg.jpg',9,4),('4_JM3Uj6VKGPo.jpg',10,4),('5_HVGv5US02Ec.jpg',11,5),('5_j8hFfW668co.jpg',12,5),('5_P7NUNadu97g.jpg',13,5),('5_Mu8LCcWu6_0.jpg',14,5),('5_CphIxW9Lmec.jpg',15,5),('5_EYrNEc3R2xc.jpg',16,5),('2_xAlyQNECeOo.jpg',17,2),('2_NyUE912AXgk.jpg',18,2),('2_Qu5C2tDvZ_A.jpg',19,2),('6_ugEAZJrOmzM.jpg',20,6),('6_8qjYTrlhP8k.jpg',21,6),('6_OvyxRdMlI0g.jpg',22,6),('6_HvDquPfJo08.jpg',23,6),('7_LfViAOgQS5o.jpg',24,7),('7_ANT6CxbhYHA.jpg',25,7),('8_Xe2V9BMHsWo.jpg',26,8),('8_fYIE_-1uvoM.jpg',27,8),('8_FwwSDJf7JOs.jpg',28,8);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_login`
--

DROP TABLE IF EXISTS `users_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_login` (
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_login`
--

LOCK TABLES `users_login` WRITE;
/*!40000 ALTER TABLE `users_login` DISABLE KEYS */;
INSERT INTO `users_login` VALUES ('cat_1','_1_1_1_1',1),('cat_2','_2_2_2_2',2),('cat_3','_3_3_3_3',3),('cat_4','_4_4_4_4',4),('cat_5','_5_5_5_5',5),('cat_6','_6_6_6_6',6),('cat_7','_7_7_7_7',7),('cat_8','_8_8_8_8',8);
/*!40000 ALTER TABLE `users_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_profile`
--

DROP TABLE IF EXISTS `users_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_profile` (
  `profile_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `info` text,
  `user_id` int(5) NOT NULL,
  PRIMARY KEY (`profile_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `users_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_profile`
--

LOCK TABLES `users_profile` WRITE;
/*!40000 ALTER TABLE `users_profile` DISABLE KEYS */;
INSERT INTO `users_profile` VALUES (1,'cat_1',78,'\"\"\"cfbdjnfkmls;\"\"\"',1),(2,'cat_2',27,'\"\"\"\"',2),(3,'cat_3',28,'\"dbcjsnfkmnslmcv;/s\"',3),(4,'cat_4',47,'ckjhoul\r\n\'',4),(5,'cat_5',65,'\"n m,nm.\"',5),(6,'cat_6',14,'\"\"',6),(7,'cat_7',16,'\"\"',7),(8,'cat_8',99,'\"\"',8);
/*!40000 ALTER TABLE `users_profile` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-14 19:26:50
