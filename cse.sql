-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 12:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_upload`
--

CREATE TABLE `book_upload` (
  `id` int(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `date_time` date NOT NULL,
  `pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_upload`
--

INSERT INTO `book_upload` (`id`, `semester`, `course_name`, `date_time`, `pdf`) VALUES
(4, '3rd Year 1st Semester', '', '2022-03-09', 'We are here to uplift you and your business.pdf'),
(5, '1st Year 2nd Semester', 'Databse Managment System', '2022-03-26', 'We are here to uplift you and your business.pdf'),
(6, '2nd Year 2nd Semester', 'Databse Managment System', '2022-03-26', 'We are here to uplift you and your business.pdf'),
(7, '1st Year 1st Semester', 'Introduction to Computer System', '2022-09-13', 'prity (1).pdf'),
(8, '1st Year 2nd Semester', 'Economics', '2022-09-13', 'prity.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(255) NOT NULL,
  `course_tittle` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_teacher` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_tittle`, `course_code`, `course_teacher`, `session`, `semester`) VALUES
(1, 'Data Structure', 'CSE 3001', 'Mizan Sir', '2017-2018', '1st Year 1st Semester'),
(2, 'Basic Structure', 'CSE 3002', 'Mizan Sir', '2017-2018', '1st Year 1st Semester'),
(3, 'Node Structure', 'CSE 3004', 'Mizan Sir', '2017-2018', '1st Year 1st Semester'),
(4, 'Python Structure', 'CSE 3004', 'Zasim Sir', '2017-2018', '1st Year 1st Semester'),
(5, 'React Structure', 'CSE 3006', 'Farid Sir', '2017-2018', '1st Year 1st Semester'),
(8, 'React Structure', 'CSE 2312', 'Farid Sir', '2014-2015', '2nd Year 2nd Semester'),
(9, 'React Structure', 'CSE 2312', 'Farid Sir', '2015-2016', '3rd Year 1st Semester'),
(10, 'React Structure', 'CSE 2312', 'Farid Sir', '2016-2017', '3rd Year 2nd Semester'),
(11, 'React Structure', 'CSE 2312', 'Farid Sir', '2016-2017', '4th Year 1st Semester'),
(12, 'React Structure', 'CSE 2312', 'Farid Sir', '2017-2018', '4th Year 2nd Semester'),
(13, 'React Structure', 'CSE 2312', 'Farid Sir', '2017-2018', '4th Year 2nd Semester'),
(14, 'React Structure', 'CSE 2312', 'Farid Sir', '2017-2018', '4th Year 2nd Semester'),
(15, 'React Structure', 'CSE 2312', 'Farid Sir', '2017-2018', '4th Year 2nd Semester'),
(16, 'React Structure', 'CSE 3006', 'Farid Sir', '2017-2018', '1st Year 1st Semester'),
(17, 'React Structure', 'CSE 3006', 'Farid Sir', '2018-2019', '1st Year 1st Semester'),
(18, 'React Structure', 'CSE 3006', 'Farid Sir', '2019-2020', '1st Year 1st Semester'),
(19, 'React Structure', 'CSE 3006', 'Farid Sir', '2020-2021', '1st Year 1st Semester'),
(20, 'React Structure', 'CSE 3006', 'Farid Sir', '2020-2021', '1st Year 1st Semester'),
(21, 'React Structure', 'CSE 2312', 'Farid Sir', '2014-2015', '2nd Year 2nd Semester'),
(22, 'Computer Architecture', 'CSE 1245', 'Mizanur Rahman', '2010-2011', '1st Year 2nd Semester'),
(23, 'Design and Analysis of Algorithm', 'cse 4678', 'Mizanur Rahman', '2010-2011', '4th Year 2nd Semester');

-- --------------------------------------------------------

--
-- Table structure for table `course_upload`
--

CREATE TABLE `course_upload` (
  `id` int(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_upload`
--

