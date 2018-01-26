-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2018 at 09:34 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dei`
--

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

DROP TABLE IF EXISTS `std`;
CREATE TABLE IF NOT EXISTS `std` (
  `name` varchar(25) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `age` int(3) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`name`, `dept`, `age`, `pass`) VALUES
('dei', 'cse', 34, 'one'),
('selvi', 'ece', 16, 'root'),
('siva', 'mech', 31, 'kumar'),
('suji', 'civil', 31, 'live'),
('julie', 'ece', 27, 'mice'),
('vict', 'cse', 32, 'five'),
('duck', 'mech', 16, 'bird'),
('senthil', 'cse', 23, 'lila'),
('guru', 'ece', 32, 'two'),
('ravi', 'mech', 32, 'diva');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
