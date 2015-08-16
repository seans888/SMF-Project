-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2015 at 03:36 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smf_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `alumni_id` int(11) NOT NULL AUTO_INCREMENT,
  `alumni_firstname` varchar(45) NOT NULL,
  `alumni_lastname` varchar(45) NOT NULL,
  `alumni_midname` varchar(45) NOT NULL,
  `alumni_course` varchar(45) NOT NULL,
  `alumni_school` varchar(45) NOT NULL,
  `alumni_year_graduated` year(4) NOT NULL,
  `alumni_status` varchar(45) NOT NULL,
  `alumni_email` varchar(45) NOT NULL,
  `alumni_cur_work` varchar(45) DEFAULT NULL,
  `alumni_prev_work` varchar(45) DEFAULT NULL,
  `alumni_further_study` varchar(45) DEFAULT NULL,
  `user_user_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`alumni_id`),
  KEY `fk_alumni_user1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumni_id`, `alumni_firstname`, `alumni_lastname`, `alumni_midname`, `alumni_course`, `alumni_school`, `alumni_year_graduated`, `alumni_status`, `alumni_email`, `alumni_cur_work`, `alumni_prev_work`, `alumni_further_study`, `user_user_id`, `user_id`) VALUES
(1, 'John Michael', 'Santos', 'Santo', 'BSIT', 'Asia Pacific College', 2015, 'Single', 'jhnmchlsantos@gmail.com', 'IBM Database Administrator', 'None', 'None', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL,
  `emp_firstname` varchar(45) NOT NULL,
  `emp_lastname` varchar(45) NOT NULL,
  `emp_midname` varchar(45) NOT NULL,
  `emp_position` varchar(45) NOT NULL,
  `emp_department` varchar(45) NOT NULL,
  `user_user_id` int(11) NOT NULL,
  `user_user_id1` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`employee_id`,`user_user_id`),
  KEY `fk_employee_user1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `emp_firstname`, `emp_lastname`, `emp_midname`, `emp_position`, `emp_department`, `user_user_id`, `user_user_id1`, `user_id`) VALUES
(1, 'Christine', 'Deleon', 'Acuin', 'Manager', 'HR', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(45) NOT NULL,
  `event_descript` varchar(45) NOT NULL,
  `event_date` date NOT NULL,
  `event_place` varchar(45) NOT NULL,
  `employee_employee_id` int(11) NOT NULL,
  `employee_user_user_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `fk_event_employee1_idx` (`employee_employee_id`,`employee_user_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_descript`, `event_date`, `event_place`, `employee_employee_id`, `employee_user_user_id`) VALUES
(2, 'Alumni Homecoming 2015', 'Homecoming', '2015-08-12', 'SM MOA Arena', 1, 1),
(3, 'SM Foundation Meeting', 'Activities for the alumni of SM Foundation', '2015-08-14', 'SMX MOA Arena', 1, 1),
(4, 'SM Foundation Meeting', 'Activities for the alumni of SM Foundation', '2015-08-14', 'SMX MOA Arena', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `logs_id` int(11) NOT NULL,
  `logs_descript` varchar(45) NOT NULL,
  `logs_date` datetime NOT NULL,
  `employee_employee_id` int(11) NOT NULL,
  `employee_user_user_id` int(11) NOT NULL,
  PRIMARY KEY (`logs_id`),
  KEY `fk_logs_employee1_idx` (`employee_employee_id`,`employee_user_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `migration_id` int(11) NOT NULL,
  `migration_year` varchar(45) DEFAULT NULL,
  `employee_employee_id` int(11) NOT NULL,
  `employee_user_user_id` int(11) NOT NULL,
  PRIMARY KEY (`migration_id`),
  KEY `fk_migration_employee1_idx` (`employee_employee_id`,`employee_user_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `testimonial_id` int(11) NOT NULL AUTO_INCREMENT,
  `testimonee` varchar(200) NOT NULL,
  `testimonial_name` varchar(50) NOT NULL,
  `testimonial_description` varchar(255) NOT NULL,
  `testiomonial_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`testimonial_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonial_id`, `testimonee`, `testimonial_name`, `testimonial_description`, `testiomonial_date`) VALUES
(1, '', 'Christine Jocelle De Leon', 'I am now a computer engineering by the help of Tatang and the SM Foundation', '2015-08-01 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jmsantos', 'm-ks5pCxZUdc_DaU_E4KCo2JghVPs9Id', '$2y$13$DDNFcGdyzmZ4XEtWIeYPxuai5Hv0fyMUWouqIbBEOibgtkGd7dFWG', NULL, 'jhnmchlsantos@gmail.com', 'employee', 10, 1437447370, 1437447370),
(2, 'sample', 'vzYHSTKdLbu4ump6DKLQJvg1YObIoLDx', '$2y$13$pL5mKEHJqr4BkhBufCLNVuTaC0k6SZK9jrkAJCG9J6m73zh2e.Sv.', NULL, 'sample@gmai.com', 'student', 10, 1437450349, 1437450349),
(3, 'admin', 'ZmgAnwt9V6vkpoys6rgyo91nyLFWNEh-', '$2y$13$cS9JJiUP2sOzuraAuGkVlu2M7Drne/T6PdpDJiAq1eUUOb8oNSpcW', NULL, 'admin@yahoo.com', 'admin', 10, 1438661803, 1438661803),
(4, 'andes', '5Z-moPNvIplX8evpF66SIKndlfDwx0Mi', '$2y$13$NLH2ywYgGuc4jgEOqitMS.ZU6XwKWgXvPjdZbGAZPRFdONrwdYZXi', NULL, 'andes@gmail.com', 'employee', 10, 1439368319, 1439368319),
(11, 'gene', '_3yXlkvGw9QJv_mr_Qi7_zfLSqPyeMXO', '$2y$13$fJxrVxVEHw1DLI.LSCPbr.Tx/6p9hUZTFlTVEwcoZtAAzxMJYuidm', NULL, 'gene@yahoo.com', 'student', 10, 1439372352, 1439372352),
(13, 'lindaa', 'nKu16cVpa5vxAeLuJ0VmC9J7bnyxW92P', '$2y$13$hxFNPClVB/HVd8I6vlL8BuHQy7K/qkjl8aECbPfUgfwL1lFi0Usc.', NULL, 'linda@gmail.com', 'admin', 10, 1439439009, 1439439009);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `fk_alumni_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_employee_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event_employee1` FOREIGN KEY (`employee_employee_id`, `employee_user_user_id`) REFERENCES `employee` (`employee_id`, `user_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_employee1` FOREIGN KEY (`employee_employee_id`, `employee_user_user_id`) REFERENCES `employee` (`employee_id`, `user_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `migration`
--
ALTER TABLE `migration`
  ADD CONSTRAINT `fk_migration_employee1` FOREIGN KEY (`employee_employee_id`, `employee_user_user_id`) REFERENCES `employee` (`employee_id`, `user_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
