-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 04:15 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliances`
--

CREATE TABLE `appliances` (
  `productID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`productID`, `productName`, `productPrice`, `productImage`) VALUES
(1, 'fridge1', 113000.00, 'img/appliances/fridge1.jpeg'),
(2, 'fridge2', 69000.00, 'img/appliances/fridge2.jpeg'),
(3, 'tv1', 300999.00, 'img/appliances/tv1.jpeg'),
(4, 'tv2', 400889.00, 'img/appliances/tv2.jpeg'),
(5, 'tv3', 89900.00, 'img/appliances/tv3.jpg'),
(6, 'wm1', 30000.00, 'img/appliances/wm1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `userName` varchar(150) NOT NULL,
  `userPassword` varchar(150) NOT NULL,
  `customerName` varchar(150) NOT NULL,
  `customerAddress` varchar(250) NOT NULL,
  `customerPhone` varchar(25) NOT NULL,
  `customerEmail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `userName`, `userPassword`, `customerName`, `customerAddress`, `customerPhone`, `customerEmail`) VALUES
(7, 'abhin99', '$2y$10$N1OkelTxmBSmxb4h/.zo2.dWBD/6S8Ub83wNlWBHkib6tdX.UM6wS', 'Abhin', 'TEST', '0000000000', 'xyz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `productID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`productID`, `productName`, `productPrice`, `productImage`) VALUES
(1, 'Iphone 7', 69999.00, 'img/iphone7.png'),
(2, 'Iphone 7s', 79999.00, 'img/iphone7s.png'),
(3, 'Ipad Air', 59999.00, 'img/ipadair.png'),
(4, 'Ipad Pro', 89999.00, 'img/ipadpro.png'),
(5, 'Macbook Air', 59999.00, 'img/macbookair.png'),
(6, 'Macbook Pro', 139999.00, 'img/macbookpro.png'),
(7, 'Macbook Pro', 139999.00, 'img/macbookpro.png');

-- --------------------------------------------------------

--
-- Table structure for table `ewallet`
--

CREATE TABLE `ewallet` (
  `productID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `productID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`productID`, `productName`, `productPrice`, `productImage`) VALUES
(1, 'mtop 0', 2500.00, 'img/men1.jpeg'),
(5, 'mtop1', 8990.00, 'img/men/mtop1.jpeg'),
(6, 'mtop2', 5990.00, 'img/men/mtop2.jpeg'),
(7, 'mtop3', 8990.00, 'img/men/mtop3.jpeg'),
(8, 'mtop4', 7526.00, 'img/men/mtop4.jpeg'),
(9, 'mtop5', 8900.00, 'img/men/mtop5.jpeg'),
(10, 'mtop6', 4563.00, 'img/men/mtop6.jpeg'),
(11, 'mtop7', 4599.00, 'img/men/mtop7.jpeg'),
(12, 'mtop8', 7899.00, 'img/men/mtop8.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `productID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`productID`, `productName`, `productPrice`, `productImage`) VALUES
(1, 'wjeans1', 6999.00, 'img/women/wjeans1.jpeg'),
(2, 'wjeans2', 7999.00, 'img/women/wjeans2.jpeg'),
(3, 'wjeans3', 5999.00, 'img/women/wjeans3.jpeg'),
(4, 'wtop1', 6999.00, 'img/women/wtop1.jpeg'),
(5, 'wtop2', 7999.00, 'img/women/wtop2.jpeg'),
(6, 'wtop3', 7456.00, 'img/women/wtop3.jpeg'),
(7, 'wtop4', 8999.00, 'img/women/wtop4.jpeg'),
(8, 'wtop5', 5999.00, 'img/women/wtop5.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliances`
--
ALTER TABLE `appliances`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
