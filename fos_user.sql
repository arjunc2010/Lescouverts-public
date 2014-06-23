-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2014 at 02:03 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'arj', 'arj', 'arj@arj.com', 'arj@arj.com', 1, 'sbm39ie4kiokk84oww0s0gwco0ooko', '3FWHfNRE0NRX5WZIEQ3yUIQzqHJ7Ke56ro9FVHImptKfWY9yruzyR6y5c2vue3p04//2rMHnYsORbbxQq/waqw==', '2014-05-29 13:25:00', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(2, 'resto', 'resto', 'resto@restomail.resto', 'resto@restomail.resto', 1, 'gkn53frgepkwcogc8804ggo8o4o88go', 'wireless', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{i:0;s:9:"ROLE_RESTO";}', 0, NULL),
(3, 'test', 'test', 'test@test.test', 'test@test.test', 1, 'lo1h8dbzftw4044wog8c0s8sckwwsw0', 'Iv4ZvqVTTSLt9/pRzlsip2FDMwRa8WCWAYADTzEjBnQkKOBrQGn7BYoghD+yaZi6UZspvqTYwxkkNZJ6/9YWGg==', '2014-05-22 18:03:55', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:5:"ADMIN";i:1;s:10:"ROLE_ADMIN";}', 0, NULL),
(4, 'testb', 'testb', 'TESTB@testb.com', 'testb@testb.com', 1, 'nq4f4ohbamo80wwgskc0ggoccowggko', 'QPMA2t56Uu5wa0S4bS7eK91y31YhX+syKiGoaXy9ysfc1dzDgKpfVm7y5J7ToaBN23+tMPIxrOHTsKj2Xo3KwA==', '2014-05-24 13:08:57', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_RESTO";}', 0, NULL),
(5, 'testc', 'testc', 'testc@testc.com', 'testc@testc.com', 1, 'joto86z026o8ooogk0cwsw0sw4ksk4g', 'oYjnfyXUnI9U1il50nffmGv+c5AwO/UZJ0yrqQ1jRwfNih850mogA3SQJL4eMrga4QSjMZV/Y/KUJucBxbfWjA==', '2014-06-01 11:15:47', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_RESTO";}', 0, NULL),
(6, 'usera', 'usera', 'dreena@gmail.com', 'dreena@gmail.com', 1, '3olvhea8x20ws44c8wgw8w8wg0scs48', 'KcrgfQ8ZX0UPIYcmQeDfzzwTt8vXVo6JCU5qzNJhhIq2Q5OhXnptYq4eu02OJya95n51uYDGLuQIeu4wDvxraw==', '2014-06-01 10:47:15', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:11:"ROLE_CLIENT";}', 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
