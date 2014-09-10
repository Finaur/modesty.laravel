-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2014 at 06:51 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.15-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `modesty`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_08_19_041320_CreateTable_m_news', 1),
('2014_08_21_075858_create_table_M_Category', 2),
('2014_08_26_061931_create_table_M_tags', 3),
('2014_08_26_063629_create_table_M_Category', 4),
('2014_08_26_094709_create_table_t_tags_news', 5);

-- --------------------------------------------------------

--
-- Table structure for table `m_category`
--

CREATE TABLE IF NOT EXISTS `m_category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_category`
--

INSERT INTO `m_category` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'laravel', '2014-08-25 23:38:09', '2014-08-25 23:38:09'),
(2, 'computer', '2014-08-25 23:38:19', '2014-08-25 23:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `m_news`
--

CREATE TABLE IF NOT EXISTS `m_news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary_news` text COLLATE utf8_unicode_ci NOT NULL,
  `content_news` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=65 ;

--
-- Dumping data for table `m_news`
--

INSERT INTO `m_news` (`news_id`, `title_news`, `summary_news`, `content_news`, `author`, `category_id`, `created_at`, `updated_at`) VALUES
(60, 'Eloquent ORM', 'The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database. ', '<h2><a href="http://laravel.com/docs/eloquent#introduction" style="font-weight: inherit; font-size: inherit; text-decoration: none; transition: all 250ms linear; -webkit-transition: all 250ms linear; color: rgb(102, 102, 102); width: auto;">Introduction</a></h2>\r\n\r\n<p>The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding &quot;Model&quot; which is used to interact with that table.</p>\r\n\r\n<p>Before getting started, be sure to configure a database connection in&nbsp;<code>app/config/database.php</code>.</p>\r\n\r\n<h2><a href="http://laravel.com/docs/eloquent#basic-usage" style="font-weight: inherit; font-size: inherit; text-decoration: none; transition: all 250ms linear; -webkit-transition: all 250ms linear; color: rgb(102, 102, 102); width: auto;">Basic Usage</a></h2>\r\n\r\n<p>To get started, create an Eloquent model. Models typically live in the&nbsp;<code>app/models</code>&nbsp;directory, but you are free to place them anywhere that can be auto-loaded according to your&nbsp;<code>composer.json</code>file.</p>\r\n', '', 1, '2014-08-27 03:04:47', '2014-08-27 03:04:47'),
(61, 'Computer science', 'To get started, create an Eloquent model. Models typically live in the app/models directory, but you are free to place them anywhere that can be auto-loaded according to your composer.json file.', '<p><span style="background-color:rgb(255, 254, 254); color:rgb(69, 69, 69); font-family:source-sans-pro,helvetica,arial,sans-serif; font-size:15px">Note that we did not tell Eloquent which table to use for our&nbsp;</span><code>User</code><span style="background-color:rgb(255, 254, 254); color:rgb(69, 69, 69); font-family:source-sans-pro,helvetica,arial,sans-serif; font-size:15px">&nbsp;model. The lower-case, plural name of the class will be used as the table name unless another name is explicitly specified. So, in this case, Eloquent will assume the&nbsp;</span><code>User</code><span style="background-color:rgb(255, 254, 254); color:rgb(69, 69, 69); font-family:source-sans-pro,helvetica,arial,sans-serif; font-size:15px">&nbsp;model stores records in the&nbsp;</span><code>users</code><span style="background-color:rgb(255, 254, 254); color:rgb(69, 69, 69); font-family:source-sans-pro,helvetica,arial,sans-serif; font-size:15px">&nbsp;table. You may specify a custom table by defining a&nbsp;</span><code>table</code><span style="background-color:rgb(255, 254, 254); color:rgb(69, 69, 69); font-family:source-sans-pro,helvetica,arial,sans-serif; font-size:15px">&nbsp;property on your model</span></p>\r\n\r\n<p><span style="background-color:rgb(255, 254, 254); color:rgb(69, 69, 69); font-family:source-sans-pro,helvetica,arial,sans-serif; font-size:15px"><img alt="" src="/modesty/public/assets/backend/ckeditor/plugins/kcfinder/upload/images/benefit-1.jpg" style="height:225px; width:320px" /></span></p>\r\n', '', 2, '2014-08-27 03:08:07', '2014-08-27 03:08:07'),
(62, 'A Guide to Using Eloquent ORM in Laravel', 'The Eloquent ORM that comes with Laravel makes it incredibly easy to interact with a database.', '<p>The Eloquent ORM that comes with Laravel makes it incredibly easy to interact with a database. Today we&rsquo;ll look at how we can use Eloquent to interact with our database and do:</p>\r\n\r\n<ul>\r\n	<li>The basic&nbsp;<strong>CRUD functions</strong></li>\r\n	<li>Set up and use&nbsp;<strong>one-to-one relationships</strong></li>\r\n	<li>Set up and use&nbsp;<strong>one-to-many relationships</strong></li>\r\n	<li>Set up and use&nbsp;<strong>many-to-many relationships</strong></li>\r\n</ul>\r\n\r\n<h3>How Does Eloquent Work?</h3>\r\n\r\n<p>The Eloquent ORM provides an&nbsp;<a href="http://en.wikipedia.org/wiki/Active_record_pattern" style="box-sizing: border-box; color: rgb(0, 140, 186); text-decoration: none; background: transparent;" target="_blank">ActiveRecord</a>&nbsp;implementation to work with your database. This means that each model you create in your MVC structure corresponds to a table in your database.</p>\r\n\r\n<p>A&nbsp;<code>Bear</code>&nbsp;model will correspond to a&nbsp;<code>bears</code>&nbsp;table in your database. Since we have convention when creating our models and database tables, we can easily call data from our database.</p>\r\n', '', 1, '2014-08-27 19:55:47', '2014-08-27 19:55:47'),
(64, 'belongsToMany', 'Many to many relationships can be a little tricky at first, but once you spend some time digging into them, they are not as bad as they first seem. ', 'It’s easiest to think of real world scenarios when considering many to many relationships. You are most certainly familiar with wordpress the popular blogging platform. When you create blogposts in wordpress, you assign tags to the posts to help categorize them. Now it is entirely possible, and likely, that each blog post will have many tags. By the same token, a tag may be found assigned to more than one blog posts. Maybe you write about the stock market, and if so there may be many posts that deal with earnings reports. Perhaps there are 10 posts which deal with earnings. You should be able to query on a given tag and bring back all of the posts related to that tag. Additionally, you should be able to query the blogpost, and find out what tag or tags are associated with it. We call this the many to many relationship.', '', 1, '2014-08-27 23:47:03', '2014-08-27 23:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `m_tags`
--

CREATE TABLE IF NOT EXISTS `m_tags` (
  `tags_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tags_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`tags_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `m_tags`
--

INSERT INTO `m_tags` (`tags_id`, `tags_name`, `created_at`, `updated_at`) VALUES
(1, 'Detikcom', '2014-08-26 02:00:33', '2014-08-26 02:46:25'),
(2, 'id-Laravel', '2014-08-26 02:02:28', '2014-08-26 02:02:28'),
(3, 'Computer Visions', '2014-08-26 02:10:48', '2014-08-26 02:10:48'),
(4, 'Ubuntu', '2014-08-27 03:02:30', '2014-08-27 03:02:30'),
(5, 'Lenovo', '2014-08-27 03:02:40', '2014-08-27 03:02:40'),
(6, 'Web Aplication', '2014-08-27 03:13:07', '2014-08-27 03:13:07'),
(7, 'Laravel.com', '2014-08-27 19:54:48', '2014-08-27 19:54:48'),
(8, 'Computer Visions 2', '2014-08-28 00:16:29', '2014-08-28 00:16:29'),
(9, 'GitHub', '2014-08-28 00:42:49', '2014-08-28 00:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `t_tagsNews`
--

CREATE TABLE IF NOT EXISTS `t_tagsNews` (
  `tagsNews_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`tagsNews_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `t_tagsNews`
--

INSERT INTO `t_tagsNews` (`tagsNews_id`, `news_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(19, 61, 2, '2014-08-27 03:08:07', '2014-08-27 03:08:07'),
(20, 61, 3, '2014-08-27 03:08:07', '2014-08-27 03:08:07'),
(21, 62, 2, '2014-08-27 19:55:47', '2014-08-27 19:55:47'),
(22, 62, 6, '2014-08-27 19:55:47', '2014-08-27 19:55:47'),
(23, 62, 7, '2014-08-27 19:55:47', '2014-08-27 19:55:47'),
(24, 60, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 60, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 60, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 60, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 60, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 64, 1, '2014-08-27 23:47:03', '2014-08-27 23:47:03'),
(44, 64, 2, '2014-08-27 23:47:03', '2014-08-27 23:47:03'),
(45, 64, 3, '2014-08-27 23:47:03', '2014-08-27 23:47:03'),
(46, 64, 4, '2014-08-27 23:47:03', '2014-08-27 23:47:03'),
(47, 64, 5, '2014-08-27 23:47:03', '2014-08-27 23:47:03'),
(48, 64, 6, '2014-08-27 23:47:04', '2014-08-27 23:47:04'),
(49, 64, 7, '2014-08-27 23:47:04', '2014-08-27 23:47:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
