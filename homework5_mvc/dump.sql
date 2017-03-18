-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: loft_db
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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES ('1_YTVV_1BktzI.jpg',1,1),('1_xzx1VYTl5tE.jpg',2,1),('1_Xe2V9BMHsWo.jpg',3,1),('1_xAlyQNECeOo.jpg',4,1),('2_UpivlC6KOwI.jpg',5,2),('2_swNj6VtVAdA.jpg',6,2),('2_SL7vBqnAMnE.jpg',7,2),('3_rJW5zU4jwpA.jpg',8,3),('3_reeGQIhuJOg.jpg',9,3),('3_Qu5C2tDvZ_A.jpg',10,3),('4_qSvu6hJNYeA.jpg',11,4),('4_P7NUNadu97g.jpg',12,4),('4_OvyxRdMlI0g.jpg',13,4),('4_OUeMimtXpcI.jpg',14,4),('5_NyUE912AXgk.jpg',15,5),('5_Mu8LCcWu6_0.jpg',16,5),('5__MDR7B_cw3M.jpg',17,5),('6_LfViAOgQS5o.jpg',18,6),('6_lavLfq881LI.jpg',19,6),('6_JM3Uj6VKGPo.jpg',20,6),('7_j8hFfW668co.jpg',21,7),('7_IngqYCHJX6U.jpg',22,7),('7_HVGv5US02Ec.jpg',23,7),('7_fYIE_-1uvoM.jpg',24,7),('8_FwwSDJf7JOs.jpg',25,8),('8_EYrNEc3R2xc.jpg',26,8),('8_EtOdEm98EGM.jpg',27,8),('7_CphIxW9Lmec.jpg',28,7),('8_bCZIz0SCrMQ.jpg',29,8),('8_ANT6CxbhYHA.jpg',30,8),('8_ADo2k9BixT4.jpg',31,8),('1_aAWd-5c4FCQ.jpg',32,1),('1_21YNB2Nfg5k.jpg',33,1),('9_ADo2k9BixT4.jpg',34,9),('9_CZMU-x99n9A.jpg',35,9),('9_xzx1VYTl5tE.jpg',36,9),('2_YTVV_1BktzI.jpg',37,2),('10_Xe2V9BMHsWo.jpg',38,10),('11_Qu5C2tDvZ_A.jpg',39,11),('11_Qu5C2tDvZ_A.jpg',40,11),('12_P7NUNadu97g.jpg',41,12),('12_8qjYTrlhP8k.jpg',42,12),('12_Mu8LCcWu6_0.jpg',43,12),('13_yfQuQxhNxag.jpg',44,13),('13_fYIE_-1uvoM.jpg',45,13),('14_21YNB2Nfg5k.jpg',46,14),('14_Mu8LCcWu6_0.jpg',47,14);
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_login`
--

LOCK TABLES `users_login` WRITE;
/*!40000 ALTER TABLE `users_login` DISABLE KEYS */;
INSERT INTO `users_login` VALUES ('cat_1','_1_1_1_1',1),('cat_2','_2_2_2_2',2),('cat_3','_3_3_3_3',3),('cat_4','_4_4_4_4',4),('cat_5','_5_5_5_5',5),('cat_6','_6_6_6_6',6),('cat_7','_7_7_7_7',7),('cat_8','_8_8_8_8',8),('cat_9','_9_9_9_9',9),('cat_10','_10_10_10',10),('cat_11','_11_11_11',11),('cat_12','_12_12_12',12),('cat_13','_13_13_13_',13),('cat_14','_14_14_14',14);
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_profile`
--

LOCK TABLES `users_profile` WRITE;
/*!40000 ALTER TABLE `users_profile` DISABLE KEYS */;
INSERT INTO `users_profile` VALUES (1,'cat_1',89,'ljkkll;',1),(2,'cat_2',16,'',2),(3,'cat_3',14,'jbjajnxkm;ALx;a',3),(4,'cat_4',16,'',4),(5,'cat_5',25,'',5),(6,'cat_6',36,'',6),(7,'cat_7',29,'gcvhbnk,n.lm;/',7),(8,'cat_8',18,'',8),(9,'cat_9',92,'ghjhkl;;',9),(10,'cat_10',12,'fgghjhkjl',10),(11,'cat_11',19,'ZCVgZVzvBZxm',11),(12,'cat_12',17,'adhghjm',12),(13,'cat_13',52,'bnmkjhvbv c',13),(14,'cat_14',61,'vbhnklk i',14);
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

-- Dump completed on 2017-03-19  1:51:55
