# Group_Project-IMS-for-Vidarsha_MVC :computer:
Modified with MVC architecture


Necessary Data :page_facing_up:
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`name`, `tel_no`, `stu_reg_no`) VALUES
('aaaaaa', 245, 14),
('aaaaaa', 245, 15),
('dsgvdfb', 25, 6),
('dvrtrfbjy', 4365, 2),
('k', 1111, 14),
('krrrrrr', 1111, 18),
('parent', 1234, 3),
('perera', 12345, 1),
('perera', 245, 7),
('perera', 245, 10),
('ppppppppp', 111, 16),
('rybffh', 245, 3),
('rybffh', 245, 5),
('rybffh', 245, 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

DROP TABLE IF EXISTS `password_reset`;
CREATE TABLE IF NOT EXISTS `password_reset` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(70) NOT NULL,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_no`, `quiz_id`, `ques`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `correct_ans`) VALUES
(1, 5, 'question blaaaaa', 'choice 1', 'choice 2', 'choice 3', 'choice 4', 'choice 5', 1),
(1, 6, '', '', '', '', '', '', 1),
(2, 6, '', '', '', '', '', '', 1),
(3, 6, 'r', 'r1', 'r2', 'r3', 'r4', 'r5', 1),
(1, 8, 'q', 'b', 'b', 'b', 'b', 'b', 1),
(2, 8, '2', 'b', 'b', 'b', 'b', 'b', 1),
(1, 12, '', 'answer 1', 'answer 2', 'answer 3', 'answer 4', 'answer 5', 1),
(2, 12, '', 'c1', 'c2', 'c3', 'c4', 'c5', 1),
(1, 13, 'ques1', 'ch1', 'ch2', 'ch3', 'ch4', 'ch5', 1),
(2, 13, 'ques2', 'choice1', 'choice2', 'choice3', 'choice4', 'choice5', 1),
(1, 14, 'blaa ques', 'blaa', 'blaa', 'blaa', 'blaa', 'blaa', 1),
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `date`, `topic`, `time_limit`, `class_id`) VALUES
(1, NULL, 'My first quiz', '', 1),
(2, NULL, 'My first quiz', '30 minutes', 1),
(3, NULL, 'My second quiz', '30 minutes', 1),
(4, NULL, 'My third quiz', '30 minutes', 1),
(5, NULL, 'My  fourth quiz', '30 minutes', 1),
(6, NULL, '', '', 1),
(7, NULL, '', '', 1),
(8, NULL, 'OOP quiz', '30 minutes', 1),
(9, NULL, 'OOP quiz', '30 minutes', 1),
(10, NULL, 'OOP quiz 2', '30 minutes', 1),
(11, NULL, '', '', 1),
(12, NULL, 'OOP quiz 3', '30 minutes', 1),
(13, NULL, 'OOP quiz 4', '45 minutes', 1),
(14, NULL, 'blaa quiz', '45 minutes', 1),
(15, NULL, 'OOP quiz', '30 minutes', 1),
(16, NULL, 'OOP quiz', '30 minutes', 1),
(17, NULL, 'q', '45 minutes', 1),
(18, NULL, '', '', 1),
(19, NULL, 'ttt', '35 minutes', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_no`, `fname`, `mname`, `lname`, `tel_no`, `address`, `NIC`, `DOB`, `gender`, `email`, `school`, `grade`, `stream`, `reg_date`, `image`, `user_id`) VALUES
(1, 'isurika', 'isurika', 'perera', 546, 'horana', '986800174v', '2020-09-10', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'taxila', 12, 'maths', NULL, 'person.JPG', 13),
(2, 'nitharshana', 'nitharshana', 'sathyamoorthy', 43464356, 'rdhj', '987654321v', '2020-10-13', 'female', 'cservjyjk', 'fdbj', 13, 'maths', NULL, '', 16),
(3, 'isurika', 'perera', 'perera', 235, 'colombo', '989898987v', '2020-10-01', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'ersvh', 13, 'dvjh', NULL, '', 15),
(4, 'isurika', 'perera', 'perera', 235, 'colombo', '989898987v', '2020-10-01', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'ersvh', 13, 'dvjh', NULL, '', 13),
(5, 'isurika', 'perera', 'perera', 346, 'colombo', '989890087v', '2020-10-14', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'ersvh', 13, 'dvjh', NULL, 'background1.jpg', 13),
(6, 'isurika', '', 'perera', 758, 'colombo', '12', '2020-11-06', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'sdrgv', 1, 'fbxsBf', NULL, 'download.png', 13),
(7, 'c', 'c', 'c', 346, 'colombo', '986805555v', '2020-11-01', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'c', 4, 'c', NULL, 'download.png', 13),
(8, 'c', 'c', 'c', 346, 'colombo', '986805555v', '2020-11-01', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'c', 4, 'c', NULL, 'download.png', 13),
(9, 'c', 'c', 'c', 346, 'colombo', '986805555v', '2020-11-01', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'c', 4, 'c', NULL, 'download.png', 13),
(10, 'isurika', 'isssss', 'perera', 346, 'colombo', '12345V', '2020-11-04', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'ersvh', 1, 'dvjh', NULL, 'pizza-hut-logo-symbol-food-png-favpng-0g11uiPLcBE1nV4uLQxLxN71j.jpg', 13),
(11, 'isurika', 'isssss', 'perera', 346, 'colombo', '12345V', '2020-11-04', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'ersvh', 1, 'dvjh', NULL, 'pizza-hut-logo-symbol-food-png-favpng-0g11uiPLcBE1nV4uLQxLxN71j.jpg', 13),
(12, 'isurika perera', NULL, NULL, 719736858, 'colombo', '980000174v', '2020-11-02', 'female', '2018is055@stu.ucsc.cmb.ac.lk', 'ersvh', 4, 'dvjh', NULL, 'duck.JPG', 11),
(14, 'isurikaaaaaaaaaa', NULL, NULL, 719736858, 'colombo', '222222222v', '2020-12-01', 'female', NULL, NULL, NULL, NULL, NULL, NULL, 55),
(15, 'isurikrrrrrr', NULL, NULL, 719736858, 'colombo', '33333333v', '2020-12-01', 'female', 'ipipipip@stu.ucsc.cmb.ac.lk', 'ersvh', NULL, NULL, NULL, NULL, 56),
(16, 'w', NULL, NULL, 719736858, 'colombo', '777777777v', '2020-12-08', 'female', 'ww@stu.ucsc.cmb.ac.lk', 'zzz', 4, 'dvjh', NULL, '1607623448413.jpg', 59),
(17, 'k', NULL, NULL, 719736858, 'colombo', '222222222v', '2020-12-22', 'female', 'k5@stu.ucsc.cmb.ac.lk', 'k', 12, 'k', NULL, '1output.JPG', 60),
(18, 'k', NULL, NULL, 719736858, 'colombo', '909090v', '2020-12-22', 'female', 'k6@stu.ucsc.cmb.ac.lk', 'k', 12, 'k', NULL, '1output.JPG', 61);

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`, `flag`) VALUES
(1, 'isurikaperera.hip@gmail.com', '3d2172418ce305c7d16d4b05597c6a59', 'Teacher', 1),
(2, 'nitharshana@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 'Staff', 1),
(3, 'kamal1234', '0000', 'Paper Marker', NULL),
(4, 'isurikaaa', '1111', 'Paper Marker', 1),
(5, 'tdvth', '3454', 'Paper Marker', NULL),
(6, 'servg', '123456789v', 'Paper Marker', NULL),
(7, 'siri@gmail.com', '123456009v', 'Paper Marker', NULL),
(8, 'sirisena@gmail.com', '987654321V', 'Paper Marker', NULL),
(9, 'garfield@gmail.com', '650000000V', 'Paper Marker', NULL),
(10, '111', '11111111V', 'Paper Marker', NULL),
(11, '2018is055@stu.ucsc.cmb.ac.lk', 'bcbe3365e6ac95ea2c0343a2395834dd', 'Paper Marker', 1),
(12, 'blaaaa@gmail.com', NULL, 'Paper Marker', NULL),
(13, '2018is055@stu.ucsc.cmb.ac', '698d51a19d8a121ce581499d7b701668', 'Paper Marker', NULL),
(14, 'amasha', '985066345v', 'Teacher', NULL),
(15, 'isurika@gmail.com', 'f1901d6d6423fbb9fc8dafc3127b2270', 'Student', 1),
(16, 'cservjyjk', NULL, 'student', NULL),
(17, '2018is055@stu.ucsc.cmb.ac.lk', 'c483f6ce851c9ecd9fb835ff7551737c', 'student', NULL),
(18, '2018is055@stu.ucsc.cmb.ac.lk', 'c483f6ce851c9ecd9fb835ff7551737c', 'student', NULL),
(19, '2018is055@stu.ucsc.cmb.ac.lk', 'c483f6ce851c9ecd9fb835ff7551737c', 'student', NULL),
(20, 'nimal@gmail.com', NULL, 'Paper Marker', NULL),
(21, 'perera@gmail.com', NULL, 'Paper Marker', NULL),
(22, 'sevjsrdyvj@gmail.com', 'f55ac18c29ea39a1e71cdcc0bdc2caa2', 'Paper Marker', NULL),
(23, 'sevjsrdyvj@gmail.com', 'f55ac18c29ea39a1e71cdcc0bdc2caa2', 'Paper Marker', 1),
(24, 'pm', 'bcbe3365e6ac95ea2c0343a2395834dd', 'Paper Marker', 1),
(25, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 1),
(26, 'admin', 'admin', 'Admin', 1),
(27, '2018is055@stu.ucsc.cmb.ac.lk', 'c483f6ce851c9ecd9fb835ff7551737c', 'student', NULL),
(28, 'a', NULL, 'student', NULL),
(29, 'a', NULL, 'student', NULL),
(30, 'b', NULL, 'student', NULL),
(31, 'b', NULL, 'student', NULL),
(35, '2018is055@stu.ucsc.cmb.ac.lk', 'c483f6ce851c9ecd9fb835ff7551737c', 'Student', 0),
(39, 'vdhbx@gmail.com', 'fe7f71d0f87c199c2883338525b44567', 'Paper Marker', 0),
(41, 'nimnaka@gmail.com', 'f55ac18c29ea39a1e71cdcc0bdc2caa2', 'Paper Marker', 0),
(42, 'amasha@gmail.com', 'f55ac18c29ea39a1e71cdcc0bdc2caa2', 'Paper Marker', 0),
(43, 'subadra@gmail.com', '2dd90c5d1fbd111bd9f88c159cf1110d', 'Teacher', 0),
(44, 'dinusha@gmail.com', '3dd975ccb84597f3b969ac1577417dcf', 'Teacher', 0),
(45, '2018is055@stu.ucsc.cmb.ac.lk', 'e700ded18d0f052a98564c3e692a00e5', 'Student', 0),
(46, '2018is055@stu.ucsc.cmb.ac.lk', 'f57fa9a49fd42040677c08d23bbb8689', 'Student', 0),
(47, '2018is055@stu.ucsc.cmb.ac.lk', 'f57fa9a49fd42040677c08d23bbb8689', 'Student', 0),
(55, 'ipipip@stu.ucsc.cmb.ac.lk', 'f1db2109cd14c5285f2b125e441e60fb', 'Student', 0),
(56, 'ipipipip@stu.ucsc.cmb.ac.lk', 'a1371f60c121df1432a991ada29ff106', 'Student', 0),
(57, 'ipipipipip@stu.ucsc.cmb.ac.lk', 'c5c59aa8ba910c298c89e4857c4c5913', 'Student', 0),
(58, 'pppppp@stu.ucsc.cmb.ac.lk', 'c40969f245afc04dffd870246511be53', 'Student', 0),
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

