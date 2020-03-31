-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2019 at 11:30 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal5`
--

DROP TABLE IF EXISTS `animal5`;
CREATE TABLE IF NOT EXISTS `animal5` (
  `Aid` varchar(15) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Cage_Number` int(11) NOT NULL,
  `Feed_Time` varchar(30) NOT NULL,
  `AKid` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Aid`),
  KEY `AKid` (`AKid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal5`
--

INSERT INTO `animal5` (`Aid`, `Gender`, `Cage_Number`, `Feed_Time`, `AKid`) VALUES
('1', 'male', 1, '2:00-2:30pm', '21'),
('2', 'female', 2, '1:00-1:30pm', '22');

-- --------------------------------------------------------

--
-- Table structure for table `animal_detail`
--

DROP TABLE IF EXISTS `animal_detail`;
CREATE TABLE IF NOT EXISTS `animal_detail` (
  `ADid` varchar(15) NOT NULL,
  `Height` varchar(10) DEFAULT NULL,
  `Weight` varchar(10) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Aid` varchar(15) NOT NULL,
  PRIMARY KEY (`ADid`),
  KEY `fk_ad_aid` (`Aid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal_detail`
--

INSERT INTO `animal_detail` (`ADid`, `Height`, `Weight`, `Age`, `Aid`) VALUES
('51', '4 feet', '100 kg', 33, '1'),
('52', '5 feet', '120 kg', 43, '2');

-- --------------------------------------------------------

--
-- Table structure for table `animal_guide`
--

DROP TABLE IF EXISTS `animal_guide`;
CREATE TABLE IF NOT EXISTS `animal_guide` (
  `AGid` varchar(15) NOT NULL,
  `Zoo_Introduction` text NOT NULL,
  `Updated_Year` int(11) DEFAULT NULL,
  PRIMARY KEY (`AGid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `animal_kind`
--

DROP TABLE IF EXISTS `animal_kind`;
CREATE TABLE IF NOT EXISTS `animal_kind` (
  `AKid` varchar(15) NOT NULL,
  `AName` varchar(30) NOT NULL,
  `Physical_Characteristics` longtext NOT NULL,
  `Zoo_Region` varchar(50) NOT NULL,
  `Diet` varchar(30) NOT NULL,
  `Population_Status` varchar(30) NOT NULL,
  PRIMARY KEY (`AKid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal_kind`
--

INSERT INTO `animal_kind` (`AKid`, `AName`, `Physical_Characteristics`, `Zoo_Region`, `Diet`, `Population_Status`) VALUES
('21', 'sheru', 'Companies can analyse several batches of production and use broader data sets to alter the operating conditions and meet the quality specifications. This saves cost in avoiding off spec material. Further quality assurance can also help build better customer relationship', 'pune', 'non-veg', '5');

-- --------------------------------------------------------

--
-- Table structure for table `contains`
--

DROP TABLE IF EXISTS `contains`;
CREATE TABLE IF NOT EXISTS `contains` (
  `AKid` varchar(15) NOT NULL,
  `AGid` varchar(15) NOT NULL,
  PRIMARY KEY (`AKid`,`AGid`),
  KEY `fk2_contains_agid` (`AGid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Cid` varchar(15) NOT NULL,
  `CFname` varchar(30) NOT NULL,
  `CLname` varchar(30) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Credit_Card_Info` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cid`, `CFname`, `CLname`, `Email`, `Address`, `Credit_Card_Info`) VALUES
('1', 'amal', 'sutone', 'amal@gmail.com', 'nagpur', '12233445533'),
('2', 'shubham', 'maratha', 'sm@gmail.com', 'bhilwara', '12323456765434'),
('3', 'babu', 'rao', 'bau@gmail.com', 'mumbai', '12345678987\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `Eid` int(11) NOT NULL AUTO_INCREMENT,
  `EFname` varchar(30) NOT NULL,
  `ELname` varchar(30) NOT NULL,
  `Phone_No` varchar(30) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Zid` varchar(15) NOT NULL,
  PRIMARY KEY (`Eid`),
  KEY `Zid` (`Zid`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Eid`, `EFname`, `ELname`, `Phone_No`, `Salary`, `Zid`) VALUES
(100, 'adarsh', 'parabhat', '987612344', 1000, '200'),
(101, 'prajoyat', 'sharma', '987613344', 2000, '201'),
(103, 'jacksx', 'chaudhary', '0712696969', 2400, '202');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `Zid` int(11) NOT NULL,
  `AGid` int(11) NOT NULL,
  KEY `Zid` (`Zid`),
  KEY `AGid` (`AGid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `goes_to`
--

DROP TABLE IF EXISTS `goes_to`;
CREATE TABLE IF NOT EXISTS `goes_to` (
  `Cid` varchar(15) NOT NULL,
  `Zid` varchar(15) NOT NULL,
  PRIMARY KEY (`Cid`,`Zid`),
  KEY `fk2_gt_zid` (`Zid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `looks_after`
--

DROP TABLE IF EXISTS `looks_after`;
CREATE TABLE IF NOT EXISTS `looks_after` (
  `Eid` varchar(15) NOT NULL,
  `Aid` varchar(15) NOT NULL,
  PRIMARY KEY (`Eid`,`Aid`),
  KEY `fk2_looka_aid` (`Aid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

DROP TABLE IF EXISTS `manages`;
CREATE TABLE IF NOT EXISTS `manages` (
  `Eid` varchar(15) NOT NULL,
  `Tid` varchar(15) NOT NULL,
  PRIMARY KEY (`Eid`,`Tid`),
  KEY `Tid` (`Tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `Tid` varchar(15) NOT NULL,
  `Price` int(11) NOT NULL,
  `Cid` varchar(15) NOT NULL,
  PRIMARY KEY (`Tid`),
  KEY `fk_ticket_cid` (`Cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zoo`
--

DROP TABLE IF EXISTS `zoo`;
CREATE TABLE IF NOT EXISTS `zoo` (
  `Zid` int(11) NOT NULL AUTO_INCREMENT,
  `ZName` varchar(50) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Hours` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `AGid` varchar(15) NOT NULL,
  PRIMARY KEY (`Zid`),
  KEY `fk_zoo_AGid` (`AGid`),
  KEY `Zid` (`Zid`),
  KEY `Zid_2` (`Zid`)
) ENGINE=MyISAM AUTO_INCREMENT=1013 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zoo`
--

INSERT INTO `zoo` (`Zid`, `ZName`, `Location`, `Hours`, `Contact`, `AGid`) VALUES
(1001, 'RG', 'Goa', '12pm-10pm', '8787878789', '103'),
(1002, 'ANNA', 'CHENNAI', '9:00 am - 5:00 pm', '9898989238', '101'),
(1007, 'APPA', 'PUNE', '7am-4pm', '8787878799', '201'),
(1012, '12', 'xyz', '10', '7272727272', '111');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
