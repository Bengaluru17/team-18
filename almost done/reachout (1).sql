-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 09:42 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reachout`
--

-- --------------------------------------------------------

--
-- Table structure for table `attstaff`
--

CREATE TABLE `attstaff` (
  `lid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attstud`
--

CREATE TABLE `attstud` (
  `sid` int(11) NOT NULL,
  `pa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `sid` int(11) NOT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `oid` int(11) NOT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `iid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`iid`, `name`, `quantity`, `section`) VALUES
(1, 'AA', 23, '3');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `lid` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `password`) VALUES
(1, 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `sid` int(11) NOT NULL,
  `c1` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `c3` int(11) DEFAULT NULL,
  `c4` int(11) DEFAULT NULL,
  `c5` int(11) DEFAULT NULL,
  `c6` int(11) DEFAULT NULL,
  `c7` int(11) DEFAULT NULL,
  `c8` int(11) DEFAULT NULL,
  `c9` int(11) DEFAULT NULL,
  `c10` int(11) DEFAULT NULL,
  `c11` int(11) DEFAULT NULL,
  `c12` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `sid` int(11) NOT NULL,
  `detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `lid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `lid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`lid`, `name`, `dob`, `doj`, `email`) VALUES
(1, 'ggg', '0000-00-00', '0000-00-00', NULL),
(2, '232323', '0000-00-00', '0000-00-00', NULL),
(3, 'brunda', '0000-00-00', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `aadhar` varchar(255) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `hobbies` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `dob`, `class`, `school`, `aadhar`, `gender`, `hobbies`) VALUES
(1, 'aaa', '0000-00-00', 0, '', '', '', ''),
(2, 'brunda', '2017-07-22', 2, 'sd', '2', 'f', 'sfdf'),
(3, 'brunda', '2017-07-22', 2, 'sd', '2', 'f', 'sfdf'),
(4, 'brunda', '2017-07-22', 2, 'sd', '2', 'f', 'sfdf'),
(5, 'a', '2017-07-06', 3, 'dsd', '11', 's', 'weew'),
(6, 'fdbfdghdjh', '2017-07-14', 12, 'jhjhj', '134214314', 'd', 'gfdhdh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attstaff`
--
ALTER TABLE `attstaff`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `attstud`
--
ALTER TABLE `attstud`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD KEY `oid` (`oid`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `lid` (`lid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attstaff`
--
ALTER TABLE `attstaff`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attstud`
--
ALTER TABLE `attstud`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attstaff`
--
ALTER TABLE `attstaff`
  ADD CONSTRAINT `attstaff_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `staff` (`lid`);

--
-- Constraints for table `attstud`
--
ALTER TABLE `attstud`
  ADD CONSTRAINT `attstud_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

--
-- Constraints for table `health`
--
ALTER TABLE `health`
  ADD CONSTRAINT `health_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`oid`) REFERENCES `orders` (`oid`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `staff` (`lid`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

--
-- Constraints for table `medical`
--
ALTER TABLE `medical`
  ADD CONSTRAINT `medical_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `staff` (`lid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
