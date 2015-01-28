-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 12 aug 2014 om 11:10
-- Serverversie: 5.6.16
-- PHP-versie: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databank: `voorbeeld-security-tracking-details`
--
CREATE DATABASE IF NOT EXISTS `voorbeeld-security-tracking-details` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `voorbeeld-security-tracking-details`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artikels`
--

CREATE TABLE IF NOT EXISTS `artikels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titel` text NOT NULL,
  `artikel` text NOT NULL,
  `kernwoorden` text NOT NULL,
  `datum` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Gegevens worden uitgevoerd voor tabel `artikels`
--

INSERT INTO `artikels` (`id`, `titel`, `artikel`, `kernwoorden`, `datum`, `is_active`) VALUES
(1, 'Artikel test', 'Dit is de body van het artikel', 'test, php', '2010-06-18', 1),
(5, 'De Standaard', 'onweer', 'onweer', '2012-06-18', 1),
(8, 'mod_rewrite test', 'test', 'test', '2012-01-01', 0),
(9, 'test', 'test', 'test', '2012-01-01', 1),
(10, 'qsdf', 'qsdf', 'qsdfqsdf', '2012-05-01', 1),
(11, 'juppie', 'qsdf', 'qsdf', '2012-09-01', 0);