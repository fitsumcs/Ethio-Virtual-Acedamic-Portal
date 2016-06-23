-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2016 at 07:28 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `computationalsciencepost`
--

CREATE TABLE IF NOT EXISTS `computationalsciencepost` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(40) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=168 ;

-- --------------------------------------------------------

--
-- Table structure for table `computationalsiencepostanswer`
--

CREATE TABLE IF NOT EXISTS `computationalsiencepostanswer` (
  `answer_id` int(10) NOT NULL AUTO_INCREMENT,
  `postId` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engineringpost`
--

CREATE TABLE IF NOT EXISTS `engineringpost` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(40) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=168 ;

--
-- Dumping data for table `engineringpost`
--

INSERT INTO `engineringpost` (`post_id`, `content`, `email`, `department`) VALUES
(167, 'Hey Men My android studio is not working properly this week\r\nwhy its', 'kidus@gmail.com', 'SoftWare'),
(165, 'Is Php or Asp is Best', 'bulidiriba@gmail.com', 'SoftWare'),
(164, 'What is the best php book', 'bulidiriba@gmail.com', 'SoftWare'),
(166, 'Hey Guys What is The Best Source For C++ Opengl  ', 'kidus@gmail.com', 'SoftWare');

-- --------------------------------------------------------

--
-- Table structure for table `engineringpostanswer`
--

CREATE TABLE IF NOT EXISTS `engineringpostanswer` (
  `answer_id` int(10) NOT NULL AUTO_INCREMENT,
  `postId` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `engineringpostanswer`
--

INSERT INTO `engineringpostanswer` (`answer_id`, `postId`, `email`, `answer`) VALUES
(1, 165, 'bulidiriba@gmail.com', 'What are you speaking'),
(2, 165, 'bulidiriba@gmail.com', 'what is php'),
(3, 165, 'bulidiriba@gmail.com', 'hey php and asp are not the ssame'),
(4, 164, 'bulidiriba@gmail.com', 'As I think the book which is called Php and Mysql for beginners is the good one if you are beginners for the php'),
(5, 165, 'mich@gmail.com', 'Hey men this is not a big deal just be cool\r\n   .php is the server side scripting language\r\n  but asp is jus the frame work which is done from c# language'),
(6, 164, 'mich@gmail.com', 'in mY view The w3 school is the best references for beginners'),
(8, 164, 'kidus@gmail.com', 'There are so many books you can try what you wish but if you are beginners the book called php and mysql for beginners is good');

-- --------------------------------------------------------

--
-- Table structure for table `healthrelatedpost`
--

CREATE TABLE IF NOT EXISTS `healthrelatedpost` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(40) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=168 ;

-- --------------------------------------------------------

--
-- Table structure for table `healthrelatedpostanswer`
--

CREATE TABLE IF NOT EXISTS `healthrelatedpostanswer` (
  `answer_id` int(10) NOT NULL AUTO_INCREMENT,
  `postId` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `content`, `email`) VALUES
(95, 'How can I improve my PHP skill', 'fruit@gmail.com'),
(63, 'what is php?', 'mich@gmail.com'),
(61, 'Can any one tell me the challange of php', 'silogetcho@gmail.com'),
(62, 'dont forget', 'bulidiriba@gmail.com'),
(56, 'what is java?', 'bulidiriba@gmail.com'),
(55, 'what is python?', 'bulidiriba@gmail.com'),
(98, 'I dont uderstand', 'bulidiriba@gmail.com'),
(97, 'No Need To worry about that just go head with  \r\nyour_______\r\nhaha I dont know.', 'mich@gmail.com'),
(102, 'What is pyhon?', 'silogetcho@gmail.com'),
(101, 'what is the seessson?', 'bulidiriba@gmail.com'),
(100, 'what is ', 'bulidiriba@gmail.com'),
(154, 'Hey men am going with java but i found too many error so How can I solve ', 'bulidiriba@gmail.com'),
(153, 'What i java\r\n', 'bulidiriba@gmail.com'),
(152, 'can any one tell me what is The C#  language', 'bulidiriba@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `postanswer`
--

CREATE TABLE IF NOT EXISTS `postanswer` (
  `answer_id` int(10) NOT NULL AUTO_INCREMENT,
  `postId` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `postanswer`
--

INSERT INTO `postanswer` (`answer_id`, `postId`, `email`, `answer`) VALUES
(1, 95, 'silogetcho@gmail.com', 'Python is the programming language that is used in many technology advance'),
(3, 95, 'silogetcho@gmail.com', 'Python is the programming language that is used in many technology advance'),
(4, 63, 'mich@gmail.com', 'Php is the scriopahg'),
(6, 97, 'bulidiriba@gmail.com', 'Me too what is python'),
(7, 63, 'bulidiriba@gmail.com', 'I love php Than you Love'),
(8, 63, 'bulidiriba@gmail.com', 'What the hell you talking about'),
(9, 95, 'bulidiriba@gmail.com', 'Just study for a minute'),
(10, 63, 'bulidiriba@gmail.com', 'Php is the amazong scripting language'),
(11, 63, 'silogetcho@gmail.com', 'I dont under stand what you talking about men'),
(12, 63, 'silogetcho@gmail.com', 'I dont under stand what you talking about men'),
(14, 63, 'silogetcho@gmail.com', 'shut up'),
(15, 63, 'silogetcho@gmail.com', 'Whta the  hell'),
(16, 95, 'silogetcho@gmail.com', 'Ypa'),
(17, 56, 'silogetcho@gmail.com', 'Java is the object ooreinted language that is used in many advanced technology'),
(18, 56, 'bulidiriba@gmail.com', 'I think your anwer is not correct so try to change that answer'),
(19, 63, 'bulidiriba@gmail.com', 'really do you think that '),
(20, 63, 'bulidiriba@gmail.com', 'Yeah that sound seems good'),
(21, 95, 'mich@gmail.com', 'Okey I am Telling you just go head on your html and css'),
(22, 56, 'bulidiriba@gmail.com', 'Java is simply Java'),
(23, 63, 'mich2@gmail.com', 'php Is all about your duty'),
(24, 63, 'mich2@gmail.com', 'php Is all about your duty'),
(25, 63, 'bulidiriba@gmail.com', 'Php Is my loving language'),
(26, 63, 'bulidiriba@gmail.com', 'php is a fantastic scriptin language '),
(27, 95, 'bulidiriba@gmail.com', 'What is php do you know it'),
(28, 102, 'bulidiriba@gmail.com', 'Python is the most amazing scripting language'),
(29, 63, 'bulidiriba@gmail.com', 'Do you know what the php is?'),
(30, 0, 'hiskias@gmail.com', 'Do you know what the php is?'),
(31, 154, 'bulidiriba@gmail.com', 'Why you hate this pls dont be '),
(32, 95, 'bulidiriba@gmail.com', 'Just try for a month'),
(33, 102, 'bulidiriba@gmail.com', 'Python is just what you want\r\n'),
(34, 63, 'bulidiriba@gmail.com', 'ajhkjhkajka'),
(35, 100, 'bulidiriba@gmail.com', 'ghjkahjk');

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE IF NOT EXISTS `resource` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(170) NOT NULL,
  `title` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`id`, `name`, `title`, `reg_date`) VALUES
(27, 'ID-SYSTEM-Kidus.pdf', 'Maths', '2016-06-04 19:25:02'),
(28, '4-J2ME-DATABASE.pdf', 'Chemisrty', '2016-06-04 19:32:25'),
(30, 'chapter 6 notes.pptx', 'Chemisrty', '2016-06-04 19:39:21'),
(33, 'successful-public-speaking.pdf', 'English Exercises', '2016-06-04 20:16:11'),
(36, 'codingbat-python-soru-cevap-2.pdf', 'Python exersises', '2016-06-05 19:27:32'),
(37, 'codingbat-python-soru-cevap-2.pdf', 'Python exersises', '2016-06-05 19:29:48'),
(38, 'codingbat-python-soru-cevap-2.pdf', 'Chemisrty', '2016-06-05 19:30:31'),
(39, 'codingbat-python-soru-cevap-2.pdf', 'Python exersises', '2016-06-05 19:31:51'),
(40, '---01 04. What is abstraction - YouTube.mp4', 'Java', '2016-06-05 19:33:22'),
(41, 'PHP and MySQL Web Development, 4th Edition.pdf', 'English', '2016-06-06 01:00:49'),
(42, 'book.zip', 'Maths', '2016-06-06 20:24:22'),
(43, 'birt-database-2_0_1.zip', 'C++ exersises', '2016-06-06 20:25:31'),
(44, 'birt-database-2_0_1.zip', 'C++ exersises', '2016-06-06 20:27:37'),
(45, 'PHP Cookbook, 3rd Edition.pdf', 'Php exersise', '2016-06-06 18:00:19'),
(46, 'proposa2l.docx', '', '2016-06-07 09:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `socialsciencepostanswer`
--

CREATE TABLE IF NOT EXISTS `socialsciencepostanswer` (
  `answer_id` int(10) NOT NULL AUTO_INCREMENT,
  `postId` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `socialsiencepost`
--

CREATE TABLE IF NOT EXISTS `socialsiencepost` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(40) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=168 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `university` varchar(20) NOT NULL,
  `field` varchar(40) NOT NULL,
  `department` varchar(20) NOT NULL,
  `yearLevel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`,`emailid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `emailid`, `password`, `university`, `field`, `department`, `yearLevel`) VALUES
