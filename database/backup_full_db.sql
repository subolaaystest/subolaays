-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2022 at 12:37 PM
-- Server version: 10.6.8-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subolaaystest_sysdb20202`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `image`, `mobile`, `password`, `remember_token`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'إدارة النظام', 'm@gmail.com', NULL, '0597116675', '$2y$10$lttzFOA/YzD8CAbW7VvHOeYjtp69eAOjpyCl1sItzBUR1dHHt3Oz6', 'dhMzKkLCGeExQeY20yvfbUSP1uRBKZVzvAWA5IZlyd0Xr3o8tpxLJRQpNrCr', 'active', NULL, '2021-01-02 12:48:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `type` enum('main','sub1','sub2') DEFAULT NULL,
  `image` varchar(300) NOT NULL,
  `url` varchar(300) DEFAULT NULL,
  `status` enum('active','not_active') NOT NULL,
  `visit` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `type`, `image`, `url`, `status`, `visit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'main', 'home-slide-1.png', '#', 'active', 0, '2022-03-27 19:54:01', NULL, NULL),
(2, 'main', 'home-slide-1.png', '#', 'active', 0, '2022-03-27 19:54:01', NULL, NULL),
(3, 'sub1', 'img-1.png', '', 'active', 0, '2022-03-27 19:54:01', NULL, NULL),
(4, 'sub2', 'img-1.png', '', 'active', 0, '2022-03-27 19:54:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ad_translations`
--

CREATE TABLE `ad_translations` (
  `id` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `locale` varchar(30) NOT NULL,
  `title` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `details` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_translations`
--

INSERT INTO `ad_translations` (`id`, `ad_id`, `locale`, `title`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'ad', 'ad', NULL, NULL, NULL),
(2, 1, 'ar', 'ad', 'ad', NULL, NULL, NULL),
(3, 2, 'en', 'ad', 'ad', NULL, NULL, NULL),
(4, 2, 'ar', 'ad', 'ad', NULL, NULL, NULL),
(5, 3, 'en', 'ad', 'ad', NULL, NULL, NULL),
(6, 3, 'ar', 'ad', 'ad', NULL, NULL, NULL),
(7, 4, 'en', 'ad', 'ad', NULL, NULL, NULL),
(8, 4, 'ar', 'ad', 'ad', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` enum('local','international') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'local',
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'local', 'active', '2021-12-04 08:18:45', NULL, NULL),
(2, 'local', 'active', '2021-12-04 08:18:45', NULL, NULL),
(3, 'local', 'active', '2021-12-04 08:18:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bank_translations`
--

CREATE TABLE `bank_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `bank_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_translations`
--

INSERT INTO `bank_translations` (`id`, `bank_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'بنك الراجحي', '2021-12-04 08:19:12', NULL, NULL),
(2, 1, 'ar', 'بنك الراجحي', '2021-12-04 08:19:12', NULL, NULL),
(3, 2, 'en', 'بنك القاهرة', '2021-12-04 08:19:12', NULL, NULL),
(4, 2, 'ar', 'بنك القاهرة', '2021-12-04 08:19:12', NULL, NULL),
(5, 3, 'en', 'بنك البلاد', '2021-12-04 08:19:12', NULL, NULL),
(6, 3, 'ar', 'بنك البلاد', '2021-12-04 08:19:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `views_count` int(11) NOT NULL DEFAULT 0,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active' COMMENT 'active/not_active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `details` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` int(11) NOT NULL,
  `rank_id` int(11) DEFAULT NULL,
  `buyer_category_id` int(11) DEFAULT NULL,
  `orders_count` int(11) NOT NULL DEFAULT 0,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` int(1) NOT NULL DEFAULT 0,
  `verification_date` date DEFAULT NULL,
  `license` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `latitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_profile` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not_active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `rank_id`, `buyer_category_id`, `orders_count`, `name`, `mobile`, `email`, `verified`, `verification_date`, `license`, `address`, `latitude`, `longitude`, `password`, `image_profile`, `whatsapp`, `facebook`, `twitter`, `instagram`, `tiktok`, `remember_token`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 1, 1, 'محمد عبد الله', '004234234', 'mohammed@gmail.com', 1, NULL, NULL, 'جدة', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\r\n', 'not_active', '2021-12-04 08:06:37', NULL, NULL),
(2, NULL, NULL, 0, NULL, '+11234512345', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-03-13 12:44:48', '2022-03-13 12:57:19', NULL),
(3, NULL, NULL, 0, NULL, '+12244668822446688', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-03-13 13:03:30', '2022-03-13 13:03:39', NULL),
(4, NULL, 1, 0, 'Lamar Ali', '+11231230980', 'lamar@gmail.com', 0, NULL, NULL, NULL, '24.233', '43.23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-03-13 13:06:07', '2022-03-13 13:46:55', NULL),
(5, NULL, 2, 0, 'أماني أحمد عابد', '+1123456123456', 'lamar@gmail.com', 0, NULL, NULL, NULL, '24.233', '43.23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-03-13 13:49:11', '2022-03-13 14:25:13', NULL),
(6, NULL, 1, 0, 'Lamar Ali', '+1223344223344', '44li@gmail.com', 0, NULL, NULL, NULL, '24.233', '43.23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-03-13 14:29:54', '2022-03-13 14:30:15', NULL),
(7, NULL, 3, 0, 'Amany Ahmed', '+9701111111111111', 'asdasd@aaa.ps', 0, NULL, NULL, NULL, '24.233', '43.23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-03-13 14:45:50', '2022-03-13 14:46:15', NULL),
(8, NULL, 3, 0, 'Lamar Ali', '+1111122223333', 'lamar@gmail.com', 0, NULL, NULL, NULL, '24.233', '43.23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-04-11 00:25:40', '2022-04-11 00:26:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buyers_addresses`
--

CREATE TABLE `buyers_addresses` (
  `id` int(30) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `address` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `place_description` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyers_categories`
--

CREATE TABLE `buyers_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `number_stories_required` int(11) NOT NULL DEFAULT 0,
  `number_deals_required` int(11) NOT NULL DEFAULT 0,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approve` int(11) NOT NULL DEFAULT 1,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyers_categories`
--

INSERT INTO `buyers_categories` (`id`, `number_stories_required`, `number_deals_required`, `image`, `approve`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 0, '1.png', 1, 'active', NULL, NULL, NULL),
(2, 0, 0, '2.png', 1, 'active', NULL, NULL, NULL),
(3, 0, 0, '3.png', 1, 'active', NULL, NULL, NULL),
(4, 0, 0, '4.png', 1, 'active', NULL, NULL, NULL),
(5, 0, 0, '5.png', 1, 'active', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buyers_main_categories`
--

CREATE TABLE `buyers_main_categories` (
  `id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `main_category_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `buyers_main_categories`
--

INSERT INTO `buyers_main_categories` (`id`, `buyer_id`, `main_category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 1, '2022-03-13 15:47:13', '2022-03-13 15:47:13', NULL),
(2, 4, 2, '2022-03-13 15:47:13', '2022-03-13 15:47:13', NULL),
(3, 4, NULL, '2022-03-13 15:47:13', '2022-03-13 15:47:13', NULL),
(4, 5, 3, '2022-03-13 16:25:13', '2022-03-13 16:25:13', NULL),
(5, 5, NULL, '2022-03-13 16:25:13', '2022-03-13 16:25:13', NULL),
(6, 6, 4, '2022-03-13 16:30:15', '2022-03-13 16:30:15', NULL),
(7, 6, NULL, '2022-03-13 16:30:15', '2022-03-13 16:30:15', NULL),
(8, 7, 4, '2022-03-13 16:46:15', '2022-03-13 16:46:15', NULL),
(9, 7, NULL, '2022-03-13 16:46:15', '2022-03-13 16:46:15', NULL),
(10, 8, 1, '2022-04-11 02:26:04', '2022-04-11 02:26:04', NULL),
(11, 8, NULL, '2022-04-11 02:26:04', '2022-04-11 02:26:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buyer_category_translations`
--

CREATE TABLE `buyer_category_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `buyer_category_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyer_category_translations`
--

INSERT INTO `buyer_category_translations` (`id`, `buyer_category_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'صيدلية', '2021-11-28 22:00:00', NULL, NULL),
(2, 1, 'ar', 'صيدلية', '2021-11-28 22:00:00', NULL, NULL),
(3, 2, 'en', 'بقالة', '2021-11-28 22:00:00', NULL, NULL),
(4, 2, 'ar', 'بقالة', '2021-11-28 22:00:00', NULL, NULL),
(5, 3, 'en', 'مطعم', '2021-11-28 22:00:00', NULL, NULL),
(6, 3, 'ar', 'مطعم', '2021-11-28 22:00:00', NULL, NULL),
(7, 4, 'en', 'كوفي شوب', '2021-11-28 22:00:00', NULL, NULL),
(8, 4, 'ar', 'كوفي شوب', '2021-11-28 22:00:00', NULL, NULL),
(9, 5, 'en', 'مخبز', '2021-11-28 22:00:00', NULL, NULL),
(10, 5, 'ar', 'مخبز', '2021-11-28 22:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL DEFAULT 0,
  `seller_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `buyer_id`, `seller_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 60, '2021-12-13 09:30:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts_products`
--

CREATE TABLE `carts_products` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `carts_products`
--

INSERT INTO `carts_products` (`id`, `cart_id`, `product_id`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 5, '2021-12-25 12:54:35', NULL, NULL),
(2, 1, 13, 10, '2021-12-25 12:54:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(30) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT 0,
  `type` enum('deals','offers') DEFAULT NULL,
  `delete` int(11) NOT NULL DEFAULT 0,
  `freez` int(11) NOT NULL DEFAULT 0 COMMENT '0 notfreez, 1freez',
  `last_seen` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `seller_id`, `buyer_id`, `type`, `delete`, `freez`, `last_seen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 60, 1, 'offers', 0, 0, NULL, '2022-02-05 05:16:08', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `id` int(30) NOT NULL,
  `chat_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT 0,
  `message` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `read_at` int(11) NOT NULL DEFAULT 0 COMMENT '0 notfreez, 1freez',
  `type` int(11) DEFAULT 0 COMMENT '0 text, 1 image',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`id`, `chat_id`, `sender_id`, `message`, `read_at`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'صباح الخير, كيف بإمكاني الإطلاع على كافة العروض لهذا الشهر؟', 0, 0, '2022-02-05 05:17:42', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'active', '2022-01-31 02:48:49', '2021-02-20 09:50:01', NULL),
(2, 1, 'active', '2020-09-27 09:25:46', '2020-09-27 13:25:46', '2020-09-27 13:25:46'),
(3, 1, 'active', '2020-09-27 09:25:41', '2020-09-27 13:25:41', '2020-09-27 13:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `city_translations`
--

CREATE TABLE `city_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(11) NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city_translations`
--

INSERT INTO `city_translations` (`id`, `city_id`, `locale`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Jeddah', NULL, '2020-09-27 13:25:21', '2020-09-27 13:25:58'),
(2, 1, 'ar', 'جدة', NULL, '2020-09-27 13:25:21', '2020-09-27 13:25:58'),
(3, 2, 'en', '23423', NULL, '2020-09-27 13:25:26', '2020-09-27 13:25:26'),
(4, 2, 'ar', '23423', NULL, '2020-09-27 13:25:26', '2020-09-27 13:25:26'),
(5, 3, 'en', '34534', NULL, '2020-09-27 13:25:31', '2020-09-27 13:25:31'),
(6, 3, 'ar', '3423', NULL, '2020-09-27 13:25:31', '2020-09-27 13:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `user_type` enum('seller','buyer') DEFAULT NULL,
  `code` varchar(10) NOT NULL,
  `used` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `user_id`, `user_type`, `code`, `used`, `created_at`, `updated_at`, `deleted_at`) VALUES
(23, 47, 'seller', '1111', 1, '2021-11-27 13:51:08', '2021-11-29 04:13:15', NULL),
(22, 48, 'seller', '1111', 1, '2021-11-24 06:09:43', '2021-11-24 06:10:00', NULL),
(21, 47, 'seller', '1111', 1, '2021-11-24 05:59:23', '2021-11-24 05:59:28', NULL),
(20, 46, 'seller', '1111', 1, '2021-11-24 05:57:27', '2021-11-24 05:57:31', NULL),
(19, 46, 'seller', '1111', 1, '2021-11-24 05:40:35', '2021-11-24 05:57:27', '2021-11-24 05:57:27'),
(18, 46, 'seller', '1111', 1, '2021-11-24 05:40:18', '2021-11-24 05:40:35', '2021-11-24 05:40:35'),
(24, 47, 'seller', '1111', 1, '2021-11-27 13:54:22', '2021-11-27 13:58:16', NULL),
(25, 47, 'seller', '1111', 1, '2021-11-27 13:58:49', '2021-11-27 14:00:43', NULL),
(26, 47, 'seller', '1111', 1, '2021-11-27 14:01:22', '2021-11-29 04:13:00', NULL),
(27, 47, 'seller', '1111', 1, '2021-11-27 14:01:47', '2021-11-29 04:12:56', NULL),
(28, 47, 'seller', '1111', 1, '2021-11-27 14:02:38', '2021-11-27 14:05:56', NULL),
(29, 47, 'seller', '1111', 1, '2021-11-27 14:06:27', '2021-11-29 04:12:34', NULL),
(30, 47, 'seller', '1111', 1, '2021-11-27 14:06:41', '2021-11-27 14:06:53', NULL),
(31, 48, 'seller', '1111', 0, '2021-11-27 14:10:10', '2021-11-27 14:10:10', NULL),
(32, 49, 'seller', '1111', 0, '2021-11-27 14:10:34', '2021-11-27 14:10:34', NULL),
(33, 49, 'seller', '1111', 1, '2021-11-27 14:10:52', '2021-11-27 14:10:56', NULL),
(34, 49, 'seller', '1111', 1, '2021-11-27 14:11:41', '2021-11-27 14:11:45', NULL),
(35, 49, 'seller', '1111', 1, '2021-11-27 14:12:53', '2021-11-27 14:12:56', NULL),
(36, 49, 'seller', '1111', 1, '2021-11-27 14:13:03', '2021-11-27 14:13:08', NULL),
(37, 49, 'seller', '1111', 1, '2021-11-27 14:13:35', '2021-11-27 14:13:38', NULL),
(38, 49, 'seller', '1111', 1, '2021-11-27 14:14:08', '2021-11-27 14:14:11', NULL),
(39, 47, 'seller', '1111', 1, '2021-11-27 14:25:11', '2021-11-27 14:26:09', NULL),
(40, 47, 'seller', '1111', 1, '2021-11-27 14:32:08', '2021-11-27 14:32:17', NULL),
(41, 50, 'seller', '1111', 0, '2021-11-27 14:33:01', '2021-11-27 14:33:01', NULL),
(42, 51, 'seller', '1111', 1, '2021-11-27 14:33:53', '2021-11-27 14:33:57', NULL),
(43, 47, 'seller', '1111', 1, '2021-11-27 14:35:20', '2021-11-27 14:35:24', NULL),
(44, 52, 'seller', '1111', 1, '2021-11-27 14:35:37', '2021-11-27 14:35:43', NULL),
(45, 47, 'seller', '1111', 1, '2021-11-27 14:36:58', '2021-11-27 14:37:01', NULL),
(46, 53, 'seller', '1111', 1, '2021-11-27 14:38:24', '2021-11-27 14:38:49', NULL),
(47, 47, 'seller', '1111', 1, '2021-11-27 14:39:31', '2021-11-27 14:39:35', NULL),
(48, 54, 'seller', '1111', 0, '2021-11-27 14:39:43', '2021-11-27 14:39:43', NULL),
(49, 47, 'seller', '1111', 1, '2021-11-27 14:40:47', '2021-11-27 14:40:50', NULL),
(50, 55, 'seller', '1111', 1, '2021-11-27 14:41:06', '2021-11-27 14:41:19', NULL),
(51, 47, 'seller', '1111', 1, '2021-11-27 14:42:15', '2021-11-27 14:42:20', NULL),
(52, 56, 'seller', '1111', 1, '2021-11-27 14:42:31', '2021-11-27 14:42:35', NULL),
(53, 47, 'seller', '1111', 1, '2021-11-27 14:43:16', '2021-11-27 14:43:20', NULL),
(54, 47, 'seller', '1111', 1, '2021-11-28 13:56:29', '2021-11-29 04:12:21', NULL),
(55, 47, 'seller', '1111', 1, '2021-11-29 04:03:13', '2021-11-29 04:11:46', NULL),
(56, 47, 'seller', '1111', 1, '2021-11-29 04:06:45', '2021-11-29 04:09:20', NULL),
(57, 47, 'seller', '1111', 1, '2021-11-29 04:09:39', '2021-11-29 04:09:43', NULL),
(58, 47, 'seller', '1111', 1, '2021-11-29 04:10:37', '2021-11-29 04:10:41', NULL),
(59, 47, 'seller', '1111', 1, '2021-11-29 04:11:10', '2021-11-29 04:11:14', NULL),
(60, 47, 'seller', '1111', 1, '2021-11-29 04:14:50', '2021-11-29 04:14:54', NULL),
(61, 47, 'seller', '1111', 1, '2021-11-29 04:16:03', '2021-11-29 04:16:06', NULL),
(62, 47, 'seller', '1111', 1, '2021-11-29 04:17:00', '2021-11-29 04:17:03', NULL),
(63, 47, 'seller', '1111', 1, '2021-11-29 04:20:50', '2021-11-29 04:20:53', NULL),
(64, 47, 'seller', '1111', 1, '2021-11-29 04:22:20', '2021-11-29 04:22:25', NULL),
(65, 47, 'seller', '1111', 1, '2021-11-29 04:23:24', '2021-11-29 04:23:28', NULL),
(66, 47, 'seller', '1111', 1, '2021-11-29 04:24:10', '2021-11-29 04:24:14', NULL),
(67, 47, 'seller', '1111', 1, '2021-11-29 04:27:45', '2021-11-29 04:27:49', NULL),
(68, 47, 'seller', '1111', 1, '2021-11-29 04:28:43', '2021-11-29 04:28:47', NULL),
(69, 47, 'seller', '1111', 1, '2021-11-29 04:30:57', '2021-11-29 04:31:00', NULL),
(70, 47, 'seller', '1111', 1, '2021-11-29 04:32:24', '2021-11-29 04:32:29', NULL),
(71, 47, 'seller', '1111', 1, '2021-11-29 04:33:28', '2021-11-29 04:33:33', NULL),
(72, 47, 'seller', '1111', 1, '2021-11-29 04:34:36', '2021-11-29 04:34:40', NULL),
(73, 47, 'seller', '1111', 1, '2021-11-29 04:35:46', '2021-11-29 04:35:49', NULL),
(74, 47, 'seller', '1111', 1, '2021-11-29 04:36:50', '2021-11-29 04:36:54', NULL),
(75, 47, 'seller', '1111', 1, '2021-11-29 04:37:32', '2021-11-29 04:37:36', NULL),
(76, 47, 'seller', '1111', 1, '2021-11-30 13:17:59', '2021-11-30 13:18:37', NULL),
(77, 47, 'seller', '1111', 1, '2021-11-30 13:19:32', '2021-11-30 13:19:36', NULL),
(78, 47, 'seller', '1111', 1, '2021-11-30 13:24:31', '2021-11-30 13:24:36', NULL),
(79, 47, 'seller', '1111', 1, '2021-11-30 13:25:43', '2021-11-30 13:25:47', NULL),
(80, 47, 'seller', '1111', 1, '2021-11-30 13:39:07', '2021-11-30 13:41:47', NULL),
(81, 47, 'seller', '1111', 1, '2021-11-30 23:34:44', '2021-11-30 23:34:48', NULL),
(82, 47, 'seller', '1111', 1, '2021-11-30 23:37:40', '2021-11-30 23:37:43', NULL),
(83, 57, 'seller', '1111', 1, '2021-12-02 00:39:00', '2021-12-02 00:39:38', NULL),
(84, 57, 'seller', '1111', 1, '2021-12-02 00:40:09', '2021-12-02 00:40:14', NULL),
(85, 57, 'seller', '1111', 1, '2021-12-02 05:02:52', '2021-12-02 05:06:11', NULL),
(86, 57, 'seller', '1111', 1, '2021-12-02 06:50:44', '2021-12-02 06:50:51', NULL),
(87, 58, 'seller', '1111', 0, '2021-12-03 04:50:48', '2021-12-03 04:50:48', NULL),
(88, 59, 'seller', '1111', 1, '2021-12-03 04:52:12', '2021-12-03 04:52:43', NULL),
(89, 59, 'seller', '1111', 0, '2021-12-03 04:53:32', '2021-12-03 04:53:32', NULL),
(90, 59, 'seller', '1111', 0, '2021-12-03 04:53:50', '2021-12-03 04:53:50', NULL),
(91, 60, 'seller', '1111', 1, '2021-12-03 04:55:00', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(92, 60, 'seller', '1111', 1, '2021-12-03 04:55:58', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(93, 61, 'seller', '1111', 1, '2021-12-03 04:58:25', '2021-12-03 04:58:38', NULL),
(94, 61, 'seller', '1111', 1, '2021-12-03 04:59:56', '2021-12-03 04:59:59', NULL),
(95, 62, 'seller', '1111', 1, '2021-12-03 05:00:52', '2021-12-03 05:00:55', NULL),
(96, 63, 'seller', '1111', 1, '2021-12-03 05:01:22', '2021-12-03 05:01:26', NULL),
(97, 64, 'seller', '1111', 1, '2021-12-03 05:02:51', '2021-12-03 05:03:01', NULL),
(98, 65, 'seller', '1111', 1, '2021-12-03 05:04:15', '2021-12-03 05:05:21', NULL),
(99, 66, 'seller', '1111', 1, '2021-12-03 05:06:21', '2021-12-03 05:06:28', NULL),
(100, 67, 'seller', '1111', 1, '2021-12-03 05:09:43', '2021-12-03 05:09:56', NULL),
(101, 68, 'seller', '1111', 1, '2021-12-03 05:10:48', '2021-12-03 05:12:08', NULL),
(102, 69, 'seller', '1111', 1, '2021-12-03 05:13:15', '2021-12-03 05:14:07', NULL),
(103, 70, 'seller', '1111', 1, '2021-12-03 05:15:46', '2021-12-03 05:16:04', NULL),
(104, 70, 'seller', '1111', 1, '2021-12-03 05:16:46', '2021-12-03 05:16:50', NULL),
(105, 71, 'seller', '1111', 1, '2021-12-03 05:26:42', '2021-12-03 05:26:46', NULL),
(106, 72, 'seller', '1111', 1, '2021-12-03 05:46:35', '2021-12-03 05:46:39', NULL),
(107, 73, 'seller', '1111', 1, '2021-12-03 09:27:29', '2021-12-03 09:27:33', NULL),
(108, 60, 'seller', '1111', 1, '2021-12-03 09:29:18', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(109, 60, 'seller', '1111', 1, '2021-12-03 10:53:25', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(110, 60, 'seller', '1111', 1, '2021-12-03 13:56:53', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(111, 60, 'seller', '1111', 1, '2021-12-04 02:44:56', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(112, 60, 'seller', '1111', 1, '2021-12-04 03:33:52', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(113, 60, 'seller', '1111', 1, '2021-12-04 04:13:07', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(114, 60, 'seller', '1111', 1, '2021-12-06 11:39:01', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(115, 60, 'seller', '1111', 1, '2021-12-07 06:01:30', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(116, 60, 'seller', '1111', 1, '2021-12-07 13:25:35', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(117, 74, 'seller', '1111', 0, '2021-12-07 23:18:02', '2021-12-07 23:18:39', '2021-12-07 23:18:39'),
(118, 74, 'seller', '1111', 0, '2021-12-07 23:18:39', '2021-12-07 23:20:06', '2021-12-07 23:20:06'),
(119, 74, 'seller', '1111', 0, '2021-12-07 23:20:06', '2021-12-07 23:20:25', '2021-12-07 23:20:25'),
(120, 74, 'seller', '1111', 0, '2021-12-07 23:20:25', '2021-12-07 23:21:09', '2021-12-07 23:21:09'),
(121, 74, 'seller', '1111', 1, '2021-12-07 23:21:09', '2021-12-07 23:21:14', NULL),
(122, 75, 'seller', '1111', 1, '2021-12-07 23:23:08', '2021-12-07 23:23:11', NULL),
(123, 60, 'seller', '1111', 0, '2021-12-07 23:31:37', '2021-12-07 23:32:04', '2021-12-07 23:32:04'),
(124, 60, 'seller', '1111', 1, '2021-12-07 23:32:04', '2021-12-07 23:33:52', '2021-12-07 23:33:52'),
(125, 60, 'seller', '1111', 1, '2021-12-07 23:33:13', '2021-12-07 23:33:52', '2021-12-07 23:33:52'),
(126, 60, 'seller', '1111', 0, '2021-12-07 23:33:49', '2021-12-07 23:33:52', '2021-12-07 23:33:52'),
(127, 60, 'seller', '1111', 0, '2021-12-07 23:33:52', '2021-12-07 23:39:11', '2021-12-07 23:39:11'),
(128, 76, 'seller', '1111', 0, '2021-12-07 23:38:29', '2021-12-07 23:38:53', '2021-12-07 23:38:53'),
(129, 76, 'seller', '1111', 1, '2021-12-07 23:38:53', '2021-12-07 23:38:56', NULL),
(130, 60, 'seller', '1111', 0, '2021-12-07 23:39:09', '2021-12-07 23:39:11', '2021-12-07 23:39:11'),
(131, 60, 'seller', '1111', 0, '2021-12-07 23:39:11', '2021-12-07 23:39:14', '2021-12-07 23:39:14'),
(132, 60, 'seller', '1111', 1, '2021-12-07 23:39:14', '2021-12-08 04:23:25', '2021-12-08 04:23:25'),
(133, 60, 'seller', '1111', 0, '2021-12-08 04:23:19', '2021-12-08 04:23:25', '2021-12-08 04:23:25'),
(134, 60, 'seller', '1111', 1, '2021-12-08 04:23:25', '2021-12-08 04:23:36', NULL),
(135, 77, 'seller', '1111', 0, '2021-12-08 04:24:19', '2021-12-08 04:24:24', '2021-12-08 04:24:24'),
(136, 77, 'seller', '1111', 1, '2021-12-08 04:24:24', '2021-12-08 04:24:30', NULL),
(137, 60, 'seller', '1111', 1, '2021-12-08 04:25:28', '2021-12-08 04:25:33', NULL),
(138, 60, 'seller', '1111', 1, '2021-12-11 08:46:06', '2021-12-11 08:46:09', NULL),
(139, 60, 'seller', '1111', 1, '2021-12-11 13:06:58', '2021-12-11 13:07:02', NULL),
(140, 60, 'seller', '1111', 1, '2021-12-12 00:33:26', '2021-12-12 00:33:30', NULL),
(141, 60, 'seller', '1111', 1, '2021-12-12 04:08:38', '2021-12-12 04:08:44', NULL),
(142, 60, 'seller', '1111', 1, '2021-12-24 03:21:03', '2021-12-24 03:21:20', NULL),
(143, 60, 'seller', '1111', 1, '2021-12-24 03:25:37', '2021-12-24 03:25:41', NULL),
(144, 78, 'seller', '1111', 0, '2021-12-24 03:34:45', '2021-12-24 03:34:45', NULL),
(145, 60, 'seller', '1111', 0, '2021-12-24 04:17:35', '2021-12-24 04:17:35', NULL),
(146, 79, 'seller', '1111', 0, '2021-12-24 06:19:41', '2021-12-24 06:19:41', NULL),
(147, 80, 'seller', '1111', 0, '2021-12-24 06:22:36', '2021-12-24 06:22:36', NULL),
(148, 60, 'seller', '1111', 1, '2021-12-24 06:31:04', '2021-12-24 06:31:16', NULL),
(149, 60, 'seller', '1111', 1, '2021-12-24 06:31:31', '2021-12-24 06:31:35', NULL),
(150, 60, 'seller', '1111', 1, '2021-12-24 06:31:56', '2021-12-24 06:32:00', NULL),
(151, 81, 'seller', '1111', 0, '2021-12-24 06:35:17', '2021-12-24 06:37:54', '2021-12-24 06:37:54'),
(152, 81, 'seller', '1111', 0, '2021-12-24 06:37:54', '2021-12-24 06:37:54', NULL),
(153, 82, 'seller', '1111', 0, '2021-12-24 17:12:06', '2021-12-24 17:12:06', NULL),
(154, 82, 'seller', '1111', 0, '2021-12-24 17:12:12', '2021-12-24 17:12:12', NULL),
(155, 83, 'seller', '1111', 0, '2021-12-24 17:12:29', '2021-12-24 17:12:29', NULL),
(156, 84, 'seller', '1111', 0, '2021-12-24 17:12:35', '2021-12-24 17:12:35', NULL),
(157, 82, 'seller', '1111', 0, '2021-12-24 17:16:28', '2021-12-24 17:16:28', NULL),
(158, 85, 'seller', '1111', 1, '2021-12-25 09:14:38', '2021-12-25 09:14:42', NULL),
(159, 60, 'seller', '1111', 1, '2021-12-25 09:17:34', '2021-12-25 09:17:40', NULL),
(160, 60, 'seller', '1111', 1, '2021-12-25 14:51:34', '2021-12-25 14:51:38', NULL),
(161, 60, 'seller', '1111', 1, '2021-12-29 00:57:40', '2021-12-29 00:57:45', NULL),
(162, 60, 'seller', '1111', 1, '2021-12-29 05:14:23', '2021-12-29 05:14:27', NULL),
(163, 60, 'seller', '1111', 1, '2021-12-29 12:56:49', '2021-12-29 12:56:54', NULL),
(164, 60, 'seller', '1111', 1, '2021-12-29 15:34:53', '2021-12-29 15:35:25', NULL),
(165, 60, 'seller', '1111', 1, '2021-12-29 23:37:51', '2021-12-29 23:37:56', NULL),
(166, 86, 'seller', '1111', 0, '2021-12-31 12:10:58', '2021-12-31 12:10:58', NULL),
(167, 87, 'seller', '1111', 1, '2021-12-31 12:16:30', '2021-12-31 12:22:25', NULL),
(168, 60, 'seller', '1111', 1, '2021-12-31 12:50:26', '2021-12-31 12:53:52', NULL),
(169, 60, 'seller', '1111', 1, '2021-12-31 18:09:10', '2021-12-31 18:09:16', NULL),
(170, 60, 'seller', '1111', 1, '2022-01-01 04:15:32', '2022-01-01 04:15:36', NULL),
(171, 60, 'seller', '1111', 1, '2022-01-01 17:11:43', '2022-01-01 17:11:48', NULL),
(172, 60, 'seller', '1111', 1, '2022-01-02 01:40:33', '2022-01-02 01:40:45', NULL),
(173, 60, 'seller', '1111', 1, '2022-01-02 01:44:24', '2022-01-02 01:44:30', NULL),
(174, 60, 'seller', '1111', 1, '2022-01-03 06:28:59', '2022-01-03 06:29:14', NULL),
(175, 60, 'seller', '1111', 1, '2022-01-03 06:29:40', '2022-01-03 06:29:49', NULL),
(176, 60, 'seller', '1111', 1, '2022-01-03 12:19:47', '2022-01-03 12:19:52', NULL),
(177, 60, 'seller', '1111', 1, '2022-01-04 06:44:45', '2022-01-04 06:44:52', NULL),
(178, 60, 'seller', '1111', 1, '2022-01-04 06:52:43', '2022-01-04 06:55:53', NULL),
(179, 60, 'seller', '1111', 1, '2022-01-04 19:32:58', '2022-01-04 19:33:03', NULL),
(180, 88, 'seller', '1111', 1, '2022-01-16 12:12:18', '2022-01-16 12:12:23', NULL),
(181, 60, 'seller', '1111', 1, '2022-01-16 12:22:36', '2022-01-16 12:22:40', NULL),
(182, 60, 'seller', '1111', 1, '2022-01-17 13:37:24', '2022-01-17 13:39:03', NULL),
(183, 60, 'seller', '1111', 1, '2022-01-17 22:49:27', '2022-01-17 22:49:38', NULL),
(184, 60, 'seller', '1111', 1, '2022-01-18 04:19:45', '2022-01-18 04:19:51', NULL),
(185, 60, 'seller', '1111', 1, '2022-01-18 13:31:48', '2022-01-18 13:31:52', NULL),
(186, 60, 'seller', '1111', 1, '2022-01-18 16:59:28', '2022-01-18 16:59:35', NULL),
(187, 60, 'seller', '1111', 1, '2022-01-19 09:00:05', '2022-01-19 09:00:09', NULL),
(188, 60, 'seller', '1111', 1, '2022-01-23 12:49:30', '2022-01-23 12:49:36', NULL),
(189, 60, 'seller', '1111', 1, '2022-01-24 00:53:10', '2022-01-24 00:53:14', NULL),
(190, 60, 'seller', '1111', 1, '2022-01-24 13:33:28', '2022-01-24 13:33:32', NULL),
(191, 60, 'seller', '1111', 1, '2022-01-30 12:22:27', '2022-01-30 12:22:52', NULL),
(192, 60, 'seller', '1111', 1, '2022-01-30 16:09:58', '2022-01-30 16:10:01', NULL),
(193, 60, 'seller', '1111', 1, '2022-01-31 00:41:49', '2022-01-31 00:46:48', NULL),
(194, 60, 'seller', '1111', 1, '2022-01-31 16:50:32', '2022-01-31 16:50:56', NULL),
(195, 60, 'seller', '1111', 1, '2022-01-31 23:23:14', '2022-01-31 23:23:19', NULL),
(196, 89, 'seller', '1111', 1, '2022-02-01 01:33:56', '2022-02-01 01:34:03', NULL),
(197, 60, 'seller', '1111', 1, '2022-02-01 02:36:46', '2022-02-01 02:36:50', NULL),
(198, 60, 'seller', '1111', 1, '2022-02-01 16:15:30', '2022-02-01 16:15:33', NULL),
(199, 60, 'seller', '1111', 1, '2022-02-01 23:24:36', '2022-02-01 23:25:55', NULL),
(200, 90, 'seller', '1111', 1, '2022-02-01 23:27:19', '2022-02-01 23:27:23', NULL),
(201, 60, 'seller', '1111', 0, '2022-02-02 00:02:18', '2022-02-02 00:02:18', NULL),
(202, 60, 'seller', '1111', 1, '2022-02-03 00:30:31', '2022-02-03 00:30:36', NULL),
(203, 60, 'seller', '1111', 1, '2022-02-03 01:32:06', '2022-02-03 01:32:09', NULL),
(204, 60, 'seller', '1111', 1, '2022-02-03 04:36:00', '2022-02-03 04:36:04', NULL),
(205, 60, 'seller', '1111', 1, '2022-02-03 07:31:14', '2022-02-03 07:31:29', NULL),
(206, 91, 'seller', '1111', 1, '2022-02-03 07:32:11', '2022-02-03 07:32:16', NULL),
(207, 60, 'seller', '1111', 1, '2022-02-03 14:22:30', '2022-02-03 14:22:41', NULL),
(208, 92, 'seller', '1111', 1, '2022-02-05 01:33:01', '2022-02-05 01:33:08', NULL),
(209, 93, 'seller', '1111', 1, '2022-02-05 01:38:50', '2022-02-05 01:38:54', NULL),
(210, 94, 'seller', '1111', 1, '2022-02-05 01:40:54', '2022-02-05 01:40:58', NULL),
(211, 60, 'seller', '1111', 1, '2022-02-05 01:41:45', '2022-02-05 01:41:48', NULL),
(212, 60, 'seller', '1111', 1, '2022-02-05 13:21:29', '2022-02-05 13:21:34', NULL),
(213, 60, 'seller', '1111', 1, '2022-02-06 05:39:45', '2022-02-06 05:40:53', NULL),
(214, 60, 'seller', '1111', 1, '2022-02-07 05:36:44', '2022-02-07 05:36:53', NULL),
(215, 60, 'seller', '1111', 1, '2022-02-08 04:58:28', '2022-02-08 04:58:33', NULL),
(216, 60, 'seller', '1111', 1, '2022-02-09 04:08:07', '2022-02-09 04:08:11', NULL),
(217, 60, 'seller', '1111', 1, '2022-02-12 03:20:53', '2022-02-12 03:20:58', NULL),
(218, 60, 'seller', '1111', 1, '2022-02-12 10:36:42', '2022-02-12 10:36:49', NULL),
(219, 60, 'seller', '1111', 1, '2022-02-14 05:17:08', '2022-02-14 05:17:21', NULL),
(220, 60, 'seller', '1111', 1, '2022-02-20 00:39:20', '2022-02-20 00:39:27', NULL),
(221, 60, 'seller', '1111', 1, '2022-02-20 04:13:20', '2022-02-20 04:13:24', NULL),
(222, 60, 'seller', '1111', 1, '2022-02-21 13:59:04', '2022-02-21 13:59:08', NULL),
(223, 60, 'seller', '1111', 1, '2022-03-05 04:10:40', '2022-03-05 04:10:44', NULL),
(224, 60, 'seller', '1111', 1, '2022-03-05 09:14:19', '2022-03-05 09:14:24', NULL),
(225, 60, 'seller', '1111', 1, '2022-03-05 15:03:24', '2022-03-05 15:03:28', NULL),
(226, 60, 'seller', '1111', 1, '2022-03-08 03:59:35', '2022-03-08 03:59:41', NULL),
(227, 95, 'seller', '1111', 1, '2022-03-08 04:10:17', '2022-03-08 04:10:20', NULL),
(228, 60, 'seller', '1111', 1, '2022-03-08 04:13:06', '2022-03-08 04:13:09', NULL),
(229, 60, 'seller', '1111', 1, '2022-03-12 17:51:31', '2022-03-12 17:51:35', NULL),
(230, 60, 'seller', '1111', 1, '2022-03-12 18:11:10', '2022-03-12 18:11:13', NULL),
(231, 2, 'buyer', '1111', 1, '2022-03-13 12:44:48', '2022-03-13 12:57:19', NULL),
(232, 3, 'buyer', '1111', 1, '2022-03-13 13:03:31', '2022-03-13 13:03:39', NULL),
(233, 4, 'buyer', '1111', 1, '2022-03-13 13:06:07', '2022-03-13 13:06:13', NULL),
(234, 5, 'buyer', '1111', 1, '2022-03-13 13:49:12', '2022-03-13 13:49:16', NULL),
(235, 5, 'seller', '1111', 0, '2022-03-13 13:50:54', '2022-03-13 13:50:54', NULL),
(236, 5, 'buyer', '1111', 1, '2022-03-13 13:59:07', '2022-03-13 14:25:00', NULL),
(237, 5, 'buyer', '1111', 1, '2022-03-13 14:29:35', '2022-03-13 14:29:39', NULL),
(238, 6, 'buyer', '1111', 1, '2022-03-13 14:29:54', '2022-03-13 14:30:00', NULL),
(239, 6, 'seller', '1111', 0, '2022-03-13 14:29:57', '2022-03-13 14:29:57', NULL),
(240, 7, 'buyer', '1111', 1, '2022-03-13 14:45:51', '2022-03-13 14:46:00', NULL),
(241, 7, 'seller', '1111', 0, '2022-03-13 14:45:57', '2022-03-13 14:45:57', NULL),
(242, 60, 'seller', '1111', 1, '2022-03-14 07:28:54', '2022-03-14 07:29:08', NULL),
(243, 60, 'seller', '1111', 1, '2022-03-14 15:14:13', '2022-03-14 15:16:15', NULL),
(244, 60, 'seller', '1111', 1, '2022-03-27 13:48:32', '2022-03-27 13:48:39', NULL),
(245, 60, 'seller', '1111', 1, '2022-03-30 23:36:41', '2022-03-30 23:36:51', NULL),
(246, 60, 'seller', '1111', 1, '2022-04-05 01:42:17', '2022-04-05 01:42:22', NULL),
(247, 60, 'seller', '1111', 1, '2022-04-06 18:22:20', '2022-04-06 18:22:36', NULL),
(248, 60, 'seller', '1111', 1, '2022-04-07 10:13:42', '2022-04-07 10:13:52', NULL),
(249, 60, 'seller', '1111', 1, '2022-04-11 00:24:32', '2022-04-11 00:24:37', NULL),
(250, 8, 'buyer', '1111', 1, '2022-04-11 00:25:40', '2022-04-11 00:25:44', NULL),
(251, 8, 'buyer', '1111', 1, '2022-04-11 00:52:06', '2022-04-11 00:52:09', NULL),
(252, 60, 'seller', '1111', 1, '2022-04-11 10:34:19', '2022-04-11 10:34:23', NULL),
(253, 8, 'buyer', '1111', 1, '2022-04-11 10:34:49', '2022-04-11 10:34:56', NULL),
(254, 96, 'seller', '1111', 1, '2022-04-11 17:09:17', '2022-04-11 17:09:22', NULL),
(255, 8, 'buyer', '1111', 1, '2022-04-14 16:29:14', '2022-04-14 16:29:18', NULL),
(256, 8, 'buyer', '1111', 1, '2022-04-17 09:37:45', '2022-04-17 09:38:07', NULL),
(257, 8, 'buyer', '1111', 1, '2022-04-17 18:19:09', '2022-04-17 18:19:17', NULL),
(258, 8, 'buyer', '1111', 1, '2022-04-21 08:44:41', '2022-04-21 08:44:54', NULL),
(259, 60, 'seller', '1111', 1, '2022-05-07 12:48:25', '2022-05-07 12:48:33', NULL),
(260, 60, 'seller', '1111', 1, '2022-05-07 12:54:37', '2022-05-07 12:54:51', NULL),
(261, 60, 'seller', '1111', 1, '2022-05-07 12:54:42', '2022-05-07 12:54:47', NULL),
(262, 8, 'buyer', '1111', 0, '2022-05-07 14:03:17', '2022-05-07 14:03:17', NULL),
(263, 8, 'buyer', '1111', 1, '2022-05-07 14:03:55', '2022-05-07 14:04:05', NULL),
(264, 8, 'buyer', '1111', 0, '2022-05-07 14:06:21', '2022-05-07 14:06:21', NULL),
(265, 8, 'buyer', '1111', 1, '2022-05-07 14:07:11', '2022-05-07 14:07:21', NULL),
(266, 60, 'seller', '1111', 1, '2022-05-07 18:13:40', '2022-05-07 18:13:48', NULL),
(267, 60, 'seller', '1111', 1, '2022-05-15 12:15:14', '2022-05-15 12:15:23', NULL),
(268, 8, 'buyer', '1111', 1, '2022-05-15 13:09:38', '2022-05-15 13:09:43', NULL),
(269, 8, 'buyer', '1111', 1, '2022-05-19 14:02:15', '2022-05-19 14:02:22', NULL),
(270, 60, 'seller', '1111', 1, '2022-05-25 20:17:13', '2022-05-25 20:17:18', NULL),
(271, 60, 'seller', '1111', 1, '2022-05-30 18:03:15', '2022-05-30 18:03:20', NULL),
(272, 60, 'seller', '1111', 0, '2022-06-03 03:23:13', '2022-06-03 03:23:13', NULL),
(273, 60, 'seller', '1111', 1, '2022-07-10 08:35:43', '2022-07-10 08:35:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `buyer_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `status` enum('active','not_active') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `message_type` enum('general','problem','suggestion') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `mobile` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `replay` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `read` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `status` enum('active','not_active') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'active', '2021-05-03 21:34:03', NULL, NULL),
(2, 'active', '2021-05-03 21:34:03', NULL, NULL),
(3, 'active', '2021-05-03 21:34:03', NULL, NULL),
(4, 'active', '2021-05-03 21:34:03', NULL, NULL),
(5, 'active', '2021-05-03 21:34:03', NULL, NULL),
(6, 'active', '2021-05-03 21:34:03', NULL, NULL),
(7, 'active', '2021-05-03 21:34:03', NULL, NULL),
(8, 'active', '2021-05-03 21:34:03', NULL, NULL),
(9, 'active', '2021-05-03 21:34:03', NULL, NULL),
(10, 'active', '2021-05-03 21:34:03', NULL, NULL),
(11, 'active', '2021-05-03 21:34:03', NULL, NULL),
(13, 'active', '2021-05-03 21:34:03', NULL, NULL),
(14, 'active', '2021-05-03 21:34:03', NULL, NULL),
(15, 'active', '2021-05-03 21:34:03', NULL, NULL),
(16, 'active', '2021-05-03 21:34:03', NULL, NULL),
(17, 'active', '2021-05-03 21:34:03', NULL, NULL),
(18, 'active', '2021-05-03 21:34:03', NULL, NULL),
(19, 'active', '2021-05-03 21:34:03', NULL, NULL),
(20, 'active', '2021-05-03 21:34:03', NULL, NULL),
(21, 'active', '2021-05-03 21:34:03', NULL, NULL),
(22, 'active', '2021-05-03 21:34:03', NULL, NULL),
(23, 'active', '2021-05-03 21:34:03', NULL, NULL),
(24, 'active', '2021-05-03 21:34:03', NULL, NULL),
(25, 'active', '2021-05-03 21:34:03', NULL, NULL),
(26, 'active', '2021-05-03 21:34:03', NULL, NULL),
(27, 'active', '2021-05-03 21:34:03', NULL, NULL),
(28, 'active', '2021-05-03 21:34:03', NULL, NULL),
(29, 'active', '2021-05-03 21:34:03', NULL, NULL),
(30, 'active', '2021-05-03 21:34:03', NULL, NULL),
(31, 'active', '2021-05-03 21:34:03', NULL, NULL),
(32, 'active', '2021-05-03 21:34:03', NULL, NULL),
(33, 'active', '2021-05-03 21:34:03', NULL, NULL),
(34, 'active', '2021-05-03 21:34:03', NULL, NULL),
(35, 'active', '2021-05-03 21:34:03', NULL, NULL),
(36, 'active', '2021-05-03 21:34:03', NULL, NULL),
(37, 'active', '2021-05-03 21:34:03', NULL, NULL),
(38, 'active', '2021-05-03 21:34:03', NULL, NULL),
(39, 'active', '2021-05-03 21:34:03', NULL, NULL),
(40, 'active', '2021-05-03 21:34:03', NULL, NULL),
(41, 'active', '2021-05-03 21:34:03', NULL, NULL),
(42, 'active', '2021-05-03 21:34:03', NULL, NULL),
(43, 'active', '2021-05-03 21:34:03', NULL, NULL),
(44, 'active', '2021-05-03 21:34:03', NULL, NULL),
(45, 'active', '2021-05-03 21:34:03', NULL, NULL),
(46, 'active', '2021-05-03 21:34:03', NULL, NULL),
(47, 'active', '2021-05-03 21:34:03', NULL, NULL),
(48, 'active', '2021-05-03 21:34:03', NULL, NULL),
(49, 'active', '2021-05-03 21:34:03', NULL, NULL),
(50, 'active', '2021-05-03 21:34:03', NULL, NULL),
(51, 'active', '2021-05-03 21:34:03', NULL, NULL),
(52, 'active', '2021-05-03 21:34:03', NULL, NULL),
(53, 'active', '2021-05-03 21:34:03', NULL, NULL),
(54, 'active', '2021-05-03 21:34:03', NULL, NULL),
(55, 'active', '2021-05-03 21:34:03', NULL, NULL),
(56, 'active', '2021-05-03 21:34:03', NULL, NULL),
(57, 'active', '2021-05-03 21:34:03', NULL, NULL),
(58, 'active', '2021-05-03 21:34:03', NULL, NULL),
(59, 'active', '2021-05-03 21:34:03', NULL, NULL),
(60, 'active', '2021-05-03 21:34:03', NULL, NULL),
(61, 'active', '2021-05-03 21:34:03', NULL, NULL),
(62, 'active', '2021-05-03 21:34:03', NULL, NULL),
(63, 'active', '2021-05-03 21:34:03', NULL, NULL),
(64, 'active', '2021-05-03 21:34:03', NULL, NULL),
(65, 'active', '2021-05-03 21:34:03', NULL, NULL),
(66, 'active', '2021-05-03 21:34:03', NULL, NULL),
(67, 'active', '2021-05-03 21:34:03', NULL, NULL),
(68, 'active', '2021-05-03 21:34:03', NULL, NULL),
(69, 'active', '2021-05-03 21:34:03', NULL, NULL),
(70, 'active', '2021-05-03 21:34:03', NULL, NULL),
(71, 'active', '2021-05-03 21:34:03', NULL, NULL),
(72, 'active', '2021-05-03 21:34:03', NULL, NULL),
(74, 'active', '2021-05-03 21:34:03', NULL, NULL),
(75, 'active', '2021-05-03 21:34:03', NULL, NULL),
(76, 'active', '2021-05-03 21:34:03', NULL, NULL),
(77, 'active', '2021-05-03 21:34:03', NULL, NULL),
(78, 'active', '2021-05-03 21:34:03', NULL, NULL),
(79, 'active', '2021-05-03 21:34:03', NULL, NULL),
(80, 'active', '2021-05-03 21:34:03', NULL, NULL),
(81, 'active', '2021-05-03 21:34:03', NULL, NULL),
(82, 'active', '2021-05-03 21:34:03', NULL, NULL),
(83, 'active', '2021-05-03 21:34:03', NULL, NULL),
(84, 'active', '2021-05-03 21:34:03', NULL, NULL),
(85, 'active', '2021-05-03 21:34:03', NULL, NULL),
(86, 'active', '2021-05-03 21:34:03', NULL, NULL),
(87, 'active', '2021-05-03 21:34:03', NULL, NULL),
(88, 'active', '2021-05-03 21:34:03', NULL, NULL),
(89, 'active', '2021-05-03 21:34:03', NULL, NULL),
(90, 'active', '2021-05-03 21:34:03', NULL, NULL),
(91, 'active', '2021-05-03 21:34:03', NULL, NULL),
(92, 'active', '2021-05-03 21:34:03', NULL, NULL),
(93, 'active', '2021-05-03 21:34:03', NULL, NULL),
(94, 'active', '2021-05-03 21:34:03', NULL, NULL),
(95, 'active', '2021-05-03 21:34:03', NULL, NULL),
(96, 'active', '2021-05-03 21:34:03', NULL, NULL),
(97, 'active', '2021-05-03 21:34:03', NULL, NULL),
(98, 'active', '2021-05-03 21:34:03', NULL, NULL),
(99, 'active', '2021-05-03 21:34:03', NULL, NULL),
(100, 'active', '2021-05-03 21:34:03', NULL, NULL),
(101, 'active', '2021-05-03 21:34:03', NULL, NULL),
(102, 'active', '2021-05-03 21:34:03', NULL, NULL),
(103, 'active', '2021-05-03 21:34:03', NULL, NULL),
(104, 'active', '2021-05-03 21:34:03', NULL, NULL),
(105, 'active', '2021-05-03 21:34:03', NULL, NULL),
(106, 'active', '2021-05-03 21:34:03', NULL, NULL),
(107, 'active', '2021-05-03 21:34:03', NULL, NULL),
(108, 'active', '2021-05-03 21:34:03', NULL, NULL),
(109, 'active', '2021-05-03 21:34:03', NULL, NULL),
(110, 'active', '2021-05-03 21:34:03', NULL, NULL),
(111, 'active', '2021-05-03 21:34:03', NULL, NULL),
(112, 'active', '2021-05-03 21:34:03', NULL, NULL),
(113, 'active', '2021-05-03 21:34:03', NULL, NULL),
(114, 'active', '2021-05-03 21:34:03', NULL, NULL),
(115, 'active', '2021-05-03 21:34:03', NULL, NULL),
(116, 'active', '2021-05-03 21:34:03', NULL, NULL),
(117, 'active', '2021-05-03 21:34:03', NULL, NULL),
(118, 'active', '2021-05-03 21:34:03', NULL, NULL),
(119, 'active', '2021-05-03 21:34:03', NULL, NULL),
(120, 'active', '2021-05-03 21:34:03', NULL, NULL),
(121, 'active', '2021-05-03 21:34:03', NULL, NULL),
(122, 'active', '2021-05-03 21:34:03', NULL, NULL),
(123, 'active', '2021-05-03 21:34:03', NULL, NULL),
(124, 'active', '2021-05-03 21:34:03', NULL, NULL),
(125, 'active', '2021-05-03 21:34:03', NULL, NULL),
(126, 'active', '2021-05-03 21:34:03', NULL, NULL),
(127, 'active', '2021-05-03 21:34:03', NULL, NULL),
(128, 'active', '2021-05-03 21:34:03', NULL, NULL),
(129, 'active', '2021-05-03 21:34:03', NULL, NULL),
(130, 'active', '2021-05-03 21:34:03', NULL, NULL),
(131, 'active', '2021-05-03 21:34:03', NULL, NULL),
(132, 'active', '2021-05-03 21:34:03', NULL, NULL),
(133, 'active', '2021-05-03 21:34:03', NULL, NULL),
(134, 'active', '2021-05-03 21:34:03', NULL, NULL),
(135, 'active', '2021-05-03 21:34:03', NULL, NULL),
(136, 'active', '2021-05-03 21:34:03', NULL, NULL),
(137, 'active', '2021-05-03 21:34:03', NULL, NULL),
(138, 'active', '2021-05-03 21:34:03', NULL, NULL),
(139, 'active', '2021-05-03 21:34:03', NULL, NULL),
(140, 'active', '2021-05-03 21:34:03', NULL, NULL),
(141, 'active', '2021-05-03 21:34:03', NULL, NULL),
(142, 'active', '2021-05-03 21:34:03', NULL, NULL),
(143, 'active', '2021-05-03 21:34:03', NULL, NULL),
(144, 'active', '2021-05-03 21:34:03', NULL, NULL),
(145, 'active', '2021-05-03 21:34:03', NULL, NULL),
(146, 'active', '2021-05-03 21:34:03', NULL, NULL),
(147, 'active', '2021-05-03 21:34:03', NULL, NULL),
(148, 'active', '2021-05-03 21:34:03', NULL, NULL),
(149, 'active', '2021-05-03 21:34:03', NULL, NULL),
(150, 'active', '2021-05-03 21:34:03', NULL, NULL),
(151, 'active', '2021-05-03 21:34:03', NULL, NULL),
(152, 'active', '2021-05-03 21:34:03', NULL, NULL),
(153, 'active', '2021-05-03 21:34:03', NULL, NULL),
(154, 'active', '2021-05-03 21:34:03', NULL, NULL),
(155, 'active', '2021-05-03 21:34:03', NULL, NULL),
(156, 'active', '2021-05-03 21:34:03', NULL, NULL),
(157, 'active', '2021-05-03 21:34:03', NULL, NULL),
(158, 'active', '2021-05-03 21:34:03', NULL, NULL),
(159, 'active', '2021-05-03 21:34:03', NULL, NULL),
(160, 'active', '2021-05-03 21:34:03', NULL, NULL),
(161, 'active', '2021-05-03 21:34:03', NULL, NULL),
(162, 'active', '2021-05-03 21:34:03', NULL, NULL),
(163, 'active', '2021-05-03 21:34:03', NULL, NULL),
(164, 'active', '2021-05-03 21:34:03', NULL, NULL),
(165, 'active', '2021-05-03 21:34:03', NULL, NULL),
(166, 'active', '2021-05-03 21:34:03', NULL, NULL),
(167, 'active', '2021-05-03 21:34:03', NULL, NULL),
(168, 'active', '2021-05-03 21:34:03', NULL, NULL),
(169, 'active', '2021-05-03 21:34:03', NULL, NULL),
(170, 'active', '2021-05-03 21:34:03', NULL, NULL),
(171, 'active', '2021-05-03 21:34:03', NULL, NULL),
(172, 'active', '2021-05-03 21:34:03', NULL, NULL),
(173, 'active', '2021-05-03 21:34:03', NULL, NULL),
(174, 'active', '2021-05-03 21:34:03', NULL, '2021-05-03 21:00:00'),
(175, 'active', '2021-05-03 21:34:03', NULL, NULL),
(176, 'active', '2021-05-03 21:34:03', NULL, NULL),
(177, 'active', '2021-05-03 21:34:03', NULL, NULL),
(178, 'active', '2021-05-03 21:34:03', NULL, NULL),
(179, 'active', '2021-05-03 21:34:03', NULL, NULL),
(180, 'active', '2021-05-03 21:34:03', NULL, NULL),
(181, 'active', '2021-05-03 21:34:03', NULL, NULL),
(182, 'active', '2021-05-03 21:34:03', NULL, NULL),
(183, 'active', '2021-05-03 21:34:03', NULL, NULL),
(184, 'active', '2021-05-03 21:34:03', NULL, NULL),
(185, 'active', '2021-05-03 21:34:03', NULL, NULL),
(186, 'active', '2021-05-03 21:34:03', NULL, NULL),
(187, 'active', '2021-05-03 21:34:03', NULL, NULL),
(188, 'active', '2021-05-03 21:34:03', NULL, NULL),
(189, 'active', '2021-05-03 21:34:03', NULL, NULL),
(190, 'active', '2021-05-03 21:34:03', NULL, NULL),
(191, 'active', '2021-05-03 21:34:03', NULL, NULL),
(192, 'active', '2021-05-03 21:34:03', NULL, NULL),
(193, 'active', '2021-05-03 21:34:03', NULL, NULL),
(194, 'active', '2021-05-03 21:34:03', NULL, NULL),
(195, 'active', '2021-05-03 21:34:03', NULL, NULL),
(196, 'active', '2021-05-03 21:34:03', NULL, NULL),
(197, 'active', '2021-05-03 21:34:03', NULL, NULL),
(198, 'active', '2021-05-03 21:34:03', NULL, NULL),
(199, 'active', '2021-05-03 21:34:03', NULL, NULL),
(200, 'active', '2021-05-03 21:34:03', NULL, NULL),
(201, 'active', '2021-05-03 21:34:03', NULL, NULL),
(202, 'active', '2021-05-03 21:34:03', NULL, NULL),
(203, 'active', '2021-05-03 21:34:03', NULL, NULL),
(204, 'active', '2021-05-03 21:34:03', NULL, NULL),
(205, 'active', '2021-05-03 21:34:03', NULL, NULL),
(206, 'active', '2021-05-03 21:34:03', NULL, NULL),
(207, 'active', '2021-05-03 21:34:03', NULL, NULL),
(208, 'active', '2021-05-03 21:34:03', NULL, NULL),
(209, 'active', '2021-05-03 21:34:03', NULL, NULL),
(210, 'active', '2021-05-03 21:34:03', NULL, NULL),
(211, 'active', '2021-05-03 21:34:03', NULL, NULL),
(212, 'active', '2021-05-03 21:34:03', NULL, NULL),
(213, 'active', '2021-05-03 21:34:03', NULL, NULL),
(214, 'active', '2021-05-03 21:34:03', NULL, NULL),
(215, 'active', '2021-05-03 21:34:03', NULL, NULL),
(216, 'active', '2021-05-03 21:34:03', NULL, NULL),
(217, 'active', '2021-05-03 21:34:03', NULL, NULL),
(218, 'active', '2021-05-03 21:34:03', NULL, NULL),
(219, 'active', '2021-05-03 21:34:03', NULL, NULL),
(220, 'active', '2021-05-03 21:34:03', NULL, NULL),
(221, 'active', '2021-05-03 21:34:03', NULL, NULL),
(222, 'active', '2021-05-03 21:34:03', NULL, NULL),
(223, 'active', '2021-05-03 21:34:03', NULL, NULL),
(224, 'active', '2021-05-03 21:34:03', NULL, NULL),
(225, 'active', '2021-05-03 21:34:03', NULL, NULL),
(226, 'active', '2021-05-03 21:34:03', NULL, NULL),
(227, 'active', '2021-05-03 21:34:03', NULL, NULL),
(228, 'active', '2021-05-03 21:34:03', NULL, NULL),
(229, 'active', '2021-05-03 21:34:03', NULL, NULL),
(230, 'active', '2021-05-03 21:34:03', NULL, NULL),
(231, 'active', '2021-05-03 21:34:03', NULL, NULL),
(232, 'active', '2021-05-03 21:34:03', NULL, NULL),
(233, 'active', '2021-05-03 21:34:03', NULL, NULL),
(234, 'active', '2021-05-03 21:34:03', NULL, NULL),
(235, 'active', '2021-05-03 21:34:03', NULL, NULL),
(237, 'active', '2021-05-03 21:34:03', NULL, NULL),
(238, 'active', '2021-05-03 21:34:03', NULL, NULL),
(239, 'active', '2021-05-03 21:34:03', NULL, NULL),
(242, 'active', '2021-05-03 21:34:03', NULL, NULL),
(243, 'active', '2021-05-03 21:34:03', NULL, NULL),
(244, 'active', '2021-05-03 21:34:03', NULL, NULL),
(245, 'active', '2021-05-03 21:34:03', NULL, NULL),
(246, 'active', '2021-05-03 21:34:03', NULL, NULL),
(247, 'active', '2021-05-03 21:34:03', NULL, NULL),
(248, 'active', '2021-05-03 21:34:03', NULL, NULL),
(249, 'active', '2021-05-03 21:34:03', NULL, NULL),
(250, 'active', '2021-05-03 21:34:03', NULL, NULL),
(251, 'active', '2021-05-03 21:34:03', NULL, NULL),
(252, 'active', '2021-05-03 21:34:03', NULL, NULL),
(253, 'active', '2021-05-03 21:34:03', NULL, NULL),
(254, 'active', '2021-05-03 21:34:03', NULL, '2021-05-04 21:00:00'),
(255, 'active', '2021-05-03 21:34:03', NULL, '2021-05-04 21:00:00'),
(256, 'active', '2021-05-03 21:34:03', NULL, NULL),
(257, 'active', '2021-05-03 21:34:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country_translations`
--

CREATE TABLE `country_translations` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `locale` varchar(30) NOT NULL DEFAULT 'en',
  `name` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `country_translations`
--

INSERT INTO `country_translations` (`id`, `country_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'Afghanistan', '2021-05-03 21:39:05', NULL, NULL),
(2, 2, 'en', 'Albania', '2021-05-03 21:39:05', NULL, NULL),
(3, 3, 'en', 'Algeria', '2021-05-03 21:39:05', NULL, NULL),
(4, 4, 'en', 'American Samoa', '2021-05-03 21:39:05', NULL, NULL),
(5, 5, 'en', 'Andorra', '2021-05-03 21:39:05', NULL, NULL),
(6, 6, 'en', 'Angola', '2021-05-03 21:39:05', NULL, NULL),
(7, 7, 'en', 'Anguilla', '2021-05-03 21:39:05', NULL, NULL),
(8, 8, 'en', 'Antarctica', '2021-05-03 21:39:05', NULL, NULL),
(9, 9, 'en', 'Antigua and Barbuda', '2021-05-03 21:39:05', NULL, NULL),
(10, 10, 'en', 'Argentina', '2021-05-03 21:39:05', NULL, NULL),
(11, 11, 'en', 'Armenia', '2021-05-03 21:39:05', NULL, NULL),
(13, 13, 'en', 'Australia', '2021-05-03 21:39:05', NULL, NULL),
(14, 14, 'en', 'Austria', '2021-05-03 21:39:05', NULL, NULL),
(15, 15, 'en', 'Azerbaijan', '2021-05-03 21:39:05', NULL, NULL),
(16, 16, 'en', 'Bahamas', '2021-05-03 21:39:05', NULL, NULL),
(17, 17, 'en', 'Bahrain', '2021-05-03 21:39:05', NULL, NULL),
(18, 18, 'en', 'Bangladesh', '2021-05-03 21:39:05', NULL, NULL),
(19, 19, 'en', 'Barbados', '2021-05-03 21:39:05', NULL, NULL),
(20, 20, 'en', 'Belarus', '2021-05-03 21:39:05', NULL, NULL),
(21, 21, 'en', 'Belgium', '2021-05-03 21:39:05', NULL, NULL),
(22, 22, 'en', 'Belize', '2021-05-03 21:39:05', NULL, NULL),
(23, 23, 'en', 'Benin', '2021-05-03 21:39:05', NULL, NULL),
(24, 24, 'en', 'Bermuda', '2021-05-03 21:39:05', NULL, NULL),
(25, 25, 'en', 'Bhutan', '2021-05-03 21:39:05', NULL, NULL),
(26, 26, 'en', 'Bolivia', '2021-05-03 21:39:05', NULL, NULL),
(27, 27, 'en', 'Bosnia and Herzegovina', '2021-05-03 21:39:05', NULL, NULL),
(28, 28, 'en', 'Botswana', '2021-05-03 21:39:05', NULL, NULL),
(29, 29, 'en', 'Bouvet Island', '2021-05-03 21:39:05', NULL, NULL),
(30, 30, 'en', 'Brazil', '2021-05-03 21:39:05', NULL, NULL),
(31, 31, 'en', 'British Indian Ocean Territory', '2021-05-03 21:39:05', NULL, NULL),
(32, 32, 'en', 'Brunei Darussalam', '2021-05-03 21:39:05', NULL, NULL),
(33, 33, 'en', 'Bulgaria', '2021-05-03 21:39:05', NULL, NULL),
(34, 34, 'en', 'Burkina Faso', '2021-05-03 21:39:05', NULL, NULL),
(35, 35, 'en', 'Burundi', '2021-05-03 21:39:05', NULL, NULL),
(36, 36, 'en', 'Cambodia', '2021-05-03 21:39:05', NULL, NULL),
(37, 37, 'en', 'Cameroon', '2021-05-03 21:39:05', NULL, NULL),
(38, 38, 'en', 'Canada', '2021-05-03 21:39:05', NULL, NULL),
(39, 39, 'en', 'Cape Verde', '2021-05-03 21:39:05', NULL, NULL),
(40, 40, 'en', 'Cayman Islands', '2021-05-03 21:39:05', NULL, NULL),
(41, 41, 'en', 'Central African Republic', '2021-05-03 21:39:05', NULL, NULL),
(42, 42, 'en', 'Chad', '2021-05-03 21:39:05', NULL, NULL),
(43, 43, 'en', 'Chile', '2021-05-03 21:39:05', NULL, NULL),
(44, 44, 'en', 'China', '2021-05-03 21:39:05', NULL, NULL),
(45, 45, 'en', 'Christmas Island', '2021-05-03 21:39:05', NULL, NULL),
(46, 46, 'en', 'Cocos (Keeling) Islands', '2021-05-03 21:39:05', NULL, NULL),
(47, 47, 'en', 'Colombia', '2021-05-03 21:39:05', NULL, NULL),
(48, 48, 'en', 'Comoros', '2021-05-03 21:39:05', NULL, NULL),
(49, 49, 'en', 'Congo', '2021-05-03 21:39:05', NULL, NULL),
(50, 50, 'en', 'Cook Islands', '2021-05-03 21:39:05', NULL, NULL),
(51, 51, 'en', 'Costa Rica', '2021-05-03 21:39:05', NULL, NULL),
(52, 52, 'en', 'Cote D\'Ivoire', '2021-05-03 21:39:05', NULL, NULL),
(53, 53, 'en', 'Croatia', '2021-05-03 21:39:05', NULL, NULL),
(54, 54, 'en', 'Cuba', '2021-05-03 21:39:05', NULL, NULL),
(55, 55, 'en', 'Cyprus', '2021-05-03 21:39:05', NULL, NULL),
(56, 56, 'en', 'Czech Republic', '2021-05-03 21:39:05', NULL, NULL),
(57, 57, 'en', 'Denmark', '2021-05-03 21:39:05', NULL, NULL),
(58, 58, 'en', 'Djibouti', '2021-05-03 21:39:05', NULL, NULL),
(59, 59, 'en', 'Dominica', '2021-05-03 21:39:05', NULL, NULL),
(60, 60, 'en', 'Dominican Republic', '2021-05-03 21:39:05', NULL, NULL),
(61, 61, 'en', 'East Timor', '2021-05-03 21:39:05', NULL, NULL),
(62, 62, 'en', 'Ecuador', '2021-05-03 21:39:05', NULL, NULL),
(63, 63, 'en', 'Egypt', '2021-05-03 21:39:05', NULL, NULL),
(64, 64, 'en', 'El Salvador', '2021-05-03 21:39:05', NULL, NULL),
(65, 65, 'en', 'Equatorial Guinea', '2021-05-03 21:39:05', NULL, NULL),
(66, 66, 'en', 'Eritrea', '2021-05-03 21:39:05', NULL, NULL),
(67, 67, 'en', 'Estonia', '2021-05-03 21:39:05', NULL, NULL),
(68, 68, 'en', 'Ethiopia', '2021-05-03 21:39:05', NULL, NULL),
(69, 69, 'en', 'Falkland Islands (Malvinas)', '2021-05-03 21:39:05', NULL, NULL),
(70, 70, 'en', 'Faroe Islands', '2021-05-03 21:39:05', NULL, NULL),
(71, 71, 'en', 'Fiji', '2021-05-03 21:39:05', NULL, NULL),
(72, 72, 'en', 'Finland', '2021-05-03 21:39:05', NULL, NULL),
(74, 74, 'en', 'France, Metropolitan', '2021-05-03 21:39:05', NULL, NULL),
(75, 75, 'en', 'French Guiana', '2021-05-03 21:39:05', NULL, NULL),
(76, 76, 'en', 'French Polynesia', '2021-05-03 21:39:05', NULL, NULL),
(77, 77, 'en', 'French Southern Territories', '2021-05-03 21:39:05', NULL, NULL),
(78, 78, 'en', 'Gabon', '2021-05-03 21:39:05', NULL, NULL),
(79, 79, 'en', 'Gambia', '2021-05-03 21:39:05', NULL, NULL),
(80, 80, 'en', 'Georgia', '2021-05-03 21:39:05', NULL, NULL),
(81, 81, 'en', 'Germany', '2021-05-03 21:39:05', NULL, NULL),
(82, 82, 'en', 'Ghana', '2021-05-03 21:39:05', NULL, NULL),
(83, 83, 'en', 'Gibraltar', '2021-05-03 21:39:05', NULL, NULL),
(84, 84, 'en', 'Greece', '2021-05-03 21:39:05', NULL, NULL),
(85, 85, 'en', 'Greenland', '2021-05-03 21:39:05', NULL, NULL),
(86, 86, 'en', 'Grenada', '2021-05-03 21:39:05', NULL, NULL),
(87, 87, 'en', 'Guadeloupe', '2021-05-03 21:39:05', NULL, NULL),
(88, 88, 'en', 'Guam', '2021-05-03 21:39:05', NULL, NULL),
(89, 89, 'en', 'Guatemala', '2021-05-03 21:39:05', NULL, NULL),
(90, 90, 'en', 'Guinea', '2021-05-03 21:39:05', NULL, NULL),
(91, 91, 'en', 'Guinea-Bissau', '2021-05-03 21:39:05', NULL, NULL),
(92, 92, 'en', 'Guyana', '2021-05-03 21:39:05', NULL, NULL),
(93, 93, 'en', 'Haiti', '2021-05-03 21:39:05', NULL, NULL),
(94, 94, 'en', 'Heard and Mc Donald Islands', '2021-05-03 21:39:05', NULL, NULL),
(95, 95, 'en', 'Honduras', '2021-05-03 21:39:05', NULL, NULL),
(96, 96, 'en', 'Hong Kong', '2021-05-03 21:39:05', NULL, NULL),
(97, 97, 'en', 'Hungary', '2021-05-03 21:39:05', NULL, NULL),
(98, 98, 'en', 'Iceland', '2021-05-03 21:39:05', NULL, NULL),
(99, 99, 'en', 'India', '2021-05-03 21:39:05', NULL, NULL),
(100, 100, 'en', 'Indonesia', '2021-05-03 21:39:05', NULL, NULL),
(101, 101, 'en', 'Iran (Islamic Republic of)', '2021-05-03 21:39:05', NULL, NULL),
(102, 102, 'en', 'Iraq', '2021-05-03 21:39:05', NULL, NULL),
(103, 103, 'en', 'Ireland', '2021-05-03 21:39:05', NULL, NULL),
(104, 104, 'en', 'Israel', '2021-05-03 21:39:05', NULL, NULL),
(105, 105, 'en', 'Italy', '2021-05-03 21:39:05', NULL, NULL),
(106, 106, 'en', 'Jamaica', '2021-05-03 21:39:05', NULL, NULL),
(107, 107, 'en', 'Japan', '2021-05-03 21:39:05', NULL, NULL),
(108, 108, 'en', 'Jordan', '2021-05-03 21:39:05', NULL, NULL),
(109, 109, 'en', 'Kazakhstan', '2021-05-03 21:39:05', NULL, NULL),
(110, 110, 'en', 'Kenya', '2021-05-03 21:39:05', NULL, NULL),
(111, 111, 'en', 'Kiribati', '2021-05-03 21:39:05', NULL, NULL),
(112, 112, 'en', 'North Korea', '2021-05-03 21:39:05', NULL, NULL),
(113, 113, 'en', 'South Korea', '2021-05-03 21:39:05', NULL, NULL),
(114, 114, 'en', 'Kuwait', '2021-05-03 21:39:05', NULL, NULL),
(115, 115, 'en', 'Kyrgyzstan', '2021-05-03 21:39:05', NULL, NULL),
(116, 116, 'en', 'Lao People\'s Democratic Republic', '2021-05-03 21:39:05', NULL, NULL),
(117, 117, 'en', 'Latvia', '2021-05-03 21:39:05', NULL, NULL),
(118, 118, 'en', 'Lebanon', '2021-05-03 21:39:05', NULL, NULL),
(119, 119, 'en', 'Lesotho', '2021-05-03 21:39:05', NULL, NULL),
(120, 120, 'en', 'Liberia', '2021-05-03 21:39:05', NULL, NULL),
(121, 121, 'en', 'Libyan Arab Jamahiriya', '2021-05-03 21:39:05', NULL, NULL),
(122, 122, 'en', 'Liechtenstein', '2021-05-03 21:39:05', NULL, NULL),
(123, 123, 'en', 'Lithuania', '2021-05-03 21:39:05', NULL, NULL),
(124, 124, 'en', 'Luxembourg', '2021-05-03 21:39:05', NULL, NULL),
(125, 125, 'en', 'Macau', '2021-05-03 21:39:05', NULL, NULL),
(126, 126, 'en', 'FYROM', '2021-05-03 21:39:05', NULL, NULL),
(127, 127, 'en', 'Madagascar', '2021-05-03 21:39:05', NULL, NULL),
(128, 128, 'en', 'Malawi', '2021-05-03 21:39:05', NULL, NULL),
(129, 129, 'en', 'Malaysia', '2021-05-03 21:39:05', NULL, NULL),
(130, 130, 'en', 'Maldives', '2021-05-03 21:39:05', NULL, NULL),
(131, 131, 'en', 'Mali', '2021-05-03 21:39:05', NULL, NULL),
(132, 132, 'en', 'Malta', '2021-05-03 21:39:05', NULL, NULL),
(133, 133, 'en', 'Marshall Islands', '2021-05-03 21:39:05', NULL, NULL),
(134, 134, 'en', 'Martinique', '2021-05-03 21:39:05', NULL, NULL),
(135, 135, 'en', 'Mauritania', '2021-05-03 21:39:05', NULL, NULL),
(136, 136, 'en', 'Mauritius', '2021-05-03 21:39:05', NULL, NULL),
(137, 137, 'en', 'Mayotte', '2021-05-03 21:39:05', NULL, NULL),
(138, 138, 'en', 'Mexico', '2021-05-03 21:39:05', NULL, NULL),
(139, 139, 'en', 'Micronesia, Federated States of', '2021-05-03 21:39:05', NULL, NULL),
(140, 140, 'en', 'Moldova, Republic of', '2021-05-03 21:39:05', NULL, NULL),
(141, 141, 'en', 'Monaco', '2021-05-03 21:39:05', NULL, NULL),
(142, 142, 'en', 'Mongolia', '2021-05-03 21:39:05', NULL, NULL),
(143, 143, 'en', 'Montserrat', '2021-05-03 21:39:05', NULL, NULL),
(144, 144, 'en', 'Morocco', '2021-05-03 21:39:05', NULL, NULL),
(145, 145, 'en', 'Mozambique', '2021-05-03 21:39:05', NULL, NULL),
(146, 146, 'en', 'Myanmar', '2021-05-03 21:39:05', NULL, NULL),
(147, 147, 'en', 'Namibia', '2021-05-03 21:39:05', NULL, NULL),
(148, 148, 'en', 'Nauru', '2021-05-03 21:39:05', NULL, NULL),
(149, 149, 'en', 'Nepal', '2021-05-03 21:39:05', NULL, NULL),
(150, 150, 'en', 'Netherlands', '2021-05-03 21:39:05', NULL, NULL),
(151, 151, 'en', 'Netherlands Antilles', '2021-05-03 21:39:05', NULL, NULL),
(152, 152, 'en', 'New Caledonia', '2021-05-03 21:39:05', NULL, NULL),
(153, 153, 'en', 'New Zealand', '2021-05-03 21:39:05', NULL, NULL),
(154, 154, 'en', 'Nicaragua', '2021-05-03 21:39:05', NULL, NULL),
(155, 155, 'en', 'Niger', '2021-05-03 21:39:05', NULL, NULL),
(156, 156, 'en', 'Nigeria', '2021-05-03 21:39:05', NULL, NULL),
(157, 157, 'en', 'Niue', '2021-05-03 21:39:05', NULL, NULL),
(158, 158, 'en', 'Norfolk Island', '2021-05-03 21:39:05', NULL, NULL),
(159, 159, 'en', 'Northern Mariana Islands', '2021-05-03 21:39:05', NULL, NULL),
(160, 160, 'en', 'Norway', '2021-05-03 21:39:05', NULL, NULL),
(161, 161, 'en', 'Oman', '2021-05-03 21:39:05', NULL, NULL),
(162, 162, 'en', 'Pakistan', '2021-05-03 21:39:05', NULL, NULL),
(163, 163, 'en', 'Palau', '2021-05-03 21:39:05', NULL, NULL),
(164, 164, 'en', 'Panama', '2021-05-03 21:39:05', NULL, NULL),
(165, 165, 'en', 'Papua New Guinea', '2021-05-03 21:39:05', NULL, NULL),
(166, 166, 'en', 'Paraguay', '2021-05-03 21:39:05', NULL, NULL),
(167, 167, 'en', 'Peru', '2021-05-03 21:39:05', NULL, NULL),
(168, 168, 'en', 'Philippines', '2021-05-03 21:39:05', NULL, NULL),
(169, 169, 'en', 'Pitcairn', '2021-05-03 21:39:05', NULL, NULL),
(170, 170, 'en', 'Poland', '2021-05-03 21:39:05', NULL, NULL),
(171, 171, 'en', 'Portugal', '2021-05-03 21:39:05', NULL, NULL),
(172, 172, 'en', 'Puerto Rico', '2021-05-03 21:39:05', NULL, NULL),
(173, 173, 'en', 'Qatar', '2021-05-03 21:39:05', NULL, NULL),
(174, 174, 'en', 'Reunion', '2021-05-03 21:39:05', NULL, NULL),
(175, 175, 'en', 'Romania', '2021-05-03 21:39:05', NULL, NULL),
(176, 176, 'en', 'Russian Federation', '2021-05-03 21:39:05', NULL, NULL),
(177, 177, 'en', 'Rwanda', '2021-05-03 21:39:05', NULL, NULL),
(178, 178, 'en', 'Saint Kitts and Nevis', '2021-05-03 21:39:05', NULL, NULL),
(179, 179, 'en', 'Saint Lucia', '2021-05-03 21:39:05', NULL, NULL),
(180, 180, 'en', 'Saint Vincent and the Grenadines', '2021-05-03 21:39:05', NULL, NULL),
(181, 181, 'en', 'Samoa', '2021-05-03 21:39:05', NULL, NULL),
(182, 182, 'en', 'San Marino', '2021-05-03 21:39:05', NULL, NULL),
(183, 183, 'en', 'Sao Tome and Principe', '2021-05-03 21:39:05', NULL, NULL),
(184, 184, 'en', 'Saudi Arabia', '2021-05-03 21:39:05', NULL, NULL),
(185, 185, 'en', 'Senegal', '2021-05-03 21:39:05', NULL, NULL),
(186, 186, 'en', 'Seychelles', '2021-05-03 21:39:05', NULL, NULL),
(187, 187, 'en', 'Sierra Leone', '2021-05-03 21:39:05', NULL, NULL),
(188, 188, 'en', 'Singapore', '2021-05-03 21:39:05', NULL, NULL),
(189, 189, 'en', 'Slovak Republic', '2021-05-03 21:39:05', NULL, NULL),
(190, 190, 'en', 'Slovenia', '2021-05-03 21:39:05', NULL, NULL),
(191, 191, 'en', 'Solomon Islands', '2021-05-03 21:39:05', NULL, NULL),
(192, 192, 'en', 'Somalia', '2021-05-03 21:39:05', NULL, NULL),
(193, 193, 'en', 'South Africa', '2021-05-03 21:39:05', NULL, NULL),
(194, 194, 'en', 'South Georgia', '2021-05-03 21:39:05', '2021-05-04 14:52:50', NULL),
(195, 195, 'en', 'Spain', '2021-05-03 21:39:05', NULL, NULL),
(196, 196, 'en', 'Sri Lanka', '2021-05-03 21:39:05', NULL, NULL),
(197, 197, 'en', 'St. Helena', '2021-05-03 21:39:05', NULL, NULL),
(198, 198, 'en', 'St. Pierre and Miquelon', '2021-05-03 21:39:05', NULL, NULL),
(199, 199, 'en', 'Sudan', '2021-05-03 21:39:05', NULL, NULL),
(200, 200, 'en', 'Suriname', '2021-05-03 21:39:05', NULL, NULL),
(201, 201, 'en', 'Svalbard and Jan Mayen Islands', '2021-05-03 21:39:05', NULL, NULL),
(202, 202, 'en', 'Swaziland', '2021-05-03 21:39:05', NULL, NULL),
(203, 203, 'en', 'Sweden', '2021-05-03 21:39:05', NULL, NULL),
(204, 204, 'en', 'Switzerland', '2021-05-03 21:39:05', NULL, NULL),
(205, 205, 'en', 'Syrian Arab Republic', '2021-05-03 21:39:05', NULL, NULL),
(206, 206, 'en', 'Taiwan', '2021-05-03 21:39:05', NULL, NULL),
(207, 207, 'en', 'Tajikistan', '2021-05-03 21:39:05', NULL, NULL),
(208, 208, 'en', 'Tanzania, United Republic of', '2021-05-03 21:39:05', NULL, NULL),
(209, 209, 'en', 'Thailand', '2021-05-03 21:39:05', NULL, NULL),
(210, 210, 'en', 'Togo', '2021-05-03 21:39:05', NULL, NULL),
(211, 211, 'en', 'Tokelau', '2021-05-03 21:39:05', NULL, NULL),
(212, 212, 'en', 'Tonga', '2021-05-03 21:39:05', NULL, NULL),
(213, 213, 'en', 'Trinidad and Tobago', '2021-05-03 21:39:05', NULL, NULL),
(214, 214, 'en', 'Tunisia', '2021-05-03 21:39:05', NULL, NULL),
(215, 215, 'en', 'Turkey', '2021-05-03 21:39:05', NULL, NULL),
(216, 216, 'en', 'Turkmenistan', '2021-05-03 21:39:05', NULL, NULL),
(217, 217, 'en', 'Turks and Caicos Islands', '2021-05-03 21:39:05', NULL, NULL),
(218, 218, 'en', 'Tuvalu', '2021-05-03 21:39:05', NULL, NULL),
(219, 219, 'en', 'Uganda', '2021-05-03 21:39:05', NULL, NULL),
(220, 220, 'en', 'Ukraine', '2021-05-03 21:39:05', NULL, NULL),
(221, 221, 'en', 'United Arab Emirates', '2021-05-03 21:39:05', NULL, NULL),
(222, 222, 'en', 'United Kingdom', '2021-05-03 21:39:05', NULL, NULL),
(223, 223, 'en', 'United States', '2021-05-03 21:39:05', NULL, NULL),
(224, 224, 'en', 'United States Minor Outlying Islands', '2021-05-03 21:39:05', NULL, NULL),
(225, 225, 'en', 'Uruguay', '2021-05-03 21:39:05', NULL, NULL),
(226, 226, 'en', 'Uzbekistan', '2021-05-03 21:39:05', NULL, NULL),
(227, 227, 'en', 'Vanuatu', '2021-05-03 21:39:05', NULL, NULL),
(228, 228, 'en', 'Vatican City State (Holy See)', '2021-05-03 21:39:05', NULL, NULL),
(229, 229, 'en', 'Venezuela', '2021-05-03 21:39:05', NULL, NULL),
(230, 230, 'en', 'Viet Nam', '2021-05-03 21:39:05', NULL, NULL),
(231, 231, 'en', 'Virgin Islands (British)', '2021-05-03 21:39:05', NULL, NULL),
(232, 232, 'en', 'Virgin Islands (U.S.)', '2021-05-03 21:39:05', NULL, NULL),
(233, 233, 'en', 'Wallis and Futuna Islands', '2021-05-03 21:39:05', NULL, NULL),
(234, 234, 'en', 'Western Sahara', '2021-05-03 21:39:05', NULL, NULL),
(235, 235, 'en', 'Yemen', '2021-05-03 21:39:05', NULL, NULL),
(237, 237, 'en', 'Democratic Republic of Congo', '2021-05-03 21:39:05', NULL, NULL),
(238, 238, 'en', 'Zambia', '2021-05-03 21:39:05', NULL, NULL),
(239, 239, 'en', 'Zimbabwe', '2021-05-03 21:39:05', NULL, NULL),
(242, 242, 'en', 'Montenegro', '2021-05-03 21:39:05', NULL, NULL),
(243, 243, 'en', 'Serbia', '2021-05-03 21:39:05', NULL, NULL),
(244, 244, 'en', 'Aaland Islands', '2021-05-03 21:39:05', NULL, NULL),
(245, 245, 'en', 'Bonaire, Sint Eustatius and Saba', '2021-05-03 21:39:05', NULL, NULL),
(246, 246, 'en', 'Curacao', '2021-05-03 21:39:05', NULL, NULL),
(247, 247, 'en', 'Palestinian Territory, Occupied', '2021-05-03 21:39:05', NULL, NULL),
(248, 248, 'en', 'South Sudan', '2021-05-03 21:39:05', NULL, NULL),
(249, 249, 'en', 'St. Barthelemy', '2021-05-03 21:39:05', NULL, NULL),
(250, 250, 'en', 'St. Martin (French part)', '2021-05-03 21:39:05', NULL, NULL),
(251, 251, 'en', 'Canary Islands', '2021-05-03 21:39:05', NULL, NULL),
(252, 252, 'en', 'Ascension Island (British)', '2021-05-03 21:39:05', NULL, NULL),
(253, 253, 'en', 'Kosovo', '2021-05-03 21:39:05', '2021-05-04 23:09:41', NULL),
(254, 254, 'en', 'Isle of Man', '2021-05-03 21:39:05', NULL, NULL),
(255, 255, 'en', 'Tristan da Cunha', '2021-05-03 21:39:05', NULL, NULL),
(256, 256, 'en', 'Guernsey', '2021-05-03 21:39:05', NULL, NULL),
(257, 257, 'en', 'Jersey', '2021-05-03 21:39:05', NULL, NULL),
(638, 194, 'ar', 'جورجيا الجنوبية', '2021-05-04 14:52:50', '2021-05-04 14:52:50', NULL),
(750, 253, 'ar', 'كوسوفو', '2021-05-04 23:09:41', '2021-05-04 23:09:41', NULL),
(258, 1, 'ar', 'أفغانستان', '2021-05-03 21:39:05', '2021-05-03 23:20:23', NULL),
(259, 1, 'tr', 'Afganistan', '2021-05-03 21:39:05', '2021-05-03 23:20:23', NULL),
(260, 2, 'ar', 'ألبانيا', '2021-05-03 21:39:05', '2021-05-03 23:21:17', NULL),
(261, 2, 'tr', 'Arnavutluk', '2021-05-03 21:39:05', '2021-05-03 23:21:17', NULL),
(262, 3, 'ar', 'الجزائر', '2021-05-03 21:39:05', '2021-05-03 23:22:09', NULL),
(263, 3, 'tr', 'Cezayir', '2021-05-03 21:39:05', '2021-05-03 23:22:09', NULL),
(264, 4, 'ar', 'ساموا الأمريكية', '2021-05-03 21:39:05', '2021-05-03 23:22:54', NULL),
(265, 4, 'tr', 'Amerikan Samoası', '2021-05-03 21:39:05', '2021-05-03 23:22:54', NULL),
(266, 5, 'ar', 'أندورا', '2021-05-03 21:39:05', '2021-05-03 23:23:46', NULL),
(267, 5, 'tr', 'Andorra', '2021-05-03 21:39:05', NULL, NULL),
(268, 6, 'ar', 'أنغولا', '2021-05-03 21:39:05', '2021-05-03 23:24:55', NULL),
(269, 6, 'tr', 'Angola', '2021-05-03 21:39:05', NULL, NULL),
(270, 7, 'ar', 'أنغيلا', '2021-05-03 21:39:05', '2021-05-03 23:25:41', NULL),
(271, 7, 'tr', 'Anguilla', '2021-05-03 21:39:05', NULL, NULL),
(272, 8, 'ar', 'أنتاركتيكا', '2021-05-03 21:39:05', '2021-05-03 23:26:23', NULL),
(273, 8, 'tr', 'Antarktika', '2021-05-03 21:39:05', '2021-05-03 23:26:23', NULL),
(274, 9, 'ar', 'أنتيغوا وبربودا', '2021-05-03 21:39:05', '2021-05-03 23:27:06', NULL),
(275, 9, 'tr', 'Antigua ve Barbuda', '2021-05-03 21:39:05', '2021-05-03 23:27:06', NULL),
(276, 10, 'ar', 'الأرجنتين', '2021-05-03 21:39:05', '2021-05-03 23:27:56', NULL),
(277, 10, 'tr', 'Arjantin', '2021-05-03 21:39:05', '2021-05-03 23:27:56', NULL),
(278, 11, 'ar', 'أرمينيا', '2021-05-03 21:39:05', '2021-05-03 23:29:50', NULL),
(279, 11, 'tr', 'Ermenistan', '2021-05-03 21:39:05', '2021-05-03 23:29:50', NULL),
(280, 13, 'ar', 'أستراليا', '2021-05-03 21:39:05', '2021-05-03 23:30:33', NULL),
(281, 13, 'tr', 'Avustralya', '2021-05-03 21:39:05', '2021-05-03 23:30:33', NULL),
(282, 14, 'ar', 'النمسا', '2021-05-03 21:39:05', '2021-05-03 23:31:17', NULL),
(283, 14, 'tr', 'Avusturya', '2021-05-03 21:39:05', '2021-05-03 23:31:17', NULL),
(284, 15, 'ar', 'أذربيجان', '2021-05-03 21:39:05', '2021-05-03 23:32:02', NULL),
(285, 15, 'tr', 'Azerbaycan', '2021-05-03 21:39:05', '2021-05-03 23:32:02', NULL),
(286, 16, 'ar', 'جزر البهاما', '2021-05-03 21:39:05', '2021-05-03 23:32:40', NULL),
(287, 16, 'tr', 'Bahamalar', '2021-05-03 21:39:05', '2021-05-03 23:32:40', NULL),
(288, 17, 'ar', 'البحرين', '2021-05-03 21:39:05', '2021-05-03 23:33:45', NULL),
(289, 17, 'tr', 'Bahreyn', '2021-05-03 21:39:05', '2021-05-03 23:33:45', NULL),
(290, 18, 'ar', 'بنغلاديش', '2021-05-03 21:39:05', '2021-05-03 23:34:31', NULL),
(291, 18, 'tr', 'Bangladeş', '2021-05-03 21:39:05', '2021-05-03 23:34:31', NULL),
(292, 19, 'ar', 'بربادوس', '2021-05-03 21:39:05', '2021-05-03 23:35:13', NULL),
(293, 19, 'tr', 'Barbados', '2021-05-03 21:39:05', NULL, NULL),
(294, 20, 'ar', 'بيلاروسيا', '2021-05-03 21:39:05', '2021-05-03 23:36:01', NULL),
(295, 20, 'tr', 'Belarus', '2021-05-03 21:39:05', NULL, NULL),
(296, 21, 'ar', 'بلجيكا', '2021-05-03 21:39:05', '2021-05-03 23:36:40', NULL),
(297, 21, 'tr', 'Belçika', '2021-05-03 21:39:05', '2021-05-03 23:36:40', NULL),
(298, 22, 'ar', 'بليز', '2021-05-03 21:39:05', '2021-05-03 23:37:21', NULL),
(299, 22, 'tr', 'Belize', '2021-05-03 21:39:05', NULL, NULL),
(300, 23, 'ar', 'بنين', '2021-05-03 21:39:05', '2021-05-03 23:38:07', NULL),
(301, 23, 'tr', 'Benin', '2021-05-03 21:39:05', NULL, NULL),
(302, 24, 'ar', 'برمودا', '2021-05-03 21:39:05', '2021-05-03 23:38:50', NULL),
(303, 24, 'tr', 'Bermuda', '2021-05-03 21:39:05', NULL, NULL),
(304, 25, 'ar', 'بوتان', '2021-05-03 21:39:05', '2021-05-03 23:39:26', NULL),
(305, 25, 'tr', 'Butan', '2021-05-03 21:39:05', '2021-05-03 23:39:26', NULL),
(306, 26, 'ar', 'بوليفيا', '2021-05-03 21:39:05', '2021-05-03 23:40:04', NULL),
(307, 26, 'tr', 'Bolivya', '2021-05-03 21:39:05', '2021-05-03 23:40:04', NULL),
(308, 27, 'ar', 'البوسنة والهرسك', '2021-05-03 21:39:05', '2021-05-03 23:41:24', NULL),
(309, 27, 'tr', 'Bosna Hersek', '2021-05-03 21:39:05', '2021-05-03 23:41:24', NULL),
(310, 28, 'ar', 'بوتسوانا', '2021-05-03 21:39:05', '2021-05-03 23:42:04', NULL),
(311, 28, 'tr', 'Botsvana', '2021-05-03 21:39:05', '2021-05-03 23:42:04', NULL),
(312, 29, 'ar', 'جزيرة بوفيت', '2021-05-03 21:39:05', '2021-05-03 23:42:43', NULL),
(313, 29, 'tr', 'Bouvet Adası', '2021-05-03 21:39:05', '2021-05-03 23:42:43', NULL),
(314, 30, 'ar', 'البرازيل', '2021-05-03 21:39:05', '2021-05-03 23:43:21', NULL),
(315, 30, 'tr', 'Brezilya', '2021-05-03 21:39:05', '2021-05-03 23:43:21', NULL),
(316, 31, 'ar', 'إقليم المحيط البريطاني الهندي', '2021-05-03 21:39:05', '2021-05-03 23:44:06', NULL),
(317, 31, 'tr', 'İngiliz Hint Okyanusu Bölgesi', '2021-05-03 21:39:05', '2021-05-03 23:44:06', NULL),
(318, 32, 'ar', 'بروناي دار السلام', '2021-05-03 21:39:05', '2021-05-03 23:44:45', NULL),
(319, 32, 'tr', 'Brunei Darussalam', '2021-05-03 21:39:05', NULL, NULL),
(320, 33, 'ar', 'بلغاريا', '2021-05-03 21:39:05', '2021-05-03 23:45:25', NULL),
(321, 33, 'tr', 'Bulgaristan', '2021-05-03 21:39:05', '2021-05-03 23:45:25', NULL),
(322, 34, 'ar', 'بوركينا فاسو', '2021-05-03 21:39:05', '2021-05-03 23:46:06', NULL),
(323, 34, 'tr', 'Burkina Faso', '2021-05-03 21:39:05', NULL, NULL),
(324, 35, 'ar', 'بوروندي', '2021-05-03 21:39:05', '2021-05-03 23:47:10', NULL),
(325, 35, 'tr', 'Burundi', '2021-05-03 21:39:05', '2021-05-03 23:47:10', NULL),
(326, 36, 'ar', 'كمبوديا', '2021-05-03 21:39:05', '2021-05-03 23:47:55', NULL),
(327, 36, 'tr', 'Kamboçya', '2021-05-03 21:39:05', '2021-05-03 23:47:55', NULL),
(328, 37, 'ar', 'الكاميرون', '2021-05-03 21:39:05', '2021-05-03 23:48:55', NULL),
(329, 37, 'tr', 'Kamerun', '2021-05-03 21:39:05', '2021-05-03 23:48:55', NULL),
(330, 38, 'ar', 'كندا', '2021-05-03 21:39:05', '2021-05-03 23:49:31', NULL),
(331, 38, 'tr', 'Kanada', '2021-05-03 21:39:05', '2021-05-03 23:49:31', NULL),
(332, 39, 'ar', 'الرأس الأخضر', '2021-05-03 21:39:05', '2021-05-03 23:50:08', NULL),
(333, 39, 'tr', 'Cape Verde', '2021-05-03 21:39:05', NULL, NULL),
(334, 40, 'ar', 'جزر كايمان', '2021-05-03 21:39:05', '2021-05-04 07:07:11', NULL),
(335, 40, 'tr', 'Cayman Adaları', '2021-05-03 21:39:05', '2021-05-04 07:07:11', NULL),
(336, 41, 'ar', 'Central African Republic', '2021-05-03 21:39:05', NULL, NULL),
(337, 41, 'tr', 'Orta Afrika Cumhuriyeti', '2021-05-03 21:39:05', '2021-05-04 07:07:52', NULL),
(338, 42, 'ar', 'تشاد', '2021-05-03 21:39:05', '2021-05-04 07:08:39', NULL),
(339, 42, 'tr', 'Çad', '2021-05-03 21:39:05', '2021-05-04 07:08:39', NULL),
(340, 43, 'ar', 'تشيلي', '2021-05-03 21:39:05', '2021-05-04 07:09:33', NULL),
(341, 43, 'tr', 'Şili', '2021-05-03 21:39:05', '2021-05-04 07:09:33', NULL),
(342, 44, 'ar', 'الصين', '2021-05-03 21:39:05', '2021-05-04 07:10:40', NULL),
(343, 44, 'tr', 'Çin', '2021-05-03 21:39:05', '2021-05-04 07:10:40', NULL),
(344, 45, 'ar', 'جزيرة الكريسماس', '2021-05-03 21:39:05', '2021-05-04 07:11:33', NULL),
(345, 45, 'tr', 'Noel Adası', '2021-05-03 21:39:05', '2021-05-04 07:11:33', NULL),
(346, 46, 'ar', 'جزر كوكوس (كيلينغ)', '2021-05-03 21:39:05', '2021-05-04 07:12:17', NULL),
(347, 46, 'tr', 'Cocos (Keeling) Adaları', '2021-05-03 21:39:05', '2021-05-04 07:12:17', NULL),
(348, 47, 'ar', 'كولومبيا', '2021-05-03 21:39:05', '2021-05-04 07:12:58', NULL),
(349, 47, 'tr', 'Kolombiya', '2021-05-03 21:39:05', '2021-05-04 07:12:58', NULL),
(350, 48, 'ar', 'جزر القمر', '2021-05-03 21:39:05', '2021-05-04 07:14:04', NULL),
(351, 48, 'tr', 'Komorlar', '2021-05-03 21:39:05', '2021-05-04 07:14:04', NULL),
(352, 49, 'ar', 'الكونغو', '2021-05-03 21:39:05', '2021-05-04 07:15:11', NULL),
(353, 49, 'tr', 'Kongo', '2021-05-03 21:39:05', '2021-05-04 07:15:11', NULL),
(354, 50, 'ar', 'جزر كوك', '2021-05-03 21:39:05', '2021-05-04 07:15:52', NULL),
(355, 50, 'tr', 'Cook Adaları', '2021-05-03 21:39:05', '2021-05-04 07:15:52', NULL),
(356, 51, 'ar', 'كوستا ريكا', '2021-05-03 21:39:05', '2021-05-04 07:16:34', NULL),
(357, 51, 'tr', 'Kosta Rika', '2021-05-03 21:39:05', '2021-05-04 07:16:34', NULL),
(358, 52, 'ar', 'ساحل العاج', '2021-05-03 21:39:05', '2021-05-04 07:17:24', NULL),
(359, 52, 'tr', 'Fildişi Sahili', '2021-05-03 21:39:05', '2021-05-04 07:17:24', NULL),
(360, 53, 'ar', 'كرواتيا', '2021-05-03 21:39:05', '2021-05-04 07:18:28', NULL),
(361, 53, 'tr', 'Hırvatistan', '2021-05-03 21:39:05', '2021-05-04 07:18:28', NULL),
(362, 54, 'ar', 'كوبا', '2021-05-03 21:39:05', '2021-05-04 07:19:07', NULL),
(363, 54, 'tr', 'Küba', '2021-05-03 21:39:05', '2021-05-04 07:19:07', NULL),
(364, 55, 'ar', 'قبرص', '2021-05-03 21:39:05', '2021-05-04 07:19:45', NULL),
(365, 55, 'tr', 'Kıbrıs', '2021-05-03 21:39:05', '2021-05-04 07:19:45', NULL),
(366, 56, 'ar', 'الجمهورية التشيكية', '2021-05-03 21:39:05', '2021-05-04 07:20:27', NULL),
(367, 56, 'tr', 'Çek Cumhuriyeti', '2021-05-03 21:39:05', '2021-05-04 07:20:27', NULL),
(368, 57, 'ar', 'الدنمارك', '2021-05-03 21:39:05', '2021-05-04 07:21:09', NULL),
(369, 57, 'tr', 'Danimarka', '2021-05-03 21:39:05', '2021-05-04 07:21:09', NULL),
(370, 58, 'ar', 'جيبوتي', '2021-05-03 21:39:05', '2021-05-04 07:21:50', NULL),
(371, 58, 'tr', 'Cibuti', '2021-05-03 21:39:05', '2021-05-04 07:21:50', NULL),
(372, 59, 'ar', 'دومينيكا', '2021-05-03 21:39:05', '2021-05-04 07:22:27', NULL),
(373, 59, 'tr', 'Dominika', '2021-05-03 21:39:05', '2021-05-04 07:22:27', NULL),
(374, 60, 'ar', 'جمهورية الدومينيكان', '2021-05-03 21:39:05', '2021-05-04 07:23:07', NULL),
(375, 60, 'tr', 'Dominik Cumhuriyeti', '2021-05-03 21:39:05', '2021-05-04 07:23:07', NULL),
(376, 61, 'ar', 'تيمور الشرقية', '2021-05-03 21:39:05', '2021-05-04 07:23:51', NULL),
(377, 61, 'tr', 'Doğu Timor', '2021-05-03 21:39:05', '2021-05-04 07:23:51', NULL),
(378, 62, 'ar', 'الاكوادور', '2021-05-03 21:39:05', '2021-05-04 07:24:38', NULL),
(379, 62, 'tr', 'Ekvador', '2021-05-03 21:39:05', '2021-05-04 07:24:38', NULL),
(380, 63, 'ar', 'مصر', '2021-05-03 21:39:05', '2021-05-04 07:26:07', NULL),
(381, 63, 'tr', 'Mısır', '2021-05-03 21:39:05', '2021-05-04 07:26:07', NULL),
(382, 64, 'ar', 'السلفادور', '2021-05-03 21:39:05', '2021-05-04 07:27:25', NULL),
(383, 64, 'tr', 'El Salvador', '2021-05-03 21:39:05', NULL, NULL),
(384, 65, 'ar', 'غينيا الإستوائية', '2021-05-03 21:39:05', '2021-05-04 07:28:15', NULL),
(385, 65, 'tr', 'Ekvator Ginesi', '2021-05-03 21:39:05', '2021-05-04 07:28:15', NULL),
(386, 66, 'ar', 'إريتريا', '2021-05-03 21:39:05', '2021-05-04 07:29:02', NULL),
(387, 66, 'tr', 'Eritre', '2021-05-03 21:39:05', '2021-05-04 07:29:02', NULL),
(388, 67, 'ar', 'إستونيا', '2021-05-03 21:39:05', '2021-05-04 07:29:48', NULL),
(389, 67, 'tr', 'Estonya', '2021-05-03 21:39:05', '2021-05-04 07:29:48', NULL),
(390, 68, 'ar', 'أثيوبيا', '2021-05-03 21:39:05', '2021-05-04 07:30:35', NULL),
(391, 68, 'tr', 'Etiyopya', '2021-05-03 21:39:05', '2021-05-04 07:30:35', NULL),
(392, 69, 'ar', 'جزر فوكلاند (مالفيناس)', '2021-05-03 21:39:05', '2021-05-04 07:31:25', NULL),
(393, 69, 'tr', 'Falkland Adaları (Malvinas)', '2021-05-03 21:39:05', '2021-05-04 07:31:25', NULL),
(394, 70, 'ar', 'جزر فاروس', '2021-05-03 21:39:05', '2021-05-04 07:33:18', NULL),
(395, 70, 'tr', 'Faroe Adaları', '2021-05-03 21:39:05', '2021-05-04 07:33:18', NULL),
(396, 71, 'ar', 'فيجي', '2021-05-03 21:39:05', '2021-05-04 07:34:01', NULL),
(397, 71, 'tr', 'Fiji', '2021-05-03 21:39:05', NULL, NULL),
(398, 72, 'ar', 'فنلندا', '2021-05-03 21:39:05', '2021-05-04 07:34:50', NULL),
(399, 72, 'tr', 'Finlandiya', '2021-05-03 21:39:05', '2021-05-04 07:34:50', NULL),
(400, 74, 'ar', 'فرنسا ، متروبوليتان', '2021-05-03 21:39:05', '2021-05-04 07:36:39', NULL),
(401, 74, 'tr', 'Fransa, Metropolitan', '2021-05-03 21:39:05', '2021-05-04 07:36:39', NULL),
(402, 75, 'ar', 'غيانا الفرنسية', '2021-05-03 21:39:05', '2021-05-04 07:37:34', NULL),
(403, 75, 'tr', 'Fransız Guyanası', '2021-05-03 21:39:05', '2021-05-04 07:37:35', NULL),
(404, 76, 'ar', 'بولينيزيا الفرنسية', '2021-05-03 21:39:05', '2021-05-04 07:38:21', NULL),
(405, 76, 'tr', 'Fransız Polinezyası', '2021-05-03 21:39:05', '2021-05-04 07:38:21', NULL),
(406, 77, 'ar', 'المناطق الجنوبية لفرنسا', '2021-05-03 21:39:05', '2021-05-04 07:40:39', NULL),
(407, 77, 'tr', 'Fransız Güney Toprakları', '2021-05-03 21:39:05', '2021-05-04 07:40:39', NULL),
(408, 78, 'ar', 'الجابون', '2021-05-03 21:39:05', '2021-05-04 07:41:45', NULL),
(409, 78, 'tr', 'Gabon', '2021-05-03 21:39:05', NULL, NULL),
(410, 79, 'ar', 'غامبيا', '2021-05-03 21:39:05', '2021-05-04 07:42:41', NULL),
(411, 79, 'tr', 'Gambiya', '2021-05-03 21:39:05', '2021-05-04 07:42:41', NULL),
(412, 80, 'ar', 'جورجيا', '2021-05-03 21:39:05', '2021-05-04 07:43:28', NULL),
(413, 80, 'tr', 'Gürcistan', '2021-05-03 21:39:05', '2021-05-04 07:43:28', NULL),
(414, 81, 'ar', 'ألمانيا', '2021-05-03 21:39:05', '2021-05-04 07:44:30', NULL),
(415, 81, 'tr', 'Almanya', '2021-05-03 21:39:05', '2021-05-04 07:44:30', NULL),
(416, 82, 'ar', 'غانا', '2021-05-03 21:39:05', '2021-05-04 07:45:20', NULL),
(417, 82, 'tr', 'Gana', '2021-05-03 21:39:05', '2021-05-04 07:45:20', NULL),
(418, 83, 'ar', 'جبل طارق', '2021-05-03 21:39:05', '2021-05-04 07:46:06', NULL),
(419, 83, 'tr', 'Cebelitarık', '2021-05-03 21:39:05', '2021-05-04 07:46:06', NULL),
(420, 84, 'ar', 'اليونان', '2021-05-03 21:39:05', '2021-05-04 07:49:29', NULL),
(421, 84, 'tr', 'Yunanistan', '2021-05-03 21:39:05', '2021-05-04 07:49:29', NULL),
(422, 85, 'ar', 'الأرض الخضراء', '2021-05-03 21:39:05', '2021-05-04 09:12:24', NULL),
(423, 85, 'tr', 'Grönland', '2021-05-03 21:39:05', '2021-05-04 09:12:24', NULL),
(424, 86, 'ar', 'غرينادا', '2021-05-03 21:39:05', '2021-05-04 09:13:26', NULL),
(425, 86, 'tr', 'Grenada', '2021-05-03 21:39:05', NULL, NULL),
(426, 87, 'ar', 'جوادلوب', '2021-05-03 21:39:05', '2021-05-04 09:17:25', NULL),
(427, 87, 'tr', 'Guadeloupe', '2021-05-03 21:39:05', NULL, NULL),
(428, 88, 'ar', 'غوام', '2021-05-03 21:39:05', '2021-05-04 09:18:45', NULL),
(429, 88, 'tr', 'Guam', '2021-05-03 21:39:05', NULL, NULL),
(430, 89, 'ar', 'غواتيمالا', '2021-05-03 21:39:05', '2021-05-04 09:49:48', NULL),
(431, 89, 'tr', 'Guatemala', '2021-05-03 21:39:05', NULL, NULL),
(432, 90, 'ar', 'غينيا', '2021-05-03 21:39:05', '2021-05-04 09:50:55', NULL),
(433, 90, 'tr', 'Gine', '2021-05-03 21:39:05', '2021-05-04 09:50:55', NULL),
(434, 91, 'ar', 'غينيا بيساو', '2021-05-03 21:39:05', '2021-05-04 09:51:54', NULL),
(435, 91, 'tr', 'Gine-Bissau', '2021-05-03 21:39:05', '2021-05-04 09:51:54', NULL),
(436, 92, 'ar', 'غيانا', '2021-05-03 21:39:05', '2021-05-04 09:53:24', NULL),
(437, 92, 'tr', 'Guyana', '2021-05-03 21:39:05', NULL, NULL),
(438, 93, 'ar', 'هايتي', '2021-05-03 21:39:05', '2021-05-04 09:54:27', NULL),
(439, 93, 'tr', 'Haiti', '2021-05-03 21:39:05', NULL, NULL),
(440, 94, 'ar', 'جزر هيرد وماكدونالد', '2021-05-03 21:39:05', '2021-05-04 09:55:26', NULL),
(441, 94, 'tr', 'Heard ve Mcdonald Adaları', '2021-05-03 21:39:05', '2021-05-04 09:55:26', NULL),
(442, 95, 'ar', 'هندوراس', '2021-05-03 21:39:05', '2021-05-04 10:00:51', NULL),
(443, 95, 'tr', 'Honduras', '2021-05-03 21:39:05', NULL, NULL),
(444, 96, 'ar', 'هونج كونج', '2021-05-03 21:39:05', '2021-05-04 10:02:43', NULL),
(445, 96, 'tr', 'Hong Kong', '2021-05-03 21:39:05', NULL, NULL),
(446, 97, 'ar', 'هنغاريا', '2021-05-03 21:39:05', '2021-05-04 10:05:06', NULL),
(447, 97, 'tr', 'Macaristan', '2021-05-03 21:39:05', '2021-05-04 10:05:06', NULL),
(448, 98, 'ar', 'أيسلندا', '2021-05-03 21:39:05', '2021-05-04 10:07:29', NULL),
(449, 98, 'tr', 'İzlanda', '2021-05-03 21:39:05', '2021-05-04 10:07:29', NULL),
(450, 99, 'ar', 'الهند', '2021-05-03 21:39:05', '2021-05-04 10:08:41', NULL),
(451, 99, 'tr', 'Hindistan', '2021-05-03 21:39:05', '2021-05-04 10:08:41', NULL),
(452, 100, 'ar', 'إندونيسيا', '2021-05-03 21:39:05', '2021-05-04 10:10:00', NULL),
(453, 100, 'tr', 'Endonezya', '2021-05-03 21:39:05', '2021-05-04 10:10:00', NULL),
(454, 101, 'ar', 'إيران (جمهورية - الإسلامية)', '2021-05-03 21:39:05', '2021-05-04 10:11:06', NULL),
(455, 101, 'tr', 'İran (İslam Cumhuriyeti)', '2021-05-03 21:39:05', '2021-05-04 10:11:06', NULL),
(456, 102, 'ar', 'العراق', '2021-05-03 21:39:05', '2021-05-04 10:12:00', NULL),
(457, 102, 'tr', 'Irak', '2021-05-03 21:39:05', '2021-05-04 10:12:00', NULL),
(458, 103, 'ar', 'أيرلندا', '2021-05-03 21:39:05', '2021-05-04 10:12:55', NULL),
(459, 103, 'tr', 'İrlanda', '2021-05-03 21:39:05', '2021-05-04 10:12:55', NULL),
(460, 104, 'ar', 'إسرائيل', '2021-05-03 21:39:05', '2021-05-04 10:13:47', NULL),
(461, 104, 'tr', 'İsrail', '2021-05-03 21:39:05', '2021-05-04 10:13:47', NULL),
(462, 105, 'ar', 'إيطاليا', '2021-05-03 21:39:05', '2021-05-04 10:14:45', NULL),
(463, 105, 'tr', 'İtalya', '2021-05-03 21:39:05', '2021-05-04 10:14:45', NULL),
(464, 106, 'ar', 'جامايكا', '2021-05-03 21:39:05', '2021-05-04 10:15:37', NULL),
(465, 106, 'tr', 'Jamaika', '2021-05-03 21:39:05', '2021-05-04 10:15:37', NULL),
(466, 107, 'ar', 'اليابان', '2021-05-03 21:39:05', '2021-05-04 10:16:43', NULL),
(467, 107, 'tr', 'Japonya', '2021-05-03 21:39:05', '2021-05-04 10:16:43', NULL),
(468, 108, 'ar', 'الأردن', '2021-05-03 21:39:05', '2021-05-04 10:17:30', NULL),
(469, 108, 'tr', 'Ürdün', '2021-05-03 21:39:05', '2021-05-04 10:17:30', NULL),
(470, 109, 'ar', 'كازاخستان', '2021-05-03 21:39:05', '2021-05-04 10:18:23', NULL),
(471, 109, 'tr', 'Kazakistan', '2021-05-03 21:39:05', '2021-05-04 10:18:23', NULL),
(472, 110, 'ar', 'كينيا', '2021-05-03 21:39:05', '2021-05-04 10:22:03', NULL),
(473, 110, 'tr', 'Kenya', '2021-05-03 21:39:05', NULL, NULL),
(474, 111, 'ar', 'كيريباتي', '2021-05-03 21:39:05', '2021-05-04 10:22:56', NULL),
(475, 111, 'tr', 'Kiribati', '2021-05-03 21:39:05', NULL, NULL),
(476, 112, 'ar', 'كوريا الشمالية', '2021-05-03 21:39:05', '2021-05-04 10:23:46', NULL),
(477, 112, 'tr', 'Kuzey Kore', '2021-05-03 21:39:05', '2021-05-04 10:23:46', NULL),
(478, 113, 'ar', 'كوريا الجنوبية', '2021-05-03 21:39:05', '2021-05-04 10:24:37', NULL),
(479, 113, 'tr', 'Güney Kore', '2021-05-03 21:39:05', '2021-05-04 10:24:37', NULL),
(480, 114, 'ar', 'الكويت', '2021-05-03 21:39:05', '2021-05-04 10:25:26', NULL),
(481, 114, 'tr', 'Kuveyt', '2021-05-03 21:39:05', '2021-05-04 10:25:26', NULL),
(482, 115, 'ar', 'قيرغيزستان', '2021-05-03 21:39:05', '2021-05-04 10:26:15', NULL),
(483, 115, 'tr', 'Kırgızistan', '2021-05-03 21:39:05', '2021-05-04 10:26:15', NULL),
(484, 116, 'ar', 'جمهورية لاو الديمقراطية الشعبية', '2021-05-03 21:39:05', '2021-05-04 10:27:37', NULL),
(485, 116, 'tr', 'Lao Demokratik Halk Cumhuriyeti', '2021-05-03 21:39:05', '2021-05-04 10:27:37', NULL),
(486, 117, 'ar', 'Latvia', '2021-05-03 21:39:05', NULL, NULL),
(487, 117, 'tr', 'Letonya', '2021-05-03 21:39:05', '2021-05-04 10:28:30', NULL),
(488, 118, 'ar', 'لبنان', '2021-05-03 21:39:05', '2021-05-04 10:29:27', NULL),
(489, 118, 'tr', 'Lübnan', '2021-05-03 21:39:05', '2021-05-04 10:29:27', NULL),
(490, 119, 'ar', 'ليسوتو', '2021-05-03 21:39:05', '2021-05-04 10:30:43', NULL),
(491, 119, 'tr', 'Lesoto', '2021-05-03 21:39:05', '2021-05-04 10:30:43', NULL),
(492, 120, 'ar', 'ليبيريا', '2021-05-03 21:39:05', '2021-05-04 10:31:41', NULL),
(493, 120, 'tr', 'ليبيريا', '2021-05-03 21:39:05', '2021-05-04 10:31:41', NULL),
(494, 121, 'ar', 'الجماهيرية العربية الليبية', '2021-05-03 21:39:05', '2021-05-04 10:32:34', NULL),
(495, 121, 'tr', 'Libya Arap Cemahiriyası', '2021-05-03 21:39:05', '2021-05-04 10:32:34', NULL),
(496, 122, 'ar', 'ليختنشتاين', '2021-05-03 21:39:05', '2021-05-04 10:34:38', NULL),
(497, 122, 'tr', 'Lihtenştayn', '2021-05-03 21:39:05', '2021-05-04 10:34:38', NULL),
(498, 123, 'ar', 'ليتوانيا', '2021-05-03 21:39:05', '2021-05-04 10:35:29', NULL),
(499, 123, 'tr', 'Litvanya', '2021-05-03 21:39:05', '2021-05-04 10:35:29', NULL),
(500, 124, 'ar', 'لوكسمبورغ', '2021-05-03 21:39:05', '2021-05-04 10:36:16', NULL),
(501, 124, 'tr', 'Lüksemburg', '2021-05-03 21:39:05', '2021-05-04 10:36:16', NULL),
(502, 125, 'ar', 'ماكاو', '2021-05-03 21:39:05', '2021-05-04 10:37:19', NULL),
(503, 125, 'tr', 'Macau', '2021-05-03 21:39:05', NULL, NULL),
(504, 126, 'ar', 'جمهورية مقدونيا', '2021-05-03 21:39:05', '2021-05-04 10:38:22', NULL),
(505, 126, 'tr', 'FYROM', '2021-05-03 21:39:05', NULL, NULL),
(506, 127, 'ar', 'مدغشقر', '2021-05-03 21:39:05', '2021-05-04 10:39:38', NULL),
(507, 127, 'tr', 'Madagaskar', '2021-05-03 21:39:05', '2021-05-04 10:39:38', NULL),
(508, 128, 'ar', 'ملاوي', '2021-05-03 21:39:05', '2021-05-04 10:41:13', NULL),
(509, 128, 'tr', 'Malawi', '2021-05-03 21:39:05', NULL, NULL),
(510, 129, 'ar', 'ماليزيا', '2021-05-03 21:39:05', '2021-05-04 10:42:13', NULL),
(511, 129, 'tr', 'Malezya', '2021-05-03 21:39:05', '2021-05-04 10:42:13', NULL),
(512, 130, 'ar', 'جزر المالديف', '2021-05-03 21:39:05', '2021-05-04 10:43:27', NULL),
(513, 130, 'tr', 'Maldivler', '2021-05-03 21:39:05', '2021-05-04 10:43:27', NULL),
(514, 131, 'ar', 'مالي', '2021-05-03 21:39:05', '2021-05-04 10:44:20', NULL),
(515, 131, 'tr', 'Mali', '2021-05-03 21:39:05', NULL, NULL),
(516, 132, 'ar', 'مالطا', '2021-05-03 21:39:05', '2021-05-04 10:45:16', NULL),
(517, 132, 'tr', 'Malta', '2021-05-03 21:39:05', NULL, NULL),
(518, 133, 'ar', 'جزر مارشال', '2021-05-03 21:39:05', '2021-05-04 10:46:03', NULL),
(519, 133, 'tr', 'Marşal Adaları', '2021-05-03 21:39:05', '2021-05-04 10:46:03', NULL),
(520, 134, 'ar', 'مارتينيك', '2021-05-03 21:39:05', '2021-05-04 10:47:36', NULL),
(521, 134, 'tr', 'Martinik', '2021-05-03 21:39:05', '2021-05-04 10:47:36', NULL),
(522, 135, 'ar', 'موريتانيا', '2021-05-03 21:39:05', '2021-05-04 10:48:56', NULL),
(523, 135, 'tr', 'Moritanya', '2021-05-03 21:39:05', '2021-05-04 10:48:56', NULL),
(524, 136, 'ar', 'موريشيوس', '2021-05-03 21:39:05', '2021-05-04 10:50:37', NULL),
(525, 136, 'tr', 'Mauritius', '2021-05-03 21:39:05', NULL, NULL),
(526, 137, 'ar', 'مايوت', '2021-05-03 21:39:05', '2021-05-04 10:51:34', NULL),
(527, 137, 'tr', 'Mayotte', '2021-05-03 21:39:05', NULL, NULL),
(528, 138, 'ar', 'المكسيك', '2021-05-03 21:39:05', '2021-05-04 10:52:30', NULL),
(529, 138, 'tr', 'Meksika', '2021-05-03 21:39:05', '2021-05-04 10:52:30', NULL),
(530, 139, 'ar', 'ولايات ميكرونيزيا الموحدة', '2021-05-03 21:39:05', '2021-05-04 10:53:52', NULL),
(531, 139, 'tr', 'Mikronezya Federal Devletleri', '2021-05-03 21:39:05', '2021-05-04 10:53:52', NULL),
(532, 140, 'ar', 'جمهورية مولدوفا', '2021-05-03 21:39:05', '2021-05-04 10:54:42', NULL),
(533, 140, 'tr', 'Moldova Cumhuriyeti', '2021-05-03 21:39:05', '2021-05-04 10:54:42', NULL),
(534, 141, 'ar', 'موناكو', '2021-05-03 21:39:05', '2021-05-04 10:55:40', NULL),
(535, 141, 'tr', 'Monako', '2021-05-03 21:39:05', '2021-05-04 10:55:40', NULL),
(536, 142, 'ar', 'منغوليا', '2021-05-03 21:39:05', '2021-05-04 10:58:07', NULL),
(537, 142, 'tr', 'Moğolistan', '2021-05-03 21:39:05', '2021-05-04 10:58:07', NULL),
(538, 143, 'ar', 'مونتسيرات', '2021-05-03 21:39:05', '2021-05-04 10:59:03', NULL),
(539, 143, 'tr', 'Montserrat', '2021-05-03 21:39:05', NULL, NULL),
(540, 144, 'tr', 'Fas', '2021-05-03 21:39:05', '2021-05-04 11:00:07', NULL),
(541, 144, 'ar', 'المغرب', '2021-05-03 21:39:05', '2021-05-04 11:00:07', NULL),
(542, 145, 'ar', 'موزمبيق', '2021-05-04 14:14:20', '2021-05-04 14:14:20', NULL),
(543, 145, 'tr', 'Mozambik', '2021-05-04 14:14:20', '2021-05-04 14:14:20', NULL),
(544, 146, 'ar', 'ميانمار', '2021-05-04 14:15:03', '2021-05-04 14:15:03', NULL),
(545, 146, 'tr', 'Myanmar', '2021-05-04 14:15:03', '2021-05-04 14:15:03', NULL),
(546, 147, 'ar', 'ناميبيا', '2021-05-04 14:15:35', '2021-05-04 14:15:35', NULL),
(547, 147, 'tr', 'Namibya', '2021-05-04 14:15:35', '2021-05-04 14:15:35', NULL),
(548, 148, 'ar', 'ناورو', '2021-05-04 14:21:07', '2021-05-04 14:21:07', NULL),
(549, 148, 'tr', 'Nauru', '2021-05-04 14:21:07', '2021-05-04 14:21:07', NULL),
(550, 149, 'ar', 'نيبال', '2021-05-04 14:21:37', '2021-05-04 14:21:37', NULL),
(551, 149, 'tr', 'Nepal', '2021-05-04 14:21:37', '2021-05-04 14:21:37', NULL),
(552, 150, 'ar', 'هولندا', '2021-05-04 14:22:42', '2021-05-04 14:22:42', NULL),
(553, 150, 'tr', 'Hollanda', '2021-05-04 14:22:42', '2021-05-04 14:22:42', NULL),
(554, 151, 'ar', 'جزر الأنتيل الهولندية', '2021-05-04 14:23:26', '2021-05-04 14:23:26', NULL),
(555, 151, 'tr', 'Hollanda Antilleri', '2021-05-04 14:23:26', '2021-05-04 14:23:26', NULL),
(556, 152, 'ar', 'كاليدونيا الجديدة', '2021-05-04 14:24:10', '2021-05-04 14:24:10', NULL),
(557, 152, 'tr', 'Yeni Kaledonya', '2021-05-04 14:24:10', '2021-05-04 14:24:10', NULL),
(558, 153, 'ar', 'نيوزيلاندا', '2021-05-04 14:24:49', '2021-05-04 14:24:49', NULL),
(559, 153, 'tr', 'Yeni Zelanda', '2021-05-04 14:24:49', '2021-05-04 14:24:49', NULL),
(560, 154, 'ar', 'نيكاراغوا', '2021-05-04 14:25:41', '2021-05-04 14:25:41', NULL),
(561, 154, 'tr', 'Nikaragua', '2021-05-04 14:25:41', '2021-05-04 14:25:41', NULL),
(562, 155, 'ar', 'النيجر', '2021-05-04 14:26:23', '2021-05-04 14:26:23', NULL),
(563, 155, 'tr', 'Nijer', '2021-05-04 14:26:23', '2021-05-04 14:26:23', NULL),
(564, 156, 'ar', 'نيجيريا', '2021-05-04 14:26:56', '2021-05-04 14:26:56', NULL),
(565, 156, 'tr', 'Nijerya', '2021-05-04 14:26:56', '2021-05-04 14:26:56', NULL),
(566, 157, 'ar', 'نيوي', '2021-05-04 14:27:24', '2021-05-04 14:27:24', NULL),
(567, 157, 'tr', 'Niue', '2021-05-04 14:27:24', '2021-05-04 14:27:24', NULL),
(568, 158, 'ar', 'جزيرة نورفولك', '2021-05-04 14:28:04', '2021-05-04 14:28:04', NULL),
(569, 158, 'tr', 'Norfolk Adası', '2021-05-04 14:28:04', '2021-05-04 14:28:04', NULL),
(570, 159, 'ar', 'جزر مريانا الشمالية', '2021-05-04 14:28:58', '2021-05-04 14:28:58', NULL),
(571, 159, 'tr', 'Kuzey Mariana Adaları', '2021-05-04 14:28:58', '2021-05-04 14:28:58', NULL),
(572, 160, 'ar', 'النرويج', '2021-05-04 14:29:29', '2021-05-04 14:29:29', NULL),
(573, 160, 'tr', 'Norveç', '2021-05-04 14:29:29', '2021-05-04 14:29:29', NULL),
(574, 161, 'ar', 'سلطنة عمان', '2021-05-04 14:29:59', '2021-05-04 14:29:59', NULL),
(575, 161, 'tr', 'Umman', '2021-05-04 14:29:59', '2021-05-04 14:29:59', NULL),
(576, 162, 'ar', 'باكستان', '2021-05-04 14:30:29', '2021-05-04 14:30:40', NULL),
(577, 162, 'tr', 'Pakistan', '2021-05-04 14:30:29', '2021-05-04 14:30:29', NULL),
(578, 163, 'ar', 'بالاو', '2021-05-04 14:31:33', '2021-05-04 14:31:33', NULL),
(579, 163, 'tr', 'Palau', '2021-05-04 14:31:33', '2021-05-04 14:31:33', NULL),
(580, 164, 'ar', 'بنما', '2021-05-04 14:32:15', '2021-05-04 14:32:15', NULL),
(581, 164, 'tr', 'Panama', '2021-05-04 14:32:15', '2021-05-04 14:32:15', NULL),
(582, 165, 'ar', 'بابوا غينيا الجديدة', '2021-05-04 14:32:48', '2021-05-04 14:32:48', NULL),
(583, 165, 'tr', 'Papua Yeni Gine', '2021-05-04 14:32:48', '2021-05-04 14:32:48', NULL),
(584, 166, 'ar', 'باراغواي', '2021-05-04 14:33:20', '2021-05-04 14:33:20', NULL),
(585, 166, 'tr', 'Paraguay', '2021-05-04 14:33:20', '2021-05-04 14:33:20', NULL),
(586, 167, 'ar', 'بيرو', '2021-05-04 14:33:59', '2021-05-04 14:33:59', NULL),
(587, 167, 'tr', 'Peru', '2021-05-04 14:33:59', '2021-05-04 14:33:59', NULL),
(588, 168, 'ar', 'الفلبين', '2021-05-04 14:34:58', '2021-05-04 14:34:58', NULL),
(589, 168, 'tr', 'Filipinler', '2021-05-04 14:34:58', '2021-05-04 14:34:58', NULL),
(590, 169, 'ar', 'بيتكيرن', '2021-05-04 14:35:32', '2021-05-04 14:35:32', NULL),
(591, 169, 'tr', 'Pitcairn', '2021-05-04 14:35:32', '2021-05-04 14:35:32', NULL),
(592, 170, 'ar', 'بولندا', '2021-05-04 14:36:26', '2021-05-04 14:36:26', NULL),
(593, 170, 'tr', 'Polonya', '2021-05-04 14:36:26', '2021-05-04 14:36:26', NULL),
(594, 171, 'ar', 'البرتغال', '2021-05-04 14:37:57', '2021-05-04 14:37:57', NULL),
(595, 171, 'tr', 'Portekiz', '2021-05-04 14:37:57', '2021-05-04 14:37:57', NULL),
(596, 172, 'ar', 'بورتوريكو', '2021-05-04 14:38:28', '2021-05-04 14:38:28', NULL),
(597, 172, 'tr', 'Porto Riko', '2021-05-04 14:38:28', '2021-05-04 14:38:28', NULL),
(598, 173, 'ar', 'قطر', '2021-05-04 14:39:01', '2021-05-04 14:39:01', NULL),
(599, 173, 'tr', 'Katar', '2021-05-04 14:39:01', '2021-05-04 14:39:01', NULL),
(600, 175, 'ar', 'رومانيا', '2021-05-04 14:40:53', '2021-05-04 14:40:53', NULL),
(601, 175, 'tr', 'Romanya', '2021-05-04 14:40:53', '2021-05-04 14:40:53', NULL),
(602, 176, 'ar', 'الاتحاد الروسي', '2021-05-04 14:41:23', '2021-05-04 14:41:23', NULL),
(603, 176, 'tr', 'Rusya Federasyonu', '2021-05-04 14:41:23', '2021-05-04 14:41:23', NULL),
(604, 177, 'ar', 'رواندا', '2021-05-04 14:41:50', '2021-05-04 14:41:50', NULL),
(605, 177, 'tr', 'Ruanda', '2021-05-04 14:41:50', '2021-05-04 14:41:50', NULL),
(606, 178, 'ar', 'سانت كيتس ونيفيس', '2021-05-04 14:42:19', '2021-05-04 14:42:19', NULL),
(607, 178, 'tr', 'Saint Kitts ve Nevis', '2021-05-04 14:42:19', '2021-05-04 14:42:19', NULL),
(608, 179, 'ar', 'القديسة لوسيا', '2021-05-04 14:42:53', '2021-05-04 14:42:53', NULL),
(609, 179, 'tr', 'Saint Lucia', '2021-05-04 14:42:53', '2021-05-04 14:42:53', NULL),
(610, 180, 'ar', 'سانت فنسنت وجزر غرينادين', '2021-05-04 14:43:24', '2021-05-04 14:43:24', NULL),
(611, 180, 'tr', 'Saint Vincent ve Grenadinler', '2021-05-04 14:43:24', '2021-05-04 14:43:24', NULL),
(612, 181, 'ar', 'ساموا', '2021-05-04 14:43:50', '2021-05-04 14:43:50', NULL),
(613, 181, 'tr', 'Samoa', '2021-05-04 14:43:50', '2021-05-04 14:43:50', NULL),
(614, 182, 'ar', 'سان مارينو', '2021-05-04 14:44:17', '2021-05-04 14:44:17', NULL),
(615, 182, 'tr', 'San Marino', '2021-05-04 14:44:17', '2021-05-04 14:44:17', NULL),
(616, 183, 'ar', 'ساو تومي وبرينسيبي', '2021-05-04 14:44:50', '2021-05-04 14:44:50', NULL),
(617, 183, 'tr', 'Sao Tome ve Principe', '2021-05-04 14:44:50', '2021-05-04 14:44:50', NULL),
(618, 184, 'ar', 'المملكة العربية السعودية', '2021-05-04 14:45:40', '2021-05-04 14:45:40', NULL),
(619, 184, 'tr', 'Suudi Arabistan', '2021-05-04 14:45:40', '2021-05-04 14:45:40', NULL),
(620, 185, 'ar', 'السنغال', '2021-05-04 14:47:01', '2021-05-04 14:47:01', NULL),
(621, 185, 'tr', 'Senegal', '2021-05-04 14:47:01', '2021-05-04 14:47:01', NULL),
(622, 186, 'ar', 'سيشيل', '2021-05-04 14:47:31', '2021-05-04 14:47:31', NULL),
(623, 186, 'tr', 'Seyşeller', '2021-05-04 14:47:31', '2021-05-04 14:47:31', NULL),
(624, 187, 'ar', 'سيرا ليون', '2021-05-04 14:48:16', '2021-05-04 14:48:16', NULL),
(625, 187, 'tr', 'Sierra Leone', '2021-05-04 14:48:16', '2021-05-04 14:48:16', NULL),
(626, 188, 'ar', 'سنغافورة', '2021-05-04 14:48:45', '2021-05-04 14:48:45', NULL),
(627, 188, 'tr', 'Singapur', '2021-05-04 14:48:45', '2021-05-04 14:48:45', NULL),
(628, 189, 'ar', 'جمهورية سلوفاكيا', '2021-05-04 14:49:17', '2021-05-04 14:49:17', NULL),
(629, 189, 'tr', 'Slovak cumhuriyeti', '2021-05-04 14:49:17', '2021-05-04 14:49:17', NULL),
(630, 190, 'ar', 'سلوفينيا', '2021-05-04 14:50:14', '2021-05-04 14:50:14', NULL),
(631, 190, 'tr', 'Slovenya', '2021-05-04 14:50:14', '2021-05-04 14:50:14', NULL),
(632, 191, 'ar', 'جزر سليمان', '2021-05-04 14:50:43', '2021-05-04 14:50:43', NULL),
(633, 191, 'tr', 'Solomon Adaları', '2021-05-04 14:50:43', '2021-05-04 14:50:43', NULL),
(634, 192, 'ar', 'الصومال', '2021-05-04 14:51:26', '2021-05-04 14:51:26', NULL),
(635, 192, 'tr', 'Somali', '2021-05-04 14:51:26', '2021-05-04 14:51:26', NULL),
(636, 193, 'ar', 'جنوب أفريقيا', '2021-05-04 14:51:56', '2021-05-04 14:51:56', NULL),
(637, 193, 'tr', 'Güney Afrika', '2021-05-04 14:51:56', '2021-05-04 14:51:56', NULL),
(639, 194, 'tr', 'Güney Georgia', '2021-05-04 14:52:50', '2021-05-04 14:52:50', NULL),
(640, 195, 'ar', 'إسبانيا', '2021-05-04 14:53:29', '2021-05-04 14:53:29', NULL),
(641, 195, 'tr', 'ispanya', '2021-05-04 14:53:29', '2021-05-04 14:53:29', NULL),
(642, 196, 'ar', 'سيريلانكا', '2021-05-04 14:53:57', '2021-05-04 14:53:57', NULL),
(643, 196, 'tr', 'Sri Lanka', '2021-05-04 14:53:57', '2021-05-04 14:53:57', NULL),
(644, 197, 'ar', 'سانت هيلانة', '2021-05-04 14:54:33', '2021-05-04 14:54:33', NULL),
(645, 197, 'tr', 'St. Helena', '2021-05-04 14:54:33', '2021-05-04 14:54:33', NULL),
(646, 198, 'ar', 'سانت بيير وميكلون', '2021-05-04 14:55:11', '2021-05-04 14:55:11', NULL),
(647, 198, 'tr', 'St. Pierre ve Miquelon', '2021-05-04 14:55:11', '2021-05-04 14:55:11', NULL),
(648, 199, 'ar', 'السودان', '2021-05-04 14:55:52', '2021-05-04 14:55:52', NULL),
(649, 199, 'tr', 'Sudan', '2021-05-04 14:55:52', '2021-05-04 14:55:52', NULL),
(650, 200, 'ar', 'سورينام', '2021-05-04 14:56:30', '2021-05-04 14:56:30', NULL),
(651, 200, 'tr', 'Surinam', '2021-05-04 14:56:30', '2021-05-04 14:56:30', NULL),
(652, 201, 'ar', 'جزر سفالبارد وجان ماين', '2021-05-04 14:57:13', '2021-05-04 14:57:13', NULL),
(653, 201, 'tr', 'Svalbard ve Jan Mayen Adaları', '2021-05-04 14:57:13', '2021-05-04 14:57:13', NULL),
(654, 202, 'ar', 'سوازيلاند', '2021-05-04 14:58:23', '2021-05-04 14:58:23', NULL),
(655, 202, 'tr', 'Svaziland', '2021-05-04 14:58:23', '2021-05-04 14:58:23', NULL),
(656, 203, 'ar', 'السويد', '2021-05-04 14:58:52', '2021-05-04 14:58:52', NULL),
(657, 203, 'tr', 'İsveç', '2021-05-04 14:58:52', '2021-05-04 14:58:52', NULL),
(658, 204, 'ar', 'سويسرا', '2021-05-04 14:59:18', '2021-05-04 14:59:18', NULL),
(659, 204, 'tr', 'İsviçre', '2021-05-04 14:59:18', '2021-05-04 14:59:18', NULL),
(660, 205, 'ar', 'الجمهورية العربية السورية', '2021-05-04 14:59:43', '2021-05-04 14:59:43', NULL),
(661, 205, 'tr', 'Suriye Arap Cumhuriyeti', '2021-05-04 14:59:43', '2021-05-04 14:59:43', NULL),
(662, 206, 'ar', 'تايوان', '2021-05-04 15:00:10', '2021-05-04 15:00:10', NULL),
(663, 206, 'tr', 'Tayvan', '2021-05-04 15:00:10', '2021-05-04 15:00:10', NULL),
(664, 207, 'ar', 'طاجيكستان', '2021-05-04 15:00:37', '2021-05-04 15:00:37', NULL),
(665, 207, 'tr', 'Tacikistan', '2021-05-04 15:00:37', '2021-05-04 15:00:37', NULL),
(666, 208, 'ar', 'جمهورية تنزانيا المتحدة', '2021-05-04 15:01:09', '2021-05-04 15:01:09', NULL),
(667, 208, 'tr', 'Tanzanya Birleşik Cumhuriyeti', '2021-05-04 15:01:09', '2021-05-04 15:01:09', NULL),
(668, 209, 'ar', 'تايلاند', '2021-05-04 15:01:35', '2021-05-04 15:01:35', NULL),
(669, 209, 'tr', 'Tayland', '2021-05-04 15:01:35', '2021-05-04 15:01:35', NULL),
(670, 210, 'ar', 'توجو', '2021-05-04 15:02:03', '2021-05-04 15:02:03', NULL),
(671, 210, 'tr', 'Gitmek', '2021-05-04 15:02:03', '2021-05-04 15:02:03', NULL),
(672, 211, 'ar', 'توكيلاو', '2021-05-04 15:02:50', '2021-05-04 15:02:50', NULL),
(673, 211, 'tr', 'Tokelau', '2021-05-04 15:02:50', '2021-05-04 15:02:50', NULL),
(674, 212, 'ar', 'تونغا', '2021-05-04 15:03:48', '2021-05-04 15:03:48', NULL),
(675, 212, 'tr', 'Tonga', '2021-05-04 15:03:48', '2021-05-04 15:03:48', NULL);
INSERT INTO `country_translations` (`id`, `country_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(676, 213, 'ar', 'ترينداد وتوباغو', '2021-05-04 16:42:45', '2021-05-04 16:42:45', NULL),
(677, 213, 'tr', 'Trinidad ve Tobago', '2021-05-04 16:42:45', '2021-05-04 16:42:45', NULL),
(678, 214, 'ar', 'تونس', '2021-05-04 16:43:08', '2021-05-04 16:43:08', NULL),
(679, 214, 'tr', 'Tunus', '2021-05-04 16:43:08', '2021-05-04 16:43:08', NULL),
(680, 215, 'ar', 'تركيا', '2021-05-04 16:43:35', '2021-05-04 16:43:35', NULL),
(681, 215, 'tr', 'Türkiye', '2021-05-04 16:43:35', '2021-05-04 16:43:35', NULL),
(682, 216, 'ar', 'تركمانستان', '2021-05-04 16:44:05', '2021-05-04 16:44:05', NULL),
(683, 216, 'tr', 'Türkmenistan', '2021-05-04 16:44:05', '2021-05-04 16:44:05', NULL),
(684, 217, 'ar', 'جزر تركس وكايكوس', '2021-05-04 16:44:29', '2021-05-04 16:44:29', NULL),
(685, 217, 'tr', 'Turks ve Caicos Adaları', '2021-05-04 16:44:29', '2021-05-04 16:44:29', NULL),
(686, 218, 'ar', 'توفالو', '2021-05-04 16:44:49', '2021-05-04 16:44:49', NULL),
(687, 218, 'tr', 'Tuvalu', '2021-05-04 16:44:49', '2021-05-04 16:44:49', NULL),
(688, 219, 'ar', 'أوغندا', '2021-05-04 19:53:21', '2021-05-04 19:53:21', NULL),
(689, 219, 'tr', 'Uganda', '2021-05-04 19:53:21', '2021-05-04 19:53:21', NULL),
(690, 220, 'ar', 'أوكرانيا', '2021-05-04 19:55:25', '2021-05-04 19:55:25', NULL),
(691, 220, 'tr', 'Ukrayna', '2021-05-04 19:55:25', '2021-05-04 19:55:25', NULL),
(692, 221, 'ar', 'الإمارات العربية المتحدة', '2021-05-04 19:56:09', '2021-05-04 19:56:09', NULL),
(693, 221, 'tr', 'Birleşik Arap Emirlikleri', '2021-05-04 19:56:09', '2021-05-04 19:56:09', NULL),
(694, 222, 'ar', 'المملكة المتحدة', '2021-05-04 19:56:35', '2021-05-04 19:56:35', NULL),
(695, 222, 'tr', 'Birleşik Krallık', '2021-05-04 19:56:35', '2021-05-04 19:56:35', NULL),
(696, 223, 'ar', 'الولايات المتحدة الأمريكية', '2021-05-04 19:57:11', '2021-05-04 19:57:11', NULL),
(697, 223, 'tr', 'Amerika Birleşik Devletleri', '2021-05-04 19:57:11', '2021-05-04 19:57:11', NULL),
(698, 224, 'ar', 'جزر الولايات المتحدة', '2021-05-04 19:58:05', '2021-05-04 19:58:05', NULL),
(699, 224, 'tr', 'Amerika Birleşik Devletleri adaları', '2021-05-04 19:58:05', '2021-05-04 19:58:05', NULL),
(700, 225, 'ar', 'أوروغواي', '2021-05-04 19:58:25', '2021-05-04 19:58:25', NULL),
(701, 225, 'tr', 'Uruguay', '2021-05-04 19:58:25', '2021-05-04 19:58:25', NULL),
(702, 226, 'ar', 'أوزبكستان', '2021-05-04 19:58:48', '2021-05-04 19:58:48', NULL),
(703, 226, 'tr', 'Özbekistan', '2021-05-04 19:58:48', '2021-05-04 19:58:48', NULL),
(704, 227, 'ar', 'فانواتو', '2021-05-04 19:59:13', '2021-05-04 19:59:13', NULL),
(705, 227, 'tr', 'Vanuatu', '2021-05-04 19:59:13', '2021-05-04 19:59:13', NULL),
(706, 228, 'ar', 'دولة مدينة الفاتيكان', '2021-05-04 19:59:45', '2021-05-04 19:59:45', NULL),
(707, 228, 'tr', 'Vatikan Şehir Devleti', '2021-05-04 19:59:45', '2021-05-04 19:59:45', NULL),
(708, 229, 'ar', 'فنزويلا', '2021-05-04 20:00:07', '2021-05-04 20:00:07', NULL),
(709, 229, 'tr', 'Venezuela', '2021-05-04 20:00:07', '2021-05-04 20:00:07', NULL),
(710, 230, 'ar', 'فيتنام', '2021-05-04 20:00:43', '2021-05-04 20:00:43', NULL),
(711, 230, 'tr', 'Vietnam', '2021-05-04 20:00:43', '2021-05-04 20:00:43', NULL),
(712, 231, 'ar', 'جزر فيرجن (البريطانية)', '2021-05-04 20:01:33', '2021-05-04 20:01:33', NULL),
(713, 231, 'tr', 'Virgin Adaları (İngiliz)', '2021-05-04 20:01:33', '2021-05-04 20:01:33', NULL),
(714, 232, 'ar', 'جزر فيرجن (الولايات المتحدة)', '2021-05-04 20:02:01', '2021-05-04 20:02:01', NULL),
(715, 232, 'tr', 'Virgin Adaları (ABD)', '2021-05-04 20:02:01', '2021-05-04 20:02:01', NULL),
(716, 233, 'ar', 'جزر واليس وفوتونا', '2021-05-04 22:55:43', '2021-05-04 22:55:43', NULL),
(717, 233, 'tr', 'Wallis ve Futuna Adaları', '2021-05-04 22:55:43', '2021-05-04 22:55:43', NULL),
(718, 234, 'ar', 'الصحراء الغربية', '2021-05-04 22:56:20', '2021-05-04 22:56:20', NULL),
(719, 234, 'tr', 'Batı Sahra', '2021-05-04 22:56:20', '2021-05-04 22:56:20', NULL),
(720, 235, 'ar', 'اليمن', '2021-05-04 22:57:11', '2021-05-04 22:57:11', NULL),
(721, 235, 'tr', 'Yemen', '2021-05-04 22:57:11', '2021-05-04 22:57:11', NULL),
(722, 237, 'ar', 'جمهورية الكونغو الديمقراطية', '2021-05-04 22:57:51', '2021-05-04 22:57:51', NULL),
(723, 237, 'tr', 'Kongo Demokratik Cumhuriyeti', '2021-05-04 22:57:51', '2021-05-04 22:57:51', NULL),
(724, 238, 'ar', 'زامبيا', '2021-05-04 22:58:15', '2021-05-04 22:58:15', NULL),
(725, 238, 'tr', 'Zambiya', '2021-05-04 22:58:15', '2021-05-04 22:58:15', NULL),
(726, 239, 'ar', 'زيمبابوي', '2021-05-04 22:58:40', '2021-05-04 22:58:40', NULL),
(727, 239, 'tr', 'Zimbabve', '2021-05-04 22:58:40', '2021-05-04 22:58:40', NULL),
(728, 242, 'ar', 'الجبل الأسود', '2021-05-04 22:59:14', '2021-05-04 22:59:14', NULL),
(729, 242, 'tr', 'Karadağ', '2021-05-04 22:59:14', '2021-05-04 22:59:14', NULL),
(730, 243, 'ar', 'صربيا', '2021-05-04 22:59:41', '2021-05-04 22:59:41', NULL),
(731, 243, 'tr', 'Sırbistan', '2021-05-04 22:59:41', '2021-05-04 22:59:41', NULL),
(732, 244, 'ar', 'جزر آلاند', '2021-05-04 23:01:05', '2021-05-04 23:01:05', NULL),
(733, 244, 'tr', 'Aaland Adaları', '2021-05-04 23:01:05', '2021-05-04 23:01:05', NULL),
(734, 245, 'ar', 'بونير وسانت يوستاتيوس وسابا', '2021-05-04 23:01:35', '2021-05-04 23:01:35', NULL),
(735, 245, 'tr', 'Bonaire, Sint Eustatius ve Saba', '2021-05-04 23:01:35', '2021-05-04 23:01:35', NULL),
(736, 246, 'ar', 'كوراكاو', '2021-05-04 23:02:01', '2021-05-04 23:02:01', NULL),
(737, 246, 'tr', 'Curacao', '2021-05-04 23:02:01', '2021-05-04 23:02:01', NULL),
(738, 247, 'ar', 'فلسطين', '2021-05-04 23:02:39', '2021-05-04 23:02:39', NULL),
(739, 247, 'tr', 'Filistin Arazisi, İşgal altında', '2021-05-04 23:02:39', '2021-05-04 23:02:39', NULL),
(740, 248, 'ar', 'جنوب السودان', '2021-05-04 23:03:14', '2021-05-04 23:03:14', NULL),
(741, 248, 'tr', 'Güney Sudan', '2021-05-04 23:03:14', '2021-05-04 23:03:14', NULL),
(742, 249, 'ar', 'سانت بارتيليمي', '2021-05-04 23:03:56', '2021-05-04 23:03:56', NULL),
(743, 249, 'tr', 'St. Barthelemy', '2021-05-04 23:03:56', '2021-05-04 23:03:56', NULL),
(744, 250, 'ar', 'سانت مارتن (الجزء الفرنسي)', '2021-05-04 23:04:27', '2021-05-04 23:04:27', NULL),
(745, 250, 'tr', 'St. Martin (Fransız kısmı)', '2021-05-04 23:04:27', '2021-05-04 23:04:27', NULL),
(746, 251, 'ar', 'جزر الكناري', '2021-05-04 23:04:51', '2021-05-04 23:04:51', NULL),
(747, 251, 'tr', 'Kanarya Adaları', '2021-05-04 23:04:51', '2021-05-04 23:04:51', NULL),
(748, 252, 'ar', 'جزيرة أسنسيون (البريطانية)', '2021-05-04 23:09:00', '2021-05-04 23:09:00', NULL),
(749, 252, 'tr', 'Yükseliş Adası (İngiliz)', '2021-05-04 23:09:00', '2021-05-04 23:09:00', NULL),
(751, 253, 'tr', 'Kosova', '2021-05-04 23:09:41', '2021-05-04 23:09:41', NULL),
(752, 256, 'ar', 'غيرنسي', '2021-05-04 23:12:09', '2021-05-04 23:12:09', NULL),
(753, 256, 'tr', 'Guernsey', '2021-05-04 23:12:09', '2021-05-04 23:12:09', NULL),
(754, 257, 'ar', 'جيرسي', '2021-05-04 23:12:38', '2021-05-04 23:12:38', NULL),
(755, 257, 'tr', 'Jersey', '2021-05-04 23:12:38', '2021-05-04 23:12:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` double NOT NULL,
  `coupon_type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free_shipping` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exclude_offer_products` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_purchases` int(11) NOT NULL DEFAULT 0,
  `all_frequency_use` int(11) DEFAULT 0,
  `buyer_frequency_use` int(11) NOT NULL DEFAULT 0,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active' COMMENT 'active/not_active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `seller_id`, `name`, `start`, `end`, `description`, `discount`, `coupon_type`, `free_shipping`, `exclude_offer_products`, `minimum_purchases`, `all_frequency_use`, `buyer_frequency_use`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 60, 'a5y7', '2021-12-24 00:00:00', '2022-01-19 00:00:00', 'test', 10, 'percent', NULL, NULL, 50, 2, 2, 'active', '2021-12-25 14:30:32', '2022-02-05 04:09:33', '2022-02-05 04:09:33'),
(3, 60, '31232', '2021-12-29 09:53:19', '2022-01-08 17:55:00', NULL, 10, 'percent', 'yes', 'yes', 100, 1000, 3, 'not_active', '2021-12-29 09:53:19', '2022-03-08 11:16:40', NULL),
(4, 60, '45645', '2022-02-03 02:35:59', '2022-03-29 04:35:00', NULL, 10, 'percent', NULL, 'yes', 40, 20000, 1, 'active', '2022-02-03 02:35:59', '2022-02-03 02:40:17', '2022-02-03 02:40:17'),
(5, 60, '1231312', '2022-02-05 04:07:11', '2022-02-28 06:07:00', NULL, 10, 'percent', NULL, 'yes', 111, 1000, 2, 'active', '2022-02-05 04:07:11', '2022-03-08 10:52:27', '2022-03-08 10:52:27'),
(6, 60, '1', '2022-02-20 10:23:51', '2022-03-09 12:23:00', NULL, 10, 'fixed', NULL, 'yes', 1, 10000, 2, 'active', '2022-02-20 10:23:51', '2022-02-20 10:23:57', '2022-02-20 10:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) UNSIGNED NOT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currency_translations`
--

CREATE TABLE `currency_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `currency_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `deal_expired` date DEFAULT NULL,
  `seller_id` int(11) DEFAULT 0,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active' COMMENT 'active/not_active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `buyer_id`, `deal_expired`, `seller_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2021-12-31', 0, 'active', '2021-12-08 06:56:00', NULL, NULL),
(2, 1, '2022-01-03', 0, 'active', '2021-12-08 06:56:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deals_offers`
--

CREATE TABLE `deals_offers` (
  `id` int(30) NOT NULL,
  `deal_id` int(11) DEFAULT NULL,
  `seller_id` int(30) NOT NULL DEFAULT 0,
  `shipping_time` date DEFAULT NULL,
  `shipping_method_id` int(11) DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `notes` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `coupon_id` int(11) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `final_amount` double DEFAULT NULL,
  `status` enum('new','under_preparing','ready','under_delivery','completed','canceled') COLLATE utf8mb3_unicode_ci DEFAULT 'new',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `deals_offers`
--

INSERT INTO `deals_offers` (`id`, `deal_id`, `seller_id`, `shipping_time`, `shipping_method_id`, `total_price`, `notes`, `coupon_id`, `payment_method_id`, `final_amount`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 60, '2021-12-22', 1, 200, NULL, NULL, 1, 200, 'new', '2021-12-08 07:09:59', NULL, NULL),
(2, 2, 60, '2021-12-24', 1, 300, NULL, NULL, 1, 300, 'new', '2021-12-08 07:09:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deals_products`
--

CREATE TABLE `deals_products` (
  `id` int(30) NOT NULL,
  `deal_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) UNSIGNED NOT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_translations`
--

CREATE TABLE `faq_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `faq_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(30) NOT NULL,
  `buyer_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='the table where user follow anther';

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `lang`, `flag`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'ar', 'uploads/language/s.png', NULL, NULL, NULL),
(3, 'en', 'uploads/language/s.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language_translations`
--

CREATE TABLE `language_translations` (
  `id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `locale` varchar(300) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `language_translations`
--

INSERT INTO `language_translations` (`id`, `language_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 2, 'en', 'Arabic', '2017-10-19 05:05:27', '0000-00-00 00:00:00', NULL),
(4, 2, 'ar', 'عربي', '2017-10-19 05:05:27', '0000-00-00 00:00:00', NULL),
(5, 3, 'en', 'English', '2017-10-19 05:05:27', '0000-00-00 00:00:00', NULL),
(6, 3, 'ar', 'انجليزي', '2017-10-19 05:05:27', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `appear_on_homepage` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('under_process','active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `appear_on_homepage`, `created_by`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'yes', 0, '1.png', 'active', '2021-11-28 22:00:00', NULL, NULL),
(2, 'yes', 0, '2.png', 'active', '2021-11-28 22:00:00', NULL, NULL),
(3, 'no', 0, '3.png', 'active', '2021-11-28 22:00:00', NULL, NULL),
(4, 'no', 0, '4.png', 'active', '2021-11-28 22:00:00', NULL, NULL),
(5, 'no', 0, '5.png', 'active', '2021-11-28 22:00:00', NULL, NULL),
(6, 'no', 0, '6.png', 'not_active', '2021-11-28 22:00:00', NULL, NULL),
(7, 'no', 0, '7.png', 'active', '2021-11-28 22:00:00', NULL, NULL),
(8, 'no', 0, '8.png', 'active', '2021-11-28 22:00:00', NULL, NULL),
(9, 'no', 0, '9.png', 'active', '2021-11-28 22:00:00', NULL, NULL),
(10, 'no', 0, '10.png', 'active', '2021-11-28 22:00:00', NULL, NULL),
(11, 'no', 0, '11.png', 'active', '2021-11-28 22:00:00', NULL, NULL),
(12, 'no', 60, '11.png', 'under_process', '2021-11-28 22:00:00', NULL, '2021-12-06 22:00:00'),
(17, 'no', 60, NULL, 'under_process', '2021-12-07 17:40:20', '2021-12-07 17:40:20', '2021-12-06 22:00:00'),
(18, 'no', 60, NULL, 'under_process', '2021-12-07 17:45:55', '2021-12-07 17:45:55', '2021-12-06 22:00:00'),
(19, 'no', 60, NULL, 'under_process', '2021-12-07 17:48:29', '2021-12-07 17:48:29', '2021-11-30 22:00:00'),
(20, 'no', 60, '76987811638906757_4139966.png', 'under_process', '2021-12-07 17:52:38', '2021-12-07 17:52:38', NULL),
(21, 'no', 95, '23365049164671995283.jpg', 'under_process', '2022-03-08 04:12:32', '2022-03-08 04:12:32', NULL),
(22, 'no', 60, '81178901649333715_1701190.png', 'under_process', '2022-04-07 10:15:15', '2022-04-07 10:15:15', NULL),
(23, 'no', 60, NULL, 'under_process', '2022-05-30 18:03:33', '2022-05-30 18:03:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main_category_translations`
--

CREATE TABLE `main_category_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_category_translations`
--

INSERT INTO `main_category_translations` (`id`, `main_category_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'فواكه', '2021-11-28 22:00:00', NULL, NULL),
(2, 1, 'ar', 'فواكه', '2021-11-28 22:00:00', NULL, NULL),
(3, 2, 'en', 'مخبوزات', '2021-11-28 22:00:00', NULL, NULL),
(4, 2, 'ar', 'مخبوزات', '2021-11-28 22:00:00', NULL, NULL),
(5, 3, 'en', 'الدجاج', '2021-11-28 22:00:00', NULL, NULL),
(6, 3, 'ar', 'الدجاج', '2021-11-28 22:00:00', NULL, NULL),
(7, 4, 'en', 'حلويات وبسكويت', '2021-11-28 22:00:00', NULL, NULL),
(8, 4, 'ar', 'حلويات وبسكويت', '2021-11-28 22:00:00', NULL, NULL),
(9, 5, 'en', 'وجبات خفيفة', '2021-11-28 22:00:00', NULL, NULL),
(10, 5, 'ar', 'وجبات خفيفة', '2021-11-28 22:00:00', NULL, NULL),
(11, 6, 'en', 'البقالة', '2021-11-28 22:00:00', NULL, NULL),
(12, 6, 'ar', 'البقالة', '2021-11-28 22:00:00', NULL, NULL),
(13, 7, 'en', 'معلبات', '2021-11-28 22:00:00', NULL, NULL),
(14, 7, 'ar', 'معلبات', '2021-11-28 22:00:00', NULL, NULL),
(15, 8, 'en', 'مجمدات', '2021-11-28 22:00:00', NULL, NULL),
(16, 8, 'ar', 'مجمدات', '2020-06-20 12:48:32', NULL, NULL),
(17, 9, 'en', 'العناية بالطفل', '2021-11-28 22:00:00', NULL, NULL),
(18, 9, 'ar', 'العناية بالطفل', '2020-06-20 12:48:32', NULL, NULL),
(19, 10, 'en', 'العناية الشخصية', '2021-11-28 22:00:00', NULL, NULL),
(20, 10, 'ar', 'العناية الشخصية', '2020-06-20 12:48:32', NULL, NULL),
(21, 11, 'en', 'منتجات الألبان', '2021-11-28 22:00:00', NULL, NULL),
(22, 11, 'ar', 'منتجات الألبان', '2020-06-20 12:48:32', NULL, NULL),
(23, 12, 'ar', '6666666', '2021-12-03 09:00:04', '2021-12-03 09:00:04', NULL),
(24, 12, 'en', '6666666', '2021-12-03 09:00:04', '2021-12-03 09:00:04', NULL),
(25, 13, 'ar', '534535353535', '2021-12-03 09:20:30', '2021-12-03 09:20:30', NULL),
(26, 13, 'en', '534535353535', '2021-12-03 09:20:30', '2021-12-03 09:20:30', NULL),
(27, 14, 'ar', '657567567567', '2021-12-03 09:26:16', '2021-12-03 09:26:16', NULL),
(28, 14, 'en', '657567567567', '2021-12-03 09:26:17', '2021-12-03 09:26:17', NULL),
(29, 15, 'ar', '42423', '2021-12-03 09:28:04', '2021-12-03 09:28:04', NULL),
(30, 15, 'en', '42423', '2021-12-03 09:28:04', '2021-12-03 09:28:04', NULL),
(31, 17, 'ar', 'aaa', '2021-12-07 17:40:20', '2021-12-07 17:40:20', NULL),
(32, 17, 'en', 'eee', '2021-12-07 17:40:20', '2021-12-07 17:40:20', NULL),
(33, 18, 'ar', '777', '2021-12-07 17:45:55', '2021-12-07 17:45:55', NULL),
(34, 18, 'en', '888', '2021-12-07 17:45:55', '2021-12-07 17:45:55', NULL),
(35, 19, 'ar', '000', '2021-12-07 17:48:29', '2021-12-07 17:48:29', NULL),
(36, 19, 'en', '999', '2021-12-07 17:48:29', '2021-12-07 17:48:29', NULL),
(37, 20, 'ar', 'مشروبات طبيعية', '2021-12-07 17:52:38', '2021-12-07 17:52:38', NULL),
(38, 20, 'en', 'Mashrobat', '2021-12-07 17:52:38', '2021-12-07 17:52:38', NULL),
(39, 21, 'ar', 'ttt', '2022-03-08 04:12:32', '2022-03-08 04:12:32', NULL),
(40, 21, 'en', 'tt', '2022-03-08 04:12:32', '2022-03-08 04:12:32', NULL),
(41, 22, 'ar', 'زيوت طبيعية', '2022-04-07 10:15:15', '2022-04-07 10:15:15', NULL),
(42, 22, 'en', NULL, '2022-04-07 10:15:15', '2022-04-07 10:15:15', NULL),
(43, 23, 'ar', NULL, '2022-05-30 18:03:33', '2022-05-30 18:03:33', NULL),
(44, 23, 'en', NULL, '2022-05-30 18:03:33', '2022-05-30 18:03:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `user_id`, `title`, `description`, `start_date`, `end_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 35, 'ملاحظة هامة جداً', 'يجب متابعة موضوع المريض رقم 2030', '2020-07-01', '2020-07-03', '2020-07-19 00:32:35', NULL, NULL),
(2, 36, 'تحديد موعد عملية', 'لابد من تحديد موعد عملية بأقرب وقت للمريض رقم 04500', '2020-07-02', '2020-07-03', '2020-07-19 00:32:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `from_admin_dashboard` int(11) NOT NULL DEFAULT 0,
  `random_key` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` enum('seller','buyer') COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `tag` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'order',
  `tag_id` int(11) NOT NULL DEFAULT 0,
  `message` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('3aa5c26120defa5c2d7d3735b2af6fa4b908aa31c08d138b0cd4350b0ac1f356eb38014237a7549d', 47, 1, 'mobile', '[]', 0, '2021-11-24 07:10:17', '2021-11-24 07:10:17', '2022-11-24 09:10:17'),
('6658b7a4399d0960479f6fdf6cc0954ed13296ded88e2878470b50f89b88dad4cf09b9cbde3bf6b4', 47, 1, 'mobile', '[]', 0, '2021-11-24 07:11:03', '2021-11-24 07:11:03', '2022-11-24 09:11:03'),
('864d6462faac1ff11a0fc4a385de1d8c47b08a428ef394e307c22dd19a223f16523f1c08140a2c7a', 47, 1, 'mobile', '[]', 0, '2021-11-24 07:11:16', '2021-11-24 07:11:16', '2022-11-24 09:11:16'),
('98111724ab8262a565a9e01b63caf0c8567caa55d28ada07422cf671e9c6bc6071ca18fe44dbbbd2', 47, 1, 'mobile', '[]', 0, '2021-11-24 07:10:47', '2021-11-24 07:10:47', '2022-11-24 09:10:47'),
('9934c3fc8b5fbc4ee54ddc36a6c148e5375e23dedb6cb8357ad5be2554ff8f5545350f83b9740378', 47, 1, 'mobile', '[]', 0, '2021-11-24 07:11:49', '2021-11-24 07:11:49', '2022-11-24 09:11:49'),
('b472ff573d55c9bcd117fdccb2ce4a813b4fbbb86b0be46fd63bfe948290fffe96bf82535364ecfd', 47, 1, 'mobile', '[]', 0, '2021-11-24 06:59:26', '2021-11-24 06:59:26', '2022-11-24 08:59:26'),
('bb059643d7d42138022f49046527f8189a20359d0b9afd89f5ea4e6dd1f54d056a7c73d0eaf22485', 47, 1, 'mobile', '[]', 0, '2021-11-24 07:12:11', '2021-11-24 07:12:11', '2022-11-24 09:12:11'),
('db04bf7880aa3acb30817bd4f852e030eff48c1b5aff6bb6f876a59fe838a614a265c73e466e705f', 47, 1, 'mobile', '[]', 0, '2021-11-24 07:12:03', '2021-11-24 07:12:03', '2022-11-24 09:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'b5R7r18pfp92zTbIeNbcAEUnUOKAFj4RF26OQBQ9', 'http://localhost', 1, 0, 0, '2018-04-04 02:12:13', '2018-04-04 02:12:13'),
(2, NULL, 'Laravel Password Grant Client', '8FeNSQNGX4ImJ1IScKBaEi1XzD76DFIifSRBjn9j', 'http://localhost', 0, 1, 0, '2018-04-04 02:12:13', '2018-04-04 02:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-04-04 02:12:13', '2018-04-04 02:12:13');

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(30) NOT NULL,
  `order_number` varchar(300) COLLATE utf8mb3_unicode_ci NOT NULL,
  `seller_id` int(30) NOT NULL DEFAULT 0,
  `buyer_id` int(11) DEFAULT NULL,
  `coupon_id` int(30) DEFAULT 0,
  `coupon_discount` double NOT NULL DEFAULT 0,
  `buyer_address_id` int(11) DEFAULT NULL,
  `shipping_method_id` int(11) DEFAULT NULL,
  `shipping_method_cost` double NOT NULL DEFAULT 0,
  `payment_method_id` int(11) NOT NULL DEFAULT 0,
  `sub_total` double DEFAULT 0,
  `final_total` double NOT NULL DEFAULT 0,
  `notes` text COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` enum('new','under_preparing','ready','under_delivery','completed','canceled') COLLATE utf8mb3_unicode_ci DEFAULT 'new',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `seller_id`, `buyer_id`, `coupon_id`, `coupon_discount`, `buyer_address_id`, `shipping_method_id`, `shipping_method_cost`, `payment_method_id`, `sub_total`, `final_total`, `notes`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '000001', 60, 1, 3, 0, NULL, 1, 10, 1, 100, 110, NULL, 'under_delivery', '2022-01-17 08:07:45', '2022-02-20 08:06:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` float NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 100, '2021-12-04 08:57:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `image` varchar(225) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '1',
  `visit` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `image`, `visit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'At7NpGQOFGyVkd910587021636312909_2892981.jpg', 3, '2018-08-05 09:27:42', '2021-11-08 07:21:49', NULL),
(2, 'Iwf0BX7BrWNg9bi29006971626270011_5544450.png', 1, '2018-08-05 09:27:49', '2021-11-04 06:15:34', NULL),
(3, 'Iwf0BX7BrWNg9bi29006971626270011_5544450.png', 1, '2018-08-05 09:27:49', '2021-11-04 06:15:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_translations`
--

CREATE TABLE `page_translations` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `locale` varchar(11) COLLATE utf8mb3_unicode_ci NOT NULL,
  `title` varchar(225) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `page_translations`
--

INSERT INTO `page_translations` (`id`, `page_id`, `locale`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'About Us', '<p>About Us&nbsp;About Us&nbsp;About Us About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;</p>', '2018-08-05 09:29:09', '2021-07-14 14:39:21', NULL),
(2, 1, 'ar', 'كلمة الوزارة', '<p>من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن vv</p>', '2018-08-05 09:29:12', '2021-07-14 14:39:21', NULL),
(3, 2, 'en', 'Privacy Policy', '<p>Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy</p>', '2018-08-05 09:30:08', '2021-03-22 23:29:01', NULL),
(4, 2, 'ar', 'خطة الوزارة', '<p>سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية</p>', '2018-08-05 09:30:11', '2021-03-22 23:29:01', NULL),
(5, 3, 'en', 'Privacy Policy', '<p>Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy</p>', '2018-08-05 09:30:08', '2021-03-22 23:29:01', NULL),
(6, 3, 'ar', 'الادارات العامة', '<p>سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية</p>', '2018-08-05 09:30:11', '2021-03-22 23:29:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('electrosharaf@gmail.com', '$2y$10$HcrOtLd9NUpbPIgmW0jlF.tzzYk/JhMF/bbw5aKBfH2S0yph/pP2e', '2019-12-21 00:47:43'),
('yosuf@yosuf.com', '$2y$10$/YrCmm61CfnKfAvAsgeEF.ckn5.OxijF7dZeCFlMxnr.zIVy6vwCS', '2020-04-26 18:25:48'),
('test@gmail.com', '$2y$10$06K2oEINlxvtbekyynLOcuUhHTa9Xbr4cIOcBUoXvQEAp4ku4omMW', '2020-04-26 18:34:24'),
('zoom@gmail.com', '$2y$10$lEYJUugkk3P3dZuS3xPIIuOC8yG1XoPAvcN39t/kQONqHhjlAp7j6', '2020-06-07 19:12:51'),
('tarik.zaeem@gmail.com', '$2y$10$G/kTs3kZ8OJskRUAN2w/IeXtpZUJZg8D/C5CUmS3nFSncqTsk8Zl6', '2020-06-10 01:09:07'),
('asiaa7med1996@gmail.com', '$2y$10$KZwee9lLMbYGbIFE10E/h.lVnlpVOzDNSaaepNy7C8ZfcwDRFPcpu', '2020-06-17 20:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `payments_methods`
--

CREATE TABLE `payments_methods` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` enum('local','international') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'local',
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments_methods`
--

INSERT INTO `payments_methods` (`id`, `type`, `status`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'local', 'active', 'stc.png', '2021-12-04 08:18:45', NULL, NULL),
(2, 'local', 'active', 'visa.png', '2021-12-04 08:18:45', NULL, NULL),
(3, 'local', 'active', 'paypal.png', '2021-12-04 08:18:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_method_translations`
--

CREATE TABLE `payment_method_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_method_translations`
--

INSERT INTO `payment_method_translations` (`id`, `payment_method_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'STC Pay', '2021-12-04 08:19:12', NULL, NULL),
(2, 1, 'ar', 'STC Pay', '2021-12-04 08:19:12', NULL, NULL),
(3, 2, 'en', 'Visa', '2021-12-04 08:19:12', NULL, NULL),
(4, 2, 'ar', 'Visa', '2021-12-04 08:19:12', NULL, NULL),
(5, 3, 'en', 'PayPal', '2021-12-04 08:19:12', NULL, NULL),
(6, 3, 'ar', 'PayPal', '2021-12-04 08:19:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `roleSlug` varchar(191) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `roleSlug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'procedures', '2021-01-25 12:49:05', '2021-01-25 12:49:05', NULL),
(2, 'statistics', '2021-01-25 13:06:00', '2021-01-25 13:06:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_translations`
--

CREATE TABLE `permission_translations` (
  `id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `locale` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `permission_translations`
--

INSERT INTO `permission_translations` (`id`, `permission_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'ar', 'دليل الإجراءات', '2021-01-25 12:49:05', '2021-01-25 12:49:05', NULL),
(2, 2, 'ar', 'الإحصائيات', '2021-01-25 13:06:00', '2021-01-25 13:06:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_main` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `product_id`, `image`, `is_main`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '1.jpg', 1, NULL, NULL, NULL),
(2, 1, '2.jpg', 0, NULL, NULL, NULL),
(3, 1, '3.jpg', 0, NULL, NULL, NULL),
(4, 1, '4.jpg', 0, NULL, NULL, NULL),
(5, 4, '26069141638945827_1229209.jpg', 1, '2021-12-08 04:43:48', '2021-12-08 04:43:48', NULL),
(6, 6, '90587411638945879_4251850.jpg', 1, '2021-12-08 04:44:39', '2021-12-08 04:44:39', NULL),
(7, 8, '73713001638945982_9919389.jpg', 1, '2021-12-08 04:46:22', '2021-12-08 04:46:22', NULL),
(8, 10, '16022611638946019_1120758.jpg', 1, '2021-12-08 04:46:59', '2021-12-08 04:46:59', NULL),
(9, 11, '17432561638946054_7698925.jpg', 1, '2021-12-08 04:47:34', '2021-12-08 04:47:34', NULL),
(10, 11, '84882931638946054_2070834.jpg', 0, '2021-12-08 04:47:34', '2021-12-08 04:47:34', NULL),
(11, 13, '31311071638946253_9304640.jpg', 1, '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(12, 13, '76711511638946253_7676266.jpg', 0, '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(13, 13, '78175301638946253_8667532.jpg', 0, '2021-12-08 04:50:54', '2021-12-08 04:50:54', NULL),
(14, 14, '76711511638946253_7676266.jpg', 1, '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(15, 15, '78175301638946253_8667532.jpg', 1, '2021-12-08 04:50:54', '2021-12-08 04:50:54', NULL),
(18, 17, '76711511638946253_7676266.jpg', 1, '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(21, 16, '1.jpg', 1, NULL, NULL, NULL),
(22, 18, '83941671640831620_8990541.jpg', 1, '2021-12-30 00:33:40', '2021-12-30 00:33:40', NULL),
(23, 19, '59866771640831786_8613101.jpg', 1, '2021-12-30 00:36:26', '2021-12-30 00:36:26', NULL),
(24, 20, '70590281642434868_4415192.jpg', 1, '2022-01-17 13:54:29', '2022-01-17 13:54:29', NULL),
(25, 21, '88236481642470772_8284210.jpg', 1, '2022-01-17 23:52:52', '2022-01-17 23:52:52', NULL),
(26, 21, '14706071642470772_4480397.jpg', 0, '2022-01-17 23:52:52', '2022-01-17 23:52:52', NULL),
(27, 21, '99170751642470772_7241230.jpg', 0, '2022-01-17 23:52:53', '2022-01-17 23:52:53', NULL),
(28, 21, '46028781642470773_8672344.jpg', 0, '2022-01-17 23:52:53', '2022-01-17 23:52:53', NULL),
(29, 22, '37552011643042253_6640949.jpg', 1, '2022-01-24 14:37:34', '2022-01-24 14:37:34', NULL),
(30, 23, '32833921643042631_6315684.jpg', 0, '2022-01-24 14:43:51', '2022-01-24 14:43:51', NULL),
(31, 24, '96944651643042791_1139969.jpg', 0, '2022-01-24 14:46:31', '2022-01-24 14:46:31', NULL),
(32, 25, '12548511645349805_9755599.jpg', 1, '2022-02-20 07:36:45', '2022-02-20 07:36:45', NULL),
(33, 25, '78173831645349805_5577237.jpg', 0, '2022-02-20 07:36:45', '2022-02-20 07:36:45', NULL),
(34, 25, '86490971645349805_1610662.jpg', 0, '2022-02-20 07:36:45', '2022-02-20 07:36:45', NULL),
(35, 25, '64312201645349805_9719443.jpg', 0, '2022-02-20 07:36:45', '2022-02-20 07:36:45', NULL),
(36, 26, '80123031645350331_4655384.jpg', 1, '2022-02-20 07:45:31', '2022-02-20 07:45:31', NULL),
(37, 26, '75123971645350331_4715551.jpg', 0, '2022-02-20 07:45:31', '2022-02-20 07:45:31', NULL),
(38, 26, '35934331645350331_5540199.jpg', 0, '2022-02-20 07:45:31', '2022-02-20 07:45:31', NULL),
(39, 26, '19242341645350331_8369353.jpg', 0, '2022-02-20 07:45:31', '2022-02-20 07:45:31', NULL),
(40, 26, '19620291645351104_8139809.jpg', 1, '2022-02-20 07:58:25', '2022-02-20 07:58:25', NULL),
(41, 27, '93403571648400469_2191232.jpg', 1, '2022-03-27 14:01:10', '2022-03-27 14:01:10', NULL),
(42, 28, '74741371648400563_1880086.jpg', 1, '2022-03-27 14:02:43', '2022-03-27 14:02:43', NULL),
(43, 29, '96106471648400846_6250394.jpg', 1, '2022-03-27 14:07:26', '2022-03-27 14:07:26', NULL),
(44, 30, '75134391648410967_6015826.jpg', 1, '2022-03-27 16:56:08', '2022-03-27 16:56:08', NULL),
(45, 32, '30618601648411978_1564878.jpg', 1, '2022-03-27 17:12:58', '2022-03-27 17:12:58', NULL),
(46, 33, '26414511648412078_6435853.jpg', 1, '2022-03-27 17:14:38', '2022-03-27 17:14:38', NULL),
(47, 34, '99965431648412139_5789138.jpg', 1, '2022-03-27 17:15:39', '2022-03-27 17:15:39', NULL),
(48, 35, '87796551648412301_6769458.jpg', 1, '2022-03-27 17:18:21', '2022-03-27 17:18:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `type` enum('offer_request','stories','deals') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deal_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT 0,
  `main_category_id` int(11) DEFAULT 0,
  `sub_category_id` int(11) DEFAULT 0,
  `price` double DEFAULT NULL,
  `discount_percentage` double DEFAULT NULL,
  `offer_price` double DEFAULT NULL,
  `trademark_id` int(11) DEFAULT NULL,
  `sku` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views_count` int(11) DEFAULT 0,
  `quantity_available` int(11) DEFAULT 0,
  `quantity_sell` int(11) DEFAULT 0,
  `count_alert` int(11) DEFAULT NULL,
  `minimum_order` int(11) DEFAULT NULL,
  `taxable` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approve_status` enum('waiting','approve','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `approve_time` datetime DEFAULT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active' COMMENT 'active/not_active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type`, `deal_id`, `seller_id`, `main_category_id`, `sub_category_id`, `price`, `discount_percentage`, `offer_price`, `trademark_id`, `sku`, `views_count`, `quantity_available`, `quantity_sell`, `count_alert`, `minimum_order`, `taxable`, `approve_status`, `approve_time`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'offer_request', NULL, 60, 4, 9, 100, 10, 90, NULL, 'AWR345UY', 0, 200, 10, 10, NULL, NULL, 'approve', NULL, 'active', '2021-12-04 05:39:45', '2022-03-27 13:49:30', '2022-03-27 13:49:30'),
(13, 'offer_request', NULL, 60, 1, 3, 100, 10, NULL, NULL, '243234', 0, 100, 0, 3, 4, NULL, 'waiting', NULL, 'active', '2021-12-08 04:50:53', '2022-03-27 13:49:30', '2022-03-27 13:49:30'),
(14, 'deals', 1, 0, 4, 9, 100, 10, 90, NULL, 'AWR345UY', 0, 200, 10, 10, NULL, NULL, 'approve', NULL, 'active', '2021-12-04 05:39:45', NULL, NULL),
(15, 'deals', 2, 0, 1, 3, 100, 10, NULL, NULL, '243234', 0, 100, 0, 3, 4, NULL, 'waiting', NULL, 'active', '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(16, 'stories', NULL, 60, 1, 3, 100, 10, 90, NULL, '243234', 0, 100, 0, 3, 4, NULL, 'approve', '2022-02-12 14:10:00', 'active', '2021-12-30 01:20:53', '2022-03-08 09:11:38', '2022-03-08 09:11:38'),
(17, 'stories', 0, 60, 4, 9, 85, 0, 0, NULL, 'AWR345UY', 3450, 200, 10, 10, 5, NULL, 'approve', '2021-12-28 00:00:00', 'not_active', '2021-12-04 05:39:45', '2022-03-27 13:49:30', '2022-03-27 13:49:30'),
(19, 'stories', NULL, 60, 3, NULL, 50, 15, 35, NULL, '656456', 0, 10, 0, 3, NULL, NULL, 'waiting', NULL, 'not_active', '2021-12-30 00:36:25', '2022-02-03 00:49:05', '2022-02-03 00:49:05'),
(21, 'offer_request', NULL, 60, 2, NULL, 100, 10, NULL, NULL, '243234', 0, 4, 0, 3, 2, NULL, 'waiting', NULL, 'active', '2022-01-17 23:52:52', '2022-01-17 23:56:12', '2022-01-17 23:56:12'),
(22, 'offer_request', NULL, 60, 2, 5, 100, 90, NULL, NULL, '243234', 0, 20, 0, 3, 4, NULL, 'waiting', NULL, 'active', '2022-01-24 14:37:33', '2022-02-12 11:30:43', '2022-02-12 11:30:43'),
(23, 'offer_request', NULL, 60, 2, 5, 100, 20, 80, NULL, '243234', 0, 100, 0, 3, 5, NULL, 'waiting', NULL, 'active', '2022-01-24 14:43:49', '2022-02-05 02:54:16', '2022-02-05 02:54:16'),
(24, 'offer_request', NULL, 60, 2, 5, 50, 10, 45, NULL, '243234', 0, 1000, 0, 3, 4, 'yes', 'waiting', NULL, 'active', '2022-01-24 14:46:31', '2022-02-05 02:11:10', '2022-02-05 02:11:10'),
(25, 'offer_request', NULL, 60, 1, NULL, 100, 10, 90, NULL, '76567567', 0, 10, 0, 3, 2, 'yes', 'waiting', NULL, 'active', '2022-02-20 07:36:45', '2022-02-20 07:41:31', '2022-02-20 07:41:31'),
(26, 'offer_request', NULL, 60, 1, NULL, 200, 10, 180, NULL, '222222', 0, 33, 0, 22, 20, NULL, 'waiting', NULL, 'active', '2022-02-20 07:45:31', '2022-03-08 07:55:13', '2022-03-08 07:55:13'),
(27, 'offer_request', NULL, 60, 1, 3, 100, 10, 90, NULL, '233234234', 0, 12, 0, 4, 2, 'yes', 'waiting', NULL, 'active', '2022-03-27 14:01:09', '2022-03-27 14:01:19', NULL),
(28, 'offer_request', NULL, 60, 1, 3, 75, 10, 67.5, NULL, '242343', 0, 7, 0, 5, 5, 'yes', 'waiting', NULL, 'active', '2022-03-27 14:02:42', '2022-03-27 14:02:42', NULL),
(29, 'offer_request', NULL, 60, 1, 3, 60, NULL, 60, NULL, '23423423', 0, 8, 0, 7, 1, NULL, 'waiting', NULL, 'active', '2022-03-27 14:07:26', '2022-03-27 14:07:26', NULL),
(30, 'offer_request', NULL, 60, 1, 4, 20, NULL, 20, NULL, '553434534', 0, 5, 0, 4, 1, NULL, 'waiting', NULL, 'active', '2022-03-27 16:56:07', '2022-03-27 16:56:07', NULL),
(31, 'offer_request', NULL, 60, 2, 5, 3, NULL, 3, NULL, '31231', 0, 5, 0, 1, 2, NULL, 'waiting', NULL, 'active', '2022-03-27 17:11:47', '2022-03-27 17:12:05', '2022-03-27 17:12:05'),
(32, 'offer_request', NULL, 60, 2, 5, 3, NULL, 3, NULL, '3123', 0, 2, 0, 1, 2, NULL, 'waiting', NULL, 'active', '2022-03-27 17:12:57', '2022-03-27 17:12:57', NULL),
(33, 'offer_request', NULL, 60, 2, 5, 2, NULL, 2, NULL, '4234', 0, 2, 0, 1, 1, NULL, 'waiting', NULL, 'active', '2022-03-27 17:14:38', '2022-03-27 17:14:38', NULL),
(34, 'offer_request', NULL, 60, 2, 5, 3, NULL, 3, NULL, 'yyyyy', 0, 6, 0, 1, NULL, NULL, 'waiting', NULL, 'active', '2022-03-27 17:15:38', '2022-03-27 17:15:38', NULL),
(35, 'offer_request', NULL, 60, 2, 5, 10, NULL, 10, NULL, '32423423', 0, 3, 0, 2, NULL, NULL, 'waiting', NULL, 'active', '2022-03-27 17:18:21', '2022-07-10 08:36:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_smarts_prices`
--

CREATE TABLE `products_smarts_prices` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `from_quantity` int(11) DEFAULT NULL,
  `to_quantity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `products_smarts_prices`
--

INSERT INTO `products_smarts_prices` (`id`, `product_id`, `from_quantity`, `to_quantity`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 22, 100, 999, 65, '2022-01-24 14:37:34', '2022-01-24 14:37:34', NULL),
(2, 23, 101, 199, 50, '2022-01-24 14:43:51', '2022-01-24 14:43:51', NULL),
(3, 24, 50, 99, 40, '2022-01-24 14:46:31', '2022-01-24 14:46:31', NULL),
(4, 25, 100, 200, 80, '2022-02-20 07:36:45', '2022-02-20 07:36:45', NULL),
(5, 26, 100, 199, 80, '2022-02-20 07:45:31', '2022-02-20 07:58:25', '2022-02-20 07:58:25'),
(6, 26, 2000, 40000, 150, '2022-02-20 07:58:25', '2022-02-20 07:58:25', NULL),
(7, 27, 100, 200, 60, '2022-03-27 14:01:10', '2022-03-27 14:01:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'First Product ', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product ', '2021-12-04 05:45:07', NULL, NULL),
(2, 1, 'ar', 'المنتج الأول ', 'المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول ', '2021-12-04 05:45:07', NULL, NULL),
(3, 2, 'ar', 'aaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-12-08 00:26:42', '2021-12-08 00:26:42', NULL),
(4, 2, 'en', 'eee', 'eeeeeeeeee', '2021-12-08 00:26:43', '2021-12-08 00:26:43', NULL),
(5, 3, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:42:48', '2021-12-08 04:42:48', NULL),
(6, 3, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:42:48', '2021-12-08 04:42:48', NULL),
(7, 4, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:43:47', '2021-12-08 04:43:47', NULL),
(8, 4, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:43:47', '2021-12-08 04:43:47', NULL),
(9, 5, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:44:21', '2021-12-08 04:44:21', NULL),
(10, 5, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:44:21', '2021-12-08 04:44:21', NULL),
(11, 6, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:44:39', '2021-12-08 04:44:39', NULL),
(12, 6, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:44:39', '2021-12-08 04:44:39', NULL),
(13, 7, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:44:56', '2021-12-08 04:44:56', NULL),
(14, 7, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:44:56', '2021-12-08 04:44:56', NULL),
(15, 8, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:46:22', '2021-12-08 04:46:22', NULL),
(16, 8, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:46:22', '2021-12-08 04:46:22', NULL),
(17, 9, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:46:37', '2021-12-08 04:46:37', NULL),
(18, 9, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:46:37', '2021-12-08 04:46:37', NULL),
(19, 10, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:46:59', '2021-12-08 04:46:59', NULL),
(20, 10, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:46:59', '2021-12-08 04:46:59', NULL),
(21, 11, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:47:34', '2021-12-08 04:47:34', NULL),
(22, 11, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:47:34', '2021-12-08 04:47:34', NULL),
(23, 12, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:49:51', '2021-12-08 04:49:51', NULL),
(24, 12, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:49:51', '2021-12-08 04:49:51', NULL),
(25, 13, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(26, 13, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(27, 16, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:49:51', '2021-12-08 04:49:51', NULL),
(28, 16, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:49:51', '2021-12-08 04:49:51', NULL),
(29, 17, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(30, 17, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(31, 18, 'ar', 'test', 'details', '2021-12-30 00:33:39', '2021-12-30 00:33:39', NULL),
(32, 18, 'en', 'test', 'details', '2021-12-30 00:33:40', '2021-12-30 00:33:40', NULL),
(33, 19, 'ar', 'test', 'details', '2021-12-30 00:36:26', '2021-12-30 00:36:26', NULL),
(34, 19, 'en', 'test', 'details', '2021-12-30 00:36:26', '2021-12-30 00:36:26', NULL),
(35, 20, 'ar', NULL, NULL, '2022-01-17 13:54:28', '2022-01-17 13:54:28', NULL),
(36, 20, 'en', NULL, NULL, '2022-01-17 13:54:28', '2022-01-17 13:54:28', NULL),
(37, 21, 'ar', '2', '4', '2022-01-17 23:52:52', '2022-01-17 23:52:52', NULL),
(38, 21, 'en', 'Flafel', '4', '2022-01-17 23:52:52', '2022-01-17 23:52:52', NULL),
(39, 14, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(40, 14, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(41, 15, 'ar', 'المنتج الاول', 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول', '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(42, 15, 'en', 'First Product', 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product', '2021-12-08 04:50:53', '2021-12-08 04:50:53', NULL),
(43, 22, 'ar', 'سيبيسب', 'سيبسيب', '2022-01-24 14:37:33', '2022-01-24 14:37:33', NULL),
(44, 22, 'en', 'سيبسيب', 'سيبسيب', '2022-01-24 14:37:33', '2022-01-24 14:37:33', NULL),
(45, 23, 'ar', '1212', '123123', '2022-01-24 14:43:51', '2022-01-24 14:43:51', NULL),
(46, 23, 'en', '12312321', '123123', '2022-01-24 14:43:51', '2022-01-24 14:43:51', NULL),
(47, 24, 'ar', '23324234234', '234234234', '2022-01-24 14:46:31', '2022-01-24 14:46:31', NULL),
(48, 24, 'en', '234234', '23423423432', '2022-01-24 14:46:31', '2022-01-24 14:46:31', NULL),
(49, 25, 'ar', NULL, NULL, '2022-02-12 06:01:30', '2022-02-12 06:01:30', NULL),
(50, 25, 'en', NULL, NULL, '2022-02-12 06:01:30', '2022-02-12 06:01:30', NULL),
(51, 25, 'ar', 'nnnnnnnnnaaaaaaa', 'nnnnnnnnnnnnnnnnnnnnaaaaaaaaaaaaaaaaaa', '2022-02-20 07:36:45', '2022-02-20 07:36:45', NULL),
(52, 25, 'en', 'nnnnnnnnnnneeeeeee', 'nnnnnnnnnnnnnnnnnnnnnnnnneeeeeeeeeeee', '2022-02-20 07:36:45', '2022-02-20 07:36:45', NULL),
(53, 26, 'ar', 'name ar22', 'details ar22', '2022-02-20 07:45:31', '2022-02-20 07:58:24', NULL),
(54, 26, 'en', 'name en22', 'details en22', '2022-02-20 07:45:31', '2022-02-20 07:58:24', NULL),
(55, 27, 'ar', 'فواكه نوع رقم #1', 'فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة', '2022-03-27 14:01:09', '2022-03-27 14:01:09', NULL),
(56, 27, 'en', 'فواكه نوع رقم #1', 'فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة', '2022-03-27 14:01:09', '2022-03-27 14:01:09', NULL),
(57, 28, 'ar', 'فواكه نوع رقم #2', 'فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة', '2022-03-27 14:02:42', '2022-03-27 14:02:42', NULL),
(58, 28, 'en', 'فواكه نوع رقم #2', 'فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة', '2022-03-27 14:02:42', '2022-03-27 14:02:42', NULL),
(59, 29, 'ar', 'فواكه نوع رقم #3', 'فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة', '2022-03-27 14:07:26', '2022-03-27 14:07:26', NULL),
(60, 29, 'en', 'فواكه نوع رقم #3', 'فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة', '2022-03-27 14:07:26', '2022-03-27 14:07:26', NULL),
(61, 30, 'ar', 'فاكهة الأناناس', 'فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس', '2022-03-27 16:56:07', '2022-03-27 16:56:07', NULL),
(62, 30, 'en', 'فاكهة الأناناس', 'فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس', '2022-03-27 16:56:07', '2022-03-27 16:56:07', NULL),
(63, 31, 'ar', 'مخبوزات لزيزة', 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة', '2022-03-27 17:11:49', '2022-03-27 17:11:49', NULL),
(64, 31, 'en', 'مخبوزات لزيزة', 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة', '2022-03-27 17:11:49', '2022-03-27 17:11:49', NULL),
(65, 32, 'ar', 'مخبوزات لزيزة', 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة', '2022-03-27 17:12:58', '2022-03-27 17:12:58', NULL),
(66, 32, 'en', 'مخبوزات لزيزة', 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة', '2022-03-27 17:12:58', '2022-03-27 17:12:58', NULL),
(67, 33, 'ar', 'مخبوزات لزيزة', 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة', '2022-03-27 17:14:38', '2022-03-27 17:14:38', NULL),
(68, 33, 'en', 'مخبوزات لزيزة', 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة', '2022-03-27 17:14:38', '2022-03-27 17:14:38', NULL),
(69, 34, 'ar', 'مخبوزات لزيزة', 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة', '2022-03-27 17:15:39', '2022-03-27 17:15:39', NULL),
(70, 34, 'en', 'مخبوزات لزيزة', 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة', '2022-03-27 17:15:39', '2022-03-27 17:15:39', NULL),
(71, 35, 'ar', 'مخبوزات لزيزة', 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة', '2022-03-27 17:18:21', '2022-03-27 17:18:21', NULL),
(72, 35, 'en', 'مخبوزات لزيزة', 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة', '2022-03-27 17:18:21', '2022-03-27 17:18:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `id` int(11) UNSIGNED NOT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rank_translations`
--

CREATE TABLE `rank_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `rank_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `details` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `seller_category_id` int(11) DEFAULT NULL COMMENT 'مصنع, مستودع, مندوب',
  `rank_id` int(11) DEFAULT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` int(1) DEFAULT NULL,
  `verification_date` date DEFAULT NULL,
  `license` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `latitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_profile` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_purchases` double DEFAULT NULL,
  `commercial_register_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commercial_register_date` date DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not_active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `seller_category_id`, `rank_id`, `name`, `mobile`, `email`, `verified`, `verification_date`, `license`, `address`, `latitude`, `longitude`, `password`, `image_profile`, `whatsapp`, `facebook`, `twitter`, `instagram`, `tiktok`, `minimum_purchases`, `commercial_register_no`, `commercial_register_date`, `remember_token`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(47, NULL, NULL, 'شكرة المنارة', '0597116675', 'alamanara@gmail.com', 1, '2021-11-23', NULL, NULL, NULL, NULL, '$2y$10$lttzFOA/YzD8CAbW7VvHOeYjtp69eAOjpyCl1sItzBUR1dHHt3Oz6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'iRnlbGT1N5fKRv0jRtINAZUp6Z2pwvbPmmqxInVpHwtgILlRD2DRMdTHCdJg', 'active', '2021-11-24 05:59:23', '2021-12-01 01:52:22', NULL),
(48, NULL, NULL, NULL, '234234234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'not_active', '2021-11-27 14:10:10', '2021-11-27 14:10:10', NULL),
(49, NULL, NULL, NULL, '0599377814', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GA9GJTtGJVsTjIYgroFyxh9EhzQAiyqsZVqtD8mS0Lyjmm5S5QbHu3NUtojt', 'active', '2021-11-27 14:10:33', '2021-11-27 14:10:57', NULL),
(50, NULL, NULL, NULL, '02342340', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-11-27 14:33:01', '2021-11-27 14:33:01', NULL),
(51, NULL, NULL, NULL, '345345345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-11-27 14:33:53', '2021-11-27 14:33:53', NULL),
(52, NULL, NULL, NULL, '2434324234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-11-27 14:35:37', '2021-11-27 14:35:37', NULL),
(53, NULL, NULL, NULL, '34234234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-11-27 14:38:24', '2021-11-27 14:38:24', NULL),
(54, NULL, NULL, NULL, '34345345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-11-27 14:39:43', '2021-11-27 14:39:43', NULL),
(55, NULL, NULL, NULL, '4234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AFSweszCdAbzkhlkoLnN6K9wLrfvA7EYBFOUtGUDq5U8sixJ3c1Dg1uHWFnK', 'active', '2021-11-27 14:41:06', '2021-11-27 14:41:06', NULL),
(56, NULL, NULL, NULL, '756756', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LxL37z9RAQAc7oEiR5DO4Mz2aKzneWjnSa20mmnd0mXbI6pclgtqZarBIjC1', 'active', '2021-11-27 14:42:31', '2021-11-27 14:42:31', NULL),
(57, 1, NULL, 'شركة رام الله', '+970597116675', 'ramcom@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lt9dGA3uvNT1VBy0tgKzdSfpnIKicfWmgbOcmtk9xl3vuOmPodidrrE3Uwek', 'active', '2021-12-02 00:39:00', '2021-12-02 05:09:55', NULL),
(59, NULL, NULL, NULL, '+111223344', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9TggQGvYaNssBEdwHTFaeusSHWUg0bYFm7VbYznH9V2xBSdB6e9GZWlUoxc1', 'active', '2021-12-03 04:52:12', '2021-12-03 04:52:43', NULL),
(60, 1, NULL, 'شركة الإبتكار', '+1111122223333', 'lamar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '112200', '2021-12-26', 'eEphxXLjneKsYfPzFdzmD5yvBgaScPYiOIp7GUPzaPZf9W5T7E4u95uUSFgz', 'active', '2021-12-03 04:54:59', '2022-01-31 04:51:52', NULL),
(61, 3, NULL, '22', '+1556677', '22@22.22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8PY71LYr7tO045VPBrqJUSWyhTpuOy4WgsydbslHFEV6sNm2dyDvlhOTKac2', 'active', '2021-12-03 04:58:25', '2021-12-03 05:00:18', NULL),
(62, NULL, NULL, NULL, '+17777777777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YDQE5l5pYt8ShpmO2jf3oc7aWmkBpBigSyIcSqCXsndG3whT1bhO4xhuuaHK', 'active', '2021-12-03 05:00:52', '2021-12-03 05:00:55', NULL),
(63, NULL, NULL, NULL, '+177777777888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wRhRd15nzcJhyKaMNWhYSwoKsM2myNOyIpaRNQ8LKAP7PxZmZOhbonHgRyD1', 'active', '2021-12-03 05:01:22', '2021-12-03 05:01:26', NULL),
(64, NULL, NULL, NULL, '+18768768768', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gjr6nv2KzItbNg6kWgmfambK9qMWKn1ComcECTezPa1Ut9De9ohX8ZbSwqLn', 'active', '2021-12-03 05:02:51', '2021-12-03 05:03:01', NULL),
(65, NULL, NULL, NULL, '+1089089089', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'JXKGAppqbt71AwId1fxgqwMvaw070xNktK4sbQwOxqLYIZHkcZ2Dc5RtybAO', 'active', '2021-12-03 05:04:15', '2021-12-03 05:05:21', NULL),
(66, NULL, NULL, NULL, '+146645645', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Vl4gEvwH5vMbgbB9niQFMAtGvcbTG6jRgqtn3kEczlr1KczwKJ7rQx4r0FDn', 'active', '2021-12-03 05:06:21', '2021-12-03 05:06:28', NULL),
(67, NULL, NULL, NULL, '+198999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N4t3wcpUitqCJbFjdRlZgsQvPdof4EvbJy6Pho5IRZbXbxQ9yGGfOd5fVWTm', 'active', '2021-12-03 05:09:43', '2021-12-03 05:09:56', NULL),
(68, NULL, NULL, NULL, '+16454345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sqprpwcd8R2XqvRHUhmsGjkoDa5aUHCcGfG8bZaWjqCjXyyAprKoBCuXEXHd', 'active', '2021-12-03 05:10:48', '2021-12-03 05:12:08', NULL),
(69, NULL, NULL, NULL, '+1876878678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-12-03 05:13:15', '2021-12-03 05:14:07', NULL),
(70, 3, NULL, 'test', '+1998899', 'test@test.test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-12-03 05:15:46', '2021-12-03 05:16:27', NULL),
(71, 2, NULL, 'adasdas', '+18875575', 'asdasd@aaa.ps', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-12-03 05:26:42', '2021-12-03 05:44:48', NULL),
(72, 37, NULL, '345345345', '+1978978978', '44li@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-12-03 05:46:35', '2021-12-03 09:26:43', NULL),
(73, NULL, NULL, NULL, '+14564564564', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-12-03 09:27:29', '2021-12-03 09:27:33', NULL),
(74, NULL, NULL, NULL, '+9706456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-12-07 23:18:02', '2021-12-07 23:21:14', NULL),
(75, 1, NULL, 'Lemo Nabil', '+970353453453', '44li@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-12-07 23:23:08', '2021-12-07 23:29:45', NULL),
(76, NULL, NULL, NULL, '+97024423423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-12-07 23:38:29', '2021-12-07 23:38:56', NULL),
(77, 2, NULL, 'Lamar Ali', '+undefined242342', 'lama1r@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-12-08 04:24:19', '2021-12-08 04:25:08', NULL),
(78, NULL, NULL, NULL, '+9701211', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'not_active', '2021-12-24 03:34:45', '2021-12-24 03:34:45', NULL),
(79, NULL, NULL, NULL, '+1565656565656', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'not_active', '2021-12-24 06:19:41', '2021-12-24 06:19:41', NULL),
(80, NULL, NULL, NULL, '+undefined44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'not_active', '2021-12-24 06:22:35', '2021-12-24 06:22:35', NULL),
(81, NULL, NULL, NULL, '+11112312312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'not_active', '2021-12-24 06:35:17', '2021-12-24 06:35:17', NULL),
(82, NULL, NULL, NULL, '+undefined112233', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'not_active', '2021-12-24 17:12:06', '2021-12-24 17:12:06', NULL),
(83, NULL, NULL, NULL, '+undefined112233445', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'not_active', '2021-12-24 17:12:29', '2021-12-24 17:12:29', NULL),
(84, NULL, NULL, NULL, '+undefined3123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'not_active', '2021-12-24 17:12:35', '2021-12-24 17:12:35', NULL),
(85, NULL, NULL, NULL, '+1111222333444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-12-25 09:14:38', '2021-12-25 09:14:42', NULL),
(86, NULL, NULL, NULL, '+1333333444444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'not_active', '2021-12-31 12:10:57', '2021-12-31 12:10:57', NULL),
(87, 2, NULL, 'Lamar Ali', '+1123456789123', 'lamar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2021-12-31 12:16:30', '2021-12-31 12:50:09', NULL),
(88, 2, NULL, 'test', '+11123234242343', 'lamar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-01-16 12:12:18', '2022-01-16 12:14:19', NULL),
(89, NULL, NULL, NULL, '+1222233334444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-02-01 01:33:56', '2022-02-01 01:34:03', NULL),
(90, NULL, NULL, NULL, '+970345345345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-02-01 23:27:19', '2022-02-01 23:27:23', NULL),
(91, NULL, NULL, NULL, '+1223344223344', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-02-03 07:32:11', '2022-02-03 07:32:16', NULL),
(92, 2, NULL, 'Lamar Ali1', '+13123123123', 'lamar@gmail.com1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-02-05 01:33:01', '2022-02-05 01:36:18', NULL),
(93, 2, NULL, 'Lamar Ali', '+133453434433', 'lam1ar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-02-05 01:38:50', '2022-02-05 01:39:10', NULL),
(94, 3, NULL, 'Ali Ahmed', '+9702234234234', '44li@gmail.com', NULL, NULL, NULL, NULL, '24.233', '43.23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-02-05 01:40:54', '2022-02-05 01:41:27', NULL),
(95, 1, NULL, 'Lamar Ali', '+124234324234', 'la4325mar@gmail.com', NULL, NULL, NULL, NULL, '24.233', '43.23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-03-08 04:10:17', '2022-03-08 04:10:58', NULL),
(96, NULL, NULL, 'بقالتي', '+966557704697', 'engr.aalmutairi@gmail.com', NULL, NULL, NULL, NULL, '24.233', '43.23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2022-04-11 17:09:17', '2022-04-11 17:10:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers_areas_points`
--

CREATE TABLE `sellers_areas_points` (
  `id` int(30) NOT NULL,
  `seller_id` int(30) NOT NULL DEFAULT 0,
  `address` varchar(300) CHARACTER SET utf8mb3 DEFAULT NULL,
  `latitude` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `longitude` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `zone_size` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `district` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `postal_code` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` enum('active','not_active') COLLATE utf8mb3_unicode_ci DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sellers_areas_points`
--

INSERT INTO `sellers_areas_points` (`id`, `seller_id`, `address`, `latitude`, `longitude`, `zone_size`, `city_id`, `district`, `postal_code`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 60, 'جدة - مكتبة جرير', NULL, NULL, '345', 1, 'حي السالمية1', '909', 'active', '2022-01-31 01:35:38', '2022-01-31 01:35:38', NULL),
(2, 60, 'جدة - بنك الراجحي المركزي', NULL, NULL, '220', 1, 'مجمع التجارة الحديث', '2100', 'not_active', '2022-01-31 01:37:06', '2022-02-01 04:53:02', NULL),
(3, 60, '1', NULL, NULL, '1', 1, 'حي السالمية1', '1', 'active', '2022-02-03 01:54:47', '2022-02-03 14:39:01', NULL),
(4, 60, 'القصيم', '24.233', '43.23', '365', 1, 'مجمع التجارة الحديث', '078678', 'not_active', '2022-02-05 01:49:55', '2022-05-07 13:53:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers_banks_accounts`
--

CREATE TABLE `sellers_banks_accounts` (
  `id` int(11) UNSIGNED NOT NULL,
  `seller_id` int(11) NOT NULL DEFAULT 0,
  `bank_id` int(11) NOT NULL DEFAULT 0,
  `account_name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `account_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers_banks_accounts`
--

INSERT INTO `sellers_banks_accounts` (`id`, `seller_id`, `bank_id`, `account_name`, `account_number`, `iban`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 60, 1, 'Mohammed Ahmed', '01231231290', '765675675067456456', 'active', '2021-12-29 09:23:02', '2021-12-29 09:23:02', NULL),
(3, 60, 2, 'Mohammed Ahmed', '01231231290', '234234124234', 'active', '2022-02-03 01:10:58', '2022-02-03 01:10:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers_categories`
--

CREATE TABLE `sellers_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `number_stories_required` int(11) NOT NULL DEFAULT 0,
  `number_deals_required` int(11) NOT NULL DEFAULT 0,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approve` int(11) NOT NULL DEFAULT 1,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers_categories`
--

INSERT INTO `sellers_categories` (`id`, `number_stories_required`, `number_deals_required`, `image`, `approve`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 0, '1.png', 1, 'active', NULL, NULL, NULL),
(2, 0, 0, '2.png', 1, 'active', NULL, NULL, NULL),
(3, 0, 0, '3.png', 1, 'active', NULL, NULL, NULL),
(4, 0, 0, '4.png', 1, 'active', NULL, NULL, NULL),
(5, 0, 0, '5.png', 1, 'active', NULL, NULL, NULL),
(7, 0, 0, NULL, 0, 'active', '2021-12-03 08:21:20', '2021-12-03 08:21:20', NULL),
(8, 0, 0, NULL, 0, 'active', '2021-12-03 08:24:36', '2021-12-03 08:24:36', NULL),
(9, 0, 0, NULL, 0, 'active', '2021-12-03 08:24:39', '2021-12-03 08:24:39', NULL),
(10, 0, 0, NULL, 0, 'active', '2021-12-03 08:24:56', '2021-12-03 08:24:56', NULL),
(11, 0, 0, NULL, 0, 'active', '2021-12-03 08:25:40', '2021-12-03 08:25:40', NULL),
(12, 0, 0, NULL, 0, 'active', '2021-12-03 08:27:11', '2021-12-03 08:27:11', NULL),
(13, 0, 0, NULL, 0, 'active', '2021-12-03 08:34:09', '2021-12-03 08:34:09', NULL),
(14, 0, 0, NULL, 0, 'active', '2021-12-03 08:35:11', '2021-12-03 08:35:11', NULL),
(15, 0, 0, NULL, 0, 'active', '2021-12-03 08:35:27', '2021-12-03 08:35:27', NULL),
(16, 0, 0, NULL, 0, 'active', '2021-12-03 08:35:59', '2021-12-03 08:35:59', NULL),
(17, 0, 0, NULL, 0, 'active', '2021-12-03 08:40:15', '2021-12-03 08:40:15', NULL),
(18, 0, 0, NULL, 0, 'active', '2021-12-03 08:41:09', '2021-12-03 08:41:09', NULL),
(19, 0, 0, NULL, 0, 'active', '2021-12-03 08:41:21', '2021-12-03 08:41:21', NULL),
(20, 0, 0, NULL, 0, 'active', '2021-12-03 08:43:07', '2021-12-03 08:43:07', NULL),
(21, 0, 0, NULL, 0, 'active', '2021-12-03 08:45:47', '2021-12-03 08:45:47', NULL),
(22, 0, 0, NULL, 0, 'active', '2021-12-03 08:45:55', '2021-12-03 08:45:55', NULL),
(23, 0, 0, NULL, 0, 'active', '2021-12-03 09:04:55', '2021-12-03 09:04:55', NULL),
(24, 0, 0, NULL, 0, 'active', '2021-12-03 09:05:34', '2021-12-03 09:05:34', NULL),
(25, 0, 0, NULL, 0, 'active', '2021-12-03 09:08:59', '2021-12-03 09:08:59', NULL),
(26, 0, 0, NULL, 0, 'active', '2021-12-03 09:09:39', '2021-12-03 09:09:39', NULL),
(27, 0, 0, NULL, 0, 'active', '2021-12-03 09:09:41', '2021-12-03 09:09:41', NULL),
(28, 0, 0, NULL, 0, 'active', '2021-12-03 09:10:13', '2021-12-03 09:10:13', NULL),
(29, 0, 0, NULL, 0, 'active', '2021-12-03 09:10:15', '2021-12-03 09:10:15', NULL),
(30, 0, 0, NULL, 0, 'active', '2021-12-03 09:10:29', '2021-12-03 09:10:29', NULL),
(31, 0, 0, NULL, 0, 'active', '2021-12-03 09:12:01', '2021-12-03 09:12:01', NULL),
(32, 0, 0, NULL, 0, 'active', '2021-12-03 09:13:24', '2021-12-03 09:13:24', NULL),
(33, 0, 0, NULL, 0, 'active', '2021-12-03 09:14:08', '2021-12-03 09:14:08', NULL),
(34, 0, 0, NULL, 0, 'active', '2021-12-03 09:17:59', '2021-12-03 09:17:59', NULL),
(35, 0, 0, NULL, 0, 'active', '2021-12-03 09:18:03', '2021-12-03 09:18:03', NULL),
(36, 0, 0, NULL, 0, 'active', '2021-12-03 09:20:10', '2021-12-03 09:20:10', NULL),
(37, 0, 0, NULL, 0, 'active', '2021-12-03 09:26:03', '2021-12-03 09:26:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers_main_categories`
--

CREATE TABLE `sellers_main_categories` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `main_category_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sellers_main_categories`
--

INSERT INTO `sellers_main_categories` (`id`, `seller_id`, `main_category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 47, 1, NULL, '2021-12-01 02:46:04', '2021-12-01 02:46:04'),
(2, 47, 2, NULL, '2021-12-01 02:46:04', '2021-12-01 02:46:04'),
(3, 57, 1, '2021-12-02 07:20:07', '2021-12-02 07:20:07', NULL),
(4, 57, 2, '2021-12-02 07:20:07', '2021-12-02 07:20:07', NULL),
(5, 57, 3, '2021-12-02 07:20:07', '2021-12-02 07:20:07', NULL),
(6, 60, 1, '2021-12-03 06:56:56', '2021-12-07 19:09:33', '2021-12-07 19:09:33'),
(7, 60, 2, '2021-12-03 06:56:57', '2021-12-03 06:56:57', NULL),
(8, 60, 3, '2021-12-03 06:56:57', '2021-12-07 19:14:18', '2021-12-07 19:14:18'),
(9, 61, 4, '2021-12-03 07:00:18', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(10, 70, 10, '2021-12-03 07:16:27', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(11, 71, 4, '2021-12-03 07:44:48', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(12, 72, 14, '2021-12-03 11:26:43', '2021-12-03 11:26:43', NULL),
(13, 60, 1, '2021-12-07 19:10:51', '2021-12-07 19:11:02', '2021-12-07 19:11:02'),
(14, 60, 1, '2021-12-07 19:11:02', '2021-12-07 19:11:49', '2021-12-07 19:11:49'),
(15, 60, 1, '2021-12-07 19:11:56', '2021-12-07 19:12:03', '2021-12-07 19:12:03'),
(16, 60, 1, '2021-12-07 19:12:09', '2021-12-07 19:12:15', '2021-12-07 19:12:15'),
(17, 60, 12, '2021-12-07 19:13:33', '2021-12-07 19:13:37', '2021-12-07 19:13:37'),
(18, 60, 12, '2021-12-07 19:13:44', '2021-12-07 19:14:18', '2021-12-07 19:14:18'),
(19, 60, 6, '2021-12-07 19:14:09', '2021-12-07 19:14:14', '2021-12-07 19:14:14'),
(20, 60, 12, '2021-12-07 19:14:23', '2021-12-07 19:14:36', '2021-12-07 19:14:36'),
(21, 60, 6, '2021-12-07 19:14:29', '2021-12-07 19:14:37', '2021-12-07 19:14:37'),
(22, 60, 3, '2021-12-07 19:14:30', '2021-12-07 19:14:40', '2021-12-07 19:14:40'),
(23, 60, 10, '2021-12-07 19:14:41', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(24, 60, 12, '2021-12-07 19:15:51', '2021-12-07 19:15:51', NULL),
(25, 60, 17, '2021-12-07 19:40:20', '2021-12-07 19:40:20', NULL),
(26, 60, 18, '2021-12-07 19:45:55', '2021-12-07 19:45:55', NULL),
(27, 60, 19, '2021-12-07 19:48:29', '2021-12-07 19:48:29', NULL),
(28, 60, 20, '2021-12-07 19:52:38', '2022-03-05 14:47:48', '2022-03-05 14:47:48'),
(29, 75, 3, '2021-12-08 01:23:31', '2021-12-08 01:23:54', '2021-12-08 01:23:54'),
(30, 75, 4, '2021-12-08 01:23:31', '2021-12-08 01:23:54', '2021-12-08 01:23:54'),
(31, 75, NULL, '2021-12-08 01:23:31', '2021-12-08 01:23:54', '2021-12-08 01:23:54'),
(32, 75, 4, '2021-12-08 01:23:54', '2021-12-08 01:25:17', '2021-12-08 01:25:17'),
(33, 75, NULL, '2021-12-08 01:23:54', '2021-12-08 01:25:17', '2021-12-08 01:25:17'),
(34, 75, 3, '2021-12-08 01:25:17', '2021-12-08 01:29:46', '2021-12-08 01:29:46'),
(35, 75, NULL, '2021-12-08 01:25:17', '2021-12-08 01:29:46', '2021-12-08 01:29:46'),
(36, 75, 5, '2021-12-08 01:29:46', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(37, 75, NULL, '2021-12-08 01:29:46', '2021-12-08 01:29:46', NULL),
(38, 60, 6, '2021-12-08 01:39:33', '2022-01-24 18:38:54', '2022-01-24 18:38:54'),
(39, 77, 4, '2021-12-08 06:25:08', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(40, 77, NULL, '2021-12-08 06:25:08', '2021-12-08 06:25:08', NULL),
(41, 87, NULL, '2021-12-31 14:49:50', '2021-12-31 14:50:09', '2021-12-31 14:50:09'),
(42, 87, 4, '2021-12-31 14:50:09', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(43, 87, NULL, '2021-12-31 14:50:09', '2021-12-31 14:50:09', NULL),
(44, 88, 4, '2022-01-16 14:14:19', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(45, 88, NULL, '2022-01-16 14:14:19', '2022-01-16 14:14:19', NULL),
(46, 60, 6, '2022-01-24 18:38:59', '2022-02-06 08:04:04', '2022-02-06 08:04:04'),
(47, 60, 3, '2022-02-01 05:42:20', '2022-02-01 05:42:24', '2022-02-01 05:42:24'),
(48, 60, 24, '2022-02-01 05:51:12', '2022-02-01 05:51:15', '2022-02-01 05:51:15'),
(49, 60, 23, '2022-02-01 05:51:18', '2022-02-01 05:51:18', NULL),
(50, 60, 22, '2022-02-01 05:51:19', '2022-04-07 12:15:22', '2022-04-07 12:15:22'),
(51, 92, 1, '2022-02-05 03:36:18', '2022-02-05 03:36:18', NULL),
(52, 92, 2, '2022-02-05 03:36:18', '2022-02-05 03:36:18', NULL),
(53, 92, NULL, '2022-02-05 03:36:19', '2022-02-05 03:36:19', NULL),
(54, 93, 4, '2022-02-05 03:39:10', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(55, 93, NULL, '2022-02-05 03:39:10', '2022-02-05 03:39:10', NULL),
(56, 94, 4, '2022-02-05 03:41:27', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(57, 94, NULL, '2022-02-05 03:41:27', '2022-02-05 03:41:27', NULL),
(58, 60, 6, '2022-02-06 08:04:05', '2022-02-06 08:04:05', '2022-02-06 08:04:05'),
(59, 60, 6, '2022-02-06 08:04:06', '2022-02-06 08:04:07', '2022-02-06 08:04:07'),
(60, 60, 6, '2022-02-06 08:04:09', '2022-02-06 08:04:11', '2022-02-06 08:04:11'),
(61, 60, 6, '2022-02-06 08:04:15', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(62, 60, 1, '2022-02-20 08:00:28', '2022-02-20 08:00:28', NULL),
(63, 60, 3, '2022-02-20 08:00:30', '2022-02-20 08:00:30', NULL),
(64, 60, 20, '2022-03-05 14:47:49', '2022-03-08 07:03:56', '2022-03-08 07:03:56'),
(65, 95, 3, '2022-03-08 06:10:59', '2022-03-08 06:10:59', NULL),
(66, 95, NULL, '2022-03-08 06:10:59', '2022-03-08 06:10:59', NULL),
(67, 95, 21, '2022-03-08 06:12:32', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(68, 60, 21, '2022-03-08 07:03:55', '2022-03-08 07:10:10', '2022-03-08 07:10:10'),
(69, 60, 20, '2022-03-08 07:11:42', '2022-03-08 07:12:11', '2022-03-08 07:12:11'),
(70, 60, 11, '2022-03-08 07:11:42', '2022-03-08 07:11:57', '2022-03-08 07:11:57'),
(71, 60, 10, '2022-03-08 07:11:42', '2022-03-08 07:12:11', '2022-03-08 07:12:11'),
(72, 60, 9, '2022-03-08 07:11:42', '2022-03-08 07:11:57', '2022-03-08 07:11:57'),
(73, 60, 8, '2022-03-08 07:11:42', '2022-03-08 07:11:57', '2022-03-08 07:11:57'),
(74, 60, 7, '2022-03-08 07:11:42', '2022-03-08 07:11:57', '2022-03-08 07:11:57'),
(75, 60, 6, '2022-03-08 07:11:42', '2022-03-08 07:11:57', '2022-03-08 07:11:57'),
(76, 60, 5, '2022-03-08 07:11:42', '2022-03-08 07:11:57', '2022-03-08 07:11:57'),
(77, 60, 4, '2022-03-08 07:11:42', '2022-03-08 07:11:57', '2022-03-08 07:11:57'),
(78, 60, 21, '2022-03-08 07:12:11', '2022-03-08 07:12:31', '2022-03-08 07:12:31'),
(79, 60, 20, '2022-03-08 07:12:11', '2022-03-08 07:12:31', '2022-03-08 07:12:31'),
(80, 60, 11, '2022-03-08 07:12:11', '2022-03-08 07:12:31', '2022-03-08 07:12:31'),
(81, 60, 10, '2022-03-08 07:12:11', '2022-03-08 07:12:11', NULL),
(82, 60, 9, '2022-03-08 07:12:11', '2022-03-08 07:12:11', NULL),
(83, 60, 8, '2022-03-08 07:12:11', '2022-03-08 07:12:43', '2022-03-08 07:12:43'),
(84, 60, 7, '2022-03-08 07:12:11', '2022-03-08 07:12:11', NULL),
(85, 60, 6, '2022-03-08 07:12:11', '2022-03-08 07:12:11', NULL),
(86, 60, 5, '2022-03-08 07:12:11', '2022-03-08 07:12:11', NULL),
(87, 60, 4, '2022-03-08 07:12:11', '2022-03-08 07:12:11', NULL),
(88, 60, 20, '2022-03-08 07:12:43', '2022-03-08 07:12:43', NULL),
(89, 60, 11, '2022-03-08 07:12:43', '2022-03-08 07:12:43', NULL),
(90, 60, 8, '2022-03-08 07:12:43', '2022-03-08 07:12:43', NULL),
(91, 60, 21, '2022-03-08 07:21:04', '2022-03-08 07:21:08', '2022-03-08 07:21:08'),
(92, 60, 22, '2022-04-07 12:15:15', '2022-04-07 12:15:22', '2022-04-07 12:15:22'),
(93, 60, 22, '2022-04-07 12:15:22', '2022-05-30 20:03:28', '2022-05-30 20:03:28'),
(94, 96, NULL, '2022-04-11 19:10:41', '2022-04-11 19:10:41', NULL),
(95, 60, 22, '2022-05-30 20:03:28', '2022-05-30 20:03:29', '2022-05-30 20:03:29'),
(96, 60, 22, '2022-05-30 20:03:29', '2022-05-30 20:03:29', '2022-05-30 20:03:29'),
(97, 60, 23, '2022-05-30 20:03:33', '2022-05-30 20:03:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers_payments_methods`
--

CREATE TABLE `sellers_payments_methods` (
  `id` int(11) UNSIGNED NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers_payments_methods`
--

INSERT INTO `sellers_payments_methods` (`id`, `seller_id`, `payment_method_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 60, 2, '2022-02-01 06:23:08', '2022-02-01 04:47:56', '2022-02-01 04:47:56'),
(2, 60, 2, '2022-02-01 04:48:01', '2022-02-01 04:48:01', NULL),
(3, 60, 1, '2022-02-01 04:48:02', '2022-02-06 06:25:52', '2022-02-06 06:25:52'),
(4, 60, 1, '2022-02-06 06:26:06', '2022-02-06 06:26:11', '2022-02-06 06:26:11'),
(5, 60, 1, '2022-02-06 06:26:21', '2022-02-06 06:26:26', '2022-02-06 06:26:26'),
(6, 60, 1, '2022-02-06 06:26:38', '2022-02-06 06:26:41', '2022-02-06 06:26:41'),
(7, 60, 1, '2022-05-07 13:54:24', '2022-05-07 13:54:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers_shipping_methods`
--

CREATE TABLE `sellers_shipping_methods` (
  `id` int(11) UNSIGNED NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `shipping_method_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers_shipping_methods`
--

INSERT INTO `sellers_shipping_methods` (`id`, `seller_id`, `shipping_method_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 60, 1, '2022-02-01 06:19:56', '2022-02-12 13:34:09', '2022-02-12 13:34:09'),
(2, 60, 1, '2022-02-12 13:32:52', '2022-02-12 13:34:09', '2022-02-12 13:34:09'),
(3, 60, 1, '2022-02-12 13:33:00', '2022-02-12 13:34:09', '2022-02-12 13:34:09'),
(4, 60, 1, '2022-02-12 13:33:15', '2022-02-12 13:34:09', '2022-02-12 13:34:09'),
(5, 60, 1, '2022-02-12 13:33:16', '2022-02-12 13:34:09', '2022-02-12 13:34:09'),
(6, 60, 3, '2022-02-12 13:34:15', '2022-03-08 07:51:05', '2022-03-08 07:51:05'),
(7, 60, 3, '2022-05-07 13:58:49', '2022-05-07 13:58:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers_storages`
--

CREATE TABLE `sellers_storages` (
  `id` int(30) NOT NULL,
  `seller_id` int(30) NOT NULL DEFAULT 0,
  `storage_type` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` varchar(300) CHARACTER SET utf8mb3 DEFAULT NULL,
  `latitude` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `longitude` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `postal_code` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `street` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `building` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `mobile` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `whatsapp` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `preparing_time` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `is_default` int(11) NOT NULL DEFAULT 0,
  `status` enum('active','not_active') COLLATE utf8mb3_unicode_ci DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sellers_storages`
--

INSERT INTO `sellers_storages` (`id`, `seller_id`, `storage_type`, `name`, `city_id`, `address`, `latitude`, `longitude`, `postal_code`, `street`, `building`, `phone`, `mobile`, `whatsapp`, `preparing_time`, `is_default`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 60, 'مستودع رئيسي', 'المستودع الأول', 1, 'جدة - مقابل بنك الراجحي', '24.233', '43.23', '00980', 'شارع الملك سلمان', 'المجد رقم3', '0057657567', '0046456456', '0046456445', '3 ايام', 0, 'active', '2022-02-12 06:12:32', '2022-02-12 06:19:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers_teams`
--

CREATE TABLE `sellers_teams` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not_active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sellers_teams`
--

INSERT INTO `sellers_teams` (`id`, `seller_id`, `name`, `mobile`, `email`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 60, 'Mohammed Ali', '0597116675', 'mohammedali@gmail.com', 'not_active', '2021-12-29 14:59:43', '2022-02-05 02:14:50', '2022-02-05 02:14:50'),
(2, 60, 'Ramy Abdallah', '001221312300', 'ramy@gmail.com', 'not_active', '2021-12-29 15:47:56', '2022-05-07 13:52:49', NULL),
(3, 60, 'aa', '234324234', 'lam33ar@gmail.com', 'not_active', '2022-03-08 08:53:38', '2022-03-08 09:09:35', '2022-03-08 09:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `seller_category_translations`
--

CREATE TABLE `seller_category_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `seller_category_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_category_translations`
--

INSERT INTO `seller_category_translations` (`id`, `seller_category_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'مصنع', '2021-11-28 22:00:00', NULL, NULL),
(2, 1, 'ar', 'مصنع', '2021-11-28 22:00:00', NULL, NULL),
(3, 2, 'en', 'علامة تجارية', '2021-11-28 22:00:00', NULL, NULL),
(4, 2, 'ar', 'علامة تجارية', '2021-11-28 22:00:00', NULL, NULL),
(5, 3, 'en', 'مستودع جملة', '2021-11-28 22:00:00', NULL, NULL),
(6, 3, 'ar', 'مستودع جملة', '2021-11-28 22:00:00', NULL, NULL),
(7, 4, 'en', 'مندوب جملة', '2021-11-28 22:00:00', NULL, NULL),
(8, 4, 'ar', 'مندوب جملة', '2021-11-28 22:00:00', NULL, NULL),
(9, 5, 'en', 'وكيل علامة تجارية', '2021-11-28 22:00:00', NULL, NULL),
(10, 5, 'ar', 'وكيل علامة تجارية', '2021-11-28 22:00:00', NULL, NULL),
(13, 7, 'ar', '24234', '2021-12-03 08:21:21', '2021-12-03 08:21:21', NULL),
(14, 7, 'en', '24234', '2021-12-03 08:21:21', '2021-12-03 08:21:21', NULL),
(15, 8, 'ar', 'werwer', '2021-12-03 08:24:36', '2021-12-03 08:24:36', NULL),
(16, 8, 'en', 'werwer', '2021-12-03 08:24:36', '2021-12-03 08:24:36', NULL),
(17, 9, 'ar', 'werwer', '2021-12-03 08:24:39', '2021-12-03 08:24:39', NULL),
(18, 9, 'en', 'werwer', '2021-12-03 08:24:39', '2021-12-03 08:24:39', NULL),
(19, 10, 'ar', '777777777', '2021-12-03 08:24:56', '2021-12-03 08:24:56', NULL),
(20, 10, 'en', '777777777', '2021-12-03 08:24:56', '2021-12-03 08:24:56', NULL),
(21, 11, 'ar', 'ew234234', '2021-12-03 08:25:40', '2021-12-03 08:25:40', NULL),
(22, 11, 'en', 'ew234234', '2021-12-03 08:25:40', '2021-12-03 08:25:40', NULL),
(23, 12, 'ar', '0000', '2021-12-03 08:27:11', '2021-12-03 08:27:11', NULL),
(24, 12, 'en', '0000', '2021-12-03 08:27:11', '2021-12-03 08:27:11', NULL),
(25, 13, 'ar', '5345345', '2021-12-03 08:34:09', '2021-12-03 08:34:09', NULL),
(26, 13, 'en', '5345345', '2021-12-03 08:34:10', '2021-12-03 08:34:10', NULL),
(27, 14, 'ar', '777', '2021-12-03 08:35:11', '2021-12-03 08:35:11', NULL),
(28, 14, 'en', '777', '2021-12-03 08:35:11', '2021-12-03 08:35:11', NULL),
(29, 15, 'ar', '555', '2021-12-03 08:35:27', '2021-12-03 08:35:27', NULL),
(30, 15, 'en', '555', '2021-12-03 08:35:27', '2021-12-03 08:35:27', NULL),
(31, 16, 'ar', '11111111122', '2021-12-03 08:35:59', '2021-12-03 08:35:59', NULL),
(32, 16, 'en', '11111111122', '2021-12-03 08:35:59', '2021-12-03 08:35:59', NULL),
(33, 17, 'ar', '3', '2021-12-03 08:40:15', '2021-12-03 08:40:15', NULL),
(34, 17, 'en', '3', '2021-12-03 08:40:15', '2021-12-03 08:40:15', NULL),
(35, 18, 'ar', '756756', '2021-12-03 08:41:10', '2021-12-03 08:41:10', NULL),
(36, 18, 'en', '756756', '2021-12-03 08:41:10', '2021-12-03 08:41:10', NULL),
(37, 19, 'ar', '222', '2021-12-03 08:41:21', '2021-12-03 08:41:21', NULL),
(38, 19, 'en', '222', '2021-12-03 08:41:21', '2021-12-03 08:41:21', NULL),
(39, 20, 'ar', '34534345', '2021-12-03 08:43:07', '2021-12-03 08:43:07', NULL),
(40, 20, 'en', '34534345', '2021-12-03 08:43:07', '2021-12-03 08:43:07', NULL),
(41, 21, 'ar', '7567567', '2021-12-03 08:45:47', '2021-12-03 08:45:47', NULL),
(42, 21, 'en', '7567567', '2021-12-03 08:45:48', '2021-12-03 08:45:48', NULL),
(43, 22, 'ar', '645654646', '2021-12-03 08:45:55', '2021-12-03 08:45:55', NULL),
(44, 22, 'en', '645654646', '2021-12-03 08:45:55', '2021-12-03 08:45:55', NULL),
(45, 23, 'ar', '5345345', '2021-12-03 09:04:55', '2021-12-03 09:04:55', NULL),
(46, 23, 'en', '5345345', '2021-12-03 09:04:55', '2021-12-03 09:04:55', NULL),
(47, 24, 'ar', '555555555', '2021-12-03 09:05:34', '2021-12-03 09:05:34', NULL),
(48, 24, 'en', '555555555', '2021-12-03 09:05:34', '2021-12-03 09:05:34', NULL),
(49, 25, 'ar', '345345', '2021-12-03 09:08:59', '2021-12-03 09:08:59', NULL),
(50, 25, 'en', '345345', '2021-12-03 09:08:59', '2021-12-03 09:08:59', NULL),
(51, 26, 'ar', '35435345', '2021-12-03 09:09:39', '2021-12-03 09:09:39', NULL),
(52, 26, 'en', '35435345', '2021-12-03 09:09:39', '2021-12-03 09:09:39', NULL),
(53, 27, 'ar', '35435345', '2021-12-03 09:09:42', '2021-12-03 09:09:42', NULL),
(54, 27, 'en', '35435345', '2021-12-03 09:09:42', '2021-12-03 09:09:42', NULL),
(55, 28, 'ar', '535345', '2021-12-03 09:10:13', '2021-12-03 09:10:13', NULL),
(56, 28, 'en', '535345', '2021-12-03 09:10:13', '2021-12-03 09:10:13', NULL),
(57, 29, 'ar', '535345', '2021-12-03 09:10:15', '2021-12-03 09:10:15', NULL),
(58, 29, 'en', '535345', '2021-12-03 09:10:15', '2021-12-03 09:10:15', NULL),
(59, 30, 'ar', '345345', '2021-12-03 09:10:29', '2021-12-03 09:10:29', NULL),
(60, 30, 'en', '345345', '2021-12-03 09:10:29', '2021-12-03 09:10:29', NULL),
(61, 31, 'ar', '45435345', '2021-12-03 09:12:01', '2021-12-03 09:12:01', NULL),
(62, 31, 'en', '45435345', '2021-12-03 09:12:02', '2021-12-03 09:12:02', NULL),
(63, 32, 'ar', '345345', '2021-12-03 09:13:24', '2021-12-03 09:13:24', NULL),
(64, 32, 'en', '345345', '2021-12-03 09:13:24', '2021-12-03 09:13:24', NULL),
(65, 33, 'ar', '35345345', '2021-12-03 09:14:08', '2021-12-03 09:14:08', NULL),
(66, 33, 'en', '35345345', '2021-12-03 09:14:08', '2021-12-03 09:14:08', NULL),
(67, 34, 'ar', '3534345', '2021-12-03 09:17:59', '2021-12-03 09:17:59', NULL),
(68, 34, 'en', '3534345', '2021-12-03 09:17:59', '2021-12-03 09:17:59', NULL),
(69, 35, 'ar', '534345', '2021-12-03 09:18:03', '2021-12-03 09:18:03', NULL),
(70, 35, 'en', '534345', '2021-12-03 09:18:03', '2021-12-03 09:18:03', NULL),
(71, 36, 'ar', '777777777', '2021-12-03 09:20:10', '2021-12-03 09:20:10', NULL),
(72, 36, 'en', '777777777', '2021-12-03 09:20:10', '2021-12-03 09:20:10', NULL),
(73, 37, 'ar', '777777777777', '2021-12-03 09:26:03', '2021-12-03 09:26:03', NULL),
(74, 37, 'en', '777777777777', '2021-12-03 09:26:03', '2021-12-03 09:26:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_point` int(11) NOT NULL DEFAULT 0,
  `share_points` int(11) NOT NULL DEFAULT 0,
  `deal_points` int(11) NOT NULL DEFAULT 0,
  `stories_count` int(11) NOT NULL DEFAULT 0,
  `deals_count` int(11) NOT NULL DEFAULT 0,
  `daily_stories_count` int(11) NOT NULL DEFAULT 0,
  `daily_deals_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `mobile`, `whatsapp`, `facebook`, `twitter`, `linked_in`, `instagram`, `snapchat`, `telegram`, `youtube`, `logo`, `image`, `order_point`, `share_points`, `deal_points`, `stories_count`, `deals_count`, `daily_stories_count`, `daily_deals_count`, `created_at`, `updated_at`) VALUES
(1, 'subolaays@gmail.com', '002342342', '0053453450', '00234234234', 'https://www.facebook.com/', 'https://twitter.com/home', 'https://www.linkedin.com/', 'https://www.instagram.com/', NULL, NULL, NULL, 'logo.png', '1.jpg', 1, 1, 1, 20, 15, 5, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` int(10) NOT NULL,
  `setting_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `locale`, `title`, `description`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Subolaays', 'subolaays subolaays', 'subolaays, internet, shopping, sell, puy', NULL, NULL),
(2, 1, 'ar', 'سبلاي', 'سبلاي سبلاي', 'سبلاي, تسوق, شراء, بيع', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_methods`
--

CREATE TABLE `shipping_methods` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_methods`
--

INSERT INTO `shipping_methods` (`id`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1.png', 'active', '2022-02-12 13:57:23', NULL, NULL),
(2, '2.png', 'active', '2022-02-12 13:57:23', NULL, NULL),
(3, '3.png', 'active', '2022-02-12 13:57:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_method_translations`
--

CREATE TABLE `shipping_method_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `shipping_method_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_method_translations`
--

INSERT INTO `shipping_method_translations` (`id`, `shipping_method_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'Aramex', '2022-02-12 14:00:57', NULL, NULL),
(2, 1, 'ar', 'أرامكس', '2022-02-12 14:00:57', NULL, NULL),
(3, 2, 'en', 'Express JBI', '2022-02-12 14:00:57', NULL, NULL),
(4, 2, 'ar', 'إكسبريس', '2022-02-12 14:00:57', NULL, NULL),
(5, 3, 'en', 'Sab', '2022-02-12 14:00:57', NULL, NULL),
(6, 3, 'ar', 'صاب', '2022-02-12 14:00:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `storages_types`
--

CREATE TABLE `storages_types` (
  `id` int(11) UNSIGNED NOT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `storage_type_translations`
--

CREATE TABLE `storage_type_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `storage_type_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `main_category_id` int(11) DEFAULT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `main_category_id`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, '1.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(4, 1, '2.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(5, 2, '1.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(6, 2, '2.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(7, 3, '1.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(8, 3, '2.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(9, 4, '1.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(10, 4, '2.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(11, 5, '1.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(12, 5, '2.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(13, 6, '1.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(14, 6, '2.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(15, 7, '1.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(16, 7, '2.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(17, 8, '1.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(18, 8, '2.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(19, 9, '1.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(20, 9, '2.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(21, 10, '1.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(22, 10, '2.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(23, 11, '1.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL),
(24, 11, '2.jpg', 'active', '2021-12-03 16:22:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_translations`
--

CREATE TABLE `sub_category_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_category_translations`
--

INSERT INTO `sub_category_translations` (`id`, `sub_category_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'en', 'فواكه طازجة ', NULL, NULL, NULL),
(2, 3, 'ar', 'فواكه طازجة ', NULL, NULL, NULL),
(3, 4, 'en', 'فواكه مجففة', NULL, NULL, NULL),
(4, 4, 'ar', 'فواكه مجففة', NULL, NULL, NULL),
(5, 5, 'en', 'خبز أبيض', NULL, NULL, NULL),
(6, 5, 'ar', 'خبز أبيض', NULL, NULL, NULL),
(7, 6, 'en', 'خبز قمح', NULL, NULL, NULL),
(8, 6, 'ar', 'خبز قمح', '0000-00-00 00:00:00', NULL, NULL),
(9, 7, 'en', 'دجاج متبل', NULL, NULL, NULL),
(10, 7, 'ar', 'دجاج متبل', '0000-00-00 00:00:00', NULL, NULL),
(11, 8, 'en', 'دجاج مقطع', NULL, NULL, NULL),
(12, 8, 'ar', 'دجاج مقطع', '0000-00-00 00:00:00', NULL, NULL),
(13, 9, 'en', 'حلويات أعياد الميلاد', NULL, NULL, NULL),
(14, 9, 'ar', 'حلويات أعياد الميلاد', '0000-00-00 00:00:00', NULL, NULL),
(15, 10, 'en', 'كيكة فواكه ', NULL, NULL, NULL),
(16, 10, 'ar', 'كيكة فواكه ', '0000-00-00 00:00:00', NULL, NULL),
(17, 11, 'en', 'معجنات', NULL, NULL, NULL),
(18, 11, 'ar', 'معجنات', '0000-00-00 00:00:00', NULL, NULL),
(19, 12, 'en', 'ساندويتشات', NULL, NULL, NULL),
(20, 12, 'ar', 'ساندويتشات', '0000-00-00 00:00:00', NULL, NULL),
(21, 13, 'en', 'بقوليات', NULL, NULL, NULL),
(22, 13, 'ar', 'بقوليات', '0000-00-00 00:00:00', NULL, NULL),
(23, 14, 'en', 'سكاكر', NULL, NULL, NULL),
(24, 14, 'ar', 'سكاكر', '0000-00-00 00:00:00', NULL, NULL),
(25, 15, 'en', 'مشهيات طعام', NULL, NULL, NULL),
(26, 15, 'ar', 'مشهيات طعام', '0000-00-00 00:00:00', NULL, NULL),
(27, 16, 'en', 'بقوليات معلبة', NULL, NULL, NULL),
(28, 16, 'ar', 'بقوليات معلبة', '0000-00-00 00:00:00', NULL, NULL),
(29, 17, 'en', 'لحوم حمراء', NULL, NULL, NULL),
(30, 17, 'ar', 'لحوم حمراء', '0000-00-00 00:00:00', NULL, NULL),
(31, 18, 'en', 'لحوم بيضاء', NULL, NULL, NULL),
(32, 18, 'ar', 'لحوم بيضاء', '0000-00-00 00:00:00', NULL, NULL),
(33, 19, 'en', 'شامبوهات', NULL, NULL, NULL),
(34, 19, 'ar', 'شامبوهات', '0000-00-00 00:00:00', NULL, NULL),
(35, 20, 'en', 'إكسسوارات مواليد ', NULL, NULL, NULL),
(36, 20, 'ar', 'إكسسوارات مواليد ', '0000-00-00 00:00:00', NULL, NULL),
(37, 21, 'en', 'عطور', NULL, NULL, NULL),
(38, 21, 'ar', 'عطور', '0000-00-00 00:00:00', NULL, NULL),
(39, 22, 'en', 'مرطبات وكريمات', NULL, NULL, NULL),
(40, 22, 'ar', 'مرطبات وكريمات', '0000-00-00 00:00:00', NULL, NULL),
(41, 23, 'en', 'ألبان طازجة', NULL, NULL, NULL),
(42, 23, 'ar', 'ألبان طازجة', '0000-00-00 00:00:00', NULL, NULL),
(43, 24, 'en', 'أجبان ', NULL, NULL, NULL),
(44, 24, 'ar', 'أجبان ', '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taxs`
--

CREATE TABLE `taxs` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `tax_percent` double DEFAULT NULL,
  `status` enum('active','not_active') CHARACTER SET utf8mb4 DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `taxs`
--

INSERT INTO `taxs` (`id`, `seller_id`, `tax_percent`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 60, 10, 'active', '2021-12-28 08:30:00', '2022-02-05 02:24:15', '2022-02-05 02:24:15'),
(2, 60, 15, 'not_active', '2021-12-12 01:45:00', '2022-03-08 09:14:49', NULL),
(3, 60, 6, 'not_active', '2021-12-29 05:28:06', '2022-03-08 09:15:40', '2022-03-08 09:15:40'),
(4, 60, 6, 'not_active', '2021-12-29 05:28:24', '2022-02-03 01:10:27', '2022-02-03 01:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `trademarks`
--

CREATE TABLE `trademarks` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` enum('local','international') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'local',
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trademarks`
--

INSERT INTO `trademarks` (`id`, `type`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'local', '1.jpg', 'active', '2021-12-29 07:54:43', NULL, NULL),
(2, 'local', '2.jpg', 'active', '2021-12-29 07:54:43', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trademark_translations`
--

CREATE TABLE `trademark_translations` (
  `id` int(11) UNSIGNED NOT NULL,
  `trademark_id` int(11) DEFAULT NULL,
  `locale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trademark_translations`
--

INSERT INTO `trademark_translations` (`id`, `trademark_id`, `locale`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'First TradeMark', NULL, '2021-12-29 07:55:19', NULL, NULL),
(2, 1, 'ar', 'First TradeMark', NULL, '2021-12-29 07:55:19', NULL, NULL),
(3, 2, 'en', 'Second TradeMark', NULL, '2021-12-29 07:55:19', NULL, NULL),
(4, 2, 'ar', 'Second TradeMark', '\r\n', '2021-12-29 07:55:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_actions`
--

CREATE TABLE `users_actions` (
  `id` int(11) NOT NULL,
  `user_type` enum('seller','buyer') COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `details` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_translations`
--
ALTER TABLE `ad_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_translations`
--
ALTER TABLE `bank_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers_addresses`
--
ALTER TABLE `buyers_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers_categories`
--
ALTER TABLE `buyers_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers_main_categories`
--
ALTER TABLE `buyers_main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_category_translations`
--
ALTER TABLE `buyer_category_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts_products`
--
ALTER TABLE `carts_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_translations`
--
ALTER TABLE `city_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_translations`
--
ALTER TABLE `currency_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals_offers`
--
ALTER TABLE `deals_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals_products`
--
ALTER TABLE `deals_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_translations`
--
ALTER TABLE `language_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_category_translations`
--
ALTER TABLE `main_category_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments_methods`
--
ALTER TABLE `payments_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method_translations`
--
ALTER TABLE `payment_method_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_translations`
--
ALTER TABLE `permission_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_smarts_prices`
--
ALTER TABLE `products_smarts_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank_translations`
--
ALTER TABLE `rank_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers_areas_points`
--
ALTER TABLE `sellers_areas_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers_banks_accounts`
--
ALTER TABLE `sellers_banks_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers_categories`
--
ALTER TABLE `sellers_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers_main_categories`
--
ALTER TABLE `sellers_main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers_payments_methods`
--
ALTER TABLE `sellers_payments_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers_shipping_methods`
--
ALTER TABLE `sellers_shipping_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers_storages`
--
ALTER TABLE `sellers_storages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers_teams`
--
ALTER TABLE `sellers_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_category_translations`
--
ALTER TABLE `seller_category_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_method_translations`
--
ALTER TABLE `shipping_method_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storages_types`
--
ALTER TABLE `storages_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storage_type_translations`
--
ALTER TABLE `storage_type_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category_translations`
--
ALTER TABLE `sub_category_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxs`
--
ALTER TABLE `taxs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trademarks`
--
ALTER TABLE `trademarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trademark_translations`
--
ALTER TABLE `trademark_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_actions`
--
ALTER TABLE `users_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ad_translations`
--
ALTER TABLE `ad_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bank_translations`
--
ALTER TABLE `bank_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `buyers_addresses`
--
ALTER TABLE `buyers_addresses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyers_categories`
--
ALTER TABLE `buyers_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buyers_main_categories`
--
ALTER TABLE `buyers_main_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `buyer_category_translations`
--
ALTER TABLE `buyer_category_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts_products`
--
ALTER TABLE `carts_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city_translations`
--
ALTER TABLE `city_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `country_translations`
--
ALTER TABLE `country_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=756;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency_translations`
--
ALTER TABLE `currency_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deals_offers`
--
ALTER TABLE `deals_offers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deals_products`
--
ALTER TABLE `deals_products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_translations`
--
ALTER TABLE `faq_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `main_category_translations`
--
ALTER TABLE `main_category_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments_methods`
--
ALTER TABLE `payments_methods`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_method_translations`
--
ALTER TABLE `payment_method_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permission_translations`
--
ALTER TABLE `permission_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `products_smarts_prices`
--
ALTER TABLE `products_smarts_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rank_translations`
--
ALTER TABLE `rank_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `sellers_areas_points`
--
ALTER TABLE `sellers_areas_points`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellers_banks_accounts`
--
ALTER TABLE `sellers_banks_accounts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sellers_categories`
--
ALTER TABLE `sellers_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sellers_main_categories`
--
ALTER TABLE `sellers_main_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `sellers_payments_methods`
--
ALTER TABLE `sellers_payments_methods`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sellers_shipping_methods`
--
ALTER TABLE `sellers_shipping_methods`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sellers_storages`
--
ALTER TABLE `sellers_storages`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sellers_teams`
--
ALTER TABLE `sellers_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller_category_translations`
--
ALTER TABLE `seller_category_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipping_method_translations`
--
ALTER TABLE `shipping_method_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `storages_types`
--
ALTER TABLE `storages_types`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storage_type_translations`
--
ALTER TABLE `storage_type_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sub_category_translations`
--
ALTER TABLE `sub_category_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `taxs`
--
ALTER TABLE `taxs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trademarks`
--
ALTER TABLE `trademarks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trademark_translations`
--
ALTER TABLE `trademark_translations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_actions`
--
ALTER TABLE `users_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
