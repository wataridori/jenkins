DROP TABLE IF EXISTS `order` ;

CREATE  TABLE IF NOT EXISTS `request` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `status` VARCHAR(45) NOT NULL ,
  `request_start_time` INT NULL ,
  `request_end_time` INT NULL ,
  `start_time` INT NULL ,
  `end_time` INT NULL ,
  `updated_at` INT NULL ,
  `created_at` INT NULL ,
  `user_id` INT(11) NOT NULL ,
  `device_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_User_device_User1_idx` (`user_id` ASC) ,
  INDEX `fk_User_device_Device1_idx` (`device_id` ASC) )
ENGINE = InnoDB;