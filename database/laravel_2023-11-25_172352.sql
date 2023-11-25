/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS failed_jobs;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS migrations;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS password_resets;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS password_reset_tokens;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS personal_access_tokens;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS productos;
CREATE TABLE `productos` (
  `id_prod` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_prod` varchar(255) NOT NULL,
  `categoria_prod` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio_prod` decimal(8,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO migrations(id,migration,batch) VALUES('1','\'2014_10_12_000000_create_users_table\'','1'),('2','\'2014_10_12_100000_create_password_reset_tokens_table\'','1'),('3','\'2019_08_19_000000_create_failed_jobs_table\'','1'),('4','\'2019_12_14_000001_create_personal_access_tokens_table\'','1'),('5','\'2014_10_12_100000_create_password_resets_table\'','2'),('6','\'2023_11_07_203643_add_phone_to_users\'','3'),('8','\'2023_11_16_194827_create_productos_table\'','4');




INSERT INTO productos(id_prod,nombre_prod,categoria_prod,descripcion,precio_prod,imagen,created_at,updated_at) VALUES('10','\'repollo\'','\'verdura\'','X\'5061726120706f646572206d6f7374726172736520636f7272656374616d656e74652c20657374612070c3a167696e6120776562206e65636573697461206c6f73206461746f7320717565206573637269626973746520616e746572696f726d656e74652e2050756564657320656e766961722065736f73206461746f73206f7472612076657a207065726f2065736f20686172c3a120717565206c612070c3a167696e612072657069746120746f646173206c617320616363696f6e657320616e746572696f7265732e2050756c7361205265636172676172207061726120656e76696172206c6f73206461746f732079206d6f7374726172206c612070c3a167696e612e\'','12.00','\'1700770513.png\'','\'2023-11-23 20:15:13\'','\'2023-11-23 20:15:13\''),('11','\'naraja\'','\'frutas\'','X\'5061726120706f646572206d6f7374726172736520636f7272656374616d656e74652c20657374612070c3a167696e6120776562206e65636573697461206c6f73206461746f7320717565206573637269626973746520616e746572696f726d656e74652e2050756564657320656e766961722065736f73206461746f73206f7472612076657a207065726f2065736f20686172c3a120717565206c612070c3a167696e612072657069746120746f646173206c617320616363696f6e657320616e746572696f7265732e2050756c7361205265636172676172207061726120656e76696172206c6f73206461746f732079206d6f7374726172206c612070c3a167696e612e\'','4.00','\'1700773061.png\'','\'2023-11-23 20:57:41\'','\'2023-11-23 20:57:41\''),('12','\'zapallo\'','\'verdura\'','X\'5061726120706f646572206d6f7374726172736520636f7272656374616d656e74652c20657374612070c3a167696e6120776562206e65636573697461206c6f73206461746f7320717565206573637269626973746520616e746572696f726d656e74652e2050756564657320656e766961722065736f73206461746f73206f7472612076657a207065726f2065736f20686172c3a120717565206c612070c3a167696e612072657069746120746f646173206c617320616363696f6e657320616e746572696f7265732e2050756c7361205265636172676172207061726120656e76696172206c6f73206461746f732079206d6f7374726172206c612070c3a167696e612e\'','24.00','\'1700774389.png\'','\'2023-11-23 21:19:49\'','\'2023-11-23 21:19:49\''),('22','\'platno\'','\'fruta\'','X\'6672757461\'','3.00','\'1700949637.png\'','\'2023-11-25 22:00:37\'','\'2023-11-25 22:00:37\'');
INSERT INTO users(id,name,email,email_verified_at,password,remember_token,created_at,updated_at,phone) VALUES('1','\'mizael criales\'','\'misa@gmail.com\'','NULL','\'$2y$12$0lhC2.14mgQIDxrT//QIoeIIERijLcA9OYeZ66hDxnDuJdoM9eWwW\'','NULL','\'2023-11-07 21:18:00\'','\'2023-11-07 21:18:00\'','\'987654321\''),('4','\'luis enrique\'','\'luisenrique@gmail.com\'','NULL','\'$2y$12$9IHQTRpMO7xixl4VS0nNjOST505taQOmISZX.Hlr5CgX5/WR1V7Oa\'','NULL','\'2023-11-25 21:59:43\'','\'2023-11-25 21:59:43\'','\'123456789\'');