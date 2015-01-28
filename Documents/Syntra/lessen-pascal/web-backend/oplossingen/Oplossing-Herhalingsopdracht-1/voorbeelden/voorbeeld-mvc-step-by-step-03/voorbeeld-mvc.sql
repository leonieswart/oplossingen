-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 19 aug 2014 om 15:55
-- Serverversie: 5.6.16
-- PHP-versie: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databank: `voorbeeld-mvc`
--
CREATE DATABASE IF NOT EXISTS `voorbeeld-mvc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `voorbeeld-mvc`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artikels`
--

CREATE TABLE IF NOT EXISTS `artikels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titel` text NOT NULL,
  `tekst` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `artikels`
--

INSERT INTO `artikels` (`id`, `titel`, `tekst`) VALUES
(1, 'Janoekovitsj: ''Oekraïense crisis veroorzaakt door westers beleid', 'Voormalig Oekraïens president Viktor Janoekovitsj wil dat de Krim bij Oekraïne blijft. Dat liet hij weten op een persconferentie. Janoekovitsj erkent het huidige bewind echter niet en zal ook niet deelnemen aan de verkiezingen in mei.\r\n‘Ik zal blijven strijden voor de toekomst van Oekraïne’, verklaarde Viktor Janoekovitsj op een persconferentie in het Russische Rostov. ‘Ik werd niet afgezet, ik moest vluchten uit vrees voor mijn leven en dat van mijn naasten. Het nieuwe Oekraïense parlement is onwettelijk, de stemming die eraan voorafging gebeurde onder druk van de ‘militanten van Maidan.’'),
(2, 'Vlaamse regering vordert opleidingssteun Heinz terug', 'De Vlaamse regering gaat de opleidingssteun die werd toegekend aan sauzenproducent Heinz terugvorderen. Dat laten de topministers van de Vlaamse regering weten na een ontmoeting met de vakbonden van Heinz. Het bedrijf kreeg in totaal 942.110 euro opleidingssteun.\r\nDe directie van Heinz kondigde woensdag aan de productievestiging in Turnhout tegen het einde van het jaar te willen sluiten.\r\n\r\nSauzenproducent Heinz wil zijn vestiging in Turnhout, waar circa 200 mensen werken, tegen het einde van het jaar sluiten. Het grootste deel van de productie zal verhuizen naar het Engelse Telford. De sluiting moet Heinz toelaten efficiënter te werken en de overcapaciteit helpen reduceren, zei het bedrijf woensdag.');
