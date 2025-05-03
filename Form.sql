/*
SQLyog Ultimate v13.1.1 (32 bit)
MySQL - 10.4.32-MariaDB : Database - shreebajarangsena
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`shreebajarangsena` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `shreebajarangsena`;

/*Table structure for table `form_fields` */

DROP TABLE IF EXISTS `form_fields`;

CREATE TABLE `form_fields` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `form_id` bigint(20) unsigned NOT NULL,
  `label` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `options` text DEFAULT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `form_fields_form_id_foreign` (`form_id`),
  CONSTRAINT `form_fields_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `forms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `form_fields` */

insert  into `form_fields`(`id`,`form_id`,`label`,`name`,`type`,`options`,`required`,`created_at`,`updated_at`) values 
(1,1,'Full Name','full_name','text',NULL,1,'2025-05-03 20:02:57','2025-05-03 20:02:57'),
(2,1,'Email Address','email','text',NULL,1,'2025-05-03 20:02:57','2025-05-03 20:02:57'),
(3,1,'Rate Our Service','rating','select','[\"Excellent\", \"Good\", \"Average\", \"Poor\"]',1,'2025-05-03 20:02:57','2025-05-03 20:02:57'),
(4,6,'NAME','name','text',NULL,0,'2025-05-03 15:28:49','2025-05-03 15:28:49'),
(5,6,'AGE','age','text',NULL,0,'2025-05-03 15:28:49','2025-05-03 15:28:49'),
(6,6,'GENDER','gender','text',NULL,0,'2025-05-03 15:28:49','2025-05-03 15:28:49'),
(7,7,'Your Name','your_name','text',NULL,0,'2025-05-03 15:30:31','2025-05-03 15:30:31'),
(8,8,'Data','data','select','\"A,B,C\"',0,'2025-05-03 15:31:23','2025-05-03 15:31:23'),
(9,9,'Best Player Name','best_player_name','text',NULL,0,'2025-05-03 15:39:46','2025-05-03 15:39:46'),
(10,9,'Gender','gender','textarea',NULL,0,'2025-05-03 15:39:46','2025-05-03 15:39:46'),
(11,10,'Best Player Name','best_player_name','text',NULL,0,'2025-05-03 15:40:28','2025-05-03 15:40:28'),
(12,10,'Gender','gender','textarea',NULL,0,'2025-05-03 15:40:28','2025-05-03 15:40:28'),
(13,10,'Age','age','select','[\"Excellent\", \"Good\", \"Average\", \"Poor\"]',0,'2025-05-03 15:40:28','2025-05-03 15:40:28'),
(14,11,'Best Player Name','best_player_name','text',NULL,0,'2025-05-03 15:41:47','2025-05-03 15:41:47'),
(15,11,'Gender','gender','textarea',NULL,0,'2025-05-03 15:41:47','2025-05-03 15:41:47'),
(16,11,'Age','age','select','\"\\\"Excellent\\\", \\\"Good\\\", \\\"Average\\\", \\\"Poor\\\"\"',0,'2025-05-03 15:41:47','2025-05-03 15:41:47'),
(17,11,'D','d','text',NULL,0,'2025-05-03 15:41:47','2025-05-03 15:41:47'),
(18,12,'Best Player Name','best_player_name','text',NULL,0,'2025-05-03 15:43:44','2025-05-03 15:43:44'),
(19,12,'Gender','gender','textarea',NULL,0,'2025-05-03 15:43:44','2025-05-03 15:43:44'),
(20,12,'Age','age','select','\"[\\\"\\\\\\\"Excellent\\\\\\\"\\\",\\\"\\\\\\\"Good\\\\\\\"\\\",\\\"\\\\\\\"Average\\\\\\\"\\\",\\\"\\\\\\\"Poor\\\\\\\"\\\"]\"',0,'2025-05-03 15:43:44','2025-05-03 15:43:44'),
(21,12,'D','d','text',NULL,0,'2025-05-03 15:43:44','2025-05-03 15:43:44'),
(22,13,'Best Player Name','best_player_name','text',NULL,0,'2025-05-03 15:45:23','2025-05-03 15:45:23'),
(23,13,'Gender','gender','textarea',NULL,0,'2025-05-03 15:45:23','2025-05-03 15:45:23'),
(24,13,'Age','age','select','\"[\\\"Excellent\\\",\\\"Good\\\",\\\"Average\\\",\\\"Poor\\\"]\"',0,'2025-05-03 15:45:23','2025-05-03 15:45:23'),
(25,13,'D','d','text',NULL,0,'2025-05-03 15:45:23','2025-05-03 15:45:23'),
(26,14,'d','d','select','[\"Excellent\", \"Good\", \"Average\", \"Poor\"]',0,'2025-05-03 15:46:14','2025-05-03 15:46:14'),
(27,16,'F','f','select','\"[\\\"1\\\",\\\"1\\\",\\\"2\\\",\\\"3\\\",\\\"4\\\"]\"',0,'2025-05-03 15:49:36','2025-05-03 15:49:36'),
(28,17,'F','f','select','\"[\\\"1\\\",\\\"1\\\",\\\"2\\\",\\\"3\\\",\\\"4\\\"]\"',0,'2025-05-03 15:51:30','2025-05-03 15:51:30'),
(29,17,'Age','age','select','\"[\\\"12\\\",\\\"23\\\",\\\"23\\\",\\\"23\\\",\\\"23\\\"]\"',0,'2025-05-03 15:51:30','2025-05-03 15:51:30');

