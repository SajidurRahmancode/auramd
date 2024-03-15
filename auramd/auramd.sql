-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 03:48 PM
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
-- Table structure for table `analytical_data`
--

CREATE TABLE `analytical_data` (
  `analyticaldataid` varchar(11) NOT NULL,
  `SurgeryDate` date DEFAULT NULL,
  `SurgerySuccessRate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `junior_doctor`
--

CREATE TABLE `junior_doctor` (
  `juniordoctorid` varchar(11) NOT NULL,
  `surgerydate` date DEFAULT NULL,
  `appointmenttime` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `NurseID` varchar(11) NOT NULL,
  `Nurse_name` varchar(10) NOT NULL,
  `Contact_no` int(11) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientID` varchar(11) NOT NULL,
  `patientname` varchar(50) NOT NULL,
  `InsuranceInformation` varchar(50) NOT NULL,
  `medicineid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `pharmacyid` varchar(11) NOT NULL,
  `pharmacyname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `receptionistid` varchar(11) NOT NULL,
  `admitted_patient_data` varchar(50) NOT NULL,
  `released_patient_data` varchar(50) NOT NULL,
  `appointment_schedule` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senior_doctor`
--

CREATE TABLE `senior_doctor` (
  `seniordoctorid` varchar(11) DEFAULT NULL,
  `surgerydate` varchar(11) DEFAULT NULL,
  `appointmenttime` datetime DEFAULT NULL,
  `researchdataid` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `email`, `user_type`) VALUES
('0', '12345678', 'ra66005dgtfg9@gmail.com', 'admin'),
('2120352', '2120352', '2120352', 'SENIOR_DOCTOR'),
('2120353', '2120353', '2120353', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analytical_data`
--
ALTER TABLE `analytical_data`
  ADD PRIMARY KEY (`analyticaldataid`);

--
-- Indexes for table `junior_doctor`
--
ALTER TABLE `junior_doctor`
  ADD PRIMARY KEY (`juniordoctorid`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`NurseID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`),
  ADD KEY `medicineid` (`medicineid`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`pharmacyid`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`receptionistid`);

--
-- Indexes for table `senior_doctor`
--
ALTER TABLE `senior_doctor`
  ADD KEY `seniordoctorid` (`seniordoctorid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `junior_doctor`
--
ALTER TABLE `junior_doctor`
  ADD CONSTRAINT `junior_doctor_ibfk_1` FOREIGN KEY (`juniordoctorid`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`medicineid`) REFERENCES `medicines_t` (`medicineid`);

--
-- Constraints for table `senior_doctor`
--
ALTER TABLE `senior_doctor`
  ADD CONSTRAINT `senior_doctor_ibfk_1` FOREIGN KEY (`seniordoctorid`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
