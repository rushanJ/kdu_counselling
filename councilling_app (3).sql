-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 12:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `councilling_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `counsellors`
--

CREATE TABLE `counsellors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_no_student_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counsellors`
--

INSERT INTO `counsellors` (`id`, `user_id`, `f_name`, `m_name`, `l_name`, `address`, `dob`, `nic`, `emp_no_student_no`, `faculty`, `department`, `batch`, `gender`, `phone`, `type`, `image`, `created_at`, `updated_at`) VALUES
(0, 0, 'Annonimus', '', 'Student', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL),
(16, 18, 'Rushan', 'Thasindu', 'Jayasundara', 'B 34/1, Yataththawala, Imbulgasdeniya, Kegalle', '', '199716900992', '10026130', 'FOC', 'CS', '1802', 'MALE', '+94719505180', 'ADMIN', '', '2022-07-10 01:22:15', '2022-07-10 01:22:15'),
(17, 19, 'hhjghgfh', 'fghfghgj', 'hj,km.m,.m,.', '150/4 Highleveal road, Maharagama,', '', '23546645', '456', 'ghjhgj', 'hgjghj', '', 'MALE', '0773612590', 'STUDENT', '', '2022-07-11 08:44:45', '2022-07-11 08:44:45'),
(20, 28, 'Saman', 'Kumara', 'Jayasena', 'Kandy', '0', '199701690992', 'E001', 'FOC', 'SE', '', 'MALE', '+94719505180', 'COUNSELLER', 'images/jv2uWvBUrzi65jhlCLnkYVgWlsF2vLl7m9DJtPKa.jpg', '2022-08-16 16:32:02', '2022-08-16 16:32:02'),
(21, 29, 'Gayan', 'Sanjaya', 'Jayasinghe', 'B 34/1, Yataththawala, Imbulgasdeniya, Kegalle', '0', '0165456464664', 'Gayan', 'FOC', 'CS', '', 'MALE', '+94719505180', 'STUDENT', 'images/N940d27J8LmS81yXv3lDfgW0Wh7VXjUh1AE0HuIY.jpg', '2022-08-16 16:40:32', '2022-08-16 16:40:32'),
(24, 32, 'dsfdsfdsf', 'dsfdsfsd', 'fdsf', 'dsfds', '0', 'sdfsd', 'fsdf', 'sdfds', 'sdfsd', '', 'sdfds', 'sdfsdfds', 'COUNSELLER', 'images/3c6W3B5MIQRdfoGlmbW7sP86sVinZBOLfOrgBXFU.jpg', '2022-08-16 16:47:23', '2022-08-16 16:47:23'),
(27, 45, 'fsdfsdf', 'dsfsdf', 'sdfsdfs', 'dfgfghfgh', '0', 'sdferfg', 'sdfsfsd', 'fghjfghfgh', 'fghfg', '', 'fghfg', '+94719505180', 'STUDENT', '', '2022-08-16 16:56:05', '2022-08-16 16:56:05'),
(28, 46, 'dsfsdf', 'fsdfsd', 'fsdfdsfsd', 'sdfsdf', '0', 'sdfsdfsd', 'fsdf', 'sdfsd', 'fsdf', '', 'dsfsdf', 'sdfsd', 'STUDENT', '', '2022-08-16 17:04:08', '2022-08-16 17:04:08'),
(31, 51, 'fsdfsd', 'dsfdsf', 'sdfsdf', 'sdfsdfsdf', '0', 'sdergftdsfds', 'fsdfsd', 'sdfsdf', 'sdfsdf', '', 'sdfsdfsd', 'fsdfsdf', 'COUNSELLER', 'images/pXet83dTxMa2ECTf1BDA9P7wobZ5sMuIxNZtcq6P.jpg', '2022-08-16 17:10:40', '2022-08-16 17:10:40');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2022_07_08_183249_create_counsellor_table', 1),
(14, '2022_07_12_090109_create_requests_table', 1),
(15, '2022_08_07_110632_create_questions_table', 1),
(16, '2022_08_07_114351_create_student__requests_table', 1),
(17, '2022_08_09_194617_create_session__requests_table', 2);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 18, 'myapptoken', '865383f7c5895a1831cf0a397235609fe53c3e7e85db51f9d1620b51b4e3d201', '[\"*\"]', NULL, '2022-08-17 16:48:44', '2022-08-17 16:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `created_at`, `updated_at`) VALUES
(1, 'sddsfdsfds   dsafsdfsd  dsfgftsdf', '2022-08-07 14:30:38', '2022-08-07 14:57:42'),
(2, 'fhfjlg nv asdfisu FRESGFRSIED FGVKHSDGVFISDA F,JASDVFJAS JYDF RDvjyf OIGUDSFJQADSISD VFVKV Cuy', '2022-08-07 14:31:06', '2022-08-07 14:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `counseller_id` int(10) UNSIGNED NOT NULL,
  `problem_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session__requests`
--

CREATE TABLE `session__requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `counseller_id` int(10) UNSIGNED NOT NULL,
  `problem_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_anonnimus` int(11) NOT NULL,
  `service_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `session__requests`
--

INSERT INTO `session__requests` (`id`, `student_id`, `counseller_id`, `problem_type`, `is_anonnimus`, `service_method`, `remarks`, `date`, `time`, `created_at`, `updated_at`) VALUES
(34, 0, 19, 'Type4', 0, 'ONLINE', 'fghfg', '2022-08-18', '02:36:00', '2022-08-11 11:31:46', '2022-08-17 15:30:26'),
(35, 0, 0, '', 0, 'ONLINE', 'fghfg', '0000-00-00', '00:00:00', '2022-08-11 11:31:58', '2022-08-11 11:31:58'),
(36, 0, 0, '', 0, 'PHYSICAL', 'z', '0000-00-00', '00:00:00', '2022-08-12 15:12:15', '2022-08-12 15:12:15'),
(37, 18, 19, '', 0, 'PHYSICAL', 'vbnvb', '0000-00-00', '00:00:00', '2022-08-12 15:48:07', '2022-08-12 15:48:07'),
(38, 18, 0, '', 0, 'PHYSICAL', 'nbncjdhgiyktg', '0000-00-00', '00:00:00', '2022-08-16 13:54:34', '2022-08-16 13:54:34'),
(39, 18, 0, '', 0, 'PHYSICAL', 'werwe', '0000-00-00', '00:00:00', '2022-08-16 14:28:19', '2022-08-16 14:28:19'),
(40, 18, 19, '', 0, 'PHYSICAL', 'ghjghj', '0000-00-00', '00:00:00', '2022-08-16 14:31:55', '2022-08-16 14:31:55'),
(41, 18, 19, '', 1, 'ONLINE', 'vbnvgb', '0000-00-00', '00:00:00', '2022-08-16 14:44:56', '2022-08-16 14:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `student__requests`
--

CREATE TABLE `student__requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `request_id` int(10) UNSIGNED NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student__requests`
--

INSERT INTO `student__requests` (`id`, `question_id`, `request_id`, `answer`, `created_at`, `updated_at`) VALUES
(29, 1, 34, 'rtytr', '2022-08-11 11:31:46', '2022-08-11 11:31:46'),
(30, 2, 34, 'fghhfgh', '2022-08-11 11:31:46', '2022-08-11 11:31:46'),
(31, 1, 35, 'rtytr', '2022-08-11 11:31:58', '2022-08-11 11:31:58'),
(32, 2, 35, 'fghhfgh', '2022-08-11 11:31:58', '2022-08-11 11:31:58'),
(33, 1, 36, 'z', '2022-08-12 15:12:15', '2022-08-12 15:12:15'),
(34, 2, 36, 'z', '2022-08-12 15:12:15', '2022-08-12 15:12:15'),
(35, 1, 37, 'vbnvbn', '2022-08-12 15:48:07', '2022-08-12 15:48:07'),
(36, 2, 37, 'vbnvbn', '2022-08-12 15:48:07', '2022-08-12 15:48:07'),
(37, 1, 38, 'mnbxhjkcj,hcl', '2022-08-16 13:54:34', '2022-08-16 13:54:34'),
(38, 2, 38, 'khdghfsd', '2022-08-16 13:54:34', '2022-08-16 13:54:34'),
(39, 1, 39, 'werewrer', '2022-08-16 14:28:19', '2022-08-16 14:28:19'),
(40, 2, 39, 'ewrwer', '2022-08-16 14:28:19', '2022-08-16 14:28:19'),
(41, 1, 40, 'ghjgh', '2022-08-16 14:31:55', '2022-08-16 14:31:55'),
(42, 2, 40, 'hjghj', '2022-08-16 14:31:55', '2022-08-16 14:31:55'),
(43, 1, 41, 'kjgkm', '2022-08-16 14:44:56', '2022-08-16 14:44:56'),
(44, 2, 41, 'mnhvj', '2022-08-16 14:44:56', '2022-08-16 14:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
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
(0, 'Not Selected Yet', '', NULL, '', NULL, NULL, NULL),
(18, '100', 'rushanthasindu10@gmail.com', NULL, '$2y$10$akHCvTRpvma2eB8VOqUEoOtpWEelS2/e2TZK3LJyfLxuvw8MrQxVq', 'bV7bBerj2VJ0CA1zPuXaVnvok4CaJt2n2HH4VExXCQPMqm3TvjpokioiDeST', '2022-07-10 01:22:15', '2022-07-10 01:22:15'),
(19, '100', 'oreemalk@gmail.com', NULL, '$2y$10$rBUvSraSRvhJmCRBsfQ1weq.7YpiWbviG.IC40aElBVKXqTNHOR2S', NULL, '2022-07-11 08:44:45', '2022-07-11 08:44:45'),
(28, '', 'saman@gmail.com', NULL, '$2y$10$hcyJCyyJLmjEHhcSjLVH0ewGyc/IeleFG.39PX2Z8Njxa1ntgq2Pm', NULL, '2022-08-16 16:32:02', '2022-08-16 16:32:02'),
(29, '', 'gayan@gmail.com', NULL, '$2y$10$2WaGJRR2zellV/gAa7094.1CizE2OE1VFtFONYn3xPqOxSxsCWxQC', NULL, '2022-08-16 16:40:32', '2022-08-16 16:40:32'),
(30, '', 'fdgdfdgfd@fgdf.fdh', NULL, '$2y$10$nN/N/Vs.cd88rU1zikySyO2E5O6MbU8Kj5eg7WmU7IpMo02vEn4Dm', NULL, '2022-08-16 16:42:13', '2022-08-16 16:42:13'),
(32, '', 'oreemaddk@gmail.com', NULL, '$2y$10$9406h.H4mKA5ttRBUDc6Zebl9c2RBNoquJnPKCF0KD/qb5ai1LO2O', NULL, '2022-08-16 16:47:23', '2022-08-16 16:47:23'),
(45, '', 'fghfghrushanthasindu10@gmail.com', NULL, '$2y$10$IUT91dWUi0VfRUDLeYulduyL3tyNi3KaZRQ3mVFwSw8tuR92bTLT.', NULL, '2022-08-16 16:56:05', '2022-08-16 16:56:05'),
(46, '', 'sdfdsf@qddsdf.sdfsd', NULL, '$2y$10$7ahwnPoyAwtSQWn3F7Tyi.MAPSyVagCTfU6L0HdTfqNz.1LW2uXzi', NULL, '2022-08-16 17:04:08', '2022-08-16 17:04:08'),
(51, 'fsdfsd dsfdsf sdfsdf', 'rushanthsdfdsfsdfsdfdssindu10@gmail.com', NULL, '$2y$10$YVh5DlB.sjlbb1GuwUbttOuESVNVo6QNqqLgZ0rxfdveZVIqzwjBW', NULL, '2022-08-16 17:10:40', '2022-08-16 17:10:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counsellors`
--
ALTER TABLE `counsellors`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session__requests`
--
ALTER TABLE `session__requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student__requests`
--
ALTER TABLE `student__requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student__requests_question_id_foreign` (`question_id`),
  ADD KEY `student__requests_request_id_foreign` (`request_id`);

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
-- AUTO_INCREMENT for table `counsellors`
--
ALTER TABLE `counsellors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session__requests`
--
ALTER TABLE `session__requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `student__requests`
--
ALTER TABLE `student__requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student__requests`
--
ALTER TABLE `student__requests`
  ADD CONSTRAINT `student__requests_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `student__requests_request_id_foreign` FOREIGN KEY (`request_id`) REFERENCES `session__requests` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
