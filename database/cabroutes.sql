-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 07:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cabroutes`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcar`
--

CREATE TABLE `addcar` (
  `carid` int(11) NOT NULL,
  `cartype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcar`
--

INSERT INTO `addcar` (`carid`, `cartype`) VALUES
(1, 'BMW'),
(2, 'SEDAN'),
(3, 'Mercedes-Benz'),
(4, 'SPORTS CAR'),
(5, 'COUPE'),
(6, 'STATION WAGON'),
(7, 'HATCHBACK'),
(8, 'MINIVAN'),
(9, 'Crossover'),
(10, 'Compact Sedan');

-- --------------------------------------------------------

--
-- Table structure for table `addroute`
--

CREATE TABLE `addroute` (
  `routeid` int(10) NOT NULL,
  `route` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addroute`
--

INSERT INTO `addroute` (`routeid`, `route`) VALUES
(1, 'Pune-Mumbai'),
(2, 'Pune-Nashik'),
(3, 'Mumbai-Pune'),
(4, 'Nagar-Pune'),
(5, 'Mumbai-Nagar');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `mail`, `password`) VALUES
(1, 'admin123@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `agentmaster`
--

CREATE TABLE `agentmaster` (
  `Agentid` int(50) NOT NULL,
  `AgencyName` varchar(50) NOT NULL,
  `AgentFullName` varchar(50) NOT NULL,
  `AgencyAddress` varchar(100) NOT NULL,
  `AgentDesignation` varchar(50) NOT NULL,
  `AgencyType` varchar(255) NOT NULL,
  `Shopactlicense` varchar(255) NOT NULL,
  `PanCard` varchar(255) NOT NULL,
  `AgentPhoto` varchar(255) NOT NULL,
  `OwnerAadhaarCard` varchar(255) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `EmergencyContactNumber` varchar(20) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agentmaster`
--

INSERT INTO `agentmaster` (`Agentid`, `AgencyName`, `AgentFullName`, `AgencyAddress`, `AgentDesignation`, `AgencyType`, `Shopactlicense`, `PanCard`, `AgentPhoto`, `OwnerAadhaarCard`, `ContactNumber`, `EmergencyContactNumber`, `EmailAddress`, `Password`) VALUES
(1, 'JWDMC', 'Paresh More', 'Pune,Kalyani-Nagar', 'Director', 'room3.jpg', 'room3.jpg', 'room3.jpg', 'room3.jpg', 'room3.jpg', '7547645678', '3457348565', 'pallavi@gmail.com', 'pallavi');

-- --------------------------------------------------------

--
-- Table structure for table `drivermaster`
--

CREATE TABLE `drivermaster` (
  `id` int(10) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `VehicleNo` varchar(20) NOT NULL,
  `Driveraddress` varchar(50) NOT NULL,
  `Cartype` varchar(50) NOT NULL,
  `Passengerlimit` varchar(50) NOT NULL,
  `Route1` varchar(200) NOT NULL,
  `Route2` varchar(200) NOT NULL,
  `Route3` varchar(200) NOT NULL,
  `Route4` varchar(200) NOT NULL,
  `DriverPhoto` varchar(255) NOT NULL,
  `Vehiclephoto` varchar(255) NOT NULL,
  `VehicleAmenities` varchar(255) NOT NULL,
  `DriverLicenseCopy` varchar(255) NOT NULL,
  `DriverAadhaarCard` varchar(255) NOT NULL,
  `DriverLicenseIssueDdate` date NOT NULL,
  `DriverLicenseExpiredDate` date NOT NULL,
  `Driverexperience` varchar(20) NOT NULL,
  `VehicleInsuranceIssuedate` date NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `EmergencyContactNumber` varchar(20) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Rate` varchar(20) NOT NULL,
  `Active` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivermaster`
--

INSERT INTO `drivermaster` (`id`, `Fullname`, `VehicleNo`, `Driveraddress`, `Cartype`, `Passengerlimit`, `Route1`, `Route2`, `Route3`, `Route4`, `DriverPhoto`, `Vehiclephoto`, `VehicleAmenities`, `DriverLicenseCopy`, `DriverAadhaarCard`, `DriverLicenseIssueDdate`, `DriverLicenseExpiredDate`, `Driverexperience`, `VehicleInsuranceIssuedate`, `ContactNumber`, `EmergencyContactNumber`, `EmailAddress`, `Password`, `Rate`, `Active`) VALUES
(1, 'Pallavi Tambe', 'MH12 TB5510', 'Pune,Kalyani-Nagar', 'BMW', '5', 'Pune-Mumbai', 'Pune-Nashik', 'Mumbai-Pune', 'Nagar-Pune', 'IMG-20201105-WA0010.jpg', 'IMG-20201105-WA0009.jpg', 'IMG-20201105-WA0009.jpg', 'IMG-20201105-WA0010.jpg', 'IMG-20201105-WA0007.jpg', '2021-01-24', '2021-01-27', '10year', '2021-01-30', '7547645678', '3457348565', 'pallavi@gmail.com', 'pallavi', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `droplocation`
--

CREATE TABLE `droplocation` (
  `id` int(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `flag` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `droplocation`
--

INSERT INTO `droplocation` (`id`, `location`, `flag`) VALUES
(1, 'Mumbai', 1),
(2, 'Bali', 3),
(3, 'Nagar', 1),
(4, 'Shimala', 2),
(5, 'Pune', 1);

-- --------------------------------------------------------

--
-- Table structure for table `passengerlimit`
--

CREATE TABLE `passengerlimit` (
  `passengerid` int(11) NOT NULL,
  `passengerlim` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengerlimit`
--

INSERT INTO `passengerlimit` (`passengerid`, `passengerlim`) VALUES
(1, 2),
(2, 3),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(8, 9),
(9, 10),
(10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `passengermaster`
--

CREATE TABLE `passengermaster` (
  `passengerid` int(20) NOT NULL,
  `PassengerFullName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Aadharcard` varchar(255) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `WhatsappNumber` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengermaster`
--

INSERT INTO `passengermaster` (`passengerid`, `PassengerFullName`, `Address`, `Photo`, `Aadharcard`, `ContactNumber`, `WhatsappNumber`, `Email`, `Password`) VALUES
(1, 'Pallavi kasar', 'Pune', 'room3.jpg', 'room3.jpg', '7547645678', '9876543345', 'pallavi@gmail.com', 'pallavi');

-- --------------------------------------------------------

--
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `id` int(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup`
--

INSERT INTO `pickup` (`id`, `location`, `flag`) VALUES
(1, 'Pune', 1),
(2, 'Shimala', 2),
(3, 'Mumbai', 1),
(4, 'Bali', 3),
(5, 'Kerala', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subdrop`
--

CREATE TABLE `subdrop` (
  `subid` int(50) NOT NULL,
  `id` int(50) NOT NULL,
  `sublocation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subdrop`
--

INSERT INTO `subdrop` (`subid`, `id`, `sublocation`) VALUES
(1, 5, 'Shivaji Nagar'),
(2, 4, 'Basantpur'),
(3, 5, 'Deccan'),
(4, 2, 'Candidasa'),
(5, 3, 'Maliwada'),
(6, 3, 'Delhigate');

-- --------------------------------------------------------

--
-- Table structure for table `subpickup`
--

CREATE TABLE `subpickup` (
  `subid` int(50) NOT NULL,
  `id` int(50) NOT NULL,
  `sublocation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subpickup`
--

INSERT INTO `subpickup` (`subid`, `id`, `sublocation`) VALUES
(1, 1, 'Shivaji Nagar'),
(2, 2, 'Basantpur'),
(3, 3, 'Chaurchgate'),
(4, 4, 'Candidasa'),
(5, 5, 'Kollam'),
(6, 1, 'Deccan'),
(7, 1, 'Kalyaninagar'),
(8, 1, 'Chaurchgate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcar`
--
ALTER TABLE `addcar`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `addroute`
--
ALTER TABLE `addroute`
  ADD PRIMARY KEY (`routeid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agentmaster`
--
ALTER TABLE `agentmaster`
  ADD PRIMARY KEY (`Agentid`);

--
-- Indexes for table `drivermaster`
--
ALTER TABLE `drivermaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `droplocation`
--
ALTER TABLE `droplocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passengerlimit`
--
ALTER TABLE `passengerlimit`
  ADD PRIMARY KEY (`passengerid`);

--
-- Indexes for table `passengermaster`
--
ALTER TABLE `passengermaster`
  ADD PRIMARY KEY (`passengerid`);

--
-- Indexes for table `pickup`
--
ALTER TABLE `pickup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdrop`
--
ALTER TABLE `subdrop`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `subpickup`
--
ALTER TABLE `subpickup`
  ADD PRIMARY KEY (`subid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcar`
--
ALTER TABLE `addcar`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `addroute`
--
ALTER TABLE `addroute`
  MODIFY `routeid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agentmaster`
--
ALTER TABLE `agentmaster`
  MODIFY `Agentid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drivermaster`
--
ALTER TABLE `drivermaster`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `droplocation`
--
ALTER TABLE `droplocation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `passengerlimit`
--
ALTER TABLE `passengerlimit`
  MODIFY `passengerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `passengermaster`
--
ALTER TABLE `passengermaster`
  MODIFY `passengerid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pickup`
--
ALTER TABLE `pickup`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subdrop`
--
ALTER TABLE `subdrop`
  MODIFY `subid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subpickup`
--
ALTER TABLE `subpickup`
  MODIFY `subid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
