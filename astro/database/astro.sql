-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2023 at 11:57 AM
-- Server version: 8.0.13
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Primary Menu', NULL, NULL),
(2, 'Mobile Primary Menu', '2023-11-23 21:47:47', '2023-11-23 21:47:47'),
(3, 'Footer navigation', '2023-12-07 01:40:44', '2023-12-07 01:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu_items`
--

CREATE TABLE `admin_menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu` bigint(20) UNSIGNED NOT NULL,
  `depth` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu_items`
--

INSERT INTO `admin_menu_items` (`id`, `label`, `link`, `parent`, `sort`, `class`, `menu`, `depth`, `created_at`, `updated_at`) VALUES
(1, 'HOME', '/', 0, 0, NULL, 1, 0, NULL, '2023-12-07 02:04:04'),
(2, 'ABOUT', '/page/about-us', 0, 1, NULL, 1, 0, '2023-11-23 21:38:53', '2023-12-07 01:58:51'),
(7, 'CONTACT', '/page/contact', 0, 2, NULL, 1, 0, '2023-11-23 21:39:46', '2023-12-07 02:18:43'),
(8, 'HOME', '#', 0, 1, NULL, 2, 0, '2023-11-23 21:47:56', '2023-11-23 21:47:56'),
(9, 'Home', '#', 0, 0, NULL, 3, 0, '2023-12-07 01:41:01', '2023-12-07 01:41:04'),
(10, 'About', '#', 0, 1, NULL, 3, 0, '2023-12-07 01:44:01', '2023-12-07 01:44:01'),
(11, 'FAQ', '#', 0, 2, NULL, 3, 0, '2023-12-07 01:45:58', '2023-12-07 01:45:58'),
(12, 'Farhad', '/page/about-us', 0, 3, NULL, 3, 0, '2023-12-22 02:14:43', '2023-12-22 02:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_type_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_type_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_cat_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_cat_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_in` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_out` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_paid_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_many_guest` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_notes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_information` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statuses` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `taxonomy_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_status` enum('publish','draft') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `parent_id`, `taxonomy_type`, `is_status`, `created_at`, `updated_at`) VALUES
(1, 'Notice Board', 'notice-board', 'Notice Board', NULL, NULL, 'post_category', 'publish', '2023-12-21 08:55:30', '2023-12-21 08:55:30'),
(2, 'Recent Projects', 'recent-projects', 'Recent Projects', NULL, NULL, 'post_category', 'publish', '2023-12-21 10:21:59', '2023-12-21 10:21:59'),
(3, 'In Media', 'in-media', NULL, NULL, NULL, 'post_category', 'publish', '2023-12-21 11:10:32', '2023-12-21 11:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `name` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` decimal(10,7) NOT NULL,
  `lon` decimal(10,7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`) VALUES
(1, 3, 'Dhaka', 'ঢাকা', 23.7115253, 90.4111451),
(2, 3, 'Faridpur', 'ফরিদপুর', 23.6070822, 89.8429406),
(3, 3, 'Gazipur', 'গাজীপুর', 24.0022858, 90.4264283),
(4, 3, 'Gopalganj', 'গোপালগঞ্জ', 23.0050857, 89.8266059),
(5, 8, 'Jamalpur', 'জামালপুর', 24.9375330, 89.9377750),
(6, 3, 'Kishoreganj', 'কিশোরগঞ্জ', 24.4449370, 90.7765750),
(7, 3, 'Madaripur', 'মাদারীপুর', 23.1641020, 90.1896805),
(8, 3, 'Manikganj', 'মানিকগঞ্জ', 23.8644000, 90.0047000),
(9, 3, 'Munshiganj', 'মুন্সিগঞ্জ', 23.5422000, 90.5305000),
(10, 8, 'Mymensingh', 'ময়মনসিংহ', 24.7471000, 90.4203000),
(11, 3, 'Narayanganj', 'নারায়াণগঞ্জ', 23.6336600, 90.4964820),
(12, 3, 'Narsingdi', 'নরসিংদী', 23.9322330, 90.7154100),
(13, 8, 'Netrokona', 'নেত্রকোণা', 24.8709550, 90.7278870),
(14, 3, 'Rajbari', 'রাজবাড়ি', 23.7574305, 89.6444665),
(15, 3, 'Shariatpur', 'শরীয়তপুর', 23.2423000, 90.4348000),
(16, 8, 'Sherpur', 'শেরপুর', 25.0204933, 90.0152966),
(17, 3, 'Tangail', 'টাঙ্গাইল', 24.2513000, 89.9167000),
(18, 5, 'Bogura', 'বগুড়া', 24.8465228, 89.3777550),
(19, 5, 'Joypurhat', 'জয়পুরহাট', 25.0968000, 89.0227000),
(20, 5, 'Naogaon', 'নওগাঁ', 24.7936000, 88.9318000),
(21, 5, 'Natore', 'নাটোর', 24.4205560, 89.0002820),
(22, 5, 'Nawabganj', 'নবাবগঞ্জ', 24.5965034, 88.2775122),
(23, 5, 'Pabna', 'পাবনা', 23.9985240, 89.2336450),
(24, 5, 'Rajshahi', 'রাজশাহী', 24.3745000, 88.6042000),
(25, 5, 'Sirajgonj', 'সিরাজগঞ্জ', 24.4533978, 89.7006815),
(26, 6, 'Dinajpur', 'দিনাজপুর', 25.6217061, 88.6354504),
(27, 6, 'Gaibandha', 'গাইবান্ধা', 25.3287510, 89.5280880),
(28, 6, 'Kurigram', 'কুড়িগ্রাম', 25.8054450, 89.6361740),
(29, 6, 'Lalmonirhat', 'লালমনিরহাট', 25.9923000, 89.2847000),
(30, 6, 'Nilphamari', 'নীলফামারী', 25.9317940, 88.8560060),
(31, 6, 'Panchagarh', 'পঞ্চগড়', 26.3411000, 88.5541606),
(32, 6, 'Rangpur', 'রংপুর', 25.7558096, 89.2444620),
(33, 6, 'Thakurgaon', 'ঠাকুরগাঁও', 26.0336945, 88.4616834),
(34, 1, 'Barguna', 'বরগুনা', 22.0953000, 90.1121000),
(35, 1, 'Barishal', 'বরিশাল', 22.7010000, 90.3535000),
(36, 1, 'Bhola', 'ভোলা', 22.6859230, 90.6481790),
(37, 1, 'Jhalokati', 'ঝালকাঠি', 22.6406000, 90.1987000),
(38, 1, 'Patuakhali', 'পটুয়াখালী', 22.3596316, 90.3298712),
(39, 1, 'Pirojpur', 'পিরোজপুর', 22.5841000, 89.9720000),
(40, 2, 'Bandarban', 'বান্দরবান', 22.1953275, 92.2183773),
(41, 2, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', 23.9570904, 91.1119286),
(42, 2, 'Chandpur', 'চাঁদপুর', 23.2332585, 90.6712912),
(43, 2, 'Chattogram', 'চট্টগ্রাম', 22.3351090, 91.8340730),
(44, 2, 'Cumilla', 'কুমিল্লা', 23.4682747, 91.1788135),
(45, 2, 'Cox\'s Bazar', 'কক্স বাজার', 21.4272000, 92.0058000),
(46, 2, 'Feni', 'ফেনী', 23.0159000, 91.3976000),
(47, 2, 'Khagrachari', 'খাগড়াছড়ি', 23.1192850, 91.9846630),
(48, 2, 'Lakshmipur', 'লক্ষ্মীপুর', 22.9424770, 90.8411840),
(49, 2, 'Noakhali', 'নোয়াখালী', 22.8695630, 91.0993980),
(50, 2, 'Rangamati', 'রাঙ্গামাটি', 22.7324000, 92.2985000),
(51, 7, 'Habiganj', 'হবিগঞ্জ', 24.3749450, 91.4155300),
(52, 7, 'Maulvibazar', 'মৌলভীবাজার', 24.4829340, 91.7774170),
(53, 7, 'Sunamganj', 'সুনামগঞ্জ', 25.0658042, 91.3950115),
(54, 7, 'Sylhet', 'সিলেট', 24.8897956, 91.8697894),
(55, 4, 'Bagerhat', 'বাগেরহাট', 22.6515680, 89.7859380),
(56, 4, 'Chuadanga', 'চুয়াডাঙ্গা', 23.6401961, 88.8418410),
(57, 4, 'Jashore', 'যশোর', 23.1664300, 89.2081126),
(58, 4, 'Jhenaidah', 'ঝিনাইদহ', 23.5448176, 89.1539213),
(59, 4, 'Khulna', 'খুলনা', 22.8157740, 89.5686790),
(60, 4, 'Kushtia', 'কুষ্টিয়া', 23.9012580, 89.1204820),
(61, 4, 'Magura', 'মাগুরা', 23.4873370, 89.4199560),
(62, 4, 'Meherpur', 'মেহেরপুর', 23.7622130, 88.6318210),
(63, 4, 'Narail', 'নড়াইল', 23.1725340, 89.5126720),
(64, 4, 'Satkhira', 'সাতক্ষীরা', 22.7185000, 89.0705000);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` decimal(9,6) NOT NULL,
  `lon` decimal(9,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `bn_name`, `lat`, `lon`) VALUES
(1, 'Barishal', 'বরিশাল', 22.701002, 90.353451),
(2, 'Chattogram', 'চট্টগ্রাম', 22.356851, 91.783182),
(3, 'Dhaka', 'ঢাকা', 23.810332, 90.412518),
(4, 'Khulna', 'খুলনা', 22.845641, 89.540328),
(5, 'Rajshahi', 'রাজশাহী', 24.363589, 88.624135),
(6, 'Rangpur', 'রংপুর', 25.743892, 89.275227),
(7, 'Sylhet', 'সিলেট', 24.894929, 91.868706),
(8, 'Mymensingh', 'ময়মনসিংহ', 24.747149, 90.420273);

-- --------------------------------------------------------

--
-- Table structure for table `frontend_settings`
--

CREATE TABLE `frontend_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_type` enum('Text','Textarea','Select','Richeditor','Number','Checkbox','Gallery','Media') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_group` enum('General','Homepage','Header Section','Footer Section') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_order` int(11) DEFAULT NULL,
  `meta_placeholder` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_settings`
--

INSERT INTO `frontend_settings` (`id`, `meta_title`, `meta_name`, `meta_value`, `meta_type`, `meta_group`, `meta_order`, `meta_placeholder`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Website Name', 'site_name', 'Telescope Bangladesh', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:28', '2023-12-21 08:51:18'),
(2, 'About website', 'site_description', 'Telescope Bangladesh', 'Textarea', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-12-21 08:51:18'),
(3, 'Favicon', 'site_faviconimg_id', NULL, 'Media', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-22 05:41:20'),
(4, 'Logo', 'site_logoimg_id', '64', 'Media', 'Header Section', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-12-21 08:27:24'),
(5, 'Footer Content', 'footer_content', 'Plot # Cha-2, Flat # 2nd Floor, Girza Road, Dhaka 1212', 'Richeditor', 'Footer Section', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-12-10 00:19:28'),
(6, 'Facebook', 'facebook_url', 'https://www.facebook.com/', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-24 00:32:54'),
(9, 'Youtube', 'youtube_url', NULL, 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2021-12-28 15:06:33'),
(10, 'Phone', 'company_phone', '16227', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-03-18 03:05:04'),
(11, 'Email', 'company_email', 'info@mail.com', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-03-18 03:05:04'),
(14, 'Header Menu Name', 'header_menu_name', 'Primary Menu', 'Text', 'Header Section', NULL, NULL, NULL, NULL, '2023-11-23 21:42:45'),
(17, 'Office location', 'office_location', 'Dhaka', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-03-18 03:24:36'),
(22, 'Home Vision Donate', 'home_vision_donate', '<h5>DONATION FOR OBSERVETORY & GROUP DEVELOPMENT</h5>\r\n<div class=\"info-sub mb-5\">By purchasing you help us develop new features!</div>', 'Textarea', 'Homepage', 2, NULL, '', '2021-12-27 17:33:29', '2023-12-21 11:42:34'),
(23, 'Home Vision Donate Link', 'home_vision_donate_link', 'http://localhost/farhad/astro/donate', 'Text', 'Homepage', 2, NULL, '', '2021-12-27 17:33:29', '2023-12-21 11:44:13'),
(29, 'Mobile Menu Name', 'mobile_menu_name', 'Mobile Primary Menu', 'Text', 'Header Section', NULL, NULL, NULL, NULL, '2021-12-28 15:22:50'),
(30, 'Bottom Footer Content', 'bottom_footer_content', 'Copyright © All rights reserved by&nbsp;Monghor Sajek', 'Richeditor', 'Footer Section', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-12-10 00:19:13'),
(35, 'Instagram', 'instagram_url', 'https://www.instagram.com/', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-24 00:32:54'),
(36, 'Twitter', 'twitter_url', 'https://twitter.com/', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-24 00:32:54'),
(37, 'LinkedIn', 'linkedin_url', 'https://www.linkedin.com/', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-24 00:44:23'),
(38, 'Vision Speech', 'vision_speech', '<p>\r\n                With more context, I can craft a compelling speech that captures the essence of Telescope Bangladesh and\r\n                its vision for the future of astronomy in Bangladesh\r\n            </p>\r\n            <p>We hope you will have as much fun exploring the universe with our app as do we while making it :)</p>', 'Textarea', 'Homepage', 1, NULL, '', '2021-12-27 17:33:29', '2023-12-21 11:47:13'),
(39, 'Partners', 'partners', '72,73,74,75,72,73,74,75', 'Text', 'Homepage', 1, NULL, '', '2021-12-27 17:33:29', '2023-12-21 11:01:57'),
(40, 'Vision Speech Section Title', 'vision_speech_section_title', '<h3>Our Vision :: Telescope Bangladesh</h3>', 'Text', 'Homepage', 1, NULL, '', '2021-12-27 17:33:29', '2023-08-22 05:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `original_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_directory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `user_id`, `original_name`, `filename`, `file_type`, `file_size`, `file_extension`, `file_directory`, `created_at`, `updated_at`) VALUES
(64, 1, 'header_logo.png', 'headerlogo-1703168834.png', 'image/png', '16951', 'png', '/public/uploads/images/', '2023-12-21 08:27:14', '2023-12-21 08:27:14'),
(65, 1, '1.jpg', '1-1703168937.jpg', 'image/jpeg', '382762', 'jpg', '/public/uploads/images/', '2023-12-21 08:28:57', '2023-12-21 08:28:57'),
(66, 1, '2.jpg', '2-1703168937.jpg', 'image/jpeg', '264489', 'jpg', '/public/uploads/images/', '2023-12-21 08:28:57', '2023-12-21 08:28:57'),
(67, 1, '3.jpg', '3-1703168937.jpg', 'image/jpeg', '261744', 'jpg', '/public/uploads/images/', '2023-12-21 08:28:57', '2023-12-21 08:28:57'),
(68, 1, 'background_model.jpg', 'backgroundmodel-1703170647.jpg', 'image/jpeg', '169367', 'jpg', '/public/uploads/images/', '2023-12-21 08:57:27', '2023-12-21 08:57:27'),
(69, 1, 'sss3_screenshot_01_s.jpg', 'sss3screenshot01s-1703170697.jpg', 'image/jpeg', '81836', 'jpg', '/public/uploads/images/', '2023-12-21 08:58:17', '2023-12-21 08:58:17'),
(70, 1, '84356.jpg', '84356-1703175787.jpg', 'image/jpeg', '591503', 'jpg', '/public/uploads/images/', '2023-12-21 10:23:07', '2023-12-21 10:23:07'),
(71, 1, '538180.jpg', '538180-1703175825.jpg', 'image/jpeg', '153234', 'jpg', '/public/uploads/images/', '2023-12-21 10:23:45', '2023-12-21 10:23:45'),
(72, 1, 'partner_1.png', 'partner1-1703177231.png', 'image/png', '2101', 'png', '/public/uploads/images/', '2023-12-21 10:47:11', '2023-12-21 10:47:11'),
(73, 1, 'partner_2.png', 'partner2-1703177231.png', 'image/png', '2107', 'png', '/public/uploads/images/', '2023-12-21 10:47:11', '2023-12-21 10:47:11'),
(74, 1, 'partner_3.png', 'partner3-1703177231.png', 'image/png', '2167', 'png', '/public/uploads/images/', '2023-12-21 10:47:11', '2023-12-21 10:47:11'),
(75, 1, 'partner_4.png', 'partner4-1703177231.png', 'image/png', '2184', 'png', '/public/uploads/images/', '2023-12-21 10:47:11', '2023-12-21 10:47:11'),
(76, 1, 'in_media.jpg', 'inmedia-1703178946.jpg', 'image/jpeg', '13079', 'jpg', '/public/uploads/images/', '2023-12-21 11:15:46', '2023-12-21 11:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_11_073824_create_menus_wp_table', 1),
(4, '2017_08_11_074006_create_menu_items_wp_table', 1),
(5, '2021_01_30_151530_create_medias_table', 1),
(6, '2021_02_08_225954_create_terms_table', 1),
(7, '2021_02_08_230957_create_posts_table', 1),
(8, '2021_02_09_195757_create_term_taxonomy_table', 1),
(9, '2021_02_09_203137_create_categories_table', 1),
(10, '2021_02_10_101053_create_frontend_settings', 1),
(11, '2021_07_14_054017_create_roles_table', 1),
(12, '2021_07_14_054544_create_role_users_table', 1),
(13, '2021_07_14_061139_create_route_groups_table', 1),
(14, '2021_07_14_061140_create_route_lists_table', 1),
(15, '2021_07_14_061655_create_route_list_roles_table', 1),
(18, '2021_12_24_235004_create_posts_field_table', 2),
(19, '2021_12_24_235502_create_posts_meta_table', 2),
(20, '2022_01_07_020302_create_post_custom_fields_table', 3),
(21, '2021_01_30_145239_create_product_categories_table', 4),
(22, '2021_01_30_150031_create_products_table', 4),
(23, '2021_02_17_222859_create_product_attributes_table', 4),
(24, '2021_02_17_223045_create_product_attribute_values_table', 4),
(25, '2023_12_09_180527_create_bookings_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `featured_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page',
  `category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keyword` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_status` enum('publish','draft') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'publish',
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `sub_title`, `order_by`, `slug`, `description`, `featured_image`, `term_type`, `category_id`, `meta_title`, `meta_description`, `meta_keyword`, `meta_author`, `template`, `is_status`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to Telescope Bangladesh', NULL, '1', 'welcome-to-telescope-bangladesh', 'Welcome to Telescope Bangladesh', '65', 'slider', '', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 08:30:05', '2023-12-21 08:30:05'),
(2, 'Another Welcome to Telescope Bangladesh', NULL, '2', 'another-welcome-to-telescope-bangladesh', 'Another Welcome to Telescope Bangladesh', '66', 'slider', '', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 08:30:36', '2023-12-21 08:30:36'),
(3, 'Telescope Bangladesh welcome notes', NULL, '3', 'telescope-bangladesh-welcome-notes', 'Telescope Bangladesh welcome notes', '67', 'slider', '', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 08:31:09', '2023-12-21 08:31:09'),
(4, 'The Ursid meteor shower peaks tonight (December 22nd)', NULL, NULL, 'the-ursid-meteor-shower-peaks-tonight-december-22nd-', 'The Ursid meteor shower peaks tonight (December 22nd)! Look for fast, bright streaks across the sky near the constellation Ursa Minor.', '68', 'post', '1', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 08:57:39', '2023-12-21 08:57:39'),
(5, 'The James Webb Space Telescope recently', NULL, NULL, 'the-james-webb-space-telescope-recently', 'The James Webb Space Telescope recently captured stunning images of the Cartwheel Galaxy, revealing its intricate structure in unprecedented detail.', '69', 'post', '1', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 08:58:24', '2023-12-21 08:58:24'),
(6, 'Bangladeshi Taka', NULL, NULL, 'bangladeshi-taka', 'Bangladeshi Taka', '66', 'post', '1', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 09:23:52', '2023-12-21 09:23:52'),
(7, 'Project 1', NULL, NULL, 'project-1', 'Project 1', '70', 'post', '2', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 10:23:21', '2023-12-21 10:23:21'),
(8, 'Project 2', NULL, NULL, 'project-2', 'Project 2', '71', 'post', '2', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 10:23:51', '2023-12-21 10:23:57'),
(9, 'Project 3', NULL, NULL, 'project-3', 'Project 3', '70', 'post', '2', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 10:24:37', '2023-12-21 10:24:37'),
(10, 'Project 4', NULL, NULL, 'project-4', 'Project 4', '68', 'post', '2', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 10:29:04', '2023-12-21 10:29:04'),
(11, 'Prothom Alo News', NULL, NULL, 'prothom-alo-news', 'Prothom Alo News', '76', 'post', '3', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 11:16:05', '2023-12-21 11:16:05'),
(12, 'Daily Kaler Kantho', NULL, NULL, 'daily-kaler-kantho', 'Daily Kaler Kantho', '76', 'post', '3', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 11:16:58', '2023-12-21 11:16:58'),
(13, 'Daily Ittefaq', NULL, NULL, 'daily-ittefaq', 'Daily Ittefaq', '76', 'post', '3', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-21 11:17:31', '2023-12-21 11:17:34'),
(14, 'About Us', NULL, NULL, 'about-us', NULL, NULL, 'page', '', NULL, NULL, NULL, NULL, 'single-page', 'publish', '1', '2023-12-21 11:52:24', '2023-12-22 02:28:39'),
(15, 'Donate', NULL, NULL, 'donate', '<div style=\"width:1230px;max-width:100%;margin:auto;\">    \r\n		<div class=\"row\">      \r\n			<div class=\"col-lg-6 text-center mb-4 pb-3\">        \r\n				<div class=\"donate-bg-property d-flex flex-column align-items-start justify-content-center\"> <span class=\"i_icon_support\"><img src=\"/images/icon/support_icon.png\"></span>          \r\n					<div class=\"donate_icon_text text-left\">            \r\n						<h4>RASC</h4>            \r\n						<p>Support the Society’s charitable programs</p>            \r\n						<div class=\"donate_now_btn\"> <a href=\"/donations/donate\">Donate now</a> </div>          </div>        </div>      </div>      \r\n			<div class=\"col-lg-6 text-center mb-4 pb-3\">        \r\n				<div class=\"donate-bg-property d-flex flex-column align-items-start justify-content-center\"> <span class=\"i_icon_support\"><img src=\"/images/icon/telescope_icon.png\"></span>          \r\n					<div class=\"donate_icon_text text-left\">            \r\n						<h4>Dorner Telescope Museum</h4>            \r\n						<p>Help build Canada\'s telescope museum with your gift.</p>            \r\n						<div class=\"donate_now_btn\"> <a href=\"/donations/dorner-telescope-museum\">Donate now</a> </div>          </div>        </div>      </div>    </div>    \r\n		<div class=\"row\">      \r\n			<div class=\"col-lg-6 text-center mb-4 pb-3\">        \r\n				<div class=\"donate-bg-property d-flex flex-column align-items-start justify-content-center\"> <span class=\"i_icon_support\"><img src=\"/images/icon/sky_icon.png\"></span>          \r\n					<div class=\"donate_icon_text text-left\">            \r\n						<h4>Light Pollution &amp; Dark Sky Preserves </h4>            \r\n						<p>Contribute to Light-Pollution Abatement and Canada\'s Dark Sky programs.</p>            \r\n						<div class=\"donate_now_btn\"> <a href=\"/donations/light-pollution\">Donate now</a> </div>          </div>        </div>      </div>      \r\n			<div class=\"col-lg-6 text-center mb-4 pb-3\">        \r\n				<div class=\"donate-bg-property d-flex flex-column align-items-start justify-content-center\"> <span class=\"i_icon_support\"><img src=\"/images/icon/robotic_icon.png\"></span>          \r\n					<div class=\"donate_icon_text text-left\">            \r\n						<h4>Robotic Telescope  Project</h4>            \r\n						<p>Provide students with remote access to the deep-sky</p>            \r\n						<div class=\"donate_now_btn\">This program has ended.</div>          </div>        </div>      </div>    </div>\r\n		<div class=\"row\">      \r\n			<div class=\"col-lg-6 text-center mb-5\">        \r\n				<div class=\"donate-bg-property d-flex flex-column align-items-start justify-content-center\"> <span class=\"i_icon_support\"><img src=\"/images/icon/education_icon.png\"></span>          \r\n					<div class=\"donate_icon_text text-left\">            \r\n						<h4>Education</h4>            \r\n						<p>Make a donation to the Ruth Northcott Education Fund</p>            \r\n						<div class=\"donate_now_btn\"> <a href=\"/donations/education\">Donate now</a> </div>          </div>        </div>      </div>      \r\n			<div class=\"col-lg-6 text-center mb-4 pb-3\">        \r\n				<div class=\"donate-bg-property d-flex flex-column align-items-start justify-content-center\"> <span class=\"i_icon_support\"><img src=\"/images/icon/legacy_icon.png\"></span>          \r\n					<div class=\"donate_icon_text text-left\">            \r\n						<h4>Legacy</h4>            \r\n						<p>Arrange your future gift in support of astronomy</p>            \r\n						<div class=\"donate_now_btn\"> <a href=\"/donations/legacy-fund\">Donate now</a> </div>          </div>        </div>      </div>    </div>    \r\n      		<div class=\"d-flex justify-content-end\">          <small style=\" color: #fff;text-align: right;padding-bottom: 20px;font-size:100%;\">©2021 The Royal Canadian Astronomical Society of Canada</small>        </div>     \r\n      \r\n		<div class=\"donate-info-text text-white text-center pb-0 pb-md-4\" style=\"font-size:1.3rem;\">      \r\n			<!--\r\n			div class=\"text-center mt-3 mt-md-5 pt-4 pt-md-5 mb-4 mb-md-5\"><img src=\"/images/icon/donate_info.png\" /></div\r\n			-->\r\n			Thank you for supporting the charitable activities of The Royal Astronomical Society of Canada.  RASC’s charitable registration number is 119126282 RR0001. If you have questions or would like more information, please contact Jenna Hinds at 416-924-7973 ext 119, or by email at <span style=\"color: rgb(255, 255, 255);\"><a href=\"mailto:jenna.hinds@rasc.ca\" class=\"\">jenna.hinds@rasc.ca</a>.</span></div></div>', NULL, 'page', '', NULL, NULL, NULL, NULL, 'single-page-without-header', 'publish', '1', '2023-12-22 00:34:07', '2023-12-22 00:41:20'),
(16, 'Farhad ke dekhassi', NULL, NULL, 'farhad-ke-dekhassi', 'Farhad ke dekhassi', '70', 'post', '1', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-12-22 02:08:06', '2023-12-22 02:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `posts_field`
--

CREATE TABLE `posts_field` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sorting` int(11) DEFAULT NULL,
  `term_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_taxonomy_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_type` enum('text','textarea','richtext','select','single_image','multiple_image','checkbox','radio','colorpicker','addmore','daterangepicker') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_type_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'Title:field_type#value1,value2|',
  `field_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_value` varbinary(255) DEFAULT NULL,
  `join_table` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_column` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `html_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `html_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_for` enum('Post','Category') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_field`
--

INSERT INTO `posts_field` (`id`, `sorting`, `term_type`, `term_taxonomy_type`, `field_type`, `field_type_value`, `field_title`, `field_name`, `field_value`, `join_table`, `join_column`, `html_id`, `html_class`, `note`, `field_for`, `created_at`, `updated_at`) VALUES
(1, NULL, 'post', NULL, 'text', NULL, 'Custom URL', 'custom_url', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts_meta`
--

CREATE TABLE `posts_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `meta_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_meta`
--

INSERT INTO `posts_meta` (`id`, `post_id`, `category_id`, `meta_name`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, 11, NULL, 'custom_url', 'https://www.prothomalo.com/world/europe/42azkj0kjf', '2023-12-21 11:16:05', '2023-12-21 11:16:05'),
(2, 12, NULL, 'custom_url', 'https://www.kalerkantho.com/online/world/2023/12/21/1347638', '2023-12-21 11:16:58', '2023-12-21 11:16:58'),
(3, 13, NULL, 'custom_url', 'https://www.ittefaq.com.bd/671144/স্বতন্ত্র-ও-নৌকার-প্রার্থীর-কর্মীদের-আহত-করার', '2023-12-21 11:17:31', '2023-12-21 11:17:31'),
(4, 16, NULL, 'custom_url', NULL, '2023-12-22 02:08:06', '2023-12-22 02:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `post_custom_fields`
--

CREATE TABLE `post_custom_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `field_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `field_for` enum('Post','Category') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_custom_fields`
--

INSERT INTO `post_custom_fields` (`id`, `post_id`, `category_id`, `field_file`, `field_value`, `field_for`, `created_at`, `updated_at`) VALUES
(2, 72, NULL, 'field-management', '{\"location\":\"Dhaka\"}', 'Post', '2023-12-07 03:10:47', '2023-12-07 03:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Global','General','Custom') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `code`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super_admin', 'Global', '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(2, 'User', 'user', 'General', '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(3, 'Instructor', 'instructor', 'General', '2021-12-27 17:33:29', '2021-12-27 17:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(2, 3, 3, '2021-12-29 17:35:59', '2021-12-29 17:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `route_groups`
--

CREATE TABLE `route_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route_lists`
--

CREATE TABLE `route_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_parameter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_group` bigint(20) UNSIGNED DEFAULT NULL,
  `route_icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_order` int(11) DEFAULT NULL,
  `route_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_menu` enum('Yes','No') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_menu_id` int(11) DEFAULT NULL,
  `dashboard_position` set('Left','Right','Top','Bottom') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_for` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_show_as` enum('Yes','No') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route_list_roles`
--

CREATE TABLE `route_list_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `show_as` enum('All','User','Permission') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_field` set('title','slug','description','featured-image') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('publish','draft') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `name`, `slug`, `default_field`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Post', 'post', 'title,slug,description,featured-image', 'publish', '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(2, 'Page', 'page', 'title,slug,description,featured-image', 'publish', '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(3, 'Slider', 'slider', 'title,slug,description,featured-image', 'publish', '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(4, 'Gallery', 'gallery', 'title,slug,description,featured-image', 'publish', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `term_taxonomy`
--

CREATE TABLE `term_taxonomy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('publish','draft') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `term_taxonomy`
--

INSERT INTO `term_taxonomy` (`id`, `name`, `slug`, `type`, `term_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Categories', 'post_category', NULL, 'post', 'publish', '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(2, 'Categories', 'slider_category', NULL, 'slider', NULL, '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(3, 'Property Type', 'property_type', NULL, 'property_manage', 'publish', '2021-12-27 17:33:29', '2021-12-27 17:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` enum('Male','Female') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `email_verified_at`, `phone`, `avatar`, `address`, `postcode`, `thana`, `district`, `birthdate`, `gender`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr Super Admin', 'Mr Super', 'Admin', 'admin@system.com', NULL, '00000000000', NULL, 'N/A', 'N/A', 'N/A', '1', '2021-12-08', NULL, '$2y$10$tWhlq1ma.y/f3Ui30qy8cONc5hCG/6GlaSsWxSowMoc7bZdklk0wC', 'GEZgSWdzVMMUgPotrAlXxUK1vbc1baNsZQrI5IBEsvdSkju4UVoA3OMlYA8P', '2021-12-27 17:33:29', '2022-01-07 17:17:59'),
(3, 'Noushad Nipun', 'Noushad', 'Nipun', 'nipunnoushad8@gmail.com', NULL, '01823633792', NULL, '74, East Tejturi Bazar, Tejgoan', '1215', 'Dhaka', NULL, '2022-01-01', NULL, '$2y$10$9zer8D8yLLB0oc3rVJ/VYOkIBKESpSclt613s5IlXe.8cPpz452MW', NULL, '2021-12-29 17:35:59', '2021-12-31 16:21:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_menu_items_menu_foreign` (`menu`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend_settings`
--
ALTER TABLE `frontend_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_field`
--
ALTER TABLE `posts_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_meta`
--
ALTER TABLE `posts_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_custom_fields`
--
ALTER TABLE `post_custom_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_groups`
--
ALTER TABLE `route_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_lists`
--
ALTER TABLE `route_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_list_roles`
--
ALTER TABLE `route_list_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_taxonomy`
--
ALTER TABLE `term_taxonomy`
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
-- AUTO_INCREMENT for table `admin_menus`
--
ALTER TABLE `admin_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `frontend_settings`
--
ALTER TABLE `frontend_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts_field`
--
ALTER TABLE `posts_field`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts_meta`
--
ALTER TABLE `posts_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_custom_fields`
--
ALTER TABLE `post_custom_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `route_groups`
--
ALTER TABLE `route_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route_lists`
--
ALTER TABLE `route_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route_list_roles`
--
ALTER TABLE `route_list_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `term_taxonomy`
--
ALTER TABLE `term_taxonomy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
