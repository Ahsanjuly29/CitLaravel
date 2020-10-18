-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 11:02 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cit_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `shipping_id` bigint(20) DEFAULT NULL,
  `sale_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` bigint(20) DEFAULT NULL,
  `product_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `user_id`, `shipping_id`, `sale_id`, `product_id`, `product_price`, `product_quantity`, `product_discount`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 1, 76, '5', 3, NULL, '2020-04-16 18:00:00', NULL),
(2, 6, 1, 1, 77, '10', 1, NULL, '2020-04-16 18:00:00', NULL),
(3, 6, 2, 2, 76, '5', 3, NULL, '2020-04-16 18:00:00', NULL),
(4, 6, 2, 2, 77, '10', 1, NULL, '2020-04-16 18:00:00', NULL),
(5, 6, 3, 3, 76, '5', 3, NULL, '2020-04-15 18:00:00', NULL),
(6, 6, 3, 3, 77, '10', 1, NULL, '2020-04-15 18:00:00', NULL),
(7, 6, 4, 4, 78, '53', 1, NULL, '2020-04-14 18:00:00', NULL),
(8, 6, 11, 11, 78, '53', 1, NULL, '2020-04-14 18:00:00', NULL),
(9, 6, 16, 16, 77, '10', 1, NULL, '2020-04-14 18:00:00', NULL),
(10, 6, 17, 17, 76, '5', 1, NULL, '2020-04-13 18:00:00', NULL),
(11, 6, 22, 22, 76, '5', 1, NULL, '2020-04-13 18:00:00', NULL),
(12, 6, 35, 35, 76, '5', 1, NULL, '2020-04-19 18:00:00', NULL),
(13, 6, 36, 36, 78, '53', 1, NULL, '2020-04-19 18:00:00', NULL),
(14, 6, 37, 37, 77, '10', 2, NULL, '2020-04-19 18:00:00', NULL),
(15, 6, 37, 37, 78, '53', 1, NULL, '2020-04-19 18:00:00', NULL),
(16, 6, 38, 38, 76, '5', 3, NULL, '2020-04-19 18:00:00', NULL),
(17, 6, 38, 38, 78, '53', 1, NULL, '2020-04-19 18:00:00', NULL),
(18, 6, 39, 39, 78, '53', 1, NULL, '2020-04-19 18:00:00', NULL),
(19, 6, 39, 39, 77, '10', 2, NULL, '2020-04-19 18:00:00', NULL),
(20, 6, 40, 40, 77, '10', 1, NULL, '2020-04-19 18:00:00', NULL),
(21, 6, 41, 41, 78, '53', 1, NULL, '2020-04-19 18:00:00', NULL),
(22, 6, 41, 41, 77, '10', 3, NULL, '2020-04-19 18:00:00', NULL),
(23, 6, 42, 42, 77, '10', 1, NULL, '2020-04-19 18:00:00', NULL),
(24, 6, 42, 42, 78, '53', 1, NULL, '2020-04-19 18:00:00', NULL),
(25, 6, 43, 43, 77, '10', 1, NULL, '2020-04-19 18:00:00', NULL),
(26, 6, 43, 43, 78, '53', 1, NULL, '2020-04-17 18:00:00', NULL),
(27, 6, 44, 44, 77, '10', 1, NULL, '2020-04-17 18:00:00', NULL),
(28, 6, 44, 44, 76, '5', 1, NULL, '2020-04-17 18:00:00', NULL),
(29, 6, 45, 45, 76, '5', 1, NULL, '2020-04-18 18:00:00', NULL),
(30, 6, 45, 45, 78, '53', 1, NULL, '2020-04-18 18:00:00', NULL),
(31, 6, 46, 46, 76, '5', 1, NULL, '2020-04-18 18:00:00', NULL),
(32, 6, 47, 47, 76, '5', 1, NULL, '2020-04-18 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `user_ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_ip`, `device`, `quantity`, `created_at`, `updated_at`) VALUES
(45, 87, '127.0.0.1', '00-FF-99-45-29-DF', 1, '2020-04-23 09:03:25', NULL),
(46, 86, '127.0.0.1', '00-FF-99-45-29-DF', 1, '2020-04-25 18:54:21', NULL),
(47, 87, '127.0.0.1', '00-FF-99-45-29-DF', 1, '2020-04-26 17:48:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'casual', '2020-01-21 16:26:38', NULL, NULL),
(52, 'Watch', '2020-04-13 03:59:26', NULL, NULL),
(53, 'women', '2020-04-19 14:45:50', NULL, NULL),
(54, 'men', '2020-04-19 15:05:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_code`, `color_name`, `created_at`, `updated_at`) VALUES
(1, '#000000', 'black', '2020-01-26 09:15:19', NULL),
(2, '#00ff00', 'green', '2020-01-26 09:16:45', NULL),
(4, '#004080', 'Blue', '2020-02-20 13:15:59', NULL),
(5, '#c4bd3c', 'Gold', '2020-02-20 13:22:55', NULL),
(6, '#f5f5f5', 'white', '2020-04-13 04:00:58', NULL),
(8, '#ff8080', 'red', '2020-04-19 15:07:16', NULL),
(9, '#c0c0c0', 'ash', '2020-04-19 15:07:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_start` timestamp NULL DEFAULT NULL,
  `coupon_ends` timestamp NULL DEFAULT NULL,
  `coupon_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_code`, `coupon_start`, `coupon_ends`, `coupon_discount`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'Dhaka50', '2020-04-10 18:00:00', '2020-04-21 18:00:00', '50', '2020-03-31 18:00:00', '2020-03-31 18:00:00'),
