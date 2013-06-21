SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `profile`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `profile` ;

CREATE  TABLE IF NOT EXISTS `profile` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `email` VARCHAR(45) NOT NULL ,
  `name` VARCHAR(255) NULL ,
  `phone` INT(255) NULL ,
  `address` TEXT NULL ,
  `employee_code` VARCHAR(20) NOT NULL ,
  `secret_key` VARCHAR(255) NULL ,
  `position` VARCHAR(45) NULL ,
  `date_of_birth` INT NULL ,
  `updated_at` INT NULL ,
  `created_at` INT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  UNIQUE INDEX `employee_code_UNIQUE` (`employee_code` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `user` ;

CREATE  TABLE IF NOT EXISTS `user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  `is_admin` TINYINT(1) NULL ,
  `updated_at` INT NULL ,
  `created_at` INT NULL ,
  `profile_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `user_name_UNIQUE` (`username` ASC) ,
  INDEX `fk_User_Profile_idx` (`profile_id` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `category` ;

CREATE  TABLE IF NOT EXISTS `category` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `updated_at` INT NULL ,
  `created_at` INT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `device`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `device` ;

CREATE  TABLE IF NOT EXISTS `device` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(255) NULL ,
  `serial` VARCHAR(45) NOT NULL ,
  `status` VARCHAR(45) NULL ,
  `updated_at` INT NULL ,
  `created_at` INT NULL ,
  `category_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `serial_UNIQUE` (`serial` ASC) ,
  INDEX `fk_Device_Category1_idx` (`category_id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `order` ;

CREATE  TABLE IF NOT EXISTS `order` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `status` VARCHAR(45) NOT NULL ,
  `request_time` INT NULL ,
  `start_time` INT NULL ,
  `end_time` INT NULL ,
  `update_at` INT NULL ,
  `created_at` INT NULL ,
  `user_id` INT(11) NOT NULL ,
  `device_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_User_device_User1_idx` (`user_id` ASC) ,
  INDEX `fk_User_device_Device1_idx` (`device_id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `favorite`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `favorite` ;

CREATE  TABLE IF NOT EXISTS `favorite` (
  `id` INT NOT NULL ,
  `updated_at` INT NULL ,
  `created_at` INT NULL ,
  `user_id` INT(11) NOT NULL ,
  `device_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_favorite_user1_idx` (`user_id` ASC) ,
  INDEX `fk_favorite_device1_idx` (`device_id` ASC) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
