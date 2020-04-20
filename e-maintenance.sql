/*
SQLyog Enterprise v12.09 (64 bit)
MySQL - 10.1.38-MariaDB : Database - ecommerce_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ecommerce_db` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `ecommerce_db`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_09_06_100222_create_posts_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_title_unique` (`title`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `posts` */

/*Table structure for table `tbl_form` */

DROP TABLE IF EXISTS `tbl_form`;

CREATE TABLE `tbl_form` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `pc_no` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pc_id` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `editer_name` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `editer_ext` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `editer_department` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `editer_sla` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_problem` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_install` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_other` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_company` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_user_sign` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_user_sign_date` date DEFAULT NULL,
  `set_registered` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_repaired` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_replaced` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_sendreference` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_kiv` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_kiv_date` date DEFAULT NULL,
  `set_jamin` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_note` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_signatrue` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_signatrue_date` date DEFAULT NULL,
  `set_usersignatrue` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_usersignatrue_date` date DEFAULT NULL,
  `info_hardware` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info_softapp` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info_signatrue_officer` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info_signatrue_officer_date` date DEFAULT NULL,
  `user_id` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modify_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_form` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authority` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`authority`,`remember_token`,`created_at`,`updated_at`) values (10,'qwe','vjh@0057.com','$2y$10$ESWUAEtY8rPMjayWIdwkLu9PGqXUO2u5MbCr6awBWulkhJdIVfBO6','Client','YDfZ34kwVRaU8GdL3TCzj1Z3yEI0UgpOrL6DPsSkOl1tgxtrYqUvRfujooun','2019-05-22 03:40:25','2019-05-22 03:40:25'),(14,'vjh','admin123@gmail.com','$2y$10$0MlCEmjdFRD1Zt0d4L92/Oyr5w1k4lYDwUlI.RvA/VQyU74oHe3Ke','Admin','2XFlPZO7OWgPlHQT1fGIMHPyXdg4JveCfmf2jbAiKCyr6ONkep7tDWbnZwmY','2019-05-22 04:24:20','2019-05-22 04:24:20'),(17,'qwe','admin@44.com','$2y$10$6WoojkBGMO0YU3W2gqwO8ehwNM6AAuXprnCYPiaIPmTkgxTg9hnEq','Client','4d1q4ZDTJHPFUDrNHQ7XKX1fK7c8Ur0d7GQ5Dx42TQxYfXmOa4UvYcgMcTcq',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
