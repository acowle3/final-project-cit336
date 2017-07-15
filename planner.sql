-- MySQL Script generated by MySQL Workbench
-- 07/13/17 00:57:00
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema planner
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `planner` ;

-- -----------------------------------------------------
-- Schema planner
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `planner` DEFAULT CHARACTER SET utf8 ;
USE `planner` ;

-- -----------------------------------------------------
-- Table `planner`.`weeks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `planner`.`weeks` ;

CREATE TABLE IF NOT EXISTS `planner`.`weeks` (
  `monStartDate` DATE NOT NULL,
  `monday` VARCHAR(1000) NULL,
  `tuesday` VARCHAR(1000) NULL,
  `wednesday` VARCHAR(1000) NULL,
  `thursday` VARCHAR(1000) NULL,
  `friday` VARCHAR(1000) NULL,
  `saturday` VARCHAR(1000) NULL,
  `sunday` VARCHAR(1000) NULL,
  PRIMARY KEY (`monStartDate`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;