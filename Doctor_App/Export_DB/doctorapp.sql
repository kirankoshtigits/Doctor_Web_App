-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 06:59 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctorapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `mobileno` varchar(100) COLLATE utf8_bin NOT NULL,
  `age` int(100) NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL,
  `specialist` varchar(100) COLLATE utf8_bin NOT NULL,
  `quelification` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `mobileno`, `age`, `address`, `specialist`, `quelification`, `password`) VALUES
(2, 'kiran pavankumar kopshti', '8624991829', 23, 'AP Salgare Tal-Miraj Dist-Sangli', 'surgery', 'MA', '123');

-- --------------------------------------------------------

--
-- Table structure for table `patient_appointment`
--

CREATE TABLE `patient_appointment` (
  `id` int(100) NOT NULL,
  `patient_id` int(100) NOT NULL,
  `diesease` varchar(100) COLLATE utf8_bin NOT NULL,
  `time` varchar(100) COLLATE utf8_bin NOT NULL,
  `dname` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `patient_appointment`
--

INSERT INTO `patient_appointment` (`id`, `patient_id`, `diesease`, `time`, `dname`, `date`) VALUES
(1, 1, 'sss', '2', 'kulloli', '2019-04-12'),
(2, 2, 'Eyes', '3', 'koshti', '2019-04-12'),
(3, 3, 'eye', '3', 'riya', '2018-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `mobileno` varchar(100) COLLATE utf8_bin NOT NULL,
  `age` int(100) NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL,
  `city` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `mobileno`, `age`, `address`, `city`, `date`, `password`) VALUES
(3, 'kiran pavankumar koshti', '8624991829', 21, 'a/p Salgare', 'Sangli', '21/2/1995', 'karan@123'),
(4, 'mahesh makarand kulloli', '8624991829', 45, 'AP Salgare Tal-Miraj Dist-Sangli', '', '', 'karan@123'),
(5, 'mahesh makarand kulloli', '8624991829', 45, 'AP Salgare Tal-Miraj Dist-Sangli', '', '', 'karan@123'),
(6, 'kiran koshti salager', '8624991829', 33, 'AP Salgare Tal-Miraj Dist-Sangli', '', '', '222'),
(7, 'pooja manik bhise', '9876543210', 20, 'ashta', 'wadgav', '25-2-2018', 'pooja123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
