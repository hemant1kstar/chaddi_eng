-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2015 at 08:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `santh`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `student_id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `date` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`student_id`, `subject`, `date`) VALUES
(2, 'Afternoon', '2015-08-24'),
(31, 'Afternoon', '2015-08-24'),
(37, 'Afternoon', '2015-08-24'),
(38, 'Afternoon', '2015-08-24'),
(59, 'Afternoon', '2015-08-24'),
(60, 'Afternoon', '2015-08-24'),
(62, 'Afternoon', '2015-08-24'),
(10, 'Morning', '2015-08-13'),
(11, 'Morning', '2015-08-13'),
(1, 'Morning', '2015-08-22'),
(3, 'Morning', '2015-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `Date` date NOT NULL,
  `day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(10) NOT NULL,
  `general_regi_no` int(10) unsigned NOT NULL,
  `name` varchar(40) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `hsc_percentage` varchar(20) NOT NULL,
  `admittion_date` date NOT NULL,
  `round` varchar(20) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `adhar_card_no` varchar(20) NOT NULL,
  `tuition_fee` int(8) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `class` varchar(100) NOT NULL,
  `batch` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `general_regi_no`, `name`, `mobile_no`, `address`, `date_of_birth`, `gender`, `category`, `hsc_percentage`, `admittion_date`, `round`, `remark`, `adhar_card_no`, `tuition_fee`, `roll_no`, `class`, `batch`) VALUES
