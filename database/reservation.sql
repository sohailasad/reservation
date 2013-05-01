/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.13 : Database - reservation
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`reservation` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `reservation`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`name`,`email`,`password`) values (1,'Muhammad','muhammad@yahoo.com','muhammad'),(2,'sohail','sohail@yahoo.com','123456');

/*Table structure for table `available_seats` */

DROP TABLE IF EXISTS `available_seats`;

CREATE TABLE `available_seats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_id` int(11) DEFAULT NULL,
  `terminal_from` int(11) NOT NULL,
  `terminal_to` int(11) NOT NULL,
  `root_id` int(11) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `reserve_seats` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL,
  `reserve_date` date NOT NULL,
  `reserve_time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `available_seats` */

insert  into `available_seats`(`id`,`bus_id`,`terminal_from`,`terminal_to`,`root_id`,`total_seats`,`reserve_seats`,`available_seats`,`reserve_date`,`reserve_time`) values (2,2,2,2,2,2,2,2,'2013-03-13','10:15 AM'),(3,2,2,2,2,2,2,2,'2013-03-13','08:35 PM'),(4,1,2,4,6,50,30,20,'2013-03-15','09:25 AM');

/*Table structure for table `buses` */

DROP TABLE IF EXISTS `buses`;

CREATE TABLE `buses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_number` varchar(15) NOT NULL,
  `bus_seats` int(11) NOT NULL,
  `bus_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `buses` */

insert  into `buses`(`id`,`bus_number`,`bus_seats`,`bus_type`) values (1,'MNA 2756',50,NULL);

/*Table structure for table `contents` */

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_title` varchar(255) NOT NULL,
  `content_detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `contents` */

insert  into `contents`(`id`,`content_title`,`content_detail`) values (1,'About Us','M.Asif Nadeem <br>\r\nSohail Asad <br>\r\nAltaf Saeed \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),(2,'Contact Us','M.Asif Nadeem\r\n03437169915\r\n<br>\r\nAltaf Saeed 03458065938\r\n<br>\r\nSohail Asad 03014848738'),(3,'Site Map','<a href=\"index.php\">Home</a><br><br>\r\n<a href=\"pass_login.php\">Login</a><br><br>\r\n<a href=\"terminales.php\">Terminales</a><br><br>\r\n<a href=\"terms.php\">Terms and Conditions</a><br><br>\r\n<a href=\"Schedules.php\">Schedules</a><br><br>\r\n<a href=\"seat_res.php\">Seat Reservition</a><br><br>\r\n<a href=\"refreshment.php\">Refreshment Services</a><br><br>\r\n<a href=\"user_feedback.php\">FeedBack</a><br><br>\r\n');

/*Table structure for table `fare` */

DROP TABLE IF EXISTS `fare`;

CREATE TABLE `fare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `terminal_from_id` int(11) NOT NULL,
  `terminal_to_id` int(11) NOT NULL,
  `root_id` int(11) DEFAULT NULL,
  `fare_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `fare` */

insert  into `fare`(`id`,`terminal_from_id`,`terminal_to_id`,`root_id`,`fare_price`) values (3,2,1,5,700),(2,1,2,5,700),(4,1,3,6,2000);

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_contact` varchar(50) DEFAULT NULL,
  `user_comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`id`,`user_id`,`user_name`,`user_email`,`user_contact`,`user_comment`) values (2,1,'M.Asif Nadeem ','asif_nadeem@yahoo.com ','03437169915','This is a good site for get all info about your Company. ');

/*Table structure for table `passenger` */

DROP TABLE IF EXISTS `passenger`;

CREATE TABLE `passenger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `passenger_name` varchar(20) NOT NULL,
  `passenger_contact` int(11) NOT NULL,
  `passenger_nic` int(11) NOT NULL,
  `passenger_phone` varchar(255) DEFAULT NULL,
  `passenger_email` varchar(255) NOT NULL,
  `passenger_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `passenger` */

/*Table structure for table `refreshment` */

DROP TABLE IF EXISTS `refreshment`;

CREATE TABLE `refreshment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `refreshment_item` varchar(50) NOT NULL,
  `refreshment_detail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `refreshment` */

insert  into `refreshment`(`id`,`refreshment_item`,`refreshment_detail`) values (1,'Cool Drink','Coca cola , Finta');

/*Table structure for table `reservation` */

