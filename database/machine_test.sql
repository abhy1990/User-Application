-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 10:14 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `machine_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `address`, `user_type`, `status`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'adminqsaasda', 'admin@mailinator.com', '4297f44b13955235245b2497399d7a93', NULL, 'test addressdfssdfsdf', 1, 1, 1, '2020-07-28 00:00:00', NULL),
(2, 'user', 'user@user.com', '0192023a7bbd73250516f069df18b500', NULL, 'test', 0, 1, NULL, NULL, NULL),
(3, 'tetst', 'abhishekvnair@gmail.com', '4297f44b13955235245b2497399d7a93', NULL, 'Plavila,Plamoodu Pothencode', 0, 1, NULL, '2020-07-28 15:59:10', '2020-07-28 15:59:10'),
(10, 'Aneesh', 'aneesh@mailinator.com', '698d51a19d8a121ce581499d7b701668', '1595965194_Screenshot_1.jpg', 'sd shkfj sdf sd sdgsdgsd g', 1, 1, NULL, '2020-07-28 19:37:45', '2020-07-28 19:37:45'),
(11, 'sasi', 'sasi@mailinator.com', '698d51a19d8a121ce581499d7b701668', '1595965569_Screenshot_1.jpg', 'esdgsdg sadgs gsadgasd g', 0, 1, NULL, '2020-07-28 19:42:14', '2020-07-28 19:42:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
