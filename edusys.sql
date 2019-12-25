-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 04:02 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edusys`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--
CREATE DATABASE edusys;
USE edusys;

CREATE TABLE `tblcategory` (
  `ID_Cat` int(11) NOT NULL,
  `Cat_Name` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID_Cat`, `Cat_Name`) VALUES
(1, 'Information Technology'),
(2, 'Business'),
(3, 'Graphic Design'),
(4, 'Joker');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `ID_Course` int(11) NOT NULL,
  `Course_Name` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `ID_Cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`ID_Course`, `Course_Name`, `Description`, `ID_Cat`) VALUES
(1, 'Database', 'Introduction database', 1),
(4, 'Vision\'s theory', 'General Knowledge Block about Graphic Design', 3),
(5, 'Computing Research Project', 'Conduct research about field which you\'ll choose', 1),
(22, 'Joker', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbltopic`
--

CREATE TABLE `tbltopic` (
  `ID_Topic` int(11) NOT NULL,
  `Title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `Description` varchar(200) CHARACTER SET utf8 NOT NULL,
  `Deadline` varchar(200) NOT NULL,
  `ID_Course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltopic`
--

INSERT INTO `tbltopic` (`ID_Topic`, `Title`, `Description`, `Deadline`, `ID_Course`) VALUES
(3, 'Assignment 1', 'Submit Assignment 1', '25/12/2019', 1),
(4, 'Assignment 2', 'Submit Assignment 2', '04/01/2020', 1),
(5, 'Research Proposal', 'Complete research proposal', '02/11/2019', 5),
(6, 'Literature review', 'Complete secondary research % primary research', '03/11/2019', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `iduser` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Phone` varchar(11) CHARACTER SET utf8 NOT NULL,
  `Address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`iduser`, `Name`, `Email`, `Phone`, `Address`, `username`, `password`, `Role`) VALUES
(1, 'Nguyen Pham Thai Son', 'jokerboy1412@gmail.com', '0355832199', 'Ngo 68 Cau Giay', 'sonnpt', '$2y$10$j/MQPBmmI.v1g', 'Admin'),
(2, 'Vu Manh Tien ', 'tienvmgch@fpt.edu.vn', '0367087904', 'Ngo 155 Cau Giay', 'tienvm', '$2y$10$iQaMxw4BFW5XN', 'Trainer'),
(7, 'Nguyen Bat Khai', 'khainb@gmail.com', '0964695956', '111 Ngo 68 Cau Giay', 'khaibk', '$2y$10$cFxsxOLoeL40U', 'Trainer'),
(8, 'Pham Thanh Tung', 'tungpt@gmail.com', '0369529518', 'Ha Noi', 'tungpt', '$2y$10$oCo5GGX39YELC', 'Trainee'),
(9, 'Nguyen Van Luong', 'luongvl@gmail.com', '0355843721', '111 Ngo 68 Cau Giay', 'luongvl', '$2y$10$jBbYf26jJ1n/g', 'Trainer'),
(16, 'Joker', 'sonnptgch17274@fpt.edu.vn', '0333333333', 'Ha Noi', 'jokerboy', '$2y$10$4Dg3nyzunk6U9', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID_Cat`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`ID_Course`),
  ADD KEY `ID_Cat` (`ID_Cat`);

--
-- Indexes for table `tbltopic`
--
ALTER TABLE `tbltopic`
  ADD PRIMARY KEY (`ID_Topic`),
  ADD KEY `ID_Course` (`ID_Course`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `ID_Course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbltopic`
--
ALTER TABLE `tbltopic`
  MODIFY `ID_Topic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD CONSTRAINT `tblcourse_ibfk_1` FOREIGN KEY (`ID_Cat`) REFERENCES `tblcategory` (`ID_Cat`);

--
-- Constraints for table `tbltopic`
--
ALTER TABLE `tbltopic`
  ADD CONSTRAINT `tbltopic_ibfk_1` FOREIGN KEY (`ID_Course`) REFERENCES `tblcourse` (`ID_Course`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
