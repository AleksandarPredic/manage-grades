# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.95.100 (MySQL 5.5.60-0+deb8u1)
# Database: local
# Generation Time: 2019-11-02 15:44:49 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table boards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `boards`;

CREATE TABLE `boards` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `boards` WRITE;
/*!40000 ALTER TABLE `boards` DISABLE KEYS */;

INSERT INTO `boards` (`id`, `name`)
VALUES
	(1,'CSM'),
	(2,'CSMB');

/*!40000 ALTER TABLE `boards` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table grades
# ------------------------------------------------------------

DROP TABLE IF EXISTS `grades`;

CREATE TABLE `grades` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `value` tinyint(4) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `student_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `grades` WRITE;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;

INSERT INTO `grades` (`id`, `value`, `subject`, `student_id`)
VALUES
	(1,8,'Fizika',1),
	(2,6,'Matematika',1),
	(3,7,'Filozofija',1),
	(4,8,'Fizika',2),
	(5,7,'Matematika',2),
	(6,6,'Fizika',3),
	(7,6,'Matematika',3),
	(8,6,'Filozofija',3),
	(9,8,'Fizika',4),
	(10,10,'Matematika',4);

/*!40000 ALTER TABLE `grades` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table students
# ------------------------------------------------------------

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `board_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;

INSERT INTO `students` (`id`, `name`, `board_id`)
VALUES
	(1,'Petar Petrovic',1),
	(2,'Milos Milosevic',1),
	(3,'Marko Markovic',2),
	(4,'Dejan Dejanovic',2);

/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
