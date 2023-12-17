-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20230902.f7a82ce698
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 03:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `login_id` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `login_id`, `full_name`, `email`, `password`) VALUES
(1, 'admin_485', 'admin Haque', 'admin@gmail.com', '$2y$10$.85D1oE5t0yq4hYInbKOluS66GZacZU1Hy1ZsBofL25LKeIUJ/hJ6');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `login_id` varchar(60) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `batch` decimal(50,0) NOT NULL,
  `class_id` varchar(20) NOT NULL,
  `department` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `hometown` varchar(15) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `social_link` varchar(40) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `login_id`, `full_name`, `batch`, `class_id`, `department`, `phone`, `blood`, `hometown`, `college_name`, `social_link`, `password`) VALUES
(2, 'stdnt_345', 'admin khan', 1, 'CS-2001080', 'CSE', '12345678901', 'B+', 'Dhaka', 'NDC', 'https://facebook.com/admin.453', '$2y$10$VhqK6ycVj/sKkT35PqWrpeK3Qc/PRB6qgDiShwl2ruVD3KrKJ49.u'),
(3, 'stdnt_979', 'admin', 5, 'CS-2001080', 'FDAE', '12345678901', 'B+', 'CTG', 'STC', 'https://facebook.com/admin.453', '$2y$10$IWnGFLkT1CBp9f.TQYkBH.4UfBluUsLsC.B9fSlNX1sR.FnQzYfeu'),
(4, 'stdnt_880', 'admin khan', 12, 'CS-2001080', 'CSE', '12345678901', 'B+', 'Barishal', 'NDC', 'https://facebook.com/admin.453', '$2y$10$M5E/QcdgtTElMI.HMvbvDeokjlW9h2/BDevSm38AErqKhvFz16F6e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
