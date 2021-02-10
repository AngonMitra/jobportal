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
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE IF NOT EXISTS `empinfo` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `com_name` varchar(50) NOT NULL,
  `con_person` varchar(50) NOT NULL,
  `person_email` varchar(50) NOT NULL,
  `person_num` int(20) NOT NULL,
  `intype` varchar(50) NOT NULL,
  `com_add` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `con_num` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`id`, `username`, `pass`, `com_name`, `con_person`, `person_email`, `person_num`, `intype`, `com_add`, `country`, `city`, `area`, `con_num`) VALUES
(1, 'angon', '123456789', 'IT bd', 'Mitra', 'angonmitra453@gmail.com', 1951478038, '13', '22/23 No Razarbag, Bashabo', 'Bangladesh', 'dhaka', 'motizil', 1537032540);

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE IF NOT EXISTS `jobpost` (
  `id` int(20) NOT NULL,
  `jobtype` varchar(200) NOT NULL,
  `intype` varchar(200) NOT NULL,
  `jobtitle` varchar(200) NOT NULL,
  `vacancies` int(200) NOT NULL,
  `jobnature` varchar(200) NOT NULL,
  `jobdeg` varchar(200) NOT NULL,
  `comtype` varchar(200) NOT NULL,
  `jobdescription` varchar(200) NOT NULL,
  `edrequirement` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `jobrequirement` varchar(200) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `joblocation` varchar(200) NOT NULL,
  `gen` varchar(200) NOT NULL,
  `age` int(200) NOT NULL,
  `deadline` date NOT NULL,
  `uname` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empinfo`
--
ALTER TABLE `empinfo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
