-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 12:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `caseregs`
--

CREATE TABLE `caseregs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CaseId` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `year` varchar(4) NOT NULL,
  `District` varchar(255) NOT NULL,
  `CourtType` varchar(255) NOT NULL,
  `PName` varchar(255) NOT NULL,
  `PEmail` varchar(255) NOT NULL,
  `OName` varchar(255) DEFAULT NULL,
  `Matter` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `caseregs`
--

INSERT INTO `caseregs` (`id`, `CaseId`, `DOB`, `year`, `District`, `CourtType`, `PName`, `PEmail`, `OName`, `Matter`, `created_at`, `updated_at`) VALUES
(2, 'ABC45432161', '2023-04-11', '2020', 'Naushahro Feroze', 'Income Tax Appellate Tribunal(Inland Revenue)', 'Shaharyar Khan', 'shary@gmail.com', 'umer', 'asdasda', '2023-04-10 05:00:31', '2023-04-10 05:00:31'),
(3, '6505', '2023-11-23', '2023', 'Karachi (South)', 'District Courts', 'Shaharyar Khan', 'shary@gmail.com', 'Nill', 'No record in nadra. CNIC issue', '2023-11-22 05:56:12', '2023-11-22 05:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `case_models`
--

CREATE TABLE `case_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CaseNo` varchar(255) NOT NULL,
  `LId` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `DOC` date NOT NULL,
  `Court` varchar(255) DEFAULT NULL,
  `STime` time NOT NULL,
  `ETime` time NOT NULL,
  `Details` varchar(1000) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `ND` date DEFAULT NULL,
  `FNo` varchar(255) DEFAULT NULL,
  `ALId` varchar(255) DEFAULT NULL,
  `Remarks` varchar(1000) DEFAULT NULL,
  `Docx` varchar(10000) DEFAULT NULL,
  `UpdatedBy` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `CaseNo`, `LId`, `LName`, `DOC`, `Court`, `STime`, `ETime`, `Details`, `Status`, `ND`, `FNo`, `ALId`, `Remarks`, `Docx`, `UpdatedBy`, `created_at`, `updated_at`) VALUES
