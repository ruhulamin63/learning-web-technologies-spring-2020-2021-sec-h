-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 05:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms_requirement_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_job`
--

CREATE TABLE `add_job` (
  `id` int(5) NOT NULL,
  `addjob` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_job`
--

INSERT INTO `add_job` (`id`, `addjob`) VALUES
(2, 'Developer'),
(3, 'Junior Software Enginner'),
(4, 'IT Expart');

-- --------------------------------------------------------

--
-- Table structure for table `fixing`
--

CREATE TABLE `fixing` (
  `id` int(5) NOT NULL,
  `vacancy` varchar(50) NOT NULL,
  `candidate` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixing`
--

INSERT INTO `fixing` (`id`, `vacancy`, `candidate`, `time`, `date`, `status`, `comment`) VALUES
(1, '1', 'male', '23:52', '2021-04-11', 'Pending', 'Hello...'),
(4, '2', 'female', '14:51', '2021-04-26', 'Pending', 'Hi Guys...');

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancy`
--

CREATE TABLE `job_vacancy` (
  `id` int(5) NOT NULL,
  `vacancytitle` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_vacancy`
--

INSERT INTO `job_vacancy` (`id`, `vacancytitle`, `name`, `manager`, `location`, `position`, `description`) VALUES
(1, 'B4', 'Hridoy', 'Ruhul Amin', 'Uttara', '2', 'Please application for fresher'),
(3, '', '', 'Ruhul Amin', 'Banani', '1', 'fresher');

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `id` int(5) NOT NULL,
  `empname` varchar(50) NOT NULL,
  `leavetype` varchar(50) NOT NULL,
  `days` varchar(50) NOT NULL,
  `leavefor` varchar(50) NOT NULL,
  `statedate` varchar(50) NOT NULL,
  `enddate` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`id`, `empname`, `leavetype`, `days`, `leavefor`, `statedate`, `enddate`, `reason`, `status`) VALUES
(1, 'Hridoy', 'CL', '3', 'Full Day', '2021-04-06', '2021-04-09', 'Weakness', 'Pending'),
(3, 'Rony', 'OL', '3', 'Half Day', '2021-04-05', '2021-04-09', 'Sick', 'Pending'),
(5, 'Rohim', 'Casual Leave', '7', 'Full Day', '2021-04-18', '2021-04-24', 'covid-19 (positive)', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `online_application`
--

CREATE TABLE `online_application` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contract` varchar(50) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_application`
--

INSERT INTO `online_application` (`id`, `name`, `email`, `contract`, `experience`, `location`, `type`, `date`, `comment`) VALUES
(8, 'Ruhul Amin', 'kami05518@gamil.com', '01743369163', '2 years', 'Uttara', 'Developer', '2021-04-27', 'Hello'),
(10, 'Karim', 'raridoy101@gmail.com', '01689385783', '1 Years', 'Banani', 'Query Expert', '2021-04-05', 'fresher');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `name`, `password`, `email`, `phone`, `address`, `gender`, `department`, `blood`, `dob`) VALUES
(1, 'raridoy', 'Ruhul Amin', 'needhelp', 'raridoy4@gmail.com', 1743369163, '#Sector-14, #Road-17, #House-08, Uttara, Dhaka, Bangladesh', 'Male', 'CSE', 'B+', '2021-04-15'),
(4, 'raridoy_aiub', 'Rony', 'HellpRony', 'kami05518@gamil.com', 1689385783, '#Sector-14, #Road-17, #House-08, Uttara, Dhaka, Bangladesh', 'Male', 'EEE', 'AB+', '2021-04-15'),
(5, 'raridoy', 'Ruhul Amin', '', 'raridoy4@gmail.com', 1743369163, '#Sector-14, #Road-17, #House-08, Uttara, Dhaka, Bangladesh', 'Male', 'CSE', 'B+', '2021-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `travel_request`
--

CREATE TABLE `travel_request` (
  `id` int(5) NOT NULL,
  `empname` varchar(50) NOT NULL,
  `contract` varchar(50) NOT NULL,
  `leavetype` varchar(50) NOT NULL,
  `days` varchar(50) NOT NULL,
  `statedate` varchar(50) NOT NULL,
  `enddate` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_request`
--

INSERT INTO `travel_request` (`id`, `empname`, `contract`, `leavetype`, `days`, `statedate`, `enddate`, `reason`, `status`) VALUES
(1, 'Rony', '01743369163', 'CL', '2', '2021-04-04', '2021-04-05', 'Sick', 'Pending'),
(3, 'Hridoy', '01743369163', 'OL', '3', '2021-04-27', '2021-04-18', 'Sick', 'Pending'),
(4, 'Rohim', '01689385783', 'Casual Leave', '2', '2021-04-04', '2021-04-06', 'Sick', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `user_image`
--

CREATE TABLE `user_image` (
  `id` int(5) NOT NULL,
  `photos` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_image`
--

INSERT INTO `user_image` (`id`, `photos`) VALUES
(6, '../asset/upload/hi.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_job`
--
ALTER TABLE `add_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixing`
--
ALTER TABLE `fixing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_application`
--
ALTER TABLE `online_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_request`
--
ALTER TABLE `travel_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_image`
--
ALTER TABLE `user_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_job`
--
ALTER TABLE `add_job`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fixing`
--
ALTER TABLE `fixing`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `online_application`
--
ALTER TABLE `online_application`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travel_request`
--
ALTER TABLE `travel_request`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_image`
--
ALTER TABLE `user_image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
