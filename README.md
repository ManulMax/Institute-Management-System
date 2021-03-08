# Group_Project-IMS-for-Vidarsha_MVC :computer:
Modified with MVC architecture


Necessary Data :page_facing_up:

Payment Gateway - payhere (not functioning)
SMS Gateway Account Informations

Login URL : http://gateway.greenline.lk
User ID : 102338 ( VidarshaEdu ) 
Username : vidarsha@greenline.lk
Password : vidarsha@7531
Date : 2020-08-28 04:34:12

____________________________________________________________________________________________________________________________________
Database - Sample data must be changed


-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2021 at 01:09 PM
-- Server version: 8.0.20
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

:o: replace utf8mb4_0900_ai_ci with utf8mb4_general_ci if not working :o:
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
(1, 1, '2021-01-05', 1),
(1, 1, '2021/01/24', 1),
(2, 1, '2021-01-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int NOT NULL AUTO_INCREMENT,
  `size` int DEFAULT NULL,
  `monthly_fee` int DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `subject_id` int DEFAULT NULL,
  `teacher_reg_no` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  KEY `teacher_reg_no` (`teacher_reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `size`, `monthly_fee`, `batch`, `subject_id`, `teacher_reg_no`) VALUES
(1, 75, 1000, '2021 A/L', 3, 1),
(2, 80, 1000, '2022 A/L', 3, 1),
(3, 50, 1000, '2023 A/L', 3, 1),
(4, 60, 1200, '2023 A/L', 3, 1),
(17, 50, 1000, 'Revision', 3, 1);

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
(1, 2, '2008'),
(2, 3, '2008'),
(2, 4, '2008'),
(3, 5, '2008'),
(4, 5, '2020-06-05');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `topic`, `date`, `class_id`, `result_sheet_id`) VALUES
(1, 'revision exam 1', NULL, 17, NULL),
(2, 'revision exam 2', '2021-01-17', 17, NULL),
(3, 'exam 1', '2021-01-12', 1, NULL),
(4, 'exam 2', '2021-01-19', 2, NULL),
(5, 'revision exam 3', '2021-01-21', 17, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
CREATE TABLE IF NOT EXISTS `fees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(15) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `class_id` int DEFAULT NULL,
  `stu_reg_no` int DEFAULT NULL,
  `income_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`),
  KEY `stu_reg_no` (`stu_reg_no`),
  KEY `income_id` (`income_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `date`, `amount`, `class_id`, `stu_reg_no`, `income_id`) VALUES
(1, '30/11/2020', 1000, 17, 1, NULL),
(2, '30/11/2020', 2000, 2, 1, NULL);

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
  `tel_no` int DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `DOB` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `qualifications` varchar(100) DEFAULT NULL,
  `teacher_id` int DEFAULT NULL,
  `reg_date` varchar(15) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`reg_no`),
  KEY `user_id` (`user_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paper_marker`
--

INSERT INTO `paper_marker` (`reg_no`, `name`, `tel_no`, `address`, `NIC`, `DOB`, `gender`, `email`, `qualifications`, `teacher_id`, `reg_date`, `user_id`) VALUES
(8, 'perera', 713515709, 'Horana', '123456009v', '2020-11-01', 'female', 'pereraa@gmail.com', 'A/L', NULL, NULL, 21),
(9, 'gamage', 713515709, 'Horana', '123456009v', '2020-11-01', 'male', 'pereraa@gmail.com', 'A/L', NULL, NULL, 22),
(16, 'isurika perera', 719736858, 'colombo', '', '', '', '2018is055@stu.ucsc.cmb.ac.lk', '', 1, NULL, 11),
(17, 'nimalll', 713515709, 'Horana', '123456009v', '2020-11-10', 'male', 'pereraa@gmail.com', 'A/L', 1, NULL, 20),
(21, 'nimnaka', 713515709, 'Horana', '123456009v', '', 'male', 'pereraa@gmail.com', 'A/L', 1, NULL, 41),
(22, 'Amasha', 713515709, 'Horana', '123456009v', '2020-11-02', 'female', 'pereraa@gmail.com', 'A/L', 1, NULL, 42);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `name` varchar(50) NOT NULL,
  `tel_no` int DEFAULT NULL,
  `stu_reg_no` int NOT NULL,
  PRIMARY KEY (`name`,`stu_reg_no`),
  KEY `stu_reg_no` (`stu_reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`name`, `tel_no`, `stu_reg_no`) VALUES
('aaaaaa', 245, 14),
('aaaaaa', 245, 15);

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_reset`
--
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
(1, 5, 'question blaaaaa', 'choice 1', 'choice 2', 'choice 3', 'choice 4', 'choice 5', 1),
(1, 17, 'q', 'q', 'q', 'q', 'q', 'q', 1),
(1, 19, 'y', 'y', 'y', 'y', 'y', 'y', 2),
(2, 19, 'p', 'p', 'p', 'p', 'p', 'p', 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(15) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `time_limit` varchar(20) DEFAULT NULL,
  `class_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `date`, `topic`, `time_limit`, `class_id`) VALUES
