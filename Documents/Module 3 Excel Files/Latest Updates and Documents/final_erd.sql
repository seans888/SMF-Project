SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `final_erd`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final_erd`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `auth_key` VARCHAR(32) NOT NULL,
  `password_hash` VARCHAR(255) NOT NULL,
  `password_reset_token` VARCHAR(255) NULL DEFAULT NULL,
  `email` VARCHAR(255) NOT NULL,
  `status` SMALLINT(6) NOT NULL DEFAULT '10',
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `final_erd`.`alumni`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final_erd`.`alumni` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `alumni_id` VARCHAR(100) NOT NULL,
  `alumni_firstname` VARCHAR(255) NOT NULL,
  `alumni_lastname` VARCHAR(255) NOT NULL,
  `alumni_midinit` VARCHAR(5) NULL,
  `alumni_gender` VARCHAR(6) NOT NULL,
  `alumni_address` VARCHAR(45) NULL,
  `alumni_contactno` VARCHAR(45) NULL,
  `alumni_remarks` VARCHAR(255) NULL,
  `alumni_office_local_no` VARCHAR(45) NULL,
  `alumni_email` VARCHAR(255) NULL,
  `alumni_year_graduated` YEAR NOT NULL,
  `alumni_course` VARCHAR(255) NULL,
  `alumni_school` VARCHAR(255) NULL,
  `alumni_status` VARCHAR(255) NULL,
  `alumni_area` VARCHAR(255) NULL,
  `alumni_cur_work` VARCHAR(45) NULL,
  `alumni_prev_work` VARCHAR(45) NULL,
  `alumni_further_study` VARCHAR(45) NULL,
  `alumni_achievements` VARCHAR(255) NULL,
  `alumni_legends` VARCHAR(45) NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_alumni_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_alumni_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `final_erd`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `final_erd`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final_erd`.`employee` (
  `employee_id` INT NOT NULL AUTO_INCREMENT,
  `emp_firstname` VARCHAR(45) NOT NULL,
  `emp_lastname` VARCHAR(45) NOT NULL,
  `emp_midname` VARCHAR(45) NOT NULL,
  `emp_position` VARCHAR(45) NOT NULL,
  `emp_department` VARCHAR(45) NOT NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`employee_id`),
  INDEX `fk_employee_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_employee_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `final_erd`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `final_erd`.`event`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final_erd`.`event` (
  `event_id` INT NOT NULL AUTO_INCREMENT,
  `event_title` VARCHAR(45) NOT NULL,
  `event_descript` VARCHAR(45) NOT NULL,
  `event_date` DATE NOT NULL,
  `event_place` VARCHAR(45) NOT NULL,
  `employee_employee_id` INT NOT NULL,
  PRIMARY KEY (`event_id`),
  INDEX `fk_event_employee1_idx` (`employee_employee_id` ASC),
  CONSTRAINT `fk_event_employee1`
    FOREIGN KEY (`employee_employee_id`)
    REFERENCES `final_erd`.`employee` (`employee_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `final_erd`.`school`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final_erd`.`school` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `school_name` VARCHAR(45) NOT NULL,
  `school_area` VARCHAR(45) NOT NULL,
  `school_address` VARCHAR(45) NOT NULL,
  `school_email` VARCHAR(45) NULL,
  `school_contact` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `final_erd`.`course`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final_erd`.`course` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `course_code` VARCHAR(45) NOT NULL,
  `course_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `final_erd`.`migrated_alumni`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final_erd`.`migrated_alumni` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `migalu_id` VARCHAR(255) NOT NULL,
  `migalu_lastname` VARCHAR(255) NOT NULL,
  `migalu_firstname` VARCHAR(255) NOT NULL,
  `migalu_midinit` VARCHAR(10) NULL,
  `migalu_address` VARCHAR(255) NULL,
  `migalu_gender` VARCHAR(45) NOT NULL,
  `migalu_school` VARCHAR(150) NULL,
  `migalu_course` VARCHAR(150) NULL,
  `migalu_email` VARCHAR(255) NULL,
  `migalu_contactno` VARCHAR(45) NULL,
  `migalu_remarks` VARCHAR(255) NULL,
  `migalu_area` VARCHAR(100) NULL,
  `migrated_office_local_no` VARCHAR(45) NULL,
  `migalu_year_graduated` YEAR NOT NULL,
  `migalu_status` VARCHAR(45) NULL,
  `migalu_cur_work` VARCHAR(255) NULL,
  `migalu_prev_work` VARCHAR(255) NULL,
  `alumni_achievements` VARCHAR(255) NULL,
  `migalu_company` VARCHAR(255) NULL,
  `migalu_legends` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
