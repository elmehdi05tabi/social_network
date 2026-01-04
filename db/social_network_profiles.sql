-- MySQL dump 10.13  Distrib 8.0.43, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: social_network
-- ------------------------------------------------------
-- Server version	8.0.43

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
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (2,'Jackeline','Kautzer','marta51@prohaska.com','Velit cumque aliquid aut laborum. Inventore distinctio dolores laboriosam corrupti hic animi.','profile/profile.png','$2y$12$1zhDyd0cRjMf8Dmsfdto/e70VpaPbk8GJHS.JwcXx86R2lBrb06XG','2025-12-26 13:09:21','2025-12-26 13:09:21',NULL,NULL),(3,'Enrico','Denesik','erunolfsdottir@satterfield.org','Possimus dolorem et repellendus corrupti at laudantium ut et. Qui voluptatem iusto eius saepe tenetur aut. Hic aliquid iusto aut amet porro.','profile/profile.png','$2y$12$NIgV05CyugwuaLj3aqIWReYpV4iBeIGAB6jZFJg2ypJhDZbgs4e0a','2025-12-26 13:09:21','2025-12-26 13:09:21',NULL,NULL),(4,'Haleigh','Moen','eloise.mann@abshire.biz','Nemo voluptatem aut qui ex. Sed aliquam dolorum omnis ut. Aut veritatis qui in voluptatem. Eum est voluptatum labore impedit tempora et distinctio. Veniam illum ut adipisci quisquam quia enim et.','profile/profile.png','$2y$12$rm7p6m4pJeDuwPczX5q6c.Pv9RC5XkCNf.2zhRV9SIR86O9twL7JC','2025-12-26 13:09:21','2025-12-26 13:09:21',NULL,NULL),(5,'Tre','Mohr','thayes@kemmer.com','Inventore doloribus eos et eveniet quidem sit vitae. Quo vel sit veritatis et voluptate.','profile/profile.png','$2y$12$cPHEwklh6yyzCKpKRjHP5u9/Ad8yMsL1MSgIu3o.Xpq54X0fX1h3y','2025-12-26 13:09:21','2025-12-26 13:09:21',NULL,NULL),(6,'Llewellyn','Kreiger','wgusikowski@hotmail.com','Id ut laudantium maiores sed. Reiciendis consequatur id qui cumque. Mollitia ad eos modi voluptas asperiores distinctio sunt. Nam deserunt assumenda natus tempora tempore optio.','profile/profile.png','$2y$12$oWErjyIl2K5FPD0zeQNfVO0UpxJIms0dZYTvuqEuDxz3qNDrtBDqu','2025-12-26 13:09:21','2025-12-26 13:09:21',NULL,NULL),(7,'Dorthy','Klocko','wkerluke@yahoo.com','Aut debitis quisquam sit suscipit veniam fugiat. Quae voluptatem eos recusandae nostrum qui. Rerum saepe totam libero vitae sint est illo.','profile/profile.png','$2y$12$14CgrThgaIiYxeBrgrA5cOsCd4Sb/5kU6q036Xb71GmNI9eW6IWdK','2025-12-26 13:09:21','2025-12-26 13:09:21',NULL,NULL),(8,'Travis','Kuphal','carlie.hammes@daugherty.net','Id mollitia sapiente illo alias quia deserunt. Maxime porro ut vel. Non perspiciatis asperiores suscipit sint qui ut. Alias sed animi quod voluptatem ut et. Tenetur mollitia modi explicabo.','profile/profile.png','$2y$12$axGS15fkfTZXEy5zCqH3EOu1m1GWkWSu2neftkxCi3Mlf4VDktLvG','2025-12-26 13:09:21','2025-12-26 13:09:21',NULL,NULL),(9,'Aisha','Hills','nicole84@raynor.biz','Ipsum et aliquid quod corrupti voluptas. Provident dignissimos autem eum.','profile/profile.png','$2y$12$U6YJXioh8J/n6lSCoSM55OAFxloQE7pgiqJP0Jp0a.yFv1Cvo95LK','2025-12-26 13:09:21','2025-12-26 13:09:21',NULL,NULL),(10,'Erna','Huels','vortiz@wisozk.info','Sunt quis aut dolores aliquid facere quod. Consequatur qui quam quia unde consequatur dolore quaerat ea.','profile/profile.png','$2y$12$CQXwkQ3s7AzuuXpUhaOmB.vTVLifDyFo4lF/GuW/ymY17eJLCyhee','2025-12-26 13:09:21','2025-12-26 13:09:21',NULL,NULL),(11,'el mehdi','tabi','elmehditabi0@gmail.com','el mehdi tabi 20 , settat morocco','profile/WOPjf7ucw3T56v79zcKgcZFfEFiRlFAxHTdwg9As.jpg','$2y$12$J6N46FczGG.0li4aGF9zI.sndrwUC8uLCD7HedsaNG8zByCI/ci4u','2025-12-26 13:10:07','2025-12-26 13:10:23',NULL,'2025-12-26 01:23:10');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-04 12:35:27
