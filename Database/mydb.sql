-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2015 at 08:49 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE IF NOT EXISTS `allowance` (
  `Allowance_Num` int(11) NOT NULL,
  `Allowance_Amount` decimal(9,2) NOT NULL,
  `Allowance_Remark` varchar(255) NOT NULL,
  `Scholar_Num` int(11) NOT NULL,
  `School_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `benefit`
--

CREATE TABLE IF NOT EXISTS `benefit` (
  `Benefit_Num` int(11) NOT NULL,
  `Benefit_Amount` decimal(9,2) NOT NULL,
  `Benefit_Scholar_Share` decimal(9,2) NOT NULL,
  `Tuition_Num` int(11) NOT NULL,
  `Reg_Num` int(11) NOT NULL,
  `Scholar_Num` int(11) NOT NULL,
  `School_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `failures`
--

CREATE TABLE IF NOT EXISTS `failures` (
  `Fail_Num` int(11) NOT NULL,
  `Fail_Subject` varchar(45) NOT NULL,
  `Fail_Units` int(11) NOT NULL,
  `Reg_Num` int(11) NOT NULL,
  `Scholar_Num` int(11) NOT NULL,
  `School_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `Grade_Rec_Num` int(11) NOT NULL,
  `Grade_School_Year` varchar(10) NOT NULL,
  `Grade_Term` varchar(10) NOT NULL,
  `Grade_Value` varchar(5) NOT NULL,
  `Scholar_Num` int(11) NOT NULL,
  `School_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `misc_fee`
--

CREATE TABLE IF NOT EXISTS `misc_fee` (
  `Misc_Fee_Num` int(11) NOT NULL,
  `Misc_Fee_Amount` decimal(9,2) NOT NULL,
  `Misc_Fee_Remark` varchar(255) NOT NULL,
  `Reg_Num` int(11) NOT NULL,
  `Scholar_Num` int(11) NOT NULL,
  `School_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE IF NOT EXISTS `refund` (
  `Refund_CR_Num` int(11) NOT NULL,
  `Refund_Amount` decimal(9,2) NOT NULL,
  `Tuition_Num` int(11) NOT NULL,
  `Reg_Num` int(11) NOT NULL,
  `Scholar_Num` int(11) NOT NULL,
  `School_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Reg_Num` int(11) NOT NULL,
  `Reg_School_Year` varchar(10) NOT NULL,
  `Reg_Term` varchar(10) NOT NULL,
  `Reg_Units` int(10) NOT NULL,
  `Scholar_Num` int(11) NOT NULL,
  `School_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE IF NOT EXISTS `remarks` (
  `Remark_Num` int(11) NOT NULL,
  `Remark_Date` date NOT NULL,
  `Remark_Content` varchar(255) NOT NULL,
  `Scholar_Num` int(11) NOT NULL,
  `School_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scholar`
--

CREATE TABLE IF NOT EXISTS `scholar` (
  `Scholar_Num` int(11) NOT NULL,
  `Scholar_Last_Name` varchar(45) NOT NULL,
  `Scholar_First_Name` varchar(45) NOT NULL,
  `Scholar_Middle_Initial` char(1) NOT NULL,
  `Scholar_Gender` char(1) NOT NULL,
  `Scholar_Year_Level` int(1) NOT NULL,
  `Scholar_Course` varchar(10) NOT NULL,
  `Scholar_Area` varchar(10) NOT NULL,
  `Scholar_Cash_Card_Num` int(30) NOT NULL,
  `Scholar_Contact_Nums` varchar(110) NOT NULL,
  `Scholar_Email` varchar(45) NOT NULL,
  `Scholar_Scholarship_Type` varchar(100) NOT NULL,
  `School_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `School_Num` int(11) NOT NULL,
  `School_Name` varchar(100) NOT NULL,
  `School_Acronym` varchar(10) NOT NULL,
  `School_Registrar_Last_Name` varchar(45) NOT NULL,
  `School_Registrar_First_Name` varchar(45) NOT NULL,
  `School_Registrar_Contact_Num` varchar(45) NOT NULL,
  `School_Registrar_Email` varchar(45) NOT NULL,
  `School_Grade_Denomination` varchar(5) NOT NULL,
  `School_Grade_Equivalent_Lower` decimal(5,2) NOT NULL,
  `School_Grade_Equivalent_Upper` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuition`
--

CREATE TABLE IF NOT EXISTS `tuition` (
  `Tuition_Num` int(11) NOT NULL,
  `Tuition_Amount` decimal(9,2) NOT NULL,
  `Tuition_Sponsor` varchar(45) NOT NULL,
  `Reg_Num` int(11) NOT NULL,
  `Scholar_Num` int(11) NOT NULL,
  `School_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowance`
--
ALTER TABLE `allowance`
  ADD PRIMARY KEY (`Allowance_Num`), ADD KEY `Scholar_Num` (`Scholar_Num`), ADD KEY `School_Num` (`School_Num`);

--
-- Indexes for table `benefit`
--
ALTER TABLE `benefit`
  ADD PRIMARY KEY (`Benefit_Num`), ADD KEY `Tuition_Num` (`Tuition_Num`), ADD KEY `Reg_Num` (`Reg_Num`), ADD KEY `Scholar_Num` (`Scholar_Num`), ADD KEY `School_Num` (`School_Num`);

--
-- Indexes for table `failures`
--
ALTER TABLE `failures`
  ADD PRIMARY KEY (`Fail_Num`), ADD KEY `Reg_Num` (`Reg_Num`), ADD KEY `Scholar_Num` (`Scholar_Num`), ADD KEY `School_Num` (`School_Num`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`Grade_Rec_Num`), ADD KEY `Scholar_Num` (`Scholar_Num`), ADD KEY `School_Num` (`School_Num`);

--
-- Indexes for table `misc_fee`
--
ALTER TABLE `misc_fee`
  ADD PRIMARY KEY (`Misc_Fee_Num`), ADD KEY `Scholar_Num` (`Scholar_Num`,`School_Num`), ADD KEY `School_Num` (`School_Num`), ADD KEY `Scholar_Num_2` (`Scholar_Num`), ADD KEY `Reg_Num` (`Reg_Num`);

--
-- Indexes for table `refund`
--
ALTER TABLE `refund`
  ADD PRIMARY KEY (`Refund_CR_Num`), ADD KEY `Tuition_Num` (`Tuition_Num`), ADD KEY `Reg_Num` (`Reg_Num`), ADD KEY `Scholar_Num` (`Scholar_Num`), ADD KEY `School_Num` (`School_Num`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Reg_Num`), ADD KEY `Scholar_Num` (`Scholar_Num`), ADD KEY `School_Num` (`School_Num`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`Remark_Num`), ADD KEY `School_Num` (`School_Num`), ADD KEY `Scholar_Num` (`Scholar_Num`,`School_Num`);

--
-- Indexes for table `scholar`
--
ALTER TABLE `scholar`
  ADD PRIMARY KEY (`Scholar_Num`), ADD UNIQUE KEY `School_Num` (`School_Num`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`School_Num`);

--
-- Indexes for table `tuition`
--
ALTER TABLE `tuition`
  ADD PRIMARY KEY (`Tuition_Num`), ADD KEY `Reg_Num` (`Reg_Num`), ADD KEY `Scholar_Num` (`Scholar_Num`), ADD KEY `School_Num` (`School_Num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowance`
--
ALTER TABLE `allowance`
  MODIFY `Allowance_Num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `benefit`
--
ALTER TABLE `benefit`
  MODIFY `Benefit_Num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `failures`
--
ALTER TABLE `failures`
  MODIFY `Fail_Num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `Grade_Rec_Num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `misc_fee`
--
ALTER TABLE `misc_fee`
  MODIFY `Misc_Fee_Num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `refund`
--
ALTER TABLE `refund`
  MODIFY `Refund_CR_Num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Reg_Num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `Remark_Num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `Scholar_Num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `School_Num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tuition`
--
ALTER TABLE `tuition`
  MODIFY `Tuition_Num` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `allowance`
--
ALTER TABLE `allowance`
ADD CONSTRAINT `allowance_ibfk_1` FOREIGN KEY (`Scholar_Num`) REFERENCES `scholar` (`Scholar_Num`),
ADD CONSTRAINT `allowance_ibfk_2` FOREIGN KEY (`School_Num`) REFERENCES `school` (`School_Num`);

--
-- Constraints for table `benefit`
--
ALTER TABLE `benefit`
ADD CONSTRAINT `benefit_ibfk_1` FOREIGN KEY (`Tuition_Num`) REFERENCES `tuition` (`Tuition_Num`),
ADD CONSTRAINT `benefit_ibfk_2` FOREIGN KEY (`Reg_Num`) REFERENCES `registration` (`Reg_Num`),
ADD CONSTRAINT `benefit_ibfk_3` FOREIGN KEY (`Scholar_Num`) REFERENCES `scholar` (`Scholar_Num`),
ADD CONSTRAINT `benefit_ibfk_4` FOREIGN KEY (`School_Num`) REFERENCES `school` (`School_Num`);

--
-- Constraints for table `failures`
--
ALTER TABLE `failures`
ADD CONSTRAINT `failures_ibfk_1` FOREIGN KEY (`Reg_Num`) REFERENCES `registration` (`Reg_Num`),
ADD CONSTRAINT `failures_ibfk_2` FOREIGN KEY (`Scholar_Num`) REFERENCES `scholar` (`Scholar_Num`),
ADD CONSTRAINT `failures_ibfk_3` FOREIGN KEY (`School_Num`) REFERENCES `school` (`School_Num`);

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`Scholar_Num`) REFERENCES `scholar` (`Scholar_Num`),
ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`School_Num`) REFERENCES `school` (`School_Num`);

--
-- Constraints for table `misc_fee`
--
ALTER TABLE `misc_fee`
ADD CONSTRAINT `misc_fee_ibfk_1` FOREIGN KEY (`Reg_Num`) REFERENCES `registration` (`Reg_Num`),
ADD CONSTRAINT `misc_fee_ibfk_2` FOREIGN KEY (`Scholar_Num`) REFERENCES `scholar` (`Scholar_Num`),
ADD CONSTRAINT `misc_fee_ibfk_3` FOREIGN KEY (`School_Num`) REFERENCES `school` (`School_Num`);

--
-- Constraints for table `refund`
--
ALTER TABLE `refund`
ADD CONSTRAINT `refund_ibfk_1` FOREIGN KEY (`Tuition_Num`) REFERENCES `tuition` (`Tuition_Num`),
ADD CONSTRAINT `refund_ibfk_2` FOREIGN KEY (`Reg_Num`) REFERENCES `registration` (`Reg_Num`),
ADD CONSTRAINT `refund_ibfk_3` FOREIGN KEY (`Scholar_Num`) REFERENCES `scholar` (`Scholar_Num`),
ADD CONSTRAINT `refund_ibfk_4` FOREIGN KEY (`School_Num`) REFERENCES `school` (`School_Num`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`Scholar_Num`) REFERENCES `scholar` (`Scholar_Num`),
ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`School_Num`) REFERENCES `school` (`School_Num`);

--
-- Constraints for table `remarks`
--
ALTER TABLE `remarks`
ADD CONSTRAINT `remarks_ibfk_1` FOREIGN KEY (`School_Num`) REFERENCES `school` (`School_Num`),
ADD CONSTRAINT `remarks_ibfk_2` FOREIGN KEY (`Scholar_Num`) REFERENCES `scholar` (`Scholar_Num`);

--
-- Constraints for table `scholar`
--
ALTER TABLE `scholar`
ADD CONSTRAINT `scholar_ibfk_1` FOREIGN KEY (`School_Num`) REFERENCES `school` (`School_Num`);

--
-- Constraints for table `tuition`
--
ALTER TABLE `tuition`
ADD CONSTRAINT `tuition_ibfk_1` FOREIGN KEY (`Reg_Num`) REFERENCES `registration` (`Reg_Num`),
ADD CONSTRAINT `tuition_ibfk_2` FOREIGN KEY (`Scholar_Num`) REFERENCES `scholar` (`Scholar_Num`),
ADD CONSTRAINT `tuition_ibfk_3` FOREIGN KEY (`School_Num`) REFERENCES `school` (`School_Num`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
