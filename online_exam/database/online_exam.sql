-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2015 at 03:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_admin`
--

CREATE TABLE IF NOT EXISTS `mst_admin` (
`id` int(11) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_admin`
--

INSERT INTO `mst_admin` (`id`, `loginid`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE IF NOT EXISTS `mst_question` (
`que_id` int(11) NOT NULL,
  `test_id` int(11) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `answer` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(41, 12, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1),
(42, 12, 'website for getmdl', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3),
(43, 13, 'HTML stands for', 'hypertext markup language', 'hypertext  model language', 'all of above', 'none of above', 1),
(44, 13, 'html used for', 'create  dynamic web application', 'create static web pages', 'create desktop application', 'create offline application', 2),
(45, 15, 'html stands for', 'hypertext markup language', 'hypertext  model language', 'all of above', 'none of above', 1),
(46, 15, 'used for', 'create  dynamic web application', 'create static web pages', 'create desktop application', 'create offline application', 2),
(47, 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1),
(48, 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3),
(49, 16, 'php stands for', 'php', 'php', 'php', 'hypertext preprocessor', 4),
(50, 16, 'java', 'ff', 'java', 'f', 'ff', 2),
(51, 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1),
(52, 18, 'demo', 'demo', 'gg', 'jhk', 'j', 1),
(53, 18, 'demo2', 'demo', 'demo2', 'jhk', 'j', 2),
(54, 19, 'ghj', 'ghj', 'h', 'gh', 'h', 1),
(55, 17, 'what is html', 'markup language', 'html', 'vfd', 'ff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE IF NOT EXISTS `mst_result` (
  `login` varchar(20) DEFAULT NULL,
  `subject_id` varchar(100) NOT NULL,
  `test_id` int(11) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`login`, `subject_id`, `test_id`, `test_date`, `score`) VALUES
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 3),
('gg', '8', 14, '2015-09-28', 0),
('gg', '17', 19, '2015-09-28', 1),
('gg', '8', 14, '2015-09-28', 3),
('gg', '8', 14, '2015-09-28', 1),
('gg', '8', 14, '2015-09-28', 0),
('gg', '9', 15, '2015-09-28', 2),
('gg', '10', 16, '2015-09-28', 2),
('gg', '', 0, '2015-09-28', 0),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 2),
('gg', '', 0, '2015-09-28', 0),
('gg', '8', 14, '2015-09-28', 2),
('gg', '8', 14, '2015-09-28', 3),
('gg', '11', 17, '2015-09-29', 1),
('gg', '8', 14, '2015-10-05', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE IF NOT EXISTS `mst_subject` (
`sub_id` int(5) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`) VALUES
(8, 'getmdl'),
(9, 'HTML'),
(10, 'php'),
(11, 'demo4');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE IF NOT EXISTS `mst_test` (
`test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(14, 8, 'Basic mdl', '2'),
(15, 9, 'Basic html', '2'),
(16, 10, 'Basic php', '2'),
(17, 11, 'test1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE IF NOT EXISTS `mst_user` (
`user_id` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(15, '1234', '1234', 'rr', 'rr', 'rr', 55, 'as@gmail.com'),
(16, 'root', 'root', 'tt', 'tt', 'tt', 77, 'tt@gmail.com'),
(17, 'gg', 'gg', 'gg', 'gg', 'gg', 88, 'gg@gmail.com'),
(18, '88', '88', '88', '88', '88', 88, 'fg@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE IF NOT EXISTS `mst_useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `op1` varchar(255) DEFAULT NULL,
  `op2` varchar(255) DEFAULT NULL,
  `op3` varchar(255) DEFAULT NULL,
  `op4` varchar(255) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `student_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer`
--

INSERT INTO `mst_useranswer` (`sess_id`, `test_id`, `que_des`, `op1`, `op2`, `op3`, `op4`, `true_ans`, `student_ans`) VALUES
('gadfmrt577e2am248bdru1c554', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('gadfmrt577e2am248bdru1c554', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('gadfmrt577e2am248bdru1c554', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1),
('b6k48njua7vnnk3l47je2k0t44', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('b6k48njua7vnnk3l47je2k0t44', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('b6k48njua7vnnk3l47je2k0t44', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 2),
('ac5lq0q6hq84jnnb3ipe8mupp4', 16, 'php stands for', 'php', 'php', 'php', 'hypertext preprocessor', 4, 4),
('ac5lq0q6hq84jnnb3ipe8mupp4', 16, 'java', 'ff', 'java', 'f', 'ff', 2, 2),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1),
('4so5djc82k18f9vs6ud8sphua6', 17, 'what is html', 'markup language', 'html', 'vfd', 'ff', 1, 1),
('769k2e2008j7ad8s031bshqqd7', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 2),
('769k2e2008j7ad8s031bshqqd7', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('769k2e2008j7ad8s031bshqqd7', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer1`
--

CREATE TABLE IF NOT EXISTS `mst_useranswer1` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `op1` varchar(255) DEFAULT NULL,
  `op2` varchar(255) DEFAULT NULL,
  `op3` varchar(255) DEFAULT NULL,
  `op4` varchar(255) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `student_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer1`
--

INSERT INTO `mst_useranswer1` (`sess_id`, `test_id`, `que_des`, `op1`, `op2`, `op3`, `op4`, `true_ans`, `student_ans`) VALUES
('rr340vqol2ujtq087vfv7f82j4', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('rr340vqol2ujtq087vfv7f82j4', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 2),
('rr340vqol2ujtq087vfv7f82j4', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1),
('rr340vqol2ujtq087vfv7f82j4', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('rr340vqol2ujtq087vfv7f82j4', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('rr340vqol2ujtq087vfv7f82j4', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1),
('gadfmrt577e2am248bdru1c554', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('gadfmrt577e2am248bdru1c554', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('gadfmrt577e2am248bdru1c554', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1),
('b6k48njua7vnnk3l47je2k0t44', 18, 'demo', 'demo', 'gg', 'jhk', 'j', 1, 1),
('b6k48njua7vnnk3l47je2k0t44', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('b6k48njua7vnnk3l47je2k0t44', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('b6k48njua7vnnk3l47je2k0t44', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('b6k48njua7vnnk3l47je2k0t44', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 2),
('b6k48njua7vnnk3l47je2k0t44', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('b6k48njua7vnnk3l47je2k0t44', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 2),
('b6k48njua7vnnk3l47je2k0t44', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('b6k48njua7vnnk3l47je2k0t44', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('b6k48njua7vnnk3l47je2k0t44', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 2),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 2),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 1),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 2),
('ac5lq0q6hq84jnnb3ipe8mupp4', 19, 'ghj', 'ghj', 'h', 'gh', 'h', 1, 1),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 2),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 2),
('ac5lq0q6hq84jnnb3ipe8mupp4', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1),
('ac5lq0q6hq84jnnb3ipe8mupp4', 15, 'html stands for', 'hypertext markup language', 'hypertext  model language', 'all of above', 'none of above', 1, 1),
('ac5lq0q6hq84jnnb3ipe8mupp4', 15, 'used for', 'create  dynamic web application', 'create static web pages', 'create desktop application', 'create offline application', 2, 2),
('ac5lq0q6hq84jnnb3ipe8mupp4', 16, 'php stands for', 'php', 'php', 'php', 'hypertext preprocessor', 4, 4),
('ac5lq0q6hq84jnnb3ipe8mupp4', 16, 'java', 'ff', 'java', 'f', 'ff', 2, 2),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 2),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 1),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 1),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('i61mrepblvsulf0qnl3hnvs6b1', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1),
('4so5djc82k18f9vs6ud8sphua6', 17, 'what is html', 'markup language', 'html', 'vfd', 'ff', 1, 1),
('769k2e2008j7ad8s031bshqqd7', 14, 'mdl stands for', 'material design lite', 'model view layout', 'model view controller', 'material design', 1, 2),
('769k2e2008j7ad8s031bshqqd7', 14, 'website', 'google.com', 'w3c.com', 'getmdl.io', 'mdl.com', 3, 3),
('769k2e2008j7ad8s031bshqqd7', 14, 'mdl', 'mdl', 'mmmmm', 'hg', 'hjgh', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_admin`
--
ALTER TABLE `mst_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_question`
--
ALTER TABLE `mst_question`
 ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `mst_subject`
--
ALTER TABLE `mst_subject`
 ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `mst_test`
--
ALTER TABLE `mst_test`
 ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_admin`
--
ALTER TABLE `mst_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mst_question`
--
ALTER TABLE `mst_question`
MODIFY `que_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `mst_subject`
--
ALTER TABLE `mst_subject`
MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mst_test`
--
ALTER TABLE `mst_test`
MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
