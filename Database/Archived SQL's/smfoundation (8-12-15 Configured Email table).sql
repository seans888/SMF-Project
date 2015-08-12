-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2015 at 06:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
`allowance_id` int(11) NOT NULL,
  `allowance_amount` decimal(9,2) DEFAULT NULL,
  `allowance_remark` varchar(255) DEFAULT NULL,
  `allowance_scholar_id` int(11) DEFAULT NULL,
  `allowance_school_id` int(11) DEFAULT NULL,
  `allowance_payStatus` enum('paid','not paid') DEFAULT NULL,
  `allowance_paidDate` date DEFAULT NULL,
  `uploaded_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `checked_by` varchar(100) DEFAULT NULL,
  `checked_remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowance`
--

INSERT INTO `allowance` (`allowance_id`, `allowance_amount`, `allowance_remark`, `allowance_scholar_id`, `allowance_school_id`, `allowance_payStatus`, `allowance_paidDate`, `uploaded_by`, `updated_by`, `checked_by`, `checked_remark`) VALUES
(1, '2000.00', 'Allowance', 2, 1, 'not paid', '2015-07-25', NULL, NULL, 'Cath', 'l'),
(2, '1000.00', 'test', 13, 5, 'paid', '2015-07-14', NULL, NULL, NULL, NULL),
(3, '2000.00', 'remark1', 5, 1, 'paid', '2015-07-29', NULL, NULL, NULL, NULL),
(4, '2000.00', NULL, 4, 1, 'not paid', NULL, NULL, NULL, NULL, NULL),
(5, '20000.00', 'test', 2, 1, 'paid', '2015-08-03', 'Linda', 'Linda', 'Linda', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `applicantform`
--

CREATE TABLE IF NOT EXISTS `applicantform` (
  `id` int(11) NOT NULL,
  `last_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `first_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `middle_name` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `city_address` varchar(45) CHARACTER SET utf8 NOT NULL,
  `telephone_no` int(11) NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  `cellphone_no` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `status` enum('Single','Married','Widowed','Separated') CHARACTER SET utf8 NOT NULL,
  `sex` enum('Male','Female','','') CHARACTER SET utf8 NOT NULL,
  `birth_place` varchar(45) CHARACTER SET utf8 NOT NULL,
  `nationality` varchar(45) CHARACTER SET utf8 NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `religion` varchar(45) CHARACTER SET utf8 NOT NULL,
  `name_of_public_high_school_graduating_from` varchar(45) CHARACTER SET utf8 NOT NULL,
  `section` varchar(45) CHARACTER SET utf8 NOT NULL,
  `complete_address_of_school` varchar(45) CHARACTER SET utf8 NOT NULL,
  `name_of_principal` varchar(45) CHARACTER SET utf8 NOT NULL,
  `telephone_numbers` int(11) NOT NULL,
  `org_1` varchar(45) CHARACTER SET utf8 NOT NULL,
  `position_held1` varchar(45) CHARACTER SET utf8 NOT NULL,
  `school_you_want_to_enroll_in` varchar(45) CHARACTER SET utf8 NOT NULL,
  `course_you_plan_to_take` varchar(45) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicantform`
--

INSERT INTO `applicantform` (`id`, `last_name`, `first_name`, `middle_name`, `city_address`, `telephone_no`, `email`, `cellphone_no`, `birthday`, `status`, `sex`, `birth_place`, `nationality`, `height`, `weight`, `religion`, `name_of_public_high_school_graduating_from`, `section`, `complete_address_of_school`, `name_of_principal`, `telephone_numbers`, `org_1`, `position_held1`, `school_you_want_to_enroll_in`, `course_you_plan_to_take`) VALUES
(1, 'bisbal', 'bisbal', 'bisbal', '241', 231312, 'bisbal@yahoo.com', 1312414, '0000-00-00', 'Single', 'Female', 'sdfwqwefqfw', 'asdgeg2', 32, 32, 'wgwrgb', 'ergr4g2g2b', '4bv24bvvdfbd', 'fbt4b4', 'tb2442bb', 121414, 'sdvdgsd', 'wgrwewretew', 'weqqwerqwe', 'qwetewt');

-- --------------------------------------------------------

--
-- Table structure for table `approved_allowance`
--

