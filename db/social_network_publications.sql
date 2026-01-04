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
-- Table structure for table `publications`
--

DROP TABLE IF EXISTS `publications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `publications_profile_id_foreign` (`profile_id`),
  CONSTRAINT `publications_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publications`
--

LOCK TABLES `publications` WRITE;
/*!40000 ALTER TABLE `publications` DISABLE KEYS */;
INSERT INTO `publications` VALUES (1,'Miss','Reprehenderit blanditiis magnam aut. Mollitia eaque vel aliquid animi eum rem. Deserunt et consequatur et unde.','',8,'2025-12-26 13:09:21','2025-12-26 13:09:21'),(2,'Prof.','Temporibus commodi molestiae voluptas animi beatae. Eaque deserunt delectus molestiae quia ipsa tempore repudiandae. Tempora aut natus culpa repellat omnis. Animi ut ipsum dolor veniam impedit qui.','',4,'2025-12-26 13:09:21','2025-12-26 13:09:21'),(3,'Mr.','Natus expedita et aut voluptatibus dolorum ut libero atque. Eos quis impedit provident laborum. Iusto eaque error dicta nulla. Hic libero similique saepe necessitatibus totam provident.','',3,'2025-12-26 13:09:21','2025-12-26 13:09:21'),(4,'Miss','Iusto ratione harum voluptates cumque. Enim esse aut magnam odit et esse et. Repellendus modi beatae similique fuga quae et qui. Non voluptates enim molestiae quasi nobis.','',9,'2025-12-26 13:09:21','2025-12-26 13:09:21'),(5,'Dr.','Voluptates non possimus aut. Accusamus voluptas qui fuga voluptas officiis. Quia dolore ut ea explicabo. Eum architecto eum doloremque et.','',3,'2025-12-26 13:09:21','2025-12-26 13:09:21'),(6,'Dr.','Et provident exercitationem aut harum quo. Quod nihil quisquam et temporibus sit rerum maiores. Repellendus aut ullam voluptatum placeat vel atque et aut.','',8,'2025-12-26 13:09:21','2025-12-26 13:09:21'),(7,'Dr.','Consequatur possimus deleniti quo aspernatur. Nihil iure sint quia accusantium. Ullam quaerat itaque qui et iste qui earum. Ex sed iure repellendus numquam sapiente.','',5,'2025-12-26 13:09:21','2025-12-26 13:09:21'),(8,'Prof.','Aut itaque voluptate natus sapiente recusandae fuga eos officia. Necessitatibus quo eveniet ut veritatis labore perspiciatis dignissimos. Maiores fugiat distinctio voluptas.','',6,'2025-12-26 13:09:21','2025-12-26 13:09:21'),(9,'Prof.','Iste deleniti quibusdam possimus qui nisi. Quidem ut dolorum minus nesciunt ut ut ex. Fugit vitae numquam corrupti culpa. Praesentium itaque dignissimos totam aliquid aut sit facilis.','',9,'2025-12-26 13:09:21','2025-12-26 13:09:21'),(10,'Dr.','Aut eum rem unde quae et reiciendis. Consequatur enim modi odio et deleniti sint dolores aut. Sunt non numquam doloribus. Et praesentium nesciunt error doloremque.','',7,'2025-12-26 13:09:21','2025-12-26 13:09:21'),(12,'islam','islam 25-1','profile/PszX8je027HY86vl91ytWew1WM16kp7GLdnEeBXM.jpg',11,'2025-12-26 13:14:35','2025-12-26 13:14:35');
/*!40000 ALTER TABLE `publications` ENABLE KEYS */;
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
