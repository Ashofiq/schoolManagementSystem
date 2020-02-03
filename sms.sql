-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 06:55 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `student_id` varchar(25) NOT NULL,
  `month` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL,
  `monthly_fee` varchar(25) NOT NULL,
  `monthly_exam_fee` varchar(25) NOT NULL,
  `mid_exam_fee` varchar(25) NOT NULL,
  `final_exam_fee` varchar(25) NOT NULL,
  `library` varchar(25) NOT NULL,
  `admit` varchar(52) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `student_id`, `month`, `year`, `monthly_fee`, `monthly_exam_fee`, `mid_exam_fee`, `final_exam_fee`, `library`, `admit`) VALUES
(1, '1', 'january', '2017', '123', '30', '300', '500', '50', '1000'),
(2, '2', 'january', '2017', '', '', '', '', '', ''),
(3, '2', 'february', '2017', '', '', '', '', '', ''),
(7, '2017005', 'November', '2017', '234', '230', '500', '600', '700', '1000'),
(15, '20170012', 'November', '2017', '200', '300', '', '', '', ''),
(9, '2017006', 'september', '2017', '50', '50', '', '', '', ''),
(11, '20170010', 'November', '2017', '120', '300', '300', '500', '30', ''),
(12, '20170011', 'November', '2017', '200', '200', '300', '400', '20', '2'),
(13, '20170013', 'November', '2017', '300', '', '', '', '', ''),
(14, '2017009', 'November', '2017', '200', '', '', '', '', ''),
(17, '20170011', 'December', '2017', '200', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `student_name` varchar(25) NOT NULL,
  `student_id` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `day` varchar(25) NOT NULL,
  `month` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`student_name`, `student_id`, `status`, `day`, `month`, `year`) VALUES
