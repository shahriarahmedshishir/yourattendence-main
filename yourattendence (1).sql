-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 06:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yourattendence`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_class`
--

CREATE TABLE `add_class` (
  `class_id` int(11) NOT NULL,
  `semister` varchar(10) DEFAULT NULL,
  `section` varchar(5) DEFAULT NULL,
  `course_name` varchar(100) DEFAULT NULL,
  `course_code` varchar(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_class`
--

INSERT INTO `add_class` (`class_id`, `semister`, `section`, `course_name`, `course_code`, `user_id`) VALUES
(4, '6th', 'C', 'soft-2', '2200', 1),
(5, '6', 'C', 'Software dev 2', 'CSE-2291', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `student_no` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `01-10-2024` int(11) DEFAULT NULL,
  `02-10-2024` int(11) DEFAULT NULL,
  `03-10-2024` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_attendence`
--

CREATE TABLE `temp_attendence` (
  `stu_no` int(11) NOT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `stu_name` varchar(55) DEFAULT NULL,
  `01oct` int(11) DEFAULT NULL,
  `02oct` int(11) DEFAULT NULL,
  `03oct` int(11) DEFAULT NULL,
  `04oct` int(11) DEFAULT NULL,
  `05oct` int(11) DEFAULT NULL,
  `06oct` int(11) DEFAULT NULL,
  `07oct` int(11) DEFAULT NULL,
  `08oct` int(11) DEFAULT NULL,
  `09oct` int(11) DEFAULT NULL,
  `10oct` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temp_attendence`
--

INSERT INTO `temp_attendence` (`stu_no`, `stu_id`, `stu_name`, `01oct`, `02oct`, `03oct`, `04oct`, `05oct`, `06oct`, `07oct`, `08oct`, `09oct`, `10oct`) VALUES
(1, 1, 'A', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 'B', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 'D', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 'E', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 'F', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, 'G', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, 'H', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, 'I', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, 'J', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_control`
--

CREATE TABLE `user_control` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_control`
--

INSERT INTO `user_control` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Shahriar Shishir', 'shesirsikder1234@gmail.com', '11111'),
(2, 'Sayem Khan', 'sayem399k@gmail.com', '55555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_class`
--
ALTER TABLE `add_class`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`student_no`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `temp_attendence`
--
ALTER TABLE `temp_attendence`
  ADD PRIMARY KEY (`stu_no`);

--
-- Indexes for table `user_control`
--
ALTER TABLE `user_control`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_class`
--
ALTER TABLE `add_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `student_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_attendence`
--
ALTER TABLE `temp_attendence`
  MODIFY `stu_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_control`
--
ALTER TABLE `user_control`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_class`
--
ALTER TABLE `add_class`
  ADD CONSTRAINT `add_class_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_control` (`user_id`);

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `add_class` (`class_id`),
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user_control` (`user_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_control` (`user_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `add_class` (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
