-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 01:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auramd`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Appointment_id` varchar(55) NOT NULL,
  `patient_id` varchar(55) DEFAULT NULL,
  `doctor_id` varchar(55) DEFAULT NULL,
  `Appointment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Appointment_id`, `patient_id`, `doctor_id`, `Appointment_date`) VALUES
(' 2123223123123', '12312312314 ', '211111 ', '2024-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `Bed_Id` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis_report`
--

CREATE TABLE `diagnosis_report` (
  `Diag_Id` varchar(55) NOT NULL,
  `Diag_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doc_ID` varchar(55) NOT NULL,
  `Doc_name` varchar(55) DEFAULT NULL,
  `Doc_Exp` varchar(55) DEFAULT NULL,
  `Doc_contact` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doc_ID`, `Doc_name`, `Doc_Exp`, `Doc_contact`) VALUES
('211111', 'Sajid', 'M.D.', '0112929392'),
('2120352', 'meow', 'MBBS', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `nonresident`
--

CREATE TABLE `nonresident` (
  `Npatientid` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `Nurse_Id` varchar(55) NOT NULL,
  `Nurse_Name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_id` varchar(55) NOT NULL,
  `Pat_name` varchar(55) DEFAULT NULL,
  `Pat_address` varchar(55) DEFAULT NULL,
  `Medical_History` varchar(55) DEFAULT NULL,
  `Patient_type` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_id`, `Pat_name`, `Pat_address`, `Medical_History`, `Patient_type`) VALUES
('12312312314', 'maidul', 'khulna', 'Heart Diease', 'nr'),
('211111', 'Newaz', 'dhaka,bangladesh', 'Diabetes', 'r');

-- --------------------------------------------------------

--
-- Table structure for table `prescribemedicine`
--

CREATE TABLE `prescribemedicine` (
  `Pres_id` varchar(11) NOT NULL,
  `Medicine` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `Pres_id` varchar(55) NOT NULL,
  `Pres_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptionadvice`
--

CREATE TABLE `prescriptionadvice` (
  `Pres_id` varchar(11) NOT NULL,
  `Advice` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `RPatient_id` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Appointment_id`),
  ADD KEY `appointment_ibfk_1` (`patient_id`),
  ADD KEY `appointment_ibfk_2` (`doctor_id`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`Bed_Id`);

--
-- Indexes for table `diagnosis_report`
--
ALTER TABLE `diagnosis_report`
  ADD PRIMARY KEY (`Diag_Id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doc_ID`);

--
-- Indexes for table `nonresident`
--
ALTER TABLE `nonresident`
  ADD PRIMARY KEY (`Npatientid`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`Nurse_Id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_id`);

--
-- Indexes for table `prescribemedicine`
--
ALTER TABLE `prescribemedicine`
  ADD PRIMARY KEY (`Pres_id`,`Medicine`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`Pres_id`);

--
-- Indexes for table `prescriptionadvice`
--
ALTER TABLE `prescriptionadvice`
  ADD PRIMARY KEY (`Pres_id`,`Advice`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`RPatient_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`Patient_id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`Doc_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
