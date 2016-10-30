-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2015 at 04:37 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `name` text NOT NULL,
  `user` text NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `number` mediumint(50) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `user`, `pass`, `email_address`, `number`, `city`) VALUES
('komal dhuri', 'kd', '!@#$%^&!@#$%^&', 'komal.dhuri@ves.ac.in', 8388607, 'mumbai'),
('Ravi G', 'rag', '!@)(*&^34#$$@$', 'ravi.g@ves.ac.in', 8388607, 'mumbai'),
('shantaram patil', 'shanta', '!@#$%&*%$^^@$#', 'shantaram.p@gmail.com', 8388607, 'mumbai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
