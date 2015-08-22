-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2015 at 11:58 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smfoundation`
--
CREATE DATABASE IF NOT EXISTS `smfoundation` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `smfoundation`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_3` (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Linda', '5ZxLqHr3NrpD96XosPaJvkquMdma2POj', '$2y$13$j2Bey/H8GYuSzsVJQtxkZ.sYPrX69Oy62qEzxuWbREUy7u8N7zuTe', NULL, 'linda@email.com', 10, 1438510152, 1438510152),
(2, 'Flor', '9COEl899D0k8WNiZ7C3KUkX7BgsSL9uG', '$2y$13$LiCwYatkMhpG7YnSsLnkd.zriKvXpSXQAUOsgJl93cPA0RjBpuQfW', NULL, 'flor@email.com', 10, 1438510177, 1438510177),
(3, 'Ling', 'dSIVX2VwQFrzSHIX8Ck1NZwLKfsn6DHC', '$2y$13$ZyXnORVTkGph/jN1Px0arOQtp.nzLvK.MboZOlcAIsUPpsy1F9VYS', NULL, 'ling@email.com', 10, 1438510211, 1438510211),
(4, 'Kathy', 'C9LlLZsiKkuNldCSiGBRvXGLo6GW9noP', '$2y$13$.4vNOUnWgdkTMZ25ymYy4uj9XuCWE6SyxzoemJsjMd065X9fK/gTu', NULL, 'kathy@email.com', 10, 1438510237, 1438510237),
(5, 'Val', 'GM_-v58ipO9VMBMF4YuyeDSSwB0OGOgF', '$2y$13$wa35mZEzMdSvpe44RRtoROd0ufcxjDkR5EX9HR1W0mp86z2YOaS5a', NULL, 'val@email.com', 10, 1438510359, 1438510359),
(6, 'Thess', 'jSgB2sVXDLf6ATZXfvdWbgOJwwhVvrw2', '$2y$13$V8wZzZywj7o9tWq4BLjMg.ds6J8Z9aGR52FoHxu0hycKNMzxb5s3e', NULL, 'thess@email.com', 10, 1438510400, 1438510400),
(7, 'Greg', '9zMPSPaDLQE6xuZ2e76YDblgRbKcY_LU', '$2y$13$BT1VZzs4l5cMLHrdH4XxyObMWwnvQysIO/uv/RG7ke6EAq4/iOe4K', NULL, 'greg@email.com', 10, 1438510438, 1438510438),
(8, 'Cath', '0tFtCeicMdNZWt2RYsqTIWpbp8Ot4DOE', '$2y$13$XHDaStvrKp.0lLRsMzDua.XnBQKi8s/LZWMkT0Sf1XLrPxQdDQfsu', NULL, 'cath@email.com', 10, 1438510471, 1438510471);

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE IF NOT EXISTS `allowance` (
  `allowance_area` enum('NCR','Provincial') NOT NULL,
  `allowance_amount` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`allowance_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE IF NOT EXISTS `deduction` (
  `deduction_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) NOT NULL,
  `deduction_date` date DEFAULT NULL,
  `deduction_amount` decimal(9,2) DEFAULT NULL,
  `deduction_remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`deduction_id`,`scholar_scholar_id`,`scholar_school_school_id`),
  KEY `fk_deduction_scholar1_idx` (`scholar_scholar_id`,`scholar_school_school_id`),
  KEY `scholar_school_school_id` (`scholar_school_school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `equivalence`
--

CREATE TABLE IF NOT EXISTS `equivalence` (
  `equivalence_id` int(11) NOT NULL,
  `school_school_id` int(11) NOT NULL,
  `equivalence_numerical_grade` decimal(5,2) DEFAULT NULL,
  `equivalence_letter_grade` varchar(10) DEFAULT NULL,
  `equivalence_percentile_lower` decimal(5,2) DEFAULT NULL,
  `equivalence_percentile_upper` decimal(5,2) DEFAULT NULL,
  `equivalence_school_rating` varchar(45) DEFAULT NULL,
  `equivalence_foundation_rating` enum('PASS','FAIL') DEFAULT NULL,
  PRIMARY KEY (`equivalence_id`,`school_school_id`),
  KEY `fk_equivalence_school1_idx` (`school_school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `grade_id` int(11) NOT NULL,
  `subject_subject_id` int(11) NOT NULL,
  `subject_scholar_scholar_id` int(11) NOT NULL,
  `subject_scholar_school_school_id` int(11) NOT NULL,
  `grade_school_year_start` int(11) DEFAULT NULL,
  `grade_school_year_end` int(11) DEFAULT NULL,
  `grade_raw_grade` varchar(45) DEFAULT NULL,
  `grade_approval_status` enum('Not Approved','Approved') DEFAULT 'Not Approved',
  `grade_approved_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`grade_id`,`subject_subject_id`,`subject_scholar_scholar_id`,`subject_scholar_school_school_id`),
  KEY `fk_grade_subject1_idx` (`subject_subject_id`,`subject_scholar_scholar_id`,`subject_scholar_school_school_id`),
  KEY `subject_scholar_scholar_id` (`subject_scholar_scholar_id`),
  KEY `subject_scholar_school_school_id` (`subject_scholar_school_school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `incentive`
--

CREATE TABLE IF NOT EXISTS `incentive` (
  `incentive_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) NOT NULL,
  `scholar_allowance_allowance_area` enum('NCR','Provincial') NOT NULL,
  `incentive_amount` decimal(9,2) DEFAULT NULL,
  `incentive_remark` varchar(255) DEFAULT NULL,
  `incentive_date` date DEFAULT NULL,
  PRIMARY KEY (`incentive_id`,`scholar_scholar_id`,`scholar_school_school_id`,`scholar_allowance_allowance_area`),
  KEY `fk_incentive_scholar1_idx` (`scholar_scholar_id`,`scholar_school_school_id`,`scholar_allowance_allowance_area`),
  KEY `scholar_school_school_id` (`scholar_school_school_id`),
  KEY `scholar_allowance_allowance_area` (`scholar_allowance_allowance_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1436093153),
('m130524_201442_init', 1436093154);

-- --------------------------------------------------------

--
-- Table structure for table `optionalwork`
--

CREATE TABLE IF NOT EXISTS `optionalwork` (
  `optionalwork_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) NOT NULL,
  `optionalwork_location` varchar(100) DEFAULT NULL,
  `optionalwork_start_date` date DEFAULT NULL,
  `optionalwork_end_date` date DEFAULT NULL,
  PRIMARY KEY (`optionalwork_id`,`scholar_scholar_id`,`scholar_school_school_id`),
  KEY `fk_optionalwork_scholar1_idx` (`scholar_scholar_id`,`scholar_school_school_id`),
  KEY `scholar_school_school_id` (`scholar_school_school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scholar`
--

CREATE TABLE IF NOT EXISTS `scholar` (
  `scholar_id` int(11) NOT NULL,
  `school_school_id` int(11) NOT NULL,
  `scholar_first_name` varchar(100) DEFAULT NULL,
  `scholar_middle_name` varchar(100) DEFAULT NULL,
  `scholar_last_name` varchar(100) DEFAULT NULL,
  `scholar_gender` enum('Male','Female') DEFAULT NULL,
  `scholar_address` varchar(255) DEFAULT NULL,
  `scholar_course` varchar(100) DEFAULT NULL,
  `scholar_graduate_status` enum('Graduated','Not Graduated') DEFAULT 'Not Graduated',
  `scholar_year_level` int(11) DEFAULT NULL,
  `scholar_contact_email` varchar(100) DEFAULT NULL,
  `scholar_contact_number` varchar(100) DEFAULT NULL,
  `scholar_allowance_status` enum('Granting','Withheld') DEFAULT 'Granting',
  `scholar_cash_card_number` varchar(45) DEFAULT NULL,
  `scholar_type` enum('SMFI','My Scholar A','Kabayan Scholar','My Scholar B','ICA Grant Scholar') DEFAULT NULL,
  `scholar_sponsor` varchar(100) DEFAULT NULL,
  `allowance_allowance_area` enum('NCR','Provincial') NOT NULL,
  PRIMARY KEY (`scholar_id`,`school_school_id`,`allowance_allowance_area`),
  KEY `fk_scholar_school_idx` (`school_school_id`),
  KEY `fk_scholar_allowance1_idx` (`allowance_allowance_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(100) DEFAULT NULL,
  `school_area` varchar(45) DEFAULT NULL,
  `school_address` varchar(255) DEFAULT NULL,
  `school_contact_emails` varchar(100) DEFAULT NULL,
  `school_contact_numbers` varchar(100) DEFAULT NULL,
  `school_vendor_code` char(10) DEFAULT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) NOT NULL,
  `subject_term` int(11) DEFAULT NULL,
  `subject_name` varchar(100) DEFAULT NULL,
  `subject_units` decimal(4,2) DEFAULT NULL,
  `subject_taken_status` enum('Not Taken','Taken','Failed') DEFAULT 'Not Taken',
  `subject_approval_status` enum('Not Approved','Approved') DEFAULT 'Not Approved',
  `subject_approved_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`subject_id`,`scholar_scholar_id`,`scholar_school_school_id`),
  KEY `fk_subject_scholar1_idx` (`scholar_scholar_id`,`scholar_school_school_id`),
  KEY `scholar_school_school_id` (`scholar_school_school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tuition`
--

CREATE TABLE IF NOT EXISTS `tuition` (
  `tuition_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) NOT NULL,
  `tuition_term` int(11) DEFAULT NULL,
  `tuition_school_year_start` int(11) DEFAULT NULL,
  `tuition_school_year_end` int(11) DEFAULT NULL,
  `tuition_enrollment_date` date DEFAULT NULL,
  `tuition_amount` decimal(9,2) DEFAULT NULL,
  `tuition_paid_status` enum('Paid','Not Paid') DEFAULT NULL,
  `tuition_payment_date` date DEFAULT NULL,
  PRIMARY KEY (`tuition_id`,`scholar_scholar_id`,`scholar_school_school_id`),
  KEY `fk_tuition_scholar1_idx` (`scholar_scholar_id`,`scholar_school_school_id`),
  KEY `scholar_school_school_id` (`scholar_school_school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `upload_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) NOT NULL,
  `upload_form` varchar(100) DEFAULT NULL,
  `upload_file_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`upload_id`,`scholar_scholar_id`,`scholar_school_school_id`),
  KEY `fk_upload_scholar1_idx` (`scholar_scholar_id`,`scholar_school_school_id`),
  KEY `scholar_school_school_id` (`scholar_school_school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_3` (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'scholar', 'Y_OYGTahIQ0tqFf0o5a4jjDSeXEofOld', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'me@email.com', 10, 1436426903, 1436426903),
(3, 'scholar2', 'kgJz_-7RaOwWQpjrUrV1QsenhrKAgFr8', '$2y$13$RRQyqJjUYmqZ2H2vtiNNouPE5pD04UQ3h6x2so6vIqOXtxOPuXGDO', NULL, 'scholar@email.com', 10, 1436766072, 1436766072),
(4, 'cindyC', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'cindyC@gmail.com', 10, 0, 0),
(5, 'allonaA', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'allonaA@gmail.com', 10, 0, 0),
(6, 'louiseT', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'louiseT@gmail.com', 10, 0, 0),
(7, 'kimG', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'kim@gmail.com', 10, 0, 0),
(8, 'isabelaS', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'isabelas@gmail.com', 10, 0, 0),
(9, 'kimberlyG', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'kimberlyG@gmail.com', 10, 0, 0),
(10, 'camilleS', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'camilleS@gmail.com', 10, 0, 0),
(11, 'fayeR ', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'fayeR@gmail.com', 10, 0, 0),
(12, 'rotherB', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'rotherB@gmail.com', 10, 0, 0),
(13, 'katrinaA', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'katrinaA@gmail.com', 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `withholding`
--

CREATE TABLE IF NOT EXISTS `withholding` (
  `withholding_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) NOT NULL,
  `scholar_allowance_allowance_area` enum('NCR','Provincial') NOT NULL,
  `withholding_start_date` date DEFAULT NULL,
  `withholding_end_date` date DEFAULT NULL,
  `withholding_remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`withholding_id`,`scholar_scholar_id`,`scholar_school_school_id`,`scholar_allowance_allowance_area`),
  KEY `fk_withholding_scholar1_idx` (`scholar_scholar_id`,`scholar_school_school_id`,`scholar_allowance_allowance_area`),
  KEY `scholar_school_school_id` (`scholar_school_school_id`),
  KEY `scholar_allowance_allowance_area` (`scholar_allowance_allowance_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deduction`
--
ALTER TABLE `deduction`
  ADD CONSTRAINT `deduction_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `scholar` (`school_school_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `deduction_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_deduction_scholar1` FOREIGN KEY (`scholar_scholar_id`, `scholar_school_school_id`) REFERENCES `scholar` (`scholar_id`, `school_school_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `equivalence`
--
ALTER TABLE `equivalence`
  ADD CONSTRAINT `fk_equivalence_school1` FOREIGN KEY (`school_school_id`) REFERENCES `school` (`school_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_ibfk_3` FOREIGN KEY (`subject_scholar_school_school_id`) REFERENCES `subject` (`scholar_school_school_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_grade_subject1` FOREIGN KEY (`subject_subject_id`, `subject_scholar_scholar_id`, `subject_scholar_school_school_id`) REFERENCES `subject` (`subject_id`, `scholar_scholar_id`, `scholar_school_school_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`subject_subject_id`) REFERENCES `subject` (`subject_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `grade_ibfk_2` FOREIGN KEY (`subject_scholar_scholar_id`) REFERENCES `subject` (`scholar_scholar_id`) ON UPDATE CASCADE;

--
-- Constraints for table `incentive`
--
ALTER TABLE `incentive`
  ADD CONSTRAINT `incentive_ibfk_3` FOREIGN KEY (`scholar_allowance_allowance_area`) REFERENCES `scholar` (`allowance_allowance_area`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_incentive_scholar1` FOREIGN KEY (`scholar_scholar_id`, `scholar_school_school_id`, `scholar_allowance_allowance_area`) REFERENCES `scholar` (`scholar_id`, `school_school_id`, `allowance_allowance_area`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `incentive_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `incentive_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `scholar` (`school_school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `optionalwork`
--
ALTER TABLE `optionalwork`
  ADD CONSTRAINT `optionalwork_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `scholar` (`school_school_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_optionalwork_scholar1` FOREIGN KEY (`scholar_scholar_id`, `scholar_school_school_id`) REFERENCES `scholar` (`scholar_id`, `school_school_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `optionalwork_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE;

--
-- Constraints for table `scholar`
--
ALTER TABLE `scholar`
  ADD CONSTRAINT `fk_scholar_allowance1` FOREIGN KEY (`allowance_allowance_area`) REFERENCES `allowance` (`allowance_area`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_scholar_school` FOREIGN KEY (`school_school_id`) REFERENCES `school` (`school_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `scholar` (`school_school_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_subject_scholar1` FOREIGN KEY (`scholar_scholar_id`, `scholar_school_school_id`) REFERENCES `scholar` (`scholar_id`, `school_school_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tuition`
--
ALTER TABLE `tuition`
  ADD CONSTRAINT `tuition_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `scholar` (`school_school_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tuition_scholar1` FOREIGN KEY (`scholar_scholar_id`, `scholar_school_school_id`) REFERENCES `scholar` (`scholar_id`, `school_school_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tuition_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE;

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `scholar` (`school_school_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_upload_scholar1` FOREIGN KEY (`scholar_scholar_id`, `scholar_school_school_id`) REFERENCES `scholar` (`scholar_id`, `school_school_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE;

--
-- Constraints for table `withholding`
--
ALTER TABLE `withholding`
  ADD CONSTRAINT `withholding_ibfk_3` FOREIGN KEY (`scholar_allowance_allowance_area`) REFERENCES `scholar` (`allowance_allowance_area`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_withholding_scholar1` FOREIGN KEY (`scholar_scholar_id`, `scholar_school_school_id`, `scholar_allowance_allowance_area`) REFERENCES `scholar` (`scholar_id`, `school_school_id`, `allowance_allowance_area`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `withholding_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `withholding_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `scholar` (`school_school_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
