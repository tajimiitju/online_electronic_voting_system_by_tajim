-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2017 at 05:20 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `electronicvoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(5, 'Nazifa', '455877', 'nazifa.tabassum.ju@gmail.com'),
(6, 'moon', '12345', 'moon@gmail.com'),
(7, 'priya', '12345', 'priya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL,
  `votes` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `position`, `party`, `votes`, `image`) VALUES
(2, 'K M Akkas Ali', 'Chairman', 'IIT', 2, '13434762_1068700183216662_22684484543459351_n.jpg'),
(3, 'Faruque Hossain', 'Chairman', 'Math', 0, '13434762_1068700183216662_22684484543459351_n.jpg'),
(4, 'Risala Tasin Khan', 'Chairman', 'IIT', 0, '13434762_1068700183216662_22684484543459351_n.jpg'),
(5, 'Fazlul Karim Patwary', 'President', 'IIT', 1, '13434762_1068700183216662_22684484543459351_n.jpg'),
(6, 'Fahima Tabassum', 'President', 'IIT', 1, '13434762_1068700183216662_22684484543459351_n.jpg'),
(7, 'M Mesbah Uddin', 'Vice President', 'IIT', 1, '13434762_1068700183216662_22684484543459351_n.jpg'),
(8, 'M Shamim Kaiser', 'Vice President', 'IIT', 1, '13434762_1068700183216662_22684484543459351_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE IF NOT EXISTS `party` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `symbol` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`id`, `name`, `description`, `symbol`) VALUES
(1, 'IIT', '', '13434762_1068700183216662_22684484543459351_n.jpg'),
(2, 'Math', '', 'eL7OUgJ.jpg'),
(3, 'No Vote', '', 'blur-background-3840x2400-spectrum-electromagnetic-4k-901.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'Chairman'),
(2, 'President'),
(3, 'Vice President'),
(4, 'Secretary'),
(5, 'Joint Secretary');

-- --------------------------------------------------------

--
-- Table structure for table `votedetails`
--

CREATE TABLE IF NOT EXISTS `votedetails` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `candidate` varchar(100) NOT NULL,
  `voters` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `votedetails`
--

INSERT INTO `votedetails` (`id`, `candidate`, `voters`) VALUES
(1, 'K M Akkas Ali', '1000'),
(2, 'Fazlul Karim Patwary', '1000'),
(3, 'M Mesbah Uddin', '1000'),
(4, '0', '1000'),
(5, '0', '1000'),
(6, 'K M Akkas Ali', '1001'),
(7, 'Fahima Tabassum', '1001'),
(8, 'M Shamim Kaiser', '1001'),
(9, '0', '1001'),
(10, '0', '1001');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `nid`, `name`, `username`, `password`, `status`) VALUES
(1, '1000', 'Nazifa  Tabassum', 'nazifa', '12345', 'voted'),
(2, '1001', 'Tajim  Md', 'tajim', '12345', 'voted'),
(3, '1003', 'Mahmuda  khan', 'riya', '12345', 'notvoted');

-- --------------------------------------------------------

--
-- Table structure for table `voter_list`
--

CREATE TABLE IF NOT EXISTS `voter_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `voter_list`
--

INSERT INTO `voter_list` (`id`, `nid`, `name`, `status`) VALUES
(1, '1000', 'Nazifa  Tabassum', 'used'),
(2, '1001', 'Tajim  Md', 'used'),
(3, '1002', 'Rezoana  Akter', 'notuse'),
(4, '1003', 'Mahmuda  khan', 'used'),
(5, '1005', 'Priyanka  Priya', 'notuse');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
