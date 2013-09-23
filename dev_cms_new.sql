-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2013 at 11:20 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dev_cms`
--
CREATE DATABASE IF NOT EXISTS `dev_cms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dev_cms`;

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', '1', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Ab6117f5', 2, '', NULL, 'N;'),
('admin', 2, 'Manages Auth Items and Role Assignments. RBAM required role.', NULL, 'N;'),
('Auth Assignments Manager', 2, 'Manages Role Assignments. RBAM required role.', NULL, 'N;'),
('Auth Items Manager', 2, 'Manages Auth Items. RBAM required role.', NULL, 'N;'),
('Authenticated', 2, 'Default role for users that are logged in. RBAC default role.', 'return !Yii::app()->getUser()->getIsGuest();', 'N;'),
('Guest', 2, 'Default role for users that are not logged in. RBAC default role.', 'return Yii::app()->getUser()->getIsGuest();', 'N;'),
('Site', 1, '', NULL, 'N;'),
('Site:Captcha', 0, '', NULL, 'N;'),
('Site:CCaptchaAction', 0, '', NULL, 'N;'),
('Site:Contact', 0, '', NULL, 'N;'),
('Site:Error', 0, '', NULL, 'N;'),
('Site:Index', 0, '', NULL, 'N;'),
('Site:Login', 0, '', NULL, 'N;'),
('Site:Logout', 0, '', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('admin', 'Auth Assignments Manager'),
('admin', 'Auth Items Manager'),
('Ab6117f5', 'Site'),
('Site', 'Site:Captcha'),
('Site', 'Site:CCaptchaAction'),
('Site', 'Site:Contact'),
('Site', 'Site:Error'),
('Site', 'Site:Index'),
('Site', 'Site:Login'),
('Site', 'Site:Logout');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `privilages` text NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `privilages`, `desc`) VALUES
(1, 'God', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE IF NOT EXISTS `sample` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field0` tinyint(4) DEFAULT '0',
  `field1` tinyint(4) DEFAULT '0',
  `field2` tinyint(4) DEFAULT '0',
  `field3` tinyint(4) DEFAULT '0',
  `field4` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `field5` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `field6` text COLLATE utf8_unicode_ci NOT NULL,
  `field7` text COLLATE utf8_unicode_ci NOT NULL,
  `field8` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `field9` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `field10` date DEFAULT NULL,
  `field11` time DEFAULT NULL,
  `field12` datetime DEFAULT NULL,
  `field13` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `field14` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `sa_category`
--

CREATE TABLE IF NOT EXISTS `sa_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `season_id` int(100) NOT NULL,
  `img` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `sa_product`
--

CREATE TABLE IF NOT EXISTS `sa_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_en` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ar` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `sa_season`
--

CREATE TABLE IF NOT EXISTS `sa_season` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_en` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `published` tinyint(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `sa_season`
--

INSERT INTO `sa_season` (`id`, `title_en`, `title_ar`, `img`, `published`) VALUES
(19, 'sdjf', 'sdfj', '', 0),
(20, 'sdjf', 'sdfj', '', 1),
(21, 'sdjf', 'sdfj', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `activationToken` varchar(255) NOT NULL,
  `lastActivationRequest` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `lostPasswordRequest` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `signUpDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastSignIn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `activationToken`, `lastActivationRequest`, `lostPasswordRequest`, `active`, `signUpDate`, `lastSignIn`) VALUES
(1, 'Odai', '184c4b2722e6cde317067d27afd6bc3d38e2656c69a03ff1bf0c85aaf22e20473', 'asd', '', '2013-09-14 11:28:37', 0, 0, '2013-09-14 11:28:37', '2013-09-14 11:28:37'),
(5, 'Ad', '184c4b2722e6cde317067d27afd6bc3d38e2656c69a03ff1bf0c85aaf22e20473', 'ad', '', '2013-09-14 12:50:09', 0, 0, '2013-09-14 12:50:09', '2013-09-14 12:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sa_product`
--
ALTER TABLE `sa_product`
  ADD CONSTRAINT `sa_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `sa_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
