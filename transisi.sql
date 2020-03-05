/*
SQLyog Community v12.4.0 (64 bit)
MySQL - 10.3.15-MariaDB : Database - transisi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`transisi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `transisi`;

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_company` varchar(255) DEFAULT NULL,
  `email_company` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_name` (`nama_company`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `companies` */

insert  into `companies`(`id`,`nama_company`,`email_company`,`logo`) values 
(1,'Pertamani Indonesia','pertamaniindonesia@pertamani.com','519659393.png'),
(2,'Mandara','mandara@mandara.co.id','809307061.png'),
(3,'Fabook','Fabook@fabook.com','1848446443.png'),
(4,'Witer','witer@witer.com','921770912.png'),
(5,'Merdana','merdana@merdana.com','1487790540.png'),
(6,'Negari','negari@negari.com','873881177.png');

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `id_employees` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_employees` varchar(255) DEFAULT NULL,
  `name_company` varchar(255) DEFAULT NULL,
  `email_employees` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_employees`),
  KEY `employees_ibfk_1` (`name_company`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`name_company`) REFERENCES `companies` (`nama_company`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `employees` */

insert  into `employees`(`id_employees`,`nama_employees`,`name_company`,`email_employees`) values 
(1,'Amien Nadir','Pertamani Indonesia','amien@gmail.com'),
(2,'Luhut','Pertamani Indonesia','luhutsitonggung@gmail.com'),
(3,'Erick','Pertamani Indonesia','erick@gmil.com'),
(4,'Joko','Pertamani Indonesia','joko@gmail.com'),
(5,'Maruf','Pertamani Indonesia','maruf@gmail.com'),
(6,'Freddie','Mandara','freddie@gmail.com'),
(7,'James','Mandara','james@gmail.com'),
(8,'Rossi','Mandara','Rossi@gmail.com'),
(9,'Valentino','Mandara','Valentino@gmail.com'),
(10,'Ronald','Mandara','Ronald@gmail.com');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2020_03_04_085333_create_companies_table',1),
(4,'2020_03_04_085500_create_employees_table',1),
(5,'2020_03_04_100505_create_table_companies',2),
(6,'2020_03_04_111423_create_table_companies',3),
(7,'2020_03_04_114714_create_table_companies',4);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(2,'admin','admin@transisi.co.id',NULL,'$2y$10$8a6612Qxb1TpnRFM0lHVB./EXF8W0GqNg9hdVWsLsHyM2vQnY32iu',NULL,'2020-03-04 09:33:00','2020-03-04 09:33:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