INSERT INTO `course_upload` (`id`, `semester`, `session`, `course`, `pdf`) VALUES
(1, '1st Year 1st Semester', '2010-2011', 'CSE 1234', 'FireShot Capture 017 - Adobe Acrobat extension for Google Chrome - helpx.adobe.com.pdf'),
(2, '3rd Year 1st Semester', '2017-2018', 'CSE 1234', 'CSE 2203 OS Cont 17-18 .pdf'),
(3, '3rd Year 1st Semester', '2017-2018', 'Databse Managment System', 'CSE 2203 OS Cont 17-18 .pdf');

-- --------------------------------------------------------

--
-- Table structure for table `final_pdf`
--

CREATE TABLE `final_pdf` (
  `id` int(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final_pdf`
--

INSERT INTO `final_pdf` (`id`, `semester`, `session`, `pdf`) VALUES
(1, '1st Year 1st Semester', '2016-2017', '1705029_ff.pdf'),
(2, '1st Year 1st Semester', '2016-2017', '1705029_ff.pdf'),
(3, '1st Year 2nd Semester', '2017-2018', '1705029_ff.pdf'),
(4, '1st Year 1st Semester', '2012-2013', '1705029_ff.pdf'),
(5, '1st Year 1st Semester', '2010-2011', 'CSE 2203 OS Cont 17-18 .pdf');

-- --------------------------------------------------------

--
-- Table structure for table `notice_upload`
--

CREATE TABLE `notice_upload` (
  `id` int(255) NOT NULL,
  `date_time` date NOT NULL,
  `pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_upload`
--

INSERT INTO `notice_upload` (`id`, `date_time`, `pdf`) VALUES
(6, '2022-03-10', 'RedLight.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `prv_qs_upload`
--

CREATE TABLE `prv_qs_upload` (
  `id` int(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prv_qs_upload`
--

INSERT INTO `prv_qs_upload` (`id`, `semester`, `session`, `pdf`) VALUES
(3, '2nd Year 1st Semester', '2008-2009', '2008-09 2nd year 1st.pdf'),
(4, '3rd Year 1st Semester', '2008-2009', '2008-09 3rd year 1st.pdf'),
(5, '3rd Year 2nd Semester', '2008-2009', '2008-09 3rd year 2nd.pdf'),
(6, '4th Year 1st Semester', '2008-2009', '2008-09 4th year 1st.pdf'),
(7, '4th Year 2nd Semester', '2008-2009', '2008-09 4th year 2nd.pdf'),
(8, '1st Year 2nd Semester', '2009-2010', '2009-10 1st year 2nd.pdf'),
(9, '2nd Year 2nd Semester', '2009-2010', '2009-10 2nd year 2nd.pdf'),
(10, '3rd Year 1st Semester', '2009-2010', '2009-10 3rd year 1st.pdf'),
(11, '3rd Year 2nd Semester', '2009-2010', '2009-10 3rd year 2nd.pdf'),
(12, '4th Year 1st Semester', '2009-2010', '2009-10 4th year 1st.pdf'),
(13, '4th Year 2nd Semester', '2009-2010', '2009-10 4th year 2nd.pdf'),
(14, '3rd Year 2nd Semester', '2010-2011', '2010-11  3rd year 2nd.pdf'),
(15, '1st Year 1st Semester', '2010-2011', '2010-11 1st year 1st.pdf'),
(16, '1st Year 2nd Semester', '2010-2011', '2010-11 1st year 2nd.pdf'),
(17, '2nd Year 1st Semester', '2010-2011', '2010-11 2nd year1st.pdf'),
(18, '2nd Year 2nd Semester', '2010-2011', '2010-11 2nd year 2nd.pdf'),
(19, '3rd Year 1st Semester', '2010-2011', '2010-11 3rd year 1st.pdf'),
(20, '4th Year 1st Semester', '2010-2011', '2010-11 4th year 1st.pdf'),
(21, '4th Year 2nd Semester', '2010-2011', '2010-11 4th year 2nd.pdf'),
(22, '1st Year 1st Semester', '2011-2012', '2011-12 1st year 1st.pdf'),
(23, '1st Year 2nd Semester', '2011-2012', '2011-12 1st year 2nd .pdf'),
(24, '2nd Year 1st Semester', '2011-2012', '2011-12 2nd year 1st.pdf'),
(25, '2nd Year 2nd Semester', '2011-2012', '2011-12 2nd year 2nd se.pdf'),
(26, '3rd Year 1st Semester', '2011-2012', '2011-12 3rd year 1st.pdf'),
(27, '3rd Year 2nd Semester', '2011-2012', '2011-12 3rd year 2nd.pdf'),
(28, '4th Year 1st Semester', '2011-2012', '2011-12 4th year 1st.pdf'),
(29, '4th Year 2nd Semester', '2011-2012', '2011-12 4th year 2nd.pdf'),
(30, '1st Year 1st Semester', '2012-2013', '2012-13 1st year 1st.pdf'),
(31, '1st Year 2nd Semester', '2012-2013', '2012-13 1st year 2nd.pdf'),
(32, '2nd Year 1st Semester', '2012-2013', '2012-13 2nd year 1st.pdf'),
(33, '2nd Year 1st Semester', '2012-2013', '2012-13 2nd year 1st.pdf'),
(34, '2nd Year 2nd Semester', '2012-2013', '2012-13 2nd year2nd.pdf'),
(35, '3rd Year 1st Semester', '2012-2013', '2012-13 3rd year1st.pdf'),
(36, '3rd Year 2nd Semester', '2012-2013', '2012-13 3rd year 2nd.pdf'),
(37, '4th Year 1st Semester', '2012-2013', '2012-13 4th year 1st.pdf'),
(38, '1st Year 1st Semester', '2013-2014', '2013-14 1st year1st.pdf'),
(39, '1st Year 2nd Semester', '2013-2014', '2013-14 1st year 2nd.pdf'),
(40, '2nd Year 1st Semester', '2013-2014', '2013-14 2nd year1st.pdf'),
(41, '2nd Year 2nd Semester', '2013-2014', '2013-14 2ndyear2nd.pdf'),
(42, '3rd Year 1st Semester', '2013-2014', '2013-14 3rd year 1st.pdf'),
(43, '3rd Year 2nd Semester', '2013-2014', '2013-14 3rd year 2nd.pdf'),
(44, '4th Year 1st Semester', '2013-2014', '2013-14 4th year 1st.pdf'),
(45, '4th Year 2nd Semester', '2013-2014', '2013-14 4th year 2st.pdf'),
(46, '1st Year 1st Semester', '2014-2015', '2014-15 1st year1st.pdf'),
(47, '1st Year 2nd Semester', '2014-2015', '2014-15 1st year 2nd.pdf'),
(48, '2nd Year 2nd Semester', '2014-2015', '2014-15 2ndyear2nd.pdf'),
(49, '3rd Year 1st Semester', '2014-2015', '2014-15 3rd year 1st.pdf'),
(50, '1st Year 1st Semester', '2015-2016', '2015-16 1st year 1st.pdf'),
(51, '2nd Year 1st Semester', '2015-2016', '2015-16 2nd year 1st.pdf'),
(52, '2nd Year 2nd Semester', '2015-2016', '2015-16 2nd year 2nd.pdf'),
(53, '1st Year 1st Semester', '2016-2017', '2016-17 1st year 1st.pdf'),
(54, '2nd Year 1st Semester', '2016-2017', '2016-17 2nd year 1st.pdf'),
(55, '1st Year 2nd Semester', '2016-2017', '2016-17 1st year 2nd.pdf'),
(56, '1st Year 1st Semester', '2017-2018', '2017-18 1st year 1st.pdf'),
(57, '1st Year 2nd Semester', '2017-2018', '2017-18 1st year 2nd.pdf'),
(58, '2nd Year 1st Semester', '2017-2018', '2017-18 2nd year 1st.pdf'),
(59, '1st Year 1st Semester', '2018-2019', '2018-19 1st year 1st.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `routine_upload`
--

CREATE TABLE `routine_upload` (
  `id` int(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routine_upload`
--

INSERT INTO `routine_upload` (`id`, `semester`, `session`, `pdf`) VALUES
(1, '1st Year 1st Semester', '2018-2019', '1705029_ff.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus_pdf`
--

CREATE TABLE `syllabus_pdf` (
  `id` int(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllabus_pdf`
--

INSERT INTO `syllabus_pdf` (`id`, `semester`, `session`, `pdf`) VALUES
(8, '1st Year 1st Semester', '2011-2012', 'RedLight.pdf'),
(9, '1st Year 1st Semester', '2017-2018', 'RedLight.pdf'),
(10, '1st Year 1st Semester', '2013-2014', 'RedLight.pdf'),
(11, 'Select Your Semester', 'Select Your Sessions', 'RedLight.pdf'),
(12, '1st Year 2nd Semester', '2011-2012', 'RedLight.pdf'),
(13, 'Select Your Semester', 'Select Your Sessions', 'RedLight.pdf'),
(14, '3rd Year 1st Semester', '2012-2013', 'RedLight.pdf'),
(15, 'Select Your Semester', 'Select Your Sessions', 'RedLight.pdf'),
(16, 'Select Your Semester', 'Select Your Sessions', 'RedLight.pdf'),
(17, 'Select Your Semester', 'Select Your Sessions', 'RedLight.pdf'),
(18, 'Select Your Semester', 'Select Your Sessions', '3_2 Course Plan.pdf'),
(19, '4th Year 2nd Semester', '2015-2016', '4-2 Course Distribution.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `std_id` int(255) NOT NULL,
  `std_reg` int(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `progm` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `phn_num` int(255) NOT NULL,
  `hall_name` varchar(255) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `std_id`, `std_reg`, `dept`, `progm`, `session`, `email_address`, `phn_num`, `hall_name`, `password`, `status`) VALUES
(79, 262562, 262626236, 'Computer Science & Engineering', 'BSc (Hons.)2', '2012-2013', 'aryaery@gmail.com', 235235, 'Shaheed Moktar Elahi Hall', '23523523523523523', '1'),
(80, 2147483647, 373637347, 'Computer Science & Engineering', 'M.S.S.', '2021-2022', 'aerh@gmail.com', 2352352, 'Select Your Hall', '5252523523523', '1'),
(81, 123456, 2147483647, 'Select Your Department', 'B.A.(Hons.)', '2014-2015', 'aedgsrh@gmail.com', 1245789654, 'Sheikh Fazilatunnesa Mujib Hall', '123456', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(255) NOT NULL,
  `std_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `permanent_addr` varchar(255) NOT NULL,
  `present_addr` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `ssc_name` varchar(255) NOT NULL,
  `ssc_board` varchar(255) NOT NULL,
  `ssc_school` varchar(255) NOT NULL,
  `ssc_roll` int(255) NOT NULL,
  `ssc_year` int(255) NOT NULL,
  `ssc_gpa` int(255) NOT NULL,
  `hsc_name` varchar(255) NOT NULL,
  `hsc_board` varchar(255) NOT NULL,
  `hsc_college` varchar(255) NOT NULL,
  `hsc_roll` int(255) NOT NULL,
  `hsc_year` int(255) NOT NULL,
  `hsc_gpa` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_upload`
--
ALTER TABLE `book_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_upload`
--
ALTER TABLE `course_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_pdf`
--
ALTER TABLE `final_pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_upload`
--
ALTER TABLE `notice_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prv_qs_upload`
--
ALTER TABLE `prv_qs_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routine_upload`
--
ALTER TABLE `routine_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus_pdf`
--
ALTER TABLE `syllabus_pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_upload`
--
ALTER TABLE `book_upload`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `course_upload`
--
ALTER TABLE `course_upload`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `final_pdf`
--
ALTER TABLE `final_pdf`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice_upload`
--
ALTER TABLE `notice_upload`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prv_qs_upload`
--
ALTER TABLE `prv_qs_upload`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `routine_upload`
--
ALTER TABLE `routine_upload`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `syllabus_pdf`
--
ALTER TABLE `syllabus_pdf`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
