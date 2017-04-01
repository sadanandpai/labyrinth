-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2016 at 04:02 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `labyrinth`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL,
  `level` varchar(4) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `next_level` varchar(4) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `level`, `answer`, `next_level`, `updated_at`) VALUES
(1, '1', '$2y$10$yr9S6pTr5TzMT5OL.5PMI.b1X6LsbfFbBy/Zli14Lmj47SZQyEru6', '1.3', '2015-10-16 18:39:30'),
(2, '1.3', '$2y$10$OtEC29SO6pSFLDl7pE6L8OlNOXoZXKfT0IQiegUR.Nw/3EqdWiFxu', '1.6', '2015-10-16 20:09:52'),
(3, '1.6', '$2y$10$ul77Ne/sNbdMpVYqLAOeXOkkmC5dYxrchiTLGXr9Jb2.Gh8iJJCCq', '2', '2015-10-17 19:14:40'),
(4, '2', '$2y$10$5TzRma2M4OfQ4dVZNlzVbuyt805ewSNZWgrO8SWByIs6uZlG7kIby', '3', '2015-10-17 22:11:25'),
(5, '3', '$2y$10$VeDRlRw/.7sQXAFcQdqFj.1QZxRFIfJdvm/gngQ2rk5opyeBZXjxa', '4', '2015-10-18 00:57:59'),
(10, '7', '$2y$10$4xDAgeTI/f2DYGKN3bvP4ehcDPkSn0QA5bY1Tz7/J9cxYSLadVPPa', '8', '2015-10-22 07:40:23'),
(11, '8', '$2y$10$CNekEOO4NDNgxqHpAuFNgeCL8oL5DbBOl5wPlCQxUPxvd8fvjQ/9W', '9', '2015-10-22 07:42:35'),
(8, '5', '$2y$10$FGXMNHhF06.70wxNHt/gFeQXwgeVpn0bNjLP4TyIrXNfr91L4Si7G', '6', '2015-10-22 07:42:01'),
(9, '6', '$2y$10$zjxzUxYnjs/hEsyV5ooby.x..OU5rjlW/BCX397v16i0fHUKVIV4y', '7', '2015-10-22 07:42:11'),
(6, '4', '$2y$10$2JTQ2v6SW72D3ZNv8vURnOuAOmGKrJEvFhyhlfAffUQksGcSVxpKW', '4.5', '2015-10-18 07:40:56'),
(7, '4.5', '$2y$10$CV8NM0E0ZY/7vlxxLoLubeiYCIB3ES/.jA/rXLN6Q9MZIO4L5gVui', '5', '2015-10-19 07:36:37'),
(12, '9', '$2y$10$wAk1WyV3jUzptryNCY6R9.nsIV3Xyn3e3guRjqV9W0XzryvKbD2.6', '9.5', '2015-10-22 07:55:57'),
(13, '9.5', '$2y$10$JVJ0fMp8X/bXz1dLQLc2B.mxufpCm8ntkZetUcuY.rybPpqIjW5C.', '10', '2015-10-22 21:00:54'),
(14, '10', '$2y$10$SW9pG.Gbgz8ujY8Qoar.Ie4/XXHHW04ydDW1ktq9lL6IFf8o.T3Ji', '11', '2015-10-22 21:18:23'),
(15, '11', '$2y$10$LZf9Z5yopJsy2GFtcff6lOGmymKOxgIwRJNPo589M4emx6s5EVCPW', '12', '2015-10-23 00:09:37'),
(17, '12', '$2y$10$Yr31hKDQM7JPhBff3Zb2IOoc0u0qUY.fN76DHkYOApcx4p2zGnkx2', '14', '2015-10-23 00:10:34'),
(18, '13', '$2y$10$ZvicHh8RMEwFZendokLyv.x6x2SMZETBRb4eYzRd.Y2v6c5Nf3AXK', '13.3', '2015-10-23 00:14:03'),
(16, '12', '$2y$10$55DrSoGCKMPGfKE3z3zWYeLqbPrjG0mmvvNkeSJ/9GTirWTemAHEK', '13', '2015-10-23 00:11:59'),
(19, '13.3', '$2y$10$DrwS4nXNFM89XP6Hf5dxaeGLijAmUWWNmVDQwxC1oOqLsBFTCU0sO', '13.6', '2015-10-23 00:14:21'),
(20, '13.6', '$2y$10$0WvRWsKMg0iKJf9IGfO7GOMY6Fam6HkwsFmA2Ox4gCEO6sX2h5zUO', '13', '2015-10-23 00:14:47'),
(21, '14', '$2y$10$.3HKIJWKmEEoZCGEM7ANN.65GNnfkYuoAQ9Uk0.ax3F9obrQGtQpm', '15', '2015-10-24 19:34:56'),
(22, '15', '$2y$10$azAEChjOcethLYNY0JzjL.dpeFL5XGfzeknrI2aL0vpxosFE4H4ry', '16', '2015-10-24 19:42:23'),
(23, '16', '$2y$10$tRiTuIAv6G9VTy8m/XwiauOdzn2z4Kdak8mq30RgbFvh.hrIU03XG', '17', '2015-10-24 19:55:57'),
(24, '17', '$2y$10$HSaPVGXiUuhQt.DZYw7XpORoP2UxHMX6M2PzLQGFD6YwPuwyYZdyy', '18', '2015-10-24 21:36:15'),
(25, '18', '$2y$10$/z9a6m25dJnNW3HFJulSKuEY/vKpSLinqt2MO3SoN5brCyrywZ4dO', '19', '2015-10-24 21:36:31'),
(26, '19', '$2y$10$.U6yo3Csn27ZQSWa8m/ayem.vwo/TczsGSxjdq1YvpSxpvvSkalMK', '20', '2015-10-24 22:23:15'),
(27, '20', '$2y$10$T2IFwumxBlza0HNIRP33peYE.eAIEzw05Eg5kiInf7/6FZC9aOdVq', '21', '2015-10-24 22:44:37'),
(28, '21', '$2y$10$pGqTjA2A.sF1KsT1cxXj3ONCfViUzdj8D.w5YohzK7/lJQLZKZTRm', '22', '2015-10-25 00:03:35'),
(29, '22', '$2y$10$40aATWG1Ocmnu6TgNWT5fO7BDEDxBE7Wjqrol2FUH1zLKYGzVk65O', '23', '2015-10-25 00:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `userdatas`
--

CREATE TABLE IF NOT EXISTS `userdatas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `level` varchar(4) NOT NULL,
  `attempt` int(11) NOT NULL,
  `answer` varchar(10000) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `REFER` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `userdatas`
--

INSERT INTO `userdatas` (`id`, `username`, `level`, `attempt`, `answer`, `updated_at`, `created_at`) VALUES
(1, 'laraadmin', '1', 0, '', '2016-10-22 19:24:50', '2016-10-22 19:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `role` varchar(5) DEFAULT 'user',
  `active` int(11) NOT NULL DEFAULT '1',
  `level` varchar(4) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '1',
  `session_id` varchar(60) NOT NULL,
  `activity` int(11) NOT NULL DEFAULT '0',
  `remember_token` text,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mobile`, `email`, `role`, `active`, `level`, `rank`, `session_id`, `activity`, `remember_token`, `updated_at`, `created_at`) VALUES
(3, 'laraadmin', '$2y$10$V3cKgpzDGlQPocmE5g9v.OZHCvB0VQl1OZuzguYfszFv/8t5E0gJS', '9876543210', 'laraadmin@email.com', 'admin', 1, '1', 1, '', 0, 'uTe6VAxDVdUS7Xiz2sbvTlIA7rVROD0QJaIZNKhPo5ziyCtfWwJSDjSyjA0U', '2016-10-22 19:26:31', '2016-10-22 19:24:17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
