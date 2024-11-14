-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 03:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_ordering_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `expiration` date NOT NULL,
  `date_receive` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `price`, `expiration`, `date_receive`, `image`) VALUES
(1, 'Noodles', 150, '2024-10-29', '2024-11-03 05:49:36', 'noodles'),
(2, 'Coke', 100, '2024-10-28', '2024-11-03 05:49:51', 'coke'),
(3, 'Hotdog', 25, '2024-10-29', '2024-11-03 05:53:14', 'hotdog'),
(4, 'longgadog', 69, '2024-11-03', '2024-11-03 05:53:18', 'longgadog'),
(5, 'nokma', 99, '2024-11-14', '2024-11-03 05:53:24', 'chicken'),
(6, 'sinigang na hotdog', 58, '2024-11-07', '2024-11-03 05:53:28', 'sinigang'),
(7, 'apple', 38, '2024-11-14', '2024-11-03 05:53:31', 'apple'),
(8, 'pineapple', 90, '2024-11-07', '2024-11-03 05:53:35', 'pineapple'),
(9, 'rat poison', 24, '2024-11-13', '2024-11-03 05:53:38', 'rat'),
(10, 'gin', 68, '2024-11-23', '2024-11-03 05:53:41', 'gin'),
(11, 'fishda', 121, '2024-11-13', '2024-11-03 05:53:45', 'fish'),
(12, 'shake', 60, '2024-11-06', '2024-11-03 05:53:48', 'shake');

-- --------------------------------------------------------

--
-- Table structure for table `online_order`
--

CREATE TABLE `online_order` (
  `id` int(11) NOT NULL,
  `item_no` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `payment` varchar(535) DEFAULT NULL,
  `delivery` varchar(535) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_order`
--

INSERT INTO `online_order` (`id`, `item_no`, `order_no`, `transaction_id`, `quantity`, `name`, `price`, `payment`, `delivery`, `total`) VALUES
(39, 97, 932, 74, 15, 'longgadog', 69, 'Cash', 'COD', 1035),
(40, 93, 667, 81, 5, 'nokma', 99, 'Cash', 'standard', 495),
(41, 409, 706, 57, 12, 'fishda', 121, 'Cash', 'COD', 1452),
(42, 109, 139, 88, 17, 'Noodles', 150, 'Cash', 'Pick Up', 2550),
(43, 433, 240, 52, 11, 'shake', 60, 'Credit Card', 'Pick Up', 660),
(44, 179, 104, 5, 14, 'rat poison', 24, 'Cash', 'standard', 336),
(45, 498, 184, 30, 8, 'gin', 68, 'Credit Card', 'Pick Up', 544),
(46, 778, 897, 73, 11, 'sinigang na hotdog', 58, 'gcash', 'Pick Up', 638),
(47, 357, 76, 90, 2, 'Coke', 100, 'Credit Card', 'standard', 200),
(48, 72, 75, 48, 16, 'pineapple', 90, 'Cash', 'COD', 1440);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(535) NOT NULL,
  `password` varchar(535) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `full_name`) VALUES
(1, 'user', 'pass', 'john'),
(2, 'john', '1a1dc91c907325c69271ddf0c944bc72', 'john doe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_order`
--
ALTER TABLE `online_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `online_order`
--
ALTER TABLE `online_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
