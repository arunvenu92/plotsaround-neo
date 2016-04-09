-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2016 at 06:10 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `plots`
--

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `dev_id` varchar(10) NOT NULL,
  `dev_name` varchar(50) NOT NULL,
  `builder_name` varchar(50) NOT NULL,
  `price` bigint(10) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `image` varchar(20) NOT NULL,
  `progress` varchar(50) NOT NULL,
  `isApproved` tinyint(1) NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`dev_id`, `dev_name`, `builder_name`, `price`, `locality`, `image`, `progress`, `isApproved`) VALUES
('als_156', 'Alstom Developers', 'Alstom', 633, 'Hebbal', './image/daksha.jpg', 'Complete', 0),
('dakha345', 'Daksha Builders', 'Daksha', 1000, 'JP nagar', './images/daksha.jpg', 'Complete', 1),
('dak_367', 'Daksha Vridha', 'Daksha', 2200, 'Vijayanaga 4th Stage', './images/p13.jpg', 'In Progress', 1),
('gold_567', 'Golden Developers', 'Golden', 1900, 'Bogadi Road', './image/daksha.jpg', 'Complete', 0),
('ram_789', 'Ramani Developers', 'Ramani', 1700, 'Hebbal', './image/daksha.jpg', 'Complete', 1),
('shobha123', 'Shobha Builders', 'Shobha', 500, 'JP nagar', './images/shobha.jpg', 'In Progress', 1),
('vgp_100', 'VGP Developers', 'VGP', 430, 'Vijayanagar 2nd Stage', './image/daksha.jpg', 'Complete', 1),
('vgp_101', 'VGP Golden,Developers', 'VGP', 1800, 'JP nagar', './image/daksha.jpg', 'Complete', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
