-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 08:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blade`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontraks`
--

CREATE TABLE `kontraks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pekerja_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'diproses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `durasi_kerja` varchar(255) DEFAULT NULL,
  `jam_kerja` varchar(255) DEFAULT NULL,
  `catatan_khusus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontraks`
--

INSERT INTO `kontraks` (`id`, `user_id`, `pekerja_id`, `status`, `created_at`, `updated_at`, `is_paid`, `durasi_kerja`, `jam_kerja`, `catatan_khusus`) VALUES
(44, 9, 1, 'diproses', '2023-06-18 03:02:08', '2023-06-18 03:02:08', 0, '3 Bulan', '6 jam/hari', 'jangan sampai telat'),
(45, 1, 1, 'disetujui', '2023-06-18 03:10:29', '2023-06-18 03:20:17', 1, '3 Bulan', '6 jam/hari', 'jangan sampai telat'),
(46, 1, 1, 'ditolak', '2023-06-18 03:23:06', '2023-06-18 03:30:35', 0, '3 Bulan', '4 jam/hari', 'coba tolak'),
(47, 1, 1, 'disetujui', '2023-06-18 03:23:25', '2023-06-18 03:32:39', 1, '1 Bulan', '4 jam/hari', 'coba saldo kurang'),
(48, 1, 1, 'disetujui', '2023-06-18 17:39:07', '2023-06-18 17:39:35', 0, '1 Bulan', '4 jam/hari', NULL),
(49, 1, 1, 'diproses', '2023-06-18 18:29:28', '2023-06-18 18:29:28', 0, '1 Bulan', '4 jam/hari', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_01_042432_create_pekerjas_table', 2),
(6, '2023_06_02_173932_add_saldo_to_users_table', 3),
(7, '2023_06_03_085808_add_datadiri_to_pekerjas_table', 4),
(8, '2023_06_06_064459_add_lokasi_to_users_table', 5),
(10, '2023_06_14_101706_create_kontraks_table', 6),
(11, '2023_06_14_113426_add_is_paid_to_kontraks', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('user1@gmail.com', '$2y$10$.iUj7gtNd8.drp4KUFvGjOmlm9.S.JhTnx3otvcL0XVMmItLGE/.y', '2023-06-02 01:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjas`
--

CREATE TABLE `pekerjas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal_lahir` varchar(20) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjas`
--

INSERT INTO `pekerjas` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tanggal_lahir`, `lokasi`, `deskripsi`, `gaji`) VALUES
(1, 'pekerja1', 'pekerja1@gmail.com', NULL, '$2y$10$bj.SpNWorLsMus4QkW/NAOIHKlA/ri5b/RRjRDCwZqj8s2nvS0qWG', NULL, '2023-05-31 22:05:05', '2023-06-18 03:17:37', '2003-06-05', 'Sidoarjo', 'baik sekali', 1000000),
(7, 'pekerja2', 'pekerja2@gmail.com', NULL, '$2y$10$DtPE5iuyMBqqiAXMRepGEOkqYFBeXIRITkQhqZJBXzTUOQ61uKJPG', NULL, '2023-06-14 01:21:01', '2023-06-14 01:24:11', '2023-06-01', 'Surabaya', 'Pekerja yang ramah', 200000),
(11, 'ivan', 'ivan@gmail.com', NULL, 'ivan1234', NULL, NULL, NULL, NULL, 'jakarta', NULL, NULL),
(12, 'alip', 'alip@gmail.com', NULL, 'alip1234', NULL, NULL, NULL, NULL, 'jakarta', NULL, NULL),
(13, 'eldon', 'eldon@gmail.com', NULL, 'eldon1234', NULL, NULL, NULL, NULL, 'bogor', NULL, NULL),
(14, 'Arvin', 'arvin@gmail.com', NULL, '$2y$10$xM7LYR7bcU2lkX79d.AJW.Hceaf9bUXW8XGZnAj6tof/qMJ9CZP1S', NULL, '2023-06-15 09:07:11', '2023-06-15 09:07:11', NULL, NULL, NULL, 2000000),
(15, 'pekerja5', 'pekerja5@gmail.com', NULL, '$2y$10$QFPR0dpj4q146oIPKekBbeUk3y/FSd1810B6dadoBNWKQYC5P5aZe', NULL, '2023-06-18 03:15:46', '2023-06-18 03:15:46', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `saldo` int(11) DEFAULT 0,
  `lokasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `saldo`, `lokasi`) VALUES
(1, 'user', 'user1@gmail.com', NULL, '$2y$10$XfzcTyvii88sNO9uFMYAc.ZG9qHQ7GTrobQHguSXl.Ed9jjARcq8u', NULL, '2023-05-31 22:06:58', '2023-06-18 03:32:39', 411009, 'surabaya'),
(7, 'user2', 'user2@gmail.com', NULL, '$2y$10$sB5b.HJYxMj5lUl8dyJjMeQK1v5cDIml7hIK.eTgDSmfDeqyNAF8.', NULL, '2023-06-14 12:18:37', '2023-06-14 12:41:42', 2000001, NULL),
(8, 'pelanggan1', 'pelanggan1@gmail.com', NULL, '$2y$10$1UlIMcVxWjENnar520cQDOHET2yoY8hLCXOGmY/8qHSUS2gZZ7zs2', NULL, '2023-06-18 02:42:44', '2023-06-18 02:46:18', 400000, NULL),
(9, 'pelanggan2', 'pelanggan2@gmail.com', NULL, '$2y$10$c1Svr643sGl/dGNJ9QLfY./Y4.82W/62ycpUepah9OQhikNs6TILm', NULL, '2023-06-18 02:59:12', '2023-06-18 03:14:30', 1000000, 'Surabaya');

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
-- Indexes for table `kontraks`
--
ALTER TABLE `kontraks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kontraks_user_id_foreign` (`user_id`),
  ADD KEY `kontraks_pekerja_id_foreign` (`pekerja_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pekerjas`
--
ALTER TABLE `pekerjas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pekerjas_email_unique` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `kontraks`
--
ALTER TABLE `kontraks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pekerjas`
--
ALTER TABLE `pekerjas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kontraks`
--
ALTER TABLE `kontraks`
  ADD CONSTRAINT `kontraks_pekerja_id_foreign` FOREIGN KEY (`pekerja_id`) REFERENCES `pekerjas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kontraks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
