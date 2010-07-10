-- phpMyAdmin SQL Dump
-- version 3.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2010 at 09:43 AM
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

INSERT INTO `avio_karte` (`id`, `firstname`, `lastname`, `email`, `tel`, `address`, `city`, `state`, `start`, `end`, `date_from`, `date_to`, `passangers`, `seniors`, `children`, `inf`, `class`, `ticket`, `modif`) VALUES
(1, 'Dusan', 'Novakovic', 'ndusan@gmail.com', '23434', 'Sodra Tvarvagen 16', 'hjarup', 'Sweden', 'Hjarup', 'Malmo', '10-07-2010', '10-07-2010', '1', '0', '0', '0', '0', '1', '2010-07-10 09:23:39');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `file`, `page_id`, `modif`) VALUES
(11, 'test', '3.jpg', 13, '2010-07-07 00:53:23'),
(10, 'tet', '2.jpg', 14, '2010-07-07 00:17:20'),
(9, 'Link 1', '2.jpg', 12, '2010-07-07 00:01:41');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `title`, `file`, `page_id`, `modif`) VALUES
(10, 'carousel 3', '1.jpg', 1, '2010-07-07 00:00:22'),
(9, 'carousel 2', '1.jpg', 12, '2010-07-07 00:00:10'),
(8, 'carousel', '1.jpg', 11, '2010-07-06 23:59:41');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `tel`, `text`, `modif`) VALUES
(1, 'Dusan', 'Novakovic', '123232', 'rersdfasd', '2010-07-10 09:38:48');

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

INSERT INTO `extra_details` (`id`, `title`, `content`, `language_id`, `extra_id`) VALUES
(6, 'eng test', '<p>tendsafa</p>', 2, 2),
(5, 'bla', '<p>bla</p>', 1, 2),
(7, 'test 1', '<p>vo2</p>', 1, 1),
(8, 'fdsaf', '<p>dsfas</p>', 2, 1);

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

INSERT INTO `newsletters` (`id`, `email`, `modif`) VALUES
(2, 'ndusan@gmail.com', '2010-07-10 07:46:21'),
(3, 'ndusan@gmail.com2', '2010-07-10 07:49:32'),
(4, 'fas', '2010-07-10 07:50:52'),
(5, 'fasdf', '2010-07-10 07:51:49');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `template`, `link`, `active`, `parent_id`, `type`, `checked`) VALUES
(1, '0', 'home', 1, 0, 'static', 0),
(5, '', 'contact', 1, 0, 'static', 0),
(2, '0', 'rent-a-car', 1, 0, 'static', 0),
(14, 'tmp1', 'subsomer-2', 1, 11, 'dynamic', 0),
(4, '', 'about-us', 1, 0, 'static', 0),
(3, '0', 'avio-karte', 1, 0, 'static', 0),
(13, 'tmp1', 'sub-summer', 1, 11, 'dynamic', 0),
(12, 'tmp1', 'winter-2011', 1, 0, 'dynamic', 1),
(11, 'tmp2', 'summer-2010', 1, 0, 'dynamic', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`id`, `language_id`, `name`, `modif`, `page_id`) VALUES
(36, 1, 'subsomer 2', '2010-07-07 00:15:09', 14),
(35, 1, 'sub summer', '2010-07-07 00:08:32', 13),
(33, 1, 'Winter 2011', '2010-07-05 22:17:23', 12),
(34, 1, 'Summer 2010', '2010-07-05 22:22:31', 11);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `page_items`
--

INSERT INTO `page_items` (`id`, `page_id`, `modif`, `folder`, `position`) VALUES
(49, 14, '2010-07-07 00:16:17', 1278454577, 1278454577),
(48, 13, '2010-07-07 00:15:38', 1278454538, 1278454538),
(47, 11, '2010-07-06 23:42:34', 1278452516, 1278361159),
(46, 12, '2010-07-05 22:20:14', 1278361214, 1278361214),
(45, 11, '2010-07-06 23:42:34', 1278361159, 1278452516);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `page_item_details`
--

INSERT INTO `page_item_details` (`id`, `title`, `content`, `page_item_id`, `modif`, `language_id`) VALUES
(36, 'test t', '<p>test</p>', 48, '2010-07-07 00:15:38', 1),
(37, 'xx', '<p>xxx</p>', 49, '2010-07-07 00:16:17', 1),
(34, 'Winter 2011', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<div class="rc">\r\n<h2 class="why"><span>Why do we use it?</span></h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>', 46, '2010-07-05 22:20:14', 1),
(35, 'test page', '<p>this is a test page</p>', 47, '2010-07-06 23:41:56', 1),
(33, 'Summer 2010 text', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 45, '2010-07-06 23:22:04', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `page_partners`
--

INSERT INTO `page_partners` (`id`, `page_id`, `partner_id`, `modif`) VALUES
(29, 14, 17, '2010-07-07 00:15:09'),
(28, 13, 16, '2010-07-07 00:08:32'),
(27, 13, 17, '2010-07-07 00:08:32'),
(26, 11, 16, '2010-07-05 22:22:31'),
(25, 11, 17, '2010-07-05 22:22:31');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `file`, `link`, `modif`) VALUES
(16, '4.jpg', 'Partner 1', '2010-07-05 22:21:25'),
(17, '', 'http://Partner1.com', '2010-07-05 22:23:18');

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

INSERT INTO `rent_a_car` (`id`, `firstname`, `lastname`, `email`, `tel`, `address`, `state_take`, `date_take`, `car_type`, `location`, `city_take`, `date_return`, `modif`, `city`, `state`) VALUES
(1, 'Dusan', 'Novakovic', 'ndusan@gmail.com', '12412312', 'Sodra Tvarvagen 16', 'Sweden', '10-07-2010', '3', '1', 'Malmo', '10-07-2010', '2010-07-10 08:29:36', 'Hjarup', 'Sweden');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `static_page_item_details`
--

INSERT INTO `static_page_item_details` (`id`, `title`, `content`, `page_id`, `modif`, `language_id`) VALUES
(1, 'Welcome to travel', '<p># Check the address for typing errors such as<br />&nbsp;&nbsp;&nbsp; ww.example.com instead of<br />&nbsp;&nbsp;&nbsp; www.example.com<br /><br />#&nbsp;&nbsp; If you are unable to load any pages, check your computer''s network<br />&nbsp;&nbsp;&nbsp; connection.<br /><br />#&nbsp;&nbsp; If your computer or network is protected by a firewall or proxy, make sure<br />&nbsp;&nbsp;&nbsp; that Firefox is permitted to access the Web.</p>', 1, '2010-06-23 19:04:13', 1),
(2, '', '', 2, '2010-07-07 17:46:35', 0),
(3, '', '', 3, '2010-07-07 17:46:35', 0),
(4, 'This is a page for avio karte', '<p>This is a short description about this page</p>', 3, '2010-07-07 17:47:11', 1),
(5, 'This is a page how to rent a car', '<p>This is just dummy text to check how it will look on page :-)</p>', 2, '2010-07-10 07:57:32', 1),
(6, 'Test', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 4, '2010-07-10 09:41:29', 1),
(7, 'Contact', '<p>This is contact</p>', 5, '2010-07-10 09:28:52', 1);

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
(2, 'Emil', 'Ajduk', 'emil@ajduk.com', '*028AB4443ADA86606EDC506B01B9EEA15537FEE6', 0);

