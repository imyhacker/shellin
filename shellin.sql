-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Okt 2020 pada 13.10
-- Versi server: 8.0.21-0ubuntu0.20.04.4
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shellin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_28_021507_add_role_column_to_users_table', 1),
(5, '2020_09_28_142853_create_shells_table', 2),
(6, '2020_10_04_130842_create_pembelis_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namashell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bayar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama`, `email`, `namashell`, `payment`, `bayar`, `total`, `created_at`, `updated_at`) VALUES
(113, 'Arikuntul', 'arifarhan1602@gmail.com', 'gugel', 'OVO', '1', 'IDR : 100.000 | USD : $7.00', '2020-10-18 22:43:24', '2020-10-18 22:43:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shell`
--

CREATE TABLE `shell` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dollar` int NOT NULL DEFAULT '0',
  `domain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `query` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `continent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `continentCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shell`
--

INSERT INTO `shell` (`id`, `nama`, `harga`, `dollar`, `domain`, `url`, `query`, `continent`, `continentCode`, `country`, `countryCode`, `city`, `timezone`, `isp`, `sold`, `created_at`, `updated_at`) VALUES
(49, 'gugel', '100000', 7, '.com', 'google.com', '172.217.24.110', 'Asia', 'AS', 'Singapore', 'SG', 'Singapore', 'Asia/Singapore', 'Google LLC', 1, '2020-10-01 05:16:13', '2020-10-18 22:43:24'),
(50, 'all-onetech.xyz', '1000000', 67, '.xyz', 'all-onetech.xyz', '216.239.34.21', 'North America', 'NA', 'Canada', 'CA', 'Montreal', 'America/Toronto', 'Google LLC', 0, '2020-10-01 05:17:24', '2020-10-10 18:12:39'),
(51, 'YUTUP', '25000000', 1687, '.com', 'https://www.youtube.com/watch?v=9IY4AtMtP6k', '2404:6800:4003:c00::5d', 'Asia', 'AS', 'Singapore', 'SG', 'Singapore', 'Asia/Singapore', 'Google LLC', 0, '2020-10-04 10:09:18', '2020-10-13 21:55:35'),
(52, 'stackoverflow.com', '9090900906', 613545, '.com', 'stackoverflow.com', '151.101.1.69', 'North America', 'NA', 'Canada', 'CA', 'Montreal', 'America/Toronto', 'Fastly', 0, '2020-10-04 10:10:32', '2020-10-13 21:40:28'),
(53, 'Whatsapp', '9000000', 607, '.com', 'https://web.whatsapp.com/', '157.240.13.54', 'Asia', 'AS', 'Singapore', 'SG', 'Singapore', 'Asia/Singapore', 'Facebook, Inc.', 0, '2020-10-05 06:59:15', '2020-10-13 21:53:37'),
(54, 'myresume', '175000', 12, '.com', 'https://bootstrapmade.com', '172.67.199.247', 'North America', 'NA', 'Canada', 'CA', 'Montreal', 'America/Toronto', 'Cloudflare, Inc.', 0, '2020-10-13 21:21:28', '2020-10-13 21:49:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arikuntul', 'arifarhan1602@gmail.com', '2020-09-01 07:16:55', '$2y$10$NCXQYxyWS8GhdohibmOzVesjTMTpPM1kZTsK4wr8dh9aRfuErlX5e', 'admin', 1, NULL, '2020-09-27 19:19:50', '2020-10-17 03:19:49'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$1eOTSkcxcgtq2EFBKGZEHu4iDaymiImEVw2j9CYXM/zpwaG6E9zKy', 'user', 1, NULL, '2020-09-27 19:19:50', '2020-09-29 07:54:21'),
(20, 'Melia Reza Arsita', 'meliarezaa56@gmail.com', '2020-10-01 03:39:14', '$2y$10$UbqK56Wkyix8dXchByrRruABneZnTfdb52bIGuW4Awgsu74BWYJG6', 'user', 1, NULL, '2020-09-29 07:56:54', '2020-10-17 03:20:48'),
(21, 'Shin403', 'root.3hex@gmail.com', '2020-10-09 17:13:18', '$2y$10$5aVQgMYaDkmITSy/t4RdX.c/qThJ0lVoJwnuXxYSqP0rUwuncweNm', 'user', 1, NULL, '2020-10-09 10:07:46', '2020-10-09 10:13:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shell`
--
ALTER TABLE `shell`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `shell`
--
ALTER TABLE `shell`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
