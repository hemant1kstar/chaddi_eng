-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2015 at 09:10 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_system`
--

CREATE TABLE IF NOT EXISTS `bus_system` (
`bus_id` int(11) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `pickup_time` varchar(255) NOT NULL,
  `drop_time` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1006 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_system`
--

INSERT INTO `bus_system` (`bus_id`, `bus_name`, `driver_name`, `pickup_time`, `drop_time`, `area`) VALUES
(1001, 'ganga', 'mahesh', '9.30am', '7pm', 'Nandi Stop'),
(1002, '232234', 'ramesh', '9.30am', '7pm', 'Nandi Stop'),
(1004, 'narmada', 'gopal1', '10am', '6pm', 'Shivaji Chowk'),
(1005, 'sant ', 'tuka', '10.30am', '6.30pm', 'Renapur Naka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_system`
--
ALTER TABLE `bus_system`
 ADD PRIMARY KEY (`bus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_system`
--
ALTER TABLE `bus_system`
MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1006;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
