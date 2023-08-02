-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 07:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rowminds`
--

-- --------------------------------------------------------

--
-- Table structure for table `architectures`
--

CREATE TABLE `architectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_publish` enum('active','in-active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `architecture_pictures`
--

CREATE TABLE `architecture_pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `architecture_pictures`
--

INSERT INTO `architecture_pictures` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'upload/client/1772876681113528.jpg', '2023-07-30 16:55:57', '2023-07-30 16:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_publish` enum('active','in-active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `name`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 'upload/client/1772800544713616.jpg', 'Garrett Sharp', 'active', '2023-07-29 20:45:47', '2023-07-29 20:45:47'),
(2, 'upload/client/1772800700818958.jpg', 'Nasim Cooper', 'active', '2023-07-29 20:48:16', '2023-07-29 20:48:16'),
(3, 'upload/client/1772800712187544.jpg', 'asdasfcd fdv df', 'active', '2023-07-29 20:48:27', '2023-07-31 13:43:51'),
(4, 'upload/client/1772955426410090.jpg', 'new brand last', 'active', '2023-07-31 13:47:34', '2023-07-31 13:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `req` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_publish` enum('active','in-active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
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
(6, '2023_07_17_224726_create_sessions_table', 1),
(7, '2023_07_22_200658_create_sliders_table', 1),
(8, '2023_07_22_201142_create_testimonials_table', 1),
(9, '2023_07_26_200934_create_teams_table', 1),
(10, '2023_07_28_122104_create_brands_table', 1),
(11, '2023_07_28_125805_create_service_digitals_table', 1),
(12, '2023_07_30_171231_create_architecture_pictures_table', 2),
(13, '2023_07_30_171325_create_architectures_table', 2),
(14, '2023_07_30_220235_create_service_decorations_table', 3),
(15, '2023_07_31_230235_create_careers_table', 4);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_decorations`
--

CREATE TABLE `service_decorations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_decorations`
--

INSERT INTO `service_decorations` (`id`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Metallic gold-plated', 'Lighting has the power to transform a room. From the way it casts a glow to the way it looks, there is a reason designers call it the jewelry of a room. Furthermore, lighting is probably the most easily recognizable and instantly iconic piece you can invest on.\r\n\r\nDesigned in the 1950s by is amu Noguchi, these paper lanterns are seeing a resurgence this year, especially in hotel designs. Imagine it in its largest size making a bold statement in a space with ultra-high ceilings.', '2023-07-30 19:19:41', '2023-07-30 19:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `service_digitals`
--

CREATE TABLE `service_digitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_publish` enum('active','in-active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
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
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bO0Qcx3viDnhVKFmsJ6gmJti2NaUgplr8zYp4DTN', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiU1lQVktneVJQYmtrYXBKZ201NmVPNVNyUk9FZmw2T09lc0YyTUZYViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dC90ZXN0aW1vbmlhbHMvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkem5VQTk1RVBqZ2N6cWM4WUFNbmc1dU80RmNiMGI0RkVPNU9OUUZWL1E0TTlpenBhQ3MwUTIiO30=', 1690829771),
('cod6cxCBY3Ep9DKBCZlnNdKnsHH1cYwsyHABl8QO', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZUM3NmpUOFhaeUJHajU2M3dMdE11a213d0habXZ6UHZwUm5WZTN4bCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXJlZXIvY2FyZWVyLXBvc2l0aW9uIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkem5VQTk1RVBqZ2N6cWM4WUFNbmc1dU80RmNiMGI0RkVPNU9OUUZWL1E0TTlpenBhQ3MwUTIiO30=', 1690846570);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `name` varchar(100) NOT NULL,
  `value` text DEFAULT NULL,
  `shown_name_ar` varchar(150) NOT NULL,
  `shown_name_en` varchar(150) NOT NULL,
  `input_type` varchar(100) NOT NULL,
  `option_list` text DEFAULT NULL,
  `group_name` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `is_visible` enum('yes','no') NOT NULL DEFAULT 'yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`name`, `value`, `shown_name_ar`, `shown_name_en`, `input_type`, `option_list`, `group_name`, `sort`, `is_visible`, `created_at`, `updated_at`) VALUES
('about_testimonial', 'Feedbacks from our clients', 'التوصيات', 'testimonials title', 'text', NULL, 'about', 3, 'yes', NULL, '2023-07-31 15:54:49'),
('address', 'new el marg , cairo \r\negypt', 'العنوان', 'Address', 'textarea', NULL, 'contact', 3, 'yes', NULL, '2023-07-31 15:54:49'),
('button slider', '', 'زرار السليدر', 'button slider', 'text', NULL, 'admin', 2, 'yes', NULL, '2023-07-31 15:54:49'),
('call_button', 'Contact us', 'كول تيكست زرار', 'section contact button text', 'text', NULL, 'Home', 9, 'yes', NULL, '2023-07-31 15:54:49'),
('call_link', 'http://127.0.0.1:8000/contact', 'كول هوم لينك', 'section contact link', 'text', NULL, 'Home', 9, 'yes', NULL, '2023-07-31 15:54:49'),
('call_text', 'Start a New Project With Brook ?', 'سيكشن الاتصال تيكست', 'section contact text', 'text', NULL, 'Home', 8, 'yes', NULL, '2023-07-31 15:54:49'),
('company_name', 'rowminds', 'اسم الموقع', 'company name', 'text', NULL, 'admin', 1, 'yes', NULL, '2023-07-31 15:54:49'),
('contact_header', 'What new project ?', 'هيدر ', 'contact header', 'text', NULL, 'contact', 1, 'yes', NULL, '2023-07-31 15:54:49'),
('contact_title', 'call me at this contact', 'عنوان', 'contact title', 'text', NULL, 'contact', 2, 'yes', NULL, '2023-07-31 15:54:49'),
('desc_service', 'Add an extra-special touch to décor with this charming lantern that features sleek angles and a modern-edge design. A must-have for your house this holiday. Buy now to get a special discount for early bird order.', 'تفاصيل الخدمه', 'Description text of service', 'textarea', NULL, 'service', 11, 'yes', NULL, '2023-07-31 15:54:49'),
('email', 'mostafa.elnemr50@gmail.com', 'الميل', 'email', 'text', NULL, 'contact', 2, 'yes', NULL, '2023-07-31 15:54:49'),
('facebook', '', 'فيسبوك', 'facebook', 'text', NULL, 'contact', 2, 'yes', NULL, '2023-07-31 15:54:49'),
('header_brand', 'We are pleased to have many\r\ntrusted partners.', 'عنوان صفحه العملاء', 'header brand section', 'textarea', NULL, 'Client', 2, 'yes', NULL, '2023-07-31 15:54:50'),
('header_service', 'Bringing People and Homes\r\nTogether for Over 50 Years', 'هيدر الخدمه', 'header text of service', 'textarea', NULL, 'service', 9, 'yes', NULL, '2023-07-31 15:54:50'),
('instagram', '', 'انستجرام', 'instagram', 'text', NULL, 'contact', 4, 'yes', NULL, '2023-07-31 15:54:50'),
('linked', '', 'لينكيد', 'linked-in', 'text', NULL, 'contact', 3, 'yes', NULL, '2023-07-31 15:54:50'),
('phone', '01124253350', 'رقم التليفون', 'phone number', 'text', NULL, 'contact', 2, 'yes', NULL, '2023-07-31 15:54:50'),
('picture_service', 'upload/service/1772884041151370.jpg', 'صورة الخدمه', 'picture of service', 'image', NULL, 'service', 8, 'yes', NULL, '2023-07-30 18:52:56'),
('site_logo', 'upload/logo/1772883218432235.png', 'لوجو الموقع', 'site logo', 'image', NULL, 'Home', 1, 'yes', NULL, '2023-07-30 18:39:51'),
('slider_button', 'Explore Here', 'زرار السليدر', 'slider button text', 'text', NULL, 'Home', 1, 'yes', NULL, '2023-07-31 15:54:50'),
('slider_link', 'https://github.com/mostafaelneemr/medical-project/blob/master/app/Http/Controllers/admin/about/AboutSliderController.php', 'لينك السليدر', 'slider button link', 'text', NULL, 'Home', 2, 'yes', NULL, '2023-07-31 15:54:50'),
('system_path', '', 'مسار الموقع', 'system path', 'url', NULL, 'admin', 10, 'yes', NULL, '2023-07-31 15:54:50'),
('title', '', 'العنوان', 'tilte', 'text', '', 'about', 1, 'yes', NULL, '2023-07-31 15:54:50'),
('title_brand', 'Trusted Clients', 'عنوان الصفحه العملاء', 'title brand section', 'text', NULL, 'Client', 1, 'yes', NULL, '2023-07-31 15:54:50'),
('title_service', 'Home decoration.', 'عنوان للخدمه', 'title text of service', 'text', NULL, 'service', 10, 'yes', NULL, '2023-07-31 15:54:50'),
('title_team', 'The A-team of awesomeness & creative people', 'عنوان الفريق ', 'title about team', 'text', NULL, 'about', 4, 'yes', NULL, '2023-07-31 15:54:50'),
('twitter', '', 'تويتر', 'twitter', 'text', NULL, 'contact', 3, 'yes', NULL, '2023-07-31 15:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` char(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_type` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_publish` enum('active','in-active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `sub_title`, `desc`, `slider_type`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 'upload/home/1772798706902791.jpg', 'Nesciunt harum minu', 'Sed ut dolore non es', 'Laboriosam quis qui', 'home', 'active', '2023-07-29 20:16:35', '2023-07-29 20:16:35'),
(2, 'upload/client/1772955104328945.jpg', 'client slider test', NULL, '.', 'client', 'active', '2023-07-31 13:37:21', '2023-07-31 14:16:14'),
(3, 'upload/contact/1772956683678618.jpg', 'new contact slider', NULL, NULL, 'contact', 'active', '2023-07-31 14:05:16', '2023-07-31 14:07:33'),
(4, 'upload/about/1772957007466276.jpg', 'Nostrud incididunt', NULL, NULL, 'about', 'active', '2023-07-31 14:12:42', '2023-07-31 15:04:54'),
(5, 'upload/service/1772976246214708.jpg', 'slider section', NULL, NULL, 'career', 'active', '2023-07-31 19:18:29', '2023-07-31 19:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` char(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_publish` enum('active','in-active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `name`, `title`, `facebook`, `twitter`, `instagram`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 'upload/about/1772961483212292.jpg', 'Oscar Franks', 'manager', 'https://www.facebook.com/', 'https://twitter.com/home', 'https://www.instagram.com/', 'active', '2023-07-31 15:17:36', '2023-07-31 15:23:50'),
(2, 'upload/about/1772961492273412.jpg', 'Sarah Hawkins', 'Ut quia at eos elit', 'https://www.facebook.com/', 'https://twitter.com/home', 'https://www.instagram.com/', 'active', '2023-07-31 15:18:05', '2023-07-31 15:23:59'),
(3, 'upload/about/1772961499979482.jpg', 'amani hefnawi', 'bussiness development', 'https://www.facebook.com/', 'https://twitter.com/home', 'https://www.instagram.com/', 'active', '2023-07-31 15:18:59', '2023-07-31 15:24:06'),
(4, 'upload/about/1772961509686870.jpg', 'Bernard Salazar', 'Accusamus in soluta', 'A perspiciatis dolo', 'Aut rerum minima nis', 'Rem aperiam est pers', 'active', '2023-07-31 15:19:13', '2023-07-31 15:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` char(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_publish` enum('active','in-active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `title`, `desc`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 'upload/about/1772797599701321.jpg', 'Tara Velazquez', 'Optio blanditiis en', 'Optio blanditiis en', 'active', '2023-07-29 19:41:56', '2023-07-29 20:01:55'),
(2, 'upload/about/1772797612785516.jpg', 'Tara Velazquez', 'Optio blanditiis en', 'Optio blanditiis en', 'active', '2023-07-29 19:42:18', '2023-07-29 19:59:11'),
(3, 'upload/about/1772975710745640.jpg', 'mostafa elnemrs', 'web developers', 'web developers', 'active', '2023-07-31 19:02:58', '2023-07-31 19:09:59');

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
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'mostafa mahmoud', 'mostafa@mail.com', NULL, '$2y$10$znUA95EPjgczqc8YAMng5uO4Fcb0b4FEO5ONQFV/Q4M9izpaCs0Q2', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-29 19:40:56', '2023-07-29 19:40:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `architectures`
--
ALTER TABLE `architectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `architecture_pictures`
--
ALTER TABLE `architecture_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `service_decorations`
--
ALTER TABLE `service_decorations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_digitals`
--
ALTER TABLE `service_digitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `architectures`
--
ALTER TABLE `architectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `architecture_pictures`
--
ALTER TABLE `architecture_pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_decorations`
--
ALTER TABLE `service_decorations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_digitals`
--
ALTER TABLE `service_digitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
