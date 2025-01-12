-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2025 at 06:20 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `stitch`
--

CREATE TABLE `stitch` (
  `customer_id` varchar(25) NOT NULL,
  `items` varchar(25) NOT NULL,
  `dateofarrival` date NOT NULL,
  `dateofdelivery` date NOT NULL,
  `tailorcharges` varchar(25) NOT NULL,
  `stitchcharges` varchar(25) NOT NULL,
  PRIMARY KEY  (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stitch`
--

INSERT INTO `stitch` (`customer_id`, `items`, `dateofarrival`, `dateofdelivery`, `tailorcharges`, `stitchcharges`) VALUES
('1', 'PANT', '2025-01-17', '2025-01-15', '', ''),
('2', 'shirt', '2025-01-11', '2025-01-23', '24', '50'),
('29', 'shirt', '2025-01-10', '2025-01-18', '34', 'df'),
('3', 'PANT', '2025-01-17', '2025-01-10', '', ''),
('44', 'shirt', '2025-01-11', '2025-01-18', '24', '56');