('ahmad', '20170012', 'presant', '27', '11', '2017'),
('ahmad', '2017006', 'absent', '20', '11', 'November'),
('ahmad', '2017006', 'absent', '20', '11', 'November'),
('ahmad', '2017006', 'prasent', '20', '11', 'November'),
('ahmad', '2017006', 'absent', '20', '11', 'November'),
('ahmad', '2017006', 'absent', '20', '11', 'November'),
('ahmad', '2017006', 'absent', '20', '11', 'November'),
('ahmad', '2017006', 'absent', '20', '11', 'November'),
('ahmad', '2017006', 'absent', '21', '11', 'November'),
('ahmad', '20170021', 'Absent', '05', '12', '2017'),
('ahmad', '20170020', 'Absent', '05', '12', '2017'),
('ahmad', '20170019', 'Absent', '05', '12', '2017'),
('ahmad', '20170018', 'Absent', '05', '12', '2017'),
('ahmad', '20170017', 'Absent', '05', '12', '2017'),
('ahmad', '20170016', 'Absent', '05', '12', '2017'),
('ahmad', '20170015', 'Absent', '05', '12', '2017'),
('ahmad', '20170014', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'presant ', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170013', 'Absent', '05', '12', '2017'),
('ahmad', '20170012', 'presant', '27', '11', '2017'),
('ahmad', '20170012', 'presant', '27', '11', '2017'),
('ahmad', '20170012', 'presant', '27', '11', '2017'),
('ahmad', '20170012', 'presant', '27', '11', '2017'),
('ahmad', '20170012', 'presant', '27', '11', '2017'),
('ahmad', '20170012', 'absent', '26', '11', '2017'),
('ahmad', '20170012', 'presant', '26', '11', '2017'),
('ahmad', '20170012', 'presant', '26', '11', '2017'),
('ahmad', '20170012', 'presant', '26', '11', '2017'),
('ahmad', '20170012', 'presant', '26', '11', '2017'),
('ahmad', '20170012', 'absent', '26', '11', '2017'),
('ahmad', '20170012', 'presant', '26', '11', '2017'),
('ahmad', '20170012', 'presant', '26', '11', '2017'),
('ahmad', '20170012', 'presant', '26', '11', '2017'),
('ahmad', '20170012', 'presant', '27', '11', '2017'),
('ahmad', '20170012', 'absent', '26', '11', '2017'),
('ahmad', '20170012', 'absent', '26', '11', '2017'),
('ahmad', '20170012', 'absent', '26', '11', '2017'),
('ahmad', '20170012', 'absent', '26', '11', '2017'),
('ahmad', '20170012', 'absent', '26', '11', '2017'),
('mukit', '508589', 'presant ', '03', '04', '2018'),
('mukit', '508590', 'Absent', '03', '04', '2018'),
('mukit', '508591', 'presant ', '03', '04', '2018'),
('mukit', '508592', 'presant ', '03', '04', '2018'),
('mukit', '508593', 'presant ', '03', '04', '2018'),
('mukit', '508594', 'Absent', '03', '04', '2018'),
('mukit', '508595', 'presant ', '03', '04', '2018'),
('mukit', '508596', 'presant ', '03', '04', '2018'),
('mukit', '508597', 'presant ', '03', '04', '2018'),
('mukit', '508589', 'presant ', '03', '04', '2018'),
('mukit', '508590', 'presant ', '03', '04', '2018'),
('mukit', '508591', 'presant ', '03', '04', '2018'),
('mukit', '508592', 'presant ', '03', '04', '2018'),
('mukit', '508593', 'presant ', '03', '04', '2018'),
('mukit', '508589', 'presant ', '03', '04', '2018'),
('mukit', '508590', 'presant ', '03', '04', '2018'),
('mukit', '508591', 'presant ', '03', '04', '2018'),
('mukit', '508589', 'presant ', '03', '04', '2018'),
('mukit', '508590', 'presant ', '03', '04', '2018'),
('mukit', '508591', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'Absent', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018'),
('mukit', '508588', 'presant ', '03', '04', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `book_list`
--

CREATE TABLE `book_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `pdf` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_list`
--

INSERT INTO `book_list` (`id`, `name`, `author`, `pic`, `pdf`) VALUES
(1, 'golper boi', 'ahmad shofiq', 'shofiq.jpg', ''),
(3, 'ahmad shofiq', 'ahmad shofiq', 'iphone8_benjamingesking_main_1502349465364.jpg', ''),
(4, 'ahmad shofiq', 'ahmad shofiq', 'lecture 9.pdf', ''),
(5, 'ahmad shofiq', 'ahmad shofiq', '14203176_1155378184556301_5581939163455532280_n.jpg', 'Abdullah Saleh Robin (2).pdf'),
(6, 'dada', 'shofiq', '24991302_555644341440958_8850450989501449287_n.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `book_service`
--

CREATE TABLE `book_service` (
  `id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `entry_date` varchar(20) NOT NULL,
  `given_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_service`
--

INSERT INTO `book_service` (`id`, `day`, `month`, `year`, `name`, `address`, `phone`, `book_name`, `entry_date`, `given_date`) VALUES
(1, '28', '11', '17', 'ahmad shofiq', 'uttara, dhaka', '1767404822', 'golper boi', '28', '5 dec'),
(2, '29', '11', '17', 'ahmad shofiq', 'uttara, dhaka', '1767404822', 'golper boi', '29', '2017-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_code` varchar(25) NOT NULL,
  `class_teacher` varchar(25) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`, `class_code`, `class_teacher`, `description`) VALUES
(1, 'class one', '100', '2017t001', 'class one'),
(3, 'class two', '200', '2017t002', 'class two'),
(4, 'class three', '300', '2017t001', 'class  tree'),
(5, 'class four', '400', 'jhon doe', 'class four'),
(7, 'class five', '500', 'jhon doe', 'utfo'),
(8, 'class 6 ', '06', 'ahmad shofiq', 'kuegfpi24');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `prapok` varchar(25) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `type`, `prapok`, `subject`, `description`, `date`) VALUES
(7, 'Academic', 'All', 'sports', 'mid exam', '01-12-17'),
(9, 'Academic', 'Student', 'mid exam', 'mid exam', '22-11-17'),
(10, 'Academic', 'All', 'final exam', 'final exam date : 10-12-17', '30-11-17'),
(11, 'Academic', 'All', 'lekhom', 'tgfft7g8h7tg7', '30-11-17'),
(12, 'Academic', 'All', 'mikki ', 'mikki ', '21-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `student_id` varchar(10) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `class` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `bangla` varchar(20) NOT NULL,
  `english` varchar(20) NOT NULL,
  `math` varchar(20) NOT NULL,
  `science` varchar(20) NOT NULL,
  `social_science` varchar(20) NOT NULL,
  `islam` varchar(20) NOT NULL,
  `genaral_knowledge` varchar(20) NOT NULL,
  `art` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`student_id`, `exam_name`, `year`, `class`, `section`, `bangla`, `english`, `math`, `science`, `social_science`, `islam`, `genaral_knowledge`, `art`) VALUES
('2017005', '2nd mid', '2017', 'class one', 'A', '50', '50', '', '50', '40', '50', '50', '50'),
('2017006', '1st mid', '', 'class one', 'A', '50', '50', '60', '50', '40', '50', '50', '50'),
('2017007', '', '', 'class one', 'C', '50', '50', '70', '50', '40', '50', '50', '50'),
('2017009', '', '', 'class one', 'B', '50', '50', '80', '50', '40', '50', '50', '50'),
('20170010', '1st mid', '2017', 'class two', 'B', '50', '30', '', '80', '80', '80', '80', '90'),
('20170011', 'final', '2017', 'class one', 'A', '50', '60', '40', '80', '80', '80', '80', '80'),
('20170013', 'final', '2019', 'class two', 'B', '56', '67', '90', '80', '70', '78', '90', '89');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section` varchar(25) NOT NULL,
  `section_class` varchar(25) NOT NULL,
  `section_code` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `section_class`, `section_code`, `description`) VALUES
(1, 'A', 'class one', '100A', 'class one section A'),
(2, 'B', 'class one', '100B', 'section B'),
(3, 'C', 'class one', '300C', 'section c');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birth` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `father_name` varchar(25) NOT NULL,
  `mother_name` varchar(25) NOT NULL,
  `g_contract` varchar(25) NOT NULL,
  `g_email` varchar(25) NOT NULL,
  `address` varchar(200) NOT NULL,
  `class` varchar(25) NOT NULL,
  `section` varchar(25) NOT NULL,
  `student_id` varchar(25) NOT NULL,
  `last_school` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `gender`, `birth`, `phone`, `email`, `religion`, `pic`, `father_name`, `mother_name`, `g_contract`, `g_email`, `address`, `class`, `section`, `student_id`, `last_school`) VALUES
(7, 'ahofiq', 'shofiq', 'male', '11/22/2017', '1767404822', 'ahmadshofiq3@gmail.com', 'muslim', '', 'ali hasan', 'mother_name', '43242352', 'ahmadshofiq3@gmail.com', 'uttara, dhaka', 'class 2', 'B', '2017009', 'seu'),
(3, 'ahma', 'shofiq', 'male', '11/19/2017', '1767404822', 'ahmadshofiq3@gmail.com', 'muslim', '', 'ali hasan', 'mother_name', '43242352', 'ahmadshofiq3@gmail.com', 'uttara, dhaka', 'class1', 'A', '2017006', 'seu'),
(4, 'ahma', 'shofiq', 'male', '11/19/2017', '1767404822', 'ahmadshofiq3@gmail.com', 'muslim', '', 'ali hasan', 'mother_name', '43242352', 'ahmadshofiq3@gmail.com', 'uttara, dhaka', 'class1', 'A', '2017007', 'seu'),
(8, 'ahmad', 'shofiq', 'male', '11/19/2017', '1767404822', 'ahmadshofiq3@gmail.com', 'muslim', '', 'ali hasan', 'mother_name', '43242352', 'ahmadshofiq3@gmail.com', 'uttara, dhaka', 'class1', 'A', '20170011', 'seu'),
(6, 'ahma', 'shofiq', 'male', '11/19/2017', '1767404822', 'ahmadshofiq3@gmail.com', 'muslim', '', 'ali hasan', 'mother_name', '43242352', 'ahmadshofiq3@gmail.com', 'uttara, dhaka', 'class1', 'A', '2017008', 'seu'),
(9, 'Lekhon', 'function', 'male', '11/19/2017', '1767404822', 'ahmadshofiq3@gmail.com', 'muslim', '', 'ali hasan', 'mother_name', '43242352', 'ahmadshofiq3@gmail.com', 'uttara, dhaka', 'class1', 'A', '2017005', 'seu'),
(10, 'ahmad', 'shofiq', 'male', '11/03/2017', '1767404822', 'ahmadshofiq3@gmail.com', 'muslim', '23722682_1927248307591878_3648613984068906883_n.jpg', 'ali hasan', 'wrywry', '43242352', 'ahmadshofiq3@gmail.com', 'uttara, dhaka', 'class 1', '', '20170012', 'seu'),
(11, 'ahmad', 'shofiq', 'male', '12/15/2017', '1767404822', 'ahmadshofiq3@gmail.com', '-- Select --', 'ER DIAGRAM OF SCHOOL MANAGEMENT SYSTEM PROJECT REPORT.jpg', 'ali hasan', 'mother_name', '43242352', 'ahmadshofiq3@gmail.com', 'uttara, dhaka', 'class 2', 'B', '20170013', 'seu'),
(12, 'mukit', 'shofiq', 'male', '12/18/2017', '01767404822', 'ahmadshofiq3@gmail.com', 'Buddhism', '', 'ali hasan', 'mother_name', '43242352', 'ahmadshofiq3@gmail.com', 'uttara', 'class 1', '', '508588', 'seu');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `subject_code`, `class`, `teacher`, `description`, `section`) VALUES
(1, 'ART', 'ART', 'class four', 'ahmadshofiq', '											Desctiption\r\n											', 'A'),
(2, 'bangla', 'bangla', 'class two', 'ahmadshofiq', '											Desctiption\r\n											', 'B'),
(3, 'ART', 'ART', 'class three', 'ahmadshofiq', '											Desctiption\r\n											', 'B'),
(4, 'ART', 'ART', 'class two', 'jhondoe', '											Desctiption\r\n											', 'C'),
(5, 'ART', 'ART', 'class four', 'jhondoe', '											Desctiption\r\n											', 'A'),
(6, 'ART', 'ART', 'class one', 'jhondoe', '											Desctiption\r\n											', 'A'),
(7, 'ART', 'ART', 'class three', 'jhondoe', '											Desctiption\r\n											', 'A'),
(8, 'englist', 'eng', 'class two', 'ahmadshofiq', '											Desctiption\r\n											', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `teacher_id` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `birth` varchar(24) NOT NULL,
  `phone` varchar(24) NOT NULL,
  `email` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `address` varchar(25) NOT NULL,
  `highest_degree` varchar(25) NOT NULL,
  `other_degree` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `teacher_id`, `first_name`, `last_name`, `gender`, `birth`, `phone`, `email`, `religion`, `pic`, `address`, `highest_degree`, `other_degree`) VALUES
(1, '2017t001', 'ahmad', 'shofiq', 'male', '#birth', '1767404822', 'ahmadshofiq3@gmail.com', 'muslim', '', 'uttara, dhaka', 'phd', 'msc'),
(2, '2017t002', 'jhon', 'doe', 'male', '#birth', '1767404822', 'ahmadshofiq3@gmail.com', 'muslim', '', 'uttara, dhaka', 'phd', 'msc'),
(7, '2017t003', 'ahmad', 'shofiq', 'male', '#birth', '01767404822', 'ahmadshofiq3@gmail.com', 'muslim', '', 'uttara', 'phd', 'msc'),
(8, '2004226013', 'Mohiuddin', 'Zia', 'male', '11141982', '01819460417', '', 'muslim', '', '480 new dohsz', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(11) NOT NULL,
  `day` varchar(15) NOT NULL,
  `slot` varchar(25) NOT NULL,
  `class` varchar(25) NOT NULL,
  `section` varchar(25) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(25) NOT NULL,
  `class_room` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `day`, `slot`, `class`, `section`, `subject`, `teacher`, `class_room`) VALUES
(1, 'sunday', '09-10 AM', 'class1', 'A', 'bangla 1s paper', 'ahmad shofiq', '101'),
(14, 'friday', '09-10 AM', 'class2', 'B', 'bangla 1s paper', 'jhon doe', '102'),
(3, 'Tuesday', '11-12 PM', 'class one', 'C', 'bangla 1s paper', 'ahmad shofiq', '103'),
(5, 'Thursday', '10-11 AM', 'class two', 'A', 'bangla 1s paper', 'ahmad shofiq', '102'),
(6, 'saturday', '09-10 AM', 'class1', 'A', 'bangla 1s paper', 'ahmad shofiq', '101'),
(7, 'monday', '11-12 PM', 'class one', 'A', 'bangla 1s paper', 'ahmad shofiq', '102'),
(8, 'monday', '10-11 AM', 'class2', 'A', 'bangla 1s paper', 'ahmad shofiq', '103'),
(9, 'monday', '09-10 AM', 'class one', 'B', 'bangla 1s paper', 'ahmad shofiq', '102'),
(10, 'Tuesday', '09-10 AM', 'class1', 'A', 'english', 'ahmad shofiq', '102'),
(11, 'friday', '09-10 AM', 'class2', 'B', 'bangla 1s paper', 'jhon doe', '102'),
(12, 'friday', '09-10 AM', 'class2', 'B', 'bangla 1s paper', 'jhon doe', '102'),
(13, 'friday', '09-10 AM', 'class2', 'B', 'bangla 1s paper', 'jhon doe', '102'),
(15, 'Wednesday', '10-11 AM', 'class two', 'A', 'bangla', 'ahmad shofiq', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roll` (`student_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `book_list`
--
ALTER TABLE `book_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_service`
--
ALTER TABLE `book_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `book_list`
--
ALTER TABLE `book_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `book_service`
--
ALTER TABLE `book_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