(1, NULL, 'My first quiz', '', 1),
(2, NULL, 'My first quiz', '30 minutes', 1),
(3, NULL, 'My second quiz', '30 minutes', 1),
(4, NULL, 'My third quiz', '30 minutes', 1),
(5, NULL, 'My  fourth quiz', '30 minutes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result_sheet`
--

DROP TABLE IF EXISTS `result_sheet`;
CREATE TABLE IF NOT EXISTS `result_sheet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(15) DEFAULT NULL,
  `teacher_reg_no` int DEFAULT NULL,
  `pm_reg_no` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_reg_no` (`teacher_reg_no`),
  KEY `pm_reg_no` (`pm_reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(15) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `teacher_reg_no` int DEFAULT NULL,
  `staff_reg_no` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_reg_no` (`teacher_reg_no`),
  KEY `staff_reg_no` (`staff_reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `type` varchar(2) DEFAULT NULL,
  `temp_date` varchar(30) DEFAULT NULL,
  `staff_reg_no` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`),
  KEY `hall_id` (`hall_id`),
  KEY `staff_reg_no` (`staff_reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `class_id`, `hall_id`, `day`, `start_time`, `end_time`, `start_date`, `type`, `temp_date`, `staff_reg_no`) VALUES
(1, 1, 3, 'Tuesday', '08:00', '11:00', '', 'P', NULL, 1),
(2, 2, 2, 'Monday', '10:00', '12:00', '', 'P', NULL, 1),
(4, 17, 4, 'Tuesday', '11:04', '14:04', '', 'P', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `reg_no` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `tel_no` int DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `DOB` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fixed_salary` int DEFAULT NULL,
  `acc_no` int DEFAULT NULL,
  `bank_name` varchar(30) DEFAULT NULL,
  `acc_type` varchar(20) DEFAULT NULL,
  `reg_date` varchar(15) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`reg_no`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`reg_no`, `fname`, `mname`, `lname`, `tel_no`, `address`, `NIC`, `DOB`, `gender`, `email`, `fixed_salary`, `acc_no`, `bank_name`, `acc_type`, `reg_date`, `user_id`) VALUES
(1, 'Induni', 'Ama', 'Wadduwage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `reg_no` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `tel_no` int DEFAULT NULL,
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
  PRIMARY KEY (`reg_no`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_no`, `fname`, `mname`, `lname`, `tel_no`, `address`, `NIC`, `DOB`, `gender`, `email`, `school`, `grade`, `stream`, `reg_date`, `image`, `user_id`) VALUES
(1, 'isurika', 'isurika', 'perera', 546, 'horana', '986800174v', '2020-09-10', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'taxila', 12, 'maths', NULL, 'person.JPG', 13),
(2, 'nitharshana', 'nitharshana', 'sathyamoorthy', 43464356, 'rdhj', '987654321v', '2020-10-13', 'female', 'cservjyjk', 'fdbj', 13, 'maths', NULL, '', 16);

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
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`),
  KEY `teacher_reg_no` (`teacher_reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `study_material`
--

INSERT INTO `study_material` (`id`, `heading`, `description`, `name`, `class_id`, `teacher_reg_no`) VALUES
(1, 'OOP - Inheritance', 'An introduction to Inheritance concept.', 'Lecture 10 - Inheritance.pdf', 1, 1),
(4, 'OOP - Polymorphysm', 'A description about polymorphysm', 'Lecture 11 - Polymorphism.pdf', 1, 1),
(5, 'OOP - Abstraction', 'Abstraction OOP concept', 'Lecture 12 - Abstraction.pdf', 1, 1),
(8, 'Packages', 'An introduction to java packages.', 'Lecture 14 - Packages.pdf', 2, 1),
(9, 'OOP - Encapsulation', 'Object oriented programming concepts', 'Lecture 13 - Encapsulation.pdf', 2, 1),
(23, 'OOP concepts', 'Introduction to OOP concepts', 'Lecture 9 - OOP Concepts.pdf', 1, 1),
(24, 'oop', 'oop concepts', 'Introduction to Java.pdf', 1, 1),
(25, 'java arrays', 'about array', '7.1 - Java Arrays.pdf', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'Combined maths'),
(2, 'Physics'),
(3, 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `reg_no` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `tel_no` int DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `DOB` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `qualifications` varchar(100) DEFAULT NULL,
  `subject_id` int DEFAULT NULL,
  `acc_no` int DEFAULT NULL,
  `bank_name` varchar(30) DEFAULT NULL,
  `acc_type` varchar(20) DEFAULT NULL,
  `reg_date` varchar(15) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`reg_no`),
  KEY `subject_id` (`subject_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`reg_no`, `fname`, `mname`, `lname`, `tel_no`, `address`, `NIC`, `DOB`, `gender`, `email`, `qualifications`, `subject_id`, `acc_no`, `bank_name`, `acc_type`, `reg_date`, `user_id`) VALUES
(1, 'Vinuri', 'Samalka', 'Piyathilake', 719876543, '155,Horana road,Panadura', '973456746V', '1998-05-17', 'female', 'vinuri@gmail.com', 'Bsc(Hons) Chemistry', 3, 1234, 'BOC', 'Savings', '2020-10-15', 1),
(2, 'subadra', 'hemamali', 'wijesekera', 713515709, 'Horana', '639806835V', NULL, NULL, 'subadrawi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 43);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_salary`
--

DROP TABLE IF EXISTS `teacher_salary`;
CREATE TABLE IF NOT EXISTS `teacher_salary` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(15) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `teacher_reg_no` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_reg_no` (`teacher_reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_salary`
--

INSERT INTO `teacher_salary` (`id`, `date`, `amount`, `teacher_reg_no`) VALUES
(1, '30/11/2020', 80000, 1),
(2, '31/12/2020', 85500, 1),
(3, '31/11/2020', 90500, 2);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`, `flag`) VALUES
(59, 'ww@stu.ucsc.cmb.ac.lk', '52b168dcc9b77f143ec22d89c576d87d', 'Student', 0),
(60, 'k5@stu.ucsc.cmb.ac.lk', 'f1db2109cd14c5285f2b125e441e60fb', 'Student', 0),
(61, 'k6@stu.ucsc.cmb.ac.lk', 'fb2626c8ccd867e63496475ec7c2689a', 'Student', 0);

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
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`teacher_reg_no`) REFERENCES `teacher` (`reg_no`),
  ADD CONSTRAINT `salary_ibfk_2` FOREIGN KEY (`staff_reg_no`) REFERENCES `staff` (`reg_no`);

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


____________________________________________________________________________________________________________________________________________________________

## Actual data set

**Institute Name - Vidarsha**
No of Halls - 4(Currently)
No of Teachers & subjects- 9(Currently)
No of Staff - 2
No of papermarkers -3 

**Teachers Name List -**
Padmika Godakanda
Nadeera Siriwardana
Dinusha Gamage
P. Harison
Deneth Viduranga
Weedika Widurinda
Sajith Deerasinghe
Kasun Perera
Sanath Kumara

**Subject List -**
Physics
Combine Maths - Applied
Combine Maths - Pure
ICT
Chemistry
SFT
ET
BST
General English

**Teacher And Subject-**
Padmika Godakanda - Physics
Nadeera Siriwardana - Combine Maths - Pure
Dinusha Gamage - Combine Maths - Applied
P. Harison - Chemistry
Deneth Viduranga - SFT
Weedika Widurinda - ICT
Sajith Deerasinghe - ET
Kasun Perera - BST
Sanath Kumara - General English

**Staff Name List -**
Sathis Sanju
Uthpala Ruwanara
