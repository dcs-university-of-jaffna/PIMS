-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 05:33 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pis`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `PIS`.`Patients` (
  `PHN` INT NOT NULL,
  `Patient_Name` VARCHAR(60) NULL,
  `created_at` VARCHAR(45) NULL,
  `updated_at` VARCHAR(45) NULL,
  PRIMARY KEY (`PHN`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `PIS`.`Doctors` (
  `Doctor_Id` INT NOT NULL,
  `Doctor_Name` VARCHAR(60) NULL,
  `Username` VARCHAR(45) NULL,
  `Password` VARCHAR(45) NULL,
  `Type` VARCHAR(20) NULL,
  PRIMARY KEY (`Doctor_Id`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `PIS`.`Managements` (
  `Management_Id` INT NOT NULL,
  `Ice_packs` TINYINT NULL,
  `Antihistamine` TINYINT NULL,
  `Adrenaline` TINYINT NULL,
  `ICU_Care` TINYINT NULL,
  `Steroids` TINYINT NULL,
  `Renal_Rep_Theraphy` TINYINT NULL,
  `Invasive_Ventilation` TINYINT NULL,
  `Stinger_Scrapped` TINYINT NULL,
  PRIMARY KEY (`Management_Id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `PIS`.`Clinicals` (
  `Clinical_Id` INT NOT NULL,
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
  PRIMARY KEY (`Clinical_Id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `PIS`.`Sites` (
  `Site_Id` INT NOT NULL,
  `Head_Neck` TINYINT NULL,
  `Upper_Limb` TINYINT NULL,
  `Chest` TINYINT NULL,
  `Abdomen` TINYINT NULL,
  `Lower_Limb` TINYINT NULL,
  `Others` VARCHAR(100) NULL,
  PRIMARY KEY (`Site_Id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `PIS`.`Records` (
  `Record_Id` INT NOT NULL AUTO_INCREMENT,
  `PHN` INT NOT NULL,
  `Clinical_Id` INT NULL,
  `Management_Id` INT NULL,
  `Toxicity_Type` VARCHAR(45) NOT NULL,
  `Toxicity_Id` INT NOT NULL,
  `Site_Id` INT NULL,
  `Record_Time` DATETIME NULL,  
  PRIMARY KEY (`Record_Id`),
  CONSTRAINT `Record_Patient_fk`
    FOREIGN KEY (`PHN`)
    REFERENCES `PIS`.`Patients` (`PHN`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Record_Management_fk`
    FOREIGN KEY (`Management_Id`)
    REFERENCES `PIS`.`Managements` (`Management_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Record_Clinical_fk`
    FOREIGN KEY (`Clinical_Id`)
    REFERENCES `PIS`.`Clinicals` (`Clinical_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Record_Site_fk`
    FOREIGN KEY (`Site_Id`)
    REFERENCES `PIS`.`Sites` (`Site_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `PIS`.`Doctor_Records` (
  `Record_Id` INT NOT NULL,
  `Doctor_Id` INT NOT NULL,
  `Edit_Time` VARCHAR(45) NULL,
  PRIMARY KEY (`Record_Id`, `Doctor_Id`),
  CONSTRAINT `Doctor_Record_Record_fk`
    FOREIGN KEY (`Record_Id`)
    REFERENCES `PIS`.`Records` (`Record_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Doctor_Record_Doctor_fk`
    FOREIGN KEY (`Doctor_Id`)
    REFERENCES `PIS`.`Doctors` (`Doctor_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

 CREATE TABLE IF NOT EXISTS `PIS`.`Bee_Stings` (
  `Bee_Sting_Id` INT NOT NULL,
  `Number_of_Stings` TINYINT(50) NULL,
  `Place_of_Sting` VARCHAR(45) NULL,
  `Sting_Time` VARCHAR(45) NULL,
  `Cirmustance` TINYINT NULL,
  PRIMARY KEY (`Bee_Sting_Id`))
ENGINE = InnoDB;


CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rayan', 'rayanaradha1993@gmail.com', NULL, '$2y$10$duDGZqjIk6F4ES/euG5eD.qkr9PT2lk0qs4Nn8lSWzHMV/fqJrO8i', NULL, '2019-07-26 09:19:35', '2019-07-26 09:19:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
