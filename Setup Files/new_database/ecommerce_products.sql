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
  `category` varchar(45) DEFAULT NULL,
  `inventory_quantity` bigint(20) DEFAULT NULL,
  `sold_quantity` bigint(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Black Tea','Black Tea',3,'hot drinks',21,2,'/hot_drinks/black_tea/','0000-00-00 00:00:00',NULL),(2,'Cappuccino','Cappuccino',6,'hot drinks',41,8,'/hot_drinks/cappuccino/',NULL,NULL),(3,'Coffee','Coffee',1,'hot drinks',89,88,'/hot_drinks/coffee/',NULL,NULL),(4,'Green Tea','Green Tea',5,'hot drinks',90,8,'/hot_drinks/green_tea/',NULL,NULL),(5,'Hot Chocolate','Hot Chocolate',5,'hot drinks',9,8,'/hot_drinks/hot_chocolate/',NULL,NULL),(6,'Latte','Latte',7,'hot drinks',89,87,'/hot_drinks/latte/',NULL,NULL),(7,'Mocha','Mocha',7,'hot drinks',34,3,'/hot_drinks/mocha/',NULL,NULL),(8,'Coffee','Coffee Milk Tea',6,'milk tea',213,3,'/milk_tea/coffee/',NULL,NULL),(9,'Grass Jelly','Grass Jelly Milk Tea',5,'milk tea',33,213,'/milk_tea/grass_jelly/',NULL,NULL),(10,'Honeydew','Honeydew Milk Tea',10,'milk tea',35,54,'/milk_tea/honeydew/',NULL,NULL),(11,'Jasmine','Jasmine Milk Tea',7,'milk tea',321,21,'/milk_tea/jasmine/',NULL,NULL),(12,'Latte','Latte Milk Tea',7,'milk tea',21,12,'/milk_tea/latte/',NULL,NULL),(13,'Strawberry','Strawberry Milk Tea',10,'milk tea',33,2,'/milk_tea/strawberry/',NULL,NULL),(14,'Taro','Taro Milk Tea',5,'milk tea',123,1,'/milk_tea/taro/',NULL,NULL),(15,'Thai Tea','Thai Tea Milk Tea',4,'milk tea',32,4,'/milk_tea/thai_tea/',NULL,NULL),(16,'Banana','Banana Smoothie',7,'smoothies',32,44,'/smoothies/banana/',NULL,NULL),(17,'Coconut','Coconut Smoothie',9,'smoothies',48,57,'/smoothies/coconut/',NULL,NULL),(18,'Lychee','Lychee Smoothie',10,'smoothies',45,66,'/smoothies/lychee/',NULL,NULL),(19,'Mango','Mango Smoothie',9,'smoothies',48,77,'/smoothies/mango/',NULL,NULL),(20,'Red Bean','Red Bean Smoothie',7,'smoothies',87,66,'/smoothies/red_bean/',NULL,NULL),(21,'Strawberry','Strawberry Smoothie',10,'smoothies',76,77,'/smoothies/strawberry/',NULL,NULL);
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

-- Dump completed on 2015-03-24 14:51:07