/*Table structure for table `form_response_values` */

DROP TABLE IF EXISTS `form_response_values`;

CREATE TABLE `form_response_values` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `form_response_id` bigint(20) unsigned NOT NULL,
  `form_field_id` bigint(20) unsigned NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `form_response_values_form_response_id_foreign` (`form_response_id`),
  KEY `form_response_values_form_field_id_foreign` (`form_field_id`),
  CONSTRAINT `form_response_values_form_field_id_foreign` FOREIGN KEY (`form_field_id`) REFERENCES `form_fields` (`id`) ON DELETE CASCADE,
  CONSTRAINT `form_response_values_form_response_id_foreign` FOREIGN KEY (`form_response_id`) REFERENCES `form_responses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `form_response_values` */

insert  into `form_response_values`(`id`,`form_response_id`,`form_field_id`,`value`,`created_at`,`updated_at`) values 
(1,2,1,'dsdsd','2025-05-03 14:38:49','2025-05-03 14:38:49'),
(2,2,2,'sad','2025-05-03 14:38:49','2025-05-03 14:38:49'),
(3,2,3,'Good','2025-05-03 14:38:49','2025-05-03 14:38:49'),
(4,3,1,'Naarendra','2025-05-03 14:52:08','2025-05-03 14:52:08'),
(5,3,2,'narendra@gmail.com','2025-05-03 14:52:08','2025-05-03 14:52:08'),
(6,3,3,'Good','2025-05-03 14:52:08','2025-05-03 14:52:08'),
(7,4,1,'DASD','2025-05-03 15:17:44','2025-05-03 15:17:44'),
(8,4,2,'ASD','2025-05-03 15:17:44','2025-05-03 15:17:44'),
(9,4,3,'Excellent','2025-05-03 15:17:44','2025-05-03 15:17:44'),
(10,5,4,'NARENDRA','2025-05-03 15:29:12','2025-05-03 15:29:12'),
(11,5,5,'12','2025-05-03 15:29:12','2025-05-03 15:29:12'),
(12,5,6,'MALE','2025-05-03 15:29:12','2025-05-03 15:29:12'),
(13,6,7,'Narendra','2025-05-03 15:30:40','2025-05-03 15:30:40'),
(14,7,28,'2','2025-05-03 15:51:36','2025-05-03 15:51:36'),
(15,7,29,'23','2025-05-03 15:51:36','2025-05-03 15:51:36');

/*Table structure for table `form_responses` */

DROP TABLE IF EXISTS `form_responses`;

CREATE TABLE `form_responses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `form_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `form_responses_form_id_foreign` (`form_id`),
  CONSTRAINT `form_responses_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `forms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `form_responses` */

insert  into `form_responses`(`id`,`form_id`,`created_at`,`updated_at`) values 
(1,1,'2025-05-03 14:37:09','2025-05-03 14:37:09'),
(2,1,'2025-05-03 14:38:49','2025-05-03 14:38:49'),
(3,1,'2025-05-03 14:52:08','2025-05-03 14:52:08'),
(4,1,'2025-05-03 15:17:44','2025-05-03 15:17:44'),
(5,6,'2025-05-03 15:29:12','2025-05-03 15:29:12'),
(6,7,'2025-05-03 15:30:40','2025-05-03 15:30:40'),
(7,17,'2025-05-03 15:51:36','2025-05-03 15:51:36');

/*Table structure for table `forms` */

DROP TABLE IF EXISTS `forms`;

CREATE TABLE `forms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `forms` */

insert  into `forms`(`id`,`name`,`title`,`created_at`,`updated_at`) values 
(1,NULL,'Customer Feedback','2025-05-03 20:02:47','2025-05-03 20:02:47'),
(2,NULL,'WELCOME','2025-05-03 15:15:36','2025-05-03 15:15:36'),
(3,NULL,'WELCOME','2025-05-03 15:24:44','2025-05-03 15:24:44'),
(4,NULL,'WELCOME','2025-05-03 15:26:38','2025-05-03 15:26:38'),
(5,NULL,'WELCOME','2025-05-03 15:27:44','2025-05-03 15:27:44'),
(6,NULL,'WELCOME','2025-05-03 15:28:49','2025-05-03 15:28:49'),
(7,NULL,'Cricket','2025-05-03 15:30:31','2025-05-03 15:30:31'),
(8,NULL,'Testing Data','2025-05-03 15:31:23','2025-05-03 15:31:23'),
(9,NULL,'Criclet Match Review','2025-05-03 15:39:46','2025-05-03 15:39:46'),
(10,NULL,'Criclet Match Review','2025-05-03 15:40:28','2025-05-03 15:40:28'),
(11,NULL,'Criclet Match Review','2025-05-03 15:41:47','2025-05-03 15:41:47'),
(12,NULL,'Criclet Match Review','2025-05-03 15:43:44','2025-05-03 15:43:44'),
(13,NULL,'Criclet Match Review','2025-05-03 15:45:23','2025-05-03 15:45:23'),
(14,NULL,'d','2025-05-03 15:46:14','2025-05-03 15:46:14'),
(15,NULL,'FF','2025-05-03 15:49:06','2025-05-03 15:49:06'),
(16,NULL,'FF','2025-05-03 15:49:36','2025-05-03 15:49:36'),
(17,NULL,'FF','2025-05-03 15:51:30','2025-05-03 15:51:30');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
