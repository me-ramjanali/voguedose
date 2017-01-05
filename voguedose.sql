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

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `admins` */

insert  into `admins`(`id`,`name`,`username`,`email`,`password`,`picture`,`remember_token`,`created_at`,`updated_at`) values (1,'Kaniz Fatema','fatema','kaniz.fatema@gmail.com','$2y$10$dUxPMsOQNAKyXYq5Mr3/G.ZbSxsAR3NohFemd1/zmeHbembej6KQy','1483603205586dfd05128c3.jpeg','t9kgAL6106UZEL2QOmChmWkMu2AyI7R7Bcs0AwNumOwHyvGcvGWI9TaQq2jS','2016-12-05 08:47:18','2017-01-05 09:45:17'),(8,'ramjan','ramjan','me.ramjanali@gmail.com','$2y$10$qX1XDm0rKbDgfqoydzRPM.YkrIFmQNZxJdeKntqZevahPWztFHGfa','1483605197586e04cdaf1e9.jpeg',NULL,'2017-01-05 08:33:17','2017-01-05 08:33:17');

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(2) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=246 DEFAULT CHARSET=utf8;

/*Data for the table `countries` */

insert  into `countries`(`id`,`code`,`name`) values (1,'AF','Afghanistan'),(2,'AL','Albania'),(3,'DZ','Algeria'),(4,'DS','American Samoa'),(5,'AD','Andorra'),(6,'AO','Angola'),(7,'AI','Anguilla'),(8,'AQ','Antarctica'),(9,'AG','Antigua and Barbuda'),(10,'AR','Argentina'),(11,'AM','Armenia'),(12,'AW','Aruba'),(13,'AU','Australia'),(14,'AT','Austria'),(15,'AZ','Azerbaijan'),(16,'BS','Bahamas'),(17,'BH','Bahrain'),(18,'BD','Bangladesh'),(19,'BB','Barbados'),(20,'BY','Belarus'),(21,'BE','Belgium'),(22,'BZ','Belize'),(23,'BJ','Benin'),(24,'BM','Bermuda'),(25,'BT','Bhutan'),(26,'BO','Bolivia'),(27,'BA','Bosnia and Herzegovina'),(28,'BW','Botswana'),(29,'BV','Bouvet Island'),(30,'BR','Brazil'),(31,'IO','British Indian Ocean Territory'),(32,'BN','Brunei Darussalam'),(33,'BG','Bulgaria'),(34,'BF','Burkina Faso'),(35,'BI','Burundi'),(36,'KH','Cambodia'),(37,'CM','Cameroon'),(38,'CA','Canada'),(39,'CV','Cape Verde'),(40,'KY','Cayman Islands'),(41,'CF','Central African Republic'),(42,'TD','Chad'),(43,'CL','Chile'),(44,'CN','China'),(45,'CX','Christmas Island'),(46,'CC','Cocos (Keeling) Islands'),(47,'CO','Colombia'),(48,'KM','Comoros'),(49,'CG','Congo'),(50,'CK','Cook Islands'),(51,'CR','Costa Rica'),(52,'HR','Croatia (Hrvatska)'),(53,'CU','Cuba'),(54,'CY','Cyprus'),(55,'CZ','Czech Republic'),(56,'DK','Denmark'),(57,'DJ','Djibouti'),(58,'DM','Dominica'),(59,'DO','Dominican Republic'),(60,'TP','East Timor'),(61,'EC','Ecuador'),(62,'EG','Egypt'),(63,'SV','El Salvador'),(64,'GQ','Equatorial Guinea'),(65,'ER','Eritrea'),(66,'EE','Estonia'),(67,'ET','Ethiopia'),(68,'FK','Falkland Islands (Malvinas)'),(69,'FO','Faroe Islands'),(70,'FJ','Fiji'),(71,'FI','Finland'),(72,'FR','France'),(73,'FX','France, Metropolitan'),(74,'GF','French Guiana'),(75,'PF','French Polynesia'),(76,'TF','French Southern Territories'),(77,'GA','Gabon'),(78,'GM','Gambia'),(79,'GE','Georgia'),(80,'DE','Germany'),(81,'GH','Ghana'),(82,'GI','Gibraltar'),(83,'GK','Guernsey'),(84,'GR','Greece'),(85,'GL','Greenland'),(86,'GD','Grenada'),(87,'GP','Guadeloupe'),(88,'GU','Guam'),(89,'GT','Guatemala'),(90,'GN','Guinea'),(91,'GW','Guinea-Bissau'),(92,'GY','Guyana'),(93,'HT','Haiti'),(94,'HM','Heard and Mc Donald Islands'),(95,'HN','Honduras'),(96,'HK','Hong Kong'),(97,'HU','Hungary'),(98,'IS','Iceland'),(99,'IN','India'),(100,'IM','Isle of Man'),(101,'ID','Indonesia'),(102,'IR','Iran (Islamic Republic of)'),(103,'IQ','Iraq'),(104,'IE','Ireland'),(105,'IL','Israel'),(106,'IT','Italy'),(107,'CI','Ivory Coast'),(108,'JE','Jersey'),(109,'JM','Jamaica'),(110,'JP','Japan'),(111,'JO','Jordan'),(112,'KZ','Kazakhstan'),(113,'KE','Kenya'),(114,'KI','Kiribati'),(115,'KP','Korea, Democratic People\'s Republic of'),(116,'KR','Korea, Republic of'),(117,'XK','Kosovo'),(118,'KW','Kuwait'),(119,'KG','Kyrgyzstan'),(120,'LA','Lao People\'s Democratic Republic'),(121,'LV','Latvia'),(122,'LB','Lebanon'),(123,'LS','Lesotho'),(124,'LR','Liberia'),(125,'LY','Libyan Arab Jamahiriya'),(126,'LI','Liechtenstein'),(127,'LT','Lithuania'),(128,'LU','Luxembourg'),(129,'MO','Macau'),(130,'MK','Macedonia'),(131,'MG','Madagascar'),(132,'MW','Malawi'),(133,'MY','Malaysia'),(134,'MV','Maldives'),(135,'ML','Mali'),(136,'MT','Malta'),(137,'MH','Marshall Islands'),(138,'MQ','Martinique'),(139,'MR','Mauritania'),(140,'MU','Mauritius'),(141,'TY','Mayotte'),(142,'MX','Mexico'),(143,'FM','Micronesia, Federated States of'),(144,'MD','Moldova, Republic of'),(145,'MC','Monaco'),(146,'MN','Mongolia'),(147,'ME','Montenegro'),(148,'MS','Montserrat'),(149,'MA','Morocco'),(150,'MZ','Mozambique'),(151,'MM','Myanmar'),(152,'NA','Namibia'),(153,'NR','Nauru'),(154,'NP','Nepal'),(155,'NL','Netherlands'),(156,'AN','Netherlands Antilles'),(157,'NC','New Caledonia'),(158,'NZ','New Zealand'),(159,'NI','Nicaragua'),(160,'NE','Niger'),(161,'NG','Nigeria'),(162,'NU','Niue'),(163,'NF','Norfolk Island'),(164,'MP','Northern Mariana Islands'),(165,'NO','Norway'),(166,'OM','Oman'),(167,'PK','Pakistan'),(168,'PW','Palau'),(169,'PS','Palestine'),(170,'PA','Panama'),(171,'PG','Papua New Guinea'),(172,'PY','Paraguay'),(173,'PE','Peru'),(174,'PH','Philippines'),(175,'PN','Pitcairn'),(176,'PL','Poland'),(177,'PT','Portugal'),(178,'PR','Puerto Rico'),(179,'QA','Qatar'),(180,'RE','Reunion'),(181,'RO','Romania'),(182,'RU','Russian Federation'),(183,'RW','Rwanda'),(184,'KN','Saint Kitts and Nevis'),(185,'LC','Saint Lucia'),(186,'VC','Saint Vincent and the Grenadines'),(187,'WS','Samoa'),(188,'SM','San Marino'),(189,'ST','Sao Tome and Principe'),(190,'SA','Saudi Arabia'),(191,'SN','Senegal'),(192,'RS','Serbia'),(193,'SC','Seychelles'),(194,'SL','Sierra Leone'),(195,'SG','Singapore'),(196,'SK','Slovakia'),(197,'SI','Slovenia'),(198,'SB','Solomon Islands'),(199,'SO','Somalia'),(200,'ZA','South Africa'),(201,'GS','South Georgia South Sandwich Islands'),(202,'ES','Spain'),(203,'LK','Sri Lanka'),(204,'SH','St. Helena'),(205,'PM','St. Pierre and Miquelon'),(206,'SD','Sudan'),(207,'SR','Suriname'),(208,'SJ','Svalbard and Jan Mayen Islands'),(209,'SZ','Swaziland'),(210,'SE','Sweden'),(211,'CH','Switzerland'),(212,'SY','Syrian Arab Republic'),(213,'TW','Taiwan'),(214,'TJ','Tajikistan'),(215,'TZ','Tanzania, United Republic of'),(216,'TH','Thailand'),(217,'TG','Togo'),(218,'TK','Tokelau'),(219,'TO','Tonga'),(220,'TT','Trinidad and Tobago'),(221,'TN','Tunisia'),(222,'TR','Turkey'),(223,'TM','Turkmenistan'),(224,'TC','Turks and Caicos Islands'),(225,'TV','Tuvalu'),(226,'UG','Uganda'),(227,'UA','Ukraine'),(228,'AE','United Arab Emirates'),(229,'GB','United Kingdom'),(230,'US','United States'),(231,'UM','United States minor outlying islands'),(232,'UY','Uruguay'),(233,'UZ','Uzbekistan'),(234,'VU','Vanuatu'),(235,'VA','Vatican City State'),(236,'VE','Venezuela'),(237,'VN','Vietnam'),(238,'VG','Virgin Islands (British)'),(239,'VI','Virgin Islands (U.S.)'),(240,'WF','Wallis and Futuna Islands'),(241,'EH','Western Sahara'),(242,'YE','Yemen'),(243,'ZR','Zaire'),(244,'ZM','Zambia'),(245,'ZW','Zimbabwe');

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

