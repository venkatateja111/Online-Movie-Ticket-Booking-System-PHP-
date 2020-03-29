-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 11:57 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`) VALUES
(2, 'That is MahaLakshmi'),
(3, 'Majili'),
(4, 'Suryakantham'),
(5, 'Geetha Govindam'),
(6, 'Tholiprema'),
(7, 'GangLeader'),
(8, 'Syeraa'),
(9, 'Chanakya'),
(10, 'Saaho'),
(11, 'Simbaa'),
(12, 'URI'),
(13, 'Super 30'),
(14, 'Bharat'),
(15, 'Kalank'),
(16, 'Gully Boy'),
(17, 'Badla'),
(18, 'Luka Chuppi'),
(19, 'Total Dhamaal'),
(20, 'Spider man far from home'),
(21, 'Hobbs and shaw'),
(22, 'Joker'),
(23, 'Gemini Man'),
(24, 'John wick 3'),
(25, 'Shazam'),
(26, 'Maleficient 2'),
(27, 'Aladdin'),
(28, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email_id`, `password`, `phone`) VALUES
(1, 'komarti', 'venkata teja', 'a1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 9874569858);

-- --------------------------------------------------------

--
-- Table structure for table `user_products`
--

CREATE TABLE `user_products` (
  `id` bigint(100) NOT NULL,
  `uid` bigint(100) NOT NULL,
  `pid` bigint(100) NOT NULL,
  `no of tickets` bigint(100) NOT NULL,
  `total` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `status` enum('pending','confirmed') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_products`
--

INSERT INTO `user_products` (`id`, `uid`, `pid`, `no of tickets`, `total`, `date`, `status`) VALUES
(1, 1, 8, 1, 260, '2020-03-26', 'confirmed'),
(2, 1, 8, 1, 260, '2020-03-27', 'confirmed'),
(3, 1, 8, 1, 260, '2020-03-26', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_products`
--
ALTER TABLE `user_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_products`
--
ALTER TABLE `user_products`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
