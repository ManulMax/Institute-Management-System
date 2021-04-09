# Group_Project-IMS-for-Vidarsha_MVC :computer:
Modified with MVC architecture


Necessary Data :page_facing_up:

____________________________________________________________________________________________________________________________________
Database - Sample data must be changed

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2021 at 06:15 AM
-- Server version: 8.0.20
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vidarsha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `tel_no` int DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `DOB` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `class_id` int NOT NULL,
  `stu_reg_no` int NOT NULL,
  `date` varchar(15) NOT NULL,
  `presence` int DEFAULT NULL,
  PRIMARY KEY (`class_id`,`stu_reg_no`,`date`),
  KEY `stu_reg_no` (`stu_reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`class_id`, `stu_reg_no`, `date`, `presence`) VALUES
(2, 22, '2021-03-20', 1),
(2, 22, '2021-03-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int NOT NULL AUTO_INCREMENT,
  `monthly_fee` int DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `subject_id` int DEFAULT NULL,
  `teacher_reg_no` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  KEY `teacher_reg_no` (`teacher_reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `monthly_fee`, `batch`, `subject_id`, `teacher_reg_no`) VALUES
(1, 1500, '2021AL', 3, 1),
(2, 1000, '2022AL', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

DROP TABLE IF EXISTS `enrollment`;
CREATE TABLE IF NOT EXISTS `enrollment` (
  `class_id` int NOT NULL,
  `stu_reg_no` int NOT NULL,
  `date` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`class_id`,`stu_reg_no`),
  KEY `stu_reg_no` (`stu_reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`class_id`, `stu_reg_no`, `date`) VALUES
(2, 22, '2021-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `id` int NOT NULL AUTO_INCREMENT,
  `topic` varchar(60) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `class_id` int DEFAULT NULL,
  `result_sheet_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`),
  KEY `result_sheet_id` (`result_sheet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `topic`, `date`, `class_id`, `result_sheet_id`) VALUES
(1, 'Atomic structure exam 1', '2021-03-23', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
CREATE TABLE IF NOT EXISTS `fees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(15) DEFAULT NULL,
  `month` varchar(15) NOT NULL,
  `amount` int DEFAULT NULL,
  `class_id` int DEFAULT NULL,
  `stu_reg_no` int DEFAULT NULL,
  `income_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`),
  KEY `stu_reg_no` (`stu_reg_no`),
  KEY `income_id` (`income_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `date`, `month`, `amount`, `class_id`, `stu_reg_no`, `income_id`) VALUES
(1, '2021-02-10', 'January', 1000, 2, 22, NULL),
(15, '2021-03-30', 'February', 1000, 2, 22, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

DROP TABLE IF EXISTS `hall`;
CREATE TABLE IF NOT EXISTS `hall` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `capacity` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`id`, `name`, `capacity`) VALUES
(1, 'h1', 50),
(2, 'h2', 100),
(3, 'h3', 75),
(4, 'h4', 50);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
CREATE TABLE IF NOT EXISTS `income` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(15) DEFAULT NULL,
  `income` int DEFAULT NULL,
  `admin_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `quiz_id` int NOT NULL,
  `stu_reg_no` int NOT NULL,
  `marks` int DEFAULT NULL,
  PRIMARY KEY (`quiz_id`,`stu_reg_no`),
  KEY `stu_reg_no` (`stu_reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paper_marker`
--

DROP TABLE IF EXISTS `paper_marker`;
CREATE TABLE IF NOT EXISTS `paper_marker` (
  `reg_no` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `tel_no` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `DOB` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `qualifications` varchar(100) DEFAULT NULL,
  `teacher_id` int DEFAULT NULL,
  `reg_date` varchar(15) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `deleted` int NOT NULL,
  PRIMARY KEY (`reg_no`),
  KEY `user_id` (`user_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paper_marker`
--

INSERT INTO `paper_marker` (`reg_no`, `name`, `tel_no`, `address`, `NIC`, `DOB`, `gender`, `email`, `qualifications`, `teacher_id`, `reg_date`, `user_id`, `deleted`) VALUES
(1, 'Kamal Wijesekera', '0713515709', 'Colombo', '909845510v', '1990-07-26', 'male', 'kamal@gmail.com', 'Advance Level', 1, NULL, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `name` varchar(50) NOT NULL,
  `tel_no` varchar(15) DEFAULT NULL,
  `stu_reg_no` int NOT NULL,
  `deleted` int NOT NULL,
  PRIMARY KEY (`name`,`stu_reg_no`),
  KEY `stu_reg_no` (`stu_reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`name`, `tel_no`, `stu_reg_no`, `deleted`) VALUES
