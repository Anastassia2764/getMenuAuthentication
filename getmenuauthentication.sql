-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 09:53 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getmenuauthentication`
--
CREATE DATABASE IF NOT EXISTS `getmenuauthentication` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `getmenuauthentication`;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `ID` int(11) NOT NULL,
  `menu_name` varchar(150) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`ID`, `menu_name`, `parent_id`) VALUES(1, 'Home', 0);
INSERT INTO `menus` (`ID`, `menu_name`, `parent_id`) VALUES(2, 'Sales', 0);
INSERT INTO `menus` (`ID`, `menu_name`, `parent_id`) VALUES(3, 'Shop', 0);
INSERT INTO `menus` (`ID`, `menu_name`, `parent_id`) VALUES(4, 'About', 0);
INSERT INTO `menus` (`ID`, `menu_name`, `parent_id`) VALUES(5, 'Contacts', 0);
INSERT INTO `menus` (`ID`, `menu_name`, `parent_id`) VALUES(12, 'Seasons', 3);
INSERT INTO `menus` (`ID`, `menu_name`, `parent_id`) VALUES(13, 'Casual', 3);
INSERT INTO `menus` (`ID`, `menu_name`, `parent_id`) VALUES(14, 'Children', 3);
INSERT INTO `menus` (`ID`, `menu_name`, `parent_id`) VALUES(15, 'Special offer', 3);
INSERT INTO `menus` (`ID`, `menu_name`, `parent_id`) VALUES(16, 'Spring', 12);
INSERT INTO `menus` (`ID`, `menu_name`, `parent_id`) VALUES(17, 'Summer', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Pass`) VALUES(48, 'name.surname@project.com', '$2y$10$g6VZwaAG3jfzkSa9p5JrOeuHsb.YUcQD69PP/bAemxK0QR91NNViO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
