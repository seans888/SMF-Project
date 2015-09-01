-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2015 at 08:29 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smfoundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `allowance_amount` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allowance`
--

INSERT INTO `allowance` (`allowance_area`, `allowance_amount`) VALUES
('NCR', '2000.00'),
('Provincial', '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE IF NOT EXISTS `deduction` (
  `deduction_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) DEFAULT NULL,
  `deduction_date` date DEFAULT NULL,
  `deduction_amount` decimal(9,2) DEFAULT NULL,
  `deduction_remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deduction`
--

INSERT INTO `deduction` (`deduction_id`, `scholar_scholar_id`, `scholar_school_school_id`, `deduction_date`, `deduction_amount`, `deduction_remark`) VALUES
(1, 3, 1, '2015-08-18', '2000.00', 'failed'),
(3, 3, 2, '2015-08-21', '2000.00', 'failed');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `email_id` int(11) NOT NULL,
  `email_scholar_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text NOT NULL
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
  `equivalence_foundation_rating` enum('PASS','FAIL') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equivalence`
--

INSERT INTO `equivalence` (`equivalence_id`, `school_school_id`, `equivalence_numerical_grade`, `equivalence_letter_grade`, `equivalence_percentile_lower`, `equivalence_percentile_upper`, `equivalence_school_rating`, `equivalence_foundation_rating`) VALUES
(1, 1, '4.00', 'A+', '96.00', '100.00', 'Excellent', 'PASS'),
(2, 1, '3.50', 'A', '91.00', '94.00', 'Very Good', 'PASS'),
(3, 1, '3.00', 'B+', '87.00', '90.00', 'GOOD', 'PASS'),
(4, 1, '2.50', 'B', '83.00', '86.00', 'ABOVE SATISFACTORY', 'PASS'),
(5, 1, '2.00', 'B-', '79.00', '82.00', 'SATISFACTORY', 'PASS'),
(6, 1, '1.50', 'C', '75.00', '78.00', 'FAIR', 'PASS'),
(7, 1, '1.00', 'D', '70.00', '74.00', 'PASS', 'PASS'),
(8, 1, NULL, 'R', '0.00', '69.00', 'REPEAT', 'FAIL'),
(9, 1, '0.00', 'F', '0.00', '0.00', 'FAIL', 'FAIL'),
(10, 1, NULL, 'N.G', '0.00', '0.00', 'NO GRADE', 'FAIL'),
(11, 1, NULL, 'A.W', '0.00', '0.00', 'AUTHORIZED WITHDRAWAL', 'FAIL'),
(12, 2, '4.00', 'A', '95.00', '100.00', 'EXCELLENT', 'PASS'),
(13, 2, '3.50', '', '91.00', '94.00', 'SUPERIOR', 'PASS'),
(14, 2, '3.00', 'B+', '87.00', '90.00', 'VERY GOOD', 'PASS'),
(15, 2, '2.50', 'B', '83.00', '86.00', 'GOOD', 'PASS'),
(16, 2, '2.00', 'B-', '79.00', '82.00', 'SATISFACTORY', 'PASS'),
(17, 2, '1.50', 'C', '75.00', '78.00', 'FAIR', 'PASS'),
(18, 2, '1.00', 'D', '70.00', '74.00', 'PASSED', 'PASS'),
(19, 2, '0.00', NULL, '0.00', '0.00', 'AUDIT', NULL),
(20, 2, '6.50', NULL, '0.00', '0.00', 'WITHDRAWN', 'FAIL'),
(21, 2, '7.00', NULL, '70.00', '100.00', 'PASSED (FOR PASS/FAIL COURSES)', 'PASS'),
(22, 2, '8.00', NULL, '0.00', '69.00', 'FAILED (FOR PASS/FAIL COURSES)', 'FAIL'),
(23, 2, '9.90', NULL, '0.00', '0.00', 'INCOMPLETE/DEFERRED (FOR THESIS/PRACTICUM COU', 'FAIL');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `grade_id` int(11) NOT NULL,
  `subject_subject_id` int(11) DEFAULT NULL,
  `subject_scholar_scholar_id` int(11) DEFAULT NULL,
  `subject_scholar_school_school_id` int(11) DEFAULT NULL,
  `grade_school_year_start` int(11) DEFAULT NULL,
  `grade_school_year_end` int(11) DEFAULT NULL,
  `grade_raw_grade` varchar(45) DEFAULT NULL,
  `grade_approval_status` enum('Not Approved','Approved') NOT NULL,
  `grade_approved_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `subject_subject_id`, `subject_scholar_scholar_id`, `subject_scholar_school_school_id`, `grade_school_year_start`, `grade_school_year_end`, `grade_raw_grade`, `grade_approval_status`, `grade_approved_by`) VALUES
(31, 1, 1, 1, 2014, 2015, '4.0', 'Not Approved', NULL),
(32, 2, 1, 1, 2014, 2015, '4.0', 'Not Approved', NULL),
(52, 4, 1, 1, 2012, 2015, '4.0', 'Not Approved', NULL),
(53, 4, 6, 1, 2012, 2015, '4.0', 'Not Approved', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `incentive`
--

CREATE TABLE IF NOT EXISTS `incentive` (
  `incentive_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) DEFAULT NULL,
  `scholar_allowance_allowance_area` enum('NCR','Provincial') DEFAULT NULL,
  `incentive_amount` decimal(9,2) DEFAULT NULL,
  `incentive_remark` varchar(255) DEFAULT NULL,
  `incentive_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `incentive`
--

INSERT INTO `incentive` (`incentive_id`, `scholar_scholar_id`, `scholar_school_school_id`, `scholar_allowance_allowance_area`, `incentive_amount`, `incentive_remark`, `incentive_date`) VALUES
(1, 3, 2, 'Provincial', '1000.00', 'Deans Lister', '2015-06-16'),
(2, 1, 1, 'NCR', '10000.00', 'test', '2015-08-25'),
(3, 1, 1, 'NCR', '1000.00', 'ts', '2015-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
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
  `scholar_school_school_id` int(11) DEFAULT NULL,
  `optionalwork_location` varchar(100) DEFAULT NULL,
  `optionalwork_start_date` date DEFAULT NULL,
  `optionalwork_end_date` date DEFAULT NULL,
  `optional_work_company_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `optionalwork`
