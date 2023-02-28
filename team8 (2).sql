-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 25, 2023 at 09:23 AM
-- Server version: 8.0.32
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team8`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int NOT NULL,
  `customerId` int NOT NULL,
  `itemId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int NOT NULL,
  `fName` varchar(100) NOT NULL,
  `lName` varchar(100) NOT NULL,
  `phoneNum` varchar(50) NOT NULL,
  `nationalCode` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `fName`, `lName`, `phoneNum`, `nationalCode`, `email`, `address`) VALUES
(1, 'Zohreh', 'Seyedi', '0415700000', '41', 'z.seyedi@gmail.com', 'Hämeenlinna'),
(3, 'Sujan', 'Tiwari', '0451831000', '45', 's.t@gmail.com', 'Helsinki'),
(4, 'Bishal', 'Shrestha', '0443071000', '44', 'b.sh@gmail.com', 'Helsinki'),
(5, 'Ville', 'Lehtonen', '0449746000', '97', 'v.l@gmail.com', 'Helsinki'),
(8, 'Ali', 'Morraveji', '0449746000', '22', 'a.m@gmail.com', 'Hämeenlinna'),
(9, 'Neda', 'MNG', '0415753622', '270', 'n.m@gmail.com', 'Tampre');

-- --------------------------------------------------------

--
-- Table structure for table `menuItem`
--

CREATE TABLE `menuItem` (
  `itemId` int NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `itemPrice` float NOT NULL,
  `typeId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationId` int NOT NULL,
  `reservationDate` date NOT NULL,
  `reservationTime` varchar(20) NOT NULL,
  `customerId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `typeId` int NOT NULL,
  `typeDesc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`),
  ADD KEY `cart_menuItem` (`itemId`),
  ADD KEY `cart_customer` (`customerId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `menuItem`
--
ALTER TABLE `menuItem`
  ADD PRIMARY KEY (`itemId`),
  ADD KEY `menuItem_type` (`typeId`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationId`),
  ADD KEY `reservation_customer` (`customerId`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`typeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menuItem`
--
ALTER TABLE `menuItem`
  MODIFY `itemId` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationId` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `typeId` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_customer` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cart_menuItem` FOREIGN KEY (`itemId`) REFERENCES `menuItem` (`itemId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `menuItem`
--
ALTER TABLE `menuItem`
  ADD CONSTRAINT `menuItem_type` FOREIGN KEY (`typeId`) REFERENCES `type` (`typeId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_customer` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
