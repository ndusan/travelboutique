-- phpMyAdmin SQL Dump
-- version 3.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2010 at 01:41 AM
-- Server version: 5.0.83
-- PHP Version: 5.2.10-2ubuntu6.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `travelboutique`
--

-- --------------------------------------------------------

--
-- Table structure for table `avio_karte`
--

DROP TABLE IF EXISTS `avio_karte`;
CREATE TABLE IF NOT EXISTS `avio_karte` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `tel` varchar(255) collate utf8_unicode_ci NOT NULL,
  `address` varchar(255) collate utf8_unicode_ci NOT NULL,
  `city` varchar(255) collate utf8_unicode_ci NOT NULL,
  `state` varchar(255) collate utf8_unicode_ci NOT NULL,
  `start` varchar(255) collate utf8_unicode_ci NOT NULL,
  `end` varchar(255) collate utf8_unicode_ci NOT NULL,
  `date_from` varchar(255) collate utf8_unicode_ci NOT NULL,
  `date_to` varchar(255) collate utf8_unicode_ci NOT NULL,
  `passangers` varchar(255) collate utf8_unicode_ci NOT NULL,
  `seniors` varchar(255) collate utf8_unicode_ci NOT NULL,
  `children` varchar(255) collate utf8_unicode_ci NOT NULL,
  `inf` varchar(255) collate utf8_unicode_ci NOT NULL,
  `class` varchar(255) collate utf8_unicode_ci NOT NULL,
  `ticket` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `avio_karte`
--


-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `file` varchar(255) collate utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `position` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `banners`
--


-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

DROP TABLE IF EXISTS `carousel`;
CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `file` varchar(255) collate utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `position` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `carousel`
--


-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `tel` varchar(255) collate utf8_unicode_ci NOT NULL,
  `text` text collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

DROP TABLE IF EXISTS `extra`;
CREATE TABLE IF NOT EXISTS `extra` (
  `id` int(11) NOT NULL auto_increment,
  `type` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`id`, `type`) VALUES
(1, 'voucher'),
(2, 'insurance');

-- --------------------------------------------------------

--
-- Table structure for table `extra_details`
--

DROP TABLE IF EXISTS `extra_details`;
CREATE TABLE IF NOT EXISTS `extra_details` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `content` text collate utf8_unicode_ci NOT NULL,
  `language_id` int(11) NOT NULL,
  `extra_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `extra_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `active`) VALUES
(1, 'sr', 1),
(2, 'en', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `newsletters`
--


-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL auto_increment,
  `template` varchar(11) collate utf8_unicode_ci NOT NULL,
  `link` varchar(255) collate utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL default '1',
  `parent_id` int(11) NOT NULL,
  `type` varchar(10) collate utf8_unicode_ci NOT NULL default '0',
  `checked` tinyint(4) NOT NULL default '0',
  `position` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `template`, `link`, `active`, `parent_id`, `type`, `checked`, `position`) VALUES
(1, '0', 'home', 1, 0, 'static', 0, 2),
(5, '', 'contact', 1, 0, 'static', 0, 0),
(2, '0', 'rent-a-car', 1, 0, 'static', 0, 0),
(20, 'tmp1', 'test', 1, 20, 'dynamic', 0, 1279553787),
(4, '', 'about-us', 1, 0, 'static', 0, 0),
(3, '0', 'avio-karte', 1, 0, 'static', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `page_info`
--

DROP TABLE IF EXISTS `page_info`;
CREATE TABLE IF NOT EXISTS `page_info` (
  `id` int(11) NOT NULL auto_increment,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `page_id` int(11) NOT NULL,
  `additional` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=62 ;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`id`, `language_id`, `name`, `modif`, `page_id`, `additional`) VALUES
(61, 1, 'test', '2010-07-19 17:36:35', 20, '<p>test</p>');

-- --------------------------------------------------------

--
-- Table structure for table `page_items`
--

DROP TABLE IF EXISTS `page_items`;
CREATE TABLE IF NOT EXISTS `page_items` (
  `id` int(11) NOT NULL auto_increment,
  `page_id` int(11) NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `folder` bigint(20) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `page_items`
--


-- --------------------------------------------------------

--
-- Table structure for table `page_item_details`
--

DROP TABLE IF EXISTS `page_item_details`;
CREATE TABLE IF NOT EXISTS `page_item_details` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `content` text collate utf8_unicode_ci NOT NULL,
  `page_item_id` int(11) NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `language_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `page_item_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `page_partners`
--

DROP TABLE IF EXISTS `page_partners`;
CREATE TABLE IF NOT EXISTS `page_partners` (
  `id` int(11) NOT NULL auto_increment,
  `page_id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Dumping data for table `page_partners`
--


-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL auto_increment,
  `file` varchar(255) collate utf8_unicode_ci NOT NULL,
  `link` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `partners`
--


-- --------------------------------------------------------

--
-- Table structure for table `rent_a_car`
--

DROP TABLE IF EXISTS `rent_a_car`;
CREATE TABLE IF NOT EXISTS `rent_a_car` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `tel` varchar(255) collate utf8_unicode_ci NOT NULL,
  `address` varchar(255) collate utf8_unicode_ci NOT NULL,
  `state_take` varchar(255) collate utf8_unicode_ci NOT NULL,
  `date_take` varchar(255) collate utf8_unicode_ci NOT NULL,
  `car_type` varchar(255) collate utf8_unicode_ci NOT NULL,
  `location` varchar(255) collate utf8_unicode_ci NOT NULL,
  `city_take` varchar(255) collate utf8_unicode_ci NOT NULL,
  `date_return` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `city` varchar(255) collate utf8_unicode_ci NOT NULL,
  `state` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rent_a_car`
--


-- --------------------------------------------------------

--
-- Table structure for table `static_page_item_details`
--

DROP TABLE IF EXISTS `static_page_item_details`;
CREATE TABLE IF NOT EXISTS `static_page_item_details` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `content` text collate utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `language_id` int(11) NOT NULL,
  `additional` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `static_page_item_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `password` varchar(255) collate utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `active`) VALUES
(1, 'Dusan', 'Novakovic', 'ndusan@gmail.com', '*B7286508889280A09977E1CD4A2BDC42283108A0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

DROP TABLE IF EXISTS `weather`;
CREATE TABLE IF NOT EXISTS `weather` (
  `id` int(11) NOT NULL auto_increment,
  `city` varchar(255) collate utf8_unicode_ci NOT NULL,
  `link` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`id`, `city`, `link`, `modif`) VALUES
(2, 'Beograd', 'http://xoap.weather.com/weather/local/SRXX0005?cc=*&dayf=5&link=xoap&prod=xoap&par=1197447447&key=43e103dae96b02ae', '2010-07-20 00:48:51');

