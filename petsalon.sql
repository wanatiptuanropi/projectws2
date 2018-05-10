-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2018 at 01:58 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petsalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CusID` int(4) NOT NULL,
  `CusName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `CusLname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Tel` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CusID`, `CusName`, `CusLname`, `Tel`) VALUES
(201, 'John', 'Green', 973992759),
(202, 'Winnie', 'Madelyn', 937588417),
(203, 'Makayla', 'Cheyenne', 346986784),
(204, 'Khloe', 'Genevieve', 986775467),
(205, 'Poppy', 'Zahava', 678553687),
(206, 'Nava', 'Olinda', 457998724),
(207, 'Ayden', 'Gennadi', 789334689),
(208, 'Jayden', 'Genius', 946887954),
(210, 'Barack', 'Melvin', 348664797),
(211, 'Sam', 'Melville', 473328765),
(212, 'Johnson', 'Zabi', 868996487),
(213, 'John', 'Pink', 827446284),
(214, 'Fah', 'Sai', 1234567890),
(215, 'Fah', 'Sai', 1234567890),
(216, 'Sai', 'Fah', 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpID` int(4) NOT NULL,
  `EmpName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `EmpLname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `SSN` int(13) NOT NULL,
  `Address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Tel` int(10) NOT NULL,
  `Salary` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpID`, `EmpName`, `EmpLname`, `Gender`, `DOB`, `SSN`, `Address`, `Tel`, `Salary`) VALUES
(101, 'Olive', 'Black', 'Female', '1987-04-04', 1195830582, 'Phuket', 689553689, 20000),
(102, 'Ginna', 'Krause', 'Female', '1980-10-26', 1958375038, 'Bangkok', 475927834, 17000),
(103, 'Pan', 'Jack', 'Female', '1993-09-15', 1738883682, 'Trang', 248776597, 15000),
(104, 'Uli', 'Black', 'Female', '1990-07-29', 1276997654, 'Phuket', 928376598, 16000);

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `PetID` int(4) NOT NULL,
  `PetName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Age` int(2) DEFAULT NULL,
  `TypeID` int(4) NOT NULL,
  `CusID` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`PetID`, `PetName`, `Gender`, `Age`, `TypeID`, `CusID`) VALUES
(301, 'Jojo', 'Male', 2, 401, 201),
(302, 'Jasmin', 'Female', 1, 401, 201),
(303, 'Momo', 'Female', 3, 402, 202),
(304, 'Charlie', 'Male', 2, 401, 203),
(305, 'Buddy', 'Male', 1, 401, 201),
(306, 'Charlie', 'Male', 2, 402, 204),
(307, 'Lulu', 'Male', 1, 401, 201),
(308, 'Max', 'Male', 2, 402, 204),
(309, 'Bella', 'Female', 4, 401, 205),
(310, 'Ruby', 'Female', 1, 402, 206),
(311, 'Archie', 'Male', 2, 401, 206),
(312, 'Mollt', 'Female', 1, 403, 207),
(313, 'Lucy', 'Female', 4, 403, 208),
(314, 'Coco', 'Female', 3, 402, 209),
(315, 'Oscar', 'Male', 4, 402, 210),
(316, 'Luna', 'Female', 2, 203, 211),
(317, 'Lily', 'Female', 2, 401, 212),
(318, 'Toby', 'Male', 3, 401, 208),
(319, 'Hala', 'Female', 2, 401, 213),
(320, 'Tikker', 'Male', 1, 402, 201),
(321, 'Pak', 'Female', 2, 402, 214),
(322, 'Tic', 'Male', 1, 402, 201),
(323, 'On', 'Female', 1, 402, 216);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `SerID` int(4) NOT NULL,
  `SerName` varchar(50) NOT NULL,
  `Price` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`SerID`, `SerName`, `Price`) VALUES
(501, 'Grooming', 250),
(502, 'Bathing', 200),
(503, 'Spa', 300),
(504, 'Flea treatment', 100),
(505, 'Nail cut', 50);

-- --------------------------------------------------------

--
-- Table structure for table `service_bill`
--

CREATE TABLE `service_bill` (
  `PetID` int(4) NOT NULL,
  `SerID` int(4) NOT NULL,
  `EmpID` int(4) DEFAULT NULL,
  `SerDate` date NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `Status` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_bill`
--

INSERT INTO `service_bill` (`PetID`, `SerID`, `EmpID`, `SerDate`, `TotalPrice`, `Status`) VALUES
(323, 505, 103, '2018-05-10', 50, 'Paid'),
(311, 501, 104, '2018-05-09', 250, 'Paid'),
(310, 502, 103, '2018-05-09', 200, 'Paid'),
(310, 504, 102, '2018-05-09', 100, 'Paid'),
(306, 503, 104, '2018-05-09', 300, 'Paid'),
(319, 505, 101, '2018-05-09', 50, 'Paid'),
(307, 502, 103, '2018-05-09', 200, 'Paid'),
(323, 503, 102, '2018-05-10', 300, 'Paid'),
(321, 502, 102, '2018-05-10', 200, 'Paid'),
(304, 505, 101, '2018-05-10', 50, 'Paid'),
(304, 504, 101, '2018-05-10', 100, 'Paid'),
(320, 503, 103, '2018-05-10', 300, 'Paid'),
(322, 503, 103, '2018-05-10', 300, 'Not Paid');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `TypeID` int(4) NOT NULL,
  `TypeName` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`TypeID`, `TypeName`) VALUES
(401, 'Dog'),
(402, 'Cat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(4) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `username_pwd`
--

CREATE TABLE `username_pwd` (
  `UserID` int(4) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `EmpID` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `username_pwd`
--

INSERT INTO `username_pwd` (`UserID`, `Username`, `Password`, `EmpID`) VALUES
(1, 'olive', '12345', 101),
(2, 'ginna', 'abc123', 102),
(3, 'pan', 'panzaza', 103),
(4, 'uli', 'ulicutie', 104);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CusID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`PetID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`SerID`);

--
-- Indexes for table `service_bill`
--
ALTER TABLE `service_bill`
  ADD PRIMARY KEY (`PetID`,`SerID`) USING BTREE;

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TypeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `username_pwd`
--
ALTER TABLE `username_pwd`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CusID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `PetID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `SerID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=606;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `TypeID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `username_pwd`
--
ALTER TABLE `username_pwd`
  MODIFY `UserID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
