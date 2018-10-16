-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 02:26 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `1st`
--

CREATE TABLE `1st` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `year` tinytext NOT NULL,
  `1` tinytext NOT NULL,
  `2` tinytext NOT NULL,
  `3` tinytext NOT NULL,
  `4` tinytext NOT NULL,
  `5` tinytext NOT NULL,
  `6` tinytext NOT NULL,
  `7` tinytext NOT NULL,
  `8` tinytext NOT NULL,
  `9` tinytext NOT NULL,
  `10` tinytext NOT NULL,
  `11` tinytext NOT NULL,
  `12` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `1st`
--

INSERT INTO `1st` (`id`, `student_id`, `name`, `year`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`) VALUES
(2, 1003, 'عمرو سعد', '2015', 'م', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل'),
(3, 1002, 'محمود حسن', '2015', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل'),
(4, 1006, 'محمد فهمي', '2015', 'م', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل'),
(5, 1005, 'أحمد أمين', '2016', 'ج.ج', 'م', 'م', 'م', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل'),
(6, 1004, 'وليد مسعود', '2015', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل'),
(34, 1001, 'محمد عصام', '2015', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل', 'ل');

-- --------------------------------------------------------

--
-- Table structure for table `2nd`
--

CREATE TABLE `2nd` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `year` tinytext NOT NULL,
  `1` tinytext NOT NULL,
  `2` tinytext NOT NULL,
  `3` tinytext NOT NULL,
  `4` tinytext NOT NULL,
  `5` tinytext NOT NULL,
  `6` tinytext NOT NULL,
  `7` tinytext NOT NULL,
  `8` tinytext NOT NULL,
  `9` tinytext NOT NULL,
  `10` tinytext NOT NULL,
  `11` tinytext NOT NULL,
  `12` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `2nd`
--

INSERT INTO `2nd` (`id`, `student_id`, `name`, `year`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`) VALUES
(1, 1001, 'محمد عصام', '2016', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج'),
(2, 1003, 'عمرو سعد', '2016', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج'),
(3, 1002, 'محمود حسن', '2016', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج'),
(4, 1006, 'محمد فهمي', '2016', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج'),
(5, 1005, 'أحمد أمين', '2016', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج'),
(14, 1004, 'وليد مسعود', '2016', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج', 'ج');

-- --------------------------------------------------------

--
-- Table structure for table `3rd_cs`
--

CREATE TABLE `3rd_cs` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `year` tinytext NOT NULL,
  `1` tinytext NOT NULL,
  `2` tinytext NOT NULL,
  `3` tinytext NOT NULL,
  `4` tinytext NOT NULL,
  `5` tinytext NOT NULL,
  `6` tinytext NOT NULL,
  `7` tinytext NOT NULL,
  `8` tinytext NOT NULL,
  `9` tinytext NOT NULL,
  `10` tinytext NOT NULL,
  `11` tinytext NOT NULL,
  `12` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `3rd_cs`
--

INSERT INTO `3rd_cs` (`id`, `student_id`, `name`, `year`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`) VALUES
(1, 1006, 'محمد فهمي', '2017', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج'),
(2, 1005, 'أحمد أمين', '2017', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج'),
(3, 1004, 'وليد مسعود', '2017', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج');

-- --------------------------------------------------------

--
-- Table structure for table `3rd_is`
--

CREATE TABLE `3rd_is` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `year` tinytext NOT NULL,
  `1` tinytext NOT NULL,
  `2` tinytext NOT NULL,
  `3` tinytext NOT NULL,
  `4` tinytext NOT NULL,
  `5` tinytext NOT NULL,
  `6` tinytext NOT NULL,
  `7` tinytext NOT NULL,
  `8` tinytext NOT NULL,
  `9` tinytext NOT NULL,
  `10` tinytext NOT NULL,
  `11` tinytext NOT NULL,
  `12` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `3rd_is`
--

INSERT INTO `3rd_is` (`id`, `student_id`, `name`, `year`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`) VALUES
(1, 1001, 'محمد عصام', '2017', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج'),
(2, 1003, 'عمرو سعد', '2017', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج'),
(3, 1002, 'محمود حسن\r\n', '2017', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج', 'ج.ج');

-- --------------------------------------------------------

--
-- Table structure for table `4th_cs`
--

CREATE TABLE `4th_cs` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `year` tinytext NOT NULL,
  `1` tinytext NOT NULL,
  `2` tinytext NOT NULL,
  `3` tinytext NOT NULL,
  `4` tinytext NOT NULL,
  `5` tinytext NOT NULL,
  `6` tinytext NOT NULL,
  `7` tinytext NOT NULL,
  `8` tinytext NOT NULL,
  `9` tinytext NOT NULL,
  `10` tinytext NOT NULL,
  `11` tinytext NOT NULL,
  `12` tinytext NOT NULL,
  `13` tinytext NOT NULL,
  `14` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `4th_cs`
--

INSERT INTO `4th_cs` (`id`, `student_id`, `name`, `year`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`) VALUES
(1, 1006, 'محمد فهمي', '2018', 'م', 'م', 'م', 'م', 'م', '', 'م', 'م', 'م', 'م', 'م', 'م', 'م', '90'),
(2, 1005, 'أحمد أمين', '2018', 'م', 'م', 'م', 'م', 'م', '', 'م', 'م', 'م', 'م', 'م', 'ج', 'م', '99.89'),
(3, 1004, 'وليد مسعود', '2018', 'م', 'م', 'م', 'م', 'م', '', 'م', 'م', 'م', 'م', 'م', 'م', 'م', '90');

-- --------------------------------------------------------

--
-- Table structure for table `4th_is`
--

CREATE TABLE `4th_is` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `year` tinytext NOT NULL,
  `1` tinytext NOT NULL,
  `2` tinytext NOT NULL,
  `3` tinytext NOT NULL,
  `4` tinytext NOT NULL,
  `5` tinytext NOT NULL,
  `6` tinytext NOT NULL,
  `7` tinytext NOT NULL,
  `8` tinytext NOT NULL,
  `9` tinytext,
  `10` tinytext NOT NULL,
  `11` tinytext NOT NULL,
  `12` tinytext NOT NULL,
  `13` tinytext NOT NULL,
  `14` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `4th_is`
--

INSERT INTO `4th_is` (`id`, `student_id`, `name`, `year`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`) VALUES
(1, 1001, 'محمد عصام', '2018', 'م', 'م', 'م', 'م', 'م', '', 'م', 'م', 'م', 'م', 'م', 'م', 'م', '87.95'),
(2, 1003, 'عمرو سعد', '2018', 'م', 'م', 'م', 'م', 'م', '', 'م', 'م', 'م', 'م', 'م', 'م', 'م', '99.04'),
(3, 1002, 'محمود حسن', '2018', 'م', 'م', 'م', 'م', 'م', '', 'م', 'م', 'م', 'م', 'م', 'م', 'م', '85.01');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `passcode` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `birth_day` varchar(200) NOT NULL,
  `birth_month` varchar(200) NOT NULL,
  `birth_year` varchar(200) NOT NULL,
  `birth_place` varchar(200) NOT NULL,
  `graduation_year` varchar(200) NOT NULL,
  `graduation_month` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `dept`, `nationality`, `birth_day`, `birth_month`, `birth_year`, `birth_place`, `graduation_year`, `graduation_month`) VALUES
(1001, 'محمد عصام', 'نظم معلومات', 'مصري', '31', '01', '1996', 'القاهرة', '2018', 'مايو'),
(1002, 'محمود حسن', 'نظم معلومات', 'مصري', '15', '02', '1996', 'الاسكندرية', '2018', 'مايو'),
(1003, 'عمرو سعد', 'نظم معلومات', 'مصري', '14', '06', '1996', 'قنا', '2018', 'مايو'),
(1004, 'وليد مسعود', 'علوم حاسب', 'مصري', '13', '04', '1996', 'أسيوط', '2018', 'مايو'),
(1005, 'أحمد أمين', 'علوم حاسب', 'مصري', '03', '06', '1996', 'حلوان', '2018', 'مايو'),
(1006, 'محمد فهمي', 'علوم حاسب', 'مصري', '11', '06', '1996', 'بورسعيد', '2018', 'مايو');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1st`
--
ALTER TABLE `1st`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `2nd`
--
ALTER TABLE `2nd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `3rd_cs`
--
ALTER TABLE `3rd_cs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `3rd_is`
--
ALTER TABLE `3rd_is`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `4th_cs`
--
ALTER TABLE `4th_cs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `4th_is`
--
ALTER TABLE `4th_is`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1st`
--
ALTER TABLE `1st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `2nd`
--
ALTER TABLE `2nd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `3rd_cs`
--
ALTER TABLE `3rd_cs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `3rd_is`
--
ALTER TABLE `3rd_is`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `4th_cs`
--
ALTER TABLE `4th_cs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `4th_is`
--
ALTER TABLE `4th_is`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `1st`
--
ALTER TABLE `1st`
  ADD CONSTRAINT `1st_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `2nd`
--
ALTER TABLE `2nd`
  ADD CONSTRAINT `2nd_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `3rd_cs`
--
ALTER TABLE `3rd_cs`
  ADD CONSTRAINT `3rd_cs_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `3rd_is`
--
ALTER TABLE `3rd_is`
  ADD CONSTRAINT `3rd_is_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `4th_cs`
--
ALTER TABLE `4th_cs`
  ADD CONSTRAINT `4th_cs_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `4th_is`
--
ALTER TABLE `4th_is`
  ADD CONSTRAINT `4th_is_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
