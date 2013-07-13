-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2013 at 07:48 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xcdsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE IF NOT EXISTS `form_data` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text,
  `source` varchar(200) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`id`, `name`, `mobile`, `email`, `message`, `source`, `create_date`) VALUES
(1, 'test', '258546556', 'anujrajput25@yahoo.com', 'test', 'contact_page', '2013-07-13'),
(2, 'test', '258546556', 'anujrajput25@yahoo.com', 'test', 'contact_page', '2013-07-13'),
(3, 'test', '258546556', 'anujrajput25@yahoo.com', 'test', 'contact_page', '2013-07-13'),
(4, 'test', '258546556', 'anujrajput25@yahoo.com', 'test', 'contact_page', '2013-07-13'),
(5, 'test', '9716556255', 'anujrajput25@yahoo.com', 'test', 'contact_page', '2013-07-13'),
(6, 'test', '9716556255', 'anujrajput25@yahoo.com', 'test', 'contact_page', '2013-07-13'),
(7, 'test', '9716556255', 'anujrajput25@yahoo.com', 'test', 'contact_page', '2013-07-13'),
(8, 'test', '9716556255', 'anujrajput25@yahoo.com', 'test', 'contact_page', '2013-07-13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
