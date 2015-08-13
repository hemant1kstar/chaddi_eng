-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2015 at 12:24 PM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `profile_img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `admin_name`, `profile_img_url`) VALUES
(1, 'admin', 'admin123', 'Resoneuronance', 'profile_images/image.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `bcp`
--

CREATE TABLE IF NOT EXISTS `bcp` (
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcp`
--

INSERT INTO `bcp` (`student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`, `name`, `roll_no`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sangharsh jogdanad', '1'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pendkar Neha Gangadas', '2'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Marda Saurabh Kantilal', '3'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sayyad Imran Hakim', '4'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pole Shubham Rajeshwar', '5'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Karhale Rajshri Gangadhar', '6'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb Shamshuddin', '7'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sharvari Vivek Jagtap', '8'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Vaidya  Eesha  Shaileshrao', '9'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Phadtare Ashikesh Sanjiv', '10'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '11'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Kalyani Balaji', '12'),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Katkar Apoorv Suresh', '13'),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '14'),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '15'),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yadav Hrishikesh Arjun', '16'),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Satale Rushikesh Prakash', '17'),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Narwade Vishal Datta', '18'),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb  Shamshuddin', '19'),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '20'),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Adsul Abhijeet Anant', '21'),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '22'),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shelke Roshni Rajaram', '23'),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Madhubala Shrikisan', '24'),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pethe Ritik Ravindra', '25'),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Malve Shravani Dattatray', '26'),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Amit Ramdeo', '27'),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sawant Sandhyarani Sharad', '28'),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Tamboli Nihal Mohammad', '29'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Master  Shivam  Sanjay  Patil', '30'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav prashant k', '31'),
(63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sanjay shinde', '33'),
(64, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'adhitya valase', '34'),
(65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ram madde', '35');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `Date` date NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`Date`, `subject`) VALUES
('2015-07-01', 'pchem1'),
('2015-07-01', 'pcognosy'),
('2015-07-01', 'hap'),
('2015-07-01', 'pceutics1'),
('2015-07-01', 'hecp'),
('2015-07-01', 'bcp'),
('2015-07-01', 'pchem2'),
('2015-07-01', 'ptcology'),
('2015-07-01', 'phj'),
('2015-07-01', 'pceutics2'),
('2015-07-01', 'dsb'),
('2015-07-01', 'hcp'),
('2015-07-02', 'pchem1'),
('2015-07-02', 'pcognosy'),
('2015-07-02', 'hap'),
('2015-07-02', 'pceutics1'),
('2015-07-02', 'hecp'),
('2015-07-02', 'bcp'),
('2015-07-02', 'pchem2'),
('2015-07-02', 'ptcology'),
('2015-07-02', 'phj'),
('2015-07-02', 'pceutics2'),
('2015-07-02', 'dsb'),
('2015-07-02', 'hcp'),
('2015-07-03', 'pchem1'),
('2015-07-03', 'pcognosy'),
('2015-07-03', 'hap'),
('2015-07-03', 'pceutics1'),
('2015-07-03', 'hecp'),
('2015-07-03', 'bcp'),
('2015-07-03', 'pchem2'),
('2015-07-03', 'ptcology'),
('2015-07-03', 'phj'),
('2015-07-03', 'pceutics2'),
('2015-07-03', 'dsb'),
('2015-07-03', 'hcp'),
('2015-07-04', 'pchem1'),
('2015-07-04', 'pcognosy'),
('2015-07-04', 'hap'),
('2015-07-04', 'pceutics1'),
('2015-07-04', 'hecp'),
('2015-07-04', 'bcp'),
('2015-07-04', 'pchem2'),
('2015-07-04', 'ptcology'),
('2015-07-04', 'phj'),
('2015-07-04', 'pceutics2'),
('2015-07-04', 'dsb'),
('2015-07-04', 'hcp'),
('2015-07-05', 'pchem1'),
('2015-07-05', 'pcognosy'),
('2015-07-05', 'hap'),
('2015-07-05', 'pceutics1'),
('2015-07-05', 'hecp'),
('2015-07-05', 'bcp'),
('2015-07-05', 'pchem2'),
('2015-07-05', 'ptcology'),
('2015-07-05', 'phj'),
('2015-07-05', 'pceutics2'),
('2015-07-05', 'dsb'),
('2015-07-05', 'hcp'),
('2015-07-06', 'pchem1'),
('2015-07-06', 'pcognosy'),
('2015-07-06', 'hap'),
('2015-07-06', 'pceutics1'),
('2015-07-06', 'hecp'),
('2015-07-06', 'bcp'),
('2015-07-06', 'pchem2'),
('2015-07-06', 'ptcology'),
('2015-07-06', 'phj'),
('2015-07-06', 'pceutics2'),
('2015-07-06', 'dsb'),
('2015-07-06', 'hcp'),
('2015-07-07', 'pchem1'),
('2015-07-07', 'pcognosy'),
('2015-07-07', 'hap'),
('2015-07-07', 'pceutics1'),
('2015-07-07', 'hecp'),
('2015-07-07', 'bcp'),
('2015-07-07', 'pchem2'),
('2015-07-07', 'ptcology'),
('2015-07-07', 'phj'),
('2015-07-07', 'pceutics2'),
('2015-07-07', 'dsb'),
('2015-07-07', 'hcp'),
('2015-07-08', 'pchem1'),
('2015-07-08', 'pcognosy'),
('2015-07-08', 'hap'),
('2015-07-08', 'pceutics1'),
('2015-07-08', 'hecp'),
('2015-07-08', 'bcp'),
('2015-07-08', 'pchem2'),
('2015-07-08', 'ptcology'),
('2015-07-08', 'phj'),
('2015-07-08', 'pceutics2'),
('2015-07-08', 'dsb'),
('2015-07-08', 'hcp'),
('2015-07-08', 'pchem1'),
('2015-07-08', 'pcognosy'),
('2015-07-08', 'hap'),
('2015-07-08', 'pceutics1'),
('2015-07-08', 'hecp'),
('2015-07-08', 'bcp'),
('2015-07-08', 'pchem2'),
('2015-07-08', 'ptcology'),
('2015-07-08', 'phj'),
('2015-07-08', 'pceutics2'),
('2015-07-08', 'dsb'),
('2015-07-08', 'hcp'),
('2015-07-09', 'pchem1'),
('2015-07-09', 'pcognosy'),
('2015-07-09', 'hap'),
('2015-07-09', 'pceutics1'),
('2015-07-09', 'hecp'),
('2015-07-09', 'bcp'),
('2015-07-09', 'pchem2'),
('2015-07-09', 'ptcology'),
('2015-07-09', 'phj'),
('2015-07-09', 'pceutics2'),
('2015-07-09', 'dsb'),
('2015-07-09', 'hcp'),
('2015-07-10', 'pchem1'),
('2015-07-10', 'pcognosy'),
('2015-07-10', 'hap'),
('2015-07-10', 'pceutics1'),
('2015-07-10', 'hecp'),
('2015-07-10', 'bcp'),
('2015-07-10', 'pchem2'),
('2015-07-10', 'ptcology'),
('2015-07-10', 'phj'),
('2015-07-10', 'pceutics2'),
('2015-07-10', 'dsb'),
('2015-07-10', 'hcp'),
('2015-07-11', 'pchem1'),
('2015-07-11', 'pcognosy'),
('2015-07-11', 'hap'),
('2015-07-11', 'pceutics1'),
('2015-07-11', 'hecp'),
('2015-07-11', 'bcp'),
('2015-07-11', 'pchem2'),
('2015-07-11', 'ptcology'),
('2015-07-11', 'phj'),
('2015-07-11', 'pceutics2'),
('2015-07-11', 'dsb'),
('2015-07-11', 'hcp'),
('2015-07-12', 'pchem1'),
('2015-07-12', 'pcognosy'),
('2015-07-12', 'hap'),
('2015-07-12', 'pceutics1'),
('2015-07-12', 'hecp'),
('2015-07-12', 'bcp'),
('2015-07-12', 'pchem2'),
('2015-07-12', 'ptcology'),
('2015-07-12', 'phj'),
('2015-07-12', 'pceutics2'),
('2015-07-12', 'dsb'),
('2015-07-12', 'hcp'),
('2015-07-13', 'pchem1'),
('2015-07-13', 'pcognosy'),
('2015-07-13', 'hap'),
('2015-07-13', 'pceutics1'),
('2015-07-13', 'hecp'),
('2015-07-13', 'bcp'),
('2015-07-13', 'pchem2'),
('2015-07-13', 'ptcology'),
('2015-07-13', 'phj'),
('2015-07-13', 'pceutics2'),
('2015-07-13', 'dsb'),
('2015-07-13', 'hcp'),
('2015-07-14', 'pchem1'),
('2015-07-14', 'pcognosy'),
('2015-07-14', 'hap'),
('2015-07-14', 'pceutics1'),
('2015-07-14', 'hecp'),
('2015-07-14', 'bcp'),
('2015-07-14', 'pchem2'),
('2015-07-14', 'ptcology'),
('2015-07-14', 'phj'),
('2015-07-14', 'pceutics2'),
('2015-07-14', 'dsb'),
('2015-07-14', 'hcp'),
('2015-07-15', 'pchem1'),
('2015-07-15', 'pcognosy'),
('2015-07-15', 'hap'),
('2015-07-15', 'pceutics1'),
('2015-07-15', 'hecp'),
('2015-07-15', 'bcp'),
('2015-07-15', 'pchem2'),
('2015-07-15', 'ptcology'),
('2015-07-15', 'phj'),
('2015-07-15', 'pceutics2'),
('2015-07-15', 'dsb'),
('2015-07-15', 'hcp'),
('2015-07-16', 'pchem1'),
('2015-07-16', 'pcognosy'),
('2015-07-16', 'hap'),
('2015-07-16', 'pceutics1'),
('2015-07-16', 'hecp'),
('2015-07-16', 'bcp'),
('2015-07-16', 'pchem2'),
('2015-07-16', 'ptcology'),
('2015-07-16', 'phj'),
('2015-07-16', 'pceutics2'),
('2015-07-16', 'dsb'),
('2015-07-16', 'hcp'),
('2015-07-17', 'pchem1'),
('2015-07-17', 'pcognosy'),
('2015-07-17', 'hap'),
('2015-07-17', 'pceutics1'),
('2015-07-17', 'hecp'),
('2015-07-17', 'bcp'),
('2015-07-17', 'pchem2'),
('2015-07-17', 'ptcology'),
('2015-07-17', 'phj'),
('2015-07-17', 'pceutics2'),
('2015-07-17', 'dsb'),
('2015-07-17', 'hcp'),
('2015-07-18', 'pchem1'),
('2015-07-18', 'pcognosy'),
('2015-07-18', 'hap'),
('2015-07-18', 'pceutics1'),
('2015-07-18', 'hecp'),
('2015-07-18', 'bcp'),
('2015-07-18', 'pchem2'),
('2015-07-18', 'ptcology'),
('2015-07-18', 'phj'),
('2015-07-18', 'pceutics2'),
('2015-07-18', 'dsb'),
('2015-07-18', 'hcp'),
('2015-07-19', 'pchem1'),
('2015-07-19', 'pcognosy'),
('2015-07-19', 'hap'),
('2015-07-19', 'pceutics1'),
('2015-07-19', 'hecp'),
('2015-07-19', 'bcp'),
('2015-07-19', 'pchem2'),
('2015-07-19', 'ptcology'),
('2015-07-19', 'phj'),
('2015-07-19', 'pceutics2'),
('2015-07-19', 'dsb'),
('2015-07-19', 'hcp'),
('2015-07-20', 'pchem1'),
('2015-07-20', 'pcognosy'),
('2015-07-20', 'hap'),
('2015-07-20', 'pceutics1'),
('2015-07-20', 'hecp'),
('2015-07-20', 'bcp'),
('2015-07-20', 'pchem2'),
('2015-07-20', 'ptcology'),
('2015-07-20', 'phj'),
('2015-07-20', 'pceutics2'),
('2015-07-20', 'dsb'),
('2015-07-20', 'hcp'),
('2015-07-21', 'pchem1'),
('2015-07-21', 'pcognosy'),
('2015-07-21', 'hap'),
('2015-07-21', 'pceutics1'),
('2015-07-21', 'hecp'),
('2015-07-21', 'bcp'),
('2015-07-21', 'pchem2'),
('2015-07-21', 'ptcology'),
('2015-07-21', 'phj'),
('2015-07-21', 'pceutics2'),
('2015-07-21', 'dsb'),
('2015-07-21', 'hcp'),
('2015-07-22', 'pchem1'),
('2015-07-22', 'pcognosy'),
('2015-07-22', 'hap'),
('2015-07-22', 'pceutics1'),
('2015-07-22', 'hecp'),
('2015-07-22', 'bcp'),
('2015-07-22', 'pchem2'),
('2015-07-22', 'ptcology'),
('2015-07-22', 'phj'),
('2015-07-22', 'pceutics2'),
('2015-07-22', 'dsb'),
('2015-07-22', 'hcp'),
('2015-07-02', 'pchem1'),
('2015-07-02', 'pcognosy'),
('2015-07-02', 'phj'),
('2015-07-02', 'pceutics2');

-- --------------------------------------------------------

--
-- Table structure for table `dsb`
--

CREATE TABLE IF NOT EXISTS `dsb` (
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsb`
--

INSERT INTO `dsb` (`student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`, `name`, `roll_no`) VALUES
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Prachi Satish Tope', '1'),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'madhav mane', '2'),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Chavan Mansi Raju', '3'),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Chavan Rachna Subhash', '4'),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Tehle Rutuja Madhukar', '5'),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ashutosh Prasanna Jadhav', '6'),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yash  Mudhale', '7'),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '8'),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Totawar Ambika Arvind', '9'),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bhusnar Shital Sitaram', '10'),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Alane Pratiksha Kshirsagar', '11'),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pathan Sahil Jamshid', '12'),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kokare Pratik Bapurao', '13'),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shinde Vishakha Vijaykumar', '14'),
(45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav Rajani Tanaji', '15'),
(46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'More Anjali Ram', '16'),
(47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Patole Ankita Balvant', '17'),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Navale Anuja Sunil', '18'),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Raghuwanshi Anurag Mohansing', '19'),
(50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bansod Shantanu Sanjay', '20'),
(51, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Syed Rehan Syed Rasul', '21'),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Muneshwar Samiksha Durgadas', '22'),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Rathod Sanket Ashok', '23'),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Atkar Digvijay Keshav', '24'),
(55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ladda Pranita Prithwiraj', '25'),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Rutvik Rajeev Kumbhare', '26'),
(57, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Atkar Digvijay Keshav', '27'),
(58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav Tushar Ganesh', '28'),
(59, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Markad Sakshi Ashokrao', '29'),
(62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ganesh Todkar', '60'),
(60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shinde Shruti Shreekant', '30'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'jadhav pratik', '31');

-- --------------------------------------------------------

--
-- Table structure for table `hap`
--

CREATE TABLE IF NOT EXISTS `hap` (
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hap`
--

INSERT INTO `hap` (`student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`, `name`, `roll_no`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sangharsh jogdanad', '1'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pendkar Neha Gangadas', '2'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Marda Saurabh Kantilal', '3'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sayyad Imran Hakim', '4'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pole Shubham Rajeshwar', '5'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Karhale Rajshri Gangadhar', '6'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb Shamshuddin', '7'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sharvari Vivek Jagtap', '8'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Vaidya  Eesha  Shaileshrao', '9'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Phadtare Ashikesh Sanjiv', '10'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '11'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Kalyani Balaji', '12'),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Katkar Apoorv Suresh', '13'),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '14'),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '15'),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yadav Hrishikesh Arjun', '16'),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Satale Rushikesh Prakash', '17'),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Narwade Vishal Datta', '18'),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb  Shamshuddin', '19'),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '20'),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Adsul Abhijeet Anant', '21'),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '22'),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shelke Roshni Rajaram', '23'),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Madhubala Shrikisan', '24'),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pethe Ritik Ravindra', '25'),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Malve Shravani Dattatray', '26'),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Amit Ramdeo', '27'),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sawant Sandhyarani Sharad', '28'),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Tamboli Nihal Mohammad', '29'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Master  Shivam  Sanjay  Patil', '30'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav prashant k', '31'),
(63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sanjay shinde', '33'),
(64, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'adhitya valase', '34'),
(65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ram madde', '35');

-- --------------------------------------------------------

--
-- Table structure for table `hcp`
--

CREATE TABLE IF NOT EXISTS `hcp` (
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hcp`
--

INSERT INTO `hcp` (`student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`, `name`, `roll_no`) VALUES
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Prachi Satish Tope', '1'),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'madhav mane', '2'),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Chavan Mansi Raju', '3'),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Chavan Rachna Subhash', '4'),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Tehle Rutuja Madhukar', '5'),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ashutosh Prasanna Jadhav', '6'),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yash  Mudhale', '7'),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '8'),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Totawar Ambika Arvind', '9'),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bhusnar Shital Sitaram', '10'),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Alane Pratiksha Kshirsagar', '11'),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pathan Sahil Jamshid', '12'),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kokare Pratik Bapurao', '13'),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shinde Vishakha Vijaykumar', '14'),
(45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav Rajani Tanaji', '15'),
(46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'More Anjali Ram', '16'),
(47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Patole Ankita Balvant', '17'),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Navale Anuja Sunil', '18'),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Raghuwanshi Anurag Mohansing', '19'),
(50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bansod Shantanu Sanjay', '20'),
(51, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Syed Rehan Syed Rasul', '21'),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Muneshwar Samiksha Durgadas', '22'),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Rathod Sanket Ashok', '23'),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Atkar Digvijay Keshav', '24'),
(55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ladda Pranita Prithwiraj', '25'),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Rutvik Rajeev Kumbhare', '26'),
(57, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Atkar Digvijay Keshav', '27'),
(58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav Tushar Ganesh', '28'),
(59, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Markad Sakshi Ashokrao', '29'),
(62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ganesh Todkar', '60'),
(60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shinde Shruti Shreekant', '30'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'jadhav pratik', '31');

-- --------------------------------------------------------

--
-- Table structure for table `hecp`
--

CREATE TABLE IF NOT EXISTS `hecp` (
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hecp`
--

INSERT INTO `hecp` (`student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`, `name`, `roll_no`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sangharsh jogdanad', '1'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pendkar Neha Gangadas', '2'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Marda Saurabh Kantilal', '3'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sayyad Imran Hakim', '4'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pole Shubham Rajeshwar', '5'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Karhale Rajshri Gangadhar', '6'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb Shamshuddin', '7'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sharvari Vivek Jagtap', '8'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Vaidya  Eesha  Shaileshrao', '9'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Phadtare Ashikesh Sanjiv', '10'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '11'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Kalyani Balaji', '12'),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Katkar Apoorv Suresh', '13'),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '14'),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '15'),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yadav Hrishikesh Arjun', '16'),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Satale Rushikesh Prakash', '17'),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Narwade Vishal Datta', '18'),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb  Shamshuddin', '19'),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '20'),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Adsul Abhijeet Anant', '21'),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '22'),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shelke Roshni Rajaram', '23'),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Madhubala Shrikisan', '24'),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pethe Ritik Ravindra', '25'),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Malve Shravani Dattatray', '26'),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Amit Ramdeo', '27'),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sawant Sandhyarani Sharad', '28'),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Tamboli Nihal Mohammad', '29'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Master  Shivam  Sanjay  Patil', '30'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav prashant k', '31'),
(63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sanjay shinde', '33'),
(64, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'adhitya valase', '34'),
(65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ram madde', '35');

-- --------------------------------------------------------

--
-- Table structure for table `pceutics1`
--

CREATE TABLE IF NOT EXISTS `pceutics1` (
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pceutics1`
--

INSERT INTO `pceutics1` (`student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`, `name`, `roll_no`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sangharsh jogdanad', '1'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pendkar Neha Gangadas', '2'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Marda Saurabh Kantilal', '3'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sayyad Imran Hakim', '4'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pole Shubham Rajeshwar', '5'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Karhale Rajshri Gangadhar', '6'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb Shamshuddin', '7'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sharvari Vivek Jagtap', '8'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Vaidya  Eesha  Shaileshrao', '9'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Phadtare Ashikesh Sanjiv', '10'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '11'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Kalyani Balaji', '12'),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Katkar Apoorv Suresh', '13'),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '14'),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '15'),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yadav Hrishikesh Arjun', '16'),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Satale Rushikesh Prakash', '17'),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Narwade Vishal Datta', '18'),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb  Shamshuddin', '19'),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '20'),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Adsul Abhijeet Anant', '21'),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '22'),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shelke Roshni Rajaram', '23'),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Madhubala Shrikisan', '24'),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pethe Ritik Ravindra', '25'),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Malve Shravani Dattatray', '26'),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Amit Ramdeo', '27'),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sawant Sandhyarani Sharad', '28'),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Tamboli Nihal Mohammad', '29'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Master  Shivam  Sanjay  Patil', '30'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav prashant k', '31'),
(63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sanjay shinde', '33'),
(64, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'adhitya valase', '34'),
(65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ram madde', '35');

-- --------------------------------------------------------

--
-- Table structure for table `pceutics2`
--

CREATE TABLE IF NOT EXISTS `pceutics2` (
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pceutics2`
--

INSERT INTO `pceutics2` (`student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`, `name`, `roll_no`) VALUES
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Prachi Satish Tope', '1'),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'madhav mane', '2'),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Chavan Mansi Raju', '3'),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Chavan Rachna Subhash', '4'),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Tehle Rutuja Madhukar', '5'),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ashutosh Prasanna Jadhav', '6'),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yash  Mudhale', '7'),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '8'),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Totawar Ambika Arvind', '9'),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bhusnar Shital Sitaram', '10'),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Alane Pratiksha Kshirsagar', '11'),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pathan Sahil Jamshid', '12'),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kokare Pratik Bapurao', '13'),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shinde Vishakha Vijaykumar', '14'),
(45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav Rajani Tanaji', '15'),
(46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'More Anjali Ram', '16'),
(47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Patole Ankita Balvant', '17'),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Navale Anuja Sunil', '18'),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Raghuwanshi Anurag Mohansing', '19'),
(50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bansod Shantanu Sanjay', '20'),
(51, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Syed Rehan Syed Rasul', '21'),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Muneshwar Samiksha Durgadas', '22'),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Rathod Sanket Ashok', '23'),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Atkar Digvijay Keshav', '24'),
(55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ladda Pranita Prithwiraj', '25'),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Rutvik Rajeev Kumbhare', '26'),
(57, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Atkar Digvijay Keshav', '27'),
(58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav Tushar Ganesh', '28'),
(59, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Markad Sakshi Ashokrao', '29'),
(62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ganesh Todkar', '60'),
(60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shinde Shruti Shreekant', '30'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'jadhav pratik', '31');

-- --------------------------------------------------------

--
-- Table structure for table `pchem1`
--

CREATE TABLE IF NOT EXISTS `pchem1` (
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pchem1`
--

INSERT INTO `pchem1` (`student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`, `name`, `roll_no`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sangharsh jogdanad', '1'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pendkar Neha Gangadas', '2'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Marda Saurabh Kantilal', '3'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sayyad Imran Hakim', '4'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pole Shubham Rajeshwar', '5'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Karhale Rajshri Gangadhar', '6'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb Shamshuddin', '7'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sharvari Vivek Jagtap', '8'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Vaidya  Eesha  Shaileshrao', '9'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Phadtare Ashikesh Sanjiv', '10'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '11'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Kalyani Balaji', '12'),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Katkar Apoorv Suresh', '13'),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '14'),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '15'),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yadav Hrishikesh Arjun', '16'),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Satale Rushikesh Prakash', '17'),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Narwade Vishal Datta', '18'),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb  Shamshuddin', '19'),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '20'),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Adsul Abhijeet Anant', '21'),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '22'),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shelke Roshni Rajaram', '23'),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Madhubala Shrikisan', '24'),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pethe Ritik Ravindra', '25'),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Malve Shravani Dattatray', '26'),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Amit Ramdeo', '27'),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sawant Sandhyarani Sharad', '28'),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Tamboli Nihal Mohammad', '29'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Master  Shivam  Sanjay  Patil', '30'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav prashant k', '31'),
(63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sanjay shinde', '33'),
(64, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'adhitya valase', '34'),
(65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ram madde', '35');

-- --------------------------------------------------------

--
-- Table structure for table `pchem2`
--

CREATE TABLE IF NOT EXISTS `pchem2` (
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pchem2`
--

INSERT INTO `pchem2` (`student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`, `name`, `roll_no`) VALUES
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Prachi Satish Tope', '1'),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'madhav mane', '2'),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Chavan Mansi Raju', '3'),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Chavan Rachna Subhash', '4'),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Tehle Rutuja Madhukar', '5'),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ashutosh Prasanna Jadhav', '6'),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yash  Mudhale', '7'),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '8'),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Totawar Ambika Arvind', '9'),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bhusnar Shital Sitaram', '10'),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Alane Pratiksha Kshirsagar', '11'),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pathan Sahil Jamshid', '12'),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kokare Pratik Bapurao', '13'),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shinde Vishakha Vijaykumar', '14'),
(45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav Rajani Tanaji', '15'),
(46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'More Anjali Ram', '16'),
(47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Patole Ankita Balvant', '17'),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Navale Anuja Sunil', '18'),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Raghuwanshi Anurag Mohansing', '19'),
(50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bansod Shantanu Sanjay', '20'),
(51, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Syed Rehan Syed Rasul', '21'),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Muneshwar Samiksha Durgadas', '22'),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Rathod Sanket Ashok', '23'),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Atkar Digvijay Keshav', '24'),
(55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ladda Pranita Prithwiraj', '25'),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Rutvik Rajeev Kumbhare', '26'),
(57, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Atkar Digvijay Keshav', '27'),
(58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav Tushar Ganesh', '28'),
(59, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Markad Sakshi Ashokrao', '29'),
(62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ganesh Todkar', '60'),
(60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shinde Shruti Shreekant', '30'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'jadhav pratik', '31');

-- --------------------------------------------------------

--
-- Table structure for table `pcognosy`
--

CREATE TABLE IF NOT EXISTS `pcognosy` (
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcognosy`
--

INSERT INTO `pcognosy` (`student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`, `name`, `roll_no`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sangharsh jogdanad', '1'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pendkar Neha Gangadas', '2'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Marda Saurabh Kantilal', '3'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sayyad Imran Hakim', '4'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pole Shubham Rajeshwar', '5'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Karhale Rajshri Gangadhar', '6'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb Shamshuddin', '7'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sharvari Vivek Jagtap', '8'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Vaidya  Eesha  Shaileshrao', '9'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Phadtare Ashikesh Sanjiv', '10'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '11'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Kalyani Balaji', '12'),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Katkar Apoorv Suresh', '13'),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '14'),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bangar Krishna Kundlikrao', '15'),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yadav Hrishikesh Arjun', '16'),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Satale Rushikesh Prakash', '17'),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Narwade Vishal Datta', '18'),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shirolkar Zoheb  Shamshuddin', '19'),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '20'),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Adsul Abhijeet Anant', '21'),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '22'),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shelke Roshni Rajaram', '23'),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Madhubala Shrikisan', '24'),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pethe Ritik Ravindra', '25'),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Malve Shravani Dattatray', '26'),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agrawal Amit Ramdeo', '27'),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sawant Sandhyarani Sharad', '28'),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Tamboli Nihal Mohammad', '29'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Master  Shivam  Sanjay  Patil', '30'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav prashant k', '31'),
(63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sanjay shinde', '33'),
(64, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'adhitya valase', '34'),
(65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ram madde', '35');

-- --------------------------------------------------------

--
-- Table structure for table `phj`
--

CREATE TABLE IF NOT EXISTS `phj` (
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phj`
--

INSERT INTO `phj` (`student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`, `name`, `roll_no`) VALUES
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Prachi Satish Tope', '1'),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'madhav mane', '2'),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Chavan Mansi Raju', '3'),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Chavan Rachna Subhash', '4'),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Tehle Rutuja Madhukar', '5'),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ashutosh Prasanna Jadhav', '6'),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yash  Mudhale', '7'),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kucheriya Swarnima Nileshkumar', '8'),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Totawar Ambika Arvind', '9'),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bhusnar Shital Sitaram', '10'),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Alane Pratiksha Kshirsagar', '11'),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pathan Sahil Jamshid', '12'),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kokare Pratik Bapurao', '13'),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shinde Vishakha Vijaykumar', '14'),
(45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav Rajani Tanaji', '15'),
(46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'More Anjali Ram', '16'),
(47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Patole Ankita Balvant', '17'),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Navale Anuja Sunil', '18'),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Raghuwanshi Anurag Mohansing', '19'),
(50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bansod Shantanu Sanjay', '20'),
(51, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Syed Rehan Syed Rasul', '21'),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Muneshwar Samiksha Durgadas', '22'),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Rathod Sanket Ashok', '23'),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Atkar Digvijay Keshav', '24'),
(55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ladda Pranita Prithwiraj', '25'),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Rutvik Rajeev Kumbhare', '26'),
(57, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Atkar Digvijay Keshav', '27'),
(58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jadhav Tushar Ganesh', '28'),
(59, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Markad Sakshi Ashokrao', '29'),
(62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ganesh Todkar', '60'),
(60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Shinde Shruti Shreekant', '30'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'jadhav pratik', '31');

-- --------------------------------------------------------

--
-- Table structure for table `practical_attendance`
--

CREATE TABLE IF NOT EXISTS `practical_attendance` (
  `student_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practical_attendance`
--

INSERT INTO `practical_attendance` (`student_id`, `date`, `subject`) VALUES
(11, '2015-07-24', 'pchem1'),
(12, '2015-07-24', 'pchem1'),
(19, '2015-07-24', 'pchem1'),
(20, '2015-07-24', 'pchem1'),
(21, '2015-07-24', 'pchem1'),
(22, '2015-07-24', 'pchem1'),
(29, '2015-07-24', 'pchem1'),
(30, '2015-07-24', 'pchem1'),
(51, '2015-07-24', 'pchem2'),
(52, '2015-07-24', 'pchem2'),
(58, '2015-07-24', 'pchem2'),
(59, '2015-07-24', 'pchem2');

-- --------------------------------------------------------

--
-- Table structure for table `progressive_skills_test`
--

CREATE TABLE IF NOT EXISTS `progressive_skills_test` (
  `student_id` int(11) NOT NULL,
  `test1pchem1` int(11) NOT NULL,
  `test1pcognosy` int(11) NOT NULL,
  `test1hap` int(11) NOT NULL,
  `test1pceutics1` int(11) NOT NULL,
  `test1hecp` int(11) NOT NULL,
  `test1bcp` int(11) NOT NULL,
  `test2pchem1` int(11) NOT NULL,
  `test2pcognosy` int(11) NOT NULL,
  `test2hap` int(11) NOT NULL,
  `test2pceutics1` int(11) NOT NULL,
  `test2hecp` int(11) NOT NULL,
  `test2bcp` int(11) NOT NULL,
  `test3pchem1` int(11) NOT NULL,
  `test3pcognosy` int(11) NOT NULL,
  `test3hap` int(11) NOT NULL,
  `test3pceutics1` int(11) NOT NULL,
  `test3hecp` int(11) NOT NULL,
  `test3bcp` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progressive_skills_test`
--

INSERT INTO `progressive_skills_test` (`student_id`, `test1pchem1`, `test1pcognosy`, `test1hap`, `test1pceutics1`, `test1hecp`, `test1bcp`, `test2pchem1`, `test2pcognosy`, `test2hap`, `test2pceutics1`, `test2hecp`, `test2bcp`, `test3pchem1`, `test3pcognosy`, `test3hap`, `test3pceutics1`, `test3hecp`, `test3bcp`, `roll_no`, `name`) VALUES
(1, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'sangharsh jogdanad'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'Pendkar Neha Gangadas'),
(3, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 'Marda Saurabh Kantilal'),
(4, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 'Sayyad Imran Hakim'),
(5, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 'Pole Shubham Rajeshwar'),
(6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 'Karhale Rajshri Gangadhar'),
(7, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 'Shirolkar Zoheb Shamshuddin'),
(8, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 'Sharvari Vivek Jagtap'),
(9, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 'Vaidya  Eesha  Shaileshrao'),
(10, 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 'Phadtare Ashikesh Sanjiv'),
(11, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11, 'Kucheriya Swarnima Nileshkumar'),
(12, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 'Bangar Kalyani Balaji'),
(13, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13, 'Katkar Apoorv Suresh'),
(14, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 'Bangar Krishna Kundlikrao'),
(15, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 'Bangar Krishna Kundlikrao'),
(16, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 'Yadav Hrishikesh Arjun'),
(17, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 'Satale Rushikesh Prakash'),
(18, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 'Narwade Vishal Datta'),
(19, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 'Shirolkar Zoheb  Shamshuddin'),
(20, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 'Kucheriya Swarnima Nileshkumar'),
(21, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 'Adsul Abhijeet Anant'),
(22, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 'Kucheriya Swarnima Nileshkumar'),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 'Shelke Roshni Rajaram'),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 'Agrawal Madhubala Shrikisan'),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 'Pethe Ritik Ravindra'),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 26, 'Malve Shravani Dattatray'),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 27, 'Agrawal Amit Ramdeo'),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 28, 'Sawant Sandhyarani Sharad'),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 29, 'Tamboli Nihal Mohammad'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 'Master  Shivam  Sanjay  Patil'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 31, 'Jadhav prashant k'),
(63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 33, 'sanjay shinde'),
(64, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 34, 'adhitya valase'),
(65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 35, 'ram madde');

-- --------------------------------------------------------

--
-- Table structure for table `progressive_skills_test2`
--

CREATE TABLE IF NOT EXISTS `progressive_skills_test2` (
  `student_id` int(11) NOT NULL,
  `test1pchem2` int(11) NOT NULL,
  `test1ptcology` int(11) NOT NULL,
  `test1phj` int(11) NOT NULL,
  `test1pceutics2` int(11) NOT NULL,
  `test1dsb` int(11) NOT NULL,
  `test1hcp` int(11) NOT NULL,
  `test2pchem2` int(11) NOT NULL,
  `test2ptcology` int(11) NOT NULL,
  `test2phj` int(11) NOT NULL,
  `test2pceutics2` int(11) NOT NULL,
  `test2dsb` int(11) NOT NULL,
  `test2hcp` int(11) NOT NULL,
  `test3pchem2` int(11) NOT NULL,
  `test3ptcology` int(11) NOT NULL,
  `test3phj` int(11) NOT NULL,
  `test3pceutics2` int(11) NOT NULL,
  `test3dsb` int(11) NOT NULL,
  `test3hcp` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progressive_skills_test2`
--

INSERT INTO `progressive_skills_test2` (`student_id`, `test1pchem2`, `test1ptcology`, `test1phj`, `test1pceutics2`, `test1dsb`, `test1hcp`, `test2pchem2`, `test2ptcology`, `test2phj`, `test2pceutics2`, `test2dsb`, `test2hcp`, `test3pchem2`, `test3ptcology`, `test3phj`, `test3pceutics2`, `test3dsb`, `test3hcp`, `roll_no`, `name`) VALUES
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Prachi Satish Tope'),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'madhav mane'),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 'Chavan Mansi Raju'),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 'Chavan Rachna Subhash'),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 'Tehle Rutuja Madhukar'),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 'Ashutosh Prasanna Jadhav'),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 'Yash  Mudhale'),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 'Kucheriya Swarnima Nileshkumar'),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 'Totawar Ambika Arvind'),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 'Bhusnar Shital Sitaram'),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11, 'Alane Pratiksha Kshirsagar'),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 'Pathan Sahil Jamshid'),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13, 'Kokare Pratik Bapurao'),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 'Shinde Vishakha Vijaykumar'),
(45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 'Jadhav Rajani Tanaji'),
(46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 'More Anjali Ram'),
(47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 'Patole Ankita Balvant'),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 'Navale Anuja Sunil'),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 'Raghuwanshi Anurag Mohansing'),
(50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 'Bansod Shantanu Sanjay'),
(51, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 'Syed Rehan Syed Rasul'),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 'Muneshwar Samiksha Durgadas'),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 'Rathod Sanket Ashok'),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 'Atkar Digvijay Keshav'),
(55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 'Ladda Pranita Prithwiraj'),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 26, 'Rutvik Rajeev Kumbhare'),
(57, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 27, 'Atkar Digvijay Keshav'),
(58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 28, 'Jadhav Tushar Ganesh'),
(59, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 29, 'Markad Sakshi Ashokrao'),
(62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 'ganesh Todkar'),
(60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 'Shinde Shruti Shreekant'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 31, 'jadhav pratik');

-- --------------------------------------------------------

--
-- Table structure for table `progressive_test`
--

CREATE TABLE IF NOT EXISTS `progressive_test` (
  `student_id` int(11) NOT NULL,
  `test1pchem1` int(11) NOT NULL,
  `test1pcognosy` int(11) NOT NULL,
  `test1hap` int(11) NOT NULL,
  `test1pceutics1` int(11) NOT NULL,
  `test1hecp` int(11) NOT NULL,
  `test1bcp` int(11) NOT NULL,
  `test2pchem1` int(11) NOT NULL,
  `test2pcognosy` int(11) NOT NULL,
  `test2hap` int(11) NOT NULL,
  `test2pceutics1` int(11) NOT NULL,
  `test2hecp` int(11) NOT NULL,
  `test2bcp` int(11) NOT NULL,
  `test3pchem1` int(11) NOT NULL,
  `test3pcognosy` int(11) NOT NULL,
  `test3hap` int(11) NOT NULL,
  `test3pceutics1` int(11) NOT NULL,
  `test3hecp` int(11) NOT NULL,
  `test3bcp` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progressive_test`
--

INSERT INTO `progressive_test` (`student_id`, `test1pchem1`, `test1pcognosy`, `test1hap`, `test1pceutics1`, `test1hecp`, `test1bcp`, `test2pchem1`, `test2pcognosy`, `test2hap`, `test2pceutics1`, `test2hecp`, `test2bcp`, `test3pchem1`, `test3pcognosy`, `test3hap`, `test3pceutics1`, `test3hecp`, `test3bcp`, `roll_no`, `name`) VALUES
(1, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'sangharsh jogdanad'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'Pendkar Neha Gangadas'),
(3, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 'Marda Saurabh Kantilal'),
(4, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 'Sayyad Imran Hakim'),
(5, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 'Pole Shubham Rajeshwar'),
(6, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 'Karhale Rajshri Gangadhar'),
(7, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 'Shirolkar Zoheb Shamshuddin'),
(8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 'Sharvari Vivek Jagtap'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 'Vaidya  Eesha  Shaileshrao'),
(10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 'Phadtare Ashikesh Sanjiv'),
(11, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11, 'Kucheriya Swarnima Nileshkumar'),
(12, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 'Bangar Kalyani Balaji'),
(13, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13, 'Katkar Apoorv Suresh'),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 'Bangar Krishna Kundlikrao'),
(15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 'Bangar Krishna Kundlikrao'),
(16, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 'Yadav Hrishikesh Arjun'),
(17, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 'Satale Rushikesh Prakash'),
(18, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 'Narwade Vishal Datta'),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 'Shirolkar Zoheb  Shamshuddin'),
(20, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 'Kucheriya Swarnima Nileshkumar'),
(21, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 'Adsul Abhijeet Anant'),
(22, 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 'Kucheriya Swarnima Nileshkumar'),
(23, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 'Shelke Roshni Rajaram'),
(24, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 'Agrawal Madhubala Shrikisan'),
(25, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 'Pethe Ritik Ravindra'),
(26, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 26, 'Malve Shravani Dattatray'),
(27, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 27, 'Agrawal Amit Ramdeo'),
(28, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 28, 'Sawant Sandhyarani Sharad'),
(29, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 29, 'Tamboli Nihal Mohammad'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 'Master  Shivam  Sanjay  Patil'),
(61, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 31, 'Jadhav prashant k'),
(63, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 33, 'sanjay shinde'),
(64, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 34, 'adhitya valase'),
(65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 35, 'ram madde');

-- --------------------------------------------------------

--
-- Table structure for table `progressive_test2`
--

CREATE TABLE IF NOT EXISTS `progressive_test2` (
  `student_id` int(11) NOT NULL,
  `test1pchem2` int(11) NOT NULL,
  `test1ptcology` int(11) NOT NULL,
  `test1phj` int(11) NOT NULL,
  `test1pceutics2` int(11) NOT NULL,
  `test1dsb` int(11) NOT NULL,
  `test1hcp` int(11) NOT NULL,
  `test2pchem2` int(11) NOT NULL,
  `test2ptcology` int(11) NOT NULL,
  `test2phj` int(11) NOT NULL,
  `test2pceutics2` int(11) NOT NULL,
  `test2dsb` int(11) NOT NULL,
  `test2hcp` int(11) NOT NULL,
  `test3pchem2` int(11) NOT NULL,
  `test3ptcology` int(11) NOT NULL,
  `test3phj` int(11) NOT NULL,
  `test3pceutics2` int(11) NOT NULL,
  `test3dsb` int(11) NOT NULL,
  `test3hcp` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progressive_test2`
--

INSERT INTO `progressive_test2` (`student_id`, `test1pchem2`, `test1ptcology`, `test1phj`, `test1pceutics2`, `test1dsb`, `test1hcp`, `test2pchem2`, `test2ptcology`, `test2phj`, `test2pceutics2`, `test2dsb`, `test2hcp`, `test3pchem2`, `test3ptcology`, `test3phj`, `test3pceutics2`, `test3dsb`, `test3hcp`, `roll_no`, `name`) VALUES
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Prachi Satish Tope'),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'madhav mane'),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 'Chavan Mansi Raju'),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 'Chavan Rachna Subhash'),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 'Tehle Rutuja Madhukar'),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 'Ashutosh Prasanna Jadhav'),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 'Yash  Mudhale'),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 'Kucheriya Swarnima Nileshkumar'),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 'Totawar Ambika Arvind'),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 'Bhusnar Shital Sitaram'),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11, 'Alane Pratiksha Kshirsagar'),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 'Pathan Sahil Jamshid'),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13, 'Kokare Pratik Bapurao'),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 'Shinde Vishakha Vijaykumar'),
(45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 'Jadhav Rajani Tanaji'),
(46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 'More Anjali Ram'),
(47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 'Patole Ankita Balvant'),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 'Navale Anuja Sunil'),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 'Raghuwanshi Anurag Mohansing'),
(50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 'Bansod Shantanu Sanjay'),
(51, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 'Syed Rehan Syed Rasul'),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 'Muneshwar Samiksha Durgadas'),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 'Rathod Sanket Ashok'),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 'Atkar Digvijay Keshav'),
(55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 'Ladda Pranita Prithwiraj'),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 26, 'Rutvik Rajeev Kumbhare'),
(57, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 27, 'Atkar Digvijay Keshav'),
(58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 28, 'Jadhav Tushar Ganesh'),
(59, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 29, 'Markad Sakshi Ashokrao'),
(62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 'ganesh Todkar'),
(60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 'Shinde Shruti Shreekant'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 31, 'jadhav pratik');

