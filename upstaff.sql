-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2026 at 09:43 PM
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
-- Database: `upstaff`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(20) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `username`, `email`, `password`, `phone`, `address`, `dob`, `status`, `created_at`, `role`) VALUES
(1, 'steven ', 'antonio', 'antoniosteven664@gmail.com', '$2y$10$LidGoFKOU5Xc.ji92apSCeLezb/nL1G36DANeY4oZd5OhYsysDmGK', '087849663t', 'san roque', '2026-03-06', 'approved', '2026-03-05 19:54:11', 'user'),
(3, 'Admin', 'admin', 'admin@example.com', '$2y$10$YMiN11c9C9X8/l0E66uQpOknSz71mS/vPfSQO43peD0Lyr61qqrU6', '0000000000', 'System Admin', '2000-01-01', 'approved', '2026-03-05 21:01:40', 'admin'),
(4, 'dexter', 'dondon', 'jerwingonzales1095@gmail.com', '$2y$10$IhxDxFWE6zA2hglG0x20EO8vJ0G56BbB/wL7UASiT.FTIcLQjp3wm', '0878496639', 'tetuan', '2026-03-06', 'approved', '2026-03-05 21:36:07', 'user'),
(5, 'andico', 'fajardo', 'adjacel@gmail.com', '$2y$10$EFdCHUuqLVz8kTvS0vtPSeNuOpZBFyffrYkjiZQx/JVCgGggZCs4m', '097851648', 'guiwan', '2026-03-06', 'rejected', '2026-03-05 22:09:08', 'user'),
(6, 'dexter', 'bayla', 'andy@gmail.com', '$2y$10$Po0V.Z5t/1bzirYAg4kBH.lHTMDG/3cwJDJ3.dUPeSSfGi42Hyiza', '09784546123', 'seaside', '2000-12-24', 'approved', '2026-03-06 13:40:35', 'user'),
(7, 'faith', 'denden', 'denden@gmail.com', '$2y$10$uSoGTAtd2K4ubIXYm18BCuMWSmWebjmsnUBy9YWPQ/ITb15CrT6Ry', '0945461231', 'zppsu', '2004-04-24', 'approved', '2026-03-06 13:48:34', 'user'),
(16, 'Albert', 'dela pena', 'luchiloo10@gmail.com', '$2y$10$3rY5Wdnje71hHgsORrYXqOIxUWyUnWEr8ctNWMCUTSBX2ZMMMD/9i', '09978464691', 'manicahan', '1919-09-08', 'approved', '2026-03-09 19:45:01', 'user'),
(17, 'shamir', 'shamir', 'rasulshamir@gmail.com', '$2y$10$GzKRBQ/JQ0EAUcn95fDbTu4/9u87pMzJAWEKQ/oj3WBE9.LERHAIy', '0934533213452', 'san roque', '2026-03-10', 'approved', '2026-03-09 19:48:45', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
