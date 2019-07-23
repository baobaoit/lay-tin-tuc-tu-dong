-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2019 at 11:20 PM
-- Server version: 10.1.40-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rss_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_pages_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `created_at`, `updated_at`, `name`, `rss_url`, `news_pages_id`) VALUES
(1, NULL, NULL, 'tin moi', 'https://vnexpress.net/rss/tin-moi-nhat.rss', 1),
(2, NULL, NULL, 'tin moi', 'https://tuoitre.vn/rss/tin-moi-nhat.rss', 2),
(3, '2019-07-16 23:19:11', '2019-07-16 23:19:11', 'thoi su', 'https://vnexpress.net/rss/thoi-su.rss', 1),
(4, '2019-07-16 23:19:49', '2019-07-16 23:19:49', 'thoi su', 'https://tuoitre.vn/rss/thoi-su.rss', 2),
(5, '2019-07-16 23:20:45', '2019-07-16 23:20:45', 'kinh doanh', 'https://vnexpress.net/rss/kinh-doanh.rss', 1),
(6, '2019-07-16 23:21:10', '2019-07-16 23:21:10', 'kinh doanh', 'https://tuoitre.vn/rss/kinh-doanh.rss', 2),
(7, '2019-07-16 23:22:09', '2019-07-16 23:22:09', 'the thao', 'https://vnexpress.net/rss/the-thao.rss', 1),
(8, '2019-07-16 23:22:36', '2019-07-16 23:22:36', 'the thao', 'https://tuoitre.vn/rss/the-thao.rss', 2),
(9, '2019-07-16 23:56:19', '2019-07-16 23:56:19', 'the gioi', 'https://vnexpress.net/rss/the-gioi.rss', 1),
(10, '2019-07-16 23:58:14', '2019-07-16 23:58:14', 'the gioi', 'https://tuoitre.vn/rss/the-gioi.rss', 2),
(11, '2019-07-17 00:09:14', '2019-07-17 00:09:14', 'phap luat', 'https://vnexpress.net/rss/phap-luat.rss', 1),
(12, '2019-07-17 00:09:50', '2019-07-17 00:09:50', 'phap luat', 'https://tuoitre.vn/rss/phap-luat.rss', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news_pages`
--

CREATE TABLE `news_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pre_pattern` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_pages`
--

INSERT INTO `news_pages` (`id`, `created_at`, `updated_at`, `name_page`, `pre_pattern`) VALUES
(1, NULL, '2019-07-16 09:11:22', 'vnexpress.net', '#<\\s*?article\\b[^>]*>(.*?)</article\\b[^>]*>#s'),
(2, NULL, '2019-07-16 09:12:07', 'tuoitre.vn', '~<section class=\"detail-w fl\"\\>(.*?)</section>~s');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('1551010092nhi@ou.edu.vn', '$2y$10$iF94pqO2lmi5LEqyHKqXJehukwwU0VWAVsqhmh.Bi5VvsywB7SNY2', '2019-07-20 07:33:42');

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
(1, 'nhi', 'nhihuule333@gmail.com', NULL, '$2y$10$ep2w7M4KDz.EFc.Z2Tn0U.LRQ1O87MyhwvUE0/zfHUf.17A7p1lMC', 'kg6pRtrEYSh7QUWNL7XHiNJfv9MkHEn7NZpYj7L52LEcstQlAICa76XHbLRh', '2019-07-15 09:38:08', '2019-07-20 06:46:48'),
(2, 'nhi', '1551010092nhi@ou.edu.vn', NULL, '$2y$10$2JpHetgppfpG4raDNqw85uwCwfZu39cWkFkmERs8kH1iZ1A8sfTBG', NULL, '2019-07-19 20:53:40', '2019-07-19 20:53:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_pages`
--
ALTER TABLE `news_pages`
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
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `news_pages`
--
ALTER TABLE `news_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
