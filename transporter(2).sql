-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 03:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transporter`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `userName` varchar(100) NOT NULL,
  `carName` varchar(100) NOT NULL,
  `driverName` varchar(100) NOT NULL,
  `departureTime` varchar(100) NOT NULL,
  `departureLocation` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`userName`, `carName`, `driverName`, `departureTime`, `departureLocation`, `status`) VALUES
('zabir', 'chaser', 'mark', '9.00am', 'bashundhara', ''),
('zabir', 'chaser', 'mark', '9.00am', 'bashundhara', 'valid'),
('zabir', 'bmw', 'saki', '9.00am', 'bashundhara', 'valid'),
('samiha', 'bmw', 'saki', '10.00am', 'Bashundhara', 'valid'),
('samiha', 'chaser', 'mark', '9.00am', 'bashundhara', 'valid'),
('saki', 'bmw', 'saki', '10.00am', 'Bashundhara', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `carinfo`
--

CREATE TABLE `carinfo` (
  `carName` varchar(100) NOT NULL,
  `driverName` varchar(100) NOT NULL,
  `departureTime` varchar(100) NOT NULL,
  `departureLocation` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL,
  `pickup` varchar(100) NOT NULL,
  `dropoff` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carinfo`
--

INSERT INTO `carinfo` (`carName`, `driverName`, `departureTime`, `departureLocation`, `route`, `pickup`, `dropoff`) VALUES
('corolla', 'john', '8.30am', 'bashundhara', 'bashundhara-baridhara-gulshan-banani-mohakhali-shyamoli', 'bashundhara,baridhara,gulshan,banani,mohakhali,shyamoli', 'bashundhara,baridhara,gulshan,banani,mohakhali,shyamoli'),
('chaser', 'mark', '9.00am', 'bashundhara', 'bashundhara-baridhara-gulshan-banani-mohakhali-shyamoli', 'bashundhara,baridhara,gulshan,banani,mohakhali,shyamoli', 'bashundhara,baridhara,gulshan,banani,mohakhali,shyamoli'),
('axio', 'ripon', '9.15am', 'shyamoli', 'shyamoli-mohakhali-banani-gulshan-baridhara-bashundhara', 'bashundhara,baridhara,gulshan,banani,mohakhali,shyamoli', 'bashundhara,baridhara,gulshan,banani,mohakhali,shyamoli'),
('bmw', 'saki', '10.00am', 'Bashundhara', 'bashundhara-baridhara-gulshan-banani-mohakhali-shyamoli', 'bashundhara', 'shyamoli');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `userName` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`userName`, `comment`) VALUES
('zabir', ''),
('samiha', 'abcdefg');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `userName` varchar(100) NOT NULL,
  `serviceProvider` varchar(100) NOT NULL,
  `complaint` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `subscription` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `air` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`firstName`, `lastName`, `userName`, `phone`, `email`, `gender`, `userType`, `subscription`, `month`, `air`, `payment`) VALUES
('zabir', 'khan', 'zabir', '01612378788', 'zabir@gmail.com', 'Male', 'customer', 'valid', '', '', ''),
('saki', 'rahman', 'saki', '01999999999', 'saki@gmail.com', 'Male', 'customer', 'valid', 'january', 'ac', 'bkash');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driverName` varchar(100) NOT NULL,
  `carName` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `carImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverName`, `carName`, `age`, `experience`, `phone`, `address`, `status`, `rating`, `carImage`) VALUES
('john', 'corolla', '30y', '5y', '01678787877', 'Baily Road', '', '', ''),
('mark', 'chaser', '32y', '3y', '01778967890', 'Bashundhara', '', 'Good', ''),
('ripon', 'axio', '23y', '7y', '018888888888', 'Uttara', '', '', ''),
('saki', 'bmw', '26y', '3y', '01612312311', 'Paltan', 'valid', 'Good', 'carImage/c1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `uType` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userName`, `password`, `uType`, `status`) VALUES
(' priya ', ' 827ccb0eea8a706c4c34a16891f84e7b ', ' service ', 'valid'),
('monu', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'valid'),
('pandu', '12345', 'customer', 'valid'),
('zabir', '827ccb0eea8a706c4c34a16891f84e7b', 'customer', 'valid'),
('saki', '827ccb0eea8a706c4c34a16891f84e7b', 'customer', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `serviceproinfo`
--

CREATE TABLE `serviceproinfo` (
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `userType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceproinfo`
--

INSERT INTO `serviceproinfo` (`firstName`, `lastName`, `userName`, `phone`, `email`, `password`, `gender`, `userType`) VALUES
('priya', 'roy', 'priya', '01912121212', 'priya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Female', 'service');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
