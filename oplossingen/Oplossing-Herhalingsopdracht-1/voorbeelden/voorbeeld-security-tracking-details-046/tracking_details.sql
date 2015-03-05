-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2012 at 09:50 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Table structure for table `tracking_details`
--

CREATE TABLE IF NOT EXISTS `tracking_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by_user_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `changed_by_user_id` int(11) NOT NULL,
  `changed_on` datetime NOT NULL,
  `is_archived` tinyint(1) NOT NULL,
  `archived_by_user_id` int(11) NOT NULL,
  `archived_on` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `activated_by_user_id` int(11) NOT NULL,
  `activated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
