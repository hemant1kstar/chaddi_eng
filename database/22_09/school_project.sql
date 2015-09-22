-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2015 at 09:56 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `username`, `password`) VALUES
(10001, 'vikas patil', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `reg_no` int(11) NOT NULL,
  `timing` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`reg_no`, `timing`, `date`) VALUES
(6544, 'Morning', '0000-00-00'),
(6544, 'Morning', '0000-00-00'),
(6544, 'Morning', '2015-08-20'),
(6544, 'Morning', '2015-08-21'),
(6544, 'Morning', '0000-00-00'),
(6544, 'Morning', '0000-00-00'),
(6544, 'Morning', '0000-00-00'),
(6544, 'Morning', '0000-00-00'),
(6544, 'Morning', '0000-00-00'),
(6544, 'Morning', '0000-00-00'),
(6544, 'Morning', '2015-08-13'),
(6544, 'Afternoon', '2015-08-27'),
(6534, 'Morning', '2015-08-21'),
(6544, 'Morning', '2015-08-21'),
(0, 'Afternoon', '2015-08-22'),
(6528, 'Afternoon', '2015-08-22'),
(6534, 'Morning', '2015-08-25'),
(6544, 'Morning', '2015-08-25'),
(6534, 'Morning', '2015-08-28'),
(6544, 'Morning', '2015-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
`book_id` int(11) NOT NULL,
  `book_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `category_id` int(50) NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 NOT NULL,
  `book_copies` int(11) NOT NULL,
  `book_pub` varchar(100) CHARACTER SET utf8 NOT NULL,
  `publisher_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `isbn` varchar(50) CHARACTER SET utf8 NOT NULL,
  `copyright_year` int(11) NOT NULL,
  `status` varchar(30) CHARACTER SET utf8 NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `category_id`, `author`, `book_copies`, `book_pub`, `publisher_name`, `isbn`, `copyright_year`, `status`, `date_added`) VALUES
(101, 'नवीन भारती', 801, 'विकास', 12, 'विद्याभारती', 'निकिता पब्लिकेशन', '878778878', 2015, 'New', '2015-09-15'),
(102, 'mkl', 801, 'ff', 5, 'gg', 'fgg', '4545', 2015, 'New', '2015-09-02'),
(103, 'fghfg', 803, 'fghfgh', 44, 'fgh', 'fgh', '6456546', 2014, 'New', '2015-09-03'),
(113, 'ghjh', 801, 'ghj', 44, 'ghj', 'gh', '67657', 2222, 'Archive', '2015-09-07'),
(114, 'ghjgh', 803, 'ghj', 77, 'hj', 'hjk', '798989', 2015, 'New', '2015-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE IF NOT EXISTS `borrow` (
`borrow_id` int(11) NOT NULL,
  `member_id` bigint(50) NOT NULL,
  `date_borrow` varchar(100) NOT NULL,
  `due_date` varchar(100) DEFAULT NULL,
  `fine` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=532 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `member_id`, `date_borrow`, `due_date`, `fine`) VALUES
(529, 56, '2015-09-07 16:16:33', '2015-09-04', '0'),
(530, 57, '2015-09-07 16:17:59', '2015-09-02', '50'),
(531, 8080, '2015-09-07 18:05:46', '2015-09-01', '60');

-- --------------------------------------------------------

--
-- Table structure for table `borrowdetails`
--

CREATE TABLE IF NOT EXISTS `borrowdetails` (
`borrow_details_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `borrow_status` varchar(50) NOT NULL,
  `date_return` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=210 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowdetails`
--

INSERT INTO `borrowdetails` (`borrow_details_id`, `book_id`, `borrow_id`, `borrow_status`, `date_return`) VALUES
(207, 101, 529, 'pending', ''),
(208, 102, 530, 'returned', '2015-09-07'),
(209, 114, 531, 'returned', '2015-09-07');

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

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `date` date NOT NULL,
  `timing` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`date`, `timing`) VALUES
