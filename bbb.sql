-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 05:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'BBBRealAdmin', 'adminBBB', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `catering_table`
--

CREATE TABLE `catering_table` (
  `cater_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phNo` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `event_type` varchar(200) NOT NULL,
  `event_date` date NOT NULL,
  `event_location` varchar(300) NOT NULL,
  `no_of_guest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catering_table`
--

INSERT INTO `catering_table` (`cater_id`, `name`, `phNo`, `email`, `event_type`, `event_date`, `event_location`, `no_of_guest`) VALUES
(15, 'Check101', 1234567890, 'checking@gmail.com', 'Limited Service Catering', '2023-12-16', '101 hello testing', 30),
(16, 'Check101again', 123456789, 'heycheckinggg@gmail.com', 'Full Service Catering', '2024-01-05', 'Allo testing', 250),
(17, 'Beula', 1234567890, 'Someone@gmail.com', 'Full Service Catering', '2023-12-24', 'Allo testing', 100),
(18, 'Beula', 2147483647, 'Someone@gmail.com', 'Limited Service Catering', '2024-01-19', 'YEllo testing', 243),
(19, 'messagecheck', 2147483647, 'checking2@gmail.com', 'Limited Service Catering', '2023-12-27', 'Ello testing', 30),
(20, 'FinalCheck', 2147483647, 'Someone@gmail.com', 'Limited Service Catering', '2023-12-28', '2012 endofworld street', 359),
(21, 'hey', 1112225554, 'checking2@gmail.com', 'Limited Service Catering', '2024-01-05', 'Ello testing', 243);

-- --------------------------------------------------------

--
-- Table structure for table `menu_table`
--

CREATE TABLE `menu_table` (
  `item_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `name_and_price` varchar(100) NOT NULL,
  `about` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_table`
--

INSERT INTO `menu_table` (`item_id`, `category`, `name_and_price`, `about`) VALUES
(1, 'Classics', 'Avocado Grilled Cheese - $11', 'Sour Dough bread, avocado, goat cheese, spinach, basil, parsely'),
(2, 'Classics', 'Ham and Cheese - $11', 'Whole wheat bread, ham, swiss cheese, mustard'),
(3, 'Classics', 'Breakfast BLT - $12', 'White bread, crispy bacon, lettuce, roma tomatoes, mayonnaise'),
(4, 'B\' Specials', 'Roast Beef Sandwich - $18', 'Brioche bun, sliced roast beef, gravy, fried onions, baby arugula, horseradish, mayonnaise'),
(5, 'B\' Specials', 'Chicken Club Sandwich - $14', 'Sour Dough bread, rotisserie chicken, avacado, mayonnaise, pepperjack'),
(6, 'B\' Specials', 'Cajun Grilled Shrimp Sandwich - $18', 'Whole wheat bread, shrimp, creole, garlic butter, lettuce, onions, tomatoes'),
(7, 'Fries & Drinks', 'Classic salted fries - $8', ''),
(8, 'Fries & Drinks', 'Crinkle cut cajun fries - $9', ''),
(9, 'Fries & Drinks', 'Mimosa - $10', ''),
(10, 'Fries & Drinks', 'Margerita - $10', ''),
(17, 'Test ', 'something $1', 'A lot of things');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_table`
--

CREATE TABLE `newsletter_table` (
  `newsletter_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter_table`
--

INSERT INTO `newsletter_table` (`newsletter_id`, `email`) VALUES
(1, 'some@gmail.com'),
(2, 'check@gmail.com'),
(3, 'go@gmail.com'),
(4, 'ryuk@gmail.com'),
(5, 'checkinggg@gmail.com'),
(6, 'checking@gmail.com'),
(7, 'kawasaki@gmail.com'),
(8, 'mrholmes@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `catering_table`
--
ALTER TABLE `catering_table`
  ADD PRIMARY KEY (`cater_id`);

--
-- Indexes for table `menu_table`
--
ALTER TABLE `menu_table`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `newsletter_table`
--
ALTER TABLE `newsletter_table`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catering_table`
--
ALTER TABLE `catering_table`
  MODIFY `cater_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `menu_table`
--
ALTER TABLE `menu_table`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `newsletter_table`
--
ALTER TABLE `newsletter_table`
  MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
