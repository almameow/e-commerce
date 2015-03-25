CREATE DATABASE  IF NOT EXISTS `ecommerce` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ecommerce`;
-- MySQL dump 10.13  Distrib 5.5.24, for osx10.5 (i386)
--
-- Host: 127.0.0.1    Database: ecommerce
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  `inventory_quantity` bigint(20) DEFAULT NULL,
  `sold_quantity` bigint(20) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Products_Categories_idx` (`category_id`),
  CONSTRAINT `fk_Products_Categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Latte','Latte Milk Tea',4.99,10,1,NULL,NULL,NULL,1),(2,'Grass Jelly','Grass Jelly Milk Tea',3.99,20,4,NULL,NULL,NULL,1),(3,'Honeydew','Honeydew Milk Tea',9.99,13,0,NULL,NULL,NULL,1),(4,'Jasmine','Jasmine Milk Tea',6.99,3,9,NULL,NULL,NULL,1),(5,'Strawberry','Strawberry Milk Tea',7.99,9,3,NULL,NULL,NULL,1),(6,'Taro','Taro Milk Tea',4.99,33,2,NULL,NULL,NULL,1),(7,'Thai Tea','Thai Tea Milk Tea',3.99,21,43,NULL,NULL,NULL,1),(8,'Banana','Banana Smoothie',6.99,4,1,NULL,NULL,NULL,3),(9,'Coconut','Coconut Smoothie',8.99,9,3,NULL,NULL,NULL,3),(10,'Mango','Mango Smoothie',8.99,3,1,NULL,NULL,NULL,3),(11,'Lychee','Lychee Smoothie',9.99,44,33,NULL,NULL,NULL,3),(12,'Red Bean','Red Bean Smoothie',6.99,32,2,NULL,NULL,NULL,3),(13,'Strawberry','Strawberry Smoothie',9.99,98,22,NULL,NULL,NULL,3),(14,'Black Tea','Black Tea',3.99,2,1,NULL,NULL,NULL,2),(15,'Cappuccino','Cappuccino',5.99,32,23,NULL,NULL,NULL,2),(16,'Coffee','Coffee',0.99,98,23,NULL,NULL,NULL,2),(17,'Green Tea','Green Tea',4.99,32,2,NULL,NULL,NULL,2),(18,'Hot Chocolate','Hot Chocolate',3.99,32,23,NULL,NULL,NULL,2),(19,'Latte','Latte',6.99,98,5,NULL,NULL,NULL,2),(20,'Mocha','Mocha',6.99,46,45,NULL,NULL,NULL,2);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-23 16:52:00