(1, 1, 'sangharsh jogdanad', '1234567890', 'anand nagar latur', '2015-07-06', 'male', 'sc', '77', '2015-07-28', '1', 'good', '23456789', 3453, 1, '1st year', 'BATCHB'),
(2, 2, 'madhav mane', '8986832587', 'anand nagar latur', '2015-07-15', 'male', 'obc', '87', '2015-07-23', '3', 'good', '465454645', 33333, 2, '2nd year', 'BATCHC'),
(3, 0, 'Marda Saurabh Kantilal', '1478259630', 'anand nagar latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 3, '1st year', 'O'),
(4, 0, 'Sayyad Imran Hakim', '3698521470', 'shahu chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 4, '1st year', 'O'),
(5, 0, 'Pole Shubham Rajeshwar', '9986532147', 'anand nagar latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 5, '1st year', 'I'),
(6, 0, 'Karhale Rajshri Gangadhar', '7789865328', 'shahu chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 6, '1st year', 'I'),
(7, 0, 'Shirolkar Zoheb Shamshuddin', '89863258986', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 7, '1st year', 'J'),
(8, 0, 'Sharvari Vivek Jagtap', '52365898710', 'anand nagar latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 8, '1st year', 'J'),
(9, 0, 'Vaidya  Eesha  Shaileshrao', '87897987877', 'shahu chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 9, '1st year', 'M'),
(10, 0, 'Phadtare Ashikesh Sanjiv', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 10, '1st year', 'N'),
(11, 0, 'Kucheriya Swarnima Nileshkumar', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 11, '1st year', 'H'),
(12, 0, 'Bangar Kalyani Balaji', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 12, '1st year', ''),
(13, 0, 'Katkar Apoorv Suresh', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 13, '1st year', 'G'),
(14, 0, 'Bangar Krishna Kundlikrao', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 14, '1st year', 'T'),
(15, 0, 'Bangar Krishna Kundlikrao', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 15, '1st year', ''),
(16, 0, 'Yadav Hrishikesh Arjun', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-01-15', '1', 'good', '99860212365', 52000, 16, '1st year', 'R'),
(17, 0, 'Satale Rushikesh Prakash', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-02-15', '1', 'good', '99860212365', 52000, 17, '1st year', 'R'),
(18, 0, 'Narwade Vishal Datta', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-03-15', '1', 'good', '99860212365', 52000, 18, '1st year', 'R'),
(19, 0, 'Shirolkar Zoheb  Shamshuddin', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-04-15', '1', 'good', '99860212365', 52000, 19, '1st year', 'R'),
(20, 0, 'Kucheriya Swarnima Nileshkumar', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-05-15', '1', 'good', '99860212365', 52000, 20, '1st year', 'T'),
(21, 0, 'Adsul Abhijeet Anant', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-06-15', '1', 'good', '99860212365', 52000, 21, '1st year', 'Y'),
(22, 0, 'Kucheriya Swarnima Nileshkumar', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-07-15', '1', 'good', '99860212365', 52000, 22, '1st year', 'Y'),
(23, 0, 'Shelke Roshni Rajaram', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-08-15', '1', 'good', '99860212365', 52000, 23, '1st year', 'Y'),
(24, 0, 'Agrawal Madhubala Shrikisan', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-09-15', '1', 'good', '99860212365', 52000, 24, '1st year', 'U'),
(25, 0, 'Pethe Ritik Ravindra', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-10-15', '1', 'good', '99860212365', 52000, 25, '1st year', 'U'),
(26, 0, 'Malve Shravani Dattatray', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-11-15', '1', 'good', '99860212365', 52000, 26, '1st year', 'U'),
(27, 0, 'Agrawal Amit Ramdeo', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '2011-12-15', '1', 'good', '99860212365', 52000, 27, '1st year', 'H'),
(28, 0, 'Sawant Sandhyarani Sharad', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 28, '1st year', ''),
(29, 0, 'Tamboli Nihal Mohammad', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 29, '1st year', 'T'),
(30, 0, 'Master  Shivam  Sanjay  Patil', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 30, '1st year', 'T'),
(31, 0, 'Prachi Satish Tope', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 1, '2nd year', 'A'),
(32, 2, 'madhav mane', '8986832587', 'anand nagar latur', '2015-07-15', 'male', 'obc', '87', '2015-07-23', '3', 'good', '465454645', 33333, 2, '2nd year', 'BATCHC'),
(33, 0, 'Chavan Mansi Raju', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 3, '2nd year', 'A'),
(34, 0, 'Chavan Rachna Subhash', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 4, '2nd year', 'A'),
(35, 0, 'Tehle Rutuja Madhukar', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 5, '2nd year', 'A'),
(36, 0, 'Ashutosh Prasanna Jadhav', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 6, '2nd year', 'A'),
(37, 0, 'Yash  Mudhale', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 7, '2nd year', 'A'),
(38, 0, 'Kucheriya Swarnima Nileshkumar', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 8, '2nd year', 'A'),
(39, 0, 'Totawar Ambika Arvind', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 9, '2nd year', 'A'),
(40, 0, 'Bhusnar Shital Sitaram', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '88', '0000-00-00', '1', 'good', '99860212365', 52000, 10, '2nd year', 'A'),
(41, 0, 'Alane Pratiksha Kshirsagar', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '0000-00-00', '1', 'good', '99860212365', 52000, 11, '2nd year', 'A'),
(42, 0, 'Pathan Sahil Jamshid', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '54', '0000-00-00', '1', 'good', '99860212365', 52000, 12, '2nd year', 'A'),
(43, 0, 'Kokare Pratik Bapurao', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '0000-00-00', '1', 'good', '99860212365', 52000, 13, '2nd year', 'A'),
(44, 0, 'Shinde Vishakha Vijaykumar', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '54', '0000-00-00', '1', 'good', '99860212365', 52000, 14, '2nd year', 'A'),
(45, 0, 'Jadhav Rajani Tanaji', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '0000-00-00', '1', 'good', '99860212365', 52000, 15, '2nd year', 'A'),
(46, 0, 'More Anjali Ram', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '54', '2012-01-15', '1', 'good', '99860212365', 52000, 16, '2nd year', 'A'),
(47, 0, 'Patole Ankita Balvant', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '2012-02-15', '1', 'good', '99860212365', 52000, 17, '2nd year', 'A'),
(48, 0, 'Navale Anuja Sunil', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '2012-03-15', '1', 'good', '99860212365', 52000, 18, '2nd year', 'A'),
(49, 0, 'Raghuwanshi Anurag Mohansing', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '2012-04-15', '1', 'good', '99860212365', 52000, 19, '2nd year', 'A'),
(50, 0, 'Bansod Shantanu Sanjay', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '2012-05-15', '1', 'good', '99860212365', 52000, 20, '2nd year', 'A'),
(51, 0, 'Syed Rehan Syed Rasul', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '2012-06-15', '1', 'good', '99860212365', 52000, 21, '2nd year', 'A'),
(52, 0, 'Muneshwar Samiksha Durgadas', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '2012-07-15', '1', 'good', '99860212365', 52000, 22, '2nd year', 'A'),
(53, 0, 'Rathod Sanket Ashok', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '2012-08-15', '1', 'good', '99860212365', 52000, 23, '2nd year', 'A'),
(54, 0, 'Atkar Digvijay Keshav', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '2012-09-15', '1', 'good', '99860212365', 52000, 24, '2nd year', 'A'),
(55, 0, 'Ladda Pranita Prithwiraj', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '2012-10-15', '1', 'good', '99860212365', 52000, 25, '2nd year', 'A'),
(56, 0, 'Rutvik Rajeev Kumbhare', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '2012-11-15', '1', 'good', '99860212365', 52000, 26, '2nd year', 'A'),
(57, 0, 'Atkar Digvijay Keshav', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '2012-12-15', '1', 'good', '99860212365', 52000, 27, '2nd year', 'A'),
(58, 0, 'Jadhav Tushar Ganesh', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '0000-00-00', '1', 'good', '99860212365', 52000, 28, '2nd year', 'A'),
(59, 0, 'Markad Sakshi Ashokrao', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '0000-00-00', '1', 'good', '99860212365', 52000, 29, '2nd year', 'A'),
(60, 0, 'Shinde Shruti Shreekant', '89778974654', 'shivaji chowk latur', '0000-00-00', 'male', 'open', '53', '0000-00-00', '1', 'good', '99860212365', 52000, 30, '2nd year', 'b'),
(61, 61, 'Jadhav prashant k', '8988863254', 'anand nagar latur', '2015-07-01', 'male', 'open', '72', '2015-07-24', '1', 'good', '123456787', 52000, 31, '1st year', 'G'),
(62, 62, 'ganesh Todkar', '1234567890', 'Sale galli latur', '2015-07-18', 'male', 'open', '85', '2015-07-13', '2', 'best', '12343432434', 234234, 60, '2nd year', 'D'),
(63, 0, 'sanjay shinde', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', 0, 33, '1st year', 'a'),
(64, 0, 'adhitya valase', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', 0, 34, '1st year', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
