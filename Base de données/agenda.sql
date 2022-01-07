/*
SQLyog Ultimate v13.1.1 (32 bit)
MySQL - 5.7.26 : Database - agenda
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`agenda` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `agenda`;

/*Table structure for table `evenements` */

DROP TABLE IF EXISTS `evenements`;

CREATE TABLE `evenements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL DEFAULT 'Mon évènement',
  `description` text,
  `dh_debut` varchar(50) DEFAULT 'Pas de date',
  `dh_fin` varchar(50) DEFAULT 'Pas de date',
  `lieu` varchar(50) DEFAULT 'Pas de lieu',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `evenements` */

insert  into `evenements`(`id`,`titre`,`description`,`dh_debut`,`dh_fin`,`lieu`) values 
(3,'PrÃ©sentation de ABC OS','Notre dernier prototype sera prÃ©sentÃ© au grand public','2022-01-07T14:30','2022-01-07T17:00','YaoundÃ© Palais des congrÃ¨s'),
(2,'Lancement de Someone Knocks','Je lance le chapitre 1 de mon dernier jeu Someone Knocks.','2022-01-31T14:30','2022-01-15T13:30','YaoundÃ© ngoa Ã©kÃ©lÃ©');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
