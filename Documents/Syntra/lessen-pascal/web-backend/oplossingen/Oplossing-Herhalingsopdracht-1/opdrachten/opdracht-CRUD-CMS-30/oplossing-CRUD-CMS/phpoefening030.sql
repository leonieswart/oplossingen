-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2012 at 01:18 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpoefening030`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE IF NOT EXISTS `artikels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titel` text NOT NULL,
  `artikel` text NOT NULL,
  `kernwoorden` text NOT NULL,
  `datum` date NOT NULL,
  `tracking_details` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `titel`, `artikel`, `kernwoorden`, `datum`, `tracking_details`) VALUES
(19, 'CMS-test', 'test', 'test', '2012-01-01', 17),
(20, 'testartikels', 'testje', 'test, php', '2012-05-05', 18),
(21, 'laatste test', 'teste', 'qsdf', '2012-01-01', 19);

-- --------------------------------------------------------

--
-- Table structure for table `cms_settings`
--

CREATE TABLE IF NOT EXISTS `cms_settings` (
  `id` int(10) unsigned NOT NULL,
  `password_salt` text COLLATE utf8_bin NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cms_settings`
--

INSERT INTO `cms_settings` (`id`, `password_salt`, `last_modified`) VALUES
(0, 0x51244430786c7135, '2012-06-06 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tracking_details`
--

INSERT INTO `tracking_details` (`id`, `created_by_user_id`, `created_on`, `changed_by_user_id`, `changed_on`, `is_archived`, `archived_by_user_id`, `archived_on`, `is_active`, `activated_by_user_id`, `activated_on`) VALUES
(15, 14, '2012-06-17 17:39:11', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '0000-00-00 00:00:00'),
(17, 14, '2012-06-18 01:16:30', 0, '0000-00-00 00:00:00', 0, 14, '2012-06-18 23:16:08', 1, 14, '2012-06-18 23:52:57'),
(18, 14, '2012-06-18 21:42:57', 14, '2012-06-18 23:51:05', 0, 14, '2012-06-18 23:52:21', 0, 14, '2012-06-19 01:10:08'),
(19, 14, '2012-06-18 22:04:45', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 14, '2012-06-18 23:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_type` int(10) unsigned NOT NULL,
  `last_login` datetime NOT NULL,
  `tracking_details` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_type`, `last_login`, `tracking_details`) VALUES
(14, 'test@test.be', '8ad8590ec5ad830e448efaece8efd45b', 2, '2012-06-18 01:20:07', 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
