# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.33)
# Database: colombia
# Generation Time: 2016-12-15 11:55:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table departamentos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `departamentos`;

CREATE TABLE `departamentos` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;

INSERT INTO `departamentos` (`id`, `nombre`)
VALUES
	(8,'Atlántico'),
	(11,'Bogotá, D.C.'),
	(13,'Bolívar'),
	(15,'Boyacá'),
	(17,'Caldas'),
	(18,'Caquetá'),
	(19,'Cauca'),
	(20,'Cesar'),
	(23,'Córdoba'),
	(25,'Cundinamarca'),
	(27,'Chocó'),
	(41,'Huila'),
	(44,'La Guajira'),
	(47,'Magdalena'),
	(50,'Meta'),
	(52,'Nariño'),
	(54,'Norte de Santander'),
	(63,'Quindío'),
	(66,'Risaralda'),
	(68,'Santander'),
	(70,'Sucre'),
	(73,'Tolima'),
	(76,'Valle del Cauca'),
	(81,'Arauca'),
	(85,'Casanare'),
	(86,'Putumayo'),
	(88,'Archipiélago de San Andrés y Providencia y Santa Catalina'),
	(91,'Amazonas'),
	(94,'Guainía'),
	(95,'Guaviare'),
	(97,'Vaupés'),
	(99,'Vichada');

/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
