-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2014 at 06:13 PM
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
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restoId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `text` text NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `restoId`, `userId`, `text`, `date_created`, `date_modified`) VALUES
(1, 1, 1, 'i like this resto i like this resto i like this resto i like this resto i like this resto i like this resto i like this resto i like this resto i like this resto i like this resto i like this resto i like this resto ', '2014-06-11', NULL),
(2, 1, 3, 'i dont like this resto', '2014-06-13', NULL),
(3, 2, 1, 'i dont like this resto', '2014-06-11', NULL),
(4, 2, 3, 'i like this resto', '2014-06-13', NULL),
(5, 1, 1, 'hello hello hello', '2014-06-12', NULL),
(6, 1, 1, 'Kiss my black ass man,.! kiss my black ass!', '2014-06-12', NULL),
(7, 1, 1, 'what the \r\nfuck!?', '2014-06-12', NULL),
(8, 3, 1, 'hello toulouse!! how you doing?', '2014-06-12', NULL),
(26, 1, 1, 'feedback popup form test', '2014-06-14', NULL),
(27, 1, 1, 'again test feedback form', '2014-06-14', NULL),
(28, 1, 1, 'TEST SID FEEDBACK', '2014-06-14', NULL),
(29, 1, 1, 'TEST SID FEEDBACK', '2014-06-14', NULL);

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
  `resto_id` int(11) DEFAULT NULL,
  `githubId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fbId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `resto_id`, `githubId`, `fbId`) VALUES
(1, 'arj', 'arj', 'arj@arj.com', 'arj@arj.com', 1, 'sbm39ie4kiokk84oww0s0gwco0ooko', '3FWHfNRE0NRX5WZIEQ3yUIQzqHJ7Ke56ro9FVHImptKfWY9yruzyR6y5c2vue3p04//2rMHnYsORbbxQq/waqw==', '2014-06-08 18:14:32', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, NULL, NULL, NULL),
(2, 'resto', 'resto', 'resto@restomail.resto', 'resto@restomail.resto', 1, 'gkn53frgepkwcogc8804ggo8o4o88go', 'wireless', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:9:"ROLE_RESTO";}', 0, NULL, 3, NULL, NULL),
(3, 'test', 'test', 'test@test.test', 'test@test.test', 1, 'lo1h8dbzftw4044wog8c0s8sckwwsw0', 'Iv4ZvqVTTSLt9/pRzlsip2FDMwRa8WCWAYADTzEjBnQkKOBrQGn7BYoghD+yaZi6UZspvqTYwxkkNZJ6/9YWGg==', '2014-05-22 18:03:55', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:5:"ADMIN";i:1;s:10:"ROLE_ADMIN";}', 0, NULL, NULL, NULL, NULL),
(4, 'testb', 'testb', 'TESTB@testb.com', 'testb@testb.com', 1, 'nq4f4ohbamo80wwgskc0ggoccowggko', 'QPMA2t56Uu5wa0S4bS7eK91y31YhX+syKiGoaXy9ysfc1dzDgKpfVm7y5J7ToaBN23+tMPIxrOHTsKj2Xo3KwA==', '2014-06-08 17:49:57', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_RESTO";}', 0, NULL, 1, NULL, NULL),
(5, 'testc', 'testc', 'testc@testc.com', 'testc@testc.com', 1, 'joto86z026o8ooogk0cwsw0sw4ksk4g', 'oYjnfyXUnI9U1il50nffmGv+c5AwO/UZJ0yrqQ1jRwfNih850mogA3SQJL4eMrga4QSjMZV/Y/KUJucBxbfWjA==', '2014-06-09 21:02:31', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_RESTO";}', 0, NULL, 2, NULL, NULL),
(6, 'usera', 'usera', 'dreena@gmail.com', 'dreena@gmail.com', 1, '3olvhea8x20ws44c8wgw8w8wg0scs48', 'KcrgfQ8ZX0UPIYcmQeDfzzwTt8vXVo6JCU5qzNJhhIq2Q5OhXnptYq4eu02OJya95n51uYDGLuQIeu4wDvxraw==', '2014-06-08 18:09:08', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:11:"ROLE_CLIENT";}', 0, NULL, NULL, NULL, NULL),
(7, 'arjun', 'arjun', 'arj196@hotmail.com', 'arj196@hotmail.com', 0, 'thrfgnnvyescccccsko8oss800008oc', 'Y3nD/tyamYCQFoFLnRmciBX7BZzYWC7kN66YbKuCsllzYf4Uc/aE1/U+o+75aKylmBEuFFWHVNSj63gILsRq4Q==', NULL, 0, 0, NULL, 'ocs7bfgVsgMUXVOWwzgD1uWrfG6VSkEASIXEiSSC5ng', NULL, 'a:0:{}', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resto_id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `resto_id`, `category`, `text`, `date_created`, `date_modified`) VALUES
(3, 2, 'dessert', 'sadsadsa dssa dsa dsa dsa ds', '2014-06-22', NULL),
(4, 2, 'starter', 'dasdsa jjlklkjlak ', '2014-06-22', NULL),
(5, 2, 'main', 'sadsadsa dssa dsa dsa dsa ds', '2014-06-22', NULL),
(6, 3, 'main', 'dasdsa jjlklkjlak ', '2014-06-13', NULL),
(9, 1, 'main', 'good to see ya mother fkhr!', '2014-06-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `opening_schedule`
--

CREATE TABLE IF NOT EXISTS `opening_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resto_id` int(11) NOT NULL,
  `mon1` tinyint(1) NOT NULL,
  `mon2` tinyint(1) NOT NULL,
  `mon3` tinyint(1) NOT NULL,
  `tue1` tinyint(1) NOT NULL,
  `tue2` tinyint(1) NOT NULL,
  `tue3` tinyint(1) NOT NULL,
  `wed1` tinyint(1) NOT NULL,
  `wed2` tinyint(1) NOT NULL,
  `wed3` tinyint(1) NOT NULL,
  `thur1` tinyint(1) NOT NULL,
  `thur2` tinyint(1) NOT NULL,
  `thur3` tinyint(1) NOT NULL,
  `fri1` tinyint(1) NOT NULL,
  `fri2` tinyint(1) NOT NULL,
  `fri3` tinyint(1) NOT NULL,
  `sat1` tinyint(1) NOT NULL,
  `sat2` tinyint(1) NOT NULL,
  `sat3` tinyint(1) NOT NULL,
  `sun1` tinyint(1) NOT NULL,
  `sun2` tinyint(1) NOT NULL,
  `sun3` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `opening_schedule`
--

INSERT INTO `opening_schedule` (`id`, `resto_id`, `mon1`, `mon2`, `mon3`, `tue1`, `tue2`, `tue3`, `wed1`, `wed2`, `wed3`, `thur1`, `thur2`, `thur3`, `fri1`, `fri2`, `fri3`, `sat1`, `sat2`, `sat3`, `sun1`, `sun2`, `sun3`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 1),
(2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0),
(3, 3, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 4, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 1),
(6, 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1),
(7, 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `party_calendar`
--

CREATE TABLE IF NOT EXISTS `party_calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resto_id` int(11) DEFAULT NULL,
  `organiser` varchar(100) DEFAULT NULL,
  `event_name` varchar(150) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_start` time DEFAULT NULL,
  `event_end` time DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `party_calendar`
