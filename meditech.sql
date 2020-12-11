-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 08:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meditech`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Sr.no` int(11) NOT NULL,
  `Patient ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Problem` varchar(20) NOT NULL,
  `Allergies` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Sr.no`, `Patient ID`, `Name`, `Problem`, `Allergies`, `Date`, `Created`) VALUES
(1, 'P101', 'Rob Norway', 'Head ache, Red Eyes ', 'Peanuts', '2020-10-08', '2020-10-14 16:58:28'),
(4, 'P201', 'Alice', 'Back Pains, Bone inj', 'None', '2020-10-22', '2020-10-14 16:58:31'),
(5, 'P202', 'Ashwini', 'Migrane issues', 'nuts', '2020-10-25', '2020-10-14 21:59:16'),
(6, 'P98', 'bob', 'Dental cleanup  ', 'gums', '2020-10-22', '2020-10-14 22:16:51'),
(7, 'P23', 'demo', 'demooo ', 'nuts', '2020-10-27', '2020-10-15 02:03:12'),
(8, '123f', 'ashwini', 'pms ', 'partho', '2020-10-30', '2020-10-20 21:13:52'),
(9, 'pat_now212', 'Ash', 'injuries ', 'water', '2020-11-26', '2020-11-10 15:22:50'),
(10, 'P172', 'Nivideta', 'Migraine Pain ', 'Nuts', '2020-11-25', '2020-11-18 23:27:40'),
(11, '989', 'cfghfh', 'age ', 'nul', '2020-11-26', '2020-11-26 01:13:10'),
(12, '', '', ' ', '', '0000-00-00', '2020-11-26 01:47:01'),
(13, '', '', ' ', '', '0000-00-00', '2020-11-26 01:49:03'),
(14, 'fxgh', 'cxbv', 'cxbv ', 'cxb', '2020-12-04', '2020-11-26 01:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `chatmsg`
--

CREATE TABLE `chatmsg` (
  `p_name` varchar(100) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatmsg`
--

INSERT INTO `chatmsg` (`p_name`, `d_name`, `message`, `timestamp`) VALUES
('', '.sam', 'Hey nivi', '2020-12-09 17:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `docdb`
--

CREATE TABLE `docdb` (
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docdb`
--

INSERT INTO `docdb` (`name`, `pass`) VALUES
('doc', '123'),
('admin', '123'),
('doc1', '111'),
('sam', 'aqw'),
('Michel', 'qwe'),
('dan', '123'),
('rob ', '123'),
('Alice', '123');

-- --------------------------------------------------------

--
-- Table structure for table `docprofile`
--

CREATE TABLE `docprofile` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `no_patients` int(11) NOT NULL,
  `Education` varchar(20) NOT NULL,
  `Employee` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `location_h` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docprofile`
--

INSERT INTO `docprofile` (`ID`, `name`, `lname`, `no_patients`, `Education`, `Employee`, `Description`, `position`, `location_h`, `img`) VALUES
(1, 'Sam', 'Soffes', 250, 'M.B.B.S', 'Ottawa Hospital', 'Dr. Sam Soffes has been working with Ottawa Hospital since 1999 in specialization of Cardiology and ', 'Main Admin ', 'ottawa', 'sam.jpg'),
(2, 'Michel', 'Robers', 3900, 'M.B.B.S.', 'Cardiologist', 'Roberts has been the pro of cardiologist. The patients got cured 95%. ', 'Head Doctor', 'Ottawa Hospital ', 'mic.jpg'),
(3, 'Deepti ', 'Shah', 400, 'Phd in Gynecologic ', 'Ottawa Hospital', 'Dr. Deepti Shah has been Graduated from family medicine program in Queen’s University in 2007. Pract', 'Former Assistant ', 'Toronto', 'deep.jpg'),
(4, 'Dan', 'Martin', 7000, 'Doctorate', 'Ottawa Hospital', 'Dr. Dan is a Family Medicine trained physician. He has experience in emergency care, chronic disease', 'Assistant Intern', 'Monteral', 'dan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patdata`
--

CREATE TABLE `patdata` (
  `Sr.no` int(11) NOT NULL,
  `P_name` varchar(50) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `Medical` varchar(50) NOT NULL,
  `Prescription` varchar(50) NOT NULL,
  `Monitored` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patdata`
--

INSERT INTO `patdata` (`Sr.no`, `P_name`, `lname`, `gender`, `address`, `phone_no`, `Weight`, `age`, `Medical`, `Prescription`, `Monitored`, `timestamp`) VALUES
(1, 'Sahil', '', 'Male', 'Toronto', 343965885, 79, 34, 'viral Fever', 'tylenol', 'Dr. Sam soffees', '2020-10-14 20:12:16'),
(2, 'sneha', 'Lavansh', 'female', 'Montreal road, townsvilla', 343777658, 88, 33, 'Periods pain PMS', 'Hot water bag treatment ', 'Dr sam Soffes', '2020-10-20 20:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `patdb`
--

CREATE TABLE `patdb` (
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patdb`
--

INSERT INTO `patdb` (`name`, `pass`) VALUES
('pat', '123'),
('nivi', '123'),
('pat', '111'),
('demo', '123'),
('sneha', '123');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `Patient_ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` text NOT NULL,
  `issue` text NOT NULL,
  `Allergies` text NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Emergency_no` varchar(11) NOT NULL,
  `Family_doctor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`Patient_ID`, `name`, `Last_Name`, `Age`, `Address`, `issue`, `Allergies`, `Phone`, `Emergency_no`, `Family_doctor`) VALUES
(1, 'nivi', 'Jones', 32, '101 Riverside St, Ottawa, ON', 'None', 'None', '6132920807', '6133245678', 'Samantha Brown'),
(2, 'sneha', 'Avery', 27, '213 Laurier Ave, Ottawa, ON', 'Arrhythmia', 'None', '5143286754', '4380563450', 'Samantha Brown'),
(3, 'Sally', 'Bubbly', 52, '52 Parchment Pt, Ottawa, ON', 'None', 'Peanut butter', '5143576543', '6132864390', 'Samuel Clark'),
(4, 'Jack', 'Pearson', 19, '304 Tenth Line Road, Ottawa, ON', 'Migraines', 'None', '6138764320', '5145349986', 'Samantha Brown'),
(5, 'Manon', 'Wilson', 42, '78 Harbour St, Ottawa, ON', 'None', 'Seafood', '6134504466', '8196650023', 'Samuel Clark'),
(6, 'Carolin', 'MacDonald', 33, '818 Baseline Rd, Ottawa, ON', 'Bipolar disorder', 'Leather', '4387463421', '4389007634', 'Samuel Clark'),
(7, 'Bob', 'Mackenzie', 62, '332 Preston St, Ottawa, ON', 'Irregular sleep cycle', 'None', '6133218746', '6132227855', 'Samantha Brown'),
(8, 'Isabel', 'Reyes', 75, '123 Parkdale Ave, Ottawa, ON', 'None', 'None', '6132034321', '6138793544', 'Samantha Brown'),
(9, 'Priscilla', 'Chang', 21, '06 Century Rd, Ottawa, ON', 'None', 'Milk', '6137002323', '4387643608', 'Samuel Clark'),
(10, 'Anderson', 'Smith', 35, '900 Somerset Street, Ottawa, ON', 'Lung cancer', 'None', '4385264398', '6132004367', 'Samantha Brown');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Sr.no`);

--
-- Indexes for table `docprofile`
--
ALTER TABLE `docprofile`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `docprofile`
--
ALTER TABLE `docprofile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
