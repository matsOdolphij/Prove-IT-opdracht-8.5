-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2012 at 12:27 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `namaste`
--

-- --------------------------------------------------------

--
-- Table structure for table `nf_followers`
--

CREATE TABLE IF NOT EXISTS `nf_followers` (
  `user_id` int(6) NOT NULL,
  `nepaluser_id` int(6) NOT NULL,
  UNIQUE KEY `user_id` (`user_id`,`nepaluser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nf_nav`
--

CREATE TABLE IF NOT EXISTS `nf_nav` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf_nav`
--

INSERT INTO `nf_nav` (`id`, `name`) VALUES
(1, 'Home'),
(2, 'Gebruikers'),
(3, 'Foto''s'),
(4, 'Dagboeken'),
(5, 'Instellingen'),
(6, 'Overzicht');

-- --------------------------------------------------------

--
-- Table structure for table `nf_pictures`
--

CREATE TABLE IF NOT EXISTS `nf_pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `nf_pictures`
--

INSERT INTO `nf_pictures` (`id`, `post_id`, `path`) VALUES
(1, 0, '9dead08c7d995599c5161da2577c30cd.png'),
(2, 0, '3da5445191a31f5d5424b4d69e09b803.png'),
(3, 0, 'dd87726205d6ba7670dc6d429c435ebe.png'),
(4, 14, 'a1c6c19036110bf35241f3c4fd4b2fa5.png'),
(5, 14, '9e12e7a7ce84a0a18c0cf2d43dd23b37.png'),
(6, 14, '4e16715bcb2661abf75c4b90bd61b7a8.png'),
(7, 15, '6341a2f692b3df02244e0da920fa0e7c.png'),
(8, 15, '1dc7892aef98766d99e474dbb98dc3e8.png'),
(9, 15, '81257f71a5a5238dcb2ba312decd3944.png'),
(10, 16, '7fdde8351c3cbc3888f2c47678ffdd9a.png'),
(11, 16, 'b03a9379c03f709a84fa7354e4a260ff.png');

-- --------------------------------------------------------

--
-- Table structure for table `nf_posts`
--

CREATE TABLE IF NOT EXISTS `nf_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `text` longtext NOT NULL,
  `date` varchar(30) NOT NULL,
  `temp_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `nf_posts`
--

INSERT INTO `nf_posts` (`id`, `user_id`, `text`, `date`, `temp_name`) VALUES
(1, 0, 'dffdsfsd', '13-04-2012 17:1', ''),
(2, 0, 'dsfdsdfsdfds', '13-04-2012 17:14:35', ''),
(3, 0, 'dsfdsdfsdfds', '13-04-2012 17:14:40', ''),
(4, 0, 'rofl', '13-04-2012 17:15:02', ''),
(5, 0, 'rofl', '13-04-2012 17:28:00', ''),
(6, 0, 'rofl', '13-04-2012 17:28:05', ''),
(7, 0, 'test', '16-04-2012 12:00:32', ''),
(8, 0, 'test', '16-04-2012 12:02:24', ''),
(9, 0, 'testtesttest', '16-04-2012 12:03:26', ''),
(10, 0, 'test img db', '16-04-2012 12:08:58', ''),
(11, 0, 'roflpantoffel', '16-04-2012 12:09:49', ''),
(12, 0, 'idtest', '16-04-2012 12:13:44', ''),
(13, 0, 'gedaagwgwyeags', '16-04-2012 12:17:16', ''),
(14, 0, 'feDSFDSADFSADFDFSAFDSA', '16-04-2012 12:18:40', ''),
(15, 0, 'Vandaag heb ik een banaan gegeten.', '16-04-2012 12:24:08', 'Hans'),
(16, 0, 'herp', '16-04-2012 12:25:59', 'derp');

-- --------------------------------------------------------

--
-- Table structure for table `nf_users`
--

CREATE TABLE IF NOT EXISTS `nf_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `clearance` int(2) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nf_users`
--

INSERT INTO `nf_users` (`id`, `firstname`, `lastname`, `username`, `password`, `clearance`, `email`) VALUES
(1, 'Sebastiaan', 'Jong', 'root', '63a9f0ea7bb98050796b649e85481845', 99, 'sebastiaan.jong@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
