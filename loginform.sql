-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 08:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginform`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `ImgaName` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FelhasznaloNev` tinytext COLLATE utf8_hungarian_ci NOT NULL,
  `Jelszo` tinytext COLLATE utf8_hungarian_ci NOT NULL,
  `Email` tinytext COLLATE utf8_hungarian_ci NOT NULL,
  `ProfPic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FelhasznaloNev`, `Jelszo`, `Email`, `ProfPic`) VALUES
(1, 'Zsolti145', '$2y$10$IpqAfVFAIjGMTT1sKQDrQejpQ0aynvunAbjZJO0xshzIWOXBa6m6W', 'zsoltika192@gmail.com', 0),
(2, 'Dummy', '$2y$10$GvJfIbMjeOgEg1HzymmDG.wYzMBelgziE12RHptJcznHOfzSlF6km', 'valami@freemail.hu', 0),
(3, 'Hello', '$2y$10$44FseFU3jckT6AG6b55SYORs0rf0.ekX6XtgQoOhFyMHVGtZmLHZC', 'proba@freemail.hu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ProfPic` (`ProfPic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