-- --------------------------------------------------------

--
-- Table structure for table `project_activity_plan`
--

CREATE TABLE IF NOT EXISTS `project_activity_plan` (
  `teacher_id` int(5) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `exp_name` varchar(255) DEFAULT NULL,
  `datep_batchA` varchar(100) DEFAULT NULL,
  `datep_batchB` varchar(100) DEFAULT NULL,
  `datep_batchC` varchar(100) DEFAULT NULL,
  `datec_batchA` varchar(100) DEFAULT NULL,
  `datec_batchB` varchar(100) DEFAULT NULL,
  `datec_batchC` varchar(100) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  KEY `teacher_id` (`teacher_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_activity_plan`
--

INSERT INTO `project_activity_plan` (`teacher_id`, `subject_id`, `exp_name`, `datep_batchA`, `datep_batchB`, `datep_batchC`, `datec_batchA`, `datec_batchB`, `datec_batchC`, `remark`) VALUES
(201, 301, 'disession', '2015-07-13', '2015-07-14', '2015-07-15', '2015-07-23', '2015-07-24', '2015-07-25', 'completed successfully'),
(201, 307, 'History', '2015-07-08', '2015-07-16', '2015-07-24', '2015-07-14', '2015-07-09', '2015-07-08', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `ptcology`
--

CREATE TABLE IF NOT EXISTS `ptcology` (
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `Experiment_1` int(5) NOT NULL,
  `Experiment_2` int(5) NOT NULL,
  `Experiment_3` int(5) NOT NULL,
  `Experiment_4` int(5) NOT NULL,
  `Experiment_5` int(5) NOT NULL,
  `Experiment_6` int(5) NOT NULL,
  `Experiment_7` int(5) NOT NULL,
  `Experiment_8` int(5) NOT NULL,
  `Experiment_9` int(5) NOT NULL,
  `Experiment_10` int(5) NOT NULL,
  `Experiment_11` int(5) NOT NULL,
  `Experiment_12` int(5) NOT NULL,
  `Experiment_13` int(5) NOT NULL,
  `Experiment_14` int(5) NOT NULL,
  `Experiment_15` int(5) NOT NULL,
  `TOTAL_MARKS` int(5) NOT NULL,
  `AVG_MARKS` int(5) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptcology`
--

INSERT INTO `ptcology` (`name`, `roll_no`, `student_id`, `Experiment_1`, `Experiment_2`, `Experiment_3`, `Experiment_4`, `Experiment_5`, `Experiment_6`, `Experiment_7`, `Experiment_8`, `Experiment_9`, `Experiment_10`, `Experiment_11`, `Experiment_12`, `Experiment_13`, `Experiment_14`, `Experiment_15`, `TOTAL_MARKS`, `AVG_MARKS`) VALUES
('Prachi Satish Tope', '1', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('madhav mane', '2', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Chavan Mansi Raju', '3', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Chavan Rachna Subhash', '4', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Tehle Rutuja Madhukar', '5', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Ashutosh Prasanna Jadhav', '6', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Yash  Mudhale', '7', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Kucheriya Swarnima Nileshkumar', '8', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Totawar Ambika Arvind', '9', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Bhusnar Shital Sitaram', '10', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Alane Pratiksha Kshirsagar', '11', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Pathan Sahil Jamshid', '12', 42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Kokare Pratik Bapurao', '13', 43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Shinde Vishakha Vijaykumar', '14', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Jadhav Rajani Tanaji', '15', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('More Anjali Ram', '16', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Patole Ankita Balvant', '17', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Navale Anuja Sunil', '18', 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Raghuwanshi Anurag Mohansing', '19', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Bansod Shantanu Sanjay', '20', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Syed Rehan Syed Rasul', '21', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Muneshwar Samiksha Durgadas', '22', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Rathod Sanket Ashok', '23', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Atkar Digvijay Keshav', '24', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Ladda Pranita Prithwiraj', '25', 55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Rutvik Rajeev Kumbhare', '26', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Atkar Digvijay Keshav', '27', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Jadhav Tushar Ganesh', '28', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Markad Sakshi Ashokrao', '29', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ganesh Todkar', '60', 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Shinde Shruti Shreekant', '30', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('jadhav pratik', '31', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `class` varchar(40) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject`, `class`) VALUES
(301, 'pchem1', '1st year'),
(302, 'hecp', '1st year'),
(303, 'bcp', '1st year'),
(304, 'hap', '1st year'),
(305, 'pcognosy', '1st year'),
(306, 'pceutics1', '1st year'),
(307, 'pchem2', '2nd year'),
(308, 'ptcology', '2nd year'),
(309, 'phj', '2nd year'),
(310, 'pceutics2', '2nd year'),
(311, 'dsb', '2nd year'),
(312, 'hcp', '2nd year');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profile`
--

CREATE TABLE IF NOT EXISTS `teacher_profile` (
  `teacher_id` int(5) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `teaching_experience` varchar(30) NOT NULL,
  `industrial_experience` varchar(30) NOT NULL,
  `information` varchar(30) NOT NULL,
  `appoinmentdate` date NOT NULL,
  `subject` varchar(30) NOT NULL,
  `training_last2year` varchar(30) NOT NULL,
  `conference` varchar(30) NOT NULL,
  `paper` varchar(30) NOT NULL,
  `reserch` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `profile_img_url` varchar(255) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_profile`
--

INSERT INTO `teacher_profile` (`teacher_id`, `teacher_name`, `designation`, `qualification`, `teaching_experience`, `industrial_experience`, `information`, `appoinmentdate`, `subject`, `training_last2year`, `conference`, `paper`, `reserch`, `username`, `password`, `profile_img_url`) VALUES
(0, 'Wagdare S S', 'Lecturer', 'B. Pharm', '10', '0', '', '2006-08-15', 'PH PC 1', '', '', '', '', 'wagdaress', 'wagdaress', ''),
(201, 'Prof. Mahesh Sharma', 'lecturer', 'B.Pharmacy', '2 years', '2 years', 'i am the best', '2015-07-01', 'BCP,HCP', '2 years', '2 ', '2', '5 ', 'mahesh', 'mahesh', 'profile_images/Koala.jpg'),
(202, 'prof. Sunil Mashal', 'lecturer', 'B.Pharmacy', '3 year', '2 years', 'i am the best', '2015-07-01', 'PCHEM1', '5', '2', '4', '3', 'sunil', 'sunil', ''),
(203, 'prof. Santosh Jadhav', 'lecturer', 'B.Pharmacy', '5 year', '4 year', 'i am the best', '2015-07-01', 'PCHEM2', '5 ', '3', '3', '2', 'santosh', 'santosh', ''),
(204, 'Prof. Pramod Kapse ', 'lecturer', 'B.Pharmacy', '4 year ', '2 years', 'i am the best', '2015-07-01', 'PTCOLOGY', '3', '3', '1', '2', 'pramod', 'pramod', ''),
(205, 'Prof. Rohit Pulkurte', 'lecturer', 'B.Pharmacy', '3 year', '2 years', 'i am the best', '2015-07-01', 'DSB,HCP,PCEUTIES', '3', '3', '3', '3', 'rohit', 'rohit', ''),
(206, 'Prof. Rahul Gonshette', 'HOD', 'B.Pharmacy', '4 year ', '4 year', 'i am the best', '2015-07-01', 'HECP,BCP,HAP,PHJ', '3', '4', '4', '5', 'rahul', 'rahul', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE IF NOT EXISTS `teacher_subject` (
  `teacher_id` int(5) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `class` varchar(255) NOT NULL,
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`teacher_id`, `subject`, `class`) VALUES
(201, 'pchem1', '1st year'),
(201, 'pchem2', '2nd year'),
(202, 'hecp', '1st year'),
(202, 'ptcology', '2nd year'),
(203, 'bcp', '1st year'),
(203, 'phj', '2nd year'),
(204, 'hap', '1st year'),
(204, 'pceutics2', '2nd year'),
(205, 'pcognosy', '1st year'),
(205, 'dsb', '2nd year'),
(206, 'pceutics1', '1st year'),
(206, 'hcp', '2nd year'),
(0, 'pchem1', '1st year');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_time_table1`
--

CREATE TABLE IF NOT EXISTS `teacher_time_table1` (
  `teacher_id` int(5) NOT NULL,
  `days` varchar(30) NOT NULL,
  `theory` varchar(20) NOT NULL,
  `practical` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_time_table1`
--

INSERT INTO `teacher_time_table1` (`teacher_id`, `days`, `theory`, `practical`, `year`) VALUES
(201, 'Monday', 'pchem1(TH)', '-', '1st year'),
(201, 'Tuesday', '-', '-', '1st year'),
(201, 'Wednesday', 'pchem1(TH)', 'pchem1(PR)', '1st year'),
(201, 'Thursday', '-', 'pchem2(PR)', '2nd year'),
(201, 'Friday', 'pchem1(TH)', '--', '1st year'),
(201, 'Saturday', 'pchem2(TH)', 'pchem2(PR)', '2nd year');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_plan`
--

CREATE TABLE IF NOT EXISTS `teaching_plan` (
  `teacher_id` int(5) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `chapterno` varchar(40) NOT NULL,
  `title` varchar(100) NOT NULL,
  `allocated_hrs` varchar(40) NOT NULL,
  `date_of_commencing` varchar(40) NOT NULL,
  `date_of_completion` varchar(40) NOT NULL,
  `teaching_method` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL,
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaching_plan`
--

INSERT INTO `teaching_plan` (`teacher_id`, `subject_id`, `chapterno`, `title`, `allocated_hrs`, `date_of_commencing`, `date_of_completion`, `teaching_method`, `remark`) VALUES
(201, 301, '3', 'history of pharmcys', '6', '2015-07-07', '2015-07-10', 'read', 'best'),
(201, 301, '3', 'history of pharmcys', '6', '2015-07-07', '2015-07-10', 'read', 'best'),
(201, 301, '1', 'history of B.pharmcy', '8', '2015-07-15', '2015-07-24', 'oral', 'good'),
(0, 308, '12', '45564565+6', '2', '2015-07-02', '2015-07-03', 'fghfhgf', 'trdfcvytsethc');

-- --------------------------------------------------------

--
-- Table structure for table `tests123`
--

CREATE TABLE IF NOT EXISTS `tests123` (
  `student_id` int(11) NOT NULL,
  `test1pchem1` int(11) NOT NULL,
  `test1pcognosy` int(11) NOT NULL,
  `test1hap` int(11) NOT NULL,
  `test1pceutics1` int(11) NOT NULL,
  `test1hecp` int(11) NOT NULL,
  `test1bcp` int(11) NOT NULL,
  `test2pchem1` int(11) NOT NULL,
  `test2pcognosy` int(11) NOT NULL,
  `test2hap` int(11) NOT NULL,
  `test2pceutics1` int(11) NOT NULL,
  `test2hecp` int(11) NOT NULL,
  `test2bcp` int(11) NOT NULL,
  `test3pchem1` int(11) NOT NULL,
  `test3pcognosy` int(11) NOT NULL,
  `test3hap` int(11) NOT NULL,
  `test3pceutics1` int(11) NOT NULL,
  `test3hecp` int(11) NOT NULL,
  `test3bcp` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests123`
--

INSERT INTO `tests123` (`student_id`, `test1pchem1`, `test1pcognosy`, `test1hap`, `test1pceutics1`, `test1hecp`, `test1bcp`, `test2pchem1`, `test2pcognosy`, `test2hap`, `test2pceutics1`, `test2hecp`, `test2bcp`, `test3pchem1`, `test3pcognosy`, `test3hap`, `test3pceutics1`, `test3hecp`, `test3bcp`, `roll_no`, `name`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'sangharsh jogdanad'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'Pendkar Neha Gangadas'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 'Marda Saurabh Kantilal'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 'Sayyad Imran Hakim'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 'Pole Shubham Rajeshwar'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 'Karhale Rajshri Gangadhar'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 'Shirolkar Zoheb Shamshuddin'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 'Sharvari Vivek Jagtap'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 'Vaidya  Eesha  Shaileshrao'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 'Phadtare Ashikesh Sanjiv'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11, 'Kucheriya Swarnima Nileshkumar'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 'Bangar Kalyani Balaji'),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13, 'Katkar Apoorv Suresh'),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 'Bangar Krishna Kundlikrao'),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 'Bangar Krishna Kundlikrao'),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 'Yadav Hrishikesh Arjun'),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 'Satale Rushikesh Prakash'),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 'Narwade Vishal Datta'),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 'Shirolkar Zoheb  Shamshuddin'),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 'Kucheriya Swarnima Nileshkumar'),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 'Adsul Abhijeet Anant'),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 'Kucheriya Swarnima Nileshkumar'),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 'Shelke Roshni Rajaram'),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 'Agrawal Madhubala Shrikisan'),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 'Pethe Ritik Ravindra'),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 26, 'Malve Shravani Dattatray'),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 27, 'Agrawal Amit Ramdeo'),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 28, 'Sawant Sandhyarani Sharad'),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 29, 'Tamboli Nihal Mohammad'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 'Master  Shivam  Sanjay  Patil'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 31, 'Jadhav prashant k'),
(63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 33, 'sanjay shinde'),
(64, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 34, 'adhitya valase'),
(65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 35, 'ram madde');

-- --------------------------------------------------------

--
-- Table structure for table `tests1234`
--

CREATE TABLE IF NOT EXISTS `tests1234` (
  `student_id` int(11) NOT NULL,
  `test1pchem2` int(11) NOT NULL,
  `test1ptcology` int(11) NOT NULL,
  `test1phj` int(11) NOT NULL,
  `test1pceutics2` int(11) NOT NULL,
  `test1dsb` int(11) NOT NULL,
  `test1hcp` int(11) NOT NULL,
  `test2pchem2` int(11) NOT NULL,
  `test2ptcology` int(11) NOT NULL,
  `test2phj` int(11) NOT NULL,
  `test2pceutics2` int(11) NOT NULL,
  `test2dsb` int(11) NOT NULL,
  `test2hcp` int(11) NOT NULL,
  `test3pchem2` int(11) NOT NULL,
  `test3ptcology` int(11) NOT NULL,
  `test3phj` int(11) NOT NULL,
  `test3pceutics2` int(11) NOT NULL,
  `test3dsb` int(11) NOT NULL,
  `test3hcp` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests1234`
--

INSERT INTO `tests1234` (`student_id`, `test1pchem2`, `test1ptcology`, `test1phj`, `test1pceutics2`, `test1dsb`, `test1hcp`, `test2pchem2`, `test2ptcology`, `test2phj`, `test2pceutics2`, `test2dsb`, `test2hcp`, `test3pchem2`, `test3ptcology`, `test3phj`, `test3pceutics2`, `test3dsb`, `test3hcp`, `roll_no`, `name`) VALUES
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Prachi Satish Tope'),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'madhav mane'),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 'Chavan Mansi Raju'),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 'Chavan Rachna Subhash'),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 'Tehle Rutuja Madhukar'),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 'Ashutosh Prasanna Jadhav'),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 'Yash  Mudhale'),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 'Kucheriya Swarnima Nileshkumar'),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 'Totawar Ambika Arvind'),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 'Bhusnar Shital Sitaram'),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11, 'Alane Pratiksha Kshirsagar'),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 'Pathan Sahil Jamshid'),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13, 'Kokare Pratik Bapurao'),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 'Shinde Vishakha Vijaykumar'),
(45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 'Jadhav Rajani Tanaji'),
(46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 'More Anjali Ram'),
(47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 'Patole Ankita Balvant'),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 'Navale Anuja Sunil'),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 'Raghuwanshi Anurag Mohansing'),
(50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 'Bansod Shantanu Sanjay'),
(51, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 'Syed Rehan Syed Rasul'),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 'Muneshwar Samiksha Durgadas'),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 'Rathod Sanket Ashok'),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 'Atkar Digvijay Keshav'),
(55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 'Ladda Pranita Prithwiraj'),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 26, 'Rutvik Rajeev Kumbhare'),
(57, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 27, 'Atkar Digvijay Keshav'),
(58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 28, 'Jadhav Tushar Ganesh'),
(59, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 29, 'Markad Sakshi Ashokrao'),
(62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 'ganesh Todkar'),
(60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 'Shinde Shruti Shreekant'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 31, 'jadhav pratik');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dsb`
--
ALTER TABLE `dsb`
  ADD CONSTRAINT `dsb_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `hcp`