('2015-08-08', 'Morning'),
('2015-08-09', 'Morning'),
('2015-08-06', 'Morning'),
('2015-08-07', 'Morning'),
('2015-08-05', 'Morning'),
('2015-08-05', 'Afternoon'),
('2015-08-06', 'Afternoon'),
('2015-08-07', 'Afternoon'),
('2015-08-08', 'Afternoon'),
('2015-08-10', 'Afternoon'),
('2015-08-11', 'Afternoon'),
('2015-07-01', 'Morning'),
('2015-07-01', 'Afternoon'),
('2015-07-02', 'Morning'),
('2015-07-02', 'Afternoon');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=807 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(801, 'मराठी'),
(802, 'English'),
(803, 'Math'),
(804, 'Science'),
(805, 'General'),
(806, 'References');

-- --------------------------------------------------------

--
-- Table structure for table `chavli_report`
--

CREATE TABLE IF NOT EXISTS `chavli_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_chavli_remain` int(11) NOT NULL,
  `current_month_chavli_got` int(11) NOT NULL,
  `total_chavli` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `chavli_cooked` int(11) NOT NULL,
  `monthEnd_remaining_chavli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chavli_report`
--

INSERT INTO `chavli_report` (`date`, `total_student`, `prev_chavli_remain`, `current_month_chavli_got`, `total_chavli`, `total_plates`, `chavli_cooked`, `monthEnd_remaining_chavli`) VALUES
('2015-08-01', 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `halad_report`
--

CREATE TABLE IF NOT EXISTS `halad_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_halad_remain` int(11) NOT NULL,
  `current_month_halad_got` int(11) NOT NULL,
  `total_halad` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `halad_cooked` int(11) NOT NULL,
  `monthEnd_remaining_halad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halad_report`
--

INSERT INTO `halad_report` (`date`, `total_student`, `prev_halad_remain`, `current_month_halad_got`, `total_halad`, `total_plates`, `halad_cooked`, `monthEnd_remaining_halad`) VALUES
('2015-08-04', 22, 22, 22, 22, 22, 22, 22);

-- --------------------------------------------------------

--
-- Table structure for table `harbara_report`
--

CREATE TABLE IF NOT EXISTS `harbara_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_harbara_remain` int(11) NOT NULL,
  `current_month_harbara_got` int(11) NOT NULL,
  `total_harbara` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `harbara_cooked` int(11) NOT NULL,
  `monthEnd_remaining_harbara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harbara_report`
--

INSERT INTO `harbara_report` (`date`, `total_student`, `prev_harbara_remain`, `current_month_harbara_got`, `total_harbara`, `total_plates`, `harbara_cooked`, `monthEnd_remaining_harbara`) VALUES
('2015-08-01', 44, 44, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `jire_report`
--

CREATE TABLE IF NOT EXISTS `jire_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_jire_remain` int(11) NOT NULL,
  `current_month_jire_got` int(11) NOT NULL,
  `total_jire` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `jire_cooked` int(11) NOT NULL,
  `monthEnd_remaining_jire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jire_report`
--

INSERT INTO `jire_report` (`date`, `total_student`, `prev_jire_remain`, `current_month_jire_got`, `total_jire`, `total_plates`, `jire_cooked`, `monthEnd_remaining_jire`) VALUES
('2015-08-01', 99, 99, 99, 99, 99, 99, 99);

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE IF NOT EXISTS `master` (
  `reg_no` int(11) NOT NULL,
  `student_name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `mother_name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `Mother_tongue` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) DEFAULT NULL,
  `nationality` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `religion` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `caste` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `sub_caste` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `father_name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `father_occupation` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `annual_income` varchar(100) DEFAULT NULL,
  `birth_place` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `district` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `state` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `prev_class` varchar(100) DEFAULT NULL,
  `prev_school_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `admission_date` date NOT NULL,
  `admission_class` varchar(100) DEFAULT NULL,
  `prev_mark_sheet` varchar(100) DEFAULT NULL,
  `prev_tc` varchar(100) DEFAULT NULL,
  `nadar_fee` varchar(100) DEFAULT NULL,
  `permanent_address` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `medium` varchar(100) DEFAULT NULL,
  `school_leaving_class` varchar(40) DEFAULT NULL,
  `school_leaving_date` date NOT NULL,
  `student_progress` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `behaviour` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `school_leaving_reason` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `tc_no` varchar(40) DEFAULT NULL,
  `tc_date` date NOT NULL,
  `tc_remark` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `aadhar_no` varchar(255) DEFAULT NULL,
  `bank_account_no` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `bank_branch_code` varchar(255) DEFAULT NULL,
  `lic_id_no` varchar(255) DEFAULT NULL,
  `minority_details` varchar(255) DEFAULT NULL,
  `admitted_division` varchar(100) DEFAULT NULL,
  `student_name1` varchar(100) DEFAULT NULL,
  `current_class` varchar(100) DEFAULT NULL,
  `current_class_entry_date` date NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `fee_concession` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `admission_month` varchar(100) DEFAULT NULL,
  `admission_year` varchar(100) DEFAULT NULL,
  `handicapped` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `scholarship` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `exam_seat_no` varchar(100) DEFAULT NULL,
  `10_percentage` varchar(100) DEFAULT NULL,
  `9_percentage` varchar(100) DEFAULT NULL,
  `8_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `7_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `6_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `5_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `4_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `3_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `2_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `1_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `student_img_url` varchar(100) DEFAULT NULL,
  `tc_pdf_url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`reg_no`, `student_name`, `mother_name`, `gender`, `Mother_tongue`, `birthdate`, `age`, `nationality`, `religion`, `caste`, `sub_caste`, `category`, `father_name`, `father_occupation`, `annual_income`, `birth_place`, `district`, `state`, `prev_class`, `prev_school_name`, `admission_date`, `admission_class`, `prev_mark_sheet`, `prev_tc`, `nadar_fee`, `permanent_address`, `medium`, `school_leaving_class`, `school_leaving_date`, `student_progress`, `behaviour`, `school_leaving_reason`, `tc_no`, `tc_date`, `tc_remark`, `aadhar_no`, `bank_account_no`, `bank_branch`, `bank_branch_code`, `lic_id_no`, `minority_details`, `admitted_division`, `student_name1`, `current_class`, `current_class_entry_date`, `status`, `contact_no`, `fee_concession`, `admission_month`, `admission_year`, `handicapped`, `scholarship`, `exam_seat_no`, `10_percentage`, `9_percentage`, `8_grade`, `7_grade`, `6_grade`, `5_grade`, `4_grade`, `3_grade`, `2_grade`, `1_grade`, `student_img_url`, `tc_pdf_url`) VALUES
(444, 'rrr', '', 'M', '', '2015-09-09', 12, '', '', '', '', 'Open', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Yes', 'Yes', 'Yes', '', '', NULL, '0000-00-00', NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '0000-00-00', 'Present', '777768886', NULL, NULL, NULL, NULL, 'Savitri_Bai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1234, 'दिनेश पाटील ', 'माया ', 'M', 'मराठी ', '2015-08-07', 12, 'भारतीय ', 'hindu', 'maratha', 'maratha', 'Open', 'Gopalrao', 'Farmar', '50000', 'Latur', 'Latur', 'Maharashtra', '8', 'Jilha Parishad,Latur', '2015-08-20', '9', 'Yes', 'Yes', 'Yes', 'Shiv Nagar ,Latur', 'S', '6', '2015-08-05', 'good', 'good', 'no', '123456', '2015-08-27', 'good', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', '0000-00-00', NULL, '5754548548', NULL, NULL, NULL, NULL, NULL, '455', 'as', '', 'as', '', 'a', '', 'a', '', 'a', '', NULL, NULL),
(6528, 'अमित राहुल पाटील ', 'जया ', 'M', 'मराठी ', '2003-08-11', 12, 'भारतीय', 'हिंदु ', 'मराठा', '--', 'OBC', ' राहुल अजय पाटील ', 'Farmer', '40000', 'लातूर ता.लातूर', 'लातूर', 'महाराष्ट्र', '6', 'जिल्हा परिषद ,लातूर', '2011-08-16', '7', 'Yes', 'Yes', 'Yes', 'शिवाजी नगर ,लातूर', 'S', '7', '2015-08-05', 'बरा', 'चांगली', 'शालांत परिक्षेत बसल्यामुळे', '2556', '2015-08-20', 'चांगली', '44552341', '2220001233', 'SBH', 'SBI4404', '233304', '49', 'B', 'Amit Rahul Patil', '7', '2014-06-10', 'Left School', '9922330022', 'फी सवलत', '5', '2013', '--', 'Handicapped', '66277', '66', '55', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', NULL, NULL),
(6534, 'राहुल विजय पाटील', 'मीत', 'M', 'हिंदी', '2015-08-02', 13, 'भारतीय', 'हिंदू', 'मराठा', '--', 'Open', 'विजय राम पाटील', 'Farmer', '600000', 'बुधोडा,ता.लातूर', 'लातूर', 'महाराष्ट्र', '6', 'श्री देशिकेंद्र विद्यालय,लातूर', '2015-08-07', '7', 'Yes', 'Yes', 'Yes', 'शिवाजी नगर ,लातूर', 'S', '7', '2015-08-12', 'बरा', 'चांगली', 'शालांत परिक्षेत बसल्यामुळे', '5511', '2015-08-12', 'चांगली', '5676', '344444', '', '4444', '', '56', '', 'Ram Ganesh Patil', '6', '0000-00-00', 'Present', '6655544333', '', '', '2015', '--', 'Unclean_business', '645656', '45', '45', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', NULL, NULL),
(6544, 'रोहित', 'जया', 'M', 'मराठी', '2015-08-12', 12, 'भारतीय', 'हिंदु ', 'लिंगायत', '--', 'Open', 'राम विजय पाटील', 'किसान', '68888', 'शिव नगर,लातूर', 'लातूर', 'महाराष्ट्र', '6', 'श्री देशिकेंद्र विद्यालय,लातूर', '2015-08-08', '7', 'Yes', 'Yes', 'Yes', 'शिवाजीनगर,लातूर', 'S', NULL, '0000-00-00', NULL, NULL, NULL, NULL, '0000-00-00', NULL, '4556', '454656', 'SBI', '4455', '434232323', '33', 'B', 'Ram Ganesh Patil', '6', '2015-08-27', 'Left School', '6655544333', 'फी सवलत ', '7', '2014', '---', 'Adivasi_Scholarship', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6548, 'नागमे राम सुनील ', 'जया', 'M', 'मराठी ', '2003-07-14', 12, 'भारतीय ', 'हिंदु ', 'मराठा ', '-', 'Open', 'सुनील दयारम नागमे  ', 'farmer', '70000', 'लातूर ता.लातूर ', 'लातूर', 'महाराष्ट्र ', '6', 'जिल्हा परिषद ,लातूर ', '2015-02-10', '7', 'Yes', 'Yes', 'Yes', 'शिवाजी नगर ,लातूर', 'S', '7', '2015-08-01', 'बरा ', 'चांगली ', 'शालांत परिक्षेत बसल्यामुळे', '2255', '2015-08-01', 'चांगली ', '4465582471', '202288456123', 'SBI', 'sbi2205', '201111', '48', 'A', 'Nagme Ram Sunil', '5', '2014-06-10', 'Left School', '9900337654', 'फी सवलत ', '6', '2015', '--', 'Minority', '68773', '77', '65', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', NULL, NULL),
(8080, 'vivek bale-patil', 'bb', 'M', 'bb', '2015-09-10', 17, 'indian', 'hindu', 'hindu', '--', 'Open', 'Bandu', 'farmar', '800000', 'Latur', 'latur', 'mh', '6', 'gg', '2015-09-16', '7', 'Yes', 'Yes', 'Yes', 'Latur city', 'm', NULL, '0000-00-00', NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '0000-00-00', 'Present', '99999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(777777, 'j', 'j', 'M', 'j', '2015-09-03', 78, 'n', 'n', 'nn', 'n', 'Open', 'hh', 'n', 'n', 'n', 'n', 'n', 'n', 'ghj', '2015-09-09', '8', 'Yes', 'Yes', 'Yes', 'Latur City', 'hgj', NULL, '0000-00-00', NULL, NULL, NULL, NULL, '0000-00-00', NULL, '566', '546', 'fh', 'fg', '56', '56', 'a', 'xgvc', '7', '0000-00-00', 'Present', '7878', 'gf', '6', '2015', 'fg', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1222222, 'Ganesh More', 'nn', 'M', 'nn', '2003-05-06', 16, 'indian', 'hindu', 'hindu', '--', 'Open', 'Bandu', 'farmar', '', 'Latur', 'latur', 'mh', '6', 'gg', '2015-09-16', '7', 'Yes', 'Yes', 'Yes', 'Latur city', 'm', NULL, '0000-00-00', NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '0000-00-00', 'Present', '8888888888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `masurdal_report`
--

CREATE TABLE IF NOT EXISTS `masurdal_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_masurdal_remain` int(11) NOT NULL,
  `current_month_masurdal_got` int(11) NOT NULL,
  `total_masurdal` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `masurdal_cooked` int(11) NOT NULL,
  `monthEnd_remaining_masurdal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masurdal_report`
--

INSERT INTO `masurdal_report` (`date`, `total_student`, `prev_masurdal_remain`, `current_month_masurdal_got`, `total_masurdal`, `total_plates`, `masurdal_cooked`, `monthEnd_remaining_masurdal`) VALUES
('2015-08-01', 1, 1, 1, 1, 1, 1, 1),
('2015-08-03', 3, 3, 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `matki_report`
--

CREATE TABLE IF NOT EXISTS `matki_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_matki_remain` int(11) NOT NULL,
  `current_month_matki_got` int(11) NOT NULL,
  `total_matki` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `matki_cooked` int(11) NOT NULL,
  `monthEnd_remaining_matki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matki_report`
--

INSERT INTO `matki_report` (`date`, `total_student`, `prev_matki_remain`, `current_month_matki_got`, `total_matki`, `total_plates`, `matki_cooked`, `monthEnd_remaining_matki`) VALUES
('2015-08-01', 1, 1, 1, 1, 1, 1, 1),
('2015-08-05', 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`member_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8081 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `gender`, `address`, `contact`, `type`, `year_level`, `status`) VALUES
(56, 'नामदेव पाटील', 'Male', 'लातूर सिटी', '99999', 'Student', '6', 'Active'),
(57, 'ram desmukh', 'Male', 'Latur City', '90902', 'Student', '7', 'Active'),
(58, 'kavita survse', 'Female', 'Latur City', '123', 'Student', '5', 'Active'),
(59, 'sam potil', 'Male', 'Latur City', '9340', 'Student', '4', 'Active'),
(60, 'shailesh birajdar', 'Male', 'Latur City', '898988888', 'Student', '8', 'Active'),
(62, 'sumit waghmare', 'Male', 'Latur City', '988998889', 'Teacher', 'Faculty', 'Active'),
(65, 'rajesh bond', 'Male', 'Latur City', '8889344444', 'Teacher', 'Faculty', 'Active'),
(67, 'Ganesh More', 'M', 'Latur city', '8888888888', 'Student', '7', 'Active'),
(8080, 'vivek bale-patil', 'M', 'Latur city', '99999999', 'Student', '7', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `mirchi_powder_report`
--

CREATE TABLE IF NOT EXISTS `mirchi_powder_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_mirchi_powder_remain` int(11) NOT NULL,
  `current_month_mirchi_powder_got` int(11) NOT NULL,
  `total_mirchi_powder` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `mirchi_powder_cooked` int(11) NOT NULL,
  `monthEnd_remaining_mirchi_powder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mirchi_powder_report`
--

INSERT INTO `mirchi_powder_report` (`date`, `total_student`, `prev_mirchi_powder_remain`, `current_month_mirchi_powder_got`, `total_mirchi_powder`, `total_plates`, `mirchi_powder_cooked`, `monthEnd_remaining_mirchi_powder`) VALUES
('2015-08-03', 3, 3, 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mohari_report`
--

CREATE TABLE IF NOT EXISTS `mohari_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_mohari_remain` int(11) NOT NULL,
  `current_month_mohari_got` int(11) NOT NULL,
  `total_mohari` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `mohari_cooked` int(11) NOT NULL,
  `monthEnd_remaining_mohari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mohari_report`
--

INSERT INTO `mohari_report` (`date`, `total_student`, `prev_mohari_remain`, `current_month_mohari_got`, `total_mohari`, `total_plates`, `mohari_cooked`, `monthEnd_remaining_mohari`) VALUES
('2015-08-10', 12, 12, 12, 12, 12, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `mugdal_report`
--

CREATE TABLE IF NOT EXISTS `mugdal_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_mugdal_remain` int(11) NOT NULL,
  `current_month_mugdal_got` int(11) NOT NULL,
  `total_mugdal` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `mugdal_cooked` int(11) NOT NULL,
  `monthEnd_remaining_mugdal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mugdal_report`
--

INSERT INTO `mugdal_report` (`date`, `total_student`, `prev_mugdal_remain`, `current_month_mugdal_got`, `total_mugdal`, `total_plates`, `mugdal_cooked`, `monthEnd_remaining_mugdal`) VALUES
('2015-08-01', 1, 1, 1, 1, 1, 1, 1),
('2015-07-01', 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mug_report`
--

CREATE TABLE IF NOT EXISTS `mug_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_mug_remain` int(11) NOT NULL,
  `current_month_mug_got` int(11) NOT NULL,
  `total_mug` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `mug_cooked` int(11) NOT NULL,
  `monthEnd_remaining_mug` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mug_report`
--

INSERT INTO `mug_report` (`date`, `total_student`, `prev_mug_remain`, `current_month_mug_got`, `total_mug`, `total_plates`, `mug_cooked`, `monthEnd_remaining_mug`) VALUES
('2015-08-01', 1, 1, 1, 1, 1, 1, 1),
('2015-08-10', 11, 1, 11, 11, 1, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purak_aahar`
--

CREATE TABLE IF NOT EXISTS `purak_aahar` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_purak_aahar` int(11) NOT NULL,
  `current_month_purak_aahar_got` int(11) NOT NULL,
  `total_purak_aahar` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `purak_aahar_cooked` int(11) NOT NULL,
  `monthEnd_remaining_purak_aahar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rice_report`
--

CREATE TABLE IF NOT EXISTS `rice_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_rice_remain` int(11) NOT NULL,
  `current_month_rice_got` int(11) NOT NULL,
  `total_rice` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `cooked_rice` int(11) NOT NULL,
  `monthEnd_remaining_rice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rice_report`
--

INSERT INTO `rice_report` (`date`, `total_student`, `prev_rice_remain`, `current_month_rice_got`, `total_rice`, `total_plates`, `cooked_rice`, `monthEnd_remaining_rice`) VALUES
('2015-07-01', 23, 23, 23, 23, 232, 23, 232),
('2015-07-02', 45, 444, 44, 4, 444, 4, 44),
('2015-08-01', 1, 1, 12, 1, 1, 1, 1),
('2015-08-03', 3, 4, 5, 6, 7, 8, 9),
('2015-08-04', 66, 77, 8, 7, 8, 8, 8),
('2015-08-10', 55, 5, 5, 5, 5, 5, 5),
('2015-08-18', 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `salt_report`
--

CREATE TABLE IF NOT EXISTS `salt_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_salt` int(11) NOT NULL,
  `current_month_salt_got` int(11) NOT NULL,
  `total_salt` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `salt_cooked` int(11) NOT NULL,
  `monthEnd_remaining_salt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salt_report`
--

INSERT INTO `salt_report` (`date`, `total_student`, `prev_salt`, `current_month_salt_got`, `total_salt`, `total_plates`, `salt_cooked`, `monthEnd_remaining_salt`) VALUES
('2015-08-01', 55, 5, 5, 55, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `soyabin_tel_report`
--

CREATE TABLE IF NOT EXISTS `soyabin_tel_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_soyabin_tel_remain` int(11) NOT NULL,
  `current_month_soyabin_tel_got` int(11) NOT NULL,
  `total_soyabin_tel` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `soyabin_tel_cooked` int(11) NOT NULL,
  `monthEnd_remaining_soyabin_tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soyabin_tel_report`
--

INSERT INTO `soyabin_tel_report` (`date`, `total_student`, `prev_soyabin_tel_remain`, `current_month_soyabin_tel_got`, `total_soyabin_tel`, `total_plates`, `soyabin_tel_cooked`, `monthEnd_remaining_soyabin_tel`) VALUES
('2015-08-01', 77, 77, 77, 77, 77, 77, 77);

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

-- --------------------------------------------------------

--
-- Table structure for table `sugar_report`
--

CREATE TABLE IF NOT EXISTS `sugar_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_sugar_remain` int(11) NOT NULL,
  `current_month_sugar_got` int(11) NOT NULL,
  `total_sugar` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `sugar_cooked` int(11) NOT NULL,
  `monthEnd_remaining_sugar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sugar_report`
--

INSERT INTO `sugar_report` (`date`, `total_student`, `prev_sugar_remain`, `current_month_sugar_got`, `total_sugar`, `total_plates`, `sugar_cooked`, `monthEnd_remaining_sugar`) VALUES
('2015-08-01', 1, 1, 1, 1, 1, 1, 1),
('2015-08-04', 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tc`
--

CREATE TABLE IF NOT EXISTS `tc` (
  `reg_no` int(11) NOT NULL,
`sr_no` int(11) NOT NULL,
  `tc_no` int(11) DEFAULT NULL,
  `name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `adm_no` int(11) NOT NULL,
  `class` varchar(100) DEFAULT NULL,
  `reason` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `remark` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `date_issued` date NOT NULL,
  `date_leaving` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tc`
--

INSERT INTO `tc` (`reg_no`, `sr_no`, `tc_no`, `name`, `adm_no`, `class`, `reason`, `remark`, `date_issued`, `date_leaving`) VALUES
(6527, 1, 2208, 'मुळे अमित अंगद', 6665, '10', 'शालांत परिक्षेत बसल्यामुळे ', 'छान', '2012-05-31', '2015-07-31'),
(6529, 2, 2209, 'कांबळे युवराज गणपती', 6683, '7', 'शालांत परिक्षेत बसल्यामुळे ', 'छान ', '2014-10-22', '2015-05-14'),
(0, 3, 2211, 'नागमे तेजस संतोश ', 6558, '6', 'शालांत परिक्षेत बसल्यामुळे', 'छान', '2014-04-09', '2015-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profile`
--

CREATE TABLE IF NOT EXISTS `teacher_profile` (
  `teacher_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `teacher_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `qualification` varchar(255) CHARACTER SET utf8 NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8 NOT NULL,
  `experience` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subjects` varchar(255) CHARACTER SET utf8 NOT NULL,
  `profile_photo_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `other_info` varchar(255) CHARACTER SET utf8 NOT NULL,
  `training_info` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_of_appointment` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_profile`
--

INSERT INTO `teacher_profile` (`teacher_id`, `teacher_name`, `qualification`, `designation`, `experience`, `subjects`, `profile_photo_url`, `other_info`, `training_info`, `date_of_appointment`, `username`, `password`) VALUES
('501', 'prof. राम पाटील ', 'B.Ed', 'Teacher', '5 years', 'Hindi', 'profile_images/501/teacher_profile.png', 'guest lecturer in colleges', '2  year training in NIIT', '2010-08-20', 'mahesh501', 'mahesh501');

-- --------------------------------------------------------

--
-- Table structure for table `turdal_report`
--

CREATE TABLE IF NOT EXISTS `turdal_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_turdal_remain` int(11) NOT NULL,
  `current_month_turdal_got` int(11) NOT NULL,
  `total_turdal` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `turdal_cooked` int(11) NOT NULL,
  `monthEnd_remaining_turdal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turdal_report`
--

INSERT INTO `turdal_report` (`date`, `total_student`, `prev_turdal_remain`, `current_month_turdal_got`, `total_turdal`, `total_plates`, `turdal_cooked`, `monthEnd_remaining_turdal`) VALUES
('2015-08-01', 1, 1, 1, 1, 1, 1, 1),
('2015-08-02', 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
`id` int(11) NOT NULL,
  `borrowertype` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `borrowertype`) VALUES
(20, 'Teacher'),
(21, 'Staff'),
(22, 'Non-Teaching'),
(23, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `vatana_report`
--

CREATE TABLE IF NOT EXISTS `vatana_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_vatana_remain` int(11) NOT NULL,
  `current_month_vatana_got` int(11) NOT NULL,
  `total_vatana` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `vatana_cooked` int(11) NOT NULL,
  `monthEnd_remaining_vatana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vatana_report`
--

INSERT INTO `vatana_report` (`date`, `total_student`, `prev_vatana_remain`, `current_month_vatana_got`, `total_vatana`, `total_plates`, `vatana_cooked`, `monthEnd_remaining_vatana`) VALUES
('2015-08-01', 88, 88, 88, 88, 88, 88, 88);

-- --------------------------------------------------------

--
-- Table structure for table `vegetables_report`
--

CREATE TABLE IF NOT EXISTS `vegetables_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_vegetables` int(11) NOT NULL,
  `current_month_vegetables_got` int(11) NOT NULL,
  `total_vegetables` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `vegetables_cooked` int(11) NOT NULL,
  `monthEnd_remaining_vegetables` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vegetables_report`
--

INSERT INTO `vegetables_report` (`date`, `total_student`, `prev_vegetables`, `current_month_vegetables_got`, `total_vegetables`, `total_plates`, `vegetables_cooked`, `monthEnd_remaining_vegetables`) VALUES
('2015-08-01', 99, 99, 99, 99, 99, 99, 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
 ADD KEY `student_id` (`reg_no`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
 ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
 ADD PRIMARY KEY (`borrow_id`), ADD KEY `borrowerid` (`member_id`), ADD KEY `borrowid` (`borrow_id`);

--
-- Indexes for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
 ADD PRIMARY KEY (`borrow_details_id`);

--
-- Indexes for table `bus_system`
--
ALTER TABLE `bus_system`
 ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`category_id`), ADD UNIQUE KEY `category_id` (`category_id`), ADD KEY `classid` (`category_id`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
 ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `rice_report`
--
ALTER TABLE `rice_report`
 ADD PRIMARY KEY (`date`);

--
-- Indexes for table `student_bus_status`
--
ALTER TABLE `student_bus_status`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tc`
--
ALTER TABLE `tc`
 ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
 ADD PRIMARY KEY (`id`), ADD KEY `borrowertype` (`borrowertype`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10002;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=532;
--
-- AUTO_INCREMENT for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
MODIFY `borrow_details_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `bus_system`
--
ALTER TABLE `bus_system`
MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1006;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=807;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8081;
--
-- AUTO_INCREMENT for table `tc`
--
ALTER TABLE `tc`
MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
