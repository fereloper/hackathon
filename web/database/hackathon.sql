-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2012 at 07:26 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `city_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(1, 'Barisal'),
(2, 'Chittagong'),
(3, 'Dhaka'),
(4, 'Khulna'),
(5, 'Rajshahi'),
(6, 'Rangpur'),
(7, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `report_id` int(10) unsigned DEFAULT NULL,
  `filename` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` int(5) DEFAULT NULL,
  PRIMARY KEY (`file_id`),
  KEY `report_id` (`report_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `report_id`, `filename`, `file_type`, `size`) VALUES
(1, 47, 'c88bb33a459146af1cf649256dc47323.jpg', 'image/jpeg', 780831),
(2, 48, '52ed6176b427d6d1dbdd6c8ef568631c.jpg', 'image/jpeg', 780831);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `report_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `thana_id` int(10) DEFAULT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`report_id`),
  KEY `thana_id` (`thana_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `user_id`, `thana_id`, `company_name`, `created`) VALUES
(47, 4, 2, 'ABV', '2012-12-01 06:08:26'),
(48, 4, 2, 'ABV', '2012-12-01 06:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `substriptions`
--

CREATE TABLE IF NOT EXISTS `substriptions` (
  `subscription_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `city_id` int(10) unsigned DEFAULT NULL,
  KEY `user_id` (`user_id`,`city_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `substriptions`
--

INSERT INTO `substriptions` (`subscription_id`, `user_id`, `city_id`) VALUES
(0, 4, 2),
(0, 4, 2),
(0, 4, 3),
(0, 4, 3),
(0, 4, 3),
(0, 4, 1),
(0, 4, 1),
(0, 4, 4),
(0, 4, 4),
(0, 4, 1),
(0, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE IF NOT EXISTS `thanas` (
  `thana_id` int(10) NOT NULL AUTO_INCREMENT,
  `city_id` int(10) NOT NULL,
  `thana_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`thana_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `thanas`
--

INSERT INTO `thanas` (`thana_id`, `city_id`, `thana_name`) VALUES
(1, 3, 'Dhanmondi'),
(2, 3, 'Mirpur'),
(3, 2, 'BoddorHat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `name`) VALUES
(4, 'sheikh303@gmail.com', '123', 'sheikh faiyaz '),
(5, 'a@a.com', '123', 'ayon.alfaz@yahoo.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `reports` (`report_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reports_ibfk_3` FOREIGN KEY (`thana_id`) REFERENCES `thanas` (`thana_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `substriptions`
--
ALTER TABLE `substriptions`
  ADD CONSTRAINT `substriptions_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `substriptions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
