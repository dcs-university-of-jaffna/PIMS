-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema PIMS
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema PIMS
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `PIMS` ;
USE `PIMS` ;

-- -----------------------------------------------------
-- Table `PIMS`.`Patients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PIMS`.`Patients` (
  `PHN` INT NOT NULL,
  `Patient_Name` VARCHAR(60) NULL,
  PRIMARY KEY (`PHN`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PIMS`.`Doctors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PIMS`.`Doctors` (
  `Doctors_Id` INT NOT NULL,
  `Doctor_Name` VARCHAR(60) NULL,
  `Username` VARCHAR(45) NULL,
  `Password` VARCHAR(45) NULL,
  `User_Type` VARCHAR(20) NULL,
  PRIMARY KEY (`Doctors_Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PIMS`.`Managements`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PIMS`.`Managements` (
  `Managements_Id` INT NOT NULL,
  `Ice_packs` TINYINT NULL,
  `Antihistamine` TINYINT NULL,
  `Adrenaline` TINYINT NULL,
  `ICU_Care` TINYINT NULL,
  `Steroids` TINYINT NULL,
  `Renal_Rep_Theraphy` TINYINT NULL,
  `Invasive_Ventilation` TINYINT NULL,
  `Stinger_Scrapped` TINYINT NULL,
  PRIMARY KEY (`Managements_Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PIMS`.`Clinicals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PIMS`.`Clinicals` (
  `Clinicals_Id` INT NOT NULL,
  `Burning_Pain` TINYINT NULL,
  `Pruritus` TINYINT NULL,
  `Vomiting` TINYINT NULL,
  `Bronchospasm` TINYINT NULL,
  `Renal_Failure` TINYINT NULL,
  `Tightness_of_Chest` TINYINT NULL,
  `Urticaria` TINYINT NULL,
  `Laryngeal_Odema` TINYINT NULL,
  `Rhabdomyolysis` TINYINT NULL,
  `Swelling` TINYINT NULL,
  `Nausea` TINYINT NULL,
  `Hypotension` TINYINT NULL,
  `Oliguria` TINYINT NULL,
  `Diarrhoea` TINYINT NULL,
  `Malaise` TINYINT NULL,
  `Facial_Odema` TINYINT NULL,
  `Seizure` TINYINT NULL,
  PRIMARY KEY (`Clinicals_Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PIMS`.`Sites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PIMS`.`Sites` (
  `Sites_Id` INT NOT NULL,
  `Head_Neck` TINYINT NULL,
  `Upper_Limb` TINYINT NULL,
  `Chest` TINYINT NULL,
  `Abdomen` TINYINT NULL,
  `Lower_Limb` TINYINT NULL,
  `Others` VARCHAR(100) NULL,
  PRIMARY KEY (`Sites_Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PIMS`.`Records`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PIMS`.`Records` (
  `Records_Id` INT NOT NULL AUTO_INCREMENT,
  `PHN` INT NOT NULL,
  `Clinical_Id` INT NULL,
  `Management_Id` INT NULL,
  `Toxicity_Type` VARCHAR(45) NOT NULL,
  `Toxicity_Id` INT NOT NULL,
  `Site_Id` INT NULL,
  `Instance_Area` VARCHAR(45) NULL,
  `Instance_Date` VARCHAR(45) NULL,
  `Record_Time` DATETIME NULL,  
  PRIMARY KEY (`Records_Id`),
  CONSTRAINT `Record_Patient_fk`
    FOREIGN KEY (`PHN`)
    REFERENCES `PIMS`.`Patients` (`PHN`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Record_Management_fk`
    FOREIGN KEY (`Management_Id`)
    REFERENCES `PIMS`.`Managements` (`Managements_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Record_Clinical_fk`
    FOREIGN KEY (`Clinical_Id`)
    REFERENCES `PIMS`.`Clinicals` (`Clinicals_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Record_Site_fk`
    FOREIGN KEY (`Site_Id`)
    REFERENCES `PIMS`.`Sites` (`Sites_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PIMS`.`Doctor_Records`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PIMS`.`Doctor_Records` (
  `Record_Id` INT NOT NULL,
  `Doctor_Id` INT NOT NULL,
  `Edit_Time` VARCHAR(45) NULL,
  PRIMARY KEY (`Record_Id`, `Doctor_Id`),
  CONSTRAINT `Doctor_Record_Record_fk`
    FOREIGN KEY (`Record_Id`)
    REFERENCES `PIMS`.`Records` (`Records_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Doctor_Record_Doctor_fk`
    FOREIGN KEY (`Doctor_Id`)
    REFERENCES `PIMS`.`Doctors` (`Doctors_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PIMS`.`Bee_Stings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PIMS`.`Bee_Stings` (
  `Bee_Stings_Id` INT NOT NULL,
  `Number_of_Stings` TINYINT(50) NULL,
  `Place_of_Sting` VARCHAR(45) NULL,
  `Sting_Time` VARCHAR(45) NULL,
  `Cirmustance` TINYINT NULL,
  PRIMARY KEY (`Bee_Stings_Id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
