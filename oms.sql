-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:5222
-- Generation Time: May 11, 2024 at 04:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoptor`
--

CREATE TABLE `adoptor` (
  `A_Number` int(11) NOT NULL,
  `A_Name` varchar(255) DEFAULT NULL,
  `A_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoptor`
--

INSERT INTO `adoptor` (`A_Number`, `A_Name`, `A_address`) VALUES
(1, 'Abdullah', 'Kumarpara'),
(2, 'Jahid', 'Maulvibazar');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `D_ID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Mobile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`D_ID`, `Name`, `Mobile`) VALUES
(1, 'Jahid', '01712917598'),
(2, 'Abira', '01927834071');

-- --------------------------------------------------------

--
-- Table structure for table `house_parent`
--

CREATE TABLE `house_parent` (
  `HP_ID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Mobile` int(11) NOT NULL,
  `E_mail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house_parent`
--

INSERT INTO `house_parent` (`HP_ID`, `Name`, `Mobile`, `E_mail`) VALUES
(1, 'Shorif', 1428341895, 'Shorif@oms.com'),
(2, 'Jilany', 1278439035, 'Jilany@oms.com');

-- --------------------------------------------------------

--
-- Table structure for table `oms`
--

CREATE TABLE `oms` (
  `id` int(255) NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `child_age` int(3) NOT NULL,
  `child_gender` varchar(255) NOT NULL,
  `child_photo` varchar(255) NOT NULL,
  `child_arrival_date` date NOT NULL,
  `child_allergic_issue` varchar(255) NOT NULL,
  `child_blood_group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oms`
--

INSERT INTO `oms` (`id`, `child_name`, `child_age`, `child_gender`, `child_photo`, `child_arrival_date`, `child_allergic_issue`, `child_blood_group`) VALUES
(1, 'Kawsar', 10, 'male', '', '2001-03-30', '', 'A+'),
(2, 'Abdullah', 10, 'male', '', '2024-05-11', 'No', 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_ID` int(11) NOT NULL,
  `R_number` int(11) NOT NULL,
  `Room_super_id` int(11) NOT NULL,
  `Bed_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_ID`, `R_number`, `Room_super_id`, `Bed_Number`) VALUES
(1, 1, 20, 12),
(2, 202, 116, 20);

-- --------------------------------------------------------

--
-- Table structure for table `trust`
--

CREATE TABLE `trust` (
  `Name` varchar(255) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `Location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trust`
--

INSERT INTO `trust` (`Name`, `ID`, `Location`) VALUES
('Hamba Corp.', 1, 'Tilagor'),
('AMN Corp.', 2, 'Madhabpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoptor`
--
ALTER TABLE `adoptor`
  ADD PRIMARY KEY (`A_Number`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `house_parent`
--
ALTER TABLE `house_parent`
  ADD PRIMARY KEY (`HP_ID`);

--
-- Indexes for table `oms`
--
ALTER TABLE `oms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_ID`);

--
-- Indexes for table `trust`
--
ALTER TABLE `trust`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoptor`
--
ALTER TABLE `adoptor`
  MODIFY `A_Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `D_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `house_parent`
--
ALTER TABLE `house_parent`
  MODIFY `HP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oms`
--
ALTER TABLE `oms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Room_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trust`
--
ALTER TABLE `trust`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