(2, 'Khulna', 'Khulna30', '2020-04-03 18:00:00', '2020-04-30 17:59:59', '30', '2020-03-31 18:00:00', '2020-03-31 18:00:00');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2020_01_16_110534_create_categories_table', 1),
(13, '2020_01_25_220350_create_sub_categories_table', 2),
(16, '2020_01_26_132247_create_colors_table', 3),
(17, '2020_01_26_132339_create_sizes_table', 3),
(21, '2020_01_26_200225_create_products_table', 4),
(22, '2020_02_15_150732_create_product_images_table', 5),
(23, '2020_02_27_201716_create_product_colors_table', 6),
(25, '2020_03_22_200310_create_carts_table', 7),
(28, '2020_04_04_143039_create_coupons_table', 8),
(32, '2020_04_06_202254_create_countries_table', 9),
(33, '2020_04_06_202325_create_states_table', 9),
(34, '2020_04_06_202406_create_cities_table', 9),
(35, '2020_04_08_154959_create_shippings_table', 10),
(36, '2020_04_08_155521_create_sales_table', 10),
(37, '2020_04_08_155649_create_billings_table', 10),
(38, '2020_04_22_211209_create_product_reviews_table', 11);

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
('marveljannat@gmail.com', '$2y$10$H2nlRcz0ZeHZUoulJdVeZOUBYV5hR3ZKPoFnQIjW3ZVTAIBbGO7JS', '2020-03-22 06:36:58'),
('aa91898@gmail.com', '$2y$10$cXF3RDYXatud1YbSVFlgNuKwRy5wg/XXXdmGsheEHvYZFXrMNtSry', '2020-03-22 06:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_alert` int(11) DEFAULT NULL,
  `product_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_slug`, `product_code`, `product_summary`, `product_description`, `product_color`, `product_size`, `product_price`, `product_thumbnail`, `product_quantity`, `category_id`, `subcategory_id`, `product_alert`, `product_tags`, `created_at`, `updated_at`) VALUES
