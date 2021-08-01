-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2021 at 08:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_panchayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_photo_path`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '2021-07-25 14:48:07', '$2y$10$bEpaxRfTyJthn0JTGIHQuOOd9axGbiS6icnycZK90ytz.AhrUpFJW', NULL, NULL, 1, '2021-07-25 14:48:07', '2021-07-25 14:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profiles`
--

CREATE TABLE `admin_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_profiles`
--

INSERT INTO `admin_profiles` (`id`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-07-25 14:48:07', '2021-07-25 14:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `admin_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-07-25 14:48:08', '2021-07-25 14:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `cache_systems`
--

CREATE TABLE `cache_systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `keywords`, `color`, `created_at`, `updated_at`) VALUES
(2, 'bihar news', 'bihar-news', '', '', '#936e6e', '2021-07-25 15:30:05', '2021-07-25 15:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `font_settings`
--

CREATE TABLE `font_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `language_settings`
--

CREATE TABLE `language_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_07_19_111124_create_sessions_table', 1),
(7, '2021_07_19_113544_create_admins_table', 1),
(8, '2021_07_19_120722_create_roles_table', 1),
(9, '2021_07_19_120807_create_admin_roles_table', 1),
(10, '2021_07_19_135734_create_admin_profiles_table', 1),
(11, '2021_07_19_135755_create_user_profiles_table', 1),
(12, '2021_07_20_091256_create_navigations_table', 1),
(13, '2021_07_20_110419_create_posts_table', 1),
(14, '2021_07_20_110456_create_categories_table', 1),
(15, '2021_07_20_110517_create_widgets_table', 1),
(16, '2021_07_20_110536_create_polls_table', 1),
(17, '2021_07_20_110621_create_galleries_table', 1),
(18, '2021_07_20_110704_create_contact_messages_table', 1),
(19, '2021_07_20_110727_create_comments_table', 1),
(20, '2021_07_20_110758_create_newsletters_table', 1),
(21, '2021_07_20_110845_create_roles_permissions_table', 1),
(22, '2021_07_20_110915_create_seo_tools_table', 1),
(23, '2021_07_20_110944_create_social_login_configurations_table', 1),
(24, '2021_07_20_111010_create_cache_systems_table', 1),
(25, '2021_07_20_111056_create_preferences_table', 1),
(26, '2021_07_20_111123_create_route_settings_table', 1),
(27, '2021_07_20_111204_create_email_settings_table', 1),
(28, '2021_07_20_111225_create_visual_settings_table', 1),
(29, '2021_07_20_111247_create_font_settings_table', 1),
(30, '2021_07_20_111309_create_language_settings_table', 1),
(31, '2021_07_20_111336_create_general_settings_table', 1),
(32, '2021_07_23_114935_create_post_galleries_table', 1),
(33, '2021_07_25_105910_create_subcategories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_order` int(11) DEFAULT NULL,
  `menu_status` int(11) DEFAULT NULL,
  `home_status` int(11) DEFAULT NULL,
  `block_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `title`, `category_id`, `link`, `menu_order`, `menu_status`, `home_status`, `block_type`, `created_at`, `updated_at`) VALUES
(1, 'home', 0, '/', 1, 0, NULL, NULL, '2021-07-25 14:48:08', '2021-07-26 00:42:04'),
(3, NULL, 2, 'bihar-news', 1, 1, 1, 'block-1', '2021-07-25 15:30:05', '2021-07-25 23:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_galleries`
--

CREATE TABLE `post_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_galleries`
--

INSERT INTO `post_galleries` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, '1627276611.jpg', '2021-07-25 23:46:51', '2021-07-25 23:46:51'),
(2, '1627280989.jpg', '2021-07-26 00:59:49', '2021-07-26 00:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-07-25 14:48:07', '2021-07-25 14:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route_settings`
--

CREATE TABLE `route_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_tools`
--

CREATE TABLE `seo_tools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0YQOiVqKA9Fi4NZHaDLTwGtOdrfdvE3D9lt2QEkB', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVNGa3Jnc21OWml1NzVJcUoybzZSUnpxcVdlTG9TWWlVMEFsSndzNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278227),
('1j3zoFYCZpfNTSiZIvqIaRh8l5HZWJ0XMsI5LK8Y', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVhVMDh0aWlyVUVFRnkybWpacHdTcFhPS1Rza1NmSWVwRzRvRWpHRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627279631),
('1zePiEp5Q9EM73ezIG5La4LzdTnfexNwMgd5QCNP', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU2I2SktxeUZhTEFSU0JsQkxSWnpmNU9GWjk0Sk43ZDVXUmpTcXV4UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277500),
('43RILUPJBuX0mZX64Lq0h3Rg1OGG7i7scUCg89Wv', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTBva09nZldzbnhoc2hWTkxsUUxscGd2cnRzVmZrM0U5TUd6ZG5HMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278631),
('4bwUbr7r9rgsr7KXDJfBIhaGYR5c8qUgaANLAQVK', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVHl3dUpod3hiWGpvaVFoWVJTQVh6WEx5MWVRbmxNSmJRc3lwZmRucSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277908),
('61BxgTrIPSsxcWnvAKSluj8esPSLCpyd1OPmiaZi', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVklRUDRtTm12R1A1bnJRaEl1Z0VUbFlJck55OExNTjJIaDRFMmNheiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627279504),
('6gzg0IcISxokPAAnLUToQ5Dpd55mVHY1EOoBIWJm', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2ZVaEhzWEVRQWMwSktncEZoN0d1OE85TTduOFVBS0cwYndMUHJZSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277577),
('B2lph1ayCiCK7eM7oCeaFhIzgzxKBvi8FPilxchE', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjQxQnp2VGJzNWozS1VjcUplcnVYa0ZtTU1sZ2h6NlI1QXd0aXBQSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278321),
('bFDgH4qtAQOUTkXdf8VI0XfJPsuOuR7S1WeHrmdy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlRuSnlXN3JGT0VPaVp0TEhvVENTRnRCWG9uYWlpRW13NzRBaVMxSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278520),
('BWC3xm4Ks8AldX3RbgYvgm6Q5yA3b1WoBWZezC4y', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjM5dXUxcHRRbmxKQlpTdWg0NVR3aWk2eTFKM2FoY0J3ZVVhNDV3eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278533),
('Cib0WUpO79mpx3gHGr1d1zBEh1johzmIeL1ehGkQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaG16QVJSUW9tam9jZDE3ZUt0Tmo2c09FVWFMcXFzbDlPNnZsd3VhcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278281),
('dgMHY41MaRsgoCL81jiIC9fdW5U0DT5yuohihUP7', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUxTV0k4U0lCd2drUldQczRTQ0ZHejluUVc0SWNzUHJONXJPOHpESCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627272558),
('e5msDArJlu4l3rSNWbUi3gsgFUjfdcckXMHSbZRM', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWowNVc0WjZKaTFUQlo2Tk9kOVU4dXBlb0MydERhc3NST0NCYVl5USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277728),
('fafXMcuX7A1BU3inEkVVe1Kdj1QH3FbuiZ52JYiD', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZVV0eFFQZzJBbE1vNkJaWEpWdmlHZHlpQkdVdnh5aVYzOGVNYlMweSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627279635),
('fd7EMSuJKp3vmX1gSTAnd9qv6qJ1IJIfxEzY5sEq', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU0I5MUVVdXJYeEFwdTBJb0J0T2tKUlEwVFpHcjZQZEFIdFE2NjJWNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627279529),
('Gn8a2uvI6Pu5ARldmjSi7Z0Uql1956oLh46iSogb', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUkpXdzBKU1RnS1o0OVRPRUFVMGRRTmlSNVZTOU9zSXZIZ09yQW91MCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627279637),
('gtD0dpc8bVPRv0odg3DTe7XmCPcpjdTpxZEf3ed1', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0tmWFZuZXlmcFBISDRxRVFsVDZtR25NOWhwenlXdjVQY0s3SmdoSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278279),
('hFCt1I0QZRgnhiMFYAOOwe5NMcBgnGrZNRdpljrd', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2JEY2FUMmhtMHpVeURRTzZXWTk2TmZFUTlQVExvcFd2UnRENkhJVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277722),
('hjTCoNkYWn6O8Q7NrQorDpDXz2K1LYqFltVPO0ju', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQUxsM0RibHZkNUxJMVkxQ2hhSHBoRUt5bjAzMkVxd3JNQVNHNjlVViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277606),
('iaJBqViSZTzamuThfaVsv05SjpWvoG0XAK3SQnYk', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTBRRG5MdXllYnJ3UWhsR1ZBWnZSWExCWGplS1ZpVWNpUWMzTlNMTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277493),
('iPBY7ssnPk9QdkR5WqX6mKa7JLEqMLrehvC5LkxY', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWV6WWQ2TTBuRVFhUmxuWXdPU1ZCcUdnTVZEQ0hxRE12TVNoVElUdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277773),
('IRI1PBarcjdlzHOcvXhLsWvLukS17qC1OcFmYzdr', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGlSekdONnFZUUd5RjZHeVo1dm9vTW1EeUdrbDlJQ2ZoWkZic0tVRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278636),
('jzzQCd7WfBYsjBQFN33SUcUbqPoMMel6SStHXp4A', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZzdQMXVGY2FUU2h0eFhUQUlja3M2Y1J0cG1OcFkyRW4zckFxTHZ6bCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277869),
('k8AuljFH0NSvBxCwPp7AH8K64e0IzzERAOi0WYO6', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaDVUQWgxT3VUN01hbnpsdGJ3QXZ4eU5rS2IwVHRSQnJNeTRpQUc1NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277569),
('kb2QGJ26mgI0fCGUyyxBzMApzclSL10AHKFwJb7X', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2drVTlzbFQ4Nm05TVpVVE5wSWplemNETGdRVDNyWDRUNFM1MmVKdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277486),
('kdgby8V5WOq4f2237YN2P4fxzDaAvfeKRETPfU0J', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUU0waFo3ZWpGNHpHbmtSN2MwS0tLSGtydkYxT1VOV24zVTU1NGFlOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277752),
('KyCupeuTdBQKDK7vetG8Jifq2uGJCnCAUClQkKzF', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNnl2cmVXV0ZjSUtBTEE4TU9BQzh2OWZRaUM1eTIxbHNIV1pIemRFeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277902),
('Lh77HcJHTaKrQAOYIdpJ7DSBK25WmipgW5CwnyMN', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWQ0bUlOQ25GMFVMRGhKeHM4OW1WV25Ja21jWUNlOFlORnJ5N2pSNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277525),
('lPpmyGHtx0E4K1nlYBLTbu3VpypSvXc0yMtzBfva', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMkhSaGRZTDJPTmwwZW9ZOWlvd1I1aUs2OFBsMU15WFg5YVZFNXhIMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278296),
('MgOczqjvHvWg7wdDErODIrbo5e1fNCoCNpEIR3Xl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUFoxWHFGMk9IV29NTW1OeGFpaGpoSXhGYnNpbnI0S0VRR053WnhYeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278604),
('mgUK1pak2k5oOc35Ef7Z5KSR4CBUiyhLyMqVlANT', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT2E5cHlSWHFFMmNVdFVXamFqZjRzcmQyY05ZRGtiYUtlaG02YzJYWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277695),
('myCUgzzrUaAYAjMNh6L4jSuabgB7lWDdzIp5pTfF', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWG1HMjBWanQ0ZmNSd2FUejdQSDNBUGo0U0h6d0NyT1k3bUdsQWZybyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277916),
('N02EgvaOyJnfJpiwjgi4wcy7iAnf4N4Wt3hZrP8y', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEFkWXNESXczM2RsRk5XdklmQUlxSWZMYjZCV0VzSE9UeDB6RjRtSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277740),
('nTnTonXDpDGpl3P4gqtSZxSyTLapm3IFwfhDUFdd', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQURtREVNODlOZFdaMnE0RUg5d3pva3BUNTJuSDBqTGN3dHV4czE1WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278508),
('O0lmby4El4q07GXWfaweJJY17V4ayvcqFsV0hfiw', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiODRJTGloOWc2M1NxYU1IaTUxRTgwNGRCVGJnMFNzN1ZDc3k2TlR1dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277776),
('ot1MZI7G3qRjhMlVvYrZ8g5fNxKTUMMBIbix5An2', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXpsU2x5aUFPSWNWTmc3b1oyUkE4WEt0MUcxaG5iSmZwZDJwUkp0NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627279511),
('P1ITZx0JPGOgasdwiMnhvyrpuaaVqsfxRLqPE0B4', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSTFjMWprMVRWY1Y4SWozQlo1UFVYZUxLMFJ5MlpNNnk4QWJUNE1RZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278585),
('pfwC6xStcNikBIsYHpPKIth9OuMO2oaxm9k7NMLl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVMxb21aVEI2ZVBBcU1GV09lT0FScDhaY2tiTjRXN0pISXNDamVYcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277574),
('pzlWeXNZ8tDGN1ktuKum7sOwVijIULPUWrArwRsO', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3FiaWlVSFRPc2ZTZVFJdUpJSlVpbU5JeTRtdGNwM0NrOWpFSWJqQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277700),
('q63PXyfvicJMwwiOMu5M89dLIdS2hxUNG3mptmp5', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWkFRN3BYQ0VSOGR1bUtJZERMcVJJWEY2RVJLRVd1OVpySGhXM1ZjOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278412),
('QDaXbHaCe27vz9HuzQcLx5CNVc4jtoIEjqMB9B3j', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjYzV3lQSzVCeUpKUlNYdXRCZWRIbW95VUQ5bnJpa1pCSVNGbEMyTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278312),
('qf1mDpWvHUMjZ1HNViGe29yIS0PCnXDIOzfOjJPx', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajc1c1d1TDlPRFVsaFFEN1dVTjdTeGVROUhMbHhNNHBkNVA5QWVDUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277550),
('RDl9V3tdUoZYNuuBDVgBXaPBcMSsKH20KBamPSJ9', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFhqY0xnMzZycGFkVVBYc0N6QXdRMTBsUjFHMURLN0R5ZWdQNUlXUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277911),
('RTKApRRBBttBMnLuGE1VVeCdGL1b6mR5SHP4fPmN', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3hETnNPRTRWNnpiUUNNYW54YlhxaXpBV3FTbG52eGxIWGNZV3hsSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278339),
('SBbirSr0kuwT62xYmGEz7ZVgm13TgGmmsM7csMRH', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2Z3a2w2TVBHSDFFYU9WSE9iNzBMSkNvVjBkUEZYdVNzeFZMYzRoTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627279617),
('SBK7MnAlaNMng7wLw74URguPuZnxpB8M6DrGZZGD', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYmYxbVZHT0FpUE5PaHZmajBra0JWOE5OY0ZzbnphR2trclQ2R3VPdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278216),
('SC8FfIgI2TzbpISpI39qpxaaDEaDOslCrpHpV2aR', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWtsT0lySlJueHBzYm1OQVB4SjhZRHI0WUNiTm9HdlBmVVl2MlRSZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278272),
('sI6FOq0AKgN9mZLLMq1LkZVF0g5O8eD7lAVASz3P', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWVZuTkIxdFFwVGRJVzgyZTNzNEpuWG1PVDEwalNYR1o4Y2M3cGtNdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277801),
('sR6pWJJuI9NvIsOkkzV8J3jb98SePEUY5V1gaJZW', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU0dFclp1MWNqbGFpdlZZZnhtbWNNd1RIUEpTSGlzRkcyMXdTZ2E3eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277617),
('T7g5twX0buZPcGUy7T7ORhqxvr1lfIkmzsth4Z24', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYm1OMXpPUlJEaHZ6Mjh4ZjlIU1BIWFg1RndIek9lY2VrWHhOdTVwWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277703),
('tktBysUhwKjihXYeDpJo084vkOzYJrpFi5SR1dR7', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQURTT1EwajJHemtqQk84d3o0ZmE5UUNPRkJuNWt3akpIVVV6NWRGNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627279643),
('TN24AF032Ubc1AcfZrHkCr63a7AlyjScmtZwS2Ip', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRlNoUEFLWU42V1MzVGZ3UU1PVjN3MlR0SUFybWpqVHZZQ0FOOFdjMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278463),
('uKAxVfNXvBXknjNJE5AsQ3UVZudurQMRjx1c9bP5', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHI2RjNycm43cU1xUGhtZDM0QlUzSHkxSTUycEIzNlViSjlkcWZFWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627279623),
('upVkrbAhu75I1atXHePmYyiBsklFHfLIJkKNJ01o', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidmQ5VkxRMnNkY2xFWVpKa3FOalNDWXBSQ29YMmtSODlnYkdIOFVPUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277888),
('uZ2nkWsKO6dPjVj9U1qhyH8E4Wm9jgd5qQFGkh7p', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNnVZcGhRWjJYdm1PMHM0bmVMdzVnanpUSHdHeDlKejZha1RWbHRnOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277382),
('V5XNVCFOjk2DyNXsG0YKibGsEnNHqOidRNV7uWye', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUU56RW42aHk5dENFT0plOU9zYUc1NWZNMjU5eXZ3NkpydnVOaGFaYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277744),
('Vi21aRShY9M7qtwSfV20pQFUXoY7KhPfU4ju33GM', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXF1YU1rN3hLekt5dExlVkZqNDF4ZXFKaTZiVUY5UlNlZDJybVdDSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278205),
('WbNlqH2CtkKOGrHxuKmXAyRPkYH8C1TXhiL9hhqP', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2hmZ2dRakY2WlAzRTNVbDRhMWUxWUY3YU5Ra1dlQ3B4Z2lzVEpxQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278330),
('WPyHVPvSRsCj2xzKY4dnv7wVitAAqmofuynAXbNB', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHVxa04ydVpCWVNIRnFoMExWZDE0d1dpaGtUNm9LdU5URXVZS2FqZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278287),
('wR1TvRoc1BI5VS3O2IjQjfskULmvxxsAWdTnRBXA', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzZMVzJpVWdQV2ZIYlJyZlpNdU9ZNnM1cmZGUnJCSmFWSlMxN25yUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627279508),
('XFGrds79sueJVRW6R31FcDo8wnxjkHqigcqAtwUs', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWnV1M3hldEdVWWxWNmdLbXZobVZBSXNVQm9reWc3Rmh1QkJTZ2V2ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278219),
('xIN29kB5rLXEEm8JuT3ZbXRUrHxNhbjTQ2HUHMeX', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOVZmWmNQa0xqZzF6dVZlVzEwZjg5SVpDWkx2aWY4cHR4aGhwcmh6SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627279356),
('XmdnMjPFAlaiQk72wq3ONsVr6rAZSJsxrf318rUt', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibHNFTUczZ1VBVWhvWnVjTVp6VUVCc2tlTzFWc2p5NHNvYjdFYTNRaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627278424),
('xSnfixKQsjjt9hQx4gLIaCNP4HB1AVOq169D2GX6', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGlaUkVPOWlRdk1Ta1lCQll1YmYwMFNDTm9wVnQ0MUxhQnh6S0ZaTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277878),
('XwuXLukRyYdEesD1seXGFyKKaITK9CIXD9dpF1N5', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWm5iYXI2NjlOS21PcXF5UWQ5bmxqVmc1ekFpRHhZSDNsckgzWFhyayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277717),
('xy8nSaFOG0PdTqjBFw1pLeH1WdhTuavbXes9n8qt', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUXR0THpQRWNiMGVEZDdOQ2tZNGNTcVRrUFRDdXRkRGpNZExWN1MxaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277749),
('y8O0vQ4tARzLo2x5TMkdtMUQuhOd5H6pfBIN8QCm', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2Fhc0pCYUVleDg4b25hV0xKMVlkTkRBWHNRZWttNEZSem1TSmJaRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277304),
('yl04INFC2bOGzLuR06cZZBY6DH0ZOUp1IVzyQiSZ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFh0c1FsTFhDd3JIbVF6V1FBbk1XWXF5anJTUDloUm9wbDYxdmpxbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277712),
('ytiEDEycP5RmNAujlgwJvinYZLZqxaPkq285e79C', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNk93U0hGYVM2aUszM0tNNnl1bFprdXVtWjRMOHNMSHpyZ0U2SE1VdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277874),
('YYYAMJnlHestSOL2GEZmiP0cL3P6uzlQlCOJvxkQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWE9vZVREUjgxTjRIWGVPYnM0dVYzdkFFSDl4QndxdXdzTlk3ZXp6eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277692),
('ZPcUzvQ0z39DUgNMqckAQ9kDd90oWNXJr7eaiBYs', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUDBkZGpTUmlWcThUcmZWSmpHZkJnVDFRTkJYc0ozVWFQUXZ4VGVMbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277707),
('ZVPz8KmL7cEyOZY3LHgTQzPO5FypDmBFH9MLs3xA', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV3lzVnZoczF2c1NSQTBUek9KalBKa3FLWGhXRUxSM3VJajRoWDVkTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vcG9zdC9hZGQtcG9zdD90eXBlPWFydGljbGUiO319', 1627280990),
('ZYZBRlpLEe674TUY3IWRvLcLbrbZVCxd6m957IQy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZzBzTnBSbU5oeXhLb2VqZ2MxbVhhd0puTmtNNmR1dGJmdFFweG1qMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627277764);

-- --------------------------------------------------------

--
-- Table structure for table `social_login_configurations`
--

CREATE TABLE `social_login_configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visual_settings`
--

CREATE TABLE `visual_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache_systems`
--
ALTER TABLE `cache_systems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `font_settings`
--
ALTER TABLE `font_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_settings`
--
ALTER TABLE `language_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
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
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_galleries`
--
ALTER TABLE `post_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_settings`
--
ALTER TABLE `route_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_tools`
--
ALTER TABLE `seo_tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `social_login_configurations`
--
ALTER TABLE `social_login_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visual_settings`
--
ALTER TABLE `visual_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cache_systems`
--
ALTER TABLE `cache_systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `font_settings`
--
ALTER TABLE `font_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language_settings`
--
ALTER TABLE `language_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_galleries`
--
ALTER TABLE `post_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `preferences`
--
ALTER TABLE `preferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route_settings`
--
ALTER TABLE `route_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_tools`
--
ALTER TABLE `seo_tools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_login_configurations`
--
ALTER TABLE `social_login_configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visual_settings`
--
ALTER TABLE `visual_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
