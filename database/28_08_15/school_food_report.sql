-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2015 at 11:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_food_report`
--

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
-- Indexes for table `rice_report`
--
ALTER TABLE `rice_report`
 ADD PRIMARY KEY (`date`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
