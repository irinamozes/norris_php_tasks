-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: larloft
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
-- Table structure for table `allgoods`
--

DROP TABLE IF EXISTS `allgoods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `allgoods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goodname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `allgoods_category_id_foreign` (`category_id`),
  CONSTRAINT `allgoods_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allgoods`
--

LOCK TABLES `allgoods` WRITE;
/*!40000 ALTER TABLE `allgoods` DISABLE KEYS */;
/*!40000 ALTER TABLE `allgoods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catcharact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Action','Good games',NULL,NULL),(2,'RPG','Good games',NULL,NULL),(3,'Quest','For adults',NULL,NULL),(4,'Online','For adults',NULL,NULL),(5,'Strategy','Good games',NULL,NULL);
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
  `allgood_id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `goods_allgood_id_foreign` (`allgood_id`),
  CONSTRAINT `goods_allgood_id_foreign` FOREIGN KEY (`allgood_id`) REFERENCES `allgoods` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_05_02_174343_create_categories_table',2),(4,'2017_05_02_174855_create_allgoods_table',3),(5,'2017_05_03_081559_create_orders_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dorder` date NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Irina Mozes','msnorris2017@yandex.ru','$2y$10$TDgygFLl10QbrZ0T0wZhuOg9kE3IBJTbAobV8gRe/5vD6mG1geLVi',NULL,'fjDBG54M9bvMciWMryRDkaRREkTkmUWPkUeuiBy49nRQ6aDaCz1dKuaa7iRU','2017-05-02 20:50:08','2017-05-02 20:50:08'),(2,'cat_1','cat1@yandex.ru','$2y$10$9Umhrns0Kr731x7fjDzCieilOB/iTSrrX3SZu8OPN/banXZJXShmy',NULL,'uyV9TqhV35eNR6u7Dk9nDBl63qkUNF0jWMCrtVmFnzSauTaJ93YDzrm9yOV2','2017-05-02 20:55:40','2017-05-02 20:55:40'),(3,'cat_2','cat2@yandex.ru','$2y$10$kuN4BRxYPMMl6ssWgZMYLuOtV9yII3lnZp1aIjw5xOFVG/dZiE/Zm',NULL,'uv80777TgVVgR7aDS2PQoOMxNt8eMoFUZyoBEXmJ4HbzWAaDaRWStQkhtGHR','2017-05-02 22:02:35','2017-05-02 22:02:35'),(4,'cat_3','cat3@yandex.ru','$2y$10$APXh7vJRQUb3WgwQDdQSm.adraiXw65oGagOpivxLKp41cp17fuo6',NULL,'J4B3f4xL8Fn4CiauIOUp9ggno9Z4lmGqgd1Z7sgQYMWrDSbdSqJfMSdRJ8Wx','2017-05-02 22:18:21','2017-05-02 22:18:21'),(5,'cat_4','cat4@yandex.ru','$2y$10$3yHbuTZSvKEUCdgOeA8K8OOILAGTzk.CwaxyFdPrOD74vm9Tgk1e.',1,'7LNuZisNLhcBG4FbRFKgd1CqOPQvoxmWbX4a2KoLajFE5Yv10ZOkO5fiX0mv','2017-05-02 22:43:48','2017-05-02 22:43:48'),(6,'cat_5','cat5@yandex.ru','$2y$10$g/VWYhiv6qOU8/73eZ4ay.DktyGFdVSLP2pvkDa1WZ279w8sBgnva',1,'EgUP8T9lizSBQYphOnDblycbBRSj2hOhFijSkIa5iP40kL7tqJgT2AUWaQGS','2017-05-02 23:01:42','2017-05-02 23:01:42'),(7,'cat_6','cat6@yandex.ru','$2y$10$hACE7TVJJTwHraKMBcN.uOQA7vINTftBdikbls6g8U0441bcqDgoa',1,'bpWxZYzP2zk7iYnkDXqbAQlMYr8kwtdGGpd6K2O3N4rrW3KBtxa8qs4gCcwY','2017-05-03 00:13:08','2017-05-03 00:13:08'),(8,'cat_7','cat7@yandex.ru','$2y$10$Hfp6wckT2LRrZpTbS3qcNu9zXSvw/iRP5dJJ5vr23lZVnUWHq5k6S',1,'FALKkkYUm2h98mVimJY0ZaSev1cTutYRuuCIn61VKZIRvuvWNy5xLs8WspZr','2017-05-03 00:22:24','2017-05-03 00:22:24'),(9,'cat_8','cat8@yandex.ru','$2y$10$SxLF67nKktmK1g.rAXANTO9bNucvKgTsCCAPG4jIG4zZ23CSIYVUK',0,'E2yErYcDES0uJ2OWY0AwVaQxrO8EVUZGnS5bk8PRXsOz5w65LtZYTuBhHzs4','2017-05-03 00:24:36','2017-05-03 00:24:36'),(10,'cat_9','cat9@yandex.ru','$2y$10$15qRF/lBeVfz.QjK632LtuLm3BJ0wH8Vu12CSN0P4VZYG/jr9rOri',1,'INJBtWBb6XQtTbAcALnPlh6nzocFmZenno4EiU4tsI25iFDCXBEuXnPWHRjy','2017-05-03 01:47:05','2017-05-03 01:47:05'),(11,'cat_10','cat10@yandex.ru','$2y$10$iQWN/nKK3s1Fv/VrfSyJvOwG0rKmoy7mMPjZZNHZGYGLTf40ld/rS',1,'vZ7mfhCKAT4G0lWLCrY5bDfAbNpiPTb5HfrgHOV1m681l6WUCsEwWg46RnCA','2017-05-03 02:27:31','2017-05-03 02:27:31'),(12,'cat_11','cat1@yandex.ru1','$2y$10$Z6YStgTFm7WUQT4.4JgyjuVU8cdbyO78JunDc71xcATKnp2OFTbX2',0,'I7kpGkqpXxUAS5lsbEMwg0i2C1Ni1MWbHGxsZkv3DpmEttaNIBjeHIFlHWde','2017-05-03 02:33:09','2017-05-03 02:33:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-03 16:15:22
