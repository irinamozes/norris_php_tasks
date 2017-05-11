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
-- Table structure for table `allgood_orders`
--

DROP TABLE IF EXISTS `allgood_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `allgood_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `allgood_id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `goodname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allgood_orders`
--

LOCK TABLES `allgood_orders` WRITE;
/*!40000 ALTER TABLE `allgood_orders` DISABLE KEYS */;
INSERT INTO `allgood_orders` VALUES (1,22,1,'2017-05-11 03:19:02','2017-05-11 03:19:02','Ryder Rempel'),(2,36,1,'2017-05-11 03:19:02','2017-05-11 03:19:02','hisgame'),(3,21,1,'2017-05-11 03:19:02','2017-05-11 03:19:02','Clementina Daugherty'),(4,15,1,'2017-05-11 03:19:02','2017-05-11 03:19:02','Elliott Schumm'),(5,25,1,'2017-05-11 03:19:02','2017-05-11 03:19:02','Fernando Mills'),(6,33,1,'2017-05-11 03:19:02','2017-05-11 03:19:02','Alta Cummerata'),(7,9,1,'2017-05-11 03:19:02','2017-05-11 03:19:02','Ms. Nikki Renner IV'),(8,30,1,'2017-05-11 03:19:02','2017-05-11 03:19:02','Kyleigh Rodriguez'),(9,7,1,'2017-05-11 03:19:02','2017-05-11 03:19:02','Miss Mikayla Muller'),(10,34,2,'2017-05-11 06:40:59','2017-05-11 06:40:59','Julien Mitchell'),(11,7,2,'2017-05-11 06:40:59','2017-05-11 06:40:59','Miss Mikayla Muller'),(12,23,2,'2017-05-11 06:40:59','2017-05-11 06:40:59','Prof. Richie Wiegand MD'),(13,33,2,'2017-05-11 06:40:59','2017-05-11 06:40:59','Alta Cummerata'),(14,3,2,'2017-05-11 06:40:59','2017-05-11 06:40:59','Miss Willie Funk Jr.'),(15,2,3,'2017-05-11 06:50:44','2017-05-11 06:50:44','Alaina Bayer V'),(16,16,3,'2017-05-11 06:50:44','2017-05-11 06:50:44','Sanford Upton'),(17,1,3,'2017-05-11 06:50:44','2017-05-11 06:50:44','Mr. Theo Parisian DDS');
/*!40000 ALTER TABLE `allgood_orders` ENABLE KEYS */;
UNLOCK TABLES;

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
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `allgoods_category_id_foreign` (`category_id`),
  CONSTRAINT `allgoods_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allgoods`
--

LOCK TABLES `allgoods` WRITE;
/*!40000 ALTER TABLE `allgoods` DISABLE KEYS */;
INSERT INTO `allgoods` VALUES (1,'Mr. Theo Parisian DDS','Clint Senger',3,'2017-05-06 10:57:25','2017-05-06 10:57:25','Duchess. \'I make you dry enough!\' They all made a rush at the moment, \'My dear! I shall remember it in her life, and had come to the porpoise, \"Keep back, please: we don\'t want to see some meaning.'),(2,'Alaina Bayer V','Clifford Gibson',3,'2017-05-06 10:57:25','2017-05-06 10:57:25','Rabbit say to itself in a pleased tone. \'Pray don\'t trouble yourself to say whether the blows hurt it or not. \'Oh, PLEASE mind what you\'re at!\" You know the way down one side and then Alice put down.'),(3,'Miss Willie Funk Jr.','Arlie Labadie',2,'2017-05-06 10:57:25','2017-05-06 10:57:25','Once more she found herself lying on the look-out for serpents night and day! Why, I do it again and again.\' \'You are old,\' said the young Crab, a little glass table. \'Now, I\'ll manage better this.'),(5,'Joshua Wisozk Jr.','Prof. Rory Kuvalis',4,'2017-05-06 11:00:22','2017-05-06 11:00:22','She had just begun to repeat it, but her voice sounded hoarse and strange, and the little golden key and hurried upstairs, in great fear lest she should meet the real Mary Ann, what ARE you talking.'),(6,'Rodrick Cremin','Isobel Smith',2,'2017-05-06 11:00:22','2017-05-06 11:00:22','There was exactly three inches high). \'But I\'m not myself, you see.\' \'I don\'t even know what \"it\" means.\' \'I know SOMETHING interesting is sure to happen,\' she said this, she looked back once or.'),(7,'Miss Mikayla Muller','Prof. Fanny Feest',1,'2017-05-06 11:00:22','2017-05-06 11:00:22','I do,\' said the Lory hastily. \'I thought you did,\' said the Cat went on, turning to the jury. \'Not yet, not yet!\' the Rabbit hastily interrupted. \'There\'s a great hurry; \'this paper has just been.'),(8,'Hector Paucek','game-6.jpg',5,'2017-05-06 11:00:22','2017-05-11 06:23:23','I\'m sure I have ordered\'; and she was considering in her French lesson-book. The Mouse looked at the Hatter, and he went on, \'--likely to win, that it\'s hardly worth while finishing the game.\' The.'),(9,'Ms. Nikki Renner IV','Prof. Addison Nienow I',4,'2017-05-06 11:00:22','2017-05-06 11:00:22','Dormouse. \'Don\'t talk nonsense,\' said Alice loudly. \'The idea of having nothing to what I used to it as she was small enough to look about her other little children, and everybody else. \'Leave off.'),(10,'Dr. Margaretta Effertz II','Dr. Ladarius Breitenberg PhD',3,'2017-05-06 11:00:22','2017-05-06 11:00:22','SOMEBODY ought to be sure; but I think you\'d better leave off,\' said the Queen. \'It proves nothing of the table. \'Nothing can be clearer than THAT. Then again--\"BEFORE SHE HAD THIS FIT--\" you never.'),(11,'Kristoffer Considine','Chelsie Ziemann',3,'2017-05-06 11:00:22','2017-05-06 11:00:22','Come here directly, and get ready to sink into the wood. \'If it had come back with the Lory, with a table set out under a tree in the pool, and the Mock Turtle yet?\' \'No,\' said Alice. \'Come, let\'s.'),(12,'Yoshiko Schoen','game-7.jpg',5,'2017-05-06 11:00:23','2017-05-11 06:24:05','It was opened by another footman in livery, with a whiting. Now you know.\' \'I don\'t know where Dinn may be,\' said the Cat. \'I don\'t know the song, she kept on good terms with him, he\'d do almost.'),(13,'Mrs. Johanna Jacobi III','game-4.jpg',5,'2017-05-06 11:00:23','2017-05-11 06:25:12','Alice was very like a sky-rocket!\' \'So you think you\'re changed, do you?\' \'I\'m afraid I\'ve offended it again!\' For the Mouse to Alice as he spoke. \'UNimportant, of course, to begin with.\' \'A.'),(14,'Dr. Merlin Muller V','Piper Ledner',3,'2017-05-06 11:00:23','2017-05-06 11:00:23','Gryphon, and all the unjust things--\' when his eye chanced to fall a long argument with the name \'W. RABBIT\' engraved upon it. She felt that it signifies much,\' she said to a snail. \"There\'s a.'),(15,'Elliott Schumm','Gillian Cartwright',1,'2017-05-06 11:00:23','2017-05-06 11:00:23','The executioner\'s argument was, that her idea of the hall; but, alas! the little door, had vanished completely. Very soon the Rabbit came up to her feet, they seemed to rise like a tunnel for some.'),(16,'Sanford Upton','Mrs. Marie Bashirian IV',3,'2017-05-06 11:00:23','2017-05-06 11:00:23','Alice\'s, and they sat down again into its face was quite silent for a dunce? Go on!\' \'I\'m a poor man, your Majesty,\' said the Mouse, sharply and very soon came upon a neat little house, and found.'),(17,'Marquis Smith V','Yoshiko Green',1,'2017-05-06 11:00:23','2017-05-06 11:00:23','Alice indignantly, and she trembled till she had put on your head-- Do you think, at your age, it is right?\' \'In my youth,\' Father William replied to his ear. Alice considered a little snappishly..'),(18,'Prof. Zelda Hirthe IV','Levi Gislason MD',3,'2017-05-06 11:00:23','2017-05-06 11:00:23','As soon as there was generally a ridge or furrow in the middle, being held up by wild beasts and other unpleasant things, all because they WOULD go with Edgar Atheling to meet William and offer him.'),(19,'Kaden Hermiston','game-8.jpg',5,'2017-05-06 11:00:23','2017-05-11 06:25:34','Those whom she sentenced were taken into custody by the time she found herself safe in a fight with another dig of her age knew the meaning of it at all. \'But perhaps it was an uncomfortably sharp.'),(20,'Adella Green II','Lilliana Welch IV',2,'2017-05-06 11:00:23','2017-05-06 11:00:23','Alice, and tried to speak, and no room to open her mouth; but she did not like to be told so. \'It\'s really dreadful,\' she muttered to herself, and nibbled a little worried. \'Just about as it was.'),(21,'Clementina Daugherty','game-9.jpg',5,'2017-05-06 11:00:23','2017-05-11 06:24:56','Alice had no very clear notion how delightful it will be the right way to hear it say, as it can talk: at any rate, there\'s no use in saying anything more till the eyes appeared, and then nodded..'),(22,'Ryder Rempel','game-3.jpg',5,'2017-05-06 11:00:23','2017-05-11 06:24:39','Mock Turtle: \'why, if a fish came to ME, and told me you had been wandering, when a cry of \'The trial\'s beginning!\' was heard in the sky. Alice went on, \'--likely to win, that it\'s hardly worth.'),(23,'Prof. Richie Wiegand MD','Serenity Berge',1,'2017-05-06 11:00:23','2017-05-06 11:00:23','I almost think I can kick a little!\' She drew her foot slipped, and in THAT direction,\' waving the other queer noises, would change to tinkling sheep-bells, and the turtles all advance! They are.'),(24,'Lydia Wilkinson','Miss Casandra Reichert Sr.',1,'2017-05-06 11:00:24','2017-05-06 11:00:24','OUTSIDE.\' He unfolded the paper as he spoke, and the Mock Turtle went on in the air. \'--as far out to be a very good advice, (though she very seldom followed it), and sometimes shorter, until she.'),(25,'Fernando Mills','Robb Grady',1,'2017-05-06 11:00:24','2017-05-06 11:00:24','The door led right into a tree. By the use of this ointment--one shilling the box-- Allow me to sell you a present of everything I\'ve said as yet.\' \'A cheap sort of mixed flavour of cherry-tart,.'),(26,'Karl Miller','Golden Wunsch',1,'2017-05-06 11:00:24','2017-05-06 11:00:24','Alice. \'It goes on, you know,\' said the Gryphon: \'I went to school every day--\' \'I\'VE been to a snail. \"There\'s a porpoise close behind us, and he\'s treading on her lap as if he would not open any.'),(27,'Elody Sipes','Boyd Sipes',3,'2017-05-06 11:00:24','2017-05-06 11:00:24','Alice thoughtfully: \'but then--I shouldn\'t be hungry for it, he was obliged to have finished,\' said the Mock Turtle at last, they must needs come wriggling down from the Gryphon, half to itself,.'),(28,'Twila Schoen I','Timothy Weber',3,'2017-05-06 11:00:24','2017-05-06 11:00:24','I\'m Mabel, I\'ll stay down here with me! There are no mice in the air. She did not wish to offend the Dormouse shall!\' they both bowed low, and their curls got entangled together. Alice laughed so.'),(29,'Prof. Sheridan Gleichner II','Prof. Trever Roob MD',4,'2017-05-06 11:00:24','2017-05-06 11:00:24','Alice. \'Now we shall get on better.\' \'I\'d rather not,\' the Cat said, waving its tail about in the house, \"Let us both go to law: I will tell you just now what the name again!\' \'I won\'t have any.'),(30,'Kyleigh Rodriguez','Paris Rempel',2,'2017-05-06 11:00:24','2017-05-06 11:00:24','Footman went on in these words: \'Yes, we went to him,\' the Mock Turtle; \'but it doesn\'t matter a bit,\' she thought at first she thought it would be quite as safe to stay in here any longer!\' She.'),(31,'Dr. Geo Miller','Prof. Roderick Kuhic',3,'2017-05-06 11:00:24','2017-05-06 11:00:24','Alice: he had a consultation about this, and Alice guessed in a great many more than nine feet high. \'Whoever lives there,\' thought Alice, \'as all the time they were getting so far off). \'Oh, my.'),(32,'Marlin Lesch','Everette Goyette',5,'2017-05-06 11:00:24','2017-05-06 11:00:24','Alice remarked. \'Oh, you foolish Alice!\' she answered herself. \'How can you learn lessons in the pool, \'and she sits purring so nicely by the soldiers, who of course was, how to set them free,.'),(33,'Alta Cummerata','Adrianna Franecki',2,'2017-05-06 11:00:24','2017-05-06 11:00:24','Bill\'s got the other--Bill! fetch it back!\' \'And who is to give the prizes?\' quite a chorus of \'There goes Bill!\' then the other, and growing sometimes taller and sometimes shorter, until she had.'),(34,'Julien Mitchell','Domenico Flatley',2,'2017-05-06 11:00:24','2017-05-06 11:00:24','I grow at a king,\' said Alice. \'Did you say things are worse than ever,\' thought the whole head appeared, and then hurried on, Alice started to her lips. \'I know what \"it\" means.\' \'I know what you.'),(35,'mygame','game-1.jpg',5,'2017-05-10 07:46:33','2017-05-10 07:46:33','Foreach работает только с массивами и объектами, и будет генерировать ..... one(): - This function takes an array as argument ($arr). - The array function ...... another foreach through $allValues, which together might be time-consuming.'),(36,'hisgame','game-2.jpg',5,'2017-05-10 07:55:39','2017-05-10 07:55:39','Часто нужно пройти по всем элементам массива PHP и провести ... В данном уроке мы рассмотрим конструкцию foreach при ...'),(37,'ourgame','game-5.jpg',5,'2017-05-10 15:41:32','2017-05-10 15:58:52','Foreach работает только с массивами и объектами, и будет генерировать ..... one(): - This function takes an array as argument ($arr). - The array function ...... another foreach through $allValues, which together might be time-consuming.');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Action','Good games',NULL,NULL),(2,'RPG','Good games',NULL,NULL),(3,'Quest','For adults',NULL,NULL),(4,'Online','For adults',NULL,NULL),(5,'Strategy','Good games',NULL,NULL),(7,'krak-krak','for children','2017-05-08 11:59:45','2017-05-08 11:59:45');
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
  `goodname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allgood_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `goods_allgood_id_foreign` (`allgood_id`),
  CONSTRAINT `goods_allgood_id_foreign` FOREIGN KEY (`allgood_id`) REFERENCES `allgoods` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_05_02_174343_create_categories_table',2),(4,'2017_05_02_174855_create_allgoods_table',3),(5,'2017_05_03_081559_create_orders_table',4),(6,'2017_05_06_121315_create_allgood_orders_table',5),(7,'2017_05_06_152036_add_description_to_allgoods_table',6),(8,'2017_05_10_115534_drop_price_from_allgoods_table',7),(9,'2017_05_10_220908_drop_dorder_from_orders_table',8),(10,'2017_05_10_222425_add_goodname_to_allgood_orders_table',9),(11,'2017_05_10_223634_create_goods_table',10),(12,'2017_05_11_015635_add_user_id_to_goods_table',11);
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
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,2,'2017-05-11 03:19:02','2017-05-11 03:19:02'),(2,2,'2017-05-11 06:40:59','2017-05-11 06:40:59'),(3,2,'2017-05-11 06:50:44','2017-05-11 06:50:44');
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Irina Mozes','msnorris2017@yandex.ru','$2y$10$TDgygFLl10QbrZ0T0wZhuOg9kE3IBJTbAobV8gRe/5vD6mG1geLVi',NULL,'fjDBG54M9bvMciWMryRDkaRREkTkmUWPkUeuiBy49nRQ6aDaCz1dKuaa7iRU','2017-05-02 20:50:08','2017-05-02 20:50:08'),(2,'cat_1','cat1@yandex.ru','$2y$10$9Umhrns0Kr731x7fjDzCieilOB/iTSrrX3SZu8OPN/banXZJXShmy',NULL,'4200QcI74CO7OmJprp0d63zJ97lFFxVF8fsr31DpFOrtSfmFTCyuClaL209j','2017-05-02 20:55:40','2017-05-02 20:55:40'),(3,'cat_2','cat2@yandex.ru','$2y$10$kuN4BRxYPMMl6ssWgZMYLuOtV9yII3lnZp1aIjw5xOFVG/dZiE/Zm',NULL,'uv80777TgVVgR7aDS2PQoOMxNt8eMoFUZyoBEXmJ4HbzWAaDaRWStQkhtGHR','2017-05-02 22:02:35','2017-05-02 22:02:35'),(4,'cat_3','cat3@yandex.ru','$2y$10$APXh7vJRQUb3WgwQDdQSm.adraiXw65oGagOpivxLKp41cp17fuo6',NULL,'J4B3f4xL8Fn4CiauIOUp9ggno9Z4lmGqgd1Z7sgQYMWrDSbdSqJfMSdRJ8Wx','2017-05-02 22:18:21','2017-05-02 22:18:21'),(5,'cat_4','cat4@yandex.ru','$2y$10$3yHbuTZSvKEUCdgOeA8K8OOILAGTzk.CwaxyFdPrOD74vm9Tgk1e.',1,'7LNuZisNLhcBG4FbRFKgd1CqOPQvoxmWbX4a2KoLajFE5Yv10ZOkO5fiX0mv','2017-05-02 22:43:48','2017-05-02 22:43:48'),(6,'cat_5','cat5@yandex.ru','$2y$10$g/VWYhiv6qOU8/73eZ4ay.DktyGFdVSLP2pvkDa1WZ279w8sBgnva',1,'EgUP8T9lizSBQYphOnDblycbBRSj2hOhFijSkIa5iP40kL7tqJgT2AUWaQGS','2017-05-02 23:01:42','2017-05-02 23:01:42'),(7,'cat_6','cat6@yandex.ru','$2y$10$hACE7TVJJTwHraKMBcN.uOQA7vINTftBdikbls6g8U0441bcqDgoa',1,'bpWxZYzP2zk7iYnkDXqbAQlMYr8kwtdGGpd6K2O3N4rrW3KBtxa8qs4gCcwY','2017-05-03 00:13:08','2017-05-03 00:13:08'),(8,'cat_7','cat7@yandex.ru','$2y$10$Hfp6wckT2LRrZpTbS3qcNu9zXSvw/iRP5dJJ5vr23lZVnUWHq5k6S',1,'FALKkkYUm2h98mVimJY0ZaSev1cTutYRuuCIn61VKZIRvuvWNy5xLs8WspZr','2017-05-03 00:22:24','2017-05-03 00:22:24'),(9,'cat_8','cat8@yandex.ru','$2y$10$SxLF67nKktmK1g.rAXANTO9bNucvKgTsCCAPG4jIG4zZ23CSIYVUK',0,'E2yErYcDES0uJ2OWY0AwVaQxrO8EVUZGnS5bk8PRXsOz5w65LtZYTuBhHzs4','2017-05-03 00:24:36','2017-05-03 00:24:36'),(10,'cat_9','cat9@yandex.ru','$2y$10$15qRF/lBeVfz.QjK632LtuLm3BJ0wH8Vu12CSN0P4VZYG/jr9rOri',1,'INJBtWBb6XQtTbAcALnPlh6nzocFmZenno4EiU4tsI25iFDCXBEuXnPWHRjy','2017-05-03 01:47:05','2017-05-03 01:47:05'),(11,'cat_10','cat10@yandex.ru','$2y$10$iQWN/nKK3s1Fv/VrfSyJvOwG0rKmoy7mMPjZZNHZGYGLTf40ld/rS',1,'vZ7mfhCKAT4G0lWLCrY5bDfAbNpiPTb5HfrgHOV1m681l6WUCsEwWg46RnCA','2017-05-03 02:27:31','2017-05-03 02:27:31'),(12,'cat_11','cat1@yandex.ru1','$2y$10$Z6YStgTFm7WUQT4.4JgyjuVU8cdbyO78JunDc71xcATKnp2OFTbX2',0,'I7kpGkqpXxUAS5lsbEMwg0i2C1Ni1MWbHGxsZkv3DpmEttaNIBjeHIFlHWde','2017-05-03 02:33:09','2017-05-03 02:33:09'),(13,'cat_12','cat12@yandex.ru','$2y$10$hnuxthwtoU2DRvpjh6G49uKigLx5ejJywGHOZVtFJrTsplAIO5VX2',1,'cMK1Tej4yDSonBhAvj3lhVHJDLdJRx91L1wCUMIJWxtdopRkoBzH3purqk8Q','2017-05-08 09:45:48','2017-05-08 09:45:48');
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

-- Dump completed on 2017-05-11 17:31:32
