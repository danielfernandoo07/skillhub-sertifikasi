-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2025 at 09:22 AM
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
-- Database: `skillhub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `instructor` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `instructor`, `created_at`, `updated_at`) VALUES
(2, 'Non saepe eos.', 'Dolorem aliquid esse illum non ipsum expedita recusandae. Blanditiis quo pariatur tempore et praesentium exercitationem. Recusandae delectus dolores occaecati repellendus aut. Iste doloribus repellendus et.', 'Ward Jast III', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(3, 'Minima fuga nulla possimus.', 'Cumque enim dolorem et quia quam libero voluptatem qui. Non sunt et voluptas autem illum natus necessitatibus corrupti. Eos commodi odio ut rem consequuntur qui. Amet fugiat iure similique neque voluptatem. Mollitia labore alias earum impedit.', 'Dr. Eunice Maggio', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(4, 'Sed consequatur earum.', 'Nobis voluptas iste totam distinctio ab. Dolorum perspiciatis at molestias non laudantium. Architecto rem dolorem pariatur odio quo ut amet. Autem vitae labore id voluptates nihil odio nihil. Quas necessitatibus commodi earum.', 'Marian Keeling', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(5, 'Sed voluptas libero.', 'Tempore tempora et laudantium. Mollitia reprehenderit eius voluptate sunt quia est velit. Ut amet qui laboriosam qui maxime.', 'Mrs. Dandre Jenkins V', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(6, 'Architecto voluptatem quo.', 'Dolorum ipsum veritatis sed numquam aut. Dolor est voluptas est fugiat non eius. Sunt et quibusdam maxime qui.', 'Prof. Reyna Kreiger Jr.', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(7, 'Ipsum aut ab.', 'Ut temporibus inventore sunt temporibus laudantium enim provident. Culpa quasi quibusdam ab non saepe qui qui. Nam corrupti illo magnam aut deleniti est.', 'Marisol Hoppe', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(8, 'Similique et asperiores quaerat.', 'Ducimus commodi quo voluptatibus labore perspiciatis officiis minima. Dignissimos iste qui eos nesciunt illo incidunt consequuntur. Ut numquam est minus vel a.', 'Jules Hodkiewicz DDS', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(9, 'Pariatur ea nemo.', 'Saepe doloremque ut maiores quas necessitatibus. Iusto saepe occaecati provident dolorum voluptatibus. Cumque pariatur facilis et magnam debitis repudiandae iusto ratione.', 'Prof. Garret Fadel', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(10, 'Autem consequatur unde officia.', 'Assumenda voluptatem id aut nihil est. Alias aut nam voluptas amet eos. Autem et animi quia enim laudantium ut.', 'Stuart Schiller', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(11, 'Libero nihil rerum non.', 'Eius provident est et. Nesciunt quos facere mollitia repellendus. Ad dolorum laudantium sed maxime.', 'Sydnie Bergstrom', '2025-11-22 02:58:51', '2025-11-22 02:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `participant_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `enrolled_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `participant_id`, `course_id`, `enrolled_at`, `created_at`, `updated_at`) VALUES
(11, 5, 9, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(12, 6, 4, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(13, 7, 8, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(14, 8, 3, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(15, 9, 4, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(16, 9, 5, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(17, 9, 11, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(19, 10, 2, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(20, 10, 3, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(21, 11, 3, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(22, 11, 7, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(23, 12, 2, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(24, 13, 4, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(25, 13, 5, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(26, 13, 7, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(28, 14, 10, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(29, 15, 10, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(30, 16, 4, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(31, 16, 6, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(32, 17, 4, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(33, 17, 7, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(34, 18, 6, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(35, 18, 8, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(36, 19, 10, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(37, 20, 2, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(38, 20, 10, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(40, 21, 2, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(41, 21, 8, '2025-11-22 09:58:51', '2025-11-22 02:58:51', '2025-11-22 02:58:51');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2025_11_22_043444_create_courses_table', 1),
(4, '2025_11_22_043738_create_participants_table', 1),
(5, '2025_11_22_043958_create_enrollments_table', 1),
(6, '2025_11_22_074856_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(4, 'Chase Balistreri', 'emmerich.catharine@example.net', '(513) 437-1619', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(5, 'Abbie Klocko', 'enoch82@example.com', '1-959-764-9887', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(6, 'Ms. Gail Friesen I', 'name72@example.com', '(657) 325-2986', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(7, 'Edward Haley', 'mara.jones@example.org', '+14173107238', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(8, 'Noe Cassin', 'eabshire@example.com', '281-508-3109', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(9, 'Pauline Witting', 'solon30@example.com', '+1 (770) 345-2115', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(10, 'Ciara Corwin', 'goodwin.litzy@example.com', '+1 (863) 363-6533', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(11, 'Mr. Angel Rath PhD', 'walsh.lonzo@example.com', '651.677.8213', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(12, 'Prof. Archibald McCullough III', 'hildegard20@example.net', '443.876.2356', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(13, 'Joan Kris', 'deja22@example.org', '(678) 973-0888', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(14, 'Mac Stracke', 'kathryne.goyette@example.org', '+13473486603', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(15, 'Prof. Murl Quitzon PhD', 'ogerhold@example.com', '+1-262-612-7957', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(16, 'Elenora Denesik V', 'murazik.jaida@example.org', '253.960.6472', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(17, 'Angel Mills PhD', 'geo.cole@example.org', '+1-361-785-6666', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(18, 'Rosalinda Heaney', 'pagac.ryleigh@example.org', '267-909-5204', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(19, 'Mrs. Allison Bailey', 'ankunding.khalil@example.net', '+1-847-712-5974', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(20, 'Mr. Reid Adams', 'felix.stanton@example.org', '1-954-629-7837', '2025-11-22 02:58:51', '2025-11-22 02:58:51'),
(21, 'Sid Farrell', 'nrodriguez@example.org', '+19787069572', '2025-11-22 02:58:51', '2025-11-22 02:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('j1zK3T6IFM0ALeQkUoSNFh0PbbQt1EtoqB5tG7iX', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.0.1 Safari/605.1.15', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkVmbzVwZ2Qya0k5anN4VUhyamtManM1akpMaWFrd0FlU1dWUklPeiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS9wYXJ0aWNpcGFudHMvNC9lZGl0IjtzOjU6InJvdXRlIjtzOjE3OiJwYXJ0aWNpcGFudHMuZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1763880319);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrollments_participant_id_foreign` (`participant_id`),
  ADD KEY `enrollments_course_id_foreign` (`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `participants_email_unique` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `enrollments_participant_id_foreign` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
