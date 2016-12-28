/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.16 : Database - voguedose
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`voguedose` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `voguedose`;

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `customers` */

insert  into `customers`(`id`,`name`,`username`,`email`,`password`,`picture`,`remember_token`,`created_at`,`updated_at`) values (1,'Kaniz Fatema','fatema','kaniz.fatema@gmail.com','$2y$10$lmN.Vga3g.TeCcbVG1X7gel1DbLL.QeJezeJoQGOCiqw4uLifIx8C','',NULL,'2016-12-05 08:47:18','2016-12-05 08:47:22');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_12_04_091314_create_stylers_table',2),('2016_12_04_105139_add_username_to_stylers',3),('2016_12_04_113255_create_orders_table',4),('2016_12_04_115544_add_remember_token_to_styler',4),('2016_12_05_064753_add_column_to_orders',5),('2016_12_05_074129_change_field_type_to_orders',6),('2016_12_05_075559_add_more_column_to_orders',7),('2016_12_05_084223_create_customers_table',8),('2016_12_05_102056_change_more_field_type_to_orders',9),('2016_12_19_072224_create_product_table',10);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_age` int(11) NOT NULL,
  `customer_height` int(11) NOT NULL,
  `customer_weight` int(11) NOT NULL,
  `customer_profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clothesInWardrobe` int(11) NOT NULL,
  `currentStyleRate` int(11) NOT NULL,
  `bodyType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `waist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hips` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `top` text COLLATE utf8_unicode_ci NOT NULL,
  `dress` text COLLATE utf8_unicode_ci NOT NULL,
  `bottom` text COLLATE utf8_unicode_ci NOT NULL,
  `topFit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bottomFit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preferCloth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `styleForCloset` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dressCoast` text COLLATE utf8_unicode_ci NOT NULL,
  `topsCoast` text COLLATE utf8_unicode_ci NOT NULL,
  `bottomCoast` text COLLATE utf8_unicode_ci NOT NULL,
  `bagsCoast` text COLLATE utf8_unicode_ci NOT NULL,
  `styleRatings` text COLLATE utf8_unicode_ci NOT NULL,
  `preferStyle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `socialLinks` text COLLATE utf8_unicode_ci NOT NULL,
  `Picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `likedColor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dislikedColor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `additionalBodyOption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `additionalBodyComment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `itemsToReject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `itemsToRejectComment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `requested_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `assign_to` int(11) NOT NULL,
  `assign_by` int(11) NOT NULL,
  `assign_on` datetime NOT NULL,
  `accept_on` datetime NOT NULL,
  `reject_on` datetime NOT NULL,
  `complete_on` datetime NOT NULL,
  `deliver_on` datetime NOT NULL,
  `styler_feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `styler_feedback_on` datetime NOT NULL,
  `admin_feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `admin_feedback_on` datetime NOT NULL,
  `order_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cancel_on` datetime NOT NULL,
  `customer_feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `customer_feedback_on` datetime NOT NULL,
  `target_date` date NOT NULL,
  `process_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `orders` */

insert  into `orders`(`id`,`customer_name`,`customer_age`,`customer_height`,`customer_weight`,`customer_profession`,`clothesInWardrobe`,`currentStyleRate`,`bodyType`,`chest`,`waist`,`hips`,`top`,`dress`,`bottom`,`topFit`,`bottomFit`,`preferCloth`,`styleForCloset`,`dressCoast`,`topsCoast`,`bottomCoast`,`bagsCoast`,`styleRatings`,`preferStyle`,`socialLinks`,`Picture`,`likedColor`,`dislikedColor`,`additionalBodyOption`,`additionalBodyComment`,`itemsToReject`,`itemsToRejectComment`,`phone`,`address`,`comments`,`requested_by`,`updated_at`,`assign_to`,`assign_by`,`assign_on`,`accept_on`,`reject_on`,`complete_on`,`deliver_on`,`styler_feedback`,`styler_feedback_on`,`admin_feedback`,`admin_feedback_on`,`order_id`,`cancel_on`,`customer_feedback`,`customer_feedback_on`,`target_date`,`process_status`,`created_at`) values (1,'ghost',26,170,70,'Student',1,1,'oval','40','34','38','{\"size\":\"L\",\"brand\":\"ZARA\"}','{\"size\":\"M\",\"brand\":\"H&M\"}','{\"size\":\"XL\",\"brand\":\"Love Bonito\"}','Straight','Fitted','A healthy mix of both','\"ELEGANT,GIRLY,GLAMOROUS\"','{\"low\":\"20\",\"high\":\"180\"}','{\"low\":\"20\",\"high\":\"100\"}','{\"low\":\"20\",\"high\":\"150\"}','{\"low\":\"50\",\"high\":\"400\"}','{\"dress_1\":\"Average\",\"dress_2\":\"Wow\",\"dress_3\":\"Wow\",\"dress_4\":\"Wow\",\"dress_5\":\"Nah\",\"dress_6\":\"Average\",\"dress_7\":\"Average\",\"dress_8\":\"Average\",\"dress_9\":\"Average\",\"dress_10\":\"Wow\",\"dress_11\":\"Wow\",\"dress_12\":\"Wow\",\"dress_13\":\"Average\",\"dress_14\":\"Average\",\"dress_15\":\"Average\",\"dress_16\":\"Wow\",\"dress_17\":\"Average\",\"dress_18\":\"Average\",\"dress_19\":\"Average\",\"dress_20\":\"Average\"}','Little – Please incorporate a few new things to my existing choices','{\"IN\":\"\",\"FB\":\"\",\"INS\":\"\",\"PIN\":\"\"}','{\"0\":\"14817959975852699d783df.jpeg\",\"1\":\"14817959975852699d7b93d.jpeg\",\"2\":\"14817959975852699d7d044.jpeg\",\"3\":\"14817959975852699d7e83a.jpeg\"}','','','{\"BigShoulders\":\"NO\",\"SmallShoulders\":\"NO\",\"NarrowHips\":\"NO\",\"WideHips\":\"NO\",\"ThinLegs\":\"NO\",\"ChunkyLegs\":\"NO\",\"FlabbyArms\":\"NO\"}','','{\"Shirts\":\"NO\",\"Blouse\":\"NO\",\"TankTops\":\"NO\",\"MiniSkirts\":\"NO\",\"KneeLengthSkirts\":\"NO\",\"FormalWear\":\"NO\"}','','01826696236','test','',1,'2016-12-18 10:24:13',1,0,'0000-00-00 00:00:00','2016-12-18 10:23:56','2016-12-18 10:24:13','0000-00-00 00:00:00','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','ord425129','0000-00-00 00:00:00','','0000-00-00 00:00:00','1970-01-01',0,'2016-12-15 09:59:57'),(2,'ramjan',26,170,70,'Student',1,1,'oval','40','34','38','{\"size\":\"L\",\"brand\":\"ZARA\"}','{\"size\":\"M\",\"brand\":\"H&M\"}','{\"size\":\"XL\",\"brand\":\"Love Bonito\"}','Straight','Fitted','A healthy mix of both','\"ELEGANT,GIRLY,GLAMOROUS\"','{\"low\":\"20\",\"high\":\"180\"}','{\"low\":\"20\",\"high\":\"100\"}','{\"low\":\"20\",\"high\":\"150\"}','{\"low\":\"50\",\"high\":\"400\"}','{\"dress_1\":\"Average\",\"dress_2\":\"Average\",\"dress_3\":\"Wow\",\"dress_4\":\"Wow\",\"dress_5\":\"Average\",\"dress_6\":\"Nah\",\"dress_7\":\"Nah\",\"dress_8\":\"Wow\",\"dress_9\":\"Average\",\"dress_10\":\"Average\",\"dress_11\":\"Nah\",\"dress_12\":\"Wow\",\"dress_13\":\"Nah\",\"dress_14\":\"Average\",\"dress_15\":\"Wow\",\"dress_16\":\"Wow\",\"dress_17\":\"Average\",\"dress_18\":\"Wow\",\"dress_19\":\"Average\",\"dress_20\":\"Wow\"}','Little – Please incorporate a few new things to my existing choices','{\"IN\":\"\",\"FB\":\"https:\\/\\/facebook.com\\/me.ramjan.ali\",\"INS\":\"\",\"PIN\":\"\"}','{}','','','{\"BigShoulders\":\"NO\",\"SmallShoulders\":\"NO\",\"NarrowHips\":\"NO\",\"WideHips\":\"NO\",\"ThinLegs\":\"NO\",\"ChunkyLegs\":\"NO\",\"FlabbyArms\":\"NO\"}','','{\"Shirts\":\"NO\",\"Blouse\":\"NO\",\"TankTops\":\"NO\",\"MiniSkirts\":\"NO\",\"KneeLengthSkirts\":\"NO\",\"FormalWear\":\"NO\"}','','01826696236','test','',1,'2016-12-20 06:54:04',0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','ord509563','0000-00-00 00:00:00','','0000-00-00 00:00:00','1970-01-01',0,'2016-12-20 06:54:04'),(3,'ramjan',26,170,70,'Student',1,1,'oval','40','34','38','{\"size\":\"L\",\"brand\":\"ZARA\"}','{\"size\":\"M\",\"brand\":\"H&M\"}','{\"size\":\"XL\",\"brand\":\"Love Bonito\"}','Straight','Fitted','A healthy mix of both','\"ELEGANT,GIRLY,GLAMOROUS\"','{\"low\":\"20\",\"high\":\"180\"}','{\"low\":\"20\",\"high\":\"100\"}','{\"low\":\"20\",\"high\":\"150\"}','{\"low\":\"50\",\"high\":\"400\"}','{\"dress_1\":\"Average\",\"dress_2\":\"Wow\",\"dress_3\":\"Wow\",\"dress_4\":\"Wow\",\"dress_5\":\"Nah\",\"dress_6\":\"Nah\",\"dress_7\":\"Nah\",\"dress_8\":\"Wow\",\"dress_9\":\"Nah\",\"dress_10\":\"Wow\",\"dress_11\":\"Wow\",\"dress_12\":\"Average\",\"dress_13\":\"Average\",\"dress_14\":\"Average\",\"dress_15\":\"Average\",\"dress_16\":\"Wow\",\"dress_17\":\"Average\",\"dress_18\":\"Average\",\"dress_19\":\"Wow\",\"dress_20\":\"Wow\"}','Little – Please incorporate a few new things to my existing choices','{\"IN\":\"\",\"FB\":\"\",\"INS\":\"\",\"PIN\":\"\"}','{\"0\":\"14822169375858d5e902156.jpeg\",\"1\":\"14822169375858d5e9825f0.jpeg\",\"2\":\"14822169375858d5e983c61.jpeg\",\"3\":\"14822169375858d5e987db5.jpeg\"}','','','{\"BigShoulders\":\"NO\",\"SmallShoulders\":\"NO\",\"NarrowHips\":\"NO\",\"WideHips\":\"NO\",\"ThinLegs\":\"NO\",\"ChunkyLegs\":\"NO\",\"FlabbyArms\":\"NO\"}','','{\"Shirts\":\"NO\",\"Blouse\":\"NO\",\"TankTops\":\"NO\",\"MiniSkirts\":\"NO\",\"KneeLengthSkirts\":\"NO\",\"FormalWear\":\"NO\"}','','01826696236','test','',1,'2016-12-20 06:55:37',0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','ord843962','0000-00-00 00:00:00','','0000-00-00 00:00:00','1970-01-01',0,'2016-12-20 06:55:37');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`code`,`type`,`color`,`fit`,`size`,`status`,`price`,`picture`,`created_by`,`user_type`,`created_at`,`updated_at`) values (1,'tb0001','Tops','Green','Slim','M',1,200.00,'{\"0\":\"1482229536585907201ae62.jpeg\"}',1,1,'2016-12-20 10:25:36','2016-12-20 10:25:36'),(2,'tb0002','Tops','Green','Slim','M',1,750.00,'{\"0\":\"1482233539585916c3a5862.jpeg\"}',1,1,'2016-12-20 11:32:19','2016-12-20 11:32:19'),(3,'tb0003','Bottom','Black','Slim','XL',0,200.00,'{\"0\":\"1482305450585a2faa01086.jpeg\",\"1\":\"1482305450585a2faa7ae31.jpeg\",\"2\":\"1482305450585a2faa7c872.jpeg\"}',1,1,'2016-12-21 07:30:50','2016-12-21 07:30:50');

/*Table structure for table `stylers` */

DROP TABLE IF EXISTS `stylers`;

CREATE TABLE `stylers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stylers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `stylers` */

insert  into `stylers`(`id`,`name`,`email`,`password`,`created_at`,`updated_at`,`username`,`remember_token`) values (1,'Ramjan Ali','ff.ramjanali@gmail.com','$2y$10$lmN.Vga3g.TeCcbVG1X7gel1DbLL.QeJezeJoQGOCiqw4uLifIx8C','2016-12-04 05:46:56','2016-12-20 13:32:55','ghost','XxbBNVaRvm3H3JBXu33WGJnWfEYhzH2wGahMqPCnw7ZpPc05kukDCS5DClaW');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`username`,`email`,`password`,`remember_token`,`provider`,`provider_id`,`picture`,`created_at`,`updated_at`) values (1,'',NULL,'me.ramjanali@gmail.com','$2y$10$emMvFw492ui1gP8gWga1r.KgOOMmVDGBZ5fA9XCNzLGfGPs8.xHIW','WtC3gD4Uk79QJmga5x3nylMN5vBeFI8joCYq7btvitPVYl3hu639DErj08iZ',NULL,NULL,NULL,'2016-12-14 07:19:42','2016-12-20 08:46:42');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
