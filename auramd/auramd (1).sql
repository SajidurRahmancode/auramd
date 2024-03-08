-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 09:58 AM
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
-- Table structure for table `analytical_data_t`
--

CREATE TABLE `analytical_data_t` (
  `analyticaldataid` int(11) NOT NULL,
  `SurgeryDate` date DEFAULT NULL,
  `SurgerySuccessRate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `junior_doctor_t`
--

CREATE TABLE `junior_doctor_t` (
  `juniordoctorid` int(11) NOT NULL,
  `surgerydate` date DEFAULT NULL,
  `appointmenttime` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nurse_t`
--

CREATE TABLE `nurse_t` (
  `NurseID` int(11) NOT NULL,
  `Nurse_name` varchar(10) NOT NULL,
  `Contact_no` int(11) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_t`
--

CREATE TABLE `patient_t` (
  `PatientID` int(11) NOT NULL,
  `patientname` varchar(50) NOT NULL,
  `InsuranceInformation` varchar(50) NOT NULL,
  `medicineid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_t`
--

CREATE TABLE `pharmacy_t` (
  `pharmacyid` int(11) NOT NULL,
  `pharmacyname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist_t`
--

CREATE TABLE `receptionist_t` (
  `receptionistid` int(11) NOT NULL,
  `admitted_patient_data` varchar(50) NOT NULL,
  `released_patient_data` varchar(50) NOT NULL,
  `appointment_schedule` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_t`
--

CREATE TABLE `user_t` (
  `user_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_t`
--

INSERT INTO `user_t` (`user_id`, `password`, `email`, `user_type`) VALUES
(0, 'mini', 'mini', 'SENIOR_DOCTOR'),
(222, '222', '222', 'JUNIOR_DOCTOR'),
(123456, '123456', '123456', 'PATIENT'),
(2120334, '2120334', '2120334', 'JUNIOR_DOCTOR'),
(2120352, '2120352', '2120352', 'admin'),
(23456789, '23456789', '23456789', 'RECEPTIONIST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analytical_data_t`
--
ALTER TABLE `analytical_data_t`
  ADD PRIMARY KEY (`analyticaldataid`);

--
-- Indexes for table `junior_doctor_t`
--
ALTER TABLE `junior_doctor_t`
  ADD PRIMARY KEY (`juniordoctorid`);

--
-- Indexes for table `nurse_t`
--
ALTER TABLE `nurse_t`
  ADD PRIMARY KEY (`NurseID`);

--
-- Indexes for table `patient_t`
--
ALTER TABLE `patient_t`
  ADD PRIMARY KEY (`PatientID`),
  ADD KEY `medicineid` (`medicineid`);

--
-- Indexes for table `pharmacy_t`
--
ALTER TABLE `pharmacy_t`
  ADD PRIMARY KEY (`pharmacyid`);

--
-- Indexes for table `receptionist_t`
--
ALTER TABLE `receptionist_t`
  ADD PRIMARY KEY (`receptionistid`);

--
-- Indexes for table `user_t`
--
ALTER TABLE `user_t`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `junior_doctor_t`
--
ALTER TABLE `junior_doctor_t`
  ADD CONSTRAINT `junior_doctor_t_ibfk_1` FOREIGN KEY (`juniordoctorid`) REFERENCES `user_t` (`user_id`);

--
-- Constraints for table `patient_t`
--
ALTER TABLE `patient_t`
  ADD CONSTRAINT `patient_t_ibfk_1` FOREIGN KEY (`medicineid`) REFERENCES `medicines_t` (`medicineid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