(76, 'Autometic watch', 'autometic-watch', '6KirQxtp5o', 'adsafdadfadfs', 'asffafas', '[\"1\",\"5\",\"6\"]', 'null', 5, 'autometic.jpg', 84, 52, '[\"9\"]', 10, '[\"1\"]', '2020-04-13 04:54:58', '2020-04-16 16:11:51'),
(77, 'ahsan', 'ahsan', 'JJe6II3WwW', 'dfgdg', 'dfgdg', '[\"1\"]', '[\"1\",\"5\",\"6\"]', 1, '1.jpg', -6, 52, '[\"7\"]', 5, '[\"g\"]', '2020-04-13 04:56:40', '2020-04-16 14:54:30'),
(78, 'janina', 'janina', '0d1tIy05ON', 'sadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas f', 'sadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas fsadsafdas asfsafasf asffaffg asfsafas f', '[\"1\",\"5\",\"6\"]', '[\"l\",\"ll\",\"xxl\"]', 5, 'janina.jpg', 200, 53, '[\"2\"]', 9, '[\"j,f,o\"]', '2020-04-13 08:55:18', '2020-04-16 14:57:15'),
(79, 'Blue Saari', 'blue-saari', 'nSnkNVYN7U', 'saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari', 'saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari saari', '[\"4\",\"6\"]', '[\"xl\"]', 6, 'blue-saari.jpg', 100, 53, '[\"11\"]', 8, '[\"a,d,f\"]', '2020-04-19 14:46:29', NULL),
(81, 'Gown', 'gown', 'WSgzgadnlX', 'Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown', 'Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown Gown', '[\"1\",\"5\",\"3\",\"6\"]', '[\"l\",\"m\",\"xl\"]', 9, 'gown.jpg', 100, 53, 'null', 8, '[\"s,l\"]', '2020-04-19 14:47:41', NULL),
(82, 'dress', 'dress', 'YmBLyEKrH4', 'dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress', 'dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress dress', '[\"1\",\"2\",\"6\"]', '[\"l\",\"m\",\"xl\"]', 9, 'dress.jpg', 60, 53, 'null', 3, '[\"a,s,l\"]', '2020-04-19 14:48:48', NULL),
(83, 'tops and jeans', 'tops-and-jeans', 'AcgK0M67Og', 'tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans', 'tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans tops and jeans', '[\"1\",\"4\",\"6\"]', '[\"l\",\"m\"]', 7, 'tops-and-jeans.jpg', 12, 53, '[\"12\"]', 8, '[\"tops,jeans\"]', '2020-04-19 14:56:19', NULL),
(85, 'Net Saari', 'net-saari', '7eKpjbeNgg', 'Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari', 'Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari Net Saari', '[\"1\",\"5\",\"6\"]', '[\"xl\"]', 8, 'net-saari.jpg', 91, 53, '[\"11\"]', 12, '[\"black,saaari,naari\"]', '2020-04-19 14:57:30', NULL),
(86, 't shirt', 't-shirt', '5bOaYmtvOF', 't shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt', 't shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt', '[\"2\",\"6\"]', '[\"l\",\"m\"]', 1, 't-shirt.jpg', 100, 54, '[\"13\"]', 7, '[\"men,tshirt\"]', '2020-04-19 15:06:02', NULL),
(87, 't shirt 2', 't-shirt-2', '5AaFyYAHdA', 't shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt', 't shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt t shirt', '[\"9\",\"1\",\"4\",\"8\",\"6\"]', '[\"l\",\"m\"]', 8, 't-shirt-2.jpg', 100, 54, '[\"13\"]', 9, '[\"t shirt,men\"]', '2020-04-19 15:08:12', NULL),
(88, 't shirt 3', 't-shirt-3', 'SqMHevCpuh', 't shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3', 't shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3 t shirt 3', '[\"1\",\"6\"]', '[\"l\",\"m\"]', 6, 't-shirt-3.jpg', 180, 54, '[\"13\"]', 10, '[\"tshirt\"]', '2020-04-19 15:09:09', NULL),
(89, 't shirt 4', 't-shirt-4', 'T0AJXXLiv0', 't shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4', 't shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4', '[\"1\",\"6\"]', '[\"l\",\"m\"]', 4, 't-shirt-4.jpg', 100, 54, '[\"13\"]', 12, '[\"tshirt\"]', '2020-04-19 15:10:26', NULL),
(90, 't shirt 4', 't-shirt-4', 'i4EMvcRtvD', 't shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4', 't shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4 t shirt 4', '[\"1\",\"4\"]', '[\"l\",\"m\"]', 6, 't-shirt-4.jpg', 59, 54, '[\"13\"]', 8, '[null]', '2020-04-19 15:11:24', NULL),
(91, 't shirt 5', 't-shirt-5', 'XLLtKURqWI', 't shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5', 't shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5 t shirt 5', '[\"9\",\"4\",\"6\"]', '[\"l\",\"m\"]', 8, 't-shirt-5.jpg', 46, 54, '[\"13\"]', 9, '[\"tshirt\"]', '2020-04-19 15:12:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `color_id` bigint(20) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `quantity`, `created_at`, `updated_at`) VALUES
(4, 62, 1, 7, '2020-03-01 15:53:06', NULL),
(5, 62, 5, 7, '2020-03-01 15:53:06', NULL),
(6, 63, 1, 7, '2020-03-01 15:54:37', NULL),
(7, 63, 5, 7, '2020-03-01 15:54:37', NULL),
(8, 64, 1, 2, '2020-03-01 15:58:42', NULL),
(9, 64, 5, 2, '2020-03-01 15:58:42', NULL),
(10, 65, 1, 100, '2020-04-13 04:03:21', NULL),
(11, 65, 4, 100, '2020-04-13 04:03:21', NULL),
(12, 65, 6, 100, '2020-04-13 04:03:21', NULL),
(13, 66, 1, 6, '2020-04-13 04:43:38', NULL),
(14, 68, 1, 5, '2020-04-13 04:44:10', NULL),
(15, 76, 1, 100, '2020-04-13 04:54:58', NULL),
(16, 76, 5, 100, '2020-04-13 04:54:58', NULL),
(17, 76, 6, 100, '2020-04-13 04:54:58', NULL),
(18, 77, 1, 8, '2020-04-13 04:56:40', NULL),
(19, 78, 1, 210, '2020-04-13 08:55:18', NULL),
(20, 78, 5, 210, '2020-04-13 08:55:18', NULL),
(21, 78, 6, 210, '2020-04-13 08:55:18', NULL),
(22, 79, 4, 100, '2020-04-19 14:46:29', NULL),
(23, 79, 6, 100, '2020-04-19 14:46:29', NULL),
(24, 81, 1, 100, '2020-04-19 14:47:41', NULL),
(25, 81, 5, 100, '2020-04-19 14:47:41', NULL),
(26, 81, 3, 100, '2020-04-19 14:47:41', NULL),
(27, 81, 6, 100, '2020-04-19 14:47:41', NULL),
(28, 82, 1, 60, '2020-04-19 14:48:48', NULL),
(29, 82, 2, 60, '2020-04-19 14:48:48', NULL),
(30, 82, 6, 60, '2020-04-19 14:48:48', NULL),
(31, 83, 1, 12, '2020-04-19 14:56:19', NULL),
(32, 83, 4, 12, '2020-04-19 14:56:19', NULL),
(33, 83, 6, 12, '2020-04-19 14:56:19', NULL),
(34, 85, 1, 91, '2020-04-19 14:57:30', NULL),
(35, 85, 5, 91, '2020-04-19 14:57:30', NULL),
(36, 85, 6, 91, '2020-04-19 14:57:30', NULL),
(37, 86, 2, 100, '2020-04-19 15:06:02', NULL),
(38, 86, 6, 100, '2020-04-19 15:06:02', NULL),
(39, 87, 9, 100, '2020-04-19 15:08:12', NULL),
(40, 87, 1, 100, '2020-04-19 15:08:12', NULL),
(41, 87, 4, 100, '2020-04-19 15:08:12', NULL),
(42, 87, 8, 100, '2020-04-19 15:08:12', NULL),
(43, 87, 6, 100, '2020-04-19 15:08:12', NULL),
(44, 88, 1, 180, '2020-04-19 15:09:09', NULL),
(45, 88, 6, 180, '2020-04-19 15:09:09', NULL),
(46, 89, 1, 100, '2020-04-19 15:10:26', NULL),
(47, 89, 6, 100, '2020-04-19 15:10:26', NULL),
(48, 90, 1, 59, '2020-04-19 15:11:24', NULL),
(49, 90, 4, 59, '2020-04-19 15:11:24', NULL),
(50, 91, 9, 46, '2020-04-19 15:12:11', NULL),
(51, 91, 4, 46, '2020-04-19 15:12:11', NULL),
(52, 91, 6, 46, '2020-04-19 15:12:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `created_at`, `updated_at`) VALUES
(13, 49, '/assets/images/shop/multiple/ahsan9gVI7.jpg', '2020-02-15 15:32:34', NULL),
(14, 49, '/assets/images/shop/multiple/ahsandOnKT.jpg', '2020-02-15 15:32:34', NULL),
(15, 49, '/assets/images/shop/multiple/ahsanMJhv5.jpg', '2020-02-15 15:32:34', NULL),
(17, 50, '/assets/images/shop/multiple/amiyTqKu.jpg', '2020-02-16 17:34:27', NULL),
(18, 50, '/assets/images/shop/multiple/amilUVwZ.jpg', '2020-02-16 17:34:27', NULL),
(19, 51, '/assets/images/shop/multiple/saariOs76I.jpg', '2020-02-20 13:17:13', NULL),
(20, 51, '/assets/images/shop/multiple/saariuiaLq.jpg', '2020-02-20 13:17:13', NULL),
(21, 51, '/assets/images/shop/multiple/saarizAGxB.jpg', '2020-02-20 13:17:14', NULL),
(22, 52, '/assets/images/shop/multiple/salwar-kamijgzsIe.jpg', '2020-02-20 13:23:42', NULL),
(23, 52, '/assets/images/shop/multiple/salwar-kamijWb9Ca.jpg', '2020-02-20 13:23:42', NULL),
(24, 52, '/assets/images/shop/multiple/salwar-kamijezncL.jpg', '2020-02-20 13:23:42', NULL),
(25, 65, '/assets/images/shop/multiple/automatic-watchyzp16.jpg', '2020-04-13 04:03:22', NULL),
(26, 65, '/assets/images/shop/multiple/automatic-watchJ8wHp.jpg', '2020-04-13 04:03:22', NULL),
(27, 65, '/assets/images/shop/multiple/automatic-watch1pRpc.jpg', '2020-04-13 04:03:22', NULL),
(28, 77, '/assets/images/shop/multiple/fBg8W.jpg', '2020-04-13 04:56:40', NULL),
(29, 77, '/assets/images/shop/multiple/GQsXn.jpg', '2020-04-13 04:56:40', NULL),
(30, 77, '/assets/images/shop/multiple/8yiLU.jpg', '2020-04-13 04:56:40', NULL),
(31, 77, '/assets/images/shop/multiple/SFJ4r.jpg', '2020-04-13 04:56:40', NULL),
(32, 78, '/assets/images/shop/multiple/janinaTrm7l.jpg', '2020-04-13 08:55:18', NULL),
(33, 78, '/assets/images/shop/multiple/janinaiZhB0.jpg', '2020-04-13 08:55:18', NULL),
(34, 78, '/assets/images/shop/multiple/janinahrmEy.jpg', '2020-04-13 08:55:18', NULL),
(35, 79, '/assets/images/shop/multiple/blue-saari98CvL.jpg', '2020-04-19 14:46:29', NULL),
(36, 79, '/assets/images/shop/multiple/blue-saariENasv.jpg', '2020-04-19 14:46:30', NULL),
(37, 79, '/assets/images/shop/multiple/blue-saariQClD4.jpg', '2020-04-19 14:46:30', NULL),
(38, 81, '/assets/images/shop/multiple/gownxriXo.jpg', '2020-04-19 14:47:41', NULL),
(39, 81, '/assets/images/shop/multiple/gownhCf3w.jpg', '2020-04-19 14:47:41', NULL),
(40, 81, '/assets/images/shop/multiple/gownX9Hlw.jpg', '2020-04-19 14:47:41', NULL),
(41, 82, '/assets/images/shop/multiple/dressSNbxD.jpg', '2020-04-19 14:48:48', NULL),
(42, 82, '/assets/images/shop/multiple/dressQwI1B.jpg', '2020-04-19 14:48:49', NULL),
(43, 83, '/assets/images/shop/multiple/tops-and-jeansrs1ES.jpg', '2020-04-19 14:56:19', NULL),
(44, 83, '/assets/images/shop/multiple/tops-and-jeansVnQ8b.jpg', '2020-04-19 14:56:19', NULL),
(45, 83, '/assets/images/shop/multiple/tops-and-jeansK1enU.jpg', '2020-04-19 14:56:19', NULL),
(46, 85, '/assets/images/shop/multiple/net-saari1Mfq1.jpg', '2020-04-19 14:57:30', NULL),
(47, 86, '/assets/images/shop/multiple/t-shirt8GN7I.jpg', '2020-04-19 15:06:02', NULL),
(48, 86, '/assets/images/shop/multiple/t-shirtpcODQ.jpg', '2020-04-19 15:06:02', NULL),
(49, 87, '/assets/images/shop/multiple/t-shirt-2dx0Ey.jpg', '2020-04-19 15:08:12', NULL),
(50, 87, '/assets/images/shop/multiple/t-shirt-2rPZSy.jpg', '2020-04-19 15:08:12', NULL),
(51, 87, '/assets/images/shop/multiple/t-shirt-2AG8RI.jpg', '2020-04-19 15:08:13', NULL),
(52, 88, '/assets/images/shop/multiple/t-shirt-3IIfZ1.jpg', '2020-04-19 15:09:09', NULL),
(53, 88, '/assets/images/shop/multiple/t-shirt-3fqD06.jpg', '2020-04-19 15:09:09', NULL),
(54, 89, '/assets/images/shop/multiple/t-shirt-4QzrzE.jpg', '2020-04-19 15:10:26', NULL),
(55, 89, '/assets/images/shop/multiple/t-shirt-44jKsU.jpg', '2020-04-19 15:10:27', NULL),
(56, 90, '/assets/images/shop/multiple/t-shirt-4sgAie.jpg', '2020-04-19 15:11:24', NULL),
(57, 90, '/assets/images/shop/multiple/t-shirt-4o2EbH.jpg', '2020-04-19 15:11:24', NULL),
(58, 91, '/assets/images/shop/multiple/t-shirt-52JcO0.jpg', '2020-04-19 15:12:11', NULL),
(59, 91, '/assets/images/shop/multiple/t-shirt-5hnBQg.jpg', '2020-04-19 15:12:11', NULL),
(60, 91, '/assets/images/shop/multiple/t-shirt-5QSWyn.jpg', '2020-04-19 15:12:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `user_id`, `product_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 6, 87, '1.5', 'fdhdfxhxdfbd', '2020-04-22 15:24:11', NULL),
(2, 6, 87, '4', 'fdhdfxhxdfbd', '2020-04-22 15:24:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `shipping_id` bigint(20) DEFAULT NULL,
  `grand_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `shipping_id`, `grand_total`, `created_at`, `updated_at`) VALUES
(1, 6, 1, '25', '2020-04-19 18:00:00', NULL),
(2, 6, 2, '25', '2020-04-19 18:00:00', NULL),
(3, 6, 3, '25', NULL, NULL),
(4, 6, 4, '53', NULL, NULL),
(5, 6, 5, '53', NULL, NULL),
(6, 6, 6, '53', NULL, NULL),
(7, 6, 7, '53', NULL, NULL),
(8, 6, 8, '53', NULL, NULL),
(9, 6, 9, '53', NULL, NULL),
(10, 6, 10, '53', NULL, NULL),
(11, 6, 11, '53', NULL, NULL),
(12, 6, 12, '53', NULL, NULL),
(13, 6, 13, '53', NULL, NULL),
(14, 6, 14, '53', NULL, NULL),
(15, 6, 15, '53', NULL, NULL),
(16, 6, 16, '10', NULL, NULL),
(17, 6, 17, '5', NULL, NULL),
(18, 6, 18, '5', NULL, NULL),
(19, 6, 19, '5', NULL, NULL),
(20, 6, 20, '5', NULL, NULL),
(21, 6, 21, '5', NULL, NULL),
(22, 6, 22, '5', NULL, NULL),
(23, 6, 23, '5', NULL, NULL),
(24, 6, 24, '5', NULL, NULL),
(25, 6, 25, '5', NULL, NULL),
(26, 6, 26, '5', NULL, NULL),
(27, 6, 27, '5', NULL, NULL),
(28, 6, 28, '5', NULL, NULL),
(29, 6, 29, '5', NULL, NULL),
(30, 6, 30, '5', NULL, NULL),
(31, 6, 31, '5', NULL, NULL),
(32, 6, 32, '5', NULL, NULL),
(33, 6, 33, '5', NULL, NULL),
(34, 6, 34, '5', '2020-04-19 18:00:00', NULL),
(35, 6, 35, '5', NULL, NULL),
(36, 6, 36, '53', NULL, NULL),
(37, 6, 37, '73', NULL, NULL),
(38, 6, 38, '68', NULL, NULL),
(39, 6, 39, '73', '2020-04-19 18:00:00', NULL),
(40, 6, 40, '10', NULL, NULL),
(41, 6, 41, '83', '2020-04-17 18:00:00', NULL),
(42, 6, 42, '63', NULL, NULL),
(43, 6, 43, '63', NULL, NULL),
(44, 6, 44, '15', '2020-04-19 18:00:00', NULL),
(45, 6, 45, '58', '2020-04-18 18:00:00', NULL),
(46, 6, 46, '5', NULL, NULL),
(47, 6, 47, '5', '2020-04-18 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint(20) DEFAULT NULL,
  `state_id` bigint(20) DEFAULT NULL,
  `city_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `user_id`, `name`, `email`, `mobile`, `address`, `country_id`, `state_id`, `city_id`, `created_at`, `updated_at`) VALUES
(26, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'fg', NULL, NULL, NULL, '2020-04-16 13:49:56', NULL),
(27, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'fg', NULL, NULL, NULL, '2020-04-16 13:50:54', NULL),
(28, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'fg', NULL, NULL, NULL, '2020-04-16 13:53:16', NULL),
(29, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'fg', NULL, NULL, NULL, '2020-04-16 13:54:08', NULL),
(30, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'fg', NULL, NULL, NULL, '2020-04-16 13:55:00', NULL),
(31, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'fg', NULL, NULL, NULL, '2020-04-16 13:56:48', NULL),
(32, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'bjh', NULL, NULL, NULL, '2020-04-16 13:57:42', NULL),
(33, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'fxnhn', NULL, NULL, NULL, '2020-04-16 14:19:47', NULL),
(34, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'vhmvbmvbm', NULL, NULL, NULL, '2020-04-16 14:20:22', NULL),
(35, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'cn', NULL, NULL, NULL, '2020-04-16 14:20:59', NULL),
(36, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'dgh', NULL, NULL, NULL, '2020-04-16 14:24:59', NULL),
(37, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'cfgnc', NULL, NULL, NULL, '2020-04-16 14:40:55', NULL),
(38, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'fgjnfg', NULL, NULL, NULL, '2020-04-16 14:42:19', NULL),
(39, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'rdhdrhdrddd', NULL, NULL, NULL, '2020-04-16 14:45:13', NULL),
(40, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'sacf', NULL, NULL, NULL, '2020-04-16 14:48:06', NULL),
(41, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'dfhh', NULL, NULL, NULL, '2020-04-16 14:48:55', NULL),
(42, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'fgjfjdfj', NULL, NULL, NULL, '2020-04-16 14:51:30', NULL),
(43, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'cbf', NULL, NULL, NULL, '2020-04-16 14:52:42', NULL),
(44, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'gjkfvgjmfv', NULL, NULL, NULL, '2020-04-16 14:54:30', NULL),
(45, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'dfghdfhdfh', NULL, NULL, NULL, '2020-04-16 14:57:15', NULL),
(46, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'vbncncv', NULL, NULL, NULL, '2020-04-16 15:09:56', NULL),
(47, 6, 'Ahsan', 'aa91898@gmail.com', '01777519553', 'ikgguig', NULL, NULL, NULL, '2020-04-16 16:11:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size_name`, `created_at`, `updated_at`) VALUES
(1, 'm', '2020-02-25 18:00:00', NULL),
(2, 'll', '2020-02-16 18:00:00', NULL),
(3, 'xl', '2020-02-11 18:00:00', NULL),
(4, 'xxl', '2020-02-02 18:00:00', NULL),
(5, 'l', '2020-02-27 06:59:30', NULL),
(6, 'lk', '2020-02-27 07:00:09', NULL),
(7, 'kk', '2020-02-29 15:58:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `subCategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subCategory_name`, `created_at`, `updated_at`) VALUES
(1, 5, 'aa', '2020-01-25 17:32:32', '2020-01-25 17:32:32'),
(2, 2, 'diapar', '2020-01-25 17:32:42', '2020-01-25 17:32:42'),
(3, 3, 'jeans', '2020-01-25 17:32:56', '2020-01-25 17:32:56'),
(4, 5, 'jinnu', '2020-01-25 17:35:34', '2020-01-25 17:35:34'),
(5, 5, 'anguthi ka jinn', '2020-01-25 17:36:09', '2020-01-25 17:36:09'),
(6, 5, 'jinni mini', '2020-01-25 17:36:39', '2020-01-25 17:36:39'),
(7, 5, 'chacha', '2020-01-25 17:36:50', '2020-01-25 17:36:50'),
(8, 52, 'Men', '2020-04-13 03:59:36', '2020-04-13 03:59:36'),
(9, 52, 'Women', '2020-04-13 03:59:43', '2020-04-13 03:59:43'),
(10, 52, 'Unisex', '2020-04-13 03:59:54', '2020-04-13 03:59:54'),
(11, 53, 'saari', '2020-04-19 14:46:00', '2020-04-19 14:46:00'),
(12, 53, 'tops & jeans', '2020-04-19 14:56:02', '2020-04-19 14:56:02'),
(13, 54, 't shirt', '2020-04-19 15:05:29', '2020-04-19 15:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `provider`, `provider_id`, `image`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Jannatq', 'marveljannat@gmail.com', '', NULL, NULL, NULL, '2020-01-01 18:00:00', '$2y$10$NpFhOlZ1zM5UC3LXDJe.yONhFrV2rp2Le9P/WJbqd28QSjpxRAbJ6', NULL, NULL, '2020-01-25 07:44:21', '2020-01-25 07:44:21', NULL),
(6, 'Ahsan', 'aa91898@gmail.com', '01777519553', NULL, NULL, NULL, '2020-02-01 09:32:21', '$2y$10$AKa/B3t3rJa0do8HDVCgW.xRO4P4cVTP3d8IYKcCqzm4h0UXfM1gy', '1', 'Z7GpH07Ov1DJXEghCR8VwYsGxwUtnsCJewWWxJHIZN3AXH8SvVUQ8jHeH4HB', '2020-02-01 09:32:03', '2020-03-22 06:25:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
