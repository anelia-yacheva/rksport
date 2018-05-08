-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  8 май 2018 в 16:23
-- Версия на сървъра: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golfsurvey`
--

-- --------------------------------------------------------

--
-- Структура на таблица `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gallery_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `images`
--

INSERT INTO `images` (`id`, `title`, `created_at`, `updated_at`, `gallery_image`) VALUES
(9, 'Golf', '2018-04-28 08:27:24', '2018-04-28 08:27:24', 'golf_1524914844.jpeg'),
(10, 'Golf', '2018-04-28 08:27:37', '2018-04-28 08:27:37', 'golf_1524914857.jpeg'),
(11, 'Golf', '2018-04-28 08:27:52', '2018-04-28 08:27:52', 'golf_1524914872.jpeg'),
(12, 'Golf', '2018-04-28 08:28:05', '2018-04-28 08:28:05', 'golf_1524914885.jpeg'),
(13, 'Golf', '2018-04-28 08:28:23', '2018-04-28 08:28:23', 'golf_1524914903.jpeg'),
(14, 'Golf', '2018-04-28 08:28:37', '2018-04-28 08:28:37', 'golf_1524914917.jpeg'),
(15, 'Golf', '2018-04-28 08:28:48', '2018-04-28 08:28:48', 'golf_1524914928.jpeg'),
(16, 'Golf', '2018-04-28 08:29:42', '2018-04-28 08:29:42', 'golf_1524914982.jpeg'),
(17, 'Golf', '2018-04-28 08:29:54', '2018-04-28 08:29:54', 'golf_1524914994.jpeg'),
(18, 'Golf', '2018-04-28 08:30:10', '2018-04-28 10:57:05', 'golf_1524923825.jpeg');

-- --------------------------------------------------------

--
-- Структура на таблица `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_27_104040_create_images_table', 1),
(4, '2018_04_28_092724_add_gallery_image_to_gallery', 2),
(5, '2018_05_07_165814_create_surveys_table', 3);

-- --------------------------------------------------------

--
-- Структура на таблица `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `surveys`
--

CREATE TABLE `surveys` (
  `id` int(10) UNSIGNED NOT NULL,
  `q1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q5_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q5_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q5_3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q5_4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q7` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q8` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q9` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q10` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q11` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q12` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q13` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q14` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q15` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q16` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q17` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q18` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q19` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q20` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q22` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q23` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q24` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q25` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handicap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `surveys`
--

INSERT INTO `surveys` (`id`, `q1`, `q2`, `q3`, `q4`, `q5_1`, `q5_2`, `q5_3`, `q5_4`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `nationality`, `gender`, `age`, `height`, `weight`, `handicap`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '[\"1\",\"2\",\"3\",\"4\",\"5\"]', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"1\"]', '[\"2\",\"3\",\"4\",\"5\",\"1\"]', '[\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\"]', '[\"10\",\"1\",\"2\",\"3\",\"4\",\"5\",\"6\"]', '[\"7\",\"8\",\"9\",\"10\",\"1\"]', '[\"7\",\"8\",\"9\",\"10\",\"1\"]', '[\"8\",\"9\",\"10\",\"da\"]', '[\"1\",\"2\",\"3\",\"4\",\"5\"]', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\"]', 'less_than_year', '[\"high_sport_results\",\"med_sport_results\"]', '1', '4_5', '[\"1\",\"2\",\"3\"]', '[\"corrections_change_grip\",\"before_after_hit_routine\",\"repeat_effective_move_hit\",\"efficiency_start_hit\",\"fairway_game_approach\",\"game_green\",\"tech_stability\",\"other_goals\"]', 'satisfactory', 'no', 'never', '1to2', '[\"own_weight_ex\",\"basic_muscle_groups\",\"stretching\",\"jump_ex\",\"bosu_gym_ball_ex\",\"med_ball_atletic_ball_ex\",\"rope_t_rex_ex\",\"rope_elastic_ex\",\"big_weights_ex\"]', 'ph_prep_no', 'injury_yes', '7', '3', '[\"relax_technics\",\"psy_regulation_methods\",\"blood_supply_improvement\",\"calmness_ex\"]', 'experimental_study_no', '[\"tennis\",\"sport_shooting\",\"swimming\",\"other_sports\",\"drug\"]', 'bg', 'male', '25', '160', '50', 'no_handicap', NULL, '2018-05-07 15:37:07', '2018-05-07 15:37:07'),
(2, '[\"1\",\"2\",\"3\",\"4\",\"5\"]', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"1\"]', '[\"2\",\"3\",\"4\",\"5\",\"1\"]', '[\"1\",\"4\",\"1\",\"2\",\"4\",\"5\",\"6\",\"7\"]', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\"]', '[\"1\",\"2\",\"3\",\"5\",\"6\"]', '[\"1\",\"2\",\"3\",\"5\",\"6\"]', '[\"1\",\"2\",\"3\",null]', '[\"1\",\"2\",\"3\",\"4\",\"5\"]', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\"]', 'less_than_year', '[\"1\"]', '5_6', '4_5', '[\"1\",\"1\",\"1\"]', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', 'very_good', 'cant_say', 'rarely', '1to2', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\"]', 'cant_say', 'yes', '1', '2', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', 'yes', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"9\",null]', 'бг', 'female', '23', '179', '78', '3', NULL, '2018-05-07 17:48:01', '2018-05-07 17:48:01'),
(3, '[\"1\",\"1\",\"1\",\"1\",\"1\"]', '[\"2\",\"1\",\"1\",\"1\",\"1\",\"1\"]', '[\"1\",\"1\",\"1\",\"1\",\"1\"]', '[\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\"]', '[\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\"]', '[\"1\",\"1\",\"1\",\"1\",\"1\"]', '[\"1\",\"1\",\"1\",\"1\",\"1\"]', '[\"1\",\"1\",\"1\",null]', '[\"1\",\"1\",\"1\",\"1\",\"1\"]', '[\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\"]', 'less_than_year', '[\"1\",\"2\"]', '3_4', '4_5', '[\"1\",\"0\",\"0\"]', '[\"10\"]', 'very_good', 'no', 'everytime', '3to4', '[\"14\"]', 'cant_say', 'yes', '1', '1', '[\"2\"]', 'maybe', '[\"1\",\"9\",\"drug\"]', 'bg', 'female', '16', '170', '60', '6', NULL, '2018-05-07 17:56:05', '2018-05-07 17:56:05');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'webmaster@digitalvision.group', '$2y$10$okNYmR8lEG7LNG6RwvR5UecPn0PMJ7i6CoiB0jWdk96/RLJN6XV.S', NULL, '2018-04-28 12:34:28', '2018-04-28 12:34:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
