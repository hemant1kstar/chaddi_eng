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
-- Database: `school_project_dynamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `2014 cash account resister secondary school`
--

CREATE TABLE IF NOT EXISTS `2014 cash account resister secondary school` (
`id` int(5) NOT NULL,
  `Debit` varchar(255) DEFAULT NULL,
  `account no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2014 cash account resister secondary school`
--

INSERT INTO `2014 cash account resister secondary school` (`id`, `Debit`, `account no`) VALUES
(1, '23333', '1333333'),
(2, 'fghgfh', '45646');

-- --------------------------------------------------------

--
-- Table structure for table `bookdead register`
--

CREATE TABLE IF NOT EXISTS `bookdead register` (
`id` int(5) NOT NULL,
  `Name Of Book` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Author's Name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Price` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Reason Of dead` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Sign of Labrarian` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Sign of Headmaster` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Remark` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `gfhg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdead register`
--

INSERT INTO `bookdead register` (`id`, `Name Of Book`, `Author's Name`, `Price`, `Reason Of dead`, `Sign of Labrarian`, `Sign of Headmaster`, `Date`, `Remark`, `gfhg`) VALUES
(1, 'ffff', 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'dsfd', 'dfd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cash book`
--

CREATE TABLE IF NOT EXISTS `cash book` (
`id` int(5) NOT NULL,
  `Date` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Particulars` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Amount` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Total` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash book`
--

INSERT INTO `cash book` (`id`, `Date`, `Particulars`, `Amount`, `Total`) VALUES
(1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `deadstock assets register`
--

CREATE TABLE IF NOT EXISTS `deadstock assets register` (
`id` int(5) NOT NULL,
  `Sr. No.` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Name Of Material` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date Of Purchase` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Price` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Name Of Authority` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date Of Solding` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Reason Of Solding` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Solding Price` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Sign Of Authority` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Remark` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dead stock register`
--

CREATE TABLE IF NOT EXISTS `dead stock register` (
`id` int(5) NOT NULL,
  `Sr. No.` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Name Of Material` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date Of Purchase` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Price` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Bill Number` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Area Of Usage` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date Of Disposal` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Reason` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Way Of Disposel` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Disposal Count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `If Sold Then Price` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Gov. Credited Amount Date` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Signature` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `fhgfh` varchar(255) DEFAULT NULL,
  `fghgfhgfhfg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `furniture and other material stock register`
--

CREATE TABLE IF NOT EXISTS `furniture and other material stock register` (
`id` int(5) NOT NULL,
  `Sr. No.` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Furniture And Other Material  Type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Previous Stock Count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Previous Stock Amount` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `New Bill No. with Date` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `New Stock Count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `New Stock Amount` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Signature` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ledger account`
--

CREATE TABLE IF NOT EXISTS `ledger account` (
`id` int(5) NOT NULL,
  `Date` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Particulars` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Dr. Amount` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Cr. Amount` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Dr./Cr.` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Bal.Amount` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Account Of` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `rr` varchar(255) DEFAULT NULL,
  `ff` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `uuu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school feeding program`
--

CREATE TABLE IF NOT EXISTS `school feeding program` (
`id` int(5) NOT NULL,
  `Date` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Todays Menu` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Name of Teaster` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Remark` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Sign` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ff` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school feeding program`
--

INSERT INTO `school feeding program` (`id`, `Date`, `Todays Menu`, `Name of Teaster`, `Remark`, `Sign`, `ff`) VALUES
(1, '22-7-2015', 'khichadi', 'rohan', 'good', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `school feeding program daily accounting register part 1(rice)`
--

CREATE TABLE IF NOT EXISTS `school feeding program daily accounting register part 1(rice)` (
`id` int(5) NOT NULL,
  `Sr. No.` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Previous Month's Stock` varchar(255) DEFAULT NULL,
  `Current Reciving` varchar(255) DEFAULT NULL,
  `Total Rice` varchar(255) DEFAULT NULL,
  `beneciary count` varchar(255) DEFAULT NULL,
  `cooked rice` varchar(255) DEFAULT NULL,
  `month end stock` varchar(255) DEFAULT NULL,
  `sign` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school feeding program daily accounting register part 1(rice)`
--

INSERT INTO `school feeding program daily accounting register part 1(rice)` (`id`, `Sr. No.`, `Date`, `Count`, `Previous Month's Stock`, `Current Reciving`, `Total Rice`, `beneciary count`, `cooked rice`, `month end stock`, `sign`) VALUES
(2, '1', '22-7-2015', '456', '45kg', '100kg', '178kg', '789', '145 kg', '475', '---');

-- --------------------------------------------------------

--
-- Table structure for table `science stock & dispose register`
--

CREATE TABLE IF NOT EXISTS `science stock & dispose register` (
`id` int(5) NOT NULL,
  `Sr.No.` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date Of Purachase` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Vr. No.` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Particulars` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Number Of Purchase` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Amount` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Signature` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `To Whom Issued` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Which Practicle` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `disposed Count` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Stock In Balence` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Recognized Officer Sign` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `science stock and dispose register`
--

CREATE TABLE IF NOT EXISTS `science stock and dispose register` (
`id` int(5) NOT NULL,
  `Sr. No.` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date Of Purchase` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Vr. No.` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Particulars` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Number Of Purchase` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Amount` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Signature` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `To Whom Issued` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Which Practicle` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Issued number` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Stock in balnce` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Recognized Officer Sign` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student library track register`
--

CREATE TABLE IF NOT EXISTS `student library track register` (
`id` int(5) NOT NULL,
  `Sr. No.` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Standred` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Name Of Student` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Book Number` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Name Of Book` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Signature of Student` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Remark` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher library  book register`
--

CREATE TABLE IF NOT EXISTS `teacher library  book register` (
`id` int(5) NOT NULL,
  `Sr. No.` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Book Number` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Name Of Teacher` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Author` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Name Of Book` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Signature` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Remark` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dfhfg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE IF NOT EXISTS `test1` (
`id` int(5) NOT NULL,
  `rollno` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `marks` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2014 cash account resister secondary school`
--
ALTER TABLE `2014 cash account resister secondary school`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookdead register`
--
ALTER TABLE `bookdead register`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash book`
--
ALTER TABLE `cash book`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deadstock assets register`
--
ALTER TABLE `deadstock assets register`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dead stock register`
--
ALTER TABLE `dead stock register`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture and other material stock register`
--
ALTER TABLE `furniture and other material stock register`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledger account`
--
ALTER TABLE `ledger account`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school feeding program`
--
ALTER TABLE `school feeding program`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school feeding program daily accounting register part 1(rice)`
--
ALTER TABLE `school feeding program daily accounting register part 1(rice)`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `science stock & dispose register`
--
ALTER TABLE `science stock & dispose register`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `science stock and dispose register`
--
ALTER TABLE `science stock and dispose register`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student library track register`
--
ALTER TABLE `student library track register`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher library  book register`
--
ALTER TABLE `teacher library  book register`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test1`
--
ALTER TABLE `test1`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2014 cash account resister secondary school`
--
ALTER TABLE `2014 cash account resister secondary school`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bookdead register`
--
ALTER TABLE `bookdead register`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cash book`
--
ALTER TABLE `cash book`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deadstock assets register`
--
ALTER TABLE `deadstock assets register`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dead stock register`
--
ALTER TABLE `dead stock register`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `furniture and other material stock register`
--
ALTER TABLE `furniture and other material stock register`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ledger account`
--
ALTER TABLE `ledger account`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school feeding program`
--
ALTER TABLE `school feeding program`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school feeding program daily accounting register part 1(rice)`
--
ALTER TABLE `school feeding program daily accounting register part 1(rice)`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `science stock & dispose register`
--
ALTER TABLE `science stock & dispose register`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `science stock and dispose register`
--
ALTER TABLE `science stock and dispose register`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student library track register`
--
ALTER TABLE `student library track register`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher library  book register`
--
ALTER TABLE `teacher library  book register`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test1`
--
ALTER TABLE `test1`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
