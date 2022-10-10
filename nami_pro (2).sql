-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 11:20 PM
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
-- Database: `nami_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_vision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_ambition` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_goal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `desc`, `our_vision`, `our_ambition`, `our_goal`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"123\",\"en\":\"145\"}', '{\"ar\":\"\\u0646\\u0627\\u0645\\u064a \\u0647\\u064a \\u0634\\u0631\\u0643\\u0629 \\u0645\\u0635\\u0631\\u064a\\u0629 \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0641\\u064a \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0627\\u0644\\u0645\\u062a\\u0643\\u0627\\u0645\\u0644\\u0629 \\u0628\\u062f\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u062c\\u0631\\u0627\\u0641\\u064a\\u0643 \\u0648\\u0625\\u0646\\u062a\\u0647\\u0627\\u0626\\u064b\\u0627 \\u0628\\u0628\\u0631\\u0645\\u062c\\u0629 \\u0648\\u062a\\u0635\\u0645\\u064a\\u0645 \\u062a\\u0637\\u0628\\u064a\\u0642\\u0627\\u062a \\u0627\\u0644\\u0647\\u0648\\u0627\\u062a\\u0641 \\u0627\\u0644\\u0630\\u0643\\u064a\\u0629\\u060c \\u0648\\u062a\\u0633\\u0639\\u0649 \\u0646\\u0627\\u0645\\u064a \\u0648\\u0641\\u0631\\u064a\\u0642 \\u0639\\u0645\\u0644\\u0647\\u0627 \\u0645\\u0646\\u0630 \\u064a\\u0648\\u0645 \\u062a\\u0623\\u0633\\u064a\\u0633\\u0647\\u0627 \\u0625\\u0644\\u0649 \\u0623\\u0646 \\u062a\\u0643\\u0648\\u0646 \\u0648\\u0627\\u062d\\u062f\\u0629 \\u0645\\u0646 \\u0623\\u0647\\u0645 \\u0634\\u0631\\u0643\\u0627\\u062a \\u062a\\u0637\\u0648\\u064a\\u0631 \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629\\u060c \\u0648\\u0646\\u062d\\u0646 \\u0646\\u0639\\u0631\\u0641 \\u0627\\u0644\\u0637\\u0631\\u064a\\u0642 \\u0648\\u0646\\u0633\\u064a\\u0631 \\u0639\\u0644\\u064a\\u0647 \\u0628\\u062e\\u0637\\u0649 \\u0648\\u0627\\u0633\\u0639\\u0629.\",\"en\":\"Nami is an Egyptian company specialized in providing integrated web services, starting with graphic design and ending with programming and designing smart phone applications. Since the day of its establishment, Nami and her team have been striving to be one of the most important Arab web development companies, and we know the way and are moving on it at a great pace.\"}', '{\"ar\":\"\\u0631\\u0624\\u064a\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0648\\u062a\\u0637\\u0648\\u064a\\u0631 \\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u064a\\u0651\\u0627\\u062a\\u060c \\u0646\\u062d\\u0646 \\u0646\\u0631\\u0649 \\u0623\\u0646 \\u062a\\u0642\\u062f\\u0645 \\u0648\\u062b\\u0631\\u0627\\u0621 \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a \\u0644\\u0646 \\u064a\\u062a\\u0645 \\u0625\\u0644\\u0627 \\u0628\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0623\\u0639\\u0645\\u0627\\u0644 \\u0625\\u0628\\u062f\\u0627\\u0639\\u064a\\u0629 \\u0648\\u062c\\u062f\\u064a\\u062f\\u0629 \\u0641\\u064a \\u0623\\u0633\\u0627\\u0644\\u064a\\u0628\\u0647\\u0627\\u060c \\u0648\\u0647\\u0648 \\u0645\\u0627 \\u0646\\u0639\\u0645\\u0644 \\u0639\\u0644\\u064a\\u0647 \\u0625\\u062f\\u0627\\u0631\\u0629\\u064b \\u0648\\u0641\\u0631\\u064a\\u0642\\u064b\\u0623.\",\"en\":\"A new vision for web services and software development. We believe that the progress and richness of the Arab Web will only be achieved by presenting innovative and new works in its methods, which is what we are working on as management and as a team.\"}', '{\"ar\":\"\\u0646\\u0628\\u062a\\u0643\\u0631 \\u0641\\u064a \\u0646\\u0627\\u0645\\u064a \\u0646\\u0638\\u0645 \\u0644\\u062a\\u063a\\u064a\\u064a\\u0631 \\u0645\\u0644\\u0627\\u0645\\u062d \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a \\u0644\\u0644\\u0623\\u0641\\u0636\\u0644 \\u0648\\u0637\\u0645\\u0648\\u062d\\u0646\\u0627 \\u0647\\u0648 \\u0625\\u0631\\u0636\\u0627\\u0621 \\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0648\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0623\\u0641\\u0636\\u0644 \\u062e\\u062f\\u0645\\u0629 \\u0645\\u0645\\u0643\\u0646\\u0629 \\u0641\\u064a \\u0623\\u0646\\u0633\\u0628 \\u0648\\u0642\\u062a \\u0648\\u0628\\u062a\\u0643\\u0644\\u0641\\u0629 \\u0645\\u062a\\u0648\\u0627\\u0632\\u0646\\u0629 \\u0648\\u0627\\u0633\\u062a\\u0643\\u0645\\u0627\\u0644 \\u0627\\u0644\\u062a\\u0639\\u0627\\u0648\\u0646 \\u0645\\u0639 \\u0639\\u0645\\u0644\\u0627\\u0621 \\u0647\\u062f\\u0641\\u0647\\u0645 \\u0627\\u0644\\u0625\\u0628\\u062a\\u0643\\u0627\\u0631 \\u0648\\u0627\\u0644\\u062a\\u0637\\u0648\\u0631 \\u0648\\u0627\\u0644\\u0646\\u062c\\u0627\\u062d \\u0645\\u0639\\u0646\\u0627\",\"en\":\"In Namiyaz, we innovate to change the features of the Arab Web for the better. Our ambition is to satisfy our customers, provide the best possible service in the most appropriate time and at a balanced cost, and complete cooperation with customers whose goal is innovation, development and success with us.\"}', '{\"ar\":\"\\u0647\\u062f\\u0641\\u0646\\u0627 \\u0641\\u064a \\u0646\\u0627\\u0645\\u064a \\u0647\\u0648 \\u0623\\u0646 \\u0646\\u0643\\u0648\\u0646 \\u0645\\u0646 \\u0623\\u0647\\u0645 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a \\u0627\\u0644\\u0639\\u0627\\u0645\\u0644\\u0629 \\u0641\\u064a \\u0645\\u062c\\u0627\\u0644 \\u062a\\u0637\\u0648\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0642\\u0639 \\u0648\\u0627\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642\\u0627\\u062a \\u0648\\u063a\\u064a\\u0631\\u0647\\u0627 \\u0645\\u0646 \\u0645\\u062c\\u0627\\u0644\\u0627\\u062a \\u0639\\u0645\\u0644 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629\\u060c \\u0648\\u0647\\u0648 \\u0647\\u062f\\u0641 \\u0646\\u0639\\u0644\\u0645 \\u0623\\u0646\\u0646\\u0627 \\u0633\\u0646\\u0635\\u0644 \\u0625\\u0644\\u064a\\u0647 \\u0639\\u0627\\u062c\\u0644\\u064b\\u0627 \\u0623\\u0645 \\u0622\\u062c\\u0644\\u0627\\u064b \\u0628\\u0641\\u0636\\u0644 \\u062b\\u0642\\u0629 \\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0641\\u064a\\u0647\\u0627\",\"en\":\"Our goal in Nami is to be one of the most important companies working in the field of developing websites, applications and other areas of the company\\u2019s work, a goal we know we will reach sooner or later thanks to the confidence of our customers in it.\"}', '2022-05-21 07:00:39', '2022-10-03 16:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whats_up_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_type` tinyint(4) NOT NULL DEFAULT 0,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='الادمن و مسئولى الدعم الفنى';

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `whats_up_number`, `email`, `email_verified_at`, `password`, `image`, `admin_type`, `lang`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Elsdodey', '01025130204', NULL, 'admin@admin.com', NULL, '$2y$10$Oj39hmJW6XodmTKPViRRGO9IEZFuZaZsqTdCgAg5i6HTPIuqGsmOK', 'admins/jpg_mohamed.jpg_1664826075.jpg', 0, NULL, NULL, NULL, '2022-10-02 13:09:36', '2022-10-03 17:41:15'),
(2, 'Nita Newman', '51', '277', 'gosaxoj@mailinator.com', NULL, '$2y$10$QBmF5g.yDS/aXPqDKbGUpucz.U2P1RRLqbzPlDJmbdL12IWDFi4pK', 'admins/png_user.png_1664870046.png', 0, NULL, NULL, NULL, '2022-10-04 05:54:06', '2022-10-04 05:54:06'),
(3, 'Anne Ward', '95', '34', 'ramazo@mailinator.com', NULL, '$2y$10$53CgBjQey1y5U3Vfw.EDy.Oorr8GKvOyXkFe7BG1TLD03SpbuZhfm', 'admins/PNG_dub.PNG_1664870276.PNG', 0, NULL, NULL, NULL, '2022-10-04 05:57:56', '2022-10-04 05:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect_to_route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` enum('read','unread') COLLATE utf8mb4_unicode_ci DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` enum('read','un_read') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'un_read',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(2, 'Thaddeus Phelps', '+1 (456) 957-2234', 'ducimy@mailinator.com', 'Nihil omnis et ipsum', 'In consequatur sed', 'un_read', '2022-10-04 06:26:18', '2022-10-04 06:26:18'),
(3, 'Thaddeus Phelps', '+1 (456) 957-2234', 'ducimy@mailinator.com', 'Nihil omnis et ipsum', 'In consequatur sed', 'un_read', '2022-10-04 06:26:24', '2022-10-04 06:26:24'),
(4, 'Thaddeus Phelps', '+1 (456) 957-2234', 'ducimy@mailinator.com', 'Nihil omnis et ipsum', 'In consequatur sed', 'un_read', '2022-10-04 06:26:26', '2022-10-04 06:26:26'),
(5, 'Caldwell Mclaughlin', '+1 (491) 483-9296', 'pepes@mailinator.com', 'Irure quibusdam veni', 'Est id ut praesentiu', 'un_read', '2022-10-04 06:31:47', '2022-10-04 06:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `firebase_tokens`
--

CREATE TABLE `firebase_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `software_type` enum('web','android','ios') COLLATE utf8mb4_unicode_ci DEFAULT 'web',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frequently_questions`
--

CREATE TABLE `frequently_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='الاسئلة الشائعة فى الصفحة الرئيسة';

--
-- Dumping data for table `frequently_questions`
--

INSERT INTO `frequently_questions` (`id`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(2, '{\"ar\":\"Et asperiores cumque\",\"en\":\"Hic quis cupiditate\"}', '{\"ar\":\"Tempora eiusmod quam\",\"en\":\"Dicta laboris totam\"}', '2022-10-02 21:32:05', '2022-10-02 21:32:05'),
(4, '{\"ar\":\"Quaerat suscipit Nam\",\"en\":\"Vel enim et voluptas\"}', '{\"ar\":\"Incidunt quaerat al\",\"en\":\"Quae adipisicing ven\"}', '2022-10-04 07:52:59', '2022-10-04 07:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` enum('active','not_active') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='اللغات خاصة بالاضافة كاعداد';

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'ar', 'active', '2022-03-27 11:57:36', '2022-03-27 11:57:36'),
(2, 'en', 'active', '2022-03-27 11:57:36', '2022-03-27 11:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_07_31_100743_create_firebase_tokens_table', 1),
(9, '2019_07_31_101144_create_contacts_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2019_12_29_104801_create_admins_table', 1),
(13, '2020_04_09_105520_create_settings_table', 1),
(14, '2020_09_14_081240_create_admin_notifications_table', 1),
(15, '2021_06_03_143103_create_languages_table', 1),
(16, '2022_02_08_180749_create_permission_tables', 1),
(17, '2022_10_02_180748_create_our_works_table', 2),
(18, '2022_10_02_182739_create_type_table', 3),
(19, '2022_10_02_191216_create_our_works_type_table', 4),
(20, '2022_10_02_223640_create_our_services_table', 5),
(21, '2022_08_29_175630_create_frequently_questions_table', 6),
(22, '2022_10_03_065728_create_reviews_table', 7),
(23, '2022_02_23_171358_create_statistics_table', 8),
(24, '2022_10_03_164142_create_about_us_table', 9),
(25, '2022_10_03_185929_add_tag_to_settings_table', 10),
(26, '2022_10_04_193520_add_url_to_our_works_table', 11),
(27, '2022_10_05_100948_add_icon2_to_our_services_table', 12),
(28, '2022_10_05_104659_add_url_to_our_works_type_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE `our_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`id`, `title`, `desc`, `icon`, `created_at`, `updated_at`, `icon2`) VALUES
(3, '{\"ar\":\"\\u0627\\u062a\\u063a\\u0628\\u0628\",\"en\":\"Consequat Error und\"}', '{\"ar\":\"\\u062a\\u0641\\u0641\\u0644\\u0628\",\"en\":\"Impedit esse quaera\"}', 'our_services/jpg_cc.jpg_1664752151.jpg', '2022-10-02 21:09:11', '2022-10-05 08:29:08', 'fa-align-justify'),
(4, '{\"ar\":\"Obcaecati non dolore\",\"en\":\"Labore in culpa ex e\"}', '{\"ar\":\"Cupidatat nihil sed\",\"en\":\"Voluptate enim dolor\"}', 'our_services/jpg_cc.jpg_1664965165.jpg', '2022-10-05 08:19:25', '2022-10-05 08:29:00', 'fa-align-center'),
(5, '{\"ar\":\"Magnam anim reiciend\",\"en\":\"Anim qui voluptate n\"}', '{\"ar\":\"Delectus aut obcaec\",\"en\":\"Dignissimos totam qu\"}', 'our_services/jpg_clean.jpg_1664965372.jpg', '2022-10-05 08:22:52', '2022-10-05 08:25:30', 'fa-adjust');

-- --------------------------------------------------------

--
-- Table structure for table `our_works`
--

CREATE TABLE `our_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_works`
--

INSERT INTO `our_works` (`id`, `title`, `desc`, `image`, `created_at`, `updated_at`, `url`, `icon`) VALUES
(2, '{\"ar\":\"123\",\"en\":\"145\"}', '{\"ar\":\"Cumque sed magnam co\",\"en\":\"Enim culpa sint qua\"}', 'ourWorks/jpg_cc.jpg_1664745617.jpg', '2022-10-02 19:20:17', '2022-10-02 20:10:08', NULL, NULL),
(4, '{\"ar\":\"Mona Delaney\",\"en\":\"Flynn Hopper\"}', '{\"ar\":\"Hic cupiditate est n\",\"en\":\"Laborum Sapiente fa\"}', 'ourWorks/png_999.png_1664886218.png', '2022-10-04 10:23:38', '2022-10-04 10:23:38', NULL, NULL),
(5, '{\"ar\":\"Beatrice Melendez\",\"en\":\"Clementine Barrera\"}', '{\"ar\":\"Dolor sit ipsum aliq\",\"en\":\"Voluptate sequi aspe\"}', 'ourWorks/PNG_dreams.PNG_1664886234.PNG', '2022-10-04 10:23:54', '2022-10-04 10:23:54', NULL, NULL),
(6, '{\"ar\":\"Melvin Sanford\",\"en\":\"Amena Kirk\"}', '{\"ar\":\"Exercitation non dig\",\"en\":\"Est facere inventore\"}', 'ourWorks/PNG_momen.PNG_1664892017.PNG', '2022-10-04 12:00:17', '2022-10-04 12:00:17', NULL, NULL),
(7, '{\"ar\":\"Jenna Parks\",\"en\":\"Sawyer Kaufman\"}', '{\"ar\":\"Dolore esse aut cons\",\"en\":\"Rerum non sit volup\"}', 'ourWorks/PNG_dreams.PNG_1664912872.PNG', '2022-10-04 17:47:52', '2022-10-04 17:48:22', 'https://www.youtube.com/watch?v=yAMr9YiaDmk', NULL),
(8, '{\"ar\":\"Cruz Dillon\",\"en\":\"Madeson Oneil\"}', '{\"ar\":\"Voluptatem Reprehen\",\"en\":\"Aliquam doloribus qu\"}', 'ourWorks/PNG_momen.PNG_1664963767.PNG', '2022-10-05 07:56:07', '2022-10-05 07:56:07', 'Deserunt iste non eo', 'fa-y-combinator'),
(9, '{\"ar\":\"hello\",\"en\":\"hello\"}', '{\"ar\":\"Rerum voluptatem eli\",\"en\":\"Culpa sed dolorem t\"}', 'ourWorks/PNG_eshry.supplier.PNG_1664967521.PNG', '2022-10-05 08:58:41', '2022-10-05 08:58:41', NULL, NULL),
(10, '{\"ar\":\"Pandora Stephenson\",\"en\":\"Karly Hogan\"}', '{\"ar\":\"Qui dolorem nobis ni\",\"en\":\"Lorem Nam quasi temp\"}', 'ourWorks/png_logo.png_1664967601.png', '2022-10-05 09:00:01', '2022-10-05 09:00:01', NULL, NULL),
(11, '{\"ar\":\"Erin Kirkland\",\"en\":\"Derek Morgan\"}', '{\"ar\":\"Molestiae necessitat\",\"en\":\"Fugit consequat Pa\"}', 'ourWorks/PNG_warn.PNG_1664969655.PNG', '2022-10-05 09:34:15', '2022-10-05 09:34:15', NULL, NULL),
(12, '{\"ar\":\"Elijah Cook\",\"en\":\"Phoebe Davidson\"}', '{\"ar\":\"Ut et dolorum conseq\",\"en\":\"Duis quam eum optio\"}', 'ourWorks/png_user.png_1664970027.png', '2022-10-05 09:40:27', '2022-10-05 09:40:27', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our_works_type`
--

CREATE TABLE `our_works_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ourWork_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_works_type`
--

INSERT INTO `our_works_type` (`id`, `ourWork_id`, `type_id`, `created_at`, `updated_at`, `url`) VALUES
(5, 2, 3, '2022-10-02 20:10:08', '2022-10-02 20:10:08', NULL),
(6, 3, 2, '2022-10-02 20:28:07', '2022-10-02 20:28:07', NULL),
(7, 3, 3, '2022-10-02 20:28:07', '2022-10-02 20:28:07', NULL),
(9, 5, 2, '2022-10-04 10:23:54', '2022-10-04 10:23:54', NULL),
(10, 4, 3, '2022-10-04 11:41:58', '2022-10-04 11:41:58', NULL),
(11, 6, 2, '2022-10-04 12:00:17', '2022-10-04 12:00:17', NULL),
(12, 6, 3, '2022-10-04 12:00:17', '2022-10-04 12:00:17', NULL),
(15, 7, 1, '2022-10-04 18:32:23', '2022-10-04 18:32:23', NULL),
(16, 7, 2, '2022-10-04 18:32:23', '2022-10-04 18:32:23', NULL),
(17, 8, 3, '2022-10-05 07:56:07', '2022-10-05 07:56:07', NULL),
(18, 9, 1, '2022-10-05 08:58:41', '2022-10-05 08:58:41', 'Accusantium inventor'),
(27, 10, 1, '2022-10-05 09:25:52', '2022-10-05 09:25:52', 'Quaerat nisi deserun'),
(28, 11, 1, '2022-10-05 09:34:15', '2022-10-05 09:34:15', 'https://www.youtube.com/watch?v=yAMr9YiaDmk'),
(29, 11, 2, '2022-10-05 09:34:15', '2022-10-05 09:34:15', 'https://www.youtube.com/watch?v=BGkL2Pq-g3A'),
(33, 12, 1, '2022-10-05 09:41:02', '2022-10-05 09:41:02', 'Qui dicta dolore aut');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evaluation` double DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_name` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `evaluation`, `message`, `user_name`, `app_name`, `created_at`, `updated_at`) VALUES
(9, 3, '{\"ar\":\"Nam corrupti dolore\",\"en\":\"Nam qui et unde veli\"}', '{\"ar\":\"wofyxudugo\",\"en\":\"ranyku\"}', 2, '2022-10-03 10:51:36', '2022-10-03 12:22:21'),
(10, 3, '{\"ar\":\"Nam corrupti dolore\",\"en\":\"Nam qui et unde veli\"}', '{\"ar\":\"wofyxudugo\",\"en\":\"ranyku\"}', 2, '2022-10-03 10:51:36', '2022-10-03 12:22:21'),
(11, 1, '{\"ar\":\"\\u0627\\u0644\\u0644\\u0644\\u0644\\u0644\\u0644\\u0644\\u0644\\u0644\\u0644\\u0644\\u0628\\u064a\\u0641\\u0627\\u0642\\u062b\\u0627\\u0633\\u0621\",\"en\":\"hhhhhhhhhhhhh\"}', '{\"ar\":\"rrrrrrrrr\",\"en\":\"ggggg\"}', 2, '2022-10-04 05:42:33', '2022-10-04 18:24:23'),
(12, 1, '{\"ar\":\"Et molestiae dolorem\",\"en\":\"Inventore ea sed odi\"}', '{\"ar\":\"hovozub\",\"en\":\"rususekij\"}', 5, '2022-10-05 05:02:09', '2022-10-05 05:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tap_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `header_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `footer_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `footer_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `address1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `address2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double NOT NULL DEFAULT 0 COMMENT 'مطلوب',
  `longitude` double NOT NULL DEFAULT 0 COMMENT 'مطلوب',
  `email1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `email2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_service_desc` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `our_family_title1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `our_family_desc1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `our_family_image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `our_family_title2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `our_family_desc2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `our_family_image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'مطلوب',
  `our_statistics_desc` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT ' نص الاحصائيات مطلوب',
  `recruitment_step_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '   مطلوب',
  `recruitment_step1_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '   مطلوب',
  `recruitment_step2_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '   مطلوب',
  `recruitment_step3_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '   مطلوب',
  `recruitment_step4_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '   مطلوب',
  `recruitment_step5_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '   مطلوب',
  `application_for_the_recruitment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '   مطلوب',
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_condition_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat_ghost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_app` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_condition` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_slider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_profile_pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `android_app` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ios_app` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_user_pass` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_sender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `default_theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_muted` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_notification` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tag` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `tap_logo`, `header_logo`, `footer_logo`, `title`, `footer_desc`, `phone1`, `phone2`, `address1`, `address2`, `latitude`, `longitude`, `email1`, `email2`, `our_service_desc`, `our_family_title1`, `our_family_desc1`, `our_family_image1`, `our_family_title2`, `our_family_desc2`, `our_family_image2`, `our_statistics_desc`, `recruitment_step_desc`, `recruitment_step1_desc`, `recruitment_step2_desc`, `recruitment_step3_desc`, `recruitment_step4_desc`, `recruitment_step5_desc`, `application_for_the_recruitment`, `desc`, `terms_condition_link`, `about_us_link`, `privacy_policy_link`, `facebook`, `twitter`, `instagram`, `linkedin`, `telegram`, `youtube`, `google_plus`, `snapchat_ghost`, `whatsapp`, `about_app`, `terms_condition`, `privacy_policy`, `login_banner`, `image_slider`, `company_profile_pdf`, `fax`, `android_app`, `ios_app`, `link`, `sms_user_name`, `sms_user_pass`, `sms_sender`, `publisher`, `default_language`, `default_theme`, `offer_muted`, `offer_notification`, `created_at`, `updated_at`, `tag`, `header_title`, `header_desc`) VALUES
(1, NULL, NULL, NULL, '{\"ar\":\"Nisi porro laboriosa\",\"en\":\"Ut ad saepe est est\"}', '{\"ar\":\"Nisi porro laboriosa\",\"en\":\"Ut ad saepe est est\"}', '01010871488', '01010871488', '{\"ar\":\"\\u0633\\u062f\\u0648\\u062f\\u060c \\u0645\\u0631\\u0643\\u0632 \\u0645\\u0646\\u0648\\u0641\\u060c \\u0645\\u0635\\u0631\",\"en\":\"Ut ad saepe est est\"}', NULL, 30.4255354, 30.8985814, 'retodeceta@mailinator.com', 'dobu@mailinator.com', '{\"ar\":\"sqfwdkepogfjpkcpqw;oe\",\"en\":\"34mfp423;g2f3[\"}', NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, NULL, 'Architecto in quia a', 'Excepteur fuga Volu', 'Rem cupidatat nisi a', 'Consectetur ut expl', 'Ut deserunt aliquid', 'Eaque quia id dolor', 'Quia ad voluptatum l', 'Minus ex qui ullamco', '01010871488', NULL, '{\"ar\":\"<h3>1.&nbsp;\\u0641\\u064a \\u0628\\u0627\\u062f\\u0626 \\u0627\\u0644\\u0623\\u0645\\u0631<\\/h3>\\r\\n\\r\\n<blockquote>\\r\\n<p>\\u062a\\u062d\\u062f\\u062f \\u062a\\u0644\\u0643 \\u0627\\u0644\\u0627\\u062a\\u0641\\u0627\\u0642\\u064a\\u0629 \\u0623\\u0633\\u0633 \\u0627\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0628\\u064a\\u0646 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0648 \\u0646\\u0627\\u0645\\u064a \\u0648\\u062d\\u0642\\u0648\\u0642 \\u0648\\u0648\\u0627\\u062c\\u0628\\u0627\\u062a \\u0643\\u0644 \\u062c\\u0647\\u0629\\u060c \\u0648\\u0628\\u062a\\u0639\\u0627\\u0645\\u0644\\u0643 \\u0645\\u0639 \\u0646\\u0627\\u0645\\u064a \\u0641\\u0623\\u0646\\u062a \\u0645\\u0648\\u0627\\u0641\\u0642 \\u0639\\u0644\\u0649 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0627\\u062a\\u0641\\u0627\\u0642\\u064a\\u0629<\\/p>\\r\\n<\\/blockquote>\\r\\n\\r\\n<h3>2.&nbsp;\\u062d\\u0642\\u0648\\u0642 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621<\\/h3>\\r\\n\\r\\n<ol>\\r\\n\\t<li>\\u062a\\u062a\\u0639\\u0647\\u062f \\u0634\\u0631\\u0643\\u0629 \\u0646\\u0627\\u0645\\u064a \\u0628\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0648\\u062e\\u062f\\u0645\\u0627\\u062a \\u0639\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0648\\u062d\\u0635\\u0631\\u064a\\u0629 \\u062a\\u0645\\u0627\\u0645\\u0627\\u064b \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0647\\u0627\\u060c \\u0643\\u0630\\u0644\\u0643 \\u062a\\u062a\\u0639\\u0647\\u062f \\u0628\\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0623\\u0639\\u0631\\u0627\\u0641 \\u0627\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644\\u0627\\u062a \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a\\u0629 \\u0648\\u0643\\u0641\\u0627\\u0644\\u0629 \\u0643\\u0627\\u0641\\u0629 \\u062d\\u0642\\u0648\\u0642 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621\\u060c \\u0643\\u0630\\u0644\\u0643 \\u062a\\u062a\\u0639\\u0647\\u062f \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0628\\u0627\\u0644\\u0625\\u0644\\u062a\\u0632\\u0627\\u0645 \\u0628\\u0643\\u0627\\u0641\\u0629 \\u0628\\u0646\\u0648\\u062f \\u0627\\u0644\\u0639\\u0642\\u0648\\u062f \\u0623\\u0648 \\u0627\\u0644\\u0627\\u062a\\u0641\\u0627\\u0642\\u0627\\u062a \\u0627\\u0644\\u0645\\u0628\\u0631\\u0645\\u0629 \\u0628\\u064a\\u0646\\u0647\\u0627 \\u0648\\u0628\\u064a\\u0646 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621.<\\/li>\\r\\n\\t<li>\\u062a\\u0644\\u062a\\u0632\\u0645 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0628\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0648\\u0627\\u0644\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0628\\u0627\\u0644\\u0645\\u0648\\u0627\\u0635\\u0641\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u0641\\u0642 \\u0639\\u0644\\u064a\\u0647\\u0627 \\u0623\\u0648 \\u0627\\u0644\\u0645\\u062f\\u0631\\u062c\\u0629 \\u0641\\u064a \\u0635\\u0641\\u062d\\u0627\\u062a \\u0645\\u0648\\u0642\\u0639\\u0647\\u0627 \\u0627\\u0644\\u0631\\u0633\\u0645\\u064a \\u0623\\u0648 \\u062d\\u0633\\u0627\\u0628\\u0627\\u062a\\u0647\\u0627 \\u0627\\u0644\\u0631\\u0633\\u0645\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0645\\u0648\\u0627\\u0642\\u0639 \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0627\\u0644\\u0627\\u062c\\u062a\\u0645\\u0627\\u0639\\u064a \\u0625\\u0644\\u0627 \\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0627\\u0644\\u0627\\u062a\\u0651\\u0641\\u0627\\u0642 \\u0639\\u0644\\u0649 \\u063a\\u064a\\u0631 \\u0630\\u0644\\u0643\\u060c \\u0643\\u0630\\u0644\\u0643 \\u062a\\u062a\\u0647\\u062f \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0628\\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0643\\u0627\\u0641\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0627\\u0644\\u062e\\u0627\\u0635\\u0629 \\u0628\\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0648\\u062a\\u062a\\u0639\\u0647\\u0651\\u062f \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0628\\u0623\\u0646 \\u0644\\u0627 \\u062a\\u0637\\u0644\\u0628 \\u0623\\u064a \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0634\\u062e\\u0635\\u064a\\u0629 \\u0623\\u0648 \\u062d\\u0633\\u0627\\u0633\\u0629 \\u0625\\u0644\\u0649 \\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0648\\u062c\\u0648\\u062f \\u0633\\u0628\\u0628 \\u0648\\u062c\\u064a\\u0647 \\u0623\\u0648\\u0644\\u064b\\u0627\\u060c \\u0648\\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0641\\u0642\\u0629 \\u0627\\u0644\\u062a\\u0627\\u0645\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u062b\\u0627\\u0646\\u064a\\u064b\\u0627.<\\/li>\\r\\n\\t<li>\\u062a\\u062a\\u0639\\u0651\\u0647\\u062f \\u0634\\u0631\\u0643\\u0629 \\u0646\\u0627\\u0645\\u064a \\u0628\\u0623\\u0646 \\u062a\\u0642\\u0648\\u0645 \\u0628\\u062a\\u0648\\u0641\\u064a\\u0631 \\u062f\\u0639\\u0645 \\u0641\\u0646\\u064a \\u0625\\u062d\\u062a\\u0631\\u0627\\u0641\\u064a \\u0644\\u0643\\u0627\\u0641\\u0629 \\u0645\\u0646\\u062a\\u062c\\u0627\\u062a\\u0647\\u0627 \\u0648\\u062e\\u062f\\u0645\\u0627\\u062a\\u0647\\u0627 \\u0633\\u0648\\u0627\\u0621 \\u0643\\u0627\\u0646\\u062a \\u062c\\u0627\\u0647\\u0632\\u0629 \\u0623\\u0648 \\u0645\\u0646\\u0641\\u0651\\u0630\\u0629 \\u0628\\u0637\\u0644\\u0628 \\u0645\\u0646 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644\\u060c \\u0643\\u0645\\u0627 \\u062a\\u062a\\u0639\\u0647\\u0651\\u062f \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0639\\u0644\\u0649 \\u0623\\u0646 \\u062a\\u0642\\u0648\\u0645 \\u0628\\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0631\\u0636\\u0627 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0648\\u0639\\u0644\\u0649 \\u0627\\u0644\\u0639\\u0644\\u0627\\u0642\\u0629 \\u0627\\u0644\\u0637\\u064a\\u0628\\u0629 \\u0628\\u0643\\u0644 \\u0627\\u0644\\u0648\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0645\\u0643\\u0646\\u0629.<\\/li>\\r\\n<\\/ol>\\r\\n\\r\\n<h3>3.&nbsp;\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645<\\/h3>\\r\\n\\r\\n<ol>\\r\\n\\t<li>\\u062a\\u0646\\u0642\\u0633\\u0645 \\u0625\\u0644\\u0649: \\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u062c\\u0631\\u0627\\u0641\\u064a\\u0643\\u064a\\u060c \\u062e\\u062f\\u0645\\u0627\\u062a \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0642\\u0639 \\u0648\\u062e\\u062f\\u0645\\u0627\\u062a \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0637\\u0628\\u0648\\u0639\\u0627\\u062a.<\\/li>\\r\\n\\t<li>\\u0634\\u0631\\u0643\\u0629 \\u0646\\u0627\\u0645\\u064a \\u0644\\u0627 \\u062a\\u0642\\u0648\\u0645 \\u0628\\u062a\\u0646\\u0641\\u064a\\u0630 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645\\u0627\\u062a \\u0627\\u0644\\u062a\\u064a \\u062a\\u062d\\u062a\\u0648\\u064a \\u0639\\u0644\\u0649 \\u0635\\u0648\\u0631 \\u0646\\u0633\\u0627\\u0626\\u064a\\u0629 \\u0623\\u0648 \\u0623\\u064a \\u0635\\u0648\\u0631 \\u0645\\u062e\\u0627\\u0644\\u0641\\u0629 \\u0644\\u062a\\u0639\\u0627\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0634\\u0631\\u064a\\u0639\\u0629 \\u0627\\u0644\\u0625\\u0633\\u0644\\u0627\\u0645\\u064a\\u0629 \\u0648\\u062a\\u0639\\u0627\\u0644\\u064a\\u0645 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0627\\u0644\\u062d\\u0646\\u064a\\u0641\\u060c \\u0643\\u0645\\u0627 \\u064a\\u062d\\u0642\\u0651 \\u0644\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0631\\u0641\\u0636 \\u0627\\u0644\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u063a\\u064a\\u0631 \\u0645\\u0646\\u0627\\u0633\\u0628\\u0629 \\u0644\\u0631\\u0624\\u064a\\u062a\\u0647\\u0627 \\u0648\\u0623\\u0633\\u0644\\u0648\\u0628 \\u0639\\u0645\\u0644\\u0647\\u0627 \\u0645\\u0639 \\u0623\\u0648 \\u0628\\u062f\\u0648\\u0646 \\u0625\\u0628\\u062f\\u0627\\u0621 \\u0623\\u0633\\u0628\\u0627\\u0628.<\\/li>\\r\\n\\t<li>\\u064a\\u062d\\u0642\\u0651 \\u0644\\u0639\\u0645\\u064a\\u0644 \\u0646\\u0627\\u0645\\u064a \\u0623\\u0646 \\u064a\\u0642\\u0648\\u0645 \\u0628\\u0637\\u0644\\u0628 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0627\\u0644\\u0623\\u0644\\u0648\\u0627\\u0646 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u0629 \\u0644\\u0647 \\u0648\\u0628\\u0627\\u0644\\u062a\\u0635\\u0648\\u0651\\u064f\\u0631 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628 \\u0644\\u0647\\u060c \\u0644\\u0643\\u0646 \\u0644\\u0627 \\u064a\\u062d\\u0642 \\u0644\\u0647 \\u0623\\u0646 \\u064a\\u0637\\u0644\\u0628 &quot;\\u062a\\u0642\\u0644\\u064a\\u062f&quot; \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0645\\u0646\\u0634\\u0648\\u0631 \\u0628\\u0627\\u0644\\u0641\\u0639\\u0644 \\u0648\\u064a\\u062e\\u0636\\u0639 \\u0644\\u062d\\u0642\\u0648\\u0642 \\u0627\\u0644\\u0645\\u0644\\u0643\\u064a\\u0629\\u060c \\u0644\\u0643\\u0646 \\u0644\\u0627 \\u0628\\u0623\\u0633 \\u0645\\u0646 \\u0627\\u0644\\u0625\\u0633\\u062a\\u0644\\u0647\\u0627\\u0645\\u060c \\u0643\\u0630\\u0644\\u0643 \\u0644\\u0627 \\u064a\\u062d\\u0642\\u0651 \\u0644\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0627\\u0644\\u0623\\u0645\\u062b\\u0644\\u0629 \\u0627\\u0644\\u062a\\u064a \\u064a\\u062a\\u0645 \\u0639\\u0631\\u0636\\u0647\\u0627 \\u0639\\u0644\\u064a\\u0647 \\u0642\\u0628\\u0644 \\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u0646\\u0647\\u0627\\u0626\\u064a \\u0645\\u0627 \\u0644\\u0645 \\u0646\\u0635\\u0631\\u0651\\u062d \\u0628\\u063a\\u064a\\u0631 \\u0630\\u0644\\u0643.<\\/li>\\r\\n\\t<li>\\u064a\\u062d\\u0642\\u0651 \\u0644\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0627\\u0644\\u0627\\u0639\\u062a\\u0631\\u0627\\u0636 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u0627\\u0644\\u0645\\u0637\\u0627\\u0644\\u0628\\u0629 \\u0628\\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0646\\u0641\\u064a\\u0630\\u0647 \\u0644\\u062b\\u0644\\u0627\\u062b \\u0645\\u0631\\u0651\\u0627\\u062a \\u0645\\u0639 \\u0625\\u0628\\u062f\\u0627\\u0621 \\u0623\\u0633\\u0628\\u0627\\u0628 \\u0645\\u0642\\u0646\\u0639\\u0629\\u060c \\u0639\\u0644\\u0649 \\u0623\\u0646 \\u062a\\u062a\\u0639\\u0647\\u0651\\u062f \\u0646\\u0627\\u0645\\u064a \\u0628\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0623\\u0633\\u0627\\u0644\\u064a\\u0628 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u0623\\u062d\\u062f\\u062b \\u0639\\u0627\\u0644\\u0645\\u064a\\u064b\\u0627 \\u0648\\u0623\\u0646 \\u062a\\u0642\\u062f\\u0645 \\u0645\\u0646\\u062a\\u062c\\u064b\\u0627 \\u0639\\u0627\\u0644\\u064a \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629\\u060c \\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0631\\u0641\\u0636 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u0625\\u0628\\u062f\\u0627\\u0621 \\u0627\\u0644\\u0631\\u063a\\u0628\\u0629 \\u0628\\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0646\\u0641\\u064a\\u0630\\u0647 \\u064a\\u062c\\u0628 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u062a\\u0632\\u0648\\u064a\\u062f\\u0646\\u0627 \\u0628\\u0623\\u0643\\u0628\\u0631 \\u0639\\u062f\\u062f \\u0645\\u0646 \\u0627\\u0644\\u062a\\u0641\\u0627\\u0635\\u064a\\u0644 \\u0627\\u0644\\u062a\\u064a \\u064a\\u0631\\u064a\\u062f\\u0647\\u0627 \\u0641\\u064a \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u062d\\u062a\\u0649 \\u0646\\u062a\\u062c\\u0646\\u0651\\u0628 \\u062a\\u0643\\u0631\\u0627\\u0631 \\u0627\\u0644\\u0623\\u0645\\u0631.<\\/li>\\r\\n\\t<li>\\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0641\\u0642\\u0629 \\u0627\\u0644\\u0646\\u0647\\u0627\\u0626\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0645\\u0639\\u0631\\u0648\\u0636 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u064a\\u062a\\u0645 \\u0646\\u0642\\u0644 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0628\\u0627\\u0644\\u0643\\u0627\\u0645\\u0644 \\u0645\\u0646 \\u0642\\u0633\\u0645 &quot;\\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645&quot; \\u0625\\u0644\\u0649 \\u0642\\u0633\\u0645 &quot;\\u0627\\u0644\\u062a\\u0643\\u0648\\u064a\\u062f \\u0648\\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u0629&quot; \\u0648\\u0639\\u0644\\u064a\\u0647 \\u0641\\u0644\\u0627 \\u064a\\u062d\\u0642 \\u0644\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0623\\u0646 \\u064a\\u0642\\u0648\\u0645 \\u0628\\u0637\\u0644\\u0628 \\u0623\\u064a \\u062a\\u0639\\u062f\\u064a\\u0644\\u0627\\u062a \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0633\\u0644\\u0651\\u0645 \\u0644\\u0647 -\\u0645\\u0639 \\u062d\\u0641\\u0638 \\u0627\\u0644\\u0623\\u0644\\u0642\\u0627\\u0628- \\u0645\\u0633\\u0628\\u0642\\u064b\\u0627.<\\/li>\\r\\n\\t<li>\\u062a\\u0644\\u062a\\u0632\\u0645 \\u0646\\u0627\\u0645\\u064a \\u0628\\u0627\\u0644\\u0639\\u0642\\u062f \\u0623\\u0648 \\u0627\\u0644\\u0627\\u062a\\u0641\\u0627\\u0642 \\u0627\\u0644\\u0645\\u0628\\u0631\\u0645 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0639\\u0645\\u0644\\u060c \\u0648\\u0639\\u0644\\u064a\\u0647 \\u0641\\u064a\\u062d\\u0642 \\u0644\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0637\\u0644\\u0628 \\u0627\\u0644\\u0645\\u0632\\u064a\\u062f \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0645\\u064a\\u0632\\u0627\\u062a\\/\\u0627\\u0644\\u062e\\u064a\\u0627\\u0631\\u0627\\u062a \\u0641\\u064a \\u0627\\u0644\\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0645\\u0637\\u0644\\u0648\\u0628 \\u062a\\u0635\\u0645\\u064a\\u0645\\u0647\\u060c \\u0644\\u0643\\u0646 \\u064a\\u062a\\u0645 \\u0625\\u0636\\u0627\\u0641\\u0629 \\u0645\\u0642\\u0627\\u0628\\u0644 \\u0645\\u0627\\u062f\\u064a \\u0645\\u062a\\u0641\\u0651\\u0642 \\u0639\\u0644\\u064a\\u0647 \\u0644\\u0644\\u0625\\u0636\\u0627\\u0641\\u0627\\u062a \\u0627\\u0644\\u0645\\u0637\\u0644\\u0648\\u0628\\u0629 \\u0645\\u0646 \\u0642\\u0650\\u0628\\u064e\\u0644 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644.<\\/li>\\r\\n\\t<li>\\u062a\\u0644\\u062a\\u0632\\u0645 \\u0646\\u0627\\u0645\\u064a \\u0628\\u0627\\u0644\\u0645\\u062f\\u0651\\u0629 \\u0627\\u0644\\u0645\\u062a\\u0641\\u0642 \\u0639\\u0644\\u064a\\u0647\\u0627 \\u0644\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0625\\u0644\\u0627 \\u0623\\u0646 \\u0627\\u0644\\u0645\\u062f\\u0629 \\u0627\\u0644\\u0645\\u062a\\u0641\\u0642 \\u0639\\u0644\\u064a\\u0647\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0628\\u062f\\u0627\\u064a\\u0629 \\u0644\\u0627 \\u062a\\u0634\\u0645\\u0644 \\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0627\\u062a \\u0627\\u0644\\u062a\\u064a \\u0642\\u062f \\u064a\\u0637\\u0644\\u0628\\u0647\\u0627 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644\\u060c \\u0648\\u062a\\u062d\\u062f\\u062f \\u0645\\u062f\\u0629 \\u062a\\u0646\\u0641\\u064a\\u0630 \\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0627\\u062a\\/\\u0627\\u0644\\u062a\\u0639\\u062f\\u064a\\u0644\\u0627\\u062a \\u0628\\u0627\\u0644\\u0627\\u062a\\u0641\\u0627\\u0642 \\u0645\\u0639 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644\\u060c \\u0648\\u062a\\u0628\\u062f\\u0623 \\u0645\\u062f\\u0629 \\u062a\\u0646\\u0641\\u064a\\u0630 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0628\\u0634\\u0643\\u0644 \\u0631\\u0633\\u0645\\u064a \\u0628\\u062f\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u064a\\u0648\\u0645 \\u0627\\u0644\\u0630\\u064a \\u064a\\u062f\\u0641\\u0639 \\u0641\\u064a\\u0647 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0627\\u0644\\u062f\\u0641\\u0639\\u0629 \\u0627\\u0644\\u0623\\u0648\\u0644\\u0649 \\u0645\\u0646 \\u0642\\u064a\\u0645\\u0629 \\u0627\\u0644\\u0639\\u0645\\u0644\\u060c \\u0644\\u0627 \\u062a\\u064f\\u0645\\u0627\\u0646\\u0639 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0641\\u064a \\u0625\\u0632\\u0627\\u0644\\u0629 \\u062d\\u0642\\u0648\\u0642 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u062a\\u064a \\u062a\\u062d\\u0645\\u0644 \\u0627\\u0633\\u0645 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 + \\u0631\\u0627\\u0628\\u0637\\u0647\\u0627 \\u0648\\u064a\\u062a\\u0645 \\u062a\\u062d\\u062f\\u064a\\u062f \\u0642\\u064a\\u0645\\u0629 \\u0625\\u0632\\u0627\\u0644\\u0629 \\u062d\\u0642\\u0648\\u0642 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0627\\u0644\\u0627\\u062a\\u0641\\u0627\\u0642 \\u0648\\u0642\\u062f \\u062a\\u0635\\u0644 \\u0625\\u0644\\u0649 50% \\u0645\\u0646 \\u0642\\u064a\\u0645\\u0629 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0627\\u0644\\u0625\\u062c\\u0645\\u0627\\u0644\\u064a.<\\/li>\\r\\n\\t<li>\\u0644\\u0627 \\u064a\\u062d\\u0642 \\u0644\\u0644\\u0639\\u0645\\u064a\\u0644 \\u062d\\u0630\\u0641 \\u062d\\u0642\\u0648\\u0642 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0645\\u0646 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0623\\u0648 \\u062a\\u0637\\u0628\\u064a\\u0642 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0644 \\u062f\\u0648\\u0646 \\u0627\\u0644\\u0631\\u062c\\u0648\\u0639 \\u0648\\u0627\\u062e\\u0630 \\u0627\\u0644\\u0627\\u0630\\u0646 \\u0643\\u062a\\u0627\\u0628\\u064a\\u0627 \\u0645\\u0646 \\u0625\\u062f\\u0631\\u0629 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u060c \\u0648\\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u062e\\u0631\\u0642\\u0643\\u0645 \\u0644\\u0623\\u064a \\u0645\\u0646 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0623\\u062d\\u0643\\u0627\\u0645 \\u0633 \\u064a\\u0624\\u062f\\u064a \\u0647\\u0630\\u0627 \\u0628\\u0634\\u0643\\u0644 \\u062a\\u0644\\u0642\\u0627\\u0626\\u064a \\u0648\\u0641\\u0648\\u0631\\u064a \\u0625\\u0644\\u0649 \\u0625\\u0646\\u0647\\u0627\\u0621 \\u062a\\u0639\\u0627\\u0642\\u062f\\u0643\\u0645 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0627\\u0644\\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0627\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0623\\u0648 \\u062a\\u0637\\u0628\\u064a\\u0642 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0644 \\u0648\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0627\\u0644\\u0645\\u062d\\u062a\\u0648\\u064a\\u0627\\u062a \\u0644\\u0644\\u0628\\u064a\\u0639 \\u0623\\u0648 \\u0627\\u0644\\u0639\\u0631\\u0636 \\u0627\\u0644\\u0645\\u062c\\u0627\\u0646\\u064a \\u060c \\u062f\\u0648\\u0646 \\u0645\\u0633\\u0622\\u0644\\u0629 \\u0646\\u0627\\u0645\\u064a \\u0639\\u0646 \\u0623\\u064a \\u062d\\u0642\\u0648\\u0642 \\u062a\\u0630\\u0643\\u0631 \\u0645\\u0646 \\u0637\\u0631\\u0641\\u0643\\u0645 \\u0646\\u0647\\u0627\\u0626\\u064a\\u0627\\u064b<\\/li>\\r\\n<\\/ol>\\r\\n\\r\\n<h3>4.&nbsp;\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0637\\u0648\\u064a\\u0631<\\/h3>\\r\\n\\r\\n<ol>\\r\\n\\t<li>\\u062a\\u0646\\u0642\\u0633\\u0645 \\u0625\\u0644\\u0649: \\u062e\\u062f\\u0645\\u0627\\u062a \\u0628\\u0631\\u0645\\u062c\\u0629 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0642\\u0639\\u060c \\u062e\\u062f\\u0645\\u0627\\u062a \\u0628\\u0631\\u0645\\u062c\\u0629 \\u0627\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642\\u0627\\u062a \\u0644\\u0623\\u0646\\u0638\\u0645\\u0629 Android \\u0648 iOS \\u0648\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0648\\u0648\\u0631\\u062f\\u0628\\u0631\\u0633<\\/li>\\r\\n\\t<li>\\u0639\\u0644\\u0649 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u0643\\u0627\\u0641\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0648\\u0627\\u0644\\u0625\\u0631\\u0634\\u0627\\u062f\\u0627\\u062a \\u0627\\u0644\\u0644\\u0627\\u0632\\u0645\\u0629 \\u0644\\u0644\\u062e\\u0631\\u0648\\u062c \\u0628\\u0623\\u0639\\u0644\\u0649 \\u062c\\u0648\\u062f\\u0629 \\u0645\\u0645\\u0643\\u0646\\u0629\\u060c \\u0643\\u0645\\u0627 \\u0644\\u0627 \\u064a\\u062d\\u0642 \\u0644\\u0647 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0627\\u064a\\u0629 \\u0639\\u064a\\u0646\\u0627\\u062a \\u0628\\u0631\\u0645\\u062c\\u064a\\u0629 \\u064a\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644\\u0647\\u0627 \\u0625\\u0644\\u064a\\u0647.<\\/li>\\r\\n\\t<li>\\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0648\\u062c\\u0648\\u062f \\u062a\\u0639\\u062f\\u064a\\u0644\\u0627\\u062a \\u0625\\u0636\\u0627\\u0641\\u064a\\u0629 \\u063a\\u064a\\u0631 \\u0627\\u0644\\u0645\\u062a\\u0641\\u0642 \\u0639\\u0644\\u064a\\u0647\\u0627 \\u0633\\u0627\\u0628\\u0642\\u064b\\u0627 \\u0644\\u0627 \\u064a\\u062c\\u0628 \\u0623\\u0646 \\u062a\\u062a\\u0639\\u0627\\u0631\\u0636 \\u0645\\u0639 \\u0627\\u0644\\u0623\\u0633\\u0627\\u0633 \\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u064a \\u0644\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642 \\u0648\\u0643\\u0630\\u0644\\u0643 \\u062a\\u062d\\u062a\\u0641\\u0638 \\u0627\\u0644\\u062a\\u0639\\u062f\\u064a\\u0644\\u0627\\u062a\\/\\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0627\\u062a \\u0628\\u0627\\u0633\\u062a\\u0642\\u0644\\u0627\\u0644\\u064a\\u062a\\u0647\\u0627 \\u0639\\u0646 \\u0645\\u062f\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0633\\u0627\\u0628\\u0642\\u064b\\u0627 \\u0648\\u0643\\u0630\\u0644\\u0643 \\u062a\\u0643\\u0644\\u0641\\u062a\\u0647\\u060c \\u0648\\u064a\\u062a\\u0645 \\u062a\\u062d\\u062f\\u064a\\u062f \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0645\\u062a\\u063a\\u064a\\u0631\\u0627\\u062a \\u0628\\u0627\\u0644\\u0625\\u062a\\u0641\\u0627\\u0642.<\\/li>\\r\\n\\t<li>\\u064a\\u062d\\u0642 \\u0644\\u0634\\u0631\\u0643\\u0629 \\u0646\\u0627\\u0645\\u064a \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0644\\u063a\\u0629 \\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u0629 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u0629 \\u0648\\u0637\\u0631\\u064a\\u0642\\u0629 \\u0627\\u0644\\u062a\\u0646\\u0641\\u064a\\u0630 \\u0627\\u0644\\u0623\\u0645\\u062b\\u0644 \\u0644\\u062a\\u0646\\u0641\\u064a\\u0630 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0645\\u0627 \\u0644\\u0645 \\u064a\\u062a\\u0645 \\u0627\\u0644\\u0627\\u062a\\u0641\\u0627\\u0642 \\u0645\\u0639 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0639\\u0644\\u0649 \\u063a\\u064a\\u0631 \\u0630\\u0644\\u0643\\u060c \\u0643\\u0645\\u0627 \\u062a\\u062a\\u0639\\u0647\\u0651\\u062f \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0639\\u0644\\u0649 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0623\\u062d\\u062f\\u062b \\u0623\\u0633\\u0627\\u0644\\u064a\\u0628 \\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0637\\u0648\\u064a\\u0631 \\u0627\\u0644\\u0645\\u064f\\u0646\\u0627\\u0633\\u0628\\u0629 \\u0644\\u0644\\u0648\\u064a\\u0628 \\u0627\\u0644\\u062d\\u062f\\u064a\\u062b\\u060c \\u0643\\u0630\\u0644\\u0643 \\u062a\\u062a\\u0639\\u0647\\u0651\\u062f \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0628\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0628\\u0631\\u0645\\u062c\\u064a\\u0651\\u0627\\u062a \\u0622\\u0645\\u0646\\u0629 \\u062a\\u0645\\u0627\\u0645\\u0627\\u064b.<\\/li>\\r\\n<\\/ol>\\r\\n\\r\\n<h3>5.&nbsp;.\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0623\\u0631\\u0634\\u0641\\u0629 \\u0648\\u0627\\u0644\\u062f\\u0639\\u0645 \\u0627\\u0644\\u0641\\u0646\\u064a \\u0648\\u0627\\u0644\\u062a\\u0633\\u0648\\u064a\\u0642 \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a<\\/h3>\\r\\n\\r\\n<ol>\\r\\n\\t<li>\\u064a\\u064f\\u0644\\u0632\\u0645 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0628\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0643\\u0627\\u0641\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0648\\u0627\\u0644\\u062a\\u0641\\u0627\\u0635\\u064a\\u0644 \\u0627\\u0644\\u062e\\u0627\\u0635\\u0629 \\u0628\\u0637\\u0644\\u0628\\u0647 \\u0644\\u0643\\u064a \\u064a\\u062a\\u0645 \\u062a\\u0646\\u0641\\u064a\\u0630 \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0627\\u062a \\u0639\\u0644\\u0649 \\u0623\\u0643\\u0645\\u0644 \\u0648\\u062c\\u0647 \\u0648\\u064a\\u0634\\u0645\\u0644 \\u0630\\u0644\\u0643 \\u0627\\u0644\\u0623\\u0647\\u062f\\u0627\\u0641\\u060c \\u0627\\u0644\\u0637\\u0631\\u0642 \\u0627\\u0644\\u0645\\u0641\\u0636\\u0644\\u0629 \\u0644\\u0644\\u062a\\u0646\\u0641\\u064a\\u0630 \\u0648\\u0623\\u064a\\u0636\\u064b\\u0627 \\u062a\\u062d\\u062f\\u064a\\u062f \\u0646\\u0638\\u0627\\u0645 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0648\\u0627\\u0644\\u062a\\u0646\\u0641\\u064a\\u0630.<\\/li>\\r\\n\\t<li>\\u064a\\u064f\\u0641\\u062a\\u0631\\u0636 \\u0623\\u0646 \\u064a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0639\\u0644\\u0649 \\u0639\\u0644\\u0645 \\u0628\\u0623\\u0646 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u062a\\u0633\\u0648\\u064a\\u0642 \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0648\\u0627\\u0644\\u0623\\u0631\\u0634\\u0641\\u0629 (SEO) \\u062a\\u0623\\u062e\\u0630 \\u0628\\u0639\\u0636 \\u0627\\u0644\\u0648\\u0642\\u062a \\u0644\\u062a\\u0638\\u0647\\u0631 \\u0646\\u062a\\u0627\\u0626\\u062c\\u0647\\u0627 \\u0648\\u0642\\u062f \\u062a\\u0635\\u0644 \\u0641\\u062a\\u0631\\u0629 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0625\\u0644\\u0649 \\u0639\\u062f\\u0629 \\u0623\\u0634\\u0647\\u0631\\u060c \\u0648\\u0639\\u0644\\u064a\\u0647 \\u062a\\u062a\\u0639\\u0647\\u062f \\u0646\\u0627\\u0645\\u064a \\u0628\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0648\\u0627\\u0641\\u064a\\u0629 \\u0628\\u0645\\u0627 \\u062a\\u0645 \\u062a\\u0646\\u0641\\u064a\\u0630\\u0647 \\u0641\\u0639\\u0644\\u064a\\u064b\\u0627 \\u0648\\u0628\\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c \\u0627\\u0644\\u062a\\u064a \\u062a\\u0645 \\u062a\\u062d\\u0642\\u064a\\u0642\\u0647\\u0627 \\u0623\\u0648\\u0644\\u064b\\u0627\\u060c \\u062b\\u0627\\u0646\\u064a\\u064b\\u0627 \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0627\\u0644\\u0641\\u0639\\u0627\\u0644 \\u0645\\u0639 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0628\\u0634\\u0643\\u0644 \\u064a\\u0648\\u0645\\u064a\\/\\u0627\\u0633\\u0628\\u0648\\u0639\\u064a \\u0644\\u064a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0641\\u064a \\u0627\\u0644\\u0635\\u0648\\u0631\\u0629 \\u0648\\u0643\\u0630\\u0644\\u0643 \\u0646\\u062d\\u0646.<\\/li>\\r\\n<\\/ol>\\r\\n\\r\\n<h3>6.&nbsp;\\u0627\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644\\u0627\\u062a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629<\\/h3>\\r\\n\\r\\n<ol>\\r\\n\\t<li>\\u064a\\u062a\\u0641\\u0636\\u0651\\u0644 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0628\\u062f\\u0641\\u0639 \\u0646\\u0635\\u0641 \\u0627\\u0644\\u0645\\u0628\\u0644\\u063a \\u0627\\u0644\\u0645\\u062a\\u0641\\u0642 \\u0639\\u0644\\u064a\\u0647 \\u0628\\u0639\\u062f \\u0627\\u0644\\u0625\\u062a\\u0641\\u0627\\u0642 \\u0628\\u0627\\u0644\\u0646\\u0633\\u0628\\u0629 \\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0623\\u0631\\u0634\\u0641\\u0629\\u060c \\u0627\\u0644\\u062f\\u0639\\u0645 \\u0627\\u0644\\u0641\\u0646\\u064a \\u0648\\u0627\\u0644\\u062a\\u0633\\u0648\\u064a\\u0642 \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a\\u060c \\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u0629\\u060c \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u062c\\u0631\\u0627\\u0641\\u064a\\u0643 \\u0648\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0637\\u0628\\u0648\\u0639\\u0627\\u062a.<\\/li>\\r\\n\\t<li>\\u0634\\u0631\\u0643\\u0629 \\u0646\\u0627\\u0645\\u064a \\u062a\\u062e\\u0644\\u064a \\u0645\\u0633\\u0624\\u0648\\u0644\\u064a\\u062a\\u0647\\u0627 \\u062a\\u0645\\u0627\\u0645\\u0627\\u064b \\u0639\\u0646 \\u0623\\u064a \\u062a\\u0639\\u0627\\u0645\\u0644 \\u064a\\u062d\\u062f\\u062b \\u0628\\u0627\\u0633\\u0645 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u062e\\u0627\\u0631\\u062c \\u0625\\u0637\\u0627\\u0631 \\u0642\\u0646\\u0648\\u0627\\u062a \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0627\\u0644\\u0631\\u0633\\u0645\\u064a\\u0629 \\u0627\\u0644\\u062e\\u0627\\u0635\\u0629 \\u0628\\u0647\\u0627 \\u0648\\u0645\\u0646\\u0647\\u0627 \\u0646\\u0638\\u0627\\u0645 \\u0627\\u0644\\u062a\\u0630\\u0627\\u0643\\u0631 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0627\\u0644\\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0631\\u0633\\u0645\\u064a\\u060c \\u0635\\u0641\\u062d\\u0629 \\u0625\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627 \\u0648\\u062d\\u0633\\u0627\\u0628\\u0627\\u062a\\u0646\\u0627 \\u0648\\u0623\\u0631\\u0642\\u0627\\u0645 \\u0647\\u0648\\u0627\\u062a\\u0641\\u0646\\u0627 \\u0627\\u0644\\u0631\\u0633\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062f\\u0631\\u062c\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0631\\u0633\\u0645\\u064a.<\\/li>\\r\\n\\t<li>\\u0641\\u0649 \\u062d\\u0627\\u0644\\u0629 \\u0639\\u062f\\u0645 \\u0627\\u0644\\u0631\\u062f \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0628\\u0623\\u0639\\u062a\\u0645\\u0627\\u062f \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0623\\u0648 \\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u0629 \\u0644\\u0641\\u062a\\u0631\\u0629 \\u062a\\u062a\\u062c\\u0627\\u0648\\u0632 45 \\u064a\\u0648\\u0645 \\u064a\\u062d\\u0642 \\u0644\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0641\\u0633\\u062e \\u0627\\u0644\\u0639\\u0642\\u062f \\u062a\\u0644\\u0642\\u0627\\u0626\\u064a\\u0627\\u064b \\u062f\\u0648\\u0646 \\u0627\\u0644\\u0631\\u062c\\u0648\\u0639 \\u0644\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0645\\u0639 \\u0639\\u062f\\u0645 \\u0645\\u0637\\u0627\\u0644\\u0628\\u0629 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0628\\u0623\\u0649 \\u0645\\u0633\\u062a\\u062d\\u0642\\u0627\\u062a \\u0645\\u0627\\u0644\\u064a\\u0629.<\\/li>\\r\\n\\t<li>\\u0644\\u0627 \\u064a\\u0641\\u062a\\u0631\\u0636 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0623\\u0646 \\u064a\\u0642\\u0648\\u0645 \\u0628\\u062a\\u062d\\u0648\\u064a\\u0644 \\u0623\\u064a \\u0645\\u0628\\u0627\\u0644\\u063a \\u0645\\u0627\\u0644\\u064a\\u0629 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0627\\u062a\\u0641\\u0627\\u0642 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0628\\u0634\\u0643\\u0644 \\u0643\\u0627\\u0645\\u0644\\u060c \\u0643\\u0645\\u0627 \\u0644\\u0627 \\u062a\\u062a\\u062d\\u0645\\u0644 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0623\\u064a \\u0623\\u062e\\u0637\\u0627\\u0621 \\u0641\\u064a \\u0627\\u0644\\u062a\\u062d\\u0648\\u064a\\u0644 \\u062a\\u062d\\u062f\\u062b \\u0645\\u0646 \\u062c\\u0647\\u0629 \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644.<\\/li>\\r\\n<\\/ol>\",\"en\":\"<p><strong>1. At first<\\/strong><br \\/>\\r\\nThis agreement defines the basis for dealing between clients and Nami, the rights and duties of each party, and by dealing with Nami, you agree to this agreement.<\\/p>\\r\\n\\r\\n<p><strong>2. Customer Rights<\\/strong><br \\/>\\r\\nNami pledges to provide high-quality and completely exclusive products and services to its customers. It also pledges to maintain the norms of electronic transactions and guarantee all rights of customers. The company also pledges to abide by all terms of contracts or agreements concluded between it and customers.<br \\/>\\r\\nThe company is committed to providing services and products with the agreed specifications or listed on the pages of its official website or its official accounts on social networking sites, unless otherwise agreed. If there is a good reason first, and in the case of the full approval of the customer, secondly.<br \\/>\\r\\nNami Company pledges to provide professional technical support for all its products and services, whether they are ready or implemented at the request of the customer, and the company pledges to maintain customer satisfaction and a good relationship by all possible means.<br \\/>\\r\\n3. Design services<br \\/>\\r\\nDivided into: graphic design services, web design services and publications design services.<br \\/>\\r\\nNami Company does not implement designs that contain images of women or any images that are contrary to the teachings of Islamic law and the teachings of the true religion, and the company has the right to reject requests that are inappropriate to see and work with or without giving reasons.<br \\/>\\r\\nA developing client has the right to request the design in the appropriate colors and with the appropriate visualization for him, but he does not have the right to request &ldquo;imitation&rdquo; of an already published design and subject to proprietary rights, but there is nothing wrong with being inspired, and the client is also not entitled to use the examples that are presented to him before the delivery of the final design Unless we state otherwise.<br \\/>\\r\\nThe customer has the right to object to the design and demand that it be re-implemented three times with convincing reasons, provided that Nami undertakes to use the latest design methods globally and to provide a high-quality product. To avoid a repetition.<br \\/>\\r\\nIn the event of final approval of the site design presented to the client, the entire work will be transferred from the &ldquo;Design&rdquo; section to the &ldquo;Coding and Programming&rdquo; section, and accordingly the client is not entitled to request any modifications to the design handed to him - with the titles reserved - in advance.<br \\/>\\r\\nNami is committed to the contract or agreement concluded before work, and accordingly the customer has the right to request more features\\/options in the site to be designed, but an agreed fee is added for the additions required by the customer.<br \\/>\\r\\nNami is committed to the agreed period for the delivery of the work, but the initially agreed period does not include the additions that the client may request, and the implementation period for the additions\\/modifications is determined in agreement with the client, and the work execution period begins officially starting from the day the client pays the first payment of the value of the work The company does not object to removing the design rights that bear the name of the company + its link, and the value of removing the design rights is determined by agreement and may reach 50% of the value of the total work.<br \\/>\\r\\nThe customer is not entitled to delete the company&rsquo;s rights from the website or mobile application without consulting and obtaining written permission from the company&rsquo;s management. , without any question about any rights mentioned by you at all<br \\/>\\r\\n4. Programming and development services<br \\/>\\r\\nDivided into: Website programming services, application programming services for Android and iOS systems, and WordPress services<br \\/>\\r\\nThe customer must provide all the information and instructions necessary to produce the highest possible quality, and he is not entitled to use any software samples sent to him.<br \\/>\\r\\nIn the case of additional modifications not previously agreed upon, they should not conflict with the programmatic basis of the application and the modifications \\/ additions retain their independence from the previously specified project duration and cost, and these variables are determined by agreement.<br \\/>\\r\\nNami has the right to choose the appropriate programming language and the optimal implementation method for the implementation of the project unless otherwise agreed with the client. The company also undertakes to use the latest programming and development methods appropriate for the modern web. The company also pledges to provide completely secure software.<br \\/>\\r\\n5. Archiving services, technical support and e-marketing<br \\/>\\r\\nThe client is obligated to provide all the information and details of his request in order for the operations to be carried out to the fullest extent, including the objectives, preferred methods of implementation and also defining the work and implementation system.<br \\/>\\r\\nThe customer is supposed to be aware that the e-marketing and archiving (SEO) services take some time to show their results and the work period may reach several months, and accordingly Nami undertakes to provide adequate reports on what has actually been implemented and the results achieved first, and secondly, effective communication with the customer on a daily basis Weekly to be the client in the picture and so are we.<br \\/>\\r\\n<strong>6. Financial Transactions<\\/strong><br \\/>\\r\\nThe customer is kindly requested to pay half of the agreed amount after the agreement for archiving services, technical support, e-marketing, programming, graphic design and publications design.<br \\/>\\r\\nNami Company completely disclaims responsibility for any dealings that occur on behalf of the company outside the framework of its official communication channels, including the ticket system of the official website, the contact us page, our accounts and our official phone numbers listed on the official website.<br \\/>\\r\\nIn the event that the customer does not respond by approving the design or programming for a period exceeding 45 days, the company has the right to automatically terminate the contract without referring to the customer, with the company not claiming any financial dues.<br \\/>\\r\\nThe client is not supposed to transfer any amounts of money before agreeing on the project in full, and the company does not bear any errors in the transfer that occur from one side.<\\/p>\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ar', NULL, NULL, 1, '2022-10-02 13:09:35', '2022-10-05 05:56:39', '{\"ar\":\"\\u0634\\u0631\\u0643\\u0629 \\u0646\\u0627\\u0645\\u064a \\u0644\\u0644\\u062d\\u0644\\u0648\\u0644 \\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u064a\\u0629\",\"en\":\"Nami solutions company\"}', '{\"ar\":\"\\u0627\\u0628\\u062f\\u0623 \\u0627\\u0639\\u0645\\u0627\\u0644\\u0643 \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629\",\"en\":\"Start your business\"}', '{\"ar\":\"\\u0645\\u0624\\u0633\\u0633\\u0629 \\u0646\\u0627\\u0645\\u064a \\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648 \\u062a\\u0637\\u0648\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0642\\u0639 \\u0648 \\u062a\\u0637\\u0628\\u064a\\u0642\\u0627\\u062a \\u0627\\u0644\\u0647\\u0648\\u0627\\u062a\\u0641 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0644\\u0629 \\u0628\\u0646\\u0638\\u0627\\u0645\\u0649 \\u0627\\u0644\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0627\\u0644\\u0627\\u0646\\u062f\\u0631\\u0648\\u064a\\u062f \\u0648 \\u0627\\u0644 ios \\u062a\\u0642\\u062f\\u0645 \\u0627\\u0644\\u0645\\u0624\\u0633\\u0633\\u0629 \\u062d\\u0644\\u0648\\u0644 \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0627\\u0644\\u0645\\u062a\\u0643\\u0627\\u0645\\u0644\\u0629 \\u0644\\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0645\\u0624\\u0633\\u0633\\u0627\\u062a \\u0641\\u0649 \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645 \\u0648 \\u0644\\u062f\\u064a\\u0647\\u0627 \\u0642\\u0627\\u0639\\u062f\\u0629 \\u0639\\u0645\\u0644\\u0627\\u0621 \\u0636\\u062e\\u0645\\u0629 \\u0641\\u0649 \\u062c\\u0645\\u064a\\u0639 \\u062f\\u0648\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\",\"en\":\"Nami Foundation for design and development services for websites and mobile applications operating on the Android and iOS operating systems. The Foundation provides integrated web solutions to all institutions in the world and has a huge customer base in all countries of the world\"}');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='الاحصائيات فى الصفحة الرئيسة';

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `title`, `icon`, `number`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627\",\"en\":\"our clients\"}', 'fa-users', '77', '2022-09-04 08:24:27', '2022-09-19 22:04:49'),
(2, '{\"ar\":\"\\u0632\\u0648\\u0627\\u0631\\u0646\\u0627\",\"en\":\"our visitors\"}', 'fa-buildings', '812', '2022-09-04 08:24:27', '2022-09-04 08:24:27'),
(3, '{\"ar\":\"\\u062e\\u062f\\u0645\\u0629 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621\",\"en\":\"customers service\"}', 'fa-user-headset', '50', '2022-09-04 08:24:27', '2022-09-04 08:24:27'),
(4, '{\"ar\":\"\\u0639\\u0627\\u0645\\u0644 \\u0648\\u0639\\u0627\\u0645\\u0644\\u0629\",\"en\":\"worker\"}', 'fa-briefcase', '720', '2022-09-04 08:24:27', '2022-09-04 08:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'webbsite', '2022-05-21 07:00:39', '2022-05-21 07:00:39'),
(2, 'android', '2022-07-03 12:31:55', '2022-07-03 12:31:55'),
(3, 'ifone', '2022-05-21 07:00:39', '2022-05-21 07:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_iso` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_county` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'الاسم ',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'البريد الالكترونى unique',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_activation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `password_rest_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_link_expire` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_blocked` enum('blocked','not_blocked') COLLATE utf8mb4_unicode_ci DEFAULT 'not_blocked',
  `is_login` enum('connected','not_connected') COLLATE utf8mb4_unicode_ci DEFAULT 'not_connected',
  `logout_time` int(11) DEFAULT NULL,
  `software_type` enum('ios','android','web') COLLATE utf8mb4_unicode_ci DEFAULT 'web',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `firebase_tokens`
--
ALTER TABLE `firebase_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firebase_tokens_user_id_foreign` (`user_id`);

--
-- Indexes for table `frequently_questions`
--
ALTER TABLE `frequently_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_works`
--
ALTER TABLE `our_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_works_type`
--
ALTER TABLE `our_works_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firebase_tokens`
--
ALTER TABLE `firebase_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frequently_questions`
--
ALTER TABLE `frequently_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `our_works`
--
ALTER TABLE `our_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `our_works_type`
--
ALTER TABLE `our_works_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `firebase_tokens`
--
ALTER TABLE `firebase_tokens`
  ADD CONSTRAINT `firebase_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
