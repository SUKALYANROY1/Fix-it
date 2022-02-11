-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2021 at 10:49 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobileshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `aid` INT(11) NOT NULL AUTO_INCREMENT,
  `sid` INT(11) NOT NULL,
  `oid` INT(11) NOT NULL,
  `date` VARCHAR(67) NOT NULL,
  `status` VARCHAR(78) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=INNODB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

--
-- Dumping data for table `attendence`
--


-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `billid` INT(11) NOT NULL AUTO_INCREMENT,
  `sid` INT(11) NOT NULL,
  `pid` INT(11) NOT NULL,
  `price` INT(11) NOT NULL,
  `quantity` INT(11) NOT NULL,
  `bookingid` INT(11) NOT NULL,
  PRIMARY KEY (`billid`)
) ENGINE=INNODB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

--
-- Dumping data for table `bill`
--


-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bid` INT(11) NOT NULL AUTO_INCREMENT,
  `sid` INT(11) NOT NULL,
  `oid` INT(11) NOT NULL,
  `uname` VARCHAR(50) NOT NULL,
  `address` VARCHAR(50) NOT NULL,
  `phno` VARCHAR(50) NOT NULL,
  `complaint` VARCHAR(50) NOT NULL,
  `modeldetails` VARCHAR(50) NOT NULL,
  `rdate` VARCHAR(50) NOT NULL,
  `status` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=INNODB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

--
-- Dumping data for table `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `usertype` VARCHAR(50) NOT NULL,
  `status` VARCHAR(50) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`, `status`) VALUES
('admin@gmail.com', 'admin', 'admin', 'approved'),
('jomatjolly@gmail.com', 'Jomat', 'owner', 'approved'),
('dalinmathew@gmail.com', 'dalin', 'staff', 'approved'),
('akshay@gmail.com', 'akshay', 'staff', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `oid` INT(11) NOT NULL AUTO_INCREMENT,
  `oname` VARCHAR(50) NOT NULL,
  `address` VARCHAR(50) NOT NULL,
  `district` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `phno` VARCHAR(50) NOT NULL,
  `licenceno` VARCHAR(50) NOT NULL,
  `status` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=INNODB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `owner`
--
INSERT INTO `owner` (`oid`, `oname`, `address`, `district`, `email`, `phno`, `licenceno`, `status`) VALUES
(1, 'Jomat', 'Vizhalithekkethil H', 'idukki', 'jomatjolly@gmail.com', '9856234578', '1', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `servicecharge`
--

CREATE TABLE IF NOT EXISTS `servicecharge` (
  `scid` INT(11) NOT NULL AUTO_INCREMENT,
  `staffid` VARCHAR(90) NOT NULL,
  `bookingid` VARCHAR(90) NOT NULL,
  `charge` VARCHAR(90) NOT NULL,
  PRIMARY KEY (`scid`)
) ENGINE=INNODB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

--
-- Dumping data for table `servicecharge`
--


-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `sid` INT(11) NOT NULL AUTO_INCREMENT,
  `sname` VARCHAR(40) NOT NULL,
  `address` VARCHAR(40) NOT NULL,
  `email` VARCHAR(70) NOT NULL,
  `phno` VARCHAR(70) NOT NULL,
  `oid` INT(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=INNODB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `staff`
--
INSERT INTO `staff` (`sid`, `sname`, `address`, `email`, `phno`, `oid`) VALUES
(1, 'Dalin', 'Souriamkuzhy H', 'dalinmathew@gmail.com', '9586849697', 1),
(2, 'Akshay', 'Maniyarankudy', 'akshay@gmail.com', '7896524152', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `stockid` INT(11) NOT NULL AUTO_INCREMENT,
  `pname` VARCHAR(60) NOT NULL,
  `price` VARCHAR(80) NOT NULL,
  `stock` VARCHAR(89) NOT NULL,
  `sid` INT(11) NOT NULL,
  `oid` INT(11) NOT NULL,
  PRIMARY KEY (`stockid`)
) ENGINE=INNODB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `stock`
--
INSERT INTO `stock` (`stockid`, `pname`, `price`, `stock`, `sid`, `oid`) VALUES
(1, 'Samsung Exinos Chipset', '1500', '2', 1, 1),
(2, 'Snapdragon 885', '3000', '4', 1, 1),
(3, 'Gorilla Glass 5', '500', '9', 1, 1),
(4, 'Mobile Cover Iphone 13 Pro max', '400', '20', 1, 1),
(5, 'Screen Glass For Samsung', '200', '30', 2, 1);

