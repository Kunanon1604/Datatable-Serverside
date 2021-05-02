-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 11:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datatable_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `email`, `telephone`, `created_at`, `updated_at`) VALUES
(1, 'Airi Satou', 'Airi@test.com', '0365587874', NULL, NULL),
(2, 'Brenden Wagner', 'Brenden@test.com', '0332555887', NULL, NULL),
(3, 'Bruno Nash', 'Bruno@test.com', '0399998889', NULL, NULL),
(4, 'Caesar Vance', 'Caesar@test.com', '0365565487', NULL, NULL),
(5, 'Cedric Kelly', 'Cedric@test.com', '0486565244', NULL, NULL),
(6, 'Donna Snider', 'Donna@test.com', '0465689895', NULL, NULL),
(7, 'Finn Camacho', 'Finn@test.com', '0255699987', NULL, NULL),
(8, 'Garrett Winters', 'Garrett@test.com', '0769898989', NULL, NULL),
(9, 'Hope Fuentes', 'Hope@test.com', '0366698751', NULL, NULL),
(10, 'Jennifer Acosta', 'Jennifer@test.com', '0789996254', NULL, NULL),
(11, 'Michael Silva', 'Michael@test.com', '0663322541', NULL, NULL),
(12, 'Paul Byrd', 'Paul@test.com', '0466369851', NULL, NULL),
(13, 'Sakura Yamamoto', 'Sakura@test.com', '0548875214', NULL, NULL),
(14, 'Tatyana Fitzpatrick', 'Tatyana@test.com', '0533669874', NULL, NULL),
(15, 'Vivian Harrell', 'Vivian@test.com', '05999878742', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_05_02_072859_create_member_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
