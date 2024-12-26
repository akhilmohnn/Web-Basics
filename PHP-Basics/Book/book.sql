-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2024 at 06:54 PM
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
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(3) NOT NULL,
  `book_title` varchar(20) NOT NULL,
  `book_author` varchar(20) NOT NULL,
  `book_edition` varchar(20) NOT NULL,
  `book_publisher` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `book_author`, `book_edition`, `book_publisher`) VALUES
(1, 'huuh', 'iwhid', 'i', 'w'),
(2, 'Wings of fire', 'APJ', 'edition 3', 'APJ Publiscations'),
(3, 'Harry Potter and the', 'J. K. Rowli', 'edition 1', 'Scholastic Corporati'),
(3, 'Harry Potter and the', 'J. K. Rowling', 'edition 3', 'Scholastic Corporation');