('Kalani Ranasinghe', '0783434657', 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

DROP TABLE IF EXISTS `password_reset`;
CREATE TABLE IF NOT EXISTS `password_reset` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(70) NOT NULL,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `q_no` int NOT NULL,
  `quiz_id` int NOT NULL,
  `ques` varchar(200) DEFAULT NULL,
  `answer1` varchar(150) DEFAULT NULL,
  `answer2` varchar(150) DEFAULT NULL,
  `answer3` varchar(150) DEFAULT NULL,
  `answer4` varchar(150) DEFAULT NULL,
  `answer5` varchar(150) DEFAULT NULL,
  `correct_ans` int DEFAULT NULL,
  PRIMARY KEY (`quiz_id`,`q_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_no`, `quiz_id`, `ques`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `correct_ans`) VALUES
(1, 26, 'Who first proposed the atomic theory based on scientific knowledge?', 'John Dalton', 'Robert Brown', 'Jones Berzelius', 'Dmithri Mendeleev', 'Faraday', 1),
(2, 26, 'Who discovered Neutrons?', 'Dalton', 'J. J. Thomson', 'Chadwick', 'Faraday', 'Robert Brown', 3),
(3, 26, 'Atomic mass of an element is equal to,', 'mass of electron', 'mass of neutron', 'the sum of mass of proton and neutron', 'the sum of mass of electron and proton', 'none of the above', 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(15) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `time_hours` int NOT NULL,
  `time_minutes` int NOT NULL,
  `class_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `date`, `topic`, `time_hours`, `time_minutes`, `class_id`) VALUES
(26, NULL, 'Atomic Theory Quiz 1', 0, 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `result_sheet`
--

DROP TABLE IF EXISTS `result_sheet`;
CREATE TABLE IF NOT EXISTS `result_sheet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(15) DEFAULT NULL,
  `filename` varchar(100) NOT NULL,
  `teacher_reg_no` int DEFAULT NULL,
  `pm_reg_no` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_reg_no` (`teacher_reg_no`),
  KEY `pm_reg_no` (`pm_reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `class_id` int DEFAULT NULL,
  `hall_id` int DEFAULT NULL,
  `day` varchar(15) DEFAULT NULL,
  `start_time` varchar(15) DEFAULT NULL,
  `end_time` varchar(15) DEFAULT NULL,
  `start_date` varchar(15) NOT NULL,
  `staff_reg_no` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`),
  KEY `hall_id` (`hall_id`),
  KEY `staff_reg_no` (`staff_reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `class_id`, `hall_id`, `day`, `start_time`, `end_time`, `start_date`, `staff_reg_no`) VALUES
(1, 1, 1, 'Monday', '09:00', '13:00', '2021-04-05', 1),
(13, 2, 2, 'Tuesday', '08:30', '12:30', '2021-04-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `reg_no` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `tel_no` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `DOB` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fixed_salary` int DEFAULT NULL,
  `acc_no` int DEFAULT NULL,
  `bank_name` varchar(30) DEFAULT NULL,
  `branch_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reg_date` varchar(15) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`reg_no`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`reg_no`, `fname`, `tel_no`, `address`, `NIC`, `DOB`, `gender`, `email`, `fixed_salary`, `acc_no`, `bank_name`, `branch_name`, `reg_date`, `user_id`) VALUES
(1, 'Nitharshana Sathyamoorthy', '0778766329', 'Kandy', '980012345v', '1998-05-16', 'female', 'nitharshana@gmail.com', 30000, 67895, 'Peoples Bank', 'Kandy', '2020-11-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `reg_no` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `tel_no` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `DOB` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `school` varchar(50) DEFAULT NULL,
  `grade` int DEFAULT NULL,
  `stream` varchar(30) DEFAULT NULL,
  `reg_date` varchar(15) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `deleted` int NOT NULL,
  PRIMARY KEY (`reg_no`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_no`, `fname`, `tel_no`, `address`, `NIC`, `DOB`, `gender`, `email`, `school`, `grade`, `stream`, `reg_date`, `image`, `user_id`, `deleted`) VALUES
(22, 'Jayathri Madushika', '0718347577', 'Raigama', '981153495v', '1998-05-21', 'female', 'jayathri@gmail.com', 'Taxila Central College', 13, 'Science stream', NULL, 'girl1.jpg', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentsubject`
--

DROP TABLE IF EXISTS `studentsubject`;
CREATE TABLE IF NOT EXISTS `studentsubject` (
  `subject1` varchar(50) DEFAULT NULL,
  `subject2` varchar(50) DEFAULT NULL,
  `subject3` varchar(50) DEFAULT NULL,
  `stu_reg_no` int DEFAULT NULL,
  `deleted` int NOT NULL,
  KEY `stu_reg_no` (`stu_reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentsubject`
--

INSERT INTO `studentsubject` (`subject1`, `subject2`, `subject3`, `stu_reg_no`, `deleted`) VALUES
('Combined Maths', 'Physics', 'Chemistry', 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

DROP TABLE IF EXISTS `study_material`;
CREATE TABLE IF NOT EXISTS `study_material` (
  `id` int NOT NULL AUTO_INCREMENT,
  `heading` varchar(60) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `class_id` int DEFAULT NULL,
  `teacher_reg_no` int DEFAULT NULL,
  `deleted` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`),
  KEY `teacher_reg_no` (`teacher_reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `study_material`
--

INSERT INTO `study_material` (`id`, `heading`, `description`, `name`, `class_id`, `teacher_reg_no`, `deleted`) VALUES
(38, 'Chemistry Unit 01', 'Atomic structure first lesson', 'Unit 01 Atomic Structure part 1.pdf', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'Combined maths'),
(2, 'Physics'),
(3, 'Chemistry'),
(4, 'Biology');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `reg_no` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `tel_no` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `DOB` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `qualifications` varchar(100) DEFAULT NULL,
  `subject_id` int DEFAULT NULL,
  `acc_no` int DEFAULT NULL,
  `bank_name` varchar(30) DEFAULT NULL,
  `branch_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reg_date` varchar(15) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `deleted` int NOT NULL,
  PRIMARY KEY (`reg_no`),
  KEY `subject_id` (`subject_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`reg_no`, `fname`, `tel_no`, `address`, `NIC`, `DOB`, `gender`, `email`, `qualifications`, `subject_id`, `acc_no`, `bank_name`, `branch_name`, `reg_date`, `user_id`, `deleted`) VALUES
(1, 'H.Isurika Perera', '0719736858', '119,Sandagiri Uyana,Horana', '986800174v', '1998-06-28', 'female', 'isurika@gmail.com', 'Bsc in Chemistry', 3, 12345, 'BOC', 'Horana', '2020-11-05', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_salary`
--

DROP TABLE IF EXISTS `teacher_salary`;
CREATE TABLE IF NOT EXISTS `teacher_salary` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(15) DEFAULT NULL,
  `month` varchar(15) NOT NULL,
  `amount` int DEFAULT NULL,
  `teacher_reg_no` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_reg_no` (`teacher_reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `flag` int DEFAULT NULL,
  `deleted` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`, `flag`, `deleted`) VALUES
(1, 'isurika@gmail.com', '6b6a00fd7906eb17d89d5432a1b4743f', 'Teacher', 1, 0),
(2, 'nitharshana@gmail.com', '3aee50363b930bce576ddd6afb3bcfc0', 'Staff', 1, 0),
(3, 'kamal@gmail.com', '4cdf7f5c947593ec98fca78f86781ee2', 'Paper Marker', 1, 0),
(4, 'jayathri@gmail.com', 'faeea5c7e4a3cf8e7a0081c9580ab677', 'Student', 0, 0),
(5, 'manul@gmail.com', 'c497753b0dabcaa50af1b7dcfa787795', 'Admin', 1, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`stu_reg_no`) REFERENCES `student` (`reg_no`);

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`teacher_reg_no`) REFERENCES `teacher` (`reg_no`);

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`stu_reg_no`) REFERENCES `student` (`reg_no`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`result_sheet_id`) REFERENCES `result_sheet` (`id`);

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `fees_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `fees_ibfk_2` FOREIGN KEY (`stu_reg_no`) REFERENCES `student` (`reg_no`),
  ADD CONSTRAINT `fees_ibfk_3` FOREIGN KEY (`income_id`) REFERENCES `income` (`id`);

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`),
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`stu_reg_no`) REFERENCES `student` (`reg_no`);

--
-- Constraints for table `paper_marker`
--
ALTER TABLE `paper_marker`
  ADD CONSTRAINT `paper_marker_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`stu_reg_no`) REFERENCES `student` (`reg_no`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

--
-- Constraints for table `result_sheet`
--
ALTER TABLE `result_sheet`
  ADD CONSTRAINT `result_sheet_ibfk_1` FOREIGN KEY (`teacher_reg_no`) REFERENCES `teacher` (`reg_no`),
  ADD CONSTRAINT `result_sheet_ibfk_2` FOREIGN KEY (`pm_reg_no`) REFERENCES `paper_marker` (`reg_no`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`hall_id`) REFERENCES `hall` (`id`),
  ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`staff_reg_no`) REFERENCES `staff` (`reg_no`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `studentsubject`
--
ALTER TABLE `studentsubject`
  ADD CONSTRAINT `studentsubject_ibfk_1` FOREIGN KEY (`stu_reg_no`) REFERENCES `student` (`reg_no`);

--
-- Constraints for table `study_material`
--
ALTER TABLE `study_material`
  ADD CONSTRAINT `study_material_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `study_material_ibfk_2` FOREIGN KEY (`teacher_reg_no`) REFERENCES `teacher` (`reg_no`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `teacher_salary`
--
ALTER TABLE `teacher_salary`
  ADD CONSTRAINT `teacher_salary_ibfk_1` FOREIGN KEY (`teacher_reg_no`) REFERENCES `teacher` (`reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
