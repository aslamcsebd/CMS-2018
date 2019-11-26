-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 07:50 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(30) NOT NULL,
  `adminId` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminId`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`id` int(30) NOT NULL,
  `event` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event`, `description`, `date`) VALUES
(5, 'Versity event 01', 'Description 01', '2018-12-14'),
(6, 'Versity event 02', 'Description 01', '2018-12-15'),
(7, 'Versity event 01', 'Description 01', '2018-12-14'),
(8, 'Versity event 02', 'Description 01', '2018-12-15'),
(9, 'Versity event 01', 'Description 01', '2018-12-14'),
(10, 'Versity event 02', 'Description 01', '2018-12-15'),
(11, 'Versity event 01', 'Description 01', '2018-12-14'),
(12, 'Versity event 02', 'Description 01', '2018-12-15'),
(13, 'Versity event 01', 'Description 01', '2018-12-14'),
(14, 'Versity event 02', 'Description 01', '2018-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE IF NOT EXISTS `holiday` (
`id` int(30) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(30) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `date`, `day`, `reason`, `comments`) VALUES
(2, '2018-02-21', 'Wednesday', 'Mother Language day', 'International Mother language day'),
(3, '2018-03-27', 'Sunday', 'Shek mojibar rahman birthday', 'Father of nation BD'),
(4, '2018-03-27', 'Sunday', 'Shek mojibar rahman birthday', 'Father of nation BD');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE IF NOT EXISTS `lecture` (
`id` int(30) NOT NULL,
  `lecture` varchar(30) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` varchar(30) NOT NULL,
  `endTime` varchar(30) NOT NULL,
  `day` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id`, `lecture`, `faculty`, `startDate`, `endDate`, `startTime`, `endTime`, `day`) VALUES
(23, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(24, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(25, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(26, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(27, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(28, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(29, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(30, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(31, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(32, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(33, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(34, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(35, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(36, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(37, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(38, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(39, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(40, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(41, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(42, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(43, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(44, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(45, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(46, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(47, 'Java', 'CSE', '2018-12-05', '2018-12-15', '10:30:00', '12:30:00', 'saturday, Monday, Tuesday'),
(48, 'Electronics', 'EEE', '2018-12-06', '2018-12-14', '10:30:00', '02:30:00', 'Sunday, Monday, Wednesday'),
(49, 'C++', 'CSE', '2018-12-06', '2018-12-14', '03:30 PM', '15:30', 'Sunday, monday');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(30) NOT NULL,
  `userId` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userId`, `password`) VALUES
(1, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
