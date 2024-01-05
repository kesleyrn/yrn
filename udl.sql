-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 06:18 PM
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
-- Database: `udl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `AdminName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `Password`) VALUES
(1, 'simon', '1234'),
(2, 'Kennedy', '1212'),
(3, 'Morch', 'ky123456');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `CandidateNationalId` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `ExameDate` date DEFAULT NULL,
  `PhoneNumber` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CandidateNationalId`, `FirstName`, `LastName`, `Gender`, `DOB`, `ExameDate`, `PhoneNumber`) VALUES
(2, 'Madjariwa', 'Simon', 'Male', '2002-07-11', '2023-12-03', '0787654324'),
(3, 'Ishimwe', 'Sekamondo', 'Male', '2023-10-30', '2023-12-05', '0794332232'),
(4, 'Manzi', 'Kevin', 'Male', '2023-11-17', '2023-12-09', '0786522088'),
(5, 'Safi', 'Munezero', 'Male', '2023-10-19', '2023-12-14', '0789876765'),
(6, 'Ishimwe', 'PlayBoy', 'Male', '2002-07-13', '2023-12-05', '0795645356');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `CandidateNationalId` int(100) DEFAULT NULL,
  `LicenseExamCategory` varchar(100) NOT NULL,
  `ObtainedMarks_20` varchar(200) DEFAULT NULL,
  `Decision` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`CandidateNationalId`, `LicenseExamCategory`, `ObtainedMarks_20`, `Decision`) VALUES
(5, 'B', '20', 'pass'),
(4, 'A', '8', 'failed'),
(5, 'A', '22', 'pass'),
(4, 'B', '15', 'failed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`CandidateNationalId`),
  ADD UNIQUE KEY `phonenumber` (`PhoneNumber`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD KEY `candidateNationlid` (`CandidateNationalId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `CandidateNationalId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`CandidateNationalId`) REFERENCES `candidate` (`CandidateNationalId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
