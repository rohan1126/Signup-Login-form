-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2022 at 08:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindb`
--

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
  `salt` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`, `salt`) VALUES
(51, 594247404, 'Rohan', '0cef1fb10f60529028a71f58e54ed07b', '2022-12-07 00:14:59', NULL),
(52, 9894110008547984, 'mary', '2c103f2c4ed1e59c0b4e2e01821770fa', '2022-12-07 18:07:31', NULL),
(54, 2326922907353940, 'George', '0cef1fb10f60529028a71f58e54ed07b', '2022-12-07 18:13:49', NULL),
(55, 33248014530, 'bob', '0cef1fb10f60529028a71f58e54ed07b', '2022-12-08 05:06:06', NULL),
(56, 615576924111595447, 'simon', '2c103f2c4ed1e59c0b4e2e01821770fa', '2022-12-08 21:27:07', NULL),
(57, 2329898, 'tom', '2c103f2c4ed1e59c0b4e2e01821770fa', '2022-12-08 22:03:32', NULL),
(58, 3845, 'johnson', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb9573', '2022-12-09 01:28:33', NULL),
(59, 330830, 'brother', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb9573', '2022-12-09 01:32:51', NULL),
(60, 409221, 'johns', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb9573', '2022-12-09 02:22:21', NULL),
(61, 739440704506034040, 'bobs', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb9573', '2022-12-09 02:23:52', NULL),
(62, 4541481832, 'johnsons', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb9573', '2022-12-09 02:26:16', NULL),
(63, 75193975465942447, 'broth', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb9573', '2022-12-09 02:35:26', NULL),
(64, 6483943, 'you', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb9573', '2022-12-09 02:51:33', NULL),
(65, 5636634827, 'new', 'e78fbf0383ae44d6216d2b619bdbc3de', '2022-12-09 04:07:37', NULL),
(66, 22512, 'god', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb957347286rguibhifujsdgiough78r432gb!DSWQE989)H/', '2022-12-09 04:12:25', NULL),
(67, 5510373, 's', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb957347286rguibhifujsdgiough78r432gb!DSWQE989)H/', '2022-12-09 04:15:38', '47286rguibhifujsdgiough78r432gb!DSWQE989)H/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
