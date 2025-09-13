-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2025 at 02:01 PM
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
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff_leaves`
--

CREATE TABLE `staff_leaves` (
  `Leave_ID` int(11) NOT NULL,
  `Staff_Name` varchar(100) NOT NULL,
  `Profession` varchar(100) DEFAULT NULL,
  `CLSH` int(11) DEFAULT NULL,
  `CLSU` int(11) DEFAULT NULL,
  `ELSH` int(11) DEFAULT NULL,
  `ELSU` int(11) DEFAULT NULL,
  `SLSH` int(11) DEFAULT NULL,
  `SLSU` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_leaves`
--

INSERT INTO `staff_leaves` (`Leave_ID`, `Staff_Name`, `Profession`, `CLSH`, `CLSU`, `ELSH`, `ELSU`, `SLSH`, `SLSU`) VALUES
(1, 'Jagadeesh', 'lecturer', 4, 1, 5, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_register`
--

CREATE TABLE `staff_register` (
  `Staff_ID` int(11) NOT NULL,
  `Staff_Name` varchar(100) NOT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Mobile_No` varchar(15) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `Graduation` varchar(100) DEFAULT NULL,
  `Experience` int(11) DEFAULT NULL,
  `Salary` decimal(10,2) DEFAULT NULL,
  `Subjects` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_register`
--

INSERT INTO `staff_register` (`Staff_ID`, `Staff_Name`, `City`, `Mobile_No`, `Department`, `Graduation`, `Experience`, `Salary`, `Subjects`) VALUES
(1, 'Jagadeesh', 'Palakollu', '8688374811', 'CSE', 'BTech', 5, 50000.00, '5');

-- --------------------------------------------------------

--
-- Table structure for table `staff_salary`
--

CREATE TABLE `staff_salary` (
  `Salary_ID` int(11) NOT NULL,
  `Staff_Name` varchar(100) NOT NULL,
  `Profession` varchar(100) DEFAULT NULL,
  `Salary` decimal(10,2) DEFAULT NULL,
  `Working_Days` int(11) DEFAULT NULL,
  `Present_Days` int(11) DEFAULT NULL,
  `LOP` decimal(10,2) DEFAULT NULL,
  `Current_Salary` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_salary`
--

INSERT INTO `staff_salary` (`Salary_ID`, `Staff_Name`, `Profession`, `Salary`, `Working_Days`, `Present_Days`, `LOP`, `Current_Salary`) VALUES
(1, 'Jagadeesh', 'Lecture', 50000.00, 28, 25, 5357.14, 44642.86);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff_leaves`
--
ALTER TABLE `staff_leaves`
  ADD PRIMARY KEY (`Leave_ID`);

--
-- Indexes for table `staff_register`
--
ALTER TABLE `staff_register`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `staff_salary`
--
ALTER TABLE `staff_salary`
  ADD PRIMARY KEY (`Salary_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_leaves`
--
ALTER TABLE `staff_leaves`
  MODIFY `Leave_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_register`
--
ALTER TABLE `staff_register`
  MODIFY `Staff_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_salary`
--
ALTER TABLE `staff_salary`
  MODIFY `Salary_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
