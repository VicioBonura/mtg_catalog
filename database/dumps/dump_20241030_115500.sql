CREATE DATABASE  IF NOT EXISTS `mtg_catalog` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mtg_catalog`;
-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: mtg_catalog
-- ------------------------------------------------------
-- Server version	8.0.40

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
-- Dumping data for table `blocks`
--

LOCK TABLES `blocks` WRITE;
/*!40000 ALTER TABLE `blocks` DISABLE KEYS */;
INSERT INTO `blocks` VALUES (1,'Alara',NULL,NULL),(2,'Invasion',NULL,NULL),(3,'Kamigawa',NULL,NULL),(4,'Lorwyn',NULL,NULL),(5,'Mirrodin',NULL,NULL),(6,'Onslaught',NULL,NULL),(7,'Ravnica',NULL,NULL),(8,'Time Spiral',NULL,NULL),(9,'Urza',NULL,NULL),(10,'Zendikar',NULL,NULL);
/*!40000 ALTER TABLE `blocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `card_color`
--

LOCK TABLES `card_color` WRITE;
/*!40000 ALTER TABLE `card_color` DISABLE KEYS */;
/*!40000 ALTER TABLE `card_color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `card_subtype`
--

LOCK TABLES `card_subtype` WRITE;
/*!40000 ALTER TABLE `card_subtype` DISABLE KEYS */;
/*!40000 ALTER TABLE `card_subtype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `card_type`
--

LOCK TABLES `card_type` WRITE;
/*!40000 ALTER TABLE `card_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `card_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `card_variants`
--

LOCK TABLES `card_variants` WRITE;
/*!40000 ALTER TABLE `card_variants` DISABLE KEYS */;
/*!40000 ALTER TABLE `card_variants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` VALUES (1,'White','W','⚪'),(2,'Blue','U','?'),(3,'Black','B','⚫'),(4,'Red','R','?'),(5,'Green','G','?');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `market_infos`
--

LOCK TABLES `market_infos` WRITE;
/*!40000 ALTER TABLE `market_infos` DISABLE KEYS */;
/*!40000 ALTER TABLE `market_infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_10_26_091015_create_sets_table',1),(5,'2024_10_26_101217_create_cards_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `rarities`
--

LOCK TABLES `rarities` WRITE;
/*!40000 ALTER TABLE `rarities` DISABLE KEYS */;
INSERT INTO `rarities` VALUES (1,'Common'),(4,'Mythic'),(3,'Rare'),(2,'Uncommon');
/*!40000 ALTER TABLE `rarities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('2GVfluNKo0c0TdPC10ZCU3AFXU1GU1ZzrlIJVIjf',NULL,'192.168.1.203','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVDdvbDdWbjdzR1RrRGg0TVBMSTU0V3V5Z0pDb05WR2dQWlMxQ1dBaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xOTIuMTY4LjEuMjAzOjgwMDAvY2FyZHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1730283292),('cRgU1purzkS3hxbKpGXEcAjGC2vmE8LaIdlrTuZX',NULL,'192.168.1.203','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDlGOVlHUGtPZTdmeVFLRzFXZXUzZHVFOVBvdkpQR1ZjV2RudTJCeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xOTIuMTY4LjEuMjAzOjgwMDAvc2V0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1730275347),('Gj3ErBD79C9DwO6a9607aUuMQruOdZFVbXvHnIJ5',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUFZnSkM4TWlES3l6Z0FOZVJobzhsQ2tPQ0dUblJYcnE1WVVUaGpBViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZXRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1730222202),('itqgtg2ZyIS2NOr7PKjU7wYnLhwE1qZD7vVjKsbB',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoicTg3VTl4T3FYS2FCU0VOcE0xaVNYcGFJS3dpVldCYnVyWGppQ3dkbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZXRzL2FkZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1730247023),('ZNHJDvXQRUkSNJRAKiT6T2rwWZoJwTW73EJbxwwp',NULL,'192.168.1.103','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUzc0cnlmZ2JyeWx3M2d1ZzkxRlBJVWo4bXBadzlIcE1UUzZlTDYzViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xOTIuMTY4LjEuMjAzOjgwMDAvc2V0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1730275701);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `set_types`
--

LOCK TABLES `set_types` WRITE;
/*!40000 ALTER TABLE `set_types` DISABLE KEYS */;
INSERT INTO `set_types` VALUES (1,'Core','A yearly Magic core set'),(2,'Expansion','A rotational expansion set in a block'),(3,'Masters','A reprint set that contains no new cards'),(4,'Alchemy','An Arena set designed for Alchemy'),(5,'Masterpiece','Masterpiece Series premium foil cards'),(6,'Arsenal','A Commander-oriented gift set'),(7,'From the Vault','From the Vault gift sets'),(8,'Spellbook','Spellbook series gift sets'),(9,'Premium Deck','Premium Deck Series decks'),(10,'Duel Deck','Duel Decks'),(11,'Draft Innovation','Special draft sets, like Conspiracy and Battlebond'),(12,'Tresure chest','Magic Online treasure chest prize sets'),(13,'Commander','Commander preconstructed decks'),(14,'Planechase','Planechase sets'),(15,'Archenemy','Archenemy sets'),(16,'Vanguard','Vanguard card sets'),(17,'Funny','A funny un-set or set with funny promos (Unglued, Happy Holidays, etc)'),(18,'Starter','A starter/introductory set (Portal, etc)'),(19,'Box','A gift box set'),(20,'Promo','A set that contains purely promotional cards'),(21,'Token','A set made up of tokens and emblems'),(22,'Memorabilia','A set made up of gold-bordered, oversize, or trophy cards that are not legal'),(23,'Minigame','A set that contains minigame card inserts from booster packs');
/*!40000 ALTER TABLE `set_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sets`
--

LOCK TABLES `sets` WRITE;
/*!40000 ALTER TABLE `sets` DISABLE KEYS */;
INSERT INTO `sets` VALUES (1,'atq','Antiquities','atq.svg',2,NULL,102,'1994-03-04','2024-10-29 15:09:02','2024-10-29 15:09:02'),(2,'hml','Homelands','hml.svg',2,NULL,140,'1995-10-01','2024-10-29 15:20:40','2024-10-29 15:20:40'),(3,'ulg','Urza\'s Legacy','ulg.svg',2,9,143,'1999-02-15','2024-10-29 15:36:27','2024-10-29 15:36:27'),(4,'inv','Invasion','inv.svg',2,2,353,'2000-10-02','2024-10-29 15:40:17','2024-10-29 15:40:17'),(5,'pls','Planeshift','pls.svg',2,2,146,'2001-02-05','2024-10-29 15:41:15','2024-10-29 15:41:15'),(6,'ons','Onslaught','ons.svg',2,6,351,'2002-10-07','2024-10-29 15:44:29','2024-10-29 15:44:29'),(8,'lgn','Legions','lgn.svg',2,6,145,'2003-02-03','2024-10-29 15:46:09','2024-10-29 15:46:09'),(9,'scg','Scourge','scg.svg',2,6,143,'2003-05-26','2024-10-29 15:49:20','2024-10-29 15:49:20'),(10,'8ed','Eighth Edition','8ed.svg',1,NULL,710,'2003-07-28','2024-10-29 15:50:16','2024-10-29 15:50:16'),(11,'mrd','Mirrodin','mrd.svg',2,5,306,'2003-10-02','2024-10-29 15:51:38','2024-10-29 15:51:38'),(12,'dst','Darksteel','dst.svg',2,5,165,'2004-02-06','2024-10-29 15:52:43','2024-10-29 15:52:43'),(13,'5dn','Fifth Dawn','5dn.svg',2,5,165,'2004-06-04','2024-10-29 15:53:21','2024-10-29 15:53:21'),(14,'chk','Champions of Kamigawa','chk.svg',2,3,307,'2004-10-01','2024-10-29 16:05:32','2024-10-29 16:05:32'),(15,'bok','Betrayers of Kamigawa','bok.svg',2,3,165,'2005-02-04','2024-10-29 16:06:01','2024-10-29 16:06:01'),(16,'sok','Saviors of Kamigava','sok.svg',2,3,165,'2005-06-03','2024-10-29 16:06:33','2024-10-29 16:06:33'),(17,'9ed','Ninth Edition','9ed.svg',1,NULL,709,'2005-07-29','2024-10-30 07:07:09','2024-10-30 07:07:09');
/*!40000 ALTER TABLE `sets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `subtypes`
--

LOCK TABLES `subtypes` WRITE;
/*!40000 ALTER TABLE `subtypes` DISABLE KEYS */;
INSERT INTO `subtypes` VALUES (1,'Arcane'),(2,'Assassin'),(3,'Aura'),(4,'Avatar'),(5,'Bringer'),(6,'Cat'),(7,'Centaur'),(8,'Demon'),(9,'Dragon'),(10,'Druid'),(11,'Dwarf'),(13,'Elemental'),(14,'Elephant'),(12,'Elf'),(15,'Equipment'),(16,'Faerie'),(17,'Fox'),(18,'Gnome'),(20,'Goblin'),(19,'Golem'),(21,'Hellion'),(22,'Human'),(23,'Kirin'),(24,'Knight'),(25,'Leech'),(26,'Lizard'),(28,'Merfolk'),(27,'Mutant'),(29,'Ooze'),(30,'Orc'),(31,'Rat'),(32,'Rhino'),(33,'Rogue'),(34,'Samurai'),(35,'Skeleton'),(36,'Sliver'),(37,'Soldier'),(38,'Spirit'),(39,'Thopter'),(40,'Troll'),(41,'Undead'),(42,'Vampire'),(43,'Vedalken'),(44,'Warrior'),(45,'Weird'),(46,'Wizard'),(47,'Zombie');
/*!40000 ALTER TABLE `subtypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `supertypes`
--

LOCK TABLES `supertypes` WRITE;
/*!40000 ALTER TABLE `supertypes` DISABLE KEYS */;
INSERT INTO `supertypes` VALUES (1,'Basic'),(2,'Legendary'),(3,'Ongoing'),(4,'Snow'),(5,'World');
/*!40000 ALTER TABLE `supertypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'Artifact'),(2,'Battle'),(3,'Creature'),(4,'Enchantment'),(5,'Instant'),(6,'Land'),(7,'Planeswalker'),(8,'Sorcery');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Test User','test@example.com','2024-10-26 15:12:15','$2y$12$h.9xI60fd5U0XcgaYe2MIOt.HP4DPonHB0VdUztGwVTQpPgRYmJnq','zavGby0dvH','2024-10-26 15:12:16','2024-10-26 15:12:16');
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

-- Dump completed on 2024-10-30 11:55:05
