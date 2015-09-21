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
-- Table structure for table `student_bus_status`
--

CREATE TABLE IF NOT EXISTS `student_bus_status` (
  `student_id` varchar(255) NOT NULL DEFAULT '',
  `student_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `student_drop_area` varchar(255) CHARACTER SET utf8 NOT NULL,
  `bus_fee` varchar(255) NOT NULL,
  `bus_id1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_bus_status`
--

INSERT INTO `student_bus_status` (`student_id`, `student_name`, `class`, `contact_no`, `student_drop_area`, `bus_fee`, `bus_id1`) VALUES
('6528', '&#2309;&#2350;&#2367;&#2340; &#2352;&#2366;&#2361;&#2369;&#2354; &#2346;&#2366;&#2335;&#2368;&#2354; ', '7', '9922330022', 'renapur naka', 'Paid', '1005'),
('6544', 'रोहित पाटील', '6', '6655544333', 'nanadi stop', 'Not Paid', '1002'),
('6548', 'नागमे राम सुनील ', '5', '9900337654', 'adarsh colony', 'Not Paid', '1002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_bus_status`
--
ALTER TABLE `student_bus_status`
 ADD PRIMARY KEY (`student_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