CREATE TABLE IF NOT EXISTS `approved_allowance` (
`allowance_id` int(11) NOT NULL,
  `allowance_amount` decimal(9,2) NOT NULL,
  `allowance_remark` varchar(255) NOT NULL,
  `allowance_scholar_id` int(11) NOT NULL,
  `allowance_school_id` int(11) NOT NULL,
  `allowance_payStatus` enum('paid','not paid','','') NOT NULL,
  `allowance_paidDate` date NOT NULL,
  `allowance_status` enum('PAST','PRESENT','','') NOT NULL,
  `approval_status` enum('Approved','Not Approved','','') DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL,
  `approved_remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `approved_deductions`
--

CREATE TABLE IF NOT EXISTS `approved_deductions` (
`deduction_id` int(11) NOT NULL,
  `deduction_date` date NOT NULL,
  `deduction_amount` decimal(9,2) NOT NULL,
  `deduction_remark` varchar(100) NOT NULL,
  `deduction_scholar_id` int(11) NOT NULL,
  `approval_status` enum('Approved','Not Approved','','') DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL,
  `approved_remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `approved_deductions`
--

INSERT INTO `approved_deductions` (`deduction_id`, `deduction_date`, `deduction_amount`, `deduction_remark`, `deduction_scholar_id`, `approval_status`, `approved_by`, `approved_remark`) VALUES
(4, '2015-08-19', '1000.00', 'Repeated Data Structures', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `approved_grades`
--

CREATE TABLE IF NOT EXISTS `approved_grades` (
`grade_id` int(11) NOT NULL,
  `grade_schoolYear` int(11) NOT NULL,
  `grade_Term` int(11) NOT NULL,
  `grade_scholar_id` int(11) NOT NULL,
  `grade_subject` varchar(100) NOT NULL,
  `grade_units` decimal(3,2) NOT NULL,
  `grade_value` int(100) NOT NULL,
  `equivalence_grade_rule` int(11) NOT NULL,
  `School_id` int(11) NOT NULL,
  `approval_status` enum('Approved','Not Approved','','') NOT NULL,
  `approved_by` varchar(100) NOT NULL,
  `approved_remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `approved_refunds`
--

CREATE TABLE IF NOT EXISTS `approved_refunds` (
`refund_id` int(11) NOT NULL,
  `refund_amount` decimal(10,0) NOT NULL,
  `refund_smShare` decimal(10,0) NOT NULL,
  `refund_scholarShare` decimal(10,0) NOT NULL,
  `refund_scholar_id` int(11) NOT NULL,
  `refund_tuitionfee_id` int(11) NOT NULL,
  `refund_description` varchar(100) NOT NULL,
  `refund_date` date NOT NULL,
  `approval_status` enum('Approved','Not Approved','','') DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL,
  `approved_remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `approved_refunds`
--

INSERT INTO `approved_refunds` (`refund_id`, `refund_amount`, `refund_smShare`, `refund_scholarShare`, `refund_scholar_id`, `refund_tuitionfee_id`, `refund_description`, `refund_date`, `approval_status`, `approved_by`, `approved_remark`) VALUES
(1, '15000', '1', '1', 2, 4, 'h', '2015-07-08', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `approved_tuitionfees`
--

CREATE TABLE IF NOT EXISTS `approved_tuitionfees` (
`tuitionfee_id` int(11) NOT NULL,
  `tuitionfee_scholar_id` int(11) NOT NULL,
  `tuitionfee_term` varchar(10) NOT NULL,
  `tuitionfee_amount` decimal(9,2) NOT NULL,
  `tuitionfee_dateOfEnrollment` date NOT NULL,
  `tuitionfee_dateOfPayment` date DEFAULT NULL,
  `tuitionfee_paidStatus` enum('paid','not paid','','') NOT NULL,
  `approval_status` enum('Approved','Not Approved','','') DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `approved_tuitionfees`
--

INSERT INTO `approved_tuitionfees` (`tuitionfee_id`, `tuitionfee_scholar_id`, `tuitionfee_term`, `tuitionfee_amount`, `tuitionfee_dateOfEnrollment`, `tuitionfee_dateOfPayment`, `tuitionfee_paidStatus`, `approval_status`, `approved_by`) VALUES
(4, 2, '1', '20000.00', '0000-00-00', '2015-03-03', 'not paid', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `approved_uploadedforms`
--

CREATE TABLE IF NOT EXISTS `approved_uploadedforms` (
`id` int(11) NOT NULL,
  `uploadedForm` varchar(100) NOT NULL,
  `uploaded_scholar_id` int(11) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `approval_status` enum('Approved','Not Approved','','') DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL,
  `approved_remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `approved_uploadedforms`
--

INSERT INTO `approved_uploadedforms` (`id`, `uploadedForm`, `uploaded_scholar_id`, `fileName`, `approval_status`, `approved_by`, `approved_remark`) VALUES
(1, 'Forms/dc926df99f32377a2cab63a6426e067a1Registration Form ofScholarID 2 FileName Hydrangeas.jpg', 2, 'Registration Form', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('check-allowance', 4, NULL),
('check-allowance', 8, NULL),
('check-grades', 6, NULL),
('check-grades', 7, NULL),
('check-tuitionfees', 4, NULL),
('check-tuitionfees', 8, NULL),
('check-uploadedforms', 6, NULL),
('check-uploadedforms', 7, NULL),
('create-allowance', 6, NULL),
('create-allowance', 7, NULL),
('create-grades', 6, NULL),
('create-grades', 7, NULL),
('create-tuitionfees', 6, NULL),
('create-tuitionfees', 7, NULL),
('create-uploadedforms', 6, NULL),
('create-uploadedforms', 7, NULL),
('update-allowance', 6, NULL),
('update-allowance', 7, NULL),
('update-grades', 6, NULL),
('update-grades', 7, NULL),
('update-tuitionfees', 6, NULL),
('update-tuitionfees', 7, NULL),
('update-uploadedforms', 6, NULL),
('update-uploadedforms', 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('check-allowance', 1, 'Allows a user to check an allowance record', NULL, NULL, NULL, NULL),
('check-grades', 1, 'allows a user to check the grades', NULL, NULL, NULL, NULL),
('check-tuitionfees', 1, 'Allows a user to check tuition records', NULL, NULL, NULL, NULL),
('check-uploadedforms', 1, 'Allows a user to check an uploaded form', NULL, NULL, NULL, NULL),
('create-allowance', 1, 'Allows a user to create an allowance record', NULL, NULL, NULL, NULL),
('create-grades', 1, 'allows user to create a grade', NULL, NULL, NULL, NULL),
('create-tuitionfees', 1, 'Allows a user to create tuition records', NULL, NULL, NULL, NULL),
('create-uploadedforms', 1, 'Allows a user to upload a form', NULL, NULL, NULL, NULL),
('update-allowance', 1, 'Allows a user to update an allowance record', NULL, NULL, NULL, NULL),
('update-grades', 1, 'Allows a user to update grades', NULL, NULL, NULL, NULL),
('update-tuitionfees', 1, 'Allows a user to update tuition records', NULL, NULL, NULL, NULL),
('update-uploadedforms', 1, 'Allows a user to update an uploaded form', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `compile`
--

CREATE TABLE IF NOT EXISTS `compile` (
`compile_id` int(11) NOT NULL,
  `compile_scholar_id` int(11) DEFAULT NULL,
  `compile_school_id` int(11) DEFAULT NULL,
  `compile_tuitionfee_id` int(11) DEFAULT NULL,
  `compile_grade_id` int(11) DEFAULT NULL,
  `compile_scholar_firstName` varchar(100) DEFAULT NULL,
  `compile_scholar_lastName` varchar(100) DEFAULT NULL,
  `compile_scholar_middleName` varchar(100) DEFAULT NULL,
  `compile_school_name` varchar(100) DEFAULT NULL,
  `compile_school_area` varchar(100) DEFAULT NULL,
  `compile_pendingPaymentToSchool` enum('Yes','No') DEFAULT NULL,
  `compile_pendingPaymentToStudent` enum('Yes','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE IF NOT EXISTS `deductions` (
`deduction_id` int(11) NOT NULL,
  `deduction_date` date NOT NULL,
  `deduction_amount` decimal(9,2) NOT NULL DEFAULT '0.00',
  `deduction_remark` varchar(100) NOT NULL,
  `deduction_scholar_id` int(11) NOT NULL,
  `uploaded_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `checked_by` varchar(100) DEFAULT NULL,
  `checked_remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`deduction_id`, `deduction_date`, `deduction_amount`, `deduction_remark`, `deduction_scholar_id`, `uploaded_by`, `updated_by`, `checked_by`, `checked_remark`) VALUES
(2, '2015-07-16', '300.00', 'Failed Subject 8', 5, NULL, NULL, NULL, NULL),
(3, '2015-07-03', '550.00', 'Repeated Data Structures', 2, NULL, NULL, 'Linda', 'a'),
(4, '2015-08-19', '1000.00', 'Repeated Data Structures', 2, 'Linda', 'Linda', 'Linda', 'dsa');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
`id` int(11) NOT NULL,
  `writer_name` varchar(100) NOT NULL,
  `writer_email` varchar(200) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `writer_name`, `writer_email`, `subject`, `content`) VALUES
(1, 'test', 'jkevinvillacorta@gmail.com', 'tst', 'test'),
(2, 'Syam', 'jkevinvillacorta@gmail.com', 'content', 'content');

-- --------------------------------------------------------

--
-- Table structure for table `equivalence`
--

CREATE TABLE IF NOT EXISTS `equivalence` (
`equivalence_grade_rule` int(11) NOT NULL,
  `School_id` int(11) NOT NULL,
  `Numerical_Grade` varchar(10) DEFAULT NULL,
  `Letter_Grade` varchar(10) DEFAULT NULL,
  `Equivalent_Lower` decimal(5,2) NOT NULL,
  `Equivalent_Upper` decimal(5,2) NOT NULL,
  `School_Rating` varchar(255) NOT NULL,
  `Foundation_Rating` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equivalence`
--

INSERT INTO `equivalence` (`equivalence_grade_rule`, `School_id`, `Numerical_Grade`, `Letter_Grade`, `Equivalent_Lower`, `Equivalent_Upper`, `School_Rating`, `Foundation_Rating`) VALUES
(1, 1, '4.0', 'A', '95.00', '100.00', 'EXCELLENT', 'PASS'),
(2, 1, '3.5', 'A', '91.00', '94.00', 'VERY GOOD', 'PASS'),
(3, 1, '3.0', 'B+', '87.00', '90.00', 'GOOD', 'PASS'),
(4, 1, '2.5', 'B', '83.00', '86.00', 'ABOVE SATISFACTORY', 'PASS'),
(5, 1, '2.0', 'B-', '79.00', '82.00', 'SATISFACTORY', 'PASS'),
(6, 1, '1.5', 'C', '75.00', '78.00', 'FAIR', 'PASS'),
(7, 1, '1.0', 'D', '70.00', '74.00', 'PASS', 'PASS'),
(8, 1, NULL, 'R', '0.00', '69.00', 'REPEAT', 'FAIL'),
(9, 1, '0.0', 'F', '0.00', '0.00', 'FAIL', 'FAIL'),
(10, 1, NULL, 'N.G', '0.00', '0.00', 'NO GRADE', 'FAIL'),
(11, 1, NULL, 'A.W', '0.00', '0.00', 'AUTHORIZED WITHDRAWAL', 'FAIL'),
(12, 2, '4.0', 'A', '95.00', '100.00', 'EXCELLENT', 'PASS'),
(13, 2, '3.5', '', '91.00', '94.00', 'SUPERIOR', 'PASS'),
(14, 2, '3.0', 'B+', '87.00', '90.00', 'VERY GOOD', 'PASS'),
(15, 2, '2.5', 'B', '83.00', '86.00', 'GOOD', 'PASS'),
(16, 2, '2.0', 'B-', '79.00', '82.00', 'SATISFACTORY', 'PASS'),
(17, 2, '1.5', 'C', '75.00', '78.00', 'FAIR', 'PASS'),
(18, 2, '1.0', 'D', '70.00', '74.00', 'PASSED', 'PASS'),
(19, 2, '0.0', NULL, '0.00', '0.00', 'AUDIT', NULL),
(20, 2, '6.5', NULL, '0.00', '0.00', 'WITHDRAWN', 'FAIL'),
(21, 2, '7.0', NULL, '70.00', '100.00', 'PASSED (FOR PASS/FAIL COURSES)', 'PASS'),
(22, 2, '8.0', NULL, '0.00', '69.00', 'FAILED (FOR PASS/FAIL COURSES)', 'FAIL'),
(23, 2, '9.9', NULL, '0.00', '0.00', 'INCOMPLETE/DEFERRED (FOR THESIS/PRACTICUM COURSES ONLY)', 'FAIL'),
(24, 3, '1.00', NULL, '92.00', '100.00', 'PASS', 'PASS'),
(25, 3, '1.25', NULL, '88.00', '91.99', 'PASS', 'PASS'),
(26, 3, '1.50', NULL, '84.00', '88.99', 'PASS', 'PASS'),
(27, 3, '1.75', NULL, '80.00', '83.99', 'PASS', 'PASS'),
(28, 3, '2.00', NULL, '76.00', '79.99', 'PASS', 'PASS'),
(29, 3, '2.25', NULL, '72.00', '75.99', 'PASS', 'PASS'),
(30, 2, '2.50', NULL, '68.00', '71.99', 'PASS', 'PASS'),
(31, 3, '2.75', NULL, '64.00', '67.99', 'PASS', 'PASS'),
(32, 3, '3.00', NULL, '60.00', '63.99', 'PASS', 'PASS'),
(33, 3, '4.00', NULL, '58.00', '59.99', 'CONDITIONAL PASS BY REMOVAL OR RETAKE', 'FAIL'),
(34, 3, '5.00', NULL, '0.00', '59.99', 'FAIL', 'FAIL'),
(35, 3, NULL, 'INC', '0.00', '0.00', 'INCOMPLETE REQUIREMENTS', 'FAIL'),
(36, 3, NULL, 'DROP', '0.00', '0.00', 'DROP', 'FAIL'),
(37, 4, '4.0', 'A', '92.00', '100.00', 'PASS', 'PASS'),
(38, 4, '3.5', 'B+', '87.00', '91.00', 'PASS', 'PASS'),
(39, 4, '3.0', 'B', '83.00', '86.00', 'PASS', 'PASS'),
(40, 4, '2.5', 'C+', '79.00', '82.00', 'PASS', 'PASS'),
(41, 4, '2.0', 'C', '75.00', '78.00', 'PASS', 'PASS'),
(42, 4, '1.0', 'D', '70.00', '74.00', 'PASS', 'PASS'),
(43, 4, '0.0', 'F', '0.00', '69.00', 'FAIL', 'FAIL'),
(44, 4, NULL, 'INC', '0.00', '0.00', 'INCOMPLETE REQUIREMENTS', 'FAIL'),
(45, 4, NULL, 'WP', '0.00', '0.00', 'WITHDRAWAL WITH PERMISSION', 'FAIL'),
(46, 5, '1.00', 'A', '97.00', '99.00', 'PASS', 'PASS'),
(47, 5, '1.25', 'A-', '94.00', '96.00', 'PASS', 'PASS'),
(48, 5, '1.50', 'B+', '91.00', '93.00', 'PASS', 'PASS'),
(49, 5, '1.75', 'B', '88.00', '90.00', 'PASS', 'PASS'),
(50, 5, '2.00', 'B-', '85.00', '87.00', 'PASS', 'PASS'),
(51, 5, '2.50', 'C+', '80.00', '84.00', 'PASS', 'PASS'),
(52, 5, '3.00', 'C', '75.00', '79.00', 'PASS', 'PASS'),
(53, 5, '4.00', 'D', '70.00', '74.00', 'PASS', 'PASS'),
(54, 5, '5.00', 'F', '0.00', '69.00', 'FAIL', 'FAIL'),
(55, 5, NULL, 'NC', '0.00', '0.00', 'NO CREDIT', 'FAIL'),
(56, 5, NULL, 'WP', '0.00', '0.00', 'WITHDRAWAL WITH PERMISSION', 'FAIL'),
(57, 5, NULL, 'DR', '0.00', '0.00', 'DROP', 'FAIL');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `event_scholar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
`grade_id` int(11) NOT NULL,
  `grade_schoolYear` int(11) DEFAULT NULL,
  `grade_Term` int(11) DEFAULT NULL,
  `grade_scholar_id` int(11) DEFAULT NULL,
  `grade_subject` varchar(100) DEFAULT NULL,
  `grade_units` decimal(3,2) DEFAULT NULL,
  `grade_value` varchar(100) DEFAULT NULL,
  `equivalence_grade_rule` int(11) DEFAULT NULL,
  `School_id` int(11) DEFAULT NULL,
  `uploaded_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `checked_by` varchar(100) DEFAULT NULL,
  `checked_remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `grade_schoolYear`, `grade_Term`, `grade_scholar_id`, `grade_subject`, `grade_units`, `grade_value`, `equivalence_grade_rule`, `School_id`, `uploaded_by`, `updated_by`, `checked_by`, `checked_remark`) VALUES
(15, 2015, 1, 2, 'SOFTDEV', '3.00', '4.0', 1, 1, NULL, NULL, 'Linda', 'a'),
(16, 2015, 2, 3, 'MINSYS', '3.00', '4.0', 1, 1, NULL, NULL, NULL, NULL),
(17, 2015, 1, 4, 'Subject 1', '3.00', '4.0', 1, 1, NULL, NULL, NULL, NULL),
(18, 2015, 1, 4, 'Subject 2', '3.00', '4.0', 1, 1, NULL, NULL, NULL, NULL),
(19, 2015, 1, 4, 'Subject 3', '3.00', '4.0', 1, 1, NULL, NULL, NULL, NULL),
(20, 2015, 1, 4, 'subject 4', '3.00', '4.0', 1, 1, NULL, NULL, NULL, NULL),
(21, 2015, 2, 4, 'Subject 5', '3.00', '3.5', 2, 1, NULL, NULL, NULL, NULL),
(22, 2015, 2, 4, 'Subject 6', '3.00', '3.0', 3, 1, NULL, NULL, NULL, NULL),
(23, 2015, 2, 4, 'Subject 7', '3.00', '2.5', 4, 1, NULL, NULL, NULL, NULL),
(24, 2015, 2, 4, 'Subject 8', '3.00', '2.0', 5, 1, NULL, NULL, NULL, NULL),
(25, 2015, 1, 5, 'Subject 1', '3.00', '4.0', 1, 1, NULL, NULL, NULL, NULL),
(26, 2015, 1, 5, 'Subject 2', '3.00', '4.0', 1, 1, NULL, NULL, NULL, NULL),
(27, 2015, 1, 5, 'Subject 3', '3.00', '4.0', 1, 1, NULL, NULL, NULL, NULL),
(28, 2015, 1, 5, 'Subject 4', '3.00', '4.0', 1, 1, NULL, NULL, NULL, NULL),
(29, 2015, 2, 5, 'subject 5', '3.00', '3.5', 2, 1, NULL, NULL, NULL, NULL),
(30, 2015, 2, 5, 'Subject 6', '3.00', '3.0', 3, 1, NULL, NULL, NULL, NULL),
(31, 2015, 2, 5, 'Subject 7', '3.00', '2.5', 4, 1, NULL, NULL, NULL, NULL),
(32, 2015, 2, 5, 'Subject 8', '3.00', 'R', 8, 1, NULL, NULL, NULL, NULL),
(33, 2015, 1, 6, 'Subject 1', '3.00', '4.0', 12, 2, NULL, NULL, NULL, NULL),
(34, 2015, 1, 6, 'Subject 2', '3.00', '4.0', 12, 2, NULL, NULL, NULL, NULL),
(35, 2015, 1, 6, 'Subject 3', '3.00', '4.0', 12, 2, NULL, NULL, NULL, NULL),
(36, 2015, 1, 6, 'Subject 4', '3.00', '4.0', 12, 2, NULL, NULL, NULL, NULL),
(37, 2015, 2, 6, 'Subject 5', '3.00', '3.5', 13, 2, NULL, NULL, NULL, NULL),
(38, 2015, 2, 6, 'Subject 6', '3.00', '3.5', 13, 2, NULL, NULL, NULL, NULL),
(39, 2015, 2, 6, 'Subject 7', '3.00', '3.0', 14, 2, NULL, NULL, NULL, NULL),
(40, 2015, 2, 6, 'Subject 8', '3.00', '3.0', 14, 2, NULL, NULL, NULL, NULL),
(41, 2015, 1, 7, 'Subject 1', '3.00', '4.0', 12, 2, NULL, NULL, NULL, NULL),
(42, 2015, 1, 7, 'Subject 2', '3.00', '4.0', 12, 2, NULL, NULL, NULL, NULL),
(43, 2015, 1, 7, 'Subject 3', '3.00', '4.0', 12, 2, NULL, NULL, NULL, NULL),
(44, 2015, 1, 7, 'Subject 4', '3.00', '4.0', 12, 2, NULL, NULL, NULL, NULL),
(45, 2015, 2, 7, 'Subject 5', '3.00', '3.5', 13, 2, NULL, NULL, NULL, NULL),
(46, 2015, 2, 7, 'Subject 6', '3.00', '3.5', 13, 2, NULL, NULL, NULL, NULL),
(47, 2015, 2, 7, 'Subject 7', '3.00', '3.0', 14, 2, NULL, NULL, NULL, NULL),
(48, 2015, 2, 7, 'Subject 8', '3.00', '3.0', 14, 2, NULL, NULL, NULL, NULL),
(49, 2015, 1, 8, 'Subject 1', '3.00', '1.00', 24, 3, NULL, NULL, NULL, NULL),
(50, 2015, 1, 8, 'Subject 2', '3.00', '1.00', 24, 3, NULL, NULL, NULL, NULL),
(51, 2015, 1, 8, 'Subject 3', '3.00', '1.00', 24, 3, NULL, NULL, NULL, NULL),
(52, 2015, 1, 8, 'Subject 4', '3.00', '1.00', 24, 3, NULL, NULL, NULL, NULL),
(53, 2015, 2, 8, 'Subject 5', '3.00', '1.25', 25, 3, NULL, NULL, NULL, NULL),
(54, 2015, 2, 8, 'Subject 6', '3.00', '1.25', 25, 3, NULL, NULL, NULL, NULL),
(55, 2015, 2, 8, 'Subject 7', '3.00', '1.50', 26, 3, NULL, NULL, NULL, NULL),
(56, 2015, 2, 8, 'Subject 8', '3.00', '1.50', 26, 3, NULL, NULL, NULL, NULL),
(57, 2015, 1, 9, 'Subject 1', '3.00', '1.00', 24, 3, NULL, NULL, NULL, NULL),
(58, 2015, 1, 9, 'Subject 2', '3.00', '1.00', 24, 3, NULL, NULL, NULL, NULL),
(59, 2015, 1, 9, 'Subject 3', '3.00', '1.00', 24, 3, NULL, NULL, NULL, NULL),
(60, 2015, 1, 9, 'Subject 4', '3.00', '1.00', 24, 3, NULL, NULL, NULL, NULL),
(61, 2015, 2, 9, 'Subject 5', '3.00', '1.25', 25, 3, NULL, NULL, NULL, NULL),
(62, 2015, 2, 9, 'Subject 6', '3.00', '1.25', 25, 3, NULL, NULL, NULL, NULL),
(63, 2015, 2, 9, 'Subject 7', '3.00', '1.50', 26, 3, NULL, NULL, NULL, NULL),
(64, 2015, 2, 9, 'Subject 8', '3.00', '1.50', 26, 3, NULL, NULL, NULL, NULL),
(65, 2015, 1, 10, 'Subject 1', '3.00', '4.0', 37, 4, NULL, NULL, NULL, NULL),
(66, 2015, 1, 10, 'Subject 2', '3.00', '4.0', 37, 4, NULL, NULL, NULL, NULL),
(67, 2015, 1, 10, 'Subject 3', '3.00', '4.0', 37, 4, NULL, NULL, NULL, NULL),
(68, 2015, 1, 10, 'Subject 4', '3.00', '4.0', 37, 4, NULL, NULL, NULL, NULL),
(69, 2015, 2, 10, 'Subject 5', '3.00', '3.5', 38, 4, NULL, NULL, NULL, NULL),
(70, 2015, 2, 10, 'Subject 6', '3.00', '3.5', 38, 4, NULL, NULL, NULL, NULL),
(71, 2015, 2, 10, 'Subject 6', '3.00', '3.0', 39, 4, NULL, NULL, NULL, NULL),
(72, 2015, 2, 10, 'Subject 8', '3.00', '3.0', 39, 4, NULL, NULL, NULL, NULL),
(73, 2015, 1, 11, 'Subject 1', '3.00', '4.0', 37, 4, NULL, NULL, NULL, NULL),
(74, 2015, 1, 11, 'Subject 2', '3.00', '4.0', 37, 4, NULL, NULL, NULL, NULL),
(75, 2015, 1, 11, 'Subject 3', '3.00', '4.0', 37, 4, NULL, NULL, NULL, NULL),
(76, 2015, 1, 11, 'Subject 4', '3.00', '4.0', 37, 4, NULL, NULL, NULL, NULL),
(77, 2015, 2, 11, 'Subject 5', '3.00', '3.5', 38, 4, NULL, NULL, NULL, NULL),
(78, 2015, 2, 11, 'Subject 6', '3.00', '3.5', 38, 4, NULL, NULL, NULL, NULL),
(79, 2015, 2, 11, 'Subject 7', '3.00', '3.0', 39, 4, NULL, NULL, NULL, NULL),
(80, 2015, 2, 11, 'Subject 8', '3.00', '3.0', 39, 4, NULL, NULL, NULL, NULL),
(81, 2015, 1, 12, 'Subject 1', '3.00', '1.00', 46, 5, NULL, NULL, NULL, NULL),
(82, 2015, 1, 12, 'Subject 2', '3.00', '1.00', 46, 5, NULL, NULL, NULL, NULL),
(83, 2015, 1, 12, 'Subject 3', '3.00', '1.00', 46, 5, NULL, NULL, NULL, NULL),
(84, 2015, 1, 12, 'Subject 4', '3.00', '1.00', 46, 5, NULL, NULL, NULL, NULL),
(85, 2015, 2, 12, 'Subject 5', '3.00', '1.25', 47, 5, NULL, NULL, NULL, NULL),
(86, 2015, 2, 12, 'Subject 6', '3.00', '1.25', 47, 5, NULL, NULL, NULL, NULL),
(87, 2015, 2, 12, 'Subject 7', '3.00', '1.50', 48, 5, NULL, NULL, NULL, NULL),
(88, 2015, 2, 12, 'Subject 8', '3.00', '1.50', 48, 5, NULL, NULL, NULL, NULL),
(89, 2015, 1, 13, 'Subject 1', '3.00', '1.00', 46, 5, NULL, NULL, NULL, NULL),
(90, 2015, 1, 13, 'Subject 2', '3.00', '1.00', 46, 5, NULL, NULL, NULL, NULL),
(91, 2015, 1, 13, 'Subject 3', '3.00', '1.00', 46, 5, NULL, NULL, NULL, NULL),
(92, 2015, 1, 13, 'Subject 4', '3.00', '1.00', 46, 5, NULL, NULL, NULL, NULL),
(93, 2015, 2, 13, 'Subject 5', '3.00', '1.25', 47, 5, NULL, NULL, NULL, NULL),
(94, 2015, 2, 13, 'Subject 6', '3.00', '1.25', 47, 5, NULL, NULL, NULL, NULL),
(95, 2015, 2, 13, 'Subject 7', '3.00', '1.50', 48, 5, NULL, NULL, NULL, NULL),
(96, 2015, 2, 13, 'Subject 8', '3.00', '1.50', 48, 5, NULL, NULL, NULL, NULL);

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
-- Table structure for table `parttimejobs`
--

CREATE TABLE IF NOT EXISTS `parttimejobs` (
`id` int(11) NOT NULL,
  `job_scholar_id` int(11) NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `job_startDate` date NOT NULL,
  `job_endDate` date NOT NULL,
  `job_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parttimejobs`
--

INSERT INTO `parttimejobs` (`id`, `job_scholar_id`, `job_location`, `job_startDate`, `job_endDate`, `job_description`) VALUES
(6, 2, 'Sample Company 1', '2015-08-01', '2015-08-08', 'test'),
(7, 2, 'Sample Company 4', '2015-08-06', '2015-08-15', 'test'),
(8, 2, 'Sample Company 2', '2015-08-08', '2015-08-29', 'test'),
(9, 2, 'Sample Company 2', '2015-08-15', '2015-08-28', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

CREATE TABLE IF NOT EXISTS `refunds` (
`refund_id` int(11) NOT NULL,
  `refund_amount` decimal(9,2) DEFAULT NULL,
  `refund_smShare` decimal(9,2) NOT NULL,
  `refund_scholarShare` decimal(9,2) NOT NULL,
  `refund_scholar_id` int(11) NOT NULL,
  `refund_tuitionfee_id` int(11) NOT NULL,
  `refund_description` varchar(100) NOT NULL,
  `refund_date` date NOT NULL,
  `uploaded_by` varchar(100) DEFAULT NULL,
  `checked_by` varchar(100) DEFAULT NULL,
  `checked_remark` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `refunds`
--

INSERT INTO `refunds` (`refund_id`, `refund_amount`, `refund_smShare`, `refund_scholarShare`, `refund_scholar_id`, `refund_tuitionfee_id`, `refund_description`, `refund_date`, `uploaded_by`, `checked_by`, `checked_remark`, `updated_by`) VALUES
(1, '15000.00', '1.00', '1.00', 2, 4, 'h', '2015-07-08', NULL, 'Linda', 't', NULL),
(2, '20000.00', '1.00', '1.00', 2, 4, 'h', '2015-07-09', NULL, NULL, NULL, NULL),
(3, '25000.00', '1.00', '1.00', 2, 4, 'h', '2015-07-08', NULL, NULL, NULL, NULL),
(5, '10000.00', '5000.00', '5000.00', 2, 4, 'dean''s lister', '2015-07-28', 'Linda', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scholars`
--

CREATE TABLE IF NOT EXISTS `scholars` (
`scholar_id` int(11) NOT NULL,
  `scholar_firstName` varchar(100) NOT NULL,
  `scholar_lastName` varchar(100) NOT NULL,
  `scholar_middleName` varchar(100) DEFAULT NULL,
  `scholar_gender` enum('Male','Female') NOT NULL,
  `scholar_address` varchar(100) DEFAULT NULL,
  `scholar_school_id` int(11) NOT NULL,
  `scholar_course` varchar(100) DEFAULT NULL,
  `scholars_courseType` enum('Tech-Voc','Non Tech-Voc') NOT NULL,
  `scholars_gradStatus` enum('Graduated','Not Graduated') NOT NULL DEFAULT 'Not Graduated',
  `scholar_yearLevel` int(11) DEFAULT NULL,
  `scholar_email` varchar(100) DEFAULT NULL,
  `scholar_contactNum` int(100) NOT NULL,
  `scholars_allowanceStatus` enum('Granting','Not Granting') NOT NULL DEFAULT 'Not Granting',
  `scholar_cashCardNum` int(100) DEFAULT NULL,
  `scholar_school_area` varchar(100) NOT NULL,
  `scholar_sponsors` varchar(100) DEFAULT NULL,
  `scholar_user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scholars`
--

INSERT INTO `scholars` (`scholar_id`, `scholar_firstName`, `scholar_lastName`, `scholar_middleName`, `scholar_gender`, `scholar_address`, `scholar_school_id`, `scholar_course`, `scholars_courseType`, `scholars_gradStatus`, `scholar_yearLevel`, `scholar_email`, `scholar_contactNum`, `scholars_allowanceStatus`, `scholar_cashCardNum`, `scholar_school_area`, `scholar_sponsors`, `scholar_user_id`) VALUES
(2, 'Syam', 'Daswani', 'Uy Sobierra', 'Male', 'some address', 1, 'BSIT-MI', 'Non Tech-Voc', 'Not Graduated', 4, 'syam@email.com', 1234, 'Granting', 1234, 'NCR', 'Sponsor 1', 2),
(3, 'Kevin', 'Villacorta', 'dafsdf', 'Male', 'address', 1, 'BSIT-MI', 'Non Tech-Voc', 'Not Graduated', 4, 'kevin@email.com', 1234, 'Granting', 12321, 'NCR', NULL, 3),
(4, 'Cindy', 'Cabaliza', 'P.', 'Female', 'Scholar Cindy''s address', 1, 'BSA', 'Non Tech-Voc', 'Not Graduated', 5, 'cindyC@gmail.com', 9111111, 'Granting', 9111111, 'NCR', '', 4),
(5, 'Allona Kriztel', 'Aguirre', 'F.', 'Female', 'scholar Allona''s Address', 1, 'BSA', 'Non Tech-Voc', 'Not Graduated', 3, 'allona@gmail.com', 9222222, 'Granting', 9222222, 'NCR', 'Sponsor 2', 5),
(6, 'Louise Ann', 'Tan', 'U.', 'Female', 'scholar Louise''s Address', 2, 'BS Marketing', 'Non Tech-Voc', 'Not Graduated', 4, 'louise@gmail.com', 93333333, 'Granting', 93333333, 'NCR', NULL, 6),
(7, 'Kim Joshua ', 'Garces', 'B. ', 'Male', 'scholar Kim''s address ', 2, 'BSBA Financial Management', 'Non Tech-Voc', 'Not Graduated', 3, 'kim@gmail.com', 944444444, 'Granting', 944444444, 'NCR', NULL, 7),
(8, 'Isabela', 'Supnet', 'E.', 'Female', 'scholar Isabela''s Address', 3, 'Intramed', 'Tech-Voc', 'Graduated', 7, 'isabelaS@gmail.com', 9555555, 'Not Granting', 9555555, 'NCR', NULL, 8),
(9, 'Kimberly', 'Go', NULL, 'Female', 'scholar Kimerly''s address', 3, 'BS Geography', 'Non Tech-Voc', 'Not Graduated', 4, 'kimberlyG@gmail.com', 9666666, 'Granting', 9666666, 'NCR', NULL, 9),
(10, 'Camille Andrea', 'Sequitin', 'B.', 'Female', 'scholar Camille''s Address', 4, 'BS Computer Engineering', 'Non Tech-Voc', 'Not Graduated', 5, 'camilleS@gmail.com', 9777777, 'Granting', 9777777, 'NCR', NULL, 10),
(11, 'Faye', 'Ramirez', 'M. ', 'Female', 'scholar Faye''s address', 4, 'BS Computer Engineering', 'Non Tech-Voc', 'Not Graduated', 4, 'scholar Faye''s address', 98888888, 'Granting', 9888888, 'NCR', NULL, 11),
(12, 'Rother Jon', 'Bobiles', 'P.', 'Male', 'scholar Rother''s address', 5, 'BS Management Engineering', 'Non Tech-Voc', 'Not Graduated', 3, 'rohter@gmail.com', 9999999, 'Granting', 9999999, 'Davao', 'Sponsor 3', 12),
(13, 'Katrina', 'Aliman', 'G.', 'Female', 'scholar Katrina''s address', 5, 'BS Accountancy', 'Non Tech-Voc', 'Not Graduated', 2, 'katrina@GMAIL.COM', 1000000, 'Granting', 1000000, 'Davao', 'Sponsor 4', 13);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
`School_id` int(11) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `school_area` varchar(45) NOT NULL,
  `school_address` varchar(100) DEFAULT NULL,
  `school_contactEmail` varchar(100) DEFAULT NULL,
  `school_contactNumber` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`School_id`, `school_name`, `school_area`, `school_address`, `school_contactEmail`, `school_contactNumber`) VALUES
(1, 'Asia Pacific College', 'NCR', 'Humabon, Makati, 1232 Kalakhang Maynila', 'test@ee.com', 1),
(2, 'De Lasalle University', 'NCR', '2401 Taft Ave, Malate, Manila, 1004 Metro Manila', 'test@email.com', 23),
(3, 'University Of The Philippines', 'NCR', 'Diliman, Quezon City 1101,Metro Manila', 'upcontact@mail.com', 1111111),
(4, 'Ateneo De Manila University', 'NCR', 'Katipunan Ave, Quezon City, 1108 Metro Manila', 'placeholder@mail.com', 4266001),
(5, 'Saint Louis University', 'Davao', 'Mary Heights, Bakakeng, Baguio, Benguet', 'placeholder2@mail.com', 999999);

-- --------------------------------------------------------

--
-- Table structure for table `tuitionfees`
--

CREATE TABLE IF NOT EXISTS `tuitionfees` (
`tuitionfee_id` int(11) NOT NULL,
  `tuitionfee_scholar_id` int(11) DEFAULT NULL,
  `tuitionfees_term` varchar(10) NOT NULL,
  `tuitionfee_amount` decimal(9,2) DEFAULT NULL,
  `tuitionfee_dateOfEnrollment` date DEFAULT NULL,
  `tuitionfee_dateOfPayment` date DEFAULT NULL,
  `tuitionfee_paidStatus` enum('paid','not paid') DEFAULT NULL,
  `uploaded_by` varchar(100) DEFAULT NULL,
  `checked_by` varchar(100) DEFAULT NULL,
  `checked_remark` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tuitionfees`
--

INSERT INTO `tuitionfees` (`tuitionfee_id`, `tuitionfee_scholar_id`, `tuitionfees_term`, `tuitionfee_amount`, `tuitionfee_dateOfEnrollment`, `tuitionfee_dateOfPayment`, `tuitionfee_paidStatus`, `uploaded_by`, `checked_by`, `checked_remark`, `updated_by`) VALUES
(4, 2, '1', '20000.00', '2015-06-01', NULL, 'not paid', NULL, 'Linda', 'Send for Approval', NULL),
(5, 3, '2', '20000.00', '2015-07-01', '2015-07-29', 'paid', NULL, NULL, NULL, NULL),
(7, 2, '', '10000.00', '2015-07-28', '2015-08-05', 'paid', 'Linda', 'Linda', NULL, 'Linda'),
(8, 4, '', '20000.00', '2015-08-12', '2015-08-12', 'paid', 'Linda', 'Linda', 'Send for Approval', 'Linda');

-- --------------------------------------------------------

--
-- Table structure for table `uploadedforms`
--

CREATE TABLE IF NOT EXISTS `uploadedforms` (
`id` int(11) NOT NULL,
  `uploaded_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `checked_by` varchar(100) DEFAULT NULL,
  `checked_remark` varchar(100) DEFAULT NULL,
  `uploadedForm` varchar(100) NOT NULL,
  `uploaded_scholar_id` int(11) NOT NULL,
  `fileName` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploadedforms`
--

INSERT INTO `uploadedforms` (`id`, `uploaded_by`, `updated_by`, `checked_by`, `checked_remark`, `uploadedForm`, `uploaded_scholar_id`, `fileName`) VALUES
(1, 'Thess', 'Thess', 'Thess', 'as', 'Forms/dc926df99f32377a2cab63a6426e067a1Registration Form ofScholarID 2 FileName Hydrangeas.jpg', 2, 'Registration Form'),
(2, NULL, NULL, NULL, NULL, 'uploads/Grades Form3.pdf', 3, 'Grades Form'),
(3, NULL, NULL, NULL, NULL, 'uploads/Grades Form3.jpg', 3, 'Grades Form'),
(4, NULL, NULL, NULL, NULL, 'uploads/Grades Form2.png', 2, 'Grades Form');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
 ADD PRIMARY KEY (`allowance_id`), ADD KEY `Scholar_Num` (`allowance_scholar_id`), ADD KEY `School_Num` (`allowance_school_id`), ADD KEY `allowance_scholar_id` (`allowance_scholar_id`), ADD KEY `allowance_school_id` (`allowance_school_id`);

--
-- Indexes for table `approved_allowance`
--
ALTER TABLE `approved_allowance`
 ADD PRIMARY KEY (`allowance_id`), ADD KEY `allowance_scholar_id` (`allowance_scholar_id`,`allowance_school_id`);

--
-- Indexes for table `approved_deductions`
--
ALTER TABLE `approved_deductions`
 ADD PRIMARY KEY (`deduction_id`), ADD KEY `deduction_scholar_id` (`deduction_scholar_id`);

--
-- Indexes for table `approved_grades`
--
ALTER TABLE `approved_grades`
 ADD PRIMARY KEY (`grade_id`), ADD KEY `grade_scholar_id` (`grade_scholar_id`,`equivalence_grade_rule`,`School_id`);

--
-- Indexes for table `approved_refunds`
--
ALTER TABLE `approved_refunds`
 ADD PRIMARY KEY (`refund_id`), ADD KEY `refund_scholar_id` (`refund_scholar_id`,`refund_tuitionfee_id`);

--
-- Indexes for table `approved_tuitionfees`
--
ALTER TABLE `approved_tuitionfees`
 ADD PRIMARY KEY (`tuitionfee_id`), ADD KEY `tuitionfee_scholar_id` (`tuitionfee_scholar_id`);

--
-- Indexes for table `approved_uploadedforms`
--
ALTER TABLE `approved_uploadedforms`
 ADD PRIMARY KEY (`id`), ADD KEY `uploaded_scholar_id` (`uploaded_scholar_id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
 ADD PRIMARY KEY (`item_name`,`user_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
 ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `compile`
--
ALTER TABLE `compile`
 ADD PRIMARY KEY (`compile_id`), ADD KEY `compile_scholar_id` (`compile_scholar_id`,`compile_school_id`,`compile_tuitionfee_id`,`compile_grade_id`), ADD KEY `compile_school_id` (`compile_school_id`), ADD KEY `compile_tuitionfee_id` (`compile_tuitionfee_id`), ADD KEY `compile_grade_id` (`compile_grade_id`), ADD KEY `compile_school_id_2` (`compile_school_id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
 ADD PRIMARY KEY (`deduction_id`), ADD KEY `deduction_scholar_id` (`deduction_scholar_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equivalence`
--
ALTER TABLE `equivalence`
 ADD PRIMARY KEY (`equivalence_grade_rule`), ADD KEY `School_id` (`School_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id`), ADD KEY `event_scholar_id` (`event_scholar_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
 ADD PRIMARY KEY (`grade_id`), ADD KEY `grade_scholar_id` (`grade_scholar_id`), ADD KEY `equivalence_grade_rule` (`equivalence_grade_rule`), ADD KEY `School_id` (`School_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `parttimejobs`
--
ALTER TABLE `parttimejobs`
 ADD PRIMARY KEY (`id`), ADD KEY `job_scholar_id` (`job_scholar_id`);

--
-- Indexes for table `refunds`
--
ALTER TABLE `refunds`
 ADD PRIMARY KEY (`refund_id`), ADD KEY `refund_scholar_id` (`refund_scholar_id`,`refund_tuitionfee_id`), ADD KEY `refund_tuitionfee_id` (`refund_tuitionfee_id`);

--
-- Indexes for table `scholars`
--
ALTER TABLE `scholars`
 ADD PRIMARY KEY (`scholar_id`), ADD KEY `scholar_school_id` (`scholar_school_id`), ADD KEY `scholar_user_id` (`scholar_user_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
 ADD PRIMARY KEY (`School_id`);

--
-- Indexes for table `tuitionfees`
--
ALTER TABLE `tuitionfees`
 ADD PRIMARY KEY (`tuitionfee_id`), ADD KEY `tuitionfee_scholar_id` (`tuitionfee_scholar_id`);

--
-- Indexes for table `uploadedforms`
--
ALTER TABLE `uploadedforms`
 ADD PRIMARY KEY (`id`), ADD KEY `scholar_id` (`uploaded_scholar_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_3` (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `allowance`
--
ALTER TABLE `allowance`
MODIFY `allowance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `approved_allowance`
--
ALTER TABLE `approved_allowance`
MODIFY `allowance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `approved_deductions`
--
ALTER TABLE `approved_deductions`
MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `approved_grades`
--
ALTER TABLE `approved_grades`
MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `approved_refunds`
--
ALTER TABLE `approved_refunds`
MODIFY `refund_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `approved_tuitionfees`
--
ALTER TABLE `approved_tuitionfees`
MODIFY `tuitionfee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `approved_uploadedforms`
--
ALTER TABLE `approved_uploadedforms`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `compile`
--
ALTER TABLE `compile`
MODIFY `compile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `equivalence`
--
ALTER TABLE `equivalence`
MODIFY `equivalence_grade_rule` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `parttimejobs`
--
ALTER TABLE `parttimejobs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `refunds`
--
ALTER TABLE `refunds`
MODIFY `refund_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `scholars`
--
ALTER TABLE `scholars`
MODIFY `scholar_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
MODIFY `School_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tuitionfees`
--
ALTER TABLE `tuitionfees`
MODIFY `tuitionfee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `uploadedforms`
--
ALTER TABLE `uploadedforms`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `allowance`
--
ALTER TABLE `allowance`
ADD CONSTRAINT `allowance_ibfk_1` FOREIGN KEY (`allowance_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `allowance_ibfk_2` FOREIGN KEY (`allowance_school_id`) REFERENCES `schools` (`School_id`) ON UPDATE CASCADE;

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `admin` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compile`
--
ALTER TABLE `compile`
ADD CONSTRAINT `compile_ibfk_1` FOREIGN KEY (`compile_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `compile_ibfk_2` FOREIGN KEY (`compile_school_id`) REFERENCES `schools` (`School_id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `compile_ibfk_3` FOREIGN KEY (`compile_tuitionfee_id`) REFERENCES `tuitionfees` (`tuitionfee_id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `compile_ibfk_4` FOREIGN KEY (`compile_grade_id`) REFERENCES `grades` (`grade_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `deductions`
--
ALTER TABLE `deductions`
ADD CONSTRAINT `deductions_ibfk_1` FOREIGN KEY (`deduction_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON UPDATE CASCADE;

--
-- Constraints for table `equivalence`
--
ALTER TABLE `equivalence`
ADD CONSTRAINT `equivalence_ibfk_1` FOREIGN KEY (`School_id`) REFERENCES `schools` (`School_id`);

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`grade_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`equivalence_grade_rule`) REFERENCES `equivalence` (`equivalence_grade_rule`),
ADD CONSTRAINT `grades_ibfk_3` FOREIGN KEY (`School_id`) REFERENCES `equivalence` (`School_id`);

--
-- Constraints for table `parttimejobs`
--
ALTER TABLE `parttimejobs`
ADD CONSTRAINT `parttimejobs_ibfk_1` FOREIGN KEY (`job_scholar_id`) REFERENCES `scholars` (`scholar_id`);

--
-- Constraints for table `refunds`
--
ALTER TABLE `refunds`
ADD CONSTRAINT `refunds_ibfk_1` FOREIGN KEY (`refund_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `refunds_ibfk_2` FOREIGN KEY (`refund_tuitionfee_id`) REFERENCES `tuitionfees` (`tuitionfee_id`) ON UPDATE CASCADE;

--
-- Constraints for table `scholars`
--
ALTER TABLE `scholars`
ADD CONSTRAINT `scholars_ibfk_1` FOREIGN KEY (`scholar_school_id`) REFERENCES `schools` (`School_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tuitionfees`
--
ALTER TABLE `tuitionfees`
ADD CONSTRAINT `tuitionfees_ibfk_1` FOREIGN KEY (`tuitionfee_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
