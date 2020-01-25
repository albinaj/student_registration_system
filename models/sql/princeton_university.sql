-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 12:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `princeton_university`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `department`, `semester`, `sub1`, `sub2`, `sub3`, `sub4`) VALUES
(1, 'computer science', '1', 'C and C++', 'Java Script', 'php', 'python'),
(2, 'computer science', '2', 'Cobol', 'Graphice', 'Django', 'Network'),
(3, 'commerce', '1', 'accounting', 'word', 'business', 'statics'),
(4, 'history', '1', 'old history', 'modern history', 'geography', 'word war'),
(6, 'computer science', '3', 'python', 'os', 'flask', ''),
(7, 'computer science', '4', 'js', 'sql', 'postgresql', 'mother board'),
(8, 'commerce', '2', 'business', 'management', 'cs applications', 'economics'),
(9, 'commerce', '3', 'management 2', 'accountancy', 'staty', 'maths'),
(10, 'commerce', '4', 'modern accountins', 'ca', 'staty 2', 'business'),
(11, 'history', '2', 'history1', 'indian history', 'kerala history', 'supreme court'),
(12, 'history', '3', 'constitution', 'articles', 'history2', 'wars'),
(13, 'history', '4', 'geography', 'world', 'india', 'kerala');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_id` int(11) NOT NULL,
  `fac_name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `fac_name`, `department`, `email`, `mobile`, `address`, `dob`, `gender`, `password`, `status`) VALUES
(1, 'john paul varghese', 'computer science', 'john@gmail.com', '9874561230', 'kottayam', '2020-01-11', 'male', 'john', 'Approved'),
(2, 'vijith pg', 'history', 'vijith@gmail.com', '9874563210', 'kozhikode', '2020-01-18', 'male', 'vijith', 'Approved'),
(3, 'Amith G', 'commerce', 'amitha@gmail.com', '987654123', 'kollam', '2020-01-09', 'female', 'amitha', 'Approved'),
(4, 'Gana Mathew', 'history', 'gana@gmail.com', '987654123', 'kannur', '2020-01-02', 'female', 'gana', 'Approved'),
(6, 'Elsamma a', 'computer science', 'elsamma@gmail.com', '987654123', 'kollam', '2020-01-19', 'female', 'elsamma', 'Approved'),
(7, 'Vinod', 'history', 'vinod@gmail.com', '987654123', 'idukki', '2020-01-10', 'male', 'vinod', 'Approved'),
(8, 'mathews', 'commerce', 'mathews@gmail.com', '987654123', 'kottayam', '2020-01-24', 'male', 'mathews', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `Notice_Id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Beginning_date` date NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Ending_date` date NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`Notice_Id`, `Title`, `Beginning_date`, `Author`, `Ending_date`, `Description`) VALUES
(1, 'Must wear uniform during exams', '2020-01-01', 'principal', '2020-01-24', 'or otherwise there will be penalty'),
(4, 'Examination', '2020-01-04', 'john', '2020-01-05', 'must attend');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_no` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_no`, `s_name`, `department`, `email`, `dob`, `gender`, `address`, `mobile`, `password`) VALUES
(1, 'mujeeb Rahman', 'history', 'mujeeb@gmail.com', '2020-01-11', 'male', 'kannur', 987456321, 'mujeeb'),
(2, 'sudhin ', 'computer science', 'sudhin@gmail.com', '2020-01-12', 'male', 'kattappana', 987654123, 'sudhin'),
(3, 'jijo thomas', 'computer science', 'jijo@gmail.com', '2020-01-26', 'male', 'kollam', 9874563210, 'jijo'),
(4, 'sameera agnes', 'computer science', 'sameera@gmail.com', '2020-01-11', 'female', 'alapuzha', 987456321, 'sameera'),
(5, 'ashiq rahman', 'computer science', 'ashiq@gmail.com', '2020-01-19', 'male', 'kayal', 987654123, 'ashiq'),
(7, 'raman mathew', 'history', 'raman@gmail.com', '2020-01-17', 'male', 'kannur', 987654123, 'raman'),
(8, 'sandra thomas', 'history', 'sandra@gmail.com', '2020-01-12', 'female', 'trivandrum', 987654123, 'sandra'),
(9, 'achuthan Kutty', 'history', 'achu@gmail.com', '2020-01-12', 'male', 'kayamkulam', 987654123, 'achu'),
(10, 'Leena', 'commerce', 'leena@gmail.com', '2020-01-17', 'female', 'kayamkulam', 987456321, 'leena'),
(11, 'aswin thankachan', 'commerce', 'ashwin@gmail.com', '2020-01-19', 'male', 'kozhikode', 9874563210, 'aswin'),
(12, 'manu Thankachan', 'commerce', 'manu@gmail.com', '2020-01-04', 'male', 'kollam', 987654123, 'manu');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `h1` varchar(50) NOT NULL,
  `h2` varchar(50) NOT NULL,
  `h3` varchar(50) NOT NULL,
  `h4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `department`, `semester`, `day`, `h1`, `h2`, `h3`, `h4`) VALUES
(1, 'computer science', '1', 'Monday', 'cpp', 'java', 'php', 'cobol'),
(3, 'computer science', '1', 'Tuesday', 'java', 'cpp', 'php', 'cobol'),
(4, 'computer science', '1', 'Wednesday', 'java', 'cpp', 'php', 'cobol'),
(5, 'computer science', '1', 'Thursday', 'cobol', 'java', 'cpp', 'php'),
(6, 'commerce', '1', 'Monday', 'accounting', 'word', 'business', 'statitics'),
(7, 'commerce', '1', 'Tuesday', 'word', 'accounting', 'statistics', 'business'),
(8, 'commerce', '1', 'wednesday', 'accounting', 'word', 'business', 'statitics'),
(9, 'commerce', '1', 'Thursday', 'accounting', 'word', 'business', 'statitics'),
(10, 'commerce', '1', 'Friday', 'accounting', 'word', 'business', 'statitics'),
(11, 'computer science', '1', 'Friday', 'cobol', 'java', 'cpp', 'php'),
(12, 'computer science', '2', 'Monday', 'cobol', 'java script', 'django', 'networkl'),
(13, 'computer science', '2', 'Tuesday', 'cobol', 'java script', 'django', 'networkl'),
(14, 'computer science', '2', 'Wednesday', 'cobol', 'java script', 'django', 'networkl'),
(15, 'computer science', '2', 'Thursday', 'cobol', 'java script', 'django', 'networkl'),
(16, 'computer science', '2', 'Friday', 'cobol', 'java script', 'django', 'networkl'),
(17, 'history', '1', 'Monday', 'old history', 'modern history', 'economics', 'world wars'),
(18, 'history', '1', 'Tuesday', 'old history', 'modern history', 'economics', 'world wars'),
(19, 'history', '1', 'Wednesday', 'old history', 'modern history', 'economics', 'world wars'),
(20, 'history', '1', 'Thursday', 'old history', 'modern history', 'economics', 'world wars'),
(21, 'history', '1', 'Friday', 'old history', 'modern history', 'economics', 'world wars'),
(22, 'history', '2', 'Monday', 'old history', 'modern history', 'economics', 'world wars'),
(23, 'history', '2', 'Tuesday', 'old history', 'modern history', 'economics', 'world wars'),
(24, 'history', '2', 'Wednesday', 'old history', 'modern history', 'economics', 'world wars'),
(25, 'history', '2', 'Thursday', 'old history', 'modern history', 'economics', 'world wars'),
(26, 'history', '2', 'Friday', 'old history', 'modern history', 'economics', 'world wars');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`Notice_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `Notice_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `reg_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
