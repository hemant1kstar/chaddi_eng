-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2015 at 12:13 PM
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
-- Table structure for table `teacher_profile`
--

CREATE TABLE IF NOT EXISTS `teacher_profile` (
  `teacher_id` varchar(255)  CHARACTER SET utf8 collate utf8_general_ci  NOT NULL,
  `teacher_name` varchar(255)  CHARACTER SET utf8 collate utf8_general_ci  NOT NULL,
  `qualification` varchar(255) CHARACTER SET utf8 collate utf8_general_ci  NOT NULL,
  `designation` varchar(255)  CHARACTER SET utf8 collate utf8_general_ci  NOT NULL,
  `experience` varchar(255)  CHARACTER SET utf8 collate utf8_general_ci  NOT NULL,
  `subjects` varchar(255)  CHARACTER SET utf8 collate utf8_general_ci NOT NULL,
  `profile_photo_url` varchar(255) CHARACTER SET utf8 collate utf8_general_ci  NOT NULL,
  `other_info` varchar(255)  CHARACTER SET utf8 collate utf8_general_ci NOT NULL,
  `training_info` varchar(255) CHARACTER SET utf8 collate utf8_general_ci  NOT NULL,
  `date_of_appointment` varchar(255) CHARACTER SET utf8 collate utf8_general_ci  NOT NULL,
  `username` varchar(255)  CHARACTER SET utf8 collate utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 collate utf8_general_ci  NOT NULL
) ENGINE=InnoDB;

--
-- Dumping data for table `teacher_profile`
--

INSERT INTO `teacher_profile` (`teacher_id`, `teacher_name`, `qualification`, `designation`, `experience`, `subjects`, `profile_photo_url`, `other_info`, `training_info`, `date_of_appointment`, `username`, `password`) VALUES
('501', 'prof. Mahesh kulkarni', 'B.Ed', 'Teacher', '5 years', 'english', '', 'guest lecturer in colleges', '2  year training in NIIT', '2010-08-20', 'mahesh501', 'mahesh501');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
