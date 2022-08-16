-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 30, 2020 at 11:59 PM
-- Server version: 10.4.15-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u241276833_gms`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `manager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `manager`) VALUES
(0, 'PENDING', 0),
(11, 'HR', 0),
(12, 'IT', 38),
(13, 'TRANSPORT', 47),
(14, 'ACCOUNTS', 38);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `epfNo` varchar(20) NOT NULL,
  `etfNo` varchar(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(30) NOT NULL,
  `department` int(11) NOT NULL,
  `role` enum('EMPLOYEE','MANAGER') NOT NULL,
  `nic` int(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `epfNo`, `etfNo`, `name`, `email`, `password`, `department`, `role`, `nic`, `status`) VALUES
(0, '0', '0', 'PENDING', '0', '0', 0, '', 0, 'ACTIVE'),
(46, '008', '009', 'Sheran', 'rajinthasheran@yahoo.com', 'sheran@123', 13, 'EMPLOYEE', 2147483647, 'ACTIVE'),
(43, '012', '010', 'Jones', 'jones@mailinator.com', '', 12, 'EMPLOYEE', 986785678, 'ACTIVE'),
(47, '100', '101', 'ayush', 'rajinthasheran@gmail.com', '12345678', 13, 'MANAGER', 987678098, 'ACTIVE'),
(38, '10026130', '10854', 'Rushan Thasindu Jayasundara', 'rushanthasindu10@gmail.com', 'rushan', 12, 'MANAGER', 2147483647, 'ACTIVE'),
(44, '121', '112', 'Ayush', 'rajinthasheran@gmail.com', 'sheran@123', 13, 'EMPLOYEE', 918120876, 'INACTIVE'),
(40, '123456', '654321', 'amila', 'rajinthasheran@yahoo.com', '12345678', 13, 'MANAGER', 2147483647, 'INACTIVE'),
(42, '147852', '963258', 'IT EMP 001', 'itemp1@gms.lk', 'itemp1', 12, 'EMPLOYEE', 2147483647, 'ACTIVE'),
(41, '987456', '654789', 'IT EMP 002', 'itemp2@gms.lk', 'itemp2', 12, 'EMPLOYEE', 2147483647, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `grievance`
--

CREATE TABLE `grievance` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `department` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `employee` int(11) NOT NULL,
  `currentState` varchar(30) NOT NULL DEFAULT 'UNDER_THE_SECURITY_OFFICER',
  `confirm` varchar(20) NOT NULL DEFAULT 'NOT_CONFIRMED_YET',
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `imgType` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grievance`
--

INSERT INTO `grievance` (`id`, `title`, `description`, `department`, `type`, `employee`, `currentState`, `confirm`, `timeStamp`, `imgType`) VALUES
(9, 'co worker problem', ' personal issue', 13, 'Employee Problem', 46, 'SOLVED_BY_MANAGER', 'NOT_CONFIRMED_YET', '2020-10-29 17:55:07', ''),
(6, 'dadsad', ' sdadad', 13, 'Manager Problem ', 44, 'SOLVED_BY_S.O.', 'NOT_CONFIRMED_YET', '2020-10-29 17:20:04', 'jpg'),
(5, 'denial of benifits', ' festival bonus cut', 13, 'Manager Problem ', 44, 'UNDER_THE_MANAGER', 'NOT_CONFIRMED_YET', '2020-10-29 17:18:19', 'docx'),
(10, 'gafad', ' aafcsDVV', 13, 'Manager Problem ', 46, 'SOLVED_BY_MANAGER', 'NOT_CONFIRMED_YET', '2020-10-29 18:00:41', ''),
(8, 'kjijijio', ' adadqwd', 13, 'Infrastructure Problem', 44, 'SOLVED_BY_S.O.', 'NOT_CONFIRMED_YET', '2020-10-29 17:47:57', ''),
(7, 'sdadad', ' dvsvsvd', 13, 'Manager Problem ', 44, 'SOLVED_BY_S.O.', 'NOT_CONFIRMED_YET', '2020-10-29 17:32:49', ''),
(1, 'Test', ' Test Grievance ', 12, 'Infrastructure Problem', 42, 'SOLVED_BY_MANAGER', 'NOT_CONFIRMED_YET', '2020-10-26 23:44:03', 'sql'),
(4, 'Test Fiile', ' ', 12, 'Infrastructure Problem', 42, 'SOLVED_BY_S.O.', 'NOT_CONFIRMED_YET', '2020-10-27 00:25:10', '');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Takes Too much  Time to response '),
(2, 'Infrastructure Problem'),
(3, 'Manager Problem '),
(4, 'Employee Problem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`epfNo`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `grievance`
--
ALTER TABLE `grievance`
  ADD PRIMARY KEY (`title`,`department`,`type`,`employee`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `employee` (`employee`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `grievance`
--
ALTER TABLE `grievance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`department`) REFERENCES `department` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `grievance`
--
ALTER TABLE `grievance`
  ADD CONSTRAINT `grievance_ibfk_1` FOREIGN KEY (`employee`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
