-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2019 at 09:18 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PIMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bee_Stings`
--

CREATE TABLE `Bee_Stings` (
  `Bee_Stings_Id` bigint(20) NOT NULL,
  `Number_of_Stings` tinyint(50) DEFAULT NULL,
  `Place_of_Sting` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sting_Time` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cirmustance` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Clinicals`
--

CREATE TABLE `Clinicals` (
  `Clinicals_Id` bigint(20) NOT NULL,
  `Burning_Pain` tinyint(1) DEFAULT NULL,
  `Pruritus` tinyint(1) DEFAULT NULL,
  `Vomiting` tinyint(1) DEFAULT NULL,
  `Bronchospasm` tinyint(1) DEFAULT NULL,
  `Renal_Failure` tinyint(1) DEFAULT NULL,
  `Tightness_of_Chest` tinyint(1) DEFAULT NULL,
  `Urticaria` tinyint(1) DEFAULT NULL,
  `Laryngeal_Odema` tinyint(1) DEFAULT NULL,
  `Rhabdomyolysis` tinyint(1) DEFAULT NULL,
  `Swelling` tinyint(1) DEFAULT NULL,
  `Nausea` tinyint(1) DEFAULT NULL,
  `Hypotension` tinyint(1) DEFAULT NULL,
  `Oliguria` tinyint(1) DEFAULT NULL,
  `Diarrhoea` tinyint(1) DEFAULT NULL,
  `Malaise` tinyint(1) DEFAULT NULL,
  `Facial_Odema` tinyint(1) DEFAULT NULL,
  `Seizure` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Doctor_Records`
--

CREATE TABLE `Doctor_Records` (
  `Record_Id` bigint(20) NOT NULL,
  `Doctor_Id` bigint(20) NOT NULL,
  `Edit_Time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Managements`
--

CREATE TABLE `Managements` (
  `Managements_Id` bigint(20) NOT NULL,
  `Ice_packs` tinyint(1) DEFAULT NULL,
  `Antihistamine` tinyint(1) DEFAULT NULL,
  `Adrenaline` tinyint(1) DEFAULT NULL,
  `ICU_Care` tinyint(1) DEFAULT NULL,
  `Steroids` tinyint(1) DEFAULT NULL,
  `Renal_Rep_Theraphy` tinyint(1) DEFAULT NULL,
  `Invasive_Ventilation` tinyint(1) DEFAULT NULL,
  `Stinger_Scrapped` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

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
-- Table structure for table `Patients`
--

CREATE TABLE `Patients` (
  `PHN` varchar(60) NOT NULL,
  `Patient_Name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Records`
--

CREATE TABLE `Records` (
  `Records_Id` bigint(20) NOT NULL,
  `PHN` int(11) NOT NULL,
  `Clinical_Id` bigint(20) DEFAULT NULL,
  `Management_Id` bigint(20) DEFAULT NULL,
  `Toxicity_Type` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Toxicity_Id` bigint(20) NOT NULL,
  `Site_Id` bigint(20) DEFAULT NULL,
  `Instance_Area` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Instance_Date` date NOT NULL,
  `Record_Time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Editable` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Sites`
--

CREATE TABLE `Sites` (
  `Sites_Id` bigint(20) NOT NULL,
  `Head_Neck` tinyint(1) DEFAULT NULL,
  `Upper_Limb` tinyint(1) DEFAULT NULL,
  `Chest` tinyint(1) DEFAULT NULL,
  `Abdomen` tinyint(1) DEFAULT NULL,
  `Lower_Limb` tinyint(1) DEFAULT NULL,
  `Others` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Doctor_Id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `position` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bee_Stings`
--
ALTER TABLE `Bee_Stings`
  ADD PRIMARY KEY (`Bee_Stings_Id`);

--
-- Indexes for table `Clinicals`
--
ALTER TABLE `Clinicals`
  ADD PRIMARY KEY (`Clinicals_Id`);

--
-- Indexes for table `Doctor_Records`
--
ALTER TABLE `Doctor_Records`
  ADD PRIMARY KEY (`Record_Id`,`Doctor_Id`),
  ADD UNIQUE KEY `id fk` (`Doctor_Id`);

--
-- Indexes for table `Managements`
--
ALTER TABLE `Managements`
  ADD PRIMARY KEY (`Managements_Id`);

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
-- Indexes for table `Patients`
--
ALTER TABLE `Patients`
  ADD PRIMARY KEY (`PHN`);

--
-- Indexes for table `Records`
--
ALTER TABLE `Records`
  ADD PRIMARY KEY (`Records_Id`),
  ADD KEY `Record_Patient_fk` (`PHN`),
  ADD KEY `Record_Management_fk` (`Management_Id`),
  ADD KEY `Record_Clinical_fk` (`Clinical_Id`),
  ADD KEY `Record_Site_fk` (`Site_Id`);

--
-- Indexes for table `Sites`
--
ALTER TABLE `Sites`
  ADD PRIMARY KEY (`Sites_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Doctor_Id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Records`
--
ALTER TABLE `Records`
  MODIFY `Records_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Doctor_Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Doctor_Records`
--
ALTER TABLE `Doctor_Records`
  ADD CONSTRAINT `fk_Doctor_Records_Record_fk` FOREIGN KEY (`Record_Id`) REFERENCES `Records` (`Records_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Records`
--
ALTER TABLE `Records`
  ADD CONSTRAINT `Record_Clinical_fk` FOREIGN KEY (`Clinical_Id`) REFERENCES `Clinicals` (`Clinicals_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Record_Management_fk` FOREIGN KEY (`Management_Id`) REFERENCES `Managements` (`Managements_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Record_Patient_fk` FOREIGN KEY (`PHN`) REFERENCES `Patients` (`PHN`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Record_Site_fk` FOREIGN KEY (`Site_Id`) REFERENCES `Sites` (`Sites_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
