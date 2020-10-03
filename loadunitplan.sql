-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 06:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loadunitplan`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `approve_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `instructor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `courseCode` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `listSubjects` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `dataStatus` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `executivePosition_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_group` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courseresidues`
--

CREATE TABLE `courseresidues` (
  `courseResidues_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `stu_NameSur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `stu_faculty` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `stu_major` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `stu_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `stu_year` int(1) NOT NULL,
  `stu_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `courseCode` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `subjectsType` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `listSubjects` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `semesterYear` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `executivePosition_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `degree_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `degree_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `executiveposition`
--

CREATE TABLE `executiveposition` (
  `executivePosition_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `executivePosition_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formteachexam`
--

CREATE TABLE `formteachexam` (
  `formTeachExam_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `semesterYear` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `courseCode` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `listSubjects` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `credit` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `stu_major` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bfCategoryGroup` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `bfCourseCode` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `bfListSubjects` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sec` int(1) NOT NULL,
  `teachingPeriod` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `stu_number` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tc_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hour` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `theory` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `practice` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `period` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `numTimeWeek` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `em_theory` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `em_Practice` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `em_numTime` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `em_place` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `em_note` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ef_theory` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ef_Practice` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ef_numTime` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `ef_place` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ef_note` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `executivePosition_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loadunit`
--

CREATE TABLE `loadunit` (
  `loadUnit_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `instructor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `categoryGroup` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `courseCode` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `listSubjects` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `credit` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `forceSelect` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sec` int(1) NOT NULL,
  `stu_major` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `stu_number` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `lecture` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `lab` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `executivePosition_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `major_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `major_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opencourse`
--

CREATE TABLE `opencourse` (
  `openCourse_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `openCourse_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `openCourse_category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `openCourse_group` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `openCourse_forceSelect` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `openCourse_courseCode` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `openCourse_listSubjects` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `openCourse_credit` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `openCourse_instructor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `executivePosition_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plancourse`
--

CREATE TABLE `plancourse` (
  `planCourse_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `planCourse_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `planCourse_category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `planCourse_group` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `planCourse_forceSelect` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `planCourse_courseCode` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `planCourse_listSubjects` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `planCourse_credit` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `course_instructor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `executivePosition_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `staff_prefix` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `staff_nameSur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `staff_position` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `staff_executivePosition` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `staff_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `staff_contactPlace` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `staff_internalPhone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `staff_sex` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `staff_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_ID`, `staff_prefix`, `staff_nameSur`, `staff_position`, `staff_executivePosition`, `staff_email`, `staff_contactPlace`, `staff_internalPhone`, `staff_sex`, `staff_password`) VALUES
('AC01', 'ดร.', 'อดิศักดิ์ อินทนา', 'อาจารย์', 'รักษาการในตำแหน่งรองคณบดีฝ่ายวิชาการ', 'adisak.i@phuket.psu.ac.th', '1405', '076-27(6711)', 'ชาย', 'Adisak_123'),
('AC02', 'ผศ.ดร.', 'อซีส นันทอมรพงศ์', 'ผู้ช่วยศาสตราจารย์', 'รักษาการในตำแหน่งรองคณบดีฝ่ายวิจัย บัณฑิตศึกษา และบริการวิชาการ', 'aziz.n@phuket.psu.ac.th', '1405', '076-27(6721)', 'ชาย', 'Aziz_123'),
('AC03', '', 'พัชรี เทพนิมิตร', 'อาจารย์', 'รักษาการในตำแหน่งผู้ช่วยคณบดีฝ่ายวิชาการ และ ผู้จัดการหลักสูตรวิศวกรรมคอมพิวเตอร์', 'phatcharee.th(at)phuket.psu.ac.th', '6603', '076-27(6557)', 'หญิง', 'Phatcharee_123'),
('AC04', 'ดร.', 'วศิมน พาณิชพัฒนกุล', 'อาจารย์', 'รักษาการในตำแหน่งผู้ช่วยคณบดี ฝ่ายเทคโนโลยีสารสนเทศ', 'wasimon.pa(at)phuket.psu.ac.th', '', '076-27(6558)', 'ชาย', 'Wasimon_123'),
('AC05', '', 'อยุทธย์ อินทรประดิษฐ์', 'อาจารย์', 'หัวหน้าหลักสูตร สาขาวิชาธุรกิจดิจิทัล', 'ayuth.i@phuket.psu.ac.th', '1102A', '076-27(6720)', 'ชาย', 'Ayuth_123'),
('AC06', 'ดร.', 'กฤตศิลป์ ศิลานนท์', 'อาจารย์', 'หัวหน้าหลักสูตร สาขาวิชาวิศวกรรมดิจิทัล', 'kittasil.s(at)phuket.psu.ac.th', '', '076-27(6555)', 'ชาย', 'Kittasil_123'),
('AC07', 'ดร.', 'นวนล ธีระอัมพรพันธุ์', 'อาจารย์', 'หัวหน้าหลักสูตร สาขาวิชาการคอมพิวเตอร์', 'nawanol.t(at)phuket.psu.ac.th', '1405', '076-27(6499)', 'ชาย', 'Nawanol_123'),
('SS01', '', 'สุวภัทร จินดา', 'นักวิชาการศึกษา', '', 'suwapat.j(at)phuket.psu.ac.th', 'สำนักงานคณบดีวิทยาลัยการคอมพิวเตอร์', '6117', 'หญิง', 'Suwaput_123'),
('SS02', '', 'เสาวนีย์ เพชรศรีสังข์', 'นักวิชาการอุดมศึกษา', '', 'saowanee.p(at)phuket.psu.ac.th', 'สำนักงานคณบดีวิทยาลัยการคอมพิวเตอร์', '6104', 'หญิง', 'Saowanee_123'),
('SS03', '', 'เกตุวดี ขอเจริญ', 'นักวิชาการอุดมศึกษา', '', 'ketwadee.k@phuket.psu.ac.th', 'สำนักงานคณบดีวิทยาลัยการคอมพิวเตอร์', '6121', 'หญิง', 'Ketwadee_123'),
('SS04', '', 'ฐิติมา วศินพัฒนวิศิษฎ์', 'นักวิชาการอุดมศึกษา', '', 'titima.v(at)phuket.psu.ac.th', 'สำนักงานคณบดีวิทยาลัยการคอมพิวเตอร์', '6120', 'หญิง', 'Titima_123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `stu_prefix` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `stu_nameSur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `stu_year` int(1) NOT NULL,
  `stu_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stu_major` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `stu_faculty` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_ID`, `stu_prefix`, `stu_nameSur`, `stu_year`, `stu_email`, `stu_major`, `stu_faculty`) VALUES
('6030213020', 'นางสาว', 'จุฬาลักษณ์ ธรรมเพชร', 4, 's6030213020@phuket.psu.ac.th', 'Software Engineering ', 'College of Computing'),
('6030213045', 'นางสาว', 'แพรวรุ่ง ปัญญานุกิจ', 4, 's6030213045@phuket.psu.ac.th', 'Software Engineering ', 'College of Computing');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjects_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `subjects_forceSelect` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subjects_courseCode` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `subjects_listSubjects` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `subjects_credit` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `category_ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`approve_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indexes for table `courseresidues`
--
ALTER TABLE `courseresidues`
  ADD PRIMARY KEY (`courseResidues_ID`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`degree_ID`);

--
-- Indexes for table `executiveposition`
--
ALTER TABLE `executiveposition`
  ADD PRIMARY KEY (`executivePosition_ID`);

--
-- Indexes for table `formteachexam`
--
ALTER TABLE `formteachexam`
  ADD PRIMARY KEY (`formTeachExam_ID`);

--
-- Indexes for table `loadunit`
--
ALTER TABLE `loadunit`
  ADD PRIMARY KEY (`loadUnit_ID`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`major_ID`);

--
-- Indexes for table `opencourse`
--
ALTER TABLE `opencourse`
  ADD PRIMARY KEY (`openCourse_ID`);

--
-- Indexes for table `plancourse`
--
ALTER TABLE `plancourse`
  ADD PRIMARY KEY (`planCourse_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_ID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjects_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
