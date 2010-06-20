-- phpMyAdmin SQL Dump
-- version 3.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2010 at 09:04 PM
-- Server version: 5.0.83
-- PHP Version: 5.2.10-2ubuntu6.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `travelboutique`
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
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `file`, `page_id`, `modif`) VALUES
(1, 'banner', 'OffTheRed.jpg', 7, '2010-06-18 00:11:45');

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
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `title`, `file`, `page_id`, `modif`) VALUES
(2, 'test', 'OffTheRed.jpg', 7, '2010-06-17 23:37:45');

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
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `template`, `link`, `active`, `parent_id`, `type`, `checked`) VALUES
(1, '0', 'home', 1, 0, 'static', 0),
(2, '0', 'dusan-novakovic', 1, 0, 'dynamic', 1),
(3, 'tmp1', 'dusan', 1, 0, 'dynamic', 0),
(4, 'tmp2', 'maja-djacic', 1, 2, 'dynamic', 0),
(5, 'tmp1', 'tmp1', 1, 0, 'dynamic', 0),
(6, 'tmp2', 'tmp2', 1, 0, 'dynamic', 0),
(7, 'tmp2', 'test', 1, 7, 'dynamic', 0);

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
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`id`, `language_id`, `name`, `modif`, `page_id`) VALUES
(2, 2, 'test', '2010-06-10 00:30:14', 2),
(3, 2, 'dusan', '2010-06-12 13:58:43', 3),
(7, 2, 'maja djacic2', '2010-06-12 14:17:32', 4),
(8, 1, 'tmp1', '2010-06-16 23:00:42', 5),
(9, 1, 'tmp2', '2010-06-16 23:01:01', 6),
(12, 1, 'test', '2010-06-17 22:15:00', 7);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `page_items`
--

INSERT INTO `page_items` (`id`, `page_id`, `modif`, `folder`, `position`) VALUES
(34, 6, '2010-06-17 20:45:28', 1276799355, 1276799355),
(37, 2, '2010-06-20 20:09:33', 1277057373, 1277057373),
(30, 3, '2010-06-12 23:53:17', 1276379597, 0),
(35, 6, '2010-06-17 20:45:25', 1276800297, 1276800297),
(36, 6, '2010-06-17 20:45:22', 1276800304, 1276800304);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `page_item_details`
--

INSERT INTO `page_item_details` (`id`, `title`, `content`, `page_item_id`, `modif`, `language_id`) VALUES
(24, 'dsfa', '<p>sdfads</p>', 36, '2010-06-17 20:45:04', 1),
(23, 'fadsf', '<p>sdaf</p>', 35, '2010-06-17 20:44:57', 1),
(22, 'bla', '<p>bla</p>', 34, '2010-06-17 20:29:15', 1),
(25, 'Ovo je test naslov', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 37, '2010-06-20 20:09:33', 1),
(18, '', '', 30, '2010-06-12 23:53:17', 2),
(17, 'adas', '<p>dfds</p>', 30, '2010-06-12 23:53:17', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `page_partners`
--

INSERT INTO `page_partners` (`id`, `page_id`, `partner_id`, `modif`) VALUES
(6, 7, 9, '2010-06-17 22:15:00'),
(5, 7, 10, '2010-06-17 22:15:00');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `file`, `link`, `modif`) VALUES
(9, '', 'http//blic.rs2', '2010-06-17 23:54:00'),
(10, 'autosave.xmi', 'http://fifa.com', '2010-06-17 21:55:08');

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
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `static_page_item_details`
--

INSERT INTO `static_page_item_details` (`id`, `title`, `content`, `page_id`, `modif`, `language_id`) VALUES
(1, 'dusan', '<p>Novakovic</p>', 1, '2010-06-20 18:43:00', 1);

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
(1, 'Dusanka', 'Novakovic', 'ndusan@gmail.com', '*B7286508889280A09977E1CD4A2BDC42283108A0', 1),
(2, 'Emil', 'Ajduk', 'emil@ajduk.com', '*028AB4443ADA86606EDC506B01B9EEA15537FEE6', 1),
(3, '', '', '', '', 1);

