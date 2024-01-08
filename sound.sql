CREATE DATABASE  IF NOT EXISTS `music` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `music`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: music
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artist` (
  `Artist_id` int NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(100) DEFAULT NULL,
  `artist_image` varchar(100) DEFAULT NULL,
  `genre_id` int DEFAULT NULL,
  PRIMARY KEY (`Artist_id`),
  KEY `genre_id` (`genre_id`),
  CONSTRAINT `artist_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artist`
--

LOCK TABLES `artist` WRITE;
/*!40000 ALTER TABLE `artist` DISABLE KEYS */;
INSERT INTO `artist` VALUES (1,'Arjitsingh','images/Arjith singh.jpg',1),(2,'Asimazhar','images/Asim Azhar1.jpg',1),(3,'Atifaslam','images/Atif Aslam1.jpg',1),(4,'kaifi khalil','images/Kaifi khalil1.jpg',1),(5,'Aima Baig','images/Aima Baig.jpg',1),(6,'Ali Zafar','images/Ali Zafar.jpg',1),(7,'Boys','images/aur.jpg',1),(8,'Abdul Hannan','images/abdul hannan.jpg',1);
/*!40000 ALTER TABLE `artist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `c_name` varchar(20) DEFAULT NULL,
  `c_email` varchar(200) DEFAULT NULL,
  `c_subject` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `genre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (1,'song');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `r_id` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin'),(2,'user');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `song`
--

DROP TABLE IF EXISTS `song`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `song` (
  `song_id` int NOT NULL AUTO_INCREMENT,
  `song_name` varchar(100) DEFAULT NULL,
  `song_file` varchar(10000) DEFAULT NULL,
  `song_image` varchar(100) DEFAULT NULL,
  `genre_id` int DEFAULT NULL,
  `Artists_id` int DEFAULT NULL,
  `years` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`song_id`),
  KEY `genre_id` (`genre_id`),
  KEY `Artists_id` (`Artists_id`),
  CONSTRAINT `song_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`),
  CONSTRAINT `song_ibfk_2` FOREIGN KEY (`Artists_id`) REFERENCES `artist` (`Artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `song`
--

LOCK TABLES `song` WRITE;
/*!40000 ALTER TABLE `song` DISABLE KEYS */;
INSERT INTO `song` VALUES (12,'Mujhe Pyar Hua Tha','audio/Mujhe Pyaar Hua Tha Song Kaifi Khalil.mp3','images/mjht.jpg',1,4,'2022'),(13,'Tu hai kahan','audio/Tu-Hai-Kahan.mp3','images/tu hai kahan.jpg',1,7,'2023'),(14,'Habibi','audio/Habibi.mp3','images/habibi.jpg',1,2,'2022'),(15,'Jhoom','audio/Jhoom (Remix) Song Ali Zafar.mp3','images/jhoom.jpg',1,6,'2011'),(16,'Tera Hawale','audio/Tere Hawaale.mp3','images/tera hawale.jpg',1,1,'2022'),(17,'kesariya','audio/Kesariya.mp3','images/kesariya.jpg',1,1,'2023'),(18,'Zindagi','audio/Zindagi Atif Aslam 2023 Qateel Shifai.mp3','images/zindagi.jpg',1,3,'2023'),(19,'Jo Tu Na Mila','audio/Jo tu na Mila 20 Song By Asim Azhar.mp3','images/jo tu na mila.jpg',1,2,'2018'),(20,'Tum Tum','audio/Tum Tum.mp3','images/tum tum.jpg',1,2,'2020'),(21,'Tu mera na hua ','audio/Tu Mera Na Hua Song Aima Baig.mp3','images/tu mera na hua.jpg',1,5,'2023'),(22,'Shakar Wandan Re','audio/Shakar Wandaan.mp3','images/shakar wandan re.jpg',1,7,'2018'),(23,'Irraday','audio/Iraaday Song Abdul Hannan.mp3','images/irraday.jpg',1,8,'2022');
/*!40000 ALTER TABLE `song` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  `confirm_password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com','123',1,NULL),(2,'mubashir','Mubashiraptech21@gmail.com','1234',2,NULL),(3,'mubashir','mubashir@gmail.com','123',2,'123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `video` (
  `video_id` int NOT NULL AUTO_INCREMENT,
  `video_name` varchar(20) DEFAULT NULL,
  `video_file` varchar(15999) DEFAULT NULL,
  `genre_id` int DEFAULT NULL,
  `Artists_id` int DEFAULT NULL,
  `years` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`video_id`),
  KEY `genre_id` (`genre_id`),
  KEY `Artists_id` (`Artists_id`),
  CONSTRAINT `video_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`),
  CONSTRAINT `video_ibfk_2` FOREIGN KEY (`Artists_id`) REFERENCES `artist` (`Artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (9,'Larsha Pekhawar','images/Ali zafar 2.mp4',1,6,'2021'),(10,'Ve Mahiya','images/Ali zafar.mp4',1,6,'2022'),(11,'Dard','images/Asim Azhar1.mp4',1,2,'2023'),(12,'Bulleya','images/Asim Azhar2.mp4',1,2,'2023'),(13,'Kahani Suno 2.0','images/Kaifi khalil 1.mp4',1,4,'2021'),(14,'Mansoob','images/Kaifi khalil 2.mp4',1,4,'2023'),(15,'kesariya','images/BRAHMĀSTRA.mp4',1,1,'2022');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-09  1:35:23
