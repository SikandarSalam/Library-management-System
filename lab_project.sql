-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 07:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Domain` varchar(20) NOT NULL,
  `Quantity` int(16) NOT NULL,
  `Bookshelf` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Name`, `Author`, `Domain`, `Quantity`, `Bookshelf`) VALUES
('Basic Civil Engineering', 'Satheesh Gopi', 'Civil', 16, 12),
('Basic Electrical Engineering', 'Rohit Mehta and V.K. Mehta', 'Electrical', 19, 5),
('C++', 'anyone', 'testing', 32, 4),
('Civil Engineering Materials', 'Peter A. Claisse', 'Civil', 27, 14),
('Clean Code', ' Robert Cecil Martin', 'Software', 22, 1),
('Code Complete', 'Steve McConnell', 'Software', 19, 2),
('Electric Machinery Fundamentals', 'Stephen J. Chapman', 'electrical', 17, 6),
('Let Us C', 'Yashavant Kanetkar', 'software', 22, 1),
('Multi-access Edge Computing: Software Development at the Network Edge', 'Dario Sabella', 'telecom', 24, 4),
('Practical Electronics for Inventors', 'Paul Scherz', 'Electrical', 22, 5),
('Principles of Foundation Engineering', 'Braja M Das', 'Civil', 21, 11),
('Starting Digital Signal Processing in Telecommunication Engineering', 'Tomasz P. Zieliński', 'Telecom', 16, 16),
('Telecommunication System Engineering', 'Roger L. Freeman', 'Telecom', 19, 19);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Reg_no` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `FatherName` varchar(30) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `D_O_B` date NOT NULL,
  `Semester` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Reg_no`, `Name`, `FatherName`, `Department`, `D_O_B`, `Semester`) VALUES
('17MDSWE065', 'Testing5', 'Testing5', 'Software', '2000-05-25', '8th'),
('19MDEE034', 'Testing2', 'Testing2', 'Electrical', '1999-06-29', '6th'),
('19MDSWE001', 'Testing1', 'Testing1', 'Software', '2000-05-22', '6th'),
('20MDTE098', 'Testing3', 'Testing3', 'Telecommunication', '2001-01-15', '4th'),
('21MDCE002', 'Testing4', 'Testing4', 'Civil', '2002-05-20', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `studentbooks`
--

CREATE TABLE `studentbooks` (
  `Student` varchar(30) NOT NULL,
  `Reg_no` varchar(30) NOT NULL,
  `Book` varchar(100) NOT NULL,
  `Domain` varchar(20) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentbooks`
--

INSERT INTO `studentbooks` (`Student`, `Reg_no`, `Book`, `Domain`, `Status`, `Date`) VALUES
('Testing1', '19MDSWE001', 'Clean Code', 'Software', 'Issued', '0000-00-00'),
('Testing1', '19MDSWE059', 'Let Us C', 'Software', 'Issued', '0000-00-00'),
('Testing1', '19MDSWE001', 'Let Us C', 'software', 'Issued', '0000-00-00'),
('Testing1', '19MDSWE001', 'Clean Code', 'Software', 'Returned', '2022-07-24'),
('Testing1', '19MDSWE001', 'Code Complete', 'Software', 'Issued', '2022-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`username`, `password`) VALUES
('19MDSWE001', '1234'),
('19MDEE034', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `Bname` varchar(200) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Domain` varchar(30) NOT NULL,
  `File` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`Bname`, `Author`, `Domain`, `File`) VALUES
('Let Us C', 'Yashavant Kanetkar', 'Software', 'Yashavant Kanetkar - Let Us C_ Authentic Guide to C PROGRAMMING Language (17th Edition).pdf'),
('Analysis of Synchronous Machin', 'Thomas A. Lipo', 'Electrical', 'CEP Assignment # 3.pdf'),
('Basic Civil Engineering', 'Satheesh Gopi', 'Civil', 'Assignment.pdf'),
('Telecommunication System Engineering', 'Roger L. Freeman', 'Telecommunication', 'Assignment.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
