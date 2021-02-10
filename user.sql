-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 10:44 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE IF NOT EXISTS `applyjob` (
  `id` int(50) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `comtype` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `resume` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applyjob`
--

INSERT INTO `applyjob` (`id`, `jobtitle`, `comtype`, `deadline`, `resume`, `uname`) VALUES
(35, 'Data Entry Operator', 'my company', '2018-04-20', 'Curriculum-Vitae-Of-Angon.doc', 'tunu');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `img`, `username`) VALUES
(1, 'back.png', 'tunu');

-- --------------------------------------------------------

--
-- Table structure for table `upload_resume`
--

CREATE TABLE IF NOT EXISTS `upload_resume` (
  `id` int(200) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_resume`
--

INSERT INTO `upload_resume` (`id`, `resume`, `username`) VALUES
(2, 'Curriculum-Vitae-Of-Angon.doc', 'tunu');

-- --------------------------------------------------------

--
-- Table structure for table `usercv`
--

CREATE TABLE IF NOT EXISTS `usercv` (
  `id` int(100) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` int(15) NOT NULL,
  `address` varchar(20) NOT NULL,
  `edlevel` varchar(20) NOT NULL,
  `result` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `pyear` int(20) NOT NULL,
  `inname` varchar(20) NOT NULL,
  `grade` float NOT NULL,
  `career` varchar(100) NOT NULL,
  `caricular` varchar(100) NOT NULL,
  `selectskill` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `skilldes` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `gen` varchar(20) NOT NULL,
  `marital` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `paddress` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercv`
--

INSERT INTO `usercv` (`id`, `fname`, `email`, `number`, `address`, `edlevel`, `result`, `department`, `pyear`, `inname`, `grade`, `career`, `caricular`, `selectskill`, `salary`, `skilldes`, `fathername`, `birthdate`, `gen`, `marital`, `nationality`, `religion`, `paddress`, `location`, `img`, `username`) VALUES
(1, 'Angon', 'angonmitra453@gmail.', 1951478038, '22/23 No Razarbag, B', 'Bachelor/Honors', 'Grade', 'CSE', 2018, 'Stamford', 3.2, 'ffsfsf.			   \r\n			   ', 'tdtdt.			   \r\n			   ', 'IT/Telecommunication', '25000-30000', 'yyyry.			   \r\n			   ', 'Sukumol Mitra', '1995-03-29', 'Male', 'Unmarried', 'Bangladesh', 'Hindu', '22/23 No Razarbag, B', 'Dhaka', '', 'tunu');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gen` varchar(20) NOT NULL,
  `selectskill` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cncode` varchar(20) NOT NULL,
  `number` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `fname`, `lname`, `gen`, `selectskill`, `email`, `cncode`, `number`, `username`, `password`) VALUES
(4, 'mitra', 'angon', 'Male', '4', 'angonmitra453@gmail.com', '88', 1951478038, 'mitra', '123456'),
(7, 'tunu', 'sarkar', 'Female', '2', 'angonmitra453@gmail.com', '88', 1951478038, 'tunu', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_resume`
--
ALTER TABLE `upload_resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercv`
--
ALTER TABLE `usercv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyjob`
--
ALTER TABLE `applyjob`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `upload_resume`
--
ALTER TABLE `upload_resume`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usercv`
--
ALTER TABLE `usercv`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