--
ALTER TABLE `hcp`
  ADD CONSTRAINT `hcp_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `pceutics2`
--
ALTER TABLE `pceutics2`
  ADD CONSTRAINT `pceutics2_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `pchem2`
--
ALTER TABLE `pchem2`
  ADD CONSTRAINT `pchem2_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `phj`
--
ALTER TABLE `phj`
  ADD CONSTRAINT `phj_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `progressive_skills_test2`
--
ALTER TABLE `progressive_skills_test2`
  ADD CONSTRAINT `progressive_skills_test2_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `progressive_test2`
--
ALTER TABLE `progressive_test2`
  ADD CONSTRAINT `progressive_test2_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `project_activity_plan`
--
ALTER TABLE `project_activity_plan`
  ADD CONSTRAINT `project_activity_plan_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_profile` (`teacher_id`),
  ADD CONSTRAINT `project_activity_plan_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`);

--
-- Constraints for table `ptcology`
--
ALTER TABLE `ptcology`
  ADD CONSTRAINT `ptcology_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD CONSTRAINT `teacher_subject_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_profile` (`teacher_id`);

--
-- Constraints for table `teacher_time_table1`
--
ALTER TABLE `teacher_time_table1`
  ADD CONSTRAINT `teacher_time_table1_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_profile` (`teacher_id`);

--
-- Constraints for table `teaching_plan`
--
ALTER TABLE `teaching_plan`
  ADD CONSTRAINT `teaching_plan_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`);

--
-- Constraints for table `tests1234`
--
ALTER TABLE `tests1234`
  ADD CONSTRAINT `tests1234_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
