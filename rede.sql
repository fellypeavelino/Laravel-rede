# Host: localhost  (Version: 5.6.25)
# Date: 2016-03-11 02:02:52
# Generator: MySQL-Front 5.3  (Build 4.123)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES ('2016_03_05_010833_create_users_table',1),('2016_03_09_021703_create_posts_table',2);

#
# Structure for table "posts"
#

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "posts"
#

INSERT INTO `posts` VALUES (5,'2016-03-09 03:15:30','2016-03-09 03:15:30','lembre-se da roupa!',5),(9,'2016-03-10 22:06:02','2016-03-10 22:06:02','cvbxvb',1),(10,'2016-03-10 22:13:11','2016-03-11 02:53:46','Editou !!1  dfgdfg    ',1),(12,'2016-03-11 03:11:51','2016-03-11 03:12:12','nata meu amorzão ...',1),(13,'2016-03-11 03:12:34','2016-03-11 03:13:01','Wiliam é lindão',5);

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'2016-03-05 01:35:46','2016-03-11 03:12:24','wiliambuzatto@hotmail.com','Wiliam','$2y$10$FzkRYI3E2.QKErFc7N56oeg2uErpmuYwUBgpgFPE.lrLOLt025dga','5TWhKbW069w9c47GRFuyForODNG9d51Sc9EmfaUVJ4N3I5fMBPUGcSrN6R1I'),(4,'2016-03-05 20:57:38','2016-03-05 20:57:38','teste','teste','$2y$10$CfmGfQbLJU5aUsuDdXxwVucaLCcAN2Wh3Oxjv5lzFERB40oSQ4JoS',NULL),(5,'2016-03-09 03:14:54','2016-03-11 03:13:04','natabg.natinha@gmail.com','Natalie','$2y$10$HUIXEvYRRZw1aGN9ciUbbeAPRaSrDenSiabXUHS76GF5nLfUNW3CO','3eWSO68OAfUJyFZYlYIjeNyqYJ9XRcQgjYQbWyHGjV1IiIY5zZoiJx2zFdUC');