DROP TABLE IF EXISTS `reservation`;

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `passenger_id` int(11) DEFAULT NULL,
  `passenger_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cnic_number` varchar(255) DEFAULT NULL,
  `total_seats` int(11) NOT NULL,
  `reserve_seats` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL,
  `reserve_seats_numbers` int(11) NOT NULL,
  `terminal_from_id` int(11) NOT NULL,
  `terminal_to_id` int(11) NOT NULL,
  `root_id` bigint(20) NOT NULL,
  `reserve_date_time` varchar(20) NOT NULL,
  `travel_date` varchar(10) NOT NULL,
  `travel_time` varchar(10) NOT NULL,
  `bus_id` int(11) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `seat_cancel` enum('1','0') DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `pas_id` (`passenger_id`),
  KEY `root_id` (`root_id`),
  KEY `bus_info_id` (`bus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `reservation` */

insert  into `reservation`(`id`,`passenger_id`,`passenger_name`,`phone_number`,`email`,`cnic_number`,`total_seats`,`reserve_seats`,`available_seats`,`reserve_seats_numbers`,`terminal_from_id`,`terminal_to_id`,`root_id`,`reserve_date_time`,`travel_date`,`travel_time`,`bus_id`,`status`,`seat_cancel`) values (1,NULL,'Muhammad','03014848738','sohailasad15@yahoo.com','3630166518819',50,30,20,31,1,2,1,'2013-03-13','2013-03-13','2013-03-13',1,'active','0'),(2,NULL,'Muhammad','03007484412','sohailasad15@yahoo.com','3630166518819',50,40,10,41,1,2,3,'2013-03-13','2013-03-13','8:10 AM',NULL,NULL,'0');

/*Table structure for table `root` */

DROP TABLE IF EXISTS `root`;

CREATE TABLE `root` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `terminal_from_id` bigint(20) NOT NULL,
  `terminal_to_id` int(11) NOT NULL,
  `journey_via` int(11) DEFAULT NULL,
  `bus_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bus_info_id` (`bus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `root` */

insert  into `root`(`id`,`terminal_from_id`,`terminal_to_id`,`journey_via`,`bus_id`) values (1,1,2,5,1),(2,2,4,1,2),(3,1,2,10,3),(4,2,4,10,2),(5,2,4,5,1);

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `terminal_id_from` int(11) NOT NULL,
  `terminal_id_to` int(11) NOT NULL,
  `journey_via` int(11) NOT NULL,
  `arival_time` varchar(11) NOT NULL,
  `departure_time` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `root_info_id` (`terminal_id_from`),
  KEY `terminal_info_id` (`terminal_id_to`),
  KEY `time_info_id` (`journey_via`),
  KEY `fare_info_id` (`arival_time`),
  KEY `bus_info_id` (`departure_time`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

/*Table structure for table `terminal` */

DROP TABLE IF EXISTS `terminal`;

CREATE TABLE `terminal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `terminal_name` varchar(100) NOT NULL,
  `terminal_phone` varchar(255) DEFAULT NULL,
  `terminal_detail` text NOT NULL,
  `terminal_photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `terminal` */

insert  into `terminal`(`id`,`terminal_name`,`terminal_phone`,`terminal_detail`,`terminal_photo`) values (1,'Multan',NULL,'Multan is the city of saints.....','terminal image'),(2,'Lahore',NULL,'Lahore is the capital of punjab......','lahore city image'),(3,'Karachi',NULL,'Karachi detail here............','image place here'),(4,'Bahawalpur',NULL,'Detail about Bahawalpur..............','terminal image'),(5,'Sahiwal',NULL,'Detail about Sahiwal.........','terminal image'),(6,'Rahimyar Khan',NULL,'Description about Rayimyar Khan......','Rahimyar Khan image'),(7,'Islamabad',NULL,'Islamabad terminal Detail here....','Islm terminal img'),(8,'Rawalpindi',NULL,'Rawalpindi terminal detail....','Rawalpindi terminal imag'),(9,'Faisalabad',NULL,'Faisalabad terminal detail here.....','Faisalabad terminal img'),(10,'Okara',NULL,'this is Okara terminal','okara image');

/*Table structure for table `ticket` */

DROP TABLE IF EXISTS `ticket`;

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `issue_date_time` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `cancel_date_time` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ticket` */

/*Table structure for table `timing` */

DROP TABLE IF EXISTS `timing`;

CREATE TABLE `timing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `terminal_id` int(11) DEFAULT NULL,
  `timing_depDate` date NOT NULL,
  `timing_depTime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `timing` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`email`,`password`,`photo`) values (1,'sohail','sohail@yahoo.com','123456','place image');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
