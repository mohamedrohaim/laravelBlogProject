-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 07:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `header`, `image`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Mobile app development', 'Alternatives for Building Mobile Apps', 'files/SbN2xvOxouY7BuAdYwmgqJAbXF67Lhw9JAvbn8Xo.png', 'Application software developers also must consider a long array of screen sizes, hardware specifications, and configurations because of intense competition in mobile software and changes within each of the platforms. Mobile app development has been steadily growing, in revenues and jobs created. A 2013 analyst report estimates there are 529,000 direct app economy jobs within the EU then 28 members (including the UK), 60 percent of which are mobile app developers', 1, '2022-08-19 12:29:39', '2022-08-19 12:29:39'),
(5, 'Top Most Popular Programming Languages for Mobile App Development', 'Choosing the Best Programming Language for App Development', 'files/i61WqBkXIeLmAfo5Hm0UbbX79VA9OAB9qGG3aYDd.png', 'Like any other programming language, the best language for app development ought to have a set of formal rules by which application code is written.\r\n\r\nNowadays, there are many application languages to choose from. The choice of a particular method may greatly depend on your business goals and the corresponding capabilities of the operating system you choose as the platform, the type of application,', 1, '2022-08-19 12:35:14', '2022-08-19 12:35:14'),
(6, 'How to Learn Programming – The Guide I Wish I Had When I Started Learning to Code', 'Mobile App Types', 'files/khvI96CQpqJObVNOVpsobcAI6M6RwpoQSHRb0Mmq.jpg', 'Native apps\r\nThe Native app is an app developed for the chosen OS on the device that can be accessed from the app launch icon. These applications are called native because they are written in the native programming language for a specific platform. For Android OS, this android coding language is Java, while ios native language is Objective-C or Swift Mobile web apps.\r\n\r\nMobile web apps may not be mobile apps per se. These are rather websites that look and feel a lot like native apps. The fact is that a web application is, by nature, a website that is adapted and optimized for any smartphone. And to use it, it is enough to have a browser on the device, know its address, and have an Internet connection (thanks to it, information in this type of application is updated', 1, '2022-08-19 12:44:58', '2022-08-19 12:44:58'),
(7, 'Web development', 'Web development is the work involved in developing', 'files/oJyvAn9b7hNFsbr5ffpebIzhMUehExzJG94LeKVg.jpg', 'Among Web professionals, \"Web development\" usually refers to the main non-design aspects of building Web sites: writing markup and coding.[2] Web development may use content management systems (CMS) to make content changes easier and available with basic technical skills.\r\n\r\nFor larger organizations and businesses,', 1, '2022-08-19 14:01:57', '2022-08-19 14:01:57'),
(8, 'About Egypt', 'Destinations', 'files/ziTMBVchEHmOJBfnn8mDjLqOXc6HzU8HwLYtDnG8.jpg', 'An enigmatic treasure trove of almost unimaginable archaeological and cultural riches, it\'s hard not to think of Egypt without imagining the Sphinx, the pyramids at Giza, Luxor, the Valley of the Kings and the Nile. As well as being the world\'s largest open-air museum, Egypt also offers a slew of luxurious Red Sea resorts, many within reach of spectacular snorkeling, diving and windsurfing. Whether you see it by riverboat, from camelback or from just above the coral, Egypt\'s sights are unforgettable.', 45, '2022-08-19 14:57:52', '2022-08-19 14:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2022_08_18_101538_create_posts_table', 2),
(5, '2022_08_18_151513_add_is_admin_to_users_table', 3),
(6, '2022_08_19_122032_create_blogs_table', 4);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `isAuthor` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `isAdmin`, `isAuthor`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 1, 1, NULL, 'same', 'files/EqsfbZYCpgXOhLC4Lk2cN92bCV9hvH7VRD6tJZgY.jpg', NULL, '2022-08-18 09:47:39', '2022-08-19 14:03:28'),
(2, 'mohamed rohiem', 'm@gmail.com', 1, 1, NULL, '123456', NULL, NULL, NULL, NULL),
(43, 'author', 'author@gmail.com', 0, 1, NULL, '$2y$10$oxm15JM/kxbCjpUVZN8k.e4m7IacU40x9Dhjfa.TmuhuGlNn3OCyi', 'files/lm2wcPkxiITEtGL4b2PXTXGbEkuGNZBWUaUx6Lc2.jpg', NULL, '2022-08-18 18:49:40', '2022-08-18 18:49:40'),
(44, 'abdallah', 'abdo@gmail.com', 0, 0, NULL, '$2y$10$zfO7oHysFXZUlFQ92KZEBuxJOCMbR5WycIG0LE4cgrMQKXJXKvJSW', 'files/fftIAvdxOYeYQQ6eRzVacVKO8ob9hvlOXx1Ff4Cj.png', NULL, '2022-08-19 14:45:02', '2022-08-19 14:45:02'),
(45, 'Mohamed Rohaim', 'admin1@gmail.com', 1, 1, NULL, '$2y$10$3TKd5EG4p9jR5A9Y0Scao.twx6uBQY4r4vkEEtnyNVnY.Olo8Vxem', 'files/PgmRrt74Cy3ApxhMDYYHKGCxcbfYmDiF6Y8QGoLa.jpg', NULL, '2022-08-19 14:50:22', '2022-08-19 14:50:22'),
(46, 'abdallah', 'abdallah@gmail.com', 0, 0, NULL, '$2y$10$vGemzUFMg8gU5IRL116HceeCfZy2sqIrvhQi.b.xZT0N13QEwtfRK', 'files/sif0vLfvknXJEeIJ2SJYsocQlzKtbmD6GzKUrN00.jpg', NULL, '2022-08-19 14:54:14', '2022-08-19 14:54:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
