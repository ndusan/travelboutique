-- phpMyAdmin SQL Dump
-- version 3.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2010 at 06:43 PM
-- Server version: 5.0.83
-- PHP Version: 5.2.10-2ubuntu6.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `travelboutique`
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
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `static_page_item_details`
--

INSERT INTO `static_page_item_details` (`id`, `title`, `content`, `page_id`, `modif`, `language_id`) VALUES
(1, 'dusan', '<p>Novakovic</p>', 1, '2010-06-20 18:43:00', 1);

