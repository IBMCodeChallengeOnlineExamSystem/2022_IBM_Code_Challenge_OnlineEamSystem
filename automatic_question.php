/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.1.57-community : Database - automatic_question
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`automatic_question` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `automatic_question`;

/*Table structure for table `college` */

DROP TABLE IF EXISTS `college`;

CREATE TABLE `college` (
  `college_id` int(100) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `loginid` int(100) DEFAULT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `college` */

insert  into `college`(`college_id`,`college_name`,`address`,`email`,`website`,`loginid`) values 
(1,'dd','kakkanad ernakulam','arunraj0861@gmail.com','www.cyberprism.in',9);

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `dept_id` int(100) NOT NULL AUTO_INCREMENT,
  `department` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`dept_id`,`department`) values 
(1,'computer_science'),
(2,'mechanical'),
(3,'electrical'),
(4,'civil'),
(5,'electronics');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `loginid` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type1` varchar(100) DEFAULT NULL,
  `status` int(100) DEFAULT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`loginid`,`username`,`password`,`type1`,`status`) values 
(1,'G','GG','teacher',1),
(2,'admin','admin','admin',1),
(3,'david','david','teacher',1),
(4,'arun','arun','teacher',1),
(9,'job','job','college',1);

/*Table structure for table `question` */

DROP TABLE IF EXISTS `question`;

CREATE TABLE `question` (
  `question_id` int(100) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) DEFAULT NULL,
  `part` varchar(100) DEFAULT NULL,
  `subject_id` int(100) DEFAULT NULL,
  `teach_id` varchar(100) DEFAULT NULL,
  `department` int(100) DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `question` */

insert  into `question`(`question_id`,`question`,`part`,`subject_id`,`teach_id`,`department`) values 
(1,'d','parta',4,'f',5),
(2,'if','parta',4,'1',5),
(3,'FJ','parta',4,'1',5),
(4,'gWFGWR','parta',13,'1',5),
(5,'sdfghjkl','parta',13,'2',5),
(6,'fdghjkl;l,mn','parta',13,'2',5),
(7,';lkjhgf','parta',13,'2',5),
(8,'oilkujnhbgvfcdxs','parta',13,'2',5),
(9,'gterrrr','parta',13,'2',5),
(10,'wrtwrtwwwwww','parta',13,'2',5),
(11,'eeeeee','partb',13,'2',5),
(12,'qqqqqqq','parta',13,'2',5),
(13,'vvvvvvv','parta',13,'2',5),
(14,'vvvvvv','partb',13,'2',5),
(15,'bbbbbbbb','partb',13,'2',5),
(16,'nnn','partb',13,'2',5),
(17,'mmmmmmm','partb',13,'2',5),
(18,'kkkkkkkk','partb',13,'2',5),
(19,'jjjjjjjj','partb',13,'2',5),
(20,'fffffffff','partc',13,'2',5),
(21,'rrrrrrrrrrrrrrr','partc',13,'2',5),
(22,'eeeeeeeeeeeeee','partc',13,'2',5),
(23,'rrrrrrrrrrrrrrrrrrr','partc',13,'2',5),
(24,'wwwwwwwwwwwwwwww','partc',13,'2',5),
(25,'qqqqqqqqqqqqqq','partc',3,'2',5),
(26,'dddddddddddddddddd','partc',6,'2',5),
(27,'lllllllllllllllll','partc',13,'2',5),
(28,'dddddd','partb',5,'2',5);

/*Table structure for table `subjects` */

DROP TABLE IF EXISTS `subjects`;

CREATE TABLE `subjects` (
  `subject_id` int(100) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) DEFAULT NULL,
  `dept_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `subjects` */

insert  into `subjects`(`subject_id`,`subject`,`dept_id`) values 
(8,'aaasdcf',2),
(9,'network',5),
(10,'afaf',2),
(11,'comp',1),
(12,'comp',1),
(13,'sse',5),
(14,'ccn',5),
(15,'prp',5);

/*Table structure for table `teacher` */

DROP TABLE IF EXISTS `teacher`;

CREATE TABLE `teacher` (
  `teach_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `experiance` varchar(100) DEFAULT NULL,
  `loginid` int(100) DEFAULT NULL,
  PRIMARY KEY (`teach_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `teacher` */

insert  into `teacher`(`teach_id`,`name`,`college`,`department`,`qualification`,`experiance`,`loginid`) values 
(1,'WDE','HLL','GLG','G','LG',1),
(2,'david john','ff','electronics','BCA','55',3),
(3,'arun','Sdfg','5','BCA','44',4);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
