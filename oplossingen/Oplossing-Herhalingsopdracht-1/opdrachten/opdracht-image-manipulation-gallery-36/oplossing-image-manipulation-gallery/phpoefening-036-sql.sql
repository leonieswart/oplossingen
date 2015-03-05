-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 25 aug 2014 om 12:10
-- Serverversie: 5.6.16
-- PHP-versie: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databank: `phpoefening036`
--
CREATE DATABASE IF NOT EXISTS `phpoefening036` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpoefening036`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `caption` varchar(250) NOT NULL,
  `is_archived` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `gallery`
--

INSERT INTO `gallery` (`id`, `file_name`, `title`, `caption`, `is_archived`) VALUES
(1, '53fb037719dcb-ai-wei-wei.jpeg', 'Eerste test met db', 'Ai wei wei als cartoon', 1),
(2, '53fb03c49e0c6-ai-wei-wei.jpeg', 'Eerste test met db', 'Ai wei wei als cartoon', 1),
(3, '53fb066f16cd8-schattig-katje.jpeg', 'Schattig katje', 'test', 1),
(4, '53fb06c66bc34-schattig-katje.jpeg', 'Schattig katje', 'test', 1),
(5, '53fb09b76b891-ai-wei-wei.jpeg', 'Ai wei wei', 'Ai wei wei', 0),
(6, '53fb09bfd6d4c-schattig-katje.jpeg', 'Katje', 'Katje', 0);