--

INSERT INTO `optionalwork` (`optionalwork_id`, `scholar_scholar_id`, `scholar_school_school_id`, `optionalwork_location`, `optionalwork_start_date`, `optionalwork_end_date`, `optional_work_company_name`) VALUES
(1, 1, 1, 'test', '2015-08-05', '2015-07-17', 'SM'),
(3, 5, 3, 'a', '2015-08-11', '2015-08-26', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `scholar`
--

CREATE TABLE IF NOT EXISTS `scholar` (
  `scholar_id` int(11) NOT NULL,
  `school_school_id` int(11) DEFAULT NULL,
  `scholar_first_name` varchar(100) DEFAULT NULL,
  `scholar_middle_name` varchar(100) DEFAULT NULL,
  `scholar_last_name` varchar(100) DEFAULT NULL,
  `scholar_gender` enum('Male','Female') DEFAULT NULL,
  `scholar_address` varchar(255) DEFAULT NULL,
  `scholar_course` varchar(100) DEFAULT NULL,
  `scholar_graduate_status` enum('Graduated','Not Graduated') DEFAULT NULL,
  `scholar_year_level` int(11) DEFAULT NULL,
  `scholar_contact_email` varchar(100) DEFAULT NULL,
  `scholar_contact_number` varchar(100) DEFAULT NULL,
  `scholar_cash_card_number` varchar(45) DEFAULT NULL,
  `scholar_type` enum('SMFI','My Scholar A','Kabayan Scholar','My Scholar B','ICA Grant Scholar','Rufus Scholar') DEFAULT NULL,
  `scholar_sponsor` varchar(100) DEFAULT NULL,
  `allowance_allowance_area` enum('NCR','Provincial') DEFAULT NULL,
  `scholar_vendor_code` char(10) DEFAULT NULL,
  `scholar_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scholar`
--

INSERT INTO `scholar` (`scholar_id`, `school_school_id`, `scholar_first_name`, `scholar_middle_name`, `scholar_last_name`, `scholar_gender`, `scholar_address`, `scholar_course`, `scholar_graduate_status`, `scholar_year_level`, `scholar_contact_email`, `scholar_contact_number`, `scholar_cash_card_number`, `scholar_type`, `scholar_sponsor`, `allowance_allowance_area`, `scholar_vendor_code`, `scholar_user_id`) VALUES
(1, 1, 'Syam', 'Uy Sobierra', 'Daswani', 'Male', 'syam address', 'BSIT-MI', 'Graduated', 1, 'syam@email.com', '12345', '12345', 'SMFI', 'sponsor1', 'NCR', 'a', 2),
(3, 2, 'Kevin', 'Gonzaga', 'Villacorta', 'Male', 'kevin''s address', 'BSIT-MI', 'Not Graduated', 1, 'kevin@email.com', '12345', '12345', 'My Scholar A', 'sponsor1', 'Provincial', 'b', 3),
(5, 3, 'Jayson', 'Lansangan', 'Arroyo', 'Male', 'jayson''s address', 'BSIT-MI', 'Not Graduated', 1, 'jayson@email.com', '12345', '12345', 'SMFI', 'sponsor1', 'NCR', 'c', NULL),
(6, 1, 'Levi Emmanuel', 'Orquia', 'Frias', 'Male', 'Blk 9 lot 12 exodues ave., Camella Homes', 'BSCS-SS', 'Not Graduated', 4, 'lol@lol.com', '9111111', '8729102', 'SMFI', 'Canterlot''s Home for the gifted', 'NCR', 'MLP:FIM', 14),
(7, 1, 'Celestia', 'Sun', 'Bringer', 'Female', 'Canterlot, Equestria', 'BSCS-SS', 'Not Graduated', 4, 'celestia@derpy.com', '782', 'B1ts', 'ICA Grant Scholar', 'Canterlot''s Home for the gifted', 'NCR', 'SolarE', 15);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(100) DEFAULT NULL,
  `school_area` enum('NCR','Provincial') DEFAULT NULL,
  `school_address` varchar(255) DEFAULT NULL,
  `school_contact_emails` varchar(100) DEFAULT NULL,
  `school_contact_numbers` varchar(100) DEFAULT NULL,
  `school_vendor_code` char(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `school_area`, `school_address`, `school_contact_emails`, `school_contact_numbers`, `school_vendor_code`) VALUES
(1, 'Asia Pacific College', 'NCR', 'apc address', 'apc@email.com', '12345', 'a'),
(2, 'De Lasalle University', 'Provincial', 'lasalle address', 'dlsu@email.com', '12345', 'b'),
(3, 'Ateneo De Manila', 'NCR', 'ateneo address', 'ateneo@email.com', '12345', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) DEFAULT NULL,
  `subject_term` int(11) DEFAULT NULL,
  `subject_name` varchar(100) DEFAULT NULL,
  `subject_units` decimal(4,2) DEFAULT NULL,
  `subject_taken_status` enum('Not Taken','Taken','Failed') DEFAULT NULL,
  `subject_approval_status` enum('Not Approved','Approved') NOT NULL,
  `subject_approved_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `scholar_scholar_id`, `scholar_school_school_id`, `subject_term`, `subject_name`, `subject_units`, `subject_taken_status`, `subject_approval_status`, `subject_approved_by`) VALUES
(1, 3, 2, 2, 'SOFTDEV', '3.00', 'Taken', 'Not Approved', NULL),
(2, 1, 1, 1, 'QUALITY', '3.00', 'Taken', 'Not Approved', NULL),
(3, 6, 1, 1, 'Itrends', '3.00', 'Taken', 'Not Approved', ''),
(4, 6, 1, 1, 'CSPROJ', '3.00', 'Taken', 'Not Approved', NULL),
(5, 6, 1, 1, 'Minsys', '3.00', 'Taken', 'Not Approved', NULL),
(6, 6, 1, 1, 'Infosec', '3.00', 'Taken', 'Not Approved', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tuition`
--

CREATE TABLE IF NOT EXISTS `tuition` (
  `tuition_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) DEFAULT NULL,
  `tuition_term` int(11) DEFAULT NULL,
  `tuition_school_year_start` int(11) DEFAULT NULL,
  `tuition_school_year_end` int(11) DEFAULT NULL,
  `tuition_enrollment_date` date DEFAULT NULL,
  `tuition_amount` decimal(9,2) DEFAULT NULL,
  `tuition_paid_status` enum('Paid','Not Paid') DEFAULT NULL,
  `tuition_payment_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tuition`
--

INSERT INTO `tuition` (`tuition_id`, `scholar_scholar_id`, `scholar_school_school_id`, `tuition_term`, `tuition_school_year_start`, `tuition_school_year_end`, `tuition_enrollment_date`, `tuition_amount`, `tuition_paid_status`, `tuition_payment_date`) VALUES
(1, 5, 3, 2, 2015, 2016, '2015-12-20', '15000.00', 'Paid', '2015-12-27'),
(2, 3, 2, 3, 2015, 2016, '2015-12-20', '20000.00', 'Paid', '2015-09-09'),
(3, 6, 1, 2, 2012, 2015, '2012-02-22', '15000.00', 'Not Paid', '2012-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `upload_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) NOT NULL,
  `upload_form` varchar(100) DEFAULT NULL,
  `upload_file_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(13, 'katrinaA', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'katrinaA@gmail.com', 10, 0, 0),
(14, 'friasL', 'lala', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', 'lala', 'lala@gmail.com', 10, 0, 0),
(15, 'bringerC', '', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, '', 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `withholding`
--

CREATE TABLE IF NOT EXISTS `withholding` (
  `withholding_id` int(11) NOT NULL,
  `scholar_scholar_id` int(11) NOT NULL,
  `scholar_school_school_id` int(11) DEFAULT NULL,
  `scholar_allowance_allowance_area` enum('NCR','Provincial') DEFAULT NULL,
  `withholding_start_date` date DEFAULT NULL,
  `withholding_end_date` date DEFAULT NULL,
  `withholding_remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `withholding`
--

INSERT INTO `withholding` (`withholding_id`, `scholar_scholar_id`, `scholar_school_school_id`, `scholar_allowance_allowance_area`, `withholding_start_date`, `withholding_end_date`, `withholding_remark`) VALUES
(2, 5, 3, 'NCR', '2015-08-25', '2015-08-04', 'Graduated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_3` (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Indexes for table `allowance`
--
ALTER TABLE `allowance`
  ADD PRIMARY KEY (`allowance_area`);

--
-- Indexes for table `deduction`
--
ALTER TABLE `deduction`
  ADD PRIMARY KEY (`deduction_id`), ADD KEY `scholar_scholar_id` (`scholar_scholar_id`), ADD KEY `scholar_school_school_id` (`scholar_school_school_id`);

--
-- Indexes for table `equivalence`
--
ALTER TABLE `equivalence`
  ADD PRIMARY KEY (`equivalence_id`), ADD KEY `school_school_id` (`school_school_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`), ADD KEY `subject_subject_id` (`subject_subject_id`), ADD KEY `subject_scholar_scholar_id` (`subject_scholar_scholar_id`), ADD KEY `subject_scholar_school_school_id` (`subject_scholar_school_school_id`);

--
-- Indexes for table `incentive`
--
ALTER TABLE `incentive`
  ADD PRIMARY KEY (`incentive_id`), ADD KEY `scholar_scholar_id` (`scholar_scholar_id`), ADD KEY `scholar_school_school_id` (`scholar_school_school_id`), ADD KEY `scholar_allowance_allowance_area` (`scholar_allowance_allowance_area`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `optionalwork`
--
ALTER TABLE `optionalwork`
  ADD PRIMARY KEY (`optionalwork_id`), ADD KEY `scholar_scholar_id` (`scholar_scholar_id`), ADD KEY `scholar_school_school_id` (`scholar_school_school_id`);

--
-- Indexes for table `scholar`
--
ALTER TABLE `scholar`
  ADD PRIMARY KEY (`scholar_id`), ADD KEY `school_school_id` (`school_school_id`), ADD KEY `allowance_allowance_area` (`allowance_allowance_area`), ADD KEY `scholar_user_id` (`scholar_user_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`), ADD KEY `school_id` (`school_id`), ADD KEY `school_id_2` (`school_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`), ADD KEY `scholar_scholar_id` (`scholar_scholar_id`), ADD KEY `scholar_school_school_id` (`scholar_school_school_id`);

--
-- Indexes for table `tuition`
--
ALTER TABLE `tuition`
  ADD PRIMARY KEY (`tuition_id`), ADD KEY `scholar_scholar_id` (`scholar_scholar_id`), ADD KEY `scholar_school_school_id` (`scholar_school_school_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`upload_id`), ADD KEY `scholar_scholar_id` (`scholar_scholar_id`), ADD KEY `scholar_school_school_id` (`scholar_school_school_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_3` (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Indexes for table `withholding`
--
ALTER TABLE `withholding`
  ADD PRIMARY KEY (`withholding_id`), ADD KEY `scholar_scholar_id` (`scholar_scholar_id`), ADD KEY `scholar_school_school_id` (`scholar_school_school_id`), ADD KEY `scholar_allowance_allowance_area` (`scholar_allowance_allowance_area`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `equivalence`
--
ALTER TABLE `equivalence`
  MODIFY `equivalence_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `incentive`
--
ALTER TABLE `incentive`
  MODIFY `incentive_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `optionalwork`
--
ALTER TABLE `optionalwork`
  MODIFY `optionalwork_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `scholar_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tuition`
--
ALTER TABLE `tuition`
  MODIFY `tuition_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `withholding`
--
ALTER TABLE `withholding`
  MODIFY `withholding_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `deduction`
--
ALTER TABLE `deduction`
ADD CONSTRAINT `deduction_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `deduction_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `school` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `equivalence`
--
ALTER TABLE `equivalence`
ADD CONSTRAINT `equivalence_ibfk_1` FOREIGN KEY (`school_school_id`) REFERENCES `school` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`subject_subject_id`) REFERENCES `subject` (`subject_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `grade_ibfk_3` FOREIGN KEY (`subject_scholar_school_school_id`) REFERENCES `school` (`school_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `grade_ibfk_4` FOREIGN KEY (`subject_scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE;

--
-- Constraints for table `incentive`
--
ALTER TABLE `incentive`
ADD CONSTRAINT `incentive_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `incentive_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `school` (`school_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `incentive_ibfk_3` FOREIGN KEY (`scholar_allowance_allowance_area`) REFERENCES `scholar` (`allowance_allowance_area`) ON UPDATE CASCADE;

--
-- Constraints for table `optionalwork`
--
ALTER TABLE `optionalwork`
ADD CONSTRAINT `optionalwork_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `optionalwork_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `school` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `scholar`
--
ALTER TABLE `scholar`
ADD CONSTRAINT `scholar_ibfk_1` FOREIGN KEY (`school_school_id`) REFERENCES `school` (`school_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `scholar_ibfk_2` FOREIGN KEY (`allowance_allowance_area`) REFERENCES `allowance` (`allowance_area`) ON UPDATE CASCADE,
ADD CONSTRAINT `scholar_ibfk_3` FOREIGN KEY (`scholar_user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `school` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tuition`
--
ALTER TABLE `tuition`
ADD CONSTRAINT `tuition_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `tuition_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `school` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `upload_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `school` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `withholding`
--
ALTER TABLE `withholding`
ADD CONSTRAINT `withholding_ibfk_1` FOREIGN KEY (`scholar_scholar_id`) REFERENCES `scholar` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `withholding_ibfk_2` FOREIGN KEY (`scholar_school_school_id`) REFERENCES `school` (`school_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `withholding_ibfk_3` FOREIGN KEY (`scholar_allowance_allowance_area`) REFERENCES `scholar` (`allowance_allowance_area`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
