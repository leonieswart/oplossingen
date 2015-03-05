-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 19 aug 2014 om 10:05
-- Serverversie: 5.6.16
-- PHP-versie: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databank: `phpoefening029`
--
CREATE DATABASE IF NOT EXISTS `phpoefening029` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpoefening029`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(150) COLLATE utf8_bin NOT NULL,
  `salt` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(150) COLLATE utf8_bin NOT NULL,
  `lastlogin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=34 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `email`, `salt`, `password`, `lastlogin`) VALUES
(20, 'eerste@test.be', '111692398453f20b088a85b6.58827306', '8c840f82852834cf8a85d74aff81ce9642780eee033246600132dd5ab97a48bbf12c866539507ab3bd081bcee4c94d939d08ae5bb46123b3dca9a3d642dc90d6', '2014-08-18 16:17:44'),
(22, 'tweede@test.bet', '104802794253f20c094d2a82.17889503', 'd169bf65b0cad918d68c409e5f3cebce7d6b9bc004836bd80197f3beee2e72d81802afa7f5d2321cd9298129ded61436a401c025e55a9dd79ac1960088f1fe79', '2014-08-18 16:22:01'),
(24, 'derde@test.bet', '7990697853f20cfcf1b3a9.27507369', '2725a0c972e93300f0d8c460cf9f451c8e2c5921dd04c24284f4ad9df95b95654af1ae9183d50f0ea87e86cd0dd0337fa5e31eb9caa545eb30b72faff692dd85', '2014-08-18 16:26:04'),
(29, 'vierdetest@test.be', '68313241353f214e7dac580.54834034', '4915cf5fe642b6c202fbc34e52eac9a94dc92c8f65c4f7b81c9d6d70d0c9b523c81acc3d5d2834f81f98376ab37bc74f8f76d1818b0f53c8ba05d0591012f87b', '2014-08-18 16:59:51'),
(31, 'zesde@test.be', '107708274053f2fb24ee95e9.33786887', '5b52ce0fc54f573c9278231e8510e68d71d53c5118dfa2d2444e72c00576ffd67a2668f590567a7ca2e7c48a2bbd8e7461b447247e3b403128e5a7ca0bf558c4', '2014-08-19 09:22:12'),
(32, 'zevende@test.be', '183321579153f2fc3a632621.77554125', '40deb262fa77c28bd79c5c7d0a7d84e7552177bd403e4dd1c06f3f953bec102d3fd3796b82b5997b76f32ff3970f0591478749838881d179a06ac728821b1762', '2014-08-19 09:26:50'),
(33, 'achtste@test.be', '21844637753f2fcbc14a336.90598185', '8e7d0072c252d8a18153d184258d2673acc59f15e38927af3659843423e02101843080d00da23fb95bb6f7abbb408aebc6992a5730d761f348c7fcd8cee5faf5', '2014-08-19 09:29:00');
