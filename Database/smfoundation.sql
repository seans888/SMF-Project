-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2015 at 01:13 PM
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
-- Table structure for table `compile`
--

CREATE TABLE IF NOT EXISTS `compile` (
  `compile_id` int(11) NOT NULL AUTO_INCREMENT,
  `compile_scholar_id` int(11) NOT NULL,
  `compile_scholar_first_name` varchar(100) NOT NULL,
  `compile_scholar_last_name` varchar(100) NOT NULL,
  `compile_scholar_middle_initial` varchar(100) NOT NULL,
  `compile_scholar_course` varchar(100) NOT NULL,
  `compile_school_id` int(11) NOT NULL,
  `compile_school_name` varchar(100) NOT NULL,
  `compile_tuition_id` int(11) NOT NULL,
  `compile_tuition_full_amount` int(11) NOT NULL,
  PRIMARY KEY (`compile_id`),
  KEY `compile_tuition_id` (`compile_tuition_id`),
  KEY `compile_school_id` (`compile_school_id`),
  KEY `compile_scholar_id` (`compile_scholar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `grade_id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_school_year` varchar(100) NOT NULL,
  `grade_school_term` varchar(100) NOT NULL,
  `grade_value` varchar(100) NOT NULL,
  `grade_scholar_id` int(11) NOT NULL,
  PRIMARY KEY (`grade_id`),
  KEY `grade_scholar_id` (`grade_scholar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `grade_school_year`, `grade_school_term`, `grade_value`, `grade_scholar_id`) VALUES
(1, '2014-2015', '2', '4.0', 1);

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
-- Table structure for table `scholars`
--

CREATE TABLE IF NOT EXISTS `scholars` (
  `scholar_id` int(11) NOT NULL AUTO_INCREMENT,
  `scholar_first_name` varchar(100) NOT NULL,
  `scholar_last_name` varchar(100) NOT NULL,
  `scholar_middle_initial` varchar(100) NOT NULL,
  `scholar_school_id` int(11) NOT NULL,
  `scholar_course` varchar(100) NOT NULL,
  `scholar_email` varchar(100) NOT NULL,
  PRIMARY KEY (`scholar_id`),
  KEY `scholar_school_id` (`scholar_school_id`),
  KEY `scholar_last_name` (`scholar_last_name`),
  KEY `scholar_last_name_2` (`scholar_last_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `scholars`
--

INSERT INTO `scholars` (`scholar_id`, `scholar_first_name`, `scholar_last_name`, `scholar_middle_initial`, `scholar_school_id`, `scholar_course`, `scholar_email`) VALUES
(1, 'Syam', 'Daswani', 'U.S.', 1, 'BSIT-MI', 'syam@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(100) NOT NULL,
  `school_email` varchar(100) NOT NULL,
  `school_address` varchar(100) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `school_name`, `school_email`, `school_address`) VALUES
(1, 'Asia Pacific College', 'apc@email.com', 'Magallanes');

-- --------------------------------------------------------

--
-- Table structure for table `tuitions`
--

CREATE TABLE IF NOT EXISTS `tuitions` (
  `tuition_id` int(11) NOT NULL AUTO_INCREMENT,
  `tuition_full_amount` varchar(100) NOT NULL,
  `tuition_scholar_id` int(11) NOT NULL,
  PRIMARY KEY (`tuition_id`),
  KEY `tuition_scholar_id` (`tuition_scholar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tuitions`
--

INSERT INTO `tuitions` (`tuition_id`, `tuition_full_amount`, `tuition_scholar_id`) VALUES
(1, '20000', 1);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'V989gHprwtACh1t3KDzR9lJNUtMMC6nl', '$2y$13$fs/mB/b8ENxdHbi.y50J7Oz0Kxk3X8RC8Lnp7Qi1gCO4oMcgemwuq', NULL, 'me@email.com', 10, 1436097729, 1436097729);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`grade_scholar_id`) REFERENCES `scholars` (`scholar_id`);

--
-- Constraints for table `scholars`
--
ALTER TABLE `scholars`
  ADD CONSTRAINT `scholars_ibfk_1` FOREIGN KEY (`scholar_school_id`) REFERENCES `schools` (`school_id`);

--
-- Constraints for table `tuitions`
--
ALTER TABLE `tuitions`
  ADD CONSTRAINT `tuitions_ibfk_1` FOREIGN KEY (`tuition_scholar_id`) REFERENCES `scholars` (`scholar_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
