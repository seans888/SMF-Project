-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2015 at 03:11 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'Y_OYGTahIQ0tqFf0o5a4jjDSeXEofOld', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'me@email.com', 10, 1436426903, 1436426903);

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE IF NOT EXISTS `allowance` (
  `allowance_id` int(11) NOT NULL,
  `allowance_amount` int(11) DEFAULT NULL,
  `allowance_remark` varchar(255) DEFAULT NULL,
  `allowance_scholar_id` int(11) DEFAULT NULL,
  `allowance_school_id` int(11) DEFAULT NULL,
  `allowance_payStatus` enum('paid','not paid') DEFAULT NULL,
  `benefit_allowance_id` int(11) DEFAULT NULL,
  `allowance_scholar_lastName` varchar(100) DEFAULT NULL,
  `allowance_scholar_firstName` varchar(100) DEFAULT NULL,
  `allowance_scholar_middleName` varchar(100) DEFAULT NULL,
  `allowance_paidDate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowance`
--

INSERT INTO `allowance` (`allowance_id`, `allowance_amount`, `allowance_remark`, `allowance_scholar_id`, `allowance_school_id`, `allowance_payStatus`, `benefit_allowance_id`, `allowance_scholar_lastName`, `allowance_scholar_firstName`, `allowance_scholar_middleName`, `allowance_paidDate`) VALUES
(1, 10000, 'Allowance', 2, 1, 'not paid', NULL, NULL, NULL, NULL, '2015-07-25'),
(2, 10000, 'test', 3, 1, 'paid', NULL, NULL, NULL, NULL, '2015-07-14');

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
-- Table structure for table `benefit`
--

CREATE TABLE IF NOT EXISTS `benefit` (
  `benefit_id` int(11) NOT NULL,
  `benefit_amount` int(11) DEFAULT NULL,
  `benefit_scholarShare` int(11) DEFAULT NULL,
  `benefit_tuitionfee_id` int(11) DEFAULT NULL,
  `benefit_scholar_id` int(11) DEFAULT NULL,
  `benefit_school_id` int(11) DEFAULT NULL,
  `benefit_scholar_lastName` varchar(100) DEFAULT NULL,
  `benefit_scholar_firstName` varchar(100) DEFAULT NULL,
  `benefit_scholar_middleName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benefit`
--

INSERT INTO `benefit` (`benefit_id`, `benefit_amount`, `benefit_scholarShare`, `benefit_tuitionfee_id`, `benefit_scholar_id`, `benefit_school_id`, `benefit_scholar_lastName`, `benefit_scholar_firstName`, `benefit_scholar_middleName`) VALUES
(1, 10000, 5000, NULL, 2, 1, NULL, NULL, NULL),
(2, 20000, 10000, 5, 3, 1, NULL, NULL, NULL);

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
-- Table structure for table `equivalence`
--

CREATE TABLE IF NOT EXISTS `equivalence` (
  `equivalence_grade_rule` int(11) NOT NULL,
  `School_id` int(11) NOT NULL,
  `School_Grade_Denomination` varchar(10) NOT NULL,
  `Letter Grade` varchar(10) DEFAULT NULL,
  `School_Grade_Equivalent_Lower` decimal(5,2) NOT NULL,
  `School_Grade_Equivalent_Upper` decimal(5,2) NOT NULL,
  `School_Grade_Rating` varchar(255) NOT NULL,
  `School_Grade_Foundation_Rating` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equivalence`
--

INSERT INTO `equivalence` (`equivalence_grade_rule`, `School_id`, `School_Grade_Denomination`, `Letter Grade`, `School_Grade_Equivalent_Lower`, `School_Grade_Equivalent_Upper`, `School_Grade_Rating`, `School_Grade_Foundation_Rating`) VALUES
(1, 1, '4.0', 'A', '95.00', '100.00', 'EXCELLENT', 'PASS'),
(2, 1, '3.5', 'A', '91.00', '94.00', 'VERY GOOD', 'PASS'),
(3, 1, '3.0', 'B+', '87.00', '90.00', 'GOOD', 'PASS'),
(4, 1, '2.5', 'B', '83.00', '86.00', 'ABOVE SATISFACTORY', 'PASS'),
(5, 1, '2.0', 'B-', '79.00', '82.00', 'SATISFACTORY', 'PASS'),
(6, 1, '1.5', 'C', '75.00', '78.00', 'FAIR', 'PASS'),
(7, 1, '1.0', 'D', '70.00', '74.00', 'PASS', 'PASS'),
(8, 1, 'R', 'R', '0.00', '69.00', 'REPEAT', 'FAIL'),
(9, 1, '0.0', 'F', '0.00', '0.00', 'FAIL', 'FAIL'),
(10, 1, 'N.G', 'N.G', '0.00', '0.00', 'NO GRADE', 'FAIL'),
(11, 1, 'A.W', 'A.W', '0.00', '0.00', 'AUTHORIZED WITHDRAWAL', 'FAIL'),
(12, 2, '4.0', 'A', '95.00', '100.00', 'EXCELLENT', 'PASS'),
(13, 2, '3.5', '', '91.00', '94.00', 'SUPERIOR', 'PASS'),
(14, 2, '3.0', 'B+', '87.00', '90.00', 'VERY GOOD', 'PASS'),
(15, 2, '2.5', 'B', '83.00', '86.00', 'GOOD', 'PASS'),
(16, 2, '2.0', 'B-', '79.00', '82.00', 'SATISFACTORY', 'PASS'),
(17, 2, '1.5', 'C', '75.00', '78.00', 'FAIR', 'PASS'),
(18, 2, '1.0', 'D', '70.00', '74.00', 'PASSED', 'PASS'),
(19, 2, 'AUDIT', NULL, '0.00', '0.00', 'AUDIT', NULL),
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
(35, 3, 'INC', NULL, '0.00', '0.00', 'INCOMPLETE REQUIREMENTS', 'FAIL'),
(36, 3, 'DRP', NULL, '0.00', '0.00', 'DROP', 'FAIL'),
(37, 4, '4.0', 'A', '92.00', '100.00', 'PASS', 'PASS'),
(38, 4, '3.5', 'B+', '87.00', '91.00', 'PASS', 'PASS'),
(39, 4, '3.0', 'B', '83.00', '86.00', 'PASS', 'PASS'),
(40, 4, '2.5', 'C+', '79.00', '82.00', 'PASS', 'PASS'),
(41, 4, '2.0', 'C', '75.00', '78.00', 'PASS', 'PASS'),
(42, 4, '1.0', 'D', '70.00', '74.00', 'PASS', 'PASS'),
(43, 4, '0.0', 'F', '0.00', '69.00', 'FAIL', 'FAIL'),
(44, 4, 'INC', 'INC', '0.00', '0.00', 'INCOMPLETE REQUIREMENTS', 'FAIL'),
(45, 4, 'WP', 'WP', '0.00', '0.00', 'WITHDRAWAL WITH PERMISSION', 'FAIL'),
(46, 5, '1.00', 'A', '97.00', '99.00', 'PASS', 'PASS'),
(47, 5, '1.25', 'A-', '94.00', '96.00', 'PASS', 'PASS'),
(48, 5, '1.50', 'B+', '91.00', '93.00', 'PASS', 'PASS'),
(49, 5, '1.75', 'B', '88.00', '90.00', 'PASS', 'PASS'),
(50, 5, '2.00', 'B-', '85.00', '87.00', 'PASS', 'PASS'),
(51, 5, '2.50', 'C+', '80.00', '84.00', 'PASS', 'PASS'),
(52, 5, '3.00', 'C', '75.00', '79.00', 'PASS', 'PASS'),
(53, 5, '4.00', 'D', '70.00', '74.00', 'PASS', 'PASS'),
(54, 5, '5.00', 'F', '0.00', '69.00', 'FAIL', 'FAIL'),
(55, 5, 'NC', 'NC', '0.00', '0.00', 'NO CREDIT', 'FAIL'),
(56, 5, 'WP', 'WP', '0.00', '0.00', 'WITHDRAWAL WITH PERMISSION', 'FAIL'),
(57, 5, 'D', 'DR', '0.00', '0.00', 'DROP', 'FAIL');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `start_date`, `end_date`, `event_scholar_id`) VALUES
(1, 'Payment to Asia Pacific College', 'Pay', '2015-07-01', '2015-07-02', 0),
(2, 'Payment to Asia Pacific College', 'et', '2015-07-02', '2015-07-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failures`
--

CREATE TABLE IF NOT EXISTS `failures` (
  `fail_id` int(11) NOT NULL,
  `fail_subject` varchar(45) DEFAULT NULL,
  `fail_units` int(11) DEFAULT NULL,
  `fail_scholar_id` int(11) DEFAULT NULL,
  `fail_school_id` int(11) DEFAULT NULL,
  `failures_scholar_lastName` varchar(100) DEFAULT NULL,
  `failures_scholar_firstName` varchar(100) DEFAULT NULL,
  `failures_scholar_middleName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `grade_id` int(11) NOT NULL,
  `grade_schoolYear` int(11) DEFAULT NULL,
  `grade_Term` int(11) DEFAULT NULL,
  `grade_scholar_id` int(11) DEFAULT NULL,
  `grade_scholar_lastName` varchar(100) DEFAULT NULL,
  `grade_scholar_firstName` varchar(100) DEFAULT NULL,
  `grade_scholar_middleName` varchar(100) DEFAULT NULL,
  `grade_value` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `grade_schoolYear`, `grade_Term`, `grade_scholar_id`, `grade_scholar_lastName`, `grade_scholar_firstName`, `grade_scholar_middleName`, `grade_value`) VALUES
(15, 2015, 3, 2, '', '', '', '4.0'),
(16, 2015, 2, 3, NULL, NULL, NULL, '4.0');

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
  `scholar_yearLevel` int(11) DEFAULT NULL,
  `scholar_email` varchar(100) DEFAULT NULL,
  `scholar_contactNum` int(100) NOT NULL,
  `scholar_cashCardNum` int(100) DEFAULT NULL,
  `scholar_school_area` enum('Provincial','NCR') NOT NULL,
  `scholar_user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scholars`
--

INSERT INTO `scholars` (`scholar_id`, `scholar_firstName`, `scholar_lastName`, `scholar_middleName`, `scholar_gender`, `scholar_address`, `scholar_school_id`, `scholar_course`, `scholar_yearLevel`, `scholar_email`, `scholar_contactNum`, `scholar_cashCardNum`, `scholar_school_area`, `scholar_user_id`) VALUES
(2, 'Syam', 'Daswani', 'Uy Sobierra', 'Male', 'some address', 1, 'BSIT-MI', 4, 'syam@email.com', 1234, 1234, 'NCR', 2),
(3, 'Kevin', 'Villacorta', 'dafsdf', 'Male', 'address', 1, 'BSIT-MI', 4, 'kevin@email.com', 1234, 12321, 'NCR', 3);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `school_area` enum('Provincial','NCR') NOT NULL,
  `school_address` varchar(100) DEFAULT NULL,
  `school_contactEmail` varchar(100) DEFAULT NULL,
  `school_contactNumber` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `school_name`, `school_area`, `school_address`, `school_contactEmail`, `school_contactNumber`) VALUES
(1, 'Asia Pacific College', 'Provincial', 'some address', 'test@ee.com', 1),
(2, 'De Lasalle University', 'NCR', 'address', 'test@email.com', 23),
(3, 'University Of The Philippines', 'NCR', 'UP Address', 'UP contact', 1111111),
(4, 'Ateneo De Manila University', 'NCR', 'Katipunan Ave, Quezon City, 1108 Metro Manila', NULL, 4266001),
(5, 'Saint Louis University', 'Provincial', NULL, NULL, 999999);

-- --------------------------------------------------------

--
-- Table structure for table `tuitionfees`
--

CREATE TABLE IF NOT EXISTS `tuitionfees` (
  `tuitionfee_id` int(11) NOT NULL,
  `tuitionfee_scholar_id` int(11) DEFAULT NULL,
  `tuitionfee_scholar_lastName` varchar(100) DEFAULT NULL,
  `tuitionfee_scholar_firstName` varchar(100) DEFAULT NULL,
  `tuitionfee_scholar_middleName` varchar(100) DEFAULT NULL,
  `tuitionfee_amount` int(11) DEFAULT NULL,
  `tuitionfee_dateOfEnrollment` date DEFAULT NULL,
  `tuitionfee_dateOfPayment` date DEFAULT NULL,
  `tuitionfee_paidStatus` enum('paid','not paid') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tuitionfees`
--

INSERT INTO `tuitionfees` (`tuitionfee_id`, `tuitionfee_scholar_id`, `tuitionfee_scholar_lastName`, `tuitionfee_scholar_firstName`, `tuitionfee_scholar_middleName`, `tuitionfee_amount`, `tuitionfee_dateOfEnrollment`, `tuitionfee_dateOfPayment`, `tuitionfee_paidStatus`) VALUES
(4, 2, NULL, NULL, NULL, 20000, NULL, NULL, 'paid'),
(5, 3, NULL, NULL, NULL, 20000, '2015-07-01', '2015-07-29', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `uploadedforms`
--

CREATE TABLE IF NOT EXISTS `uploadedforms` (
  `id` int(11) NOT NULL,
  `scholar_lastName` varchar(100) NOT NULL,
  `scholar_firstName` varchar(100) NOT NULL,
  `scholar_middleName` varchar(100) NOT NULL,
  `uploadedForm` varchar(100) NOT NULL,
  `scholar_id` int(11) NOT NULL
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'scholar', 'Y_OYGTahIQ0tqFf0o5a4jjDSeXEofOld', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'me@email.com', 10, 1436426903, 1436426903),
(3, 'scholar2', 'kgJz_-7RaOwWQpjrUrV1QsenhrKAgFr8', '$2y$13$RRQyqJjUYmqZ2H2vtiNNouPE5pD04UQ3h6x2so6vIqOXtxOPuXGDO', NULL, 'scholar@email.com', 10, 1436766072, 1436766072);

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
  ADD PRIMARY KEY (`allowance_id`), ADD KEY `Scholar_Num` (`allowance_scholar_id`), ADD KEY `School_Num` (`allowance_school_id`), ADD KEY `allowance_scholar_id` (`allowance_scholar_id`), ADD KEY `allowance_school_id` (`allowance_school_id`), ADD KEY `benefit_allowance_id` (`benefit_allowance_id`);

--
-- Indexes for table `benefit`
--
ALTER TABLE `benefit`
  ADD PRIMARY KEY (`benefit_id`), ADD KEY `Tuition_Num` (`benefit_tuitionfee_id`), ADD KEY `Scholar_Num` (`benefit_scholar_id`), ADD KEY `School_Num` (`benefit_school_id`);

--
-- Indexes for table `compile`
--
ALTER TABLE `compile`
  ADD PRIMARY KEY (`compile_id`), ADD KEY `compile_scholar_id` (`compile_scholar_id`,`compile_school_id`,`compile_tuitionfee_id`,`compile_grade_id`), ADD KEY `compile_school_id` (`compile_school_id`), ADD KEY `compile_tuitionfee_id` (`compile_tuitionfee_id`), ADD KEY `compile_grade_id` (`compile_grade_id`), ADD KEY `compile_school_id_2` (`compile_school_id`);

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
-- Indexes for table `failures`
--
ALTER TABLE `failures`
  ADD PRIMARY KEY (`fail_id`), ADD KEY `Scholar_Num` (`fail_scholar_id`), ADD KEY `School_Num` (`fail_school_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`), ADD KEY `grade_scholar_id` (`grade_scholar_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `scholars`
--
ALTER TABLE `scholars`
  ADD PRIMARY KEY (`scholar_id`), ADD KEY `scholar_school_id` (`scholar_school_id`), ADD KEY `scholar_user_id` (`scholar_user_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `tuitionfees`
--
ALTER TABLE `tuitionfees`
  ADD PRIMARY KEY (`tuitionfee_id`), ADD KEY `tuitionfee_scholar_id` (`tuitionfee_scholar_id`);

--
-- Indexes for table `uploadedforms`
--
ALTER TABLE `uploadedforms`
  ADD PRIMARY KEY (`id`), ADD KEY `scholar_id` (`scholar_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `allowance`
--
ALTER TABLE `allowance`
  MODIFY `allowance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `benefit`
--
ALTER TABLE `benefit`
  MODIFY `benefit_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `compile`
--
ALTER TABLE `compile`
  MODIFY `compile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `equivalence`
--
ALTER TABLE `equivalence`
  MODIFY `equivalence_grade_rule` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `failures`
--
ALTER TABLE `failures`
  MODIFY `fail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `scholars`
--
ALTER TABLE `scholars`
  MODIFY `scholar_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tuitionfees`
--
ALTER TABLE `tuitionfees`
  MODIFY `tuitionfee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `uploadedforms`
--
ALTER TABLE `uploadedforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `allowance`
--
ALTER TABLE `allowance`
ADD CONSTRAINT `allowance_ibfk_1` FOREIGN KEY (`allowance_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `allowance_ibfk_2` FOREIGN KEY (`allowance_school_id`) REFERENCES `schools` (`school_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `allowance_ibfk_3` FOREIGN KEY (`benefit_allowance_id`) REFERENCES `benefit` (`benefit_id`) ON UPDATE CASCADE;

--
-- Constraints for table `benefit`
--
ALTER TABLE `benefit`
ADD CONSTRAINT `benefit_ibfk_1` FOREIGN KEY (`benefit_tuitionfee_id`) REFERENCES `tuitionfees` (`tuitionfee_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `benefit_ibfk_2` FOREIGN KEY (`benefit_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `benefit_ibfk_3` FOREIGN KEY (`benefit_school_id`) REFERENCES `schools` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `compile`
--
ALTER TABLE `compile`
ADD CONSTRAINT `compile_ibfk_1` FOREIGN KEY (`compile_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `compile_ibfk_2` FOREIGN KEY (`compile_school_id`) REFERENCES `schools` (`school_id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `compile_ibfk_3` FOREIGN KEY (`compile_tuitionfee_id`) REFERENCES `tuitionfees` (`tuitionfee_id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `compile_ibfk_4` FOREIGN KEY (`compile_grade_id`) REFERENCES `grades` (`grade_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `equivalence`
--
ALTER TABLE `equivalence`
ADD CONSTRAINT `equivalence_ibfk_1` FOREIGN KEY (`School_id`) REFERENCES `schools` (`school_id`);

--
-- Constraints for table `failures`
--
ALTER TABLE `failures`
ADD CONSTRAINT `failures_ibfk_1` FOREIGN KEY (`fail_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `failures_ibfk_2` FOREIGN KEY (`fail_school_id`) REFERENCES `schools` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`grade_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `scholars`
--
ALTER TABLE `scholars`
ADD CONSTRAINT `scholars_ibfk_1` FOREIGN KEY (`scholar_school_id`) REFERENCES `schools` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tuitionfees`
--
ALTER TABLE `tuitionfees`
ADD CONSTRAINT `tuitionfees_ibfk_1` FOREIGN KEY (`tuitionfee_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `uploadedforms`
--
ALTER TABLE `uploadedforms`
ADD CONSTRAINT `uploadedforms_ibfk_1` FOREIGN KEY (`scholar_id`) REFERENCES `scholars` (`scholar_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
