-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 06, 2023 at 09:03 AM
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
  `fName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phoneNum` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nationalCode` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `myPass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `fName`, `lName`, `phoneNum`, `nationalCode`, `email`, `address`, `myPass`) VALUES
(1, 'Zohreh', 'Seyedi', '0415700000', '111', 'z.seyedi@gmail.com', 'Helsinki', ''),
(3, 'Sujan', 'Tiwari', '0451831000', '333', 's.t@gmail.com', 'Helsinki', ''),
(4, 'Bishal', 'Shrestha', '0443071000', '444', 'b.sh@gmail.com', 'Helsinki', ''),
(5, 'Ville', 'Lehtonen', '0449746000', '555', 'v.l@gmail.com', 'Helsinki', ''),
(8, 'Ali', 'Morraveji', '0449746000', '888', 'a.m@gmail.com', 'Hämeenlinna', ''),
(9, 'Neda', 'MNG', '0415753622', '999', 'n.m@gmail.com', 'Helsinki', ''),
(81, 'S11', 'Seyedi', '04157536211', '1111', 's.s@gmail.com', 'Helsinki', '1111'),
(82, 'ali', 'MRVJ', '0415752222', '2222', 'a.m@gmail.com', 'Hämeenlinna', '2222'),
(83, 'Bardia', 'MRVJ', '041575959595', '9595', 'b.m@gmail.com', 'Hämeenlinna', '9595'),
(84, 'N90', 'S90', '909090999', '9090', 'n.s@gmail.com', 'Hämeenlinna', '9090'),
(85, 'P94', 'KD', '9494', '9494', 'p.kd@gmail.com', 'Helsinki', '9494'),
(86, 'Mari61', 'SD', '616161', '6161', 'm.sd@gmail.com', 'Tampre', '6161'),
(99, 'Seyedeh', 'Seyedi', '041575362', '444', 'root', 'Helsinki', 'password'),
(100, 'Seyedeh', 'Seyedi', '041575362', '444', 'root', 'Helsinki', 'password'),
(101, 'Seyedeh', 'Seyedi', '041575362', '444', 'root', 'Helsinki', 'password'),
(102, 'Seyedeh', 'Seyedi', '041575362', '555', 'root', 'Helsinki', 'password'),
(103, 'Seyedeh', 'Seyedi', '0415753624', '2324324', 'root3333', 'Helsinki', 'password');

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
  `customerId` int NOT NULL,
  `numGuests` int NOT NULL
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
  MODIFY `customerId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

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
