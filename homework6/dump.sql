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
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES ('21_Mu8LCcWu6_0.jpg',64,21),('21_NyUE912AXgk.jpg',65,21),('21_OUeMimtXpcI.jpg',66,21),('21__MDR7B_cw3M.jpg',67,21),('22_xAlyQNECeOo.jpg',68,22),('22_LfViAOgQS5o.jpg',69,22),('22_OvyxRdMlI0g.jpg',70,22),('22_YTVV_1BktzI.jpg',71,22),('22_xzx1VYTl5tE.jpg',72,22),('22_Xe2V9BMHsWo.jpg',73,22),('22_8qjYTrlhP8k.jpg',74,22),('23_1VFWPBbXfIc.jpg',75,23),('23_21YNB2Nfg5k.jpg',76,23),('23_ADo2k9BixT4.jpg',77,23),('23_EtOdEm98EGM.jpg',78,23),('24_FwwSDJf7JOs.jpg',79,24),('24_j8hFfW668co.jpg',80,24),('24_lavLfq881LI.jpg',81,24),('24_fYIE_-1uvoM.jpg',82,24),('25_bCZIz0SCrMQ.jpg',83,25),('25_CphIxW9Lmec.jpg',84,25),('25_IngqYCHJX6U.jpg',85,25),('25_JM3Uj6VKGPo.jpg',86,25),('25_P7NUNadu97g.jpg',87,25),('26__MDR7B_cw3M.jpg',88,26),('26_Mu8LCcWu6_0.jpg',89,26),('26_Qu5C2tDvZ_A.jpg',90,26),('27_EYrNEc3R2xc.jpg',91,27),('27_ADo2k9BixT4.jpg',92,27),('27_lavLfq881LI.jpg',93,27),('28_CphIxW9Lmec.jpg',94,28),('29__MDR7B_cw3M.jpg',95,29),('29_Mu8LCcWu6_0.jpg',96,29),('29_xzx1VYTl5tE.jpg',97,29),('29_Xe2V9BMHsWo.jpg',98,29),('30_CphIxW9Lmec.jpg',99,30),('30_Mu8LCcWu6_0.jpg',100,30),('30_xzx1VYTl5tE.jpg',101,30),('23_LfViAOgQS5o.jpg',102,23),('25_fYIE_-1uvoM.jpg',103,25),('31_EYrNEc3R2xc.jpg',104,31),('31_j8hFfW668co.jpg',105,31),('31_lavLfq881LI.jpg',106,31),('31_YTVV_1BktzI.jpg',107,31),('31_xzx1VYTl5tE.jpg',108,31),('32_HVGv5US02Ec.jpg',109,32),('32_lavLfq881LI.jpg',110,32),('32_21YNB2Nfg5k.jpg',111,32),('33_IngqYCHJX6U.jpg',112,33),('33__MDR7B_cw3M.jpg',113,33),('33_xzx1VYTl5tE.jpg',114,33),('29_IngqYCHJX6U.jpg',115,29);
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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_login`
--

LOCK TABLES `users_login` WRITE;
/*!40000 ALTER TABLE `users_login` DISABLE KEYS */;
INSERT INTO `users_login` VALUES ('cat_21','f76dbd04096a58ea6be104c89d302d7c',21),('cat_22','c4467901e3d31f7b3a35d2bf3b8e0eef',22),('cat_23','6fd694afb41809e3acc26c76619b8d74',23),('cat_24','6cd4083624f85eb6a94153481221235c',24),('cat_25','2e490d851af2350a9c4c70f7fc54dde9',25),('cat_26','f87a66218779006b0461eda4f18a73db',26),('cat_27','5f61b5517e37aa1e78dd49b44173e486',27),('cat_28','281018096d9b65883a6ac0870fed4fe2',28),('cat_29','64c5436e4801e4c50c72f6619c766971',29),('cat_30','6706adfabf7eae1becfe989a10f886bd',30),('cat_31','617811681be96bd336bd6a768b57bcee',31),('cat_32','69bc9e6171f3e659b55c702e7feb6a86',32),('cat_33','1a28e918f831478204b80a9cdfc25118',33);
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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_profile`
--

LOCK TABLES `users_profile` WRITE;
/*!40000 ALTER TABLE `users_profile` DISABLE KEYS */;
INSERT INTO `users_profile` VALUES (21,'cat_21',12,'gkjhkl;;',21),(22,'cat_22',29,'vbjnj',22),(23,'cat_23',96,'gghhkljnkj',23),(24,'cat_24',45,'',24),(25,'cat_25',50,'fhgjg',25),(26,'cat_26',17,'',26),(27,'cat_27',30,'jl;\r\n',27),(28,'cat_28',19,'',28),(29,'cat_29',30,'',29),(30,'cat_30',30,'',30),(31,'cat_31',29,'fhgjhjlkk',31),(32,'cat_32',30,'',32),(33,'cat_33',33,'',33);
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

-- Dump completed on 2017-04-04 16:03:58