(61, 'Hiaskias', 'Hiski@gmail.com', '6cf68911661820f163437464eb779d67', 'Addis Ababa', 'Enginering', 'SoftWare', '3rd year'),
(64, 'Amanuel Belete', 'amanuel@gmail.com', 'ccda1683d8c97f8f2dff2ea7d649b42c', 'Bahardar', 'Enginering', 'Civil', '2nd year'),
(65, 'Michael Mandefro', 'mich@gmail.com', '2ec490229423f4a6879d555a81bd6e4a', 'Addis Ababa', 'Enginering', 'SoftWare', '3rd year'),
(68, 'Amante Diriba', 'bulidiriba@gmail.com', 'a2556336165519b0bfcecfef03c6ace8', 'Addis Ababa', 'Enginering', 'SoftWare', '3rd year'),
(69, 'Kidus Mamuye', 'kidus@gmail.com', '436691ec58816e4e119ac5a18176723c', 'Addis Ababa', 'Enginering', 'SoftWare', '3rd year'),
(70, 'bareket', 'beki@gmail.com', '3aa00f6bf44ef9dedba2bdaaefd02941', 'Jimma', 'Enginering', 'Civil', '2nd year'),
(71, 'Abera', 'Abera@gmail.com', '96264f6f50293e261cda609a390d32e3', 'Addis Ababa', 'Enginering', 'Civil', '3rd year');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
