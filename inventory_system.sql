-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 08:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event` varchar(255) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `event`, `time_created`) VALUES
(1, 1, 'Logged in', '2023-04-16 16:52:10'),
(2, 1, 'Logged in', '2023-04-16 16:58:30'),
(3, 1, 'Logged out.', '2023-04-16 17:02:19'),
(4, 1, 'Logged in.', '2023-04-16 17:05:22'),
(5, 1, 'deleted  phone', '2023-04-16 17:05:25'),
(6, 1, 'Deleted 13 phone', '2023-04-16 17:05:56'),
(7, 1, 'Logged out.', '2023-04-16 17:08:34'),
(8, 1, 'Logged in.', '2023-04-16 17:08:37'),
(9, 1, 'Logged out.', '2023-04-16 17:09:19'),
(10, 1, 'Logged in.', '2023-04-16 17:13:43'),
(11, 1, 'Logged in.', '2023-04-16 17:13:57'),
(12, 1, 'Logged in.', '2023-04-16 17:15:57'),
(13, 1, 'added 30 phone', '2023-04-16 17:17:41'),
(14, 1, 'edited 14 phone', '2023-04-16 17:22:10'),
(15, 1, 'edited 14 phone', '2023-04-16 17:22:14'),
(16, 1, 'Added 31 phone.', '2023-04-16 17:24:30'),
(17, 1, 'Edited 14 phone.', '2023-04-16 17:27:49'),
(18, 1, 'Deleted 14 phone.', '2023-04-16 17:28:23'),
(19, 1, 'Logged out.', '2023-04-16 17:34:26'),
(20, 1, 'Logged in.', '2023-04-16 17:34:29'),
(21, 1, 'Logged in.', '2023-04-16 17:37:01'),
(22, 1, 'Deleted 15 phone.', '2023-04-16 18:34:06'),
(23, 1, 'Deleted 16 phone.', '2023-04-16 18:34:08'),
(24, 1, 'Deleted 17 phone.', '2023-04-16 18:34:09'),
(25, 1, 'Deleted 18 phone.', '2023-04-16 18:34:10'),
(26, 1, 'Deleted 19 phone.', '2023-04-16 18:34:11'),
(27, 1, 'Deleted 20 phone.', '2023-04-16 18:34:13'),
(28, 1, 'Edited 21 phone.', '2023-04-16 18:34:22'),
(29, 1, 'Deleted 22 phone.', '2023-04-16 18:34:25'),
(30, 1, 'Deleted 23 phone.', '2023-04-16 18:34:26'),
(31, 1, 'Deleted 24 phone.', '2023-04-16 18:34:27'),
(32, 1, 'Edited 25 phone.', '2023-04-16 18:34:36'),
(33, 1, 'Deleted 26 phone.', '2023-04-16 18:34:37'),
(34, 1, 'Deleted 27 phone.', '2023-04-16 18:34:40'),
(35, 1, 'Edited 21 phone.', '2023-04-16 18:34:42'),
(36, 1, 'Edited 21 phone.', '2023-04-16 18:34:48'),
(37, 1, 'Edited 21 phone.', '2023-04-16 18:34:50'),
(38, 1, 'Added 32 phone.', '2023-04-16 18:35:05'),
(39, 1, 'Deleted 31 phone.', '2023-04-16 18:35:08'),
(40, 1, 'Deleted 28 phone.', '2023-04-16 18:35:09'),
(41, 1, 'Deleted 29 phone.', '2023-04-16 18:35:10'),
(42, 1, 'Deleted 30 phone.', '2023-04-16 18:35:12'),
(43, 1, 'Edited 21 phone.', '2023-04-16 18:36:44'),
(44, 1, 'Edited 21 phone.', '2023-04-16 18:37:28'),
(45, 1, 'Edited 21 phone.', '2023-04-16 18:37:51'),
(46, 1, 'Edited 21 phone.', '2023-04-16 18:38:39'),
(47, 1, 'Edited 21 phone.', '2023-04-16 18:39:12'),
(48, 1, 'Logged in.', '2023-04-16 18:43:17'),
(49, 1, 'Logged out.', '2023-04-16 18:43:19'),
(50, 1, 'Logged in.', '2023-04-16 18:43:21'),
(51, 1, 'Edited 25 phone.', '2023-04-16 18:43:44'),
(52, 1, 'Added 33 phone.', '2023-04-16 18:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `brand`, `model`, `price`, `availability`) VALUES
(21, 'Apple', 'Iphone 13 mini', 729, 1),
(25, 'Apple', 'Iphone 12 mini', 529, 0),
(32, 'Samsung', 'Galaxy S23', 879, 1),
(33, 'Samsung', 'Galaxy A23 5', 279, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`) VALUES
(1, 'admin', '$2y$10$09myCxYrnhzqt143dZonUOHwUeoShm3vG2NQMzgDJROo4Ix..8lBW', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