insert  into `orders`(`id`,`customer_name`,`customer_age`,`customer_height`,`customer_weight`,`customer_profession`,`clothesInWardrobe`,`currentStyleRate`,`bodyType`,`chest`,`waist`,`hips`,`top`,`dress`,`bottom`,`topFit`,`bottomFit`,`preferCloth`,`styleForCloset`,`dressCoast`,`topsCoast`,`bottomCoast`,`bagsCoast`,`styleRatings`,`preferStyle`,`socialLinks`,`Picture`,`likedColor`,`dislikedColor`,`additionalBodyOption`,`additionalBodyComment`,`itemsToReject`,`itemsToRejectComment`,`phone`,`address`,`comments`,`requested_by`,`updated_at`,`assign_to`,`assign_by`,`assign_on`,`accept_on`,`reject_on`,`complete_on`,`deliver_on`,`styler_feedback`,`styler_feedback_on`,`admin_feedback`,`admin_feedback_on`,`order_id`,`cancel_on`,`customer_feedback`,`customer_feedback_on`,`target_date`,`process_status`,`created_at`) values (1,'ghost',26,170,70,'Student',1,1,'oval','40','34','38','{\"size\":\"L\",\"brand\":\"ZARA\"}','{\"size\":\"M\",\"brand\":\"H&M\"}','{\"size\":\"XL\",\"brand\":\"Love Bonito\"}','Straight','Fitted','A healthy mix of both','\"ELEGANT,GIRLY,GLAMOROUS\"','{\"low\":\"20\",\"high\":\"180\"}','{\"low\":\"20\",\"high\":\"100\"}','{\"low\":\"20\",\"high\":\"150\"}','{\"low\":\"50\",\"high\":\"400\"}','{\"dress_1\":\"Average\",\"dress_2\":\"Wow\",\"dress_3\":\"Wow\",\"dress_4\":\"Wow\",\"dress_5\":\"Nah\",\"dress_6\":\"Average\",\"dress_7\":\"Average\",\"dress_8\":\"Average\",\"dress_9\":\"Average\",\"dress_10\":\"Wow\",\"dress_11\":\"Wow\",\"dress_12\":\"Wow\",\"dress_13\":\"Average\",\"dress_14\":\"Average\",\"dress_15\":\"Average\",\"dress_16\":\"Wow\",\"dress_17\":\"Average\",\"dress_18\":\"Average\",\"dress_19\":\"Average\",\"dress_20\":\"Average\"}','Little – Please incorporate a few new things to my existing choices','{\"IN\":\"\",\"FB\":\"\",\"INS\":\"\",\"PIN\":\"\"}','{\"0\":\"14817959975852699d783df.jpeg\",\"1\":\"14817959975852699d7b93d.jpeg\",\"2\":\"14817959975852699d7d044.jpeg\",\"3\":\"14817959975852699d7e83a.jpeg\"}','','','{\"BigShoulders\":\"NO\",\"SmallShoulders\":\"NO\",\"NarrowHips\":\"NO\",\"WideHips\":\"NO\",\"ThinLegs\":\"NO\",\"ChunkyLegs\":\"NO\",\"FlabbyArms\":\"NO\"}','','{\"Shirts\":\"NO\",\"Blouse\":\"NO\",\"TankTops\":\"NO\",\"MiniSkirts\":\"NO\",\"KneeLengthSkirts\":\"NO\",\"FormalWear\":\"NO\"}','','01826696236','test','',1,'2016-12-18 10:24:13',1,0,'0000-00-00 00:00:00','2016-12-18 10:23:56','2016-12-18 10:24:13','0000-00-00 00:00:00','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','ord425129','0000-00-00 00:00:00','','0000-00-00 00:00:00','2017-01-19',0,'2016-12-15 09:59:57'),(2,'ramjan',26,170,70,'Student',1,1,'oval','40','34','38','{\"size\":\"L\",\"brand\":\"ZARA\"}','{\"size\":\"M\",\"brand\":\"H&M\"}','{\"size\":\"XL\",\"brand\":\"Love Bonito\"}','Straight','Fitted','A healthy mix of both','\"ELEGANT,GIRLY,GLAMOROUS\"','{\"low\":\"20\",\"high\":\"180\"}','{\"low\":\"20\",\"high\":\"100\"}','{\"low\":\"20\",\"high\":\"150\"}','{\"low\":\"50\",\"high\":\"400\"}','{\"dress_1\":\"Average\",\"dress_2\":\"Average\",\"dress_3\":\"Wow\",\"dress_4\":\"Wow\",\"dress_5\":\"Average\",\"dress_6\":\"Nah\",\"dress_7\":\"Nah\",\"dress_8\":\"Wow\",\"dress_9\":\"Average\",\"dress_10\":\"Average\",\"dress_11\":\"Nah\",\"dress_12\":\"Wow\",\"dress_13\":\"Nah\",\"dress_14\":\"Average\",\"dress_15\":\"Wow\",\"dress_16\":\"Wow\",\"dress_17\":\"Average\",\"dress_18\":\"Wow\",\"dress_19\":\"Average\",\"dress_20\":\"Wow\"}','Little – Please incorporate a few new things to my existing choices','{\"IN\":\"\",\"FB\":\"https:\\/\\/facebook.com\\/me.ramjan.ali\",\"INS\":\"\",\"PIN\":\"\"}','{}','','','{\"BigShoulders\":\"NO\",\"SmallShoulders\":\"NO\",\"NarrowHips\":\"NO\",\"WideHips\":\"NO\",\"ThinLegs\":\"NO\",\"ChunkyLegs\":\"NO\",\"FlabbyArms\":\"NO\"}','','{\"Shirts\":\"NO\",\"Blouse\":\"NO\",\"TankTops\":\"NO\",\"MiniSkirts\":\"NO\",\"KneeLengthSkirts\":\"NO\",\"FormalWear\":\"NO\"}','','01826696236','test','',1,'2017-01-04 07:40:57',1,1,'2017-01-04 07:40:57','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','ord509563','0000-00-00 00:00:00','','0000-00-00 00:00:00','2017-01-19',0,'2016-12-20 06:54:04'),(3,'ramjan',26,170,70,'Student',1,1,'oval','40','34','38','{\"size\":\"L\",\"brand\":\"ZARA\"}','{\"size\":\"M\",\"brand\":\"H&M\"}','{\"size\":\"XL\",\"brand\":\"Love Bonito\"}','Straight','Fitted','A healthy mix of both','\"ELEGANT,GIRLY,GLAMOROUS\"','{\"low\":\"20\",\"high\":\"180\"}','{\"low\":\"20\",\"high\":\"100\"}','{\"low\":\"20\",\"high\":\"150\"}','{\"low\":\"50\",\"high\":\"400\"}','{\"dress_1\":\"Average\",\"dress_2\":\"Wow\",\"dress_3\":\"Wow\",\"dress_4\":\"Wow\",\"dress_5\":\"Nah\",\"dress_6\":\"Nah\",\"dress_7\":\"Nah\",\"dress_8\":\"Wow\",\"dress_9\":\"Nah\",\"dress_10\":\"Wow\",\"dress_11\":\"Wow\",\"dress_12\":\"Average\",\"dress_13\":\"Average\",\"dress_14\":\"Average\",\"dress_15\":\"Average\",\"dress_16\":\"Wow\",\"dress_17\":\"Average\",\"dress_18\":\"Average\",\"dress_19\":\"Wow\",\"dress_20\":\"Wow\"}','Little – Please incorporate a few new things to my existing choices','{\"IN\":\"\",\"FB\":\"\",\"INS\":\"\",\"PIN\":\"\"}','{\"0\":\"14822169375858d5e902156.jpeg\",\"1\":\"14822169375858d5e9825f0.jpeg\",\"2\":\"14822169375858d5e983c61.jpeg\",\"3\":\"14822169375858d5e987db5.jpeg\"}','','','{\"BigShoulders\":\"NO\",\"SmallShoulders\":\"NO\",\"NarrowHips\":\"NO\",\"WideHips\":\"NO\",\"ThinLegs\":\"NO\",\"ChunkyLegs\":\"NO\",\"FlabbyArms\":\"NO\"}','','{\"Shirts\":\"NO\",\"Blouse\":\"NO\",\"TankTops\":\"NO\",\"MiniSkirts\":\"NO\",\"KneeLengthSkirts\":\"NO\",\"FormalWear\":\"NO\"}','','01826696236','test','',1,'2017-01-04 07:39:59',1,1,'2017-01-04 07:39:59','0000-00-00 00:00:00','0000-00-00 00:00:00','2016-12-27 12:06:55','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','ord843962','0000-00-00 00:00:00','','0000-00-00 00:00:00','2017-01-19',0,'2016-12-20 06:55:37');

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
  `order_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
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

insert  into `products`(`id`,`code`,`type`,`color`,`fit`,`size`,`status`,`order_id`,`price`,`picture`,`created_by`,`user_type`,`created_at`,`updated_at`) values (1,'tb0001','Tops','Green','Slim','M',0,NULL,200.00,'{\"0\":\"1482396055585b9197ad15d.jpeg\",\"1\":\"1482396055585b9197b02fb.jpeg\",\"2\":\"1482396055585b9197b1471.jpeg\"}',1,1,'2016-12-20 10:25:36','2016-12-22 08:40:55'),(2,'tb0002','Tops','Green','Slim','M',0,'\"ord509563\"',750.00,'{\"0\":\"1482396082585b91b28023d.jpeg\",\"1\":\"1482396082585b91b2838e0.jpeg\",\"2\":\"1482396082585b91b284a94.jpeg\"}',1,1,'2016-12-20 11:32:19','2016-12-27 06:59:07'),(3,'tb0003','Bottom','Black','Slim','XL',1,'ord843962',200.00,'{\"0\":\"1482395782585b9086c474f.jpeg\",\"1\":\"1482395782585b9086c7ed2.jpeg\"}',1,1,'2016-12-21 07:30:50','2016-12-27 12:06:45');

/*Table structure for table `stylers` */

DROP TABLE IF EXISTS `stylers`;

CREATE TABLE `stylers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stylers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `stylers` */

insert  into `stylers`(`id`,`name`,`email`,`picture`,`password`,`created_at`,`updated_at`,`username`,`remember_token`) values (1,'Ramjan Ali','ff.ramjanali@gmail.com','14828386465862527666078.jpeg','$2y$10$dUxPMsOQNAKyXYq5Mr3/G.ZbSxsAR3NohFemd1/zmeHbembej6KQy','2016-12-04 05:46:56','2017-01-03 09:33:33','ghost','SGirw2Ys2dq9q18OVXAyl7NqG5b7SOOZmlpGnAkxBiS7uYskYmQXTmCPxdAV');

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
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`username`,`email`,`password`,`remember_token`,`provider`,`provider_id`,`picture`,`created_at`,`updated_at`,`active`) values (1,'',NULL,'me.ramjanali@gmail.com','$2y$10$emMvFw492ui1gP8gWga1r.KgOOMmVDGBZ5fA9XCNzLGfGPs8.xHIW','p15IRJvNYumXJmV63i55BKqN0eSINEIF9EfKnc6xGe3iFeYON0NKT6yfvunl',NULL,NULL,NULL,'2016-12-14 07:19:42','2017-01-05 11:36:16',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
