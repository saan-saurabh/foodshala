-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2020 at 10:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dish_id` int(11) NOT NULL,
  `restraunt_id` int(11) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dish_id`, `restraunt_id`, `dish_name`, `price`, `category`, `type`) VALUES
(12, 2, 'haidrabadi chicken biryani', 180, 'Main Course', 'Non-veg'),
(14, 2, 'veg noodles', 60, 'Chinese', 'Veg'),
(15, 2, 'catchups', 5, 'Add On', 'Veg'),
(16, 2, 'coke 200ml', 45, 'Beverages', 'Veg'),
(17, 2, 'rice', 120, 'Main Course', 'Veg'),
(18, 2, 'veg pulav', 120, 'Main Course', 'Veg'),
(19, 2, 'sandwich', 60, 'Breakfast', 'Veg'),
(20, 2, 'poha', 60, 'Breakfast', 'Veg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `restraunt_id` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `restraunt_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `restraunt_id`, `customer_email`, `dish_id`, `status`, `restraunt_email`) VALUES
(17, 2, 'saurabhanshraj@gmail.com', 19, 'confirmed', 'dhoklahouse123@gmail.com'),
(18, 2, 'saurabhanshraj@gmail.com', 17, 'confirmed', 'dhoklahouse123@gmail.com'),
(19, 2, 'saurabhanshraj@gmail.com', 14, 'confirmed', 'dhoklahouse123@gmail.com'),
(20, 2, 'saurabhanshraj@gmail.com', 18, 'confirmed', 'dhoklahouse123@gmail.com'),
(23, 2, 'saurabhanshraj@gmail.com', 15, 'pending', 'dhoklahouse123@gmail.com'),
(26, 2, 'saurabhanshraj@gmail.com', 19, 'pending', 'dhoklahouse123@gmail.com'),
(27, 2, 'saurabhanshraj@gmail.com', 16, 'pending', 'dhoklahouse123@gmail.com'),
(28, 2, 'saurabhanshraj@gmail.com', 19, 'pending', 'dhoklahouse123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `restraunts`
--

CREATE TABLE `restraunts` (
  `restraunt_id` int(11) NOT NULL,
  `restraunt_name` varchar(255) NOT NULL,
  `restraunt_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `restraunt_address` varchar(255) NOT NULL,
  `restraunt_contact` varchar(255) NOT NULL,
  `restraunt_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restraunts`
--

INSERT INTO `restraunts` (`restraunt_id`, `restraunt_name`, `restraunt_email`, `password`, `restraunt_address`, `restraunt_contact`, `restraunt_category`) VALUES
(1, 'Punjabi Dhaba', 'punjabidhaba@gmail.com', '819732e444de04549e9b105f773b35f3', 'lovely professional university', '8907456775', 'Veg & Non-veg'),
(2, 'The Dhokla House', 'dhoklahouse123@gmail.com', 'b0520afd2f6951f4af1a93f3b7806645', 'ballia', '9867456778', 'Veg'),
(7, 'Gujarati Dhaba', 'gujaratidhaba123@gmail.com', 'aa842f5742cff37e7154840931400443', 'ahemdabad', '9867456778', 'Veg & Non-veg'),
(8, 'The shadabhar', 'shadabhar@gmail.com', 'd3fe0316cb198d3116bf67adff678f8a', 'ballia', '9867896790', 'Veg & Non-veg'),
(9, 'Aryan restraunt', 'aryanrestraunt@gmail.com', '7956ed12b930d8ceec75cc5bf533d8fe', 'ballia', '8980674567', 'Veg & Non-veg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `password`, `address`, `contact`, `category`) VALUES
(2, 'Saurabh', 'saurabhanshraj@gmail.com', 'e255e60658520395ae5678652ada92d7', 'lovely professional university', '7905966858', 'Veg'),
(3, 'Prabhakar', 'prabhakar@gmail.com', '68e989a7997ec8e683286d26979115c9', 'lovely professional university', '7905966858', 'Veg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dish_id`),
  ADD UNIQUE KEY `dish_name` (`dish_name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restraunts`
--
ALTER TABLE `restraunts`
  ADD PRIMARY KEY (`restraunt_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `restraunts`
--
ALTER TABLE `restraunts`
  MODIFY `restraunt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
