-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 05:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `date`) VALUES
(4, 'nice website!!', '2022-11-28 19:49:34'),
(5, 'nice one', '2022-11-28 20:05:25'),
(8, 'wow', '2022-11-28 20:20:05'),
(9, 'great job', '2022-11-28 20:21:50'),
(10, 'great', '2022-11-28 20:28:02'),
(11, 'hello world', '2022-11-29 15:00:49'),
(12, 'gg', '2022-11-29 15:01:21'),
(13, 'nice website', '2022-12-04 12:36:00'),
(14, 'nice one website', '2022-12-05 14:28:42'),
(15, 'we are enjoying', '2022-12-12 09:27:41'),
(16, 'la foine ', '2022-12-20 20:35:21'),
(17, 'hello', '2022-12-21 15:53:17'),
(18, 'hi', '2022-12-21 16:14:39'),
(19, 'hello world', '2022-12-22 07:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`, `email`) VALUES
(11, 9713786144652740, 'kwibuka', 'solidality', '2022-11-26 19:26:01', 'okwibuka@gmail.com'),
(12, 3690, 'nambaje', 'solidality', '2022-11-26 19:45:12', 'nambaje@gmail.com'),
(13, 75413, 'edwin', 'solidality', '2022-11-26 19:46:31', 'edwin@gmail.com'),
(14, 40368577331436442, 'IRANZI', 'solidality', '2022-11-26 21:14:44', 'iranzi@gmail.com'),
(15, 546077588191, 'niyobuhungiro', 'kamoso', '2022-11-28 11:01:34', 'niyobuhungiro@gmail.com'),
(16, 47741879536, 'kalisa', 'solidality', '2022-11-28 20:01:27', 'kalisa@gmail.com'),
(17, 5014664259, 'iranzi', 'solidality', '2022-12-12 09:35:04', 'iranzikevin@gmail.com'),
(18, 1618013356, 'nibishaka', 'solidality', '2022-12-21 16:13:46', 'nibishaka@gmail.com'),
(19, 7233069148441696991, 'kalisa', '123456', '2022-12-24 12:49:01', 'iranzi@gmail.coms'),
(20, 334423999697358898, 'adiel', 'solidality', '2022-12-29 16:39:38', 'adiel@gmail.com'),
(21, 14495094, 'adiel', 'solidality', '2023-01-01 19:54:25', 'adiel@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
