-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2015 at 10:46 AM
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
(0, '', '', 'M', '', '0000-00-00', 0, '', '', '', '', 'Open', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Yes', 'Yes', 'Yes', '', '', NULL, '0000-00-00', NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6528, 'अमित राहुल पाटील ', 'जया ', 'M', 'मराठी ', '2003-08-11', 12, 'भारतीय', 'हिंदु ', 'मराठा', '--', 'OPEN', ' राहुल अजय पाटील ', 'Farmer', '40000', 'लातूर ता.लातूर', 'लातूर', 'महाराष्ट्र', '6', 'जिल्हा परिषद ,लातूर', '2011-08-16', '7', 'Yes', 'Yes', 'Yes', 'शिवाजी नगर ,लातूर', 'S', '7', '2015-08-05', 'बरा', 'चांगली', 'शालांत परिक्षेत बसल्यामुळे', '2556', '2015-08-20', 'चांगली', '44552341', '2220001233', 'SBH', 'SBI4404', '233304', '49', 'B', 'Amit Rahul Patil', '7', '2014-06-10', 'Left School', '9922330022', 'फी सवलत', '5', '2013', '--', 'No', '66277', '66', '55', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', NULL, NULL),
(6534, 'राहुल विजय पाटील', 'मीत', 'M', 'हिंदी', '2015-08-02', 13, 'भारतीय', 'हिंदू', 'मराठा', '--', 'Open', 'विजय राम पाटील', 'Farmer', '600000', 'बुधोडा,ता.लातूर', 'लातूर', 'महाराष्ट्र', '6', 'श्री देशिकेंद्र विद्यालय,लातूर', '2015-08-07', '7', 'Yes', 'Yes', 'Yes', 'शिवाजी नगर ,लातूर', 'S', '7', '2015-08-12', 'बरा', 'चांगली', 'शालांत परिक्षेत बसल्यामुळे', '5511', '2015-08-12', 'चांगली', '5676', '344444', '', '4444', '', '56', '', 'Ram Ganesh Patil', '', '0000-00-00', '', '6655544333', '', '', '2015', '--', '', '645656', '45', '45', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', NULL, NULL),
(6544, 'रोहित', 'जया', 'M', 'मराठी', '2015-08-12', 12, 'भारतीय', 'हिंदु ', 'लिंगायत', '--', 'Open', 'राम विजय पाटील', 'किसान', '6????', 'शिव नगर,लातूर', 'लातूर', 'महाराष्ट्र', '6', 'श्री देशिकेंद्र विद्यालय,लातूर', '2015-08-08', '7', 'Yes', 'Yes', 'Yes', 'शिवाजीनगर,लातूर', 'S', NULL, '0000-00-00', NULL, NULL, NULL, NULL, '0000-00-00', NULL, '4556', '454656', 'SBI', '4455', '434232323', '33', 'B', 'Ram Ganesh Patil', '6', '2015-08-27', 'Left School', '6655544333', 'फी सवलत ', '7', '2015', '---', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6548, 'नागमे राम सुनील ', 'जया', 'M', 'मराठी ', '2003-07-14', 12, 'भारतीय ', 'हिंदु ', 'मराठा ', '-', 'Open', 'सुनील दयारम नागमे  ', 'farmer', '70000', 'लातूर ता.लातूर ', 'लातूर', 'महाराष्ट्र ', '6', 'जिल्हा परिषद ,लातूर ', '2015-02-10', '7', 'Yes', 'Yes', 'Yes', 'शिवाजी नगर ,लातूर', 'S', '7', '2015-08-01', 'बरा ', 'चांगली ', 'शालांत परिक्षेत बसल्यामुळे', '2255', '2015-08-01', 'चांगली ', '4465582471', '202288456123', 'SBI', 'sbi2205', '201111', '48', 'A', 'Nagme Ram Sunil', '7', '2014-06-10', 'LEFT School', '9900337654', 'फी सवलत ', '6', '2015', '--', 'No', '68773', '77', '65', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', 'ब -१', NULL, NULL);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master`
--
ALTER TABLE `master`
 ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `tc`
--
ALTER TABLE `tc`
 ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tc`
--
ALTER TABLE `tc`
MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