--

INSERT INTO `party_calendar` (`id`, `resto_id`, `organiser`, `event_name`, `event_date`, `event_start`, `event_end`, `description`) VALUES
(1, 1, 'test_organiser', 'test_event_name_1', '2014-06-16', '12:00:00', '06:00:00', 'description 1'),
(2, 2, 'test-organiser-2', 'hello world', '2014-06-14', '12:06:00', '12:06:00', 'description 2'),
(4, 2, 'kl;k;ldsa', 'djlksajdklas', '2014-06-09', '12:00:00', '12:00:00', 'dsamdljslk 12:00:00 a12:00:00 '),
(6, 2, 'dsadsad', 'dsadsad', '2014-06-23', '12:00:00', '12:00:00', 'dsadsa12:00:0012:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `category` varchar(30) NOT NULL,
  `product_origin` varchar(50) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `price_per` varchar(10) DEFAULT NULL,
  `quantity_initial` double DEFAULT NULL,
  `des_unit` varchar(15) DEFAULT NULL,
  `price` varchar(15) DEFAULT NULL,
  `discount` varchar(10) DEFAULT NULL,
  `discount_price` varchar(15) DEFAULT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_till` date DEFAULT NULL,
  `description` text,
  UNIQUE KEY `product_id` (`product_id`),
  KEY `product_id_2` (`product_id`),
  KEY `shop_id` (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `shop_id`, `product_name`, `category`, `product_origin`, `country`, `price_per`, `quantity_initial`, `des_unit`, `price`, `discount`, `discount_price`, `valid_from`, `valid_till`, `description`) VALUES
(1, 1, 'Bfilet de BEEF entier', 'Meat', 'Bourg en bresse  (Ain)', 'France', 'kg', 10, '3,600kg', '50.65', '25', '37.9875', '2014-05-05', '2014-05-11', NULL),
(2, 1, 'Bar de ligne', 'Other', 'Atlantique Nord', 'Canada', 'kg', 5, '3,600kg', '30.50', '90', '21.35', '2014-05-06', '2014-05-08', NULL),
(3, 1, 'Lot de Crottins de chèvre', 'Diary', 'Coligny (Jura)', 'France', 'kg', 20, '2 x 45g', '3.55', '15', '3.01', '2014-05-10', '2014-05-08', NULL),
(4, 2, 'Dom Pérignon, 2000, Domaine de….', 'Other', 'Vertus (Champagne) ', 'France', 'liter', 30, '6 x 75cl', '538.50', '10', '484.65', '2014-05-12', '2014-06-02', NULL),
(5, 2, 'Boîte chocolats 500 g Edition limitée ', 'Chocolate', 'Lyon (Rhône)', 'France', 'kg', 15, '20 x 25g', '44.10', '5', '41.89', '2014-05-12', '2014-05-14', NULL),
(6, 2, 'Saucisson à cuire Lyonnais aux truffes', 'Meat', 'Ambronais (Ain)', 'France', 'kg', 12, '3 x 350g', '20.60', '5', '19.57', '2014-05-13', '2014-05-14', NULL),
(7, 3, 'Parmesan rapé', 'Other', 'Parme', 'Italie', 'kg', 25, ' 250g', '10.70', '15', '9.09', '2014-05-14', '2014-05-14', NULL),
(8, 3, 'Chorizo', 'Other', 'Madrid', 'Espagne', 'kg', 1, ' 200g', '27.30', '10', '24.57', '2014-05-14', '2014-05-16', NULL),
(9, 3, 'Prawns 60/80', 'Fish', 'Madrid', 'Thailand', 'kg', 13, 'box 1kg', '30.90', '35', '20.08', '2014-05-15', '2014-05-22', NULL),
(10, 4, 'Moët & Chandon, 2010', 'Other', 'Châlon-en-Champagne (Champagne)', 'France', 'liter', 22, '6 x 75cl', '273.60', '10', '246.24', '2014-05-15', '2014-05-22', NULL),
(11, 4, 'Filet de Julienne', 'Fish', 'Méditerrannée', 'France', 'kg', 45, '100g', '12.40', '50', '6.20', '2014-05-15', '2014-05-17', NULL),
(12, 4, 'Saumon entier', 'Fish', 'Atlantique Nord', 'Canada', 'kg', 7, '2,600g', '47.50', '40', '28.50', '2014-05-16', '2014-05-17', NULL),
(13, 4, 'Palets bretons', 'Other', 'Kerlouan (Bretagne)', 'France', 'kg', 18, '150g', '5.65', '5', '5.36', '2014-05-16', '2014-05-17', NULL),
(14, 1, 'Lait entier bio', 'Diary', 'Crozon-sur-vaucre (Indre)', 'France', 'liter', 20, '250ml', '2.38', '10', '2.14', '2014-05-17', '2014-05-21', NULL),
(15, 1, 'Truffes au chocolat', 'Chocolate', 'Rilleux-la-pape (Rhône)', 'France', 'kg', 20, '250ml', '8.55', '20', '6.84', '2014-05-17', '2014-05-18', NULL),
(16, 2, 'Soy sauce', 'Sauce ', 'Rilleux-la-pape (Rhône)', 'China', 'liter', 50, '200ml', '0.80', '5', '0.76', '2014-05-18', '2014-05-18', NULL),
(17, 2, 'Croissants au beurre', 'Diary', 'Vaugnerais (Rhône)', 'France', 'Piece', 50, '200ml', '0.90', '10', '0.81', '2014-05-18', '2014-05-18', NULL),
(18, 3, 'Baguette', 'Breakfast', 'Ecully (Rhône)', 'France', 'kg', 100, '250g', '1.10', '20', '0.88', '2014-05-18', '2014-05-19', NULL),
(19, 4, 'Beurre', 'Diary', 'Lisieux (Normandie)', 'France', 'kg', 70, '10 x 250g', '20.23', '55', '9.14', '2014-05-19', '2014-05-26', NULL),
(20, 4, 'Côte de bœuf', 'Meat', 'Lisieux (Normandie)', 'Argentine', 'kg', 11, '2,500g', '39.58', '15', '33.64', '2014-05-20', '2014-05-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resto_id` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `platter` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `resto_id`, `service`, `platter`, `quality`, `date_created`) VALUES
(1, 2, 6, 3, 9, '2014-06-11'),
(2, 2, 3, 6, 1, '2014-06-11'),
(3, 2, 3, 6, 1, '2014-06-11'),
(6, 1, 1, 7, 8, '2014-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE IF NOT EXISTS `recommend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resto_id` int(11) NOT NULL,
  `yes` int(11) DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_of_reservations` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `cuisine` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `special_1` varchar(200) DEFAULT NULL,
  `special_2` varchar(200) DEFAULT NULL,
  `special_3` varchar(200) DEFAULT NULL,
  `menu_price_max` int(11) NOT NULL,
  `menu_price_min` int(11) NOT NULL,
  `meal_price_max` int(11) NOT NULL,
  `meal_price_min` int(11) NOT NULL,
  `payment_visa` tinyint(1) DEFAULT NULL,
  `payment_master` tinyint(1) DEFAULT NULL,
  `payment_ticket` tinyint(1) DEFAULT NULL,
  `vacation_period_start` date NOT NULL,
  `vacation_period_end` date NOT NULL,
  `servicing_hour_start` time NOT NULL,
  `servicing_hour_end` time NOT NULL,
  `terrace` tinyint(1) DEFAULT NULL,
  `guides` varchar(500) DEFAULT NULL,
  `languages` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `number_of_reservations`, `address`, `cuisine`, `name`, `special_1`, `special_2`, `special_3`, `menu_price_max`, `menu_price_min`, `meal_price_max`, `meal_price_min`, `payment_visa`, `payment_master`, `payment_ticket`, `vacation_period_start`, `vacation_period_end`, `servicing_hour_start`, `servicing_hour_end`, `terrace`, `guides`, `languages`) VALUES
(1, 25, 'marcel sembat, Paris', 'French', 'Resto du Parisx', 'Chicken ROll served with at Half Price', 'hhh', 'Kima Kebab', 1000, 500, 170, 70, 0, 0, 1, '2014-04-11', '2014-11-12', '07:00:00', '20:00:00', 0, 'Michelin/Gault & Millau/Times News', 'English/French/Spanish/Italian'),
(2, 5, 'pont du sevres, boulogne billancourt', 'italian', 'Resto du Lyon', 'today''s first special', 'today''s second special', 'today''s third special', 10, 100, 0, 10, 1, 0, 1, '2014-06-20', '2014-06-27', '07:00:00', '20:00:00', 0, 'Michelin/Gault & Millau ', 'English/French/Spanish'),
(3, 30, '8 Rue Général Dayan, 69100 Villeurbanne, France', 'Indian', 'Resto du Toulouse 1', 'today''s first special', 'today''s second special', 'today''s third special', 0, 40, 0, 20, 1, 1, 0, '2014-06-01', '2014-06-28', '07:00:00', '20:00:00', 0, 'Michelin/Gault & Millau ', 'English/French/Spanish'),
(4, 20, '1060 SW 29th Ave, Miami, FL 33135, USA', 'Indian', 'Resto du Toulouse 2', 'today''s first special', 'today''s second special', 'today''s third special', 0, 20, 0, 30, 0, 0, 1, '2014-06-02', '2014-06-27', '07:00:00', '20:00:00', 0, 'Michelin/Gault & Millau ', 'English/French/Spanish');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `address_road` varchar(150) NOT NULL,
  `address_city` varchar(50) NOT NULL,
  `address_country` varchar(30) NOT NULL,
  `address_pincode` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `email`, `phone`, `fax`, `address_road`, `address_city`, `address_country`, `address_pincode`) VALUES
(1, 'shop1', 'shop1@mail.com', '0629394856', '2222222222', 'test address 1 ', 'Lyon', 'France', 1234),
(2, 'shop2', 'shop2@mail.com', '0989786756', '1111111111', 'test address 2', 'Paris', 'France', 5678),
(3, 'shop3', 'shop3@mail.com', '1111111111', '0989786756', 'test address 3', 'Lyon', 'France', 4321),
(4, 'shop4', 'shop4@mail.com', '2222222222', '0629394856', 'test address 4', 'Paris', 'Canada', 8765);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