(1, 'DX12345', 'DB16321', 'imran', '2023-02-24', 'Room.605', '15:46:00', '18:00:00', 'discussed matter details should be written here', 'Continued', '2023-02-28', '132487454', 'hg453423', 'remarks here', 'admin/assets/Docx/DX12345/bcf9d6bd14a2095866ce8c950b702341.pdf|admin/assets/Docx/DX12345/14ea0d5b0cf49525d1866cb1e95ada5d.pdf|admin/assets/Docx/DX12345/649a066d415bdda4ce2a7088292645e0.pdf', 'DB16321', '2023-02-24 08:11:44', '2023-02-24 08:11:44'),
(2, 'DX12345', 'DB16321', 'imran', '2023-02-17', 'Room.606', '19:07:00', '22:07:00', 'asdfasdf asdf asd adasd', 'Continued', '2023-02-28', '4614444', 'hg453423', NULL, 'admin/assets/Docx/DX12345/5c3a3b139a11689e0bc55abd95e20e39.pdf', 'DB16321', '2023-02-24 09:12:23', '2023-02-24 09:12:23'),
(3, 'DX12345', 'DB16321', 'imran', '2023-02-24', 'Room.606', '08:15:00', '10:15:00', 'asdfasd sdas asdas asda', 'Continued', '2023-03-08', 'asd45asd1', 'DB16321', NULL, 'admin/assets/Docx/DX12345/95e62984b87e90645a5cf77037395959.pdf|admin/assets/Docx/DX12345/7dc3338d429a3114842ca29dbbfccfef.pdf', 'DB16321', '2023-02-24 09:18:05', '2023-02-24 09:18:05'),
(4, 'DX12345', 'hg453423', 'Umer', '2023-03-16', 'Room.609', '18:20:00', '21:20:00', 'sdhg uhda sjoi a', 'Continued', '2023-03-29', '4614444', 'ARY321654', 'def faz dfas', NULL, 'hg453423', '2023-03-01 08:23:37', '2023-03-01 08:23:37'),
(6, '543654', 'hg453423', 'Umer', '2023-04-26', 'Room.605', '14:02:00', '14:59:00', 'asdfasd', 'Continued', '2023-04-18', '4614444', 'dasgd1312', 'dsdasdf', 'admin/assets/Docx/543654/9773d3352e206fef3df91b8757d63b67.txt', 'hg453423', '2023-04-10 04:59:54', '2023-04-10 04:59:54'),
(10, 'ABC45432161', 'hg453423', 'Umer', '2023-04-07', 'Room.606', '16:34:00', '20:34:00', 'sdfasdfas', 'Continued', '2023-04-20', 'asd45asd1', 'dasgd1312', 'sdffggae', 'admin/assets/Docx/ABC45432161/d736bb10d83a904aefc1d6ce93dc54b8.txt', 'hg453423', '2023-04-10 05:35:15', '2023-04-10 05:35:15'),
(11, 'ABC45432161', 'hg453423', 'Umer', '2023-03-29', 'Room.605', '16:08:00', '16:11:00', 'sdfg', 'Continued', '2023-04-26', '345234', 'dasgd1312', 'gdfgs', 'admin/assets/Docx/ABC45432161/ab4f2b5fd96ca65349119909c1eada2d.txt|admin/assets/Docx/ABC45432161/172fd0d638b3282151bd8f3d652cb640.txt', 'Umer', '2023-04-10 06:08:45', '2023-04-10 06:08:45');

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
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2023_01_24_112037_create_user_models_table', 1),
(20, '2023_01_27_141819_create_case_models_table', 1),
(26, '2023_02_24_103801_create_details_table', 3),
(28, '2023_01_27_142214_create_caseregs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lawyerid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `profile` varchar(1000) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `lawyerid`, `name`, `fname`, `email`, `phone`, `address`, `profile`, `post`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'DB16321', 'imran', 'ahmed', 'imran@gmail.com', 1234894, 'asdf wrtfd wt w ghftyf fhgf ghjkh', 'admin/assets/img/profiles\\phpD314.tmp', 'Lawyer', NULL, 1, '$2y$10$B61u.cr0Iw9rSP5z6Fb8Xe85rAM/1THUMY4QW/pL9njj1F9T8hZ9i', NULL, '2023-02-13 06:17:33', '2023-02-16 05:25:09'),
(3, 'hg453423', 'Umer', 'Abdul Wahid', 'umer@gmail.com', 121657212, 'asdaiusd asdas', 'admin/assets/img/profiles\\php15F9.tmp', 'Judge', NULL, 2, 'umer6505', NULL, '2023-02-15 06:56:45', '2023-02-28 08:16:14'),
(4, 'ARY321654', 'Ammar', 'Ahmed', 'ammar@gmail.com', 12348546, 'asduh duda sdiyqwoh s', 'admin/assets/img/profiles\\php363A.tmp', 'Lawyer', NULL, 1, '$2y$10$s7mDdVIcPRZDwWyFFcgRS.en4xevQ1b4RdBxgSVAmuH8llFVZKmK2', NULL, '2023-02-28 08:34:10', '2023-02-28 08:34:10'),
(6, 'dasgd1312', 'khalid', 'ahmed', 'khalid@gmail.com', 45612345612, 'dgh f uvyg jtyg', 'admin/assets/img/profiles\\phpCDBA.tmp', 'Lawyer', NULL, 1, '$2y$10$KHfo/WWnGeUsrHyCx0hLVOBN7UT9Wj2IHttlKfxyxCKQksQ9jn89K', NULL, '2023-03-10 04:56:08', '2023-03-10 04:56:08'),
(7, '564vh', 'shary', 'Abdul Majid', 'shary@gmail.com', 12345678912, 'yrdg gjhg ytibn', 'admin/assets/img/profiles\\php1270.tmp', 'Lawyer', NULL, 1, '$2y$10$VgHncPJGL99rs.CwSWHQeuWwAC6gxIoIkGPwLZZtL7SyrZosHTo4C', NULL, '2023-03-10 04:57:31', '2023-03-10 04:57:31'),
(8, '1258', 'Umer', 'Abdul Wahid', 'admin@gmail.com', 3151113099, 'ABCD, XYZ Street', 'admin/assets/img/profiles\\php6307.tmp', 'Judge', NULL, 2, '$2y$10$gEWorEoh/oUr6/Gfr0.va.PNSYjcmdtPikRkLif2n8B1wRJRAVcNe', NULL, '2023-11-22 05:35:49', '2023-11-22 05:35:49'),
(10, '5654', 'Ashar', 'Sadiq', 'ashar@gmail.com', 3654653099, 'sdfasdfasdfasdfasdfasdf', 'admin/assets/img/profiles\\phpEB0E.tmp', 'lawyer', NULL, 1, '$2y$10$TIVbtypWHrAFXBNe90Wne.o4c.8xQaN8fQDCmtIsKAZ5FaIIC9Uem', NULL, '2023-11-22 05:41:51', '2023-11-22 05:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_models`
--

CREATE TABLE `user_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caseregs`
--
ALTER TABLE `caseregs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_models`
--
ALTER TABLE `case_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_lawyerid_unique` (`lawyerid`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `user_models`
--
ALTER TABLE `user_models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caseregs`
--
ALTER TABLE `caseregs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_models`
--
ALTER TABLE `case_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_models`
--
ALTER TABLE `user_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
