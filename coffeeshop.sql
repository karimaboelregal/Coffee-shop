-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 09:53 PM
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
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `beveragestable`
--

CREATE TABLE `beveragestable` (
  `ID` int(11) NOT NULL,
  `beverageName` text NOT NULL,
  `beveragePrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beveragestable`
--

INSERT INTO `beveragestable` (`ID`, `beverageName`, `beveragePrice`) VALUES
(1, 'house blend', 25),
(2, 'dark roast', 25),
(3, 'decaf', 25),
(4, 'espresso', 25);

-- --------------------------------------------------------

--
-- Table structure for table `condimenttable`
--

CREATE TABLE `condimenttable` (
  `ID` int(11) NOT NULL,
  `condimentName` text NOT NULL,
  `condimentPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `condimenttable`
--

INSERT INTO `condimenttable` (`ID`, `condimentName`, `condimentPrice`) VALUES
(1, 'steamed milk', 15),
(2, 'foamed milk', 15),
(3, 'soy', 15),
(4, 'chocolate', 20);

-- --------------------------------------------------------

--
-- Table structure for table `drinkstable`
--

CREATE TABLE `drinkstable` (
  `ID` int(11) NOT NULL,
  `drinkName` text NOT NULL,
  `drinkDesc` text NOT NULL,
  `smallPrice` int(11) NOT NULL,
  `mediumPrice` int(11) NOT NULL,
  `largePrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drinkstable`
--

INSERT INTO `drinkstable` (`ID`, `drinkName`, `drinkDesc`, `smallPrice`, `mediumPrice`, `largePrice`) VALUES
(1, 'Cappuccino', 'Cappuccino is a coffee drink that today is typically composed of a single espresso shot and hot milk, with the surface topped with foamed milk.', 15, 25, 35),
(2, 'Caffè Latte', 'A caffè latte is simply a shot or two of bold, tasty espresso with fresh, sweet steamed milk over it', 20, 30, 40),
(3, 'Caffè mocha', 'caffè mocha is based on espresso and hot milk but with added chocolate flavouring and sweetener.', 25, 35, 50);

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `ID` int(11) NOT NULL,
  `customerName` text NOT NULL,
  `drinkOrdered` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beveragestable`
--
ALTER TABLE `beveragestable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `condimenttable`
--
ALTER TABLE `condimenttable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `drinkstable`
--
ALTER TABLE `drinkstable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beveragestable`
--
ALTER TABLE `beveragestable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `condimenttable`
--
ALTER TABLE `condimenttable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drinkstable`
--
ALTER TABLE `drinkstable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
