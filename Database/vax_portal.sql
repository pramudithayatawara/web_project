-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 06:13 PM
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
-- Database: `vax_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `TpNo` int(12) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` varchar(15) DEFAULT NULL,
  `Reason` varchar(150) DEFAULT NULL,
  `Alagics` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `Name`, `TpNo`, `Date`, `Time`, `Reason`, `Alagics`) VALUES
(5, 'Hashinu', 702345678, '2024-10-09', '01:18', 'vfghnjm', 'no'),
(10, 'malsha Nuwangi', 2147483647, '2024-10-15', '23:11', 'Canser', 'No Alagics');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(4, 'Nawodya', 'navodya@mail.com', 745896321, 'weeded');

-- --------------------------------------------------------

--
-- Table structure for table `createnewaccount`
--

CREATE TABLE `createnewaccount` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `DoB` date NOT NULL,
  `userName` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `createnewaccount`
--

INSERT INTO `createnewaccount` (`userID`, `fullName`, `address`, `contact`, `email`, `DoB`, `userName`, `password`) VALUES
(1, 'asd', '', '', 'qwertyu@gmail.com', '0000-00-00', '', 'asd'),
(2, '', '', '', '', '0000-00-00', '', ''),
(3, 'asd', '', '', 'qwertyu@gmail.com', '0000-00-00', '', 'asd'),
(4, 'Malsha Nuwangi', 'SLIIT Malabe', '0789234657', 'malsha@gmail.com', '2024-10-14', 'malsha', '53672bjd'),
(5, 'Kusal Savinda', 'Dewalayagawa, Kahangama, Rathnapura', '0774940566', 'savindakusal@gmail.c', '2002-08-06', 'savi', '635363'),
(6, 'MalshaNuwangi', 'SLiit Malabe', '0701067845', 'malsha@gmail.com', '2000-12-12', 'Dissanayake', 'mlajg432');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_ID` int(11) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `E_mail` varchar(50) NOT NULL,
  `Addres` varchar(50) NOT NULL,
  `Contact_Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_ID`, `First_Name`, `Last_Name`, `E_mail`, `Addres`, `Contact_Number`) VALUES
(5, 'Kusal', 'Savinda', 'kusalsavinda@gmail.com', 'Malabe', 778907002);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(10) UNSIGNED NOT NULL,
  `employee_Fname` varchar(20) NOT NULL,
  `employee_Lname` varchar(20) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `e_mail` varchar(25) NOT NULL,
  `age` int(10) NOT NULL,
  `addres` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_Fname`, `employee_Lname`, `contact_number`, `e_mail`, `age`, `addres`) VALUES
(56, 'Keshan', 'Udayanga', 778907002, 'navodya@mail.com', 152, 'a'),
(58, 'Keshan', 'ertyuio;.,mnbvcdrtyu', 1230444523, 'navodya@mail.com', 32, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `pssword` varchar(20) NOT NULL,
  `login_typ` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_id`, `username`, `pssword`, `login_typ`) VALUES
(1, 'Admin', '!@#123', 'Doctor'),
(2, 'Admin', '!@#123', 'Doctor'),
(3, 'Admin', '!@#123', 'Doctor'),
(4, 'Admin', '!@#123', 'Doctor'),
(5, 'Admin', '!@#123', 'Doctor'),
(6, 'Admin', '!@#123', 'Doctor'),
(7, 'Admin', '!@#123', 'Doctor'),
(8, 'Admin', '!@#123', 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `vaccineID` int(11) NOT NULL,
  `vaccName` varchar(70) NOT NULL,
  `vacQty` int(11) NOT NULL,
  `supplierName` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`vaccineID`, `vaccName`, `vacQty`, `supplierName`, `country`) VALUES
(8, 'Siber', 10, 'Malsha', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createnewaccount`
--
ALTER TABLE `createnewaccount`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`vaccineID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `createnewaccount`
--
ALTER TABLE `createnewaccount`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `vaccineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
