SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `hackathon` DEFAULT CHARACTER SET utf8 ;
USE `hackathon` ;

-- -----------------------------------------------------
-- Table `hackathon`.`groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`groups` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `restaurant` VARCHAR(255) NOT NULL,
  `count` INT(11) NOT NULL,
  `leavetime` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hackathon`.`restaurants`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`restaurants` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  `description` VARCHAR(45) NULL DEFAULT NULL,
  `distance` VARCHAR(45) NULL DEFAULT NULL,
  `address` VARCHAR(45) NULL DEFAULT NULL,
  `latitude` VARCHAR(45) NULL DEFAULT NULL,
  `longitude` VARCHAR(45) NULL DEFAULT NULL,
  `duration` VARCHAR(45) NULL DEFAULT NULL,
  `place_id` VARCHAR(45) NULL DEFAULT NULL,
  `cuisine` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hackathon`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '			',
  `firstname` VARCHAR(255) NOT NULL,
  `lastname` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `salt` VARCHAR(255) NOT NULL,
  `cohort` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hackathon`.`reviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`reviews` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `review` TEXT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `users_id` INT(11) NOT NULL,
  `restaurants_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_reviews_users_idx` (`users_id` ASC),
  INDEX `fk_reviews_restaurants1_idx` (`restaurants_id` ASC),
  CONSTRAINT `fk_reviews_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `hackathon`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_reviews_restaurants1`
    FOREIGN KEY (`restaurants_id`)
    REFERENCES `hackathon`.`restaurants` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
