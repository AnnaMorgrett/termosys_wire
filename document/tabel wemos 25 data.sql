-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 07:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `termosys_wire`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_07_144114_create_tables_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ph_1` double(8,2) NOT NULL,
  `temp_1` double(8,2) NOT NULL,
  `temp_2` double(8,2) NOT NULL,
  `temp_3` double(8,2) NOT NULL,
  `feeder_distance` double(8,2) NOT NULL,
  `water_distance` double(8,2) NOT NULL,
  `water_flow` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `ph_1`, `temp_1`, `temp_2`, `temp_3`, `feeder_distance`, `water_distance`, `water_flow`, `created_at`, `updated_at`) VALUES
(1, 6.00, 27.00, 26.00, 27.00, 52.00, 70.00, 75.00, NULL, NULL),
(2, 7.00, 28.00, 27.00, 27.00, 50.00, 63.00, 87.00, NULL, NULL),
(3, 6.00, 27.00, 27.00, 28.00, 53.00, 71.00, 63.00, NULL, NULL),
(4, 7.00, 28.00, 28.00, 26.00, 53.00, 69.00, 67.00, NULL, NULL),
(5, 7.00, 27.00, 28.00, 27.00, 54.00, 64.00, 69.00, NULL, NULL),
(6, 7.00, 26.00, 28.00, 26.00, 52.00, 63.00, 65.00, NULL, NULL),
(7, 6.00, 27.00, 28.00, 27.00, 53.00, 60.00, 88.00, NULL, NULL),
(8, 7.00, 27.00, 26.00, 28.00, 50.00, 65.00, 72.00, NULL, NULL),
(9, 6.00, 26.00, 27.00, 28.00, 51.00, 71.00, 64.00, NULL, NULL),
(10, 7.00, 27.00, 27.00, 26.00, 50.00, 73.00, 84.00, NULL, NULL),
(11, 7.00, 26.00, 28.00, 28.00, 53.00, 74.00, 66.00, NULL, NULL),
(12, 7.00, 27.00, 27.00, 26.00, 51.00, 62.00, 75.00, NULL, NULL),
(13, 7.00, 28.00, 28.00, 28.00, 53.00, 70.00, 74.00, NULL, NULL),
(14, 6.00, 28.00, 26.00, 28.00, 53.00, 71.00, 76.00, NULL, NULL),
(15, 6.00, 26.00, 28.00, 28.00, 52.00, 68.00, 83.00, NULL, NULL),
(16, 6.00, 28.00, 28.00, 26.00, 54.00, 74.00, 63.00, NULL, NULL),
(17, 7.00, 26.00, 27.00, 27.00, 51.00, 67.00, 69.00, NULL, NULL),
(18, 6.00, 27.00, 28.00, 26.00, 50.00, 65.00, 86.00, NULL, NULL),
(19, 7.00, 27.00, 26.00, 27.00, 52.00, 61.00, 73.00, NULL, NULL),
(20, 7.00, 28.00, 27.00, 28.00, 51.00, 60.00, 86.00, NULL, NULL),
(21, 7.00, 26.00, 27.00, 27.00, 51.00, 65.00, 87.00, NULL, NULL),
(22, 6.00, 28.00, 27.00, 26.00, 50.00, 64.00, 77.00, NULL, NULL),
(23, 7.00, 28.00, 28.00, 28.00, 50.00, 61.00, 80.00, NULL, NULL),
(24, 6.00, 27.00, 26.00, 26.00, 53.00, 65.00, 62.00, NULL, NULL),
(25, 7.00, 27.00, 26.00, 28.00, 51.00, 72.00, 81.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Irza Aditya Mahendra', 'lunardreamgfx@gmail.com', NULL, '$2y$10$ZcjJf0s/ubjoK0nhjNdQ4OIoz5sWV2d08dUAt.U73DzjmcGj1tPuq', NULL, '2022-07-08 21:31:43', '2022-07-08 21:31:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
