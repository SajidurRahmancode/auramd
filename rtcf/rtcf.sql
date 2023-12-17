-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306:4306
-- Generation Time: Dec 17, 2023 at 04:58 AM
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
-- Database: `rtcf`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ad_user_id` int(11) NOT NULL,
  `published contents` int(20) NOT NULL,
  `total_report_published` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `administrator`
--
DELIMITER $$
CREATE TRIGGER `check_user_type` BEFORE INSERT ON `administrator` FOR EACH ROW BEGIN
    DECLARE user_type INT(255);
    SELECT user_type INTO user_type FROM users WHERE id = NEW.ad_user_id;
    IF user_type != 'admin' THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Cannot add or update row: user_type must be admin in users table';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `educational_institute`
--

CREATE TABLE `educational_institute` (
  `inst_list` varchar(25) DEFAULT NULL,
  `survey_num` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educational_institute`
--

INSERT INTO `educational_institute` (`inst_list`, `survey_num`) VALUES
('', '0'),
('', '0'),
('', '0'),
('', '0'),
('', '0'),
(NULL, '0'),
(' y', '0'),
(' y', '0'),
(' IUB', '0'),
(' IUB', '0'),
(' hh', '0'),
(' hh', ' 55'),
(' IUB', ' 55'),
(' kk', ' 44'),
(' 121', ' 21212'),
(' IUB', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `environmental_scientist`
--

CREATE TABLE `environmental_scientist` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `environmental_scientist`
--

INSERT INTO `environmental_scientist` (`first_name`, `last_name`, `email`, `address`, `city`, `state`, `zip`, `description`) VALUES
('2', '22', 'hblzaxjfcsnperiais@cwmxc.com', '2222', '221', 'Chattagram', '221', 'my'),
('dssdsd', 'sdsdsdsd', 'sdsd@gmail.com', 'dfsdfsdf', '5', 'Dhaka', '1212', 'dsds'),
('sajidur', 'rahman', '1@gmail.com', 'dhaka', 'dhaka', 'Dhaka', '1212', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `UN_USER_ID` int(11) NOT NULL,
  `EVENT_ID` int(11) NOT NULL,
  `EVENT_DATE` date NOT NULL DEFAULT current_timestamp(),
  `EVENT_TYPE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journalist`
--

CREATE TABLE `journalist` (
  `j_user_id` int(11) NOT NULL,
  `rank` varchar(6) NOT NULL,
  `published_report` int(11) NOT NULL,
  `findings_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` int(20) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(255) NOT NULL,
  `written_by` varchar(40) NOT NULL,
  `post_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `title`, `content`, `written_by`, `post_date`) VALUES
(2, 'asdaqqw', 'qweqwe', 'qweqw', '2023-12-02 00:00:00.000000'),
(100, 'my namesdsdsd', 'sdsdsdsd', 'mesdsdsd', '2002-12-21 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `un_ambassador`
--

CREATE TABLE `un_ambassador` (
  `un_user_id` int(11) NOT NULL,
  `world_state_report` varchar(3) NOT NULL,
  `startdate` date NOT NULL DEFAULT current_timestamp(),
  `endate` date NOT NULL DEFAULT current_timestamp(),
  `total_published_report` varchar(11) NOT NULL,
  `total_event_arranged` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `user_type`) VALUES
(1, '1', '12345678', '1', 'admin'),
(2, '2', '12345678', '2', 'journalist'),
(3, '3', '12345678', '3', 'unambassador'),
(4, '4', '12345678', '4', 'educationalinstitute'),
(5, '5', '12345678', '5', 'visitor'),
(12, '12', '12345678', '12', 'unambassador'),
(100, '100', '12345678', '100', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Age` int(3) NOT NULL,
  `Profile_URL` varchar(325) NOT NULL,
  `Comment` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`ID`, `Name`, `Email`, `Password`, `Age`, `Profile_URL`, `Comment`) VALUES
(0, 'gvdbfcvbvgnvn', 'mini@gmail.com', '12345678', 545454545, 'https://meet.google.com/kqm-iqyp-agm', 'sdasfdfvcfvxc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD KEY `ad_user_id` (`ad_user_id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345693;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`ad_user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
