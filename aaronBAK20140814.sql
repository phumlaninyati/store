-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2014 at 01:56 AM
-- Server version: 5.5.28
-- PHP Version: 5.3.26

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aaron`
--

-- --------------------------------------------------------

--
-- Table structure for table `ownership`
--

CREATE TABLE IF NOT EXISTS `ownership` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownership`
--

INSERT INTO `ownership` (`uid`, `pid`) VALUES
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `qty` int(11) NOT NULL,
  `imgpath` varchar(250) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `title`, `price`, `description`, `qty`, `imgpath`) VALUES
(1, 'Test', '.Test.', 56, 'description test', 56, ''),
(2, 'Name', 'Title', 400, 'description', 45, ''),
(3, 'Test', 'Fixtures', 56, 'test', 45, ''),
(4, 'List Categories', 'Fixtures', 900, 'test', 45, ''),
(5, 'List_Categories', 'Fixtures', 900, 'test', 87, ''),
(6, 'Product Name Updated', 'Title Updated', 300, 'Description Updated', 9, ''),
(7, 'Phumlani', 'Fixtures', 900, 'Product Level 1 listing', 90, ''),
(8, 'Phumlani', 'Fixtures', 900, 'test', 45, ''),
(9, 'Phumlani', 'Fixtures', 900, 'Product Level 1 listing', 900, ''),
(10, 'Phumlani', 'Fixtures', 900, 'test', 900, ''),
(11, 'Phumlani', 'Test Product', 900, 'Product Description', 900, ''),
(12, 'Phumlani', 'Test Product', 900, 'Product Description', 900, ''),
(13, 'Image Test', 'Image Test', 1234, 'Image Test', 1345, '/files/123456.jpg'),
(14, 'Image two', 'Image two', 56, 'Image two', 45, '/files/123456.jpg'),
(15, 'Product Name Updated', 'Image two', 900, 'Image two', 1345, 'files/123456.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` blob NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` blob NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(25) NOT NULL AUTO_INCREMENT,
  `Username` varchar(65) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `EmailAddress`) VALUES
(1, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@test1.com'),
(2, 'abcd', '68053af2923e00204c3ca7c6a3150cf7', 'example@789.com'),
(3, '123', '202cb962ac59075b964b07152d234b70', '123'),
(4, 'admin', '0192023a7bbd73250516f069df18b500', 'phumlani.nyati@gmail.com');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
